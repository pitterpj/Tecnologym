-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 12:44:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

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
(1, 1, 1, 12, '2023-06-12', '10:00:00'),
(2, 1, 2, 12, '2023-06-12', '11:00:00'),
(3, 1, 3, 14, '2023-06-12', '12:00:00'),
(4, 1, 4, 11, '2023-06-12', '13:00:00'),
(5, 1, 5, 13, '2023-06-12', '16:00:00'),
(6, 1, 6, 5, '2023-06-12', '17:00:00'),
(7, 1, 4, 9, '2023-06-12', '19:00:00'),
(8, 1, 5, 8, '2023-06-12', '20:00:00'),
(9, 1, 7, 9, '2023-06-12', '18:00:00'),
(10, 1, 3, 14, '2023-06-14', '12:00:00'),
(11, 1, 4, 11, '2023-06-14', '13:00:00'),
(12, 1, 5, 13, '2023-06-14', '16:00:00'),
(13, 1, 6, 5, '2023-06-14', '17:00:00'),
(14, 1, 4, 9, '2023-06-14', '19:00:00'),
(15, 1, 5, 8, '2023-06-14', '20:00:00'),
(16, 1, 7, 9, '2023-06-14', '18:00:00'),
(17, 2, 3, 14, '2023-06-12', '12:00:00'),
(18, 2, 4, 11, '2023-06-12', '13:00:00'),
(19, 2, 3, 13, '2023-06-12', '16:00:00'),
(20, 2, 6, 5, '2023-06-12', '17:00:00'),
(21, 2, 4, 9, '2023-06-12', '19:00:00'),
(22, 2, 5, 8, '2023-06-12', '20:00:00'),
(23, 2, 7, 9, '2023-06-12', '18:00:00'),
(24, 2, 3, 14, '2023-06-14', '12:00:00'),
(25, 2, 4, 11, '2023-06-14', '13:00:00'),
(26, 2, 3, 13, '2023-06-14', '16:00:00'),
(27, 2, 6, 5, '2023-06-14', '17:00:00'),
(28, 2, 4, 9, '2023-06-14', '19:00:00'),
(29, 2, 5, 8, '2023-06-14', '20:00:00'),
(30, 2, 7, 9, '2023-06-14', '18:00:00'),
(31, 2, 3, 13, '2023-06-15', '16:00:00'),
(32, 2, 6, 5, '2023-06-15', '17:00:00'),
(33, 2, 4, 9, '2023-06-17', '19:00:00'),
(34, 2, 5, 8, '2023-06-17', '20:00:00'),
(35, 2, 7, 9, '2023-06-17', '18:00:00'),
(36, 3, 5, 14, '2023-06-14', '12:00:00'),
(37, 3, 5, 11, '2023-06-14', '13:00:00'),
(38, 3, 6, 13, '2023-06-14', '16:00:00'),
(39, 3, 6, 5, '2023-06-14', '17:00:00'),
(40, 3, 7, 9, '2023-06-14', '19:00:00'),
(41, 3, 5, 8, '2023-06-14', '20:00:00'),
(42, 3, 7, 9, '2023-06-14', '18:00:00'),
(43, 3, 5, 14, '2023-06-15', '12:00:00'),
(44, 3, 5, 11, '2023-06-16', '13:00:00'),
(45, 3, 6, 13, '2023-06-15', '16:00:00'),
(46, 3, 6, 5, '2023-06-17', '17:00:00'),
(47, 3, 7, 9, '2023-06-20', '19:00:00'),
(48, 3, 5, 8, '2023-06-22', '20:00:00'),
(49, 3, 7, 9, '2023-06-25', '18:00:00'),
(50, 4, 2, 14, '2023-06-15', '12:00:00'),
(51, 4, 3, 11, '2023-06-16', '13:00:00'),
(52, 4, 4, 13, '2023-06-15', '16:00:00'),
(53, 4, 3, 5, '2023-06-17', '17:00:00'),
(54, 4, 4, 9, '2023-06-20', '19:00:00'),
(55, 4, 2, 8, '2023-06-22', '20:00:00'),
(56, 4, 2, 9, '2023-06-25', '18:00:00'),
(57, 4, 2, 14, '2023-06-14', '12:00:00'),
(58, 4, 3, 11, '2023-06-14', '13:00:00'),
(59, 4, 4, 13, '2023-06-14', '16:00:00'),
(60, 4, 3, 5, '2023-06-14', '17:00:00'),
(61, 4, 4, 9, '2023-06-14', '19:00:00'),
(62, 4, 2, 8, '2023-06-14', '20:00:00'),
(63, 4, 2, 9, '2023-06-14', '18:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `BMI` double NOT NULL DEFAULT 0,
  `weight` double NOT NULL DEFAULT 0,
  `birth_date` date NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id_client`, `id_person`, `BMI`, `weight`, `birth_date`, `comments`) VALUES
(1, 6, 21, 45, '1989-02-17', 'Nota sobre progeso de rendimiento de fuerza y mindfullnes'),
(2, 7, 22, 55, '1990-02-09', 'Progeso de cardio y realización de ejercicos de musculación favorables');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `notification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `user` varchar(70) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id_person`, `name`, `lastname`, `user`, `password`, `email`, `phone`, `avatar`) VALUES
(1, 'Pedro', 'Jorge Cid', 'Pitter', '1234', 'pitter@pitter.es', '603548778', '1685812582_Avatar_Pitter-PJ_sonrisa.png'),
(2, 'Alpha Luis', 'Almendral', 'Alpha', '1234', 'alpha@correo.es', '684658753', '1685976100_alpha.jpg'),
(3, 'María Elena', 'Lorenzo ', 'Elena', '1234', 'elena@correo.es', '632148957', '1686562780_1678261701_crematia.jpg'),
(4, 'Darío', 'Estevez', 'Dario', '1234', 'dario@correo.es', '658741258', '1678732733_1678260632_dario.jpg'),
(5, 'Daniel', 'García', 'Daniel', '1234', 'daniel@correo.es', '698963258', '1678260759_daniel.jpg'),
(6, 'Isabel', 'DWES', NULL, NULL, NULL, NULL, '1686152727_avatar.jpg'),
(7, 'Jesús', 'DWEC', NULL, NULL, NULL, NULL, '1686152775_avatar_person.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `img` varchar(255) NOT NULL,
  `id_skill` int(11) NOT NULL,
  `name_skill` varchar(70) NOT NULL,
  `level` varchar(1) NOT NULL DEFAULT '1'
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
  `id_worker` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `hours` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `worker`
--

INSERT INTO `worker` (`id_worker`, `id_person`, `hours`) VALUES
(1, 1, 0),
(2, 2, 30),
(3, 3, 40),
(4, 4, 40),
(5, 5, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker_skill`
--

CREATE TABLE `worker_skill` (
  `id_worker` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(2, 2),
(2, 3),
(2, 4),
(2, 6),
(2, 7),
(3, 5),
(3, 6),
(3, 7),
(4, 2),
(4, 3),
(4, 4);

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
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_person` (`id_person`);

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
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `log_training`
--
ALTER TABLE `log_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`);

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
