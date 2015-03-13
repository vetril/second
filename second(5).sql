-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3308
-- Время создания: Мар 09 2015 г., 13:57
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `second`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `showhide`) VALUES
(1, 'техника', 'show'),
(2, 'компьютерные компаненты', 'show');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en','by') NOT NULL DEFAULT 'ru',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, '<h3>Добро пожаловать на сайт</h3>', '<div class="row"> <h4>Почему при ремонте бытовой техники выбирают нашу компанию?</h4><br/>\r\n<p>Наличие зарегистрированного товарного знака с 2000 года и сертификата БелГИСС с 2006 г.</p><br/>\r\nПодробнее <br/>\r\nМы указываем наш юридический адрес: г. Минск, ул. Притыцкого 62-2, оф. 706, УНН 190615928<br/>\r\n<p>Предоставляем консультации по ориентировочной стоимости ремонта бытовой техники и времени выезда мастера.</p><br/>\r\n<p>Обслуживание бытовой техники осуществляем как на дому у заказчика в любом районе г. Минска, так и в стационарной мастерской по адресу ул. Притыцкого 62/2-110 (находимся на ф-ле ОАО МПОВТ «Завод вычислительной техники» с 2000г.).</p><br/>\r\n</p>Большинство заказов выполняется в день поступления заказа.</p><br/>\r\n<p>Каждый ремонт бытовой техники сопровождается документально оформленной гарантией на работы и запчасти.</p><br/>\r\n<p>При перепаде напряжения выдаются документы в ЖЭС, в случае если Ваш аппарат застрахован, выдаются документы в страховую компанию для получения Вами компенсации за ремонт.</p>\r\nПодробнее <br/>\r\nВозможен безналичный расчет.\r\nМы работаем без выходных.\r\nМы ремонтируем и обслуживаем технику со скидками.<br/>\r\n\r\n<p>Наша организация работает с 2000 г. без изменения фирменного названия и местоположения (ст.м. Кунцевщина, Завод вычислительной техники). Вы всегда нам сможете позвонить и получить подробную консультацию по ремонту и обслуживанию. Сотрудники нашей организации – специалисты с большим опытом работы в сфере ремонта бытовой техники. Постоянное повышение квалификации делает наших сотрудников более профессиональными в своём деле. В связи с постоянно развивающимся рынком технологий и обновлением знаний в области обслуживания современного оборудования наши сотрудники постоянно совершенствуются в этой области.</p><br/>\r\n\r\n<p>Заказ по ремонту Вашей техники Вы можете сделать по телефонам либо с помощью формы заказа на сайте.</p>\r\n			</div>\r\n', 'index', 'show', 'ru', '2015-02-25'),
(2, 'Ремонт компьютеров в Минске', '<p>Минская мастерская ООО «Телефраст» производит ремонт компьютеров на дому и в мастерской по Минску с 2002 года. Наши мастера готовы оказать вам помощь в максимально сжатые сроки и на высоком качественном уровне.</p>', 'page1', 'show', 'ru', '2015-02-25'),
(3, 'Условия гарантии ООО "ТЕЛЕФРАСТ"', '<p>При выдаче гарантии мы руководствуемся Положением об условиях гарантии.</p>\r\n\r\n<p>Гарантийный срок исчисляется для аппаратов, отремонтированных в стационарной мастерской со дня выдачи аппарата владельцу; для аппаратов, отремонтированных на дому у владельца со дня выполнения ремонта.</p>\r\n\r\n<p>Гарантийный срок продлевается на время прохождения аппарата в повторных ремонтах (на период со дня повторного обращения владельца в мастерскую до даты окончания ремонта).</p>\r\n\r\n<p>По гарантии ремонт выполняется бесплатно. В этом случае вышедшие из строя детали, установленные при предыдущем ремонте бытовой техники, заменяются бесплатно и владельцу и не выдаются. Установленные детали, не заменявшиеся при предыдущем ремонте, оплачиваются владельцем. Гарантийное обслуживание производится только в зоне действия мастерской.</p>\r\n\r\n<p>При нарушении владельцем правил эксплуатации, указанных в руководстве по эксплуатации, правил эксплуатации сложной электронной техники, механических повреждениях нарушении условий транспортирования и хранения, обнаружение следов попадания влаги и (или) следов жизнедеятельности насекомых, нарушении пломб (стикеров), утере гарантийного талона – гарантийные обязательства мастерской аннулируются.</p>\r\n\r\n<p>На аппаратуру, прошедшую техническое обслуживание, гарантия не устанавливается.</p>', 'page2', 'show', 'ru', '2015-02-25'),
(4, 'Отзывы', '<p>Клиент: Нина Ивановна ( marinina_nina@tut.by ) - Услуга: ремонт телевизора Panasonic</p><hr/>\r\n\r\n<p>Очень понравился мастер, который ремонтировал наш телевизор Panasonic GAOO70. Фамилия его Якубовский (если мы правильно прочли фамилию на квитанции). Он качественно выполнил ремонт, но самое главное, он такой веселый и позитивный, что у нас  тоже улучшилось настроение. Прошло уже два месяца, а мы его с благодарностью вспоминаем.</p><hr/>', 'page3', 'show', 'ru', '2015-02-25');

