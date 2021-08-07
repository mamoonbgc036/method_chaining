<?php

echo __FILE__;
echo "\n";
echo __DIR__;
echo "\n";

function name(){
	return __FUNCTION__;
}

echo name();

echo "\n";

class Test{
	public function getClassName(){
		return __CLASS__;
	}
}

$x = new Test();
echo $x->getClassName();