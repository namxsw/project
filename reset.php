<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รีเซ็ตรหัสผ่าน</title>
    <link rel="stylesheet" href="css/forget.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("./config/db.php");
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        $query = "SELECT * FROM forgot_password WHERE token = '$token' ";
        $r = mysqli_query($conn, $query);

        if (mysqli_num_rows($r) > 0) {

            $row = mysqli_fetch_array($r);
            $email = $row['email'];
        }
    }

    ?>

    <!-- ปุ่มย้อนกลับ -->
    <div class="back">
        <a href="./"><i class="fa-solid fa-angles-left"></i></a>
    </div>

    <!-- กรอบ -->
    <div id="resetpsw">
        <div class="appeal-container">
            <div class="appeal-content">
                <div class="appeal-content-info">
                    <div class="reset-psw">
                        <form method="POST">
                            <img src="./img/BayasitaD.png" >
                            <h3><b>รีเซ็ตรหัสผ่าน</h3>
                            <h6>ใส่รหัสผ่านของคุณ :</h6>
                            <!-- อีเมล -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control input_user" value="<?php echo $email; ?>">
                            </div>
                            <!-- รหัสผ่านใหม่ -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" name="newpassword" id="newpassword" class="form-control input_user" placeholder="รหัสผ่านใหม่">
                            </div>
                            <!-- ยืนยันรหัสผ่านใหม่ -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control input_user" placeholder="ยืนยันรหัสผ่านใหม่ ">
                            </div>

                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" name="resetpsw" id="resetpsw" class="btn btn-outline-success">รีเซตรหัสผ่าน</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            ("#resetpsw").on('submit', function(c) {

                c.preventDefault();
                var email = $("#email").val();
                var newpassword = $("#newpassword").val();
                var confirmpassword = $("#confirmpassword").val();
                // alert(email + passwordforgot + Cfpasswordforgot);

                $.ajax({

                    type: "POST",
                    url: "reset-password.php",
                    data: {
                        email: email,
                        newpassword: newpassword,
                        confirmpassword: confirmpassword
                    },

                    success: function(date) {
                        $(".form-message").css("display", "block");
                        $(".form-message").html(date);
                    }
                });
            });

        });
    </script>

</body>

</html>