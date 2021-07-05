<?php
	function myautoload($class){
		echo $class;die();
		include str_replace("App\\", "", $class).".php";
	}
	spl_autoload_register("myautoload");

	use App\test;

	new Tests();