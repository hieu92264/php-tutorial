<?php
	// set - thiet lap cac thuoc tinh cho doi tuong cho du thuoc tinh do chua duoc khai bao trong class
	// get - lay gia tri cac thuoc tinh co trong class cho du thuoc tinh do duoc gan khoa private hoac protected

	class Cat {
		private $name;
		private $age;
		
		public function __construct($name='nhau', $age='21') {
			$this->name = $name;
			$this->age = $age;
		}

		public function __set($name, $value) {
			return $this->$name = $value;
		}

		public function __get($name) {
			return $this->$name;
		}

		public function showInfo() {
			echo 'Name: '.$this->name.'<br>';
			echo 'Age: '.$this->age.'<br>';
		}

	}

	$cat = new cat();
	$cat->name = 'hoang';
	// $cat->showInfo();

	echo $cat->age;
?>
