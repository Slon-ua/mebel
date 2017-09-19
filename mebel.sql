-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 19 2017 г., 17:06
-- Версия сервера: 5.5.25
-- Версия PHP: 5.6.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mebel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Фурнитура'),
(2, 'Материалы'),
(3, 'Калькулятор цены'),
(4, 'Шкафы'),
(5, 'Кухни'),
(6, 'Прихожие'),
(7, 'Гостинные'),
(8, 'Детские'),
(9, 'Спальни'),
(10, 'Офисная мебель'),
(11, 'Мебель: ');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_menu` varchar(255) NOT NULL,
  `text_menu` text NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `text_menu`) VALUES
(1, 'Главная', '<div class="mainbar">\n        <div class="article">\n          <h2><span>Почему</span> у нас</h2>\n          <div class="clr"></div>\n          <img src="images/img_1.jpg" width="613" height="193" alt="image" />\n          <div class="clr"></div>\n          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>\n          <p>Maecenas dignissim mauris in arcu congue tincidunt. Vestibulum elit  nunc, accumsan vitae faucibus vel, scelerisque a quam. Aenean at metus id elit bibendum faucibus. Curabitur ultrices ante nec neque consectetur a aliquet libero lobortis. Ut nibh sem, pellentesque in dictum eu, convallis blandit erat. Cras vehicula tellus nec purus sagittis id scelerisque risus congue. Quisque sed semper massa. Donec id lacus mauris, vitae pretium risus. Fusce sed tempor erat. </p>\n         \n        </div>\n       \n      </div>\n'),
(2, 'Услуги', '<div class="mainbar">\n        <div class="article">\n          <h2><span>Перечень наших услуг</span></h2><div class="clr"></div>\n          <p><strong>Дизайн</strong> dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p>\n\n<p><strong>Расчет</strong> sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p>\n        </div>\n      </div>'),
(3, 'Галерея', 'Галерея наших работ'),
(4, 'Статьи', '<div class="mainbar">\n        <div class="article">\n          <h2><span>Статья о мебели</span></h2><div class="clr"></div>\n          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p>\n        </div>\n      </div>'),
(5, 'Контакты', '<div class="mainbar">\r\n        <div class="article">\r\n          <h2><span>Контакты</span></h2><div class="clr"></div>\r\n          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie.</p>\r\n        </div>\r\n        <div class="article">\r\n          <p class="contact_info"> <span>Адрес:</span> 1458 Москва, Россия<br />\r\n          <span>Телефон:</span> +123-1234-5678<br />\r\n          <span>FAX:</span> +458-4578<br />\r\n          <span>Другие:</span> +301 - 0125 - 01258<br />\r\n          <span>E-mail:</span> <a href="#">mail@mail.ru</a> \r\n<img src="images/img_3.jpg" width="613" height="193" alt="image" /></p>\r\n         \r\n        </div>\r\n      </div>\r\n     '),
(6, 'О нас', 'Какая то инфрмация'),
(7, 'Доставка', 'Информация о цене и географии доставки мебели');

-- --------------------------------------------------------

--
-- Структура таблицы `statti`
--

CREATE TABLE IF NOT EXISTS `statti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `text` text NOT NULL,
  `data` date NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `cat` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
