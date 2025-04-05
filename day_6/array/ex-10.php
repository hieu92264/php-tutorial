<?php
	/*
	Giả sử bạn đang xây dựng hệ thống xếp hàng cho khách hàng tại ngân hàng.

	1. Ban đầu có danh sách khách hàng: ['An', 'Bình', 'Chi']
	2. Một khách mới ('Dung') đến => thêm vào **cuối mảng**
	3. Một khách rút lui sớm => xoá **ở đầu mảng**
	4. In danh sách khách hàng hiện tại
	*/
	
	$arr = ['An', 'Bình', 'Chi'];

	// array_push($arr, 'Dung');
	$arr[] = 'Dung';

	// var_dump($arr);


	//cach 1:

	// array_shift($arr);

	// var_dump($arr);

	//cach 2:
	unset($arr[0]);
	$newArr = array_values($arr);
	var_dump($newArr);

?>