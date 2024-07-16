<?php

class Ccc_Ticket_Model_Resource_Comments extends Mage_Core_Model_Resource_Db_Abstract
{

    protected function _construct()
    {
        $this->_init('ticket/comments', 'id');
    }
}
