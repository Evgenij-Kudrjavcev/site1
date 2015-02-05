-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2015 г., 19:19
-- Версия сервера: 5.6.22-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php-test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id_c` varchar(250) NOT NULL,
  `message_c` text NOT NULL,
  `username_c` varchar(25) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id_m` int(11) NOT NULL AUTO_INCREMENT,
  `section_m` varchar(255) NOT NULL,
  `theme_m` varchar(255) NOT NULL,
  `content_m` text NOT NULL,
  PRIMARY KEY (`id_m`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id_m`, `section_m`, `theme_m`, `content_m`) VALUES
(1, 'php', 'php and cicle FOR', 'fkewkfmewkfewflewfklewkjf'),
(4, 'php', 'php и я ', 'цуауцауцауцауца'),
(24, 'php', ',d,ewmd,', 'lewldewldldw');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `fullname_u` varchar(25) NOT NULL,
  `email_u` varchar(25) NOT NULL,
  `username_u` varchar(25) NOT NULL,
  `password_u` varchar(25) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_u`, `fullname_u`, `email_u`, `username_u`, `password_u`) VALUES
(1, 'evgen', 'diavol8@yandex.ru', 'evgen', '123'),
(2, 'devil', 'diab@dd.ru', 'devil', '123'),
(3, 'dima', 'diavol8@yandex.ru', 'dima', '123'),
(4, 'fack', 'dd@dd.ru', 'fack', '123'),
(5, 'gari', 'ddd@yy.ru', 'gari', '123'),
(6, 'admin', 'admin@admin.ru', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
