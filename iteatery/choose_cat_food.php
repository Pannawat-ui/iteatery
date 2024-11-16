<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php require('./header.php'); 
    $cat_name = $_POST['cat_name'];

    $sql = "SELECT * FROM food_menu WHERE food_cat = '".$cat_name."'";
    $qry = mysqli_query($conn,$sql);

    
    while($row = mysqli_fetch_array($qry)){
    ?>



    <div class="container-fluid">

        <div class="row">
        <?php
        $cat_name = "SELECT cat_name FROM food_cat WHERE cat_name = '".$cat_name."' ";
        $cat_qry = mysqli_query($conn, $cat_name);
        $row_cat = mysqli_fetch_array($cat_qry);
        ?>
    <h2 class="mt-5 ms-3"><?php echo($row_cat['cat_name']);?></h2>    
            <div class="col col-sm-12 col-md-4 col-lg-2 mt-3">
                            <form action="./function/order_fn.php" method="POST">
                                <div class="card ">
                                    <div class="card-header ">
                                        <img class=" d-block w-100" style=" height:200px;" src="./food_img/<?php echo($row['food_img']);?>" alt="">
                                    </div>
                                    <div class="card-body">

                                    <?php
                                    $vendor_name = "SELECT * FROM vendor WHERE vendor_id = '".$row['vendor_id']."' ";
                                    $ven_qry = mysqli_query($conn, $vendor_name);
                                    $row_ven = mysqli_fetch_array($ven_qry);
                                    
                                    ?>
                                     <b>ชื่อร้าน</b>
                                    <h3><?php echo($row_ven['vendor_name']);?></h3>
                                        <b>ชื่อเมนู</b>
                                        <p><?php echo($row['food_menu']);?></p>
                                        
                                        <b>ราคา</b>
                                        <p><?php echo($row['food_price']);?></p>
        
                                        <b>รายละเอียดเพิ่มเติม</b>
                                        <p><?php echo($row['food_des']);?></p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="">
                                            <input class="d-none" name="vendor_id" type="text" value="<?php echo($row['vendor_id']); ?>">
                                            <input class="form-control mb-2" name="food_num" type="text" placeholder="กรอกจำนวนที่จะสั่ง..." required>
                                            <button name="menu_id" value="<?php echo($row['menu_id']);?>" class="btn btn-success">สั่งซื้อ</button>
                                        </form>
                                    </div>
                                </div>
                            </form>
            </div>
        

<?php } ?>
</body>
</html>