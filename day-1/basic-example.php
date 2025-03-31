<?php
	// echo phpinfo();
	// echo "hello"

	// if(isset($_POST['ten_dang_nhap'])) {
	// 	$name = $_POST['ten_dang_nhap'];
	// 	echo $name;
	// }

	// if (!empty($_SERVER['HTTP_CLIENT_IP']))     
	// 	{  
	// 		$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
	// 	}  
	// 	//Kiểm tra xem IP có phải là từ Proxy  
	// 	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
	// 	  {  
	// 		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	// 	  }  
	// 	//Kiểm tra xem IP có phải là từ Remote Address  
	// 	else  
	// 	  {  
	// 		$ip_address = $_SERVER['REMOTE_ADDR'];  
	// 	  }  
	// 	echo "Địa chỉ Client IP là: $ip_address";

	// THONG TIN LIEN QUAN DEN TRINH DUYET DANG SU DUNG
	// echo $_SERVER['HTTP_USER_AGENT'];

	//TEN FILE HIEN TAI
	// echo $_SERVER['PHP_SELF'];

	//LAY URL TRONG PHP
	$url = 'https://vietjack.com/bai-tap-php/lay-url-trong-php.jsp';
	$url = parse_url($url);
	echo 'Scheme: '.$url['scheme']."<br>";
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Nhap ten
	</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="ten_dang_nhap">
		<input type="submit" name="btn">
	</form>
</body>
</html> -->