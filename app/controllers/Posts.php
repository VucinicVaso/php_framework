<?php 
class Posts extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mvcFunction  = new MVCFunctions;
		$this->postModel    = $this->model("Post");
		$this->userModel    = $this->model("User");
		$this->likeModel    = $this->model("Like");
		$this->commentModel = $this->model("Comment");
		if(empty($this->segment->get('user_session'))){
			$this->mvcFunction->redirect('pages/index');
		}		
	}

	public function index()
	{
		$posts = $this->postModel::select('title', 'slug', 'image')->orderBy('id', 'DESC')->whereMonth('created_at', '12')->get();
		$users = $this->userModel::select('id', 'firstname', 'lastname')->take(10)->orderBy('id', 'DESC')->get();
		$data = array(
			'posts' => $posts,
			'users' => $users
		);
		echo $this->twig->render('posts/index.html', array('data' => $data));
	}

	public function show($slug)
	{
		if(!empty($this->postModel->findPostBySlug($slug))){
			$post     = $this->postModel->findPostBySlug($slug); 
			$isLiked  = $this->likeModel::where('post_id', $post->id)->where('user_id', $this->segment->get('user_session'))->first();
			$comments = $this->commentModel->comments($post->id);
			$data = array(
				'post'     => $post,
				'isLiked'  => $isLiked,
				'comments' => $comments
			);
			echo $this->twig->render('posts/show.html', array('data' => $data));
		}else {
			$data = array("message" => "Post not found!");
			echo $this->twig->render('error/404.html', array('data' => $data));
		}		
	}

	public function create()
	{
		if($_SERVER['REQUEST_METHOD'] === "POST"){
			$message = array();
			$title = $this->mvcFunction->checkInput($_POST['title']);
			$body  = $this->mvcFunction->checkInput($_POST['body']);
			$image = $this->mvcFunction->uploadImage($_FILES['image']);
			$slug  = str_replace(' ', '-', $title);
			$create = $this->postModel::create(['title' => $title, 'slug' => $slug, 'body' => $body, 'image' => $image, 'user_id' => $this->segment->get('user_session')]);
			if($create){
				$message['success'] = "Post created successfully!";
			}else {
				$message['error'] = "error";
			}
			/* send message */
			if(!empty($message)){
				header("Access-Control-Allow-Origin: *");			
				header("Content-type: application/json");
				echo json_encode($message);
			}			
		}
	}

	public function edit($id)
	{
		$post    = $this->postModel::where('id', $id)->where('user_id', $this->segment->get('user_session'))->first();
		$message = "";
		if(!empty($post)){
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$post_slug  = "";
				$post_image = "";
				$title      = $this->mvcFunction->checkInput($_POST['title']);
				$body       = $this->mvcFunction->checkInput($_POST['body']);
				$image      = $this->mvcFunction->uploadImage($_FILES['image']);
				/* new slug */				
				if($post->title === $title){
					$post_slug = $post->slug;
				}else {
					$post_slug = str_replace(' ', '-', $title);
				}
				/* new post image */
				if(empty($image)){
					$post_image = $post->image;
				}else{
					$this->mvcFunction->deleteImage($post->image);
					$post_image = $image;
				}
				$edit = $this->postModel::where('id', $id)->update(['title' => $title, 'slug' => $post_slug, 
					'body' => $body, 'image' => $post_image]);
				/* edit post message */
				if($edit) {
					$message = "Post updated successfully!";				
				}else {
					$message = "Error! Please try again!";
				}
				$data = array(
					'message' => $message,
					'post'    => $this->postModel::find($id)
				); 
				echo $this->twig->render('posts/edit.html', array('data' => $data));			
			}else {
				$data = array(
					'message' => $message,
					'post'    => $post
				); 
				echo $this->twig->render('posts/edit.html', array('data' => $data));
			}	
		}else {
			echo $this->twig->render('error/404.html');
		}	
	}	

	public function delete()
	{
		if($_SERVER['REQUEST_METHOD'] === "POST"){
			$post_id = $this->mvcFunction->checkInput($_POST['post_id']);
			$post    = $this->postModel::find($post_id);
			$this->mvcFunction->deleteImage($post->image);
			$delete  = $this->postModel::where('id', $post->id)->where('user_id', $this->segment->get('user_session'))->delete();
			if($delete){
				$this->mvcFunction->redirect('users/index');
			}
		}else {
			echo $this->twig->render('error/404.html');
		}		
	}	

}
?>