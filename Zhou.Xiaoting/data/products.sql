-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2023-04-16 10:38:47
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
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thimbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thimbnail`, `images`) VALUES
(1, 'shose', '20.00', 'shose', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'Size 7.5\' like new', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(2, 'daily recommends', '45.00', 'recommends', '2023-04-17 00:00:00', '2023-04-16 00:00:00', 'Many people have seen this product', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(3, 'topwear1', '60.00', 'topwear', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'Brand new, XL oversize', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(4, 'topwear2\r\n', '110.00', 'topwear2', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'No damage? XXL', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(5, 'pants', '65.00', 'pants', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'like new 40 - 41\"', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(6, 'pants1', '32.00', 'pants1', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'faded 36 - 37\" ', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(7, 'shose', '240.00', 'shose', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'Gray Adidas YEEZY BOOST 350 V2 9.5\'', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(8, 'shose1', '240.00', 'shose1', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'Adidas YEEZY BOOST 350 V2 BLUE TINT 9.5‘', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(9, 'shose2', '110.00', 'shose2', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'Nike 8.5\'', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(10, 'necklace', '60.00', 'necklace', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'necklace', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(11, 'earrings', '45.00', 'earrings', '2023-04-17 00:00:00', '0000-00-00 00:00:00', 'earrings', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product'),
(12, 'ring1', '20.00', 'ring1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ring1', 'https://via.placeholder.com/400x400?text=product', 'https://via.placeholder.com/400x400?text=product');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
