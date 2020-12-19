<?php

class demo{
	public static $demo;
	public $price;
	public $bill;

	public static function setDemo(){
		self::$demo = new demo();
		return self::$demo;
	}

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


$bills = demo::setDemo()->setPrice(41)->calculateBill(13)->getBill();

echo $bills;
?>