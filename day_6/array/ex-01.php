<?php

	// Sử dụng array_filter để lọc ra các sản phẩm có giá lớn hơn 100.

	// Sử dụng array_map để chuyển mỗi sản phẩm thành chuỗi theo định dạng:
	// "Sản phẩm: [name] - Giá: [price]"

	// Sắp xếp danh sách kết quả theo giá (theo thứ tự tăng dần) bằng array_multisort: dau tien dung array_column de lay danh sach price, sau do dung array_multisort(tieu chi, loai sap xep, mang can sap xep)

	// Hiển thị danh sách kết quả ra màn hình.
	$products = [
	    ['name' => 'Sản phẩm A', 'price' => 80,  'category' => 'Điện tử'],
	    ['name' => 'Sản phẩm B', 'price' => 150, 'category' => 'Gia dụng'],
	    ['name' => 'Sản phẩm C', 'price' => 120, 'category' => 'Thời trang'],
	    ['name' => 'Sản phẩm D', 'price' => 90,  'category' => 'Điện tử'],
	];

	$newProducts = array_filter($products, fn($item) => $item['price'] > 100);
	echo "<pre>";
	var_dump($newProducts);
	echo "</pre>";

	// function convertToString($item) {
	// 	return "Products: ".$item['name']." - Price: ".$item['price'];
	// }

	$convertToString = fn($item) => "Products: ".$item['name']." - Price: ".$item['price'];
	echo "<pre>";
	// var_dump(array_map("convertToString", $products));
	var_dump(array_map($convertToString, $products));
	echo "</pre>";

	$price = array_column($products, 'price');
	array_multisort($price, SORT_ASC, SORT_NUMERIC, $products);
	echo "<pre>";
	var_dump($products);
	echo "</pre>";


	/*array_multisort() là một hàm mạnh mẽ trong PHP cho phép bạn sắp xếp nhiều mảng cùng lúc hoặc sắp xếp mảng đa chiều theo một hoặc nhiều tiêu chí. Dưới đây là giải thích chi tiết về cách hoạt động và cách sử dụng hàm này:

	1. Nguyên lý hoạt động
	Sắp xếp theo thứ tự "từ trái sang phải":
	Hàm array_multisort() sẽ sắp xếp mảng đầu tiên theo tiêu chí được chỉ định (ví dụ: theo thứ tự tăng dần hoặc giảm dần). Sau đó, nếu có các giá trị bằng nhau trong mảng đầu tiên, hàm sẽ dùng mảng thứ hai (và các mảng tiếp theo nếu cần) để "phá vỡ" các tie (hòa) đó theo thứ tự đã chỉ định.

	Ví dụ: Nếu bạn có hai mảng $price và $products (trong đó $price được trích xuất từ cột giá của mảng $products), hàm sẽ sắp xếp $price và đồng thời điều chỉnh thứ tự các phần tử trong $products theo cùng thứ tự sắp xếp đó.
	W3SCHOOLS.COM

	Giữ liên kết các phần tử:
	Khi sắp xếp các mảng song song, thứ tự của các phần tử trong các mảng sau được sắp xếp tương ứng theo kết quả của mảng đầu tiên. Điều này rất hữu ích khi làm việc với mảng đa chiều, giúp bạn sắp xếp các hàng (hoặc bản ghi) dựa trên một cột cụ thể mà không mất đi mối liên hệ giữa các trường dữ liệu.

	PHP.NET

	Chú ý về key:

	Các khóa kiểu chuỗi (associative keys) sẽ được giữ nguyên sau khi sắp xếp.

	Các khóa kiểu số (numeric keys) sẽ bị đánh lại (re-index) bắt đầu từ 0.

	W3RESOURCE.COM

	2. Cú pháp và các tham số
	Cú pháp cơ bản của hàm là:

	php
	Sao chép
	Chỉnh sửa
	array_multisort(
	    array1, sorting_order1, sorting_type1,
	    array2, sorting_order2, sorting_type2,
	    ...,
	    arrayN
	);
	array1, array2, …, arrayN:
	Các mảng cần sắp xếp. Mảng đầu tiên là mảng chính được dùng làm tiêu chí sắp xếp ban đầu.

	sorting_order:
	Xác định thứ tự sắp xếp cho mảng đó. Các giá trị có thể là:

	SORT_ASC (tăng dần – mặc định)

	SORT_DESC (giảm dần)

	sorting_type:
	Xác định kiểu so sánh khi sắp xếp:

	SORT_REGULAR (so sánh thông thường)

	SORT_NUMERIC (so sánh dưới dạng số)

	SORT_STRING (so sánh dưới dạng chuỗi)

	SORT_LOCALE_STRING (so sánh dựa trên locale hiện tại)

	SORT_NATURAL (sắp xếp theo thứ tự tự nhiên giống natsort())

	SORT_FLAG_CASE (có thể kết hợp với SORT_STRING hoặc SORT_NATURAL để sắp xếp không phân biệt chữ hoa, chữ thường)

	Nếu không chỉ định, mặc định sẽ dùng SORT_ASC và SORT_REGULAR.*/
?>