<?php

	class Test{
		private $_name;
		private $_eligibility = false;
		private static $_instance;

		public static function getInstance(){
			if (!isset($_instance)){
				self::$_instance = new Test();	
			}
			return self::$_instance;
		}

		public function check($properties){
			$this->_name = $properties[0];
			$this->checkAge($properties[1]);
			$this->checkProfession($properties[2]);
		}

		private function checkAge($age){
			if ( $age > 35 ){
				$this->_eligibility = true;
				$this->result();
			}
		}

		private function checkProfession($profession){
			if ( $profession == "farmar" || $profession == "student" ){
				$this->_eligibility = true;
				$this->result();
			} else{
				$this->result();
			}
		}

		private function result(){
			if ( !$this->_eligibility ){
				return $this->_name ." is not eligible to take the vaccin.";
			}
			return $this->_name ." is eligible to take the vaccin.";
		}
		
	}

	$x = Test::getInstance();
	echo $x->check(["mamoon",36,"jobholder"]);
	echo '\n';
	echo $x->check(['noman',20,'jobholder']);

	
