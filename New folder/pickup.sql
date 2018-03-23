-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 07:34 PM
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
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `destination` varchar(40) NOT NULL,
  `mobilenumber` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `cost` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`username`, `date`, `destination`, `mobilenumber`, `time`, `cost`) VALUES
('', '2017-11-15', 'Hawa Mahal', '555', '05:55', ''),
('', '2017-11-05', 'Hawa Mahal', '7777777777', '06:00', '750'),
('', '2017-11-06', 'Railway Station', '6666666666', '04:00', '250'),
('', '2017-11-03', 'Airport', '3333333333', '02:01', '0'),
('', '2017-11-08', 'Airport', 'avcavav', '05:05', '0'),
('', '2017-11-13', 'Railway Station', 'sdcavc', '04:04', '250'),
('', '2017-11-25', 'Airport', '', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
