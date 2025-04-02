<?php
//function die()

//hide error

	// $config = ini_get_all(); // lay tat ca cac gia tri thuoc tinh duoc set trong php.ini
	// echo "<pre>";
	// print_r($config);
	// echo "</pre>";

	// $timeZone = ini_get('date.timezone');
	// echo $timeZone;

	// ini_set('date.timezone', 'Asia/Ho_Chi_Minh');
	// echo ini_get('date.timezone');\

	# an loi tren trang web tranh de nguoi dung thay loi~
	// ini_set('display_errors', 'off');
	// ini_set('log_errors', 'on');
	// ini_set('error_log', 'php-error.log');

	#custom hide error
	
	// error_reporting(E_ALL);
	// error_reporting(E_WARNING);
	// error_reporting(E_NOTICE);
	// ini_set('error_reporting', 0);

	// foreach ($array as $key => $value) {
	// 	$html .= $value;
	// }

	#Custom error error_function(error_level, error_message, error_file, error_line, error_context)
	// error_level: error report level (E_NOTICE, E_WARNING, E_ALL,....)
	// error_message: noi dung thong bao loi hien thi
	//error_file: ten file xay ra loi
	//error_line: xay ra loi o dong nao

	function myError($error_level, $error_messgae, $error_file, $error_line) {
		echo '<pre>';
		echo $error_level;
		echo '</pre>';
		$result = "<b>Error number</b>: ".$error_level;
		die($result);
	}

	set_error_handler('myError', E_ALL);

	echo $test;
?>