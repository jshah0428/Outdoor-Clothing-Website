-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 19, 2024 at 03:23 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jds227`
--

-- --------------------------------------------------------

--
-- Table structure for table `outclot`
--

CREATE TABLE IF NOT EXISTS `outclot` (
`outclotID` int(11) NOT NULL,
  `outclotCategoryID` int(11) NOT NULL,
  `outclotCode` varchar(10) NOT NULL,
  `outclotName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=2891 ;

--
-- Dumping data for table `outclot`
--

INSERT INTO `outclot` (`outclotID`, `outclotCategoryID`, `outclotCode`, `outclotName`, `description`, `color`, `price`, `dateCreated`) VALUES
(1, 1, 'wjacket1', 'Fashionable Male Jacket', 'Male Waterproof Rain Jacket', 'Red', 60.00, '2024-02-22 01:04:13'),
(2, 1, 'wjacket2', 'Strong Jacket for Women', 'Female Rain Jacket', 'Grey', 45.00, '2024-02-22 01:14:04'),
(3, 1, 'wjacket3', 'Ski Jacket for Male', 'Male Waterproof Ski Jacket', 'Black', 95.00, '2024-02-22 01:17:06'),
(4, 1, 'wjacket4', 'Alta Vista Jacket', 'Hoodless Male Waterproof Jacket', 'Black', 67.00, '2024-02-22 01:17:18'),
(6, 2, 'hikboot1', 'Brown Menace', 'Male Suede Waterproof Hiking Boots', 'Brown', 97.00, '2024-02-22 17:44:58'),
(7, 2, 'hikboot2', 'Formal Flair', 'black boots with formal bottoms perfect for any occasion', 'Black', 176.00, '2024-02-22 17:46:34'),
(8, 2, 'hikboot3', 'Long Hiking Boots', 'Hiking Boots with a Long Back Side', 'Brown', 210.00, '2024-02-22 17:47:18'),
(9, 2, 'hikboot4', 'Wide Hiking Boots', 'Mid Waterproof Wide Width Hiking Booths', 'Brown', 210.00, '2024-02-22 17:48:08'),
(10, 3, 'uv1', 'hard sun hat visor', 'green sun hat visor', 'Green', 25.00, '2024-02-22 18:02:57'),
(11, 3, 'uv2', 'Brim hat', 'Circular Brim Hat', 'Brown', 32.00, '2024-02-22 18:02:57'),
(12, 3, 'uv3', 'Baseball Cap', 'Black Baseball cap fitted for male head', 'Black', 43.00, '2024-02-22 18:02:57'),
(13, 3, 'uv4', 'Bucket Hat', 'Female Bucket Hat provides shade till eye region', 'Black', 22.00, '2024-02-22 18:02:57'),
(14, 5, 'fh1', 'Shell Jacket', 'Puffy black shell jacket meant to keep you warm', 'Black', 99.00, '2024-02-22 18:02:57'),
(15, 5, 'fh2', 'Bomber jacket', 'Bomber jacket with cotton insulation to provide maximum warmth', 'Blue', 86.00, '2024-02-22 18:02:57'),
(16, 5, 'fh3', 'Woolen Coat', 'Woolen coat to make one feel soft and comfortable while being insulated', 'White', 175.00, '2024-02-22 18:02:57'),
(17, 5, 'fh4', 'Sports Hoodie', 'Hoodie with warm interior to make one feel comfortable', 'Orange', 20.00, '2024-02-22 18:02:57'),
(18, 4, 'ig1', 'Ultra Handwarmer', 'Latex Coated Thermal Gloves meant to keep hands warm', 'Orange', 23.00, '2024-02-22 18:02:57'),
(19, 4, 'ig2', 'Hand Heater', 'Insulated Gloves mean for working in the outdoors', 'Yellow', 27.00, '2024-02-22 18:02:57'),
(20, 4, 'ig3', 'Hand melter', 'One of the best products in the market made with cutting-edge material to keep your hand warm for at least 19 hours', 'Purple', 38.00, '2024-02-22 18:02:57'),
(21, 4, 'ig4', 'Hand Torcher', 'Gloves that will keep your hands so hot you will think it is summer time.', 'Grey', 55.00, '2024-02-22 18:02:57'),
(22, 2, 'hikboot5', 'Beautiful boots', 'Stylish boots that are also easy to hike with ', 'Brown', 250.87, '2024-03-20 15:29:05'),
(23, 3, 'uv5', 'Posh hat', 'Hat that protects people from the sun, but also looks very pretty', 'Gold', 29.99, '2024-03-20 15:29:53'),
(24, 4, 'ig5', 'Glamorous gloves', 'gloves with never before seen level grip that are phenomenal ', 'Blue', 34.58, '2024-03-20 15:30:33'),
(2899, 1, 'wjacket5', 'Gren Mongoose', 'Mens waterproof Jacket best made for mountain terrain', 'green', 140.00, '2024-04-18 13:09:56'),
(2901, 1, 'wproof123', 'water proof jacket', 'Very nice water proof jacket', 'red', 100.00, '2024-04-18 23:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `outclotCategories`
--

CREATE TABLE IF NOT EXISTS `outclotCategories` (
`outclotCategoryID` int(11) NOT NULL,
  `outclotCategoryName` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `outclotCategories`
--

INSERT INTO `outclotCategories` (`outclotCategoryID`, `outclotCategoryName`, `dateCreated`) VALUES
(1, 'Waterproof Jacket', '2024-02-22 00:46:29'),
(2, 'Hiking Boots', '2024-02-22 00:46:29'),
(3, 'UV Protection Hat', '2024-02-22 00:46:29'),
(4, 'Insulated Gloves', '2024-02-22 00:46:29'),
(5, 'Fleece-lined Hoodie', '2024-02-22 00:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `outclotManagers`
--

CREATE TABLE IF NOT EXISTS `outclotManagers` (
`outclotManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `outclotManagers`
--

INSERT INTO `outclotManagers` (`outclotManagerID`, `emailAddress`, `password`, `firstName`, `lastName`, `dateCreated`) VALUES
(1, 'bob.bob@gmail.com', '$2y$10$0FeZn2OhvTDNOapirLOq7u934Plqe2kjXjOWLyc.1wsxgu/f0aqyi', 'Bob', 'Bobby', '2024-03-28 16:21:24'),
(2, 'jay.jay@gmail.com', '$2y$10$S9J0uMBArjY07Do2gasAVO9gIJXM9JYOMOiv0f27Gj9se95lzDGxq', 'Jay', 'Smith', '2024-03-28 16:21:24'),
(3, 'salamander@gmail.com', '$2y$10$uuN9VRy9ySqFv8sb9XOWlu3PBI8IkfZC9.RvK1x5g7FPHn//vs9fq', 'Sally', 'May', '2024-03-28 16:21:24'),
(4, 'emily.smith@gmail.com', '$2y$10$b4CjsvpVEz1LHw7E0B8roe4QN/6KlwYhkXytp8m//M.upKGxmsNjC', 'Emily', 'Smith', '2024-03-28 16:21:24'),
(5, 'suzzycollins@gmail.com', '$2y$10$lVONrB7iFgNcckbWDZChieJKxFpegS7gpVilYbftAlKuVhm10hTHi', 'Suzzy', 'Collins', '2024-03-28 16:21:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outclot`
--
ALTER TABLE `outclot`
 ADD PRIMARY KEY (`outclotID`), ADD UNIQUE KEY `outclotCode` (`outclotCode`);

--
-- Indexes for table `outclotCategories`
--
ALTER TABLE `outclotCategories`
 ADD PRIMARY KEY (`outclotCategoryID`);

--
-- Indexes for table `outclotManagers`
--
ALTER TABLE `outclotManagers`
 ADD PRIMARY KEY (`outclotManagerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outclot`
--
ALTER TABLE `outclot`
MODIFY `outclotID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2902;
--
-- AUTO_INCREMENT for table `outclotCategories`
--
ALTER TABLE `outclotCategories`
MODIFY `outclotCategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `outclotManagers`
--
ALTER TABLE `outclotManagers`
MODIFY `outclotManagerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
