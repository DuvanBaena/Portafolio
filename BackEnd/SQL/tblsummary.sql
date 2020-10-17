-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 18:13:50
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
-- Estructura de tabla para la tabla `tblsummary`
--

CREATE TABLE `tblsummary` (
  `idSummary` int(11) NOT NULL,
  `Title` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `StartYear` year(4) DEFAULT NULL,
  `School` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Remark` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `FinalYear` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblsummary`
--

INSERT INTO `tblsummary` (`idSummary`, `Title`, `StartYear`, `School`, `Remark`, `FinalYear`) VALUES
(34, 'Software Engineering Specialist', 2019, 'University of Medellin', 'The Software Engineering Specialization  is based on two key elements of the software engineering process:  requirements of engineering  and architectural design', 2020),
(35, 'Computer Software Technician', 2015, 'CESDE', 'I am skilled in software development and analysis, application design  and implementation, and maintenance of web and mobile environments ', 2018),
(36, 'Systems Engineering degree', 2011, 'Universidad Católica Luis Amigó', 'I am creative and have the ability to innovate in the design, development and implementation of computer systems that integrate hardware administration, telecommunications technologies and software', 2017);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblsummary`
--
ALTER TABLE `tblsummary`
  ADD PRIMARY KEY (`idSummary`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblsummary`
--
ALTER TABLE `tblsummary`
  MODIFY `idSummary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
