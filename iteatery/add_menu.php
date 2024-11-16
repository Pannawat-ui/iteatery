<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
    require('header.php');
    $vendor_id = $_POST['vendor_id'];  
?>    

<div class="container-fluid ">
    <div class="row">
        <h2 class="mt-5 ms-3">เพิ่มเมนู</h2>
            <div class="col-6">
                <form action="./function/addmenu_fn.php" method="POST" enctype="multipart/form-data">
                <label class="form-label" for="">ประเภทอาหาร</label>
                    <?php    
                     $sql = "SELECT * FROM food_cat";
                    $qry = mysqli_query($conn,$sql);
                     ?>
                <select class="form-select" data-bs-toggle="dropdown" name="food_cat" id="">
                    <?php while($res = mysqli_fetch_array($qry)){ ?>
                    <option value="<?php echo($res['cat_name']);?>"><?php echo($res['cat_name']);?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-6">
                <label class="form-label" for="">ชื่อเมนู</label>
                <input type="text" name="food_name" id="" class="form-control" placeholder="กรอกชื่อเมนู...">
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">ราคา</label>
                <input type="text" name="food_prc" id="" class="form-control" placeholder="กรอกราคา...">
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">รายละเอียดเพิ่มเติม</label>
                <input type="text" name="food_des" id="" class="form-control" placeholder="กรอกรายละเอียดเพิ่มเติม...">
            </div>
            

            <label class="form-label mt-5" for="">รูปภาพร้าน</label>
            <div class="col-12 d-flex justify-content-center">
            <input type="file" class="form-control  border-dark" name="food_img" id="">
            </div>

            <div class="col-12 d-flex justify-content-center">
            <button value="<?php echo($vendor_id);?>" name="vendor_id"  class="btn btn-success w-50 mt-5">เพิ่มเมนู</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>