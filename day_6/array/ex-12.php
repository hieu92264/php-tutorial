<?php
	/*
	Danh sách buổi học trong tuần:

	$weekSchedule = [
	    'Mon' => 'Toán',
	    'Tue' => 'Lý',
	    'Wed' => 'Hoá',
	];

	1. Thêm buổi học mới vào cuối tuần (Thứ 5: "Sinh học")
	2. Xoá buổi học thứ 3
	3. Chèn buổi học mới vào sau Thứ 2 (Thứ 2.5: "Tin học")
	4. In lại toàn bộ lịch học
	*/

	$weekSchedule = [
	    'Mon' => 'Toán',
	    'Tue' => 'Lý',
	    'Wed' => 'Hoá',
	];

	array_push($weekSchedule, array('th' => 'Sinh hoc'));
	// var_dump($weekSchedule);

	unset($weekSchedule['Tue']);
	// var_dump($weekSchedule);

	$newArr = [];

	foreach($weekSchedule as $key => $value) {
		$newArr[$key]=$value;
		if($key == 'Mon') {
			$newArr['Mon 2.5'] = 'Tin hoc';
		}
	}

	var_dump($newArr);

?>