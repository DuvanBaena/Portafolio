-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 22:18:24
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
(39, 'working together', 90, 'BackEnd'),
(40, 'Coaching', 85, 'FrontEnd'),
(41, 'Desire to learn', 90, 'BackEnd'),
(42, 'Agile methodologies', 70, 'FrontEnd'),
(43, 'Happiness', 100, 'BackEnd'),
(44, 'Motivation', 80, 'FrontEnd');

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
  MODIFY `SkillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
