-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2019 г., 21:02
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burgers`
--
CREATE DATABASE IF NOT EXISTS `burgers` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `burgers`;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `address`, `comment`) VALUES
(43, 16, 'Koryavya 4 1 5 11', 'utututu daaaaaaaaaaaaaaaaaaaaaaa'),
(44, 16, 'Koryavya 4 1 5 11', 'utututu daaaaaaaaaaaaaaaaaaaaaaa'),
(45, 17, 'Novokosinskaia 2 2 2 2', '2222222222222222222222222'),
(46, 18, 'Novokosinskaia 2 2 2 2', '2222222222222222222222222'),
(47, 19, 'Novokosinskaia 2 2 2 2', '2222222222222222222222222'),
(48, 20, 'Марканая 9 22 6 4', 'ddddddddddd'),
(49, 20, 'Марканая 9 22 6 4', 'dddddddddddd'),
(50, 20, 'Марканая 9 22 6 4', 'ssssssssssss'),
(51, 20, 'Марканая 9 22 6 4', 'dddddddddddd'),
(52, 20, 'Марканая 9 22 6 4', 'sssssssssssss');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `phone`) VALUES
(16, 'mishutka@mail.ru', 'Пинкор', '+7 (999) 999 99 99'),
(17, 'vorotova1988@yandex.ru', 'Николай', '+7 (444) 444 44 4_'),
(18, 'voraaaotova1988@yandex.ru', 'Николай', '+7 (444) 444 44 4_'),
(19, 'saraaaotova1988@yandex.ru', 'Николай', '+7 (444) 444 44 4_'),
(20, 'zog1k@mail.ru', 'иВан', '+7 (666) 666 66 66');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
