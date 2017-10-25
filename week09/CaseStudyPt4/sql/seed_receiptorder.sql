-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 03:35 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f36im`
--

-- --------------------------------------------------------

--
-- Table structure for table `receiptorder`
--

CREATE TABLE `receiptorder` (
  `ReceiptID` int(8) NOT NULL,
  `ProductVariantID` int(8) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiptorder`
--

INSERT INTO `receiptorder` (`ReceiptID`, `ProductVariantID`, `Quantity`) VALUES
(6, 1, 3),
(7, 1, 3),
(8, 1, 3),
(8, 2, 4),
(8, 4, 5),
(9, 1, 3),
(9, 2, 4),
(9, 4, 5),
(10, 1, 3),
(10, 2, 4),
(10, 4, 0),
(11, 1, 3),
(11, 2, 4),
(11, 4, 0),
(12, 1, 3),
(12, 2, 4),
(12, 4, 0),
(13, 1, 3),
(13, 2, 4),
(13, 4, 0),
(14, 1, 3),
(14, 2, 4),
(14, 4, 0),
(15, 1, 3),
(15, 2, 4),
(15, 4, 0),
(16, 1, 3),
(16, 2, 4),
(16, 4, 0),
(17, 1, 3),
(17, 2, 4),
(17, 4, 0),
(18, 1, 5),
(18, 3, 2),
(18, 4, 1),
(19, 1, 5),
(19, 2, 2),
(19, 5, 6),
(20, 1, 5),
(20, 3, 7),
(20, 4, 6),
(21, 1, 5),
(21, 3, 3),
(21, 4, 6),
(22, 1, 5),
(22, 3, 3),
(22, 4, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
