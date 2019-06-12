-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 04:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ucsc_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `2013cs1`
--

CREATE TABLE IF NOT EXISTS `2013cs1` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs1`
--

INSERT INTO `2013cs1` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13001233, 'SCS0001', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001233, 'SCS1000', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS0001', NULL, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS1000', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS0001', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS1000', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs1gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs1gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs1gpa`
--

INSERT INTO `2013cs1gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
(13001233, 4, 20, 5),
(13001248, 3.4, 17, 5),
(33333333, 2.8, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs2`
--

CREATE TABLE IF NOT EXISTS `2013cs2` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs2`
--

INSERT INTO `2013cs2` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13001233, 'SCS0001', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001233, 'SCS1000', NULL, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS0001', NULL, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS1000', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS0001', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS1000', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs2gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs2gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs2gpa`
--

INSERT INTO `2013cs2gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
(13001233, 3.6, 18, 5),
(13001248, 2.6, 13, 5),
(33333333, 2, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs3`
--

CREATE TABLE IF NOT EXISTS `2013cs3` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs3`
--

INSERT INTO `2013cs3` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13001233, 'SCS0001', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001233, 'SCS1000', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS0001', NULL, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS1000', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS0001', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS1000', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs3gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs3gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs3gpa`
--

INSERT INTO `2013cs3gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
(13001233, 4, 20, 5),
(13001248, 2.6, 13, 5),
(33333333, 2.8, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4`
--

CREATE TABLE IF NOT EXISTS `2013cs4` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4`
--

INSERT INTO `2013cs4` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13001233, 'SCS0001', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001233, 'SCS1000', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS0001', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS1000', NULL, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS0001', NULL, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS1000', NULL, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs4gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4gpa`
--

INSERT INTO `2013cs4gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
(13001233, 4, 20, 5),
(13001248, 2.75, 13.75, 5),
(33333333, 2.25, 11.25, 5);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4thyrfinalgpa`
--

CREATE TABLE IF NOT EXISTS `2013cs4thyrfinalgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4thyrfinalgpa`
--

INSERT INTO `2013cs4thyrfinalgpa` (`index_no`, `gpa`) VALUES
(13001233, 3.7472727272727),
(13001248, 3.0818181818182),
(33333333, 2.9181818181818);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4thyrlist`
--

CREATE TABLE IF NOT EXISTS `2013cs4thyrlist` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4thyrlist`
--

INSERT INTO `2013cs4thyrlist` (`index_no`, `gpa`) VALUES
(13001233, 3.9),
(13001248, 2.8375),
(33333333, 2.4625);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs5`
--

CREATE TABLE IF NOT EXISTS `2013cs5` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs5`
--

INSERT INTO `2013cs5` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13001233, 'SCS0001', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001233, 'SCS1000', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS0001', 55, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001248, 'SCS1000', 57, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS0001', 45, 'D+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333333, 'SCS1000', 55, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs5gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs5gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs5gpa`
--

INSERT INTO `2013cs5gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
(13001233, 3.85, 19.25, 5),
(13001248, 2, 10, 5),
(33333333, 1.55, 7.75, 5);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs6`
--

CREATE TABLE IF NOT EXISTS `2013cs6` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2013cs6gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs6gpa` (
  `index_no` varchar(50) NOT NULL,
  `gpa` float NOT NULL,
  `gpv` float NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs6gpa`
--

