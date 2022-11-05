-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 06:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `Applicant_ID` int(11) NOT NULL,
  `Applicant_Gender` varchar(50) NOT NULL,
  `Applicant_Cardid` varchar(13) NOT NULL,
  `Applicant_Fname` varchar(50) NOT NULL,
  `Applicant_Prefix` varchar(10) NOT NULL,
  `Applicant_Lname` varchar(50) NOT NULL,
  `Applicant_Email` varchar(70) NOT NULL,
  `Applicant_Birthday` date NOT NULL,
  `Applicant_Address` varchar(250) NOT NULL,
  `Applicant_Tel` varchar(10) NOT NULL,
  `Applicant_Fact` varchar(100) NOT NULL,
  `Applicant_Dept` varchar(100) NOT NULL,
  `Applicant_Class` varchar(30) NOT NULL,
  `Applicant_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Applicant_Education` varchar(200) NOT NULL,
  `Applicant_Grade` varchar(10) NOT NULL,
  `Applicant_Yearend` varchar(10) NOT NULL,
  `Applicant_Type` int(2) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'รอตรวจสอบ',
  `User_username` varchar(45) NOT NULL,
  `Job_ID` int(11) NOT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_time` time DEFAULT NULL,
  `interview_status` varchar(45) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`Applicant_ID`, `Applicant_Gender`, `Applicant_Cardid`, `Applicant_Fname`, `Applicant_Prefix`, `Applicant_Lname`, `Applicant_Email`, `Applicant_Birthday`, `Applicant_Address`, `Applicant_Tel`, `Applicant_Fact`, `Applicant_Dept`, `Applicant_Class`, `Applicant_Date`, `Applicant_Education`, `Applicant_Grade`, `Applicant_Yearend`, `Applicant_Type`, `Status`, `User_username`, `Job_ID`, `interview_date`, `interview_time`, `interview_status`) VALUES
(45, 'ชาย', '111111111111', 'arm', 'นาย', 'aarm', 'thanakorn@gmail.com', '2022-02-16', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '1234567890', 'sc', 'it', '4', '2022-08-22 18:22:10', '202208231310683559.jpg', '-', '-', 1, 'ตรวจสอบเรียบร้อย', 'test', 7, '2022-08-23', '00:00:00', 'รอสัมภาษณ์'),
(46, 'ชาย', '111111111111', 'arm', 'นาย', 'aarm', 'thanakorn@gmail.com', '2022-02-16', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '1234567890', 'sc', 'it', '4', '2022-08-22 17:57:01', '20220823255415560.jpg', '-', '-', 1, 'รอตรวจสอบ', 'test', 7, '2022-08-23', '00:00:00', 'รอสัมภาษณ์'),
(47, 'ชาย', '111111111111', 'arm', 'นาย', 'aarm', 'thanakorn@gmail.com', '2022-02-16', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '1234567890', 'sc', 'it', '3', '2022-08-23 12:03:55', '202208231506975649.jpg', '-', '-', 1, 'ตรวจสอบเรียบร้อย', 'test', 8, '2022-08-24', '00:00:00', 'รอสัมภาษณ์'),
(48, 'ชาย', '1103703175181', 'arm', 'นาย', 'aarm', 'thanakorn@gmail.com', '2022-02-16', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '0879788949', 'sc', 'it', '4', '2022-10-17 15:38:25', '202208231156523663.jpg', '-', '-', 1, 'ตรวจสอบเรียบร้อย', 'test', 11, '2022-08-29', '15:00:00', 'ผ่านการสัมภาษณ์'),
(49, 'ชาย', '1103703175181', 'ธนกร', 'นาย', 'วิเวชวิน', 'thanakorn.wi@kkumail.com', '2001-01-15', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '0622726755', 'sc', 'it', '4', '2022-08-23 16:34:29', '202208231144895867.jpg', '-', '-', 1, 'ตรวจสอบเรียบร้อย', 'thanakorn', 11, '2022-08-29', '10:30:00', 'รอสัมภาษณ์'),
(50, 'ชาย', '1103703175181', 'thanakorn', 'นาย', 'wiwechwin', 'thanakorn6755@gmail.com', '2001-01-15', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '0622726755', 'วิทยาลัยการคอมพิวเตอร์', 'it', '4', '2022-10-17 15:39:55', '20220823416634321.jpg', '-', '-', 1, 'ตรวจสอบเรียบร้อย', 'admin', 11, '2022-08-29', '07:00:00', 'ไม่ผ่านการสัมภาษณ์'),
(51, 'ชาย', '1234567890111', 'thanakorn', 'นาย', 'wiwechwin', 'thanakorn6755@gmail.com', '2001-01-15', 'บ้านโนนสว่าง บ้านเลขที่ภถ หมู่19 อ.เมือง ต.เหนือเมือง จังหวัดร้อยเอ็ด 45000', '0622726755', 'วิทยาลัยการคอมพิวเตอร์', 'it', '4', '2022-10-17 09:33:12', '202208231389555902.jpg', '-', '-', 1, 'ตรวจสอบเรียบร้อย', 'admin', 9, '2022-08-30', '07:35:00', 'ไม่ผ่านการสัมภาษณ์');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(45) NOT NULL,
  `emp_Fname` varchar(45) NOT NULL,
  `emp_Lname` varchar(45) NOT NULL,
  `emp_Job` varchar(45) NOT NULL,
  `emp_tel` varchar(10) NOT NULL,
  `emp_email` varchar(45) NOT NULL,
  `emp_rating` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_Fname`, `emp_Lname`, `emp_Job`, `emp_tel`, `emp_email`, `emp_rating`) VALUES
