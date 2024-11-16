<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php require('header.php');
    $sql = "";

?>    

<div class="container-fluid ">
    <div class="row">
    <h2 class="mt-5 ms-3">เพิ่มประเภทอาหาร</h2>
        <form action="./function/add_cat_fn.php" method="POST" enctype="multipart/form-data">
            <div class="col-6">
                <label class="form-label" for="">ชื่อประเภทอาหาร</label>
                <input type="text" name="cat" id="" class="form-control" placeholder="กรอกชื่อประเภทอาหาร..." required>
            </div>

            <label for="" class="form-label mt-3">รูปประเภทอาหาร</label>
            <input class="form-control" type="file" name="cat_img" id="">
            <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-success w-50 mt-5">เพิ่มประเภท</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>