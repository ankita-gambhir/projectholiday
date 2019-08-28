-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2016 at 07:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel bookings`
--

CREATE TABLE `hotel bookings` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Street` varchar(40) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Arrive` varchar(20) NOT NULL,
  `Depart` varchar(20) NOT NULL,
  `People` int(20) NOT NULL,
  `Room` varchar(20) NOT NULL,
  `Bedding` varchar(20) NOT NULL,
  `HOTEL` varchar(20) NOT NULL,
  `Comments` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel bookings`
--

INSERT INTO `hotel bookings` (`Name`, `Email`, `Phone`, `Street`, `City`, `Country`, `Arrive`, `Depart`, `People`, `Room`, `Bedding`, `HOTEL`, `Comments`) VALUES
('', '', 0, '', '', '', '', '', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '', 0, '', '', '', ''),
('mohit', 'mohit.julaha@gmail.c', 2147483647, '80', 'sonipat', 'india', '', '2016-07-18', 0, '', '', '', 'nkjkj'),
('', '', 0, '', '', '', '', '2016-07-18', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '2016-07-18', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '2016-07-18', 0, '', '', '', ''),
('', '', 0, '', '', '', '', '2016-07-18', 0, '', '', '', ''),
('', '', 0, '', '', '', '2016-07-18', '2016-07-18', 0, '', '', '', ''),
('mohit', '', 0, '', '', '', '2016-07-18', '2016-07-18', 0, '', '', '', ''),
('mohit', '', 0, '', '', '', '2016-07-18', '2016-07-18', 0, '', '', '', ''),
('mohit', '', 0, '', '', '', '2016-07-18', '2016-07-18', 0, '', '', '', ''),
('mohit', '', 0, '', '', '', '2016-07-18', '2016-07-18', 0, '', '', '', ''),
('mohit', 'mohit.julaha@gmail.c', 2147483647, 'xyz', 'sonipat', 'india', '2016-07-18', '2016-07-18', 2, 'deluxe', 'double-bed', 'hotel Taj palace', 'abcedefgh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
