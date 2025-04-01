<?php

	// lay mui gio
	$timeZone = date_default_timezone_get();
	echo $timeZone."<br>";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	echo date_default_timezone_get()."<br>";

	$time = getdate();
	print_r($time)."<br>";

	//xem danh sach cac mui gio
	print_r(timezone_identifiers_list())."<br.";
?>
