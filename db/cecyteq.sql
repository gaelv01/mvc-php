-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2024 a las 07:43:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cecyteq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`ID`, `Nombre`, `Apellido`, `Cargo`) VALUES
(1, 'Edgar', 'Vivas', 'Administrador de sistemas'),
(2, 'Gael', 'Vivas Nieto', 'Administrador de TICS'),
(3, 'Ignacio', 'Vivas Nieto', 'Administrador de TI'),
(8, 'Rogelio', 'Pereda', 'Subdirección');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Semestre` tinyint(4) DEFAULT NULL,
  `Carrera` varchar(30) DEFAULT NULL,
  `IdGrupo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `Semestre`, `Carrera`, `IdGrupo`) VALUES
(2000, 'Gael', 'Vivas Nieto', '2004-06-20', 2, 'Programación', 'TPROG-AMBI'),
(2001, 'Saul', 'Zapata Perez', '2004-01-01', 2, 'Programación', 'TPROG-AMBI'),
(2003, 'Roman', 'Ortega Muñoz', '2000-01-01', 7, 'Programación', 'TPROG-AMBI'),
(2004, 'Juan', 'Pacheco', '2004-02-20', 3, 'Programación', 'TPROG-AMBI'),
(2005, 'Pedro', 'Sanchez', '2002-01-01', 3, 'Programación', 'TPROG-AMBI'),
(2006, 'Juan ', 'Perez', '2000-02-02', 7, 'Programación', 'TPROG-AMBI'),
(2007, 'Laura', 'Nieto', '2000-06-20', 7, 'Programación', 'TPROG-AMBI'),
(2008, 'Ernesto', 'Villeda', '2003-02-02', 5, 'Programación', 'TPROG-AMBI'),
(2009, 'Juan Manuel', 'Estrada', '2000-01-01', 7, 'Programación', 'TPROG-AMBI'),
(2010, 'Ignacio', 'Vivas', '2008-02-03', 1, 'Programación', 'TPROG-AMBI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `Registro` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Materia` int(11) NOT NULL,
  `IdGrupo` varchar(50) NOT NULL,
  `Calificacion` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`Registro`, `ID_Alumno`, `ID_Materia`, `IdGrupo`, `Calificacion`) VALUES
(1, 2000, 2000, 'TPROG-AMBI', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `ID` int(11) NOT NULL,
  `IdGrupo` varchar(50) DEFAULT NULL,
  `ID_Materia` int(11) DEFAULT NULL,
  `ID_Profesor` int(11) DEFAULT NULL,
  `Semestre` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`ID`, `IdGrupo`, `ID_Materia`, `ID_Profesor`, `Semestre`) VALUES
(1, 'TMECA-AM', 2000, 1, 1),
(2, 'TMECA-AMBI', 2000, 2, 1),
(3, 'TPROG-AMBI', 2011, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `Materia` varchar(50) NOT NULL,
  `Semestre` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `Materia`, `Semestre`) VALUES
(2000, 'TIC\'s', 2),
(2002, 'Web Cliente', 4),
(2003, 'Web Servidor', 4),
(2004, 'Programación Orientada a Objetos', 3),
(2005, 'Bases de Datos', 4),
(2006, 'Electrónica Digital', 3),
(2007, 'Español I', 1),
(2008, 'Ética', 3),
(2009, 'Filosofía', 6),
(2010, 'Programación CNC', 4),
(2011, 'Lógica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `IdGrupo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `IdGrupo`) VALUES
(1, 'Juan Manuel', 'Estrada', '2024-05-21', 'TPROG-AMBI'),
(2, 'Nancy A', 'Oviedo Rivera', '1980-01-01', 'TPROG-AMBI'),
(4, 'Pedro', 'Gutiérrez Nájera', '1990-01-01', 'TPROG-AMBI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Login`, `Password`, `Tipo`) VALUES
(1, 'Gael Vivas Nieto', '315297', 'gael123', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Grupo` (`IdGrupo`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`Registro`),
  ADD KEY `FK_Alumno` (`ID_Alumno`),
  ADD KEY `FK_Materias` (`ID_Materia`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Profesor` (`ID_Profesor`),
  ADD KEY `FK_Materia` (`ID_Materia`),
  ADD KEY `FK_Grupo` (`IdGrupo`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Grupos` (`IdGrupo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2011;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `Registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `FK_Grupo` FOREIGN KEY (`IdGrupo`) REFERENCES `grupos` (`IdGrupo`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `FK_Alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumnos` (`ID`),
  ADD CONSTRAINT `FK_Materias` FOREIGN KEY (`ID_Materia`) REFERENCES `materias` (`ID`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `FK_Materia` FOREIGN KEY (`ID_Materia`) REFERENCES `materias` (`ID`),
  ADD CONSTRAINT `FK_Profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesores` (`ID`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `FK_Grupos` FOREIGN KEY (`IdGrupo`) REFERENCES `grupos` (`IdGrupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
