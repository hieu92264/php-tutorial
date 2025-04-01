<?php
	$menu = array();
	$menu[] = array('id' => 1, 'name' => 'Home', 'parents' => 0);
	$menu[] = array('id' => 2, 'name' => 'About', 'parents' => 0);
	$menu[] = array('id' => 3, 'name' => 'News', 'parents' => 0);
	$menu[] = array('id' => 4, 'name' => 'Products', 'parents' => 0);
	$menu[] = array('id' => 5, 'name' => 'Contact', 'parents' => 0);
	$menu[] = array('id' => 6, 'name' => 'Tin trong nuoc', 'parents' => 3);
	$menu[] = array('id' => 7, 'name' => 'Tin nuoc ngoai', 'parents' => 3);
	$menu[] = array('id' => 8, 'name' => 'CNTT', 'parents' => 6);
	$menu[] = array('id' => 9, 'name' => 'Lap trinh', 'parents' => 6);
	$menu[] = array('id' => 10, 'name' => 'IT', 'parents' => 7);
	$menu[] = array('id' => 11, 'name' => 'Programing', 'parents' => 7);
	$menu[] = array('id' => 12, 'name' => 'Software', 'parents' => 4);
	$menu[] = array('id' => 13, 'name' => 'Mobile', 'parents' => 4);
	$menu[] = array('id' => 14, 'name' => 'Anti virus', 'parents' => 12);
	$menu[] = array('id' => 15, 'name' => 'Nokia', 'parents' => 13);
	$menu[] = array('id' => 16, 'name' => 'Sam sung', 'parents' => 13);
	$menu[] = array('id' => 17, 'name' => 'S1', 'parents' => 16);
	$menu[] = array('id' => 18, 'name' => 'S1.1', 'parents' => 17);

	$menu1 = array();
	$menu1[] = array('id' => 1, 'name' => 'Home', 'parents' => 0, 'level' => 1);
	$menu1[] = array('id' => 2, 'name' => 'About', 'parents' => 0, 'level' => 1);
	$menu1[] = array('id' => 3, 'name' => 'News', 'parents' => 0, 'level' => 1);
	$menu1[] = array('id' => 6, 'name' => 'Tin trong nuoc', 'parents' => 3, 'level' => 2);
	$menu1[] = array('id' => 8, 'name' => 'CNTT', 'parents' => 6, 'level' => 3);
	$menu1[] = array('id' => 9, 'name' => 'Lap trinh', 'parents' => 6, 'level' => 3);
	$menu1[] = array('id' => 7, 'name' => 'Tin nuoc ngoai', 'parents' => 3, 'level' => 2);
	$menu1[] = array('id' => 10, 'name' => 'IT', 'parents' => 7, 'level' => 3);
	$menu1[] = array('id' => 11, 'name' => 'Programing', 'parents' => 7, 'level' => 3);
	$menu1[] = array('id' => 4, 'name' => 'Products', 'parents' => 0, 'level' => 1);
	$menu1[] = array('id' => 12, 'name' => 'Software', 'parents' => 4, 'level' => 2);
	$menu1[] = array('id' => 14, 'name' => 'Anti virus', 'parents' => 12, 'level' => 3);
	$menu1[] = array('id' => 13, 'name' => 'Mobile', 'parents' => 4, 'level' => 2);
	$menu1[] = array('id' => 15, 'name' => 'Nokia', 'parents' => 13, 'level' => 3);
	$menu1[] = array('id' => 16, 'name' => 'Sam sung', 'parents' => 13, 'level' => 3);
	$menu1[] = array('id' => 17, 'name' => 'S1', 'parents' => 16, 'level' => 4);
	$menu1[] = array('id' => 18, 'name' => 'S1.1', 'parents' => 17, 'level' => 5);
	$menu1[] = array('id' => 5, 'name' => 'Contact', 'parents' => 0, 'level' => 1);


	function recusive($source, $parent, $level, &$newArray) {
		foreach($source as $key => $value) {
			if($value['parents'] == $parent) {
				$value['level'] = $level;
				$newArray[] = $value;
				unset($source[$key]);
				$childParent = $value['id'];
				recusive($source, $childParent, $level + 1, $newArray);
			}
		}
	}

	function selectBox($source, $selected = 0, $name, $style=null, $size=0) {
		$xhtml = '<select name="'.$name.'" id="'.$name.'" style="'.$style.'" size="'.$size.'">';
		foreach($source as $key => $value) {
			$strSelected = '';
			if($value['id'] == $selected) {
				$strSelected = 'selected="selected"';
			}
			if($value['level'] == 1) {
				$xhtml .= '<option value = "'.$value['id'].'" '.$strSelected.'>+ '.$value['name'].'</option>';
			} else {
				$name = str_repeat('&nbsp', ($value['level']-1)*5).'- '.$value['name'];
				$xhtml .= '<option value = "'.$value['id'].'" '.$strSelected.'>'.$name.'</option>';
			}
		}
		$xhtml .= '</select>';
		return $xhtml;
	}

	recusive($menu, 0, 1, $newArray);
	// echo selectBox($newArray, 1, 'menuBox', 'min-width: 200px; padding: 3px;', 5);
	function recusiveUlLi($source, $parent, $level, &$newArray) {
		foreach($source as $key => $value) {
			if($value['parents'] == $parent) {
				$value['level'] = $level;
				$newArray[] = $value;
				unset($source[$key]);
				$childParent = $value['id'];
				recusive($source, $childParent, $level + 1, $newArray);
			}
		}
	}
?>


	

