-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2015 at 03:27 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sayuri`
--
CREATE DATABASE IF NOT EXISTS `sayuri` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sayuri`;

-- --------------------------------------------------------

--
-- Table structure for table `sayuri_subscription`
--

CREATE TABLE `sayuri_subscription` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayuri_subscription`
--

INSERT INTO `sayuri_subscription` (`id`, `email`, `date_time`, `active`) VALUES
(1, 'saman@vcv.com', '2015-01-17 17:41:25', 1),
(2, 'asdasd@vcvf.com', '2015-01-17 17:52:20', 1),
(3, 'aiasd@vcvf.com', '2015-01-17 17:53:13', 1),
(4, 'asama@fg.com', '2015-01-17 17:57:14', 1),
(5, 'sasa@sdfd.com', '2015-01-17 18:00:23', 1),
(8, 'sasa@sdfd.coma', '2015-01-17 18:02:14', 1),
(10, 'jnjn@dfdfd.com', '2015-01-17 18:03:11', 1),
(17, 'then@vvcv.om', '2015-01-17 18:07:35', 1),
(18, 'janaka@wsx.com', '2015-01-17 18:41:02', 1),
(23, 'saman@vcve.com', '2015-01-17 18:44:53', 1),
(24, 'jjana@fdfdf.com', '2015-01-17 18:57:36', 1),
(25, 'sdfsdf@sdfsdf.cd', '2015-01-17 18:57:48', 1),
(26, 'jnjn@dfdfd.comhh', '2015-01-17 19:03:54', 1),
(27, 'www22@sdffsd.com', '2015-01-17 19:05:18', 1),
(28, '', '2015-01-17 19:42:23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sayuri_subscription`
--
ALTER TABLE `sayuri_subscription`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sayuri_subscription`
--
ALTER TABLE `sayuri_subscription`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
