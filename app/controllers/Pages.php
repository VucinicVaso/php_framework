<?php
	class Pages extends Controller {

		public function __construct()
		{
			parent::__construct();
			$this->mvcFunction = new MVCFunctions;
		}

		public function index()
		{
			if(!empty($this->segment->get('user_session'))){
				$this->mvcFunction->redirect("users/index");
			}else {
				echo $this->twig->render('pages/index.html');
			}			
		}

	}
?>