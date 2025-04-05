<?php

	/*
	Yêu cầu:
	Cho một chuỗi gốc có chứa cả HTML và các ký tự đặc biệt. Bạn cần viết một script PHP để thực hiện các thao tác sau:

		Đếm số ký tự: Sử dụng hàm strlen() để đếm tổng số ký tự của chuỗi (bao gồm cả khoảng trắng và ký tự đặc biệt).

		Đếm số từ: Sử dụng hàm str_word_count() để đếm số từ (nên loại bỏ thẻ HTML nếu có).

		Chuyển chuỗi thành chữ HOA: Sử dụng strtoupper().

		Chuyển chuỗi thành chữ thường: Sử dụng strtolower().

		Đảo ngược chuỗi: Sử dụng strrev().

		Tìm kiếm một từ trong chuỗi: Sử dụng strpos() để xác định vị trí xuất hiện của từ "PHP".

		Thay thế từ: Thay thế từ “fun” bằng “awesome” trong chuỗi bằng str_replace().

		Cắt một đoạn chuỗi: Lấy một phần của chuỗi từ vị trí xác định với substr().

		Chuyển chuỗi thành mảng: Tách chuỗi (sau khi loại bỏ các thẻ HTML) thành mảng các từ bằng explode().

		Nối mảng thành chuỗi: Nối mảng các từ vừa tách lại thành chuỗi với dấu phân cách là dấu gạch ngang (-) bằng implode().

		Mã hóa chuỗi: Sử dụng hàm md5() để mã hóa chuỗi gốc.

		Loại bỏ thẻ HTML: Sử dụng hàm strip_tags() để loại bỏ tất cả các thẻ HTML trong chuỗi.

		Xử lý chuỗi có chứa dấu nháy đơn: Dùng addslashes() để thêm dấu gạch chéo (escape) cho các ký tự nháy đơn, sau đó dùng stripslashes() để khôi phục chuỗi ban đầu.

		Chuyển đổi ký tự xuống dòng thành thẻ <br>: Sử dụng hàm nl2br() để chuyển đổi ký tự xuống dòng (LF) thành thẻ HTML <br>.
	*/
	// Chuỗi gốc có chứa HTML và ký tự đặc biệt
	$originalString = "Hello, PHP is fun! Welcome to <b>coding</b> world.";

	echo "So luong ky tu trong chuoi: ".strlen($originalString)."<br>";
	echo "<br>";

	echo "Loai bo the html truoc khi dem: " . $cleanString = strip_tags($originalString)."<br>";
	echo "So tu trong chuoi: ".str_word_count($cleanString)."<br><br>";

	echo "Chuyen chuoi thanh chu HOA: ".strtoupper($originalString)."<br><br>";

	echo "Chuyen chuoi thanh chu thuong: ".strtolower($originalString)."<br><br>";

	echo "Dao nguoc chuoi: ".strrev($originalString)."<br><br>";

	echo "Vi tri xuat hien cua tu PHP: ".strpos($originalString, "PHP")."<br><br>";

	echo "Thay the tu fun thanh awesome: ".str_replace('fun', 'awesome', $originalString)."<br><br>";

	echo "Cat 1 phan chuoi tu vi tri xac dinh: ".substr($originalString, 7)."<br><br>";

	echo "Loai bo the html truoc khi convert to array: " . $cleanString = strip_tags($originalString)."<br>";
	echo "Chuyen string thang array: ";
	echo "<pre>";
	$arr = explode(' ', $cleanString);
	print_r(explode(' ', $cleanString));
	echo "</pre>";

	echo "<br>";
	echo "noi mang thanh chuoi: ".implode('-', $arr)."<br><br>";

	echo "Ma hoa chuoi: ".md5($cleanString)."<br><br>";

	
?>