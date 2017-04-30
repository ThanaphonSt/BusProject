-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 10:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('addmin', 'addmin123'),
('bank', '123');

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `attractions_id` int(50) NOT NULL,
  `attractions_name` varchar(50) NOT NULL,
  `attractions_latitude` varchar(20) NOT NULL,
  `attractions_longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`attractions_id`, `attractions_name`, `attractions_latitude`, `attractions_longitude`) VALUES
(1, 'วัดพระทอง', '8.0034095', '98.3163486'),
(2, 'หาดกมลา', '7.9559825', '98.2846247'),
(3, 'หาดราไวย์', '7.7752402', '98.3254232'),
(4, 'หาดในหาน', '7.7775893', '98.3060943'),
(5, 'หาดบางเทา', '7.9992296', '98.289889'),
(6, 'หาดสุรินทร์ ', '7.9750346', '98.2762627'),
(7, 'หาดกะตะ', '7.9094049', '98.2618849'),
(8, 'หาดกะรน', '7.8307581', '98.2801144'),
(9, 'หาดป่าตอง ', '7.856192', '98.2571999'),
(10, 'พิพิธภัณฑ์สัตว์น้ำภูเก็ต', '7.8034762', '98.4056978');

-- --------------------------------------------------------

--
-- Table structure for table `busstop`
--

CREATE TABLE `busstop` (
  `busstop_id` int(11) NOT NULL,
  `busstop_type` varchar(50) NOT NULL,
  `busstop_name` varchar(50) NOT NULL,
  `busstop_latitude` varchar(20) NOT NULL,
  `busstop_longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `busstop`
--

INSERT INTO `busstop` (`busstop_id`, `busstop_type`, `busstop_name`, `busstop_latitude`, `busstop_longitude`) VALUES
(1, 'Airportbus', 'Indigo Pearl Hotel', '8.086939', '98.299754'),
(2, 'Airportbus', 'Pranang Srang Temple', '8.026739', '98.333365'),
(3, 'Airportbus', 'Horoines Monument', '7.981386', '98.363789'),
(6, 'Airportbus', 'Tesco Lotus', '7.904482', '98.367988'),
(7, 'Airportbus', 'Big C', '7.895990', '98.368428'),
(8, 'Airportbus', 'Surakul Stadium', '7.8514172', '98.3490167'),
(9, 'Airportbus', 'Phuket Bus Termina', '7.884109', '98.395819');

-- --------------------------------------------------------

--
-- Table structure for table `busstop_phothong`
--

