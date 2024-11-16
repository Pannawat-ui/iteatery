<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    require('./header.php');
    $vendor_id = $_POST['vendor_id'];

    $sql = "SELECT * FROM food_menu WHERE vendor_id = '".$vendor_id."' ";
    $qry = mysqli_query($conn,$sql);
    while($res = mysqli_fetch_array($qry)){

    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col col-sm-12 col-md-4 col-lg-2 mt-3">
                            <form action="./function/order_fn.php" method="POST">
                                <div class="card ">
                                    <div class="card-header ">
                                        <img class=" d-block w-100" style=" height:200px;" src="./food_img/<?php echo($res['food_img']);?>" alt="">
                                    </div>
                                    <div class="card-body">
                                        <b>ชื่อเมนู</b>
                                        <p><?php echo($res['food_menu']);?></p>
                                        
                                        <b>ราคา</b>
                                        <p><?php echo($res['food_price']);?></p>
        
                                        <b>รายละเอียดเพิ่มเติม</b>
                                        <p><?php echo($res['food_des']);?></p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="">
                                            <input class="d-none" name="vendor_id" type="text" value="<?php echo($res['vendor_id']); ?>">
                                            <input class="form-control mb-2" name="food_num" type="text" placeholder="กรอกจำนวนที่จะสั่ง..." required>
                                            <button name="menu_id" value="<?php echo($res['menu_id']);?>" class="btn btn-success">สั่งซื้อ</button>
                                        </form>
                                    </div>
                                </div>
                            </form>
        
            </div>
        
                            <?php } ?>
        </div>
    </div>

</body>
</html>