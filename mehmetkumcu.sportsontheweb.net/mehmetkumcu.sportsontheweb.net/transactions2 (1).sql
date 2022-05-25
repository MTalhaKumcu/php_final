-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: fdb34.awardspace.net
-- Üretim Zamanı: 25 May 2022, 13:42:49
-- Sunucu sürümü: 5.7.20-log
-- PHP Sürümü: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `4100781_project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `transactions2`
--

CREATE TABLE `transactions2` (
  `id` int(20) NOT NULL,
  `order_id` int(20) DEFAULT NULL,
  `amount` decimal(9,0) DEFAULT NULL,
  `response_code` int(10) DEFAULT NULL,
  `response_desc` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `transactions2`
--

INSERT INTO `transactions2` (`id`, `order_id`, `amount`, `response_code`, `response_desc`) VALUES
(1, 1234, 15, 1, 'PAID'),
(2, 1235, 25, 0, 'UNPAID'),
(3, 1236, 15, 1, 'PAID'),
(4, 1237, 15, 1, 'PAID'),
(5, 1238, 15, 0, 'UNPAID'),
(6, 1239, 15, 1, 'PAID'),
(7, 1240, 15, 1, 'PAID'),
(8, 1241, 15, 1, 'PAID'),
(9, 1242, 15, 0, 'UNPAID'),
(10, 1243, 15, 1, 'PAID');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `transactions2`
--
ALTER TABLE `transactions2`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `transactions2`
--
ALTER TABLE `transactions2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
