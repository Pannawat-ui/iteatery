<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php require('./header.php'); ?>

    <div class="container">
        <div class="row">

            <div class="col-3 mt-5">
                <a href="./rider_get_order.php" class="btn btn-lg shadow w-100">
                    <h3>ออร์เดอร์ใหม่</h3>
                </a>
            </div>
            
            <div class="col-3 mt-5">
                <a href="./order_vendor.php" class="btn btn-lg shadow w-100">
                    <h3>กำลังดำเนินการ</h3>
                </a>
            </div>

            <div class="col-3 mt-5">
            <a href="./sending_order.php" class="btn btn-lg bg-success text-light w-100 shadow">
                    <h3>กำลังส่ง</h3>
                    </a>
            </div>

            <div class="col-3 mt-5">
            <a href="./success_order.php" class="btn btn-lg shadow w-100">
                    <h3>เสร็จสิ้น</h3>
                    </a>   
            </div>

            <h3 class="mt-5">กำลังส่ง</h3>
            <hr>
            <!-- WHile -->
             <?php 
             $sql = "SELECT * FROM orders";
             $qry = mysqli_query($conn, $sql);
             while($res = mysqli_fetch_array($qry)){

                $select = "SELECT fname FROM users WHERE id_user = '".$res['user_id']."' ";
                $query = mysqli_query($conn, $select);
                $row = mysqli_fetch_array($query);
             ?>
            <table class="table">
                <tbody>
                    <?php if($res['order_status'] == "เตรีมอาหารเสร็จแล้ว"){ 
                        if($_SESSION['id_user'] == $res['rider_id']){?>
                    <tr>
                        <h3><?php echo($res['vendor_name']);?></h3>
                        <h5><?php echo("x ".$res['order_num']." ".$res['food_name']); ?></h5>
                        <h5>ชื่อผู้สั่งซื้อ</h5>
                        <p><?php echo($row['fname']);?></p>
                        <form action="./function/sending_order_fn.php" method="POST">
                            <input class="d-none" name="user_id" value="<?php echo($res['user_id']);?>" type="text">
                        <p class="d-flex justify-content-end"><button class="btn btn-success" name="accept_order" value="ส่งสำเร็จ">ส่งสำเร็จ</button></p>
                        </form>
                        <hr>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
            <?php } ?>
            <!-- End Loop -->

        </div>
    </div>

</body>
</html>