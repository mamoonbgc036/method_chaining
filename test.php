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
	$y = $x;
	$z = clone $x;
	$y->name = "noman";
	$z->name = "sharif";

	// here variable x and y point to same object that why if there is change in object y, it will affect object x as well
	echo $x->name;
	echo "<br/>";

	// here as z is a clone object of Test class,it create another copy of Test class in the memory,so any change in z object will not affect in y and x variable
	echo $z->name;
	echo "<br/>";
	echo $y->name;