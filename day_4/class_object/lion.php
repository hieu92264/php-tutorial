<?php
	require_once('cat.php');
	class lion extends cat {
		private $height='1m2';

		public function getHeight() {
			return $this->height;
		}

		public function showInfo() {
			echo $this->getName()."<br>";
			echo $this->getColor()."<br>";
			echo $this->getAge()."<br>";
			echo $this->getHeight();
		}

	}

	$arr = array('name' => 'Lion A', 'color' => 'yellow', 'age' => 4);
	// print_r($arr);
	$lionA = new lion($arr);

	$lionA->showInfo();
?>