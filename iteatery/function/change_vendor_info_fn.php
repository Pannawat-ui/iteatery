<?php
session_start();
require('connect.php');


$vendor_name = $_POST['vendor_name'];

$vendor_address = $_POST['vendor_address'];
$vendor_tel = $_POST['vendor_tel'];
$vendor_img = $_POST['vendor_img'];


$sql = "SELECT * FROM vendor WHERE vendor_id = '".$_SESSION['id_user']."'";
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