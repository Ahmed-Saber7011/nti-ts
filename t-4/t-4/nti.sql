-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 10:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nti`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(30) UNSIGNED NOT NULL,
  `building` varchar(20) NOT NULL,
  `floor` text NOT NULL,
  `falt` varchar(20) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `street` varchar(5) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `Regions_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(20) NOT NULL,
  `name_en` varchar(20) NOT NULL,
  `name_er` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes,0=>noe'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `users-id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `imag` varchar(255) DEFAULT NULL,
  `name_er` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>yes,0=>not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creaed-at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name_en` varchar(20) NOT NULL,
  `name_er` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usege_per_user` varchar(50) NOT NULL,
  `max_discount_value` varchar(50) NOT NULL,
  `mini_order_value` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `end_at` varchar(20) NOT NULL,
  `usege` varchar(20) NOT NULL,
  `code` bigint(20) UNSIGNED NOT NULL,
  `start_at` varchar(20) NOT NULL,
  `numbe_of_usage` varchar(20) NOT NULL,
  `discounttype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fevs`
--

CREATE TABLE `fevs` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `users-id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `end_at` varchar(20) NOT NULL,
  `start_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `desc` varchar(60) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `count` varchar(40) NOT NULL,
  `ofiered_items` varchar(40) NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `discount` varchar(59) NOT NULL,
  `discounttype` varchar(40) NOT NULL,
  `title_er` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deliverd_at` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes,0=>not',
  `shiping_price` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `Addresses_id` bigint(20) UNSIGNED NOT NULL,
  `coupons_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_er` varchar(20) NOT NULL,
  `name_en` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>deliverd,0=>not',
  `code` bigint(20) UNSIGNED NOT NULL COMMENT '\r\n',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cretad_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `imag` varchar(20) NOT NULL,
  `quantity` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>deliverd,0=>not',
  `details_ar` varchar(20) NOT NULL,
  `details_en` varchar(20) NOT NULL,
  `pirc` varchar(20) NOT NULL,
  `subcategories_id` bigint(20) UNSIGNED NOT NULL,
  `Brands_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_offer`
--

CREATE TABLE `product_offer` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `offers_id` bigint(20) UNSIGNED NOT NULL,
  `pric_afiler_discount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `pric` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_spec`
--

CREATE TABLE `product_spec` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `spec_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(20) NOT NULL,
  `name_er` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>yes,0=>not',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cities_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rate` varchar(40) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE `spec` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>yes,0=>not',
  `name_en` varchar(50) NOT NULL,
  `name_er` varchar(50) NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_verifed_at` varchar(20) NOT NULL,
  `code_expiraton` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>yes,0=>not',
  `name` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>yes,0=>not',
  `emil` bigint(20) UNSIGNED NOT NULL DEFAULT current_timestamp(),
  `password` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phon` bigint(20) UNSIGNED NOT NULL DEFAULT current_timestamp(),
  `verifcation_code` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>yes,0=>not',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_users_fk` (`users_id`),
  ADD KEY `regions_addresses_fk` (`Regions_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD KEY `carts_product_fk` (`products_id`),
  ADD KEY `carts_users_fk` (`users-id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fevs`
--
ALTER TABLE `fevs`
  ADD KEY `fevs_products_fk` (`products_id`),
  ADD KEY `fevs_users_fk` (`users-id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_coupons_fk` (`coupons_id`),
  ADD KEY `orders_addresses_fk` (`Addresses_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brands_fk` (`Brands_id`),
  ADD KEY `Structureproducts_products_fk` (`subcategories_id`);

--
-- Indexes for table `product_offer`
--
ALTER TABLE `product_offer`
  ADD KEY `product_offer_fk` (`offers_id`),
  ADD KEY `products_products_id_fk` (`products_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD KEY `product_order_brands_fk` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product_spec`
--
ALTER TABLE `product_spec`
  ADD KEY `product_spec_products_fk` (`products_id`),
  ADD KEY `product_spec_spec_fk` (`spec_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_cities_fk` (`cities_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `reviews_products_fk` (`product_id`),
  ADD KEY `reviews_users_fk` (`users_id`);

--
-- Indexes for table `spec`
--
ALTER TABLE `spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_categories_fk` (`categories_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(30) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spec`
--
ALTER TABLE `spec`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `regions_addresses_fk` FOREIGN KEY (`Regions_id`) REFERENCES `regions` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_fk` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_users_fk` FOREIGN KEY (`users-id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fevs`
--
ALTER TABLE `fevs`
  ADD CONSTRAINT `fevs_products_fk` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fevs_users_fk` FOREIGN KEY (`users-id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_addresses_fk` FOREIGN KEY (`Addresses_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `orders_coupons_fk` FOREIGN KEY (`coupons_id`) REFERENCES `coupons` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Structureproducts_products_fk` FOREIGN KEY (`subcategories_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `products_brands_fk` FOREIGN KEY (`Brands_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `product_offer`
--
ALTER TABLE `product_offer`
  ADD CONSTRAINT `product_offer_fk` FOREIGN KEY (`offers_id`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `products_products_id_fk` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_brands_fk` FOREIGN KEY (`product_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `product_spec`
--
ALTER TABLE `product_spec`
  ADD CONSTRAINT `product_spec_products_fk` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_spec_spec_fk` FOREIGN KEY (`spec_id`) REFERENCES `spec` (`id`);

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_cities_fk` FOREIGN KEY (`cities_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_categories_fk` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
