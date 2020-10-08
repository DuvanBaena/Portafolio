-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 21:33:06
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
-- Estructura de tabla para la tabla `tblblog`
--

CREATE TABLE `tblblog` (
  `IdBlog` int(20) NOT NULL,
  `Category` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TitleBlog` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `DateCreate` date NOT NULL,
  `Author` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `ImgBlogCover` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `interviewBlog` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `FirstParagraph` varchar(386) COLLATE utf8_spanish_ci NOT NULL,
  `SecondParagraph` varchar(386) COLLATE utf8_spanish_ci NOT NULL,
  `ThreeParagraph` varchar(386) COLLATE utf8_spanish_ci NOT NULL,
  `FourParagraph` varchar(386) COLLATE utf8_spanish_ci NOT NULL,
  `ReferencePhrase` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `AuthorReference` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblblog`
--

INSERT INTO `tblblog` (`IdBlog`, `Category`, `TitleBlog`, `DateCreate`, `Author`, `img`, `ImgBlogCover`, `interviewBlog`, `FirstParagraph`, `SecondParagraph`, `ThreeParagraph`, `FourParagraph`, `ReferencePhrase`, `AuthorReference`) VALUES
(1, 'Development', 'Gamificación en enseñanza de poo', '2020-09-17', 'Duvan Baena', 'gamificacion.jpg', '191637-Gamificacionportada.jpg', 'El software se ha convertido en la columna vertebral de las tecnologías de información de la industria de hoy, por lo tanto, cobra mucha relevancia el proceso de aprendizaje que potencialice las habilidades de programación de los desarrolladores.', 'La gamificación es una técnica que traslada la mecánica del juego a contextos diferentes en los que no se suele manejar ningún tipo de juego para realizar actividades, con el fin de conseguir mejores resultados a través de la motivación.', 'Hoy en día se evidencia una creciente necesidad de enseñar fundamentos básicos de programación puesto que es una competencia que cada vez se hace más necesaria en la industria de hoy, quizás una razón por la que fracasan muchos de los proyectos es debido a la incompetencia en habilidades de programación de los desarrolladores responsables de la creación de software.', 'La motivación tiende a ser el problema más común cuando se habla del aprendizaje de programación. La actitud es una de las principales razones que impactan el aprendizaje, algunos métodos actuales de enseñanza carecen de atractivo, la cantidad de conceptos y características de los lenguajes tienden a ser frustrantes para quienes que están iniciando en la programación.', 'La motivación tiende a ser el problema más común cuando se habla del aprendizaje de programación. La actitud es una de las principales razones que impactan el aprendizaje, algunos métodos actuales de enseñanza carecen de atractivo, la cantidad de conceptos y características de los lenguajes tienden a ser frustrantes para quienes que están iniciando en la programación.', 'Los elementos de un juego no se pueden evaluar sin tener en cuenta la experiencia del jugador.', 'Marc Leblanc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`IdBlog`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `IdBlog` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
