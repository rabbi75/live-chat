-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 04:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_box`
--

CREATE TABLE IF NOT EXISTS `chat_box` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat_box`
--

INSERT INTO `chat_box` (`id`, `name`, `body`, `time`) VALUES
(1, 'Rabbi', 'I am going collage', '09:12:00'),
(2, 'Arif', 'I am a student', '09:55:00'),
(3, 'zakir', 'I am walking on the road', '04:00:00'),
(4, 'Parul', 'I am a teacher', '06:00:00'),
(5, 'Naeem', 'I am love also facebook', '05:22:00'),
(6, 'fjsjfs', 'sdfsf', '11:49:16'),
(7, 'Rabbi', 'I am excited', '11:49:42'),
(8, 'Naeem', 'Why u excited', '11:50:20'),
(9, 'Rabbi', 'Because i done it', '11:51:09'),
(10, 'Naeem', 'weldone', '11:51:40'),
(11, 'Rabbi', 'Thanx', '11:51:55'),
(12, 'Rabbi', 'hi  every one', '09:41:32'),
(13, 'zakir', 'whats upp', '09:42:34'),
(14, 'zakir', 'whats up', '09:42:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_box`
--
ALTER TABLE `chat_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_box`
--
ALTER TABLE `chat_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
