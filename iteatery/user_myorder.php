<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    require('./header.php');
    $food_id = $_POST['choose'];
    $food_num = $_POST['food_num'];

    
    
    $sql = "SELECT total_price FROM orders";
    $qry = mysqli_query($conn, $sql);
    ?>

<div class="container mt-5">

    <div class="card">
        <div class="card-header">
                <div class="d-flex justify-content-between">
                <h3>รายการสั่งซื้อ</h3>
                
                <?php
                while($row = mysqli_fetch_assoc($qry)){
                $value = $row['total_price'];
                $sum += $value;
                
                ?>
               <?php }?>
               <h5>
              <b>รวมทั้งหมด</b> <?php echo($sum);?> บาท
                </h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ชื่อเมนู</th>
                            <th>จำนวนที่สั่ง</th>
                            <th>ราคา</th>
                            <th>สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php  
                             $sql = "SELECT * FROM orders WHERE user_id = '".$_SESSION['id_user']."' ";
                             $qry = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($qry)){ ?>
                            <th><?php echo($row['food_name']); ?></th>
                            <th>x <?php echo($row['order_num']); ?></th>
                            <th><?php echo($row['total_price']); ?> บาท</th>
                            <th><?php echo($row['order_status']); ?></th>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                <form action="./function/confirm_order.php" method="POST">
               <?php $sql = "SELECT * FROM orders WHERE user_id = '".$_SESSION['id_user']."' ";
                             $qry = mysqli_query($conn, $sql);
                             $res = mysqli_fetch_array($qry);?>
                <button name="confirm" value="<?php echo($res['user_id']);?>" class="btn btn-success">สั่งซื้อ/ชำระเงิน</button>
            </form>
            <form action="./function/receipt_order_fn.php" method="POST">
                <button name="receipt" value="<?php echo($res['user_id']);?>" class="btn btn-success">ได้รับอาหารแล้ว</button>
            </form>

                <div >
                <form action="./function/use_coupon_fn.php" method="POST">
                <input  type="text" name="coupon_dis" id="" placeholder="กรอกโค้ดส่วนลด">
                <button class="btn btn-success">ใช้โค้ด</button>
                </form>
                </div>
                </div>
        </div>
        <?php 
                                if(isset($_REQUEST['msg'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_REQUEST['msg']; 
                                    exit;
                                     ?>
                                </div>
                            <?php } ?>
        </div>
    </div>
    
</body>
</html>