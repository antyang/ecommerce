delimiter $$

CREATE DATABASE `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8 */$$


delimiter $$

CREATE TABLE `billings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `streetaddress` varchar(65) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`cities_id`),
  KEY `fk_addresses_users_idx` (`users_id`),
  KEY `fk_addresses_cities1_idx` (`cities_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `products_id` int(11) NOT NULL,
  `products_orders_id` int(11) NOT NULL,
  `products_orders_users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`products_id`,`products_orders_id`,`products_orders_users_id`),
  KEY `fk_categories_products1_idx` (`products_id`,`products_orders_id`,`products_orders_users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`states_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `cities_has_states` (
  `cities_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  PRIMARY KEY (`cities_id`,`states_id`),
  KEY `fk_cities_has_states_states1_idx` (`states_id`),
  KEY `fk_cities_has_states_cities1_idx` (`cities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `orders` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `orders_has_products` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  PRIMARY KEY (`orders_id`,`products_id`),
  KEY `fk_orders_has_products_products1_idx` (`products_id`),
  KEY `fk_orders_has_products_orders1_idx` (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_shipment` datetime DEFAULT NULL,
  `orders_id` int(11) NOT NULL,
  `orders_users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`orders_id`,`orders_users_id`),
  KEY `fk_products_orders1_idx` (`orders_id`,`orders_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `shippings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `streetaddress` varchar(65) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`cities_id`),
  KEY `fk_shipping_users1_idx` (`users_id`),
  KEY `fk_shipping_cities1_idx` (`cities_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8$$


delimiter $$

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(65) DEFAULT NULL,
  `last_name` varchar(65) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `userlevel` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8$$


