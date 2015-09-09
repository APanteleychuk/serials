-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 10 2015 г., 02:30
-- Версия сервера: 5.5.44-0ubuntu0.14.04.1-log
-- Версия PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `serial`
--

-- --------------------------------------------------------

--
-- Структура таблицы `episode`
--

CREATE TABLE IF NOT EXISTS `episode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `season_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `part` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `episode`
--

INSERT INTO `episode` (`id`, `season_id`, `img`, `name`, `part`, `url`) VALUES
(9, 6, '', '', 1, 'https://www.youtube.com/watch?v=hUb3zCSiO4M');

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE IF NOT EXISTS `season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `serial_id` int(100) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`id`, `number`, `serial_id`, `date_start`, `date_finish`) VALUES
(1, 1, 14, '2015-09-15', '2015-09-11'),
(2, 2, 14, '2015-09-22', '0000-00-00'),
(3, 1, 14, '0000-00-00', '0000-00-00'),
(4, 1, 15, '0000-00-00', '0000-00-00'),
(5, 2, 15, '2015-09-02', '0000-00-00'),
(6, 1, 17, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `serial`
--

CREATE TABLE IF NOT EXISTS `serial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `serial`
--

INSERT INTO `serial` (`id`, `title`, `date`, `description`, `logo`) VALUES
(23, 'ваыва', '2015-09-24', ' ываыфва', 'narki.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
