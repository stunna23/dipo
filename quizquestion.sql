-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 03:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `quizquestion`
--

CREATE TABLE IF NOT EXISTS `quizquestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(255) NOT NULL,
  `answers` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `quizquestion`
--

INSERT INTO `quizquestion` (`id`, `questions`, `answers`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'this is a question', 'this is an swers', 'grgrg', 'rgrgr', 'grg', 'rg'),
(10, 'which of the following should not be found in a sitting room', 'car', 'car', 'television', 'chair', 'table'),
(11, 'what is WHO', 'world health organization', 'world homeless people organization', 'world honor ornaments', 'wet horrible opposite', 'world harm oath');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
