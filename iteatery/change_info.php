<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php require('./header.php');
    $sql = "SELECT * FROM users WHERE id_user = '".$_SESSION['id_user']."'";
    $query = mysqli_query($conn,$sql);
    $res = mysqli_fetch_array($query);
?>

    <div class="container-fluid mt-5 ms-3">
        <div class="row">
            <h2>แก้ไขข้อมูล</h2>
            <div class="col-6">
                <form action="./function/chageinfo_fn.php" method="POST">
                <label class="form-label" for="">ชื่อผู้ใช้งาน</label>
                <input type="text" name="username" id="" class="form-control " value="<?php echo($res['username']);?>">
            </div>

            <div class="col-6">
                <label class="form-label" for="">เบอร์โทรศัพท์</label>
                <input type="tel" name="tel" id="" class="form-control" value="<?php echo($res['tel']); ?>">
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">ชื่อ-สกุล</label>
                <input type="text" name="fname" id="" class="form-control" value="<?php echo($res['fname']); ?>">
            </div>

            <div class="col-6 mt-2">
                <label class="form-label" for="">อายุ</label>
                <input type="text" name="age" id="" class="form-control" value="<?php echo($res['age']);?>">
            </div>

            <div class="col-12 mt-2">
                <label class="form-label" for="">ที่อยู่</label>
                <input type="text" name="address" id="" class="form-control" value="<?php echo($res['address']); ?>">
            </div>

            <div class="col-4">
            <button class="btn btn-success  mt-5">แก้ไขข้อมูล</button>
            </div>
        </form>

            <hr class="mt-5">

            <form action="./function/change_password_fn.php" method="POST">
            <h2>เปลี่ยนรหัสผ่าน</h2>
            <label class="form-label" for="">รหัสผ่านเดิม</label>
            <input type="text" name="old_pass" id="" class="form-control">
            <label class="form-label" for="">รหัสผ่านใหม่</label>
            <input type="text" name="new_pass" id="" class="form-control">
            <label class="form-label" for="">ยืนยันรหัสผ่านใหม่</label>
            <input type="text" name="c_new_pass" id="" class="form-control">
            <div class="col-4">
            <button class="btn btn-success  mt-5">แก้ไขรหัสผ่าน</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>