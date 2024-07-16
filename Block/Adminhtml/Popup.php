<?php
class Ccc_Ticket_Block_Adminhtml_Popup extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
        $this->_blockGroup = 'ticket';
		$$this->setTemplate('ticket/popup.phtml');
	}
}