-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 02 2019 г., 18:26
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
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(2, 'девочка'),
(1, 'мальчик');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `count` int(11) NOT NULL,
  `sum` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `count`, `sum`, `name`, `email`, `phone`, `city`) VALUES
(16, '2019-09-02 11:43:23', '0000-00-00 00:00:00', 19, 7000, 'qwe', 'qwe@qwe.com', '111', 'Киев'),
(17, '2019-09-02 11:43:45', '0000-00-00 00:00:00', 19, 7000, 'qwe', 'qwe@qwe.com', '111', 'Киев'),
(18, '2019-09-02 11:44:41', '0000-00-00 00:00:00', 19, 7000, 'qwe', 'qwe@qwe.com', '111', 'Киев'),
(19, '2019-09-02 11:50:30', '0000-00-00 00:00:00', 19, 7000, 'qwe', 'qwe@qwe.com', '111', 'Киев'),
(20, '2019-09-02 11:52:26', '0000-00-00 00:00:00', 19, 7000, 'qwe', 'qwe@qwe.com', '111', 'Киев'),
(21, '2019-09-02 11:56:12', '0000-00-00 00:00:00', 20, 7300, 'max', 'zxc@asd.com', '1234', 'Кривой Рог'),
(22, '2019-09-02 11:58:35', '0000-00-00 00:00:00', 20, 7300, 'max', 'zxc@asd.com', '1234', 'Харьков'),
(23, '2019-09-02 12:01:19', '0000-00-00 00:00:00', 20, 7300, 'max', 'zxc@asd.com', '1234', 'Харьков'),
(24, '2019-09-02 12:01:36', '0000-00-00 00:00:00', 20, 7300, 'max', 'zxc@asd.com', '1234', 'Харьков'),
(25, '2019-09-02 12:02:03', '0000-00-00 00:00:00', 21, 7600, 'max', 'zxc@asd.com', '1234', 'Львов'),
(26, '2019-09-02 12:02:17', '0000-00-00 00:00:00', 21, 7600, 'max', 'zxc@asd.com', '1234', 'Львов'),
(27, '2019-09-02 12:02:21', '0000-00-00 00:00:00', 21, 7600, 'max', 'zxc@asd.com', '1234', 'Львов'),
(28, '2019-09-02 12:03:58', '0000-00-00 00:00:00', 30, 10300, 'qwe', 'qwe@qwe.com', '111', 'Киев'),
(29, '2019-09-02 12:04:38', '0000-00-00 00:00:00', 1, 300, 'max', 'qwe@qwe.com', '1234', 'Харьков'),
(30, '2019-09-02 12:05:02', '0000-00-00 00:00:00', 1, 300, 'max', 'qwe@qwe.com', '1234', 'Харьков'),
(31, '2019-09-02 12:05:22', '0000-00-00 00:00:00', 1, 300, 'max', 'zxc@asd.com', '1234', 'Днепр'),
(32, '2019-09-02 12:07:06', '0000-00-00 00:00:00', 1, 300, 'max', 'qwe@qwe.com', '1234', 'Запорожье'),
(33, '2019-09-02 12:09:12', '0000-00-00 00:00:00', 1, 300, 'max', 'zxc@asd.com', '111', 'Харьков'),
(34, '2019-09-02 12:25:55', '0000-00-00 00:00:00', 2, 600, 'max', 'qwe@qwe.com', '1234', 'Запорожье'),
(35, '2019-09-02 12:46:27', '0000-00-00 00:00:00', 4, 1200, 'qwe', 'zxc@asd.com', '1234', 'Павлоград'),
(36, '2019-09-02 12:48:12', '0000-00-00 00:00:00', 4, 1200, 'qwe', 'maxim@asd.com', '12345', 'Северодонецк'),
(37, '2019-09-02 13:04:00', '0000-00-00 00:00:00', 1, 300, 'zxc', 'max@asd.com', '123', 'Хмельницкий'),
(38, '2019-09-02 13:06:59', '0000-00-00 00:00:00', 1, 300, 'qwe', 'asd@asd.com', '123', 'Полтава'),
(39, '2019-09-02 13:09:36', '0000-00-00 00:00:00', 1, 300, 'asd', 'qwe@qwe.com', '123', 'Черкассы'),
(40, '2019-09-02 13:12:36', '0000-00-00 00:00:00', 1, 500, 'qwe', 'asd@asd.com', '12345', 'Чернигов'),
(41, '2019-09-02 13:14:21', '0000-00-00 00:00:00', 1, 300, 'asd', 'asd@asd.com', '111', 'Симферополь'),
(42, '2019-09-02 13:41:58', '0000-00-00 00:00:00', 53, 24300, 'Сергей Скоробагатько', 'раоенгеокннгкегненг', '1234', 'Чернигов'),
(43, '2019-09-02 14:53:20', '0000-00-00 00:00:00', 21, 6300, '654675756', '3543654756756', '8(563)465-47-56', 'Черновцы'),
(44, '2019-09-02 14:55:57', '0000-00-00 00:00:00', 1, 300, '            543654754765645            ', '12324245435', '8(123)546-45-64', 'Полтава'),
(45, '2019-09-02 14:56:17', '0000-00-00 00:00:00', 1, 300, 'qwe', 'asd@asd.com', '8(123)344-54-64', 'Чернигов'),
(46, '2019-09-02 15:07:21', '0000-00-00 00:00:00', 19, 5700, 'asd', 'qwe@qwe.com', '8(534)465-47-56', 'Херсон');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `system_product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `count_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `system_product_id`, `name`, `price`, `count_item`, `sum_item`) VALUES
(1, 18, 6, '9 батончиков + 1 упак. вафель', 300, 13, 3900),
(2, 18, 7, '18 батончиков + 2 упак. вафель', 500, 5, 2500),
(3, 18, 8, '27 батончиков + 3 упак. вафель', 600, 1, 600),
(4, 19, 6, '9 батончиков + 1 упак. вафель', 300, 13, 3900),
(5, 19, 7, '18 батончиков + 2 упак. вафель', 500, 5, 2500),
(6, 19, 8, '27 батончиков + 3 упак. вафель', 600, 1, 600),
(7, 21, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(8, 22, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(9, 23, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(10, 25, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(11, 28, 6, '9 батончиков + 1 упак. вафель', 300, 9, 2700),
(12, 29, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(13, 31, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(14, 32, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(15, 33, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(16, 34, 6, '9 батончиков + 1 упак. вафель', 300, 2, 600),
(17, 36, 6, '9 батончиков + 1 упак. вафель', 300, 4, 1200),
(18, 37, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(19, 38, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(20, 39, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(21, 40, 7, '18 батончиков + 2 упак. вафель', 500, 1, 500),
(22, 41, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(23, 42, 7, '18 батончиков + 2 упак. вафель', 500, 13, 6500),
(24, 42, 6, '9 батончиков + 1 упак. вафель', 300, 9, 2700),
(25, 42, 7, '18 батончиков + 2 упак. вафель', 500, 11, 5500),
(26, 42, 6, '9 батончиков + 1 упак. вафель', 300, 8, 2400),
(27, 42, 8, '27 батончиков + 3 упак. вафель', 600, 8, 4800),
(28, 42, 8, '27 батончиков + 3 упак. вафель', 600, 4, 2400),
(29, 43, 6, '9 батончиков + 1 упак. вафель', 300, 21, 6300),
(30, 44, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(31, 45, 6, '9 батончиков + 1 упак. вафель', 300, 1, 300),
(32, 46, 6, '9 батончиков + 1 упак. вафель', 300, 19, 5700);

-- --------------------------------------------------------

--
-- Структура таблицы `system_products`
--

CREATE TABLE `system_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `price` int(7) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `system_products`
--

INSERT INTO `system_products` (`id`, `name`, `body`, `price`) VALUES
(6, '9 батончиков + 1 упак. вафель', '9 батончиков + 1 упак. вафель', 300),
(7, '18 батончиков + 2 упак. вафель', '18 батончиков + 2 упак. вафель', 500),
(8, '27 батончиков + 3 упак. вафель', '27 батончиков + 3 упак. вафель', 600),
(9, '54 батончика + 6 упак. вафель', '54 батончика + 6 упак. вафель', 900);

-- --------------------------------------------------------

--
-- Структура таблицы `system_products_genders`
--

CREATE TABLE `system_products_genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `system_products_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `system_products_genders`
--

INSERT INTO `system_products_genders` (`id`, `gender_id`, `system_products_id`) VALUES
(1, 1, 6),
(2, 1, 7),
(3, 1, 8),
(4, 1, 9),
(5, 2, 6),
(6, 2, 7),
(7, 2, 8),
(8, 2, 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `system_product_id` (`system_product_id`);

--
-- Индексы таблицы `system_products`
--
ALTER TABLE `system_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `system_products_genders`
--
ALTER TABLE `system_products_genders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `system_products_id` (`system_products_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `system_products`
--
ALTER TABLE `system_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `system_products_genders`
--
ALTER TABLE `system_products_genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`system_product_id`) REFERENCES `system_products` (`id`);

--
-- Ограничения внешнего ключа таблицы `system_products_genders`
--
ALTER TABLE `system_products_genders`
  ADD CONSTRAINT `system_products_genders_ibfk_1` FOREIGN KEY (`system_products_id`) REFERENCES `system_products` (`id`),
  ADD CONSTRAINT `system_products_genders_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
