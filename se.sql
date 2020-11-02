-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2020 at 09:02 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_address`
--

CREATE TABLE `current_address` (
  `Member_id` int(11) NOT NULL,
  `House_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Swine` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Canton` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Province` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Postal_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `current_address`
--

INSERT INTO `current_address` (`Member_id`, `House_number`, `Swine`, `District`, `Canton`, `Province`, `Postal_code`) VALUES
(2, '45/1', '-', 'นครปฐม', 'เมือง', 'นครปฐม', '73000'),
(3, '111', '-', 'หนองดินแดง', 'เมือง', 'นครปฐม', '73000'),
(4, '', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_se`
--

CREATE TABLE `member_se` (
  `Member_id` int(11) NOT NULL,
  `Username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_se`
--

INSERT INTO `member_se` (`Member_id`, `Username`, `Password`, `Status`) VALUES
(2, 'shadoeiei1', '123456789', 'User'),
(3, 'fluk', '123456789', 'User'),
(4, '', '', 'User'),
(5, '', '', 'User'),
(6, 'new', '123456789', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `Member_id` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Prefix` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `F_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `L_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Sex` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date_of_birth` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Studentcode` char(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Highest_education` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Institute_for_further_study` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Graduation_year` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Company_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Job_position` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Salary` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`Member_id`, `img`, `Prefix`, `F_name`, `L_name`, `Sex`, `Date_of_birth`, `Studentcode`, `Phone`, `Email`, `Highest_education`, `Subject`, `Institute_for_further_study`, `Country`, `Graduation_year`, `Company_name`, `Job_position`, `Salary`) VALUES
(2, '1.jpg', 'นาย', 'สหรัฐ', 'สารสุวรรณ', 'ชาย', '05/06/1998', '614259057', '0950032145', '614259057@webmail.npru.ac.th', 'ปวช.', 'คอมพิวเตอร์ธุรกิจ', 'มหาลัยราชภัฏนครปฐม', 'ไทย', '-', '-', '-', '-'),
(3, '2.jpg', 'นาย', 'เดชาชาญ', 'บัวแสง', 'ชาย', '11/03/1999', '614259036', '0877777421', '614259036@webmail.npru.ac.th', 'ม.6', 'สามัญ', 'มหาลัยราชภัฏนครปฐม', 'ไทย', '-', '-', '-', '-'),
(6, '3.jpg', 'นาย', 'วุฒิพงษ์', 'โพธิ์งาม', 'ชาย', '02/04/2000', '614259046', '0621377554', '614259046@webmail.npru.ac.th', 'ป.ตรี', 'วิศวกรรมซอฟแวร์', '', 'ไทย', '2564', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_address`
--

CREATE TABLE `work_address` (
  `Member_id` int(11) NOT NULL,
  `House_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Swine` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Canton` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Province` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Postal_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `work_address`
--

INSERT INTO `work_address` (`Member_id`, `House_number`, `Swine`, `District`, `Canton`, `Province`, `Postal_code`) VALUES
(2, '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-'),
(4, '', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, '12/1', '1', '614259046', 'เมือง', 'นครปฐม', '73000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_address`
--
ALTER TABLE `current_address`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `member_se`
--
ALTER TABLE `member_se`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `work_address`
--
ALTER TABLE `work_address`
  ADD PRIMARY KEY (`Member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current_address`
--
ALTER TABLE `current_address`
  MODIFY `Member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member_se`
--
ALTER TABLE `member_se`
  MODIFY `Member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `Member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_address`
--
ALTER TABLE `work_address`
  MODIFY `Member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
