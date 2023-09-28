-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2023 a las 21:13:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripción` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripción`) VALUES
(1, 'admin'),
(2, 'cliente'),
(3, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `direccion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ciudad` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `provincia` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cp` int(4) NOT NULL,
  `baja` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `direccion`, `ciudad`, `provincia`, `cp`, `baja`) VALUES
(6, 'Guille', 'García', 'guille', 'guillegarcia@gmail.com', '$2y$10$Bh/Qj..YSBRFIZzF9GvX4OrIAzSmOPy2KaNPdYhmeWILRCnsxBX7O', 1, 'Calle Falsa 123', 'Ituzaingo', '', 3302, 'NO'),
(7, 'Ale', 'Herrera', 'aleh', 'aleherrera@gmail.com', '$2y$10$bsiTB/FNW.Ja1BA.covO7eGUAl/korPGTrTk7OvWJDa/e.B7e2UpS', 2, 'Calle Falsa 123', 'Ituzaingo', '', 3302, 'NO'),
(8, 'Flor', 'Garcia', 'florg', 'florgarcia@gmail.com', '$2y$10$Q5Ufq1D1eZk6XbIYnXUvIeIiBDYotvS10V1dVKpQay7TmTBnlYHbK', 2, 'Calle Falsa 123', 'Corrientes', '', 3300, 'NO'),
(9, 'Guillermo', 'García', 'guilleg', 'guillermog@gmail.com', '$2y$10$S5i/znfFA.OE760fJxdTO.goYSZSQW3r/a/ReDW94l3N3HMy6ui6G', 2, 'Calle Falsa 123', 'Ituzaingo', '', 3352, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfiles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
