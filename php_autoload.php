<?php
	
	function myautoload($class){
		include_once str_replace("App\\","",$class).".php";
	}

	spl_autoload_register("myautoload");

	use App\Test;
	new test();