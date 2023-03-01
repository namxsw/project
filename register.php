<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สมัครสมาชิก</title>
  <link rel="stylesheet" href="./CSS/register.css">
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <?php
  session_start();
  include "./config/db.php";
  if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $addr = $_POST["addr"];
    $heig = $_POST["heig"];
    $weigh = $_POST["weigh"];
    $age = $_POST["age"];
    $birthday = $_POST["bd"];
    $tell = $_POST["tel"];
    $fact = $_POST["fact"];
    $dept = $_POST["dept"];
    $grad = $_POST["grad"];
    $conpass = $_POST["compass"];

    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    $numrand = (mt_rand());
    $filetmp3 = $_FILES['picc']['tmp_name'];
    $fileoldname3 = strrchr($_FILES['picc']['name'], ".");
    $filename3 = $date . $numrand . $fileoldname3;
    $filetype3 = $_FILES['picc']['type'];
    $PIC = $filename3;
    $filepath3 = './img/' . $filename3;



    if ($password != $conpass) {
      echo "<script>alert('รหัสผ่านไม่ตรงกัน')</script>";
    }
    if ($password != "" && $password != "" && $firstname != "" && $lastname != "" && $sex != "" && $email != "" && $addr != "" && $heig != "" && $age != "" && $weigh != "" && $birthday != "" && $tell != "" && $fact != "" && $dept != "" && $grad != "" && $conpass != "" && $PIC) {
      $password = md5($password);
      $sql = "INSERT INTO `user`(`User_username`, `User_Password`, `User_Fname`, `User_Lname`, `User_Tel`, `User_Email`, `User_Birthday`, `user_addr`, `user_sex`, `user_heig`, `user_weigh`, `user_age`, `user_fact`, `user_dept`, `user_grad`, `Usertype_Id`, `PIC`) 
          VALUES ('$username','$password','$firstname','$lastname','$tell','$email','$birthday','$addr','$sex','$heig','$weigh','$age','$fact','$dept','$grad','2','$PIC')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        move_uploaded_file($filetmp3, $filepath3);
        echo "<script>alert('สมัครสำเร็จ')</script>";
        echo "<script>window.location='index.php';</script>";
      } else {
        echo "<script>alert('สมัครไม่สำเร็จ')</script>";
      }
    } else {
      echo "<script>alert('กรอกข้อมูลไม่ครบ')</script>";
    }
  }

  ?>
  <div class="back">
    <a href="./index.php"><i class="fa-solid fa-angles-left"></i></a>
  </div>

  

  <form method="post" enctype="multipart/form-data">
    <div class="appeal-container">
      <div class="appeal-content">
        <div class="appeal-content-info">
          <img src="./img/BayasitaD.png" alt="">
          <h3><b>สมัครสมาชิกและสร้างโปรไฟล์</h3>
<<<<<<< HEAD
          <form id="applyform" method="POST" action="./adforms.php" enctype="multipart/form-data">
            <div class="form-outer" style="overflow: visible;">
              <!-- form--1 -->
              <div id="stepOne" class="row">
                <!-- แถบโปรเกสฟอร์ม -->
                <div class="progress p-0 my-2">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">1/2 </div>
                </div>

                <!-- <div class="des_input text-start ms-5 ps-4 mb-1">รูปภาพ</div> -->
=======
          

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">ชื่อ</div>
            <input type="text" class="form-control" name="firstname" aria-describedby="fitstname" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">นามสกุล</div>
            <input type="text" class="form-control" name="lastname" aria-describedby="lastname" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">เพศ</div>
            <input type="text" class="form-control" name="sex" aria-describedby="sex" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">อีเมล</div>
            <input type="text" class="form-control" name="email" aria-describedby="email" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">ที่อยู่</div>
            <input type="text" class="form-control" name="addr" aria-describedby="addr" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">ส่วนสูง</div>
            <input type="text" class="form-control" name="heig" aria-describedby="heig" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">น้ำหนัก</div>
            <input type="text" class="form-control" name="weigh" aria-describedby="weigh" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">อายุ</div>
            <input type="text" class="form-control" name="age" aria-describedby="age" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">วันเกิด</div>
            <input type="date" class="form-control" name="bd" aria-describedby="bd" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">เบอร์โทร</div>
            <input type="text" class="form-control" name="tel" aria-describedby="tel" style="width: 450px;">
          </div>

          

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">คณะที่ศึกษา</div>
            <input type="text" class="form-control" name="fact" aria-describedby="fact" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">สาขาที่ศึกษา</div>
            <input type="text" class="form-control" name="dept" aria-describedby="dept" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">เกรด</div>
            <input type="text" class="form-control" name="grad" aria-describedby="grad" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">ชื่อผู้ใช้</div>
            <input type="text" class="form-control" name="username" aria-describedby="username" id="username" style="width: 450px;">
            <span id="msg1" style="font-size: 14px"></span>
          </div>

          <div class="mb-3" >
            <div class="text-start ms-5 ps-4 mb-1">รหัสผ่าน</div>
            <input type="password" class="form-control" name="pass" aria-describedby="pass" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">ยืนยันรหัสผ่าน</div>
            <input type="password" class="form-control" name="compass" aria-describedby="compass" style="width: 450px;">
          </div>
          <div class="des_input text-start ms-5 ps-4 mb-1">รูปภาพ</div>
          <input class="sqr-input col-12 form-control" type="file" placeholder="รูปภาพ" name="picc" style="width: 450px;">
