<?php
	
	// FILTER_VALIDATE_BOOLEAN chi chap nhan cac gia tri: 1, true, on
	// $x = false;
	// echo filter_var($x, FILTER_VALIDATE_BOOLEAN);
	// echo "<br>";
	// if(!filter_var($x, FILTER_VALIDATE_BOOLEAN)) {
	// 	echo "$x - khong la kieu boolean";
	// }

	// FILTER_VALIDATE_EMAIL
	// $email = "hieu92264@st.vimaru.edu.vn";
	// echo filter_var($email, FILTER_VALIDATE_EMAIL);

	//FILTER_VALIDATE_INT filter_var(variable, const, options)
	// $x = 9;
	// echo filter_var($x, FILTER_VALIDATE_INT, array("options" => array("min_range" => 5, "max_range" => "10")));

	// FILTER_VALIDATE_FLOAT (INT)
	// FILTER_VALIDATE_IP
	// FILTER_VALIDATE_URL

	//custom filter callback

	// $x = 'Nguyen The Hieu';
	// echo filter_var($x, FILTER_CALLBACK, array("options" => function($string) {
	// 	$string = str_replace(' ', 	'_', $string);
	// 	return $string;
	// }));

	#regex in PHP Filter
	// $value = '037-2-57-52-5';
	// $options = array('options' => array('regexp' => '#^037-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{1}$#'));
	// echo filter_var($value, FILTER_VALIDATE_REGEXP, $options);
	
	// $value = 'zendvn.png';
	// $options = array('options' => array('regexp' => '#\.(jpg|png|gif)$#'));
	// echo filter_var($value, FILTER_VALIDATE_REGEXP, $options);

	#filter var array kiem tra nhieu phan tu trong mang
	// $array = array('name' => 'nguyen the hieu', 'age' => 21, 'email' => 'hieu92264@st.vimaru.edu.vn');
	// $filters = array(
	// 	'name' => array(
	// 		'filter' => FILTER_CALLBACK,
	// 		'options' => 'ucwords'
	// 	),
	// 	'age' => array(
	// 		'filter' => FILTER_VALIDATE_INT,
	// 		'options' => array('min_range' => 0, 'max_range' => 35),
	// 	),
	// 	'email' => array(
	// 		'filter' => FILTER_VALIDATE_EMAIL,
	// 	),
	// );
	// $result = filter_var_array($array, $filters);
	// print_r($result);

	#filter input: su dung ktra gtri tu form

	// echo filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$filters = array(
		'email' => array(
			'filter' => FILTER_VALIDATE_EMAIL,
		),
		'name' => array(
			'filter' => FILTER_CALLBACK,
			'options' => 'ucwords',
		),
		'age' => array(
			'filter' => FILTER_VALIDATE_INT,
			'options' => array('min_range' => 1, 'max_range' => 30),
		),
	);
	echo "<pre>";
	print_r(filter_input_array(INPUT_POST, $filters));
	echo "</pre>"
?>
