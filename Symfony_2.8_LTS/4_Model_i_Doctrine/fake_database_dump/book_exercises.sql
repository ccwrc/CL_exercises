-- phpMyAdmin SQL Dump
-- version 4.6.5.2deb1+deb.cihar.com~xenial.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2017 at 03:06 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_exercises`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `nameSurname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `nameSurname`, `description`) VALUES
(1, 'imię i nazwisko autora', 'opis autora'),
(2, 'name 2', 'opis 2'),
(3, 'name 3', 'opis 3'),
(4, 'nameAutor 4', 'opisAutor 4'),
(5, 'nameAutor 5', 'opisAutor 5'),
(6, 'imie autora środa', 'opis autora środa'),
(7, 'imie autora środa', 'opis autora środa'),
(8, 'imie autora środa', 'opis autora środa'),
(9, 'czwartekautor', 'opisczwartekautor'),
(10, '', ''),
(11, '', ''),
(12, 'domyślne imię i nazwisko', 'opis');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` double NOT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `description`, `rating`, `author_id`) VALUES
(2, 'tytuł książki', 'opis książki', 22, NULL),
(3, 'tytuł książki2', 'opis książki2', 221, NULL),
(4, '4 ksiazka', '4 opis książki', 4, NULL),
(5, '5t', 'o5', 5, NULL),
(6, '5t', 'o5', 5, NULL),
(7, 'tytuł książki', 'opis książki', 22, 3),
(8, 'tytuł książki', 'opis książki', 9, NULL),
(9, 'tytuł książki', 'opis książki', 3, 5),
(10, 'tytuł książki', 'opis książki', 11, 5),
(12, 'tytuł książki', 'opis książki', 2, 5),
(13, 'tytuł książki', 'opis książki', 2, 5),
(14, 'tytuł książki', 'opis książki', 22, 2),
(15, 'tytuł książki', 'opis książki', 999, 5),
(16, 'aa', 'aaaopius', 33, 2),
(17, 'aa', 'aaaopius', 33, 2),
(18, 'aa', 'aaaopius', 33, 2),
(19, 'aa', 'aaaopius', 33, 2),
(20, 'aa', 'aaaopius', 33, 2),
(21, 'tytuł książki', 'opis książki', 444, 3),
(22, 'tytuł książkiczwartek', 'opis książkiczwartek', 2, 9),
(23, 'tytuł', 'opis książki', 2, 2),
(24, 'ww', 'ww', 1, 3),
(25, '', 'ww', 1, 3),
(26, '', 'opis książki', 22, 2),
(27, '', 'opis książki', 7, 2),
(28, 'tytuł książki', 'opis książki', 0, 2),
(29, 'tytuł książki', 'opis książki', 1111, 2),
(30, 'tytuł książki', 'opis książki', 11, 2),
(31, '', 'opis książki', 11, 3),
(32, 'tytuł książki', 'opis książki', 232, 3),
(33, 'tytuł książki', 'opis książki', 0, 3),
(34, 'tytuł książki', 'opis książki', 1111, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CBE5A331F675F31B` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK_CBE5A331F675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
