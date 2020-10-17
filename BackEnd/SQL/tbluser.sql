-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 18:14:30
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
  `UserBirthday` date NOT NULL COMMENT 'Format Year',
  `UserTopDescription` varchar(500) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Description',
  `UserBodyDescription` varchar(500) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Description',
  `UserFooterDescription` varchar(500) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Description',
  `UserRole` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `UserName`, `UserLastName`, `UserEmail`, `UserPassword`, `UserURL`, `UserPhone`, `UserCity`, `UserAge`, `UserDegree`, `UserHour`, `UserBirthday`, `UserTopDescription`, `UserBodyDescription`, `UserFooterDescription`, `UserRole`) VALUES
(1017143113, 'duvan', 'baena', 'djbpuerta@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'duvanbaena.com', '+057 3122988419', 'Medellín', '33', 'Software Engineering Specialist', '5', '1986-12-15', 'Hello, thank you for visiting my website. Let me introduce myself. My name  is Duvan. Nice to meet you. I am from Colombia, and I would like to share  with you some things I enjoy: I enjoy  reading and learning about many topics , but technology is always in my mind. I define myself as a quiet and happy person, with the ability to listen and then look for a solution.', 'I like meeting and  connecting with technology communities around the world to learn and get to know  people that inspire discipline and lots of conviction in the technology industry.', 'I believe that technology is an interesting industry. I like  software development. I am an open-source believer and a faithful follower of DevOps. I have knowledge and experience in the public cloud Azure and Azure DevOps platform. I am also well informed about the definition of infrastructure as code, about the use of methods to release applications to customers through automation CI/CD and monitoring metrics to identify degradations application.', 'Administrator');

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
