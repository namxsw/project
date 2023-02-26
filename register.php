<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สมัครสมาชิก</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./CSS/register.css">
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">
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
  <form method="post"enctype="multipart/form-data">
    <div class="appeal-container">
      <div class="appeal-content">
        <div class="appeal-content-info">
          <img src="./img/BayasitaD.png" alt="">
          <h3><b>สมัครสมาชิกและสร้างโปรไฟล์</h3>
          

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
            <input type="text" class="form-control" name="username" aria-describedby="username" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">รหัสผ่าน</div>
            <input type="password" class="form-control" name="pass" aria-describedby="pass" style="width: 450px;">
          </div>

          <div class="mb-3">
            <div class="text-start ms-5 ps-4 mb-1">ยืนยันรหัสผ่าน</div>
            <input type="password" class="form-control" name="compass" aria-describedby="compass" style="width: 450px;">
          </div>
          <div class="des_input text-start ms-5 ps-4 mb-1">รูปภาพ</div>
          <input class="sqr-input col-12 form-control" type="file" placeholder="รูปภาพ" name="picc" style="width: 450px;">
          

          <button type="submit" name="signup" class="btn btn-primary mt-3">สมัครสมาชิก</button>

        </div>
      </div>
    </div>

  </form>
  <hr>
  <p>หากเป็นสมาชิกแล้ว คลิกที่นี่เพื่อ<a href="signin.php">เข้าสู่ระบบ</a>


</body>

</html>