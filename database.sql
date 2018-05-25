SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `clients`(
	`id` int(6) AUTO_INCREMENT  NOT NULL ,
	`name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
	`phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `category`(
	`id` int(6) AUTO_INCREMENT NOT NULL,
	`name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL, 
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `products`(
	`id` int(6) AUTO_INCREMENT NOT NULL,
	`name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
	`price` int(11) NOT NULL,
	`img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
	`id_category` int(6) NOT NULL,
	`amount` int(5) NOT NULL, 
	PRIMARY KEY (`id`), 
	FOREIGN KEY (`id_category`) REFERENCES `category`(`id_category`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `orders`(
    `id` int(3) AUTO_INCREMENT NOT NULL,
    `id_client` int(6) NOT NULL,
    `id_products` int(6) NOT NULL,
    `amount` int(5) NOT NULL,
    `date` date NOT NULL,
    `adress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status` int(1) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_client`) REFERENCES `clients`(`id`),
    FOREIGN KEY (`id_products`) REFERENCES `products`(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `blog`(
	`id` int(4) AUTO_INCREMENT NOT NULL,
	`date` date NOT NULL,
	`title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
	`text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
	`img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `comments`(
	`id`  int(4) AUTO_INCREMENT NOT NULL,
	`img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
	`author` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
	`text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
	`email` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;







