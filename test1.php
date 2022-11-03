

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/199dd8af57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" 
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>userAdmission1</title>
</head>

<body>
    <nav class="navbar">
        <img class="logo-img" src="img/logo.png">
        <p class="banluam-thai-name">โรงเรียนบ้านเหลื่อมพิทยาสรรพ์</p>
        <p class="banluam-eng-name">Banluam Pittayasan School</p>

        <div class="logout">
            <a href="logout.php">
                <span>Logout</span>
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </div>

        <h4 class="hello-user">ยินดีต้อนรับ, <?php echo $_SESSION['user'] ?></h4>

    </nav>

    <div class="sidebar">
        <ul>
            <li><a href="userMain.php"><i class="fas fa-home"></i>
                <span>หน้าหลัก</span>
            </a></li>
            <li><a href="userAdmission.php"><i class="fas fa-file-alt"></i>
                <span>สมัครเรียน</span>
            </a></li>
            <li><a href="userEditAdmission.php"><i class="fas fa-edit"></i>
                <span>แก้ไขข้อมูลการสมัคร</span>
            </a></li>
            <li><a href="userPrintAdmission.php"><i class="fas fa-print"></i>
                <span>พิมพ์ใบสมัคร</span>
            </a></li>
            <li><a href="userPrintCard.php"><i class="fas fa-print"></i>
                <span>พิมพ์บัตรประจำตัว</span>
            </a></li>
            <li><a href=""><i class="fas fa-clock"></i>
                <span>สถานะการสมัคร</span>
            </a></li>
            <li><a href=""><i class="fas fa-border-all"></i>
                <span>ตรวจสอบห้องสอบ</span>
            </a></li>
            <li><a href=""><i class="fas fa-list-alt"></i>
                <span>ตรวจสอบผลการสอบ</span>
            </a></li>
            <li><a href=""><i class="fas fa-chart-bar"></i>
                <span>สถิติการสมัคร</span>
            </a></li>
        </ul>

    </div>

    <div class="content-admission1">

        <form method="POST" action="userAdmission1Check.php">
            

            <hr class="hr1">

            <h3 class="std-program">ประเภทห้องเรียนที่ต้องการสมัคร</h3>

                <div class="input-program">

                    <span>ประเภทห้องเรียนที่ต้องการสมัคร:</span><br>

                    <select name="enroll_class_type">
                        <option selected disabled >--- เลือกประเภทห้อง ---</option>
                        <option value="ห้องเรียนปกติ">ห้องเรียนปกติ</option>
                        <option value="ห้องเรียนพิเศษ">ห้องเรียนพิเศษ</option>
                    </select>

                </div>


            <hr class="hr2">

                <h3 class="std-info">ข้อมูลผู้สมัคร</h3>

                <div class="input-std-info">

                    <div class="prefix">
                    <span>คำนำหน้า:</span><br>
                    <select name="prefix" id="">
                        <option selected disabled value="">--- เลือกคำนำหน้า ---</option>
                        <option value="เด็กชาย">เด็กชาย</option>
                        <option value="เด็กหญิง">เด็กหญิง</option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                    </div>

                    <div class="firstname">
                        <span>ชื่อ:</span><br>
                        <input type="text" placeholder="ภาษาไทยเท่านั้น" name="firstname">
                    </div>

                    <div class="lastname">
                        <span>นามสกุล:</span><br>
                        <input type="text" placeholder="ภาษาไทยเท่านั้น" name="lastname">
                    </div>

                    <div class="birth">
                        <span>เดือน/วัน/ปีเกิด:</span><br>
                        <input type="date" name="birth">
                    </div>

                    <div class="personal-id">
                        <span>หมายเลขบัตรประชาชน:</span><br>
                        <input type="text" placeholder="ตัวเลข 13 หลัก" name="personal_id">
                    </div>

                    <div class="tel">
                        <span>เบอร์โทรศัพท์:</span><br>
                        <input type="text" placeholder="ตัวเลข 10 หลัก" name="tel"> 
                    </div>

                    <div class="address">
                        <span>ที่อยู่ปัจจุบัน:</span><br>
                        <textarea name="addr" rows="10"  cols="50" placeholder="บ้านเลขที่......หมู่ที่........หมู่บ้าน.........ตำบล.........อำเภอ..........จังหวัด.........รหัสไปรษณีย์........"></textarea>
                    </div>
                
                </div>

            <hr class="hr3">

                <h3 class="father-info">ข้อมูลบิดา</h3>

                <div class="input-father-info">

                    <div class="firstname">
                        <span>ชื่อบิดา:</span><br>
                        <input type="text" placeholder="ภาษาไทยเท่านั้น" name="dad_firstname">
                    </div>

                    <div class="lastname">
                        <span>นามสกุล:</span><br>
                        <input type="text" placeholder="ภาษาไทยเท่านั้น" name="dad_lastname">
                    </div>

                    <div class="personal-id">
                        <span>หมายเลขบัตรประชาชน:</span><br>
                        <input type="text" placeholder="ตัวเลข 13 หลัก" name="dad_personal_id">
                    </div>

                    <div class="career">
                        <span>อาชีพ:</span><br>
                        <input type="text" placeholder="เช่น ข้าราชการ" name="dad_career">
                    </div>

                    <div class="work-place">
                        <span>สถานที่ทำงาน:</span><br>
                        <input type="text" placeholder="เช่น ที่ว่าการอำเภอบ้านเหลื่อม" name="dad_work_place">
                    </div>

                    <div class="income">
                        <span>รายได้ต่อเดือน(บาท):</span><br>
                        <input type="text" placeholder="เช่น 25,000 บาท" name="dad_income">
                    </div>

                </div>

            <hr class="hr3">

                <h3 class="mother-info">ข้อมูลมารดา</h3>

                <div class="input-mother-info">

                    <div class="firstname">
                        <span>ชื่อมารดา:</span><br>
                        <input type="text" placeholder="ภาษาไทยเท่านั้น" name="mom_firstname">
                    </div>

                    <div class="lastname">
                        <span>นามสกุล:</span><br>
                        <input type="text" placeholder="ภาษาไทยเท่านั้น" name="mom_lastname">
                    </div>

                    <div class="personal-id">
                        <span>หมายเลขบัตรประชาชน:</span><br>
                        <input type="text" placeholder="ตัวเลข 13 หลัก" name="mom_personal_id">
                    </div>

                    <div class="career">
                        <span>อาชีพ:</span><br>
                        <input type="text" placeholder="เช่น ข้าราชการ" name="mom_career">
                    </div>

                    <div class="work-place">
                        <span>สถานที่ทำงาน:</span><br>
                        <input type="text" placeholder="เช่น ที่ว่าการอำเภอบ้านเหลื่อม" name="mom_work_place">
                    </div>

                    <div class="income">
                        <span>รายได้ต่อเดือน(บาท):</span><br>
                        <input type="text" placeholder="เช่น 25,000 บาท" name="mom_income">
                    </div>

            </div>

            <hr class="hr3">

                <h3 class="std-info2">ข้อมูลการศึกษาของผู้สมัคร</h3>

                <div class="input-std-info2">

                    <div class="old-school">
                        <span>จบการศึกษาหรือกำลังศึกษาชั้นมัธยมศึกษาปีที่ 3 จากโรงเรียน.... :</span><br>
                        <input type="text" placeholder="เช่น โรงเรียนบ้านเหลื่อม" name="old_school">
                    </div>

                    <div class="school-address">
                        <span>ที่อยู่ของโรงเรียน:</span><br>
                        <input type="text" placeholder="ระบุ ตำบล / อำเภอ / จังหวัด" name="old_school_addr">
                    </div>

                    <div class="graduation-year">
                        <span>ปี พ.ศ.ที่จบการศึกษา / กำลังศึกษาอยู่:</span><br>
                        <input type="text" placeholder="เช่น 2565" name="grad_year">
                    </div>

                </div>

            <hr class="hr3">

                <h3 class="other-info">ข้อมูลอื่นๆ</h3>

                <div class="input-other-info">

                    <div class="live-with">
                        <span>ปัจจุบันอาศัยอยู่กับ:</span><br>
                        <input type="text" placeholder="เช่น บิดาและมารดา" name="live_with">
                    </div>

                    <div class="sibling">
                        <span>ผู้สมัครมีพี่น้องที่กำลังศึกษาอยู่……คน:</span><br>
                        <input type="text" placeholder="ระบุเฉพาะตัวเลข" name="sibling">
                    </div>

                    <div class="sibling-bls">
                        <span>ผู้สมัครมีพี่น้องที่ศึกษาต่ออยู่ที่โรงเรียนบ้านเหลื่อมพิทยาสรรพ์……คน:</span><br>
                        <input type="text" placeholder="ระบุเฉพาะตัวเลข" name="sibling_bls">
                    </div>

                </div>

            <hr class="hr3">

                <h3 class="confirm-info">คำรับรองการสมัคร</h3>

                <div class="input-confirm">

                    <div class="confirm-question">
                        <span>ผู้สมัครขอสมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4 ปีการศึกษา 2564 โดยจะปฏิบัติตามระเบียบการรับสมัครนักเรียน ที่ทางโรงเรียนประกาศให้ทราบทุกประการ</span><br>
                        
                        <label>
                            <input type="radio" name="confirm_word" value="ยอมรับ"><span>ยอมรับ</span>
                        </label> 
                        
                        <label>
                            <input type="radio" name="confirm_word" value="ไม่ยอมรับ"><span>ไม่ยอมรับ</span> 
                        </label>
                    </div>  

                    <div class="sign-name">
                        <span>ลงชื่อผู้สมัคร</span><br>
                        <input type="text" name="confirm_std" placeholder="ชื่อ-นามสกุล">
                    </div>

                    <div class="sign-guarantor">
                        <span>ลงชื่อผู้ปกครอง (ผู้รับรองการสมัคร)</span><br>
                        <input type="text" name="confirm_parent" placeholder="ชื่อ-นามสกุล">
                    </div>

                    <div class="relative">
                        <span>เป็นผู้ปกครองของผู้สมัครโดยเกี่ยวข้องเป็น……</span><br>
                        <input type="text" name="confirm_relation" placeholder="เช่น มารดา">
                    </div>

                    <div class="parent-tel">
                        <span>เบอร์โทรศัพท์ผู้ปกครอง</span><br>
                        <input type="text" name="confirm_parent_tel" placeholder="ตัวเลข 10 หลัก">
                    </div>
                </div>

                <div class="input-guarantee">

                    <div class="guarantee-question">
                        <span>ขอรับรองว่าข้อความข้างต้นเป็นจริงทุกประการ และจะควบคุมนักเรียนให้ปฏิบัติตามกฎข้อบังคับ/ระเบียบปฏิบัติของทางโรงเรียนทุกประการ </span><br>
                        
                        <label>
                            <input type="radio" name="guarantee_word" value="รับรอง"><span>รับรอง</span>
                        </label> 
                        
                        <label>
                            <input type="radio" name="guarantee_word" value="ไม่รับรอง"><span>ไม่รับรอง</span> 
                        </label>
                    </div>

                    <div class="sign-parent">
                        <span>ลงชื่อผู้ปกครอง</span><br>
                        <input type="text" name="guarantee_parent" placeholder="ชื่อ-นามสกุล">
                    </div>
                </div>

            <hr class="hr3">

                <h3 class="document-info">เอกสารประกอบการสมัคร</h3>

                <div class="input-document">
                    <span class="input-file">ให้แนบไฟล์ภาพเอกสารตามที่ระบุ</span>

                    <div class="copy-of-house">
                        <label>สำเนาทะเบียนบ้านผู้สมัคร (นักเรียน)</label><br>
                        <span>กรุณาถ่ายภาพเอกสารให้เห็นข้อมูลอย่างชัดเจน แล้วอัพโหลดไฟล์</span><br>
                        <input type="file" name="house_cp">
                    </div>

                    <div class="pp1">
                        <label>สำเนาใบ ปพ.1 หน้า-หลัง หรือ ปพ.7 (ใบรับรอง) (ถ้ามี)</label><br>
                        <span>กรุณาถ่ายภาพเอกสารให้เห็นข้อมูลอย่างชัดเจน ถ้าไม่มีเอกสารดังกล่าว ยังไม่ต้องแนบ กดส่งข้อมูลได้เลย
                            และให้นำสำเนาเอกสารมาส่งในวันรายงานตัวและมอบตัว</span><br>
                        <input type="file" name="pp1">
                    </div>
                
                </div>
            

            <div class="img-upload">

                <div class="wrapper">
                    <div class="img-up">
                        <img class="std-img" alt="">
                    </div>
                    
                    <div class="up-icon">
                        <div class="upload-icon"><i class="fa-solid fa-user-large"></i></i></div>         
                    </div>

                    <div id="cancel-btn"><i class="fas fa-times"></i></div>

                </div>

                <input type="button" onclick="defaultBtnActive()" id="custom-btn" value="เพิ่มรูปนักเรียน">
                <input id="default-btn" type="file" name="std_img" hidden>
            </div>

            
            <div class="reset"><input type="reset"></div>
            <div class="submit"><input type="submit" name="submit"></div>

        </form>
    </div>

<!-- 
    <script>
         const wrapper = document.querySelector(".wrapper");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector(".std-img");
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }

         });
    </script> -->




</body>
</html>