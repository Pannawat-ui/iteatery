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
    while($res = mysqli_fetch_array($query)){
    ?>

    <div class="container-fluid mt-3">
        <div class="row">
        <h2>แก้ไขข้อมูล</h2>
        <div class="d-flex justify-content-center">
        <img src="<?php echo("./vendor_img/".$res['vendor_img']);?>" class="d-block  w-50 h-75 img-thumbnail" alt="" style="">
        </div>
        <div class="col-12 mt-2">
                <label class="form-label" for="">เปลี่ยนรูปภาพร้าน</label>
                <input type="file" name="vendor_img" id="" class="form-control" >
            </div>

            <div class="col-6">
                <form action="./function/change_vendor_info_fn.php" method="POST" enctype="multipart/form-data">
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


            

            <div class="col-12">
            <button class="btn btn-success w-50  mt-5">แก้ไขข้อมูล</button>
            </div>
            <?php }?>
        </form>
        </div>
    </div>
</body>
</html>