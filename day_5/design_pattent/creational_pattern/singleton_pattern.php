<?php
	//singleton: dam bao chi duy nhat 1 thuc the cua 1 class duoc tao ra
	// khi can tao ra 1 class ma class do chi co mot doi tuong duy nhat va co the truy cap den doi tuong do o bat ky dau

	class Database {
		private static $instance;

		public static function getInstance() {
			if(!isset(self::$instance))	
			{
				self::$instance = new Database();
			}		
			return self::$instance;
		}

		private function __construct() {

		}
	}

	$db = Database::getInstance();
	$db2 = Database::getInstance();
	echo "<br>";
	var_dump($db2);
?>
