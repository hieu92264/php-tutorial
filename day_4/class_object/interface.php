<?php
	// lop chua keyword interface chi chua ten function khong khai bao gi ben trong function do duoc
	// 1 class co the implements nhieu interface
	interface people {
		public function eat();
		public function sleep();
	}

	class superman implements people {
		public function eat() {
			echo __METHOD__;
		}

		public function sleep() {
			echo __METHOD__;
		}
	}

	$superman1 = new superman();
	$superman1->eat();
	$superman1->sleep();
?>