-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 03:09 AM
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
  `streetaddress` varchar(65) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`cities_id`),
  KEY `fk_addresses_users_idx` (`users_id`),
  KEY `fk_addresses_cities1_idx` (`cities_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `streetaddress`, `unit`, `created_at`, `users_id`, `cities_id`) VALUES
(1, '1 Infinity Loop', NULL, NULL, 0, 2),
(2, '1980 Zanker Road', NULL, NULL, 0, 3),
(3, '1 Hacker Way', NULL, NULL, 0, 0),
(4, '953 Foxglove Drive', NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `products_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`products_id`),
  KEY `fk_categories_products1_idx` (`products_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `products_id`) VALUES
(1, 'Shirt', 0),
(2, 'Hat', 0),
(3, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`states_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `cityname`, `created_at`, `updated_at`, `states_id`) VALUES
(1, 'Sunnyvale', NULL, NULL, 1),
(2, 'Mountain View', NULL, NULL, 1),
(3, 'San Jose', NULL, NULL, 1),
(4, 'Las Vegas', NULL, NULL, 2),
(5, 'Los Angeles', NULL, NULL, 1),
(6, 'San Francisco', NULL, NULL, 1),
(7, 'Burbank', NULL, NULL, 1),
(8, 'Anaheim', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities_has_states`
--

CREATE TABLE IF NOT EXISTS `cities_has_states` (
  `cities_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  PRIMARY KEY (`cities_id`,`states_id`),
  KEY `fk_cities_has_states_states1_idx` (`states_id`),
  KEY `fk_cities_has_states_cities1_idx` (`cities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `orderstatus` int(11) DEFAULT NULL,
  `shippingcost` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `addresses_id` int(11) NOT NULL,
  `addresses_users_id` int(11) NOT NULL,
  `addresses_cities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`addresses_id`,`addresses_users_id`,`addresses_cities_id`),
  KEY `fk_orders_users1_idx` (`users_id`),
  KEY `fk_orders_addresses1_idx` (`addresses_id`,`addresses_users_id`,`addresses_cities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders_has_products`
--

CREATE TABLE IF NOT EXISTS `orders_has_products` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
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
  `streetaddress` varchar(65) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`cities_id`),
  KEY `fk_shipping_users1_idx` (`users_id`),
  KEY `fk_shipping_cities1_idx` (`cities_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `streetaddress`, `unit`, `created_at`, `users_id`, `cities_id`) VALUES
(1, '1 Infinity Loop', NULL, NULL, 0, 2),
(2, '1980 Zanker Road', NULL, NULL, 0, 3),
(3, '1 Hacker Way', NULL, NULL, 0, 0),
(4, '953 Foxglove Dr', NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'CA'),
(2, 'NV');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `userlevel`, `created_at`, `updated_at`) VALUES
(1, 'Brian', 'Townsend', 'btownsend85@yahoo.com', '123', 1, NULL, NULL),
(2, 'Antony', 'Yang', NULL, NULL, 1, NULL, NULL),
(3, 'Josh', 'Phuang', NULL, NULL, 1, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
