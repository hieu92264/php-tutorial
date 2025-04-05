<?php
	/*Sử dụng array_merge để ghép nối 2 mảng thành một mảng mới.

	Sử dụng array_reverse để đảo ngược mảng kết quả.

	Hiển thị mảng gốc, mảng ghép nối và mảng đảo ngược ra màn hình.*/
	$array1 = [1, 2, 3];
	$array2 = [4, 5, 6];

	echo "<pre>";
	var_dump(array_merge($array1, $array2));
	echo "</pre>";

	echo "<pre>";
	var_dump(array_reverse(array_merge($array1, $array2)));
	echo "</pre>";

?>