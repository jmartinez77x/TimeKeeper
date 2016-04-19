<?php

	/*** error reporting on ***/
	error_reporting(E_ALL);

	/*** define the site path ***/
	$site_path = realpath(dirname(__FILE__));
	define ('__SITE_PATH', $site_path);

	include_once'app/includes/init.php';

	/*** load Classes ***/
		$routerClass = new router($registry);
		$registry->template = new template($registry);
	/*** End load classes ***/

	/*** set the controller path ***/

		$controllerPath = __SITE_PATH . '/app/controllers';
		$routerClass->setPath($controllerPath);
	/*** End controller path***/

	/*** load the controllers ***/
		$page ='addEmployee';
		$routerClass->loader($page);
	/*** End load Controllers ***/
?>
