<?php
	require_once 'cat.php';

	$cat = new cat('mini');
	$cat->showInfo();
	$strCat = serialize($cat);
	echo $strCat;

	$objCat = unserialize($strCat);
	echo "<pre>";
	print_r($objCat);
	echo "</pre>";
?>