<?php
require('./connect.php');

$vendor_del = $_POST['vendor_del'];


if(isset($vendor_del)){
    $sql = "DELETE FROM vendor WHERE vendor_id = '".$vendor_del."'";
    $qry = mysqli_query($conn,$sql);

    header('location:../my_vendor.php');
}

?>