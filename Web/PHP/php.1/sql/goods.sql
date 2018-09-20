-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 06 月 21 日 08:35
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `data`
--

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `price` tinyint(4) NOT NULL DEFAULT '0',
  `amount` int(100) NOT NULL,
  `web` varchar(50) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`code`, `name`, `price`, `amount`, `web`) VALUES
(1, '面包', 5, 10, 'www.mianbao.com'),
(2, '三明治', 5, 10, 'www.sanmingzhi.com'),
(3, '汉堡', 7, 20, 'www.hanbao.com'),
(4, '牛奶', 1, 50, 'www.niunai.com'),
(5, '旺仔牛奶糖', 1, 50, 'www.wzvnt.com'),
(6, '方便面', 4, 25, 'www.fangbianmian.com'),
(7, '矿泉水', 1, 50, 'www.kuangquanshu.com'),
(8, '可乐', 3, 15, 'www.kele.com'),
(9, '雪碧', 4, 13, 'www.xuebi.com'),
(10, '饼干', 3, 20, 'www.binggan.com'),
(11, '曲奇饼', 100, 5, 'www.quqibing.com');
