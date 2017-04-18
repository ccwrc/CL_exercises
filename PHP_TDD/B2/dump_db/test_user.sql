-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2017 at 08:34 PM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `email`, `password`) VALUES
(1, 'haslo1@gmail.elo', '$2y$10$TXxNpNBXzwNof3BtyJDVlu4QVZh1R.ez/AO2SxZJ9UN7XpDT9Hffy'),
(2, 'haslo2@gmail.elo', '$2y$10$12mKV3PXjblPIZexH1J2wOQWUAf3yvWxBn1aQKXsVqVQOzWFv.gyO'),
(3, 'haslo3@gmail.elo', '$2y$10$32rWVYHVTolnASe/ey/Sdu6fTbhMDSF56umHuhi8eQ9Z5kL5wuGcW'),
(4, 'haslo4@gmail.elo', '$2y$10$Q7fJoHiEce28ThnBi/SS5.luxsi7anREDoJrjuhAP1RvagjT9Wkzu'),
(5, 'hash@mail.pl', '$2y$10$YcWlL3YuGk9Z8l/A3xkLcuez0fdQlFO4O22cOl3wBWQUsoirM6yRm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
