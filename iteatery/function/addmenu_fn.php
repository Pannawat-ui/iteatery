<?php
require('./connect.php');

$vendor_id = $_POST['vendor_id'];
$food_cat = $_POST['food_cat'];
$food_name = $_POST['food_name'];
$food_price = $_POST['food_prc'];
$food_des = $_POST['food_des'];


$sql = "SELECT menu_id FROM food_menu ORDER BY menu_id desc";
$query= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);


$filename = $row['menu_id']."_pic.png";
move_uploaded_file($_FILES['food_img']['tmp_name'],"../food_img/".$filename);

if(isset($food_cat)){
    $sql = "INSERT INTO food_menu VALUES(
    '','".$food_cat."','".$food_name."','".$food_price."','".$food_des."','".$filename."','".$vendor_id."' 
    )";
    $query  = mysqli_query($conn, $sql);
    header('location:../my_vendor.php');

    
}else{
    header('location:../add_menu.php?msg=error');
}

?>