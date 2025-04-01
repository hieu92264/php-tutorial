<?php
	// $fileName = "test.txt";
	// if(file_exists($fileName)) {
	// 	echo "true";
	// } else echo "false";

	// echo "<br>";
	// $type = filetype('C:\xampp\htdocs\php-tutorial\day-2');
	// echo $type."<br>";
	// $size = filesize($fileName);
	// echo $size."<br>";

	// //tra ve ket qua ten tap tin tu duong dan path
	// echo basename('C:\xampp\htdocs\php-tutorial\day-2\test.txt')."<br>";

	// // tra ve ten thu muc tai duong dan $path

	// echo dirname('C:\xampp\htdocs\php-tutorial\day-2\test.txt')."<br>";

	// //tra ve 1 mang cac thong tin`
	// print_r(pathinfo('C:\xampp\htdocs\php-tutorial\day-2\test.txt', PATHINFO_BASENAME));

	// // lay noi dung tu file
	// $data = file_get_contents($fileName);
	// echo "<br>";
	// print_r($data);
	// $data = "xin chao toi la hieu";
	// //ghi noi dung vao file
	// // file_put_contents("text.txt", $data); // ghi de or tao ra 1 file co ten va noi dung duoc truyen vao
	// // file_put_contents($fileName, $data, FILE_APPEND); // ghi them vao cuoi tap tin

	// //xoa 1 dong trong tap tin
	// if(file_exists($fileName)) {
	// 	$data = file($fileName);
	// 	print_r($data);
	// 	unset($data[2]);
	// 	file_put_contents($fileName, $data);
	// }

	// //rename
	// rename("text.txt", "text1.txt"); // luu y duong dan
	
	//4: read; 2: write; 1:excute

	// mkdir('abc', 0666); // tao folder
	// // rmdir('abc'); // xoa folder
	// chmod('abc', '0555');
	// echo substr(sprintf('%o', fileperms('abc')), -4);

	//liet ke cau truc tap tin thu muc
	
	function showAll($path, &$newString) {
		$data = scandir($path);
		// print_r($data);
		$newString .= '<ul>';

		foreach($data as $key =>$value) {
			if($value != '.' && $value !='..') {
				$dir = $path.'/'.$value;
				if(is_dir($dir)) {
					$newString .= '<li>D: '.$value.'</li>';
					showAll($dir, $newString);
					$newString .= '</li>';
				} else {
					$newString .= '<li>F: '.$value.'</li>';
				}
			}
		}
		$newString .= '</ul>';
	}

	$path = 'C:\xampp\htdocs\php-tutorial\day-2';
	showAll($path, $newString);
	echo $newString;
?>