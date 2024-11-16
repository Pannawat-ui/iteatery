<?php
session_start();
require('./connect.php');

$sql = "SELECT * FROM users WHERE id_user = '".$_SESSION['id_user']."'";
$qry = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($qry);

$filename = $res['id_user']."_pic.png";
move_uploaded_file($_FILES['profile']['tmp_name'], '../user_img/'.$filename);


if(isset($filename)){
    $sql="UPDATE users SET user_img = '".$filename."' WHERE id_user = '".$_SESSION['id_user']."' ";
    $qry = mysqli_query($conn,$sql);
    
    header("location:../change_profile.php");
}else{
    echo("err");
}
?>