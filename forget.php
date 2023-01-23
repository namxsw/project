<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลืมรหัสผ่าน</title>
    <link rel="stylesheet" href="css/forget.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
</head>

<?php
include "config/db.php"; ?>

<body>
    <div class="back">
        <a href="./"><i class="fa-solid fa-angles-left"></i></a>
    </div>

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <div class="form-message" id="msg"></div>
                <form role="form" method="post">
                    <img src="./img/BayasitaD.png" alt="">
                    <h3><b>ลืมรหัสผ่าน</h3>
                    <h6>ใส่อีเมลของคุณ :</h6>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" name="email" id="email" class="form-control input_user">
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <input type="submit" class="btn btn-outline-primary " onclick="sendEmail()" value="ส่งรหัสผ่านไปยังอีเมล">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function sendEmail() {
            var email = $("#email");
            if (isNotEmpty(email)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        email: email.val()
                    },
                    success: function(response) {
                        $('#resetpsw')[0].reset();
                        $('.msg').text("Message send successfully");
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else caller.css('border', '');

            return true;
        }
    </script>
</body>

</html>