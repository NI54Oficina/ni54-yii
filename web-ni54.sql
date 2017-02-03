-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2017 a las 13:36:23
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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

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
(7, 5, 5),
(8, 7, 2),
(9, 8, 3),
(10, 8, 4),
(11, 9, 5),
(12, 9, 6),
(13, 11, 2),
(14, 12, 12),
(15, 13, 3),
(16, 14, 4),
(17, 14, 5),
(18, 15, 6),
(19, 15, 7),
(20, 17, 9),
(21, 17, 10),
(22, 17, 11),
(23, 19, 2),
(24, 19, 3),
(25, 20, 4),
(26, 20, 5),
(27, 22, 2),
(28, 22, 3),
(29, 22, 4),
(30, 23, 6),
(31, 23, 7),
(32, 25, 2),
(33, 25, 3),
(34, 26, 4),
(35, 26, 5),
(36, 28, 2),
(37, 28, 3),
(38, 29, 4),
(39, 29, 5),
(40, 30, 6),
(41, 30, 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pantalla`
--

INSERT INTO `tbl_pantalla` (`id_pantalla`, `id_project`, `modalidad`, `img`, `trabajo`, `color`) VALUES
(1, 7, 'APP', '1', 'Diseño + Programación', '#f4bd3e'),
(2, 7, '', '', '', '#f5f5f5'),
(3, 8, 'WEB', '1', 'Diseño + programación', '#05dbc3'),
(4, 8, '', '', '', '#f5f5f5'),
(5, 8, '', '', '', '#6d62af'),
(6, 4, 'WEB', '1', 'Diseño + Programación', '#02d8c0'),
(7, 4, '', '', '', '#02d8c0'),
(8, 4, '', '', '', '#7166b5'),
(9, 4, '', '', '', '#7166b5'),
(10, 12, 'WEB', '1', 'Diseño + Programación', '#6f63b0'),
(11, 12, '', '', '', '#f7c142'),
(12, 12, '', '', '', '#ffffff'),
(13, 12, '', '', '', '#f7c142'),
(14, 12, '', '', '', '#f7c142'),
(15, 12, '', '', '', '#f7c142'),
(16, 12, 'APP', '8', 'Diseño + Programación', '#f5f5f5'),
(17, 12, '', '', '', '#f5f5f5'),
(18, 14, 'JUEGO', '1', 'Diseño + Programación', '#02d8c0'),
(19, 14, '', '', '', '#6f65b3'),
(20, 14, '', '', '', '#6f65b3'),
(21, 22, 'Aplicativo Web', '1', 'Diseño + Programación', '#f5be3f'),
(22, 22, '', '', '', '#05dbc4'),
(23, 22, '', '', '', '#6a5ca5'),
(24, 5, 'WEB', '1', 'Diseño + Programación', '#f3b430'),
(25, 5, '', '', '', '#f5f5f5'),
(26, 5, '', '', '', '#f5f5f5'),
(27, 10, 'WEB', '1', 'Diseño + Programación', '#6d5fab'),
(28, 10, '', '', '', '#05dbc4'),
(29, 10, '', '', '', '#05dbc4'),
(30, 10, '', '', '', '#05dbc4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id_project` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nombre`, `tipo`, `cliente`, `descripcion`) VALUES
(1, 'Desafio Cósmico', 'Juego ', '', ''),
(2, 'Trivia CAC', 'Juego', '', ''),
(3, 'Publicaciones Barrick', 'Social Media - Desarrollo web', 'Barrick Gold Argentina', 'Desarrollo de contenidos para social media y servicio de mantenimiento y actualizaciones para su website institucional.'),
(4, 'Comunicación interna Easy', 'Newsletter', 'Easy', 'Desarrollo completo del website institucional y promocional del hipermayorista. Incluyó catálogo de ofertas, ofertas destacadas, backend para administración completa del site, actualizaciones periódicas, y diseño y programación del newsletter semanal para envío de ofertas a más de 200.000 clientes.'),
(5, 'Web KimenaStd', 'Website Comercial', 'Kimena Studio', 'Desarrollo del sitio web de la productora audiovisual para exhibir su portfolio.'),
(6, 'Engie / GDF Suez', 'Rebranding - Website', 'Engie / GDF Suez', 'Desarrollo de contenidos para social media, rediseño y aplicación de nueva marca para el lanzamiento de Engie, y desarrollo web para las landings de dos minas de Chile.'),
(7, 'Vademécum Biogénesis Bagó', 'Aplicación', 'Biogénesis Bagó', '\n'),
(8, 'Zuco', 'Website Institucional', 'Zuko', 'Desarrollo de la web institucional de la empresa y del microsite promocional con las licencias de los cobrandings.'),
(9, 'Pieza audiovisual SAM', 'Motion graphic', 'SAM Sistemas', 'Producción audiovisual para eventos y exposiciones donde se muestran los servicios y desarrollos de la compañía.'),
(10, 'Website Institucional', 'Biogénesis Bagó', 'Biogénesis Bagó', ''),
(11, 'Boca Fan', 'Advergames', 'Boca Fan', 'Desarrollo y producción de 6 videojuegos con presencia de marca para la plataforma Boca Fan del Club Boca Juniors.</br>  También fueron parte del desarrollo otros videojuegos para Rosario Central y la ANSES, ambos con plataformas de entretenimientos online para su público.'),
(12, 'Portal Fronteras 2.0', 'Website - Aplicación', 'Biogénesis Bagó', ''),
(13, 'Hipermayorista Makro', 'Website Institucional', 'Makro', 'Diseño y programación del newsletter interno periódico de Easy para Argentina, Chile y Colombia.'),
(14, 'Chaac', 'Edutainment', 'Tang', 'Videojuego educativo con tributo al Dios Aborigen y que educa a través del juego sobre el cuidado del agua. Producción de maquetas en porcelana fría, papel y cartón corrugado, y animación por stop motion.'),
(15, 'EcoTang', 'Juego', '', ''),
(16, 'Operación Gaviotas', 'Edutainment', 'Tang', 'Videojuego educativo que concientiza sobre sustentabilidad y ecología. Producción de maquetas en porcelana fría, papel y cartón corrugado, y animación por stop motion.'),
(19, 'Tangdrops', 'Edutainment', 'Tang', 'Videojuego educativo que enseña tips sobre ecología y medio ambiente. Producción de maquetas en porcelana fría, papel y cartón corrugado, y animación por stop motion.'),
(20, 'tangkanoid', 'Edutainment', 'Tang', 'Tributo al clásico Arkanoid, con mensajes de concientización sobre ecología. Producción de maquetas en porcelana fría, papel y cartón corrugado, y animación por stop motion.'),
(21, 'CRU', 'Edutainment', 'Universidad de Buenos Aires & Conduciendo a Conciencia', 'Desarrollo de videojuego educativo para concientizar a los jóvenes sobre la importancia de asumir la responsabilidad en cuestiones de vialidad. El videojuego corre en pc y netbooks y fue desarrollado con el aporte de numerosos voluntarios que se sumaron al proyecto.'),
(22, 'Brochure interactivo de Barbie', 'Aplicativo web', 'Mattel', 'Maquetado y programación de aplicación móvil para licenciatarios de Barbie. El objetivo del desarrollo era orientar a los usuarios sobre los correctos modos de aplicación de la marca en los productos franquiciados.'),
(23, 'Trivia "Ping pong"', 'Edutainment', 'Universidad de Buenos Aires & Conduciendo a Conciencia', ''),
(24, 'Trivia "Death match"', 'Edutainment', 'Universidad de Buenos Aires & Conduciendo a Conciencia', ''),
(25, 'Trivia "Jeopardy"', 'Edutainment', 'Universidad de Buenos Aires & Conduciendo a Conciencia', ''),
(26, 'Club Estudiantes BB', 'Website Institucional', 'Club Estudiantes de Bahía Blanca', 'Desarrollo del sitio web institucional del club más emblemático de la Capital del Básket'),
(27, 'Abuelas de Plaza de Mayo', 'Edutainment', 'Abuelas de Plaza de Mayo', 'Desarrollo de contenidos de edutainment para el stand de Abuelas de Plaza de Mayo en Tecnópolis. Los jugaron en total, a lo largo de todo el año, aproximadamente 2.000.000 de personas.');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `tbl_pantalla`
--
ALTER TABLE `tbl_pantalla`
  MODIFY `id_pantalla` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
