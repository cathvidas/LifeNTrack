-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 01:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidassd208`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activityID` int(11) NOT NULL,
  `act_title` varchar(50) NOT NULL,
  `act_date` date NOT NULL,
  `act_time` time NOT NULL,
  `act_location` varchar(100) NOT NULL,
  `act_desc` mediumtext NOT NULL,
  `act_ootd` varchar(100) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activityID`, `act_title`, `act_date`, `act_time`, `act_location`, `act_desc`, `act_ootd`, `remarks`, `userID`) VALUES
(7, 'Outing', '0000-00-00', '00:01:00', 'sdffg', 'wertw wfsdfbvhwgercu7wterwu  w etrufygufasd An outing is a short trip, especially one that takes no longer than a day. For example, you might ask your pal if he\'d like to go on an outing to the zoo. A ...An outing is a short trip, especially one that takes no longer than a day. For example, you might ask your pal if he\'d like to go on an outing to the zoo. A ...', 'dsfdfg', 'progress', 1),
(9, 'dg', '0000-00-00', '00:00:00', 'dfg', 'dfgd', 'fg', 'progress', 1),
(10, 'ew4t', '0000-00-00', '00:00:00', 'ert', 'ert', 'ert', 'progress', 1),
(11, 'hahahhaha', '0000-00-00', '00:00:00', 'asd', 'asd', 'asd', 'progress', 1),
(12, 'gfdh', '0000-00-00', '00:00:00', 'hfgh', 'fghfgh', 'fghfgh', 'progress', 1),
(13, 'Check', '2023-10-13', '00:00:00', 'dont know', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'hakdpog', 'progress', 1),
(14, 'gvvdfgsfgdfgd', '0000-00-00', '19:34:00', '', '', '', 'progress', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `timeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `subject`, `content`, `timeCreated`, `adminId`) VALUES
(1, 'Welcome Message!!!', 'Welcome to LifeNTrack: Streamline Your Life\'s Journey\r\nEmpower Yourself with the Ultimate Life Management Platform. Simplify. Organize. Thrive.', '2023-09-26 11:09:46', 1),
(5, 'How are you?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '2023-10-03 10:55:42', 7),
(9, 'sdzgsdfg', 'dghdhg', '2023-10-03 11:22:57', 1),
(10, 'uguiggi', 'kjkgihghu', '2023-10-03 11:23:07', 1),
(11, 'hhhhhh', 'kjhjkhhjjhhhklkh', '2023-10-03 11:23:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `Fullname`, `Gender`, `Email`, `Password`, `Role`, `Status`) VALUES
(1, 'Catherine Vidas', 'Female', '22104609@usc.edu.ph', 'cath123', 'Admin', 'Active'),
(2, 'Roselle Martinez', 'female', 'roselle@gmail.com', 'roselle111', 'User', 'Inactive'),
(4, 'Catherine Vidas', 'Female', 'cath@gmail.com', 'vidas', 'Admin', 'Inactive'),
(5, 'Junavel Indig', 'female', 'junavel@gmail.com', 'junavek', 'User', 'Deactivated'),
(6, 'Divina', 'male', 'd@gmail.com', 'divina', 'User', 'Active'),
(7, 'joules operario', 'Male', 'jouleslasay87@gmail.com', 'joulesoperario123', 'User', 'Deactivated'),
(8, 'Chielo Elguerra', '', 'Chielo@gmail.com', 'chichi', 'User', 'Inactive'),
(9, 'Charity Pidere', 'Female', 'cha@gmail.com', 'chacha', 'User', 'Deactivated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
