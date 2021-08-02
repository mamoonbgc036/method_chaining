<?php

$num = 121;

switch($num){
	case 10:
	echo "i am ten";
	break;
	case 11:
	echo "i am eleven";
	break;
	default:
	echo "i am not number";
	break;
	case 12:
	echo "i am twelve";
	break;
}

for ($i=0; $i < 10 ; $i++) { 
	for ($j=0; $j < 10 ; $j++) { 
		if( $i == $j ){
			echo "i is ".$i."\n";
			echo "j is ".$j."\n";
		}
	}
}
