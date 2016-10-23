
SHOW VARIABLES WHERE Variable_name = 'port';
select @@hostname;
show variables where Variable_name like '%host%';

DROP DATABASE DB_CLINICA;
CREATE DATABASE DB_CLINICA;
USE DB_CLINICA;

# Dump of table TA_CLINICA
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CLINICA`;

CREATE TABLE `TA_CLINICA` (
  `cln_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cln_nombre` varchar(60) NOT NULL,
  `cln_urlfbk` varchar(100) NOT NULL,
  `cln_urltwi` varchar(100) NOT NULL,
  `cln_urlgoo` varchar(100) NOT NULL,
  `cln_descri` text NOT NULL,
  `cln_direcc` text NOT NULL,
  `cln_mision` text NOT NULL,
  `cln_vision` text NOT NULL,
  PRIMARY KEY (`cln_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


# Dump of table TA_CONTACTO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CONTACTO`;

CREATE TABLE `TA_CONTACTO` (
  `con_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cln_id` int(10) unsigned DEFAULT NULL,
  `con_tipcon` char(1) NOT NULL,
  `con_nombre` varchar(40) NOT NULL,
  `con_nrotel` varchar(40) NOT NULL,
  `con_direcc` varchar(50) NOT NULL,
  `con_dirweb` varchar(40) NOT NULL,
  `con_correo` varchar(40) NOT NULL,
  PRIMARY KEY (`con_id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE TA_CONTACTO
    ADD CONSTRAINT fk_contacto_clinica
    FOREIGN KEY(cln_id)
    REFERENCES TA_CLINICA(cln_id);




# Dump of table TA_CLIENTE
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_CLIENTE`;

CREATE TABLE `TA_CLIENTE` (
  `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usu_id` int(10) unsigned NOT NULL,
  `cli_pobvul` text NOT NULL,
  `cli_numhij` int(1) NOT NULL,
  `cli_nivedu` varchar(30) NOT NULL,
  `cli_ocupac` varchar(30) NOT NULL,
  `cli_direcc` varchar(40) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `TA_CASO`;

CREATE TABLE `TA_CASO` (
  `cas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usu_id` int(10) unsigned NOT NULL,
  `cli_id` int(10) unsigned NOT NULL,
  `estcas_id` int(10) unsigned NOT NULL,
  `cas_fecate` date NOT NULL,
  `cas_usureg` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cas_id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 ALTER TABLE TA_CASO
    ADD CONSTRAINT fk_caso_cliente
    FOREIGN KEY(cli_id)
    REFERENCES TA_CLIENTE(cli_id);


DROP TABLE IF EXISTS `TA_ESTADOCASO`;

CREATE TABLE `TA_ESTADOCASO` (
  `estcas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estcas_detalle` varchar(40) NOT NULL,
   PRIMARY KEY (`estcas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




 ALTER TABLE TA_CASO
    ADD CONSTRAINT fk_caso_estadocaso
    FOREIGN KEY(estcas_id)
    REFERENCES TA_ESTADOCASO(estcas_id);




DROP TABLE IF EXISTS `TA_CONSULTA`;

CREATE TABLE `TA_CONSULTA` (
  `cst_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cas_id` int(10) unsigned NOT NULL ,
  `cst_titulo` varchar(40) NOT NULL,
  `cst_descri` text NOT NULL,
  `cst_objeti` text NOT NULL,
  `cst_result` text NOT NULL,
   PRIMARY KEY (`cst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


 ALTER TABLE TA_CONSULTA
    ADD CONSTRAINT fk_consulta_caso
    FOREIGN KEY(cas_id)
    REFERENCES TA_CASO(cas_id);


# Dump of table TA_USUARIO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_USUARIO`;

CREATE TABLE `TA_USUARIO` (
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
  `usu_imagen` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


# Dump of table TA_ALUMNO
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_ALUMNO`;

CREATE TABLE `TA_ALUMNO` (
  `alu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alu_codpuc` varchar(8) NOT NULL,
  `alu_volunt` int(1) NOT NULL,
  `usu_id` int(10) NOT NULL,
  PRIMARY KEY (`alu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE TA_ALUMNO 
    ADD CONSTRAINT fk_alumno_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id);


# Dump of table TA_EVALUADOR
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_EVALUADOR`;

CREATE TABLE `TA_EVALUADOR` (
  `eva_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usu_id` int(10) unsigned NOT NULL,
  `eva_codpuc` varchar(8) NOT NULL,
  `eva_tipeva` char(1) NOT NULL,
   PRIMARY KEY (`eva_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE TA_EVALUADOR 
    ADD CONSTRAINT fk_evaluador_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id);


DROP TABLE IF EXISTS `TA_USUARIO_CASO`;

CREATE TABLE `TA_USUARIO_CASO` (
  `cas_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


 ALTER TABLE TA_USUARIO_CASO
    ADD CONSTRAINT fk_usucaso_caso
    FOREIGN KEY(cas_id)
    REFERENCES TA_CASO(cas_id),
  ADD CONSTRAINT fk_usucaso_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id);


   ALTER TABLE TA_USUARIO
    ADD CONSTRAINT fk_usuario_clinica
    FOREIGN KEY(cln_id)
    REFERENCES TA_CLINICA(cln_id);



DROP TABLE IF EXISTS `TA_ETAPA`;

CREATE TABLE `TA_ETAPA` (
  `eta_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cst_id` int(10) unsigned NOT NULL,
  `eta_tipeta` char(1) NOT NULL,
  `eta_entida` varchar(60) NOT NULL,
  `eta_descri` text NOT NULL,
  
  PRIMARY KEY (`eta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


 ALTER TABLE TA_ETAPA
    ADD CONSTRAINT fk_etapa_consulta
    FOREIGN KEY(cst_id)
    REFERENCES TA_CONSULTA(cst_id);



 DROP TABLE IF EXISTS `TA_TAREA`;

CREATE TABLE `TA_TAREA` (
  `tar_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eta_id` int(10) unsigned NOT NULL,
  `tar_estado`  int(1) NOT NULL,
  `tar_nombre` varchar(60) NOT NULL,
  `tar_descri` text NOT NULL,
  `tar_fecven` date NOT NULL,
  `tar_fecreg` date NOT NULL,
  
  PRIMARY KEY (`tar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 ALTER TABLE TA_TAREA
    ADD CONSTRAINT fk_tarea_etapa
    FOREIGN KEY(eta_id)
    REFERENCES TA_ETAPA(eta_id);


DROP TABLE IF EXISTS `TA_USUARIO_TAREA`;

CREATE TABLE `TA_USUARIO_TAREA` (
  `usu_id` int(10) unsigned NOT NULL,
  `tar_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

     ALTER TABLE TA_USUARIO_TAREA
    ADD CONSTRAINT fk_usutarea_tarea
    FOREIGN KEY(tar_id)
    REFERENCES TA_TAREA(tar_id),
  ADD CONSTRAINT fk_usutarea_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id);

DROP TABLE IF EXISTS `TA_COMENTARIO`;

CREATE TABLE `TA_COMENTARIO` (
  `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tar_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `com_mensaj` text NOT NULL,  
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE TA_COMENTARIO 
    ADD CONSTRAINT fk_comentario_tarea
    FOREIGN KEY(tar_id)
    REFERENCES TA_TAREA(tar_id);

ALTER TABLE TA_COMENTARIO 
    ADD CONSTRAINT fk_comentario_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id);
    


 ALTER TABLE TA_CLIENTE
    ADD CONSTRAINT fk_cliente_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id)



# Dump of table TA_LOGIN
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TA_LOGIN`;

CREATE TABLE `TA_LOGIN` (
  `usu_id` int(10) unsigned NOT NULL,
  `log_passwo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


  ALTER TABLE TA_LOGIN 
    ADD CONSTRAINT fk_login_usuario
    FOREIGN KEY(usu_id)
    REFERENCES TA_USUARIO(usu_id);


 




