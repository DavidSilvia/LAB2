-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2016 a las 11:11:15
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexion`
--

CREATE TABLE IF NOT EXISTS `conexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
