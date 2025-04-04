<?php
	// class Developer {
	// 	public function logFile($msg) {
	// 		echo "Error on FILE: {$msg}<br>";
	// 	}

	// 	public function logEmail($msg) {
	// 		echo "Error on EMAIL: {$msg}<br>";
	// 	}

	// 	public function logWeb($msg) {
	// 		echo "Error on WEB: {$msg}<br>";
	// 	}
	// }

	// class Publish {
	// 	public function logFile($msg) {
	// 		echo "Error on FILE: {$msg}<br>";
	// 	}
	// }

	// $developer = new Developer();
	// $developer->logFile('saving');
	// $developer->logEmail('saving');
	// $developer->logWeb('saving');

	//Publish: File, Email
	//Developer: File, Email, Web, Database

	interface Logger {
		public function log($msg);
	}

	abstract class LoggerDecorator implements Logger {
		protected $logger;

		public function __construct(Logger $logger) {
			// echo "hello<br>";
			$this->logger = $logger;
		}
		abstract public function log($msg);
	}

	class FileLogger implements Logger {
		public function log($msg) {
			echo "Error on FILE: {$msg}<br>";
		}
	}

	class EmailLogger extends LoggerDecorator {
		public function log($msg) {
			$this->logger->log($msg);
			echo "Error on EMAIL: {$msg}<br>";
		}
	}

	class DatabaseLogger extends LoggerDecorator {
		public function log($msg) {
			$this->logger->log($msg);
			echo "Error on DATABASE: {$msg}<br>";
		}
	}

	$log = new FileLogger();
	$log = new EmailLogger($log);
	$log = new DatabaseLogger($log);
	$log->log('saving');
?>