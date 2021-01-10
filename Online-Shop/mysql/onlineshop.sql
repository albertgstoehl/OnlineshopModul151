-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 01:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `benutzer`
--

CREATE TABLE `benutzer` (
  `benutzerID` int(11) NOT NULL,
  `vorname` varchar(30) NOT NULL,
  `nachname` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `benutzername` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `benutzertyp` varchar(30) NOT NULL,
  `passwort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benutzer`
--

INSERT INTO `benutzer` (`benutzerID`, `vorname`, `nachname`, `adresse`, `benutzername`, `email`, `benutzertyp`, `passwort`) VALUES
(2, 'albert', 'gstöhl', 'Winkel 16', 'albert.gstoehl', 'albert.gstoehl@gmail.com', 'admin', '$2y$10$vymOv.ZtZ5OC.cla8YmkTeYXNqjj1cyN9OIsWOraDEJ3l0osMtq96'),
(24, 'Albert', 'Gstöhl', 'Winkel 16', 'a.gstoehl', 'albertgstoehl@outlook.com', 'benutzer', '$2y$10$syVaewJ7Eh0qnhO4av78Ke7880fuB7MW7y27JkPWXHheG4u09yv7.'),
(42, 'asdf', 'asdf', 'asdf', 'asdf', 'asdfljaslfj@gmail.com', 'benutzer', '$2y$10$kdVkDVXPZeNq.NWfvJthuOMZY.a71yxPEHAbEKjx22DqnmS1LENfC');

-- --------------------------------------------------------

--
-- Table structure for table `bestellung`
--

CREATE TABLE `bestellung` (
  `bestellungID` int(11) NOT NULL,
  `kundeID` int(11) NOT NULL,
  `bestellungsDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestellung`
--

INSERT INTO `bestellung` (`bestellungID`, `kundeID`, `bestellungsDatum`) VALUES
(25, 24, '2020-12-18'),
(26, 24, '2020-12-18'),
(27, 24, '2020-12-18'),
(28, 24, '2020-12-18'),
(29, 24, '2020-12-18'),
(30, 24, '2020-12-18'),
(31, 24, '2020-12-18'),
(32, 24, '2020-12-18'),
(33, 24, '2020-12-18'),
(34, 24, '2020-12-18'),
(35, 24, '2020-12-30'),
(36, 24, '2021-01-06'),
(37, 24, '2021-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `bestellung_produkt`
--

CREATE TABLE `bestellung_produkt` (
  `bestellung_produktID` int(11) NOT NULL,
  `produktID` int(11) NOT NULL,
  `anzahlProdukte` int(11) NOT NULL,
  `bestellungsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestellung_produkt`
--

INSERT INTO `bestellung_produkt` (`bestellung_produktID`, `produktID`, `anzahlProdukte`, `bestellungsID`) VALUES
(37, 5, 1, 25),
(38, 6, 1, 25),
(39, 7, 1, 25),
(40, 8, 1, 25),
(41, 5, 8, 26),
(42, 5, 1, 27),
(43, 7, 1, 27),
(44, 8, 1, 27),
(45, 9, 1, 27),
(46, 7, 4, 28),
(47, 8, 3, 28),
(48, 11, 3, 28),
(49, 7, 2, 29),
(50, 8, 2, 29),
(51, 9, 1, 29),
(52, 7, 2, 30),
(53, 8, 2, 30),
(54, 10, 1, 30),
(55, 11, 1, 30),
(56, 6, 4, 31),
(57, 8, 2, 31),
(58, 10, 2, 31),
(59, 12, 1, 31),
(60, 8, 8, 32),
(61, 7, 2, 32),
(62, 5, 4, 32),
(63, 12, 2, 32),
(64, 8, 3, 33),
(65, 12, 1, 33),
(66, 13, 1, 33),
(67, 9, 2, 33),
(68, 6, 3, 34),
(69, 8, 1, 34),
(70, 9, 2, 35),
(71, 7, 3, 35),
(72, 5, 3, 36),
(73, 9, 5, 36),
(74, 5, 1, 37),
(75, 9, 2, 37),
(76, 8, 1, 37),
(77, 7, 1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `produktID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `preis` double NOT NULL,
  `lagerbestand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`produktID`, `name`, `preis`, `lagerbestand`) VALUES
(5, 'Stift', 1.25, 12364),
(6, 'Socken', 23.45, 333),
(7, 'Schuhe', 3.5, 2324),
(8, 'Waschmaschine', 333, 12),
(9, 'Zigaretten', 8.5, 350),
(10, 'Taschenlampe', 20, 50),
(11, 'Lautsprecher', 150, 10),
(12, 'Monitor', 400, 44),
(13, 'Plattenspieler', 300, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`benutzerID`);

--
-- Indexes for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`bestellungID`),
  ADD KEY `kundeID` (`kundeID`);

--
-- Indexes for table `bestellung_produkt`
--
ALTER TABLE `bestellung_produkt`
  ADD PRIMARY KEY (`bestellung_produktID`),
  ADD KEY `produktID` (`produktID`),
  ADD KEY `bestellungID` (`bestellungsID`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`produktID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `benutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `bestellungID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `bestellung_produkt`
--
ALTER TABLE `bestellung_produkt`
  MODIFY `bestellung_produktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `kundeID` FOREIGN KEY (`kundeID`) REFERENCES `benutzer` (`benutzerID`);

--
-- Constraints for table `bestellung_produkt`
--
ALTER TABLE `bestellung_produkt`
  ADD CONSTRAINT `bestellungID` FOREIGN KEY (`bestellungsID`) REFERENCES `bestellung` (`bestellungID`),
  ADD CONSTRAINT `produktID` FOREIGN KEY (`produktID`) REFERENCES `produkt` (`produktID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
