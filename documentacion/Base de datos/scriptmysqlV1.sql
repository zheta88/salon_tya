-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2020 a las 01:46:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salon3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_empleados`
--

CREATE TABLE `contrato_empleados` (
  `idCONTRATO_EMPLEADOS` int(11) NOT NULL,
  `Rol_Personas_idRol_Personas` int(11) DEFAULT NULL,
  `FECHA_INICIO` datetime DEFAULT NULL,
  `FECHA_FINALIZACION` datetime DEFAULT NULL,
  `SALARIO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contrato_empleados`
--

INSERT INTO `contrato_empleados` (`idCONTRATO_EMPLEADOS`, `Rol_Personas_idRol_Personas`, `FECHA_INICIO`, `FECHA_FINALIZACION`, `SALARIO`) VALUES
(1, 1, '2015-12-01 00:00:00', '2018-12-05 00:00:00', 1200000),
(2, 3, '2018-12-05 00:00:00', NULL, 1300000),
(3, 2, '2017-12-07 00:00:00', '2019-12-12 00:00:00', 1100000),
(4, 4, '2019-12-08 00:00:00', NULL, 900000),
(5, 7, '2020-01-01 00:00:00', NULL, 900000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `ROL_idROL` int(11) DEFAULT NULL,
  `idPersonas` int(11) NOT NULL,
  `Cedula` bigint(20) DEFAULT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Apellidos` varchar(40) DEFAULT NULL,
  `Celular` bigint(20) DEFAULT NULL,
  `Direccion` varchar(40) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `Usuario` varchar(20) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ROL_idROL`, `idPersonas`, `Cedula`, `Nombre`, `Apellidos`, `Celular`, `Direccion`, `Correo`, `Usuario`, `Contrasena`, `token`) VALUES
(2, 1, 1122, 'Lorena', '	Ramirez', 432423, 'KR 88', 'LORENA@GMAIL.COM', 'LORENA22', 'ed265bc903a5a097f61d3ec064d96d2e', 'CXGBmQQwCn'),
(2, 2, 3322, 'Fabio', '	Ortega', 234234, '	KR 66	', 'FABIO@GMAIL.COM', 'FABIO65', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(2, 3, 1234, 'LAURA', '	OCHOA', 788652, 'KR 100', 'LAURA@GMAIL.COM', 'LAURA90', '202cb962ac59075b964b07152d234b70', NULL),
(2, 5, 33225, 'CAMILA', '	PEREZ', 565656, 'KR 01', 'CAMILA@GMAIL.COM', 'CAMILA72', '1234567', NULL),
(1, 6, 3344, 'ZULLY', 'TAMAYO', 845484, 'KR 20 13', 'zullytamayom@gmail.com', 'ZULLY72', '9fe8593a8a330607d76796b35c64c600', NULL),
(3, 7, 44555, 'SEBASTIAN', '	RODRIGUEZ', 4555, 'KR 23 45', 'SEBASTIAN@GMAIL.COM', 'SEBASTIAN72', '202cb962ac59075b964b07152d234b70', NULL),
(3, 8, 5566, 'FREDDY', 'RAMOS', 46346347, 'KR 45 60', 'FREDDY@GMAIL.COM', 'FREDDY72', '202cb962ac59075b964b07152d234b70', NULL),
(2, 12, 909090, 'tatiana', 'arias perez', 12149249489, 'cl 12 12 12', 'tatiana@gmail.com', 'tati10', 'ec6a6536ca304edf844d1d248a4f08dc', NULL),
(2, 13, 79, 'Heiver', 'Cuesta', 34232145, 'cr 30', 'heiver@gmail.com', 'heiver', '202cb962ac59075b964b07152d234b70', NULL),
(3, 16, 777, 'Camilo', 'Medina', 313223, 'cl 161', 'camilomedina@gmail.com', 'cami83', '202cb962ac59075b964b07152d234b70', NULL),
(2, 17, 999, 'yineth', 'martinez', 312441, 'cl 67 67', 'yineth@gmail.com', 'yineth1', '202cb962ac59075b964b07152d234b70', NULL),
(2, 19, 40390752, 'Lilia', 'Martinez gongora', 3132948318, 'carrera 8 no 17-42 casa 2 fundadores', 'limartigo@hotmail.com', 'lilimar', '827ccb0eea8a706c4c34a16891f84e7b', 'o12dsVk9u9'),
(2, 20, 909090, 'tatiana', 'arias perez', 12149249489, 'cl 12 12 12', 'tatiana@gmail.com', 'tati10', 'ec6a6536ca304edf844d1d248a4f08dc', NULL),
(3, 21, 30493058, 'Felipe', 'Arias', 31415355, 'CL 3 NO 4 5', 'felipe@gmail.com', 'pipelon', '202cb962ac59075b964b07152d234b70', NULL),
(2, 22, 9834768397, 'Gustavo Francisco', 'Petro Urrego', 414253425, 'cl 45 45 45 ', 'gustavou@gmail.com', 'gus10', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
(3, 24, 16238635, 'Daniela', 'Ñañez', 3149358357, 'cl 34 45 56 ', 'daniela@gmail.com', 'dani23', 'd9b1d7db4cd6e70935368a1efb10e377', NULL),
(2, 25, 14425354, 'nayibe', 'sanchez', 31248584, 'cl 12 3 2', 'nayibe@gmail.com', 'nayibe1', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(3, 27, 45, 'kiko', 'jul', 7632573, '3', 'kiko@gmail.com', 'kiko2', '202cb962ac59075b964b07152d234b70', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idRESERVAS` int(11) NOT NULL COMMENT 'Identificador de la reserva',
  `Cliente` int(11) DEFAULT NULL COMMENT 'Id del cliente que hace la reserva',
  `Empleado` int(11) DEFAULT NULL,
  `SERVICIOS_idSERVICIOS` int(11) DEFAULT NULL COMMENT 'Id del tipo d  servicio',
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Observaciones` varchar(400) DEFAULT NULL,
  `Precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`idRESERVAS`, `Cliente`, `Empleado`, `SERVICIOS_idSERVICIOS`, `Fecha`, `Hora`, `Observaciones`, `Precio`) VALUES
