<?php


	function myautoload($class){
		include str_replace("App\\", "", $class).".php";
	}
	spl_autoload_register("myautoload");

	//use App;

	new App\Test();