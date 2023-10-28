-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 08:00 AM
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
(7, 'Outing', '2023-03-18', '00:01:00', 'Mountain', 'wertw wfsdfbvhwgercu7wterwu  w etrufygufasd An outing is a short trip, especially one that takes no longer than a day. For example, you might ask your pal if he\'d like to go on an outing to the zoo. A ...An outing is a short trip, especially one that takes no longer than a day. For example, you might ask your pal if he\'d like to go on an outing to the zoo. A ...', 'dsfdfg', '2023-10-10 18:29:22', 'Upcoming', 5),
(9, 'Biking', '2023-01-06', '00:00:00', 'Family Park', 'do some sports to become physically fit', 'any comfortable clothes', '2023-10-10 18:29:22', 'Upcoming', 8),
(10, 'Work', '2023-03-08', '09:10:00', 'Office', 'Go to work and finish tasks', 'office wear', '2023-10-10 18:29:22', 'Upcoming', 5),
(11, 'Update Status', '2023-10-01', '00:00:00', 'Anywhere', 'update status on any social media', 'anything', '2023-10-10 18:29:22', 'Upcoming', 9),
(13, 'Check', '2023-10-13', '00:00:00', 'dont know', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'hakdpog', '2023-10-10 18:29:22', 'Upcoming', 2),
(15, 'Eat Noodles', '2023-05-19', '14:37:00', 'Home', 'The weather is nice to have some Noodles!\r\nhakdog', 'pambahay', '2023-10-10 18:29:22', 'Done', 6),
(19, 'Workout', '2023-06-14', '08:48:00', 'Talamban', 'I want to become physically fit and healthy.', 'Jogging pants, sleeveless, rubber shoes', '2023-10-10 20:49:25', 'Cancelled', 6),
(21, 'dance ', '2023-12-16', '00:05:00', 'ayala', 'group practice', 'normal outfit', '2023-10-12 11:06:28', 'Done', 6),
(32, 'activity for you', '2023-06-14', '15:52:00', 'Cebu', 'made some activity with you', 'anything', '2023-10-13 15:52:58', 'Upcoming', 4),
(33, 'sleep', '2023-10-16', '08:08:00', 'Home', 'badly want to sleep!!!', 'casual', '2023-10-15 08:08:53', 'Done', 6),
(40, 'Attend USC Days', '2023-09-24', '14:47:00', 'USC TC', 'attend activities for grade compliance and give moral support to other students', 'school uniform', '2023-10-23 14:45:12', 'Upcoming', 12),
(41, 'Present Project', '2023-10-24', '13:30:00', 'USC-TC', 'present my webdev project later today', 'School Uniform', '2023-10-24 12:48:21', 'Upcoming', 13),
(42, 'earf', '2023-10-06', '13:01:00', 'esdf', 'sdf', 'sdf', '2023-10-24 13:59:38', 'Upcoming', 6);

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
(12, 'New Feature', 'Weve added new feature you an enjoy from check it out!!!', '2023-10-10 09:22:32', 1),
(13, 'Announcement', 'wala alam', '2023-10-14 06:37:57', 1),
(15, 'sdfdsfg', 'sdgdfhgdgh', '2023-10-24 05:57:59', 1);

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
(39, 2, 6, '2023-10-12 14:11:37'),
(40, 2, 1, '2023-10-12 14:11:55'),
(42, 4, 1, '2023-10-13 15:32:57'),
(43, 4, 6, '2023-10-13 15:52:09'),
(44, 6, 2, '2023-10-14 18:46:32'),
(46, 6, 4, '2023-10-19 12:24:08'),
(48, 12, 2, '2023-10-23 14:43:32'),
(49, 12, 7, '2023-10-23 14:43:35'),
(50, 12, 5, '2023-10-23 14:43:37'),
(51, 12, 4, '2023-10-23 14:43:39'),
(52, 12, 8, '2023-10-23 14:43:40'),
(54, 12, 6, '2023-10-23 15:03:28'),
(55, 6, 12, '2023-10-23 15:04:40'),
(56, 13, 6, '2023-10-24 12:42:05'),
(57, 13, 2, '2023-10-24 12:48:51'),
(58, 6, 5, '2023-10-24 13:46:49'),
(59, 6, 8, '2023-10-24 13:58:40'),
(60, 6, 13, '2023-10-24 13:59:25');

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
(4, 7, 1, 6, 'accepted', '2023-10-12 19:33:52'),
(5, 32, 4, 6, 'accepted', '2023-10-13 15:52:58'),
(12, 40, 12, 2, 'pending', '2023-10-23 14:45:12'),
(13, 40, 12, 4, 'pending', '2023-10-23 14:45:12'),
(14, 40, 12, 5, 'pending', '2023-10-23 14:45:12'),
(15, 40, 12, 7, 'pending', '2023-10-23 14:45:12'),
(16, 40, 12, 8, 'pending', '2023-10-23 14:45:12'),
(17, 41, 13, 6, 'accepted', '2023-10-24 12:48:21'),
(18, 42, 6, 13, 'accepted', '2023-10-24 13:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notifID` int(11) NOT NULL,
  `notifSenderID` int(11) NOT NULL,
  `notifReceiverID` int(11) NOT NULL,
  `notifTitle` varchar(50) NOT NULL,
  `notifMessage` text NOT NULL,
  `notifCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `notifStatus` enum('seen','unseen','other') NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notifID`, `notifSenderID`, `notifReceiverID`, `notifTitle`, `notifMessage`, `notifCreated`, `notifStatus`) VALUES
