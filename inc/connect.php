
<?php
//This php code connection between this project to database.
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "library");
mysqli_set_charset($conn, "utf8");

error_reporting(0);
//if sql no connection web page print this code.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}