(1, 3, NULL, 3, '2020-05-05', '08:00:00', NULL, 14000),
(2, 5, NULL, 4, '2020-05-05', '09:00:00', NULL, 10000),
(3, 6, NULL, 4, '2020-08-07', '10:10:00', NULL, 50000),
(4, 2, NULL, 2, '2020-05-04', '10:30:00', NULL, 14000),
(5, 7, NULL, 2, '2020-05-09', '11:30:00', NULL, 10000),
(6, 5, NULL, 5, '2020-06-02', '04:30:00', NULL, 16000),
(7, 1, NULL, 5, '2020-06-02', '12:00:00', NULL, 16000),
(8, NULL, NULL, 1, '2000-02-23', '17:05:00', 'asfksf', 12000),
(9, NULL, NULL, 2, '2020-03-11', '12:00:00', '', 12000),
(10, 1, NULL, 1, '2002-02-22', '12:12:00', '', 12000),
(11, 1, NULL, 1, '2000-02-20', '17:05:00', '', 17000),
(12, NULL, NULL, NULL, '2020-12-12', '12:12:00', '', 12000),
(13, NULL, NULL, 1, '2020-12-12', '12:00:00', '', 14000),
(14, 3, NULL, 3, '2020-12-12', '12:12:00', '', 15000),
(15, 3, NULL, 3, '2000-02-24', '12:00:00', '', 14000),
(16, 3, NULL, 1, '2020-03-23', '13:00:00', '', 10000),
(17, 3, NULL, 1, '0000-00-00', '09:08:00', '', 7450),
(18, 3, NULL, 1, '2002-02-02', '00:12:00', '', 14850),
(19, 3, NULL, 3, '2020-06-06', '00:12:00', 'prueba', 30001),
(20, 3, NULL, 6, '2020-10-10', '12:12:00', 'prueba2', 14000),
(21, 3, NULL, 6, '2020-10-10', '12:12:00', 'prueba2', 14000),
(22, 3, NULL, 3, '2020-03-20', '00:12:00', 'probando insert clientes', 14000),
(23, 3, NULL, 2, '2020-12-12', '12:12:00', 'probando cliente lorena', 14000),
(24, 3, NULL, 2, '2020-12-12', '00:12:00', 'probando cliente fabio', 14000),
(25, 3, NULL, 2, '2020-12-12', '21:35:00', 'probando con cliente paula hora 935', 14000),
(26, 3, NULL, 2, '2002-09-09', '21:09:00', 'servicio manicure , empleado sebastian, cliente Heiver, fecha 09092002 hora 99pm', 14890),
(27, 3, NULL, 5, '2020-12-12', '12:12:00', 'prueba servicio peinado, empleado Freddy, cliente Heiver,  fecha 12/12/2020 , hora 1212 ----ULTIMA INSERCION', 14000),
(28, 3, NULL, 1, '1222-12-12', '00:12:00', 'prueba servicio pedicure,empleado Jhon, cliente Heiver, fecha 12-12-1222, hora 1212', 15555),
(29, 3, NULL, 3, '0009-09-09', '15:03:00', 'empleado sebastian, corte cabello, andrea,09090009, hora 0303 pm', 15590),
(30, 3, NULL, 3, '2000-12-12', '00:12:00', 'prueba final final', 15789),
(31, 3, NULL, 1, '2020-02-22', '12:12:00', 'PRUEBA CAMI', 14980),
(38, NULL, NULL, 1, '3200-02-23', '12:30:00', 'ksngejgnurgnoejnveon prueba 24 marzo', 1200),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, 1, '2020-12-12', '12:00:00', 'wkmveoimvreovmed prueba 24 marzo zzzzzzz', 12000),
(41, 8, 13, 1, '0009-09-12', '12:00:00', 'kwnveubveugn3ro prueba equis', 14000),
(42, 16, 5, 6, '0090-12-12', '12:00:00', 'no inserta', 4),
(43, 12, 1, 4, '2020-05-10', '12:20:00', 'Última prueba', 25000),
(44, 7, 19, 1, '0001-01-12', '12:00:00', 'pruebita veinticinco', 12),
(45, 18, 20, 1, '0000-00-00', '12:12:00', 'tatiana pedicure lucho 1212pm 1212', 13000),
(46, 21, 19, 3, '0002-02-22', '00:12:00', 'kjdhfwoeihfeowhn', 12000),
(47, 23, 22, 1, '2020-03-28', '16:00:00', '', 14000),
(48, 24, 25, 1, '2020-04-03', '15:00:00', 'llamar a confirmar antes de las 12 del mediodia.', 12000),
(49, 27, 19, 1, '2021-12-12', '12:12:00', 'toca hasta el proximo año por el coronavirus', 12000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idROL` int(11) NOT NULL,
  `NOMBRE_ROL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idROL`, `NOMBRE_ROL`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_empleado`
--

CREATE TABLE `rol_empleado` (
  `idROL_EMPLEADO` int(11) NOT NULL,
  `Nombre_Rol_Empleado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_empleado`
--

INSERT INTO `rol_empleado` (`idROL_EMPLEADO`, `Nombre_Rol_Empleado`) VALUES
(1, '	Peluquero'),
(2, 'Peluquero 2'),
(3, 'Pedicurista'),
(4, 'Peinados'),
(5, 'Manicurista'),
(6, 'Tinturas'),
(7, 'Depilacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_personas`
--

CREATE TABLE `rol_personas` (
  `idRol_Personas` int(11) NOT NULL,
  `ROL_EMPLEADO_idROL_EMPLEADO` int(11) DEFAULT NULL,
  `PERSONAS_idpersonas` int(11) DEFAULT NULL,
  `PERSONAS_idpersonas2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_personas`
--

INSERT INTO `rol_personas` (`idRol_Personas`, `ROL_EMPLEADO_idROL_EMPLEADO`, `PERSONAS_idpersonas`, `PERSONAS_idpersonas2`) VALUES
(1, 1, 6, NULL),
(2, 2, 7, NULL),
(3, 4, 6, NULL),
(4, 3, 7, NULL),
(5, 5, 8, NULL),
(6, 6, 7, NULL),
(7, 7, 8, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idSERVICIOS` int(11) NOT NULL,
  `Tipo_servicio` varchar(20) DEFAULT NULL,
  `Costo` double DEFAULT NULL,
  `Genero` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idSERVICIOS`, `Tipo_servicio`, `Costo`, `Genero`) VALUES
(1, 'PEDICURE', 12000, 'MUJER'),
(2, 'MANICURE', 10000, 'HOMBRE'),
(3, 'CORTE CABELLO', 14000, 'HOMBRE'),
(4, 'TINTURA', 50000, 'MUJER'),
(5, 'PEINADO', 16000, 'MUJER'),
(6, 'CORTE CABELLO 2', 16000, 'MUJER');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contrato_empleados`
--
ALTER TABLE `contrato_empleados`
  ADD PRIMARY KEY (`idCONTRATO_EMPLEADOS`),
  ADD KEY `Rol_Personas_idRol_Personas` (`Rol_Personas_idRol_Personas`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersonas`),
  ADD KEY `ROL_idROL` (`ROL_idROL`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idRESERVAS`),
  ADD KEY `PERSONAS_idPersonas` (`Cliente`),
  ADD KEY `SERVICIOS_idSERVICIOS` (`SERVICIOS_idSERVICIOS`),
  ADD KEY `FK_Empleado_personas_idPersonas` (`Empleado`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idROL`);

--
-- Indices de la tabla `rol_empleado`
--
ALTER TABLE `rol_empleado`
  ADD PRIMARY KEY (`idROL_EMPLEADO`);

--
-- Indices de la tabla `rol_personas`
--
ALTER TABLE `rol_personas`
  ADD PRIMARY KEY (`idRol_Personas`),
  ADD KEY `ROL_EMPLEADO_idROL_EMPLEADO` (`ROL_EMPLEADO_idROL_EMPLEADO`),
  ADD KEY `PERSONAS_idpersonas` (`PERSONAS_idpersonas`),
  ADD KEY `PERSONAS_idpersonas2` (`PERSONAS_idpersonas2`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idSERVICIOS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contrato_empleados`
--
ALTER TABLE `contrato_empleados`
  MODIFY `idCONTRATO_EMPLEADOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersonas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idRESERVAS` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la reserva', AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `rol_empleado`
--
ALTER TABLE `rol_empleado`
  MODIFY `idROL_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol_personas`
--
ALTER TABLE `rol_personas`
  MODIFY `idRol_Personas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idSERVICIOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato_empleados`
--
ALTER TABLE `contrato_empleados`
  ADD CONSTRAINT `contrato_empleados_ibfk_1` FOREIGN KEY (`Rol_Personas_idRol_Personas`) REFERENCES `rol_personas` (`ROL_EMPLEADO_idROL_EMPLEADO`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`ROL_idROL`) REFERENCES `rol` (`idROL`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `FK_Empleado_personas_idPersonas` FOREIGN KEY (`Empleado`) REFERENCES `personas` (`idPersonas`);

--
-- Filtros para la tabla `rol_personas`
--
ALTER TABLE `rol_personas`
  ADD CONSTRAINT `rol_personas_ibfk_1` FOREIGN KEY (`ROL_EMPLEADO_idROL_EMPLEADO`) REFERENCES `rol_empleado` (`idROL_EMPLEADO`),
  ADD CONSTRAINT `rol_personas_ibfk_2` FOREIGN KEY (`PERSONAS_idpersonas`) REFERENCES `personas` (`idPersonas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
