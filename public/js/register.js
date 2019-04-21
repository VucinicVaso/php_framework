window.onload = function(){

	/* message div */
	const message = document.querySelector("#message");
	message.style.display = "none";

	/* register form */
	const registerForm     = document.querySelector("#register_form");
	const firstname        = document.querySelector("#firstname");
	const lastname         = document.querySelector("#lastname");
	const gender           = document.querySelector("#gender");
	const age              = document.querySelector("#age");
	const email            = document.querySelector("#email");
	const password         = document.querySelector("#password");
	const confirm_password = document.querySelector("#confirm_password");
	const csrf_value       = document.querySelector("#csrf_value");

	/* load event listeners */
	loadEventListeners();

	function loadEventListeners() {
		registerForm.addEventListener('submit', registerUser);
	}

	async function registerUser(e) {
		e.preventDefault();
		
		const formData = new FormData();
		formData.append("firstname", this.firstname.value);
		formData.append("lastname", this.lastname.value);
		formData.append("gender", this.gender.value);
		formData.append("age", this.age.value);
		formData.append("email", this.email.value);
		formData.append("password", this.password.value);
		formData.append("confirm_password", this.confirm_password.value);
		formData.append("__csrf_value", this.csrf_value.value);
		
		const sendForm = await fetch('http://localhost/php_mvc/users/register', {
			method: 'post',
			body: formData
		}).then(response => response.json())
		.then(data => {
			const { csrf_token_error, firstname_error, lastname_error, email_error, password_error, confirm_password_error, success } = data;
			if(success != ""){
				let resultData = "";
				message.style.display = "block";
				if(csrf_token_error != null){
					resultData = "<div class='alert alert-danger'><p class='text-center'>"+ csrf_token_error + "</p></div>";
					message.innerHTML += resultData;
				}else if(firstname_error != null){
					resultData = "<div class='alert alert-danger'><p class='text-center'>"+ firstname_error + "</p></div>";
					message.innerHTML += resultData;			
				}else if(lastname_error != null){
					resultData = "<div class='alert alert-danger'><p class='text-center'>"+ lastname_error + "</p></div>";	
					message.innerHTML += resultData;					
				}else if(email_error != null){
					resultData = "<div class='alert alert-danger'><p class='text-center'>"+ email_error + "</p></div>";
					message.innerHTML += resultData;						
				}else if(password_error != null){
					resultData = "<div class='alert alert-danger'><p class='text-center'>"+ password_error + "</p></div>";
					message.innerHTML += resultData;					
				}else if(confirm_password_error != null){
					resultData = "<div class='alert alert-danger'><p class='text-center'>"+ confirm_password_error + "</p></div>";
					message.innerHTML += resultData;						
				}else if(success != null){
					resultData = "<div class='alert alert-success'><p class='text-center'>Your profile has been created. You may login now!</p><a href='http://localhost/php_mvc/users/login' class='btn btn-info' style='width: 100%;'>LOGIN HERE</a></div>";
					message.innerHTML += resultData;					
				}else {
					alert("error");
				}				
			}
		});
	}
	
};
