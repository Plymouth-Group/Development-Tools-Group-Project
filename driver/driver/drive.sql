-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2022 at 04:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `accid` int(5) NOT NULL,
  `date` datetime DEFAULT NULL,
  `vehicle` varchar(30) DEFAULT NULL,
  `did` int(5) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `source` varchar(30) DEFAULT NULL,
  `pic1` varchar(100) DEFAULT NULL,
  `pic2` varchar(100) DEFAULT NULL,
  `pic3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`accid`, `date`, `vehicle`, `did`, `des`, `source`, `pic1`, `pic2`, `pic3`) VALUES
(8, '2022-04-24 09:55:07', 'Suziki Alto', 1, 'csadvfbnhgh', 'Tower', 'v_27_screenshot.jpg', 'v_80_Gift Coupon - Star Admin 2.jpg', 'v_4_screenshot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `did` int(5) NOT NULL,
  `dname` text DEFAULT NULL,
  `dnic` varchar(20) DEFAULT NULL,
  `dtel` varchar(12) DEFAULT NULL,
  `demail` varchar(50) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `pw` varchar(30) DEFAULT NULL,
  `insu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`did`, `dname`, `dnic`, `dtel`, `demail`, `uname`, `pw`, `insu`) VALUES
(1, 'Thanush Dahanayaka', '200124100897', '0703879520', 'thanushdahanayaka@gmail.com', 'tksd20', '123456', NULL),
(3, 'kavindu hashan', '200125702730', '0763582348', '986787632', 'kavindu', '123456', '8763452630');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `accid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
