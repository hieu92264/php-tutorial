<?php
	require_once 'cat.php';

	$catA = new cat('Mini', 'yellow', 3);

	$catA->showInfo();

	echo "<hr/>";

	// $catB = $catA;
	// $catB->setName('Kitty');

	// $catB->showInfo(); // se anh huong den thong tin cua catA

	# => su dung clone()

	$catB = clone $catA;

	echo $catB->showInfo();
?>