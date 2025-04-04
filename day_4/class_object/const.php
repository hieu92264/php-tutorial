<?php
	// dinh nghia cac gia tri khong thay doi bang tu khoa const
	class sample {
		const money = 1000;

		public $money = "This is a test";

		public function showInfo() {
			// echo sample::money; cach 1
			// echo self::money; cach 2
			// echo $this::money; cach 3
		}
	}

	$sample = new sample();
	// echo $sample->money;
	// echo "<br>";
	// echo sample::money;

	$sample->showInfo();
?>