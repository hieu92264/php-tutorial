<?php
	// session cho phep luu tru du lieu cua nguoi dung tren server de su dung o cac lan sau nhu (username, thong tin dat hang,....)
	// thong tin trong session chi la tam thoi va thuong bi xoa di ngay khi nguoi dung roi khoi trang web da dung session
	// moi session duoc cap 1 dinh danh (ID) khac nhau va noi dung duoc luu trong thu muc thiet lap trong file php.ini (tham so session.save_path)
	// session hoat dong bang cach tao 1 chuoi unique (uid) cho tung vistore va chua thong tin dua tren id do

	// session_start():khoi tao session, phai duoc dat truoc the html
	//	update session by $_session
	// delete session by unset() or session_destroy()
	session_start();
	// $_SESSION['name'] = 'Nguyen The Hieu';
	
	// print_r($_SESSION);

	session_destroy();

	$variable = 'This is a string';
	$array = array(
		'hieu' => array('fullName' => 'Nguyen The Hieu', 'class' => 'CNT62DH', 'age' => 21),
		'hoang' => array('fullName' => 'Nguyen The Hoang', 'class' => 'CNT62DH', 'age' => 21),
	);

	// $checkNumber = function($number) {
	// 	return ($number % 2 == 0) ? "so chan" : "so le";
	// };

	// $_SESSION['array'] = $array;
	// $_SESSION['variable'] = $variable;

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
?>