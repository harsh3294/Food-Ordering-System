-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2018 at 12:17 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_code` int(10) NOT NULL auto_increment,
  `admin_name` varchar(20) default NULL,
  `admin_email` varchar(20) default NULL,
  `admin_password` varchar(10) default NULL,
  PRIMARY KEY  (`admin_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_code`, `admin_name`, `admin_email`, `admin_password`) VALUES
(2, 'ameen', 'ameen@gmail.com', 'ameen');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `category_code` int(11) NOT NULL auto_increment,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`category_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`category_code`, `category_name`) VALUES
(8, 'FastFood'),
(9, 'Biryani'),
(10, 'BBQ'),
(11, 'Desert'),
(14, 'ice cream');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_code` int(10) NOT NULL auto_increment,
  `customer_name` varchar(10) default NULL,
  `customer_location` varchar(10) default NULL,
  `customer_address` varchar(300) default NULL,
  `customer_shipaddress` varchar(300) default NULL,
  `customer_contact` varchar(10) default NULL,
  `customer_email` varchar(20) default NULL,
  `customer_password` varchar(20) default NULL,
  PRIMARY KEY  (`customer_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_code`, `customer_name`, `customer_location`, `customer_address`, `customer_shipaddress`, `customer_contact`, `customer_email`, `customer_password`) VALUES
(1, 'ameen', 'wadala', 'wadala', 'wadala', '3243134134', 'ameen@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_code` int(11) NOT NULL auto_increment,
  `name` varchar(20) default NULL,
  `message` varchar(200) default NULL,
  `date` varchar(10) default NULL,
  PRIMARY KEY  (`feedback_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_code`, `name`, `message`, `date`) VALUES
