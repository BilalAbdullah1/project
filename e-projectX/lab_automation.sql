-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 08:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagorytb`
--

CREATE TABLE `catagorytb` (
  `cid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagorytb`
--

INSERT INTO `catagorytb` (`cid`, `catname`) VALUES
(66, ' asdsa '),
(67, ' asfsaf '),
(68, ' sadsagsa '),
(69, ' assad '),
(70, ' sagsa '),
(71, ' asgsag ');

-- --------------------------------------------------------

--
-- Table structure for table `categorytb`
--

CREATE TABLE `categorytb` (
  `cid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorytb`
--

INSERT INTO `categorytb` (`cid`, `catname`) VALUES
(2, ' chemicals '),
(3, ' Ions '),
(4, ' Compounds ');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `pid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productdesignation` varchar(255) NOT NULL,
  `productdescription` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `pstatus` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`pid`, `productname`, `productdesignation`, `productdescription`, `productimage`, `category_id`, `pstatus`, `comment`) VALUES
(2, 'asd', 'asfsa', 'saf', 'istockphoto-1282369003-612x612-removebg-preview.png', '3', 1, 'safdasf');

-- --------------------------------------------------------

--
-- Table structure for table `registertb`
--

CREATE TABLE `registertb` (
  `regid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ustatus` tinyint(1) NOT NULL DEFAULT 1,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registertb`
--

INSERT INTO `registertb` (`regid`, `username`, `email`, `password`, `ustatus`, `usertype`) VALUES
(9, 'tester', 'tester@gmail.com', 'tester', 1, 'user'),
(10, 'admin', 'admin@gmail.com', 'admin', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `statustb`
--

CREATE TABLE `statustb` (
  `sid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statustb`
--

INSERT INTO `statustb` (`sid`, `status`) VALUES
(1, 'Pass'),
(2, 'Fail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagorytb`
--
ALTER TABLE `catagorytb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `categorytb`
--
ALTER TABLE `categorytb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registertb`
--
ALTER TABLE `registertb`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `statustb`
--
ALTER TABLE `statustb`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagorytb`
--
ALTER TABLE `catagorytb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `categorytb`
--
ALTER TABLE `categorytb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registertb`
--
ALTER TABLE `registertb`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statustb`
--
ALTER TABLE `statustb`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
