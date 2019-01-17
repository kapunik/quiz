-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 15 2019 г., 21:44
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quiz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `questions_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `truth` tinyint(1) NOT NULL,
  `confirmation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `number`, `questions_id`, `description`, `truth`, `confirmation`) VALUES
(1, 1, 1, '4 килограмма', 0, ''),
(2, 2, 1, '5 килограмм', 0, ''),
(3, 3, 1, '6 килограмм', 0, ''),
(4, 4, 1, '34 килограмма', 1, 'Согласно материалам Palawan News и Aileen Cynthia Maggay-Amurao, филиппинский рыбак выловил огромную раковину с жемчужиной весом 34 кг. Размеры новой рекордсменки составляют 67 см в длину и 30 см в ширину. Она была найдена у берегов острова Палаван.\r\n<a href=\"https://ru.wikipedia.org/wiki/%D0%96%D0%B5%D0%BC%D1%87%D1%83%D0%B6%D0%B8%D0%BD%D0%B0_%D0%9B%D0%B0%D0%BE-%D1%86%D0%B7%D1%8B\"> Wiki </a>'),
(21, 1, 17, 'Больше 10', 0, ''),
(22, 2, 17, 'Больше 20', 0, ''),
(23, 3, 17, 'Больше 50', 0, ''),
(24, 4, 17, 'Больше 100', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `teams` text NOT NULL,
  `rounds` text NOT NULL,
  `score` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `number`, `date`, `teams`, `rounds`, `score`, `author`) VALUES
(1, 1, '2019-01-03', '1,2,3,4', '1,2,3', '0,0,0,0', 'Коля Кучумов'),
(2, 2, '2019-01-06', '1,2,3,4', '1,2,3,4', '0,0,0,0', 'Коля Кучумов');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `rounds_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `timer` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `number`, `rounds_id`, `description`, `timer`, `type`) VALUES
(1, 1, 1, 'Сколько весит самая крупная жемчужина в мире?', 60, 'four_answers'),
(3, 3, 1, 'У какой птицы глаз по размерам больше чем мозг?', 60, 'four_answers'),
(4, 4, 1, 'Что из перечисленного Кот Матроскин не предъявлял в качестве своих документов?', 60, 'four_answers'),
(5, 5, 1, 'Куда согласно пословице ведут все дороги?', 60, 'four_answers'),
(6, 6, 1, 'Какое из перечисленных государств действительно существует?', 60, 'four_answers'),
(7, 7, 1, 'Что находится внутри теннисного мяча?', 60, 'four_answers'),
(8, 8, 1, 'Какой колючий кустарник дал название кисло-сладким леденцам?', 60, 'four_answers'),
(9, 9, 1, 'Какие племена жили в Европе, а не в Северной Америке?', 60, 'four_answers'),
(10, 10, 1, 'Как называется специальный сосуд, придуманный Пифагором?', 60, 'four_answers'),
(17, 2, 1, 'Сколько звуков может издавать кошка?', 60, 'four_answers');

-- --------------------------------------------------------

--
-- Структура таблицы `rounds`
--

CREATE TABLE `rounds` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `rewards` int(11) NOT NULL,
  `games_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rounds`
--

INSERT INTO `rounds` (`id`, `number`, `name`, `description`, `rewards`, `games_id`) VALUES
(1, 1, 'Разминка', '10 простых вопросов с 4 вариантами ответа', 1, 1),
(2, 2, 'Посложней', '10 вопросов чуть сложнее с 4 вариантами ответа', 2, 1),
(3, 3, 'Поехали', '10 вопросов с без варианта ответа', 3, 1),
(4, 4, 'Сложна', '10 сложных вопросов с без варианта ответа', 4, 1),
(5, 5, 'Блиц', 'Конкурс игрока (легких 10 вопросов за минуту). Отвечающего игрока выбирает другая команда.', 1, 1),
(6, 6, 'Аукцион', 'Всего 10 вопросов ( каждая команда по очереди выбирает вопрос)', 5, 1),
(7, 7, 'Капитанский', 'Для капитанов команд', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`) VALUES
(1, 'Пельменный орден'),
(2, 'Воронежские мормоны'),
(3, 'Давай выпьем'),
(4, 'Да нормальная команда');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `rounds`
--
ALTER TABLE `rounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
