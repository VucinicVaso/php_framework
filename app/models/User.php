<?php
use \Illuminate\Database\Eloquent\Model;
	
class User extends Model {

	protected $table    = 'users';
	protected $fillable = ['firstname', 'lastname', 'username', 'email', 'password', 'profile_image', 'gender', 'age'];


	/* check if email is already in use */
	public function checkEmail($email){
		$email = User::where('email', $email)->count();	
		if($email > 0) {
			return true;
		}else {
			return false;
		}
	}

	/* check if password is already in use */
	public function checkPassword($password_to_verify){
		$passwords = User::select('password')->get();
		foreach ($passwords as $password) {
			while (password_verify($password_to_verify, $password->password)) {
				return true;
			}
		}	
	}

	/* login user */
	public function login($email, $password_to_verify){
		$user = User::where('email', $email)->first();
		if(!empty($user)){
			$password_verified = password_verify($password_to_verify, $user->password);
			if($password_verified){
				return $user;
			}else {
				return false;
			}			
		}
	}

	/* logout user */
	public function logout() 
	{
		header('Location: '.URLROOT.'/pages/index');
	}

	/* list of users friends */
	public function friends($user_id)
	{
		return User::select('users.id', 'users.firstname', 'users.lastname', 'users.username', 'users.profile_image', 'friends.friend_id', 'friends.user_id')
		    ->join('friends', 'users.id', '=', 'friends.friend_id')
		    ->where('friends.user_id', $user_id)
		    ->get();
	}

}
?>