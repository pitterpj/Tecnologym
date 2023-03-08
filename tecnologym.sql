-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2023 a las 10:47:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnologym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `id_worker` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  `capacity` int(11) NOT NULL DEFAULT 12,
  `day` date NOT NULL,
  `hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES
(1, 1, 1, 7, '2023-03-07', '21:00:00'),
(2, 1, 4, 12, '2023-03-07', '22:00:00'),
(3, 1, 6, 12, '2023-03-08', '14:01:00'),
(4, 1, 2, 8, '2023-03-08', '16:00:00'),
(5, 1, 5, 9, '2023-03-08', '14:31:00'),
(6, 1, 7, 77, '2023-03-08', '16:55:00'),
(7, 1, 1, 6, '2023-04-01', '07:55:00'),
(8, 1, 1, 1, '2023-05-10', '22:51:00'),
(9, 1, 3, 12, '2023-03-15', '11:50:00'),
(10, 1, 2, 7, '2023-03-15', '10:01:00'),
(11, 1, 6, 11, '2023-03-08', '14:11:00'),
(12, 2, 1, 13, '2023-03-08', '11:43:00'),
(13, 2, 4, 11, '2023-03-08', '10:45:00'),
(14, 2, 1, 15, '2023-03-08', '15:43:00'),
(15, 3, 5, 45, '2023-03-08', '14:44:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `BMI` double NOT NULL DEFAULT 0,
  `weight` double NOT NULL DEFAULT 0,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id_client`, `id_person`, `BMI`, `weight`, `birth_date`) VALUES
(1, 7, 25.7, 55, '1983-06-08'),
(2, 8, 25.5, 66, '1972-11-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_training`
--

CREATE TABLE `log_training` (
  `id_training` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_worker` int(11) NOT NULL,
  `training_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `log_training`
--

INSERT INTO `log_training` (`id_training`, `id_client`, `id_worker`, `training_date`) VALUES
(1, 1, 1, '2023-03-08'),
(2, 1, 1, '2023-03-09'),
(3, 2, 1, '2023-03-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id_person`, `name`, `lastname`, `user`, `password`, `email`, `phone`, `avatar`) VALUES
(1, 'Pedro', 'Jorge Cid', 'Pitter', '1234', 'pitter@pitter.es', '603548777', '1678259863_Avatar_Pitter-PJ_sonrisa.png'),
(2, 'Alpha Luis', 'Almendral', 'Alpha', '1234', 'alpha@correo.es', '123123123', '1678260321_alphaPerrito.jpg'),
(3, 'María Cremita', 'Lorenzo Cremi', 'Elena', '1234', 'email@cremi.es', '123456456', '1678261701_crematia.jpg'),
(4, 'Darío', 'Estevez', 'Dario', '1234', 'dario@dario.es', '123123123', '1678260632_dario.jpg'),
(5, 'Daniel', 'García', 'Daniel', '1234', 'daniel@daniel.es', '123123123', '1678260759_daniel.jpg'),
(6, 'María', 'Srta.M', 'Maria', '1234', 'maria@correo.es', '345345345', NULL),
(7, 'Isabel', 'Cortés', NULL, NULL, 'isabel@correo.es', '123666666', '1678268521_Mindfulnes.jpg'),
(8, 'Jesús', 'Labrador', NULL, NULL, 'jesuslab@correo.es', '066736456', '1678268530_jesus.jpg'),
(12, 'Prueba', 'prueba', 'prueba', '1234', 'prueba@correo.es', '123546123', '1678264221_test.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_skill` int(11) NOT NULL,
  `name_skill` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`img`, `id_skill`, `name_skill`, `level`) VALUES
('1678217903_Bodypump.png', 1, 'BodyPump', '1'),
('1678217923_BodyStep.png', 2, 'BodyStep', '1'),
('1678217933_Boxing.png', 3, 'Boxing', '3'),
('1678217940_Ciclo.png', 4, 'Ciclo', '2'),
('1678217947_Combat.png', 5, 'Combat', '1'),
('1678217961_Fusion.png', 6, 'HBX Fusion', '3'),
('1678217968_Zumba.png', 7, 'Zumba', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `role` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Director, Coordinator, Manager, Monitor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type`
--

INSERT INTO `type` (`id_type`, `role`) VALUES
(1, 'Director'),
(2, 'Coordinador'),
(3, 'Monitor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker`
--

CREATE TABLE `worker` (
  `id_worker` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `hours` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `worker`
--

INSERT INTO `worker` (`id_worker`, `id_person`, `hours`) VALUES
(1, 1, 30),
(2, 2, 30),
(3, 3, 41),
(4, 4, 40),
(5, 5, 40),
(6, 6, 40),
(11, 12, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker_skill`
--

CREATE TABLE `worker_skill` (
  `id_worker` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `worker_skill`
--

INSERT INTO `worker_skill` (`id_worker`, `id_skill`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 1),
(2, 3),
(2, 4),
(2, 6),
(3, 1),
(3, 1),
(3, 1),
(3, 1),
(3, 1),
(3, 5),
(3, 6),
(3, 7),
(4, 2),
(4, 4),
(5, 1),
(5, 2),
(6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker_type`
--

CREATE TABLE `worker_type` (
  `id_worker` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `worker_type`
--

INSERT INTO `worker_type` (`id_worker`, `id_type`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(11, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `id_skill` (`id_skill`),
  ADD KEY `id_worker` (`id_worker`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_person` (`id_person`);

--
-- Indices de la tabla `log_training`
--
ALTER TABLE `log_training`
  ADD PRIMARY KEY (`id_training`),
  ADD KEY `id_client` (`id_client`,`id_worker`),
  ADD KEY `id_worker` (`id_worker`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Indices de la tabla `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indices de la tabla `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indices de la tabla `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id_worker`),
  ADD KEY `id_person` (`id_person`);

--
-- Indices de la tabla `worker_skill`
--
ALTER TABLE `worker_skill`
  ADD KEY `id_worker` (`id_worker`,`id_skill`),
  ADD KEY `id_skill` (`id_skill`);

--
-- Indices de la tabla `worker_type`
--
ALTER TABLE `worker_type`
  ADD KEY `id_worker` (`id_worker`,`id_type`),
  ADD KEY `id_type` (`id_type`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `log_training`
--
ALTER TABLE `log_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`id_skill`) REFERENCES `skill` (`id_skill`),
  ADD CONSTRAINT `class_ibfk_4` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`);

--
-- Filtros para la tabla `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `log_training`
--
ALTER TABLE `log_training`
  ADD CONSTRAINT `log_training_ibfk_2` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`),
  ADD CONSTRAINT `log_training_ibfk_3` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `worker_skill`
--
ALTER TABLE `worker_skill`
  ADD CONSTRAINT `worker_skill_ibfk_2` FOREIGN KEY (`id_skill`) REFERENCES `skill` (`id_skill`),
  ADD CONSTRAINT `worker_skill_ibfk_3` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `worker_type`
--
ALTER TABLE `worker_type`
  ADD CONSTRAINT `worker_type_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`),
  ADD CONSTRAINT `worker_type_ibfk_3` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
