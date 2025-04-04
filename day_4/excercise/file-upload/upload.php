<?php
	require_once '../upload-01.php';
	$fileUpload = new Upload($_FILES['file-upload']);
	$fileUpload->setFileExtension(array('7z', 'png', 'jpg'));
	$fileUpload->setFileSize(102400, 5242880);
	$fileUpload->setUploadDir('./files/');
	// $fileUpload->isVail();

	if(!$fileUpload->isVail()) {
		echo "uploaded";
		$fileUpload->upload();
	}
?>