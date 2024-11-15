<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php require('header.php');?>    

<div class="container-fluid ">
    <div class="row">
    <h2 class="mt-5 ms-3">เพิ่มร้านอาหาร</h2>
            <div class="col-6">
                <form action="./function/add_vendor_fn.php" method="POST" enctype="multipart/form-data">
                <label class="form-label" for="">ชื่อร้าน</label>
                <input type="text" name="vendor_name" id="" class="form-control " placeholder="กรอกชื่อร้าน...">
            </div>

            <div class="col-6">
                <label class="form-label" for="">ที่อยู่</label>
                <input type="text" name="address" id="" class="form-control" placeholder="กรอกที่อยู่...">
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">เบอร์โทรศัพท์</label>
                <input type="tel" name="tel" id="" class="form-control" placeholder="กรอกเบอร์โทรศัพท์...">
            </div>

          

            

            <label class="form-label mt-5" for="">รูปภาพร้าน</label>
            <div class="col-12 d-flex justify-content-center">
            <input type="file" class="form-control  border-dark" name="vendor_img" id="">
            </div>

            <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-success w-50 mt-5">เพิ่มร้านค้า</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>