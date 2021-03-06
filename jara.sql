-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.21 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para jara
DROP DATABASE IF EXISTS `jara`;
CREATE DATABASE IF NOT EXISTS `jara` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jara`;

-- Volcando estructura para tabla jara.cano
DROP TABLE IF EXISTS `cano`;
CREATE TABLE IF NOT EXISTS `cano` (
  `cvano` int(10) NOT NULL AUTO_INCREMENT,
  `dsano` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvano`)
) ENGINE=MyISAM AUTO_INCREMENT=2021 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cano: 21 rows
DELETE FROM `cano`;
/*!40000 ALTER TABLE `cano` DISABLE KEYS */;
INSERT INTO `cano` (`cvano`, `dsano`) VALUES
	(2000, '2000'),
	(2001, '2001'),
	(2002, '2002'),
	(2003, '2003'),
	(2004, '2004'),
	(2005, '2005'),
	(2006, '2006'),
	(2007, '2007'),
	(2008, '2008'),
	(2009, '2009'),
	(2010, '2010'),
	(2011, '2011'),
	(2012, '2012'),
	(2013, '2013'),
	(2014, '2014'),
	(2015, '2015'),
	(2016, '2016'),
	(2017, '2017'),
	(2018, '2018'),
	(2019, '2019'),
	(2020, '2020');
/*!40000 ALTER TABLE `cano` ENABLE KEYS */;

