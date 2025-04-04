<?php
	class User {
		private $name;
		private $pass;
		private $fullName;

		public function __construct() {
			echo __METHOD__;
			echo "<br>";
		}

		public function __destruct() {
			echo __METHOD__;
		}
	}

	$user1 = new User();
?>