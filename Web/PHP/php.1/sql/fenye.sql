-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 06 月 21 日 08:51
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

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
(11, '曲奇饼', 100, 5, 'www.quqibing.com'),
(14, '辣椒粉', 3, 10, 'www.lajiaofen.com'),
(15, '鸡精', 3, 20, 'www.jijing.com'),
(16, '苏打水', 24, 5, 'www.sudashui'),
(17, '黑奶酪', 24, 5, 'www.heinainao.com'),
(18, '绿豆糕', 20, 50, 'www.lvdougao.com'),
(19, '浓缩咖啡', 50, 20, 'www.nongsuokafei.com'),
(20, '柠檬汁', 23, 70, 'www.lingmengzhi.com'),
(21, '海哲皮', 3, 2, 'www.haizhipi.com'),
(22, '意大利奶酪', 50, 2, 'www.yidilinainao.com'),
(23, '牛肉', 50, 50, 'www.niurou.com'),
(24, '猪肉干', 50, 20, 'www.zhurougan.com'),
(25, '小米', 3, 50, 'www.xiaomi.com'),
(26, '大米', 50, 20, 'www.dami.com'),
(27, '山渣片', 24, 50, 'www.shanzhapian.com'),
(28, '黄豆', 10, 50, 'www.huangdou.com'),
(29, '绿豆', 12, 35, 'www.lvdou.com'),
(30, '三合酥', 5, 50, 'www.sanhehu.com'),
(31, '一人一口酥', 10, 20, 'www.yirenyikousul.com'),
(32, '花生', 5, 20, 'www.huasheng.com'),
(33, '巧克力', 20, 50, 'www.qiaokeli.com'),
(34, '汽水', 20, 50, 'www.qishui.com'),
(35, '棉花糖', 2, 500, 'www.miaohuatang.com');
