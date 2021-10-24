-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 01:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websites`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcertification`
--

CREATE TABLE `tblcertification` (
  `CertificationID` int(11) NOT NULL,
  `NameCertification` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ImgBadge` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tblcertification`
--

INSERT INTO `tblcertification` (`CertificationID`, `NameCertification`, `ImgBadge`) VALUES
(7, 'AZ-900', '005733-AZ-900.png'),
(8, 'AZ-104', '010828-104.png'),
(9, 'PL-900', '011400-PL-900.png'),
(10, 'PL-100', '011754-PL-100.png'),
(11, 'AZ-400', '012137-AZ-400.png'),
(12, 'AZ-303-304', '012518-AZ-303-304.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcertification`
--
ALTER TABLE `tblcertification`
  ADD PRIMARY KEY (`CertificationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcertification`
--
ALTER TABLE `tblcertification`
  MODIFY `CertificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
