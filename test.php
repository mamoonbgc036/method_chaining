<?php

	
	class Test{
		public $name;
		public $age = 20;

		// public function show(){
		// 	return $this->age;
		// }
	}

	class Child extends Test{
		// public function __construct($name){
		// 	$this->name = $name;
		// }

		public function show(){
			return $this->name;
		}
	}

	$x = new Test();

	$y = clone $x;

	$y->age = 50;

	echo $x-> age;

	echo "<br/>";

	echo $y -> age;
