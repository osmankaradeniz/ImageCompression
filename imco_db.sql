-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Haz 2021, 12:39:51
-- Sunucu sürümü: 8.0.22
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `imco_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `compstatics`
--

DROP TABLE IF EXISTS `compstatics`;
CREATE TABLE IF NOT EXISTS `compstatics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_org_size` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_comp_size` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ip_adress` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
