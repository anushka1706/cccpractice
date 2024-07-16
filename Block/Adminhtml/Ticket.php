<?php
class Ccc_Ticket_Block_Adminhtml_Ticket extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_blockGroup = 'ticket';
		$this->_controller = 'adminhtml_ticket';
		$this->_headerText = $this->__('ticket');
		parent::__construct();
	}
}
