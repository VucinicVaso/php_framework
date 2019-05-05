<?php
	class MVCFunctions {

		/* clear input fields */
		public function checkInput($var) {
			$var = htmlspecialchars($var);
			$var = trim($var);
			$var = stripcslashes($var);
			return $var;
		}

		/* redirect */
		function redirect($page) {
			header('Location: '.URLROOT.'/'.$page);
		}	

		/* truncate text */
		public function truncate($text) {
			if (strlen($text) > 200) {
			    $maxLength = 150;
			    $yourString = substr($text, 0, $maxLength);
			    return $yourString."...";
			}		
		}

		/* upload image */
		public function uploadImage($file) {
			$filename = basename($file['name']);
			$fileTMP  = $file['tmp_name'];
			$fileSize = $file['size'];
			$error    = $file['error'];

			$extension         = explode('.', $filename);
			$extension         = strtolower(end($extension));
			$allowed_extension = array('jpg', 'png', 'jpeg');

			if(in_array($extension, $allowed_extension) === true) {
				if($error === 0) {
					if($fileSize <= 209272152) {
						$fileRoot = 'images/'.$filename; /* folder to upload images */
						move_uploaded_file($fileTMP, $_SERVER['DOCUMENT_ROOT'].'/php_framework/public/'.$fileRoot);
						return $fileRoot;
					}else {
						$GLOBALS['imageError'] = "The file size is too large.";
					}
				}
			}else {
				$GLOBALS['imageError'] = "The extension is not allowed.";
			}
		}	

		/* delete image */
		public function deleteImage($image) {
			$image_path = "C:/xampp/htdocs/php_framework/public/".$image;
			chown($image_path, 666);
			unlink($image_path);
		}

		/* time ago */
		public function timeAgo($datetime){
			$time    = strtotime($datetime);
			$current = time(); 
			$seconds = $current - $time;
			$minutes = round($seconds / 60);
			$hours   = round($seconds / 3600);
			$months  = round($seconds * 2600640);

			if($seconds <= 60) {
				if($seconds == 0) {
					return 'now';
				}
			}else if($minutes <= 60) {
				return $minutes.'m ago';
			}else if($hours <= 24) {
				return $hours."h ago";
			}else if($months <= 12) {
				return date('M j', $time);
			}else {
				return date('j M Y', $time);
			}
		}	
		
	}
?>