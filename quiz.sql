-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2016 a las 12:00:25
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
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE IF NOT EXISTS `acciones` (
  `idaccion` int(11) NOT NULL AUTO_INCREMENT,
  `idconexion` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `hora` datetime NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`idaccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`idaccion`, `idconexion`, `email`, `tipo`, `hora`, `ip`) VALUES
(1, 13, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 12:38:00', '::1'),
(2, 13, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:03:00', '::1'),
(3, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:06:00', '::1'),
(4, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:09:00', '::1'),
(5, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:13:00', '::1'),
(6, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:25:00', '::1'),
(7, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:26:00', '::1'),
(8, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:28:00', '::1'),
(9, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:50:00', '::1'),
(10, 14, 'sgarcia182@ikasle.ehu.es', 'Insertar pregunta', '2016-10-22 13:52:00', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexion`
--

CREATE TABLE IF NOT EXISTS `conexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `conexion`
--

INSERT INTO `conexion` (`id`, `email`, `hora`) VALUES
(1, 'sgarcia182@ikasle.ehu.es', '2016-10-17 10:24:00'),
(2, 'sgarcia182@ikasle.ehu.es', '2016-10-17 12:26:00'),
(3, 'sgarcia182@ikasle.ehu.es', '2016-10-17 13:18:00'),
(4, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:00:00'),
(5, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:00:00'),
(6, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:04:00'),
(7, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:08:00'),
(8, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:09:00'),
(9, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:14:00'),
(10, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:16:00'),
(11, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:22:00'),
(12, 'sgarcia182@ikasle.ehu.es', '2016-10-17 18:35:00'),
(13, 'sgarcia182@ikasle.ehu.es', '2016-10-22 12:38:00'),
(14, 'sgarcia182@ikasle.ehu.es', '2016-10-22 13:05:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pregunta` varchar(50) CHARACTER SET utf8 NOT NULL,
  `respuesta` varchar(50) CHARACTER SET utf8 NOT NULL,
  `complejidad` int(11) NOT NULL,
  `tema` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`numero`, `email`, `pregunta`, `respuesta`, `complejidad`, `tema`) VALUES
(1, 'dmontllor001@ikasle.ehu.es', '¿Quién ha ganado el premio nobel de literatura en ', 'Bob Dylan', 4, ''),
(2, 'sgarcia182@ikasle.ehu.es', '¿Qué hay para comer?', 'Alubias', 3, ''),
(3, '', '¿quién invento la web?', 'Tim Berners-Lee', 4, ''),
(13, 'sgarcia182@ikasle.ehu.es', 'Mañana hay clase?', 'No', 2, 'SW');

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
  `Foto` mediumblob NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Apellidos`, `Email`, `Password`, `NumTelfn`, `Especialidad`, `Intereses`, `Foto`) VALUES
('David', 'Montllor Moreno', 'dmontllor001@ikasle.ehu.es', 'password', 630832401, 'IS', '', 0x6463756d656e74732f494d472d32303135303630332d5741303030302e6a7067),
('Silvia', 'Garcia Garcia', 'sgarcia182@ikasle.ehu.es', 'chorizo', 695719291, 'IS', '', 0x6463756d656e74732f506963734172745f313339363330323436333934342e6a7067);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
