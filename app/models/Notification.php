<?php 
	use \Illuminate\Database\Eloquent\Model;
	
	class Notification extends Model {

		protected $table    = 'notifications';
		protected $fillable = ['notificationFor', 'notificationFrom', 'target', 'type', 'status'];

		public function getLikes($user){
			return Notification::select('notifications.created_at', 'users.id', 'users.firstname', 'users.lastname', 'posts.title', 'posts.slug', 'posts.image')
				->join('users', 'users.id', '=', 'notifications.notificationFrom')
				->join('posts', 'posts.id', '=', 'notifications.target')
				->where('notificationFor', $user)
				->where('type', 'likes')
				->where('status', 0)
				->get();
		}

		public function getComments($user){
			return Notification::select('notifications.created_at', 'users.id', 'users.firstname', 'users.lastname', 'posts.title', 'posts.slug', 'posts.image', 'comments.comment')
				->join('users', 'users.id', '=', 'notifications.notificationFrom')
				->join('posts', 'posts.id', '=', 'notifications.target')
				->join('comments', 'comments.post_id', '=', 'notifications.target')
				->where('notifications.notificationFor', $user)
				->where('notifications.type', 'comments')
				->where('notifications.status', 0)
				->get();
		}

		public function getFriends($user){
			return Notification::select('notifications.created_at', 'users.id', 'users.firstname', 'users.lastname', 'users.profile_image')
				->join('users', 'notifications.notificationFrom', '=', 'users.id')
				->where('notifications.notificationFor', $user)
				->where('notifications.type', 'friends')
				->where('notifications.status', 0)
				->get();
		}		

	}
?>