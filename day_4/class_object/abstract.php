<?php
	//lop abstract khong khoi tao duoc truc tiep doi tuong ma phai qua cac class ke thua no
	abstract class laptop {
		public function keyboar() {
			// return __METHOD__;
		}

		public function ram() {

		}

		public function chipset() {

		}
	}

	class Acer extends laptop {
		
	}

	class Lenovo extends laptop {

	}

	$laptopAcer = new Acer();

	print_r($laptopAcer->keyboar());

?>
