    <?php 
    session_start();
    require("./function/connect.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Eatery</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
    <script src="./dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
    error_reporting(0);
    $sql = "SELECT * FROM users WHERE id_user = '".$_SESSION['id_user']."'";
    $query = mysqli_query($conn,$sql);
    $res = mysqli_fetch_array($query);
?>
    <div class="container-fluid shadow">
        <?php if(!isset($_SESSION['user_type'])){ ?>
        <nav class="navbar navbar-expand-lg">
        <a href="./homepage.php" class="navbar-brand"><h2 class="" style="color:#008556;">IT<span class="text-dark">    Eatery</span></h2></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="./login.php" class="nav-link btn text-light" style="background-color:#008556;">เข้าสู่ระบบ/สมัครสมาชิก</a>
                </li>
            </ul>
        </div>
    
    </nav>

    <!-- USER -->
    <?php }elseif($_SESSION['user_type'] == "user"){?>
        <nav class="navbar navbar-expand-lg">
        <a href="./homepage.php" class="navbar-brand"><h2 class="" style="color:#008556;">IT<span class="text-dark">    Eatery</span></h2></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav fw-bolder">
                <li class="nav-item">
                    <a class="nav-link" href="./homepage.php">หน้าหลัก</a>
                    </li>
                <li class="nav-item">
                    <a href="./get_coupon.php" class="nav-link">รับรหัสโปรโมชั่น</a>
                </li>
                <li class="nav-item">
                    <a href="./user_myorder.php" class="nav-link">ตระกร้าของฉัน</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link d-flex justify-content-between dropdown-toggle border border-success border-3 " style="border-radius:10px;" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="d-block" style="width:30px; height:30px;" src="./user_img/<?php echo($res['user_img'])?>?t=<?php echo time(); ?>" alt=""> <span> <?php echo($res['fname']);?></span>
          </a>
                    <ul class="dropdown-menu">
                        <li><a href="./change_profile.php" class="dropdown-item">แก้ไขโปรไฟล์</a></li>
                        <li><a href="./change_info.php" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="./function/logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    
    </nav>
        <!-- RESTAURANT -->
        <?php }elseif($_SESSION['user_type'] == "res"){?>
        <nav class="navbar navbar-expand-lg">
        <a href="./homepage.php" class="navbar-brand"><h2 class="" style="color:#008556;">IT<span class="text-dark">    Eatery</span></h2></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav fw-bolder">
             <li class="nav-item">
                    <a class="nav-link" href="./homepage.php">หน้าหลัก</a>
                    </li>
                <li class="nav-item">
                    <a href="./homepage.php" class="nav-link">จัดเตรียมอาหาร</a>
                </li>
                <li class="nav-item">
                    <a href="./add_vendor.php" class="nav-link">เพิ่มร้านอาหาร</a>
                </li>
                <li class="nav-item">
                    <a href="./my_vendor.php" class="nav-link">จัดการร้านค้าของฉัน</a>
                </li>
                
                <li class="nav-item dropdown ">
                <a class="nav-link d-flex justify-content-between dropdown-toggle border border-success border-3 " style="border-radius:10px;" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="d-block" style="width:30px; height:30px;" src="./user_img/<?php echo($res['user_img'])?>?t=<?php echo time(); ?>" alt=""> <span> <?php echo($res['fname']);?></span>
          </a>
                    <ul class="dropdown-menu">
                    <li><a href="./change_profile.php" class="dropdown-item">แก้ไขโปรไฟล์</a></li>
                        <li><a href="./change_info.php" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="./function/logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    
    </nav>
        <!-- RIDER -->
         <?php }elseif($_SESSION['user_type'] == "rider"){?>
        <nav class="navbar navbar-expand-lg">
        <a href="./homepage.php" class="navbar-brand"><h2 class="" style="color:#008556;">IT<span class="text-dark">    Eatery</span></h2></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav fw-bolder">
            <li class="nav-item">
                    <a href="./homepage.php" class="nav-link">รับออเดอร์</a>
                </li>
            <li class="nav-item">
                    <a class="nav-link" href="./homepage.php">หน้าหลัก</a>
                    </li>
                <li class="nav-item">
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link d-flex justify-content-between dropdown-toggle border border-success border-3 " style="border-radius:10px;" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="d-block" style="width:30px; height:30px;" src="./user_img/<?php echo($res['user_img'])?>?t=<?php echo time(); ?>" alt=""> <span> <?php echo($res['fname']);?></span>
          </a>
                    <ul class="dropdown-menu">
                    <li><a href="./change_profile.php" class="dropdown-item">แก้ไขโปรไฟล์</a></li>
                      <li><a href="./change_info.php" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="./function/logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    
    </nav>
    <?php }elseif($_SESSION['user_type'] == "admin"){?>
        <nav class="navbar navbar-expand-lg">
        <a href="./homepage.php" class="navbar-brand"><h2 class="" style="color:#008556;">IT<span class="text-dark">    Eatery</span></h2></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav fw-bolder">
                <li class="nav-item">
                    <a class="nav-link" href="./homepage.php">หน้าหลัก</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="./add_cat_menu.php">เพิ่มประเภทอาหาร</a>
                    </li>
                    <li class="nav-item">
                    <a href="./add_coupon.php" class="nav-link">เพิ่มรหัสโปรโมชั่น</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="./admin_mange_vendor.php">จัดการร้านค้า</a>
                </li>
                <li class="nav-item dropdown  ">
                <a class="nav-link d-flex justify-content-between dropdown-toggle border border-success border-3 " style="border-radius:10px;" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="d-block" style="width:30px; height:30px;" src="./user_img/<?php echo($res['user_img'])?>?t=<?php echo time(); ?>" alt=""> <span> <?php echo($res['fname']);?></span>
               
          </a>
                    <ul class="dropdown-menu">
                    <li><a href="./change_profile.php" class="dropdown-item">แก้ไขโปรไฟล์</a></li>
                      <li><a href="./change_info.php" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="./function/logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    
    </nav>
        <?php }?>
    </div>
</body>
</html>