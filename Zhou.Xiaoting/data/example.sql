-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2023-04-23 11:24:15
-- 服务器版本： 5.7.41-cll-lve
-- PHP 版本： 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： ` IXD_608_OL1_XiaotingZhou`
--

-- --------------------------------------------------------

--
-- 表的结构 `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `example`
--

INSERT INTO `example` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'shose', 'used@buy.com', 'http://xiaotingzhou.com/aau/wnm608/Zhou.Xiaoting/U\'sed.php', '20.00', 'shose', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'used shose1', 'Used shose1.jpg', 'Used_1.jpg,Used_2.jpg,Used_3.jpg,');

--
-- 转储表的索引
--

--
-- 表的索引 `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
