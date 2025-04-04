<?php
	class Upload {

		// variable store name file
		private $_fileName;

		// store size file
		private $_fileSize;

		// store 
		private $_fileExtension;

		// store path tmp
		private $_fileTmp;

		// store error
		private $_errors;

		// store path upload

		private $_uploadDir;

		public function __construct($fileUpload) {
			$this->_fileName = $fileUpload['name'][0];
			$this->_fileSize = $fileUpload['size'][0];
			$this->_fileExtension = $this->getFileExtension();
			$this->_fileTmp = $fileUpload['tmp_name'][0];
			$this->_error = $fileUpload['error'][0];
		}

		public function getFileExtension() {
			return pathinfo($this->_fileName, PATHINFO_EXTENSION);
		}

		public function setFileExtension($arr) {
			if(in_array(strtolower($this->_fileExtension), $arr) == false) {
				$this->_errors[] = "Phan mo rong khong phu hop";
			} else {
				echo 'ds';
			}
		}

		public function setFileSize($minSize, $maxSize) {
			if($this->_fileSize <= $minSize || $this->_fileSize >= $maxSize) {
				$this->_errors[] = "Kich thuoc khong phu hop";
			} else {
				echo 'hop le';
			}
		}

		public function setUploadDir($value) {
			if(file_exists($value)) {
				$this->_uploadDir = $value;
				echo "thanh cong";
			} else {
				$this->_errors[] = "Duong dan ko hop le";
			}
		}

		public function isVail() {
			$flag = false;
			if(!is_null($this->_errors)) {
				$flag = true;
			}
			return $flag;
		}

		public function upload() {
			move_uploaded_file($this->_fileTmp, $this->_uploadDir.time().'.'.$this->_fileExtension);
		}
	}
?>