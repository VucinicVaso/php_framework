<?php 
class Comments extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mvcFunction       = new MVCFunctions;
		$this->commentModel      = $this->model("Comment");
		$this->notificationModel = $this->model("Notification");
		$this->postModel         = $this->model("Post");
		if(empty($this->segment->get('user_session'))){
			$this->mvcFunction->redirect('pages/index');
		}
	}

	public function index()
	{
		//
	}

	/* create comment */
	public function create()
	{
		if($_SERVER['REQUEST_METHOD'] === "POST" && !empty($_POST['post_id']) && !empty($_POST['comment'])){
			$message = array();
			$post_id = $this->mvcFunction->checkInput($_POST['post_id']);
			$post    = $this->postModel::select("id", "user_id")->where('id', $post_id)->first();
			$comment = $this->mvcFunction->checkInput($_POST['comment']);
			/* create comment */
			$create = $this->commentModel::create(['post_id' => $post->id, 'user_id' => $this->segment->get('user_session'), 'comment' => $comment]);
			/* create notification for comment */
			$this->notificationModel::create(['notificationFor' => $post->user_id, 'notificationFrom' => $this->segment->get('user_session'), 'target' => $post->id, 'type' => 'comments', 'status' => 0]);
			/* send message */
			if($create){
				$message['success'] = "Comment created successfully!";
			}else {
				$message['error'] = "ERROR! Please try again!";
			}
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}	
		}
	}

}
?>