<?php

	/*Dùng array_reduce để tính điểm trung bình của lớp.

	Dùng array_filter để lọc ra các học sinh có điểm số cao hơn trung bình vừa tính.

	Hiển thị điểm trung bình và danh sách các học sinh đạt trên trung bình (kèm theo điểm số của từng học sinh).*/

	$students = [
	    ['name' => 'An',   'score' => 75],
	    ['name' => 'Bình', 'score' => 85],
	    ['name' => 'Chi',  'score' => 65],
	    ['name' => 'Dung', 'score' => 90],
	];

	function sum($sum, $item) {
		return $sum += $item['score'];
	}
	/* $diemtrungbinh = array_reduce($students, fn($sum=0, $item['score']) => ($sum+=$item['score']))/count($students); : sai tai vi Trong PHP, arrow function không cho phép bạn định nghĩa giá trị mặc định hoặc truy cập mảng trực tiếp trong tham số, như $item['score'] trong tham số là không hợp lệ.
	*/
	$diemtrungbinh = array_reduce($students, fn($sum, $item) => $sum+=$item['score'], 0)/count($students);

	// $diemtrungbinh = array_reduce($students, "sum", 0)/count($students);

	var_dump($diemtrungbinh);
	echo "<br>";


	// function compareAvg($item) {
	// 	global $diemtrungbinh;
    // 	return $item['score'] > $diemtrungbinh;
	// }

	$compareAvg = function($item) use ($diemtrungbinh) {
		// global $diemtrungbinh;
		return $item['score'] > $diemtrungbinh;
	};



	// $newStudents = array_filter($students, fn($item) => $item['score'] > $diemtrungbinh);
	// $newStudents = array_filter($students, "compareAvg");
	$newStudents = array_filter($students, $compareAvg);
	echo "<pre>";
	var_dump($newStudents);
	echo "</pre>";
?>