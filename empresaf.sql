-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2020 a las 12:00:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresaf`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarUsuario` (IN `id` TINYINT(4), IN `nombre` VARCHAR(30), IN `apellido` VARCHAR(30), IN `direccion` VARCHAR(25), IN `telefono` MEDIUMINT(9), IN `correo` VARCHAR(30))  UPDATE `usuario` SET `nombre`=`nombre`,`apellido`=`apellido`,
`direccion`=`direccion`, `telefono`=`telefono`, `correo`=`correo`

where `id`=`id`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `asdsdsa` (IN `id` TINYINT(4))  INSERT INTO `usuario`(`id`) VALUES (`id`)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarUsuario` (IN `id` TINYINT(4))  NO SQL
Select * From `usuario` Where `id`=`id`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarUsuario` (IN `id` TINYINT(4))  DELETE FROM `usuario` WHERE `usuario`.`id` = `id`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inhabilitarUsuario` (IN `id` TINYINT(4))  Update  
	`usuario` 
Set
	`estadoUsuario` = 1
where 	
	`id`=`id`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarUsuario` (IN `nombre` VARCHAR(30), IN `apellido` VARCHAR(30), IN `direccion` VARCHAR(25), IN `telefono` MEDIUMINT(9), IN `correo` VARCHAR(25), IN `rol` ENUM('1','2','3',''))  Insert Into `usuario`(`nombre`, `apellido`, `direccion`, `telefono`, `correo`, `rol`) VALUES (`nombre`, `apellido`, `direccion`, `telefono`, `correo`, `rol`)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listarUsuario` ()  Select * From usuario$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `licencia` int(11) NOT NULL,
  `categoria` enum('A1','A2','B1','B2','B3','C1','C2','C3') CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `observaciones` enum('01','02','03','00') CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `id` tinyint(4) NOT NULL,
  `estadoLimite` enum('1','2','3','') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`licencia`, `categoria`, `observaciones`, `id`, `estadoLimite`) VALUES
(100061570, 'C2', '00', 4, '1'),
(1000776042, 'C3', '03', 3, '1');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `conductorr`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `conductorr` (
`CC` int(11)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`direccion` varchar(25)
,`telefono` mediumint(9)
,`correo` varchar(30)
,`estadoUsuario` bit(1)
,`clave` varchar(25)
,`licencia` int(11)
,`categoria` enum('A1','A2','B1','B2','B3','C1','C2','C3')
,`observaciones` enum('01','02','03','00')
,`id` tinyint(4)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `tipo` enum('Ambulancia Colectiva','Ambulancia Individual','Ambulancia UVI Móvil','Ambulancia Soporte Vital Básico','Vehículo de Asistencia Médica y Enfermería','Hospital de campaña','Unidad Logística de AMV','Incubadora Neonatal') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `marca` enum('Renault Trafic','Nissan Primastar','Opel Vivaro','Peugeot Expert','Fiat Scudo','Citroen Jumpy','Volkswagen Transporter','Mercedes-Benz Vito','Ford Transit Custom') COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci COMMENT='Detalles de otras tablas ';

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`tipo`, `marca`) VALUES
('Ambulancia Colectiva', 'Renault Trafic'),
('Ambulancia Individual', 'Nissan Primastar'),
('Ambulancia UVI Móvil', 'Opel Vivaro'),
('Ambulancia Soporte Vital Básico', 'Peugeot Expert'),
('Vehículo de Asistencia Médica y Enfermería', 'Fiat Scudo'),
('Hospital de campaña', 'Citroen Jumpy'),
('Unidad Logística de AMV', 'Volkswagen Transporter'),
('Incubadora Neonatal', 'Mercedes-Benz Vito');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informacionconductor`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `informacionconductor` (
`id` tinyint(4)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`direccion` varchar(25)
,`telefono` mediumint(9)
,`correo` varchar(30)
,`licencia` int(11)
,`categoria` enum('A1','A2','B1','B2','B3','C1','C2','C3')
,`observaciones` enum('01','02','03','00')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informacionpaciente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `informacionpaciente` (
`id` tinyint(4)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`direccion` varchar(25)
,`telefono` mediumint(9)
,`correo` varchar(30)
,`codigoPaciente` tinyint(4)
,`rh` enum('ABp','ABn','Ap','An','Bp','Bn','Op','On')
,`discapacidad` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informacionservicio`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `informacionservicio` (
`codigoServicio` tinyint(4)
,`fecha_hora` timestamp
,`precauciones` varchar(150)
,`codigoPaciente` tinyint(4)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`direccion` varchar(25)
,`telefono` mediumint(9)
,`licencia` int(11)
,`nombrec` varchar(30)
,`apellidoc` varchar(30)
,`observaciones` enum('01','02','03','00')
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `codigoPaciente` tinyint(4) NOT NULL,
  `rh` enum('ABp','ABn','Ap','An','Bp','Bn','Op','On') NOT NULL,
  `discapacidad` varchar(100) NOT NULL,
  `id` tinyint(4) NOT NULL,
  `estadoLimite` enum('1','2','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`codigoPaciente`, `rh`, `discapacidad`, `id`, `estadoLimite`) VALUES
(1, 'On', 'Ceguera', 2, '1'),
(2, 'Op', 'ninguna', 5, '2');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `pacientee`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `pacientee` (
`CC` int(11)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`direccion` varchar(25)
,`telefono` mediumint(9)
,`correo` varchar(30)
,`estadoUsuario` bit(1)
,`clave` varchar(25)
,`codigoPaciente` tinyint(4)
,`rh` enum('ABp','ABn','Ap','An','Bp','Bn','Op','On')
,`discapacidad` varchar(100)
,`id` tinyint(4)
,`estadoLimite` enum('1','2','','')
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `codigoServicio` tinyint(4) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `precauciones` varchar(150) NOT NULL,
  `codigoPaciente` tinyint(4) NOT NULL,
  `licencia` int(11) NOT NULL,
  `codigoVehiculo` tinyint(4) NOT NULL,
  `estadoServicio` enum('solicitado','aceptado','concluido','cancelado') NOT NULL DEFAULT 'solicitado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `servicioc`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `servicioc` (
`id` tinyint(4)
,`codigoServicio` tinyint(4)
,`fecha_hora` timestamp
,`precauciones` varchar(150)
,`codigoPaciente` tinyint(4)
,`licencia` int(11)
,`codigoVehiculo` tinyint(4)
,`estadoServicio` enum('solicitado','aceptado','concluido','cancelado')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `servicioo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `servicioo` (
`codigoServicio` tinyint(4)
,`fecha_hora` timestamp
,`precauciones` varchar(150)
,`estadoServicio` enum('solicitado','aceptado','concluido','cancelado')
,`codigoVehiculo` tinyint(4)
,`placa` varchar(10)
,`modelo` year(4)
,`tipo` enum('Ambulancia Colectiva','Ambulancia Individual','Ambulancia UVI Móvil','Ambulancia Soporte Vital Básico','Vehículo de Asistencia Médica y Enfermería','Hospital de campaña','Unidad Logística de AMV','Incubadora Neonatal')
,`marca` enum('Renault Trafic','Nissan Primastar','Opel Vivaro','Peugeot Expert','Fiat Scudo','Citroen Jumpy','Volkswagen Transporter','Mercedes-Benz Vito')
,`estadoVehiculo` bit(1)
,`codigoPaciente` tinyint(4)
,`id` tinyint(4)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`direccion` varchar(25)
,`telefono` mediumint(9)
,`licencia` int(11)
,`idc` tinyint(4)
,`nombrec` varchar(30)
,`apellidoc` varchar(30)
,`observaciones` enum('01','02','03','00')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `serviciop`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `serviciop` (
`id` tinyint(4)
,`codigoServicio` tinyint(4)
,`fecha_hora` timestamp
,`precauciones` varchar(150)
,`codigoPaciente` tinyint(4)
,`licencia` int(11)
,`codigoVehiculo` tinyint(4)
,`estadoServicio` enum('solicitado','aceptado','concluido','cancelado')
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` tinyint(4) NOT NULL,
  `CC` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` mediumint(9) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `clave` varchar(25) NOT NULL,
  `rol` enum('1','2','3','') NOT NULL,
  `estadoUsuario` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `CC`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `clave`, `rol`, `estadoUsuario`) VALUES
(1, 1193122508, 'Oscar Leonardo', 'Bermúdez Moreno', 'Tv 14 A este # 43 A 33 Su', 7313540, 'olbermudez80@misena.edu.co', '1193122508', '1', b'1'),
(2, 1010243625, 'Cristy Nataly', 'Bermúdez Moreno', 'Tv 14 A este # 43 A 33 Su', 7313540, 'cnbermudez0@misena.edu.co', '1010243625', '2', b'1'),
(3, 1000776042, 'Laura Natalia', 'Urrego Bejarano', 'Cll 43 a Bis Sur N 14-24 ', 2273855, 'lnurrego2@misena.edu.co', '1000776042', '3', b'0'),
(4, 100061570, 'Leuberdt Felipe', 'Méndez Rativa ', 'Cll 46 A 2 22', 7314898, 'lfrativa@misena.edu.co', '100061570', '3', b'1'),
(5, 52728700, 'Yuri Natalia', 'Bejarano Jimenez', 'Cll 43 a Bis Sur N 14-24', 2273855, 'ynbejarano27@misena.edu.co', '52728700', '2', b'1'),
(6, 534543, 'sdfsdf', 'sdfsdfsd', 'ewr23', 242341, 'bermudezmorenooscarleonardo@gm', '534543', '2', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `codigoVehiculo` tinyint(4) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `modelo` year(4) DEFAULT NULL,
  `marca` enum('Renault Trafic','Nissan Primastar','Opel Vivaro','Peugeot Expert','Fiat Scudo','Citroen Jumpy','Volkswagen Transporter','Mercedes-Benz Vito') DEFAULT NULL,
  `tipo` enum('Ambulancia Colectiva','Ambulancia Individual','Ambulancia UVI Móvil','Ambulancia Soporte Vital Básico','Vehículo de Asistencia Médica y Enfermería','Hospital de campaña','Unidad Logística de AMV','Incubadora Neonatal') DEFAULT NULL,
  `estadoVehiculo` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`codigoVehiculo`, `placa`, `modelo`, `marca`, `tipo`, `estadoVehiculo`) VALUES
(1, 'EVN085', 1940, 'Citroen Jumpy', 'Ambulancia Colectiva', b'1'),
(2, 'TYT050', 2019, 'Nissan Primastar', 'Ambulancia Colectiva', b'1');

-- --------------------------------------------------------

--
-- Estructura para la vista `conductorr`
--
DROP TABLE IF EXISTS `conductorr`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `conductorr`  AS  select `u`.`CC` AS `CC`,`u`.`nombre` AS `nombre`,`u`.`apellido` AS `apellido`,`u`.`direccion` AS `direccion`,`u`.`telefono` AS `telefono`,`u`.`correo` AS `correo`,`u`.`estadoUsuario` AS `estadoUsuario`,`u`.`clave` AS `clave`,`c`.`licencia` AS `licencia`,`c`.`categoria` AS `categoria`,`c`.`observaciones` AS `observaciones`,`c`.`id` AS `id` from (`usuario` `u` join `conductor` `c` on(`u`.`id` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `informacionconductor`
--
DROP TABLE IF EXISTS `informacionconductor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacionconductor`  AS  select `u`.`id` AS `id`,`u`.`nombre` AS `nombre`,`u`.`apellido` AS `apellido`,`u`.`direccion` AS `direccion`,`u`.`telefono` AS `telefono`,`u`.`correo` AS `correo`,`c`.`licencia` AS `licencia`,`c`.`categoria` AS `categoria`,`c`.`observaciones` AS `observaciones` from (`usuario` `u` join `conductor` `c` on(`u`.`id` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `informacionpaciente`
--
DROP TABLE IF EXISTS `informacionpaciente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacionpaciente`  AS  select `u`.`id` AS `id`,`u`.`nombre` AS `nombre`,`u`.`apellido` AS `apellido`,`u`.`direccion` AS `direccion`,`u`.`telefono` AS `telefono`,`u`.`correo` AS `correo`,`p`.`codigoPaciente` AS `codigoPaciente`,`p`.`rh` AS `rh`,`p`.`discapacidad` AS `discapacidad` from (`usuario` `u` join `paciente` `p` on(`u`.`id` = `p`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `informacionservicio`
--
DROP TABLE IF EXISTS `informacionservicio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacionservicio`  AS  select `s`.`codigoServicio` AS `codigoServicio`,`s`.`fecha_hora` AS `fecha_hora`,`s`.`precauciones` AS `precauciones`,`p`.`codigoPaciente` AS `codigoPaciente`,`p`.`nombre` AS `nombre`,`p`.`apellido` AS `apellido`,`p`.`direccion` AS `direccion`,`p`.`telefono` AS `telefono`,`c`.`licencia` AS `licencia`,`c`.`nombre` AS `nombrec`,`c`.`apellido` AS `apellidoc`,`c`.`observaciones` AS `observaciones` from ((`informacionconductor` `c` join `servicio` `s` on(`c`.`licencia` = `s`.`licencia`)) join `informacionpaciente` `p` on(`s`.`codigoPaciente` = `p`.`codigoPaciente`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `pacientee`
--
DROP TABLE IF EXISTS `pacientee`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pacientee`  AS  select `u`.`CC` AS `CC`,`u`.`nombre` AS `nombre`,`u`.`apellido` AS `apellido`,`u`.`direccion` AS `direccion`,`u`.`telefono` AS `telefono`,`u`.`correo` AS `correo`,`u`.`estadoUsuario` AS `estadoUsuario`,`u`.`clave` AS `clave`,`p`.`codigoPaciente` AS `codigoPaciente`,`p`.`rh` AS `rh`,`p`.`discapacidad` AS `discapacidad`,`p`.`id` AS `id`,`p`.`estadoLimite` AS `estadoLimite` from (`usuario` `u` join `paciente` `p` on(`u`.`id` = `p`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `servicioc`
--
DROP TABLE IF EXISTS `servicioc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `servicioc`  AS  select `c`.`id` AS `id`,`s`.`codigoServicio` AS `codigoServicio`,`s`.`fecha_hora` AS `fecha_hora`,`s`.`precauciones` AS `precauciones`,`s`.`codigoPaciente` AS `codigoPaciente`,`s`.`licencia` AS `licencia`,`s`.`codigoVehiculo` AS `codigoVehiculo`,`s`.`estadoServicio` AS `estadoServicio` from (`conductorr` `c` join `servicio` `s` on(`c`.`licencia` = `s`.`licencia`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `servicioo`
--
DROP TABLE IF EXISTS `servicioo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `servicioo`  AS  select `s`.`codigoServicio` AS `codigoServicio`,`s`.`fecha_hora` AS `fecha_hora`,`s`.`precauciones` AS `precauciones`,`s`.`estadoServicio` AS `estadoServicio`,`v`.`codigoVehiculo` AS `codigoVehiculo`,`v`.`placa` AS `placa`,`v`.`modelo` AS `modelo`,`v`.`tipo` AS `tipo`,`v`.`marca` AS `marca`,`v`.`estadoVehiculo` AS `estadoVehiculo`,`p`.`codigoPaciente` AS `codigoPaciente`,`p`.`id` AS `id`,`p`.`nombre` AS `nombre`,`p`.`apellido` AS `apellido`,`p`.`direccion` AS `direccion`,`p`.`telefono` AS `telefono`,`c`.`licencia` AS `licencia`,`c`.`id` AS `idc`,`c`.`nombre` AS `nombrec`,`c`.`apellido` AS `apellidoc`,`c`.`observaciones` AS `observaciones` from (((`conductorr` `c` join `servicio` `s` on(`c`.`licencia` = `s`.`licencia`)) join `pacientee` `p` on(`s`.`codigoPaciente` = `p`.`codigoPaciente`)) join `vehiculo` `v` on(`s`.`codigoVehiculo` = `v`.`codigoVehiculo`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `serviciop`
--
DROP TABLE IF EXISTS `serviciop`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `serviciop`  AS  select `p`.`id` AS `id`,`s`.`codigoServicio` AS `codigoServicio`,`s`.`fecha_hora` AS `fecha_hora`,`s`.`precauciones` AS `precauciones`,`s`.`codigoPaciente` AS `codigoPaciente`,`s`.`licencia` AS `licencia`,`s`.`codigoVehiculo` AS `codigoVehiculo`,`s`.`estadoServicio` AS `estadoServicio` from (`pacientee` `p` join `servicio` `s` on(`p`.`codigoPaciente` = `s`.`codigoPaciente`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`licencia`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD UNIQUE KEY `tipo` (`tipo`,`marca`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`codigoPaciente`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`codigoServicio`),
  ADD KEY `licencia` (`licencia`) USING BTREE,
  ADD KEY `codigoVehiculo` (`codigoVehiculo`) USING BTREE,
  ADD KEY `codigoPaciente` (`codigoPaciente`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`codigoVehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `codigoPaciente` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `codigoServicio` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `codigoVehiculo` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`codigoPaciente`) REFERENCES `paciente` (`codigoPaciente`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`licencia`) REFERENCES `conductor` (`licencia`),
  ADD CONSTRAINT `servicio_ibfk_3` FOREIGN KEY (`codigoVehiculo`) REFERENCES `vehiculo` (`codigoVehiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
