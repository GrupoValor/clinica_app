-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-10-2016 a las 11:48:54
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
  `alu_codpuc` varchar(8) NOT NULL,
  `alu_volunt` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `cas_objact` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `cas_observ` varchar(200) CHARACTER SET utf8 DEFAULT 'N/A',
  `cas_result` varchar(200) CHARACTER SET utf8 DEFAULT 'N/A'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CASO`
--

INSERT INTO `TA_CASO` (`cas_id`, `usu_id`, `cli_id`, `estcas_id`, `cas_docent`, `cas_fecate`, `cas_objact`, `cas_observ`, `cas_result`) VALUES
(1, 1, 1, 2, 3, '2016-10-23', 'Cancelación de una partida de nacimiento', 'La usuaria nació en casa', 'N/A');

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
  `cli_genero` char(1) NOT NULL DEFAULT '',
  `cli_otrdep` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLIENTE`
--

INSERT INTO `TA_CLIENTE` (`cli_id`, `usu_id`, `cli_pobvul`, `cli_numhij`, `cli_nivedu`, `cli_ocupac`, `cli_direcc`, `cli_genero`, `cli_otrdep`) VALUES
(1, 2, 'Anciano', 5, 'Secundaria incompleta', 'Estudiante', 'Pasaje Los Sauces Mz. 1 Lt. 1 Santa Fe, Totorita', 'f', 'N/A');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CONSULTA`
--

CREATE TABLE IF NOT EXISTS `TA_CONSULTA` (
  `cst_id` int(10) unsigned NOT NULL,
  `cas_id` int(10) unsigned NOT NULL,
  `cst_titulo` varchar(40) NOT NULL,
  `cst_descri` text NOT NULL,
  `cst_objeti` text NOT NULL,
  `cst_result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CONTACTO`
--

CREATE TABLE IF NOT EXISTS `TA_CONTACTO` (
  `con_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned DEFAULT NULL,
  `con_tipcon` char(1) NOT NULL,
  `con_nombre` varchar(40) ,
  `con_nrotel` varchar(40) ,
  `con_direcc` varchar(50) ,
  `con_dirweb` varchar(40) ,
  `con_correo` varchar(40) 
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
(10, 1, 'p', 'raul', 'renso', 'fsfsdfsdf', '2dsfsfs', 'test');

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
-- Estructura de tabla para la tabla `TA_ETAPA`
--

