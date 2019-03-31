-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2019 г., 23:16
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `galanix`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UID` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID` (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`UID`, `name`, `age`, `email`, `phone`, `gender`) VALUES
(1, 'Alex', 22, 'alex@textmail.com', '01243453425', 'male'),
(2, 'Helen S.', 17, 'helen@textmail.com', '06457634543', 'female'),
(3, 'Max H.', 45, 'Max-1@textmail.com', '07657324322', 'male'),
(4, 'John', 12, 'j@textmail.com', '09345723467', 'male'),
(5, 'Ivan J.', 99, 'Ivan-999@textmail.com', '02345324543', 'male'),
(6, 'Peter', 35, 'pp@textmail.com', '07456342343', 'male'),
(7, 'Ann P.', 53, 'annie@textmail.com', '08563445233', 'female'),
(8, 'Matthew', 33, 'Mett-new@textmail.com', '06435433452', 'female'),
(9, 'Kate', 21, 'katerina@textmail.com', '02453546444', 'female'),
(10, 'Jack E.', 43, 'jj@textmail.com', '08967443234', 'male'),
(11, 'Taras', 37, 'tar@somemail.com', '05464353534', 'male'),
(12, 'Leo D.', 42, 'leo@gmail.com', '03534522456', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
