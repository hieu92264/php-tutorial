<?php
	/*Yêu cầu:

	Sử dụng array_chunk để tách mảng thành các mảng con, mỗi mảng con có tối đa 3 phần tử.

	Hiển thị mảng kết quả ra màn hình.*/

	$numbers = range(1, 10);
	echo "<pre>";
	var_dump(array_chunk($numbers, 3));
	echo "</pre>";
?>