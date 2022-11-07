<!DOCTYPE html>
<html lang="en">

<head>
    <title>หน้าหลัก</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/index.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
    <?php
    include "./user_homelog.php";
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/baya.jpg" class="d-block w-100" alt="baya">
            </div>
            <div class="carousel-item">
                <img src="./img/baya.jpg" class="d-block w-100" alt="image">
            </div>
            <div class="carousel-item">
                <img src="./img/baya.jpg" class="d-block w-100" alt="1">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ค้นหา        -->
    <div class="ser ">
        <div class="search align-items-center">
            <h4><b>ระบุงานที่คุณต้องการ</h4></b>
        </div>

        <form class="row row-cols-lg-auto g-3 align-items-center search-brn">
            <div class="col-12 ">
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>วุฒิการศึกษา</option>
                    <option value="1">ม.6</option>
                    <option value="2">ปวช.</option>
                    <option value="3">ปวส.</option>
                    <option value="4">ปริญญาตรี</option>
                </select>
            </div>

            <div class="col-12">
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>เลือกประเภทงาน</option>
                    <option value="พนักงานเดลิเวอรี่">พนักงานเดลิเวอรี่</option>
                    <option value="พนักงานต้อนรับ">พนักงานต้อนรับ</option>
                    <option value="พนักงานเสิร์ฟอาหาร">พนักงานเสิร์ฟอาหาร</option>
                </select>
            </div>

            <div class="col-12">
                <input class="form-control" type="search" placeholder="Search">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary submit">ค้นหา</button>
            </div>
        </form>


    </div>


    <div class="title">
        <h3><b>ประกาศข่าวสาร</h3></b>
    </div>
    <div id="line"></div>
    <?php
    include('./config/db.php');
    $query = mysqli_query($conn, "select * from job");
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="appeal-container">
            <div class="appeal-content">
                <div class="appeal-content-info">

                    <tr>
                        <div class="post">
                            <p class="section-ap">
                            <h4>
                                <b>
                                    <td><?php echo $row['Job_Type']; ?>
                                </b>
                            </h4>
                            </td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-person"></i> จำนวน : <td><?php echo $row['Job_Amount']; ?></td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-newspaper"></i> รายละเอียดงาน : <td><?php echo $row['Job_Result']; ?></td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-graduation-cap"></i> วุฒิการศึกษา : <td><?php echo $row['Job_Education']; ?></td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-money-bills"></i> เงินเดือน : <td><?php echo $row['Job_Salary']; ?></td>
                            </p>

                        </div>
                    </tr>


                    <a class="btn-detail" type="button" href="signin.php ?Job_ID= 
                    <?php echo $row['Job_ID'] ?>" onclick="login()">รายละเอียด</a>
                    <script>
                        function login() {
                            alert("กรุณาเข้าสู่ระบบก่อนดูรายละเอียดงาน");
                        }
                    </script>


                    <!-- <button class="btn-detail" type="button">รายละเอียดงาน</button> -->
                </div>

            </div>
        </div>
    <?php
    }

    ?>

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

</html>