-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2017 at 10:49 
-- Server version: 5.6.29
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Notebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `notebook`
--

CREATE TABLE IF NOT EXISTS `notebook` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notebook`
--

INSERT INTO `notebook` (`id`, `title`, `content`, `nickname`, `date`) VALUES
(1, 'Перший запис', 'Привіт світ!', 'Misha', '2017-01-12'),
(2, 'Другий запис', 'Привіт ше раз', 'Misha', '2017-01-12'),
(5, 'Четвертий запис', 'Я також тут', 'Serg', '2017-01-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notebook`
--
ALTER TABLE `notebook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notebook`
--
ALTER TABLE `notebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
