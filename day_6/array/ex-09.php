<?php

	//Sử dụng array_walk để nhân mỗi phần tử trong mảng với 2.
	//array_walk khong phu thuoc vao con tro cua mang, duyet toan bo mang

	$numbers = [10, 20, 30, 40];


	array_walk($numbers, fn(&$value, $key) => $value *= 2);

	echo "<pre>";
	var_dump($numbers);
	echo "</pre>";
?>