<?php
require('./connect.php');
$reciept = $_POST['receipt'];

if(isset($reciept)){

    $sql = "DELETE FROM orders WHERE  user_id = '".$reciept."' ";
    $qry = mysqli_query($conn, $sql);

    header('location:../homepage.php');

}

?>