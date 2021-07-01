<?php

	
	class Test{
		public $name = "mamoon";
		private $age = 20;

		// public function show(){
		// 	return $this->age;
		// }
	}

	// class Child extends Test{

	// }

	$x = new Test();
	$y = clone $x;
	$y->name = "noman";

	echo $x->name;