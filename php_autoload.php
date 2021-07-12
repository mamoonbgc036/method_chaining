<?php
	namespace App;

	use App\auto\load\show;

	function my_autoload($class){
		include_once str_replace("App\\","",$class).".php";
		//echo $class;die();
	}

	spl_autoload_register("App\my_autoload");

	new show();

	// use App\auto\load\show;
	// new show();

	// in above case, autoload will have App\auto\load\show.php class irrespective of haveing namespace;

	// new App\auto\load\show();

	// in above case, autoload will have App\App\auto\load\show.php in present file.