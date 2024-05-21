-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla cecyteq.administrativos: ~1 rows (aproximadamente)
INSERT INTO `administrativos` (`ID`, `Nombre`, `Apellido`) VALUES
	(1, 'Edgar', 'Vivas');

-- Volcando datos para la tabla cecyteq.alumnos: ~1 rows (aproximadamente)
INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `Semestre`, `Carrera`, `IdGrupo`) VALUES
	(2000, 'Gael', 'Vivas Nieto', '2004-06-20', 1, 'Programación', 'TPROG-AMBI');

-- Volcando datos para la tabla cecyteq.calificaciones: ~1 rows (aproximadamente)
INSERT INTO `calificaciones` (`Registro`, `ID_Alumno`, `ID_Materia`, `IdGrupo`, `Calificacion`) VALUES
	(1, 2000, 2000, 'TPROG-AMBI', 10);

-- Volcando datos para la tabla cecyteq.grupos: ~1 rows (aproximadamente)
INSERT INTO `grupos` (`IdGrupo`, `ID_Materia`, `ID_Profesor`, `Semestre`) VALUES
	('TPROG-AMBI', 2000, 1, 1);

-- Volcando datos para la tabla cecyteq.materias: ~1 rows (aproximadamente)
INSERT INTO `materias` (`ID`, `Materia`, `Semestre`) VALUES
	(2000, 'TIC\'s', 1);

-- Volcando datos para la tabla cecyteq.profesores: ~1 rows (aproximadamente)
INSERT INTO `profesores` (`ID`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `IdGrupo`) VALUES
	(1, 'Juan Manuel', 'Estrada', '2024-05-21', 'TPROG-AMBI');

-- Volcando datos para la tabla cecyteq.usuarios: ~1 rows (aproximadamente)
INSERT INTO `usuarios` (`IdUsuario`, `Password`, `Tipo`) VALUES
	('315297', 'gael123', '1');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
