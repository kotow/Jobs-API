-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
`ID` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `position` text COLLATE utf8_bin NOT NULL,
  `created_on` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Схема на данните от таблица `candidates`
--

INSERT INTO `candidates` (`ID`, `name`, `position`, `created_on`) VALUES
(1, 'test user', 'simple position', '18:43 13/11/2014'),
(2, 'test user', 'simple position', '18:43 13/11/2014');

-- --------------------------------------------------------

--
-- Структура на таблица `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
`ID` int(11) NOT NULL,
  `position` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `created_on` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `jobs`
--

INSERT INTO `jobs` (`ID`, `position`, `description`, `created_on`) VALUES
(1, 'sample position 1', 'sample description 2', '18:20 13/11/2014'),
(2, 'simple position 2', 'simple description 2', '18:21 13/11/2014'),
(3, 'sample position 3', 'sample description 3', '18:24 13/11/2014');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
