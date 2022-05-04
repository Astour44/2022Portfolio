-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-04 20:47:48
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

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
(1, '                      45654\r\n7898\r\n754654\r\n654654\r\n\r\n              ', '                                                                        2012-2014年<br>\r\n在鶯歌高職-廣告設計系<br>\r\n學習到設計系的相關專業<br>\r\n2015-2018<br>\r\n在崑山科技大學-公共關係廣告系<br>\r\n學習到公關計畫的知識與實作<br>\r\n2021- 2022<br>\r\n在泰山職訓半年<br>\r\n學習到程式相關的基礎與應用                                                        \r\n                                                                                                    ', 'S__52674566.jpg'),
(9, '', '', ''),
(10, '', '', '');

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
  `fil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `text`, `img`, `fil`) VALUES
(105, '設計旅遊電子報', '006.jpg', 34933961),
(106, 'PHP萬年曆', '005.jpg', 545751),
(109, 'PHP投票系統', 'newvote.png', 6427041),
(110, 'API串聯', 'API.png', 14430731);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
