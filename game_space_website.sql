-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 04:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`) VALUES
(1, 'SHADMAN', 'A HOQUE', 'shad26', 'shadhoque26@outlook.com', '$2y$10$j8wRw0ikUBdP8ko/uOb6eO5Vnk4sEq8ZZRtshe7BFVh1P03wgJtC.'),
(2, 'SHADMAN', 'A HOQUE', 'shad28', 'Shadmanhoq26@outlook.com', '$2y$10$ZlzBN0o3kXbG1GtX386wau2369SpQKGALCyNEbCYRiim50fQgHvtW'),
(3, 'Arshad', 'Hoque', 'test1', 'micheal@gmail.com', '$2y$10$PcYqb0pi5SS/KVD26o9vXeElDIXQ16VZUmMSPaMZn5iAOyPAfv2EC'),
(4, 'w', 'a', 'test26', 'a@a.couk', '$2y$10$X1StVMFCFRzu/Uv4CURuI.K1.P85GlmM3VIitEHALtty26a5WFb6K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
