-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 06:02 AM
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
  `Bio` varchar(300) NOT NULL,
  `Game1` int(11) NOT NULL,
  `Game2` int(11) NOT NULL,
  `Game3` int(11) NOT NULL,
  `Game4` int(11) NOT NULL,
  `Game5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Bio`, `Game1`, `Game2`, `Game3`, `Game4`, `Game5`) VALUES
(1, 'SHADMAN', 'A HOQUE', 'shad27', 'shadhoque26@outlook.com', '$2y$10$j8wRw0ikUBdP8ko/uOb6eO5Vnk4sEq8ZZRtshe7BFVh1P03wgJtC.', '', 0, 0, 0, 0, 0),
(2, 'SHADMAN', 'A HOQUE', 'shad28', 'Shadmanhoq26@outlook.com', '$2y$10$ZlzBN0o3kXbG1GtX386wau2369SpQKGALCyNEbCYRiim50fQgHvtW', '', 0, 0, 0, 0, 0),
(3, 'Arshad', 'Hoque', 'test1', 'micheal@gmail.com', '$2y$10$PcYqb0pi5SS/KVD26o9vXeElDIXQ16VZUmMSPaMZn5iAOyPAfv2EC', '', 0, 0, 0, 0, 0),
(4, 'w', 'a', 'test69', 'a@a.couk', '$2y$10$X1StVMFCFRzu/Uv4CURuI.K1.P85GlmM3VIitEHALtty26a5WFb6K', '', 0, 0, 0, 0, 0),
(5, 'shadman ', 'hoque', 'shad1', 'shad1@gmail.com', '$2y$10$zAq0kKJwKdUVzTIHcgYKwuDGJfma3TZT/ztaRTA5OzxFzd7AJ/QoC', '', 0, 0, 0, 0, 0),
(6, '12', '1', '1', '2@2.com', '$2y$10$6.myolO2DnulV5Bican.W.0lD6sDbOpfykL5s.ff3tTFdRkJRBbqO', '', 0, 0, 0, 0, 0),
(7, 'Shadman', 'Hoque', 'test2002', 'shadh26@outlook.com', '$2y$10$fTMTMsNIanADigoON.jX2uHkVo0dzZAScYQ/cs6CbMeBWtkQnaVsO', '', 0, 0, 0, 0, 0),
(8, 'SHADMAN', 'A HOQUE', 'test26', 'sdsads@outlook.com', '$2y$10$/Gw/rd1iXcPU8zRgVR5RtO.stwJ4LjAcKt/u/UQgqJjO1ZOQToGQC', '', 0, 0, 0, 0, 0),
(9, 'Arshad', 'Hoque', 'Arshad25', 'arshad25@gmail.com', '$2y$10$nnhlAxIRQJNnJ9s09XmKPunKij1r6qAemwAERV456YSRxOmAjiPSm', '', 0, 0, 0, 0, 0),
(10, 'Naureen', 'Hoque', 'CatLover519', 'naureen@naureen.co.uk', '$2y$10$DycCm0OCW.Kn32zoOxmDpe3jlFqxD0aJWTVSbKgtAW3Tta9/erF3.', '', 0, 0, 0, 0, 0),
(11, 'rick', 'sanchez', 'picklerick123', 'pickle@rick.co.uk', '$2y$10$GY3fcPmN8v82VAw1/CH47OSCWc1RRRzX4SDn/AU4qU0r7K50ZeE.y', '', 0, 0, 0, 0, 0),
(12, 'SHADMAN', 'HOQUE', 'ShadTest', 'shad@email.co.uk', '$2y$10$lddo6m.Txgvfi900CqtfzuzzNuHTTdKdcumcakFoUUYbC8NHFk0F.', '', 0, 0, 0, 0, 0);

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

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`Follower_ID`, `Followee_ID`) VALUES
(7, 9),
(8, 11),
(9, 4),
(9, 7),
(9, 8),
(11, 8);

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
(1, 'Red Dead Redemption 2', 'The story is set in a fictionalized representation of the United States in 1899 and follows the exploits of outlaw Arthur Morgan, a member of the Van der Linde gang, who must deal with the decline of the Wild West whilst attempting to survive against government forces, rival gangs, and other adversaries.', 'Adventure/RPG', 'reddead2image.jpg', 'Windows/Xbox One/PlayStation 4 ', 'Rockstar Games', '£30.00', 'PEGI 18', '2018-10-26', '', 'https://www.cdkeys.com/catalogsearch/result/?q=red%20dead%20redemption%202'),
(2, 'EA SPORTS FIFA 23', 'FIFA 23 is a football video game published by Electronic Arts. It is the 29th and final instalment in the FIFA series that is developed by EA Sports, and the final instalment under the FIFA banner, and released worldwide on 30 September 2022 for Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One and Xbox Series X/S.', 'Sports', 'fifaimage.jpg', 'Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One and Xbox Series X/S', 'EA Electronics', '£25.99', 'PEGI 3', '2022-09-27', 'fifaimage.jpg', 'https://www.cdkeys.com/catalogsearch/result/?q=fifa%2023'),
(3, 'Little Nightmares 2', 'Little Nightmares II is a puzzle-platform horror adventure game developed by Tarsier Studios, published by Bandai Namco Entertainment. It is the prequel[2] to Little Nightmares (2017).[3][4] The story follows Mono, who must work together with Six, the protagonist from the previous game, to survive the horrors of the Pale City and discover its dark secrets.', 'Adventure', 'little-nightmare2.jpg', '	\nGoogle Stadia\nNintendo Switch\nPlayStation 4\nPlayStation 5\nWindows\nXbox One\nXbox Series X/S', 'Bandai Namco Entertainment', '£9.99', 'PEGI 3', '2020-02-11', '', 'https://www.cdkeys.com/catalogsearch/result/?q=little%20nightmares%202'),
(4, 'Forza Horizon 5', 'Forza Horizon 5 is a 2021 racing video game developed by Playground Games and published by Xbox Game Studios. It is the fifth Forza Horizon title and the twelfth main instalment in the Forza series. The game is set in a fictionalised representation of Mexico', 'Racing/Sports', 'forza5.jpg', 'Xbox One, Windows 10 version', 'XBOX GAME STUDIOS', '£27.29', 'PEGI 3', '2021-11-09', '', 'https://www.cdkeys.com/catalogsearch/result/?q=forza%20horizon%205'),
(5, 'Resident Evil 4', 'Resident Evil 4 is a 2023 survival horror game developed and published by Capcom. It is a remake of the 2005 game Resident Evil 4. Players control the US agent Leon S. Kennedy, who must save Ashley Graham, the daughter of the United States president, from the mysterious Los Iluminados cult.', 'Horror/Action', 'residentevil4.jpg', 'STEAM', 'CAPCOM', '£49.99', '18+', '2023-03-24', '', 'https://www.cdkeys.com/pc/resident-evil-4-pc-steam'),
(6, 'THE LAST OF US PART 1', 'The Last of Us Part I is a 2022 action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment. A remake of the 2013 game The Last of Us, it features revised gameplay, including enhanced combat and exploration, and expanded accessibility options.', 'Action/Adventure', 'lastofus1.jpg', 'STEAM', 'PLAYSTATION STUDIOS', '£32.99', '18+', '2023-03-28', '', 'https://www.cdkeys.com/pc/the-last-of-us-part-i-pc-steam'),
(7, 'Hogwarts Legacy', 'Hogwarts Legacy is a 2023 action role-playing game developed by Avalanche Software and published by Warner Bros. Games under its Portkey Games label. The game, part of the Wizarding World franchise, takes place in the late 1800s, a century prior to the events chronicled in the Harry Potter novels', 'Action/RPG', 'hogwarts.jpg', 'STEAM', 'WARNER BROS. INTERACTIVE', '£37.99', 'PEGI 3', '2023-02-10', '', 'https://www.cdkeys.com/hogwarts-legacy-pc-steam'),
(8, 'Minecraft Legends', 'Minecraft Legends is an upcoming action-strategy video game developed by Mojang Studios and Blackbird Interactive and published by Xbox Game Studios. It is set to be released for Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One, and Xbox Series X/S on April 18, 2023.', 'Adventure/RPG', 'MinecraftLegends.jpg', 'Xbox/Playstation/PC', 'XBOX GAME STUDIOS', '£31.99', 'PEGI 3', '2023-04-18', '', 'https://www.cdkeys.com/minecraft-legends-xbox-one-xbox-series-x-s-eu'),
(9, 'Sims 4', 'The Sims 4 is a social simulation game developed by Maxis and published by Electronic Arts. It is the fourth major title in The Sims series, and is the sequel to The Sims 3.', 'RPG', 'sims4.jpg', 'EA APP', 'ELECTRONIC ARTS', '£25.99', 'PEGI 3', '2023-03-16', '', 'https://www.cdkeys.com/pc/the-sims-4-growing-together-expansion-pack-pc-dlc-origin'),
(10, '\r\nWO LONG: FALLEN DYNASTY', 'Wo Long: Fallen Dynasty is a historical fantasy action role-playing video game. Set during a fictionalized version of the fall of the Han Dynasty, the plot follows an unnamed protagonist who battles historical characters and Chinese mythological creatures corrupted by demonic Qi.', 'Action', 'wolung.jpg', 'PlayStation 4, PlayStation 5, Windows, Xbox One and Xbox Series X/S', 'KOEI TECMO', '', '18+', '2023-03-03', '', 'https://www.cdkeys.com/wo-long-fallen-dynasty-pc-steam-eu'),
(11, 'ATOMIC HEART', 'Atomic Heart is a single-player first-person shooter developed by Mundfish and published by Focus Entertainment and 4Divinity. The game was released for the PlayStation 4, PlayStation 5, Windows, Xbox One, and Xbox Series X/S on February 21, 2023. The game received generally positive reviews upon release.', 'Action/Adventure', 'atomicheart.jpg', 'Steam', 'MUNDFISH', '£35.99', '18+', '2023-02-21', '', 'https://www.cdkeys.com/atomic-heart-steam-pc'),
(12, 'WWE 2K23', 'WWE 2K23 is a 2023 professional wrestling sports video game developed by Visual Concepts and published by 2K.[1] It is the twenty-third overall installment of the video game series based on WWE, the tenth game under the WWE 2K banner, and the successor to WWE 2K22.', 'Sports/Fighting', 'wwe23.jpg', 'PlayStation 4, PlayStation 5, Windows, Xbox One, and Xbox Series X/S.', '2K', '£37.99', '13+', '2023-03-17', '', 'https://www.cdkeys.com/wwe-2k23-pc-steam-eu'),
(13, 'STAR WARS JEDI: SURVIVOR', 'Star Wars Jedi: Survivor is an upcoming action-adventure game developed by Respawn Entertainment and published by Electronic Arts. A sequel to Star Wars Jedi: Fallen Order (2019). It will be the final Star Wars game published during Electronic Arts\' exclusivity contract with Lucasfilm, which is set to expire later in the year.', 'Action/Adventure', 'jedisurvivor.jpg', 'EA APP', 'ELECTRONIC ARTS', '£38.99', '13+', '2023-04-28', '', 'https://www.cdkeys.com/star-wars-jedi-survivor-pc-origin'),
(14, 'FORSPOKEN', 'Forspoken is a 2023 action role-playing game developed by Luminous Productions and published by Square Enix. It was released on January 24, 2023, on PlayStation 5 and Windows. The game received mixed reviews from critics.', 'Adventure/Action', 'forspoken.jpeg', 'STEAM', 'SQUARE ENIX\r\n', '£42.39', '13+', '2023-01-24', '', 'https://www.cdkeys.com/forspoken-pc-eu-and-uk-steam'),
(15, 'DEAD ISLAND 2', 'Dead Island 2 is a sequel to the 2011 video game Dead Island and the third major installment in the Dead Island series. Set about 10 years after the events of Dead Island and Dead Island: Riptide, Dead Island 2 differentiates itself from its predecessors by taking place in the city of Los Angeles, which has been quarantined due to the zombie outbreak.\n\n', 'Horror/Action', 'deadisland2.jpg\r\n', 'EPIC GAMES LAUNCHER', 'DEEP SILVER', '£49.69', '18+', '2023-04-21', '', 'https://www.cdkeys.com/dead-island-2-pc-epic-games'),
(16, 'Sons of the Forest', 'Sons of the Forest is an upcoming survival video game developed by Endnight Games and published by Newnight. It is the sequel to the 2018 video game The Forest, and was released via early access on February 23, 2023, for Microsoft Windows on Steam.', 'Horror/Adventure', 'sonsof.jpg', 'STEAM', 'Endnight Games', '£23.99', '18+', '2023-02-23', '', 'https://www.cdkeys.com/pc/sons-of-the-forest-pc-steam');

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
(7, 3),
(8, 1),
(9, 8),
(10, 1),
(13, 12),
(14, 9),
(15, 10),
(16, 15),
(17, 6),
(18, 13),
(19, 14),
(20, 9),
(21, 16),
(22, 11),
(23, 12),
(24, 13),
(25, 4),
(27, 11),
(28, 13),
(31, 7);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `User_ID` int(11) NOT NULL,
  `Review_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`User_ID`, `Review_ID`) VALUES
(4, 5),
(7, 5),
(8, 8),
(8, 13),
(8, 17),
(9, 23);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_ID` int(11) NOT NULL,
  `reviews` varchar(200) NOT NULL,
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
(7, 'OK', 8, 0, ''),
(8, 'OK', 8, 0, ''),
(9, 'This game is too repetitive', 5, 0, ''),
(10, 'mid', 2, 0, ''),
(13, 'John cena', 9, 0, ''),
(14, 'nice', 9, 0, ''),
(15, 'goat', 10, 0, ''),
(16, 'nice', 7, 0, ''),
(17, 'Made my laptop melt', 2, 0, ''),
(18, 'nice', 10, 0, ''),
(19, 'OK', 8, 0, ''),
(20, 'nice', 7, 0, ''),
(21, 'nice', 9, 0, ''),
(22, 'yh', 7, 0, ''),
(23, 'John cena', 10, 0, ''),
(24, 'nice', 9, 0, ''),
(25, 'nice', 7, 0, ''),
(27, 'mid', 5, 0, ''),
(28, 'nice', 9, 0, ''),
(31, 'OK', 9, 0, '');

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
(7, 4),
(8, 7),
(9, 8),
(10, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 8),
(17, 8),
(18, 9),
(19, 8),
(20, 9),
(21, 9),
(22, 9),
(23, 9),
(24, 4),
(25, 9),
(27, 10),
(28, 11),
(31, 9);

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
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
