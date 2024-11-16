<?php
session_start();
require('./connect.php');
$coupon_dis = $_POST['coupon_dis'];

$sql = "SELECT * FROM coupon WHERE coupon_code = '".$coupon_dis."'";
$qry = mysqli_query($conn, $sql);
$res = mysqli_fetch_array($qry);

$total = "SELECT total_price FROM orders WHERE user_id = '".$_SESSION['id_user']."' ";
$total_query = mysqli_query($conn, $total);
$row = mysqli_fetch_array($total_query);

if(isset($coupon_dis)){
    if($coupon_dis == $res['coupon_code']){
        if($row['total_price'] != $_SESSION['total_dis']){
      
        $coupon_dis = $row['total_price'] - $res['coupon_discount'];


        $discount_update = "UPDATE orders SET total_price = '".$coupon_dis."' ";
        $dis_qry = mysqli_query($conn,$discount_update);

        $total = "SELECT total_price FROM orders WHERE user_id = '".$_SESSION['id_user']."' ";
        $total_query = mysqli_query($conn, $total);
        $row_total = mysqli_fetch_array($total_query);


        $_SESSION['total_dis'] = $row_total['total_price'];

        header('location:../user_myorder.php');
        }else{
            header('location:../user_myorder.php?msg=ใช้รหัสคูปองไปแล้ว');
            
        }
}else{
    header('location:../user_myorder.php?msg=รหัสโปรโมชั่นไม่ถูกต้อง');
}

}

?>