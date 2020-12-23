<?php

$host = '54.198.136.152';
$user = 'jeremy';
$pass = 'Epype2020!';
$db_name = 'jeremy_epype';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
 die('Database connection error: ' . $conn->connect_error);
}
