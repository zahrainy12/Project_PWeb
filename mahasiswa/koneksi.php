<?php
// Database connection
$host = 'localhost'; // Replace with your database host
$user = 'root'; // Replace with your database user
$password = ''; // Replace with your database password
$dbname = 'db_upinfo'; // Replace with your database name

$link = mysqli_connect($host, $user, $password, $dbname);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
