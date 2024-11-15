<?php
require('./connect.php');
$vendor_id = $_POST['vendor_id'];
$vendor_name = $_POST['vendor_name'];
$vendor_address = $_POST['vendor_address'];
$vendor_tel = $_POST['vendor_tel'];

$sql = "SELECT * FROM vendor WHERE vendor_id = '".$vendor_id."'";
$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);

$filename = $vendor_id."_pic.png";

move_uploaded_file($_FILES[vendor_img]['tmp_name'],"../vendor_img/". $filename);

if(isset($vendor_name)){
    $sql = "UPDATE vendor SET 
    vendor_name = '".$vendor_name."', 
    vendor_address = '".$vendor_address."',
    vendor_tel = '".$vendor_tel."', 
    vendor_img = '".$filename."' 
    WHERE vendor_id = '".$vendor_id."' ";

    $qry = mysqli_query($conn,$sql);
    header('location:./../my_vendor.php');
}else{
    header('location:./../changeinfo_vendor.php?msg=กรอกข้อมูลให้ครบถ้วน');
}

?>