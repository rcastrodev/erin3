-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2021 a las 04:06:51
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erin3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `applications`
--

INSERT INTO `applications` (`id`, `order`, `name`, `telephone`, `icon`, `image`, `image_small`, `created_at`, `updated_at`) VALUES
(1, 'AA', 'neumática', '0424', 'images/applications/JhMyJHXpDwL7ddEryQ2ZHhjWove9PnHSTiEZNo5X.svg', 'images/applications/ItPfgABtHPiCpKgjzu4oJaQf2dbULkVZjafDqfpq.png', 'images/applications/74ZHLCGiFCAAeFQj67Gmsk6aXBPBjTHRm5re1xhR.png', '2021-07-12 23:28:07', '2021-08-01 18:40:26'),
(2, NULL, 'clinchado', NULL, 'images/applications/0Z1kIbavUpU327ASlltPD8WNVXZMWupS927wO7RF.svg', NULL, NULL, '2021-07-12 23:28:07', '2021-08-01 18:38:51'),
(3, NULL, 'prensado', NULL, 'images/applications/eUxHQCtegP23cYPy0RhznMzvLX9eBwqeduPO6NZS.svg', NULL, NULL, '2021-07-12 23:28:07', '2021-08-01 18:40:09'),
(4, 'null', 'ensamblado', NULL, 'images/applications/83EyYasYSmy6KNVrEMODfih4qya9C6wTzteGrt2s.svg', NULL, NULL, '2021-07-12 23:28:08', '2021-07-19 22:13:55'),
(5, 'null', 'mecanizado', NULL, 'images/applications/QJ8B5yK3VLOkVTXw0R58VSAGVIK7ZqlFZpkpwahS.svg', NULL, NULL, '2021-07-12 23:28:08', '2021-07-19 22:14:04'),
(6, 'null', 'inserción', NULL, 'images/applications/mestXyJNuqYjzh0AoE4ncqRVTzeLX3TUN5JQTQ7A.svg', NULL, NULL, '2021-07-12 23:28:08', '2021-07-19 22:14:13'),
(7, 'null', 'acuñado', NULL, 'images/applications/Pw073fXZTtHeq1RGh0vu8jO0dNMTlaGMx1QsAcfp.svg', NULL, NULL, '2021-07-12 23:28:08', '2021-07-19 22:14:27'),
(8, 'null', 'remachado', NULL, 'images/applications/qo4aJaCuA1mmZqlPEqpGM1tGKXoloLbbFKYvYJXu.svg', NULL, NULL, '2021-07-12 23:28:08', '2021-07-19 22:14:35'),
(9, 'BB', 'punzando', NULL, 'images/applications/gqCMzDsP7odn0KNGbLfNDhJizXXPN9rn6Qsp7fgW.svg', 'images/applications/ck5XcvR6tJtHjEyKt3pbqCaOOOTppBZQOVLsHNjY.png', NULL, '2021-07-12 23:28:08', '2021-07-19 22:14:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `application_product`
--

CREATE TABLE `application_product` (
  `application_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `application_product`
--

INSERT INTO `application_product` (`application_id`, `product_id`) VALUES
(1, 2),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `order`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, NULL, 'camozzi', 'images/brand/Image_301.png', '2021-07-12 23:28:08', '2021-07-12 23:28:08'),
(2, NULL, 'eaton', 'images/brand/Image_301.png', '2021-07-12 23:28:08', '2021-07-12 23:28:08'),
(3, NULL, 'automación argentina', 'images/brand/Image_301.png', '2021-07-12 23:28:08', '2021-07-12 23:28:08'),
(4, NULL, 'deprag', 'images/brand/Image_301.png', '2021-07-12 23:28:08', '2021-07-12 23:28:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brand_product`
--

CREATE TABLE `brand_product` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `brand_product`
--

INSERT INTO `brand_product` (`brand_id`, `product_id`) VALUES
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `order`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'válvulas', NULL, '2021-07-12 23:28:07', '2021-07-12 23:28:07'),
(2, NULL, 'cilindros', NULL, '2021-07-12 23:28:07', '2021-07-12 23:28:07'),
(3, NULL, 'tratamiento de aire', NULL, '2021-07-12 23:28:07', '2021-07-12 23:28:07'),
(4, NULL, 'conexiones', NULL, '2021-07-12 23:28:07', '2021-07-12 23:28:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Bosch', 'images/client/cjQ5frUHbhyggJyshdWi1rsy3HyHJW0dsny5tNQa.png', 'AA', '2021-07-14 03:44:55', '2021-07-14 03:56:27'),
(2, 'prueba', 'images/client/pZ4U1iOBDEkDWvNxyvlWUMxz3jjpyx9g6yyr9oTi.png', NULL, '2021-07-21 20:19:28', '2021-07-21 20:19:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Erin3', '2021-07-12 23:28:04', '2021-07-12 23:28:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `section_id`, `order`, `image`, `content_1`, `content_2`, `content_3`, `content_4`, `created_at`, `updated_at`) VALUES
(2, 2, 'AA', 'images/home/s1mqEFpmkvl9ElwhzNUKDxfkFg4b1EapBqTicPZn.svg', 'Neumática', 'Linea de elementos neumáticos para automatización industrial. Marcas de renombre internacional.', NULL, NULL, NULL, '2021-07-13 22:41:59'),
(3, 2, 'BB', 'images/home/X449cJqsRgvfGpFG342UwS2C5JYHkNoCrKOaBZM0.svg', 'Tecnología de atornillado', NULL, 'images/home/aeyZuUaxQJbAGkYKgJz3LLVH2RveXUTgbfukVl0w.png', NULL, NULL, '2021-07-13 22:51:27'),
(4, 2, 'CC', 'images/home/hspAJfcne6CvlCdAuVGlTCnAtfgxspm0gwYS3PIA.svg', 'Prensas | TOX Clinching', NULL, 'images/home/yKTnYMoo5b2LoUPd1KU9oX92jXgL5UpMTXN2EIsJ.png', NULL, NULL, '2021-07-13 22:44:53'),
(5, 2, 'DD', 'images/home/faPJtO3W1YBt5DzAqIsTWNzH7EE0linj9qJ44abA.svg', 'Unidades de perforado y roscado', NULL, 'images/home/RH0n5ZYP84UHqcnImkfJKSFmEgns5d61oskWFPVO.png', NULL, NULL, '2021-07-13 22:45:19'),
(6, 3, NULL, 'images/home/IDWCK8SxwugQrgkxf5GX6daJWt5blTpVAkYojOwB.png', 'Erin S.A', 'Somos empresa con más de 40 años de trayectoria en el mercado, abocada a brindar soluciones en el campo de la automatización neumática', 'images/home/cr12HYmT68d236ErlYPrvX9C3iaAABdpX2X47pen.png', NULL, NULL, '2021-07-14 17:45:15'),
(9, 5, 'AA', 'images/company/oezvgZGJku0Ygn6DYkKEVPnqoyhFoZNk6QmDvlMF.png', '40 años de trayectoria nos avalan', NULL, NULL, NULL, '2021-07-13 23:52:10', '2021-07-13 23:52:10'),
(10, 6, NULL, NULL, '<p>ERIN S.A. es una empresa con m&aacute;s de 40 a&ntilde;os de trayectoria en el mercado, abocada a brindar soluciones en el campo de la automatizaci&oacute;n neum&aacute;tica. Contamos con un grupo de ingenieros y t&eacute;cnicos altamente capacitados para asesorarlo y asistirlo.</p>\r\n\r\n<p>En ERIN S.A. actuamos como proveedor y fabricante, brindamos asistencia t&eacute;cnica, instalaciones y reparaciones. Contamos con un amplio stock de productos.</p>\r\n\r\n<p>Nuestro portfolio incluye:</p>\r\n\r\n<p>V&aacute;lvulas para la conducci&oacute;n de aire, gas, vapor y agua.</p>\r\n\r\n<p>Cilindros neum&aacute;ticos est&aacute;ndar y a medida.</p>\r\n\r\n<p>Equipos de tratamiento de aire: filtros, reguladores, lubricadores, trampas de agua.</p>\r\n\r\n<p>Conexionado: conectores manuales y autom&aacute;ticos, accesorios de ca&ntilde;er&iacute;a.</p>\r\n\r\n<p>Accesorios: tubos, mangueras, reguladores de caudal.</p>\r\n\r\n<p>Equipos para vac&iacute;o</p>', 'images/company/LMA5i2uHzByTfenXsSlKbzfy2ZX55lpZhZOobiyi.png', NULL, 'images/company/ebP9IeW1bCY7qYrntZHGoIy48gTylBp62aCfL3Y0.png', NULL, '2021-07-19 20:09:44'),
(11, 1, 'AB', 'images/home/tafAAjL4iTRkNHYQa8quU7yxEon4pYBzSwEP37Hq.png', 'Expertos en neumática y automatización para la industria', 'Linea de elementos neumáticos para automatización industrial. Marcas de renombre internacional.', NULL, NULL, '2021-07-14 05:56:33', '2021-07-22 01:29:14'),
(12, 1, 'BB', 'images/home/2JahGGtZ1F5lx5ySHfWC3PKgdsjNpR7IX48uPQzA.png', 'Expertos en neumática y automatización para la industria', 'Linea de elementos neumáticos para automatización industrial. Marcas de renombre internacional.', NULL, NULL, '2021-07-14 05:57:16', '2021-07-14 05:57:16'),
(13, 4, NULL, 'images/home/3QFwgv7ZsuhQbY7wjy0r2zE0Zwz7Z3ei208R3UjS.png', 'Solicitar presupuesto', 'Envíanos toda la información de tu proyecto para que podamos cotizarlo', NULL, NULL, NULL, '2021-07-14 17:26:17'),
(14, 12, NULL, 'images/rwQux78JcXJaU7If1svDfsB9AMzeYOpxfjZIOs0N.png', 'Productos', NULL, NULL, NULL, NULL, '2021-07-18 05:24:28'),
(15, 13, NULL, 'images/bQRCdWJpAtMIFc6N9DKXrEv39awugdHQb5P0BHwf.png', 'Productos', NULL, NULL, NULL, NULL, '2021-07-18 05:25:02'),
(16, 14, NULL, 'images/s4TpADdzVeQvWBaCkcM6BI8yJmMC39XMuW47X9mE.png', 'Marcas', NULL, NULL, NULL, NULL, '2021-07-19 20:02:12'),
(17, 5, 'CC', 'images/company/oOb78SpcWb0h9jCpwxxdRMSI5bxsmh1NZdFgw657.png', 'prueba', NULL, NULL, NULL, '2021-08-01 18:43:13', '2021-08-01 18:43:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`id`, `company_id`, `address`, `email`, `phone1`, `phone2`, `phone3`, `logo_header`, `logo_footer`, `youtube`, `facebook`, `instagram`, `text_footer`, `created_at`, `updated_at`) VALUES
(1, 1, 'Av. de los Constituyentes 5751. CABA', 'andrescastrodevia@gmail.com', '(+54 11) 4573-1313 / 0022', '4573-1313', '0022', 'images/data/logo_header.svg', 'images/data/logo_footer.svg', NULL, NULL, NULL, 'Linea completa de elementos neumáticos para automatización industrial.', '2021-07-12 23:28:04', '2021-08-01 20:30:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(110, '2014_10_12_000000_create_users_table', 1),
(111, '2014_10_12_100000_create_password_resets_table', 1),
(112, '2019_08_19_000000_create_failed_jobs_table', 1),
(113, '2021_06_02_205210_create_permission_tables', 1),
(114, '2021_06_06_163021_create_companies_table', 1),
(115, '2021_06_06_163959_create_data_table', 1),
(116, '2021_06_06_170105_create_pages_table', 1),
(117, '2021_06_06_170412_create_sections_table', 1),
(118, '2021_06_06_170920_create_contents_table', 1),
(119, '2021_06_06_171325_create_categories_table', 1),
(120, '2021_06_06_171522_create_products_table', 1),
(121, '2021_06_06_193145_create_product_picture_table', 1),
(122, '2021_06_14_010105_create_newsletters_table', 1),
(123, '2021_06_25_222824_create_applications_table', 1),
(124, '2021_06_25_223300_create_application_product_table', 1),
(125, '2021_06_28_122032_create_posts_table', 1),
(126, '2021_06_28_152011_create_work_dones_table', 1),
(127, '2021_07_02_213637_create_clients_table', 1),
(128, '2021_07_12_192133_create_brands_table', 1),
(129, '2021_07_14_011745_create_brand_product_table', 2),
(130, '2021_07_14_210127_create_representeds_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'andrescastrodevia@gmail.com', '2021-07-19 22:46:08', '2021-07-19 22:46:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `name`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, '2021-07-12 23:28:04', '2021-07-12 23:28:04'),
(2, 'empresa', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(3, 'secciones', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(4, 'familias', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(5, 'marcas', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(6, 'aplicaciones', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(7, 'servicios', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(8, 'videos', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(9, 'clientes', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(10, 'solicitudad-presupuesto', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(11, 'contacto', NULL, '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(12, 'producto', NULL, '2021-07-18 00:39:03', '2021-07-18 00:39:07');

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
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2021-07-12 23:28:04', '2021-07-12 23:28:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `page_id`, `order`, `image`, `title`, `content1`, `extra1`, `created_at`, `updated_at`) VALUES
(2, 7, 'AA', 'images/service/TFJJQc7NFcfhVmm3PoWPXW0lPXPTjkWhOU9vPrh3.svg', 'ASESORAMIENTO PERSONALIZADO', '<p>Brindamos el servicio de atención y asesoramiento personalizado. Nuestro equipo de profesionales trabajan en propuestas que generen valor a la mejor relación costo-beneficio</p>', NULL, '2021-07-14 02:38:34', '2021-07-14 02:41:45'),
(3, 7, 'BB', 'images/service/bca8L2IrXPpb0cCDxqpeIdfiXxHWPQKaCa27FvUU.svg', 'VISITAS A PLANTA', '<p>Contamos con unidades de visitas a planta. Además realizamos confeccionamiento de proyectos. Brindamos la entrega de planos eléctricos y manuales instructivos para el operario.</p>', NULL, '2021-07-14 02:42:21', '2021-07-14 02:42:21'),
(5, 7, 'CC', 'images/service/2YE9khLtSXdhvgz1Wip3RHgWspOVY7yQVJxoQb5x.svg', 'Instalación Y Puesta en Marcha', '<p>Contamos con un equipo de trabajo altamente capacitado, dispuesto a brindar el mejor servicio de instalación y puesta en marcha de nuestros catálogo de máquinas y equipos.</p>', NULL, '2021-07-14 02:46:12', '2021-07-14 02:47:35'),
(6, 7, 'DD', 'images/service/V2GAJVQXudl5csiuaQjmMO56z9rWNOCgU21Waiw9.svg', 'Garantía y Post Venta', '<p>Contamos con un equipo de trabajo altamente capacitado, dispuesto a brindar el mejor servicio de instalación y puesta en marcha de nuestros catálogo de máquinas y equipos.</p>', NULL, '2021-07-14 02:47:00', '2021-07-14 02:47:00'),
(7, 7, 'EE', 'images/service/LsJwP1BW3fhRVMGu456k4NMVFuALOjhUnmzYqO6x.svg', 'Repuestos', '<p>Realizamos, desarrollamos y fabricamos repuestos y piezas especiales para la maquinaria propia y de otras marcas. Para Consultar consulte por nuestras piezas y accesorios para tu equipo.</p>', NULL, '2021-07-14 02:48:03', '2021-07-14 02:48:03'),
(8, 7, 'FF', 'images/service/T6lVRzvgp9LmCtGtRQdp1y5vHKtt1tBqKlmzpGoo.svg', 'Diseño y Fabricación a Medida', '<p>Consulte por nuestro servicio especializado de maquinaria, adaptada a las necesidades específicas de nuestros clientes</p>', NULL, '2021-07-14 02:48:38', '2021-07-14 02:48:38'),
(12, 8, 'AA', NULL, 'Título de Video 1', 'Breve descripción del video 1', '<iframe width=\"541\" height=\"292\" src=\"https://www.youtube.com/embed/fsz5J2Xl1fc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-07-14 03:41:55', '2021-08-01 19:01:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_sheet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `keywords`, `description`, `data_sheet`, `extra1`, `extra2`, `created_at`, `updated_at`) VALUES
(2, 1, 'Producto 1', NULL, '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, nulla quaerat? Natus voluptatum quae dolores sed quam odio error neque quibusdam, aliquid voluptates sint labore temporibus voluptate illo numquam blanditiis.</p>', NULL, '<iframe class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/WCisFFHDVOI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/WCisFFHDVOI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-07-14 05:28:50', '2021-07-19 19:29:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_picture`
--

CREATE TABLE `product_picture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_picture`
--

INSERT INTO `product_picture` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'images/products/lmQkIwtBci1xgQVfZ9pAy40hJHFz9OGWU0VB5Vom.png', '2021-07-14 05:28:51', '2021-07-14 05:28:51'),
(2, 2, 'images/products/xxZZowtlu2oXWfro9k22vQVx7hNeB18LQRW6qszv.png', '2021-07-14 05:28:51', '2021-07-14 05:28:51'),
(4, 2, 'images/products/XP5BQwbstn4REA6UA9UBuN4PeM3w95A2ofEnOyId.png', '2021-07-14 05:30:45', '2021-07-14 05:30:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representeds`
--

CREATE TABLE `representeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `representeds`
--

INSERT INTO `representeds` (`id`, `name`, `image`, `order`, `created_at`, `updated_at`) VALUES
(2, 'a', 'images/client/BJpERgykMxGpk6ArgKr3A02ykTWmWHKvakAKY0Mr.png', 'AA', '2021-07-15 01:15:18', '2021-07-15 01:15:18'),
(3, 'B', 'images/client/90QpGiGz91C2n2V03af21RcnN8aEkTEf66kvZiAD.png', 'BB', '2021-07-15 01:15:32', '2021-07-15 01:15:32'),
(4, 'c', 'images/client/4ForWuQMU6J2gYExtuoApiIxSC9qXXEg6KKpIUAj.png', 'CC', '2021-07-15 01:15:52', '2021-07-15 01:15:52'),
(5, 'd', 'images/client/e3wx7O8bpPz0S9YvJQtVEV94RN2frWYLY2qBv4VK.png', 'DD', '2021-07-15 01:16:05', '2021-07-15 01:16:05'),
(6, 'f', 'images/client/a1S2a1cz2BnJuxqjd7sb5JyfQuL4W6Ulc9u128AG.png', 'FF', '2021-07-15 01:16:22', '2021-07-15 01:16:22'),
(7, 'g', 'images/client/dmin6v6anHswb0jrTfk5StLKCMOVXRRAeyWnjoMf.png', 'GG', '2021-07-15 01:16:47', '2021-07-15 01:16:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'web', '2021-07-12 23:28:04', '2021-07-12 23:28:04'),
(2, 'Gestor', 'web', '2021-07-12 23:28:04', '2021-07-12 23:28:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `page_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'section_1', '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(2, 1, 'section_2', '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(3, 1, 'section_3', '2021-07-12 23:28:05', '2021-07-12 23:28:05'),
(4, 1, 'section_4', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(5, 2, 'section_1', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(6, 2, 'section_2', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(7, 7, 'section_1', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(8, 8, 'section_1', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(9, 9, 'section_1', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(10, 10, 'section_1', '2021-07-12 23:28:06', '2021-07-12 23:28:06'),
(11, 11, 'section_1', '2021-07-12 23:28:07', '2021-07-12 23:28:07'),
(12, 12, 'section_1', '2021-07-18 00:44:02', '2021-07-18 00:44:06'),
(13, 4, 'section_1', '2021-07-18 01:17:29', '2021-07-18 01:17:50'),
(14, 5, 'section_1', '2021-07-19 15:44:58', '2021-07-19 15:45:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pablo', 'admin@admin.com', NULL, '$2y$10$3GK5ZDwF5jiI9EA9/HUH9ut5AztOuGC2Pv6.TC0/rkOm8GEsfm2ky', NULL, '2021-07-12 23:28:04', '2021-07-12 23:28:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_has_permissions`
--

CREATE TABLE `users_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_has_roles`
--

INSERT INTO `user_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `application_product`
--
ALTER TABLE `application_product`
  ADD KEY `application_product_application_id_foreign` (`application_id`),
  ADD KEY `application_product_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brand_product`
--
ALTER TABLE `brand_product`
  ADD KEY `brand_product_brand_id_foreign` (`brand_id`),
  ADD KEY `brand_product_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_section_id_foreign` (`section_id`);

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_company_id_foreign` (`company_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_page_id_foreign` (`page_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `product_picture`
--
ALTER TABLE `product_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_picture_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `representeds`
--
ALTER TABLE `representeds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_page_id_foreign` (`page_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `users_has_permissions`
--
ALTER TABLE `users_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `product_picture`
--
ALTER TABLE `product_picture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `representeds`
--
ALTER TABLE `representeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `application_product`
--
ALTER TABLE `application_product`
  ADD CONSTRAINT `application_product_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `brand_product`
--
ALTER TABLE `brand_product`
  ADD CONSTRAINT `brand_product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `brand_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_picture`
--
ALTER TABLE `product_picture`
  ADD CONSTRAINT `product_picture_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users_has_permissions`
--
ALTER TABLE `users_has_permissions`
  ADD CONSTRAINT `users_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
