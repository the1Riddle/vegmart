-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 12:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(16, 'REDAPPLE', 'Red Apples', '', 150, 3, 450, '2024-06-25 22:30:47', 'cliocalvo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_type`, `product_image`, `qty`, `product_price`) VALUES
(1, 'REDAPPLE', 'Red Apples', 'fruits', 'products/apple.jpg', 497, 150.00),
(2, 'BERRIES', 'Berries', 'fruits', 'products/baries.jpg', 500, 120.00),
(3, 'BLUEBERRIES', 'Blueberries', 'fruits', 'products/barries-2.jpg', 500, 100.00),
(4, 'KALE', 'Kale', 'vegetables', 'products/kales.jpg', 500, 200.00),
(5, 'PEA', 'Pea', 'fruits', 'products/pea.jpg', 500, 70.00),
(6, 'KIWI', 'Kiwi', 'fruits', 'products/kiwi.jpg', 500, 50.00),
(7, 'GREENAPPLES', 'Green Apples', 'fruits', 'products/apple-2.jpg', 500, 150.00),
(8, 'PINEAPPLES', 'Pineapple', 'fruits', 'products/pineapples.jpg', 500, 250.00),
(9, 'APRICOTS', 'Apricots', 'fruits', 'products/apricots.jpg', 500, 70.00),
(10, 'AVOCADO', 'Avocado', 'fruits', 'products/avocado.jpg', 500, 120.00),
(11, 'LEMON', 'Lemon', 'fruits', 'products/lemon.jpg', 500, 90.00),
(12, 'BROCCOLI', 'Broccoli', 'vegetables', 'products/broccoli.jpg', 500, 180.00),
(13, 'TOMATOES', 'Tomatoes', 'vegetables', 'products/tomatoes.jpg', 500, 310.00),
(14, 'CABBAGE', 'Cabbage', 'vegetables', 'products/cabbage.jpg', 500, 130.00),
(15, 'ORANGE', 'Orange', 'fruits', 'products/orange.jpg', 500, 90.00),
(16, 'SPINACH', 'Spinach', 'vegetables', 'products/spinach.jpg', 500, 200.00),
(17, 'PARSLEY', 'Parsley', 'vegetables', 'products/parsely.jpg', 500, 70.00),
(18, 'CUCUMBER', 'Cucumber', 'vegetables', 'products/cucumber.jpg', 500, 90.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `email`, `password`, `type`) VALUES
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 'admin@admin.com', 'admin', 'admin'),
(6, 'Calvo', 'Clio', 'Box 332', 'Nairobi', 'cliocalvo@gmail.com', 'm:z3kKAn7LkNL5p', 'user'),
(7, 'Test', 'User', 'POX 903', 'Ukwala', 'jami@gmail.com', 'jami', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