('EM01101', 'arm', 'aarm', '11', '0879788949', 'thanakorn@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_ID` int(11) NOT NULL,
  `Job_Topic` varchar(99) NOT NULL,
  `Job_Type` varchar(90) NOT NULL,
  `Job_Result` varchar(50) NOT NULL,
  `Job_Amount` varchar(50) NOT NULL,
  `Job_Time` varchar(50) NOT NULL,
  `Job_Salary` varchar(50) NOT NULL,
  `Job_Dayoff` varchar(50) NOT NULL,
  `Job_Gender` varchar(30) NOT NULL,
  `Job_Age` varchar(50) NOT NULL,
  `Job_Education` varchar(50) NOT NULL,
  `Job_Duty` varchar(150) NOT NULL,
  `Job_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Job_ID`, `Job_Topic`, `Job_Type`, `Job_Result`, `Job_Amount`, `Job_Time`, `Job_Salary`, `Job_Dayoff`, `Job_Gender`, `Job_Age`, `Job_Education`, `Job_Duty`, `Job_Date`) VALUES
(9, 'รับสมัคร', 'พนักงานต้อนรับ', 'Full-time', '2 คน', '3 ชั่วโมง', '13000 บาท', 'วันจันทร์', 'ชาย', ' 18 ปีขึ้นไป', 'ม.6', 'asrdsfgdsgsdf', '2022-08-18 15:43:20'),
(11, 'รับสมัครงาน', 'พนักงานเดลิเวอรี่', 'พาร์ทไทม์', '4 คน', '5 ชั่วโมง', '3คบาท', 'ไม่มี', 'ไม่ระบุ', ' 19-35', 'ม.6', 'ขับรถส่งของ', '2022-08-23 14:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `JobType_ID` int(10) NOT NULL,
  `JobType_Name` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`JobType_ID`, `JobType_Name`) VALUES
(1, 'พนักงานเดลิเวอรี่'),
(2, 'พนักงานต้อนรับ'),
(3, 'พนักงานเสิร์ฟอาหาร');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(10) NOT NULL,
  `User_username` varchar(30) NOT NULL,
  `User_Password` varchar(50) NOT NULL,
  `User_Fname` varchar(50) NOT NULL,
  `User_Lname` varchar(50) NOT NULL,
  `User_Tel` varchar(10) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Birthday` date NOT NULL,
  `Usertype_Id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_username`, `User_Password`, `User_Fname`, `User_Lname`, `User_Tel`, `User_Email`, `User_Birthday`, `Usertype_Id`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'thanakorn', 'wiwechwin', '0622726755', 'thanakorn6755@gmail.com', '2001-01-15', 1),
(2, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'arm', 'aarm', '1234567890', 'thanakorn@gmail.com', '2022-02-16', 2),
(11, 'test2', 'e10adc3949ba59abbe56e057f20f883e', 'armm', 'wiw', 'sunisa_ch@', '2022-02-21', '2011-11-11', 2),
(12, 'a1', 'e10adc3949ba59abbe56e057f20f883e', 'นายเอ', 'เอหล่อ', 'a1122@gmai', '2022-02-28', '0000-00-00', 2),
(13, 'test22', 'e10adc3949ba59abbe56e057f20f883e', 'อาร์ม', 'อาร์มอาร์ม', 'thanakorn6', '2022-04-11', '0000-00-00', 2),
(14, 'test12', 'e10adc3949ba59abbe56e057f20f883e', 'อาร์ม1', 'อาร์มอาร์ม11', '0987654321', 'thanakorn675511@gmail.com', '2022-04-10', 2),
(16, 'test1234', 'e10adc3949ba59abbe56e057f20f883e', 'arm12', 'wiwad1', '0986451450', 'thanakorn6755wew@gmail.com', '2022-04-19', 2),
(18, 'thanakorn', 'e10adc3949ba59abbe56e057f20f883e', 'ธนกร', 'วิเวชวิน', '0622726755', 'thanakorn.wi@kkumail.com', '2001-01-15', 2),
(19, 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'armไอ้ตู่19191', 'arm69', '999999999', 'aaa99@gmail.com', '2022-08-16', 1),
(20, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'ไอ้ตู่', 'หน้าเหี้ย', '1911911911', 'aaa199@gmail.com', '2022-08-16', 1),
(21, 'pixel', 'e99246d0435963f025fcf84e60b84de7', 'sahat', 'thaya', '0911111111', 'sahatthaya.t@kkumail.com', '2000-08-08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserType_Id` int(11) NOT NULL,
  `UserType_Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserType_Id`, `UserType_Name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`Applicant_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_ID`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`JobType_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserType_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `Applicant_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `JobType_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserType_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
