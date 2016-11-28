-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2016 a las 18:32:16
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
-- Estructura de tabla para la tabla `TA_ACTIVIDAD`
--

CREATE TABLE IF NOT EXISTS `TA_ACTIVIDAD` (
  `act_id` int(10) NOT NULL,
  `usu_id` int(10) DEFAULT NULL,
  `cas_id` int(10) DEFAULT NULL,
  `act_desc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `act_fecreg` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TA_ACTIVIDAD`
--

INSERT INTO `TA_ACTIVIDAD` (`act_id`, `usu_id`, `cas_id`, `act_desc`, `act_fecreg`) VALUES
(137, 1, 5, '<li class="actividad" style="background-color:#81C784 !important"><strong>11/27/2016, 1:55:16 PM</strong>:<br> <strong>Chiara</strong> agregó <strong>Presentar Solicitud de DNI</strong> a backlog</li>', '2016-11-27 12:55:16'),
(136, 1, 5, '<li class="actividad"><strong>27/11/2016 14:00:40</strong>:<br> <strong>Chiara</strong> movió <strong>Recuperar Partida Original</strong> a pendientes</li>', '2016-11-27 12:54:54'),
(135, 1, 5, '<li class="actividad" style="background-color:#81C784 !important"><strong>11/27/2016, 1:54:11 PM</strong>:<br> <strong>Chiara</strong> agregó <strong>Recuperar Partida Original</strong> a backlog</li>', '2016-11-27 12:54:11'),
(134, 1, 1, '<li class="actividad"><strong>11/27/2016, 1:43:05 PM</strong>:<br> <strong>Chiara</strong> movió <strong>Busqueda Partida Nacimiento</strong> a pendientes</li>', '2016-11-27 12:43:05'),
(138, 1, 5, '<li class="actividad"><strong>11/27/2016, 1:55:22 PM</strong>:<br> <strong>Chiara</strong> movió <strong>Presentar Solicitud de DNI</strong> a pendientes</li>', '2016-11-27 12:55:22'),
(139, 1, 5, '<li class="actividad" style="background-color:#FF6E40"><strong>11/27/2016, 1:55:30 PM</strong>:<br> <strong>Chiara</strong> eliminó <strong>Presentar Solicitud de DNI</strong></li>', '2016-11-27 12:55:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_ALERTA`
--

CREATE TABLE IF NOT EXISTS `TA_ALERTA` (
  `ale_id` int(11) NOT NULL,
  `ale_titulo` varchar(50) NOT NULL,
  `ale_cx` varchar(30) NOT NULL,
  `ale_cy` varchar(30) NOT NULL,
  `ale_estado` varchar(30) DEFAULT NULL,
  `ale_descrip` text,
  `ale_fecreg` date DEFAULT NULL,
  `ale_fecven` date DEFAULT NULL,
  `ale_incentivo` text,
  `ale_direccion` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_ALUMNO`
--

CREATE TABLE IF NOT EXISTS `TA_ALUMNO` (
  `alu_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `alu_volunt` int(1) NOT NULL,
  `alu_nrodoc` varchar(20) DEFAULT NULL,
  `alu_correo` varchar(40) DEFAULT NULL,
  `alu_nombre` varchar(40) DEFAULT NULL,
  `alu_codpuc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_ALUMNO`
--

INSERT INTO `TA_ALUMNO` (`alu_id`, `usu_id`, `alu_volunt`, `alu_nrodoc`, `alu_correo`, `alu_nombre`, `alu_codpuc`) VALUES
(1, 1, 0, '28389392', 'chiara@pucp.pe', 'Chiara', '20160000'),
(2, 2, 0, '72921408', 'karina.alfaro@pucp.pe', 'Karina Alfaro ', '20160001'),
(3, 3, 1, '36899123', 'vduval@france.pl', 'Victor Duval', '20160002');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CICLO`
--

CREATE TABLE IF NOT EXISTS `TA_CICLO` (
  `cic_id` int(11) NOT NULL,
  `cic_nombre` varchar(15) NOT NULL,
  `cic_fechaini` date NOT NULL,
  `cic_fechafin` date NOT NULL,
  `cln_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CICLO`
--

INSERT INTO `TA_CICLO` (`cic_id`, `cic_nombre`, `cic_fechaini`, `cic_fechafin`, `cln_id`) VALUES
(1, '2016-1', '2016-03-01', '2016-08-31', 1),
(2, '2016-2', '2016-08-14', '2017-01-15', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLIENTE`
--

INSERT INTO `TA_CLIENTE` (`cli_id`, `usu_id`, `cli_pobvul`, `cli_numhij`, `cli_nivedu`, `cli_ocupac`, `cli_direcc`, `cli_genero`, `cli_otrdep`, `cli_nombre`, `cli_nrodoc`, `cli_telno1`, `cli_telno2`, `cli_correo`, `cli_fecnac`) VALUES
(1, 7, 'Anciano', 5, 'Secundaria incompleta', 'Estudiante', 'Pasaje Los Sauces Mz. 1 Lt. 1 Santa Fe, Totorita', 'f', 'N/A', 'Daniela Salazar Flores', '70000001', '93829932', '392992', 'daniela.florez@hotmail.com', '1958-03-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CLINICA`
--

CREATE TABLE IF NOT EXISTS `TA_CLINICA` (
  `cln_id` int(10) unsigned NOT NULL,
  `cln_nombre` varchar(60) DEFAULT NULL,
  `cln_telefono` int(11) DEFAULT NULL,
  `cln_email` varchar(100) DEFAULT NULL,
  `cln_urlfbk` varchar(100) DEFAULT NULL,
  `cln_urltwi` varchar(100) DEFAULT NULL,
  `cln_urlgoo` varchar(100) DEFAULT NULL,
  `cln_descri` text,
  `cln_direcc` text,
  `cln_mision` text,
  `cln_vision` text,
  `cln_prof` int(10) DEFAULT NULL,
  `cln_activo` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLINICA`
--

INSERT INTO `TA_CLINICA` (`cln_id`, `cln_nombre`, `cln_telefono`, `cln_email`, `cln_urlfbk`, `cln_urltwi`, `cln_urlgoo`, `cln_descri`, `cln_direcc`, `cln_mision`, `cln_vision`, `cln_prof`, `cln_activo`) VALUES
(1, 'Clinica Identidad', NULL, NULL, 'www.facebook.com', 'www.twiter.com', 'www.google.com', 'Clinica Identidad', 'PUCP', 'Mision Clinica Identidad', 'Vision Clinica Identidad', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_COMENTARIO`
--

CREATE TABLE IF NOT EXISTS `TA_COMENTARIO` (
  `com_id` int(10) unsigned NOT NULL,
  `tar_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned DEFAULT NULL,
  `com_mensaj` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CONTACTO`
--

INSERT INTO `TA_CONTACTO` (`con_id`, `cln_id`, `con_tipcon`, `con_nombre`, `con_nrotel`, `con_direcc`, `con_dirweb`, `con_correo`) VALUES
(1, 1, 'p', 'Doc. Renzo Perez', '957238123', '', '', 'renzop@pucp.pe'),
(2, 1, 'i', 'Sunat Lince', '01 456627', 'www.sunat.com.pe', 'Av. Arequipa 3004', 'info@sunat.pe'),
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
(13, 1, 'i', 'Renzo Acosta', '957407321', 'Arequipa', 'Arequipa', 'renzo@gamil.com'),
(14, 1, 'p', 'Daniel Fernandez', '92881891', '', '', 'danielf@sunat.com.pe'),
(15, 1, 'p', 'Roberto Hernandez', 'anexo #452-2819', '', '', 'roberto@gmail.com'),
(16, 1, 'i', 'PUCP', '', '', '', ''),
(17, 1, 'i', 'Empresa ABC', '01245784', 'los cedros 123', '', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_CURSO`
--

CREATE TABLE IF NOT EXISTS `TA_CURSO` (
  `cur_id` int(11) NOT NULL,
  `cur_descrip` varchar(100) NOT NULL,
  `cur_codigo` varchar(15) NOT NULL,
  `cln_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CURSO`
--

INSERT INTO `TA_CURSO` (`cur_id`, `cur_descrip`, `cur_codigo`, `cln_id`) VALUES
(1, 'Clínica Jurídica de Acciones de Interés Público', 'DER260', 1),
(2, 'Ingeniería de Software', 'INF245', 1);

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
  `eva_tipeva` char(1) NOT NULL DEFAULT '',
  `eva_codpuc` varchar(10) DEFAULT NULL,
  `eva_nombre` varchar(40) DEFAULT NULL,
  `eva_correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_EVALUADOR`
--

INSERT INTO `TA_EVALUADOR` (`eva_id`, `usu_id`, `eva_tipeva`, `eva_codpuc`, `eva_nombre`, `eva_correo`) VALUES
(1, 4, 'd', '20160003', 'Ivan Sipiran', 'isipiran@pucp.pe'),
(2, 5, 'j', '20160004', 'Jorge Quirao', 'jguirao@pucp.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_EVENTO`
--

CREATE TABLE IF NOT EXISTS `TA_EVENTO` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start` varchar(30) DEFAULT NULL,
  `end` varchar(30) DEFAULT NULL,
  `description` text,
  `image` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  `link` varchar(200) DEFAULT NULL,
  `visible` int(1) DEFAULT '0',
  `dateModify` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_EVENTO`
--

INSERT INTO `TA_EVENTO` (`id`, `title`, `start`, `end`, `description`, `image`, `active`, `link`, `visible`, `dateModify`) VALUES
(1, 'Prueba1.1', '2016-11-09 00:00:00', '2016-11-10 00:00:00', 'Prueba1', NULL, 1, 'Prueba1', 1, '2016/11/26 04:46:20'),
(2, 'Evento week', '2016-11-22 07:30:00', '2016-11-22 12:30:00', 'Evento week', NULL, 1, 'Evento week', 1, '2016/11/27 20:59:54'),
(3, 'Evento con imagen', '2016-11-10 00:00:00', '2016-11-11 00:00:00', 'Evento con imagen', '/assets/images/eventos/958a559a2a8d79753f4fafad7bb807d8.jpgl.jpg', 1, 'Evento con imagen', 1, '2016/11/26 04:51:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_LOG`
--

CREATE TABLE IF NOT EXISTS `TA_LOG` (
  `id` int(11) unsigned NOT NULL,
  `log_text` text,
  `log_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_tipo` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_LOG`
--

INSERT INTO `TA_LOG` (`id`, `log_text`, `log_date`, `log_tipo`) VALUES
(10, ' Inicio session :234234234 con el password :234234234 Resultado : Usuario  incorrecto', '2016-11-21 22:29:38', ''),
(11, ' Inicio session :20166979 con el password :CURRENT_TIMESTAMP Resultado : Usuario  incorrecto', '2016-11-21 22:30:28', ''),
(12, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario  incorrecto', '2016-11-21 22:30:48', ''),
(13, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-21 22:31:16', ''),
(14, ' Inicio session :20163000 con el password :20163000 Resultado : Usuario  incorrecto', '2016-11-21 22:34:58', ''),
(15, ' Inicio session :20163000 con el password :20163000 Resultado : Usuario existente  Rol : 1 Resultado : No se pudo encontrar su registro en TA_ALUMNO', '2016-11-21 22:35:51', ''),
(16, ' Inicio session :20160000 con el password :eva_codpuc Resultado : Usuario  incorrecto', '2016-11-21 22:37:41', ''),
(17, ' Inicio session :20160000 con el password :eva_codpuc Resultado : Usuario  incorrecto', '2016-11-21 22:38:01', ''),
(18, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-21 22:38:15', ''),
(19, ' Inicio session :20163000 con el password :20163000 Resultado : Usuario existente  Rol : 4', '2016-11-21 22:39:59', ''),
(20, ' Inicio session :20164000 con el password :20164000 Resultado : Usuario existente  Rol : 5', '2016-11-21 22:42:56', ''),
(21, ' Inicio session :20165000 con el password :20165000 Resultado : Usuario existente  Rol : 2', '2016-11-21 22:45:22', ''),
(22, ' Inicio session :70000001 con el password :70000001 Resultado : Usuario existente  Rol : 7', '2016-11-21 22:55:45', ''),
(23, ' Inicio session :70000001 con el password :70000001 Resultado : Usuario existente  Rol : 7 Resultado : No se pudo encontrar su registro en TA_CLIENTE', '2016-11-21 22:57:15', ''),
(24, ' Inicio session :70000001 con el password :70000001 Resultado : Usuario existente  Rol : 7 Resultado : No se pudo encontrar su registro en TA_CLIENTE', '2016-11-21 22:57:54', ''),
(25, ' Inicio session :70000001 con el password :70000001 Resultado : Usuario existente  Rol : 7 Resultado : No se pudo encontrar su registro en TA_CLIENTE', '2016-11-21 22:58:01', ''),
(26, ' Inicio session :70000001 con el password :70000001 Resultado : Usuario existente  Rol : 7', '2016-11-21 22:59:28', ''),
(27, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario  incorrecto', '2016-11-21 23:00:53', ''),
(28, ' Inicio session :20160002 con el password :20160002 Resultado : Usuario existente  Rol : 3 Resultado : No se pudo encontrar su registro en TA_ALUMNO', '2016-11-21 23:01:08', ''),
(29, ' Inicio session :20160002 con el password :20160002 Resultado : Usuario existente  Rol : 3 Resultado : No se pudo encontrar su registro en TA_ALUMNO', '2016-11-21 23:01:51', ''),
(30, ' Inicio session :20160001 con el password :20160002 Resultado : Usuario  incorrecto', '2016-11-21 23:02:16', ''),
(31, ' Inicio session :20160001 con el password :20160001 Resultado : Usuario existente  Rol : 2', '2016-11-21 23:02:25', ''),
(32, ' Inicio session :70000002 con el password :70000002 Resultado : Usuario existente  Rol : 7', '2016-11-21 23:04:02', ''),
(33, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-21 23:17:03', ''),
(34, ' Inicio session :20160001 con el password :20160001 Resultado : Usuario existente  Rol : 2', '2016-11-21 23:24:08', ''),
(35, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-21 23:25:22', ''),
(36, ' Inicio session :20160002 con el password :20160002 Resultado : Usuario existente  Rol : 3 Resultado : No se pudo encontrar su registro en TA_ALUMNO', '2016-11-21 23:45:52', ''),
(37, ' Inicio session :20160001 con el password :20160001 Resultado : Usuario existente  Rol : 2', '2016-11-21 23:46:09', ''),
(38, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-21 23:52:08', ''),
(39, ' Inicio session :20160003 con el password :20160003 Resultado : Usuario existente  Rol : 4', '2016-11-22 00:01:01', ''),
(40, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario existente  Rol : 2', '2016-11-22 00:01:57', ''),
(41, ' Inicio session :70000001 con el password :70000001 Resultado : Usuario existente  Rol : 7', '2016-11-22 00:20:14', ''),
(42, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-22 00:27:12', ''),
(43, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario existente  Rol : 2', '2016-11-22 00:33:44', ''),
(44, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-22 00:43:49', ''),
(45, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario existente  Rol : 2', '2016-11-22 00:57:04', ''),
(46, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-22 01:00:13', ''),
(47, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario existente  Rol : 2', '2016-11-22 01:00:40', ''),
(48, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-22 02:27:18', ''),
(49, ' Inicio session :20166979 con el password :20160000 Resultado : Usuario  incorrecto', '2016-11-22 02:28:22', ''),
(50, ' Inicio session :20166979 con el password :20166979 Resultado : Usuario existente  Rol : 2', '2016-11-22 02:28:28', ''),
(51, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-22 23:15:21', ''),
(52, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-23 03:18:50', ''),
(53, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-23 03:38:29', ''),
(54, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-23 07:55:12', ''),
(55, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-23 21:43:40', ''),
(56, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-23 21:45:25', ''),
(57, ' Inicio session :20165000 con el password :20165000 Resultado : Usuario existente  Rol : 4', '2016-11-23 21:47:57', ''),
(58, ' Inicio session :20165001 con el password :20165001 Resultado : Usuario existente  Rol : 2', '2016-11-23 21:49:03', ''),
(59, ' Inicio session :20165001 con el password :20165001 Resultado : Usuario existente  Rol : 2', '2016-11-23 21:56:54', ''),
(60, ' Inicio session :20160003 con el password :20160003 Resultado : Usuario existente  Rol : 4', '2016-11-23 21:57:11', ''),
(61, ' Inicio session :20160001 con el password :20160001 Resultado : Usuario existente  Rol : 2', '2016-11-23 22:02:46', ''),
(62, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-23 22:03:25', ''),
(63, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-24 07:14:29', ''),
(64, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-24 08:11:11', ''),
(65, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-24 08:15:11', ''),
(66, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-24 08:19:19', ''),
(67, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-24 08:21:23', ''),
(68, ' Inicio session :20160000 con el password :20160000 Resultado : Usuario existente  Rol : 1', '2016-11-25 05:55:07', ''),
(69, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 02:20:17', 'Inicio session '),
(70, 'Usuario: 20160003 Conexion : Exitosa -> Rol : 4', '2016-11-27 15:13:38', 'Inicio session '),
(71, 'Usuario: 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 16:12:25', 'Inicio session '),
(72, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 17:51:31', 'Inicio session '),
(73, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:04:55', 'Inicio session '),
(74, 'Usuario : 20160001 Conexion : Exitosa -> Rol : 2', '2016-11-27 18:12:05', 'Inicio session '),
(75, 'Usuario : 0 Conexion : No existe el usuario', '2016-11-27 18:16:26', 'Inicio session '),
(76, 'Usuario : 0 Conexion : No existe el usuario', '2016-11-27 18:16:33', 'Inicio session '),
(77, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:16:41', 'Inicio session '),
(78, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:16:44', 'Inicio session '),
(79, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:24:46', 'Inicio session '),
(80, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:35:36', 'Inicio session '),
(81, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:37:17', 'Inicio session '),
(82, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:41:54', 'Inicio session '),
(83, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:49:18', 'Inicio session '),
(84, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:50:09', 'Inicio session '),
(85, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:50:17', 'Inicio session '),
(86, 'Usuario : 20160000 Conexion : Password incorrecto', '2016-11-27 18:53:28', 'Inicio session '),
(87, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 18:53:35', 'Inicio session '),
(88, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 19:10:39', 'Inicio session '),
(89, 'Usuario : 20160003 Conexion : Exitosa -> Rol : 4', '2016-11-27 19:10:51', 'Inicio session '),
(90, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 19:11:27', 'Inicio session '),
(91, 'Usuario : 14 Conexion : No existe el usuario', '2016-11-27 19:12:09', 'Inicio session '),
(92, 'Usuario : 14 Conexion : No existe el usuario', '2016-11-27 19:12:13', 'Inicio session '),
(93, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 19:12:27', 'Inicio session '),
(94, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 19:33:24', 'Inicio session '),
(95, 'Usuario : 20160005 Conexion : Exitosa -> Rol : 6', '2016-11-27 19:37:53', 'Inicio session '),
(96, 'Usuario : 20160004 Conexion : Exitosa -> Rol : 5', '2016-11-27 19:39:14', 'Inicio session '),
(97, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 19:39:32', 'Inicio session '),
(98, 'Usuario : 20160000 Conexion : Password incorrecto', '2016-11-27 20:02:03', 'Inicio session '),
(99, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 20:02:10', 'Inicio session '),
(100, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 20:24:54', 'Inicio session '),
(101, 'Usuario : 20160003 Conexion : Exitosa -> Rol : 4', '2016-11-27 22:46:11', 'Inicio session '),
(102, 'Usuario : 20160000 Conexion : Password incorrecto', '2016-11-27 22:46:38', 'Inicio session '),
(103, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 22:46:44', 'Inicio session '),
(104, 'Usuario : 20160000 Conexion : Exitosa -> Rol : 1', '2016-11-27 23:49:40', 'Inicio session ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_LOGIN`
--

CREATE TABLE IF NOT EXISTS `TA_LOGIN` (
  `usu_id` int(10) unsigned NOT NULL,
  `log_passwo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_LOGIN`
--

INSERT INTO `TA_LOGIN` (`usu_id`, `log_passwo`) VALUES
(20160000, '20160000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_NOTA_COMENTARIO`
--

CREATE TABLE IF NOT EXISTS `TA_NOTA_COMENTARIO` (
  `cmr_id` int(11) NOT NULL,
  `nra_id` int(11) NOT NULL,
  `cmr_desc` varchar(200) NOT NULL,
  `cmr_autor_usu_id` int(11) NOT NULL,
  `cmr_resp_usu_id` int(11) DEFAULT NULL,
  `cmr_fecha_emision` date NOT NULL,
  `cmr_fecha_modif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_NOTA_PROMEDIO`
--

CREATE TABLE IF NOT EXISTS `TA_NOTA_PROMEDIO` (
  `prm_id` int(10) unsigned NOT NULL,
  `alu_id` int(10) NOT NULL,
  `cur_id` int(10) NOT NULL,
  `cic_id` int(10) NOT NULL,
  `prm_notafinal` double NOT NULL,
  `prm_estado` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_NOTA_PROMEDIO`
--

INSERT INTO `TA_NOTA_PROMEDIO` (`prm_id`, `alu_id`, `cur_id`, `cic_id`, `prm_notafinal`, `prm_estado`) VALUES
(1, 1, 1, 1, 10.5, 'Cerrado'),
(2, 2, 1, 2, 12, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_NOTA_RUBRICA`
--

CREATE TABLE IF NOT EXISTS `TA_NOTA_RUBRICA` (
  `nra_id` int(11) NOT NULL,
  `prm_id` int(11) NOT NULL,
  `rba_id` int(11) NOT NULL,
  `nra_semana` int(11) NOT NULL,
  `nra_promparcial` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_NOTA_RUBRICA`
--

INSERT INTO `TA_NOTA_RUBRICA` (`nra_id`, `prm_id`, `rba_id`, `nra_semana`, `nra_promparcial`) VALUES
(1, 2, 1, 1, 10),
(2, 2, 2, 1, 14),
(3, 2, 1, 2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_NOTA_RUBRO`
--

CREATE TABLE IF NOT EXISTS `TA_NOTA_RUBRO` (
  `nrb_id` int(11) NOT NULL,
  `nra_id` int(11) NOT NULL,
  `rbo_id` int(11) NOT NULL,
  `nrb_semana` int(11) NOT NULL,
  `nrb_puntaje` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_NOTA_RUBRO`
--

INSERT INTO `TA_NOTA_RUBRO` (`nrb_id`, `nra_id`, `rbo_id`, `nrb_semana`, `nrb_puntaje`) VALUES
(1, 1, 1, 1, 5),
(2, 1, 2, 1, 5),
(3, 1, 1, 2, 6),
(4, 1, 2, 2, 9),
(5, 2, 3, 1, 3),
(6, 2, 4, 1, 4),
(7, 2, 5, 1, 2),
(8, 2, 6, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_NOTICIA`
--

CREATE TABLE IF NOT EXISTS `TA_NOTICIA` (
  `not_id` int(10) unsigned NOT NULL,
  `not_titulo` varchar(100) DEFAULT NULL,
  `not_autor` varchar(100) NOT NULL,
  `not_fecha` varchar(30) DEFAULT NULL,
  `not_descr` text,
  `not_imagen` text,
  `not_linkNoticia` varchar(200) DEFAULT NULL,
  `not_enweb` int(1) DEFAULT '0',
  `not_enpanel` int(1) NOT NULL,
  `not_visible` int(1) NOT NULL,
  `not_dateModify` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_PERIODO`
--

CREATE TABLE IF NOT EXISTS `TA_PERIODO` (
  `per_id` int(11) NOT NULL,
  `per_semanas` int(11) NOT NULL,
  `per_sumapesos` int(11) NOT NULL,
  `per_fechaini` date NOT NULL,
  `per_fechafin` date NOT NULL,
  `cln_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `cic_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_PERIODO`
--

INSERT INTO `TA_PERIODO` (`per_id`, `per_semanas`, `per_sumapesos`, `per_fechaini`, `per_fechafin`, `cln_id`, `cur_id`, `cic_id`) VALUES
(1, 14, 10, '2016-02-01', '2016-02-29', 1, 1, 1),
(5, 15, 10, '2016-11-11', '2016-12-31', 1, 1, 2),
(7, 15, 10, '2016-11-12', '2016-12-31', 1, 2, 1),
(8, 14, 0, '2016-11-23', '2016-12-30', 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_ROL`
--

CREATE TABLE IF NOT EXISTS `TA_ROL` (
  `rol_id` int(10) unsigned NOT NULL,
  `rol_nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_ROL`
--

INSERT INTO `TA_ROL` (`rol_id`, `rol_nombre`) VALUES
(1, 'Administrador'),
(2, 'Alumno'),
(3, 'Voluntario'),
(4, 'Docente'),
(5, 'Jefe Practica'),
(6, 'Administrador de Contenidos'),
(7, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_RUBRICA`
--

CREATE TABLE IF NOT EXISTS `TA_RUBRICA` (
  `rba_id` int(10) unsigned NOT NULL,
  `rba_nombre` varchar(100) NOT NULL,
  `rba_peso` int(10) NOT NULL,
  `rba_maxpunt` int(10) NOT NULL,
  `per_id` int(11) NOT NULL,
  `cln_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_RUBRICA`
--

INSERT INTO `TA_RUBRICA` (`rba_id`, `rba_nombre`, `rba_peso`, `rba_maxpunt`, `per_id`, `cln_id`) VALUES
(1, 'Rúbrica de participación', 5, 20, 1, 1),
(2, 'Rúbrica de seguimiento de casos', 5, 40, 1, 1),
(7, 'Rúbrica de participación', 5, 20, 5, 1),
(8, 'Rúbrica de seguimiento de casos', 5, 40, 5, 1),
(13, 'Rúbrica de participación', 5, 20, 7, 1),
(14, 'Rúbrica de seguimiento de casos', 5, 40, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_RUBRO`
--

CREATE TABLE IF NOT EXISTS `TA_RUBRO` (
  `rbo_id` int(10) NOT NULL,
  `rbo_nombre` varchar(100) NOT NULL,
  `rba_id` int(10) NOT NULL,
  `rbo_maxpunt` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_RUBRO`
--

INSERT INTO `TA_RUBRO` (`rbo_id`, `rbo_nombre`, `rba_id`, `rbo_maxpunt`) VALUES
(1, 'Puntualidad', 1, 10),
(2, 'Participación y discusión', 1, 10),
(3, 'Relación abogado-caso', 2, 5),
(7, 'Puntualidad', 7, 10),
(8, 'Participación y discusión', 7, 10),
(9, 'Relación abogado-caso', 8, 5),
(10, 'Oralidad', 8, 5),
(11, 'Ejercicio profesional', 2, 5),
(12, 'Investigación y redacción', 8, 5),
(13, 'Oralidad', 2, 5),
(14, 'SAD', 2, 10),
(24, 'Puntualidad', 13, 10),
(25, 'Participación y discusión', 13, 10),
(26, 'Relación abogado-caso', 14, 5),
(27, 'Oralidad', 14, 5),
(28, 'test', 14, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_TAREA`
--

CREATE TABLE IF NOT EXISTS `TA_TAREA` (
  `tar_id` int(10) unsigned NOT NULL,
  `tar_estado` varchar(20) NOT NULL DEFAULT '',
  `tar_nombre` varchar(60) DEFAULT NULL,
  `tar_descri` text,
  `tar_fecven` date DEFAULT NULL,
  `tar_fecreg` date DEFAULT NULL,
  `cas_id` int(10) unsigned DEFAULT NULL,
  `tar_tipo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO` (
  `usu_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  `usu_usenam` varchar(20) DEFAULT NULL,
  `usu_passwd` varchar(100) DEFAULT NULL,
  `usu_activo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_USUARIO`
--

INSERT INTO `TA_USUARIO` (`usu_id`, `cln_id`, `rol_id`, `usu_usenam`, `usu_passwd`, `usu_activo`) VALUES
(1, 1, 1, '20160000', '0SepgCSkl8AgJnOgkbVkFdkSrXMQnNCXPHiHf84G/Ss=', 1),
(2, 1, 2, '20160001', 'KBqEOqsL5blQQao4zhsoI8pRkv26AoPuiq5tvP2akHg=', 1),
(3, 1, 3, '20160002', 'c8bZ/LWzONRPXqYHJk2xkfBapqZxxEbNYF6DdWgSM6w=', 1),
(4, 1, 4, '20160003', 'mqHle31WKpFrxN690s9vZGIaThC87QbqOXqCiS4w3rQ=', 1),
(5, 1, 5, '20160004', 'v3ps4+XuOoYpPCb2jZjPhBJ+5wWMbn7UzyAx0xLppEM=', 1),
(6, 1, 6, '20160005', '3E+6o8lfcYhFbAagyefmssDhhg6Gg1IEo4Nrm8jsOGk=', 1),
(7, 1, 7, '70000001', 'TpcETLw1O0Qz/jWK5Bv1GBUixaqLK4LoIXrNwCKwdbM=', 1),
(11, 1, 7, '76368822', 'MBgtSxshoi3JSThq7WuLsvc7lINvEAJH9HP9Nw2Jpp4=', 1),
(12, 1, 4, '20060000', 'PzFYCnjWwGRV5lMrjpj9VSH57UgsI+SvHbT57H4Wh5A=', 0);

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
-- Indices de la tabla `TA_ACTIVIDAD`
--
ALTER TABLE `TA_ACTIVIDAD`
  ADD PRIMARY KEY (`act_id`);

--
-- Indices de la tabla `TA_ALERTA`
--
ALTER TABLE `TA_ALERTA`
  ADD PRIMARY KEY (`ale_id`);

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
-- Indices de la tabla `TA_CICLO`
--
ALTER TABLE `TA_CICLO`
  ADD PRIMARY KEY (`cic_id`);

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
-- Indices de la tabla `TA_CURSO`
--
ALTER TABLE `TA_CURSO`
  ADD PRIMARY KEY (`cur_id`);

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
-- Indices de la tabla `TA_EVENTO`
--
ALTER TABLE `TA_EVENTO`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TA_LOG`
--
ALTER TABLE `TA_LOG`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TA_LOGIN`
--
ALTER TABLE `TA_LOGIN`
  ADD KEY `fk_login_usuario` (`usu_id`);

--
-- Indices de la tabla `TA_NOTA_COMENTARIO`
--
ALTER TABLE `TA_NOTA_COMENTARIO`
  ADD PRIMARY KEY (`cmr_id`);

--
-- Indices de la tabla `TA_NOTA_PROMEDIO`
--
ALTER TABLE `TA_NOTA_PROMEDIO`
  ADD PRIMARY KEY (`prm_id`);

--
-- Indices de la tabla `TA_NOTA_RUBRICA`
--
ALTER TABLE `TA_NOTA_RUBRICA`
  ADD PRIMARY KEY (`nra_id`);

--
-- Indices de la tabla `TA_NOTA_RUBRO`
--
ALTER TABLE `TA_NOTA_RUBRO`
  ADD PRIMARY KEY (`nrb_id`);

--
-- Indices de la tabla `TA_NOTICIA`
--
ALTER TABLE `TA_NOTICIA`
  ADD PRIMARY KEY (`not_id`);

--
-- Indices de la tabla `TA_PERIODO`
--
ALTER TABLE `TA_PERIODO`
  ADD PRIMARY KEY (`per_id`);

--
-- Indices de la tabla `TA_ROL`
--
ALTER TABLE `TA_ROL`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `TA_RUBRICA`
--
ALTER TABLE `TA_RUBRICA`
  ADD PRIMARY KEY (`rba_id`);

--
-- Indices de la tabla `TA_RUBRO`
--
ALTER TABLE `TA_RUBRO`
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
  ADD PRIMARY KEY (`usu_id`), ADD KEY `fk_usuario_clinica` (`cln_id`), ADD KEY `fk_usuario_rol` (`rol_id`);

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
-- AUTO_INCREMENT de la tabla `TA_ACTIVIDAD`
--
ALTER TABLE `TA_ACTIVIDAD`
  MODIFY `act_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT de la tabla `TA_ALERTA`
--
ALTER TABLE `TA_ALERTA`
  MODIFY `ale_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `TA_ALUMNO`
--
ALTER TABLE `TA_ALUMNO`
  MODIFY `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
  MODIFY `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `TA_CICLO`
--
ALTER TABLE `TA_CICLO`
  MODIFY `cic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
  MODIFY `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TA_CLINICA`
--
ALTER TABLE `TA_CLINICA`
  MODIFY `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
  MODIFY `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
  MODIFY `con_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `TA_CURSO`
--
ALTER TABLE `TA_CURSO`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_ESTADOCASO`
--
ALTER TABLE `TA_ESTADOCASO`
  MODIFY `estcas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `TA_EVALUADOR`
--
ALTER TABLE `TA_EVALUADOR`
  MODIFY `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TA_EVENTO`
--
ALTER TABLE `TA_EVENTO`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_LOG`
--
ALTER TABLE `TA_LOG`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT de la tabla `TA_NOTA_COMENTARIO`
--
ALTER TABLE `TA_NOTA_COMENTARIO`
  MODIFY `cmr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TA_NOTA_PROMEDIO`
--
ALTER TABLE `TA_NOTA_PROMEDIO`
  MODIFY `prm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_NOTA_RUBRICA`
--
ALTER TABLE `TA_NOTA_RUBRICA`
  MODIFY `nra_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_NOTA_RUBRO`
--
ALTER TABLE `TA_NOTA_RUBRO`
  MODIFY `nrb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `TA_NOTICIA`
--
ALTER TABLE `TA_NOTICIA`
  MODIFY `not_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TA_PERIODO`
--
ALTER TABLE `TA_PERIODO`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `TA_ROL`
--
ALTER TABLE `TA_ROL`
  MODIFY `rol_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `TA_RUBRICA`
--
ALTER TABLE `TA_RUBRICA`
  MODIFY `rba_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `TA_RUBRO`
--
ALTER TABLE `TA_RUBRO`
  MODIFY `rbo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
  MODIFY `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
  MODIFY `usu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
ADD CONSTRAINT `fk_comentario_tarea` FOREIGN KEY (`tar_id`) REFERENCES `TA_TAREA` (`tar_id`),
ADD CONSTRAINT `fk_comentario_usuario` FOREIGN KEY (`usu_id`) REFERENCES `TA_USUARIO` (`usu_id`);

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
ADD CONSTRAINT `fk_usuario_clinica` FOREIGN KEY (`cln_id`) REFERENCES `TA_CLINICA` (`cln_id`),
ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`rol_id`) REFERENCES `TA_ROL` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
