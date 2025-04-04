<?php
	class cat {
		//properties
		public $name;
		public $color;
		public $age;
		// static public $maxSpeed = '20km/h';

		//constructor

		// public function __construct() {
		// 	$this->name = 'kitty';
		// 	$this->color = 'yellow';
		// 	$this->age = 2;
		// }

		public function __construct($name = 'kitty', $color='blue', $age=4) {
			$this->name = $name;
			$this->color = $color;
			$this->age = $age;
		}

		// dung de setup nhung thuoc tinh co the chuyen vao chuoi dac biet voi serialize
		public function __sleep() {
			return array('name', 'age');
		}

		// thay doi or thiet lap mac dinh cua chuoi khi chuyen thanh object
		public function __wakeup() {
			$this->name = 'doraemon';
			$this->color = 'blue';
			$this->age = 10;
		}

		// public function cat($name = 'kitty', $color='blue', $age=4) {
		// 	$this->name = $name;
		// 	$this->color = $color;
		// 	$this->age = $age;
		// }

		// public function __construct($arr) {
		// 	// print_r($arr);
		// 	$this->name = $arr['name'];
		// 	$this->color = $arr['color'];
		// 	$this->age = $arr['age'];
		// }

		// destructor

		// public __destruct() {
			
		// }

		// method

		public function setName($value) {
			$this->name = $value;
		}

		public function setAge($value) {
			$this->age = $value;
		}

		public function setColor($value) {
			$this->color = $value;
		}

		public function getName() {
			return $this->name;
		}

		public function getColor() {
			return $this->color;
		}

		public function getAge() {
			return $this->age;
		}

		public function showInfo() {
			echo $this->getName()."<br>";
			echo $this->getColor()."<br>";
			echo $this->getAge()."<br>";
			// echo self::$maxSpeed."<br>";
		}

		public function __toString() {
			return "Name: ".$this->getName()." Color: ".$this->getColor()." Age: ".$this->getAge();
		}

	}
?>