-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2019 г., 05:07
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `artem_pn_09`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `name` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `tip` varchar(355) NOT NULL,
  `episod` varchar(355) NOT NULL,
  `status` varchar(355) NOT NULL,
  `janr` varchar(355) NOT NULL,
  `avtor` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL,
  `id` int(10) NOT NULL,
  `trailer` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`name`, `img`, `tip`, `episod`, `status`, `janr`, `avtor`, `text`, `id`, `trailer`) VALUES
('МИЛЫЙ ВО ФРАНКСЕ', '1518634229_mily_vo_frankce.jpg', '', '', '', '', '', 'fasdfasdjfkgajdfgasljdfkhsdfjlkalhdsjkagg', 5, 'https://www.youtube.com/embed/isiV3tYW3IM'),
('О МОЕМ ПЕРЕРОЖДЕНИИ В СЛИЗЬ', '1547466081_02.jpg', '', '', '', '', '', 'fasdkjfhasdhfkjasdfsf', 6, 'https://www.youtube.com/embed/DFNCZxFNLsE'),
('БЕЗУМНЫЙ АЗАРТ', '1548603393_full.jpg', '', '', '', '', '', 'jhgjhgjhgj', 7, 'https://www.youtube.com/embed/20ll1unxpqo'),
('БОРУТО: НОВОЕ ПОКОЛЕНИЕ НАРУТО', '1502878523_1.jpg', '', '', '', '', '', 'adsfsd', 8, 'https://www.youtube.com/embed/OrVTim-7ZG8'),
('МОБ ПСИХО 100', '1544722740_1.jpg', '', '', '', '', '', 'cvzcxv', 9, 'https://www.youtube.com/embed/ltTlTqRZpAk'),
('ДОРОРО', '1547644798_dororo.jpg', '', '', '', '', '', 'DSFASDF', 10, 'https://www.youtube.com/embed/neqxQdpTyXE'),
('ХВОСТ ФЕИ(ТРЕТИЙ СЕЗОН)', '1534881065_02.jpg', 'фывцфв', 'фывцф', 'ывцфв', 'фывцфцвф', 'цфвыфв', 'фцвфыв', 11, 'фцвфыв');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
