-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 03:34 PM
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
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `ID` int(8) NOT NULL,
  `TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`ID`, `TS`) VALUES
(6, '2015-10-25 11:31:42'),
(7, '2017-10-25 11:31:44'),
(8, '2017-10-25 11:36:57'),
(9, '2017-10-25 11:36:59'),
(10, '2017-10-25 11:37:25'),
(11, '2017-10-25 11:38:30'),
(12, '2017-10-25 11:38:32'),
(13, '2017-10-25 11:38:49'),
(14, '2017-10-25 11:38:51'),
(15, '2017-10-25 11:39:21'),
(16, '2017-10-25 11:40:03'),
(17, '2017-10-25 12:20:52'),
(18, '2017-10-25 12:45:20'),
(19, '2017-10-25 12:45:25'),
(20, '2017-10-25 12:59:41'),
(21, '2017-10-25 12:59:45'),
(22, '2017-10-25 13:00:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
