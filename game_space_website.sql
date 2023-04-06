-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 04:06 AM
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
  `Password` varchar(255) NOT NULL,
  `Game1` int(11) NOT NULL,
  `Game2` int(11) NOT NULL,
  `Game3` int(11) NOT NULL,
  `Game4` int(11) NOT NULL,
  `Game5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Game1`, `Game2`, `Game3`, `Game4`, `Game5`) VALUES
(1, 'SHADMAN', 'A HOQUE', 'shad26', 'shadhoque26@outlook.com', '$2y$10$j8wRw0ikUBdP8ko/uOb6eO5Vnk4sEq8ZZRtshe7BFVh1P03wgJtC.', 0, 0, 0, 0, 0),
(2, 'SHADMAN', 'A HOQUE', 'shad28', 'Shadmanhoq26@outlook.com', '$2y$10$ZlzBN0o3kXbG1GtX386wau2369SpQKGALCyNEbCYRiim50fQgHvtW', 0, 0, 0, 0, 0),
(3, 'Arshad', 'Hoque', 'test1', 'micheal@gmail.com', '$2y$10$PcYqb0pi5SS/KVD26o9vXeElDIXQ16VZUmMSPaMZn5iAOyPAfv2EC', 0, 0, 0, 0, 0),
(4, 'w', 'a', 'test26', 'a@a.couk', '$2y$10$X1StVMFCFRzu/Uv4CURuI.K1.P85GlmM3VIitEHALtty26a5WFb6K', 0, 0, 0, 0, 0),
(5, 'shadman ', 'hoque', 'shad1', 'shad1@gmail.com', '$2y$10$zAq0kKJwKdUVzTIHcgYKwuDGJfma3TZT/ztaRTA5OzxFzd7AJ/QoC', 0, 0, 0, 0, 0),
(6, '12', '1', '1', '2@2.com', '$2y$10$6.myolO2DnulV5Bican.W.0lD6sDbOpfykL5s.ff3tTFdRkJRBbqO', 0, 0, 0, 0, 0),
(7, 'Shadman', 'Hoque', 'test2002', 'shadh26@outlook.com', '$2y$10$fTMTMsNIanADigoON.jX2uHkVo0dzZAScYQ/cs6CbMeBWtkQnaVsO', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `User_ID` int(11) NOT NULL,
  `Review_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Cover_Image` varchar(100) NOT NULL,
  `Platform` varchar(100) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Age_Rating` varchar(50) NOT NULL,
  `Release_Date` date NOT NULL,
  `Screenshot1` varchar(100) NOT NULL,
  `Purchase_Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_ID`, `Name`, `Information`, `Genre`, `Cover_Image`, `Platform`, `Publisher`, `Price`, `Age_Rating`, `Release_Date`, `Screenshot1`, `Purchase_Link`) VALUES
(1, 'Red Dead Redemption 2', 'The story is set in a fictionalized representation of the United States in 1899 and follows the exploits of outlaw Arthur Morgan, a member of the Van der Linde gang, who must deal with the decline of the Wild West whilst attempting to survive against government forces, rival gangs, and other adversaries.', 'Adventure/RPG', 'reddead2image.jpg', 'Windows/Xbox One/PlayStation 4 ', 'Rockstar Games', '£30.00', 'PEGI 18', '2018-10-26', '', ''),
(2, 'EA SPORTS FIFA 23', 'FIFA 23 is a football video game published by Electronic Arts. It is the 29th and final instalment in the FIFA series that is developed by EA Sports, and the final instalment under the FIFA banner, and released worldwide on 30 September 2022 for Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One and Xbox Series X/S.', 'Sports', 'fifaimage.jpg', 'Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One and Xbox Series X/S', 'EA Electronics', '£25.99', 'PEGI 3', '2022-09-27', 'fifaimage.jpg', 'https://www.cdkeys.com/fifa-23-pc-en-origin'),
(3, 'Super Mario Odyssey', 'Super Mario Odyssey[b] is a 2017 platform game developed and published by Nintendo for the Nintendo Switch. An entry in the Super Mario series, it follows Mario and his new ally Cappy—a sentient hat that allows Mario to control other characters and objects—as they journey across various kingdoms to save Princess Peach from his nemesis Bowser\'s plans of forced marriage. In contrast to the linear gameplay of prior entries, the game returns to the primarily open-ended, 3D platform gameplay featured in Super Mario 64 and Super Mario Sunshine.', 'Adventure', '', 'Nintendo Switch', 'Nintendo', '£36.99', 'PEGI 3', '2017-10-27', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `game_review`
--

CREATE TABLE `game_review` (
  `Review_ID` int(11) NOT NULL,
  `game_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_review`
--

INSERT INTO `game_review` (`Review_ID`, `game_ID`) VALUES
(5, 2),
(6, 1),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `User_ID` int(11) NOT NULL,
  `Review_ID` int(11) NOT NULL
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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Review_ID`, `reviews`, `ratings`, `likes`, `title`) VALUES
(5, 'This game is too repetitive', 8, 0, ''),
(6, 'greatest game of all time', 9, 0, ''),
(7, 'OK', 8, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `review_owner`
--

CREATE TABLE `review_owner` (
  `Review_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_owner`
--

INSERT INTO `review_owner` (`Review_ID`, `User_ID`) VALUES
(5, 4),
(6, 4),
(7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `top5_games`
--

CREATE TABLE `top5_games` (
  `User_ID` int(11) NOT NULL,
  `game_ID` int(11) NOT NULL
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
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD KEY `User_ID` (`User_ID`,`Review_ID`),
  ADD KEY `Review_ID` (`Review_ID`);

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `User_ID` (`User_ID`,`Review_ID`),
  ADD KEY `Review_ID` (`Review_ID`);

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
-- Indexes for table `top5_games`
--
ALTER TABLE `top5_games`
  ADD KEY `User_ID` (`User_ID`,`game_ID`),
  ADD KEY `game_ID` (`game_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD CONSTRAINT `dislikes_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dislikes_ibfk_2` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_owner`
--
ALTER TABLE `review_owner`
  ADD CONSTRAINT `review_owner_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_owner_ibfk_2` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `top5_games`
--
ALTER TABLE `top5_games`
  ADD CONSTRAINT `top5_games_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `accounts` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `top5_games_ibfk_2` FOREIGN KEY (`game_ID`) REFERENCES `games` (`game_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
