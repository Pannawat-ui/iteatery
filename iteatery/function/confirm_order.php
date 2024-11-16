<?php
require("./connect.php");
$confirm = $_POST['confirm'];

if($confirm){

    $sql = "UPDATE orders SET order_status = 'รอรับออร์เดอร์' WHERE user_id = '".$confirm."' ";
    $qry = mysqli_query($conn,$sql);

    header('location:../homepage.php');
}else{
    echo $confirm;
}

?>