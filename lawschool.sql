-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2015 at 10:00 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lawschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Username`, `Password`) VALUES
(1, 'admin1', 'admin'),
(2, 'admin2', 'mysql456'),
(3, 'admin3', 'mario789');

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE IF NOT EXISTS `pins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pin` varchar(25) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `pin` varchar(225) NOT NULL,
  `date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` int(1) NOT NULL DEFAULT '0',
  `id_card_passport` longtext NOT NULL,
  `id_card_passport_type` varchar(225) NOT NULL,
  `yearbook_passport` longtext NOT NULL,
  `yearbook_passport_type` varchar(225) NOT NULL,
  `experience` mediumtext NOT NULL,
  `done` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `pin`, `date_modified`, `flag`, `id_card_passport`, `id_card_passport_type`, `yearbook_passport`, `yearbook_passport_type`, `experience`, `done`) VALUES
(3, 'tonjoe99@gmail.com', '50C57B', '2015-07-30 12:50:57', 0, '', '', '', '', '', 0),
(4, 'segsalerty@yahoo.com', '40Z19F', '2015-08-14 08:38:04', 0, '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
