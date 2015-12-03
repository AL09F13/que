-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2015 a las 20:49:36
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tranquilo`
--

CREATE TABLE IF NOT EXISTS `tranquilo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `compania` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `plataformas` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `clasificacion` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tranquilo`
--

INSERT INTO `tranquilo` (`id`, `titulo`, `fecha`, `compania`, `plataformas`, `genero`, `clasificacion`) VALUES
(1, 'Fallout 4', '2015-11-17', 'Bethesda', 'PS4, XboxOne, PC', 'FPS', 'M'),
(2, 'ewfewfew', '2015-11-11', 'dwq', 'rqwr', 'eqw', 'w'),
(3, 'qweqwe', '2015-11-10', 'ewqeq', 'rew', 'werwe', 'E');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
