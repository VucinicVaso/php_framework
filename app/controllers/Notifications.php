<?php
class Notifications extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mvcFunction       = new MVCFunctions;
		$this->notificationModel = $this->model("Notification");
		if(empty($this->segment->get('user_session'))){
			$this->mvcFunction->redirect('pages/index');
		}			
	}

	public function index()
	{
		if($_SERVER['REQUEST_METHOD'] === "GET"){
			$message = array();
			$notifications = $this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('status', 0)->count();
			$message['notifications'] = $notifications;
			/* send message */
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}			
		}
	}

	public function show()
	{
		if($_SERVER['REQUEST_METHOD'] === "GET"){
			$message = array();
			$message['likes']    = $this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('type', 'likes')->where('status', 0)->count();
			$message['comments'] = $this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('type', 'comments')->where('status', 0)->count();
			$message['friends']  = $this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('type', 'friends')->where('status', 0)->count();
			/* send message */
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}			
		}
	}		

	public function likes()
	{
		$notifications = $this->notificationModel->getLikes($this->segment->get('user_session'));
		$data = array(
			'notifications' => $notifications
		);
		echo $this->twig->render('notifications/likes.html', array('data' => $data));	
		$this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('type', 'likes')->where('status', 0)->update(['status' => 1]);		
	}

	public function comments()
	{
		$notifications = $this->notificationModel->getComments($this->segment->get('user_session'));
		$data = array(
			'notifications' => $notifications
		);
		echo $this->twig->render('notifications/comments.html', array('data' => $data));	
		$this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('type', 'comments')->where('status', 0)->update(['status' => 1]);
	}

	public function friends()
	{
		$notifications = $this->notificationModel->getFriends($this->segment->get('user_session'));
		$data = array(
			'notifications' => $notifications
		);
		echo $this->twig->render('notifications/friends.html', array('data' => $data));	
		$this->notificationModel::where('notificationFor', $this->segment->get('user_session'))->where('type', 'friends')->where('status', 0)->update(['status' => 1]);						
	}	

}
?>