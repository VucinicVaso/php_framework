<?php
	ob_start();

	/* DB Params */
	define('DB_DRIVER', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'phpframework');

	/* App Root */
	define('APPROOT', dirname(dirname(__FILE__)));
	/* URL Root*/
	define('URLROOT', 'http://localhost/php_framework');
	/* Site Name */
	define("SITENAME", 'PHP_FRAMEWORK');
?>
