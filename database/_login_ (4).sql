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
('ruth007', '2017-11-14', 'Hawa Mahal', '7845441545', '02:58', '750'),
('ruth007', '2017-11-24', 'Hawa Mahal', '1234567890', '13:00', '750'),
('ruth007', '2017-11-30', 'Railway Station', '1230123012', '03:03', '250'),
('ruth007', '2017-11-30', 'Railway Station', '1230123012', '03:03', '250');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
