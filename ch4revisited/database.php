<?php
$dsn = 'mysql:host=localhost;dbname=visitors';
$username = 'foodforo_userg1';
$password = 'Gg?PHc5-{_!S';

try {
	$db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('database_error.php');
	exit();
}
?>
