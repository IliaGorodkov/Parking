-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 20 2021 г., 15:55
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(100) NOT NULL,
  `Fio` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `Address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `car` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `brand` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Model` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Body_color` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `State_number_RF` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `number` bigint(15) NOT NULL,
  `Flag` varchar(2) NOT NULL,
  `brand2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Model2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `State_number_RF2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Body_color2` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `Flag2` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `brand3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Model3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Body_color3` text,
  `State_number_RF3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Flag3` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `Fio`, `gender`, `Address`, `car`, `brand`, `Model`, `Body_color`, `State_number_RF`, `number`, `Flag`, `brand2`, `Model2`, `State_number_RF2`, `Body_color2`, `Flag2`, `brand3`, `Model3`, `Body_color3`, `State_number_RF3`, `Flag3`) VALUES
(83, 'Антонов Владимир Алексеевич', 'Мужчина', 'Урюпинск ул.Маршала 22д', 'BMW', '1-Series', 'E81', 'Серебряный ', 'к177.159', 890443453243, '0', 'уке', 'уке', '61', '346', '0', '', '', '', '', ''),
(84, 'Рукова Инна Алексеевна', 'Женщина', 'Ростов ул.Кожемяки 9', 'ВАЗ-2101', 'ВАЗ', '2101', 'Зеленый', 'рпк490.22', 79053312312, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Мишнова Антонина Владимировна', 'Женщина', 'Село Школьное дом 7', 'LADA', 'Lada Granta', 'Granta', 'Красный', 'нер110.34', 890045678974, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Ручкина Светлана Валентиновна', 'Женщина', 'Проспект Металлургов дом 12', 'KIA', 'KIA Cadenza', 'Cadenza', 'Бежевый', 'гго921.21', 796261102403, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Полонский Сергей Евгеньевич ', 'Мужчина', 'Ростов ул.Кожемяки 9', 'Toyota', 'Toyota Alphard', 'Alphard', 'Черный', 'т241фй.34', 89041165100, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `State_number_RF` (`State_number_RF`),
  ADD UNIQUE KEY `number` (`number`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
