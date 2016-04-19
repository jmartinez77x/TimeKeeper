<?php
Class timeSheetController Extends baseController 
{

	public function index() 
	{

   	 $this->registry->template->show('timeSheet');
	}
} 
?>
