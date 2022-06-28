-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 03:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin1234'),
(2, 'reydan', 'reydan12345');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL,
  `members` varchar(50) NOT NULL,
  `tournamentID` int(11) DEFAULT NULL,
  `leader` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `teamName`, `members`, `tournamentID`, `leader`) VALUES
(1, 'Team 5', 'Gamboa, Yoji\r\nPantia, Andrei James\r\nSitjar, Ronil ', 13, 'Belen, Reydan John A.');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `tournamentID` int(11) NOT NULL,
  `toutnamentPic` varchar(100) NOT NULL,
  `tournamentName` varchar(100) NOT NULL,
  `sportsType` varchar(50) NOT NULL,
  `tournamentDate` date NOT NULL,
  `tournamentTime` time NOT NULL,
  `eventHandler` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tournamentID`, `toutnamentPic`, `tournamentName`, `sportsType`, `tournamentDate`, `tournamentTime`, `eventHandler`) VALUES
(10, 'chess-playing-hand.jpeg', 'Laban ng mga Matatalino', 'Chess', '2022-07-01', '06:38:00', 'Sitjar, Ronil Eman'),
(11, 'basketball.jpeg', 'Liga ng Unibersidad', 'Basketball', '2022-06-03', '06:58:00', 'Mr.Pantia'),
(12, 'chess-playing-hand.jpeg', 'TUP Chess Tournament', 'Chess', '2022-07-07', '10:00:00', 'Pantia, Andrei James'),
(13, 'badminton.jpg', 'Badminton Tournament', 'Badminton', '2022-07-06', '09:26:00', 'Belen, Reydan John A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tournamentID` (`tournamentID`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tournamentID`),
  ADD UNIQUE KEY `unique_tournamentName` (`tournamentName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `tournamentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`tournamentID`) REFERENCES `tournament` (`tournamentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
