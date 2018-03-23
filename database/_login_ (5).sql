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
('1011', 'king', '2500', 'no', 'ruth007', '2017-11-06', '2017-11-08'),
('102', 'jack non ac', '2000', 'no', 'pilla123', '2017-10-28', '2017-10-31'),
('1021', 'queen', '4000', 'yes', NULL, NULL, NULL),
('103', 'jack ac', '1500', 'no', 'pilla123', '2017-10-27', '2017-10-29'),
('104', 'jack ac', '1500', 'no', 'pilla123', '2017-10-17', '2017-10-19'),
('204', 'jack ac', '1500', 'no', 'ruth007', '2017-10-27', '2017-10-29'),
('401', 'king', '2500', 'no', 'ruth007', '2017-10-29', '2017-10-30'),
('402', 'king', '2500', 'no', 'ruth007', '2017-11-07', '2017-11-09'),
('403', 'queen', '4000', 'no', 'ruth007', '2017-10-29', '2017-10-30'),
('404', 'queen', '4000', 'no', 'ruth007', '2017-11-07', '2017-11-08'),
('701', 'queen', '4000', 'no', 'pilla123', '2017-10-27', '2017-10-30'),
('702', 'queen', '4000', 'no', 'ruth007', '2017-10-27', '2017-10-28'),
('703', 'king', '2500', 'no', 'pilla123', '2017-10-27', '2017-10-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomnumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
