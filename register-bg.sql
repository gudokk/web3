-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Мар 08 2024 г., 16:30
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register-bg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `preview` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `preview`, `text`, `date`, `img`) VALUES
(2, 'На берегу Оби в Новосибирске планируют построить 60-этажный небоскреб', 'Небоскрёб в квартале «Чернышевский» рядом с Димитровским мостом запланировала новосибирская компания из холдинга «СибирьИнвест».    ', 'Жилое здание в 60 этажей намерена построить компания «Альгеба». Она возводит квартал «Чернышевский» в границах улиц Владимировской, Понтонной и Чернышевского спуска.  Это будет второй проект небоскрёба такой высоты в нашем городе. Первый совместно реализуют компании «СМСС» и «ВербаКапитал». Комплекс с двумя башнями, одна из которых высотой 180 метров, должен появиться рядом со станцией метро «Октябрьская». Он станет второй очередью ЖК «Чикаго», состоящего из двух 100-метровых «свечек».  Пять лет назад «СибирьИнвест» заявляла о планах строительства 150-метрового жилого дома на пересечении Ипподромской и Октябрьской магистралей. Однако пока к реализации идеи не подошли. У застройщика был ещё один амбициозный проект — бизнес-центр высотой около 100 метров на углу Красного проспекта и Колыванской. Холдинг даже получил разрешение на строительство, однако в итоге в этом месте появилось пятиэтажное административное здание с оригинальным архитектурным решением.  И всё же «СибирьИнвест» решила не отказываться от идеи строительства небоскрёба в Новосибирске и вышла к мэрии с предложением поставить высотку на правом берегу Оби в квартале «Чернышевский». Эксперты градостроительного совета положительно оценили амбициозную задумку.  По словам члена градсовета, архитектора Игоря Поповского, при проектировании такого доминирующего объекта необходимо смотреть речной фасад — то есть насколько гармонично город будет выглядеть с воды.    ', '2024-03-03', '../logos/pg2.jpg'),
(3, 'Рестораторы объяснили рост числа заведений грузинской кухни', 'За последние четыре месяца в городе начали работу два новых грузинских ресторана. На ближайшее время анонсировано открытие как минимум еще одного', 'В Новосибирске количество заведений грузинской кухни к началу 2024 года достигло 43. Они представляют собой разные форматы – от ресторанов премиум-класса до фастфуда. В планах рестораторов открытие еще нескольких точек общепита этого гастрономического направления.  Среди ресторанов национальных кухонь, работающих на новосибирском рынке, долгое время лидерами были итальянская и японская. Они и сейчас популярны, но новые заведения этих концепций практические не открываются. С грузинской кухней ситуация другая: она растет по всем показателям и популярна среди всех возрастных категорий.  «Грузинская кухня понятна и доступна. В «культурном коде» советского гостя и даже современного поколения есть особенная любовь к мясу, специям и тесту. А это главные продукты грузинской кухни, – рассказала BFM-Новосибирск PR-директор компании «ЯсноРестораны» Лана Васильева. – У нас 17 ресторанов грузинской кухни по стране. Четыре из них в Новосибирске, в том числе новый ресторан «Сулугули». Раньше это был ресторан восточной кухни «Чучвара», но мы изменили концепцию, проанализировав предпочтения клиентов. Посетители спрашивают о названии. Это игра слов: популярный сыр сулугуни и грузинская фраза «Сул Гулит», которая значит «всем сердцем». Гости сами любят блюда из сыра, отсюда и идея»  Рост популярности грузинской кухни отмечают во многих российских регионах, и везде называют одни и те же факторы, которые этому способствовали: доступность продуктов, туристический интерес к Грузии, память о советском прошлом. В Сибири еще одним фактором указывают климат.  «Если говорить о кулинарных привычках сибиряков и о влиянии климата на гастрономические предпочтения, то здесь грузинская кухня закрывает нишу быстрого и стопроцентного счастья. Запах свежеиспеченного хлеба из печи – это ключ к успеху в любом регионе, но в Сибири с ее морозами – особенно», – говорит бренд-шеф грузинских концепций (рестораны «ХОЧУ ПУРИ», «Хлеб и Нино», «Баклажани») Аваз Махкамов.', '2024-03-03', '../logos/pg3.jpg'),
(4, 'На Новосибирск надвигается потепление', 'Воздух в городе прогреется до -12 градусов', 'В Новосибирске в скором времени прогнозируется потепление. Воздух прогреется до -12 градусов, сообщает начальник отдела метеопрогнозов УГМС Наталья Кичанова.  Уточняется, что 23 февраля по области ожидается холодная погода: ночью температура опустится до отметки от -25 до -35 градусов, а днём поднимется до -13...-17 градусов.  По словам синоптика, погода постепенно переходит к весенней. С каждыми сутками мороз будет постепенно ослабевать на 1-3 градуса. В городе ожидается холодная погода без осадков: ночью от -28 до -30 градусов, днём до -15 градусов, при южном ветре со скоростью до 1,6 м/с. На следующий день, 24 февраля, температура ночью ожидается до -32 градусов, местами до -36, а днём воздух прогреется до -12 градусов.  Также отмечается, что в областном центре будет повышение температуры, ночью до -24 градусов, днём до -13. Наталья Кичанова предупредила, что к 28–29 февраля стоит ожидать существенного потепления.', '2024-03-03', '../logos/pg4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`) VALUES
(4, 'magudok', '884635ec981e93abb43f2a901454851b', 'маша'),
(5, 'Nikita', 'e49c1e5dc815586de1fb7faed949ab31', 'Никита'),
(11, 'admin', 'fdc0ae4052bc28b93aeefec22450665d', 'Администратор'),
(9, 'ilyav', '5d4ab7a9e9b31e1dab322bb51f06fc91', 'Илья');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
