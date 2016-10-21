# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: DB_CLINICA
# Generation Time: 2016-10-21 21:29:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table TA_ALUMNO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_ALUMNO`;

CREATE TABLE `TA_ALUMNO` (
  `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alu_codpuc` varchar(8) NOT NULL,
  `alu_volunt` int(1) NOT NULL,
  `usu_id` int(10) NOT NULL,
  PRIMARY KEY (`alu_id`),
  KEY `fk_alumno_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_CASO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CASO`;

CREATE TABLE `TA_CASO` (
  `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usu_id` int(10) NOT NULL,
  `cst_id` int(10) unsigned NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `cli_id` int(10) unsigned NOT NULL,
  `tipcas_id` int(10) unsigned NOT NULL,
  `cas_estado` varchar(60) NOT NULL,
  `cas_fecate` varchar(60) NOT NULL,
  PRIMARY KEY (`cas_id`),
  KEY `fk_caso_usuario` (`usu_id`),
  KEY `fk_caso_consulta` (`cst_id`),
  KEY `fk_caso_cliente` (`cli_id`),
  KEY `fk_caso_clinica` (`cln_id`),
  KEY `fk_caso_tipocaso` (`tipcas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_CLIENTE
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CLIENTE`;

CREATE TABLE `TA_CLIENTE` (
  `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usu_id` int(10) NOT NULL,
  `cli_pobvul` text NOT NULL,
  `cli_numhij` int(1) NOT NULL,
  `cli_nivedu` varchar(30) NOT NULL,
  `cli_ocupac` varchar(30) NOT NULL,
  `cli_direcc` varchar(40) NOT NULL,
  PRIMARY KEY (`cli_id`),
  KEY `fk_cliente_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_CLINICA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CLINICA`;

CREATE TABLE `TA_CLINICA` (
  `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cln_nombre` varchar(60) NOT NULL,
  `cln_descri` text NOT NULL,
  PRIMARY KEY (`cln_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `TA_CLINICA` WRITE;
/*!40000 ALTER TABLE `TA_CLINICA` DISABLE KEYS */;

INSERT INTO `TA_CLINICA` (`cln_id`, `cln_nombre`, `cln_descri`)
VALUES
	(1,'Identidad','Clinica identidad pucp');

/*!40000 ALTER TABLE `TA_CLINICA` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table TA_COLABORADOR
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_COLABORADOR`;

CREATE TABLE `TA_COLABORADOR` (
  `col_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doc_id` int(10) unsigned DEFAULT NULL,
  `col_correo` varchar(60) NOT NULL,
  `col_nombre` varchar(60) NOT NULL,
  `col_nrotel` varchar(30) NOT NULL,
  `col_mensaj` text NOT NULL,
  PRIMARY KEY (`col_id`),
  KEY `fk_colaborador_documuento` (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_CONSULTA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CONSULTA`;

CREATE TABLE `TA_CONSULTA` (
  `cst_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cst_titulo` varchar(40) NOT NULL,
  `cst_fecha` date NOT NULL,
  `cst_descrip` text NOT NULL,
  `cst_objeti` text NOT NULL,
  `cst_resultado` text NOT NULL,
  PRIMARY KEY (`cst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_CONTACTO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CONTACTO`;

CREATE TABLE `TA_CONTACTO` (
  `con_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cln_id` int(10) unsigned DEFAULT NULL,
  `usu_id` int(10) NOT NULL,
  `con_imagen` varchar(40) NOT NULL,
  `con_tipcon` char(1) NOT NULL,
  `con_nombre` varchar(30) NOT NULL,
  `con_correo` varchar(30) NOT NULL,
  `con_nrotel` varchar(20) NOT NULL,
  `con_descri` text NOT NULL,
  PRIMARY KEY (`con_id`),
  KEY `fk_contacto_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `TA_CONTACTO` WRITE;
/*!40000 ALTER TABLE `TA_CONTACTO` DISABLE KEYS */;

INSERT INTO `TA_CONTACTO` (`con_id`, `cln_id`, `usu_id`, `con_imagen`, `con_tipcon`, `con_nombre`, `con_correo`, `con_nrotel`, `con_descri`)
VALUES
	(1,1,1,'image.jpg','p','Cristhian  Rojas','cristhianr.gomez@gmail.com','957407321','Arequipa'),
	(2,1,1,'image.jpg','p','Juan  Perez','juan.perez@gmail.com','957407217','Av EEUU nro 2003'),
	(3,1,1,'image.jpg','p','Diego  Ramirez','diego.ramiez@gmail.com','938492923','calle jose luis'),
	(4,1,1,'ima.jpg','i','Cristhianrg','cristhia@gmail.com','123456789','doctoc cca'),
	(5,NULL,1,'contacto.jpg','p','RenzoAcosta','renzo@renzo.com','957407321','Arequipa');

/*!40000 ALTER TABLE `TA_CONTACTO` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table TA_DOCUMENTO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_DOCUMENTO`;

CREATE TABLE `TA_DOCUMENTO` (
  `doc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cst_id` int(10) unsigned DEFAULT NULL,
  `doc_nombre` varchar(60) NOT NULL,
  `doc_tipodo` varchar(30) NOT NULL,
  `doc_encont` int(1) NOT NULL,
  `doc_descri` text NOT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `fk_documento_consulta` (`cst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_ESTADOCASO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_ESTADOCASO`;

CREATE TABLE `TA_ESTADOCASO` (
  `tipcas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipcas_detalle` varchar(40) NOT NULL,
  PRIMARY KEY (`tipcas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_ETAPA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_ETAPA`;

CREATE TABLE `TA_ETAPA` (
  `eta_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cst_id` int(10) unsigned NOT NULL,
  `eta_entida` varchar(60) NOT NULL,
  `eta_descri` text NOT NULL,
  PRIMARY KEY (`eta_id`),
  KEY `fk_etapa_consulta` (`cst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_EVALUADOR
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_EVALUADOR`;

CREATE TABLE `TA_EVALUADOR` (
  `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eva_codpuc` varchar(8) NOT NULL,
  `usu_id` int(10) NOT NULL,
  PRIMARY KEY (`eva_id`),
  KEY `fk_evaluador_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_EVENTO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_EVENTO`;

CREATE TABLE `TA_EVENTO` (
  `eve_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cln_id` int(10) unsigned DEFAULT NULL,
  `eve_titulo` varchar(60) NOT NULL,
  `eve_decrip` text NOT NULL,
  `eve_imagen` varchar(60) NOT NULL,
  `eve_fechae` date NOT NULL,
  PRIMARY KEY (`eve_id`),
  KEY `fk_evento_clinica` (`cln_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_INSTITUCION
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_INSTITUCION`;

CREATE TABLE `TA_INSTITUCION` (
  `con_id` int(10) unsigned NOT NULL,
  `ins_direcc` varchar(50) NOT NULL,
  `ins_pagweb` varchar(40) NOT NULL,
  KEY `fk_institucion_contacto` (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_LOGIN
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_LOGIN`;

CREATE TABLE `TA_LOGIN` (
  `usu_id` int(10) NOT NULL,
  `log_passwo` varchar(60) NOT NULL,
  KEY `fk_login_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_NOTICIA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_NOTICIA`;

CREATE TABLE `TA_NOTICIA` (
  `not_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cln_id` int(10) unsigned DEFAULT NULL,
  `not_titulo` varchar(60) NOT NULL,
  `not_decrip` text NOT NULL,
  `not_imagen` varchar(60) NOT NULL,
  PRIMARY KEY (`not_id`),
  KEY `fk_noticia_clinica` (`cln_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `TA_NOTICIA` WRITE;
/*!40000 ALTER TABLE `TA_NOTICIA` DISABLE KEYS */;

INSERT INTO `TA_NOTICIA` (`not_id`, `cln_id`, `not_titulo`, `not_decrip`, `not_imagen`)
VALUES
	(1,1,'Noticia 1','Noticia 1 descripcion\n','/img/not1.png');

/*!40000 ALTER TABLE `TA_NOTICIA` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table TA_PERSONA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_PERSONA`;

CREATE TABLE `TA_PERSONA` (
  `con_id` int(10) unsigned NOT NULL,
  `per_apelli` varchar(40) NOT NULL,
  `per_cargop` varchar(40) NOT NULL,
  KEY `fk_persona_contacto` (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_PRIVILEGIO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_PRIVILEGIO`;

CREATE TABLE `TA_PRIVILEGIO` (
  `pri_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rol_id` int(10) unsigned DEFAULT NULL,
  `pri_tipopr` varchar(10) NOT NULL,
  `rol_decrip` text NOT NULL,
  PRIMARY KEY (`pri_id`),
  KEY `fk_priveligio_rol` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_ROL
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_ROL`;

CREATE TABLE `TA_ROL` (
  `rol_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rol_nivela` int(10) DEFAULT NULL,
  `rol_nombre` varchar(60) NOT NULL,
  `rol_decrip` text NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_TAREA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_TAREA`;

CREATE TABLE `TA_TAREA` (
  `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eta_id` int(10) unsigned NOT NULL,
  `alu_id` int(10) unsigned NOT NULL,
  `cli_id` int(10) unsigned NOT NULL,
  `tar_estado` int(1) NOT NULL,
  `tar_nombre` varchar(60) NOT NULL,
  `tar_fecreg` date NOT NULL,
  `tar_descri` text NOT NULL,
  `tar_fecven` date NOT NULL,
  PRIMARY KEY (`tar_id`),
  KEY `fk_tarea_etapa` (`eta_id`),
  KEY `fk_tarea_alumno` (`alu_id`),
  KEY `fk_tarea_cliente` (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table TA_USUARIO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_USUARIO`;

CREATE TABLE `TA_USUARIO` (
  `usu_id` int(10) NOT NULL,
  `cln_id` int(10) unsigned NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  `usu_nrodoc` varchar(20) NOT NULL,
  `usu_nombre` varchar(60) NOT NULL,
  `usu_appate` varchar(60) NOT NULL,
  `usu_apmate` varchar(60) DEFAULT NULL,
  `usu_fecnac` date NOT NULL,
  `usu_telno1` varchar(15) DEFAULT NULL,
  `usu_telno2` varchar(15) DEFAULT NULL,
  `usu_correo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `fk_usuario_clinica` (`cln_id`),
  KEY `fk_usuario_rol` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `TA_USUARIO` WRITE;
/*!40000 ALTER TABLE `TA_USUARIO` DISABLE KEYS */;

INSERT INTO `TA_USUARIO` (`usu_id`, `cln_id`, `rol_id`, `usu_nrodoc`, `usu_nombre`, `usu_appate`, `usu_apmate`, `usu_fecnac`, `usu_telno1`, `usu_telno2`, `usu_correo`)
VALUES
	(1,1,1,'73612755','Cristian','rojas','gomez','0000-00-00',NULL,NULL,NULL);

/*!40000 ALTER TABLE `TA_USUARIO` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table TA_USUARIO_CASO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_USUARIO_CASO`;

CREATE TABLE `TA_USUARIO_CASO` (
  `cas_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) NOT NULL,
  `usucas_fecasi` date NOT NULL,
  KEY `fk_usucaso_caso` (`cas_id`),
  KEY `fk_usucaso_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
