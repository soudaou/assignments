-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2012 at 04:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bala0069`
--

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE IF NOT EXISTS `planets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `distance_from_sun` float NOT NULL,
  `is_gas_giant` tinyint(1) NOT NULL,
  `number_moons` int(11) NOT NULL,
  `is_dwarf` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`id`, `name`, `distance_from_sun`, `is_gas_giant`, `number_moons`, `is_dwarf`) VALUES
(1, 'Earth', 149598000, 0, 1, 0),
(2, 'Jupiter', 778412000, 1, 66, 0),
(3, 'Neptune', 4498250000, 1, 13, 0),
(4, 'Mars', 227937000, 0, 2, 0),
(5, 'Pluto', 5906380000, 0, 4, 1);
