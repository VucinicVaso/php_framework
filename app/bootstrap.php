<?php
	/* Load Composer autoload */
	require_once '../vendor/autoload.php';	

	/* Load Config */
	require_once 'config/config.php';

	/* Load Libraries */
	spl_autoload_register(function($className) {
		require_once 'libraries/'.$className.'.php';
	});

	/* Boot Database Connection (Illuminate\Database) */
	new Database();

	/* init core library */
	$url = new Core();
?>