-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-08-30 10:10:36
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- 表的结构 `car_active`
--

CREATE TABLE IF NOT EXISTS `car_active` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '活动ID',
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL COMMENT '活动内容',
  `member_price` double NOT NULL COMMENT '会员价',
  `non_member_price` double NOT NULL COMMENT '非会员价',
  `time` varchar(30) NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='活动表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `car_active`
--

INSERT INTO `car_active` (`id`, `title`, `content`, `member_price`, `non_member_price`, `time`, `status`) VALUES
(4, 'asd事实上dddddd', '啊双击打开\r\nasdjlwww\r\n阿斯达 阿斯达\r\nasdasd\r\n阿斯达阿斯达\r\n\r\n阿斯达阿斯达', 12323232323, 23.23, '2019-08-15 06:25', 1),
(5, '打豆豆', '123123123\r\nasdasdasd\r\n\r\nasdasd \r\n阿斯达\r\n阿斯达\r\n阿斯达 的撒打算阿斯达\r\n阿斯达阿斯达\r\n阿斯达阿斯达\r\n阿斯达阿斯达 得得阿斯达暗示暗示d阿斯达暗示\r\n阿斯达阿斯达阿斯达', 23, 32, '2014-08-01 03:15', 1);

-- --------------------------------------------------------

--
-- 表的结构 `car_booking`
--

CREATE TABLE IF NOT EXISTS `car_booking` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '订单编号',
  `member_id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `book_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='预约订单列表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_boss`
--

CREATE TABLE IF NOT EXISTS `car_boss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `car_boss`
--

INSERT INTO `car_boss` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `car_dl`
--

CREATE TABLE IF NOT EXISTS `car_dl` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '驾驶证ID',
  `name` varchar(20) NOT NULL COMMENT '持有人姓名',
  `id_num` int(20) NOT NULL COMMENT '持有人身份证',
  `valid_date_start` date NOT NULL COMMENT '有效期起始日期',
  `valid_date_end` date NOT NULL COMMENT '有效期结束日期',
  `dl_level` int(2) NOT NULL COMMENT '驾照类型',
  `gender` int(1) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '生日',
  `address` varchar(200) NOT NULL COMMENT '住址',
  `nationality` varchar(20) NOT NULL COMMENT '国籍',
  `firsttime` date NOT NULL COMMENT '初次领证日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='驾驶证信息' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `car_dl`
--

INSERT INTO `car_dl` (`id`, `name`, `id_num`, `valid_date_start`, `valid_date_end`, `dl_level`, `gender`, `birthday`, `address`, `nationality`, `firsttime`) VALUES
(5, 'asdasd', 2147483647, '2014-05-29', '2014-06-19', 7, 1, '2014-06-17', '123', '123123', '2014-05-30'),
(6, '123123', 2147483647, '2014-07-03', '2014-07-07', 5, 1, '2014-07-16', '12312312312313', '123123', '1980-03-07'),
(7, '11111', 11111, '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30'),
(8, '2014-07-30', 2014, '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30'),
(9, 'id_num', 0, '2014-12-31', '2014-12-31', 6, 1, '2014-12-31', '2014-12-31', '中国', '2014-12-31'),
(10, '2014-12-31', 2147483647, '2014-12-31', '2014-12-31', 7, 1, '2014-08-02', '2014-12-31', '中国', '2014-12-31'),
(11, '123123123123321', 2147483647, '2014-08-13', '2014-08-04', 11, 1, '2014-08-08', '12312312312313123123123', '中国', '2014-08-08'),
(12, '321123321', 2147483647, '2014-08-07', '2014-08-07', 7, 1, '2014-08-07', '2014-08-07', '中国', '2014-08-07'),
(13, '123123123123', 2147483647, '2014-07-31', '2014-07-31', 9, 1, '2014-07-31', '2014-07-31', '中国', '2014-07-31');

-- --------------------------------------------------------

--
-- 表的结构 `car_dl_level`
--

CREATE TABLE IF NOT EXISTS `car_dl_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '驾照类型ID',
  `name` varchar(20) NOT NULL COMMENT '驾照类型',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='驾照类型' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `car_dl_level`
--

INSERT INTO `car_dl_level` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'B1'),
(5, 'B2'),
(6, 'C1'),
(7, 'C2'),
(8, 'C3'),
(9, 'C4'),
(10, 'C5'),
(11, 'D'),
(12, 'E'),
(13, 'F'),
(14, 'M'),
(15, 'N'),
(16, 'P');

-- --------------------------------------------------------

--
-- 表的结构 `car_employee`
--

CREATE TABLE IF NOT EXISTS `car_employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '员工id',
  `ename` varchar(200) NOT NULL COMMENT '员工姓名',
  `store_id` int(20) DEFAULT NULL COMMENT '门店ID',
  `phone` int(11) NOT NULL COMMENT '联系电话',
  `time` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`ename`),
  KEY `id` (`id`),
  KEY `store_id` (`store_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='员工信息' AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `car_employee`
--

INSERT INTO `car_employee` (`id`, `ename`, `store_id`, `phone`, `time`) VALUES
(24, '阿四大四大', 0, 123123123, '2014-08-30 06:07:52');

