-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 07:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(15) DEFAULT NULL,
  `roomtype` varchar(15) DEFAULT NULL,
  `restaurant` varchar(10) DEFAULT NULL,
  `staff` varchar(10) DEFAULT NULL,
  `housekeeping` varchar(10) DEFAULT NULL,
  `cleanliness` varchar(10) DEFAULT NULL,
  `overallrating` varchar(10) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `remarks` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `roomtype`, `restaurant`, `staff`, `housekeeping`, `cleanliness`, `overallrating`, `mobileno`, `remarks`) VALUES
('ruth007', 'QUEEN', 'Excellent', 'Good', 'Excellent', 'Excellent', 'Excellent', '7505856767', 'very good'),
('ruth007', 'JACK AC', 'Good', 'Excellent', 'Excellent', 'Excellent', 'Excellent', '9585603680', 'sufgfes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
