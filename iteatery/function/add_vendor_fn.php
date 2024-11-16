<?php
session_start();
require('./connect.php');
$vendor_name = $_POST['vendor_name'];
$address = $_POST['address'];
$tel = $_POST['tel'];


$sql = "SELECT vendor_id FROM vendor ORDER BY vendor_id desc";
$query= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

$filename = $row['vendor_id']."_pic.png";
move_uploaded_file($_FILES['vendor_img']['tmp_name'],"../vendor_img/". $filename);


if(isset($vendor_name)){
    $sql = "INSERT INTO vendor VALUES(
    '','".$vendor_name."','".$address."','".$tel."','".$filename."','".$_SESSION['id_user']."','รอการอนุมัติ'
    );";
    $qry = mysqli_query($conn,$sql);
    header('location:./../my_vendor.php');
}else{
    header('location:./../add_vendor.php?msg=กรอกข้อมูลให้ครบถ้วน');
}



?>