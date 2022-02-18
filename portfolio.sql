-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-18 01:41:54
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `portfolio`
--

-- --------------------------------------------------------

--
-- 資料表結構 `introduce`
--

CREATE TABLE `introduce` (
  `id` int(10) UNSIGNED NOT NULL,
  `resume` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `introduce`
--

INSERT INTO `introduce` (`id`, `resume`, `text`, `img`) VALUES
(1, 'aaaaaaaaaa', '你好我是賴柏堯<br />\r\n今年25歲<br />\r\n目前正在職訓當中<br />\r\n3/18乙級術科考試<br />\r\n3/21從職訓畢業  吧', '002.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `acc`, `pw`) VALUES
(3, 'astour', 'astour44@gmail.com', 'Astour', 'astour');

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `sh` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `text`, `img`, `sh`) VALUES
(1, 'dasdada', 'a', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
