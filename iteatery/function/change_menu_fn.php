<?php
require("./connect.php");
$vendor_id = $_POST['vendor_id'];
$food_cat = $_POST['food_cat'];
$food_name = $_POST['food_name'];
$food_price = $_POST['food_prc'];
$food_des = $_POST['food_des'];

$sql = "SELECT menu_id FROM food_menu WHERE menu_id = '".$vendor_id."'";
$query= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

$filename = $row['menu_id']."_pic.png";
move_uploaded_file($_FILES['food_img']['tmp_name'],"../food_img/".$filename);

if(isset($vendor_id)){
   
    $sql = "UPDATE food_menu SET 
    food_cat = '".$food_cat."',
    food_menu = '".$food_name."',
    food_price = '".$food_price."',
    food_des = '".$food_des."',
    food_img = '".$filename."' ";
    $qry = mysqli_query($conn, $sql);

    header('location:../my_vendor.php');
    
}


?>