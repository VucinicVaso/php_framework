<?php 
	use \Illuminate\Database\Eloquent\Model;
	
	class Comment extends Model {

		protected $table    = 'comments';
		protected $fillable = ['post_id', 'user_id', 'comment'];


		public function comments($id)
		{
			return Comment::select('users.id', 'users.username', 'users.profile_image', 'comments.comment', 'comments.created_at')
				->join('users', 'users.id', '=', 'comments.user_id')
				->where('post_id', $id)
				->get();
		}
	}
?>