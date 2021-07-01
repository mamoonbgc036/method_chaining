<?php
	
	function checkDouble($x){
		$a = $x[0];
		while (count($x) >= 0) {
			for ($i=1; $i <= count($x) ; $i++) { 
				if($a==$x[$i]){
					return true;
				}
			}
			array_shift($x);
		}
		return false;
	}

	echo checkDouble([1,2,3]);
