-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 22:10:29
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simpleticket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `CodCon` int(11) NOT NULL,
  `NomCon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `concepto`
--

INSERT INTO `concepto` (`CodCon`, `NomCon`) VALUES
(1, 'Gasolina'),
(2, 'Comida'),
(3, 'Material de oficina'),
(4, 'Alojamiento'),
(5, 'Ocio'),
(6, 'Compra de mercaderías');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `CodPro` int(11) NOT NULL,
  `NomPro` varchar(50) NOT NULL,
  `DirPro` varchar(50) NOT NULL,
  `TelPro` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`CodPro`, `NomPro`, `DirPro`, `TelPro`) VALUES
(1, 'Repsol', 'C/ Ancha, 32 - Málaga', '952112233'),
(2, 'Fosters Hollywood', 'C/ Mar Salada, 12 - Málaga', '951442245'),
(4, 'Hotel Abades', 'Avda. Infantes, 8 - Granada', '900584423'),
(5, 'Cepsa', 'Paseo de la Luz, 23 - Almería', '953115485'),
(6, 'Góvez', 'C/ Rosa Lupión, 5 - Málaga', '952988558'),
(7, 'Burger King', 'C.C. Rosaleda - Málaga', '951544852');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `CodTic` int(11) NOT NULL,
  `FecTic` date NOT NULL,
  `NumTic` varchar(20) NOT NULL,
  `CodPro` int(11) NOT NULL,
  `CodCon` int(11) NOT NULL,
  `ImpTic` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`CodTic`, `FecTic`, `NumTic`, `CodPro`, `CodCon`, `ImpTic`) VALUES
(1, '2022-05-22', '15425', 2, 2, '15.75'),
(2, '2022-09-21', '78485548', 1, 1, '20.00'),
(3, '2022-09-10', '22-448552', 4, 4, '95.00'),
(4, '2022-08-16', '2-458-AD-045', 7, 2, '12.50'),
(6, '2022-08-17', '485544', 5, 1, '40.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`CodCon`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`CodPro`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`CodTic`),
  ADD KEY `CodCon` (`CodCon`),
  ADD KEY `CodPro` (`CodPro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
  MODIFY `CodCon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `CodPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `CodTic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`CodCon`) REFERENCES `concepto` (`CodCon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`CodPro`) REFERENCES `proveedor` (`CodPro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
