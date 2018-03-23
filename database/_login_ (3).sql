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
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `bookedby` varchar(10) DEFAULT NULL,
  `person` int(5) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `starter` text,
  `maincourse` text,
  `desert` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`bookedby`, `person`, `number`, `date`, `starter`, `maincourse`, `desert`) VALUES
('abc', 100, '7505856767', '2017-11-15', 'Kakori Kebabs | Paneer 65 |', 'Crispy Shrimp Chow Mein | Sweet & Sour Pork |', 'Trifle Fruit Pudding | Strawberry and Apple Crumble |'),
('ruth007', 150, '7505856767', '2017-11-08', 'Kakori Kebabs | Paneer 65 |', 'Choley Bhature |', 'Sevaya Kheer |'),
('ruth007', 100, '7894561230', '2017-11-08', 'Kakori Kebabs | Sweet Potato Pie |', 'Sweet & Sour Pork |', 'Sevaya Kheer |'),
('ruth007', 150, '1234567890', '2017-11-08', 'Kakori Kebabs | Paneer 65 |', 'Choley Bhature |  Breaded Pepper Chicken | Arabian Pulao |', 'Almond jelly | Egg custard tarts |');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
