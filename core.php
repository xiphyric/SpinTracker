<?php
// Autoload classes.
function __autoload($class) {
	$class_path = "classes/" . $class . ".class.php"
	if(file_exists($class_path)) {
		require_once($class_path);
	} else {
		throw new Exception("Unable to load " . $class . ".");
	}
}

// Error reporting.
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start session
session_start();

// Initialise mySQL

$mysql = new mysql($host, $database, $user, $pass);
$mysql->check();
?>