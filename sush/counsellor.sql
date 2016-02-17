-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2015 at 11:19 AM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `counsellor`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE IF NOT EXISTS `absence` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` varchar(35) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `challan` int(5) DEFAULT NULL,
  `amt` int(8) DEFAULT NULL,
  `favour` varchar(40) DEFAULT NULL,
  `deposit` date DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hss`
--

CREATE TABLE IF NOT EXISTS `hss` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `event` varchar(30) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE IF NOT EXISTS `sem2` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE IF NOT EXISTS `sem3` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE IF NOT EXISTS `sem4` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE IF NOT EXISTS `sem5` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE IF NOT EXISTS `sem6` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE IF NOT EXISTS `sem7` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE IF NOT EXISTS `sem8` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL,
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `name` char(25) DEFAULT NULL,
  `batch` int(5) DEFAULT NULL,
  `s_id` varchar(10) NOT NULL,
  `e_id` varchar(25) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `desg` char(20) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `batch` (`batch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` char(25) DEFAULT NULL,
  `usn` varchar(10) NOT NULL,
  `sex` char(5) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `yoa` int(4) DEFAULT NULL,
  `adm_type` char(6) DEFAULT NULL,
  `rank` int(5) DEFAULT NULL,
  `e_id` varchar(25) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `f_name` char(25) DEFAULT NULL,
  `f_id` varchar(25) DEFAULT NULL,
  `f_no` int(10) DEFAULT NULL,
  `m_name` char(25) DEFAULT NULL,
  `m_id` varchar(25) DEFAULT NULL,
  `m_no` int(10) DEFAULT NULL,
  `batch` int(5) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usn`),
  KEY `batch` (`batch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `absence_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `hss`
--
ALTER TABLE `hss`
  ADD CONSTRAINT `hss_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem1`
--
ALTER TABLE `sem1`
  ADD CONSTRAINT `sem1_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem2`
--
ALTER TABLE `sem2`
  ADD CONSTRAINT `sem2_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem3`
--
ALTER TABLE `sem3`
  ADD CONSTRAINT `sem3_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem4`
--
ALTER TABLE `sem4`
  ADD CONSTRAINT `sem4_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem5`
--
ALTER TABLE `sem5`
  ADD CONSTRAINT `sem5_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem6`
--
ALTER TABLE `sem6`
  ADD CONSTRAINT `sem6_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem7`
--
ALTER TABLE `sem7`
  ADD CONSTRAINT `sem7_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `sem8`
--
ALTER TABLE `sem8`
  ADD CONSTRAINT `sem8_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`batch`) REFERENCES `staff` (`batch`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
