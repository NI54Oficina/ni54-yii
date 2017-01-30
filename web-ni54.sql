-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2017 a las 17:57:54
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `web-ni54`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_img_pantalla`
--

CREATE TABLE IF NOT EXISTS `tbl_img_pantalla` (
  `id` int(255) NOT NULL,
  `id_pantalla` int(255) NOT NULL,
  `img` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_img_pantalla`
--

INSERT INTO `tbl_img_pantalla` (`id`, `id_pantalla`, `img`) VALUES
(1, 2, 2),
(2, 2, 3),
(3, 2, 4),
(4, 4, 2),
(5, 4, 3),
(6, 5, 4),
(7, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pantalla`
--

CREATE TABLE IF NOT EXISTS `tbl_pantalla` (
  `id_pantalla` int(255) NOT NULL,
  `id_project` int(255) NOT NULL,
  `modalidad` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `trabajo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pantalla`
--

INSERT INTO `tbl_pantalla` (`id_pantalla`, `id_project`, `modalidad`, `img`, `trabajo`, `color`) VALUES
(1, 7, 'APP', '1', 'Diseño + Programación', '#f4bd3e'),
(2, 7, '', '', '', '#f5f5f5'),
(3, 8, 'WEB', '1', 'Diseño + programación', '#05dbc3'),
(4, 8, '', '', '', '#f5f5f5'),
(5, 8, '', '', '', '#6d62af');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id_project` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nombre`, `tipo`, `descripcion`) VALUES
(1, 'Desafio Cósmico', 'Juego ', ''),
(2, 'Trivia CAC', 'Juego', ''),
(3, 'Publicaciones redes', 'Social Media', ''),
(4, 'Web Makro', 'Web', ''),
(5, 'Web KimenaStd', 'Web', ''),
(6, 'Imágenes en redes sociales', 'Social Media', ''),
(7, 'Vademécum', 'Aplicación', '\r\nMELANIA MIRANDAMELANIA MIRANDAMELANIA MIRANDAMELANIA MIRANDAMELANIA MIRANDAMELANIA MIRANDAMELANIA \r\nMELANIA MIRANDAMELANIA MIRANDAMELANIA MIRANDA'),
(8, 'Web Jugo Zuco', 'Web ', ''),
(9, 'Sam', 'Animación ', ''),
(10, 'Web Biogénesis Bagó', ' Web', ''),
(11, '12 Pasos', 'Juego', ''),
(12, 'Portal Fronteras 2.0', 'Web y App ', ''),
(13, 'Newsletter Easy', 'Newsletter', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'test1', 'a722c63db8ec8625af6cf71cb8c2d939', 'test1@example.com'),
(2, 'test2', 'pass2', 'test2@example.com'),
(3, 'test3', 'pass3', 'test3@example.com'),
(4, 'test4', 'pass4', 'test4@example.com'),
(5, 'test5', 'pass5', 'test5@example.com'),
(6, 'test6', 'pass6', 'test6@example.com'),
(7, 'test7', 'pass7', 'test7@example.com'),
(8, 'test8', 'pass8', 'test8@example.com'),
(9, 'test9', 'pass9', 'test9@example.com'),
(10, 'test10', 'pass10', 'test10@example.com'),
(11, 'test11', 'pass11', 'test11@example.com'),
(12, 'test12', 'pass12', 'test12@example.com'),
(13, 'test13', 'pass13', 'test13@example.com'),
(14, 'test14', 'pass14', 'test14@example.com'),
(15, 'test15', 'pass15', 'test15@example.com'),
(16, 'test16', 'pass16', 'test16@example.com'),
(17, 'test17', 'pass17', 'test17@example.com'),
(18, 'test18', 'pass18', 'test18@example.com'),
(19, 'test19', 'pass19', 'test19@example.com'),
(20, 'test20', 'pass20', 'test20@example.com'),
(21, 'test21', 'pass21', 'test21@example.com'),
(22, 'aasdas', 'asdas', 'ºsadsd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_img_pantalla`
--
ALTER TABLE `tbl_img_pantalla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_pantalla`
--
ALTER TABLE `tbl_pantalla`
  ADD PRIMARY KEY (`id_pantalla`);

--
-- Indices de la tabla `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_img_pantalla`
--
ALTER TABLE `tbl_img_pantalla`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_pantalla`
--
ALTER TABLE `tbl_pantalla`
  MODIFY `id_pantalla` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