INSERT INTO `2013cs6gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
('13001233', 3.31, 33.1, 10),
('13001248', 3.1, 31, 10),
('33333333', 3.7, 37, 10);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs7gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs7gpa` (
  `index_no` varchar(50) NOT NULL,
  `gpa` float NOT NULL,
  `gpv` float NOT NULL,
  `credits` float NOT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs7gpa`
--

INSERT INTO `2013cs7gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
('13001233', 3.6, 36, 10),
('13001248', 3, 30, 10),
('33333333', 2.9, 29, 10);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs8gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs8gpa` (
  `index_no` varchar(50) NOT NULL,
  `gpa` float NOT NULL,
  `gpv` float NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs8gpa`
--

INSERT INTO `2013cs8gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
('13001233', 3.9, 39, 10),
('13001248', 3.8, 38, 10),
('33333333', 3.4, 34, 10);

-- --------------------------------------------------------

--
-- Table structure for table `2013csfinalgpa`
--

CREATE TABLE IF NOT EXISTS `2013csfinalgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013csfinalgpa`
--

INSERT INTO `2013csfinalgpa` (`index_no`, `gpa`) VALUES
(13001233, 3.89),
(13001248, 2.67),
(33333333, 2.28);

-- --------------------------------------------------------

--
-- Table structure for table `2013csoverallgpa`
--

CREATE TABLE IF NOT EXISTS `2013csoverallgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013csoverallgpa`
--

INSERT INTO `2013csoverallgpa` (`index_no`, `gpa`) VALUES
(13001233, 3.9),
(13001248, 2.8375),
(33333333, 2.4625);

-- --------------------------------------------------------

--
-- Table structure for table `2014cs1`
--

CREATE TABLE IF NOT EXISTS `2014cs1` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2014cs1`
--

INSERT INTO `2014cs1` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13001043, 'SCS0001', 55, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13001043, 'SCS1000', 12, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14001234, 'SCS0001', 95, 'A+', 67, 'B-', 89, 'A', 56, 'C', NULL, NULL, NULL, NULL),
(14001234, 'SCS1000', 65, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14001637, 'SCS0001', 35, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14001637, 'SCS1000', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14009997, 'SCS0001', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14009997, 'SCS1000', 49, 'D+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2014cs1gpa`
--

CREATE TABLE IF NOT EXISTS `2014cs1gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2014cs1gpa`
--

INSERT INTO `2014cs1gpa` (`index_no`, `gpa`, `gpv`, `credits`) VALUES
(13001043, 2, 6, 3),
(14001234, 3.5, 17.5, 5),
(14001637, 2.05, 10.25, 5),
(14009997, 2.75, 13.75, 5);

-- --------------------------------------------------------

--
-- Table structure for table `2015cs1`
--

CREATE TABLE IF NOT EXISTS `2015cs1` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2018csoverallgpa`
--

CREATE TABLE IF NOT EXISTS `2018csoverallgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_subject`
--

CREATE TABLE IF NOT EXISTS `lecturer_subject` (
  `staff_id` varchar(30) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`,`sub_id`),
  KEY `lecturer_subject_ibfk_2` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_subject`
--

INSERT INTO `lecturer_subject` (`staff_id`, `sub_id`) VALUES
('UCSC001', '0998'),
('UCSC001', '1111'),
('UCSC001', 'IS0001'),
('UCSC002', 'IS0001'),
('UCSC003', 'IS0001'),
('UCSC005', 'IS0001'),
('UCSC000', 'IS0002'),
('UCSC001', 'IS0002'),
('UCSC002', 'IS0002'),
('001', 'IS1000'),
('011', 'IS1000'),
('UCSC001', 'IS1000'),
('UCSC002', 'IS1000'),
('UCSC001', 'IS1001'),
('UCSC002', 'IS1001'),
('UCSC001', 'SCS0001'),
('UCSC002', 'SCS0001'),
('UCSC001', 'SCS1000'),
('UCSC002', 'SCS1000'),
('UCSC003', 'SCS1103'),
('UCSC005', 'SCS1103'),
('UCSC003', 'SCS1104');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `image_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `sub_id` varchar(50) NOT NULL,
  `index_no` int(8) NOT NULL,
  `grade` varchar(10) NOT NULL,
  PRIMARY KEY (`index_no`),
  UNIQUE KEY `index_no` (`index_no`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_no` int(8) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `nwi` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `course` varchar(5) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`index_no`),
  UNIQUE KEY `id` (`id`),
  KEY `index_no` (`index_no`),
  KEY `index_no_2` (`index_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `index_no`, `full_name`, `nwi`, `nic`, `batch`, `course`, `reg_no`, `address`, `contact_no`, `email`, `gender`, `dob`) VALUES
(6, 13001043, 'Ravindu Roshan wadasinha', 'W L G R Roshan', '913373642V', '2014', 'CS', '2013CS104', 'No 33/13,\\r\\nWelegewata,\\r\\nmilidduwa,\\r\\nGalle.', '0773558782', 'ravinduroshan.rr@gmail.com', 'male', '1991-12-02'),
(8, 13001111, 'female student new', 'f s student', '908976612v', '2012', 'CS', '2013CS111', 'abcd', '0778976543', 'abcd@nj.com', 'male', '1992-08-10'),
(13, 13001233, 'Aparni jayawardana', 'A Jayawardana', '923464416v', '2013', 'CS', '2013CS123', 'dfaff', '0719089765', 'aparni@ucsc.ac', 'female', '1992-10-05'),
(7, 13001248, 'Wakwella Kankanamge Chamika Vishmal', 'W.K.C.Vishmal', '123456789V', '2013', 'CS', '2013CS124', '105/11/2 A, Aluthwatta,Nakiyadeniya, Galle.', '0719589517', 'chamikaudugama@gmail.com', 'male', '1992-10-22'),
(20, 13020252, 'batuwitage Lochana Thathsaranee', 'B L thathsaranee', '923464414v', '', 'CS', '2013IS066', 'Horana', '0714455684', 'lochi@gnail.com', 'male', '0000-00-00'),
(19, 14001117, 'Dinuka Daneshani', 'D Daneshani', '921464486v', '2014', 'IS', '2014CS111', 'ljhaf', '0719089765', 'jklkga@adc.ac', 'female', '1992-10-05'),
(14, 14001234, 'Chamila tharanga', 'C Tharanga', '923464316v', '2014', 'CS', '2014CS123', 'fgg', '0719089765', 'tharanga@adc.ac', 'male', '1992-10-05'),
(17, 14001637, 'Sumith madushan', 'S Madushan', '921464486v', '2014', 'CS', '2014CS163', 'kjlf', '0719089765', 'jklkga@adc.ac', 'male', '1992-10-05'),
(15, 14004567, 'piyal', 'piyal', '923464486v', '2014', 'IS', '2014CS123', 'sfddfhj', '0719089765', 'tharanga@adc.ac', 'male', '1992-10-05'),
(18, 14009997, 'Sumith madushan', 'S Madushan', '921464486v', '2014', 'CS', '2014CS999', 'egkwg', '0719089765', 'jklkga@adc.ac', 'male', '1992-10-05'),
(2, 22222222, 'Wakwella Kankanamge Shamal Vidarsha', 'W.K.S.Vidarsha', '901234567v', '2013', 'IS', '2013CS100', 'alutwatta,', '0777890030', 'shamal@gmail.com', 'male', '1990-07-28'),
(3, 33333333, 'Shamal Vidarsha', 'W.K.S.Vidarsha', '901234568v', '2013', 'CS', '2012CS234', 'vdsfdf', '0777890030', 'dsafdf@as.com', 'male', '1990-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_id` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem_id` int(2) NOT NULL,
  `course` varchar(10) NOT NULL,
  `credits` int(2) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `year`, `sem_id`, `course`, `credits`) VALUES
