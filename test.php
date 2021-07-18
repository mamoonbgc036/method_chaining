<?php

	class Test{
		static $name;
		static $eligibility = false;

		public static function get_instance($properties){
			//var_dump($properties);
			static::$name = $properties[0];
			self::checkAge($properties[1]);
			self::checkProffesion($properties[2]);
		}

		public static function checkAge($age){
			if ($age > 35){
				self::$eligibility = true;
				self::result();
			}
		}

		public static function checkProffesion($profession){
			if ( $profession == "farmar"){
				self::$eligibility = true;
				self::result();
			} elseif ($profession == "student") {
				self::$eligibility = true;
				self::result();
			} else{
				self::result();
			}
		}

		public static function result(){
			if (!static::$eligibility){
				echo static::$name ." is not eligible to take the vaccin.";die();
			}
			echo static::$name ." is eligible to take the vaccin.";die();
		}

	}

	Test::get_instance(["mamoon",36,"jobholder"]);
	
