<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php require('./header.php');
    $vendor_id = $_POST['vendor_id'];

    $sql = "SELECT * FROM vendor WHERE vendor_id = '".$vendor_id."'";
    $query = mysqli_query($conn,$sql);
    $res = mysqli_fetch_array($query);

    ?>

    <div class="container-fluid mt-5">
        <div class="row">
        <h2>แก้ไขข้อมูล</h2>
            <div class="col-6">
                <form action="./function/changeinfo_vendor_fn.php" method="POST" enctype="multipart/form-data">
                <label class="form-label" for="">ชื่อร้าน</label>
                <input type="text" name="vendor_name" id="" class="form-control " value="<?php echo($res['vendor_name']);?>">
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">ที่อยู่</label>
                <input type="text" name="vendor_address" id="" class="form-control" value="<?php echo($res['vendor_address']);?>">
            </div>

            <div class="col-6">
                <label class="form-label" for="">เบอร์โทรศัพท์</label>
                <input type="tel" name="vendor_tel" id="" class="form-control" value="<?php echo($res['vendor_tel']);?>">
            </div>


            <div class="col-12 mt-2">
                <label class="form-label" for="">เปลี่ยนรูปภาพร้าน</label>
                <input type="file" name="vendor_img" id="" class="form-control" value="">
            </div>
            
            <input class="d-none" type="text" name="vendor_id" value="<?php echo($res['vendor_id']);?>" id="">
            <div class="col-4">
            <button class="btn btn-success  mt-5">แก้ไขข้อมูล</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>