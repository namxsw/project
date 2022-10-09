<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user_listresume.css"
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <title>Profile</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php
    include "./user_navbar.php";
    ?>

<div class="pic-company pic-company-cc">
    <section class="profileUser">
       <ul>
        <li>
            <div id="img">
                <img src="https://jobbkk.com/assets/template/jobbkk/theme02/images/default_user.png?v=1665065612" class="profile">
            </div>
        </li>

        <li>
            <label class="upimg">
                <i class="fa fa-camera" aria-hidden="true">อัพโหลดรูปโปรไฟล์</i>
                <form id="upload" method="POST" enctype="multipart/form-data"></form>
            </label>
        </li>

        <li>ชื่อผู้ใช้</li>
        <li c></li>
       </ul> 
    </section>

</div>

</body>

</html>