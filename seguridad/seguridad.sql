-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2017 a las 02:14:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguridad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `nombre`, `apellido`) VALUES
(1, 'usuario1', 'MTIzNA==', NULL, NULL),
(2, 'usuario2', 'MTIzNDU2', 'jorge', 'gonzales'),
(3, '2213', 'ZGRk', 'dds', 'ddd'),
(4, '22134', 'c3Nz', 'dds3', 'ddd'),
(5, '2213433', 'ZGRk', 'dds3', 'ddd'),
(6, 'gc', 'jejeje', 'giancarlo', 'joaqin'),
(7, '', '', '', ''),
(8, 'tres', 'MTIz', 'uno', 'dos'),
(9, 'ke3', 'ZGQ=', 'ke', 'ke2'),
(10, '123', 'bW1t', 'kkk', '123'),
(11, 'kkee', 'MTExMTE=', 'ee2', '21rr'),
(12, 'dddss', 'MTIz', 'fewf', 'dewdw'),
(13, 'eeewq', 'MTIzMw==', 'dwqqw', 'wwwe'),
(14, 'www', 'Z2lhbmNhcmxv', 'ddd', 'eee'),
(15, 'u_c', 'MTIyMjI=', 'ultimo', 'creado'),
(16, 'juan_1', 'NTY3OA==', 'juan', 'nose');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
