-- phpMyAdmin SQL Dump
-- version 4.6.5.2deb1+deb.cihar.com~xenial.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2017 at 05:16 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SchoolProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `name`) VALUES
(1, '3b poi 2 edycji'),
(2, '3b na drugiej pozycji po edycji'),
(4, '3b'),
(5, 'pierwsza klasa test po edycji'),
(6, 'klasatest'),
(9, 'nazwa klasy'),
(13, '3b po edycji'),
(14, 'nowa klasa poniedzialkowa'),
(15, 'poniedzialkowa 3c - i edycja nr2');

-- --------------------------------------------------------

--
-- Table structure for table `pupil`
--

CREATE TABLE `pupil` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `classroom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pupil`
--

INSERT INTO `pupil` (`id`, `name`, `age`, `description`, `classroom_id`) VALUES
(1, 'wewqewed', 1111, 'opis ucznia', NULL),
(2, 'nazwa ucznia2', 2, 'opis2', 1),
(3, 'uczen 3', 333, '3 opissss', NULL),
(4, 'uczen enty', 333, 'opis enty', 1),
(5, 'uczen wtorkowy', 2, 'Krótki opis', NULL),
(6, 'Imię i nazwisko ucznia', 22, 'Krótki opis', NULL),
(7, 'Imię i nazwisko ucznia', 8, 'Krótki opis', NULL),
(8, 'Imię i nazwisko ucznia22', 7, 'Krótki opis22', NULL),
(9, 'Imię i nazwisko ucznia22', 72, 'Krótki opis22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pupil_teacher`
--

CREATE TABLE `pupil_teacher` (
  `pupil_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pupil_teacher`
--

INSERT INTO `pupil_teacher` (`pupil_id`, `teacher_id`) VALUES
(1, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `experience`) VALUES
(1, 'wwwww', 111),
(2, 'drugi', 22),
(3, 'trzeci belfer', 3),
(4, 'czwarty', 44),
(5, 'jan kovalski', 23),
(6, 'jan kovalski', 237),
(7, 'Imię i nazwisko', 99),
(8, 'nauczyciel zmiana widoku', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pupil`
--
ALTER TABLE `pupil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C7DBD2B16278D5A8` (`classroom_id`);

--
-- Indexes for table `pupil_teacher`
--
ALTER TABLE `pupil_teacher`
  ADD PRIMARY KEY (`pupil_id`,`teacher_id`),
  ADD KEY `IDX_C1725BDAD2FD11` (`pupil_id`),
  ADD KEY `IDX_C1725BDA41807E1D` (`teacher_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pupil`
--
ALTER TABLE `pupil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `FK_C7DBD2B16278D5A8` FOREIGN KEY (`classroom_id`) REFERENCES `classroom` (`id`);

--
-- Constraints for table `pupil_teacher`
--
ALTER TABLE `pupil_teacher`
  ADD CONSTRAINT `FK_C1725BDA41807E1D` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C1725BDAD2FD11` FOREIGN KEY (`pupil_id`) REFERENCES `pupil` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
