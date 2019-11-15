-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-15 16:03:14
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `invo`
--

CREATE TABLE `invo` (
  `id` int(15) UNSIGNED NOT NULL COMMENT '序列',
  `year` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '月份',
  `num` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票號碼',
  `money` int(15) NOT NULL COMMENT '金額'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invo`
--

INSERT INTO `invo` (`id`, `year`, `mon`, `num`, `money`) VALUES
(8, '2019', '1', '11111111', 1),
(16, '2019', '2', '22222222', 256),
(17, '2019', '3', '12345678', 164),
(18, '2019', '4', '87654321', 169),
(19, '2019', '5', '10101010', 959),
(20, '2019', '6', '33333333', 784),
(21, '2019', '1', '44444444', 897),
(22, '2019', '2', '55555555', 635),
(23, '2019', '3', '02345678', 87964),
(24, '2019', '4', '00345678', 89),
(25, '2019', '5', '00045678', 87),
(26, '2019', '6', '00005678', 87),
(27, '219', '1', '00000678', 87),
(28, '2019', '2', '07654321', 94),
(29, '2019', '3', '00654321', 1896),
(30, '2019', '4', '00054321', 16),
(31, '2019', '5', '00004321', 28964),
(32, '2019', '6', '00000321', 1464),
(33, '2019', '1', '00101010', 89),
(34, '2019', '2', '01101010', 41),
(35, '2019', '3', '01001010', 126),
(36, '2019', '4', '01011010', 1296),
(37, '2019', '5', '01010010', 19);

-- --------------------------------------------------------

--
-- 資料表結構 `lucky`
--

CREATE TABLE `lucky` (
  `id` int(5) UNSIGNED NOT NULL,
  `year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num3` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num4` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num5` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num6` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num7` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num8` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `lucky`
--

INSERT INTO `lucky` (`id`, `year`, `month`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8`) VALUES
(21, '2019', '1', '11111111', '22222222', '12345678', '87654321', '10101010', '333', '444', '555'),
(23, '2019', '2', '11111111', '22222222', '12345678', '87654321', '10101010', '333', '444', '555'),
(24, '2019', '3', '11111111', '22222222', '12345678', '87654321', '10101010', '333', '444', '555'),
(25, '2019', '4', '11111111', '22222222', '12345678', '87654321', '10101010', '333', '444', '555'),
(26, '2019', '5', '11111111', '22222222', '12345678', '87654321', '10101010', '333', '444', '555'),
(27, '2019', '6', '11111111', '22222222', '12345678', '87654321', '10101010', '333', '444', '555');

-- --------------------------------------------------------

--
-- 資料表結構 `month`
--

CREATE TABLE `month` (
  `id` int(5) UNSIGNED NOT NULL,
  `mon` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `month`
--

INSERT INTO `month` (`id`, `mon`) VALUES
(1, '1-2'),
(2, '3-4'),
(3, '5-6'),
(4, '7-8'),
(5, '9-10'),
(6, '11-12');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `invo`
--
ALTER TABLE `invo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `lucky`
--
ALTER TABLE `lucky`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invo`
--
ALTER TABLE `invo`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=38;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lucky`
--
ALTER TABLE `lucky`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `month`
--
ALTER TABLE `month`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
