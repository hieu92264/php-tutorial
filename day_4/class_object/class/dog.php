<?php
	class dog {
		public $name='dog';
		public $color='yellow';
		public $age=2;

		public function showInfo() {
			echo $this->name."<br>";
			echo $this->color."<br>";
			echo $this->age."<br>";
		}
	}
?>