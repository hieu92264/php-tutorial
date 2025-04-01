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
	// $url = 'https://vietjack.com/bai-tap-php/lay-url-trong-php.jsp';
	// $url = parse_url($url);
	// echo 'Scheme: '.$url['scheme']."<br>"; //result: http
	// echo 'Host: '.$url['host']."<br>"; // result vietjack.com
	// echo 'Path: '.$url['path']."<br>"; // result: /bai-tap-php/lay-url-trong-php.jsp

	//kiem tra trang duoc goi tu http hay https
	// if(!empty($_SERVER['HTTPS'])) {
	// 	echo "http";
	// } else {
	// 	echo "https";
	// }

	// check type email
	// $email = 'hieu92264@st.vimaru.edu.vn';
	// if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 	echo "email validated";
	// } else {
	// 	echo "Email not validated";
	// }

	//viet php de lay source code cua 1 trang web
	// $allLines = file('https://vietjack.com/');
	// foreach($allLines as $line_num => $line) {
	// 	echo "Dong thu {$line_num}". htmlspecialchars($line)."<br>";
	// }

	//lay thong tin Last modified cua file
	$file_name = basename($_SERVER['PHP_SELF']);
	$file_last_modified = filemtime($file_name);
	echo date("l, dS F, Y, h:ia", $file_last_modified);



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

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doi mau ky tu dau tien cua tu trong php</title>
</head>
<body>
	<?php
		// $text = 'Nguyen The Hieu';
		// $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
		// echo $text;
	?>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>redirect</title>
</head>
<body>
	<?php
		// header('Location: https://vietjack.com/');
	?>
</body>
</html> -->