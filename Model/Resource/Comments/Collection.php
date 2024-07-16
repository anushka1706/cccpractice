<?php

class Ccc_Ticket_Model_Resource_Comments_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    public function _construct()
    {
        $this->_init("ticket/comments");
    }
}