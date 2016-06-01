SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'sibw', '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
(2, 'recepcionista', 'recepcionista@gmail.com', 'sibw', '2016-05-08 17:27:13', '2016-05-08 17:27:54');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', NULL, '2016-05-08 17:27:13', '2016-05-08 17:27:13'),
(2, 'recepcionista', 'Recepcionista', NULL, '2016-05-08 17:27:13', '2016-05-08 17:27:13');

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1,1),
(2,2);

DROP TABLE IF EXISTS `roomtypes`;
CREATE TABLE `roomtypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `base_price` decimal(8,2) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roomtypes_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `roomtypes` (`id`, `name`, `description`, `base_price`, `created_at`, `updated_at`) VALUES
  (1, 'Individual', null, 49.99, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (2, 'Doble', null, 69.99,'2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (3, 'Triple', null, 75.99,'2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (4, 'Familiar', null, 89.99,'2016-05-08 17:27:13', '2016-05-22 15:23:08');

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_number` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `roomtype_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `rooms_number_unique` (`room_number`),
  CONSTRAINT `rooms_roomtype_id_foreign` FOREIGN KEY (`roomtype_id`) REFERENCES `roomtypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `rooms` (`id`, `room_number`, `roomtype_id`, `created_at`, `updated_at`) VALUES
  /*5 habitaciones individuales*/
  (1, '1', 1, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (2, '2', 1, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (3, '3', 1, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (4, '4', 1, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (5, '5', 1, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  /*25 habitaciones dobles*/
  (6, '6', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (7, '7', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (8, '8', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (9, '9', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (10, '10', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (11, '11', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (12, '12', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (13, '13', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (14, '14', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (15, '15', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (16, '16', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (17, '17', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (18, '18', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (19, '19', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (20, '20', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (21, '21', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (22, '22', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (23, '23', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (24, '24', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (25, '25', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (26, '26', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (27, '27', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (28, '28', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (29, '29', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (30, '30', 2, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  /*1 habitaciones triple*/
  (31, '31', 3, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  /*2 habitaciones familiares*/
  (32, '32', 4, '2016-05-08 17:27:13', '2016-05-22 15:23:08'),
  (33, '33', 4, '2016-05-08 17:27:13', '2016-05-22 15:23:08');

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE `reserves` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `adults_number` varchar(2) COLLATE utf8_unicode_ci  DEFAULT '0' NOT NULL,
  `children_number` varchar(2) COLLATE utf8_unicode_ci DEFAULT '0' NOT NULL,
  `promotion_code` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observations` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cardholder` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card_expiration_month` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card_expiration_year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card_cvc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `reserves` (`id`, `starting_date`, `ending_date`, `adults_number`, `children_number`, `name`, `surname`, `email`, `observations`, `address`, `city`, `phone`, `cardholder`, `card_number`, `card_type`, `card_expiration_month`, `card_expiration_year`, `card_cvc`, `total_amount`, `created_at`, `updated_at`) VALUES
  ('1', '2016-05-11', '2016-05-19', '2', '0', 'Pablo', 'Lara', 'pablo@gmail.com', NULL, 'calle', 'Madrid', '123456789', 'Pablo','123456789', 'VISA', '12', '16', '123', 199.98, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

DROP TABLE IF EXISTS `reserves_rooms`;
CREATE TABLE `reserves_rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reserve_id` int(10) unsigned NOT NULL,
  `roomtype_id` int(10) unsigned NOT NULL,
  `rooms_number` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  CONSTRAINT `rerserves_rooms_reserve_id_foreign` FOREIGN KEY (`reserve_id`) REFERENCES `reserves` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rerserves_rooms_roomtype_id_foreign` FOREIGN KEY (`roomtype_id`) REFERENCES `roomtypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `reserves_rooms` (`id`, `reserve_id`, `roomtype_id`, `rooms_number`, `created_at`, `updated_at`) VALUES
  (NULL, '1', '2', '2', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

DROP TABLE IF EXISTS `price_dates`;
CREATE TABLE `price_dates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `roomtype_id` int(10) unsigned NOT NULL,
  `price` decimal(8,2) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  CONSTRAINT `price_dates_roomtype_id_foreign` FOREIGN KEY (`roomtype_id`) REFERENCES `roomtypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `promotions`;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   PRIMARY KEY (`id`),
   UNIQUE KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;