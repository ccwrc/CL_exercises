-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2017 at 05:21 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Destinations`
--

CREATE TABLE `Destinations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text COLLATE utf8_polish_ci,
  `lat` decimal(13,10) DEFAULT NULL,
  `my_long` decimal(13,10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `description` text COLLATE utf8_polish_ci,
  `price` double(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `name`, `description`, `price`) VALUES
(1, 'Test item 1', 'Description for test item 1', 12.50),
(2, 'Test item 2', 'Description for test item 2', 2.60),
(3, 'Test item 3', 'Description for test item 3', 180.50),
(4, 'Test item 4', 'Description for test item 4', 56.10),
(5, 'Test item 5', 'Description for test item 5', 174.00),
(6, 'Test item 6', 'Description for test item 6', 20.80),
(7, 'Test item 7', 'Description for test item 7', 43.60),
(8, 'Test item 8', 'Description for test item 8', 1.50),
(9, 'Test item 9', 'Description for test item 9', 73.90),
(10, 'Test item 10', 'Description for test item 10', 67.80),
(11, 'nejm', 'desc', 1111.00),
(12, 'wew', 'wew', 1111.00),
(13, '2222', '2222', 22.00),
(14, '1111', '11111111', 11.00);

-- --------------------------------------------------------

--
-- Table structure for table `items_orders`
--

CREATE TABLE `items_orders` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `items_orders`
--

INSERT INTO `items_orders` (`id`, `item_id`, `order_id`) VALUES
(1, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `user_id`, `message`) VALUES
(2, 18, 'Lorem ipsum 1 ...'),
(3, 13, 'Lorem ipsum 2 ...'),
(4, 13, 'Lorem ipsum 3 ...'),
(5, 12, 'Lorem ipsum 4 ...');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`id`, `description`) VALUES
(1, 'Description for test order 1'),
(2, 'Description for test order 2'),
(3, 'Description for test order 3'),
(4, 'Description for test order 4'),
(5, 'Description for test order 5'),
(6, 'Description for test order 6'),
(7, 'Description for test order 7'),
(8, 'Description for test order 8'),
(9, 'Description for test order 9'),
(10, 'Description for test order 10'),
(11, 'Przykładowy opis 1'),
(12, 'Przykładowy opis 1');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `email`, `password`) VALUES
(10, 'Test user 1', 'test1@test.pl', '$2y$10$26ZCoinENweMebUa/wAPsOrKZT3SzNJBUx/XApV..CRoOdXSQCsg.'),
(11, 'Test user 2', 'test2@test.pl', '$2y$10$qgrXbbufi62Z85M4s8KTd.mQQkTPdQYBzDV5CkLLse24kOilBwzIi'),
(12, 'Test user 3', 'test3@test.pl', '$2y$10$q.s09RV8M3iv4EHZTKsp.OoOB4yEJtKbisxD2rLrwY6p3Z0EQBpgS'),
(13, 'Test user 4', 'test4@test.pl', '$2y$10$9Mg2nl7TPmNcdTgiWmx6IO9wTMPS4nNz2LeKZMNXVNXy1hhGvlqQi'),
(14, 'Test user 5', 'test5@test.pl', '$2y$10$tDmF9Ycy4z5PYlMiG4g30eDSn8eiHNu4To4TVXpox53K4fZWlnlYm'),
(15, 'Test user 6', 'test6@test.pl', '$2y$10$bOgyziZ6UcpO5od7FMqevuM1Ea7RYXOiGi6aI.GFiuGoBI2LvEtJi'),
(16, 'Test user 7', 'test7@test.pl', '$2y$10$TA0euQfT.5igxLWGO2WHKOcZdWWPU7b/Gwnpue.Yu9bbL/qsTuq86'),
(17, 'Test user 8', 'test8@test.pl', '$2y$10$1YuAsLiL89BSyQ.dhzlkXu3pk1rCSrCDY3xmqdnfqtMFK47OqHmtS'),
(18, 'Test user 9', 'test9@test.pl', '$2y$10$vAfwssehdA/cxwUfTjQ.HulyX8aeZKP1c0fXvEg4KSwMJrkoANH0.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Destinations`
--
ALTER TABLE `Destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_orders`
--
ALTER TABLE `items_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Destinations`
--
ALTER TABLE `Destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `items_orders`
--
ALTER TABLE `items_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Destinations`
--
ALTER TABLE `Destinations`
  ADD CONSTRAINT `Destinations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

--
-- Constraints for table `items_orders`
--
ALTER TABLE `items_orders`
  ADD CONSTRAINT `items_orders_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `Items` (`id`),
  ADD CONSTRAINT `items_orders_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

--
-- Constraints for table `Messages`
--
ALTER TABLE `Messages`
  ADD CONSTRAINT `Messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
