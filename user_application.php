<!DOCTYPE html>
<html lang="en">

<head>
    <title>สมัครงาน</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/user_application.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/user_application.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    include('./config/db.php');
    include "./user_navbar.php";
    require "./adforms.php";
    if(isset($_GET['Job_ID'])){
     
    $Job_ID = $_GET['Job_ID'];   
    }
    $User_username=$_SESSION['username'];
     $query = mysqli_query($conn, "select * from user where User_username='$User_username' ");
     $row = mysqli_fetch_array($query);
     extract($row);
     $Job_ID = $_GET['Job_ID'];
    ?>

    <div class="applybox">
        <h1 id="headline">ใบสมัครงาน (นักศึกษา)</h1>
        <form id="applyform" method="POST" enctype="multipart/form-data">
            <!-- แถบโปรเกสฟอร์ม -->
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <li id="Onestep" class="step-wizard-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">ข้อมูลส่วนตัว</span>
                    </li>
                    <li id="Twostep" class="step-wizard-item  current-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">ข้อมูลการสมัครงาน</span>
                    </li>
                </ul>
            </section>


            <div class="form-outer" style="overflow: visible;">
                <!-- form--1 -->
                <div id="stepOne" class="row">
                    <div>
                        <input type="radio" id="huey" name="gen" value="ชาย" checked>
                        <label for="huey">ชาย</label>
                        <input type="radio" id="dewey" name="gen" value="หญิง">
                        <label for="dewey">หญิง</label>
                    </div>
                    <div class="des_input">เลขประจำประตัวชาชน</div>
                    <input class="sqr-input col-12 form-control" type="text" placeholder="เลขประจำตัวประชาชน" name="cardid" required maxlength="13">
                    <div class="jobtype">
                        <label for="jobtype" class="form-label">คำนำหน้า</label>
                        <select class="form-select" name="prefix" aria-label="Default select example">
                            <option selected>เลือกคำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                    <div class="des_input">ชื่อ</div>
                    <input class="sqr-input col-12 form-control" type="text" value="<?php echo $row['User_Fname']; ?>" placeholder="ชื่อ" name="fname" required />
                    <div class="des_input">นามสกุล</div>
                    <input class="sqr-input col-12 form-control" value="<?php echo $row['User_Lname']; ?>" type="text" placeholder="นามสกุล" name="lname" required />
                    <div class="des_input">วันเกิด</div>
                    <input class="sqr-input col-12 form-control" value="<?php echo $row['User_Birthday']; ?>" type="date" placeholder="วันเกิด" name="bd" required />
                    <div class="des_input">อีเมล</div>
                    <input class="sqr-input col-12 form-control" value="<?php echo $row['User_Email']; ?>" type="email" placeholder="อีเมล" name="mail" required />
                    <div class="des_input">ที่อยู่</div>
                    <input class="sqr-input col-12 form-control" type="text" placeholder="ที่อยู่" name="ad" required />
                    <div class="des_input">เบอร์โทรศัพท์</div>
                    <input name="tel" class="sqr-input col-12 form-control" value="<?php echo $row['User_Tel']; ?>" type="text" placeholder="เบอร์โทรศัพท์" name="tel" pattern="[0-9]{10}" title="กรุณากรอกเบอร์โทรศัพท์ หมายเลข (0-9) จำนวน 10 ตัว" required maxlength="10" />

                    <input type="button" name="next" class=" btn btn-primary action-button" value="ถัดไป" onclick="nextbtn()" id="next">
                </div>


                <!-- form--2 -->
                <div id="stepTwo" class="row">
                    
                    <div class="des_input">คณะ</div>
                    <input class=" col-12 form-control" type="text" placeholder="คณะ" name="fact" required />
                    <div class="des_input">สาขา</div>
                    <input class="form-control col-12" type="text" placeholder="สาขา" name="deptt" required />
                    <div class="des_input">ชั้นปี</div>
                    <input class="form-control col-12" type="text" placeholder="ขั้นปี" name="class" required />
                    <div class="des_input">หลักฐานทางการศึกษา</div>
                    <input class="sqr-input col-12 form-control" type="file" placeholder="หลักฐานทางการศึกษา" name="File" required>
                    <input class="form-control col-12" type="text"  name="Job_ID" value="<?php echo $Job_ID; ?>" hidden />
                    
                    <div class="des_input">ไฟล์เพิ่มเติม</div>
                    <input class="sqr-input col-12 form-control" type="file" placeholder="ไฟล์เพิ่มเติม" name="File1" required>
                    <input class="form-control col-12" type="text"  name="Job_ID" value="<?php echo $Job_ID; ?>" hidden />
                    <input type="button" name="previous" class="btn btn-primary action-button" value="ย้อนกลับ" onclick="previousbtn()" id="back">

                    <button type="submit" name="addwork" class="btn btn-success submitBtn" id="submit" value="ยืนยันการสมัคร">ยืนยันการสมัคร</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <h5> ช่องทางการติดต่อ</h5>
        <p> <i class="fa-solid fa-envelope"></i> bayasita@kku.ac.th </p>
        <p> <i class="fa-brands fa-chrome"></i> https://bayasita.kku.ac.th/th </p>
        <p> <i class="fa-solid fa-phone"></i> +66 43 343 097, 203 158 <i class="fa-solid fa-mobile"></i> 099 023 9779 </p>
        <p> <i class="fa-brands fa-facebook"></i> https://www.facebook.com/Bayasitakku/ </p>
        <p> <i class="fa-solid fa-location-dot"></i> 123 Moo 16 Mitraphap Rd., Muang District,Khon Kaen 40002, Thailand </p>

        <hr>
        <div class="ft">
            <img src="./img/bayasitaW.png" alt="">
            Copyright © 2019 Bayasita@KKU. All rights reserved.
        </div>
    </footer>
</body>
<script>
    // nextbtn
    function nextbtn() {
        document.getElementById("stepOne").style.display = "none";
        document.getElementById("stepTwo").style.display = "block";
        document.getElementById("Twostep").classList.remove("current-item");
    }
    // previousbtn
    function previousbtn() {
        document.getElementById("stepOne").style.display = "block";
        document.getElementById("stepTwo").style.display = "none";
        document.getElementById("Twostep").classList.add("current-item");
    }
</script>


</html>