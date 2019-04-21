window.onload = function(){

	const notificationDIV     = document.querySelector("#notification"); 
	const likeNotification    = document.querySelector("#likeNotification");
	const commentNotification = document.querySelector("#commentNotification");
	const friendNotification  = document.querySelector("#likeNotification");

	notification = function() {
		fetch(`${ADDRESS}/notifications/index`, {
			method: 'get'
		}).then(response => response.json())
		.then(data => {
			const {notifications } = data;
			if(notifications > 0){
				notificationDIV.classList.add("bg-warning");
				notificationDIV.classList.add("text-white");
				console.log("You have new notifications!");
			}else {
				notificationDIV.classList.remove("bg-warning");
				console.log("you have 0 new notifications.");
			}
		});
	}
	
	setInterval(notification, 4000);	

};

function seeNotifications(){
	likeNotification.innerHTML    = "";
	commentNotification.innerHTML = "";
	friendNotification.innerHTML  = "";

	fetch(`${ADDRESS}/notifications/show`, {
		method: 'get'
	}).then(response => response.json())
	.then(data => {
		const { likes, comments, friends } = data;

		if(likes > 0){
			let likesMSG = "NEW LIKES (" + likes + ")";
			likeNotification.innerHTML += likesMSG;		
			console.log("new likes.");
		}else {
			let likesMSG = "LIKES";
			likeNotification.innerHTML += likesMSG;
		}

		if(comments > 0){
			let commentsMSG = "NEW COMMENTS (" + comments + ")";
			commentNotification.innerHTML += commentsMSG;			
			console.log("new comments.");	
		}else {
			let commentsMSG = "COMMENTS";
			commentNotification.innerHTML += commentsMSG;				
		}	

		if(friends > 0){
			let friendsMSG = "NEW FRIENDS(" + friends + ")";
			friendNotification.innerHTML += friendsMSG;				
			console.log("new friends");
		}else {
			let friendsMSG = "FRIENDS";
			friendNotification.innerHTML += friendsMSG;			
		}

	});

}
