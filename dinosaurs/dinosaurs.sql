-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2012 at 07:02 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daou0092`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinosaurs`
--

CREATE TABLE IF NOT EXISTS `dinosaurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dino_name` varchar(255) NOT NULL,
  `loves_meat` tinyint(1) NOT NULL,
  `in_jurassic_park` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dinosaurs`
--

INSERT INTO `dinosaurs` (`id`, `dino_name`, `loves_meat`, `in_jurassic_park`) VALUES
(1, 'Tyrannosaurus Rex', 1, 1),
(2, 'Velociraptor', 1, 1),
(3, 'Stegosaurus', 0, 1),
(4, 'Triceratops', 0, 1);
