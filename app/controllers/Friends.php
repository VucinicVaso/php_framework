<?php
class Friends extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mvcFunction       = new MVCFunctions;
		$this->friendModel       = $this->model('Friend');
		$this->userModel         = $this->model('User');		
		$this->notificationModel = $this->model("Notification");
		if(empty($this->segment->get('user_session'))){
			$this->mvcFunction->redirect('pages/index');
		}
	}

	/* search for user */
	public function index($name) {
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$message = array();
			$user    = $this->mvcFunction->checkInput($name);
			$search  = $this->userModel::select("id", "firstname", "lastname", "profile_image")->where("firstname", "LIKE", "%$user%")->orWhere("lastname", "LIKE", "%$user%")->orWhere("username", "LIKE", "%$user%")->get();
			if($search != ""){
				$message['users'] = $search;
			}else {
				$message['error'] = "No users were found.";
			}
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}				
		}
	}

	/* add new friend */
	public function create()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['friend_id'])){
			$message   = array();
			$friend_id = $this->mvcFunction->checkInput($_POST['friend_id']);
			/* add new friend */
			$success   = $this->friendModel::create(['friend_id' => $friend_id, 'user_id' => $this->segment->get('user_session')]);
			/* create notification for new friend */
			$this->notificationModel::create(['notificationFor' => $friend_id, 'notificationFrom' => $this->segment->get('user_session'), 'target' => $friend_id, 'type' => 'friends', 'status' => 0]);
			/* send success message */
			if($success){
				$message['success'] = "success";
				if(!empty($message)){
					header("Access-Control-Allow-Origin: *");			
					header("Content-type: application/json");
					echo json_encode($message);
				}	
			}		
		} 
	}

	/* remove friend */
	public function delete()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['friend_id'])){
			$message   = array();
			$friend_id = $this->mvcFunction->checkInput($_POST['friend_id']);
			$success   = $this->friendModel::where('friend_id', $friend_id)->where('user_id', $this->segment->get('user_session'))->delete();
			/* send success message */
			if($success){
				$message['success'] = "success";
				if(!empty($message)){
					header("Access-Control-Allow-Origin: *");			
					header("Content-type: application/json");
					echo json_encode($message);
				}	
			}		
		} 
	}

}
?>