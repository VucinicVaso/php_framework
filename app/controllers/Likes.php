<?php 
class Likes extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mvcFunction       = new MVCFunctions;
		$this->likeModel         = $this->model("Like");
		$this->postModel         = $this->model("Post");
		$this->notificationModel = $this->model("Notification");
		if(empty($this->segment->get('user_session'))){
			$this->mvcFunction->redirect('pages/index');
		}
	}

	public function index()
	{
		//
	}

	/* create like */
	public function create()
	{
		if($_SERVER['REQUEST_METHOD'] === "POST" && !empty($_POST['post_id'])){
			$message = array();
			$post_id = $this->mvcFunction->checkInput($_POST['post_id']);
			$post    = $this->postModel::select("id", "user_id")->where('id', $post_id)->first();
			/* create like */
			$create  = $this->likeModel::create(['post_id' => $post_id, 'user_id' => $this->segment->get('user_session')]);
			/* create notification for like */
			$this->notificationModel::create(['notificationFor' => $post->user_id, 'notificationFrom' => $this->segment->get('user_session'), 'target' => $post->id, 'type' => 'likes', 'status' => 0]);			
			/* send message */
			if($create){
				$message['success'] = "success";
			}else {
				$message['error'] = "ERROR! Please try again!";
			}
			/* send message */
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}	
		}
	}

	/* delete like */
	public function delete()
	{
		if($_SERVER['REQUEST_METHOD'] === "POST" && !empty($_POST['post_id'])){
			$message = array();
			$post_id = $this->mvcFunction->checkInput($_POST['post_id']);
			/* delete like */
			$create  = $this->likeModel::where('post_id', $post_id)->where('user_id', $this->segment->get('user_session'))->delete();
			if($create){
				$message['success'] = "success";
			}else {
				$message['error'] = "ERROR! Please try again!";
			}
			/* send message */
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}	
		}
	}

}
?>