-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 07:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_space_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `UserID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`) VALUES
(1, 'SHADMAN', 'A HOQUE', 'shad26', 'shadhoque26@outlook.com', '$2y$10$j8wRw0ikUBdP8ko/uOb6eO5Vnk4sEq8ZZRtshe7BFVh1P03wgJtC.'),
(2, 'SHADMAN', 'A HOQUE', 'shad28', 'Shadmanhoq26@outlook.com', '$2y$10$ZlzBN0o3kXbG1GtX386wau2369SpQKGALCyNEbCYRiim50fQgHvtW'),
(3, 'Arshad', 'Hoque', 'test1', 'micheal@gmail.com', '$2y$10$PcYqb0pi5SS/KVD26o9vXeElDIXQ16VZUmMSPaMZn5iAOyPAfv2EC'),
(4, 'w', 'a', 'test26', 'a@a.couk', '$2y$10$X1StVMFCFRzu/Uv4CURuI.K1.P85GlmM3VIitEHALtty26a5WFb6K'),
(5, 'shadman ', 'hoque', 'shad1', 'shad1@gmail.com', '$2y$10$zAq0kKJwKdUVzTIHcgYKwuDGJfma3TZT/ztaRTA5OzxFzd7AJ/QoC');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `Follower_ID` int(11) NOT NULL,
  `Followee_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Information` varchar(1000) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Cover_Image` blob NOT NULL,
  `Platform` varchar(100) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Age_Rating` varchar(50) NOT NULL,
  `Release_Date` date NOT NULL,
  `Screenshot1` blob NOT NULL,
  `Screenshot2` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game_review`
--

CREATE TABLE `game_review` (
  `Review_ID` int(11) NOT NULL,
  `game_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_ID` int(11) NOT NULL,
  `reviews` varchar(1000) NOT NULL,
  `ratings` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_owner`
--

CREATE TABLE `review_owner` (
  `Review_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD KEY `Follower_ID` (`Follower_ID`,`Followee_ID`),
  ADD KEY `Followee_ID` (`Followee_ID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_ID`);

--
-- Indexes for table `game_review`
--
ALTER TABLE `game_review`
  ADD KEY `Review_ID` (`Review_ID`,`game_ID`),
  ADD KEY `game_ID` (`game_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `review_owner`
--
ALTER TABLE `review_owner`
  ADD KEY `Review_ID` (`Review_ID`,`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`Follower_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`Followee_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_review`
--
ALTER TABLE `game_review`
  ADD CONSTRAINT `game_review_ibfk_1` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_review_ibfk_2` FOREIGN KEY (`game_ID`) REFERENCES `games` (`game_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_owner`
--
ALTER TABLE `review_owner`
  ADD CONSTRAINT `review_owner_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_owner_ibfk_2` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
