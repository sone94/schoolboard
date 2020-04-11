-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2020 at 02:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolborad`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`) VALUES
(1, 5),
(2, 6),
(3, 7),
(4, 8),
(5, 9),
(6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `school_board`
--

DROP TABLE IF EXISTS `school_board`;
CREATE TABLE IF NOT EXISTS `school_board` (
  `id` int(255) NOT NULL,
  `board_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `school_board`
--

INSERT INTO `school_board` (`id`, `board_name`) VALUES
(1, 'CSM'),
(2, 'CSMB');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `borad_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `last_name`, `borad_id`) VALUES
(1, 'Petar', 'Petrovic', 1),
(2, 'Mitar', 'Mitrovic', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

DROP TABLE IF EXISTS `student_grades`;
CREATE TABLE IF NOT EXISTS `student_grades` (
  `student_id` int(255) NOT NULL,
  `grade_id` int(255) NOT NULL,
  PRIMARY KEY (`student_id`,`grade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_grades`
--

INSERT INTO `student_grades` (`student_id`, `grade_id`) VALUES
(1, 4),
(1, 5),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(1, 'pera', '3a772c82dc28af481ff4099526353598f8ada4d243ddd0ae182a3ac631b7a6432afe0d215108e28a4fcd2ad61a70c8d45e97d87ba36665f8c55c18dc524105ea', 'pera@pera.com'),
(2, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', ''),
(3, 'mika', 'a7fce35f48a350ae1125a3ca4e0af6e37316a9ed4555b146b9f663d52c33eda09a49aa813c9d36c1a617c2453156bb273c93eb68ece01ca7c38e5f247794104c', 'mika@mika');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
