<?php
class Users extends Controller {

	public function __construct()
	{		
		parent::__construct();
		$this->mvcFunction       = new MVCFunctions;
		$this->userModel         = $this->model("User");
		$this->postModel         = $this->model("Post");
		$this->friendModel       = $this->model("Friend");
		$this->likeModel         = $this->model("Like");
		$this->commentModel      = $this->model("Comment");
		$this->notificationModel = $this->model("Notification");
	}

	/* users profile */
	public function index()
	{
		if(empty($this->segment->get('user_session'))){
			$this->mvcFunction->redirect('pages/index');
		}else {
			$user       = $this->userModel::find($this->segment->get('user_session'));
			$friends    = $this->userModel->friends($user->id);			
			$posts      = $this->postModel::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
			$likedPosts = $this->postModel->likedPosts($user->id);

			$data = array(
				'user'       => $user,
				'friends'    => $friends,
				'posts'      => $posts,
				'likedPosts' => $likedPosts
			);
			echo $this->twig->render('users/index.html', array('data' => $data));
		}		
	}

	/* show user by id */
	public function show($username)
	{
		if(!empty($username) && $this->userModel::where('username', $username)->first()){
			if($this->userModel::where('username', $username)->first()->id == $this->segment->get('user_session')){
				$this->mvcFunction->redirect('users/index');
			}else {
				$userProfile = $this->userModel::where('username', $username)->first();
				$posts       = $this->postModel::where('user_id', $userProfile->id)->get();
				$isFriend    = $this->friendModel::where('friend_id', $userProfile->id)->where('user_id', $this->segment->get('user_session'))->first();
				$data = array(
					'userProfile' => $userProfile,
					'posts'       => $posts,
					'isFriend'    => $isFriend
				);
				echo $this->twig->render('users/show.html', array('data' => $data));
			}
		}else {
			$data = array('message' => "User not found!");
			echo $this->twig->render('error/404.html', array('data' => $data));
		}
	}

