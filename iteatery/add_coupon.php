<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
    require('header.php');
?>    

<div class="container-fluid ">
    <div class="row">
    <h2 class="mt-5 ms-3">เพิ่มรหัสโปรโมชั่น</h2>
            <div class="col-6">
                <form action="./function/add_coupon_fn.php" method="POST">
                <label class="form-label" for="">ชื่อโปรโมชั่น</label>
                <input type="text" name="cou_name" id="" class="form-control " placeholder="กรอกชื่อโปรโมชั่น..." required>
            </div>

            <div class="col-6">
                <label class="form-label" for="">รหัสโปรโมชั่น</label>
                <input type="text" name="cou_code" id="" class="form-control" placeholder="กรอกรหัสโปรโมชั่น..." required>
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">ส่วนลด</label>
                <input type="text" name="cou_dis" id="" class="form-control" placeholder="กรอกส่วนลด..." required>
            </div>

            

            

            <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-success w-50 mt-5">เพิ่มโปรโมชั่น</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>