-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-10-2016 a las 11:40:38
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
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pregunta` varchar(50) CHARACTER SET utf8 NOT NULL,
  `respuesta` varchar(50) CHARACTER SET utf8 NOT NULL,
  `complejidad` int(11) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`numero`, `email`, `pregunta`, `respuesta`, `complejidad`) VALUES
(1, 'dmontllor001@ikasle.ehu.es', '¿Quién ha ganado el premio nobel de literatura en ', 'Bob Dylan', 4),
(2, 'sgarcia182@ikasle.ehu.es', '¿Qué hay para comer?', 'Alubias', 3);

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
