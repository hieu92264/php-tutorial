<?php
	$str = "PHP is easy";

	echo str_word_count($str);

	echo "<br>";

	echo strtoupper($str)."<br>";
	echo strtolower($str)."<br>";

	//chuyen doi ky tu dau tien trong chuoi thanh chu in hoa
	echo ucfirst($str)."<br>";

	//chuyen doi ky tu dau tien trong chuoi thanh chu thuong
	echo lcfirst($str)."<br>";

	//chuyen doi ky tu dau tien cua tung tu trong chuoi thanh chu in hoa
	echo ucwords($str)."<br>"; //PHP Is Easy

	//dao nguoc chuoi
	echo strrev($str)."<br>";

	//
?>