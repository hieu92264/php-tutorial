<?php
	//giam su phu thuoc giua cac lop, tao ra su linh hoat cao, de bao tri ung dung
	class Playstation {
		private $game;

		public function __construct($type = 'fifa') {
			switch ($type) {
				case 'mario':
					$this->game = new Mario();
					break;
				case 'lol':
					$this->game = new Lol();
					break;
				default:
					$this->game = new Fifa();
					break;
			}
			
		}

		public function play() {
			$this->game = new Fifa();
			echo 'Playing';
		}
	}



	$playstation = new Playstation();

	$playstation->play();
?>