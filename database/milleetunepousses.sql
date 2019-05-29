-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 29, 2019 at 11:36 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mille_et_une_pousses`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `street_number` int(11) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `building` varchar(45) DEFAULT NULL,
  `postal_code` varchar(5) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `street_number`, `street_name`, `building`, `postal_code`, `city_id`) VALUES
(1, 12, 'Rue des champs', NULL, '75001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE `article_comments` (
  `customer_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`customer_id`, `article_id`, `comment`) VALUES
(2, 1, 'C\'est vrai !');

-- --------------------------------------------------------

--
-- Table structure for table `blog_articles`
--

CREATE TABLE `blog_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `image_path` text NOT NULL,
  `image_alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_articles`
--

INSERT INTO `blog_articles` (`id`, `title`, `content`, `created_at`, `author_id`, `published`, `image_path`, `image_alt`) VALUES
(1, 'Vive les plantes !', 'Les plantes, c\'est cool ! Entourez-vous en. ;)', '2019-05-01 17:00:00', 1, 0, '../database/blog/article1.jpg', 'Plante verte');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'test'),
(2, 'plantes'),
(3, 'fleurs'),
(4, 'arbres'),
(5, 'buissons'),
(6, 'outils'),
(7, 'entretien_facile'),
(8, 'peu_de_lumière'),
(9, 'pet_friendly');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`) VALUES
(1, 'Paris', 1),
(2, 'Bruxelle', 2);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(2, 'Belgique'),
(4, 'Espagne'),
(1, 'France'),
(3, 'Suisse');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `user_id`) VALUES
(1, 'En préparation', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `options` varchar(55) DEFAULT NULL,
  `maintenance` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `options`, `maintenance`) VALUES
(1, 'Calathéa', 1800, 'Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui donne un côté très décoratif.', NULL, 'Elle saura vous séduire par son entretien simple et facile. De l’humidité et votre petite calathéas resplendit ! En ce qui concerne le soleil, notre amie l’apprécie, cependant prenez garde à ne pas l’exposer directement aux rayon de celui-ci.'),
(2, 'Sansevieria', 3000, 'Bien que surnommée “Langue de belle-mère”, la sansevieria reste une plante magnifique qui saura vous séduire. Non seulement esthétique elle est aussi d’une simplicité folle à entretenir et saura s’adapter à n’importe quel environnement.', NULL, ' Elle demande très peu d’eau, en été et printemps tous les 10 à 14 jours arrosez là afin que la terre reste humide. En hivers, arrosez là une fois par mois en vous assurant que la terre est bien sèche avant de le faire. '),
(4, 'Piléa', 1100, 'La piléa est une plante multi-fonction ! Elle deviendra rapidement votre meilleure amie. Son côté esthétique saura sublimer votre intérieur mais pas que ! La piléa est reconnu pour éliminer les odeurs en purifiant l’air. ', NULL, 'En ce qui concerne son entretien elle demande seulement à ne pas recevoir son ami le soleil directement, préservez la donc de ses rayons. Pour ce qui est de l’eau laissez la terre sécher entre chaque arrosage et le tour est joué !\r\n'),
(5, 'Aloe Vera', 900, 'En plus d’apporter une adorable touche de décoration d’intérieur, l’aloe vera a bien d’autres tours dans son sac. En effet, il est accordé à notre plusieurs bienfaits. \r\nNotamment sa pulpe qui regorge de vertus médicinales. Sans compter que l’aloe vera est une plante qui vous aidera à purifier l’air de votre chez vous. ', NULL, 'Pour ce qui est de l’entretien de votre ami à branches il suffit de laisser la terre redevenir sèche avant de l’arroser de nouveau.'),
(6, 'Aglaonema', 1800, 'Vous succomberez au charme de l’Aglaonema grâce à son feuillage resplendissant !', NULL, 'L’aglaonema étant une plante tropicale il ne faut que son environnement soit en dessous d’une certaine chaleur. Elle demande à être humidifié en permanence. Prenez garde à ne pas laisser votre Aglaonema sans surveillance pour vos amis à quatre pattes.');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(1, 2),
(1, 5),
(1, 7),
(1, 8),
(1, 9),
(2, 2),
(2, 8),
(4, 2),
(4, 7),
(4, 8),
(4, 9),
(5, 2),
(5, 7),
(5, 9),
(6, 2),
(6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `comment` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`customer_id`, `product_id`, `note`, `comment`, `created_at`) VALUES
(2, 1, 5, 'Cette Calathéa est splendide, tout est parfait. Je suis très content de cette acquisition pour mes nouveaux locaux ! \r\nJe recommande chaudement cette plante à quiconque souhaite ajouter de la vie dans son environnement professionnel.', '2019-05-18 13:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `path` text NOT NULL,
  `alt` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `path`, `alt`, `sort_order`, `product_id`) VALUES
