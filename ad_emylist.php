<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>รายชื่อพนักงาน</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link rel="stylesheet" href="./css/checkapplicant.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    <?php
    include "./ad_Slidebar.php";
    ?>

    <tbody>
        <div class="container">
            <div style="height:50px;"></div>
            <div class="well" style="margin:auto; padding:auto; width:110%;">
                <span style="font-size:35px; color:#000">
                    <center><strong>รายชื่อพนักงาน </strong></center>
                </span>
                <div class="appeal-container">
                    <div class="appeal-content">
                        <div class="appeal-content-info">
                            <table id="myTable" class="table table-striped table-bordered table-hover" style="margin-left: -95px;">

                                <thead>
                                    <th>รหัสพนักงาน</th>
                                    <th>ชื่อ</th>
                                    <th>สกุล</th>
                                    <th>หน้าที่</th>
                                    <th>เบอร์โทร</th>
                                    <th>อีเมล</th>
                                    <th>เรทติ้ง</th>
                                    <th>แก้ไข / ลบ</th>

                                </thead>
                                <tbody>
                                    <!-- <?php
                                    include('./config/db.php');

                                    $query = mysqli_query($conn, "select * from applicant");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['Applicant_Fname']; ?></td>
                                            <td><?php echo $row['Applicant_Lname']; ?></td>

                                            <td><?php echo $row['Applicant_Jobtype']; ?></td>
                                            <td><?php echo $row['Applicant_Date']; ?></td>
                                            <td><?php echo $row['Status']; ?></td>
                                            <td> <a href="ad_stdInfo.php ?Applicant_ID= <?php
                                                                                        echo $row['Applicant_ID'] ?>"><button type="button" class="btn btn-outline-info">ตรวจสอบ</button></a></td>

                                        </tr>
                                    <?php
                                    }

                                    ?> -->
                                </tbody>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div id="staticBackdrop" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable">
                <!-- <form method="POST" action="./adjob.php" enctype="multipart/form-data" class="modal-content" style="width:220%;  height: 75vh;  padding:0 20px;"> -->
                <div class="modal-header">
                    <h4 class="modal-title">ตรวจสอบข้อมูลผู้สมัคร</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


            </div>
        </div>

</body>

</html>