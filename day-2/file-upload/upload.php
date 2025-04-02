<?php
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';

	function randomString($length = 5) {
		$arrayCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
		$arrayCharacter = implode('', $arrayCharacter);
		$arrayCharacter = str_shuffle($arrayCharacter);
		$result = substr($arrayCharacter, 0, $length);
		return $result;
	}

	function checkSize($size, $min, $max) {
		$flag = false;
		if($size >= $min && $size <= $max) {
			$flag = true;
		}
		return $flag;
	}

	// function checkExtension($fileName, $arrExtension) {
	// 	$flag = false;
	// 	foreach ($arrExtension as $value) {
	// 		if(strpos($fileName, $value)) {
	// 			$flag = true;
	// 		}
	// 	}
	// 	return $flag;
	// }

	function checkExtension($fileName, $arrayExtesion) {
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$flag = false;
		foreach ($arrayExtesion as $key => $value) {
			if($ext == $value) {
				$flag = true;
			}
		}
		return $flag;
	}

	$fileUpload = $_FILES['file-upload'];

	// if($fileUpload['name'] != null) {
	// 	$fileName = $fileUpload['tmp_name'];
	// 	$random = randomString(6);
	// 	$destination = './files/'.$random.$fileUpload['name'];
	// 	// move_uploaded_file($fileName, $destination);
	// 	if(copy($fileName, $destination)) {
	// 		echo "upload file success";
	// 	}
	// }

	$config = parse_ini_file('config.ini');
	// print_r($config);
	// $extArr = explode('|', $config['extension']);
	// echo "<br>";
	// echo $flagSize = checkSize($fileUpload['size'], $config['min_size'], $config['max_size']);
	// echo "<br>";
	// echo $flag = checkExtension($fileUpload['name'], $extArr);

	if($fileUpload['name'] != null) {
		foreach($fileUpload['tmp_name'] as $key => $fileName) {
			$random = randomString(6);
			$destination = './files/'.$random.$fileUpload['name'][$key];
			if(checkSize($fileUpload['size'][$key], $config['min_size'], $config['max_size']) && checkExtension($fileUpload['name'][$key], explode('|', $config['extension']))) {
				move_uploaded_file($fileName, $destination);
			}
		}
	}
?>	