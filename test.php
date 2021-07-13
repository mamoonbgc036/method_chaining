<?php
	
	class Test{

		public function __construct($name,$class,$age){
			$this->name($name);
			$this->classes($class);
			$this->age($age);
		}

		private function name($name){
			echo "Your name is ".$name;
			print "<br/>";
		}

		private function classes($class){
			echo "You read in class ".$class;
			print "<br/>";
		}

		private function age($age){
			echo "You are ".$age." old";
		}
	}

	new Test("mamoon",14,32);

	function add(&$i){
		$i++;
		echo $i;
	}

	$i=10;
	add($i);
	echo $i;

	
