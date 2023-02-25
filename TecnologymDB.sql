-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-02-2023 a las 10:53:58
-- Versión del servidor: 8.0.32-0ubuntu0.22.04.2
-- Versión de PHP: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pjorgec04`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE `class` (
  `id_class` int NOT NULL,
  `id_worker` int NOT NULL,
  `id_skill` int NOT NULL,
  `capacity` int DEFAULT NULL,
  `day` enum('lunes','martes','miercoles','jueves','viernes','sabado','domingo') NOT NULL,
  `hour` enum('7:35','8:30','9:30','10:30','11:30','12:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES
(1, 1, 11, 12, 'lunes', '7:35'),
(2, 2, 5, 10, 'lunes', '8:30'),
(3, 2, 6, 12, 'lunes', '9:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id_client` int NOT NULL,
  `id_person` int NOT NULL,
  `BMI` double NOT NULL DEFAULT '0',
  `weight` double NOT NULL DEFAULT '0',
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id_client`, `id_person`, `BMI`, `weight`, `birth_date`) VALUES
(1, 4, 34.7, 88, '1994-01-08'),
(2, 5, 21.3, 77.5, '1996-02-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_training`
--

CREATE TABLE `log_training` (
  `id_training` int NOT NULL,
  `id_client` int NOT NULL,
  `id_worker` int NOT NULL,
  `training_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `log_training`
--

INSERT INTO `log_training` (`id_training`, `id_client`, `id_worker`, `training_date`) VALUES
(1, 1, 4, '2023-02-21'),
(2, 1, 4, '2023-02-20'),
(3, 2, 4, '2023-02-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id_person` int NOT NULL,
  `name` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `user` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id_person`, `name`, `lastname`, `user`, `password`, `email`, `phone`, `avatar`) VALUES
(1, 'director01', 'apellidos director01', 'director01', '1234', 'director01@correo.es', '123456789', 'img'),
(2, 'coordinador01', 'apellidos coordinador01', 'coordinador01', '1234', 'coordinador01@email.com', '987654321', 'img'),
(3, 'monitor01', 'apellidos monitor01', 'monitor01', '1234', 'monitor01@email.com', '123456789', 'img'),
(4, 'cliente01', 'apellidos cliente01', 'cliente01', '1234', 'cliente01@correo.es', '987654321', 'img'),
(5, 'cliente02', 'apellidos cliente02', 'cliente02', '1234', 'cliente02@correo.es', '159357789', 'img'),
(6, 'monitor02', 'apellidos monitor02', 'monitor02', '1234', 'monitor02@correo.es', '123456789', 'img'),
(7, 'monitor03', 'apellidos monitor03', 'monitor03', '1234', 'monitor03@correo.es', '789456132', 'img');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `id_skill` int NOT NULL,
  `name_skill` varchar(70) NOT NULL,
  `level` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`id_skill`, `name_skill`, `level`) VALUES
(1, 'Ciclo', '2'),
(2, 'Zumba', '1'),
(3, 'Pilates', '1'),
(4, 'AquaTraining', 'P'),
(5, 'Boxing', '3'),
(6, 'BodyPump', '1'),
(7, 'BodyStep', '1'),
(8, 'Balance', '3'),
(9, 'Fusion', '3'),
(10, 'VitalFit', '1'),
(11, 'Combat', '1'),
(12, 'Strong', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type`
--

CREATE TABLE `type` (
  `id_type` int NOT NULL,
  `role` varchar(70) NOT NULL COMMENT 'Director, Coordinator, Manager, Monitor'
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
  `id_worker` int NOT NULL,
  `id_person` int NOT NULL,
  `hours` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `worker`
--

INSERT INTO `worker` (`id_worker`, `id_person`, `hours`) VALUES
(1, 1, 40),
(2, 2, 40),
(3, 3, 30),
(4, 6, 30),
(5, 7, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker_skill`
--

CREATE TABLE `worker_skill` (
  `id_worker` int NOT NULL,
  `id_skill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker_type`
--

CREATE TABLE `worker_type` (
  `id_worker` int NOT NULL,
  `id_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `worker_type`
--

INSERT INTO `worker_type` (`id_worker`, `id_type`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 3),
(4, 3),
(5, 3);

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
  MODIFY `id_class` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `log_training`
--
ALTER TABLE `log_training`
  MODIFY `id_training` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `log_training_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `log_training_ibfk_2` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`);

--
-- Filtros para la tabla `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `worker_skill`
--
ALTER TABLE `worker_skill`
  ADD CONSTRAINT `worker_skill_ibfk_1` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `worker_skill_ibfk_2` FOREIGN KEY (`id_skill`) REFERENCES `skill` (`id_skill`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `worker_type`
--
ALTER TABLE `worker_type`
  ADD CONSTRAINT `worker_type_ibfk_1` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`id_worker`),
  ADD CONSTRAINT `worker_type_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
