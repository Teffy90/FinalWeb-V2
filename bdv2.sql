-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2022 a las 04:12:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdv2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Despensa', NULL, NULL),
(2, 'Carnes', NULL, NULL),
(3, 'Lacteos', NULL, NULL),
(4, 'Frutas y verduras', NULL, NULL),
(5, 'Limpieza', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_24_174428_tipo_persona', 1),
(6, '2022_06_24_174449_personas', 1),
(7, '2022_06_26_201136_categoria', 2),
(8, '2022_06_26_201206_producto', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipo_persona` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellidos`, `telefono`, `id_tipo_persona`, `created_at`, `updated_at`) VALUES
(1, 'Camilo', 'Galan', '3214467898', 1, NULL, '2022-06-26 20:57:09'),
(2, 'Estefany', 'Ocampo', '3216584785', 1, '2022-06-25 23:16:26', '2022-06-25 23:16:26'),
(3, 'Prueba1', 'PruebaX', '0000000', 2, '2022-06-25 23:20:45', '2022-06-25 23:20:45'),
(4, 'Prueba1', 'PruebaX', '0000000', 2, '2022-06-25 23:21:26', '2022-06-25 23:21:26'),
(5, 'Prueba2', 'PruebaXX', '01247', 2, '2022-06-25 23:24:32', '2022-06-25 23:24:32'),
(6, 'Lila', 'PruebaXXx', '3214579862', 1, '2022-06-25 23:26:55', '2022-06-25 23:26:55'),
(7, 'Lila', 'PruebaXXx', '3214579862', 1, '2022-06-25 23:27:38', '2022-06-25 23:27:38'),
(8, 'Lila', 'PruebaXXx', '3214579862', 1, '2022-06-25 23:27:58', '2022-06-25 23:27:58'),
(9, 'eocampoleditado', '3', '4', 1, '2022-06-26 02:55:45', '2022-06-27 03:59:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_barras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_entrada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_salida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo_barras`, `nombre`, `presentacion`, `cantidad`, `unidades`, `precio_entrada`, `precio_salida`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, '00112233', 'Lentejas', 'Bolsa', '500g', '50', '1500', '2000', 1, '2022-06-27 02:50:36', '2022-06-27 02:50:36'),
(2, '00112244', 'Frijoles', 'Bolsa', '500g', '50', '1700', '2200', 1, '2022-06-27 02:54:02', '2022-06-27 02:54:02'),
(3, '00112211', 'Arroz', 'Bolsa', '1000g', '50', '1200', '1800', 1, '2022-06-27 02:55:05', '2022-06-27 02:55:05'),
(4, '00112222', 'Sal', 'Bolsa', '1000g', '50', '800', '1200', 1, '2022-06-27 02:55:51', '2022-06-27 02:55:51'),
(5, '00112255', 'Azucar', 'Bolsa', '1000g', '50', '1200', '1800', 1, '2022-06-27 02:56:25', '2022-06-27 02:56:25'),
(6, '00112245', 'Pechuga de pollo', 'Bandeja', '1000g', '50', '16500', '25000', 2, '2022-06-27 03:19:07', '2022-06-27 03:19:35'),
(8, '00221122', 'Costilla de cerdo', 'Bolsa', '500g', '30', '12500', '18000', 2, '2022-06-29 06:40:07', '2022-06-29 06:40:07'),
(9, '00223344', 'Mix de mariscos', 'Bolsa', '500g', '10', '18500', '23000', 2, '2022-06-29 06:41:51', '2022-06-29 06:41:51'),
(10, '00224455', 'Carne molida', 'Bolsa', '500g', '30', '8900', '14500', 2, '2022-06-29 06:42:41', '2022-06-29 06:42:41'),
(11, '00225522', 'Muslos de pollo', 'Bolsa', '1000g', '10', '13950', '19800', 2, '2022-06-29 06:45:16', '2022-06-29 06:45:16'),
(12, '00331100', 'Leche deslactosada', 'Caja', '900ml', '30', '1750', '2500', 3, '2022-06-29 06:46:43', '2022-06-29 06:46:43'),
(13, '00331122', 'Yogur', 'Bolsa', '1000g', '39', '5900', '8100', 3, '2022-06-29 06:47:40', '2022-06-29 06:47:40'),
(14, '00331133', 'Queso Parmesano', 'Bolsa', '250g', '40', '4650', '6800', 3, '2022-06-29 06:48:23', '2022-06-29 06:48:23'),
(15, '00331133', 'Kumis', 'Bolsa', '1100ml', '30', '3500', '5100', 3, '2022-06-29 06:49:14', '2022-06-29 06:49:14'),
(16, '00331155', 'Avena', 'Caja', '1000g', '30', '6750', '9500', 3, '2022-06-29 06:51:04', '2022-06-29 06:51:04'),
(17, '00442211', 'Fresas', 'Bandeja', '500g', '15', '3900', '6100', 4, '2022-06-29 06:51:53', '2022-06-29 06:51:53'),
(18, '00441100', 'Uvas', 'Bandeja', '500g', '10', '11000', '18000', 4, '2022-06-29 06:53:03', '2022-06-29 06:53:03'),
(19, '00443311', 'Papa criolla', 'Bolsa', '500g', '30', '2100', '4500', 4, '2022-06-29 06:53:48', '2022-06-29 06:53:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'Este usuario se encarga de crear, editar, eliminar mas usuarios, así como de crear y administrar productos', NULL, NULL),
(2, 'Usuario', 'Este usuario puede ver los productos y seleccionarlos para una posible comprar', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Estefany Ocampo López', 'eolopez90@gmail.com', NULL, '$2y$10$aeT6hWN9Z2AWxXmnb1MEVe/V6cD/pBrq.vNxnAk09/8lyHgC.gXBi', NULL, '2022-06-27 03:24:54', '2022-06-27 03:24:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_id_tipo_persona_foreign` (`id_tipo_persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_id_tipo_persona_foreign` FOREIGN KEY (`id_tipo_persona`) REFERENCES `tipo_persona` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
