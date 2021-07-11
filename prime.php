<?php 

  function isPrime($number){
	for ($i=2; $i < $number ; $i++) { 
  		if($number%$i==0){
  			return false;
  		}
  	}
  	return true;
  }

  echo isPrime(6);



class Test{
      private $name;
        
        public function __construct($name){
          $this->name = $name;
            $this->show();
        }
        
        private function show(){
          echo $this->name;
        }
    }
    
    new Test("noman");

    trait x{
      public $name;
      public function take($name){
        $this->name = $name;
      }
    }

    trait y{
      public function show(){
        echo $this->name;
      }
    }

    class Main{
      use y;
      use x;
    }

    $z = new Main();
    $z->take("mamoon");
    $z->show();
