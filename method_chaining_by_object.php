<?php

class demo{
	public $price;
	public $bill;

	public function setPrice($price){
		$this->price = $price;
		return $this;
	}

	public function calculateBill($person){
		$this->bill = $this->price*$person;
		return $this;
	}

	public function getBill(){
		return $this->bill;
	}
}

$ob = new demo();

$bills = $ob->setPrice(4)->calculateBill(13)->getBill();

echo $bills;

class Methodchaining{
	private static $_instance;

	public static function getInstance(){
		self::$_instance = new Methodchaining();

		return self::$_instance;
	}
}

class Test{
	private $_name;
	public function __construct($name){
		$this->_name = $name;
	}
}

class AnotherTest extends Test{
	public function __construct($name){
		parent::__construct($name);
	}
}
?>