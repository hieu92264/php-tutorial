<?php

	//truyen tham chieu
	// function pow2($n1, $n2) {
	// 	$result = 0;

	// 	$n1 = $n1 * $n1;
	// 	$n2 = $n2*$n2;

	// 	$result = $n1 + $n2;
	// 	return $result;
	// }

	// $n1 = 2;
	// $n2 = 4;
	// $number = pow2($n1, $n2);

	//truyen tham tri
	function pow2(&$n1, &$n2) {
		$result = 0;

		$n1 = $n1 * $n1;
		$n2 = $n2*$n2;

		$result = $n1 + $n2;
		return $result;
	}

	$n1 = 2;
	$n2 = 4;
	$number = pow2(&$n1, &$n2);


	//cac ham buil san trong php

	##String functions

	strlen($str); // do dai cua chuoi
	strpos($haystack, $needle) // tim vi tri dau dien cua chuoi con trong chuoi chinh
	str_replace($search, $replace, $subject) // thay the chuoi con $search bang $replace trong chuoi chinh $subject
	substr($string, $start, $length) // cat 1 phan tu chuoi $string bat dau tu $start, co do dai $length
	strtolower($str) // chuyen toan bo ve chu thuong
	strtoupper($string) // chuyen toan bo ve chu in hoa
	trim($str) // loai bo khoang trang dau va cuoi cua $str
	explode($delimiter, $string) //tach chuoi thanh mang dua tren $delimiter
	implode($glue, $array) //noi cac phan tu cua mang thanh chuoi voi ky tu $glue
	strrev($string) // dao nguoc chuoi


	##Array Function
	array_push($array, $val) // them 1 or nhieu phan tu vao cuoi bang
	array_pop($array) // loai bo phan tu cuoi cung cua mang va tra ve no
	array_shift($array) // xoa phan tu dau tien cua mang va tra ve no
	array_unshift($array, $var) //them phan tu vao dau mang
	array_merge($array1, $array2) // gop 2 or nhieu mang thanh 1
	array_keys($arr) // lay danh sach cac key cua mang
	array_values($array) // lay danh sach cac gia tri cua mang
	in_array($value, $array) // tim key tuong uong voi value trong mang

	##File Handling
	fopen($filename, $mode) // mo 1 tep voi che do chi dinh r, w, a....
	fclose($handle) // dong tep
	fwrite($handle, $data) //Ghi data vao tep
	fread($handle, $length) // doc length byte tu tep
	file_get_contents($filename) //doc toan bo noi dung cua 1 tep vao 1 chuoi
	file_put_contents($filename, $data) //ghi noi dung $data vao tep (ghi de or them)
	unlink($filename) // xoa 1 tep
	file_exists($filename) //kiem tra xem tep co ton tai hay khong

	## date time functions
	time() // tra ve timestamp hien tai
	date($format, $timestamp) // tra ve ngay thang theo dinh dang $format
	strtotime($string) // chuyen doi chuoi ngay thang sang timestamp
	mktime($hour, $munute, $second, $month, $day, $year) // tao timestamp tu ngay thang cu the
	getdate($timestamp) //tra ve 1 mang chua thong tin ve ngay thang cua timestamp

	##Math functions
	round($val, $num) // lam tron so voi $num chu so thap phan
	ceil($number) // lam tron number len so nguyen gan nhat
	floor($value) // lom trong number xuong so nguyen gan nhat
?>