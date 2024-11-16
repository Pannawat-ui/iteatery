<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    require("header.php");
    ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6">
                
            <div class="d-flex justify-content-between">
            <a class="btn btn-outline-success mb-2" href="./index.php"><h5>ย้อนกลับ</h5></a>
                            <h5>ยังไม่มีบัญชีใช่หรือไม่? <a class="text-success" href="./register.php">สมัครสมาชิก</a></h5>
                        </div>
                        
                <div class="card shadow">
                   
                    <div class="card-body"> 
                        <h2>เข้าสู่ระบบ</h2>
                        <h4 class="ms-2 mb-3">เพื่อสั่งอาหารแสนอร่อย</h4>
                        <?php 
                                if(isset($_REQUEST['msg'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_REQUEST['msg']; ?>
                                </div>
                            <?php } ?>
                        <form action="./function/login_fn.php" method="POST">
                          
                            <label class="form-label " for="username"><b>ชื่อผู้ใช้งาน</b></label>
                            <input class="form-control mb-3" type="text" name="username" id="" placeholder="กรุณากรอกชื่อผู้ใช้งาน..." required>
                            <label class="form-label " for="password"><b>รหัสผ่าน</b></label>
                            <input class="form-control mb-3" type="password" name="password" id="" placeholder="กรุณากรอกรหัสผ่าน..." required>
                            <a href="" class="text-success">ลืมรหัสผ่าน?</a><br>

                            <button type="submit" class="btn btn-success btn-lg w-100 mt-5">เข้าสู่ระบบ</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-6 d-block">
                    <img class="w-100 h-100" src="./img/food6.webp " alt="">
                

        </div>
    </div>
</body>
</html>