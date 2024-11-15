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


    <!-- user -->
    <?php }elseif($_SESSION['user_type'] == "user"){?>
        <div class="container-fluid">
            <div class="row">
                <div class="col mt-5 ms-3">
                    <h2>ประเภทอาหาร</h2>
                </div>
            </div>
        </div>



        <!-- end user -->
        <!-- Vendor  -->
    <?php }elseif($_SESSION['user_type'] == "res"){?>

        <!-- rider -->
    <?php }elseif($_SESSION['user_type'] == "rider"){?>


        <!-- Not login -->
    <?php }else{?>
        <?php }?>
</body>
</html>