<?php
class Ccc_Ticket_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            echo 5;
        }
        $this->loadLayout();
        $this->renderLayout();
    }
    protected function _validateFormKey()
    {
        return true;
    }
    public function ticketAction()
    {
        $data = json_decode($this->getRequest()->getParam('data'));
        $ticket = [
            'description' => $data->description,
            'title' => $data->title,
            'priority' => $data->priority,
            'status' => $data->status,
            'assigned_user' => $data->assigned_user,
            'assigned_by' => $data->assigned_by
        ];
        Mage::getModel('ticket/ticket')->setData($ticket)->save();
    }
    public function viewAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function changeAction()
    {
        $data = json_decode($this->getRequest()->getParam('data'));
        Mage::getModel('ticket/ticket')->setData([
            'id' => $data->id,
            $data->field => $data->value
        ])->save();
    }
    public function saveTicketAction()
    {
        $data = $this->getRequest()->getPost();
        if (isset($data['description'])) {
            $data['description'] = strip_tags($data['description']);
        }
        $id = $this->getRequest()->getParam('id');
        $data['id'] = $id;
        $ticket = Mage::getModel('ticket/ticket')->setData($data);
        $ticket->save();
        $this->_redirect('*/*/view', array('id' => $ticket->getId()));
    }
    public function loadCommentsAction()
    {
        $data = $this->getRequest()->getParam('data');
        $comments = Mage::getModel('ticket/comments')->getCollection()->addFieldToFilter('ticket_id', $data)->getData();
        $this->getResponse()->setHeader('Content-type', 'application/json');
        $this->getResponse()->setBody(json_encode($comments));
    }
    public function commentAction()
    {
        $reply = Mage::helper('core')->jsonDecode($this->getRequest()->getParam('data'));
        $comment = Mage::getModel('ticket/comments')->setData($reply)->save();
        $this->getResponse()->setBody($comment->getId());
    }
    public function getFilteredGridHtml($filters)
    {
        $block = $this->getLayout()->createBlock('ticket/ticket_grid')
            ->setFilters($filters);

        return $block->toHtml();
    }
    public function filterAction()
    {
        $filters = json_decode($this->getRequest()->getParam('data'));
        $name = $filters->name;

        foreach ($filters as $key => $value) {
            if ($key == 'name') {
                continue;
            }
            if (is_array($value)) {
                foreach ($value as $v) {
                    $data = [
                        'name' => $name,
                        'fields' => $key,
                        'value' => $v
                    ];
                    Mage::getModel('ticket/filters')->setData($data)->save();
                }
            } else {
                $data = [
                    'name' => $name,
                    'fields' => $key,
                    'value' => $value
                ];
                Mage::getModel('ticket/filters')->setData($data)->save();
            }
        }
    }
    public function applyFilterAction()
    {
        $filters = json_decode($this->getRequest()->getParam('data'));

        $filterName = $filters->name;
        $filterCollection = Mage::getModel('ticket/filters')->getCollection()
            ->addFieldToFilter('name', $filterName);

        $ticketCollection = Mage::getModel('ticket/ticket')->getCollection();

        foreach ($filterCollection as $filter) {
            $field = $filter->getFields();
            $value = $filter->getValue();
            if ($field == 'created_at') {
                $daysBack = (int)$value;
                $startDate = date('Y-m-d H:i:s', strtotime("-$daysBack days"));
                $endDate = date('Y-m-d H:i:s');
                $ticketCollection->addFieldToFilter('created_at', array('from' => $startDate, 'to' => $endDate));
            } elseif ($field == 'last_comment') {
                $user = Mage::getModel('admin/user')->getCollection()->addFieldToFilter('username', $value)->getFirstItem();
                $id = $user->getUserId();
                $admin = Mage::getSingleton('core/resource')->getTableName('admin/user');
                $commentCollection = Mage::getModel('ticket/comments')->getCollection()->addFieldToFilter('user_id', $id);
                $commentCollection->getSelect()
                    ->order('created_at DESC')
                    ->limit(1);
                $ticketId = $commentCollection->getFirstItem()->getTicketId();
                $ticketCollection->addFieldToFilter('id', $ticketId);
            } else {
                if (!empty($value)) {
                    $ticketCollection->addFieldToFilter($field, array('eq' => $value));
                }
            }
        }
        $html = $this->getLayout()->createBlock('ticket/adminhtml_ticket_grid')
            ->setFilteredData($ticketCollection)
            ->toHtml();
        $this->getResponse()->setBody($html);
    }
    public function lockAction()
    {
        $lock = Mage::helper('core')->jsonDecode($this->getRequest()->getParam('data'));
        foreach ($lock as $_lock) {
            Mage::getModel('ticket/comments')->setData($_lock)->save();
        }
    }
    public function visibleAction()
    {
        $block = $this->getLayout()->createBlock('ticket/adminhtml_comment');
        $blockHtml = $block->toHtml();

        $this->getResponse()->setBody($blockHtml);
    }
    public function completeAction()
    {
        $data = Mage::helper('core')->jsonDecode($this->getRequest()->getParam('data'));
        $commentId = $data['id'];
        $ticketId = $data['ticket_id'];
        $this->completeCommentAndParents($commentId);
    }

    public function completeCommentAndParents($commentId)
    {
        $commentModel = Mage::getModel('ticket/comments');
        $comment = $commentModel->load($commentId);
        if ($comment->getId()) {
            $comment->setComplete(1);
            $comment->save();

            $parentId = $comment->getParentId();
            if ($parentId) {
                if ($this->areAllChildrenComplete($parentId)) {
                    $this->completeCommentAndParents($parentId);
                }
            }
        }
    }
    public function areAllChildrenComplete($parentId)
    {   //echo 123;
        $commentModel = Mage::getModel('ticket/comments');
        $children = $commentModel->getCollection()
            ->addFieldToFilter('parent_id', $parentId);

        foreach ($children as $child) {
            if (!$child->getComplete()) {
                return false;
            }
        }
        return true;
    }
}
