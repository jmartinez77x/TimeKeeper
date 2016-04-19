<?php
Class viewEmployeesController Extends baseController 
{

	public function index() 
	{

    $this->registry->template->show('viewEmployees');
	}
} 
?>
