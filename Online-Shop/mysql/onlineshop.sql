-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 01:33 PM
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
  `email` varchar(40) NOT NULL,
  `benutzertyp` varchar(30) NOT NULL,
  `passwort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benutzer`
--

INSERT INTO `benutzer` (`benutzerID`, `vorname`, `nachname`, `adresse`, `benutzername`, `email`, `benutzertyp`, `passwort`) VALUES
(24, 'Albert', 'Gstöhl', 'Winkel 16', 'admin', 'agstoehl@kantisargans.ch', 'admin', '$2y$10$vioSQ7usY1cV5St2DpvPoOoK5q2D.9P.cgdbNW8O63oEI3EuWgtwe'),
(48, 'Albert', 'Gstöhl', 'Winkel 16', 'benutzer', 'lisa.gstoehl@bluewin.ch', 'benutzer', '$2y$10$Grxdaw935NsPOEB1lhzXBucB7Dh4n7evneYN7YBf07aJPrJ9f.sKG'),
(49, 'Lukas ', 'Fehr', 'Kantonsschule Sargans', 'admin.fehr', 'example@kantisargans.ch', 'admin', '$2y$10$zbJERbmBqntnhPm/Qg3xo.fM0ZBfPPn.3nfR.pdpKrjt0Vt4/0ODm'),
(50, 'Lukas', 'Fehr', 'Kantonsschule Sargans', 'benutzer.fehr', 'lukas.fehr@kantisargans.ch', 'benutzer', '$2y$10$hsRI1Jtqkv/8pOVLv7olHuVzdFsoxrm84oljNQ22JwlY06DHAGGb6');

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
(37, 24, '2021-01-06'),
(38, 24, '2021-01-10'),
(39, 24, '2021-01-10'),
(40, 24, '2021-01-11'),
(41, 24, '2021-01-11'),
(42, 24, '2021-01-11'),
(43, 24, '2021-01-11'),
(44, 24, '2021-01-11'),
(45, 24, '2021-01-11'),
(46, 24, '2021-01-11'),
(47, 24, '2021-01-11'),
(48, 24, '2021-01-11'),
(49, 24, '2021-01-11'),
(50, 24, '2021-01-11'),
(51, 24, '2021-01-11'),
(52, 24, '2021-01-11'),
(61, 24, '2021-01-11'),
(62, 24, '2021-01-11'),
(63, 24, '2021-01-11'),
(64, 24, '2021-01-11'),
(65, 24, '2021-01-11'),
(66, 24, '2021-01-11'),
(67, 24, '2021-01-11'),
(68, 24, '2021-01-11'),
(69, 24, '2021-01-11'),
(70, 24, '2021-01-11'),
(71, 24, '2021-01-11'),
(72, 24, '2021-01-11'),
(73, 24, '2021-01-11'),
(74, 24, '2021-01-11'),
(75, 24, '2021-01-11'),
(76, 24, '2021-01-11'),
(77, 24, '2021-01-11'),
(78, 24, '2021-01-11'),
(79, 24, '2021-01-11'),
(80, 24, '2021-01-11'),
(81, 24, '2021-01-11'),
(82, 24, '2021-01-11'),
(83, 24, '2021-01-11'),
(84, 24, '2021-01-11'),
(95, 24, '2021-01-11'),
(100, 24, '2021-01-13'),
(101, 24, '2021-01-13'),
(102, 24, '2021-01-13'),
(103, 24, '2021-01-13'),
(104, 24, '2021-01-13'),
(105, 24, '2021-01-13');

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
(77, 7, 1, 37),
(78, 5, 2, 38),
(79, 6, 2, 38),
(80, 7, 2, 38),
(81, 9, 2, 38),
(82, 5, 2, 39),
(83, 6, 2, 39),
(84, 7, 2, 39),
(85, 5, 2, 40),
(86, 6, 2, 40),
(87, 9, 2, 40),
(88, 10, 2, 40),
(89, 11, 1, 40),
(90, 6, 3, 41),
(91, 5, 2, 42),
(92, 6, 2, 42),
(93, 6, 2, 43),
(94, 7, 2, 43),
(95, 8, 2, 43),
(96, 10, 3, 43),
(97, 5, 2, 44),
(98, 6, 2, 44),
(99, 7, 2, 44),
(100, 5, 2, 45),
(101, 6, 2, 45),
(102, 7, 2, 45),
(103, 5, 2, 46),
(104, 6, 2, 46),
(105, 7, 2, 46),
(106, 5, 2, 47),
(107, 6, 1, 47),
(108, 8, 1, 47),
(109, 5, 2, 48),
(110, 6, 2, 48),
(111, 7, 2, 48),
(112, 8, 1, 48),
(113, 5, 2, 49),
(114, 6, 1, 49),
(115, 5, 4, 50),
(116, 6, 4, 50),
(117, 7, 2, 50),
(118, 8, 2, 50),
(119, 7, 2, 51),
(120, 8, 2, 51),
(121, 9, 2, 51),
(122, 10, 1, 51),
(123, 5, 2, 52),
(124, 6, 2, 52),
(125, 7, 1, 52),
(126, 8, 1, 52),
(161, 5, 2, 61),
(162, 6, 2, 61),
(163, 5, 2, 62),
(164, 6, 2, 62),
(165, 7, 1, 62),
(166, 6, 2, 63),
(167, 7, 1, 63),
(168, 8, 1, 63),
(169, 5, 2, 64),
(170, 6, 1, 64),
(171, 5, 2, 65),
(172, 6, 2, 65),
(173, 7, 2, 65),
(174, 8, 2, 65),
(175, 9, 2, 65),
(176, 13, 3, 69),
(177, 13, 3, 70),
(178, 13, 4, 71),
(179, 7, 2, 72),
(180, 8, 1, 72),
(181, 9, 2, 72),
(182, 13, 5, 73),
(183, 11, 2, 74),
(184, 12, 1, 74),
(185, 8, 6, 75),
(186, 13, 4, 76),
(187, 13, 3, 77),
(188, 13, 4, 78),
(189, 13, 4, 79),
(190, 11, 1, 84),
(191, 8, 1, 84),
(214, 13, 4, 95),
(215, 10, 3, 95),
(216, 8, 2, 95),
(232, 5, 2, 100),
(233, 6, 1, 100),
(234, 5, 2, 101),
(235, 6, 2, 101),
(236, 7, 1, 101),
(237, 5, 2, 102),
(238, 6, 1, 102),
(239, 7, 1, 102),
(240, 5, 2, 103),
(241, 6, 1, 103),
(242, 7, 1, 103),
(243, 8, 1, 103),
(244, 9, 1, 103),
(245, 5, 2, 104),
(246, 6, 1, 104),
(247, 7, 1, 104),
(248, 8, 1, 104),
(249, 9, 1, 104),
(250, 5, 1, 105),
(251, 6, 1, 105),
(252, 7, 1, 105),
(253, 8, 2, 105);

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
(5, 'Stift', 1.25, 12344),
(6, 'Socken', 23.45, 317),
(7, 'Schuhe', 3.5, 2314),
(8, 'Waschmaschine', 333, 2),
(9, 'Zigaretten', 8.5, 348),
(10, 'Taschenlampe', 20, 47),
(11, 'Lautsprecher', 150, 10),
(12, 'Monitor', 400, 44),
(13, 'Plattenspieler', 300, 6);

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
  MODIFY `benutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `bestellungID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `bestellung_produkt`
--
ALTER TABLE `bestellung_produkt`
  MODIFY `bestellung_produktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `kundeID` FOREIGN KEY (`kundeID`) REFERENCES `benutzer` (`benutzerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bestellung_produkt`
--
ALTER TABLE `bestellung_produkt`
  ADD CONSTRAINT `bestellungID` FOREIGN KEY (`bestellungsID`) REFERENCES `bestellung` (`bestellungID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produktID` FOREIGN KEY (`produktID`) REFERENCES `produkt` (`produktID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
