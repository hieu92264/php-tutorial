<?php
	/*Sử dụng explode để chuyển chuỗi thành mảng.

	Thực hiện một số thao tác trên mảng (ví dụ: sắp xếp theo thứ tự bảng chữ cái với sort).

	Sử dụng implode để nối các phần tử của mảng thành một chuỗi mới, cách nhau bởi dấu gạch ngang (-). */

	$string = "PHP,JavaScript,Python,Java,C++";

	$newArr = explode(',', $string);

	echo "<pre>";
	var_dump($newArr);
	echo "</pre>";

	echo "<pre>";
	echo implode('-', $newArr);
	echo "</pre>";

?>