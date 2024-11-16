<?php
session_start();
require('./connect.php');
$food_num = $_POST['food_num'];
$menu_id = $_POST['menu_id'];
$vendor_id = $_POST['vendor_id'];


$sql = "SELECT * FROM food_menu WHERE menu_id = '".$menu_id."' ";
$qry = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($qry);

$vendor = "SELECT * FROM vendor WHERE vendor_id = '".$vendor_id."'";
$qry2 = mysqli_query($conn,$vendor);
$row = mysqli_fetch_array($qry2);

$sum_price = $food_num * $res['food_price'];

if(isset($food_num)){
    $insert = "INSERT INTO orders VALUES(
    '','".$_SESSION['id_user']."','".$row['vendor_owner']."','".$row['vendor_name']."','','".$res['food_menu']."','".$food_num."','".$sum_price."',''
    )";
    $query = mysqli_query($conn, $insert);

    header('location:../homepage.php');
}else{
    echo 'err';
}

?>