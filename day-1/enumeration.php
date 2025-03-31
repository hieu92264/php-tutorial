<?php

declare(strict_types=1);
enum Suit: string
	{
		case Hearts = 'H';
		case Diamonds = 'D';
		case Clubs = 'C';
		case Spades = 'S';
	}

	function do_stuff(Suit $s) {
		echo $s->name;
		echo "<br>";
		echo $s->value;
	}

	do_stuff(Suit::Spades);
?>