-- Volcando estructura para tabla jara.capellido
DROP TABLE IF EXISTS `capellido`;
CREATE TABLE IF NOT EXISTS `capellido` (
  `cvapellido` int(10) NOT NULL AUTO_INCREMENT,
  `dsapellido` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvapellido`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.capellido: 11 rows
DELETE FROM `capellido`;
/*!40000 ALTER TABLE `capellido` DISABLE KEYS */;
INSERT INTO `capellido` (`cvapellido`, `dsapellido`) VALUES
	(1, 'uno'),
	(2, 'dos'),
	(3, 'SANTIZO'),
	(4, 'MORALES'),
	(5, 'SOLORZANO'),
	(6, 'HERNANDEZ'),
	(7, 'MENDOZA'),
	(8, 'UNO'),
	(9, 'PEREZ'),
	(10, 'ALCOLES'),
	(11, 'CORNELIO');
/*!40000 ALTER TABLE `capellido` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cciudad
DROP TABLE IF EXISTS `cciudad`;
CREATE TABLE IF NOT EXISTS `cciudad` (
  `cvciudad` int(10) NOT NULL AUTO_INCREMENT,
  `dsciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvciudad`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cciudad: 6 rows
DELETE FROM `cciudad`;
/*!40000 ALTER TABLE `cciudad` DISABLE KEYS */;
INSERT INTO `cciudad` (`cvciudad`, `dsciudad`) VALUES
	(1, 'uno'),
	(2, 'COMITAN'),
	(3, 'LA TRINITARIA'),
	(4, 'TUXTLA GUTIERREZ'),
	(5, 'TENAM PUENTE'),
	(7, 'UNO');
/*!40000 ALTER TABLE `cciudad` ENABLE KEYS */;

-- Volcando estructura para tabla jara.ccolonia
DROP TABLE IF EXISTS `ccolonia`;
CREATE TABLE IF NOT EXISTS `ccolonia` (
  `cvcolonia` int(10) NOT NULL,
  `dscolonia` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.ccolonia: 3 rows
DELETE FROM `ccolonia`;
/*!40000 ALTER TABLE `ccolonia` DISABLE KEYS */;
INSERT INTO `ccolonia` (`cvcolonia`, `dscolonia`) VALUES
	(1, 'uno'),
	(2, 'dos'),
	(0, 'CENTRO');
/*!40000 ALTER TABLE `ccolonia` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cdia
DROP TABLE IF EXISTS `cdia`;
CREATE TABLE IF NOT EXISTS `cdia` (
  `cvdia` int(10) NOT NULL AUTO_INCREMENT,
  `dsdia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvdia`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cdia: 7 rows
DELETE FROM `cdia`;
/*!40000 ALTER TABLE `cdia` DISABLE KEYS */;
INSERT INTO `cdia` (`cvdia`, `dsdia`) VALUES
	(0, 'DOMINGO'),
	(1, 'LUNES'),
	(2, 'MARTES'),
	(3, 'MIERCOLES'),
	(4, 'JUEVES'),
	(5, 'VIERNES'),
	(6, 'SABADO');
/*!40000 ALTER TABLE `cdia` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cestado
DROP TABLE IF EXISTS `cestado`;
CREATE TABLE IF NOT EXISTS `cestado` (
  `cvestado` int(10) NOT NULL AUTO_INCREMENT,
  `dsestado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvestado`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cestado: 5 rows
DELETE FROM `cestado`;
/*!40000 ALTER TABLE `cestado` DISABLE KEYS */;
INSERT INTO `cestado` (`cvestado`, `dsestado`) VALUES
	(1, 'CHIAPAS'),
	(2, 'dos'),
	(3, 'JALISCO'),
	(4, 'UNO'),
	(5, 'DOS');
/*!40000 ALTER TABLE `cestado` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cgenero
DROP TABLE IF EXISTS `cgenero`;
CREATE TABLE IF NOT EXISTS `cgenero` (
  `cvgenero` int(10) NOT NULL AUTO_INCREMENT,
  `dsgenero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvgenero`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cgenero: 2 rows
DELETE FROM `cgenero`;
/*!40000 ALTER TABLE `cgenero` DISABLE KEYS */;
INSERT INTO `cgenero` (`cvgenero`, `dsgenero`) VALUES
	(1, 'FEMENINO'),
	(2, 'MASCULINO');
/*!40000 ALTER TABLE `cgenero` ENABLE KEYS */;

-- Volcando estructura para tabla jara.checado
DROP TABLE IF EXISTS `checado`;
CREATE TABLE IF NOT EXISTS `checado` (
  `cvchecado` int(10) NOT NULL AUTO_INCREMENT,
  `cvhorario` int(10) NOT NULL,
  `diaa` int(3) NOT NULL,
  `fecha` int(3) NOT NULL,
  `cvmes` int(3) NOT NULL,
  `ano` year(4) NOT NULL,
  `hentrada` time NOT NULL,
  `hsalida` time NOT NULL,
  `hextra` int(10) NOT NULL DEFAULT '0',
  `estatus` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sueldo` int(15) NOT NULL,
  `sueldoextra` int(15) NOT NULL,
  `pagado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cvchecado`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla jara.checado: 54 rows
DELETE FROM `checado`;
/*!40000 ALTER TABLE `checado` DISABLE KEYS */;
INSERT INTO `checado` (`cvchecado`, `cvhorario`, `diaa`, `fecha`, `cvmes`, `ano`, `hentrada`, `hsalida`, `hextra`, `estatus`, `sueldo`, `sueldoextra`, `pagado`) VALUES
	(6, 5, 4, 16, 12, '2016', '05:09:00', '15:05:05', 1, 'asistencia', 100, 20, ' '),
	(7, 5, 3, 14, 12, '2016', '05:10:39', '10:15:50', 0, 'FALTA', 0, 0, ' '),
	(8, 5, 2, 13, 12, '2016', '05:11:40', '17:12:29', 3, 'ASISTENCIA', 100, 60, ' '),
	(9, 4, 0, 13, 3, '2016', '19:34:52', '20:20:20', 0, 'DIA LIBRE', 0, 0, ' '),
	(10, 5, 1, 11, 12, '2015', '12:22:06', '00:00:00', 2, 'FALTA', 50, 40, ' '),
	(11, 5, 1, 10, 12, '2016', '12:24:13', '11:00:00', 0, 'asistencia', 100, 0, ' '),
	(12, 7, 2, 20, 12, '2016', '06:40:04', '00:00:00', 0, 'FALTA', 0, 0, ' '),
	(13, 8, 2, 20, 12, '2016', '08:58:09', '10:10:10', 0, 'FALTA', 0, 0, ' '),
	(14, 2, 2, 20, 8, '2016', '11:44:39', '10:41:02', 2, 'ASISTENCIA', 100, 60, ' '),
	(15, 5, 2, 11, 12, '2016', '23:18:37', '23:18:47', 2, 'asistencia', 300, 40, ' '),
	(16, 2, 3, 21, 12, '2016', '08:22:45', '10:34:36', 0, 'FALTA', 100, 0, ' '),
	(17, 17, 3, 24, 5, '2017', '08:22:57', '08:24:50', 0, 'DIA LIBRE', 0, 0, ' '),
	(18, 17, 6, 27, 5, '2017', '05:55:55', '15:10:02', 1, 'ASISTENCIA', 100, 20, ' '),
	(19, 17, 5, 26, 5, '2017', '05:50:08', '14:20:11', 0, 'ASISTENCIA', 100, 0, ' '),
	(20, 17, 4, 25, 5, '2017', '06:06:06', '14:01:00', 0, 'ASISTENCIA', 100, 0, ' '),
	(21, 10, 3, 21, 12, '2016', '10:17:20', '10:17:31', 0, 'FALTA', 0, 0, ' '),
	(26, 9, 1, 9, 1, '2017', '06:31:56', '07:56:31', 2, 'FALTA', 0, 20, ' '),
	(22, 11, 3, 21, 12, '2016', '11:49:48', '11:49:54', 0, 'FALTA', 0, 0, ' '),
	(23, 12, 3, 21, 12, '2016', '11:51:21', '11:51:46', 0, 'FALTA', 0, 0, ' '),
	(24, 13, 3, 28, 12, '2016', '12:11:01', '12:11:07', 0, 'FALTA', 0, 0, ' '),
	(25, 11, 4, 5, 1, '2017', '20:40:40', '20:40:46', 6, '', 0, 120, ' '),
	(27, 11, 1, 9, 1, '2017', '06:32:44', '10:10:10', 2, 'FALTA', 0, 50, ' '),
	(28, 6, 1, 9, 1, '2017', '05:33:27', '14:20:10', 0, 'ASISTENCIA', 100, 0, ' '),
	(29, 14, 1, 9, 1, '2017', '07:53:47', '07:54:35', 1, 'ASISTENCIA', 100, 20, ' '),
	(30, 2, 1, 9, 1, '2017', '05:48:41', '08:20:15', 2, 'FALTA', 50, 50, ' '),
	(31, 4, 1, 9, 1, '2017', '11:26:29', '20:27:01', 5, 'FALTA', 0, 100, ' '),
	(32, 2, 4, 12, 1, '2017', '01:51:44', '08:52:11', 5, 'FALTA', 0, 100, ' '),
	(33, 15, 2, 10, 1, '2017', '05:27:56', '03:28:12', 1, 'ASISTENCIA', 100, 20, ' '),
	(34, 15, 3, 11, 1, '2017', '01:38:57', '08:39:18', 0, 'FALTA', 0, 100, ' '),
	(35, 17, 0, 28, 5, '2017', '09:53:38', '09:53:47', 0, 'FALTA', -100, 0, ' '),
	(36, 18, 3, 7, 6, '2017', '08:46:36', '08:47:26', 0, 'FALTA', 0, -100, 'si'),
	(37, 18, 1, 5, 6, '2017', '08:49:03', '17:50:25', 4, 'ASISTENCIA', 0, 80, 'si'),
	(38, 19, 1, 5, 6, '2017', '06:55:40', '15:06:01', 1, 'ASISTENCIA', 500, 100, ' si '),
	(39, 19, 2, 6, 6, '2017', '07:15:11', '15:06:00', 1, 'ASISTENCIA', 500, 100, ' si '),
	(40, 19, 3, 7, 6, '2017', '07:10:56', '14:50:16', 0, 'ASISTENCIA', 500, 0, ' si '),
	(41, 19, 4, 8, 6, '2017', '06:59:40', '14:56:04', 0, 'ASISTENCIA', 500, 0, ' si '),
	(42, 19, 5, 9, 6, '2017', '06:15:31', '15:40:49', 1, 'ASISTENCIA', 500, 100, ' si '),
	(43, 20, 3, 7, 6, '2017', '12:01:58', '15:02:29', 0, '', 0, 0, ' '),
	(44, 20, 4, 8, 6, '2017', '06:03:10', '15:03:24', 0, '', 0, 0, ' '),
	(45, 19, 1, 12, 6, '2017', '06:50:00', '15:00:00', 1, 'ASISTENCIA', 500, 100, ' si '),
	(46, 19, 2, 13, 6, '2017', '07:05:00', '14:55:00', 0, 'ASISTENCIA', 300, 0, ' si '),
	(47, 19, 3, 14, 6, '2017', '07:10:00', '14:55:00', 0, 'ASISTENCIA', 300, 0, ' si '),
	(48, 19, 4, 15, 6, '2017', '07:10:00', '14:50:00', 0, 'ASISTENIA', 500, 0, ' si '),
	(49, 19, 5, 16, 6, '2017', '07:15:00', '14:45:00', 0, 'ASISTENCIA', 500, 0, ' si '),
	(50, 21, 1, 19, 6, '2017', '08:20:03', '16:00:02', 0, 'FALTA', 0, 0, ' '),
	(51, 21, 2, 20, 6, '2017', '08:11:03', '15:59:00', 0, 'ASISTENCIA', 500, 0, ' '),
	(52, 21, 3, 21, 6, '2017', '08:17:01', '16:00:00', 0, 'FALTA', 0, 0, ' '),
	(53, 21, 4, 22, 6, '2017', '08:12:03', '16:59:10', 1, 'ASISTENCIA', 500, 100, ' '),
	(54, 21, 5, 23, 6, '2017', '08:14:01', '16:59:02', 1, 'ASISTENCIA', 500, 100, ' '),
	(55, 21, 1, 26, 6, '2017', '07:00:00', '16:59:00', 2, 'ASISTENCIA', 500, 200, ' '),
	(56, 21, 2, 27, 6, '2017', '08:00:00', '15:56:00', 0, 'ASISTENCIA', 500, 0, ' '),
	(57, 21, 3, 28, 6, '2017', '08:30:00', '16:58:00', 0, 'FALTA', 0, 0, ' '),
	(58, 21, 4, 29, 6, '2017', '08:20:00', '16:00:00', 0, 'FALTA', 0, 0, ' '),
	(59, 21, 5, 30, 6, '2017', '07:59:00', '16:59:00', 0, 'ASISTENCIA', 500, 0, ' ');
/*!40000 ALTER TABLE `checado` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cmes
DROP TABLE IF EXISTS `cmes`;
CREATE TABLE IF NOT EXISTS `cmes` (
  `cvmes` int(10) NOT NULL AUTO_INCREMENT,
  `dsmes` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvmes`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cmes: 12 rows
DELETE FROM `cmes`;
/*!40000 ALTER TABLE `cmes` DISABLE KEYS */;
INSERT INTO `cmes` (`cvmes`, `dsmes`) VALUES
	(1, 'ENERO'),
	(2, 'FEBRERO'),
	(3, 'MARZO'),
	(4, 'ABRIL'),
	(5, 'MAYO'),
	(6, 'JUNIO'),
	(7, 'JULIO'),
	(8, 'AGOSTO'),
	(9, 'SEPTIEMBRE'),
	(10, 'OCTUBRE'),
	(11, 'NOVIEMBRE'),
	(12, 'DICIEMBRE');
/*!40000 ALTER TABLE `cmes` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cnombre
DROP TABLE IF EXISTS `cnombre`;
CREATE TABLE IF NOT EXISTS `cnombre` (
  `cvnombre` int(10) NOT NULL AUTO_INCREMENT,
  `dsnombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvnombre`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cnombre: 6 rows
DELETE FROM `cnombre`;
/*!40000 ALTER TABLE `cnombre` DISABLE KEYS */;
INSERT INTO `cnombre` (`cvnombre`, `dsnombre`) VALUES
	(13, 'TRE'),
	(2, 'GUADALUPE'),
	(3, 'SOFIA'),
	(12, 'DOS'),
	(5, 'LUIS'),
	(11, 'UNO');
/*!40000 ALTER TABLE `cnombre` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cpagado
DROP TABLE IF EXISTS `cpagado`;
CREATE TABLE IF NOT EXISTS `cpagado` (
  `cvpagado` int(11) DEFAULT NULL,
  `dspagado` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cpagado: 2 rows
DELETE FROM `cpagado`;
/*!40000 ALTER TABLE `cpagado` DISABLE KEYS */;
INSERT INTO `cpagado` (`cvpagado`, `dspagado`) VALUES
	(1, 'no'),
	(2, 'si');
/*!40000 ALTER TABLE `cpagado` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cquincena
DROP TABLE IF EXISTS `cquincena`;
CREATE TABLE IF NOT EXISTS `cquincena` (
  `cvquincena` int(10) NOT NULL AUTO_INCREMENT,
  `dsquincena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvquincena`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cquincena: 0 rows
DELETE FROM `cquincena`;
/*!40000 ALTER TABLE `cquincena` DISABLE KEYS */;
/*!40000 ALTER TABLE `cquincena` ENABLE KEYS */;

-- Volcando estructura para tabla jara.ctipopersona
DROP TABLE IF EXISTS `ctipopersona`;
CREATE TABLE IF NOT EXISTS `ctipopersona` (
  `cvtipopersona` int(10) NOT NULL AUTO_INCREMENT,
  `dstipopersona` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvtipopersona`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.ctipopersona: 3 rows
DELETE FROM `ctipopersona`;
/*!40000 ALTER TABLE `ctipopersona` DISABLE KEYS */;
INSERT INTO `ctipopersona` (`cvtipopersona`, `dstipopersona`) VALUES
	(1, 'PROVEEDOR'),
	(2, 'EMPLEADO'),
	(3, 'CHALAN');
/*!40000 ALTER TABLE `ctipopersona` ENABLE KEYS */;

-- Volcando estructura para tabla jara.cturno
DROP TABLE IF EXISTS `cturno`;
CREATE TABLE IF NOT EXISTS `cturno` (
  `cvturno` int(10) NOT NULL AUTO_INCREMENT,
  `dsturno` varchar(50) DEFAULT NULL,
  `horaini` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  PRIMARY KEY (`cvturno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.cturno: 8 rows
DELETE FROM `cturno`;
/*!40000 ALTER TABLE `cturno` DISABLE KEYS */;
INSERT INTO `cturno` (`cvturno`, `dsturno`, `horaini`, `horafin`) VALUES
	(1, 'MATUTINO', '06:00:00', '14:00:00'),
	(2, 'VESPERTINO', '14:00:00', '22:20:00'),
	(3, 'MIXTO', '06:00:00', '22:00:00'),
	(0, 'LIBRE', '00:00:00', '00:00:00'),
	(5, 'uno', '07:00:00', '11:00:00'),
	(6, 'dos', '08:00:00', '12:00:00'),
	(7, 'nuevo', '07:00:00', '15:00:00'),
	(8, 'HORAUNO', '08:00:00', '16:00:00');
/*!40000 ALTER TABLE `cturno` ENABLE KEYS */;

-- Volcando estructura para tabla jara.datospersonales
DROP TABLE IF EXISTS `datospersonales`;
CREATE TABLE IF NOT EXISTS `datospersonales` (
  `cvpersona` int(10) NOT NULL AUTO_INCREMENT,
  `curp` varchar(18) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cvapepat` int(10) DEFAULT NULL,
  `cvapemat` int(10) DEFAULT NULL,
  `cvgenero` int(10) DEFAULT NULL,
  `telefono` bigint(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvpersona`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.datospersonales: 18 rows
DELETE FROM `datospersonales`;
/*!40000 ALTER TABLE `datospersonales` DISABLE KEYS */;
INSERT INTO `datospersonales` (`cvpersona`, `curp`, `nombre`, `cvapepat`, `cvapemat`, `cvgenero`, `telefono`, `email`) VALUES
	(1, '1234QWER1234QWERQW', 'ERIKA', 1, 3, 2, 1234123412, 'ERIKA@ERIKA'),
	(2, 'ABCDEFGHIJKLMNOPQ', 'ABECEDARIO', 2, 1, 1, 9631234567, 'ABECEDARIO@ABC'),
	(3, '123456789101112131', 'NUMEROS', 2, 2, 2, 1234567890, 'NUM@NUMERO'),
	(4, 'GOPE123456MCSLRJ09', 'EDUARDA', 1, 3, 1, 909090909, 'EDUARDA@EDU'),
	(5, 'hdfesdhshfsc xcm', 'juan', 1, 1, 2, 963258476, 'ajud@ouloo'),
	(6, 'JUYT960104', 'JULIO ULISES', 2, 2, 1, 9921114081, 'ANGEL_DIVA@HOTMAIL.COM'),
	(7, 'JHTN960710MCSSR', 'JHONATHAN ', 2, 3, 1, 9631258123, 'JHTN_96@GMAIL.COM'),
	(8, 'LRMS970114MCSRRN04', 'LUIS ROBERTO', 4, 5, 1, 9631223145, 'LUIS_ROB@HOTMAIL.COM'),
	(9, 'HE', 'VIANEY GUADALUPE', 3, 3, 2, 9631043031, 'embri.angel@gmail.com'),
	(10, 'HEPV960710MCSRRN04', 'VIANEY', 3, 3, 2, 9631043031, 'embri.angel@gmail.com'),
	(11, 'UNO', 'UNO', 3, 7, 67, 111, 'UNO@UNO.1'),
	(12, 'DOS', 'DOS', 9, 9, 1, 2222, 'DOS@DOS.DOS'),
	(13, 'CDGUEKFVH254GVV', 'PACO', 5, 3, 1, 9631254516, 'JDD@OUHG'),
	(14, 'NDSHGRF', 'MANUEL', 3, 3, 67, 935845515, 'GGEDY@UUFRG'),
	(16, '7737HCDHCJC838', 'KIKA', 4, 6, 2, 9631890529, 'KIKA_VELAZZ@GMAIL.COM'),
	(20, 'UMCSRN14', 'UNO', 8, 8, 2, 9876543210, 'UNO_UNO@GMAIL.COM'),
	(18, 'PEDROMCSRRN10', 'PEDRO', 10, 11, 2, 9631251212, 'PEDRO_ALCOLES@GMAIL.COM'),
	(19, 'RETEVE2356788II', 'ALCOLES 2', 11, 11, 2, 9655848888, 'GET@KKDFHY');
/*!40000 ALTER TABLE `datospersonales` ENABLE KEYS */;

-- Volcando estructura para tabla jara.direccion
DROP TABLE IF EXISTS `direccion`;
CREATE TABLE IF NOT EXISTS `direccion` (
  `cvdireccion` int(10) NOT NULL AUTO_INCREMENT,
  `cvpersona` int(10) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numeroext` int(10) DEFAULT NULL,
  `numeroint` int(10) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `cvciudad` int(10) DEFAULT NULL,
  `cvestado` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  PRIMARY KEY (`cvdireccion`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.direccion: 13 rows
DELETE FROM `direccion`;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
INSERT INTO `direccion` (`cvdireccion`, `cvpersona`, `calle`, `numeroext`, `numeroint`, `colonia`, `cvciudad`, `cvestado`, `cp`) VALUES
	(1, 1, '16 SUR PONIENTE', 0, 3, 'BELISARIO DOMINGUEZ', 1, 1, 30090),
	(2, 2, 'LETRAS', 9, 1, 'PALABRAS', 2, 3, 12345),
	(3, 3, 'NUMEROS', 1, 10, 'NUMERAL', 3, 2, 90),
	(4, 4, 'PENSAMIENTO', 0, 12, 'CHICHIMA', 1, 1, 30890),
	(5, 8, 'CONOCIDO', 0, 0, 'COL. FCO. J MUJICA', 1, 1, 30000),
	(6, 9, 'CENTRAL', 0, 0, 'COL. FCO. J MUJICA', 1, 1, 30000),
	(7, 10, 'CENTRO', 2, 8, 'EL CAMPANARIO', 1, 1, 30000),
	(8, 12, 'DOS', 2, 2, 'DOS', 1, 1, 30000),
	(9, 13, 'NUMERO', 9, 8, 'NUEVO', 4, 1, 30120),
	(10, 14, 'SUR', 8, 8, 'HIDD', 2, 3, 36488),
	(11, 18, 'CONOCIDA', 9, 9, 'DEL VALLE', 3, 3, 30000),
	(12, 19, 'AVENTURA', 8, 9, 'REAL', 3, 3, 30000),
	(13, 20, 'PRIVADA', 4, 4, 'MUJICA', 2, 1, 30000);
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;

-- Volcando estructura para tabla jara.empleado
DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `cvempleado` int(10) NOT NULL AUTO_INCREMENT,
  `cvpersona` int(10) DEFAULT NULL,
  `estatus` varchar(18) NOT NULL,
  PRIMARY KEY (`cvempleado`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.empleado: 14 rows
DELETE FROM `empleado`;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` (`cvempleado`, `cvpersona`, `estatus`) VALUES
	(22, 4, 'ACTIVO'),
	(19, 2, 'ACTIVO'),
	(40, 18, 'ACTIVO'),
	(23, 0, 'ACTIVO'),
	(25, 1, 'ACTIVO'),
	(27, 6, 'ACTIVO'),
	(28, 7, 'ACTIVO'),
	(38, 14, 'ACTIVO'),
	(32, 8, 'ACTIVO'),
	(36, 13, 'ACTIVO'),
	(33, 11, 'ACTIVO'),
	(35, 9, 'ACTIVO'),
	(41, 19, 'ACTIVO'),
	(42, 20, 'ACTIVO');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando estructura para tabla jara.estatus
DROP TABLE IF EXISTS `estatus`;
CREATE TABLE IF NOT EXISTS `estatus` (
  `cvestatus` int(10) NOT NULL AUTO_INCREMENT,
  `dsestatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvestatus`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.estatus: 2 rows
DELETE FROM `estatus`;
/*!40000 ALTER TABLE `estatus` DISABLE KEYS */;
INSERT INTO `estatus` (`cvestatus`, `dsestatus`) VALUES
	(1, 'ACTIVO'),
	(2, 'INACTIVO');
/*!40000 ALTER TABLE `estatus` ENABLE KEYS */;

-- Volcando estructura para tabla jara.horario
DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `cvhorario` int(10) NOT NULL AUTO_INCREMENT,
  `cvempleado` int(10) DEFAULT NULL,
  `lunes` int(10) DEFAULT NULL,
  `martes` int(10) DEFAULT NULL,
  `miercoles` int(10) DEFAULT NULL,
  `jueves` int(10) DEFAULT NULL,
  `viernes` int(10) DEFAULT NULL,
  `sabado` int(10) DEFAULT NULL,
  `domingo` int(10) DEFAULT NULL,
  PRIMARY KEY (`cvhorario`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.horario: 21 rows
DELETE FROM `horario`;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` (`cvhorario`, `cvempleado`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`) VALUES
	(1, 13, 1, 1, 1, 0, 1, 1, 1),
	(2, 11, 2, 2, 2, 2, 0, 2, 0),
	(3, 21, 1, 1, 0, 1, 1, 1, 1),
	(4, 22, 2, 2, 0, 2, 2, 2, 0),
	(5, 19, 0, 1, 2, 0, 0, 1, 1),
	(6, 25, 1, 1, 0, 1, 1, 1, 2),
	(7, 26, 1, 1, 1, 1, 1, 1, 1),
	(8, 30, 3, 1, 3, 1, 3, 0, 0),
	(9, 32, 1, 1, 1, 1, 1, 1, 1),
	(10, 27, 1, 0, 1, 1, 1, 1, 0),
	(11, 33, 1, 1, 1, 1, 1, 1, 1),
	(12, 34, 1, 1, 1, 1, 1, 1, 0),
	(13, 29, 0, 1, 2, 2, 1, 1, 3),
	(14, 36, 2, 2, 2, 2, 2, 2, 0),
	(15, 37, 0, 1, 1, 1, 1, 1, 1),
	(16, 35, 0, 0, 0, 0, 0, 0, 0),
	(17, 38, 1, 1, 1, 1, 1, 1, 1),
	(18, 39, 2, 2, 2, 2, 2, 0, 0),
	(19, 40, 7, 7, 7, 7, 7, 0, 0),
	(20, 41, 7, 7, 7, 7, 7, 0, 0),
	(21, 42, 8, 8, 8, 8, 8, 0, 0);
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;

-- Volcando estructura para tabla jara.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `cvusuario` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cvusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jara.login: 1 rows
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`cvusuario`, `usuario`, `pass`) VALUES
	(1, 'erika', '1234');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
