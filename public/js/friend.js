window.onload = function(){

	/* add friend */
	if (document.querySelector(".add") !== null) {
		const add = document.querySelector(".add");
		
		/* load event listeners */
		loadEventListeners();

		function loadEventListeners() {
			add.addEventListener('click', addFriend);
		}

		async function addFriend(){
			let id            = add.dataset.user;
			let addFriendData = new FormData();
			addFriendData.append("friend_id", id);

			const send = await fetch("http://localhost/php_mvc_2/friends/create", {
				method: 'post',
				body: addFriendData
			}).then(response => response.json)
			.then(data => {
					if(data.success != ""){
						location.reload();
					}else {
						alert("error");
					}
				}
			);
		}
	}

	/* remove friend */
	if (document.querySelector(".remove") !== null) {
		const remove = document.querySelector(".remove");
		
		/* load event listeners */
		loadEventListeners();

		function loadEventListeners() {
			remove.addEventListener('click', removeFriend);
		}

		async function removeFriend(){
			let id            = remove.dataset.user;
			let addFriendData = new FormData();
			addFriendData.append("friend_id", id);

			const send = await fetch("http://localhost/php_mvc_2/friends/delete", {
				method: 'post',
				body: addFriendData
			}).then(response => response.json)
			.then(data => {
					if(data.success != ""){
						location.reload();
					}else {
						alert("error");
					}
				}
			);
		}

	}

};

