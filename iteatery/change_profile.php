<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php require('./header.php');
    $sql = "SELECT user_img FROM users WHERE id_user = '".$_SESSION['id_user']."'";
    $qry = mysqli_query($conn,$sql);
    $res = mysqli_fetch_array($qry);
?>

<div class="container-fluid">
    <div class="row">
        <form action="./function/change_profile_fn.php" method="POST" enctype="multipart/form-data">
        <div class="col mt-5 ms-3">
            <H2>แก้ไขโปรไฟล์</H2>
            <div class="container d-flex justify-content-center " >
                <img class="d-block img-thumbnail shadow rounded-circle" src="./user_img/<?php echo($res['user_img']); ?> ?t=<?php echo time(); ?>" alt="" style="width:300px; height:300px;">
            </div>

            <input type="file" class="form-control mt-5 border-dark" name="profile" id="">
        </div>
        <div class="container d-flex justify-content-center">
        <button class="btn btn-success d-flex justify-content-center mt-3 w-50">เปลี่ยนรูปโปรไฟล์</button>

        </div>
    </form>
    </div>
</div>
    
</body>
</html>