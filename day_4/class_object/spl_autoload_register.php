<?php
	// tu dong nap cac lop tu 1 duong dan chua cac lop duoc truyen vao

	spl_autoload_register(function ($className) {
	    $path = './class/';
	    $file = $path . "{$className}.php";

	    if (file_exists($file)) {
	        require_once $file;
	    } else {
	        die("Class {$className} not found!");
	    }
	});

	// Tạo đối tượng cat
	$cat = new cat('mini');
	$cat->showInfo();

	$dog = new dog();
	$dog->showInfo();

?>