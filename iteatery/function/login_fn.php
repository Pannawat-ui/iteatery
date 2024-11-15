<?php
session_start();
require('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '".$username."'";
$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);

if(isset($_POST['username'])){
    if($res['username'] == $username && $res['password'] == $password){
        if($res['password'] == $password){
            $_SESSION['id_user'] = $res['id_user'];
            $_SESSION['username'] = $res['username'];
            $_SESSION['f_name'] = $res['fname'];
            $_SESSION['email'] = $res['email'];
            $_SESSION['password'] = $res['password'];
            $_SESSION['img'] = $res['user_img'];
            $_SESSION['address'] = $res['address'];
            $_SESSION['tel'] = $res['tel'];
            $_SESSION['age'] = $res['age'];
            $_SESSION['user_type'] = $res['user_type'];

            header("location:./../homepage.php");
        }else{
            header("location:./../login.php?msg=รหัสผ่านไม่ถูกต้อง");
        }

    }else{
    header("location:./../login.php?msg=ไม่มีชื่อผู้ใช้ในระบบ");
    }
}
?>