(1, './../../../media/products/calathea/calathea.jpg', 'calathea', 1, 1),
(2, './../../../media/products/calathea/calathea1.jpg', 'calathea', 2, 1),
(3, './../../../media/products/calathea/calathea2.jpg', 'calathéa', 2, 1),
(4, './../../../media/products/calathea/calathea3.jpg', 'calathéa', 2, 1),
(5, './../../../media/products/sansevieria/sansevieria.jpg', 'sansevieria', 1, 2),
(6, './../../../media/products/pilea/pilea.jpg', 'piléa', 1, 4),
(7, './../../../media/products/aloe_vera/aloe_vera.jpg', 'aloe vera', 1, 5),
(8, './../../../media/products/aglaonema/aglaonema.jpg', 'aglaonema', 1, 6),
(9, './../../../media/products/sansevieria/sansevieria1.jpg', 'sansevieria', 2, 2),
(10, './../../../media/products/sansevieria/sansevieria2.jpg', 'sansevieria', 2, 2),
(11, './../../../media/products/sansevieria/sansevieria3.jpg', 'sansevieria', 2, 2),
(12, './../../../media/products/pilea/pilea1.jpg', 'piléa', 2, 4),
(13, './../../../media/products/pilea/pilea2.jpg', 'piléa', 2, 4),
(14, './../../../media/products/pilea/pilea3.jpg', 'piléa', 2, 4),
(15, './../../../media/products/aloe_vera/aloe_vera1.jpg', 'aloe vera', 2, 5),
(16, './../../../media/products/aloe_vera/aloe_vera2.jpg', 'aloe vera', 2, 5),
(17, './../../../media/products/aloe_vera/aloe_vera3.jpg', 'aloe vera', 2, 5),
(18, './../../../media/products/aglaonema/aglaonema1.jpg', 'aglaonema', 2, 6),
(19, './../../../media/products/aglaonema/aglaonema2.jpg', 'aglaonema', 2, 6),
(20, './../../../media/products/aglaonema/aglaonema3.jpg', 'aglaonema', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `activation_date` date NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `first_address_id` int(11) DEFAULT NULL,
  `second_address_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `first_address_id`, `second_address_id`, `role_id`) VALUES
(1, 'admin', 'admin', 'gregoire.masse@supinternet.fr', '$2y$10$.88ghb05I2udj4nztM5zy..P5Mm0Vvmup0MZkg6AynhHnwWTgTY5u', NULL, NULL, NULL, 1),
(2, 'Jean-Guy', 'Plantlover', 'jean.guy@plantlover.fr', '$2y$10$xsmcv1TTn0S46beYflAYZ.m8IkfGYoD.fk6iCQtugFGEDUm3hPvGu', '0612345678', 1, NULL, 2),
(17, 'J', 'B', 'jeanbernardo@wanadoo.org', '$2y$10$QyJa4C51mCS.kX4z5I/yUOi9mI9jrBYoEIFHnKdLswSo1ekuoVn0y', NULL, NULL, NULL, 2),
(18, 'Lily', 'Rose', 'lily.rose@hotmail.fr', '$2y$10$gi6lPysCdG6c9Rbn6UZ8teUpWP1hMdpYWZajJdcs1TAU3TG4XMOye', NULL, NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_address_cities1_idx` (`city_id`);

--
-- Indexes for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`customer_id`,`article_id`),
  ADD KEY `fk_articles_has_customers_customers1_idx` (`customer_id`),
  ADD KEY `fk_articles_has_customers_articles1_idx` (`article_id`);

--
-- Indexes for table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articles_customers1_idx` (`author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_cities_countries_idx` (`country_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_customers1_idx` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `fk_orders_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_orders_has_products_orders1_idx` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `fk_categories_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_categories_has_products_categories1_idx` (`category_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`customer_id`,`product_id`),
  ADD KEY `fk_customers_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_customers_has_products_customers1_idx` (`customer_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_products1_idx` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `phone_UNIQUE` (`phone`),
  ADD KEY `fk_customers_addresses1_idx` (`first_address_id`),
  ADD KEY `fk_customers_addresses2_idx` (`second_address_id`),
  ADD KEY `fk_customers_roles1_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
