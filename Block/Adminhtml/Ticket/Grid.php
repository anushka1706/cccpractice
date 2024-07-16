<?php
class Ccc_Ticket_Block_Adminhtml_Ticket_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        $this->setTemplate('ticket/ticket.phtml');
    }
    public function getTicketData()
    {
            $columns = [
                'id' => 'main_table.id',
                'assigned_by' => 'admin2.username',
                'assigned_user' => 'admin.username',
                'status' => 'main_table.status',
                'priority' => 'main_table.priority',
                'created_at' => 'main_table.created_at',
                'updated_at' => 'main_table.updated_at',
                'description' => 'main_table.description',
                'title' => 'main_table.title',
                'color' => 'status.status_color'
            ];
            $tickets = Mage::getModel('ticket/ticket')->getCollection();
            $status =  Mage::getSingleton('core/resource')->getTableName('ticket/status');
            $admin = Mage::getSingleton('core/resource')->getTableName('admin/user');
            $tickets->getSelect()->joinLeft(
                ['admin' => $admin],
                'main_table.assigned_user = admin.user_id',
                ['']
            );
            $tickets->getSelect()->joinLeft(
                ['admin2' => $admin],
                'main_table.assigned_by = admin2.user_id',
                ['']
            );
            $tickets->getSelect()->joinLeft(
                ['status' => $status],
                'main_table.status = status.status_label',
                ['']
            );
            $tickets->getSelect()->reset(Zend_Db_Select::COLUMNS)
                ->columns($columns);
            return $tickets;
        }
    public function getStatusData()
    {
        $status = Mage::getModel('ticket/status')->getCollection()->getData();
        return $status;
    }
    public function getUserData()
    {
        $users = Mage::getModel('admin/user')->getCollection()->getData();
        return $users;
    }

    public function getFilterData()
    {
        $filters = Mage::getModel('ticket/filters')->getCollection();
        $filters->getSelect()->group('name');
        return $filters;
    }

}
