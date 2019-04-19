/* create post form */
const form  = document.querySelector("#postForm");
const title = document.querySelector("#title");
const body  = document.querySelector("#body");
const image = document.querySelector("#upload_image");

/* create post message */
const createPostMSG = document.querySelector("#createPostMSG");
createPostMSG.style.display = "none";

/* load event listeners */
loadEventListeners();

function loadEventListeners() {
	form.addEventListener('submit', createPost);
}

async function createPost(e) {
	e.preventDefault();

	const formData = new FormData();
	formData.append('title', this.title.value);
	formData.append('body', this.body.value);
	formData.append('image', this.image.files[0]);
	
	const sendForm = await fetch('http://localhost/php_mvc/posts/create', {
		method: 'post',
		body: formData
	}).then(response => response.json())
	.then(data => {
		const { success, error } = data;
		if(success != ""){
			createPostMSG.style.display = "block";
			createPostMSG.innerHTML += "<p class='alert alert-success' id='width-100'>" + success + "</p>";
			setTimeout(reload, 2000);
		}else {
			alert("error");
		}
	});
	
}

function reload(){
	location.reload();
}



