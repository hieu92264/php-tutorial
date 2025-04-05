<?php
	class person {
		public $firstName;
		public $lastName;
		public $age;

		public function __construct($firstName='Nguyen', $lastName='Hieu', $age=21) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}

		public function getFullName() {
			return $this->firstName.' '.$this->lastName;
		}
	}
?>