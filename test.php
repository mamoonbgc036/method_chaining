<?php

	
	class Test{
		public $name;
		public $age = 20;
	}

	$x = new Test();

	$y = & $x;
	$x = null;

	var_dump($x);