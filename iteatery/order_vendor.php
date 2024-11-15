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
                <a href="" class="btn btn-lg shadow w-100">
                    <h3>ออร์เดอร์ใหม่</h3>
                </a>
            </div>
            
            <div class="col-3 mt-5">
                <a href="" class="btn btn-lg bg-success text-light w-100 shadow">
                    <h3>กำลังดำเนินการ</h3>
                </a>
            </div>

            <div class="col-3 mt-5">
            <a href="" class="btn btn-lg shadow w-100">
                    <h3>กำลังส่ง</h3>
                    </a>
            </div>

            <div class="col-3 mt-5">
            <a href="" class="btn btn-lg shadow w-100">
                    <h3>เสร็จสิ้น</h3>
                    </a>   
            </div>

            <h3 class="mt-5">กำลังดำเนินการ</h3>
            <hr>
            <!-- WHile -->
            <table class="table">
                <tbody>
                    <tr>
                        <h5>ชื่อร้าน</h5>
                        <p>x1 กระเพราไก่</p>
                        <p><button class="btn btn-success">เตรียมอาหารเสร็จแล้ว</button></p>
                        <hr>
                    </tr>
                </tbody>
            </table>
            <!-- End Loop -->

        </div>
    </div>
</body>
</html>