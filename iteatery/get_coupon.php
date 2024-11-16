<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php require('./header.php'); 
    $sql = "SELECT * FROM coupon";
    $query = mysqli_query($conn, $sql);
    
    ?>

    <div class="container mt-3">
        <h2>รับรหัสโปรโมชั่น</h2>
        <hr>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th>ชื่อโปรโมชั่น</th>
                    <th>รหัสโปรโมชั่น</th>
                    <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($res = mysqli_fetch_array($query)){ ?>
                    <tr>
                    <th><?php echo($res['coupon_name']); ?></th>
                    <th id="text_copy"><?php echo($res['coupon_code']); ?></th>
                    <th><button class="btn btn-success" onclick="copy()" id="copy_button">รับรหัสโปรโมชั่น</button></th>
                    <script>
                             document.getElementById('copy_button').addEventListener('click', function copy() {
                            const textcopy = document.getElementById('text_copy').innerText;
                            navigator.clipboard.writeText(textcopy); 
                            alert("คัดลอกรหัสโปรโมชั่นสำเร็จ!!");
                            });
                    </script>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>