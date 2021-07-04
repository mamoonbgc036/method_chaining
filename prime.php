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

  $name;

 echo isset($name) ? $name : "not applicable";
 print "<br/>";

echo $color = $color ?? "red";
