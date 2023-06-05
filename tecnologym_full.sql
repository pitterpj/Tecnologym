-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2023 a las 18:05:57
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
-- Base de datos: `tecnologym_full`
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
(50, 1, 1, 7, '2023-06-06', '11:00:00'),
(51, 1, 3, 8, '2023-06-05', '12:30:00'),
(52, 1, 4, 9, '2023-06-06', '13:30:00'),
(53, 1, 2, 11, '2023-06-06', '11:30:00'),
(54, 1, 5, 14, '2023-06-06', '16:30:00'),
(55, 1, 6, 13, '2023-06-06', '17:30:00'),
(56, 1, 7, 15, '2023-06-06', '18:30:00'),
(57, 1, 3, 17, '2023-06-06', '20:30:00'),
(58, 1, 1, 11, '2023-06-05', '17:30:00'),
(59, 1, 2, 9, '2023-06-05', '18:30:00'),
(60, 1, 4, 11, '2023-06-05', '11:00:00'),
(61, 1, 5, 6, '2023-06-05', '13:30:00'),
(62, 1, 6, 17, '2023-06-05', '08:30:00'),
(63, 1, 7, 14, '2023-06-05', '13:30:00'),
(64, 2, 1, 11, '2023-06-05', '10:55:00'),
(65, 2, 1, 7, '2023-06-06', '11:00:00'),
(66, 1, 3, 8, '2023-06-06', '18:00:00'),
(67, 2, 4, 9, '2023-06-06', '20:00:00'),
(68, 3, 5, 10, '2023-06-06', '17:00:00'),
(69, 2, 3, 5, '2023-06-05', '17:05:00');

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

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id`, `id_person`, `notification`) VALUES
(56, 4, '¡Nueva habilidad desbloqueada!'),
(58, 1, '¡Nueva habilidad desbloqueada!');

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
(3, 'María Cremita', 'Lorenzo Cremita', 'Elena', '1234', 'elena@correo.es', '632148954', '1685976026_elena.jpg'),
(4, 'Darío', 'Estevez', 'Dario', '1234', 'dario@correo.es', '658741258', '1678732733_1678260632_dario.jpg'),
(5, 'Daniel', 'García', 'Daniel', '1234', 'daniel@correo.es', '698963258', '1678260759_daniel.jpg');

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
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `log_training`
--
ALTER TABLE `log_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
