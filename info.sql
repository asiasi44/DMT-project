-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2022 at 01:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Roll` int(11) NOT NULL,
  `Stream` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Id`, `Name`, `Roll`, `Stream`) VALUES
(15, 'Aashish Kadel', 1112, 'BSc CSIT'),
(16, 'Asim Poudel', 1114, 'BSc CSIT'),
(17, 'a', 22, 'BSc CSIT'),
(18, 'a.', 11, 'BSc CSIT'),
(21, 'nice', 111, 'BSc CSIT'),
(22, 'asim', 111, 'BSc CSIT'),
(27, 'a', 1112, 'BSc CSIT'),
(28, '<script>alert(\"hello\")</script>', 113, 'BSc CSIT'),
(29, '<script>alert(\"hello\")</script>', 123, 'BSc CSIT'),
(30, '<script>alert(\"hello\")</script>', 1234, 'BSc CSIT'),
(31, 'what \"', 1, 'BSc CSIT'),
(32, 'a', 12, 'BSc CSIT'),
(33, 'a&#039;', 11, 'BSc CSIT'),
(34, 'St.Jr&#039; XYZ', 12, 'BSc CSIT'),
(35, 'asim', 111, 'BSc CSIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