-- --------------------------------------------------------

--
-- Структура таблицы `system_accounts`
--

CREATE TABLE IF NOT EXISTS `system_accounts` (
  `id_account` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `pass` tinytext NOT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `system_accounts`
--

INSERT INTO `system_accounts` (`id_account`, `name`, `pass`) VALUES
(26, 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE IF NOT EXISTS `tovar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `price` tinytext NOT NULL,
  `cat_id` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `vip` enum('1','2') NOT NULL,
  `picture` tinytext NOT NULL,
  `picturesmall` tinytext NOT NULL,
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `body`, `price`, `cat_id`, `showhide`, `vip`, `picture`, `picturesmall`, `putdate`) VALUES
(28, 'Наушники', 'Наушники LT2-22E', '28400', 1, 'hide', '1', '15_03_06_01_24_Naushniki.png', 'S_15_03_06_01_24_Naushniki.png', '2015-03-06'),
(29, 'Bluetooth', 'Bluetooth адаптер USB BA-003', '42100', 1, 'show', '1', '15_03_06_01_25_Bluetooth.png', 'S_15_03_06_01_25_Bluetooth.png', '2015-03-06'),
(30, 'Гарнитура', 'Гарнитура FIS1010', '47400', 1, 'show', '1', '15_03_06_01_26_Garnitura.png', 'S_15_03_06_01_26_Garnitura.png', '2015-03-06'),
(31, 'Беспроводная мышь', 'Беспроводная мышь MX735B', '136700', 1, 'show', '1', '15_03_06_01_26_Mouse.png', 'S_15_03_06_01_26_Mouse.png', '2015-03-06'),
(32, 'Сумка для ноутбука красная', 'Сумка для ноутбука (CT-7288RD)', '132100', 2, 'show', '1', '15_03_06_01_27_Sumkaidliainoutbukaikrasnaia.png', 'S_15_03_06_01_27_Sumkaidliainoutbukaikrasnaia.png', '2015-03-06'),
(33, 'Сумка для ноутбука', '<p>Сумка для ноутбука 14-15.7, СТ-7288BL44<img alt="" src="http://second/media/images/logo1.jpg" style="height:421px; width:450px" /></p>\r\n', '132100', 1, 'show', '1', '15_03_06_01_27_Sumkaidliainoutbukaisiniaia.png', 'S_15_03_06_01_27_Sumkaidliainoutbukaisiniaia.png', '2015-03-06');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockunblock` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `putdate`, `lastvisit`, `blockunblock`) VALUES
(12, '12123', '123', 'tut@tut.by', '2015-02-27', '2015-02-27 12:43:47', 'unblock'),
(13, 'tut', '123', 'ietut@tut.by', '2015-03-02', '2015-03-09 09:03:51', 'unblock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
