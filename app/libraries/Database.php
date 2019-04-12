<?php
	use Illuminate\Database\Capsule\Manager as Capsule;

	class Database {
			
		public function __construct()
		{
		    $capsule = new Capsule;

		    $capsule->addConnection([
		     'driver'    => DB_DRIVER,
		     'host'      => DB_HOST,
		     'database'  => DB_NAME,
		     'username'  => DB_USER,
		     'password'  => DB_PASS,
		     'charset'   => 'utf8',
		     'collation' => 'utf8_unicode_ci',
		     'prefix'    => '',
		    ]);
		    // Setup the Eloquent ORM…
		    $capsule->setAsGlobal();
		    $capsule->bootEloquent();			
		}

	}
?>