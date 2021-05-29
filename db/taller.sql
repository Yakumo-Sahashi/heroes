-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2021 a las 22:58:01
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_foto`
--

CREATE DATABASE taller;
USE taller;

CREATE TABLE `t_foto` (
  `id` int(11) NOT NULL,
  `pago` int(11) NOT NULL,
  `c_fotos` int(3) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `medidas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_foto`
--

INSERT INTO `t_foto` (`id`, `pago`, `c_fotos`, `tipo`, `medidas`) VALUES
(5, 15, 2, 'color', '4x6'),
(6, 40, 5, 'blancoNegro', '6x8'),
(7, 45, 5, 'color', '6x8'),
(8, 45, 5, 'color', '6x8'),
(9, 45, 5, 'color', '6x8'),
(10, 63, 7, 'color', '6x8'),
(11, 10, 2, 'blancoNegro', '5x7'),
(12, 18, 3, 'blancoNegro', '4x6'),
(13, 8, 1, 'blancoNegro', '6x8'),
(14, 16, 4, 'blancoNegro', '3x4'),
(15, 22, 4, 'color', '3x4'),
(16, 18, 3, 'blancoNegro', '4x6'),
(17, 18, 2, 'color', '6x8'),
(18, 18, 3, 'blancoNegro', '4x6'),
(19, 18, 3, 'blancoNegro', '4x6'),
(20, 18, 3, 'blancoNegro', '4x6'),
(21, 18, 3, 'blancoNegro', '4x6'),
(22, 18, 3, 'blancoNegro', '4x6'),
(23, 18, 3, 'blancoNegro', '4x6'),
(24, 18, 3, 'blancoNegro', '4x6'),
(25, 18, 3, 'blancoNegro', '4x6'),
(26, 6, 1, 'color', '3x4'),
(27, 10, 2, 'blancoNegro', '5x7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_heroes`
--

CREATE TABLE `t_heroes` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `alter_ego` varchar(50) NOT NULL,
  `poder` int(3) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `publicacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_foto`
--
ALTER TABLE `t_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_heroes`
--
ALTER TABLE `t_heroes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_foto`
--
ALTER TABLE `t_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `t_heroes`
--
ALTER TABLE `t_heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
