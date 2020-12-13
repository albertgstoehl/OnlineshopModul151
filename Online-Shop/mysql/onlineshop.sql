-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 11:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `passwort` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benutzer`
--

INSERT INTO `benutzer` (`benutzerID`, `vorname`, `nachname`, `adresse`, `benutzername`, `email`, `benutzertyp`, `passwort`) VALUES
(2, 'albert', 'gstöhl', 'Winkel 16', 'albert.gstoehl', 'albert.gstoehl@gmail.com', 'admin', 'asdf'),
(24, 'Albert', 'Gstöhl', 'alsdfjljfla', 'a.gstoehl', 'albertgstoehl@outlook.com', 'benutzer', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `bestellung`
--

CREATE TABLE `bestellung` (
  `bestellungs-ID` int(11) NOT NULL,
  `kunde-ID` int(11) NOT NULL,
  `bestellungsDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bestellung_produkte`
--

CREATE TABLE `bestellung_produkte` (
  `id` int(11) NOT NULL,
  `produkt-ID` int(11) NOT NULL,
  `bestellungs-ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produkte`
--

CREATE TABLE `produkte` (
  `produktID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `preis` double NOT NULL,
  `lagerbestand` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkte`
--

INSERT INTO `produkte` (`produktID`, `name`, `preis`, `lagerbestand`) VALUES
(2, 'Albert', 999999999, 1);

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
  ADD PRIMARY KEY (`bestellungs-ID`),
  ADD KEY `kunde-ID` (`kunde-ID`);

--
-- Indexes for table `bestellung_produkte`
--
ALTER TABLE `bestellung_produkte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bestellungs-ID` (`bestellungs-ID`),
  ADD KEY `produkt-ID` (`produkt-ID`);

--
-- Indexes for table `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`produktID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `benutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `bestellungs-ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bestellung_produkte`
--
ALTER TABLE `bestellung_produkte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produkte`
--
ALTER TABLE `produkte`
  MODIFY `produktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `kunde-ID` FOREIGN KEY (`kunde-ID`) REFERENCES `benutzer` (`benutzerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bestellung_produkte`
--
ALTER TABLE `bestellung_produkte`
  ADD CONSTRAINT `bestellungs-ID` FOREIGN KEY (`bestellungs-ID`) REFERENCES `bestellung` (`bestellungs-ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `produkt-ID` FOREIGN KEY (`produkt-ID`) REFERENCES `produkte` (`produktID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
