<?php
	require_once('cat.php');

	$cat = new cat('hello', 'yellow', 2);

	$cat->showInfo();

	class lion extends cat {
		// parent::$maxSpeed = '50km/h';
		public function showInfo() {
			parent::showInfo();
		}
	}

	$lion = new lion('Lion A', 'yellow', '4');

	$lion->showInfo();
?>