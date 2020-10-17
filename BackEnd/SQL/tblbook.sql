-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 18:12:29
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
-- Estructura de tabla para la tabla `tblbook`
--

CREATE TABLE `tblbook` (
  `IdBook` int(11) NOT NULL,
  `Thematic` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Author` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ImgFront` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ImgBack` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblbook`
--

INSERT INTO `tblbook` (`IdBook`, `Thematic`, `Author`, `ImgFront`, `ImgBack`) VALUES
(12, 'Admin SQL', 'Maria Peréz Marqués', '221231-SQLAzureFrontEnd.jpg', 'SQLAzureBackEnd.jpg'),
(13, 'JavaScript Avanzado', 'Sin Autor', '221318-JavaScriptAvanzadoFrontEnd.jpg', 'JavaScriptAvanzadoBackEnd.jpg'),
(14, 'Libro de Android', 'Jesús Tomás', '221402-ElGranLibroDeAndroidFrontEnd.jpg', 'ElGranLibroDeAndroidBackEnd.jpg'),
(15, 'Desarrollando App C#', 'Borja Orbegozo Arana', '221454-DesarrolloAppFrontEnd.jpg', 'DesarrolloAppBackEnd.jpg'),
(16, 'Gestión SQL ', 'Borja Orbegozo Arana', '221629-BaseDeDatosFrontEnd.jpg', 'BaseDeDatosBackEnd.jpg'),
(17, 'Ajax Profesionales', 'Maximiliano Firtman', '221706-AjaxParaprofesionalesFrontEnd.jpg', 'AjaxParaprofesionalesBackEnd.jpg'),
(18, 'Ing de Software', 'Guillermo Pantaleon', '223308-IngenieriaDelSoftwareFontEnd.jpg', 'IngenieriaDelSoftwareBackEnd.jpg'),
(19, 'Arq de Software', 'Oscar Javier Blancarte', '223351-IntroArquitectura.jpg', '223351-IntroArquitectura.jpg'),
(20, 'Tips Desarrollo', 'Cesar Colina', '223428-Los5SecretosDelDesarrollo.jpg', '223428-Los5SecretosDelDesarrollo.jpg'),
(21, 'Código Limpio', 'Robert C. Martin', '223507-CleanCodeFrontEnd.jpg', '223507-CleanCodeFrontEnd.jpg'),
(22, 'El libro del Éxito', 'Tim Johnson', '223545-ElLibroDelExitoFrontEnd.jpg', 'ElibroDelExitoBackEnd.jpg'),
(23, 'Java Script', 'Alessandra Salvagio', '225228-JavaScriptFrontEnd.jpg', 'JavaScriptBackEnd.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`IdBook`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `IdBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
