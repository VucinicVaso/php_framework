$(function(){

	$("#searchInput").focus();
	let timer;

	$("#searchInput").keyup(function(){
		clearTimeout(timer);
		$("#search-result").show();

		timer = setTimeout(function(){
			let search = $("#searchInput").val();
			timer = null;
			
			const sendForm = fetch('http://localhost/php_mvc/friends/index/' + search, {
				method: 'get'
			}).then(response => response.json())
			.then(data => {
				let result = "";
				const { users, error } = data;
				if(users != ""){
					users.map(user => {
						result = `
							<div class="row">
								<div class="col-md-4">
									<img src="http://localhost/php_mvc/public/${user.profile_image}" class="w-100" style="height:100px;">
								</div>
								<div class="col-md-8">
									<a href="http://localhost/php_mvc/users/show/${user.id}" id="user" class="text-center">
									${user.firstname} ${user.lastname}
									</a>
								</div>
							</div>
							<hr>
							<div class="row justify-content-center">
								<div class="col-md-4">
									<p class="btn btn-danger float-right w-100" onclick="closeSearch()"><i class="fas fa-window-close"></i></p>
								</div>
							</div>
						`;	
					});
					$("#searchInput").val("");
					$("#search-result").html(result);
				}else {
					$("#searchInput").val("");
					$("#search-result").html("<p class='text-center alert alert-danger'>No users were found.</p>");
				}
			});

		}, 2000); 
	});

});

function closeSearch(){	
	$("#searchInput").val("");
	$("#search-result").val("");
	$("#search-result").hide();
}
