-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2015 at 12:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE IF NOT EXISTS `billings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(65) DEFAULT NULL,
  `address2` varchar(65) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_addresses_users_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `address`, `address2`, `city`, `state`, `zip`, `created_at`, `updated_at`, `users_id`) VALUES
(1, '1 Infinity Loop', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, '1980 Zanker Road', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, '1 Hacker Way', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, '953 Foxglove Drive', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Shirt'),
(2, 'Hat'),
(3, 'Tanktop');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordertotal` float DEFAULT NULL,
  `orderstatus` varchar(45) DEFAULT NULL,
  `shippingcost` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`shipping_id`,`billing_id`),
  KEY `fk_orders_users1_idx` (`users_id`),
  KEY `fk_orders_addresses1_idx` (`shipping_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders_has_products`
--

CREATE TABLE IF NOT EXISTS `orders_has_products` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`orders_id`,`products_id`),
  KEY `fk_orders_has_products_products1_idx` (`products_id`),
  KEY `fk_orders_has_products_orders1_idx` (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_shipment` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `stock`, `image`, `price`, `sold`, `created_at`, `updated_at`, `last_shipment`, `category_id`) VALUES
(1, 'pineapple_shirt', 2, 'https://scontent.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/11053057_869649466426215_3801087741494506262_n.jpg?oh=b15ee51e99fc8d3444cbc03569f16144&oe=55B551E3', 9.99, NULL, '0000-00-00 00:00:00', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE IF NOT EXISTS `shippings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(65) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_shipping_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `address`, `address2`, `city`, `state`, `zip`, `created_at`, `updated_at`, `users_id`) VALUES
(1, '1 Infinity Loop', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, '1980 Zanker Road', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, '1 Hacker Way', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, '953 Foxglove Dr', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(65) DEFAULT NULL,
  `last_name` varchar(65) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `userlevel` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `billings_id` int(11) NOT NULL,
  `shippings_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`shippings_id`,`billings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `userlevel`, `created_at`, `updated_at`, `billings_id`, `shippings_id`) VALUES
(1, 'Brian', 'Townsend', 'btownsend85@yahoo.com', '123', 1, NULL, NULL, 4, 2),
(2, 'Antony', 'Yang', NULL, NULL, 1, NULL, NULL, 0, 0),
(3, 'Josh', 'Phuang', NULL, NULL, 1, NULL, NULL, 0, 0),
(4, 'Michael', 'Choi', 'mchoi@codingdojo.com', 'dojo', 0, NULL, NULL, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
