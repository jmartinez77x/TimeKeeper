<?php

	class router {
		/*
		* @the registry
		*/
		private $registry;

		/*
		* @the controller path
		*/
		private $path;

		private $args = array();

		public $file;

		public $controller;

		public $action; 

		function __construct($registry) {
		    $this->registry = $registry;
		}

		/**
		*
		* @return void
		*
		*/
		function setPath($path) {

			/*** check if path i sa directory ***/
			if (!is_dir($path)){
				throw new Exception ('Invalid controller path: `' . $path . '`');
			}
			/*** set the path ***/
			$this->path = $path;
		}

		/**
		*
		* @return void
		*
		*/
		public function loader($page){
			/*** check the route ***/
			$this->getController($page);

			/*** if the file is not there diaf ***/
			if (!is_readable($this->file)){

				$this->file = $this->path.'/error404.html.php';
			    $this->controller = 'error404';
			}

			/*** include the controller ***/
			include_once $this->file;

			/*** a new controller class instance ***/
			$class = $page . 'Controller';
			$controller = new $class($this->registry);

			/*** check if the action is callable ***/
			if (!is_callable(array($controller, $this->action))){

				$action = 'index';
			}else{

				$action = $this->action;
			}

			/*** run the action ***/
			$controller->$action();
		}


		/**
		*
		* @return void
		*
		*/
		private function getController($page) {

			/*** get the route from the url ***/
			$route = (empty($_GET['rt'])) ? '' : $_GET['rt'];

			if (empty($route)){
				$route = 'index';
			}else{

				/*** get the parts of the route ***/
				$parts = explode('/', $route);
				$this->controller = $parts[0];

				if(isset( $parts[1])){
					$this->action = $parts[1];
				}
			}

			if (empty($page)){
				$page = 'index';
			}

			/*** Get action ***/
			if (empty($this->action)){
				$this->action = 'index';
			}

			/*** set the file path ***/
			$this->file = $this->path .'/'. $page . '.class.php';
		}
	}
?>
