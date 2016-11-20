-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2016 a las 23:34:05
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_ALUMNO`
--

INSERT INTO `TA_ALUMNO` (`alu_id`, `usu_id`, `alu_codpuc`, `alu_volunt`, `alu_nrodoc`, `alu_correo`, `alu_nombre`) VALUES
(1, 1, '20160000', 0, '28389392', 'chiara@pucp.pe', 'Chiara'),
(2, 2, '20160001', 0, '72921408', 'karina.alfaro@pucp.pe', 'Karina Alfaro '),
(3, 3, '20160002', 1, '73782832', 'victorduval@gmail.com', 'Victor Duval'),
(4, 4, '20160003', 0, '73782832', 'isipiran@pucp.pe', 'Ivan Sipiran'),
(5, 5, '20160004', 0, '40399234', 'marco.rojas@pucp.pe', 'Marco Rojas Perez'),
(6, 6, '20160005', 0, '28939123', 'contenidos@pucp.pe', 'Contenidos'),
(7, 7, '20160006', 0, '38999293', 'daniela.florez@hotmail.com', 'Daniela Salazar Flores'),
(8, 9, '20166979', 1, '', '', 'christian');

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
(2, 2, 2, 1, 1, '2016-10-28', 'Duplicidad de registro de nacionalidad', '', NULL),
(3, 2, 2, 6, 3, '2016-11-11', 'Hola', 'Testing', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLIENTE`
--

INSERT INTO `TA_CLIENTE` (`cli_id`, `usu_id`, `cli_pobvul`, `cli_numhij`, `cli_nivedu`, `cli_ocupac`, `cli_direcc`, `cli_genero`, `cli_otrdep`, `cli_nombre`, `cli_nrodoc`, `cli_telno1`, `cli_telno2`, `cli_correo`, `cli_fecnac`) VALUES
(1, 8, 'Anciano', 5, 'Secundaria incompleta', 'Estudiante', 'Pasaje Los Sauces Mz. 1 Lt. 1 Santa Fe, Totorita', 'f', 'N/A', 'Daniela Salazar Flores', '26738823', '93829932', '392992', 'daniela.florez@hotmail.com', '1958-03-12'),
(2, 8, 'Discapacitado', 1, 'Secundaria incompleta', 'Comerciante', 'Calle Tiahuanaco 196, Faucett', 'm', NULL, 'Ruber Reinoso Campoverde', '48282993', '01454345', '', 'rcampoverde@gmail.com', '2016-07-20'),
(3, 8, NULL, 5, 'Secundaria completa', 'Profesor', 'Av. los jirasoles 789', 'm', NULL, 'Marco Rojas Huayanay', '67547859', '996685154', '', '', '1979-08-21');

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
  `usu_id` int(10) unsigned DEFAULT NULL,
  `com_mensaj` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_COMENTARIO`
--

INSERT INTO `TA_COMENTARIO` (`com_id`, `tar_id`, `usu_id`, `com_mensaj`) VALUES
(1, 1, 1, 'comentario1');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(16, 1, 'i', 'PUCP', '', '', '', '');

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
  `eva_codpuc` varchar(8) NOT NULL,
  `eva_tipeva` char(1) NOT NULL DEFAULT '',
  `eva_nombre` varchar(40) DEFAULT NULL,
  `eva_correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_EVALUADOR`
--

INSERT INTO `TA_EVALUADOR` (`eva_id`, `usu_id`, `eva_codpuc`, `eva_tipeva`, `eva_nombre`, `eva_correo`) VALUES
(1, 8, '20160003', 'd', 'Ivan Sipiran', 'isipiran@pucp.pe'),
(2, 8, '20160004', 'j', 'Marco Rojas Perez', 'marco.rojas@pucp.pe'),
(3, 8, '19952036', 'd', 'Luis Torres Paz', 'luis.torres@pucp.edu.pe');

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
(2, 1, 1, 2, 12, 'Pendiente');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_NOTA_RUBRO`
--

