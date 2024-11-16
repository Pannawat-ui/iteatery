<?php
session_start();
require('connect.php');

$username = $_POST['username'];
$tel = $_POST['tel'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$address = $_POST['address'];


$sql = "SELECT * FROM users WHERE id_user = '".$_SESSION['id_user']."'";
$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);

if(isset($username)){
$sql = "UPDATE users SET username = '".$username."',
tel = '".$tel."',
fname = '".$fname."',
age = '".$age."',
address = '".$address."'
WHERE id_user ='".$_SESSION['id_user']."'  ";
$query = mysqli_query($conn,$sql);

header('location:./../change_info.php');
}




?>