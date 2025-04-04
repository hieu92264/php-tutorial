<?php
	// public co the truy cap o moi noi
	// protected co the truy cap o class do va class ke thua no
	// private chi co the truy cap o class do

	class sample {
		public $a = 'a';
		protected $b = 'b';
		private $c = 'c';

		public function showInfo() {
			echo $this->a."<br>";
			echo $this->b."<br>";
			echo $this->c."<br>";
		}
	}

	$sample = new sample();
	// echo $sample->a;
	// echo $sample->b; // error
	// echo $sample->c; // error

	$sample->showInfo();

	class sampleExtends extends sample {

	}

	$sample2 = new sampleExtends();
?>