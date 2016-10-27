-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2016 a las 16:29:39
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_comentario`
--

CREATE TABLE `ta_comentario` (
  `com_id` int(11) NOT NULL,
  `com_contenid` text,
  `com_autor` varchar(30) DEFAULT NULL,
  `tar_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ta_comentario`
--

INSERT INTO `ta_comentario` (`com_id`, `com_contenid`, `com_autor`, `tar_id`) VALUES
(1, 'El reporte de tráfico entrante no se actualizo', 'Ysrael', 1),
(3, 'El reporte de tráfico entrante se actualizo', 'Ysrael', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_tarea`
--

CREATE TABLE `ta_tarea` (
  `tar_id` int(11) NOT NULL,
  `tar_estado` varchar(30) DEFAULT NULL,
  `tar_nombre` varchar(30) DEFAULT NULL,
  `tar_descri` text,
  `tar_fecven` date DEFAULT NULL,
  `tar_fecreg` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ta_tarea`
--

INSERT INTO `ta_tarea` (`tar_id`, `tar_estado`, `tar_nombre`, `tar_descri`, `tar_fecven`, `tar_fecreg`) VALUES
(1, 'backlog', 'Actualizar reportes', 'Debo actualizar los reportes de tráfico entrante y analizarlos', NULL, '2016-10-13'),
(2, 'pendiente', 'Llamar a Miguel', 'Debo llamar a Miguel para preguntarle qué es lo que va a hacer la proxima semana', '2016-10-26', '2016-10-24'),
(3, 'proceso', 'exprimir naranjas', NULL, NULL, NULL),
(4, 'finalizada', 'comprar pan', NULL, NULL, NULL),
(5, NULL, 'arreglar pc', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ta_comentario`
--
ALTER TABLE `ta_comentario`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `R_1` (`tar_id`);

--
-- Indices de la tabla `ta_tarea`
--
ALTER TABLE `ta_tarea`
  ADD PRIMARY KEY (`tar_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ta_comentario`
--
ALTER TABLE `ta_comentario`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ta_tarea`
--
ALTER TABLE `ta_tarea`
  MODIFY `tar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
