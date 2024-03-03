-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2020 at 11:01 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `carworld_admin`
--

DROP TABLE IF EXISTS `carworld_admin`;
CREATE TABLE IF NOT EXISTS `carworld_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carworld_admin`
--

INSERT INTO `carworld_admin` (`id`, `first_name`, `last_name`, `email`, `password`, `date`) VALUES
(1, 'Tasneem', 'Depalpurwala', 'tasdepal123@gmail.com', 'tas123', '2019-11-24 14:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `carworld_book_car_details`
--

DROP TABLE IF EXISTS `carworld_book_car_details`;
CREATE TABLE IF NOT EXISTS `carworld_book_car_details` (
  `car_sts_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `pickupDate` varchar(50) NOT NULL,
  `dropupDate` varchar(50) NOT NULL,
  PRIMARY KEY (`car_sts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carworld_book_car_details`
--

INSERT INTO `carworld_book_car_details` (`car_sts_id`, `user_id`, `car_id`, `pickupDate`, `dropupDate`) VALUES
(8, 1, 16, '2019-12-29 18:19:45', '2019-12-30 18:19:45'),
(6, 1, 13, '2019-12-25T07:58', '2019-12-26T07:58'),
(9, 1, 16, '2019-12-29 18:20:58', '2019-12-30 18:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `carworld_cardetails`
--

DROP TABLE IF EXISTS `carworld_cardetails`;
CREATE TABLE IF NOT EXISTS `carworld_cardetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(100) NOT NULL,
  `modelNo` varchar(100) NOT NULL,
  `vehicleType` varchar(100) NOT NULL,
  `car_pic` longblob NOT NULL,
  `plateNo` varchar(50) NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `mobNo` bigint(20) NOT NULL,
  `licImg` longblob NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `car_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carworld_cardetails`
--

INSERT INTO `carworld_cardetails` (`id`, `companyName`, `modelNo`, `vehicleType`, `car_pic`, `plateNo`, `ownerName`, `mobNo`, `licImg`, `city`, `address`, `date`, `car_status`) VALUES
(3, 'Audi', 'Audi A4', 'Sedan-5000/day', 0x2d31373939363036392e6a7067, 'MH 25 A 5253', 'Mukesh Ambani', 2147483647, 0x6c6963656e636531322e6a7067, 'Mumbai', 'Mumbai, Maharashtra', '2019-12-08 07:55:45', 'Available'),
(6, 'BMW', 'BMW 18', 'Mini-2500/day', 0x2d3130333633343334332e6a7067, 'MH 30 M 4545', 'Bill Clinton', 2147483647, 0x6c6963656e636531332e6a7067, 'USA', 'Washington DC', '2019-12-08 12:03:03', 'Available'),
(13, 'Aston Martin', 'Aston Martin DB11', 'Sedan-5000/day', 0x2d3130383639333937352e6a7067, 'BJV 7821', 'Matt Le Blanc', 2147483647, 0x6c6963656e6365312e6a7067, 'Vatican City', 'Vatican City....', '2019-12-10 14:41:12', 'Available'),
(14, ' Nissan', 'Sunny 2020', 'Mini-2500/day', 0x3133303837393235312e6a7067, 'Mp 09 F 4545', 'Reema Singh', 9826543108, 0x6c6963656e636531312e6a7067, 'Indore', 'Indore Mp', '2019-12-26 14:39:34', 'Available'),
(15, 'Toyota', ' Toyota Sprinter', 'Sedan-5000/day', 0x3130353337303337352e6a7067, 'MP 09 4548', 'Neelima rathore', 7654329017, 0x6c6963656e636531342e6a7067, 'Ujjain', 'Ujjain,MP', '2019-12-26 14:43:47', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `carworld_userdetails`
--

DROP TABLE IF EXISTS `carworld_userdetails`;
CREATE TABLE IF NOT EXISTS `carworld_userdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carworld_userdetails`
--

INSERT INTO `carworld_userdetails` (`id`, `first_name`, `last_name`, `email`, `password`, `city`, `contact_no`, `address`, `date`) VALUES
(1, 'Teena', 'Morris', 't@gmail.com', 't123', 'Indore', 12345, 'Indore,Mp', '2019-11-23 10:26:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
