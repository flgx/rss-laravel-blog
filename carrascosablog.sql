-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2016 a las 02:13:16
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrascosablog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'News', '2016-06-08 23:35:55', '2016-06-08 23:35:55'),
(2, 'Featured', '2016-06-10 03:13:31', '2016-06-10 03:13:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorite_post`
--

CREATE TABLE IF NOT EXISTS `favorite_post` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `favorite_post`
--

INSERT INTO `favorite_post` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(33, 5, 164, '2016-06-12 03:10:51', '2016-06-12 03:10:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_07_155402_create_categories_table', 1),
('2016_06_07_160543_create_post_table', 1),
('2016_06_07_161119_create_images_table', 1),
('2016_06_07_161324_create_tags_table', 1),
('2016_06_07_161856_create_favorites_posts_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fraan.mp@gmail.com', 'e93e05847de86e3269cdcbc70c256dc1af40eec3a6eaee3a11b37b4a1d25233a', '2016-06-12 03:01:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `external_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `slug`, `external_id`) VALUES
(161, 'Watch: Rory McIlroy Issues Rallying Cry To Northern Ireland On Eve Of Euros Opener', 'Rory McIlroy has issued a stirring message to Northern Ireland players urging them to take their place alongside sporting heroes like Dennis Taylor, George Best and Pat Jennings', 5, 1, '2016-06-12 03:10:15', '2016-06-12 03:10:15', 'watch-rory-mcilroy-issues-rallying-cry-to-northern-ireland-on-eve-of-euros-opener', 'http://www.balls.ie/football/watch-rory-mcilroy-issues-rallying-cry-to-northern-ireland-on-eve-of-euros-opener/336175'),
(162, 'The Pictures That Capture Ireland''s Colossal Win Over South Africa In All Its Glory', 'Enjoy a selection of the best images from Ireland''s Win Over South Africa today - the first time an Irish side has won in South Africa', 5, 1, '2016-06-12 03:10:15', '2016-06-12 03:10:15', 'the-pictures-that-capture-ireland-s-colossal-win-over-south-africa-in-all-its-glory', 'http://www.balls.ie/rugby/the-pictures-that-capture-irelands-colossal-win-over-south-africa-in-all-its-glory/336155'),
(163, '''This Is A Mediocre Football Team That Will Need Massive Luck To Survive The Group Stage''', 'A Swedish newspaper has ranked both Irish sides as two of the worst five teams in the tournament - despite the fact that FIFA rank both higher than Sweden', 5, 1, '2016-06-12 03:10:16', '2016-06-12 03:10:16', 'this-is-a-mediocre-football-team-that-will-need-massive-luck-to-survive-the-group-stage', 'http://www.balls.ie/football/this-is-a-mediocre-football-team-that-will-need-massive-luck-to-survive-the-group-stage/336143'),
(164, 'The Ecstatic Irish Reaction To A Monumental Performance In South Africa', 'Ireland fans react to their side''s 26-20 victory over South Africa this afternoon - a first ever victory for Ireland on South African soil', 5, 1, '2016-06-12 03:10:16', '2016-06-12 03:10:16', 'the-ecstatic-irish-reaction-to-a-monumental-performance-in-south-africa', 'http://www.balls.ie/rugby/the-ecstatic-irish-reaction-to-a-monumental-performance-in-south-africa/336134'),
(165, 'So Nick Faldo Has His Own Mayo Island... Who knew?', 'Nick Faldo owns - his own private island off the coast of Mayo. And his plans back in 2003 were pretty damn Faldo-esque.', 5, 1, '2016-06-12 03:10:16', '2016-06-12 03:10:16', 'so-nick-faldo-has-his-own-mayo-island-who-knew', 'http://www.balls.ie/golf/so-nick-faldo-has-his-own-mayo-island-who-knew/336122');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tag`
--

CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Pizza', '2016-06-09 00:29:55', '2016-06-09 00:29:55'),
(3, 'Featured', '2016-06-09 00:49:17', '2016-06-12 02:53:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('member','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Test2', 'test2@gmail.com', '$2y$10$maogACbofZkGHPdnqy4siekxgKN3LQF46TY5iUZa47j8JMzDeO2Kq', '', 'P3cRcPg2AEWnIdVjNgies5zHUIgu0Fq7Kw4pu4lpY7ir2C8cEYDFjBCkRKkh', '2016-06-11 22:32:16', '2016-06-12 03:00:14'),
(3, 'test3', 'test3@gmail.com', '$2y$10$8aKSgl2BPxUmty3uqKwhQuG2aQdQMMtiVN/FcgmUO5lcw67YlFhwe', 'admin', 'nXPgAByuBzGW4PSn9H3mC53sQOyWKgiE5VnN7JZyaK2cyvszZVIOfSc8HdTV', '2016-06-11 22:32:29', '2016-06-11 22:37:05'),
(4, 'Piter', 'piter@gmail.com', '$2y$10$LSjXumYuohxW3xGKPRhi3.hKbpANISgyOW.Ytzkwuzi64F5ovC.8y', 'admin', 'Zx2tUyYLDzMWK6eInG9zGEdBz9YNOuWcrXq3sS2Qao07Gs4Ow1iYJ7Z3Oauk', '2016-06-12 02:56:36', '2016-06-12 03:08:19'),
(5, 'Frank', 'fraan.mp@gmail.com.ar', '$2y$10$zFLxm2jvop2kHGlXbsMyiuBaEZtbRsdTyfyvNb377u5UivKYE9mNC', 'admin', 'jdrRQ4VMqTl6BfDqke4HlIFnpNZ2UaBBaCYNmG5zasLogC3PD8M7sM4PY08F', '2016-06-12 03:06:47', '2016-06-12 03:10:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favorite_post`
--
ALTER TABLE `favorite_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_post_user_id_foreign` (`user_id`),
  ADD KEY `favorite_post_post_id_foreign` (`post_id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_post_id_foreign` (`post_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `favorite_post`
--
ALTER TABLE `favorite_post`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favorite_post`
--
ALTER TABLE `favorite_post`
  ADD CONSTRAINT `favorite_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
