<?php
	class Validate {
		//Error array
		private $errors = array();

		//Source array
		private $source;

		//Rule array
		private $rules = array();

		//Result array
		private $result;

		public function __construct($source) {
			$this->source = $source;
		}	

		public function addRules($rules) {
			$this->rules = array_merge($rules, $this->rules);
		}

		public function addRule($element, $type, $min=0, $max=0) {
			$this->rules[$element] = array('type'=>$type, 'min' => $min, 'max' =>$max);
			return $this;
		}

		public function run() {
			foreach ($this->rules as $element => $value) {
				switch ($value['type']) {
					case 'int':
						$this->validateInt($element, $value['min'], $value['max']);
						break;

					case 'string':
						$this->validateString($element, $value['min'], $value['max']);
						break;

					case 'url':
						$this->validateUrl($element);
						break;

					case 'email':
						$this->validateEmail($element);
						break;
				}

				if(!array_key_exists($element, $this->errors)) {
					$this->result[$element] = $this->source[$element];
				}
			}
		}

		private function validateInt($element, $min=0, $max=0) {
			if(!filter_var($this->source[$element], FILTER_VALIDATE_INT, ["options" => ["min_range" => $min, "max_range" => $max]])) {
				$this->errors[$element] = ' is an valid number';
			}
		}

		private function validateString($element, $min=0, $max=0) {
			$length = strlen($this->source[$element]);
			if($length < $min) $this->errors[$element] = ' is too short';
			if($length > $max) $this->errors[$element] = ' is too long';
			if(!is_string($this->source[$element])) $this->errors[$element] = ' is an invalid string';
		}

		private function validateUrl($element) {
			if(!filter_var($this->source[$element], FILTER_VALIDATE_URL)) {
				$this->errors[$element] = ' is an valid url';
			}
		}

		private function validateEmail($element) {
			if(!filter_var($this->source[$element], FILTER_VALIDATE_EMAIL)) {
				$this->errors[$element] = ' is an valid email';
			}
		}

		public function getErrors() {
			return $this->errors;
		}

		public function getResult() {
			return $this->result;
		}

	}
?>