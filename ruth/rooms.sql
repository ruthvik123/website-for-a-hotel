-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 11:01 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomnumber` varchar(4) NOT NULL,
  `suittype` varchar(30) NOT NULL,
  `costpernight` varchar(6) NOT NULL,
  `availability` varchar(3) NOT NULL,
  `bookedby` varchar(20) DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomnumber`, `suittype`, `costpernight`, `availability`, `bookedby`, `fromdate`, `todate`) VALUES
('101', 'jack non ac', '2000', 'no', 'pilla123', '2017-10-27', '2017-10-30'),
('102', 'jack non ac', '2000', 'no', 'pilla123', '2017-10-28', '2017-10-31'),
('103', 'jack ac', '3000', 'no', 'pilla123', '2017-10-27', '2017-10-29'),
('104', 'jack ac', '3000', 'no', 'pilla123', '2017-10-17', '2017-10-19'),
('204', 'jack ac', '3000', 'no', 'ruth007', '2017-10-27', '2017-10-29'),
('401', 'king', '5000', 'no', 'ruth007', '2017-10-29', '2017-10-30'),
('402', 'king', '5000', 'yes', NULL, NULL, NULL),
('403', 'queen', '4000', 'no', 'ruth007', '2017-10-29', '2017-10-30'),
('404', 'queen', '4000', 'yes', NULL, NULL, NULL),
('701', 'queen', '4000', 'no', 'pilla123', '2017-10-27', '2017-10-30'),
('702', 'queen', '4000', 'no', 'ruth007', '2017-10-27', '2017-10-28'),
('703', 'king', '5000', 'no', 'pilla123', '2017-10-27', '2017-10-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
