function likePost(id){
	let post_id    = id;
	const formData = new FormData();
	formData.append('post_id', post_id);

	fetch(`${ADDRESS}/likes/create`, {
		method: 'post',
		body: formData
	}).then(response => response.json())
	.then(data => {
		const {success, error } = data;
		if(success != ""){
			location.reload();
		}else {
			alert("error");
		}
	});
}

function dislikePost(id){
	let post_id    = id;
	const formData = new FormData();
	formData.append('post_id', post_id);

	fetch(`${ADDRESS}/likes/delete`, {
		method: 'post',
		body: formData
	}).then(response => response.json())
	.then(data => {
		const {success, error } = data;
		if(success != ""){
			location.reload();
		}else {
			alert("error");
		}
	});
}

