<?php 
	use \Illuminate\Database\Eloquent\Model;
	
	class Post extends Model {

		protected $table    = 'posts';
		protected $fillable = ['title', 'slug', 'body', 'image', 'user_id'];

		public function findPostBySlug($slug){
			return Post::select('posts.id', 'posts.title', 'posts.body', 'posts.image', 'posts.user_id', 'posts.created_at', 'users.username')
				->join('users', 'users.id', '=', 'posts.user_id')
				->where('slug', $slug)
				->first();
		}

		public function likedPosts($user){
			return Post::select('posts.title', 'posts.slug', 'posts.image')
				->join('likes', 'posts.id', '=', 'likes.post_id')
				->where('likes.user_id', $user)
				->orderBy('likes.created_at', 'DESC')
				->get();
		}

		public function getPostsWithUsers(){
			return Post::select('posts.title', 'posts.slug', 'posts.image', 'posts.created_at', 'users.firstname', 'users.lastname', 'users.username')
			->join('users', 'posts.user_id', 'users.id')
			->orderBy('posts.id', 'DESC')
			->get();
		}

	}
?>