<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user_profile.css">
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

    <div class="container">
        <h1>Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                    <h6>Upload a different photo...</h6>

                    <input type="file" class="form-control">
                </div>
            </div>
            <?php
            include('./config/db.php');
            
            $query = mysqli_query($conn, "select * from applicant");
            $row = mysqli_fetch_array($query);
            extract($row)
            ?>
                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>
                        This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <h3>ข้อมูลส่วนตัว</h3>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">เลขประจำตัวประชาชน : </label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $row['Applicant_Cardid']; ?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">ชื่อ :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $row['Applicant_Fname']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">นามสกุล :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $row['Applicant_Lname']; ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $row['Applicant_Email']; ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">วันเดือนปีเกิด :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="date" value="<?php echo $row['Applicant_Birthday']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">เบอร์โทรศัพท์ :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $row['Applicant_Tel']; ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">ที่อยู่ :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $row['Applicant_Address']; ?>" >
                            </div>
                        </div>
                        
                        
                        <!-- <div class="form-group">
                            <label class="col-md-3 control-label">Username : </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="" >>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">รหัสผ่านปัจจุบัน : </label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" value="" placeholder="รหัสผ่านปัจจุบัน">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">รหัสผ่านใหม่ :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" value="" placeholder="รหัสผ่านใหม่">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">ยืนยันรหัสผ่าน :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" value="" placeholder="ยืนยันรหัสผ่าน">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="button" class="btn btn-primary" value="บันทึก">
                                <span></span>
                                <input type="reset" class="btn btn-default" value="ยกเลิก">
                            </div>
                        </div> -->
                    </form>
                </div>
            
        </div>
    </div>
    <hr>



</body>

</html>