-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 03:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prefered_category` varchar(50) NOT NULL,
  `content_img` blob NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE IF NOT EXISTS `magazine` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_type` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `realese_no` varchar(50) NOT NULL,
  `cover_img` blob NOT NULL,
  `publisher` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mg_feedback`
--

CREATE TABLE IF NOT EXISTS `mg_feedback` (
  `mg_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`mg_id`,`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mg_has_add`
--

CREATE TABLE IF NOT EXISTS `mg_has_add` (
  `mg_id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`mg_id`,`add_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mg_page`
--

CREATE TABLE IF NOT EXISTS `mg_page` (
  `mg_id` int(11) NOT NULL,
  `page_no` int(11) NOT NULL,
  `content` varchar(3000) NOT NULL,
  PRIMARY KEY (`mg_id`,`page_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mg_ratings`
--

CREATE TABLE IF NOT EXISTS `mg_ratings` (
  `mg_id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`mg_id`,`rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_magazines`
--

CREATE TABLE IF NOT EXISTS `my_magazines` (
  `reader_id` int(11) NOT NULL,
  `mg_id` int(11) NOT NULL,
  PRIMARY KEY (`reader_id`,`mg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `publisher_img` blob NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reader_img` blob NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE IF NOT EXISTS `recommends` (
  `reader_id` int(11) NOT NULL,
  `mg_id` int(11) NOT NULL,
  PRIMARY KEY (`reader_id`,`mg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
