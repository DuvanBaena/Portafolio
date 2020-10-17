-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 18:14:11
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
(7, 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna suntñl veniam ipsum anim magna', 'Esteban Valencia', 'Chief Happiness Officer', 'esteban.jpg'),
(8, 'Cuando vemos a una persona que está logrando sus sueños, no siempre podemos ver sus horas de esfuerzo, sus libros leídos, su disciplina aplicada y sus peldaños descubiertos, lo has logrado con especial actitud, y con un aprendizaje constante', 'Lina Marcela Gil', 'Ceo & Founder', 'Marcela.jpg'),
(9, 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna suntñl veniam ipsum anim magna', 'Jaime Cortes', 'Chief Technology Officer', 'testimonials-1.jpg');

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
  MODIFY `IdTestimony` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