(8, 'ameen', 'please upload new food product menu.', '2018-03-19'),
(9, 'ameen', 'nice food', '2018-03-20'),
(10, 'ranjan', 'nice food', '2018-03-22'),
(11, 'ameen', 'thanks', '2018-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_code` int(10) NOT NULL auto_increment,
  `order_date` date default NULL,
  `customer_code` int(10) default NULL,
  `payable_amount` decimal(11,2) default NULL,
  `payment_option` varchar(12) default NULL,
  `session_code` int(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  PRIMARY KEY  (`order_code`),
  KEY `customer_code` (`customer_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_code`, `order_date`, `customer_code`, `payable_amount`, `payment_option`, `session_code`, `order_status`) VALUES
(1, '2018-03-15', 1, '300.00', '', 2, 'pending'),
(2, '2018-03-15', 1, '150.00', '', 3, 'pending'),
(3, '2018-03-22', 1, '750.00', '', 7, 'pending'),
(4, '2018-03-22', 1, '150.00', '', 8, 'pending'),
(5, '2018-03-22', 1, '150.00', '', 9, 'pending'),
(6, '2018-03-23', 1, '150.00', '', 10, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_code` int(10) NOT NULL auto_increment,
  `product_name` varchar(100) NOT NULL,
  `category_code` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_cost` decimal(12,2) NOT NULL,
  `active_status` varchar(12) NOT NULL,
  PRIMARY KEY  (`product_code`),
  KEY `Category_code` (`category_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_code`, `product_name`, `category_code`, `product_desc`, `product_image`, `product_cost`, `active_status`) VALUES
(3, 'PIZZA', 8, 'Non-Veg', '5aaa1d0627668.jpeg', '100.00', 'a'),
(4, 'Chiken PIZZA', 8, 'Non-Veg', '5aaa1e3119892.jpeg', '150.00', 'a'),
(6, 'Margherita', 8, 'Veg', '5aaa1f0ca193d.jpeg', '200.00', 'a'),
(7, ' mozzarella', 8, 'Non-Veg', '5aaa1f3fe760f.jpeg', '250.00', 'a'),
(8, 'BURGER', 8, 'Non-Veg', '5aaa1f7cd2515.jpeg', '270.00', 'a'),
(9, 'Backyard Burgers', 8, 'Veg', '5aaa205d3d07a.jpg', '150.00', 'a'),
(10, 'BLACK Burger', 8, 'Veg', '5aaa20db887ef.jpg', '100.00', 'a'),
(11, 'french fries', 8, 'Veg', '5aaa27aee19e7.jpeg', '120.00', 'a'),
(12, 'smiley fries', 8, 'Veg', '5aaa27f165766.jpeg', '100.00', 'a'),
(13, 'pocket fries', 8, 'Veg', '5aaa2848e8b11.jpeg', '150.00', 'a'),
(14, 'footlong burger', 8, 'Non-Veg', '5aaa287390b53.jpeg', '250.00', 'a'),
(16, 'BBQ Chicken', 10, 'Non-Veg', '5aaa2cad9fb6a.jpeg', '150.00', 'a'),
(17, 'praws bbq', 10, 'Non-Veg', '5aaa2ce637e0e.jpeg', '200.00', 'a'),
(18, 'Chicken Tikka', 10, 'Non-Veg', '5aaa2d550b62b.jpeg', '220.00', 'a'),
(19, 'Chicken Harbara', 10, 'Non-Veg', '5aaa2db48bd70.jpeg', '150.00', 'a'),
(20, 'Chicken Kabab', 10, 'Non-Veg', '5aaa2e11572f8.jpeg', '70.00', 'a'),
(21, 'Spl BBQ Kabab', 10, 'Non-Veg', '5aaa2ea24e270.jpg', '80.00', 'a'),
(22, 'ice', 14, 'Veg', '5aaa2f1a9d028.jpeg', '150.00', 'a'),
(23, 'chicken biryani', 9, 'Non-Veg', '5aaa2f63ee1ad.jpeg', '200.00', 'a'),
(24, 'Mutton biryani', 9, 'Non-Veg', '5aaa2f8d9a2da.jpeg', '230.00', 'a'),
(25, 'praws biryani', 9, 'Non-Veg', '5aaa2fbbeeabf.jpeg', '220.00', 'a'),
(26, 'Chicken Tikka biryani', 9, 'Non-Veg', '5aaa2ff2233eb.jpeg', '250.00', 'a'),
(27, 'lemon briyani', 9, 'Non-Veg', '5aaa3051ca3e0.jpeg', '150.00', 'a'),
(28, 'Chicken Harbara biryani', 9, 'Non-Veg', '5aaa308d4142d.jpeg', '170.00', 'a'),
(29, 'choca lava', 11, 'Veg', '5aaa314e4d769.jpeg', '170.00', 'a'),
(30, 'chocolate mousse', 11, 'Non-Veg', '5aaa32853ddb7.jpeg', '140.00', 'a'),
(31, 'hedy chocolate stick ', 11, 'Veg', '5aaa32fd9de7d.jpeg', '120.00', 'a'),
(32, 'Pudding ', 11, 'Veg', '5aaa3353ca6d3.jpeg', '130.00', 'a'),
(33, 'cake mix choco chip', 11, 'Veg', '5aaa33fdc398e.jpeg', '170.00', 'a'),
(34, 'Pancake ', 11, '', '5aaa34376f630.jpg', '220.00', 'a'),
(35, 'hot lava ice-cream', 14, 'Veg', '5aaa349214d40.jpeg', '110.00', 'a'),
(36, 'jar ice-cream', 14, 'Non-Veg', '5aaa350fc191b.jpeg', '180.00', 'a'),
(37, 'Red wings ', 14, 'Veg', '5aaa35ce6917c.jpeg', '100.00', 'a'),
(38, 'South Indian Thali', 13, 'Veg', '5aacdcffdc3b1.jpg', '150.00', 'a'),
(39, 'Gujarati Thaili', 13, 'Veg', '5aacdd5502003.jpg', '180.00', 'a'),
(40, 'Great Grand Thali', 13, 'Veg', '5aacddaeb6cbb.jpg', '250.00', 'a'),
(41, 'Chicken Thali', 13, 'Non-Veg', '5aacde45d64f8.jpg', '200.00', 'a'),
(42, 'Rajasthani Thali', 13, 'Veg', '5aacdfa94fd24.jpg', '190.00', 'a'),
(43, 'Indian Thali', 13, 'Veg', '5aace03dcd47e.jpg', '140.00', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `shop_item`
--

CREATE TABLE `shop_item` (
  `item_code` int(11) NOT NULL auto_increment,
  `session_code` int(11) default NULL,
  `product_code` int(11) default NULL,
  `item_qty` int(11) default NULL,
  `item_cost` decimal(11,2) default NULL,
  PRIMARY KEY  (`item_code`),
  KEY `session_code` (`session_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `shop_item`
--

INSERT INTO `shop_item` (`item_code`, `session_code`, `product_code`, `item_qty`, `item_cost`) VALUES
(2, 2, 3, 3, '300.00'),
(3, 3, 4, 1, '150.00'),
(5, 6, 7, 1, '250.00'),
(6, 6, 6, 1, '200.00'),
(8, 6, 23, 1, '200.00'),
(9, 7, 4, 5, '750.00'),
(10, 8, 4, 1, '150.00'),
(11, 9, 4, 1, '150.00'),
(12, 10, 9, 1, '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `shop_sessions`
--

CREATE TABLE `shop_sessions` (
  `session_code` int(11) NOT NULL auto_increment,
  `customer_code` int(11) default NULL,
  `payable_amt` decimal(11,2) NOT NULL,
  PRIMARY KEY  (`session_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `shop_sessions`
--

INSERT INTO `shop_sessions` (`session_code`, `customer_code`, `payable_amt`) VALUES
(2, 1, '0.00'),
(3, 1, '0.00'),
(4, 0, '0.00'),
(5, 1, '0.00'),
(6, 0, '0.00'),
(7, 1, '0.00'),
(8, 1, '0.00'),
(9, 1, '0.00'),
(10, 1, '0.00');
