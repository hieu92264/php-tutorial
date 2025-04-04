<?php
	// static khong can khoi tao doi tuong, truy cap nhan cac method or attribute trong class
	// khi 1 thuoc tinh co static o lop cha thi khong the override lai o lop con
	// khong co tu khoa static thi khong co self

	class Sample {
		public static $a = 1000;

		static public function showInfo() {
			echo 'show info';
		}
	}

	$sample = new Sample();

	// echo $sample->a; // error
	// echo $sample->showInfo();
	echo Sample::showInfo();
	// echo Sample::$a;
?>