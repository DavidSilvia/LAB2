-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2016 a las 10:42:22
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
  `Foto` mediumblob NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Apellidos`, `Email`, `Password`, `NumTelfn`, `Especialidad`, `Intereses`, `Foto`) VALUES
('Augustus', 'Sofing Siesta', 'asofing001@ikasle.ehu.es', 'megustadormir', 693582471, 'IS', '', 0x6463756d656e74732f626f622e6a7065),
('Augustus', 'Sofing Siesta', 'asofing021@ikasle.ehu.es', 'jjjjjjjjjjjjjjjjjjj', 693582471, 'IS', '', 0x6463756d656e74732f626f622e6a7065),
('Augustus', 'Sofing Siesta', 'asofing071@ikasle.ehu.es', 'kolkolkolkol', 693582471, 'IS', '', 0x6463756d656e74732f626f622e6a7065),
('hola', 'bebe jeje', 'hguai393@ikasle.ehu.eus', 'jejejijijojo', 666999888, 'C', '', ''),
('hola', 'que ase', 'jeje007@ikasle.ehu.es', 'okease', 666555444, 'IC', '', ''),
('ola', 'ke ase', 'olakease001@ikasle.ehu.es', 'loginokease', 963852741, 'IS', '', ''),
('ola', 'ke ase', 'olakease002@ikasle.ehu.es', 'jhklnjñljhkñ', 963852741, 'IS', '', ''),
('Pepe', 'Rodriguez Cano', 'prodriguez170@ikasle.ehu.es', 'peppintapepo', 685147456, 'IC', '', 0x6463756d656e74732f4172726179),
('Pepe', 'Rodriguez Cano', 'prodriguez180@ikasle.ehu.es', '5454545454545', 685147456, 'IC', '', 0x6463756d656e74732f626f622e6a7065),
('Silvia', 'Garcia Garcia', 'sgarcia182@ikasle.ehu.es', 'mierdoo', 695719291, 'IS', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
