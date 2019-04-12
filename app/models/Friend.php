<?php 
	use \Illuminate\Database\Eloquent\Model;
	
	class Friend extends Model {

		protected $table    = 'friends';
		protected $fillable = ['friend_id', 'user_id'];

	}
?>