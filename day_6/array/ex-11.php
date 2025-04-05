<?php
	/*
		Bạn có giỏ hàng với các sản phẩm như sau:

		$cart = [
		    ['id' => 101, 'name' => 'Áo thun', 'quantity' => 2],
		    ['id' => 102, 'name' => 'Quần jean', 'quantity' => 1]
		];

		1. Thêm một sản phẩm mới vào **đầu giỏ hàng**
		2. Xoá sản phẩm cuối cùng khỏi giỏ hàng
		3. Chèn sản phẩm khác vào **vị trí index = 1**
		4. In ra giỏ hàng cuối cùng
		*/

	$cart = [
		    	['id' => 101, 'name' => 'Áo thun', 'quantity' => 2],
		    	['id' => 102, 'name' => 'Quần jean', 'quantity' => 1]
			];

	// array_unshift($cart, ['id' => 100, 'name' => 'Ao vest', 'quantity' => 10]);
	// var_dump($cart);

	// array_pop($cart);
	// var_dump($cart);

	array_splice($cart, 1, 0, [array('id' => 100, 'name' => 'Ao vest', 'quantity' => 10)]);
	var_dump($cart);

?>