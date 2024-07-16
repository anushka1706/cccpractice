<?php
class Ccc_Ticket_Block_Adminhtml_Button extends Mage_Adminhtml_Block_Page_Menu
{
	public function __construct()
	{
		parent::__construct();
        $this->setTemplate('ticket/button.phtml');
	}
}