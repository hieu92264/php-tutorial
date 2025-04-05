<?php
	require_once 'Shape.php';

	class Circle extends Shape {
		public $r;
		public function __construct($r) {
			$this->r = $r;
		}
		public function area() {
			return $this->r*$this->r*3.14;
		}
	}

	class Rectangle extends Shape {
		public $length;
		public $width;

		public function __construct($length, $width) {
			$this->length = $length;
			$this->width = $width;
		}

		public function area() {
			return $this->length * $this->width;
		}
	}

	$circle = new Circle(2);
	echo "Area Circle: ".$circle->area()."<br>";

	$rectangle = new Rectangle(4, 5);
	echo 'Area Rectangle: '.$rectangle->area();
?>