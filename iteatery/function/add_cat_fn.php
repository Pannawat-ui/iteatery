<?php
require('./connect.php');

$food_cat = $_POST['cat'];

if(isset($food_cat)){
    $sql= "INSERT INTO food_cat VALUES(
    '','".$food_cat."'
    )";
    $qry = mysqli_query($conn, $sql);

    header('location:../add_cat_menu.php');
}



?>