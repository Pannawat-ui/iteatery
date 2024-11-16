<?php
session_Start();
require('./connect.php');
$accept_order = $_POST['accept_order'];
$user_id = $_POST['user_id'];

if(isset($accept_order)){
    $sql = "UPDATE orders SET rider_id = '".$_SESSION['id_user']."' , order_status = '".$accept_order."' WHERE user_id = '".$user_id."' ";
    $qry = mysqli_query($conn, $sql);

    header('location:../rider_get_order.php');
}


?>