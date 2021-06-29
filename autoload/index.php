<?php 

	function my_loader($class){
		include_once str_replace("app\\", "/", $class).".php";
	}

	spl_autoload_register("my_loader");

	new app\animals\dog();