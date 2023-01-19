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
    <div class="back">
        <a href="./"><i class="fa-solid fa-angles-left"></i></a>
    </div>

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <form role="form" method="post">
                    <img src="./img/BayasitaD.png" alt="">
                    <h3><b>รีเซ็ตรหัสผ่าน</h3>
                    <h6>ใส่รหัสผ่านของคุณ :</h6>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-regular fa-envelope"></i></span>
                        <input type="password" name="username" id="newpassword" class="form-control input_user" value="" placeholder="อีเมล">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="username" id="newpassword" class="form-control input_user" value="" placeholder="รหัสผ่านใหม่">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="username" id="confirmpassword" class="form-control input_user" value="" placeholder="ยืนยันรหัสผ่านใหม่ ">
                    </div>

                    <input type="checkbox" style="float: left;" onclick="Toggle()">
                    <b style="float: left; margin-left: 5px; margin-top: -5px;"> แสดงรหัสผ่าน</b><br><br>


                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" name="continue" class="btn btn-outline-success">ยืนยัน</button>
                    </div>
            </div>
        </div>
    </div>
</body>
<script>
    // Change the type of input to password or text
    function Toggle() {
        var pass = document.getElementById("newpassword");
        var pass2 = document.getElementById("confirmpassword");
        if (pass.type === "password") {
            pass.type = "text";
        }
        if (pass2.type === "password") {
            pass2.type = "text";
        } else {
            pass.type = "password";
            pass2.type = "password";

        }


    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>