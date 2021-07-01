<?php

	
	class Test{
		public $name;
		public $age = 20;
	}

	$x = new Test();

	$y = clone $x;
	$x = null;

	var_dump($y->age);