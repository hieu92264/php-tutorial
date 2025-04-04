<?php
	// khi 1 doi tuong goi 1 phuong thuc, ma phuong thuc do chua duoc dinh nghia trong class thi __call() duoc goi thay the
	// khi 1 doi tuong goi 1 phuong thuc static, ma phuong thuc nay chua duoc dinh nghia trong class thi __callstatic() duoc goi thay the
	// ca 2 deu phai duoc khai bao o trang thai public
	class student {
		private $name;
		public function __construct() {
			$this->name = 'Hoang';
		}

		public function __call($name, $params) { //name la ten phuong thuc loi, params la cac thuoc tinh cua ham do
			echo __METHOD__ . "<br>";
			echo $name . "<br>";
			print_r($params) . "<br>"; 
		}

		static public function __callstatic($name, $params) {
			echo __METHOD__ . "<br>";
			echo $name . "<br>";
			print_r($params) . "<br>"; 
		}
	}

	$newStudent = new student();
	$newStudent->showInfo(); // error because function not define
	$newStudent::showInfo();

?>	