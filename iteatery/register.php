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
                            <h5>มีบัญชีแล้วใช่หรือไม่? <a class="text-success" href="./login.php">เข้าสู่ระบบ</a></h5>
                        </div>
                <div class="card shadow">
                    <div class="card-body"> 
                        

                        <h2>สมัครสมาชิก</h2>
                        <h4 class="ms-2 mb-3">สมัครฟรี ได้กินเลย</h4>
                        <?php 
                                if(isset($_REQUEST['msg'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_REQUEST['msg'];?>
                                </div>
                            <?php } ?>
                        <form action="./function/regis_fn.php" method="POST">
                            <div class="d-flex justify-content-between">
                                <label class="form-label mt-3" for="username"><b>ชื่อผู้ใช้งาน</b></label>
                                <select name="user_type" id="" class="form-select  mb-3 w-25 border-1 border-dark" required>
                                    <option value="#">เลือกประเภท...</option>
                                    <option value="user">ลูกค้า</option>
                                    <option value="res">ร้านค้า</option>
                                    <option value="rider">ไรเดอร์</option>
                                </select>
                            </div>

                            <input class="form-control " type="text" name="username" id="" placeholder="กรุณากรอกชื่อผู้ใช้งาน..." required>
                            <label class="form-label mt-3" for="email"><b>อีเมล</b></label>
                            <input class="form-control " type="email" name="email" id="" placeholder="กรุณากรอกอีเมล..." required>
                            <label class="form-label mt-3" for="f_name"><b>ชื่อ-สกุล</b></label>
                            <input class="form-control mb-3" type="text" name="f_name" id="" placeholder="กรุณากรอกชื่อ-สกุล..." required>
                            <label class="form-label " for="password"><b>รหัสผ่าน</b></label>
                            <input class="form-control mb-3" type="password" name="password" id="" placeholder="กรุณากรอกรหัสผ่าน..." required>
                            <label class="form-label " for="c_password"><b>ยืนยันรหัสผ่าน</b></label>
                            <input class="form-control mb-3" type="password" name="c_password" id="" placeholder="กรุณากรอกรหัสผ่านอีกครั้ง..." required>

                            <button type="submit" class="btn btn-success btn-lg w-100 mt-5">สมัครสมาชิก</button>
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