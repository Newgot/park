-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 27 2021 г., 19:42
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `park`
--

-- --------------------------------------------------------

--
-- Структура таблицы `parks`
--

CREATE TABLE `parks` (
  `id_park` int UNSIGNED NOT NULL,
  `count` int NOT NULL,
  `capacity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `parks`
--

INSERT INTO `parks` (`id_park`, `count`, `capacity`) VALUES
(1, 0, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `vehicles`
--

CREATE TABLE `vehicles` (
  `id_vehicle` int UNSIGNED NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` int NOT NULL,
  `price` int NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_park` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vehicles`
--

INSERT INTO `vehicles` (`id_vehicle`, `model`, `speed`, `price`, `type`, `id_park`) VALUES
(1, 'ROBINSON R44 RAVEN II', 300, 12000000, 'Helicopter', NULL),
(2, 'Audi A4 allroad quattro', 225, 1250000, 'Car', NULL),
(3, 'GR GR7', 250, 219990, 'Motorbike', NULL),
(4, 'Yamaha YZF-R1', 182, 745000, 'Motorbike', NULL),
(5, 'Racer Storm', 270, 120000, 'Motorbike', NULL),
(6, 'Lexus GS300', 249, 850000, 'Car', NULL),
(7, 'Renault Grand Scenic', 150, 1550000, 'Car', NULL),
(8, 'Robinson R-44', 500, 4200000, 'Helicopter', NULL),
(9, 'Robinson P-66', 400, 57000000, 'Helicopter', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `parks`
--
ALTER TABLE `parks`
  ADD PRIMARY KEY (`id_park`);

--
-- Индексы таблицы `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id_vehicle`),
  ADD KEY `id_park` (`id_park`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `parks`
--
ALTER TABLE `parks`
  MODIFY `id_park` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id_vehicle` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`id_park`) REFERENCES `parks` (`id_park`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
