<?php

	//type NULL
	$var = NULL;
	if(is_null($var)) {
		echo "true";
	} else echo "false";
	echo "<br>";
	$var = "nguyen the hieu";
	echo $var;
	echo "<br>";
	unset($var); // delete variable
	if(!isset($var)) {
		echo "true";
	}
?>