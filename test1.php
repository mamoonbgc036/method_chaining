<?php
	
	function myAutoload($class){
		include $class.".php";
	}

	spl_autoload_register("myAutoload");

	new Test();