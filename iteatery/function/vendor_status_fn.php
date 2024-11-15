<?php
require('./connect.php');

$vendor_id = $_POST['vendor_id'];



$sql = "SELECT * FROM vendor WHERE vendor_id = '".$vendor_id."' ";
$qry = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($qry);

if(isset($vendor_id)){ 
    if(isset($_POST['submit'])){ 
        $sql = "UPDATE vendor SET vendor_status = 'อนุมัติ' WHERE vendor_id = '".$vendor_id."'";
        $qry = mysqli_query($conn,$sql);
        header('location:../admin_mange_vendor.php');
    }elseif(isset($_POST['cancel'])){
        $sql = "UPDATE vendor SET vendor_status = 'ไม่อนุมัติ' WHERE vendor_id = '".$vendor_id."' ";
        $qry = mysqli_query($conn,$sql);
         header('location:../admin_mange_vendor.php');
    }elseif(isset($_POST['del'])){
        $sql = "DELETE FROM vendor WHERE vendor_id = '".$vendor_id."' ";
        $qry = mysqli_query($conn,$sql);
        
         header('location:../admin_mange_vendor.php');
    }
}else{
    echo 'err';
}
?>