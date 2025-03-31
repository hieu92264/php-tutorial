<?php
// format /pattern/modifiers
# pattern: mau can tim trong chuoi
# modifiers: bo dieu chinh giup thay doi cach thuc hoat dong cua bieu thuc chinh quy
	if(preg_match('/hello/i', 'hello word')) echo "true";
	// tim hello khong phan biet chu hoa chu thuong

# cac ky hieu co ban trong regex
/**
 *  '.'	-- bat ky ky tu nao tru xuong dong -- vidu: h.t => hot, hit, hat
 *  '\d' -- bat ky chu so nao (0-9) -- vidu: \d\d\d => '123', '454'
 * 	'\D' -- bat ky ky tu nao khong phai so -- vidu: \D\D => 'ab', 'a.'
 * 	'\w' -- bat ky chu cai, so hoac _ -- vidu: \w\w\w => 'abc', '123', 'a_1'
 * 	'\W' -- bat ky ky tu ko phai chu cai, so or _ -- vidu: \W\W => '@#',
 * 	'\s' -- khoang trang(space, tab, newline) -- vidu: \s\s => " ",
 * 	'\S' -- bat ky ky tu nao ko phai khoan trang -- vidu \S\S => "hi",
 * 	'\b' -- ranh gioi tu(word boundary), dam bao chi bat dau voi 1 tu -- vidu: \bHi\b => "Hi"-true; "Higher"-false
 *	'\B' -- ko phai ranh gioi tu -- vidu: \Bing => "hiking"-true; "ing"-false
 */
 # cac nhom ky tu (Character Classes)
 /**
  * [abc] -- mot trong cac ky tu a, b, c -- vidu: h[ae]llo => 'hello', 'hallo',
  * [^abc] -- bat ky ky tu nao khong phai a,b,c\
  * [a-z] -- bat ky chu cai thuong nao tu a-z
  * [a-zA-Z] -- khop voi moi chu cai
  * [0-9] -- bat ky chu so nao tu 0-9
  * [^0-9] -- khong khop voi so
  * /
?>