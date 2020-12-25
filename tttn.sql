-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 08:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tttn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` int(10) NOT NULL,
  `username` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `fullname` char(255) NOT NULL,
  `phone` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `username`, `password`, `fullname`, `phone`, `email`, `status`) VALUES
(1, 'admin', '123', 'abc', '012345678', 'abc@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbladvertise`
--

CREATE TABLE `tbladvertise` (
  `adid` int(10) DEFAULT NULL,
  `adname` char(255) NOT NULL,
  `adurl` char(255) NOT NULL,
  `adimage` varchar(255) NOT NULL,
  `addate` date NOT NULL,
  `admemo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `cityid` int(10) NOT NULL,
  `cityvn` char(255) NOT NULL,
  `cityen` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`cityid`, `cityvn`, `cityen`) VALUES
(1, 'An Giang', 'An Giang'),
(2, 'Bà Rịa - Vũng Tàu', 'Ba Ria - Vung Tau'),
(3, 'Bắc Giang', 'Bac Giang'),
(4, 'Bắc Kạn', 'Bac Kan'),
(5, 'Bạc Liêu', 'Bac Lieu'),
(6, 'Bắc Ninh', 'Bac Ninh'),
(7, 'Bến Tre', 'Ben Tre'),
(8, 'Bình Định', 'Binh Đinh'),
(9, 'Bình Dương', 'Binh Duong'),
(10, 'Bình Phước', 'Binh Phuoc'),
(11, 'Bình Thuận', 'Binh Thuan'),
(12, 'Cà Mau', 'Ca Mau'),
(13, 'Cao Bằng', 'Cao Bang'),
(14, 'Đắk Lắk', 'Dak Lak'),
(15, 'Đắk Nông', 'Dak Nong'),
(16, 'Điện Biên', 'Dien Bien'),
(17, 'Đồng Nai', 'Dong Nai'),
(18, 'Đồng Tháp', 'Dong Thap'),
(19, 'Gia Lai', 'Gia Lai'),
(20, 'Hà Giang', 'Ha Giang'),
(21, 'Hà Nam', 'Ha Nam'),
(22, 'Hà Nội', 'Ha Noi'),
(23, 'Đà Nẵng', 'Da Nang'),
(24, 'Hồ Chí Minh', 'Ho Chi Minh');

-- --------------------------------------------------------

--
-- Table structure for table `tbllink`
--

CREATE TABLE `tbllink` (
  `linkid` int(10) NOT NULL,
  `namelink` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblliteracy`
--

CREATE TABLE `tblliteracy` (
  `literacyid` int(10) NOT NULL,
  `litname` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblmessager`
--

CREATE TABLE `tblmessager` (
  `mesid` int(10) NOT NULL,
  `titlevn` char(255) NOT NULL,
  `contentvn` char(255) NOT NULL,
  `mesmemo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `newsid` int(10) NOT NULL,
  `title` char(255) NOT NULL,
  `content` char(255) NOT NULL,
  `newsimage` varchar(255) NOT NULL,
  `newsurl` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblprofession`
--

CREATE TABLE `tblprofession` (
  `proid` int(10) NOT NULL,
  `provn` char(255) NOT NULL,
  `proen` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprofession`
--

INSERT INTO `tblprofession` (`proid`, `provn`, `proen`) VALUES
(1, 'An toàn lao động', 'HSE'),
(2, 'Bác sĩ', 'Doctors'),
(3, 'Bán hàng', 'Sales'),
(4, 'Bảo hiểm', 'Insurance'),
(5, 'IT - Phần mềm', 'IT - Software'),
(6, 'IT - Phần cứng/Mạng', 'IT - Hardware/Networking');

-- --------------------------------------------------------

--
-- Table structure for table `tblrecruit`
--

CREATE TABLE `tblrecruit` (
  `reid` int(10) NOT NULL,
  `company` char(255) NOT NULL,
  `companyinfo` char(255) NOT NULL,
  `phone` char(255) NOT NULL,
  `fax` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `cityid` int(10) NOT NULL,
  `address` char(255) NOT NULL,
  `website` char(255) NOT NULL,
  `reimage` varchar(255) NOT NULL,
  `users` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `status` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblrecruit_info`
--

CREATE TABLE `tblrecruit_info` (
  `tdid` int(10) NOT NULL,
  `reid` int(10) NOT NULL,
  `proid` int(10) NOT NULL,
  `vacancies` char(255) NOT NULL,
  `speciality` char(255) NOT NULL,
  `standand` char(255) NOT NULL,
  `expenrience` char(255) NOT NULL,
  `timework` char(255) NOT NULL,
  `amount` char(255) NOT NULL,
  `salary` char(255) NOT NULL,
  `ortherinfomemo` text NOT NULL,
  `requestmemo` text NOT NULL,
  `deadline` char(255) NOT NULL,
  `porter` char(255) NOT NULL,
  `contact` char(255) NOT NULL,
  `postdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_info`
--

CREATE TABLE `tbluser_info` (
  `userid` int(10) NOT NULL,
  `username` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `fullname` char(255) NOT NULL,
  `literacyid` int(10) NOT NULL,
  `rate` char(255) NOT NULL,
  `proid` int(10) NOT NULL,
  `expenrience` char(255) NOT NULL,
  `speciality` char(255) NOT NULL,
  `sex` bit(1) NOT NULL,
  `birthday` date NOT NULL,
  `marriage` bit(1) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `worktime` char(255) NOT NULL,
  `desiredsalary` char(255) NOT NULL,
  `address` char(255) NOT NULL,
  `phone` char(255) NOT NULL,
  `otherinfo` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `tbllink`
--
ALTER TABLE `tbllink`
  ADD PRIMARY KEY (`linkid`);

--
-- Indexes for table `tblliteracy`
--
ALTER TABLE `tblliteracy`
  ADD PRIMARY KEY (`literacyid`);

--
-- Indexes for table `tblmessager`
--
ALTER TABLE `tblmessager`
  ADD PRIMARY KEY (`mesid`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `tblprofession`
--
ALTER TABLE `tblprofession`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `tblrecruit`
--
ALTER TABLE `tblrecruit`
  ADD PRIMARY KEY (`reid`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `tblrecruit_info`
--
ALTER TABLE `tblrecruit_info`
  ADD PRIMARY KEY (`tdid`),
  ADD KEY `reid` (`reid`),
  ADD KEY `proid` (`proid`);

--
-- Indexes for table `tbluser_info`
--
ALTER TABLE `tbluser_info`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `literacyid` (`literacyid`),
  ADD KEY `proid` (`proid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `cityid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbllink`
--
ALTER TABLE `tbllink`
  MODIFY `linkid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblliteracy`
--
ALTER TABLE `tblliteracy`
  MODIFY `literacyid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmessager`
--
ALTER TABLE `tblmessager`
  MODIFY `mesid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblprofession`
--
ALTER TABLE `tblprofession`
  MODIFY `proid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblrecruit`
--
ALTER TABLE `tblrecruit`
  MODIFY `reid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblrecruit_info`
--
ALTER TABLE `tblrecruit_info`
  MODIFY `tdid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser_info`
--
ALTER TABLE `tbluser_info`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblrecruit`
--
ALTER TABLE `tblrecruit`
  ADD CONSTRAINT `tblrecruit_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`);

--
-- Constraints for table `tblrecruit_info`
--
ALTER TABLE `tblrecruit_info`
  ADD CONSTRAINT `tblrecruit_info_ibfk_1` FOREIGN KEY (`reid`) REFERENCES `tblrecruit` (`reid`),
  ADD CONSTRAINT `tblrecruit_info_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `tblprofession` (`proid`);

--
-- Constraints for table `tbluser_info`
--
ALTER TABLE `tbluser_info`
  ADD CONSTRAINT `tbluser_info_ibfk_1` FOREIGN KEY (`literacyid`) REFERENCES `tblliteracy` (`literacyid`),
  ADD CONSTRAINT `tbluser_info_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `tblprofession` (`proid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
