<?php
require('./connect.php');

$food_cat = $_POST['cat'];

$sql = "SELECT * FROM food_cat";
$qry =mysqli_query($conn,$sql);
$row = mysqli_num_rows($qry);

$filename = $row."_pic.png";
move_uploaded_file($_FILES['cat_img']['tmp_name'], "../cat_img/".$filename);

if(isset($food_cat)){
    $sql= "INSERT INTO food_cat VALUES(
    '','".$food_cat."','".$filename."'
    )";
    $qry = mysqli_query($conn, $sql);

    header('location:../add_cat_menu.php');
}



?>