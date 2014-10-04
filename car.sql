-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-10-04 09:15:01
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
(4, 'asd事实上dddddd', '啊双击打开\r\nasdjlwww\r\n阿斯达 阿斯达\r\nasdasd\r\n阿斯达阿斯达\r\nddd\r\n阿斯达阿斯达', 123234444444, 23.23, '2019-08-01 02:30', 1),
(5, '打豆豆', '123123123\r\nasdasdasd\r\n\r\nasdasd \r\n阿斯达\r\n阿斯达\r\n阿斯达 的撒打算阿斯达\r\n阿斯达阿斯达\r\n阿斯达阿斯达\r\n阿斯达阿斯达 得得阿斯达暗示暗示d阿斯达暗示\r\n阿斯达阿斯达阿斯达', 23, 32, '2014-08-01 03:15', 1);

-- --------------------------------------------------------

--
-- 表的结构 `car_booking`
--

CREATE TABLE IF NOT EXISTS `car_booking` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '订单编号',
  `member_id` int(255) NOT NULL,
  `store_id` int(10) NOT NULL,
  `service_s_id` int(255) NOT NULL,
  `service_sub_id` int(20) NOT NULL,
  `time_id` int(10) NOT NULL,
  `employee_id` int(100) DEFAULT NULL,
  `book_date` varchar(20) NOT NULL,
  `evaluation` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `done` int(11) NOT NULL DEFAULT '0',
  `summary` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `service_sub_id` (`service_sub_id`),
  KEY `service_s_id` (`service_s_id`),
  KEY `store_id` (`store_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='预约订单列表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `car_booking`
--

INSERT INTO `car_booking` (`id`, `member_id`, `store_id`, `service_s_id`, `service_sub_id`, `time_id`, `employee_id`, `book_date`, `evaluation`, `status`, `done`, `summary`) VALUES
(2, 60, 22, 4, 8, 0, 41, '2014-10-12', NULL, 0, 0, ''),
(3, 16, 22, 1, 9, 0, 28, '2014-11-12', NULL, 0, 1, ''),
(4, 16, 22, 1, 9, 0, 24, '2014-9-12', NULL, 1, 1, '');

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
  `liesence` varchar(20) NOT NULL,
  `valid_date_start` varchar(100) NOT NULL COMMENT '有效期起始日期',
  `valid_date_end` varchar(100) NOT NULL COMMENT '有效期结束日期',
  `dl_level` int(2) NOT NULL COMMENT '驾照类型',
  `gender` int(1) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '生日',
  `address` varchar(200) NOT NULL COMMENT '住址',
  `nationality` varchar(20) NOT NULL COMMENT '国籍',
  `firsttime` date NOT NULL COMMENT '初次领证日期',
  `engineNumber` varchar(30) NOT NULL,
  `frameNumber` varchar(30) NOT NULL,
  `liesenceFileNumber` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='驾驶证信息' AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `car_dl`
--

INSERT INTO `car_dl` (`id`, `name`, `id_num`, `liesence`, `valid_date_start`, `valid_date_end`, `dl_level`, `gender`, `birthday`, `address`, `nationality`, `firsttime`, `engineNumber`, `frameNumber`, `liesenceFileNumber`) VALUES
(5, '11111dsasd2s', 2147483647, '湘Axxxxx', '2014-07-19', '2014-07-21', 5, 1, '2014-07-11', '2014-07-30eqwdwqdqwd', '中国', '2014-08-23', '', '', ''),
(6, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(7, '11111ddddd', 11111, '', '2014-07-03', '2014-07-30', 9, 0, '2014-07-12', '2014-07-30', '中国', '2014-07-10', '', '', ''),
(8, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(9, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(10, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(11, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(12, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(13, '11111', 11111, '', '2014-07-30', '2014-07-30', 1, 1, '2014-07-30', '2014-07-30', '中国', '2014-07-30', '', '', ''),
(14, '123123123', 123123123, '', '2014-07-29', '2014-08-10', 5, 0, '2014-08-07', '123123123', '中国', '2014-08-16', '', '', ''),
(18, '555', 555, '555', '2014-10-24', '2014-10-21', 1, 1, '2014-10-16', '555', '中国', '2014-10-23', '555', '555', '555'),
(19, '0.7594833604525775', 1, '321', '2014-09-09', '2014-09-09', 1, 1, '2014-09-09', '123', '2', '2014-09-09', '23', '23', '213'),
(20, '0.718632344622165', 1, '321', '2014-09-09', '2014-09-09', 1, 1, '2014-09-09', '123', '2', '2014-09-09', '23', '23', '213'),
(21, '0.051085235783830285', 1, '321', '2014-09-09', '2014-09-09', 1, 1, '2014-09-09', '123', '2', '2014-09-09', '23', '23', '213'),
(22, '0.680940413614735', 1, '321', '2014-09-09', '2014-09-09', 1, 1, '2014-09-09', '123', '2', '2014-09-09', '23', '23', '213'),
(23, '0.9319126142654568', 1, '321', '2014-09-09', '2014-09-09', 1, 1, '2014-09-09', '123', '2', '2014-09-09', '23', '23', '213'),
(24, '0.6002025473862886', 0, '321', '2014-09-09', '2014-09-09', 1, 1, '2014-09-09', '123', '2', '2014-09-09', '23', '23', '213'),
(37, '777', 777, '777', '2014-10-24', '', 1, 1, '1899-12-22', '777', '中国', '2014-10-23', '777', '777', '777'),
(38, '88888', 88888, '88888', '1899-12-07', '2014-10-23', 14, 1, '0000-00-00', '88888打豆豆', '中国', '2014-10-15', '88888', '88888', '88888');

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
  `id_num` int(20) NOT NULL,
  `eid` int(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `entryTime` varchar(20) NOT NULL,
  `entryWay` int(1) DEFAULT NULL,
  `entryWayTxt` varchar(40) DEFAULT NULL,
  `department` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `emergencyContactor` varchar(20) NOT NULL,
  `emergencyContactPhone` int(20) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `statusTxt` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`ename`),
  KEY `id` (`id`),
  KEY `store_id` (`store_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='员工信息' AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `car_employee`
--

INSERT INTO `car_employee` (`id`, `ename`, `store_id`, `phone`, `time`, `id_num`, `eid`, `birthday`, `address`, `entryTime`, `entryWay`, `entryWayTxt`, `department`, `position`, `emergencyContactor`, `emergencyContactPhone`, `status`, `statusTxt`) VALUES
(24, '阿四大四大', 22, 123123123, '2014-08-30 06:07:52', 0, 0, '', '', '', 0, '', '', '', '', 0, 0, ''),
(28, '123123', 23, 2147483647, '2014-08-30 10:57:06', 0, 0, '', '', '', 0, '', '', '', '', 0, 0, ''),
(29, 'dddddd', 22, 2147483647, '2014-10-04 08:50:15', 123123123, 3213123, '123213', '123123', '123123', 1, '', '2333', '11222', '4444', 4444, 0, 'statusTxt'),
(35, 'ddddddd', 22, 2147483647, '2014-10-04 08:50:55', 123123123, 3213123, '123213', '123123', '123123', 1, '', '2333', '11222', '4444', 4444, 0, 'statusTxt'),
(37, 'dddddd0.7283548514824361', 22, 2147483647, '2014-10-04 08:53:01', 123123123, 3213123, '123213', '123123', '123123', 1, '', '2333', '11222', '4444', 4444, 0, 'statusTxt'),
(38, 'dddddd0.21570258354768157', 22, 2147483647, '2014-10-04 08:53:04', 123123123, 3213123, '123213', '123123', '123123', 1, '', '2333', '11222', '4444', 4444, 0, 'statusTxt'),
(39, 'dasdasd', 22, 123123, '2014-10-04 08:53:40', 123123, 123123, '123123', '123123', '123123', 0, '123123', '123123123123', '123123', '123123', 123123, 0, '123123123123123123123123'),
(40, 'dddddd0.4319954407401383', 22, 2147483647, '2014-10-04 08:54:29', 123123123, 3213123, '123213', '123123', '123123', 1, 'asdasd', '2333', '11222', '4444', 4444, 0, 'statusTxt'),
(41, '哈哈哈啊哈哈', 22, 2147483647, '2014-10-04 08:55:12', 123123123, 3213123, '1899-03-22', '123123', '123123', 1, '', '2333wwwww', '11222eeee', '4444', 4444, 0, ''),
(42, 'dddddd0.1128636326175183', 22, 2147483647, '2014-10-04 08:55:36', 123123123, 3213123, '123213', '123123', '123123', 1, '', '2333', '11222', '4444', 4444, 0, 'statusTxt'),
(43, 'dddddd0.34397297934629023', 22, 2147483647, '2014-10-04 08:55:39', 123123123, 3213123, '123213', '123123', '123123', 1, '', '2333', '11222', '4444', 4444, 0, 'statusTxt');

-- --------------------------------------------------------

--
-- 表的结构 `car_member`
--

CREATE TABLE IF NOT EXISTS `car_member` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `member_num` varchar(20) NOT NULL COMMENT '会员卡号',
  `password` varchar(40) NOT NULL COMMENT '密码',
  `dl_id` int(11) NOT NULL COMMENT '驾驶证号',
  `origin_id` int(255) NOT NULL COMMENT '用户渠道',
  `status` int(1) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `insurer` varchar(50) NOT NULL,
  `insurancePeriod` varchar(30) NOT NULL,
  `memberValid` varchar(30) NOT NULL,
  `memberSort` int(30) NOT NULL,
  `employee_id` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `dl_id` (`dl_id`),
  KEY `origin_id` (`origin_id`),
  KEY `origin_id_2` (`origin_id`),
  KEY `employee_id` (`employee_id`),
  KEY `memberSort` (`memberSort`),
  KEY `employee_id_2` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员管理' AUTO_INCREMENT=61 ;

--
-- 转存表中的数据 `car_member`
--

INSERT INTO `car_member` (`id`, `member_num`, `password`, `dl_id`, `origin_id`, `status`, `phoneNumber`, `brand`, `insurer`, `insurancePeriod`, `memberValid`, `memberSort`, `employee_id`) VALUES
(2, '21312232132', 'd41d8cd98f00b20', 7, 1, 1, 0, '', '', '', '', 2, 24),
(10, '32132321323asdsad', '33312', 5, 4, 1, 0, '', '', '', '', 2, 24),
(11, '32133213123', '123123123', 6, 1, 1, 0, '', '', '', '', 2, 24),
(12, '2014-12-31', '3052dd6ae88b46a', 10, 1, 1, 0, '', '', '', '', 2, 24),
(15, '123123123123', '4297f44b1395523', 13, 7, 1, 0, '', '', '', '', 2, 24),
(16, '123123123', '4297f44b13955235245b2497399d7a93', 14, 8, 1, 0, '', '', '', '', 2, 24),
(56, '66666', '66666', 11, 2, 1, 66666, '66666', '66666', '66666', '66666', 2, 24),
(59, '777', 'f1c1592588411002af340cbaedd6fc33', 37, 1, 1, 777, '777', '777', '2014-10-13', '2014-10-08', 2, 24),
(60, '88888', '1c395a8dce135849bd73c6dba3b54809', 38, 1, 1, 88888, '88888', '88888', '2014-10-14', '1899-12-23', 2, 0);

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
-- 表的结构 `car_member_sort`
--

CREATE TABLE IF NOT EXISTS `car_member_sort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_txt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `car_member_sort`
--

INSERT INTO `car_member_sort` (`id`, `sort_txt`) VALUES
(2, 'asdasdasd'),
(3, '阿四大四大盛大');

-- --------------------------------------------------------

--
-- 表的结构 `car_notice`
--

CREATE TABLE IF NOT EXISTS `car_notice` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '公告ID',
  `content` varchar(255) NOT NULL COMMENT '公告内容',
  `title` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='公告表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `car_notice`
--

INSERT INTO `car_notice` (`id`, `content`, `title`, `time`, `status`) VALUES
(1, 'asdasdaddddasdasd\r\n\r\nasdasd ', '大惇亲王的 wwwww', '', 1),
(3, 'asdasdasd', 'asd', '2014-08-27 14:46:29', 1),
(4, 'asdasd', 'asdddd', '2014-08-27 14:48:13', 1);

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
(23, '6654656', '阿四大四大打豆豆', 24);

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
(6, 'dqwdsad'),
(8, '我我大地飞歌');

--
-- 限制导出的表
--

--
-- 限制表 `car_booking`
--
ALTER TABLE `car_booking`
  ADD CONSTRAINT `门店id` FOREIGN KEY (`store_id`) REFERENCES `car_store` (`id`),
  ADD CONSTRAINT `雇员id` FOREIGN KEY (`employee_id`) REFERENCES `car_employee` (`id`),
  ADD CONSTRAINT `大类id` FOREIGN KEY (`service_s_id`) REFERENCES `car_s_sort` (`id`),
  ADD CONSTRAINT `子类id` FOREIGN KEY (`service_sub_id`) REFERENCES `car_sub_sort` (`id`),
  ADD CONSTRAINT `会员id` FOREIGN KEY (`member_id`) REFERENCES `car_member` (`id`);

--
-- 限制表 `car_member`
--
ALTER TABLE `car_member`
  ADD CONSTRAINT `驾照` FOREIGN KEY (`dl_id`) REFERENCES `car_dl` (`id`),
  ADD CONSTRAINT `用户类型` FOREIGN KEY (`memberSort`) REFERENCES `car_member_sort` (`id`),
  ADD CONSTRAINT `渠道ID` FOREIGN KEY (`origin_id`) REFERENCES `car_member_origin` (`id`);

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
