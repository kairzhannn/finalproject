-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 14:26
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `login` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Дамп данных таблицы `animal`
--

INSERT INTO `animal` (`id`, `name`, `surname`, `login`, `password`) VALUES
(1, 'Kairzhan', 'Kural', 'ramos', '7777'),
(2, '', '', '', ''),
(3, 'dfghjk', 'awsdfh', 'asdfn', 'asdfh'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'Abylay', 'Tillabek', 'aboka', '1'),
(9, 'Askar', 'Tursyn', 'CR', '7'),
(10, 'Kana', 'Aid', 'tii', '4'),
(11, 'dfgh', 'dfgh', 'dfgh', 'dfgh'),
(12, 'hh', 'hh', 'hh', 'hh'),
(13, 'ggg', 'fff', 'qqq', 'www'),
(14, 'dfg', 'dfgh', 'sdfg', 'a'),
(15, 'fghj', 'dfgh', '777', '7'),
(16, 'Yerbolat', 'YYY', 'yerbolat.a', '123'),
(17, 'vbn', 'dfg', 'df', 'd'),
(18, 'vbn', 'dfg', 'df', 'd'),
(19, 'vbn', 'dfg', 'df', 'd'),
(20, 'vbn', 'dfg', 'df', 'd'),
(21, 'vbn', 'dfg', 'df', 'd'),
(22, 'vbn', 'dfg', 'df', 'd'),
(23, 'vbn', 'dfg', 'df', 'd'),
(24, 'vbn', 'dfg', 'df', 'd'),
(25, 'vbn', 'dfg', 'df', 'd'),
(26, 'vbn', 'dfg', 'df', 'd'),
(27, 'vbn', 'dfg', 'df', 'd'),
(28, 'vbn', 'dfg', 'df', 'd'),
(29, 'vbn', 'dfg', 'df', 'd'),
(30, 'vbn', 'dfg', 'df', 'd'),
(31, 'vbn', 'dfg', 'df', 'd'),
(32, 'vbn', 'dfg', 'df', 'd'),
(33, 'vbn', 'dfg', 'df', 'd'),
(34, 'vbn', 'dfg', 'df', 'd'),
(35, 'vbn', 'dfg', 'df', 'd'),
(36, 'vbn', 'dfg', 'df', 'd'),
(37, 'vbn', 'dfg', 'df', 'd'),
(38, 'vbn', 'dfg', 'df', 'd'),
(39, 'vbn', 'dfg', 'df', 'd'),
(40, 'vbn', 'dfg', 'df', 'd'),
(41, 'vbn', 'dfg', 'df', 'd'),
(42, 'vbn', 'dfg', 'df', 'd'),
(43, 'vbn', 'dfg', 'df', 'd'),
(44, 'vbn', 'dfg', 'df', 'd'),
(45, 'vbn', 'dfg', 'df', 'd'),
(46, 'vbn', 'dfg', 'df', 'd'),
(47, '', '', '', ''),
(48, 'dfg', 'sdfg', 'sdfg', 'd'),
(49, 'u', 'u', 'u', 'u'),
(50, 'Kairzhan', 'dfv', 'sdf', '777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
