<?php
session_start();
require('connect.php');

$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$c_new_pass = $_POST['c_new_pass'];

$sql = "SELECT * FROM users WHERE id_user = '".$_SESSION['id_user']."'";
$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);

if(isset($old_pass)){
    if($res['password'] == $old_pass){
        if($new_pass == $c_new_pass){
        $sql = "UPDATE users SET  password = '".$c_new_pass."' WHERE id_user = '".$_SESSION['id_user']."' ";
        $query = mysqli_query($conn,$sql);
        header('location:./../change_info.php');
        }else{
            header('location:./../change_info.php?msg=รหัสผ่านไม่ตรงกัน');
        }
    }else{
        header('location:./../change_info.php?msg=รหัสผ่านไม่ถูกต้อง');
    }
}

?>