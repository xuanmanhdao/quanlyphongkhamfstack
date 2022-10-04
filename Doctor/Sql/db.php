<?php
$servername = "localhost";
$database = "website_phongkham";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    echo "Không thể kết nối: " . mysqli_connect_error();
}
session_start();
$id=$_SESSION['id'];
?>
