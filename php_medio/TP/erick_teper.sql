-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-06-2022 a las 13:42:14
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erick_teper`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocteles`
--

CREATE TABLE `cocteles` (
  `ID` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cocteles`
--

INSERT INTO `cocteles` (`ID`, `nombre`, `imagen`, `descripcion`) VALUES
(7, 'negroni', 'negroni.webp', 'vermuth rosso, gin, campari'),
(20, 'MOJITO', 'mojito.webp', 'Ron, Menta, Lima, Azucar'),
(21, 'Daiquiri', 'daiquiri.jpg', 'Ron, frutilla, azucar, hielo'),
(22, 'cynar Julep', 'cynar.jpg', 'Cynar, gaseosa pomelo, menta, limon'),
(23, 'baileys cream', 'baileys.jpg', 'baileys\r\nhelado de americana'),
(24, 'martini perfect', 'martini.jpg', 'gin, vermuth bianco, vermuth dru'),
(25, 'aperol sprit', 'aperol.webp', 'aperol, espumante, soda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocteles`
--
ALTER TABLE `cocteles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocteles`
--
ALTER TABLE `cocteles`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