	/* edit users profile */
	public function edit()
	{
		if(!empty($this->segment->get('user_session')) && $this->userModel::find($this->segment->get('user_session'))){
			$user = $this->userModel::find($this->segment->get('user_session'));
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$edit_password      = "";
				$edit_profile_image = "";
				$edit_username      = "";
				$firstname 	   = $this->mvcFunction->checkInput($_POST['firstname']);
				$lastname      = $this->mvcFunction->checkInput($_POST['lastname']);
				$gender        = $this->mvcFunction->checkInput($_POST['gender']);
				$age           = $this->mvcFunction->checkInput($_POST['age']);			
				$email     	   = $this->mvcFunction->checkInput($_POST['email']);
				$password      = $this->mvcFunction->checkInput($_POST['password']);
				$profile_image = $this->mvcFunction->uploadImage($_FILES['profileImage']);
				$csrf_value    = $this->mvcFunction->checkInput($_POST['__csrf_value']);

				/* validate csrf_value */
				if(empty($csrf_value) || !$this->session->getCsrfToken()->isValid($csrf_value)){
					$data = array(
						'user'         => $user,
						'getCsrfToken' => $this->session->getCsrfToken()->getValue(),
						'success'      => "",
						'error'        => "This looks like a cross-site request forgery."
					);
					echo $this->twig->render('users/edit.html', array('data' => $data));					
				}
				/* username */
				if($firstname === $user->firstname && $lastname === $user->lastname){
					$edit_username = $user->username;
				}else {
					$edit_username = $firstname."_".$lastname."_".mt_rand();
				}
				/* image */
				if(empty($profile_image)){
					$edit_profile_image = $user->profile_image;
				}else {
					if($user->profile_image != "images/profile.jpg"){
						$this->mvcFunction->deleteImage($user->profile_image);
					}
					$edit_profile_image = $profile_image;
				}
				/* password */
				if(empty($password)){
					$edit_password = $user->password;
				}else {
					$edit_password = password_hash($password, PASSWORD_BCRYPT);
				}
				/* update profile */
				$userUpdate = $this->userModel::where('id', $user->id)->update(['firstname' => $firstname, 'lastname' => $lastname, 'username' => $edit_username, 'email' => $email, 'password' => $edit_password, 'profile_image' => $edit_profile_image, 'gender' => $gender, 'age' => $age]);
				$data = array(
					'user'         => $this->userModel::find($this->segment->get('user_session')),
					'getCsrfToken' => $this->session->getCsrfToken()->getValue(),
					'success'      => 'Profile updated succesfully',
					'error'        =>  ''
				);
				echo $this->twig->render('users/edit.html', array('data' => $data));			
			}else {
				$data = array(
					'user'         => $user,
					'getCsrfToken' => $this->session->getCsrfToken()->getValue(),   
					'success'      => '',
					'error'        => ''
				);
				echo $this->twig->render('users/edit.html', array('data' => $data));
			}
		}else {
			$data = array('message' => 'User not found!');
			echo $this->twig->render('error/404.html', array('data' => $data));
		}
	}

	/* register new user */
	public function register()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data             = array();
			$firstname 		  = $this->mvcFunction->checkInput($_POST['firstname']);
			$lastname    	  = $this->mvcFunction->checkInput($_POST['lastname']);
			$gender           = $this->mvcFunction->checkInput($_POST['gender']);
			$age              = $this->mvcFunction->checkInput($_POST['age']);			
			$email     	      = $this->mvcFunction->checkInput($_POST['email']);
			$password         = $this->mvcFunction->checkInput($_POST['password']);
			$confirm_password = $this->mvcFunction->checkInput($_POST['confirm_password']);

			/* validate csrf_value */
			$csrf_value = $this->mvcFunction->checkInput($_POST['__csrf_value']);
			if(!$this->session->getCsrfToken()->isValid($csrf_value)){
				$message['csrf_token_error'] = "This looks like a cross-site request forgery.";
			}
			/* validate firstname and lastname */
			if(empty($firstname)) {
				$message['firstname_error'] = "Please enter first name.";
			}else if(strlen($firstname) < 3){
				$message['firstname_error'] = "First name must be at least 3 characters.";
			}
			if(empty($lastname)) {
				$message['lastname_error'] = "Please enter last name.";
			}else if(strlen($lastname) < 3){
				$message['lastname_error'] = "Last name must be at least 6 characters.";
			}
			/* validate email */
			if(empty($email)){
				$message['email_error'] = "Please enter email.";
			}else {
				if($this->userModel->checkEmail($email)) {
					$message['email_error'] = 'Email is already taken!';
				}					
			}
			/* validate password */				
			if(empty($password)) {
				$message['password_error'] = 'Please enter password.';
			}else if(strlen($password) < 6) {
				$message['password_error'] = 'Password must be at least 6 characters.';
			}else if(preg_match('/[^A-Za-z0-9]/', $password)){
				$message['password_error'] = 'Your password can only contain numbers and characters!';
			}else if($this->userModel->checkPassword($password)){
				$message['password_error'] = 'Password is already taken!';
			}	
			/* validate confirm password */
			if(empty($confirm_password)) {
				$message['confirm_password_error'] = 'Please enter confirm password.';
			}else if($password != $confirm_password) {
				$message['confirm_password_error'] = 'Passwords do not match.';
			}
			/* if errors are empty */
			if(empty($message)){
				$username      = $firstname."_".$lastname."_".mt_rand(0, 100);
				$password_hash = password_hash($password, PASSWORD_BCRYPT);
				$user = $this->userModel::create(['firstname' => $firstname, 'lastname' => $lastname, 'username' => $username, 'email' => $email, 'password' => $password_hash, 'profile_image' => 'images/profile.jpg', 'gender' => $gender, 'age' => $age]);
				if($user) {	
					$message['success'] = "SUCCESS";
					header("Access-Control-Allow-Origin: *");			
					header("Content-type: application/json");
					echo json_encode($message);									
				}else {
					die('Something went wrong.');
				}				
			}else{
				/* send message */
				if(!empty($message)){
					header("Access-Control-Allow-Origin: *");			
					header("Content-type: application/json");
					echo json_encode($message);
				}
			}				
		}else{
			$data = array(
				'getCsrfToken' => $this->session->getCsrfToken()->getValue(),
			);
			echo $this->twig->render('users/register.html', array('data' => $data));
		}
	}

	/* login user */
	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data           = array();
			$login_email    = $this->mvcFunction->checkInput($_POST['login_email']);
			$login_password = $this->mvcFunction->checkInput($_POST['login_password']);
			/* validate csrf_value */
			$csrf_value = $this->mvcFunction->checkInput($_POST['__csrf_value']);
			if(!$this->session->getCsrfToken()->isValid($csrf_value)){
				$data['csrf_token_error'] = "This looks like a cross-site request forgery.";
				echo $this->twig->render('users/login.html', array('data' => $data));
			}else {
				/* validate email */
				if(empty($login_email)){
					$data['login_email_error'] = "Please enter your email.";
				}else if($this->userModel->checkEmail($login_email) === false){
					$data['login_email_error'] = 'Email does not exist!';
				}
				/* validate password */			
				if(empty($login_password)) {
					$data['login_password_error'] = 'Please enter password.';
				}else if(strlen($login_password) < 6) {
					$data['login_password_error'] = 'Password must be at least 6 characters.';
				}else if(preg_match('/[^A-Za-z0-9]/', $login_password)){
					$data['login_password_error'] = 'Your password can only contain numbers and characters!';
				}
				/* login user */
				if(empty($data)){
					$user = $this->userModel->login($login_email, $login_password);
					if(!empty($user)){
						$this->segment->set('user_session', $user->id);
						if($this->segment->get('user_session')){
							$this->mvcFunction->redirect('users/index');
						}
					}else{
						$data['getCsrfToken']         = $this->session->getCsrfToken()->getValue();
						$data['login_password_error'] = 'Password does not exist.';
						echo $this->twig->render('users/login.html', array('data' => $data));
					}
				}else{
					$data['getCsrfToken'] = $this->session->getCsrfToken()->getValue();
					echo $this->twig->render('users/login.html', array('data' => $data));
				}
			}
		}else {
			$data = array(
				'getCsrfToken'         => $this->session->getCsrfToken()->getValue(),
				'csrf_token_error'     => '',
				'login_email_error'    => '',
				'login_password_error' => ''
			);
			echo $this->twig->render('users/login.html', array('data' => $data));
		}
	}

	/* logout user */
	public function logout()
	{
		$this->session->clear();
		$this->session->destroy();
		$this->userModel->logout();
	}

	/* delete users profile */
	public function delete()
	{
		$user_id = $this->mvcFunction->checkInput($_POST['user_id']);
		if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($user_id) && !empty($this->segment->get('user_session')) && $user_id == $this->segment->get('user_session')){
			$this->commentModel::where('user_id', $user_id)->delete();               /* delete users comments */
			$this->friendModel::where('user_id', $user_id)->delete();                /* delete users friends */
			$this->likeModel::where('user_id', $user_id)->delete();	                 /* delete users likes */
			$this->postModel::where('user_id', $user_id)->delete();	                 /* delete users posts */
			$this->notificationModel::where('notificationFrom', $user_id)->delete(); /* delete users notifications */
			$this->userModel::where('id', $user_id)->delete();                       /* delete users profile */
			$this->session->clear();										         /* clear session */
			$this->session->destroy();												 /* destroy session */
			$this->userModel->logout();											     /* logout user */
		}else {
			$data = array( "message" => "User does not exist!" );
			echo $this->twig->render('error/404.html');
		}
	}

}
?>