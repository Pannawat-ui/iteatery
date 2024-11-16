<?php
require('./connect.php');

$cou_name = $_POST['cou_name'];
$cou_code = $_POST['cou_code'];
$cou_dis = $_POST['cou_dis'];

if(isset($cou_name)){
    $sql = "INSERT INTO coupon VALUES(
    '','".$cou_name."','".$cou_code."','".$cou_dis."'
    )";
    $qry = mysqli_query($conn, $sql);

    header('location:../add_coupon.php');
}

?>