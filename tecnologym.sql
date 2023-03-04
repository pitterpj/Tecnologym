-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2023 a las 13:34:39
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
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_class` int(11) NOT NULL,
  `id_worker` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `day` date NOT NULL,
  `hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`avatar`, `id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES
('avatar_img', 1, 1, 1, 12, '2023-03-05', '13:32:00'),
('avatar_img', 2, 1, 3, 10, '2023-03-06', '10:33:00'),
('avatar_img', 3, 3, 6, 9, '2023-03-04', '16:33:00'),
('avatar_img', 4, 2, 1, 8, '2023-03-04', '19:33:00');

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
(1, 4, 38.9, 79.8, '2023-03-01');

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
(1, 1, 1, '2023-03-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id_person`, `name`, `lastname`, `user`, `password`, `email`, `phone`, `avatar`) VALUES
(1, 'director01', 'lastname director01', 'director01', '1234', 'director01@email.com', '123456789', 'avatar'),
(2, 'coordinador01', 'lastname coordinador01', 'coordinador01', '1234', 'coordinador01@email.com', '789456123', 'avatar'),
(3, 'monitor01', 'lastname monitor01', 'monitor01', '1234', 'monitor01@email.com', '789456123', 'avatar'),
(4, 'cliente01', 'lastname cliente01', '', '', '', '', 'avatar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `name_skill` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`id_skill`, `name_skill`, `level`) VALUES
(1, 'AquaZumba', '1'),
(2, 'Boxing', '2'),
(3, 'Attack', '3'),
(4, 'BodyPump', '3'),
(5, 'Pilates', '1'),
(6, 'Yoga', '2');

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
(1, 1, 40),
(2, 2, 40),
(3, 3, 30);

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
(2, 1),
(2, 6),
(3, 5),
(3, 6);

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
(3, 3);

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
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `log_training`
--
ALTER TABLE `log_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
