-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2016 a las 15:43:09
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cobarcom_clinicadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_ALUMNO`
--

CREATE TABLE IF NOT EXISTS `TA_ALUMNO` (
  `alu_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `alu_codpuc` varchar(20) NOT NULL DEFAULT '',
  `alu_volunt` int(1) NOT NULL,
  `alu_nrodoc` varchar(20) DEFAULT NULL,
  `alu_correo` varchar(40) DEFAULT NULL,
  `alu_nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_ALUMNO`
--

INSERT INTO `TA_ALUMNO` (`alu_id`, `usu_id`, `alu_codpuc`, `alu_volunt`, `alu_nrodoc`, `alu_correo`, `alu_nombre`) VALUES
(1, 2, '20110923', 0, '28389392', 'chiara@pucp.pe', 'Chiara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CASO`
--

CREATE TABLE IF NOT EXISTS `TA_CASO` (
  `cas_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `cli_id` int(10) unsigned NOT NULL,
  `estcas_id` int(10) unsigned NOT NULL,
  `cas_docent` int(10) unsigned DEFAULT NULL,
  `cas_fecate` date DEFAULT NULL,
  `cas_objact` text,
  `cas_observ` text,
  `cas_result` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CASO`
--

INSERT INTO `TA_CASO` (`cas_id`, `usu_id`, `cli_id`, `estcas_id`, `cas_docent`, `cas_fecate`, `cas_objact`, `cas_observ`, `cas_result`) VALUES
(1, 2, 1, 4, 1, '2016-10-23', 'Cancelación de una partida de nacimiento', 'La usuaria nació en casa', 'N/A'),
(2, 2, 2, 6, 1, '2016-10-28', 'Duplicidad de registro de nacionalidad', '', NULL),
(3, 2, 2, 4, 2, '2016-10-28', 'Rectificacion de DNi', 'El cliente no tiene el actual', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CLIENTE`
--

CREATE TABLE IF NOT EXISTS `TA_CLIENTE` (
  `cli_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `cli_pobvul` text,
  `cli_numhij` int(1) NOT NULL,
  `cli_nivedu` varchar(30) DEFAULT '',
  `cli_ocupac` varchar(30) DEFAULT '',
  `cli_direcc` varchar(50) DEFAULT '',
  `cli_genero` char(1) DEFAULT '',
  `cli_otrdep` text,
  `cli_nombre` varchar(60) DEFAULT NULL,
  `cli_nrodoc` varchar(20) DEFAULT NULL,
  `cli_telno1` varchar(20) DEFAULT NULL,
  `cli_telno2` varchar(20) DEFAULT NULL,
  `cli_correo` varchar(40) DEFAULT NULL,
  `cli_fecnac` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLIENTE`
--

INSERT INTO `TA_CLIENTE` (`cli_id`, `usu_id`, `cli_pobvul`, `cli_numhij`, `cli_nivedu`, `cli_ocupac`, `cli_direcc`, `cli_genero`, `cli_otrdep`, `cli_nombre`, `cli_nrodoc`, `cli_telno1`, `cli_telno2`, `cli_correo`, `cli_fecnac`) VALUES
(1, 2, 'Anciano', 5, 'Secundaria incompleta', 'Estudiante', 'Pasaje Los Sauces Mz. 1 Lt. 1 Santa Fe, Totorita', 'f', 'N/A', 'Daniela Salazar Flores', '26738823', '93829932', '392992', 'daniela.florez@hotmail.com', '1958-03-12'),
(2, 4, 'Discapacitado', 2, 'Secundaria incompleta', 'Comerciante', 'Calle Tiahuanaco 196, Faucett', 'm', NULL, 'Ruber Reinoso Campoverde', '48282993', '01454345', NULL, NULL, '1987-06-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CLINICA`
--

CREATE TABLE IF NOT EXISTS `TA_CLINICA` (
  `cln_id` int(10) unsigned NOT NULL,
  `cln_nombre` varchar(60) NOT NULL,
  `cln_urlfbk` varchar(100) NOT NULL,
  `cln_urltwi` varchar(100) NOT NULL,
  `cln_urlgoo` varchar(100) NOT NULL,
  `cln_descri` text NOT NULL,
  `cln_direcc` text NOT NULL,
  `cln_mision` text NOT NULL,
  `cln_vision` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLINICA`
--

INSERT INTO `TA_CLINICA` (`cln_id`, `cln_nombre`, `cln_urlfbk`, `cln_urltwi`, `cln_urlgoo`, `cln_descri`, `cln_direcc`, `cln_mision`, `cln_vision`) VALUES
(1, 'Clinica Identidad', 'www.facebook.com', 'www.twiter.com', 'www.google.com', 'Clinica Identidad', 'PUCP', 'Mision Clinica Identidad', 'Vision Clinica Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_COMENTARIO`
--

CREATE TABLE IF NOT EXISTS `TA_COMENTARIO` (
  `com_id` int(10) unsigned NOT NULL,
  `tar_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `com_mensaj` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_COMENTARIO`
--

INSERT INTO `TA_COMENTARIO` (`com_id`, `tar_id`, `usu_id`, `com_mensaj`) VALUES
(180, 52, 1, 'Este es un comentario de prueba 1'),
(181, 52, 1, 'Este es un comentario de prueba 2'),
(182, 52, 1, 'Este es un comentario de prueba 3'),
(183, 52, 1, 'Este es un comentario de prueba 4'),
(184, 52, 1, 'Este es un comentario de prueba 5'),
(185, 52, 1, 'Este es un comentario de prueba 6'),
(186, 52, 1, 'That removes entire body including the input fields? I need the input fields still there, just the content inside the input fields to be cleared'),
(187, 53, 1, 'comentario1'),
(188, 53, 1, 'comentario2'),
(189, 53, 1, 'comentario3'),
(190, 53, 1, 'comentario4\n'),
(191, 53, 1, 'comentario5\n'),
(192, 53, 1, 'comentario6\n'),
(193, 53, 1, 'comentario6\n'),
(194, 52, 1, 'a'),
(195, 52, 1, 'comentario'),
(196, 52, 1, 'ajjajaja'),
(197, 57, 1, 'este es mi comentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CONTACTO`
--

CREATE TABLE IF NOT EXISTS `TA_CONTACTO` (
  `con_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned DEFAULT NULL,
  `con_tipcon` char(1) NOT NULL,
  `con_nombre` varchar(40) NOT NULL,
  `con_nrotel` varchar(40) NOT NULL,
  `con_direcc` varchar(50) NOT NULL,
  `con_dirweb` varchar(40) NOT NULL,
  `con_correo` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CONTACTO`
--

INSERT INTO `TA_CONTACTO` (`con_id`, `cln_id`, `con_tipcon`, `con_nombre`, `con_nrotel`, `con_direcc`, `con_dirweb`, `con_correo`) VALUES
(1, 1, 'p', 'Doc. Renzo Perez', '957238123', '', '', 'renzop@pucp.pe'),
(2, 1, 'i', 'Sunat Lince', '01 456627', 'Av. Arequipa 3004', 'www.sunat.com.pe', 'info@sunat.pe'),
(3, 1, 'p', 'Ing. Cristhian Rojas', '957383423', 'San Miguel', 'www.fimostudios.com', 'cristhian@pucp.pe'),
(4, 1, 'i', 'Asesores S. A.', '7451254', 'Av. arequipa 7894', 'www.asesoriaLegal.com.pe', 'asesoriaLegal@hotmail.com'),
(5, 1, 'p', 'juan david anchiraico', '256 3658', 'Mz: k7  lt: 3 Av. Los Lirios, SJM, Lima- Perú.', 'www.JuanDavidAnchiraico.com', 'juan.david.anchiraico@pucp.pe'),
(6, 1, 'p', 'ysrael', '3454444', 'Av. La Marina', '', 'y.egoaguirre@gmail.com'),
(7, 1, 'p', 'Ricardo', '333444', 'Av. La marina', '', 'ricard@gmail.com'),
(8, 1, 'p', 'Kari', '123', 'San Miguel', '', 'karin@outlook.com'),
(9, 1, 'p', 'test', '234242', 'casa', 'www.google', 'cris'),
(10, 1, 'p', 'raul', 'renso', 'fsfsdfsdf', '2dsfsfs', 'test'),
(11, 1, 'p', '', '', '', '', ''),
(12, 1, 'p', '', '', '', '', ''),
(13, 1, 'i', 'Renzo Acosta', '957407321', 'Arequipa', 'Arequipa', 'renzo@gamil.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_ESTADOCASO`
--

CREATE TABLE IF NOT EXISTS `TA_ESTADOCASO` (
  `estcas_id` int(10) unsigned NOT NULL,
  `estcas_detalle` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_ESTADOCASO`
--

INSERT INTO `TA_ESTADOCASO` (`estcas_id`, `estcas_detalle`) VALUES
(1, 'Activo'),
(2, 'Cerrado'),
(3, 'En Abandono'),
(4, 'En Seguimiento'),
(5, 'Inactivo'),
(6, 'Registrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_EVALUADOR`
--

CREATE TABLE IF NOT EXISTS `TA_EVALUADOR` (
  `eva_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `eva_codpuc` varchar(8) NOT NULL,
  `eva_tipeva` char(1) NOT NULL DEFAULT '',
  `eva_nombre` varchar(40) DEFAULT NULL,
  `eva_correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_EVALUADOR`
--

INSERT INTO `TA_EVALUADOR` (`eva_id`, `usu_id`, `eva_codpuc`, `eva_tipeva`, `eva_nombre`, `eva_correo`) VALUES
(1, 3, '20012734', 'd', 'Carlos Flores', 'carlos@pucp.pe'),
(2, 5, '20087172', 'd', 'Juan Sipiran', 'jsipiran@pucp.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_LOGIN`
--

CREATE TABLE IF NOT EXISTS `TA_LOGIN` (
  `usu_id` int(10) unsigned NOT NULL,
  `log_passwo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_promedio`
--

CREATE TABLE IF NOT EXISTS `ta_promedio` (
  `prm_id` int(10) unsigned NOT NULL,
  `alu_id` int(10) unsigned NOT NULL,
  `cur_id` int(10) unsigned NOT NULL,
  `cic_id` int(10) unsigned NOT NULL,
  `prm_notafinal` double NOT NULL,
  `prm_estado` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ta_promedio`
--

INSERT INTO `ta_promedio` (`prm_id`, `alu_id`, `cur_id`, `cic_id`, `prm_notafinal`, `prm_estado`) VALUES
(1001, 1001, 1001, 1001, 10.5, 'Cerrado'),
(1002, 1002, 1001, 1002, 12, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_rubrica`
--

CREATE TABLE IF NOT EXISTS `ta_rubrica` (
  `rba_id` int(10) unsigned NOT NULL,
  `rba_nombre` varchar(100) NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `cur_id` int(10) unsigned NOT NULL,
  `rba_peso` int(10) NOT NULL,
  `rba_maxpunt` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ta_rubrica`
--

INSERT INTO `ta_rubrica` (`rba_id`, `rba_nombre`, `cln_id`, `cur_id`, `rba_peso`, `rba_maxpunt`) VALUES
(1001, 'Rúbrica de participación', 1001, 1001, 5, 20),
(1002, 'Rúbrica de seguimiento de casos', 1001, 1001, 5, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_rubro`
--

CREATE TABLE IF NOT EXISTS `ta_rubro` (
  `rbo_id` int(10) unsigned NOT NULL,
  `rbo_nombre` varchar(100) NOT NULL,
  `rba_id` int(10) unsigned NOT NULL,
  `rbo_maxpunt` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ta_rubro`
--

INSERT INTO `ta_rubro` (`rbo_id`, `rbo_nombre`, `rba_id`, `rbo_maxpunt`) VALUES
(1001, 'Puntualidad', 1001, 10),
(1002, 'Participación y discusión', 1001, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_TAREA`
--

CREATE TABLE IF NOT EXISTS `TA_TAREA` (
  `tar_id` int(10) unsigned NOT NULL,
  `tar_estado` varchar(20) NOT NULL DEFAULT '',
  `tar_nombre` varchar(60) NOT NULL,
  `tar_descri` text NOT NULL,
  `tar_fecven` date NOT NULL,
  `tar_fecreg` date NOT NULL,
  `cas_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_TAREA`
--

INSERT INTO `TA_TAREA` (`tar_id`, `tar_estado`, `tar_nombre`, `tar_descri`, `tar_fecven`, `tar_fecreg`, `cas_id`) VALUES
(52, 'backlog', 'Tarea 1', 'Descripción de la tarea 1', '0000-00-00', '0000-00-00', 1),
(53, 'pendiente', 'Tarea 2', 'Descripción de la tarea 2', '0000-00-00', '0000-00-00', 1),
(54, 'finalizada', 'Tarea 3', 'Descripción de la tarea 3', '0000-00-00', '0000-00-00', 1),
(56, 'finalizada', 'hola', '', '0000-00-00', '0000-00-00', 2),
(57, 'finalizada', 'Tarea caso 3', 'aqui una descricp', '0000-00-00', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO` (
  `usu_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  `usu_passwd` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_USUARIO`
--

INSERT INTO `TA_USUARIO` (`usu_id`, `cln_id`, `rol_id`, `usu_passwd`) VALUES
(1, 1, 2, NULL),
(2, 1, 5, NULL),
(3, 1, 1, NULL),
(4, 1, 3, NULL),
(5, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO_CASO`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO_CASO` (
  `cas_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO_TAREA`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO_TAREA` (
  `usu_id` int(10) unsigned NOT NULL,
  `tar_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `TA_ALUMNO`
--
ALTER TABLE `TA_ALUMNO`
  ADD PRIMARY KEY (`alu_id`), ADD KEY `fk_alumno_usuario` (`usu_id`);

--
-- Indices de la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
  ADD PRIMARY KEY (`cas_id`), ADD KEY `fk_caso_cliente` (`cli_id`), ADD KEY `fk_caso_estadocaso` (`estcas_id`);

--
-- Indices de la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
  ADD PRIMARY KEY (`cli_id`), ADD KEY `fk_cliente_usuario` (`usu_id`);

--
-- Indices de la tabla `TA_CLINICA`
--
ALTER TABLE `TA_CLINICA`
  ADD PRIMARY KEY (`cln_id`);

--
-- Indices de la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
  ADD PRIMARY KEY (`com_id`), ADD KEY `fk_comentario_tarea` (`tar_id`), ADD KEY `fk_comentario_usuario` (`usu_id`);

--
-- Indices de la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
  ADD PRIMARY KEY (`con_id`), ADD KEY `fk_contacto_clinica` (`cln_id`);

--
-- Indices de la tabla `TA_ESTADOCASO`
--
ALTER TABLE `TA_ESTADOCASO`
  ADD PRIMARY KEY (`estcas_id`);

--
-- Indices de la tabla `TA_EVALUADOR`
--
ALTER TABLE `TA_EVALUADOR`
  ADD PRIMARY KEY (`eva_id`), ADD KEY `fk_evaluador_usuario` (`usu_id`);

--
-- Indices de la tabla `TA_LOGIN`
--
ALTER TABLE `TA_LOGIN`
  ADD KEY `fk_login_usuario` (`usu_id`);

--
-- Indices de la tabla `ta_promedio`
--
ALTER TABLE `ta_promedio`
  ADD PRIMARY KEY (`prm_id`);

--
-- Indices de la tabla `ta_rubrica`
--
ALTER TABLE `ta_rubrica`
  ADD PRIMARY KEY (`rba_id`);

--
-- Indices de la tabla `ta_rubro`
--
ALTER TABLE `ta_rubro`
  ADD PRIMARY KEY (`rbo_id`);

--
-- Indices de la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
  ADD PRIMARY KEY (`tar_id`), ADD KEY `fk_tarea_caso` (`cas_id`);

--
-- Indices de la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
  ADD PRIMARY KEY (`usu_id`), ADD KEY `fk_usuario_clinica` (`cln_id`);

--
-- Indices de la tabla `TA_USUARIO_CASO`
--
ALTER TABLE `TA_USUARIO_CASO`
  ADD KEY `fk_usucaso_caso` (`cas_id`), ADD KEY `fk_usucaso_usuario` (`usu_id`);

--
-- Indices de la tabla `TA_USUARIO_TAREA`
--
ALTER TABLE `TA_USUARIO_TAREA`
  ADD KEY `fk_usutarea_tarea` (`tar_id`), ADD KEY `fk_usutarea_usuario` (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `TA_ALUMNO`
--
ALTER TABLE `TA_ALUMNO`
  MODIFY `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
  MODIFY `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
  MODIFY `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_CLINICA`
--
ALTER TABLE `TA_CLINICA`
  MODIFY `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
  MODIFY `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT de la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
  MODIFY `con_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `TA_ESTADOCASO`
--
ALTER TABLE `TA_ESTADOCASO`
  MODIFY `estcas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `TA_EVALUADOR`
--
ALTER TABLE `TA_EVALUADOR`
  MODIFY `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ta_promedio`
--
ALTER TABLE `ta_promedio`
  MODIFY `prm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT de la tabla `ta_rubrica`
--
ALTER TABLE `ta_rubrica`
  MODIFY `rba_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT de la tabla `ta_rubro`
--
ALTER TABLE `ta_rubro`
  MODIFY `rbo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT de la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
  MODIFY `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
  MODIFY `usu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `TA_ALUMNO`
--
ALTER TABLE `TA_ALUMNO`
ADD CONSTRAINT `fk_alumno_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

--
-- Filtros para la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
ADD CONSTRAINT `fk_caso_cliente` FOREIGN KEY (`cli_id`) REFERENCES `TA_CLIENTE` (`cli_id`),
ADD CONSTRAINT `fk_caso_estadocaso` FOREIGN KEY (`estcas_id`) REFERENCES `TA_ESTADOCASO` (`estcas_id`);

--
-- Filtros para la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
ADD CONSTRAINT `fk_cliente_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

--
-- Filtros para la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
ADD CONSTRAINT `fk_comentario_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`),
ADD CONSTRAINT `fk_comentario_tarea` FOREIGN KEY (`tar_id`) REFERENCES `TA_TAREA` (`tar_id`);

--
-- Filtros para la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
ADD CONSTRAINT `fk_contacto_clinica` FOREIGN KEY (`cln_id`) REFERENCES `TA_CLINICA` (`cln_id`);

--
-- Filtros para la tabla `TA_EVALUADOR`
--
ALTER TABLE `TA_EVALUADOR`
ADD CONSTRAINT `fk_evaluador_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

--
-- Filtros para la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
ADD CONSTRAINT `fk_tarea_caso` FOREIGN KEY (`cas_id`) REFERENCES `TA_CASO` (`cas_id`);

--
-- Filtros para la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
ADD CONSTRAINT `fk_usuario_clinica` FOREIGN KEY (`cln_id`) REFERENCES `TA_CLINICA` (`cln_id`);

--
-- Filtros para la tabla `TA_USUARIO_CASO`
--
ALTER TABLE `TA_USUARIO_CASO`
ADD CONSTRAINT `fk_usucaso_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`),
ADD CONSTRAINT `fk_usucaso_caso` FOREIGN KEY (`cas_id`) REFERENCES `TA_CASO` (`cas_id`);

--
-- Filtros para la tabla `TA_USUARIO_TAREA`
--
ALTER TABLE `TA_USUARIO_TAREA`
ADD CONSTRAINT `fk_usutarea_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`),
ADD CONSTRAINT `fk_usutarea_tarea` FOREIGN KEY (`tar_id`) REFERENCES `TA_TAREA` (`tar_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
