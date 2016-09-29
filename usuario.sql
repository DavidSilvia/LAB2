-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-09-2016 a las 14:13:21
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Apellidos` text CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Password` text CHARACTER SET utf8 NOT NULL,
  `NumTelfn` int(9) NOT NULL,
  `Especialidad` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Intereses` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Apellidos`, `Email`, `Password`, `NumTelfn`, `Especialidad`, `Intereses`) VALUES
('Silvia', 'Garcia Garcia', 'sgarcia182@ikasle.ehu.es', 'mierdoo', 695719291, 'IS', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
