<?php
	require_once 'validate.php';

	$source = [
		'name' => 'Nguyen The Hieu',
		'age' => 21,
		'url' => 'https://www.youtube.com/watch?v=69LaEk2flGs&list=PLv6GftO355AsZFXlWLKob6tMsWZa4VCY1&index=140',
		'email' => 'hieu92264st.vimaru.edu.vn',
	];

	$validate = new Validate($source);

	// $rules = [
	// 	'url' => [
	// 		'type' => 'url',
	// 	],
	// 	'email' => [
	// 		'type' => 'email',
	// 	],
	// 	// 'name' => [
	// 	// 	'type' => 'string',
	// 	// 	'min' => 10,
	// 	// 	'max' => 50
	// 	// ],
	// 	// 'name' => [
	// 	// 	'type' => 'string',
	// 	// 	'min' => 10,
	// 	// 	'max' => 50
	// 	// ],
	// ];

	// $validate->addRules($rules);
	$validate->addRule('name', 'string', 10, 50)
			->addRule('age', 'int', 1, 90)
			->addRule('url', 'url')
			->addRule('email', 'email');

	// echo "<pre>";
	// var_dump($validate);
	// echo "</pre>";

	$validate->run();
	// echo "<pre>";
	// var_dump($validate);
	// echo "</pre>";]

	echo "<pre>";
	var_dump($validate->getResult());
	echo "</pre>";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validate</title>
</head>
<body>
	<form action="validate.php" method="POST">
		
	</form>
</body>
</html>