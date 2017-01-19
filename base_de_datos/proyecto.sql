-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2017 a las 04:40:46
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_usuarios_tipos`
--

CREATE TABLE IF NOT EXISTS `relacion_usuarios_tipos` (
  `id` int(10) unsigned NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `usuarios_tipos_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `relacion_usuarios_tipos`
--

INSERT INTO `relacion_usuarios_tipos` (`id`, `usuarios_id`, `usuarios_tipos_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `relacion_usuarios_tipos`
--
ALTER TABLE `relacion_usuarios_tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `relacion_usuarios_tipos`
--
ALTER TABLE `relacion_usuarios_tipos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
