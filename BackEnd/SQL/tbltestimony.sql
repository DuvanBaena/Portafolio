-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2020 a las 22:57:11
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
-- Estructura de tabla para la tabla `tbltestimony`
--

CREATE TABLE `tbltestimony` (
  `IdTestimony` int(11) NOT NULL,
  `Remark` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `UserName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `RolUserName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ImgUser` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbltestimony`
--

INSERT INTO `tbltestimony` (`IdTestimony`, `Remark`, `UserName`, `RolUserName`, `ImgUser`) VALUES
(7, 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster', 'Duvan Baena', 'Store Owner', 'testimonials-5.jpg'),
(8, 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt', 'Matt Brandon', 'Freelancer', 'testimonials-1.jpg'),
(9, 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa  labore duis sunt culpa', 'John Larson', 'Entrepreneur', 'testimonials-4.jpg'),
(18, 'ttttttttt', 'tttttt', 'ttttttttttt', 'testimonials-4.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbltestimony`
--
ALTER TABLE `tbltestimony`
  ADD PRIMARY KEY (`IdTestimony`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbltestimony`
--
ALTER TABLE `tbltestimony`
  MODIFY `IdTestimony` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
