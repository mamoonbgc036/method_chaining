<?php 

	function my_loader($class){
		include_once str_replace("app\\", "/", $class).".php";
	}

	spl_autoload_register("my_loader");

	//require_once "vendor/autoload.php";

	new app\animals\dog();

	print "<br/>";

	new app\humans\student();

	print "<br/>";

	new app\dog();