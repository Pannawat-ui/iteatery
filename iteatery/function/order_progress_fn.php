<?php
require('./connect.php');
$progress = $_POST['progress'];
$user_id = $_POST['user_id'];

if(isset($progress)){
    $sql= "UPDATE orders SET order_status = '".$progress."' WHERE user_id = '".$user_id."'";
    $qry = mysqli_query($conn, $sql);

    header('location:../order_vendor.php');
}


?>