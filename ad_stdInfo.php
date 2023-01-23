<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/199dd8af57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/ad_stdInfo.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <title>ใบสมัคร</title>
</head>

<body>

    <?php
    include "./ad_Slidebar.php";

    ?>
 

    <div class="img-upload">
        <div class="wrapper">
            <div class="img-up">
                <img class="img" alt="">
            </div>
            <div class="up-icon">
                <div class="upload-icon"><i class="fa-solid fa-user-large"></i></i></div>
            </div>
            <div id="cancel-btn"><i class="fas fa-times"></i></div>
        </div>
        <span>รูปถ่าย</span><br>
    </div>

    <?php
    include('./config/db.php');
    if ($_GET) {
        $Applicant_ID = $_GET['Applicant_ID'];
        $query = mysqli_query($conn, "select applicant.* ,job.Job_Type from applicant join job on (applicant.Job_id= job.Job_ID)where Applicant_ID = '$Applicant_ID'");
    }
    if (isset($_GET['ApplicantID'])) {

        $Applicant_ID = $_GET['ApplicantID'];
        $approve = mysqli_query($conn, " UPDATE `applicant` SET `Status`='ตรวจสอบเรียบร้อย' WHERE Applicant_ID = $Applicant_ID");
        if ($approve) {
            echo "<script>alert('ยืนยันการตรวจสอบเสร็จสิ้น'),window.location='./checkapplicant.php';</script>";
        }
    }

    while ($row = mysqli_fetch_array($query)) {
    ?>

        <div class="appeal-container">
            <div class="appeal-content">
                <div class="appeal-content-info">

                    <h3 class="program"><b>งานที่ต้องการสมัคร</b></h3>
                    <!-- <div class="input-program">
                            <span> <b>ประเภทงานที่ต้องการสมัคร :</b></span>
                            <input type="text" >
                        </div> -->

                    <div class="input-group program" style="width: 500px ;  ">
                        <span class="input-group-text">ประเภทงานที่ต้องการสมัคร</span>
                        <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Job_Type']; ?>">
                    </div>

                    <hr class="hr2">
                    <h3 class="info"><b>ข้อมูลผู้สมัคร</h3>
                    <div class="info1">
                        <div class="crad">
                            <div class="input-group cradID mt-3" style="width: 500px;">
                                <span class="input-group-text">หมายเลขบัตรประชาชน</span>
                                <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Cardid']; ?>">
                            </div>
                        
                            
                        <div class="input-group prefix mt-3"  style="width: 500px;">
                            <span class="input-group-text">คำนำหน้า</span>
                            <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Prefix']; ?>">
                        </div>

                        <div class="input-group mt-3" style="width: 1000px;">
                            <span class="input-group-text">ชื่อ</span>
                            <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Fname']; ?>">
                            <span class="input-group-text">นามสกุล</span>
                            <input type="text" aria-label="Last name" class="form-control" value="<?php echo $row['Applicant_Lname']; ?>">
                        </div>

                        <div class="input-group mt-3" style="width: 1000px;">
                            <span class="input-group-text">วัน/เดือน/ปี เกิด</span>
                            <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Birthday']; ?>">
                            <span class="input-group-text">เบอร์โทรศัพท์</span>
                            <input type="text" aria-label="Last name" class="form-control" value="<?php echo $row['Applicant_Tel']; ?>">
                        </div>

                        <div class="input-group mt-3" style="width: 500px;">
                            <span class="input-group-text">อีเมล</span>
                            <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Email']; ?>">
                        </div>

                        <div class="input-group mt-3" style="width: 1000px;">
                            <span class="input-group-text">ที่อยู๋ปัจจุบัน</span>
                            <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Address']; ?>">
                        </div>


                    </div>

                    <hr class="hr3">

                    <h3 class="info2 "><b>ข้อมูลการศึกษา</h3>
                    <div class="input-info2">
                        <div class="infoo">

                            <div class="input-group mt-3" style="width: 1000px;">
                                <span class="input-group-text fact">คณะ</span>
                                <input type="text" aria-label="First name" class="form-control" value="<?php echo $row['Applicant_Fact']; ?>">
                                <span class="input-group-text depart">สาขา</span>
                                <input type="text" aria-label="Last name" class="form-control" value="<?php echo $row['Applicant_Dept']; ?>">
                                <span class="input-group-text classyear">ชั้นปี</span>
                                <input type="text" aria-label="Last name" class="form-control" value="<?php echo $row['Applicant_Class']; ?>">
                            </div>
                        
                            <div class="edu mt-3">
                                <span> <b>หลักฐานทางการศึกษา : <a href="PageUploadToMySQL3.php" >View files</a></b></span>
                            </div>

                            <div class="button">
                                <button type="button" style="width: 100px;" class="btn btn-outline-danger"> ยกเลิก</button>

                                <a type="button" style="width: 150px;" class="btn btn-outline-primary" href="./Approve_Applicant.php?Applicant_ID=<?php echo $row['Applicant_ID']; ?>" onclick="return confirm('คุณต้องการยืนยันหรือไม่')">ยืนยันตรวจสอบ</a>
                            </div>
                        <?php
                    }

                        ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>