window.onload = function(){

	/* comment msg div */
	const commentMSG = document.querySelector("#commentMSG");
	commentMSG.style.display = "none";

	/* comment form */
	const commentForm = document.querySelector("#commentForm");
	const post_id     = document.querySelector("#post_id");
	const comment     = document.querySelector("#comment");

	/* load event listeners */
	loadEventListeners();

	function loadEventListeners() {
		commentForm.addEventListener('submit', createComment);
	}

	async function createComment(e) {
		e.preventDefault();

		const formData = new FormData();
		formData.append('post_id', this.post_id.value);
		formData.append('comment', this.comment.value);
		
		const sendForm = await fetch('http://localhost/php_mvc_2/comments/create', {
			method: 'post',
			body: formData
		}).then(response => response.json())
		.then(data => {
			const {success, error } = data;
			if(success != ""){
				commentMSG.style.display = "block";
				commentMSG.innerHTML += "<p class='alert alert-success' id='width-100'>" + success + "</p>";
				setTimeout(reload, 2000);
			}else {
				alert("error");
			}
		});
		
	}

	function reload(){
		location.reload();
	}

};

