<?php
	/*
	Viết một hàm đệ quy (recursive function) để "làm phẳng" mảng, nghĩa là biến mảng đa chiều thành mảng một chiều chứa tất cả các giá trị.
	Hiển thị mảng kết quả. */

	$nested = [
	    1,
	    [2, 3],
	    [4, [5, 6], 7],
	    8
	];

	function recursive($arr) {
		$newArr = array();
		foreach ($arr as $key => $value) {
			if(!is_array($arr[$key])) {
				$newArr[] = $value;
			} else $newArr = array_merge($newArr, recursive($arr[$key]));
		}
		return $newArr;
	}

	$newArr = recursive($nested);
	echo "<pre>";
	var_dump($newArr);
	echo "</pre>";

?>