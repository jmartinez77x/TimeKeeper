<?php

	/*** include the controller class ***/
	include __SITE_PATH . '/app/mvcEngine/' . 'controller_base.class.php';

	/*** include the registry class ***/
	include __SITE_PATH . '/app/mvcEngine/' . 'registry.class.php';

	/*** include the router class ***/
	include __SITE_PATH . '/app/mvcEngine/' . 'router.class.php';

	/*** include the template class ***/
	include __SITE_PATH . '/app/mvcEngine/' . 'template.class.php';

	/*** include the template class ***/
	include __SITE_PATH . '/app/controllers/engine/' . 'db.class.php';

	/*** auto load model classes ***/
	function __autoload($class_name) {
		$filename = strtolower($class_name) . '.class.php';
		$file = __SITE_PATH . '/app/models/' . $filename;

		if (file_exists($file) == false)
		{
		    return false;
		}

		include ($file);
	}

	/*** a new registry object ***/
	$registry = new registry;

	/*** create the database registry object ***/
	// $registry->db = db::getInstance();
?>
