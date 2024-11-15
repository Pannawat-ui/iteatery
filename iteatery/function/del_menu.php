<?php
require('./connect.php');
$del_menu = $_REQUEST['del_menu'];

echo $del_menu;
if(isset($del_menu)){
    $sql = "DELETE FROM food_menu WHERE menu_id = '".$del_menu."' ";
    $qry = mysqli_query($conn,$sql);

    header('location:../my_vendor_menu.php');
}


?>