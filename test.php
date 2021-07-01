<?php

	
	class Test{
		public $name;
		private $age = 20;

		public function show(){
			return $this->age;
		}
	}

	class Child extends Test{

	}

	$x = new Child();

	var_dump($x->show());