<?php
class Ccc_Ticket_Block_Adminhtml_Comment extends Mage_Adminhtml_Block_Template
{
    protected $globalMaxLevel;

    public function __construct()
    {
        $this->setTemplate('ticket/comment.phtml');
    }

    public function getCommentData()
    {
        $visibility = $this->getRequest()->getParam('visibility');
        $id = $this->getRequest()->getParam('id');
        if ($visibility) {
            $ticketId = $this->getRequest()->getParam('id');
            if ($visibility == 'hide') {
                $comments = Mage::getModel('ticket/comments')->getCollection()
                    ->addFieldToFilter('ticket_id', $ticketId)->addFieldToFilter('complete', 0);
                return $comments;
            } else {
                $comments = Mage::getModel('ticket/comments')->getCollection()
                    ->addFieldToFilter('ticket_id', $ticketId);
                return $comments;
            }
        } else {
            $comments = Mage::getModel('ticket/comments')->getCollection()
                ->addFieldToFilter('ticket_id', $id);
            return $comments;
        }
    }

    public function preparedata()
    {
        $commentData = $this->getCommentData()->getData();
        $data = [];
        $commentsById = [];
        $this->globalMaxLevel = 0;

        foreach ($commentData as $_comment) {
            $commentsById[$_comment['id']] = $_comment;
            $commentsById[$_comment['id']]['children'] = [];
            if ($_comment['level'] > $this->globalMaxLevel) {
                $this->globalMaxLevel = $_comment['level'];
            }
        }

        foreach ($commentsById as $commentId => &$comment) {
            if ($comment['parent_id'] != 0) {
                $parentId = $comment['parent_id'];
                $commentsById[$parentId]['children'][] = &$comment;
            } else {
                $data[] = &$comment;
            }
        }
        return $data;
    }

    public function renderComments($comments, $isChild = false)
    {
        $html = '';
        foreach ($comments as $index => $comment) {
            $rowspan = $this->calculateRowspan($comment);
            $isLastChild = empty($comment['children']);
            $html .= '<tr data-id="' . $comment['id'] . '" data-parent-id="' . $comment['parent_id'] . '" data-level="' . $comment['level'] . '">';

            if ($comment['parent_id'] == 0 && $comment['level'] > 0) {
                $html .= '<td rowspan="' . $rowspan . '" colspan="' . ($comment['level']) . '"></td>';
                $html .= '<td rowspan="' . $rowspan . '" class="comment-cell level-' . $comment['level'] . '">' . $comment['comment'] . " (Parent ID: " . $comment['parent_id'] . ' - ID: ' . $comment['id'] . ')';
            } else {
                $html .= '<td rowspan="' . $rowspan . '" class="comment-cell level-' . $comment['level'] . '">' . $comment['comment'] . " (Parent ID: " . $comment['parent_id'] . ' - ID: ' . $comment['id'] . ')';
            }
            if ($comment['level'] == $this->globalMaxLevel && $comment['is_lock'] == 0 && $comment['complete'] == 0) {
                $html .= '<br><button class="lock-btn" data-level="' . $comment['level'] . '">Lock</button>';
                $html .= '<br><button class="reply-btn">Add New</button>';
            }
            if ($isLastChild && $comment['is_lock'] == 0 && $comment['complete'] == 0) {
                $html .= '<br><button class="complete-btn" data-id="' . $comment['id'] . '">Complete</button>';
            }
            // if ($isLastChild && $comment['is_lock'] != 1 && $comment['complete'] == 0) {
            //     $html .= '<br><button class="reply-btn">Add New</button>';
            // }

            $html .= '</td>';
            $html .= '</tr>';

            if (!empty($comment['children'])) {
                $html .= $this->renderComments($comment['children'], true);
            }
        }

        return $html;
    }

    public function getMaxLevelInComment($comment)
    {
        $maxLevel = $comment['level'];

        if (!empty($comment['children'])) {
            foreach ($comment['children'] as $child) {
                $childMaxLevel = $this->getMaxLevelInComment($child);
                if ($childMaxLevel > $maxLevel) {
                    $maxLevel = $childMaxLevel;
                }
            }
        }

        return $maxLevel;
    }

    public function calculateRowspan($comment)
    {
        $rowspan = 1;

        if (!empty($comment['children'])) {
            foreach ($comment['children'] as $child) {
                $rowspan += $this->calculateRowspan($child);
            }
        }

        return $rowspan;
    }
}