INSERT INTO `TA_NOTA_RUBRO` (`nrb_id`, `nra_id`, `rbo_id`, `nrb_semana`, `nrb_puntaje`) VALUES
(1, 1, 1, 1, 5),
(2, 1, 2, 1, 5),
(3, 1, 1, 2, 6),
(4, 1, 2, 2, 9);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_PERIODO`
--

INSERT INTO `TA_PERIODO` (`per_id`, `per_semanas`, `per_sumapesos`, `per_fechaini`, `per_fechafin`, `cln_id`, `cur_id`, `cic_id`) VALUES
(1, 14, 10, '2016-02-01', '2016-02-29', 1, 1, 1),
(5, 15, 10, '2016-11-11', '2016-12-31', 1, 1, 2),
(7, 15, 10, '2016-11-12', '2016-12-31', 1, 2, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(11, 'Ejercicio profesional', 8, 5),
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
  `cas_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_TAREA`
--

INSERT INTO `TA_TAREA` (`tar_id`, `tar_estado`, `tar_nombre`, `tar_descri`, `tar_fecven`, `tar_fecreg`, `cas_id`) VALUES
(1, 'pendiente', 'Tarea 1', 'Tarea 1', NULL, NULL, 1),
(2, 'backlog', 'Tarea 1', 'Descripcion de ', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO` (
  `usu_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  `usu_passwd` varchar(40) DEFAULT NULL,
  `usu_activo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_USUARIO`
--

INSERT INTO `TA_USUARIO` (`usu_id`, `cln_id`, `rol_id`, `usu_passwd`, `usu_activo`) VALUES
(1, 1, 1, '20160000', 1),
(2, 1, 2, '20160001', 1),
(3, 1, 3, '20160002', 1),
(4, 1, 4, '20160003', 0),
(5, 1, 5, '20160004', 0),
(6, 1, 6, '20160005', 0),
(7, 1, 7, '20160006', 0),
(8, 1, 1, NULL, 1),
(9, 1, 1, NULL, 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_alerta`
--

CREATE TABLE IF NOT EXISTS `ta_alerta` (
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

--
-- Volcado de datos para la tabla `ta_alerta`
--

INSERT INTO `ta_alerta` (`ale_id`, `ale_titulo`, `ale_cx`, `ale_cy`, `ale_estado`, `ale_descrip`, `ale_fecreg`, `ale_fecven`, `ale_incentivo`, `ale_direccion`) VALUES
(13, 'Alerta 1', '-11.996338401936226', ' -76.387939453125', 'registrada', NULL, NULL, NULL, NULL, NULL);

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
-- Indices de la tabla `ta_alerta`
--
ALTER TABLE `ta_alerta`
  ADD PRIMARY KEY (`ale_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `TA_ALUMNO`
--
ALTER TABLE `TA_ALUMNO`
  MODIFY `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
  MODIFY `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_CICLO`
--
ALTER TABLE `TA_CICLO`
  MODIFY `cic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
  MODIFY `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_CLINICA`
--
ALTER TABLE `TA_CLINICA`
  MODIFY `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
  MODIFY `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
  MODIFY `con_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
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
  MODIFY `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `nrb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TA_PERIODO`
--
ALTER TABLE `TA_PERIODO`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
  MODIFY `rbo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
  MODIFY `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
  MODIFY `usu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ta_alerta`
--
ALTER TABLE `ta_alerta`
  MODIFY `ale_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_ALUMNO`
--

INSERT INTO `TA_ALUMNO` (`alu_id`, `usu_id`, `alu_codpuc`, `alu_volunt`, `alu_nrodoc`, `alu_correo`, `alu_nombre`) VALUES
(1, 1, '20160000', 0, '28389392', 'chiara@pucp.pe', 'Chiara'),
(2, 2, '20160001', 0, '72921408', 'karina.alfaro@pucp.pe', 'Karina Alfaro '),
(3, 3, '20160002', 1, '73782832', 'victorduval@gmail.com', 'Victor Duval'),
(4, 4, '20160003', 0, '73782832', 'isipiran@pucp.pe', 'Ivan Sipiran'),
(5, 5, '20160004', 0, '40399234', 'marco.rojas@pucp.pe', 'Marco Rojas Perez'),
(6, 6, '20160005', 0, '28939123', 'contenidos@pucp.pe', 'Contenidos'),
(7, 7, '20160006', 0, '38999293', 'daniela.florez@hotmail.com', 'Daniela Salazar Flores'),
(8, 9, '20166979', 1, '', '', 'christian');

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
(2, 2, 2, 1, 1, '2016-10-28', 'Duplicidad de registro de nacionalidad', '', NULL),
(3, 2, 2, 6, 3, '2016-11-11', 'Hola', 'Testing', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_CLIENTE`
--

INSERT INTO `TA_CLIENTE` (`cli_id`, `usu_id`, `cli_pobvul`, `cli_numhij`, `cli_nivedu`, `cli_ocupac`, `cli_direcc`, `cli_genero`, `cli_otrdep`, `cli_nombre`, `cli_nrodoc`, `cli_telno1`, `cli_telno2`, `cli_correo`, `cli_fecnac`) VALUES
(1, 8, 'Anciano', 5, 'Secundaria incompleta', 'Estudiante', 'Pasaje Los Sauces Mz. 1 Lt. 1 Santa Fe, Totorita', 'f', 'N/A', 'Daniela Salazar Flores', '26738823', '93829932', '392992', 'daniela.florez@hotmail.com', '1958-03-12'),
(2, 8, 'Discapacitado', 1, 'Secundaria incompleta', 'Comerciante', 'Calle Tiahuanaco 196, Faucett', 'm', NULL, 'Ruber Reinoso Campoverde', '48282993', '01454345', '', 'rcampoverde@gmail.com', '2016-07-20'),
(3, 8, NULL, 5, 'Secundaria completa', 'Profesor', 'Av. los jirasoles 789', 'm', NULL, 'Marco Rojas Huayanay', '67547859', '996685154', '', '', '1979-08-21');

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
  `usu_id` int(10) unsigned DEFAULT NULL,
  `com_mensaj` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_COMENTARIO`
--

INSERT INTO `TA_COMENTARIO` (`com_id`, `tar_id`, `usu_id`, `com_mensaj`) VALUES
(1, 1, 1, 'comentario1');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(16, 1, 'i', 'PUCP', '', '', '', '');

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
  `eva_codpuc` varchar(8) NOT NULL,
  `eva_tipeva` char(1) NOT NULL DEFAULT '',
  `eva_nombre` varchar(40) DEFAULT NULL,
  `eva_correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_EVALUADOR`
--

INSERT INTO `TA_EVALUADOR` (`eva_id`, `usu_id`, `eva_codpuc`, `eva_tipeva`, `eva_nombre`, `eva_correo`) VALUES
(1, 8, '20160003', 'd', 'Ivan Sipiran', 'isipiran@pucp.pe'),
(2, 8, '20160004', 'j', 'Marco Rojas Perez', 'marco.rojas@pucp.pe'),
(3, 8, '19952036', 'd', 'Luis Torres Paz', 'luis.torres@pucp.edu.pe');

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
(2, 1, 1, 2, 12, 'Pendiente');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_NOTA_RUBRO`
--

INSERT INTO `TA_NOTA_RUBRO` (`nrb_id`, `nra_id`, `rbo_id`, `nrb_semana`, `nrb_puntaje`) VALUES
(1, 1, 1, 1, 5),
(2, 1, 2, 1, 5),
(3, 1, 1, 2, 6),
(4, 1, 2, 2, 9);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_PERIODO`
--

INSERT INTO `TA_PERIODO` (`per_id`, `per_semanas`, `per_sumapesos`, `per_fechaini`, `per_fechafin`, `cln_id`, `cur_id`, `cic_id`) VALUES
(1, 14, 10, '2016-02-01', '2016-02-29', 1, 1, 1),
(5, 15, 10, '2016-11-11', '2016-12-31', 1, 1, 2),
(7, 15, 10, '2016-11-12', '2016-12-31', 1, 2, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(11, 'Ejercicio profesional', 8, 5),
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
  `cas_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_TAREA`
--

INSERT INTO `TA_TAREA` (`tar_id`, `tar_estado`, `tar_nombre`, `tar_descri`, `tar_fecven`, `tar_fecreg`, `cas_id`) VALUES
(1, 'pendiente', 'Tarea 1', 'Tarea 1', NULL, NULL, 1),
(2, 'backlog', 'Tarea 1', 'Descripcion de ', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TA_USUARIO`
--

CREATE TABLE IF NOT EXISTS `TA_USUARIO` (
  `usu_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  `usu_passwd` varchar(40) DEFAULT NULL,
  `usu_activo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TA_USUARIO`
--

INSERT INTO `TA_USUARIO` (`usu_id`, `cln_id`, `rol_id`, `usu_passwd`, `usu_activo`) VALUES
(1, 1, 1, '20160000', 1),
(2, 1, 2, '20160001', 1),
(3, 1, 3, '20160002', 1),
(4, 1, 4, '20160003', 0),
(5, 1, 5, '20160004', 0),
(6, 1, 6, '20160005', 0),
(7, 1, 7, '20160006', 0),
(8, 1, 1, NULL, 1),
(9, 1, 1, NULL, 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ta_alerta`
--

CREATE TABLE IF NOT EXISTS `ta_alerta` (
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

--
-- Volcado de datos para la tabla `ta_alerta`
--

INSERT INTO `ta_alerta` (`ale_id`, `ale_titulo`, `ale_cx`, `ale_cy`, `ale_estado`, `ale_descrip`, `ale_fecreg`, `ale_fecven`, `ale_incentivo`, `ale_direccion`) VALUES
(13, 'Alerta 1', '-11.996338401936226', ' -76.387939453125', 'registrada', NULL, NULL, NULL, NULL, NULL);

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
-- Indices de la tabla `ta_alerta`
--
ALTER TABLE `ta_alerta`
  ADD PRIMARY KEY (`ale_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `TA_ALUMNO`
--
ALTER TABLE `TA_ALUMNO`
  MODIFY `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `TA_CASO`
--
ALTER TABLE `TA_CASO`
  MODIFY `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_CICLO`
--
ALTER TABLE `TA_CICLO`
  MODIFY `cic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_CLIENTE`
--
ALTER TABLE `TA_CLIENTE`
  MODIFY `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TA_CLINICA`
--
ALTER TABLE `TA_CLINICA`
  MODIFY `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_COMENTARIO`
--
ALTER TABLE `TA_COMENTARIO`
  MODIFY `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TA_CONTACTO`
--
ALTER TABLE `TA_CONTACTO`
  MODIFY `con_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
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
  MODIFY `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `nrb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TA_PERIODO`
--
ALTER TABLE `TA_PERIODO`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
  MODIFY `rbo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `TA_TAREA`
--
ALTER TABLE `TA_TAREA`
  MODIFY `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TA_USUARIO`
--
ALTER TABLE `TA_USUARIO`
  MODIFY `usu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ta_alerta`
--
ALTER TABLE `ta_alerta`
  MODIFY `ale_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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
