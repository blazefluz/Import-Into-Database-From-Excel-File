-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 09:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `excel`
--

-- --------------------------------------------------------

--
-- Table structure for table `lot_details`
--

CREATE TABLE IF NOT EXISTS `lot_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lot_summary_id` int(11) NOT NULL,
  `upc` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `orginal_qty` varchar(255) NOT NULL,
  `orginal_cost` varchar(255) NOT NULL,
  `total_orginal_cost` varchar(255) NOT NULL,
  `orginal_retails` varchar(255) NOT NULL,
  `total_orginal_retails` varchar(255) NOT NULL,
  `vendor_or_style` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `client_cost` varchar(255) NOT NULL,
  `total_client_cost` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1074 ;

-- --------------------------------------------------------

--
-- Table structure for table `lot_summary`
--

CREATE TABLE IF NOT EXISTS `lot_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `lot` varchar(255) NOT NULL,
  `bol` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `return_type` varchar(255) NOT NULL,
  `of_pallet` varchar(255) NOT NULL,
  `of_cartoons` varchar(255) NOT NULL,
  `total_orginal_cost` varchar(255) NOT NULL,
  `total_orginal_retail` varchar(255) NOT NULL,
  `of_units` varchar(255) NOT NULL,
  `total_clients_cost` varchar(255) NOT NULL,
  `avg_unit_client_cost` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=198 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
