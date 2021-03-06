-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 18:13:04
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
-- Estructura de tabla para la tabla `tblinterest`
--

CREATE TABLE `tblinterest` (
  `InterestId` int(50) NOT NULL,
  `NameInterest` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ImgInterest` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblinterest`
--

INSERT INTO `tblinterest` (`InterestId`, `NameInterest`, `ImgInterest`) VALUES
(2, 'Angular', 'angular.png'),
(4, 'Html', 'html.png'),
(18, 'azure', 'azure.png'),
(19, 'C#', 'csharp.png'),
(20, 'Css', 'css.png'),
(21, 'JavaScript', 'javaScript.png'),
(22, 'Sql', 'sql.png'),
(23, 'Php', 'php.png'),
(24, 'Xamarin', 'xamarin.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblinterest`
--
ALTER TABLE `tblinterest`
  ADD PRIMARY KEY (`InterestId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblinterest`
--
ALTER TABLE `tblinterest`
  MODIFY `InterestId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