CREATE TABLE `busstop_phothong` (
  `busstop_id` int(100) NOT NULL,
  `busstop_name` varchar(100) NOT NULL,
  `busstop_line` int(10) NOT NULL,
  `busstop_latitude` varchar(100) NOT NULL,
  `busstop_longitude` varchar(100) NOT NULL,
  ` busstop_trip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `busstop_phothong`
--

INSERT INTO `busstop_phothong` (`busstop_id`, `busstop_name`, `busstop_line`, `busstop_latitude`, `busstop_longitude`, ` busstop_trip`) VALUES
(1, 'ห้างสรรพสินค้าบิ๊กซี', 1, '7.896061', '98.366319', 'ขาไป'),
(2, 'ศาลาข้างห้างสรรพสินค้าเซ็นทรัลเฟสติวัล ภูเก็ต', 1, '7.891883', '98.368650', 'ขาไป'),
(3, 'ตรงข้ามห้างสรรพสินค้าโลตัส', 1, '7.906034', '98.368424', 'ขาไป'),
(4, 'หน้าโกตี๋หมูกะทะ', 1, '7.886014', '98.382434', 'ขาไป'),
(5, 'หน้าร้านเบบี้โฮม', 1, '7.901794', '98.380410', 'ขาไป'),
(6, 'ตรงข้ามเซเว่น ( ต้นมะขาม )', 1, '7.900154', '98.382274', 'ขาไป'),
(7, 'ตรงข้าม รพ.วชิระ ( บ้านคุณไมตรี )', 1, '7.897016', '98.384213', 'ขาไป'),
(8, 'ศาลาหน้าวิทยาลัยเทคนิคภูเก็ต', 1, '7.895435', '98.384995', 'ขาไป'),
(9, 'หน้าโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 1, '7.891959', '98.389061', 'ขาไป'),
(10, 'หน้าร้านบิวตี้แลนด์', 1, '7.888740', '98.384310', 'ขาไป'),
(11, 'หน้าร้านไซเคิลเรดซิ่ง', 1, '7.886127', '98.382429', 'ขาไป'),
(12, 'หน้าคลินิกหมอนรา ( ซ.หล่อโรง )', 1, '7.883898', '98.382619', 'ขาไป'),
(13, 'หน้าร้านภูเก็ตสีวรี', 1, '7.886309', '98.403568', 'ขาไป'),
(14, 'หน้าร้านเมืองทองนาฬิกา', 1, '7.882284', '98.387237', 'ขาไป'),
(15, 'หน้าโรงแรมสินทวี', 1, '7.883808', '98.389841', 'ขาไป'),
(16, ' ตรงข้ามธนาคารกสิกรไทย', 1, '7.883737', '98.387646', 'ขาไป'),
(17, 'ตรงข้ามการสื่อสาร ( ธนาคารออมสิน )', 1, '7.884776', ' 98.394783', 'ขาไป'),
(18, 'ในขนส่ง ( บ.ข.ส. )', 1, '7.8846049', '98.3906788', 'ขาไป'),
(19, 'ตรงข้ามโรงแรมเพิร์ล\r\n', 1, '7.882156', '98.392590', 'ขาไป'),
(20, 'หน้าห้างสรรพสินค้าโรบินสัน', 1, '7.877644', '98.394166', 'ขาไป'),
(21, 'หน้าศาลเจ้าบางเหนียว', 1, '7.876463', '98.393824', 'ขาไป'),
(22, 'หน้า The Bale', 1, '7.869222', '98.394961', 'ขาไป'),
(23, ' หน้าโรงยิมสะพานหิน', 1, '7.866683', '98.395770', 'ขาไป'),
(24, 'ศาลาซอยโรงเรียนเฉลิมพระเกียรติ์', 1, '7.866578', '98.392685', 'ขาไป'),
(25, 'หน้าวิทยาลัยอาชีวศึกษาภูเก็ต', 1, '7.869589', '98.392079', 'ขาไป'),
(26, 'หน้าวิทยาลัยอาชีวศึกษาภูเก็ต', 1, '7.869582', '98.392179', 'ขากลับ'),
(27, 'หน้าห้องสมุดประชาชน', 1, '7.872907', '98.393786', 'ขากลับ'),
(28, 'ตรงข้ามศาลเจ้าบางเหนียว', 1, '7.876500', '98.393567', 'ขากลับ'),
(29, 'หน้าสมศักดิ์คลีนิค', 1, '7.877672', '98.393126', 'ขากลับ'),
(30, 'หน้าธนาคาร UOB', 1, '7.880986', '98.391634', 'ขากลับ'),
(31, ' โรงแรมถาวร', 1, '7.882709', '98.390832', 'ขากลับ'),
(32, ' หน้าร้านเจริญพรนาฬิกา', 1, '7.883074', '98.388079', 'ขากลับ'),
(33, 'กลางตลาดสด', 1, '7.883117', '98.387052', 'ขากลับ'),
(34, 'หน้าร้านสังฆภัณฑ์ (ต้นฉำฉา)', 1, '7.883584', '98.384017', 'ขากลับ'),
(35, 'หน้าร้านขายดอกไม้', 1, '7.888599', '98.383118', 'ขากลับ'),
(36, ' ตรงข้ามบิวตี้แลนด์', 1, '7.888889', '98.384224', 'ขากลับ'),
(37, 'ตรงข้ามร้านทุ่งอักษร', 1, '7.889943', '98.388024', 'ขากลับ'),
(38, 'ตรงข้ามโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 1, '7.891874', '98.389111', 'ขากลับ'),
(39, 'ตรงข้ามวิทยาลัยเทคนิคภูเก็ต', 1, '7.895059', '98.385045', 'ขากลับ'),
(40, 'หน้าโรงพยาบาลวชิระภูเก็ต', 1, '7.896954', '98.384136', 'ขากลับ'),
(41, 'หน้าโรงพยาบาลกรุงเทพภูเก็ต', 1, '7.904219', '98.377568', 'ขากลับ'),
(42, 'ตรงข้ามเซเว่นซอยพะเนียง', 1, '7.907035', '98.376605', 'ขากลับ'),
(43, 'ตรงข้ามศาลเจ้าสามกอง', 1, '7.906936', '98.375141', 'ขากลับ'),
(44, 'ข้างศูนย์การค้าโลตัสสามกอง', 1, '7.905966', '98.369351', 'ขากลับ'),
(45, 'ห้างสรรพสินค้าบิ๊กซี', 1, '7.895877', '98.366416', 'ขากลับ'),
(46, 'ห้างซุปเปอร์ชีป', 2, '7.920926', '98.395975', 'ขาไป'),
(47, 'หน้าซอยพัชนี', 2, '7.913613', '98.393389', 'ขาไป'),
(48, ' หน้าโรงพยาบาลมิชชั่น', 2, '7.906877', '98.390533', 'ขาไป'),
(49, ' โรงเรียนภูเก็ตเทคโนโลยี', 2, '7.897957', '98.389323', 'ขาไป'),
(50, ' ตรงข้ามโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 2, '7.891869', '98.389131', 'ขาไป'),
(51, 'โรงเรียนสตรีภูเก็ต ( การประปานครภูเก็ต )', 2, '7.890828', '98.390790', 'ขาไป'),
(52, ' หน้าศาลากลาง', 2, '7.890053', '98.397780', 'ขาไป'),
(53, 'ตรงข้ามเมธี', 2, '7.887272', '98.398631', 'ขาไป'),
(54, 'หน้าร้านอาหารบ้านสวน', 2, '7.885691', '98.399122', 'ขาไป'),
(55, 'หน้าธนาคารกรุงไทย สาขาภูเก็ต', 2, '7.880119', '98.395531', 'ขาไป'),
(56, ' หน้าเอ็กซ์โป', 2, '7.880046', '98.395895', 'ขาไป'),
(57, 'ปากซอยตะกั่วทุ่ง', 2, '7.876189', '98.392025', 'ขาไป'),
(58, 'พูนพล', 2, '7.875835', '98.388630', 'ขาไป'),
(59, ' ตรงข้ามโรงเรียนเทศบาลเมืองภูเก็ต', 2, '7.878898', '98.385312', 'ขาไป'),
(60, 'ทางเข้าโรงเรียน อบจ.ตลาดเหนือ', 2, '7.876492', '98.379725', 'ขาไป'),
(61, ' หน้าโรงแรมคาทีน่า', 2, '7.871579', '98.380019', 'ขาไป'),
(62, 'หน้าซอยธนิส', 2, '7.869504', '98.373287', 'ขาไป'),
(63, ' หน้าซอยตาผ้าขาว', 2, '7.859221', '98.380513', 'ขาไป'),
(64, 'ตรงข้ามคีมมาร์ค', 2, '7.866189', '98.371988', 'ขาไป'),
(65, 'หน้าสถานีอนามัยแหลมชั่น', 2, '7.861558', '98.373230', 'ขาไป'),
(66, 'ตลาดสี่มุมเมือง', 2, '7.866848', '98.360252', 'ขาไป'),
(67, ' ตลาดสี่มุมเมือง', 2, '7.866848', '98.360252', 'ขากลับ'),
(68, 'ตรงข้ามสถานีอนามัยแหลมชั่น', 2, '7.861426', '98.373472', 'ขากลับ'),
(69, 'ทางเข้าธารทองวิลล่า', 2, '7.857703', '98.362243', 'ขากลับ'),
(70, ' ตรงข้ามซอยตาผ้าขาว', 2, '7.859154', '98.380323', 'ขากลับ'),
(71, 'หน้าสุสานกวางตุ้ง', 2, '7.868417', '98.377999', 'ขากลับ'),
(72, 'ตรงข้ามโรงแรมคาทีน่า', 2, '7.87312', '98.378061', 'ขากลับ'),
(73, 'หน้าสวนหลวง\r\n', 2, '7.875266', '98.378860', 'ขากลับ'),
(74, ' หน้าร้านหมอนรา', 2, '7.878855', '98.380933', 'ขากลับ'),
(75, 'หน้าโรงเรียนเทศบาลเมืองภูเก็ต', 2, '7.879000', ' 98.385562', 'ขากลับ'),
(76, 'พูนผลซอย 7', 2, '7.877044', '98.387702', 'ขากลับ'),
(77, 'ตรงข้ามถนนตะกั่วทุ่ง', 2, '7.876372', '98.392000', 'ขากลับ'),
(78, 'ตลาดเกษตร', 2, '7.877592', '98.395288', 'ขากลับ'),
(79, 'หน้าเอ็กซ์โป', 2, '7.880180', '98.395371', 'ขากลับ'),
(80, 'หน้าขนส่ง', 2, '7.883947', '98.395760', 'ขากลับ'),
(81, 'หน้าหมู่บ้าน @Town', 2, '7.886786', '98.393110', 'ขากลับ'),
(82, 'ตรงข้ามศาลากลาง', 2, '7.889898', '98.397706', 'ขากลับ'),
(83, 'หน้าโรงเรียนพิบูลย์', 2, '7.890147', '98.395786', 'ขากลับ'),
(84, 'ตรงข้ามประปานครภูเก็ต', 2, '7.890705', '98.392684', 'ขากลับ'),
(85, ' หน้าร้านทุ่งอักษร', 2, '7.889776', '98.388166', 'ขากลับ'),
(86, 'หน้าโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 2, '7.891991', '98.389044', 'ขากลับ'),
(87, 'สี่แยกราชภัฎภูเก็ต', 2, '7.908186', '98.391141', 'ขากลับ'),
(88, 'ตรงข้ามบ้านวานิช', 2, '7.912476', '98.392693', 'ขากลับ'),
(89, 'ห้างซุปเปอร์ชีป', 2, '7.920962', '98.395613', 'ขากลับ');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `Position_id` int(50) NOT NULL,
  `position_line` varchar(10) NOT NULL,
  `position_number` varchar(10) NOT NULL,
  `position_latitude` varchar(20) NOT NULL,
  `position_longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`Position_id`, `position_line`, `position_number`, `position_latitude`, `position_longitude`) VALUES
