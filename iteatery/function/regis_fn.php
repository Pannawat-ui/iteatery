<?php
session_start();
require('connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$f_name = $_POST['f_name'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$user_type = $_POST['user_type'];

$sql = "SELECT * FROM users WHERE username = '".$username."'";
$query = mysqli_query($conn,$sql);
while($res = mysqli_fetch_array($query));

if($res['username'] != $username){
    if($password == $c_password){
        if($user_type != "#"){ 
        $sql = "INSERT INTO users VALUES(
            '','".$username."','".$f_name."','".$email."','".$password."','','','','','".$user_type."'
            )";
            $query = mysqli_query($conn,$sql);
            header("location:../login.php");
        }else{
            header("location:./../register.php?msg=กรุณาเลือกประเภท");
        }
    }else{
    header("location:./../register.php?msg=รหัสผ่านไม่ตรงกัน");
    }
}else{
    header("location:./../register.php?msg=มีชื่อผู้ใช้อยู่แล้ว");
}


?>