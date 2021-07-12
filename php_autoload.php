<?php

	include_once "clifton/delux/autoload.php";

	//use App\auto\load\show;


	new App\auto\load\show();

	// use App\auto\load\show;
	// new show();

	// in above case, autoload will have App\auto\load\show.php class irrespective of haveing namespace;

	// new App\auto\load\show();

	// in above case, autoload will have App\App\auto\load\show.php in present file.