('0998', 'subject test', '1st year', 0, 'IS', 2),
('1111', 'php subject', '1st year', 0, 'IS', 2),
('IS0001', 'Mathematical Methodes II', '2nd year', 0, 'CS', 3),
('IS0002', 'Second Subject', '1st year', 1, 'IS', 1),
('IS1000', 'Finaco study', '1st year', 0, 'IS', 2),
('IS1001', 'Database IS', '1st year', 1, 'CS', 3),
('IS2001', 'Programming', '1st year', 0, 'IS', 4),
('SCS0001', 'Database 1', '1st year', 1, 'CS', 3),
('SCS1000', 'Programming 3', '1st year', 0, 'IS', 2),
('SCS1001', 'Data structures and algorithms', '1st year', 0, 'IS', 2),
('SCS1002', 'Programming I', '1st year', 0, 'IS', 3),
('SCS1103', 'Algo', '1st year', 1, 'CS', 3),
('SCS1104', 'Mathamatical Methodes', '1st year', 3, 'IS', 2),
('scs1213', 'test', '1st year', 0, 'IS', 2),
('SCS2001', 'Data structures and algorithms II', '1st year', 0, 'IS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(40) NOT NULL,
  `privilege` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `staff_id_2` (`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `hashed_password`, `privilege`, `name`, `full_name`, `staff_id`, `email`, `nic`, `id`) VALUES
('exam', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'staff', 'exam', 'exam', '0001', 'ada@sd.com', '', 0),
('chamika', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'admin', 'Chamika Vishmal', 'full na', '001', 'asd@asd.asd', '', 0),
('lec', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'lecturer', 'lecture', '', '011', 'sdsfgf', '', 0),
('Ravindu', '168ec942df3e8b141d7f51a8e4ee332399e58289', 'staff', 'W L G R Roshan', 'Wadasinghe Liyana Gamage Ravindu Roshan', '12345', 'ravinduroshan.rr@gmail.com', '', 0),
('Tharanga', 'd4135b5d9f4b5099daf8796be6f7a9c03e45f939', 'admin', 'M C Tharanga', 'Manoj Chamila Tharanga', '5623', 'tharanga @gmail.com', '', 0),
('aca', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'academic', 'aca', '', 'ads', 'aadf', '', 0),
('ucsc000', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'P M Rajapaksha', 'Mahinda Rajapaksha', 'UCSC000', 'mr@ucsc.ac.com', '', 0),
('ucsc001', 'f12026b6bd205bbfe7c18537630b9736e08ad596', 'lecturer', 'W K L Thilakarathna', 'Wakwella Kankanamge Lal Thilakarathna', 'UCSC001', 'lalthilakarathna@ucsc.com', '', 0),
('ucsc002', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'A M Disanayaka', 'Athulath Mudalige Disanayaka', 'UCSC002', 'amd@ucsc.com', '', 0),
('ucsc003', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'M Sirisena', 'Mayithripala Sirisena', 'UCSC003', 'sirisena@ucsc.ac.com', '', 0),
('ucsc004', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'R H Premarathna', 'Ranapura Hewage Premarathne', 'UCSC004', 'premarathna@gmail.com', '', 0),
('ucsc005', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'S Wikramasinha', 'Sampath Wikramasinha', 'UCSC005', 'premarathna@gmail.com', '', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturer_subject`
--
ALTER TABLE `lecturer_subject`
  ADD CONSTRAINT `lecturer_subject_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `users` (`staff_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `lecturer_subject_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subjects` (`sub_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subjects` (`sub_id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`index_no`) REFERENCES `students` (`index_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
