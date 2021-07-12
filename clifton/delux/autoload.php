<?php 

  namespace App;


  function my_autoload($class){
  	//include_once str_replace("App\\","",$class).".php";
  	echo $class;die();
  }

  spl_autoload_register("App\my_autoload");