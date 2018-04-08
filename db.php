<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'shan313';
$db = 'Bankman';
$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
	die("Error");
}