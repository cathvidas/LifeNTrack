-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 01:43 PM
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
  `activityCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `remarks` enum('Upcoming','Done','Cancelled','Other') NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activityID`, `act_title`, `act_date`, `act_time`, `act_location`, `act_desc`, `act_ootd`, `activityCreated`, `remarks`, `userID`) VALUES
(7, 'Outing', '2023-10-18', '00:01:00', 'sdffg', 'wertw wfsdfbvhwgercu7wterwu  w etrufygufasd An outing is a short trip, especially one that takes no longer than a day. For example, you might ask your pal if he\'d like to go on an outing to the zoo. A ...An outing is a short trip, especially one that takes no longer than a day. For example, you might ask your pal if he\'d like to go on an outing to the zoo. A ...', 'dsfdfg', '2023-10-10 18:29:22', 'Upcoming', 1),
(9, 'dg', '2023-10-06', '00:00:00', 'dfg', 'dfgd', 'fg', '2023-10-10 18:29:22', 'Upcoming', 1),
(10, 'ew4t', '2023-10-08', '00:00:00', 'ert', 'ert', 'ert', '2023-10-10 18:29:22', 'Upcoming', 1),
(11, 'hahahhaha', '2023-10-01', '00:00:00', 'asd', 'asd', 'asd', '2023-10-10 18:29:22', 'Upcoming', 1),
(12, 'gfdh', '2023-10-09', '00:00:00', 'hfgh', 'fghfgh', 'fghfgh', '2023-10-10 18:29:22', 'Upcoming', 1),
(13, 'Check', '2023-10-13', '00:00:00', 'dont know', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'hakdpog', '2023-10-10 18:29:22', 'Upcoming', 2),
(14, 'Sleep Tightly', '0000-00-00', '19:34:00', '', 'Need to sleep\r\n', '', '2023-10-10 18:29:22', 'Upcoming', 2),
(15, 'Eat Noodles', '2023-10-19', '14:37:00', 'Home', 'The weather is nice to have some Noodles!\r\nhakdog', 'pambahay', '2023-10-10 18:29:22', 'Done', 6),
(18, 'ahhhahs', '2023-10-18', '20:06:00', 'sas', 'dwd', 'sd', '2023-10-10 20:04:02', 'Upcoming', 10),
(19, 'Workout', '2023-10-14', '08:48:00', 'Talamban', 'I want to become physically fit and healthy.', 'Jogging pants, sleeveless, rubber shoes', '2023-10-10 20:49:25', 'Cancelled', 6),
(20, 'roselleactivity', '2023-10-20', '10:54:00', 'dszf', 'sdf', 'sdf', '2023-10-12 10:55:02', 'Upcoming', 6),
(21, 'dance practice', '2023-10-16', '00:05:00', 'ayala', 'group practice', 'normal outfit', '2023-10-12 11:06:28', 'Upcoming', 6),
(25, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:20:45', 'Upcoming', 6),
(26, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:26:34', 'Upcoming', 6),
(27, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:29:22', 'Upcoming', 6),
(28, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:32:07', 'Upcoming', 6),
(29, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:32:23', 'Upcoming', 6),
(30, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:33:43', 'Upcoming', 6),
(31, '', '0000-00-00', '00:00:00', '', '', '', '2023-10-12 19:33:52', 'Upcoming', 6);

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
(5, 'How are you?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '2023-10-03 10:55:42', 1),
(9, 'sdzgsdfg', 'dghdhg', '2023-10-03 11:22:57', 1),
(10, 'uguiggi', 'kjkgihghu', '2023-10-03 11:23:07', 1),
(11, 'hhhhhh', 'kjhjkhhjjhhhklkh', '2023-10-03 11:23:51', 1),
(12, 'New Feature', 'Weve added new feature you an enjoy from check it out!!!', '2023-10-10 09:22:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `followerID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `followingUserID` int(11) NOT NULL,
  `followedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`followerID`, `userID`, `followingUserID`, `followedAt`) VALUES
(15, 10, 1, '2023-10-10 17:48:32'),
(38, 6, 4, '2023-10-12 11:45:36'),
(39, 2, 6, '2023-10-12 14:11:37'),
(40, 2, 1, '2023-10-12 14:11:55'),
(41, 6, 1, '2023-10-12 18:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `invitationID` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `recipientID` int(11) NOT NULL,
  `invitationStatus` enum('pending','accepted','decline','other') NOT NULL,
  `inviteAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`invitationID`, `activityID`, `senderID`, `recipientID`, `invitationStatus`, `inviteAt`) VALUES
(1, 27, 6, 4, '', '2023-10-12 19:29:22'),
(2, 27, 6, 1, '', '2023-10-12 19:29:22'),
(3, 29, 6, 4, '', '2023-10-12 19:32:23'),
(4, 7, 1, 6, 'pending', '2023-10-12 19:33:52');

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
(1, 'Catherine Vidas', 'Female', '22104609@usc.edu.ph', 'cath123', 'Admin', 'Inactive'),
(2, 'Roselle Martinez', 'female', 'roselle@gmail.com', 'roselle111', 'User', 'Inactive'),
(4, 'Cath Vidas', 'Female', 'cath@gmail.com', 'vidas', 'Admin', 'Inactive'),
(5, 'Junavel Indig', 'female', 'junavel@gmail.com', 'junavek', 'User', 'Deactivated'),
(6, 'Divina', 'male', 'd@gmail.com', 'divina', 'User', 'Active'),
(7, 'joules operario', 'Male', 'jouleslasay87@gmail.com', 'joulesoperario123', 'User', 'Deactivated'),
(8, 'Chielo Elguerra', '', 'Chielo@gmail.com', 'chichi', 'User', 'Inactive'),
(9, 'Charity Pidere', 'Female', 'cha@gmail.com', 'chacha', 'User', 'Deactivated'),
(10, 'Rovelyn Paradero', 'Female', 'rovs@gmail.com', 'rovelyn', 'User', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`followerID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `followerUserID` (`followingUserID`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`invitationID`),
  ADD KEY `recipientID` (`recipientID`),
  ADD KEY `senderID` (`senderID`),
  ADD KEY `activityID` (`activityID`);

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
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `followerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invitationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `user` (`userID`);

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`followingUserID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `invitation`
--
ALTER TABLE `invitation`
  ADD CONSTRAINT `invitation_ibfk_1` FOREIGN KEY (`recipientID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `invitation_ibfk_2` FOREIGN KEY (`senderID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `invitation_ibfk_3` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
