-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 07:51 AM
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
  `tournamentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`matchId`, `teamOne`, `teamTwo`, `mResult`, `tournamentID`) VALUES
(7, 81, 84, 0, 26),
(8, 82, 83, 0, 26),
(9, 77, 79, 0, 25),
(10, 78, 80, 0, 25),
(11, 73, 74, 0, 24),
(12, 75, 76, 0, 24),
(13, 69, 72, 0, 23),
(14, 70, 71, 0, 23),
(15, 65, 67, 0, 22),
(16, 66, 68, 0, 22),
(17, 57, 60, 0, 21),
(18, 58, 64, 0, 21),
(19, 61, 59, 0, 21),
(20, 62, 63, 0, 21),
(21, 88, 89, 0, 27),
(22, 91, 87, 0, 27),
(23, 85, 86, 0, 27),
(24, 92, 90, 0, 27);

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
(57, 21, 'COS'),
(58, 21, 'CLA 2'),
(59, 21, 'CIT'),
(60, 21, 'COE'),
(61, 21, 'CAFA'),
(62, 21, 'CIE'),
(63, 21, 'CLA'),
(64, 21, 'COS 2'),
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
(81, 26, 'COS Team1'),
(82, 26, 'COS Team2'),
(83, 26, 'COS Team3'),
(84, 26, 'COS Team4'),
(85, 27, 'Eman'),
(86, 27, 'Ronil'),
(87, 27, 'Reydan'),
(88, 27, 'John'),
(89, 27, 'Andrei'),
(90, 27, 'Yoji'),
(91, 27, 'Shaun'),
(92, 27, 'James');

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
  `tournamentStatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tournamentID`, `toutnamentPic`, `tournamentName`, `sportsType`, `tournamentDate`, `tournamentTime`, `eventHandler`, `no_participants`, `tournamentStatus`) VALUES
(21, 'wildrift.jpg', 'Wild Rift Tournament', 'Mobile Game', '2022-07-30', '17:00:00', 'Mr. Reydan', 8, 2),
(22, 'ML.jpg', 'Mobile Legends Tournament', 'Mobile Game', '2022-07-28', '10:00:00', 'Mr. Pantia', 4, 0),
(23, 'basketball.jpeg', 'Basketball Tournament', 'Basketball', '2022-07-21', '10:00:00', 'Mr. Gamboa', 4, 0),
(24, 'volleyball.jpg', 'Volleyball Tournament', 'Volleyball', '2022-07-25', '12:00:00', 'Mr. Eman', 4, 0),
(25, 'chess-playing-hand.jpeg', 'Chess Tournament', 'Chess', '2022-07-29', '15:00:00', 'Mr. De Vera', 4, 0),
(26, 'Call-of-Duty-Mobile.jpg', 'COD Mobile Tournament', 'Mobile Game', '2022-07-20', '01:00:00', 'Mr. Belen', 4, 0),
(27, 'table-tennis.jpg', 'Table Tennis Tournament', 'Table Tennis', '2022-08-05', '09:00:00', 'Mr. Sitjar', 8, 0);

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
  MODIFY `matchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `tournamentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