(6, 6, 4, 'Invite', 'Divina accepted your invitation', '2023-10-15 10:27:10', 'seen'),
(7, 6, 1, 'Invite', 'divine invited you to an activity', '2023-10-19 12:25:50', 'unseen'),
(8, 6, 2, 'Invite', 'divine invited you to an activity', '2023-10-19 12:25:50', 'unseen'),
(9, 6, 4, 'Invite', 'divine invited you to an activity', '2023-10-19 12:25:50', 'seen'),
(11, 6, 1, 'Invite', 'divine accepted your invitation', '2023-10-23 11:49:20', 'unseen'),
(12, 12, 2, 'Invite', 'Susan invited you to an activity', '2023-10-23 14:45:12', 'unseen'),
(13, 12, 4, 'Invite', 'Susan invited you to an activity', '2023-10-23 14:45:12', 'seen'),
(14, 12, 5, 'Invite', 'Susan invited you to an activity', '2023-10-23 14:45:12', 'unseen'),
(15, 12, 7, 'Invite', 'Susan invited you to an activity', '2023-10-23 14:45:12', 'unseen'),
(16, 12, 8, 'Invite', 'Susan invited you to an activity', '2023-10-23 14:45:12', 'unseen'),
(18, 4, 6, 'Invite', 'Cath Vidas decline your invitation', '2023-10-23 14:50:22', 'seen'),
(19, 12, 6, 'Social', 'Susan started following you.', '2023-10-23 15:03:28', 'seen'),
(20, 6, 12, 'Social', 'divina started following you.', '2023-10-23 15:04:40', 'unseen'),
(21, 13, 6, 'Social', 'GIGI started following you.', '2023-10-24 12:42:05', 'seen'),
(22, 13, 6, 'Invite', 'GIGI invited you to an activity', '2023-10-24 12:48:21', 'seen'),
(23, 13, 2, 'Social', 'GIGI started following you.', '2023-10-24 12:48:51', 'unseen'),
(24, 6, 13, 'Invite', 'divina accepted your invitation', '2023-10-24 12:55:55', 'unseen'),
(25, 6, 5, 'Social', 'divina started following you.', '2023-10-24 13:46:49', 'unseen'),
(26, 6, 4, 'Invite', 'divina accepted your invitation', '2023-10-24 13:58:21', 'unseen'),
(27, 6, 8, 'Social', 'divina started following you.', '2023-10-24 13:58:40', 'unseen'),
(28, 6, 13, 'Social', 'divina started following you.', '2023-10-24 13:59:25', 'unseen'),
(29, 6, 13, 'Invite', 'divina invited you to an activity', '2023-10-24 13:59:38', 'unseen'),
(30, 13, 6, 'Invite', 'GIGI accepted your invitation', '2023-10-24 14:00:02', 'unseen');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Bio` varchar(255) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `Fullname`, `Gender`, `Email`, `Password`, `Bio`, `Role`, `Status`) VALUES
(1, 'Admin101', 'Female', 'admin@gmail.com', 'admin101', '', 'Admin', 'Active'),
(2, 'Roselle Martinez', 'Female', 'roselle@gmail.com', 'roselle111', '', 'User', 'Inactive'),
(4, 'Cath Vidas', 'Female', 'cath@gmail.com', 'vidas', 'hey there, wanna have some fun? let\'s go sky diving!', 'User', 'Inactive'),
(5, 'Junavel Indig', 'Female', 'junavel@gmail.com', 'junavek', '', 'User', 'Deactivated'),
(6, 'divina', 'Female', 'd@gmail.com', 'divina', 'heyow peopl', 'User', 'Active'),
(7, 'joules operario', 'Male', 'jouleslasay87@gmail.com', 'joulesoperario123', '', 'User', 'Deactivated'),
(8, 'Chielo Elguerra', '', 'Chielo@gmail.com', 'chichi', '', 'User', 'Inactive'),
(9, 'Charity Pidere', 'Female', 'cha@gmail.com', 'chacha', '', 'User', 'Deactivated'),
(10, 'Rovelyn Paradero', 'Female', 'rovs@gmail.com', 'rovelyn', '', 'User', 'Inactive'),
(12, 'Susan', '', 's@gmail.com', 'susan', '', 'User', 'Inactive'),
(13, 'GIGI', 'Male', 'gigi@gmail.com', 'gigi', '', 'User', 'Active');

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notifID`),
  ADD KEY `notifReceiverID` (`notifReceiverID`),
  ADD KEY `notifSenderID` (`notifSenderID`);

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
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `followerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invitationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notifID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `invitation_ibfk_1` FOREIGN KEY (`recipientID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invitation_ibfk_2` FOREIGN KEY (`senderID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invitation_ibfk_3` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`notifReceiverID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`notifSenderID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