>>>>>>> 224c3e7cf5a5bdc004e097eaca24ed9bd404bee2


                <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="inputGroup-sizing-default">รูปโปรไฟล์</span>
                  <input class="sqr-input col-12 form-control " style="margin-left: -1px;" type="file" placeholder="รูปภาพ" name="picc">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">ชื่อผู้ใช้</span>
                  <input type="text" class="form-control" name="username" aria-describedby="username" id="username">
                  <!-- <span id="msg1" style="font-size: 14px"></span> -->
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">รหัสผ่าน</span>
                  <input type="password" class="form-control" name="pass" aria-describedby="pass">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">ยืนยันรหัสผ่าน</span>
                  <input type="password" class="form-control" name="compass" aria-describedby="compass">
                </div>

                <!-- <div class="input-group mb-3 mt-2">
                                    <span class="input-group-text" id="inputGroup-sizing-default">ชื่อ</span>
                                    <input type="text" class="form-control" name="firstname" aria-describedby="fitstname">
                                </div> -->





                <!-- <div class="mb-3">
                                    <div class="text-start ms-1  mb-1">ชื่อผู้ใช้</div>
                                    <input type="text" class="form-control" name="username" aria-describedby="username" id="username" style="width: 450px;">
                                    <span id="msg1" style="font-size: 14px"></span>
                                </div>

                                <div class="mb-3">
                                    <div class="text-start ms-1  mb-1">รหัสผ่าน</div>
                                    <input type="password" class="form-control" name="pass" aria-describedby="pass" style="width: 450px;">
                                </div> -->

                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">ยืนยันรหัสผ่าน</div>
                                    <input type="password" class="form-control" name="compass" aria-describedby="compass" style="width: 450px;">
                                </div> -->

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text">ชื่อ-นามสกุล</span>
                  <input type="text" class="form-control" name="firstname" aria-describedby="fitstname">
                  <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                  <input type="text" class="form-control" name="email" aria-describedby="email">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">ที่อยู่</span>
                  <input type="text" class="form-control" name="addr" aria-describedby="addr">
                </div>





                <!-- <div class="mb-3">
                                    <div class="text-start ms-1  mb-1">ชื่อ</div>
                                    <input type="text" class="form-control" name="firstname" aria-describedby="fitstname" style="width: 450px;">
                                </div>

                                <div class="mb-3">
                                    <div class="text-start ms-1  mb-1">นามสกุล</div>
                                    <input type="text" class="form-control" name="lastname" aria-describedby="lastname" style="width: 450px;">
                                </div> -->

                <!-- <div class="sex">
                                    <label for="jobtype" class="form-label">เพศ</label>
                                    <select class="form-select" name="prefix" aria-label="Default select example">
                                        <option selected>เลือกเพศ</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>
                                </div> -->



                <!-- <div class="mb-3">
                                    <label class="input-group-text  input-group" for="inputGroupSelect01">Options</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div> -->
                <!-- 
                                <div class="mb-3">
                                    <div class="text-start ms-5 ps-4 mb-1">เพศ</div>
                                    <input type="text" class="form-control" name="sex" aria-describedby="sex" style="width: 450px;">
                                </div> -->

                <div class="input-group mb-3 sex" style="left: 34%; width: 329px;">
                  <label class="input-group-text" for="inputGroupSelect01">เพศ</label>
                  <select class="form-select" id="inputGroupSelect" name="sex">
                    <option selected="">กรุณาเลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                  </select>
                </div>
                <!-- <div class="mb-3">
                                    <div class="text-start ms-1  mb-1">อีเมล</div>
                                    <input type="text" class="form-control" name="email" aria-describedby="email" style="width: 450px;">
                                </div>

                                <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">ที่อยู่</div>
                                    <input type="text" class="form-control" name="addr" aria-describedby="addr" style="width: 450px;">
                                </div> -->




                <input type="button" name="next" class=" btn btn-outline-primary" value="ถัดไป" onclick="nextbtn()" id="next">
              </div>


              <!-- form--2 -->
              <div id="stepTwo" class="row">
                <div class="progress p-0 my-2">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">2/2 </div>
                </div>

                <div class="input-group mb-3 mt-4">
                  <span class="input-group-text" id="inputGroup-sizing-default">น้ำหนัก</span>
                  <input type="text" class="form-control" name="weigh" aria-describedby="weigh">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">ส่วนสูง</span>
                  <input type="text" class="form-control" name="heig" aria-describedby="heig">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">วันเกิด</span>
                  <input type="date" class="form-control" name="bd" aria-describedby="bd">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">อายุ</span>
                  <input type="text" class="form-control" name="age" aria-describedby="age">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">เบอร์โทร</span>
                  <input type="text" class="form-control" name="tel" aria-describedby="tel" maxlength="10">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">คณะที่ศึกษา</span>
                  <input type="text" class="form-control" name="fact" aria-describedby="fact">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">สาขาที่ศึกษา</span>
                  <input type="text" class="form-control" name="dept" aria-describedby="dept">
                </div>

                <div class="input-group mb-3 mt-2">
                  <span class="input-group-text" id="inputGroup-sizing-default">เกรดเฉลี่ย</span>
                  <input type="text" class="form-control" name="grad" aria-describedby="grad">
                </div>



                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">น้ำหนัก</div>
                                    <input type="text" class="form-control" name="weigh" aria-describedby="weigh" style="width: 450px;">
                                </div> -->

                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">ส่วนสูง</div>
                                    <input type="text" class="form-control" name="heig" aria-describedby="heig" style="width: 450px;">
                                </div> -->


                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">อายุ</div>
                                    <input type="text" class="form-control" name="age" aria-describedby="age" style="width: 450px;">
                                </div> -->

                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">วันเกิด</div>
                                    <input type="date" class="form-control" name="bd" aria-describedby="bd" style="width: 450px;">
                                </div> -->
                <!-- 
                                <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">เบอร์โทร</div>
                                    <input type="text" class="form-control" name="tel" aria-describedby="tel" maxlength="10" style="width: 450px;">
                                </div> -->

                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">คณะที่ศึกษา</div>
                                    <input type="text" class="form-control" name="fact" aria-describedby="fact" style="width: 450px;">
                                </div> -->

                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">สาขาที่ศึกษา</div>
                                    <input type="text" class="form-control" name="dept" aria-describedby="dept" style="width: 450px;">
                                </div> -->

                <!-- <div class="mb-3">
                                    <div class="text-start ms-1 mb-1">เกรดเฉลี่ย</div>
                                    <input type="text" class="form-control" name="grad" aria-describedby="grad" style="width: 450px;">
                                </div> -->

                <!-- <div class="des_input">ชั้นปี</div>
                    <input class="form-control col-12" type="text" placeholder="ขั้นปี" name="yearclass" required> -->
                <!-- <div class="des_input">หลักฐานทางการศึกษา</div>
                    <input class="sqr-input col-12 form-control" type="file" placeholder="หลักฐานทางการศึกษา" name="File" required/> -->
                <input type="button" name="previous" class="btn btn-outline-warning" value="ย้อนกลับ" onclick="previousbtn()" id="back">

                <button type="submit" name="signup" class="btn btn-primary mt-3">สมัครสมาชิก</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
    </div>
    <hr>
    <p>หากเป็นสมาชิกแล้วคลิกที่นี่เพื่อ<a href="signin.php"> เข้าสู่ระบบ</a>
</body>
<script>
  // previousbtn
  function previousbtn() {
    document.getElementById("stepOne").style.display = "block";
    document.getElementById("stepTwo").style.display = "none";
    document.getElementById("Twostep").classList.add("current-item");
  }
  // nextbtn
  function nextbtn() {
    document.getElementById("stepOne").style.display = "none";
    document.getElementById("stepTwo").style.display = "block";
  }
</script>

<script>
  $(document).ready(function() {
    $("#username").change(function() {
      var flag;
      $.ajax({
        url: "check.php",
        data: "username=" + $("#username").val(),
        type: "POST",
        async: false,
        success: function(data, status) {
          var result = data.split(",");
          flag = result[0];
          var msg = result[1];
          $("#msg1").html(msg);
        },
        error: function(xhr, status, exception) {
          alert(status);
        }
      });
      return flag;
    });
  });
</script>


</html>