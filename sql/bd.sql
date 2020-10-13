-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para agencia
CREATE DATABASE IF NOT EXISTS `agencia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `agencia`;

-- Volcando estructura para tabla agencia.autos
CREATE TABLE IF NOT EXISTS `autos` (
  `Id_auto` int(11) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.autos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `autos` DISABLE KEYS */;
/*!40000 ALTER TABLE `autos` ENABLE KEYS */;

-- Volcando estructura para tabla agencia.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_con` int(11) DEFAULT NULL,
  `Nombre_c` varchar(50) DEFAULT NULL,
  `SegNom_c` varchar(50) DEFAULT NULL,
  `Apellido_p` varchar(50) DEFAULT NULL,
  `Apellido_m` varchar(50) DEFAULT NULL,
  `Telefono_c` int(11) DEFAULT NULL,
  `Correo_c` varchar(50) DEFAULT NULL,
  `Asunto_c` varchar(50) DEFAULT NULL,
  `Mensaje_c` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.contacto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Volcando estructura para tabla agencia.distribuidor
CREATE TABLE IF NOT EXISTS `distribuidor` (
  `ID_d` int(11) DEFAULT NULL,
  `Direccion_d` varchar(50) DEFAULT NULL,
  `Telefono_d` int(11) DEFAULT NULL,
  `Horario_d` varchar(50) DEFAULT NULL,
  `Servicio_d` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.distribuidor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `distribuidor` DISABLE KEYS */;
/*!40000 ALTER TABLE `distribuidor` ENABLE KEYS */;

-- Volcando estructura para tabla agencia.nuevos
CREATE TABLE IF NOT EXISTS `nuevos` (
  `Id_nuevo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo_n` varchar(50) DEFAULT NULL,
  `marca_n` varchar(50) DEFAULT NULL,
  `precio_n` int(11) DEFAULT NULL,
  `promocion_n` varchar(50) DEFAULT NULL,
  `seguro_n` varchar(50) DEFAULT NULL,
  `url_foto_n` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_nuevo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.nuevos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `nuevos` DISABLE KEYS */;
INSERT INTO `nuevos` (`Id_nuevo`, `modelo_n`, `marca_n`, `precio_n`, `promocion_n`, `seguro_n`, `url_foto_n`) VALUES
	(1, 'Modelo 1', 'Marca 1', 12000, 'Ninguna', 'Ninguno', 'img/nuevos/nuevo_0.jpeg'),
	(2, 'Modelo2', 'Marca2', 500000, '10% descuento', 'Seguramente', 'img/nuevos/nuevo_1.jpeg'),
	(3, 'Modelo3', 'Marca 3', 750000, 'Sin Enganche', '1er año', 'img/nuevos/nuevo_2.jpeg');
/*!40000 ALTER TABLE `nuevos` ENABLE KEYS */;

-- Volcando estructura para tabla agencia.promociones
CREATE TABLE IF NOT EXISTS `promociones` (
  `id_promocion` int(11) DEFAULT NULL,
  `fecha_p` varchar(50) DEFAULT NULL,
  `vencimiento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.promociones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `promociones` DISABLE KEYS */;
/*!40000 ALTER TABLE `promociones` ENABLE KEYS */;

-- Volcando estructura para tabla agencia.seminuevos
CREATE TABLE IF NOT EXISTS `seminuevos` (
  `Id_semi` int(11) NOT NULL AUTO_INCREMENT,
  `modelo_s` varchar(50) DEFAULT NULL,
  `marca_s` varchar(50) DEFAULT NULL,
  `precio_s` int(11) DEFAULT NULL,
  `promocion_s` varchar(50) DEFAULT NULL,
  `seguro_s` varchar(50) DEFAULT NULL,
  `url_foto_s` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_semi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.seminuevos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `seminuevos` DISABLE KEYS */;
INSERT INTO `seminuevos` (`Id_semi`, `modelo_s`, `marca_s`, `precio_s`, `promocion_s`, `seguro_s`, `url_foto_s`) VALUES
	(2, 'xxx', 'ggg', 250000, 'xxx', 'xxx', 'img/semi/nuevo_0.jpeg'),
	(3, 'yy', 'yy', 500000, 'yyy', 'yyy', 'img/semi/nuevo_1.jpeg'),
	(4, 'zzz', 'zzz', 750000, 'zzz', 'zzz', 'img/semi/nuevo_2.jpeg');
/*!40000 ALTER TABLE `seminuevos` ENABLE KEYS */;

-- Volcando estructura para tabla agencia.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla agencia.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`ID_usuario`, `Nombre`, `Telefono`, `Correo`, `Direccion`, `Contrasena`) VALUES
	(1, 'Eduardo', 0, 'Eduardo@gmail.com', '6121519659', '28485dc286708e3e0c23a741aaa8b4f6');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;


CREATE USER 'admin_agencia'@'localhost' IDENTIFIED BY 'D2N1saMa';

GRANT ALL ON agencia.* TO 'admin_agencia'@'localhost';