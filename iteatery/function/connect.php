<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "itfood";

$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conn, "utf8mb4");
?>