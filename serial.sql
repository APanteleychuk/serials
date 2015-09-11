-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 11 2015 г., 04:25
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `episode`
--

INSERT INTO `episode` (`id`, `season_id`, `img`, `name`, `part`, `url`) VALUES
(1, 1, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck2/08/08/080804.mp4'),
(2, 1, '', '', 2, 'http://backend11.koma.tv:8091/24/Serialck2/08/08/080804.mp4'),
(3, 1, '', '', 3, 'http://backend11.koma.tv:8091/24/Serialck2/08/08/080804.mp4'),
(4, 2, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck2/08/08/080804.mp4'),
(5, 2, '', '', 2, 'http://backend11.koma.tv:8091/24/Serialck2/08/08/080804.mp4'),
(6, 2, '', '', 3, 'http://backend11.koma.tv:8091/24/Serialck2/08/08/080804.mp4'),
(7, 3, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck4/11/58/115810.mp4'),
(8, 3, '', '', 2, 'http://n41.filecdn.to/ff/MTg3YWU4NjM1YjE2NzEyNGY0N2VlOGFhNDQ2MzIxNTF8ZnN0b3wxMzE3NjExNjE2fDEwMDAwfDJ8MHxofDQxfDdlODU0YzJjNTdmNmE5MjI4MmE4YTA0YjBkZjViZDNjfDB8MTc6Ni4xODoyfDB8MjAxNTk5MzE4MnwxNDQxOTI0OTI5LjQ3NDI,/playvideo_673t6t6dpujn684xbryopza7q.0.1765758'),
(9, 3, '', '', 3, 'http://n41.filecdn.to/ff/MTg3YWU4NjM1YjE2NzEyNGY0N2VlOGFhNDQ2MzIxNTF8ZnN0b3wxMzE3NjExNjE2fDEwMDAwfDJ8MHxofDQxfDdlODU0YzJjNTdmNmE5MjI4MmE4YTA0YjBkZjViZDNjfDB8MTc6Ni4xODoyfDB8MjAxNTk5MzE4MnwxNDQxOTI0OTI5LjQ3NDI,/playvideo_673t6t6dpujn684xbryopza7q.0.1765758'),
(10, 4, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck4/11/23/112341.mp4'),
(11, 4, '', '', 2, 'http://backend11.koma.tv:8091/24/Serialck4/11/23/112341.mp4'),
(12, 5, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck4/11/23/112341.mp4'),
(13, 5, '', '', 2, 'http://backend11.koma.tv:8091/24/Serialck4/11/23/112341.mp4'),
(14, 6, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck4/06/12/061201.mp4'),
(15, 6, '', '', 2, 'http://backend11.koma.tv:8091/24/Serialck4/06/12/061201.mp4'),
(16, 6, '', '', 3, 'http://backend11.koma.tv:8091/24/Serialck4/06/12/061201.mp4'),
(17, 7, '', '', 1, 'http://backend11.koma.tv:8091/24/Serialck4/06/12/061201.mp4'),
(18, 7, '', '', 2, 'http://backend11.koma.tv:8091/24/Serialck4/06/12/061201.mp4');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`id`, `number`, `serial_id`, `date_start`, `date_finish`) VALUES
(1, 1, 25, '2015-09-01', '2015-09-08'),
(2, 2, 25, '2015-09-01', '2015-09-02'),
(3, 1, 26, '2015-09-16', '0000-00-00'),
(4, 1, 27, '2015-09-01', '0000-00-00'),
(5, 2, 27, '2015-09-08', '0000-00-00'),
(6, 1, 28, '2015-09-01', '0000-00-00'),
(7, 2, 28, '2015-09-01', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `serial`
--

INSERT INTO `serial` (`id`, `title`, `date`, `description`, `logo`) VALUES
(25, 'Кухня', '2012-01-01', '«Во все времена еда была рядом с людьми. Она искушает, вдохновляет, восхищает, отвращает. Но человек не может без еды, а значит тот, кто создает еду, может управлять миром...». Так думал Максим Лавров, когда шел осуществлять свою мечту – устраиваться поваром в один из самых дорогих ресторанов столицы.\r\n\r\nМечта сбылась, вот только на деле все вышло не так вкусно. Шеф-повар ресторана Виктор Баринов – настоящая звезда гастрономического бомонда, знающая как угодить взыскательной публике. Оборотная сторона этого идеального образа – злоупотребление алкоголем, страсть к азартным играм и невыносимый характер. В гневе Баринов страшен, в загуле – неукротим.\r\n\r\nАрт-директор Виктория Гончарова – настоящая снежная королева, карьеристка с ледяным сердцем, однако именно с ней Макс проводит ночь до того, как пойти на новую работу. А вся команда поваров только и ждет промашки новичка, чтобы от души посмеяться.', 'kuxhya.jpg'),
(26, 'Нарки', '2015-09-01', ' Хроника криминальной жизни колумбийского наркобарона Пабло Эскобара.', 'narki.jpg'),
(27, 'Десница Божий', '2015-09-02', ' Продажный судья верит в то, что это Бог наставляет его на путь самоуправства…', 'dac.jpg'),
(28, 'Контакт', '2015-09-02', ' В центре событий отец, который обнаруживает, что его сын, болеющий аутизмом, действительно может предсказывать события, которые еще не произошли.', 'kont.jpg'),
(29, 'Интерны', '2015-09-01', ' Главные герои ситкома – интерны. Они все время попадают в идиотские ситуации, а их руководитель доктор Быков с удовольствием за этим наблюдает.', 'int.jpg'),
(30, 'Пес', '2015-09-07', ' Макс – алкоголик. Когда-то лучший сыщик в городе, Макс потерял все – работу, друзей, жену. У него остался единственный друг – Пес. После серии погонь, драк и перестрелок, Пес и Макс раскрыли тайну загадочного убийства. Макс с Псом снова стали детективами. Теперь каждый день начинается с того, что Пес и Макс пытаются выяснить, кто совершил преступление... И выяснить – кто из них лучший сыщик в городе!', 'pes.jpg');

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
