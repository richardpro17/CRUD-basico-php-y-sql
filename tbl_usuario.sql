-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2022 a las 01:59:07
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebarp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `idx` int(6) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `nivel` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `compañia` varchar(20) NOT NULL,
  `saldo` float NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`idx`, `usuario`, `nombre`, `sexo`, `nivel`, `email`, `telefono`, `marca`, `compañia`, `saldo`, `activo`) VALUES
(1, 'BRE2271', 'BRENDA', 'M', 2, 'brenda@live.com', '655-330-5736', 'SAMSUNG', 'IUSACELL', 100, 1),
(2, 'OSC4677', 'OSCAR', 'M', 3, 'oscar@gmail.com', '655-143-4181', 'LG', 'TELCEL', 0, 1),
(3, 'JOS7086', 'JOSE', 'M', 3, 'francisco@gmail.com', '655-143-3922', 'NOKIA', 'MOVISTAR', 150, 1),
(4, 'LUIS61115', 'LUIS', 'M', 0, 'enrique@outlook.com', '655-137-1279', 'SAMSUNG', 'TELCEL', 50, 1),
(5, 'LUI7072', 'LUIS', 'M', 1, 'luis@hotmail.com', '655-100-8260', 'NOKIA', 'IUSACELL', 50, 8),
(6, 'DAN2832', 'DANIEL', 'M', 0, 'daniel@outlook.com', '655-145-2506', 'SONY', 'UNEFON', 100, 1),
(7, 'JAQ5351', 'JACQUELINE', 'M', 0, 'jacqueline@outlook.com', '655-330-5514', 'BLACKBERRY', 'AXEL', 0, 1),
(8, 'ROM6520', 'ROMAN', 'H', 2, 'roman@gmail.com', '655-330-3263', 'LG', 'IUSACELL', 50, 1),
(9, 'BLA9739', 'BLAS', 'H', 0, 'blas@hotmail.com', '655-330-3871', 'LG', 'UNEFON', 100, 0),
(10, 'JES4752', 'JESSICA', 'M', 1, 'jessica@hotmail.com', '655-143-3952', 'SAMSUNG', 'TELCEL', 500, 1),
(11, 'DIA6570', 'DIANA', 'M', 1, 'diana@live.com', '655-143-3952', 'SONY', 'UNEFON', 100, 0),
(12, 'RIC8283', 'RICARDO', 'H', 2, 'ricardo@hotmail.com', '655-145-6049', 'MOTOROLA', 'IUSACELL', 150, 1),
(13, 'VAL6852', 'VALENTINA ', 'M', 0, 'valentina@live.com', '655-137-4253', 'BLACKBERRY', 'AT&T', 50, 0),
(14, 'BRE8106', 'BRENDA', 'M', 3, 'brenda2@gmail.com', '655-100-1351', 'MOTOROLA', 'NEXTEL', 150, 1),
(15, 'LUC4982', 'LUCIA', 'M', 3, 'lucia@gmail.com', '655-145-4992', 'BLACKBERRY', 'IUSACELL', 0, 1),
(16, 'JUA2337', 'JUAN', 'H', 0, 'juan@outlook.com', '655-100-6517', 'SAMSUNG', 'AXEL', 0, 0),
(17, 'ELP2984', 'ELPIDIO', 'H', 1, 'elpidio@outlook.com', '655-145-9938', 'MOTOROLA', 'MOVISTAR', 500, 1),
(18, 'JES9640', 'JESSICA', 'M', 2, 'jessica2@live.com', '655-143-4019', 'SONY', 'IUSACELL', 200, 1),
(19, 'LET4015', 'LETICIA', 'M', 2, 'leticia@yahoo.com', '655-143-4019', 'BLACKBERRY', 'UNEFON', 100, 1),
(20, 'LUI10786', 'LUIS', 'H', 3, 'luis2@live.com', '655-100-5005', 'SONY', 'UNEFON', 150, 1),
(21, 'HUG5441', 'HUGO', 'H', 2, 'hugo@live.com', '655-137-3935', 'MOTOROLA', 'AT&T', 500, 1),
(22, 'XPRO17', 'RICARDO', 'H', 4, 'rgpro.17@gmail.com', '477-240-0331', 'Motorola', 'TELCEL', 1.2, 1),
(23, 'CJTA16', 'JUANCARLOS', 'H', 1, 'cj@hotmail.com', '1254587852', 'WAWEI', 'MOVISTAR', 1.2, 1),
(24, 'ASYADABI', 'ABIGAIL', 'M', 1, 'familiasanchez@gmail.com', '4776806087', 'SAMSUNG', 'AT&T', 1.2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `idx` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
