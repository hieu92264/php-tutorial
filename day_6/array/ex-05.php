<?php
	/*Dùng array_diff để tìm các sản phẩm có trong mảng A mà không có trong mảng B.

	Dùng array_intersect để tìm các sản phẩm chung giữa 2 mảng.

	Hiển thị kết quả ra màn hình*/

	$productsA = ['Sản phẩm A', 'Sản phẩm B', 'Sản phẩm C', 'Sản phẩm D'];
	$productsB = ['Sản phẩm C', 'Sản phẩm D', 'Sản phẩm E'];

	echo "<pre>";
	var_dump(array_diff($productsA, $productsB));
	echo "</pre>";

	echo "<pre>";
	var_dump(array_intersect($productsA, $productsB));
	echo "</pre>";

?>