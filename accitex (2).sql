-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accitex`
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
  `pic3` varchar(100) DEFAULT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`accid`, `date`, `vehicle`, `did`, `des`, `source`, `pic1`, `pic2`, `pic3`, `type`) VALUES
(12, '2022-05-19 04:24:53', 'jeep', 3, 'Kiriwatthuduwa junction', 'KY-1234', 'v_13_acc10 (4).jpg', 'v_2_acc10 (3).jpg', 'v_19_acc10 (2).jpg', ''),
(13, '2022-05-19 05:14:45', 'Car', 3, 'Near homagama town', 'KY-1234', 'v_9_acc9.jpg', 'v_23_acc3.jpg', 'v_56_acc1.jpg', ''),
(14, '2022-05-19 05:20:37', 'jeep', 3, 'Pannipitiya junction', 'KV-1243', 'v_78_acc8.jpg', 'v_64_acc10 (4).jpg', '', ''),
(15, '2022-05-19 05:22:01', 'jeep', 3, 'Pannipitiya junction', 'KV-1243', 'v_29_acc8.jpg', 'v_72_acc10 (4).jpg', '', ''),
(16, '2022-05-19 05:25:31', 'jeep', 3, 'Pannipitiya junction', 'KV-1243', 'v_54_acc8.jpg', 'v_26_acc10 (4).jpg', '', 'Bad Weather'),
(17, '2022-05-19 05:26:18', 'jeep', 3, 'Pannipitiya junction', 'KV-1243', 'v_97_acc8.jpg', 'v_4_acc10 (4).jpg', '', 'Bad Weather'),
(18, '2022-05-19 05:26:36', 'jeep', 3, 'Pannipitiya junction', 'KV-1243', 'v_68_acc8.jpg', 'v_94_acc10 (4).jpg', '', 'Bad Weather'),
(19, '2022-05-19 05:35:06', 'Van', 3, 'Matara', 'BL-1234', 'v_62_acc2.jpg', 'v_93_acc8.jpg', '', 'Drunk Driving'),
(20, '2022-05-19 05:35:52', 'Bike', 3, 'Pitipana', 'OL-1234', 'v_31_acc9.jpg', '', '', 'Speeding'),
(21, '2022-05-19 05:36:39', 'Bus', 3, 'Maharagama town', 'ML-1234', 'v_99_acc6.jpg', 'v_67_acc10 (1).jpg', '', 'Distractions'),
(22, '2022-05-19 10:14:22', 'Bike', 4, 'Homagama Town', 'KG-1234', 'v_96_acc10 (1).jpg', '', '', 'Speeding');

-- --------------------------------------------------------

--
-- Table structure for table `approvedacc`
--

CREATE TABLE `approvedacc` (
  `vehicle` varchar(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `source` varchar(255) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `accid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approvedacc`
--

INSERT INTO `approvedacc` (`vehicle`, `did`, `des`, `source`, `pic1`, `pic2`, `pic3`, `type`, `date`, `accid`) VALUES
('Van', '3', 'homagama', 'KV-1234', 'v_15_acc7.jpeg', 'v_55_acc2.jpg', '', 'Bad Weather', '2022-05-16', '9');

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
(3, 'kavindu hashan', '200125702730', '0763582348', '986787632', 'kavindu', '123456', '8763452630'),
(4, 'Piyumi Prasandika', '200034524', '0776543438', 'KW1234', 'Piyumi', 'piyu', 'PY0976');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `comname` varchar(100) NOT NULL,
  `tegid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `regnamedate` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `i_username` varchar(100) NOT NULL,
  `i_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`comname`, `tegid`, `email`, `regnamedate`, `tel`, `i_username`, `i_password`) VALUES
('Ceylinco', 'cey123', 'cey@gmail.com', '2000-07-05', '0776543432', 'ceylinco', 'cey123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Piyumi Prasandika', 'piyu', '7815696ecbf1c96e6894b779456d330e'),
(2, 'Ceylinco life Insurance', 'ceylinco', '631df2198c29b040acdb94c8f68f8cb7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_police`
--

CREATE TABLE `tbl_police` (
  `poliareaname` varchar(100) NOT NULL,
  `polid` varchar(100) NOT NULL,
  `poliemail` varchar(100) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `poliuname` varchar(100) NOT NULL,
  `polipwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_police`
--

INSERT INTO `tbl_police` (`poliareaname`, `polid`, `poliemail`, `Contact_No`, `poliuname`, `polipwd`) VALUES
('Maharagama', 'M1234', 'maharapolice@gmail.com', 11234235, 'M_police', 'm123'),
('Homagama', 'p123', 'police@gmail.com', 112342562, 'police', '1234'),
('Homagama', 'p134', 'policehomagama@gmail.com', 112342525, 'h_police', 'h123'),
('Kottawa', 'p156', 'policekattawa@gmail.com', 112342526, 'k_police', 'k123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_type`) VALUES
('Admin', 'admin123', 'admin'),
('piyu', '123', 'insurance'),
('', '', 'police'),
('', '', 'police'),
('M_police', 'm123', 'police');

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
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`tegid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_police`
--
ALTER TABLE `tbl_police`
  ADD PRIMARY KEY (`polid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `accid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
