-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 �?12 �?18 �?15:24
-- 服务器版本: 5.5.40
-- PHP 版本: 5.5.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `graduate`
--

-- --------------------------------------------------------

--
-- 表的结构 `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `send_name` varchar(50) NOT NULL COMMENT '发布人',
  `brand` varchar(50) NOT NULL COMMENT '品牌',
  `carname` varchar(50) NOT NULL COMMENT '车系',
  `model` varchar(50) DEFAULT NULL COMMENT '车型',
  `price` float NOT NULL COMMENT '预售价',
  `color` varchar(50) DEFAULT NULL COMMENT '颜色',
  `gas` double DEFAULT NULL COMMENT '排量',
  `transmission` varchar(50) DEFAULT NULL COMMENT '变速箱',
  `year` int(10) DEFAULT NULL COMMENT '上牌年份',
  `month` int(10) DEFAULT NULL COMMENT '上牌月份',
  `kilometre` varchar(100) DEFAULT NULL COMMENT '行驶里程',
  `country` varchar(50) DEFAULT NULL COMMENT '国产进口',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `exatime` date DEFAULT NULL COMMENT '上次验车时间',
  `securedate` date DEFAULT NULL COMMENT '交强险截止日期',
  `tax` date DEFAULT NULL COMMENT '车船使用税有效期',
  `productiontime` date DEFAULT NULL COMMENT '车辆出厂日期',
  `details` varchar(100) DEFAULT NULL COMMENT '车辆补充描述',
  `username` varchar(50) NOT NULL COMMENT '车主姓名',
  `tel` int(11) NOT NULL COMMENT '手机号',
  `send_time` int(11) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='二手车' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
