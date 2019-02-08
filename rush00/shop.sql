-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3307
-- Время создания: Янв 20 2019 г., 08:08
-- Версия сервера: 5.7.24
-- Версия PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `busket`
--

CREATE TABLE `busket` (
  `id` int(6) UNSIGNED NOT NULL,
  `product` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photo` varchar(5000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `busket`
--

INSERT INTO `busket` (`id`, `product`, `category`, `price`, `photo`, `user_id`) VALUES
(52, 'YELLOW T-SHIRT', 'MAN', 21, './img/3.png', 13),
(46, 'striped socks', 'KIDS', 15, './img/6.jpg', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `tovars`
--

CREATE TABLE `tovars` (
  `id` int(6) UNSIGNED NOT NULL,
  `product` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photo` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tovars`
--

INSERT INTO `tovars` (`id`, `product`, `category`, `price`, `photo`) VALUES
(1, 'BLUE T-SHIRT', 'MAN', 26, './img/1.png'),
(2, 'WOMAN SHIRT', 'WOMAN', 31, './img/2.png'),
(3, 'YELLOW T-SHIRT', 'MAN', 21, './img/3.png'),
(4, 'COOL LINGERIE', 'WOMAN', 56, './img/4.png'),
(7, 'Cowboy Jeans', 'MAN', 45, './img/5.jpg'),
(8, 'striped socks', 'KIDS', 15, './img/6.jpg'),
(9, 'Dress', 'KIDS', 31, './img/7.jpg'),
(11, 'Superman', 'KIDS', 54, './img/8.jpeg\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `idp` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `idp`) VALUES
(1, 'admin', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94', -1),
(13, 'vlaf', '19b130742a9f81ab1741870e850894f686cdbd5d7dc9d5803b1687a471200073e07da9a7192bc758d2c1ae1a7de77ad2ee7b999cce6077fd6f90c4db0cdc94cd', -1),
(14, 'osapon', 'e58e7af344db4cedaae80b77b1743906453ea2e83b76a42d0d333ae3fc118f8051f20f3d7ea482c22a89477a6139a7c49ac70b8c58be8dc349f0c57b39fc1074', -1),
(15, 'oli', '19b130742a9f81ab1741870e850894f686cdbd5d7dc9d5803b1687a471200073e07da9a7192bc758d2c1ae1a7de77ad2ee7b999cce6077fd6f90c4db0cdc94cd', -1),
(0, 'null', 'null', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `busket`
--
ALTER TABLE `busket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `tovars`
--
ALTER TABLE `tovars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `busket`
--
ALTER TABLE `busket`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `tovars`
--
ALTER TABLE `tovars`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
