-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2020 a las 21:04:31
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `websites`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` int(11) NOT NULL COMMENT 'Code User',
  `UserName` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Full Name',
  `UserLastName` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Full Last Name',
  `UserEmail` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Email User',
  `UserPassword` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pass MD5',
  `UserURL` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'URL WebSites',
  `UserPhone` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Phone',
  `UserCity` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'City',
  `UserAge` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Age',
  `UserDegree` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Info school',
  `UserHour` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Price hour',
  `UserBirthday` datetime NOT NULL COMMENT 'Format Year',
  `UserTopDescription` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Description',
  `UserBodyDescription` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Description',
  `UserFooterDescription` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Description',
  `UserRole` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `UserName`, `UserLastName`, `UserEmail`, `UserPassword`, `UserURL`, `UserPhone`, `UserCity`, `UserAge`, `UserDegree`, `UserHour`, `UserBirthday`, `UserTopDescription`, `UserBodyDescription`, `UserFooterDescription`, `UserRole`) VALUES
(1017143113, 'duvan', 'baena puerta', 'djbpuerta@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'duvanbaena.com', '3122988419', 'medellin', '33', 'Specialist', '5 USD', '1986-12-15 00:00:00', 'Hello, thank you for visiting', 'I like meeting and ', 'follower of DevOps', 'Administrator');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
