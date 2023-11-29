-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para cimec2
CREATE DATABASE IF NOT EXISTS `cimec2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cimec2`;

-- Volcando estructura para tabla cimec2.administradores
CREATE TABLE IF NOT EXISTS `administradores` (
  `Id_administrador` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL DEFAULT '',
  `Contrasena` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cimec2.administradores: ~0 rows (aproximadamente)
DELETE FROM `administradores`;
INSERT INTO `administradores` (`Id_administrador`, `Nombre`, `Contrasena`) VALUES
	(1, 'Kevin', '12345'),
	(2, 'Carlos', '12345'),
	(3, 'Jammal', '12345');

-- Volcando estructura para tabla cimec2.citas
CREATE TABLE IF NOT EXISTS `citas` (
  `Cita_id` int NOT NULL AUTO_INCREMENT,
  `Curp_paciente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `Especialidad_id` int NOT NULL DEFAULT '0',
  `Doctor_id` int NOT NULL DEFAULT '0',
  `Dia` date NOT NULL,
  `Observaciones` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`Cita_id`) USING BTREE,
  KEY `Curp_paciente` (`Curp_paciente`),
  KEY `Especialidad_id` (`Especialidad_id`),
  KEY `Doctor_id` (`Doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cimec2.citas: ~0 rows (aproximadamente)
DELETE FROM `citas`;
INSERT INTO `citas` (`Cita_id`, `Curp_paciente`, `Especialidad_id`, `Doctor_id`, `Dia`, `Observaciones`) VALUES
	(1, 'AJSWNW13JDK2', 1, 1, '2023-11-28', NULL);

-- Volcando estructura para tabla cimec2.doctores
CREATE TABLE IF NOT EXISTS `doctores` (
  `Id_doctor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Especialidad_id` int NOT NULL,
  PRIMARY KEY (`Id_doctor`) USING BTREE,
  KEY `Especialidad_id` (`Especialidad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cimec2.doctores: ~0 rows (aproximadamente)
DELETE FROM `doctores`;
INSERT INTO `doctores` (`Id_doctor`, `Nombre`, `Apellido`, `Especialidad_id`) VALUES
	(1, 'Cristian', 'Chavez', 1),
	(2, 'Pedro', 'Garcia', 2),
	(3, 'Naomi', 'Hernandez', 3),
	(4, 'Nancy', 'Zapata', 4);

-- Volcando estructura para tabla cimec2.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `Id_especialidad` int NOT NULL AUTO_INCREMENT,
  `Especialidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`Id_especialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cimec2.especialidades: ~0 rows (aproximadamente)
DELETE FROM `especialidades`;
INSERT INTO `especialidades` (`Id_especialidad`, `Especialidad`) VALUES
	(1, 'Odontologia'),
	(2, 'Cardiologia'),
	(3, 'Ginecologia'),
	(4, 'Pediatria');

-- Volcando estructura para tabla cimec2.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `Curp` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Unidad_Medica` varchar(50) NOT NULL,
  PRIMARY KEY (`Curp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cimec2.pacientes: ~0 rows (aproximadamente)
DELETE FROM `pacientes`;
INSERT INTO `pacientes` (`Curp`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Direccion`, `Unidad_Medica`) VALUES
	('AJSWNW13JDK2', 'Mariel', 'Hernandez', 'Mariel.Hernandez@gmail.com', '6185364734', 'Nuevo ideal', 'Seguro social'),
	('HSOW36473HSKND9', 'Carlos', 'Serrano', 'Carlos@gmail.com', '67583748394', 'Durango', 'Hospital'),
	('JSUDNW67384HJS4', 'Amairany', 'Silva', 'Amairany@gmail.com', '6769873564', 'El salto', 'Seguro social'),
	('KJIEND23452JH4', 'Pedro', 'Fernandez', 'Pedro@gmail,com', '6183546789', 'Durango', 'Hospital');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
