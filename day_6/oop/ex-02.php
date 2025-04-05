<?php
	require_once 'ex-01.php';

	class Student extends person {
		public $studentID;
		public function __construct($studentID='92264') {
			parent::__construct();
			$this->studentID='92264';
		}

		public function getFullName() {
			return $this->firstName.' - '.$this->lastName.' - '.$this->studentID;
		}
	}

	$student = new Student();

	var_dump($student->getFullName());
?>