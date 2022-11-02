<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user_listresume.css">
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

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <div class="pic-company pic-company-cc">
                    <section class="profileUser">
                        <ul>
                            <li>
                                <div id="img">
                                    <img src="https://jobbkk.com/assets/template/jobbkk/theme02/images/default_user.png?v=1665065612" class="img-profile">
                                </div>
                            </li>

                            <li>
                                <label class="upimg">
                                    <!-- <i class="fa fa-camera" aria-hidden="true"> อัพโหลดรูปโปรไฟล์</i>
                                    <form id="upload" method="POST" enctype="multipart/form-data"></form> -->
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">อัพโหลดรูปโปรไฟล์</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                </label>
                            </li>

                            <li><?php echo $_SESSION['name']; ?><b class="caret"></li>
                        </ul>
                    </section>

                    <hr>

                    <div class="from-input">
                        <div class="input-group prefix mt-4" >
                            <span class="input-group-text">คำนำหน้า</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">ชื่อ</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">นามสกุล</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                        </div>

                        <div class="input-group prefix mt-4" >
                            <span class="input-group-text">วันเกิด</span>
                            <input type="date" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">สัญชาติ</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">หมายเลขบัตรประชาชน</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                        </div>

                        <div class="input-group prefix mt-4" >
                            <span class="input-group-text">เบอร์โทรศัพท์</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">อีเมล</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">Line ID</span>
                            <input type="text" aria-label="First name" class="form-control from-input-text" value="">
                        </div>

                        <div class="input-group prefix mt-4" >
                            <span class="input-group-text">ที่อยู่</span>
                            <input type="address" aria-label="First name" class="form-control from-input-text" value="">
                            <span class="input-group-text">ที่อยู่</span>
                            <input type="address" aria-label="First name" class="form-control from-input-text" value="">

                            <div class=" Edit col-12">
                                <button type="edit" class="btn btn-warning">แก้ไขข้อมูล</button>
                                <button type="save" class="btn btn-success">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</body>

</html>