(1, '1', '1', '7.8959116', '98.3676156'),
(2, '1', '1', '7.896008', '98.367611'),
(3, '1', '1', '7.895966', '98.3670688'),
(4, '1', '1', '7.895427', '98.367670'),
(5, '1', '1', '7.895242', '98.3671438');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(20) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `restaurant_latitude` varchar(20) NOT NULL,
  `restaurant_longitude` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_latitude`, `restaurant_longitude`, `description`) VALUES
(1, 'ระย้า', '7.8859059', '98.3885114', 'https://goo.gl/ybQ79b'),
(2, 'ดีบุก', '7.886202', '98.3855499', 'https://goo.gl/Mrc3kZ'),
(3, 'ลกเที้ยน ภูเก็ต', '7.8861809', '98.3862186', 'https://goo.gl/DmmNEl'),
(4, 'ครัวโชติรส ภูเก็ต', '7.8819846', '98.3844144', 'https://goo.gl/7lnPQD');

-- --------------------------------------------------------

--
-- Table structure for table `route_phothong`
--

CREATE TABLE `route_phothong` (
  `route_id` int(100) NOT NULL,
  `route_line` int(100) NOT NULL,
  `route_name` varchar(100) NOT NULL,
  `route_trip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `route_phothong`
--

INSERT INTO `route_phothong` (`route_id`, `route_line`, `route_name`, `route_trip`) VALUES
(1, 1, 'ห้างสรรพสินค้าบิ๊กซี', 'ขาไป'),
(2, 1, 'ศาลาข้างห้างสรรพสินค้าเซ็นทรัลเฟสติวัล ภูเก็ต', 'ขาไป'),
(3, 1, 'ตรงข้ามห้างสรรพสินค้าโลตัส', 'ขาไป'),
(4, 1, 'หน้าโกตี๋หมูกะทะ', 'ขาไป'),
(5, 1, 'หน้าร้านเบบี้โฮม', 'ขาไป'),
(6, 1, 'ตรงข้ามเซเว่น ( ต้นมะขาม )', 'ขาไป'),
(7, 1, 'ตรงข้าม รพ.วชิระ ( บ้านคุณไมตรี )', 'ขาไป'),
(8, 1, ' ศาลาหน้าวิทยาลัยเทคนิคภูเก็ต', 'ขาไป'),
(9, 1, 'หน้าโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 'ขาไป'),
(10, 1, ' หน้าร้านบิวตี้แลนด์', 'ขาไป'),
(11, 1, 'หน้าร้านไซเคิลเรดซิ่ง', 'ขาไป'),
(12, 1, 'หน้าคลินิกหมอนรา ( ซ.หล่อโรง )', 'ขาไป'),
(13, 1, 'หน้าร้านภูเก็ตสีวรี', 'ขาไป'),
(14, 1, 'หน้าร้านเมืองทองนาฬิกา', 'ขาไป'),
(15, 1, 'ตรงข้ามธนาคารกสิกรไทย', 'ขาไป'),
(16, 1, 'หน้าโรงแรมสินทวี', 'ขาไป'),
(17, 1, 'ตรงข้ามการสื่อสาร ( ธนาคารออมสิน )', 'ขาไป'),
(18, 1, 'ในขนส่ง ( บ.ข.ส. )', 'ขาไป'),
(19, 1, 'ตรงข้ามโรงแรมเพิร์ล', 'ขาไป'),
(20, 1, 'หน้าห้างสรรพสินค้าโรบินสัน', 'ขาไป'),
(21, 1, 'หน้าศาลเจ้าบางเหนียว', 'ขาไป'),
(22, 1, 'หน้า The Bale', 'ขาไป'),
(23, 1, 'หน้าโรงยิมสะพานหิน', 'ขาไป'),
(24, 1, 'ศาลาซอยโรงเรียนเฉลิมพระเกียรติ์', 'ขาไป'),
(25, 1, 'หน้าวิทยาลัยอาชีวศึกษาภูเก็ต', 'ขาไป'),
(26, 1, 'หน้าวิทยาลัยอาชีวศึกษาภูเก็ต', 'ขากลับ'),
(27, 1, 'หน้าห้องสมุดประชาชน', 'ขากลับ'),
(28, 1, 'ตรงข้ามศาลเจ้าบางเหนียว', 'ขากลับ'),
(29, 1, 'หน้าสมศักดิ์คลีนิค', 'ขากลับ'),
(30, 1, 'หน้าธนาคาร UOB', 'ขากลับ'),
(31, 1, 'โรงแรมถาวร', 'ขากลับ'),
(32, 1, 'หน้าร้านเจริญพรนาฬิกา', 'ขากลับ'),
(33, 1, 'กลางตลาดสด', 'ขากลับ'),
(34, 1, 'หน้าร้านสังฆภัณฑ์ (ต้นฉำฉา)', 'ขากลับ'),
(35, 1, 'หน้าร้านขายดอกไม้', 'ขากลับ'),
(36, 1, 'ตรงข้ามบิวตี้แลนด์', 'ขากลับ'),
(37, 1, 'ตรงข้ามร้านทุ่งอักษร', 'ขากลับ'),
(38, 1, 'ตรงข้ามโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 'ขากลับ'),
(39, 1, 'ตรงข้ามวิทยาลัยเทคนิคภูเก็ต', 'ขากลับ'),
(40, 1, 'หน้าโรงพยาบาลวชิระภูเก็ต', 'ขากลับ'),
(41, 1, 'หน้าโรงพยาบาลกรุงเทพภูเก็ต', 'ขากลับ'),
(42, 1, 'ตรงข้ามเซเว่นซอยพะเนียง', 'ขากลับ'),
(43, 1, 'ตรงข้ามศาลเจ้าสามกอง', 'ขากลับ'),
(44, 2, 'ห้างซุปเปอร์ชีป', 'ขาไป'),
(45, 2, 'หน้าซอยพัชนี', 'ขาไป'),
(46, 2, 'หน้าโรงพยาบาลมิชชั่น', 'ขาไป'),
(47, 2, 'โรงเรียนภูเก็ตเทคโนโลยี', 'ขาไป'),
(48, 2, 'ตรงข้ามโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 'ขาไป'),
(49, 2, 'โรงเรียนสตรีภูเก็ต ( การประปานครภูเก็ต )', 'ขาไป'),
(50, 2, 'หน้าศาลากลาง', 'ขาไป'),
(51, 2, 'ตรงข้ามเมธี', 'ขาไป'),
(52, 2, 'หน้าร้านอาหารบ้านสวน', 'ขาไป'),
(53, 2, 'หน้าธนาคารกรุงไทย สาขาภูเก็ต', 'ขาไป'),
(54, 2, 'หน้าเอ็กซ์โป', 'ขาไป'),
(55, 2, ' ปากซอยตะกั่วทุ่ง', 'ขาไป'),
(56, 2, 'พูนพล', 'ขาไป'),
(57, 2, 'ตรงข้ามโรงเรียนเทศบาล', 'ขาไป'),
(58, 2, ' ทางเข้าโรงเรียน อบจ.ตลาดเหนือ', 'ขาไป'),
(59, 2, 'หน้าโรงแรมคาทีน่า', 'ขาไป'),
(60, 2, 'หน้าซอยธนิส', 'ขาไป'),
(61, 2, 'หน้าซอยตาผ้าขาว', 'ขาไป'),
(62, 2, 'ตรงข้ามคีมมาร์ค', 'ขาไป'),
(63, 2, 'หน้าสถานีอนามัยแหลมชั่น', 'ขาไป'),
(64, 2, 'ตลาดสี่มุมเมือง', 'ขาไป'),
(65, 2, 'ตลาดสี่มุมเมือง', 'ขากลับ'),
(66, 2, 'ตรงข้ามสถานีอนามัยแหลมชั่น', 'ขากลับ'),
(67, 2, 'ทางเข้าธารทองวิลล่า', 'ขากลับ'),
(68, 2, 'ตรงข้ามซอยตาผ้าขาว', 'ขากลับ'),
(69, 2, 'หน้าสุสานกวางตุ้ง', 'ขากลับ'),
(70, 2, 'ตรงข้ามโรงแรมคาทีน่า', 'ขากลับ'),
(71, 2, 'หน้าสวนหลวง', 'ขากลับ'),
(72, 2, 'หน้าร้านหมอนรา', 'ขากลับ'),
(73, 2, 'หน้าโรงเรียนเทศบาล', 'ขากลับ'),
(74, 2, 'พูนผลซอย 7', 'ขากลับ'),
(75, 2, ' ตรงข้ามถนนตะกั่วทุ่ง', 'ขากลับ'),
(76, 2, 'ตลาดเกษตร', 'ขากลับ'),
(77, 2, 'หน้าเอ็กซ์โป', 'ขากลับ'),
(78, 2, 'หน้าขนส่ง', 'ขากลับ'),
(79, 2, 'หน้าหมู่บ้าน @Town', 'ขากลับ'),
(80, 2, 'ตรงข้ามศาลากลาง', 'ขากลับ'),
(81, 2, 'หน้าโรงเรียนพิบูลย์', 'ขากลับ'),
(82, 2, 'ตรงข้ามประปานครภูเก็ต', 'ขากลับ'),
(83, 2, 'หน้าร้านทุ่งอักษร', 'ขากลับ'),
(84, 2, 'หน้าโรงเรียนภูเก็ตวิทยาลัย ( ใช้ร่วมสาย 1 , 2 )', 'ขากลับ'),
(85, 2, 'สี่แยกราชภัฎภูเก็ต', 'ขากลับ'),
(86, 2, 'ตรงข้ามบ้านวานิช', 'ขากลับ'),
(87, 2, 'ซุปเปอร์ชีป', 'ขากลับ'),
(88, 22, 'สถานีขนส่งภูเก็ต 2', 'ขาไป'),
(89, 22, 'ตรงข้ามโรงไฟฟ้า ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(90, 22, 'หน้าโรงพยาบาลมิชชั่น ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(91, 22, 'โรงเรียนภูเก็ตเทคโนโลยี ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(92, 22, 'หน้าประปานครภูเก็ต ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(93, 22, ' หน้าศาลากลาง ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(94, 22, 'หน้าซอยสุรินทร์ ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(95, 22, 'หน้าร้านอาหารบ้านสวน ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(96, 22, 'หน้าธนาคารกรุงไทยสาขาภูเก็ต ( ใช้ร่วมสาย 2 , 3 )', 'ขาไป'),
(97, 22, 'หน้าโรงแรมถาวร ( ใช้ร่วมสาย 1 )', 'ขาไป'),
(98, 22, 'หน้าร้านเจริญพรรัษฎา ( ใช้ร่วมสาย 1 )', 'ขาไป'),
(99, 22, 'ตลาดดาวน์ทาวน์ภูเก็ต', 'ขาไป'),
(100, 22, 'ตรงข้ามธนาคารกสิกร ( ใช้ร่วมสาย 1, 3 )', 'ขาไป'),
(101, 22, 'หน้าโรงแรมสินทวี ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(102, 22, 'ตรงข้าม กสช.โทรคมนาคม ( ใช้ร่วมสาย 2 )', 'ขาไป'),
(103, 22, 'สถานีขนส่งภูเก็ต 1', 'ขาไป'),
(104, 22, 'ตลาดดาวน์ทาวน์ภูเก็ต', 'ขากลับ'),
(105, 22, 'สถานีขนส่งภูเก็ต 1 ( ใช้ร่วมสาย 1 )', 'ขากลับ'),
(106, 22, 'ตรงข้ามภูเก็ตท่องเที่ยว ( ใช้ร่วมสาย 1 , 3 )', 'ขากลับ'),
(107, 22, 'หน้าหมู่บ้าน @ Town ( ใช้ร่วมสาย 2 )', 'ขากลับ'),
(108, 22, 'น้าสนามชัย ( ใช้ร่วมสาย 2 )', 'ขากลับ'),
(109, 22, 'ตรงข้ามศาลจังหวัดภูเก็ต ( ใช้ร่วมสาย 2 )', 'ขากลับ'),
(110, 22, 'ตรงข้ามประปานครภูเก็ต ( ใช้ร่วมสาย 2 , 3 )', 'ขากลับ'),
(111, 22, 'สี่แยกมหาวิทยาลัยราชภัฎภูเก็ต ( ใช้ร่วมสาย 2 )', 'ขากลับ'),
(112, 22, 'ตรงข้ามบ้านวานิช ( ใช้ร่วมสาย 2 )', 'ขากลับ'),
(113, 22, 'สถานีขนส่งภูเก็ต 2', 'ขากลับ'),
(114, 3, 'สะพานหิน', 'ขาไป'),
(115, 3, 'ข้างสระว่ายน้ำ อบจ.ภูเก็ต', 'ขาไป'),
(116, 3, 'ปากซอยโรงเรียนเฉลิมพระเกียรติ์', 'ขาไป'),
(117, 3, 'หน้าร้านครัวเมืองลุง', 'ขาไป'),
(118, 3, 'ตรงข้ามโรงเรียนเทศบาลเมือง', 'ขาไป'),
(119, 3, 'หน้าร้าน 7 Eleven สาขาอนุภาษ 3 ( ตลาดนัดวาไรตี้ )', 'ขาไป'),
(120, 3, 'ข้างตลาดนัดวาไรตี้ (ตรงข้ามวัดนาคาราม)', 'ขาไป'),
(121, 3, 'หน้าโรงเรียนวิชิตสงคราม', 'ขาไป'),
(122, 3, 'หน้าสนามสุรกุล', 'ขาไป'),
(123, 3, 'ตรงข้ามร้านบิวตี้แลนด์', 'ขาไป'),
(124, 3, 'ตรงข้ามร้านหนังสือทุ่งอักษร', 'ขาไป'),
(125, 3, 'หน้าสำนักงานการประปาเทศบาลนครภูเก็ต', 'ขาไป'),
(126, 3, 'หน้าโรงแรมชิโนเฮ้าส์', 'ขาไป'),
(127, 3, 'หน้าร้านรอเยลปอร์ตแลนด์ ( บขส. 1 )', 'ขาไป'),
(128, 3, 'หน้าร้านไซด์ดีไซน์', 'ขาไป'),
(129, 3, 'ตรงข้ามโรงพยาบาล อบจ.ภูเก็ต', 'ขาไป'),
(130, 3, 'ตรงข้ามโรงเรียนสาธิตร่วมพัฒนา', 'ขาไป'),
(131, 3, 'ตรงข้ามทางเข้าท่าเทียบเรือรัษา', 'ขาไป'),
(132, 3, ' เกาะสิเหร่ ( แหลมตุ๊กแก )', 'ขาไป'),
(133, 3, 'เกาะสิเหร่ ( แหลมตุ๊กแก )', 'ขากลับ'),
(134, 3, 'หน้าแฟลตการสื่อสาร', 'ขากลับ'),
(135, 3, 'หน้าโรงพยาบาล อบจ.ภูเก็ต', 'ขากลับ'),
(136, 3, 'หน้าร้านลูกแม่บุญธรรม', 'ขากลับ'),
(137, 3, 'ตรงข้าม ตรอ.ศิริยานยนต์', 'ขากลับ'),
(138, 3, 'หน้าธนาคารกรุงไทย ( สาขาภูเก็ต )', 'ขากลับ'),
(139, 3, 'ตรงข้ามคลินิกหมอหงส์รัตน์', 'ขากลับ'),
(140, 3, 'ตรงข้ามสำนักงานการประปาเทศบาลนครภูเก็ต', 'ขากลับ'),
(141, 3, 'หน้าร้านหนังสือทุ่งอักษร', 'ขากลับ'),
(142, 3, 'หน้าร้านบิวตี้แลนด์', 'ขากลับ'),
(143, 3, 'หน้าร้านศรีตรังโอชา', 'ขากลับ'),
(144, 3, 'หล่อโรง', 'ขากลับ'),
(145, 3, 'ตรงข้ามสนามสุรกุล', 'ขากลับ'),
(146, 3, 'หน้าร้าน 7 Eleven สาขาเจ้านอก', 'ขากลับ'),
(147, 3, 'หน้าร้าน 7 Eleven สาขาอนุภาษมโนรม', 'ขากลับ'),
(148, 3, 'หน้าร้าน Pizza Company ( ตลาดนัดวาไรตี้ )', 'ขากลับ'),
(149, 3, 'หน้าร้านทำป้าย ( ถนนบางกอก )', 'ขากลับ'),
(150, 3, 'หน้าร้านโกแบงค์แซ่บอีสาน', 'ขากลับ'),
(151, 3, 'ข้างอาคารฝ่ายศิลป์เทศบาลนครภูเก็ต', 'ขากลับ'),
(152, 3, 'สะพานหิน', 'ขากลับ');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(50) NOT NULL,
  `ticket_from` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ticket_to` varchar(50) NOT NULL,
  `ticket_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_from`, `ticket_to`, `ticket_price`) VALUES
(1, 'Phuket Bus Terminal', 'Phantep Condotown', '30'),
(2, 'Phuket Bus Terminal', 'Surakun Stadium', '30'),
(3, 'Phuket Bus Terminal', 'Central / Big C / Lotus', '30'),
(4, 'Phuket Bus Terminal', 'Erawadee Bypass / Baan Teelanka / Outlet Mall', '50'),
(5, 'Phuket Bus Terminal', 'Boat Lagoon', '50'),
(6, 'Phuket Bus Terminal', 'Heroines Monument', '50'),
(7, 'Phuket Bus Terminal', 'Pranangsang Temple', '70'),
(8, 'Phuket Bus Terminal', 'Baan Saku', '100'),
(9, 'Phuket Bus Terminal', 'Indigo Pearl Hotel', '100'),
(10, 'Phuket Bus Terminal', 'Phuket International Airport', '100'),
(11, 'Phantep Condotown', 'Surakun Stadium', '30'),
(12, 'Phantep Condotown', 'Central / Big C / Lotus', '30'),
(13, 'Phantep Condotown', 'Erawadee Bypass / Baan Teelanka / Outlet Mall', '50'),
(14, 'Phantep Condotown', 'Boat Lagoon', '50'),
(15, 'Phantep Condotown', 'Heroines Monument', '50'),
(16, 'Phantep Condotown', 'Pranangsang Temple', '70'),
(17, 'Phantep Condotown', 'Baan Saku', '100'),
(18, 'Phantep Condotown', 'Indigo Pearl Hotel', '100'),
(19, 'Phantep Condotown', 'Phuket International Airport', '100'),
(20, 'Surakun Stadium', 'Central / Big C / Lotus', '30'),
(21, 'Surakun Stadium', 'Erawadee Bypass / Baan Teelanka / Outlet Mall', '30'),
(22, 'Surakun Stadium', 'Boat Lagoon', '50'),
(23, 'Surakun Stadium', 'Heroines Monument', '50'),
(24, 'Surakun Stadium', 'Pranangsang Temple', '50'),
(25, 'Surakun Stadium', 'Baan Saku', '100'),
(26, 'Surakun Stadium', 'Indigo Pearl Hotel', '100'),
(27, 'Surakun Stadium', 'Phuket International Airport', '100'),
(28, 'Central / Big C / Lotus', 'Erawadee Bypass / Baan Teelanka / Outlet Mall', '30'),
(29, 'Central / Big C / Lotus', 'Boat Lagoon', '50'),
(30, 'Central / Big C / Lotus', 'Heroines Monument', '50'),
(31, 'Central / Big C / Lotus', 'Pranangsang Temple', '50'),
(32, 'Central / Big C / Lotus', 'Baan Saku', '70'),
(33, 'Central / Big C / Lotus', 'Indigo Pearl Hotel', '100'),
(34, 'Central / Big C / Lotus', 'Phuket International Airport', '100'),
(35, 'Erawadee Bypass / Baan Teelanka / Outlet Mall', 'Boat Lagoon', '30'),
(36, 'Erawadee Bypass / Baan Teelanka / Outlet Mall', 'Heroines Monument', '50'),
(37, 'Erawadee Bypass / Baan Teelanka / Outlet Mall', 'Pranangsang Temple', '50'),
(38, 'Erawadee Bypass / Baan Teelanka / Outlet Mall', 'Baan Saku', '70'),
(39, 'Erawadee Bypass / Baan Teelanka / Outlet Mall', 'Indigo Pearl Hotel', '100'),
(40, 'Erawadee Bypass / Baan Teelanka / Outlet Mall', 'Phuket International Airport', '100'),
(41, 'Boat Lagoon', 'Heroines Monument', '30'),
(42, 'Boat Lagoon', 'Pranangsang Temple', '50'),
(43, 'Boat Lagoon', 'Baan Saku', '70'),
(44, 'Boat Lagoon', 'Indigo Pearl Hotel', '100'),
(45, 'Boat Lagoon', 'Phuket International Airport', '100'),
(46, 'Heroines Monument', 'Pranangsang Temple', '30'),
(47, 'Heroines Monument', 'Baan Saku', '50'),
(48, 'Heroines Monument', 'Indigo Pearl Hotel', '50'),
(49, 'Heroines Monument', 'Phuket International Airport', '70'),
(50, 'Pranangsang Temple', 'Baan Saku', '30'),
(51, 'Pranangsang Temple', 'Indigo Pearl Hotel', '50'),
(52, 'Pranangsang Temple', 'Phuket International Airport', '50'),
(53, 'Baan Saku', 'Indigo Pearl Hotel', '50'),
(54, 'Baan Saku', 'Phuket International Airport', '50'),
(55, 'Indigo Pearl Hotel', 'Phuket International Airport', '50');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(200) NOT NULL,
  `timetable_place` varchar(50) CHARACTER SET utf8 NOT NULL,
  `timetable_time` varchar(20) CHARACTER SET utf8 NOT NULL,
  `timetable_from` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `timetable_place`, `timetable_time`, `timetable_from`) VALUES
(1, 'The Old Bus Terminal', '06.00', 'Phuket Town'),
(2, 'Sino Inn', '06.05', 'Phuket Town'),
(3, 'Central/Big C', '06.10', 'Phuket Town'),
(4, 'Tesco Lotus(Samkong)', '06.15', 'Phuket Town'),
(5, 'Baan Teelanka(By Pass)', '06.20', 'Phuket Town'),
(6, 'Boat Lagoon', '06.25', 'Phuket Town'),
(7, 'Heroines Monument', '06.30', 'Phuket Town'),
(8, 'Thalang', '06.35', 'Phuket Town'),
(9, 'The Slate Phuket', '06.40', 'Phuket Town'),
(10, 'Phuket Airport', '06.45', 'Phuket Town'),
(11, 'The Old Bus Terminal', '07.00', 'Phuket Town'),
(12, 'Sino Inn', '07.05', 'Phuket Town'),
(13, 'Central/Big C', '07.10', 'Phuket Town'),
(14, 'Tesco Lotus(Samkong)', '07.15', 'Phuket Town'),
(15, 'Baan Teelanka(By Pass)', '07.20', 'Phuket Town'),
(16, 'Boat Lagoon', '07.25', 'Phuket Town'),
(17, 'Heroines Monument', '07.35', 'Phuket Town'),
(18, 'Thalang', '07.45', 'Phuket Town'),
(19, 'The Slate Phuket', '07.55', 'Phuket Town'),
(20, 'Phuket Airport	', '08.00', 'Phuket Town'),
(21, 'The Old Bus Terminal', '08.00', 'Phuket Town'),
(22, 'Sino Inn', '08.05', 'Phuket Town'),
(23, 'Central/Big C', '08.10', 'Phuket Town'),
(24, 'Tesco Lotus(Samkong)', '08.20', 'Phuket Town'),
(25, 'Baan Teelanka(By Pass)', '08.30', 'Phuket Town'),
(26, 'Boat Lagoon', '08.35', 'Phuket Town'),
(27, 'Heroines Monument', '08.45', 'Phuket Town'),
(28, 'Thalang', '08.55', 'Phuket Town'),
(29, 'The Slate Phuket', '09.10', 'Phuket Town'),
(30, 'Phuket Airport', '09.20', 'Phuket Town'),
(31, 'The Old Bus Terminal', '09.30	', 'Phuket Town'),
(32, 'Sino Inn', '09.35	', 'Phuket Town'),
(33, 'Central/Big C', '09.40', 'Phuket Town'),
(34, 'Tesco Lotus(Samkong)', '09.45', 'Phuket Town'),
(35, 'Baan Teelanka(By Pass)', '09.50	', 'Phuket Town'),
(36, 'Boat Lagoon', '09.55	', 'Phuket Town'),
(37, 'Heroines Monument', '10.05', 'Phuket Town'),
(38, 'Thalang', '10.15', 'Phuket Town'),
(39, 'The Slate Phuket', '10.25', 'Phuket Town'),
(40, 'Phuket Airport	', '10.30', 'Phuket Town'),
(41, 'The Old Bus Terminal', '10.30', 'Phuket Town'),
(42, 'Sino Inn', '10.35', 'Phuket Town'),
(43, 'Central/Big C', '10.40', 'Phuket Town'),
(44, 'Tesco Lotus(Samkong)', '10.50', 'Phuket Town'),
(45, 'Baan Teelanka(By Pass)', '11.00', 'Phuket Town'),
(46, 'Boat Lagoon', '11.05', 'Phuket Town'),
(47, 'Heroines Monument', '11.15', 'Phuket Town'),
(48, 'Thalang', '11.25', 'Phuket Town'),
(49, 'The Slate Phuket', '11.35', 'Phuket Town'),
(50, 'Phuket Airport', '11.50', 'Phuket Town'),
(51, 'The Old Bus Terminal', '11.30', 'Phuket Town'),
(52, 'Sino Inn', '11.35', 'Phuket Town'),
(53, 'Central/Big C', '11.40', 'Phuket Town'),
(54, 'Tesco Lotus(Samkong)', '11.50', 'Phuket Town'),
(55, 'Baan Teelanka(By Pass)', '12.00', 'Phuket Town'),
(56, 'Boat Lagoon', '12.05', 'Phuket Town'),
(57, 'Heroines Monument', '12.15', 'Phuket Town'),
(58, 'Thalang', '12.25', 'Phuket Town'),
(59, 'The Slate Phuket', '12.35', 'Phuket Town'),
(60, 'Phuket Airport', '12.50', 'Phuket Town'),
(61, 'The Old Bus Terminal', '13.00', 'Phuket Town'),
(62, 'Sino Inn', '13.05', 'Phuket Town'),
(63, 'Central/Big C', '13.10', 'Phuket Town'),
(64, 'Tesco Lotus(Samkong)', '13.20', 'Phuket Town'),
(65, 'Baan Teelanka(By Pass)', '13.30', 'Phuket Town'),
(66, 'Boat Lagoon', '13.35', 'Phuket Town'),
(67, 'Heroines Monument', '13.45', 'Phuket Town'),
(68, 'Thalang', '13.55', 'Phuket Town'),
(69, 'The Slate Phuket', '14.10	', 'Phuket Town'),
(70, 'Phuket Airport', '14.20', 'Phuket Town'),
(71, 'The Old Bus Terminal', '14.30', 'Phuket Town'),
(72, 'Sino Inn', '14.35', 'Phuket Town'),
(73, 'Central/Big C', '14.40', 'Phuket Town'),
(74, 'Tesco Lotus(Samkong)', '14.45', 'Phuket Town'),
(75, 'Baan Teelanka(By Pass)', '14.50', 'Phuket Town'),
(76, 'Boat Lagoon', '14.55', 'Phuket Town'),
(77, 'Heroines Monument', '15.05', 'Phuket Town'),
(78, 'Thalang', '15.15', 'Phuket Town'),
(79, 'The Slate Phuket', '15.25', 'Phuket Town'),
(80, 'Phuket Airport', '15.30', 'Phuket Town'),
(81, 'The Old Bus Terminal', '15.30', 'Phuket Town'),
(82, 'Sino Inn', '15.35', 'Phuket Town'),
(83, 'Central/Big C', '15.40', 'Phuket Town'),
(84, 'Tesco Lotus(Samkong)', '15.35', 'Phuket Town'),
(85, 'Baan Teelanka(By Pass)', '16.00', 'Phuket Town'),
(86, 'Boat Lagoon', '16.05', 'Phuket Town'),
(87, 'Heroines Monument', '16.15', 'Phuket Town'),
(88, 'Thalang', '16.25', 'Phuket Town'),
(89, 'The Slate Phuket', '16.35', 'Phuket Town'),
(90, 'Phuket Airport', '16.50', 'Phuket Town'),
(91, 'The Old Bus Terminal', '16.30	', 'Phuket Town'),
(92, 'Sino Inn', '16.35	', 'Phuket Town'),
(93, 'Central/Big C', '16.40', 'Phuket Town'),
(94, 'Tesco Lotus(Samkong)', '16.50', 'Phuket Town'),
(95, 'Baan Teelanka(By Pass)', '17.00', 'Phuket Town'),
(96, 'Boat Lagoon', '17.05', 'Phuket Town'),
(97, 'Heroines Monument', '17.15', 'Phuket Town'),
(98, 'Thalang', '17.25', 'Phuket Town'),
(99, 'The Slate Phuket', '17.35', 'Phuket Town'),
(100, 'Phuket Airport', '17.50', 'Phuket Town'),
(101, 'The Old Bus Terminal', '17.30', 'Phuket Town'),
(102, 'Sino Inn', '17.35', 'Phuket Town'),
(103, 'Central/Big C', '17.40', 'Phuket Town'),
(104, 'Tesco Lotus(Samkong)', '17.50', 'Phuket Town'),
(105, 'Baan Teelanka(By Pass)', '18.00', 'Phuket Town'),
(106, 'Boat Lagoon', '18.05', 'Phuket Town'),
(107, 'Heroines Monument', '18.15', 'Phuket Town'),
(108, 'Thalang', '18.25', 'Phuket Town'),
(109, 'The Slate Phuket', 'N/A ', 'Phuket Town'),
(110, 'Phuket Airport	', '18.40', 'Phuket Town'),
(111, 'The Old Bus Terminal', '18.30', 'Phuket Town'),
(112, 'Sino Inn', '18.35', 'Phuket Town'),
(113, 'Central/Big C', '18.40', 'Phuket Town'),
(114, 'Tesco Lotus(Samkong)', '18.50', 'Phuket Town'),
(115, 'Baan Teelanka(By Pass)', '19.00', 'Phuket Town'),
(116, 'Boat Lagoon', '19.10', 'Phuket Town'),
(117, 'Heroines Monument', '19.30', 'Phuket Town'),
(118, 'Thalang', '19.40', 'Phuket Town'),
(119, 'The Slate Phuket', 'N/A ', 'Phuket Town'),
(120, 'Phuket Airport	', '20.00', 'Phuket Town');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`attractions_id`);

--
-- Indexes for table `busstop`
--
ALTER TABLE `busstop`
  ADD PRIMARY KEY (`busstop_id`);

--
-- Indexes for table `busstop_phothong`
--
ALTER TABLE `busstop_phothong`
  ADD PRIMARY KEY (`busstop_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`Position_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `route_phothong`
--
ALTER TABLE `route_phothong`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `attractions_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `busstop`
--
ALTER TABLE `busstop`
  MODIFY `busstop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `busstop_phothong`
--
ALTER TABLE `busstop_phothong`
  MODIFY `busstop_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `Position_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `route_phothong`
--
ALTER TABLE `route_phothong`
  MODIFY `route_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
