# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# Хост: localhost
# Время создания: Авг 09 2009 г., 20:22
# Версия сервера: 3.23.53
# Версия PHP: 4.3.6
# 
# БД : `mysql`
# 

# --------------------------------------------------------

#
# Структура таблицы `messages`
#

CREATE TABLE `messages` (
  `id` int(9) NOT NULL auto_increment,
  `author` varchar(15) NOT NULL default '',
  `poluchatel` varchar(15) NOT NULL default '',
  `date` date NOT NULL default '0000-00-00',
  `text` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=8 ;

#
# Дамп данных таблицы `messages`
#


# --------------------------------------------------------

#
# Структура таблицы `oshibka`
#

CREATE TABLE `oshibka` (
  `ip` varchar(12) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `col` int(1) NOT NULL default '0'
) TYPE=MyISAM;

#
# Дамп данных таблицы `oshibka`
#


# --------------------------------------------------------

#
# Структура таблицы `users`
#

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(15) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  `avatar` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `activation` int(1) NOT NULL default '0',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=41 ;

#
# Дамп данных таблицы `users`
#

