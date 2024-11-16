<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    require('./header.php');
    
    // admin
    if($_SESSION['user_type'] == "admin"){
    ?>
      <?php 
    $sql = "SELECT * FROM vendor";
    $qry =mysqli_query($conn,$sql);
    header('location:./admin_mange_vendor.php');
    ?>  


    <!-- user -->
    <?php }elseif($_SESSION['user_type'] == "user"){
        $sql = "SELECT * FROM food_cat";
        $qry = mysqli_query($conn, $sql);
        ?>
        <div class="container-fluid">
            <div class="row">
                    <h2 class="mb-5 mt-3">ประเภทอาหาร</h2>
                    <?php while($res = mysqli_fetch_array($qry)){?>
                    <div class="col-2">
                        <form action="./choose_cat_food.php" method="POST">
                            <button class="btn " name="cat_name" value="<?php echo($res['cat_name']);?>">
                                <img class="img-thumbnail bg-dark" src="./cat_img/<?php echo($res['cat_img']); ?>" alt="" style="width:150px; height:150px; border-radius:50%;">
                                <h3 class="mt-2 "><?php echo($res['cat_name']); ?></h3>
                            </button>
                        </form>
                    </div>
                    <?php }?>
                    <hr>

                    <h2>ร้านอาหารแนะนำ</h2>
                    <?php
                    $sql = "SELECT * FROM vendor";
                    $qry = mysqli_query($conn,$sql);
                    while($res = mysqli_fetch_array($qry)){

                    if($res['vendor_status'] == "อนุมัติ"){

                    ?>
                    
                  
                <div class="col col-sm-12 col-md-4 col-lg-2">
                    <form action="./user_choose_vendor.php" method="POST">
                        <button class="btn" name="vendor_id" value="<?php echo($res['vendor_id']);?>">
                        <div class="card ">
                            <div class="card-header ">
                                <img class=" d-block w-100" style=" height:200px;" src="./vendor_img/<?php echo($res['vendor_img']);?>" alt="">
                            </div>
                            <div class="card-body">
                                <b>ชื่อร้าน</b>
                                <p><?php echo($res['vendor_name']);?></p>
                                
                                <b>ที่อยู่</b>
                                <p><?php echo($res['vendor_address']);?></p>

                                <b>เบอร์โทรศัพท์</b>
                                <p><?php echo($res['vendor_tel']);?></p>
                            </div>
                        </div>
                        </button>
                    </form>

                 </div>

                    <?php } } ?>
            </div>
        </div>



        <!-- end user -->
        <!-- Vendor  -->
    <?php }elseif($_SESSION['user_type'] == "res"){
        header('location:./order_vendor.php');
        ?>
        
        <!-- END VENDOR -->
        <!-- rider -->
    <?php }elseif($_SESSION['user_type'] == "rider"){
        header('location:./rider_get_order.php');
        ?>
            

        <!-- Not login -->
    <?php }else{?>
        <?php }?>
</body>
</html>