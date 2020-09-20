-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2020 a las 22:56:32
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
-- Estructura de tabla para la tabla `tblskill`
--

CREATE TABLE `tblskill` (
  `SkillId` int(11) NOT NULL,
  `SkillName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SkillValue` int(11) NOT NULL,
  `Category` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblskill`
--

INSERT INTO `tblskill` (`SkillId`, `SkillName`, `SkillValue`, `Category`) VALUES
(31, 'ASP.NET', 75, 'BackEnd'),
(32, 'JavaScript', 50, 'FrontEnd'),
(33, 'CSS', 53, 'FrontEnd'),
(34, 'HTML', 54, 'FrontEnd'),
(39, 'PHP', 20, 'BackEnd'),
(40, 'AZURE', 45, 'BackEnd'),
(41, 'SQL Server', 60, 'BackEnd'),
(42, 'Agile methodologies', 70, 'FrontEnd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblskill`
--
ALTER TABLE `tblskill`
  ADD PRIMARY KEY (`SkillId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblskill`
--
ALTER TABLE `tblskill`
  MODIFY `SkillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
