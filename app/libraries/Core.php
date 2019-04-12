<?php
	/* 
		App Core Class
		Creates URL & loads core controller
		URL FORMAT - /controller/method/params
	*/

	class Core {

		protected $currentController = "Pages";
		protected $currentMethod     = "index";
		protected $params            = [];

		public function __construct()
		{
			$url = $this->getUrl(); /* return url as array (url[0] = controller, url[1] = model, ulr[2] = params) */

			/* look in controllers for url[0] */
			if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
				/* if exists, set as controller */
				$this->currentController = ucwords($url[0]);
				/* unset 0 index */
				unset($url[0]);				
			}
			/* require the controller */
			require_once '../app/controllers/'.$this->currentController.'.php';
			/* instantiate controller class */
			$this->currentController = new $this->currentController;

			/* check for method => url[1]  */		
			if(isset($url[1])){
				/* check to see if method exists in controller */
				if(method_exists($this->currentController, $url[1])){
					$this->currentMethod = $url[1];
					/* unset 1 index */
					unset($url[1]);
				}
			}

			/* get params => url[2] */
			$this->params = $url ? array_values($url) : [];
			/* call a callback with array params */
			call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
		}

		public function getUrl()
		{
			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'], '/');              /* strip ending '/' from url */
				$url = filter_var($url, FILTER_SANITIZE_URL); /* sanitize url, URL format */
				$url = explode('/', $url);                    /* create an array of url */
				return $url;
			}
		}

	}
?>