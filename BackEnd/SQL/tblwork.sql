-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 18:15:47
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
-- Estructura de tabla para la tabla `tblwork`
--

CREATE TABLE `tblwork` (
  `IdWork` int(11) NOT NULL,
  `StartYear` year(4) DEFAULT NULL,
  `FinalYear` year(4) NOT NULL,
  `TitleWork` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Company` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Remark1` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Remark2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Remark3` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblwork`
--

INSERT INTO `tblwork` (`IdWork`, `StartYear`, `FinalYear`, `TitleWork`, `Company`, `Remark1`, `Remark2`, `Remark3`) VALUES
(1, 2018, 2020, 'DEVOPS & CLOUD ENGINEER', 'Globo Studio of Colombia S.A.S', 'Create automated deployments by using configuration management technology. Deploy new modules and updates and fix bugs within the production environment', 'Monitoring the availability of Cloud PaaS/SaaS solutions, performance, and production of health systems in support of meeting service level objectives', 'Administration within the Azure ecosystem, complemented using  CI/CD technologies and management of source code repositories'),
(33, 2008, 2018, 'IT Infrastructure Engineer', 'Colombia National Police', 'Maximizing network efficiency by monitoring performance, troubleshooting network problems and outages, scheduling upgrades, supporting PC (HW, OS, drivers, interfaces, software, etc.)', 'Secure network systems by establishing and applying policies, defining and  , monitoring access so computer systems available during production hours', 'Research, advise, and implement the best practices to maintain the infrastructure');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblwork`
--
ALTER TABLE `tblwork`
  ADD PRIMARY KEY (`IdWork`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblwork`
--
ALTER TABLE `tblwork`
  MODIFY `IdWork` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
