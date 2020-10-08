-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 21:35:17
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
-- Estructura de tabla para la tabla `tblversion`
--

CREATE TABLE `tblversion` (
  `VersionId` int(11) NOT NULL,
  `VersionCode` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VersionDate` date NOT NULL,
  `VersionComment` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblversion`
--

INSERT INTO `tblversion` (`VersionId`, `VersionCode`, `VersionDate`, `VersionComment`) VALUES
(15, '0.1.0.300820', '2020-08-30', 'Add Module Summary Crud'),
(16, '0.2.0.270920', '2020-09-27', 'Add CRUDEL al modules'),
(20, '0.3.0.04102020', '2020-10-04', 'Validate critical path and QA all Pages');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblversion`
--
ALTER TABLE `tblversion`
  ADD PRIMARY KEY (`VersionId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblversion`
--
ALTER TABLE `tblversion`
  MODIFY `VersionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
