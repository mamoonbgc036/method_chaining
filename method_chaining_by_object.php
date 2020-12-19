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
?>