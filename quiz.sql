-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2016 a las 16:03:08
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
(1, 0, '', 'Ver preguntas', '2016-10-17 20:39:00', '0'),
(2, 0, '', 'Ver preguntas', '2016-10-18 16:18:00', '0'),
(3, 18, 'dmontllor001@ikasle.ehu.es', 'Insertar pregunta', '2016-10-18 17:45:00', '::1'),
(4, 0, '', 'Ver preguntas', '2016-10-18 17:45:00', '0.0.0.0'),
(5, 0, '', 'Ver preguntas', '2016-10-18 17:48:00', '::1'),
(6, 0, '', 'Ver preguntas', '2016-10-18 17:50:00', '::1'),
(7, 0, '', 'Ver preguntas', '2016-10-18 17:51:00', '::1'),
(8, 0, '', 'Ver preguntas', '2016-10-18 17:53:00', '::1'),
(9, 0, '', 'Ver preguntas', '2016-10-18 17:55:00', '::1'),
(10, 19, 'dmontllor001@ikasle.ehu.es', 'Ver preguntas', '2016-10-18 17:58:00', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexion`
--

CREATE TABLE IF NOT EXISTS `conexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
(13, 'dmontllor001@ikasle.ehu.es', '2016-10-17 19:30:00'),
(14, 'dmontllor001@ikasle.ehu.es', '2016-10-17 19:47:00'),
(15, 'dmontllor001@ikasle.ehu.es', '2016-10-17 20:09:00'),
(16, 'dmontllor001@ikasle.ehu.es', '2016-10-17 20:36:00'),
(17, 'dmontllor001@ikasle.ehu.es', '2016-10-18 16:06:00'),
(18, 'dmontllor001@ikasle.ehu.es', '2016-10-18 17:30:00'),
(19, 'dmontllor001@ikasle.ehu.es', '2016-10-18 17:58:00');

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
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`numero`, `email`, `pregunta`, `respuesta`, `complejidad`) VALUES
(1, 'dmontllor001@ikasle.ehu.es', '¿Quién ha ganado el premio nobel de literatura en ', 'Bob Dylan', 4),
(2, 'sgarcia182@ikasle.ehu.es', '¿Qué hay para comer?', 'Alubias', 3),
(4, 'dmontllor001@ikasle.ehu.es//', '¿Qué significa FISS?', 'Facultad de informática de san sebastián', 1),
(6, 'dmontllor001@ikasle.ehu.es//', 'pregunta1', 'pregunta1', 1),
(7, 'dmontllor001@ikasle.ehu.es//', 'pregunta2', 'pregunta2', 1),
(8, 'dmontllor001@ikasle.ehu.es//', 'pregunta2', 'pregunta2', 1),
(9, 'dmontllor001@ikasle.ehu.es//', 'pregunta2', 'pregunta2', 1),
(10, '', 'pra', 'fasdpa', 1),
(11, '', 'adsfasdf', 'asdf', 0),
(12, '', 'aas', 'as', 1),
(13, '', 'asd', 'asdf', 1),
(14, '', 'd', 'd', 1),
(15, '', 'asdf', 'fdas', 1),
(16, '', 'aaa', 'aaa', 1),
(17, '', 'asdf', 'adsfs', 1),
(18, '', 'aaa', 'aaa', 1),
(19, 'dmontllor001@ikasle.ehu.es', 'fda', 'sfd', 1),
(20, 'dmontllor001@ikasle.ehu.es', 'fda', 'sfd', 1),
(21, 'dmontllor001@ikasle.ehu.es', 'fda', 'sfd', 1),
(22, 'dmontllor001@ikasle.ehu.es', 'fda', 'sfd', 1),
(23, 'dmontllor001@ikasle.ehu.es', 'aaa', 'aaa', 1),
(24, 'dmontllor001@ikasle.ehu.es', 'asdf', 'asdf', 1),
(25, 'dmontllor001@ikasle.ehu.es', 'jgf', 'fcvgf', 2),
(26, 'dmontllor001@ikasle.ehu.es', 'jgf', 'fcvgf', 2),
(27, 'dmontllor001@ikasle.ehu.es', 'hhhh', 'jjjj', 2),
(28, 'dmontllor001@ikasle.ehu.es', 'fff', 'fff', 3),
(29, 'dmontllor001@ikasle.ehu.es', 'ijoi', 'dcft', 3),
(30, 'dmontllor001@ikasle.ehu.es', 'ijoi', 'dcft', 3),
(31, 'dmontllor001@ikasle.ehu.es', 'asdf', 'asdf', 1),
(32, 'dmontllor001@ikasle.ehu.es', 'asdf', 'asdf', 1),
(33, 'dmontllor001@ikasle.ehu.es', 'asdf', 'asdf', 1),
(34, 'dmontllor001@ikasle.ehu.es', 'f', 'f', 1),
(35, 'dmontllor001@ikasle.ehu.es', 'u', 'u', 1);

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
