<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "library");
mysqli_set_charset($conn, "utf8");

error_reporting(0);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}