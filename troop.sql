-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2014 at 11:08 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `planner`
--
CREATE DATABASE IF NOT EXISTS `planner` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `planner`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `login`, `passwd`) VALUES
(1, 'sal', 'zaydon', 'szayd', '269b8432bdfbcb8d4748b17f504933a5'),
(2, 'sal', 'z', 'szaydon', 'df0349ce110b69f03b4def8012ae4970');

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE IF NOT EXISTS `scouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scout-last` varchar(200) NOT NULL,
  `scout-first` varchar(200) NOT NULL,
  `scout-middle` varchar(200) NOT NULL,
  `bsa-id` varchar(200) NOT NULL,
  `scout-address` varchar(200) NOT NULL,
  `scout-city` varchar(200) NOT NULL,
  `scout-state` varchar(200) NOT NULL,
  `scout-zip` varchar(200) NOT NULL,
  `scout-dob` date NOT NULL,
  `scout-home_phone` varchar(200) NOT NULL,
  `scout-cell_phone` varchar(200) NOT NULL,
  `scout-email1` varchar(200) NOT NULL,
  `scout-email2` varchar(200) NOT NULL,
  `scout-date_joined` date NOT NULL,
  `emergency1-name` varchar(200) NOT NULL,
  `emergency1-phone` varchar(200) NOT NULL,
  `emergency2-name` varchar(200) NOT NULL,
  `emergency2-phone` varchar(200) NOT NULL,
  `parent1-last` varchar(200) NOT NULL,
  `parent1-first` varchar(200) NOT NULL,
  `parent1-relation` varchar(200) NOT NULL,
  `parent1-work_phone` varchar(200) NOT NULL,
  `parent1-home_phone` varchar(200) NOT NULL,
  `parent1-cell_phone` varchar(200) NOT NULL,
  `parent1-email1` varchar(200) NOT NULL,
  `parent1-email2` varchar(200) NOT NULL,
  `parent2-last` varchar(200) NOT NULL,
  `parent2-first` varchar(200) NOT NULL,
  `parent2-relation` varchar(200) NOT NULL,
  `parent2-work_phone` varchar(200) NOT NULL,
  `parent2-home_phone` varchar(200) NOT NULL,
  `parent2-cell_phone` varchar(200) NOT NULL,
  `parent2-email1` varchar(200) NOT NULL,
  `parent2-email2` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scouts`
--

INSERT INTO `scouts` (`id`, `scout-last`, `scout-first`, `scout-middle`, `bsa-id`, `scout-address`, `scout-city`, `scout-state`, `scout-zip`, `scout-dob`, `scout-home_phone`, `scout-cell_phone`, `scout-email1`, `scout-email2`, `scout-date_joined`, `emergency1-name`, `emergency1-phone`, `emergency2-name`, `emergency2-phone`, `parent1-last`, `parent1-first`, `parent1-relation`, `parent1-work_phone`, `parent1-home_phone`, `parent1-cell_phone`, `parent1-email1`, `parent1-email2`, `parent2-last`, `parent2-first`, `parent2-relation`, `parent2-work_phone`, `parent2-home_phone`, `parent2-cell_phone`, `parent2-email1`, `parent2-email2`) VALUES
(1, 'Zaydon', 'Salvatore', 'Joseph', 'BSA123', '721 Woodmere Ave', 'Dickson City', 'PA', '18447', '1993-03-17', '5703839433', '5703091105', 'szaydon@gmail.com', 'zaydons@sunyit.edu', '2007-03-17', 'Elizabeth Zaydon', '5703839433', 'James Zaydon', '5708157635', 'Zaydon', 'Elizabeth', 'Mother', '5703839433', '5703839433', '5704680529', 'eazcpa721@aol.com', 'eazcpa721@hotmail.com', 'Zaydon', 'James', 'Father', '5703427732', '5703839433', '5704680529', 'jzaydon@gmail.com', 'jjzaydonjr@gmail.com'),
(2, 'Porkowski', 'James', 'Edgar', 'BSA124', '1000 Wyoming Ave', 'Scranton', 'PA ', '18510', '1993-03-30', '5709876543', '5701234567', 'scout1@gmail.com', 'scout2@gmail.com', '2007-03-25', 'Liz Daniels', '5704658456', 'Jen Jones', '5704687986', 'Jess', 'Porkowski', 'Mother', '5708642310', '5706894562', '5704132165', 'parent11@gmail.com', 'parent12@gmail.com', 'Jim', 'Porkowski', 'Father', '5709684652', '5707845642', '5704645566', 'parent21@gmail.com', 'parent22@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
