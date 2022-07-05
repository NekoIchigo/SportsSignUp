-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 01:43 PM
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
(2, 'reydan', 'reydan12345'),
(3, 'yoji123456', 'yoji12345');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `matchId` int(11) NOT NULL,
  `teamOne` int(11) DEFAULT NULL,
  `teamTwo` int(11) DEFAULT NULL,
  `mResult` int(1) DEFAULT NULL,
  `tournamentID` int(11) DEFAULT NULL,
  `branch` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`matchId`, `teamOne`, `teamTwo`, `mResult`, `tournamentID`, `branch`) VALUES
(9, 77, 79, 0, 25, 1),
(10, 78, 80, 0, 25, 1),
(11, 73, 74, 1, 24, 1),
(12, 75, 76, 1, 24, 1),
(13, 69, 72, 1, 23, 1),
(14, 70, 71, 1, 23, 1),
(15, 65, 67, 1, 22, 1),
(16, 66, 68, 2, 22, 1),
(25, 69, 70, 1, 23, 3),
(30, 65, 68, 2, 22, 3),
(35, 73, 75, 1, 24, 3),
(39, 102, 97, 2, 29, 1),
(40, 99, 100, 1, 29, 1),
(41, 103, 101, 2, 29, 1),
(42, 98, 104, 2, 29, 1),
(53, 102, 99, 1, 29, 2),
(54, 101, 104, 1, 29, 2),
(56, 108, 110, 1, 30, 1),
(57, 111, 106, 2, 30, 1),
(58, 107, 112, 1, 30, 1),
(59, 105, 109, 2, 30, 1),
(60, 108, 106, 1, 30, 2),
(61, 107, 109, 1, 30, 2),
(62, 108, 107, 2, 30, 3),
(64, 102, 101, 1, 29, 3),
(70, 131, 128, 1, 32, 1),
(71, 126, 129, 1, 32, 1),
(72, 125, 127, 1, 32, 1),
(73, 130, 132, 1, 32, 1),
(74, 131, 126, 1, 32, 2),
(75, 125, 130, 1, 32, 2),
(76, 131, 125, 1, 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `tournamentID` int(11) DEFAULT NULL,
  `teamName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `tournamentID`, `teamName`) VALUES
(1, 1, 'N/A'),
(65, 22, 'Ninja Turtles'),
(66, 22, 'Team Rocket'),
(67, 22, 'Avengers'),
(68, 22, 'SKT'),
(69, 23, 'COS Basketbball Team'),
(70, 23, 'CLA Basketbball Team'),
(71, 23, 'CIE Basketbball Team'),
(72, 23, 'CAFA Basketbball Team'),
(73, 24, 'Freshmen'),
(74, 24, 'Sophomore'),
(75, 24, 'Junior'),
(76, 24, 'Senior'),
(77, 25, 'The Wizards'),
(78, 25, 'Blue Turtles'),
(79, 25, 'The Bookworms'),
(80, 25, 'The Amazing Nerds'),
(97, 29, 'Reydan'),
(98, 29, 'Yoji'),
(99, 29, 'Andrei'),
(100, 29, 'Eman'),
(101, 29, 'Shaun'),
(102, 29, 'Mario'),
(103, 29, 'Luigi'),
(104, 29, 'Joe'),
(105, 30, 'COS'),
(106, 30, 'CLA'),
(107, 30, 'CIT'),
(108, 30, 'CIE'),
(109, 30, 'COE'),
(110, 30, 'CAFA'),
(111, 30, 'CAFA 3'),
(112, 30, 'COS 3'),
(125, 32, 'COS 1'),
(126, 32, 'CLA 1'),
(127, 32, 'COE 1'),
(128, 32, 'CIE 1'),
(129, 32, 'CIT 1'),
(130, 32, 'CAFA 1'),
(131, 32, 'CIT 2'),
(132, 32, 'COS 2');

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
  `eventHandler` varchar(50) NOT NULL,
  `no_participants` int(1) DEFAULT NULL,
  `tournamentStatus` int(1) DEFAULT NULL,
  `winner` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tournamentID`, `toutnamentPic`, `tournamentName`, `sportsType`, `tournamentDate`, `tournamentTime`, `eventHandler`, `no_participants`, `tournamentStatus`, `winner`) VALUES
(1, '1', '1', '1', '0000-00-00', '00:00:01', '1', 1, 1, NULL),
(22, 'ML.jpg', 'Mobile Legends Tournament', 'Mobile Game', '2022-07-28', '10:00:00', 'Mr. Pantia', 4, 1, 'SKT'),
(23, 'basketball.jpeg', 'Basketball Tournament', 'Basketball', '2022-07-21', '10:00:00', 'Mr. Gamboa', 4, 0, 'COS Basketbball Team'),
(24, 'volleyball.jpg', 'Volleyball Tournament', 'Volleyball', '2022-07-25', '12:00:00', 'Mr. Eman', 4, 0, 'Freshmen'),
(25, 'chess-playing-hand.jpeg', 'Chess Tournament', 'Chess', '2022-07-29', '15:00:00', 'Mr. De Vera', 4, 0, NULL),
(29, 'badminton.jpg', 'Badminton Tournament', 'Badminton', '2022-07-30', '06:00:00', 'Mr. Yoji', 8, 0, 'Mario'),
(30, 'wildrift.png', 'Wild Rift Tournament', 'Mobile Game', '2022-07-29', '09:00:00', 'Mr. Reydan', 8, 1, 'CIT'),
(32, 'Call-of-Duty-Mobile.jpg', 'COD Mobile Tournament', 'Mobile Game', '2022-07-27', '22:00:00', 'Yoji Gamboa', 8, 1, 'CIT 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`matchId`),
  ADD KEY `tournamentID` (`tournamentID`),
  ADD KEY `teamOne` (`teamOne`),
  ADD KEY `teamTwo` (`teamTwo`);

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
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `matchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `tournamentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`tournamentID`) REFERENCES `tournament` (`tournamentID`),
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`teamOne`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `matches_ibfk_3` FOREIGN KEY (`teamTwo`) REFERENCES `teams` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`tournamentID`) REFERENCES `tournament` (`tournamentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
