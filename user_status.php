<!DOCTYPE html>
<html lang="en">

<head>
    <title>ตรวจสอบสถานะ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/png" href="./img/BayasitaD.png">
     <link rel="stylesheet" href="css/user_status.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- jquery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <?php
    include "./user_navbar.php";
    ?>
    <!-- js datatable -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- css tadatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

</head>

<script>
    $(document).ready(function() {
        $("#myTable").DataTable({
            "language": {
                "search": "ค้นหา :",
                "zeroRecords": "ไม่พบข้อมูลที่ค้นหา",
                "info": "แสดงผลลัพธ์ _PAGE_ จาก _PAGES_ หน้า",
                "infoEmpty": "ไม่พบตารางที่ค้นหา",
                "infoFiltered": "(ค้นหาจากทั้งหมด _MAX_ ตาราง)",
                "lengthMenu": "แสดง  _MENU_  ตารางต่อหน้า",
                "paginate": {
                    "previous": "ก่อนหน้า",
                    "next": "หน้าถัดไป",

                }
            }
        });

    });
</script>

<body>


    <div class="container">
        <div style="height:50px;"></div>
        <div class="well" style="margin:auto; padding:auto; width:110%;">
            <span style="font-size:35px; color:#000">
                <center><strong>ตรวจสอบสถานะ</strong></center>
            </span>
            <div class="appeal-container">
                <div class="appeal-content">
                    <div class="appeal-content-info">
                        <table id="myTable" class="table table-striped table-bordered table-hover" style="margin-left: -95px;">
                            <thead>
                                <th>งานที่สมัคร</th>
                                <th>สถานะการส่งเอกสาร</th>
                                <th>วันนัดสัมภาษณ์</th>
                                <th>ผลการสัมภาษณ์</th>



                            </thead>
                            <tbody>
                            <?php
                                include('./config/db.php');
                                $User_username=$_SESSION['username'];
                                $query = mysqli_query($conn, "select applicant.* ,job.Job_Type from applicant join job on (applicant.Job_id= job.Job_ID) where User_username = '$User_username'");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <td><?php echo $row['Job_Type']; ?></td>
                                <td><?php echo $row['Status']; ?></td>
                                <td><?php echo 'วันที่ '.$row['interview_date'].' เวลา '.$row['interview_time'];  ?></td>
                                <td><?php echo $row['interview_status']; ?></td>
                                
                            </tbody>
                            <?php
                                }
                                ?>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
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

</html>