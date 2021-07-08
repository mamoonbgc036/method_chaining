<?php
	namespace app;

	use App\Test;
	function myautoload($class){
		include_once str_replace("App\\","",$class).".php";
	}

	spl_autoload_register("\app\myautoload");

	new test();