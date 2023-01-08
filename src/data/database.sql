-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `blog`;
CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `blog`;

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id_feed` int NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_feed`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `feedback` (`id_feed`, `message`, `file`, `id_user`) VALUES
(1,	'love you',	NULL,	3),
(2,	'Something',	NULL,	4),
(3,	'Test',	'fileInclusion.php',	4)
ON DUPLICATE KEY UPDATE `id_feed` = VALUES(`id_feed`), `message` = VALUES(`message`), `file` = VALUES(`file`), `id_user` = VALUES(`id_user`);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id_post` int NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `hide` int DEFAULT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`, `hide`) VALUES
(1,	'Genio',	'Sei un Genio?',	3,	0),
(2,	'Gatos <3',	'I love Cats and bananas',	4,	0),
(3,	'Scripts',	'<script>alert(\"Hello World!\");</script>',	3,	0)
ON DUPLICATE KEY UPDATE `id_post` = VALUES(`id_post`), `title` = VALUES(`title`), `description` = VALUES(`description`), `id_user` = VALUES(`id_user`), `hide` = VALUES(`hide`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `name_user` varchar(30) DEFAULT NULL,
  `password` varchar(22) DEFAULT NULL,
  `role` varchar(14) DEFAULT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id_user`, `name`, `name_user`, `password`, `role`, `status`) VALUES
(1,	'Toze',	'Admin',	'admin',	'Admin',	1),
(2,	'Manuel',	'Manager',	'manager',	'Manager',	1),
(3,	'Antonill',	'Anton',	'couves',	'User',	1),
(4,	'Mary',	'Maary',	'bananas',	'User',	1)
ON DUPLICATE KEY UPDATE `id_user` = VALUES(`id_user`), `name` = VALUES(`name`), `name_user` = VALUES(`name_user`), `password` = VALUES(`password`), `role` = VALUES(`role`), `status` = VALUES(`status`);

-- 2023-01-08 20:52:59
