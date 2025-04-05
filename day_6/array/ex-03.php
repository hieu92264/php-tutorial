<?php
	/*Xóa phần tử tại một vị trí nhất định (ví dụ: index 3).

	Sử dụng array_values để tái chuẩn hóa mảng (làm mới các chỉ số mảng từ 0).

	Hiển thị mảng ban đầu và mảng sau khi xóa phần tử.*/

	$numbers = [0 => 10, 1 => 20, 2 => 30, 3 => 40, 4 => 50];

	// unset($numbers[3]);
	array_splice($numbers, 3, 1, []);


	echo "<pre>";
	var_dump($numbers);
	echo "</pre>";

	$newArr = array_values($numbers);

	echo "<pre>";
	var_dump($newArr);
	echo "</pre>";

?>