CREATE TABLE IF NOT EXISTS `TA_ETAPA` (
  `eta_id` int(10) unsigned NOT NULL,
  `cst_id` int(10) unsigned NOT NULL,
  `eta_tipeta` char(1) NOT NULL,
  `eta_entida` varchar(60) NOT NULL,
  `eta_descri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_EVALUADOR`
--

CREATE TABLE IF NOT EXISTS `TA_EVALUADOR` (
  `eva_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `eva_codpuc` varchar(8) NOT NULL,
  `eva_tipeva` char(1) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_EVALUADOR`
--

INSERT INTO `TA_EVALUADOR` (`eva_id`, `usu_id`, `eva_codpuc`, `eva_tipeva`) VALUES
(1, 3, '20012734', 'd');

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
  `eta_id` int(10) unsigned NOT NULL,
  `tar_estado` int(1) NOT NULL,
  `tar_nombre` varchar(60) NOT NULL,
  `tar_descri` text NOT NULL,
  `tar_fecven` date NOT NULL,
  `tar_fecreg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO` (
  `usu_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  `usu_nrodoc` varchar(20) NOT NULL,
  `usu_nombre` varchar(60) NOT NULL,
  `usu_appate` varchar(60) NOT NULL,
  `usu_apmate` varchar(60) DEFAULT NULL,
  `usu_fecnac` date NOT NULL,
  `usu_telno1` varchar(20) DEFAULT NULL,
  `usu_telno2` varchar(20) DEFAULT NULL,
  `usu_correo` varchar(30) DEFAULT NULL,
  `usu_imagen` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_USUARIO`
--

INSERT INTO `TA_USUARIO` (`usu_id`, `cln_id`, `rol_id`, `usu_nrodoc`, `usu_nombre`, `usu_appate`, `usu_apmate`, `usu_fecnac`, `usu_telno1`, `usu_telno2`, `usu_correo`, `usu_imagen`) VALUES
(1, 1, 2, '73612348', 'Chiara', '', '', '2016-05-26', '957407212', NULL, 'cristhianr.gomez@gmail.com', 'alumno.jpg'),
(2, 1, 5, '01299381', 'Verónica Yolanda ', 'Liñan', 'Lobato', '1985-04-14', '96677994', '999761127', 'robertofs@gmail.com', 'cliente.jpg'),
(3, 1, 1, '29488341', 'Yvan ', 'Montoya', 'Vivanco', '1982-05-17', '95738231', NULL, 'vmontoya@pucp.edu.pe', 'docente.jpg');

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
-- Indices de la tabla `TA_CONSULTA`
--
ALTER TABLE `TA_CONSULTA`
  ADD PRIMARY KEY (`cst_id`), ADD KEY `fk_consulta_caso` (`cas_id`);

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
-- Indices de la tabla `TA_ETAPA`
--
ALTER TABLE `TA_ETAPA`
  ADD PRIMARY KEY (`eta_id`), ADD KEY `fk_etapa_consulta` (`cst_id`);

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
  ADD PRIMARY KEY (`tar_id`), ADD KEY `fk_tarea_etapa` (`eta_id`);

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
  MODIFY `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
  MODIFY `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
  MODIFY `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_CLINICA`
--
ALTER TABLE `TA_CLINICA`
  MODIFY `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
  MODIFY `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TA_CONSULTA`
--
ALTER TABLE `TA_CONSULTA`
  MODIFY `cst_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `TA_ETAPA`
--
ALTER TABLE `TA_ETAPA`
  MODIFY `eta_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TA_EVALUADOR`
--
ALTER TABLE `TA_EVALUADOR`
  MODIFY `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
-- Filtros para la tabla `TA_CONSULTA`
--
ALTER TABLE `TA_CONSULTA`
ADD CONSTRAINT `fk_consulta_caso` FOREIGN KEY (`cas_id`) REFERENCES `TA_CASO` (`cas_id`);

--
-- Filtros para la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
ADD CONSTRAINT `fk_contacto_clinica` FOREIGN KEY (`cln_id`) REFERENCES `TA_CLINICA` (`cln_id`);

--
-- Filtros para la tabla `TA_ETAPA`
--
ALTER TABLE `TA_ETAPA`
ADD CONSTRAINT `fk_etapa_consulta` FOREIGN KEY (`cst_id`) REFERENCES `TA_CONSULTA` (`cst_id`);

--
-- Filtros para la tabla `TA_EVALUADOR`
--
ALTER TABLE `TA_EVALUADOR`
ADD CONSTRAINT `fk_evaluador_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

--
-- Filtros para la tabla `TA_LOGIN`
--
ALTER TABLE `TA_LOGIN`
ADD CONSTRAINT `fk_login_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

--
-- Filtros para la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
ADD CONSTRAINT `fk_tarea_etapa` FOREIGN KEY (`eta_id`) REFERENCES `TA_ETAPA` (`eta_id`);

--
-- Filtros para la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
ADD CONSTRAINT `fk_usuario_clinica` FOREIGN KEY (`cln_id`) REFERENCES `TA_CLINICA` (`cln_id`);

--
-- Filtros para la tabla `TA_USUARIO_CASO`
--
ALTER TABLE `TA_USUARIO_CASO`
ADD CONSTRAINT `fk_usucaso_caso` FOREIGN KEY (`cas_id`) REFERENCES `TA_CASO` (`cas_id`),
ADD CONSTRAINT `fk_usucaso_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

--
-- Filtros para la tabla `TA_USUARIO_TAREA`
--
ALTER TABLE `TA_USUARIO_TAREA`
ADD CONSTRAINT `fk_usutarea_tarea` FOREIGN KEY (`tar_id`) REFERENCES `TA_TAREA` (`tar_id`),
ADD CONSTRAINT `fk_usutarea_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
