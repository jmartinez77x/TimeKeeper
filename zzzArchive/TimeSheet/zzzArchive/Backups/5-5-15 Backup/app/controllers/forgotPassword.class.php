<?php
Class forgotPasswordController Extends baseController 
{

	public function index() 
	{

    $this->registry->template->show('forgotPassword');
	}
} 
?>
