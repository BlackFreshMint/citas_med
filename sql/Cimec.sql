-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.17 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cimec
CREATE DATABASE IF NOT EXISTS `cimec` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cimec`;

-- Dumping structure for table cimec.doctores
CREATE TABLE IF NOT EXISTS `doctores` (
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Apellidos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Doctor_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Especialidad_ID` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`Doctor_ID`),
  KEY `especialidad` (`Especialidad_ID`),
  CONSTRAINT `especialidad` FOREIGN KEY (`Especialidad_ID`) REFERENCES `especialidades` (`Especialidad_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cimec.doctores: ~0 rows (approximately)
INSERT INTO `doctores` (`Nombre`, `Apellidos`, `Doctor_ID`, `Especialidad_ID`) VALUES
	('Cristian', 'Ritchter', 1, 1),
	('Jammal', 'Rodriguez', 2, 8);

-- Dumping structure for table cimec.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `Especialidad_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre_Especialidad` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Especialidad_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cimec.especialidades: ~0 rows (approximately)
INSERT INTO `especialidades` (`Especialidad_ID`, `Nombre_Especialidad`) VALUES
	(1, 'Cardiologo'),
	(2, 'Anesteciologo'),
	(3, 'Dermatologo'),
	(4, 'Endocrinologo'),
	(5, 'Gastroenterologo'),
	(6, 'Hematologo'),
	(7, 'Nefrologo'),
	(8, 'Ginecologo'),
	(9, 'Oftalmologo'),
	(10, 'Nutiologo');

-- Dumping structure for table cimec.inicio_secion
CREATE TABLE IF NOT EXISTS `inicio_secion` (
  `Curp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`Curp`),
  CONSTRAINT `Curp` FOREIGN KEY (`Curp`) REFERENCES `pacientes` (`Curp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cimec.inicio_secion: ~0 rows (approximately)

-- Dumping structure for table cimec.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `Nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Curp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Apellidos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Telefono` int(15) unsigned NOT NULL,
  `Domicilio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Unidad_Medica` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`Curp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cimec.pacientes: ~0 rows (approximately)
INSERT INTO `pacientes` (`Nombres`, `Correo`, `Curp`, `Apellidos`, `Telefono`, `Domicilio`, `Unidad_Medica`) VALUES
	('Jonathan', 'sajor@gmail.com', 'ROPJ030208HDGJRNA8', 'Rojas Portillo', 4294967295, 'Luz y Esperanza', 'cimec'),
	('Kevin', 'kevin@gmail.com', 'VAGK04031310H000', 'Guerrero', 4294967295, 'Fraccionamiento JHD', 'cimec');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
