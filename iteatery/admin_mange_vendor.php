<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    require('./header.php');
    $sql = "SELECT * FROM vendor";
    $qry =mysqli_query($conn,$sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table mt-5">
        <thead>
            <tr>
                <th>ชื่อร้าน</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทรศัพท์</th>
                <th>เจ้าของร้าน</th>
                <th>สถานะร้าน</th>
                <th>อนุมัติ</th>
                <th>ไม่อนุมัติ</th>
                <th>ลบร้าน</th>
            </tr>
        </thead>

        <tbody>
                <?php 
                while($res= mysqli_fetch_array($qry)){ ?>
                <form action="./function/vendor_status_fn.php" method="POST">
                    <input class="d-none" name="vendor_id" value="<?php echo($res['vendor_id']);?>" type="text">
            <tr>
                <th><?php echo($res['vendor_name']); ?></th>
                <th><?php echo($res['vendor_address']); ?></th>
                <th><?php echo($res['vendor_tel']); ?></th>
                <th><?php echo($res['vendor_owner']); ?></th>
                <th><?php echo($res['vendor_status']); ?></th>
                <th><button name="submit" value="submit" class="btn btn-success">อนุมัติ</button></th>
                <th><button name="cancel" value="cancel" class="btn btn-danger">ไม่อนุมัติ</button></th>
                <th><button name="del" value="del" class="btn btn-danger">ลบร้าน</button></th>
            </tr>
            </form>
            <?php }?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>