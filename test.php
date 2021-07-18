<?php

 class Test{
	public $name;
	public $eligible = false;
	public static $instance;

	public static function getInstance(){
		if (!isset($instance)){
			static::$instance = new Test();
		}
		return static::$instance;
	}

 	public function get_Student($name){
 		$this->name=$name;
 		return $this;
 	}

 	public function isAbove35($age){
 		if ($age > 35){
 			$this->eligible = true;
 		}
 		return $this->eligible;
 	}
 }

 Test::getInstance()->get_Student("mamoon")->isAbove35(36);
	
