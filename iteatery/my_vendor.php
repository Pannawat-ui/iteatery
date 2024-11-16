<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php require('./header.php');?>
    <div class="container-fluid">
        <div class="row">
        <div class="d-flex justify-content-between mt-3">
                <h2>ร้านของฉัน</h2>
                <a href="./add_vendor.php" class="btn  btn-success shadow fs-5">เพิ่มร้านอาหาร</a>
                </div>
               

                <?php
                $sql = "SELECT * FROM vendor WHERE vendor_owner = '".$_SESSION['id_user']."'";
                $query = mysqli_query($conn,$sql);
                while($res = mysqli_fetch_array($query)){
                    
                ?>
                <!-- While -->
                 <div class="col-3 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo("./vendor_img/".$res['vendor_img']);?>" style="height:200px;" class="d-block w-100" alt="" style="">
                        </div>
                        <div class="card-body">
                            <h4><?php echo($res['vendor_name']);?></h4>
                            <b>ที่อยู่</b>
                            <p><?php echo($res['vendor_address']);?></p>
                            <b>เบอร์ติดต่อ</b>
                            <p><?php echo($res['vendor_tel']);?></p>

                            <b>สถานะ</b>
                            <p><?php echo($res['vendor_status']);?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <form action="./chage_vendor_info.php" method="POST">
                                <button class="btn btn-success  me-3" name="vendor_id" value="<?php echo($res['vendor_id']);?>">แก้ไขร้าน</button>
                            </form>

                            <form action="./my_vendor_menu.php" method="POST">
                                <button class="btn btn-success  me-3" name="vendor_id" value="<?php echo($res['vendor_id']);?>">เพิ่มเมนูในร้าน</button>
                            </form>

                            <form action="./function/vendor_del_fn.php" method="POST">
                            <button class="btn btn-danger" name="vendor_del" value="<?php echo($res['vendor_id']);?>">ลบร้าน</button>
                            </form>
                        </div>
                    </div>
                 </div>
                 <?php }?>

           
        </div>
    </div>
</body>
</html>