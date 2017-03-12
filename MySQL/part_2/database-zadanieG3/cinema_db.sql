-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2017 at 02:52 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cinemas`
--

CREATE TABLE `Cinemas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `adress` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Cinemas`
--

INSERT INTO `Cinemas` (`id`, `name`, `adress`) VALUES
(1, 'Luna', 'ul. Marszałkowska 28'),
(2, 'Silver Screen Puławska', 'Centrum Europlex - ul. Puławska 17'),
(3, 'Iluzjon Filmoteki Narodowej', 'ul. Narbutta 50a'),
(4, 'Etnokino', 'Ul. Kredytowa 1, Warszawa'),
(5, 'Multikino Złote Tarasy', 'ul. Złota 59'),
(6, 'Kinoteka', 'pl. Defilad 1'),
(7, 'Cinema City Promenada', 'ul. Ostrobramska 75C'),
(8, 'Praha', 'ul. Jagielloñska 26'),
(9, 'Alchemia', 'ul. Jezuicka 4'),
(10, 'Muranów', 'ul. Zamenhofa 1'),
(11, 'Femina', 'al. Solidarności 115');

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`id`, `name`, `description`, `rating`) VALUES
(1, 'Zbuntowana (2015)', 'Beatrice Prior konfrontuje się z wewnętrznymi demonami i kontynuuje walkę przeciwko ogromnemu sojuszowi, który może spowodować rozpad społeczeństwa.', 7),
(2, 'Seks, miłość i terapia (2014)', 'Lambert, seksoholik starający się zerwać z nałogiem, zatrudnia wiecznie niezaspokojoną nimfomankę.', 5),
(3, 'Ex Machina (2015)', 'Po wygraniu konkursu programista jednej z największych firm internetowych zostaje zaproszony do posiadłości swojego szefa. Na miejsce okazuje się, że jest częścią eksperymentu. ', 8),
(4, 'Sils Maria (2014)', 'Wybitna aktorka podczas kilku dni spędzonych w Alpach ze swoją asystentką na nowo odkrywa siebie. ', 7),
(5, 'Chappie (2015)', 'Dwóch gangsterów kradnie policyjnego androida, by wykorzystać go do swoich celów. ', 8),
(6, 'Kopciuszek (2015)', 'Po śmierci ojca zła macocha Elli zamienia dziewczynę w służącą. Los Kopciuszka odmieni dopiero Dobra Wróżka.', 8),
(7, 'Sąsiady (2014)', 'Ksiądz odwiedza po kolędzie kamienicę, odkrywając tajemnice jej lokatorów. ', 3),
(8, 'Złota klatka (2013)', 'Sara, nastolatka z Gwatemali, wyrusza w niebezpieczną podróż do Los Angeles w poszukiwaniu lepszego życia.', 9),
(9, 'Body/Ciało (2015)', 'Cyniczny prokurator i jego cierpiąca na anoreksję córka próbują odnaleźć się po tragicznej śmierci najbliższej osoby.', 6),
(10, 'Fru! (2014)', 'Ptaszek, który nigdy wcześniej nie wychylił dzioba poza rodzinne gniazdo, zostaje przez pomyłkę przewodnikiem stada.', 5),
(11, 'Disco Polo (2015)', 'Młodzi muzycy z prowincji w błyskawiczny sposób zdobywają szczyty list przebojów.', 2),
(12, 'Asteriks i Obeliks: Osiedle Bogów (2014)', 'Juliusz Cezar decyduje się na budowę dzielnicy mieszkaniowej dla właścicieli rzymskich i nazywa ją Osiedlem Bogów.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ticket_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_type` varchar(155) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ticket_id`, `payment_date`, `payment_type`) VALUES
(1, '2017-03-10', 'credit_card'),
(2, '2017-03-10', 'cash'),
(3, '2017-03-10', 'transfer'),
(5, '2017-03-10', 'credit_card'),
(6, '2017-03-10', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `showing`
--

CREATE TABLE `showing` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `showing`
--

INSERT INTO `showing` (`id`, `name`) VALUES
(1, 'pokaz1'),
(2, 'pokaz2'),
(3, 'pokaz3'),
(4, 'pokaz4');

-- --------------------------------------------------------

--
-- Table structure for table `show_cm`
--

CREATE TABLE `show_cm` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `show_cm`
--

INSERT INTO `show_cm` (`id`, `cinema_id`, `movie_id`) VALUES
(1, 1, 2),
(2, 2, 4),
(3, 5, 11),
(4, 2, 5),
(5, 4, 10),
(6, 1, 10),
(7, 4, 10),
(8, 11, 10),
(9, 1, 10),
(10, 3, 10),
(11, 5, 10),
(12, 11, 1),
(13, 11, 2),
(14, 11, 3),
(15, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Tickets`
--

CREATE TABLE `Tickets` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `showing_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `Tickets`
--

INSERT INTO `Tickets` (`id`, `quantity`, `price`, `showing_id`) VALUES
(1, 11, '10.00', NULL),
(2, 22, '10.00', NULL),
(3, 33, '10.00', NULL),
(4, 44, '10.00', NULL),
(5, 55, '10.00', NULL),
(6, 900, '10.00', NULL),
(7, 1, '0.00', 1),
(8, 1, '10.00', 2),
(9, 1, '10.00', 4),
(10, 1, '10.00', 3),
(11, 1, '10.00', 3),
(12, 1, '10.00', 1),
(13, 1, '10.00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cinemas`
--
ALTER TABLE `Cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `showing`
--
ALTER TABLE `showing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_cm`
--
ALTER TABLE `show_cm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinema_id` (`cinema_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `Tickets`
--
ALTER TABLE `Tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `showing_id` (`showing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cinemas`
--
ALTER TABLE `Cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `showing`
--
ALTER TABLE `showing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `show_cm`
--
ALTER TABLE `show_cm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Tickets`
--
ALTER TABLE `Tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `Tickets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `show_cm`
--
ALTER TABLE `show_cm`
  ADD CONSTRAINT `show_cm_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `Cinemas` (`id`),
  ADD CONSTRAINT `show_cm_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `Movies` (`id`);

--
-- Constraints for table `Tickets`
--
ALTER TABLE `Tickets`
  ADD CONSTRAINT `Tickets_ibfk_1` FOREIGN KEY (`showing_id`) REFERENCES `showing` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