-- --------------------------------------------------------

--
-- 表的结构 `car_member`
--

CREATE TABLE IF NOT EXISTS `car_member` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `member_num` varchar(20) NOT NULL COMMENT '会员卡号',
  `password` varchar(15) NOT NULL COMMENT '密码',
  `dl_id` int(11) NOT NULL COMMENT '驾驶证号',
  `origin_id` int(255) NOT NULL COMMENT '用户渠道',
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `dl_id` (`dl_id`),
  KEY `origin_id` (`origin_id`),
  KEY `origin_id_2` (`origin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员管理' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `car_member`
--

INSERT INTO `car_member` (`id`, `member_num`, `password`, `dl_id`, `origin_id`, `status`) VALUES
(2, 'asdasd', 'asdasd', 7, 1, 1),
(10, '3213', '33312', 5, 1, 1),
(11, '32133213123', '123123123', 6, 1, 1),
(12, '2014-12-31', '3052dd6ae88b46a', 10, 1, 0),
(15, '123123123123', '4297f44b1395523', 13, 7, 0);

-- --------------------------------------------------------

--
-- 表的结构 `car_member_origin`
--

CREATE TABLE IF NOT EXISTS `car_member_origin` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '渠道ID',
  `name` varchar(30) NOT NULL COMMENT '渠道名称',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  KEY `id_4` (`id`),
  KEY `id_5` (`id`),
  KEY `id_6` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='渠道分类' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `car_member_origin`
--

INSERT INTO `car_member_origin` (`id`, `name`) VALUES
(1, '第一家'),
(2, '第二家'),
(4, 'ddwdasdasd'),
(6, 'asdasdasd'),
(7, 'asdasd'),
(8, 'asdasdddd'),
(9, 'ddwqdqwd'),
(10, '12');

-- --------------------------------------------------------

--
-- 表的结构 `car_notice`
--

CREATE TABLE IF NOT EXISTS `car_notice` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '公告ID',
  `content` varchar(255) NOT NULL COMMENT '公告内容',
  `title` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL,
  `published` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='公告表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `car_notice`
--

INSERT INTO `car_notice` (`id`, `content`, `title`, `time`, `published`) VALUES
(1, 'asdasda', '大惇亲王的 ', '', 0),
(3, 'asdasdasd', 'asd', '2014-08-27 14:46:29', 0),
(4, 'asdasd', 'asdddd', '2014-08-27 14:48:13', 0);

-- --------------------------------------------------------

--
-- 表的结构 `car_reservation`
--

CREATE TABLE IF NOT EXISTS `car_reservation` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '预约ID',
  `user_id` int(10) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='预约表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_store`
--

CREATE TABLE IF NOT EXISTS `car_store` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '门店ID',
  `address` text NOT NULL COMMENT '门店地址',
  `name` varchar(255) NOT NULL COMMENT '门店名称',
  `manager` int(244) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `manager` (`manager`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `car_store`
--

INSERT INTO `car_store` (`id`, `address`, `name`, `manager`) VALUES
(22, '阿四大四大阿斯达', '阿四大四大', 24),
(23, 'dddddddddddddd', '阿四大四大打豆豆', 24);

-- --------------------------------------------------------

--
-- 表的结构 `car_sub_sort`
--

CREATE TABLE IF NOT EXISTS `car_sub_sort` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `sort_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `sort_id` (`sort_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `car_sub_sort`
--

INSERT INTO `car_sub_sort` (`id`, `sort_id`, `name`) VALUES
(1, 4, 'dqwdqwdqwdqwd'),
(2, 6, 'dqwdqwdwd'),
(3, 1, 'dwqdqwdqwd'),
(6, 1, '阿四大四大'),
(7, 6, 'dqwdqwdwds'),
(8, 4, 'dqwdqwdwds'),
(9, 1, 'dqwdqwdwds');

-- --------------------------------------------------------

--
-- 表的结构 `car_s_sort`
--

CREATE TABLE IF NOT EXISTS `car_s_sort` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `car_s_sort`
--

INSERT INTO `car_s_sort` (`id`, `sname`) VALUES
(1, '阿四大四大'),
(4, '带我去的我'),
(5, '电器网晴雯'),
(6, 'dqwdsad '),
(8, '我我大地飞歌');

--
-- 限制导出的表
--

--
-- 限制表 `car_member`
--
ALTER TABLE `car_member`
  ADD CONSTRAINT `渠道ID` FOREIGN KEY (`origin_id`) REFERENCES `car_member_origin` (`id`),
  ADD CONSTRAINT `驾照类型` FOREIGN KEY (`dl_id`) REFERENCES `car_dl_level` (`id`);

--
-- 限制表 `car_store`
--
ALTER TABLE `car_store`
  ADD CONSTRAINT `负责人` FOREIGN KEY (`manager`) REFERENCES `car_employee` (`id`);

--
-- 限制表 `car_sub_sort`
--
ALTER TABLE `car_sub_sort`
  ADD CONSTRAINT `服务分类` FOREIGN KEY (`sort_id`) REFERENCES `car_s_sort` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
