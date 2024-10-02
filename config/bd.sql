-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-10-2024 a las 15:47:31
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_data`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` int NOT NULL,
  `nombre_pais` varchar(50) DEFAULT NULL,
  `nombre_capital` varchar(50) DEFAULT NULL,
  `habitantes` int DEFAULT NULL
);

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre_pais`, `nombre_capital`, `habitantes`) VALUES
(1, 'Colombia', 'Bogotá', 50000000),
(2, 'Venezuela', 'Caracas', 30000000),
(3, 'Brasil', 'Brasilia', 40000000),
(4, 'México', 'Ciudad de México', 60000000),
(5, 'Perú', 'Lima', 70000000),
(6, 'Ecuador', 'Quito', 80000000),
(7, 'Bolivia', 'La Paz', 90000000),
(8, 'Argentina', 'Buenos Aires', 100000000),
(9, 'Chile', 'Santiago de Chile', 110000000),
(10, 'Paraguay', 'Asuncion', 120000000),
(11, 'Uruguay', 'Montevideo', 130000000),
(12, 'Costa Rica', 'San Jose', 140000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE `tbl_empleados` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int DEFAULT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`id`, `nombre`, `edad`, `cedula`, `sexo`, `telefono`, `cargo`, `created_at`) VALUES
(1, 'Brenda', 18, '212140', 'Femenino', '52225', 'Desarrollador Web', '2024-04-01 23:43:05'),
(2, 'Braudin', 41, '434444', 'Masculino', '122222', 'Desarrollador FrontEnd', '2024-04-01 23:54:00'),
(3, 'Mario', 25, '543509', 'Masculino', '345454', 'Desarrollador Web', '2024-04-02 15:31:08'),
(4, 'Carlos', 28, '233300', 'Femenino', '414144', 'Desarrollador BackEnd', '2024-04-02 15:33:39'),
(5, 'Uriany', 22, '432445', 'Masculino', '234455', 'Desarrollador Web', '2024-04-02 15:35:36'),
(6, 'Felipe', 28, '233322', 'Femenino', '414166', 'Desarrollador BackEnd', '2024-04-06 20:59:30'),
(7, 'Deyna Castellano', 25, '233311', 'Masculino', '414177', 'Desarrollador BackEnd', '2024-04-06 21:01:21'),
(8, 'Sofia', 23, '545341', 'Femenino', '233377', 'Administración', '2024-05-31 13:34:21'),
(9, 'Valentina', 45, '122226', 'Femenino', '334444', 'Front-end', '2024-05-31 13:37:06'),
(10, 'Santiago', 34, '343446', 'Masculino', '232222', 'Developer', '2024-05-31 13:37:06'),
(11, 'Mateo', 27, '454560', 'Masculino', '111233', 'Back-end', '2024-05-31 13:37:06'),
(12, 'Sebastian', 48, '756766', 'Masculino', '234555', 'Full-Stack', '2024-05-31 13:37:06'),
(29, 'Martin', 23, '677770', 'Masculino', '323213', 'Desarrollador Web', '2024-05-31 14:11:26'),
(30, 'Diego', 40, '900090', 'Masculino', '342343', 'Desarrollador Web', '2024-05-31 14:11:26'),
(31, 'Fabian', 32, '534543', 'Masculino', '344444', 'Developer', '2024-05-31 14:11:26'),
(32, 'Alejando', 30, '423222', 'Masculino', '345354', 'Full-Stack', '2024-05-31 14:11:26'),
(33, 'Any', 36, '670088', 'Femenino', '445555', 'Administración', '2024-05-31 14:11:26'),
(34, 'Urian Dev', 28, '233232', 'Masculino', '422234', 'Full-Stack', '2024-05-31 14:11:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
