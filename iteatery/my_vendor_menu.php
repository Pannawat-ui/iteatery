<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
  <?php require('./header.php');
  $vendor_id = $_POST['vendor_id'];
  
  ?>  

  <div class="container-fluid">
    <div class="row">
      <div class="container d-flex justify-content-end mt-5 ms-3">
        <form action="./add_menu.php" method="POST">
              <button name="vendor_id" value="<?php echo($vendor_id);?>" class="btn btn-success shadow fs-5 me-5">เพิ่มเมนู</button>
              </form>
              </div>
        
                  <!-- While -->
                   <?php 
                   $sql = "SELECT * FROM food_menu WHERE vendor_id = '".$vendor_id."'";
                   $query = mysqli_query($conn,$sql);
                   while($res = mysqli_fetch_array($query)){
                   ?>
                  <div class="col-3 col-lg-3" >
                    <div class="card" >
                        <div class="card-header">
                            <img src="<?php echo("./food_img/".$res['food_img']);?>" class="d-block w-100 " alt="" style="height:250px;">
                        </div>
                        <div class="card-body" >
                          <b>ชื่อเมนู</b>
                            <h4><?php echo($res['food_menu']); ?></h4>
                            <b>ราคา</b>
                            <p><?php echo($res['food_price']); ?></p>
                            <b>รายละเอียดเพิ่มเติม</b>
                            <p><?php echo($res['food_des']); ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-center" >
                          <form action="./change_menu.php" method="POST">
                            <button value="<?php echo($res['menu_id']); ?>" name="change_menu" class="btn btn-success  me-3">แก้ไขเมนู</button>
                            </form>

                            <form action="./function/del_menu.php" method="POST">
                            <button value="<?php echo($res['menu_id']); ?>" name="del_menu" class="btn btn-danger ">ลบเมนู</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php } ?> 


              </div>
        </div>
</body>
</html>