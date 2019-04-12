<?php
	/* 
		Base Controller, load model, session, template engine 
	*/
	class Controller {

		public function __construct()
		{
			$this->aura_session();
			$this->template();
		}

		/* load aura session */
		public function aura_session()
		{
			$this->session_factory = new \Aura\Session\SessionFactory;
			$this->session         = $this->session_factory->newInstance($_COOKIE);			
			$this->segment         = $this->session->getSegment('public/session/session');
		}

		/* load twig template engine */
		public function template()
		{
			$loader     = new Twig_Loader_Filesystem(APPROOT.'/views');
			$this->twig = new Twig_Environment($loader, array(
				'auto_reload' => true,
			    'cache'       => '../public/cache'
			));
			$this->twig->addGlobal('URLROOT', URLROOT);
			$this->twig->addGlobal('SITENAME', SITENAME);
			$this->twig->addGlobal('session_data', $this->segment->get('user_session'));
		}

		/* Load model */
		public function model($model) 
		{
			require_once '../app/models/'.$model.'.php'; /* Require model file */
			return new $model();		                 /* Instantiate model */
		}

	}
?>