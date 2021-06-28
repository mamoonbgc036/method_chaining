<?php
	use App\Test;

	function myAutoload($class){
		$x = str_replace("App\\", "", $class);
		include $x.".php";
	}

	spl_autoload_register("myAutoload");

	//include "App\\test.php";

	new Test();