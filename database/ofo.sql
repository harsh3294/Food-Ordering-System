-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2018 at 12:49 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `ofo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

DROP TABLE IF EXISTS `admin_details`;
CREATE TABLE IF NOT EXISTS `admin_details` (
  `admin_code` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) DEFAULT NULL,
  `admin_email` varchar(20) DEFAULT NULL,
  `admin_password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`admin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_code`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Sanjay Jaiswar', 'sanjay@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

DROP TABLE IF EXISTS `category_details`;
CREATE TABLE IF NOT EXISTS `category_details` (
  `category_code` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_code`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`category_code`, `category_name`) VALUES
(1, 'Pizza'),
(2, 'Burger'),
(3, 'Hotdog'),
(4, 'Sandwitch'),
(5, 'Juice'),
(6, 'Drinks'),
(15, 'Ice Cream');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_code` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(10) DEFAULT NULL,
  `customer_location` varchar(10) DEFAULT NULL,
  `customer_address` varchar(300) DEFAULT NULL,
  `customer_shipaddress` varchar(300) DEFAULT NULL,
  `customer_contact` varchar(10) DEFAULT NULL,
  `customer_email` varchar(20) DEFAULT NULL,
  `customer_password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`customer_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_code`, `customer_name`, `customer_location`, `customer_address`, `customer_shipaddress`, `customer_contact`, `customer_email`, `customer_password`) VALUES
(1, 'Ramesh', 'Sion', 'sion', 'sion', '1234567876', 'ramesh@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_code` int(10) NOT NULL AUTO_INCREMENT,
  `order_date` date DEFAULT NULL,
  `customer_code` int(10) DEFAULT NULL,
  `payable_amount` decimal(11,2) DEFAULT NULL,
  `payment_option` varchar(12) DEFAULT NULL,
  `session_code` int(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  PRIMARY KEY (`order_code`),
  KEY `customer_code` (`customer_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_code`, `order_date`, `customer_code`, `payable_amount`, `payment_option`, `session_code`, `order_status`) VALUES
(1, '2017-12-29', 1, '800.00', '', 8, 'pending'),
(2, '2017-12-29', 1, '0.00', '', 9, 'pending'),
(3, '2017-12-29', 1, '2400.00', '', 10, 'pending'),
(4, '2017-12-29', 1, '0.00', '', 13, 'pending'),
(5, '2017-12-29', 1, '1200.00', '', 14, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `product_code` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `category_code` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `stock_inhand` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_cost` decimal(12,2) NOT NULL,
  `active_status` varchar(12) NOT NULL,
  PRIMARY KEY (`product_code`),
  KEY `Category_code` (`category_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_code`, `product_name`, `category_code`, `product_desc`, `stock_inhand`, `product_image`, `product_cost`, `active_status`) VALUES
(1, 'Christmas Cake', 1, 'Anda special', '10', '5a50c23ea952c.jpeg', '1200.00', 'a'),
(2, 'Black forest', 4, 'its santa banta cake', '4', '5a44898c394be.jpeg', '3000.00', 'a'),
(3, 'Awesome Cake', 1, 'Egg cake', '10', '5a448c66b628d.jpeg', '400.00', 'a'),
(4, 'super cake', 1, 'egg super', '20', '5a448e1e30ac0.jpeg', '1200.00', 'a'),
(5, 'Pineapple', 1, 'Pineapple', '30', '5a448e6252bd9.jpeg', '350.00', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `shop_item`
--

DROP TABLE IF EXISTS `shop_item`;
CREATE TABLE IF NOT EXISTS `shop_item` (
  `item_code` int(11) NOT NULL AUTO_INCREMENT,
  `session_code` int(11) DEFAULT NULL,
  `product_code` int(11) DEFAULT NULL,
  `item_qty` int(11) DEFAULT NULL,
  `item_cost` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`item_code`),
  KEY `session_code` (`session_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_item`
--

INSERT INTO `shop_item` (`item_code`, `session_code`, `product_code`, `item_qty`, `item_cost`) VALUES
(2, 3, 1, 1, '0.00'),
(4, 3, 4, 1, '0.00'),
(7, 3, 1, 1, '0.00'),
(8, 4, 3, 1, '0.00'),
(11, 5, 1, 3, '3600.00'),
(12, 5, 2, 2, '6000.00'),
(13, 6, 1, 3, '3600.00'),
(15, 7, 1, 2, '2400.00'),
(16, 8, 3, 2, '800.00'),
(17, 9, 1, 1, '0.00'),
(18, 10, 1, 2, '2400.00'),
(19, 10, 2, 1, '0.00'),
(20, 11, 1, 2, '2400.00'),
(21, 11, 2, 1, '0.00'),
(22, 12, 1, 1, '0.00'),
(23, 13, 1, 1, '0.00'),
(24, 14, 1, 1, '1200.00');

-- --------------------------------------------------------

--
-- Table structure for table `shop_sessions`
--

DROP TABLE IF EXISTS `shop_sessions`;
CREATE TABLE IF NOT EXISTS `shop_sessions` (
  `session_code` int(11) NOT NULL AUTO_INCREMENT,
  `customer_code` int(11) DEFAULT NULL,
  `payable_amt` decimal(11,2) NOT NULL,
  PRIMARY KEY (`session_code`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_sessions`
--

INSERT INTO `shop_sessions` (`session_code`, `customer_code`, `payable_amt`) VALUES
(3, 0, '0.00'),
(4, 0, '0.00'),
(5, 0, '0.00'),
(6, 0, '0.00'),
(7, 0, '0.00'),
(8, 1, '0.00'),
(9, 1, '0.00'),
(10, 1, '0.00'),
(11, 0, '0.00'),
(12, 0, '0.00'),
(13, 1, '0.00'),
(14, 1, '0.00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`customer_code`) REFERENCES `customer_details` (`customer_code`);

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`category_code`) REFERENCES `category_details` (`category_code`);

--
-- Constraints for table `shop_item`
--
ALTER TABLE `shop_item`
  ADD CONSTRAINT `shop_item_ibfk_1` FOREIGN KEY (`session_code`) REFERENCES `shop_sessions` (`session_code`),
  ADD CONSTRAINT `shop_item_ibfk_2` FOREIGN KEY (`product_code`) REFERENCES `product_details` (`product_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
