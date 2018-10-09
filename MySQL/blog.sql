-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 25 2018 г., 09:34
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `dt`, `title`, `content`) VALUES
(1, '2018-08-03 07:44:20', 'PHP', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'),
(2, '2018-08-03 07:44:51', 'Way', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(3, '2018-08-03 07:45:04', 'Lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(4, '2018-08-03 07:45:18', 'Include_once', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(5, '2018-08-03 07:45:34', 'Text', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(6, '2018-08-03 07:45:45', 'Hello', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(7, '2018-08-03 08:31:55', 'GET', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(8, '2018-08-03 08:56:24', 'POST', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
(9, '2018-08-03 09:09:02', 'Requare_once', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem'),
(10, '2018-08-11 08:43:53', 'Last', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, '2018-08-11 08:46:04', 'Last', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(12, '2018-08-16 11:32:08', 'PHP_include', 'Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons. Lorem ipsun dolra po mons.'),
(13, '2018-08-16 11:33:40', 'PHP_tester', 'JLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdfJLF dnfkbdslhfkdf'),
(14, '2018-08-19 07:44:28', 'News_check_ttle', 'Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls. Lorem ipsun dolor pf dolls.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
