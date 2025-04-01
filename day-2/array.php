<?php
	$php = "php";
	$zend = "zend frame";
	$joomla = "joomla";

	$sources = array();
	$sources[] = "php";
	$sources[] = "zend";
	$sources[] = "joomla";

	$length = count($sources); // dem cac phan tu trong mang
	echo $length;
	echo "<br>";
	if(!empty($sources)) echo "mang co phan tu";
	echo "<br>";
	print_r($sources);

	//mang so nguyen or mang ltuc
	$subject = array();
	$subject[0] = "php";
	$subject[1] = "zend";
	$subject[2] = "joomla";
	$subject[3] = "php";

	//mang khong lien tuc
	$list_name = array();
	$list_name['hieu'] = 'NTH';
	$list_name['hoang'] = 'THH';
	echo "<br>";
	print_r($list_name);
	echo "<br>";
	//mang long hay mang da chieu
	$students = array();
	$students['001'] = array("name"=>"hieu", "sex"=>1, "age"=>21);
	$students['002'] = array("name"=>"hieu1", "sex"=>0, "age"=>20);
	$students['003'] = array("name"=>"hieu2", "sex"=>1, "age"=>21);
	print_r($students);
	echo "<br>";
	echo $students['002']['name'];
	echo "<br>";
	// lay key cua arr students
	print_r(array_keys($students));
	// lay values cua arr students
	echo "<br>";
	print_r(array_values($students));
	//loai bo phan tu o cuoi mang va tra ve phan tu cuoi cung cua mang
	echo "<br>";
	print_r(array_pop($students));
	//loai bo phan tu dau tien cua mang va tra ve phan tu dau tien do
	echo "<br>";
	print_r(array_shift($sources));
	//loai bo cac phan tu trung nhau trong mang
	echo "<br>";
	print_r(array_unique($subject));
	// xoa bo phan tu bat ky trong mang
	// unset() // xoa bo bien khong su dung
	//them 1 or nhieu phan tu vao cuoi mang, tra ve so phan tu cua mang
	echo "<br>";
	print_r(array_push($subject, "html", "css"));
	//them 1 or nhieu phan tu vao dau mang, tra ve so phan tu cua mang
	echo "<br>";
	print_r(array_unshift($subject, 'js', 'dart'));
	//dao nguoc vi tri cua mang
	echo "<br>";
	print_r(array_reverse($students));
	// hoan doi chi so va gia tri cua mang (dao key va value)
	echo "<br>";
	print_r(array_flip($list_name));
	// xac dinh phan tu lon nhat, nho nhat trong mang dung max(), min()
	// tong cac phan tu trong mang dung array_sum()
	// tra ve 1 mang key=(phan tu trong mang); value=(so lan xuat hien cua phan tu do trong mang)
	// array_count_values($arr)
	//nhap nhieu mang thanh 1 mang
	echo "<br>";
	print_r(array_merge($list_name, $subject));
	//tim kiem phan tu trong mang va tra ve key cua phan tu tim duoc
	echo "<br>";
	echo array_search("php", $subject);
	//kiem tra xem key co ton tai trong mang hay khong
	echo "<br>";
	if(!array_key_exists("004", $students)) {
		echo "false";
	} else echo "true";
	//kiem ra xem gia tri co ton tai hay khong
	echo "<br>";
	if(in_array("php", $subject)) {
		echo "true";
	} else echo "false";
	//chuyen doi key trong mang thanh chu hoa or chu thuong
	echo "<br>";
	print_r(array_change_key_case($list_name, CASE_UPPER)); // chuyen key thanh chu hoa
	echo "<br>";
	print_r(array_change_key_case($list_name)); // chuyen key thanh chu thuong
	//chuyen doi qua lai giua ham va chuoi
	echo "<br>";
	echo implode(", ", $subject);
	echo "<br>";
	print_r(explode(", ", "nguyen, the, hieu"));
	//truy xuat phan tu cua mang voi cac tu khoa current, end, next, previous
	//tao mang moi tu cac bien da co san compact()
	echo "<br>";
	$name = "Nguyen The Hieu";
	$age = 21;
	$info = compact("name", "age");
	print_r($info);
	//tao mang moi tu mang khoa va mang value su dung array_combine
	echo "<br>";
	$keys = array("php", "js", "jqurey");
	$values = array("PHP", "JS", "Jquery");
	print_r(array_combine($keys, $values));
?>