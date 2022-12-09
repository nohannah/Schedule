-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2022 at 06:16 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduling_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assembly_hall`
--

DROP TABLE IF EXISTS `assembly_hall`;
CREATE TABLE IF NOT EXISTS `assembly_hall` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `location` text CHARACTER SET utf8mb4 NOT NULL,
  `floor` varchar(150) NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assembly_hall`
--

INSERT INTO `assembly_hall` (`id`, `room_name`, `location`, `floor`, `description`, `status`, `date_created`, `date_updated`) VALUES
(11, 'ANGKEA BOS-áž¢áž„áŸ’áž‚áž¶áž”áž»ážŸáŸ’ážŸ', 'ISI-TOWER', 'Floor 3', 'TV\r\n 8 chairs\r\n10 people', 1, '2022-10-26 14:19:58', '2022-10-26 14:28:20'),
(12, 'TROBEK PREY-ážáŸ’ážšáž”áŸ‚áž€áž–áŸ’ážšáŸƒ', 'ISI-TOWER', 'Floor 2', 'TV\r\n8 chairs\r\n15 people', 1, '2022-10-26 14:24:00', NULL),
(13, 'CHAKIRIâ€‹â€‹â€‹â€‹-áž…áž“áŸ’áž‘áž‚áž¸ážšáž¸', 'ISI-TOWER', 'Floor 2', 'TV\r\nWhiteboard\r\n22 chairs\r\n25 people', 1, '2022-10-26 14:25:07', '2022-11-01 11:33:29'),
(14, ' KONGKANGâ€‹â€‹â€‹-áž€áŸ„áž„áž€áž¶áž„', 'ISI-TOWER\r\n', 'Floor 1', 'TV\r\n4 chairs\r\n5 people', 1, '2022-10-26 14:25:38', NULL),
(15, 'KROVANHâ€‹-áž€áŸ’ážšážœáž¶áž‰', 'ISI-TOWER', 'Floor 1', 'TV\r\n8 chairs\r\n10 people', 1, '2022-10-26 14:27:02', NULL),
(16, 'CHANKROSNA-áž…áž“áŸ’áž‘áž“áŸáž€áŸ’ážšážŸáŸ’áž“áž¶', 'ISI-TOWER', 'Floor 1', '5 chairs\r\n8 people', 1, '2022-10-26 14:27:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

DROP TABLE IF EXISTS `schedule_list`;
CREATE TABLE IF NOT EXISTS `schedule_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `assembly_hall_id` int(30) NOT NULL,
  `reserved_by` text CHARACTER SET utf8mb4 NOT NULL,
  `schedule_remarks` text CHARACTER SET utf8mb4 NOT NULL,
  `datetime_start` datetime NOT NULL,
  `datetime_end` datetime NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `assembly_hall_id`, `reserved_by`, `schedule_remarks`, `datetime_start`, `datetime_end`, `email`, `status`, `date_created`, `date_updated`) VALUES
(130, 11, 'Sopheak', '', '2022-11-01 09:53:00', '2022-11-01 11:52:00', 'shy@gmail.com', 0, '2022-11-01 09:52:49', NULL),
(132, 14, 'pheakna', '', '2022-11-01 10:54:00', '2022-11-01 11:54:00', 'sopheak@gmail.com', 0, '2022-11-01 09:54:44', NULL),
(146, 13, 'Sopheak', '', '2022-11-02 15:17:00', '2022-11-02 16:17:00', 'sa@gmail.com', 0, '2022-11-02 15:18:04', NULL),
(147, 16, 'pheakna', 'Hi this the tester', '2022-11-03 15:18:00', '2022-11-03 16:18:00', 'sp@gmail.com', 0, '2022-11-02 15:18:28', '2022-11-03 15:41:02'),
(148, 14, 'Sopheak', 'test', '2022-11-02 16:19:00', '2022-11-02 17:19:00', 'sopheak@gmail.com', 0, '2022-11-02 15:19:26', NULL),
(149, 15, 'Sopheak', 'testdate', '2022-11-02 16:19:00', '2022-11-02 17:19:00', 'sa@gmail.com', 0, '2022-11-02 15:19:55', NULL),
(150, 12, 'Sopheak', 'test the date', '2022-11-02 15:20:00', '2022-11-02 18:20:00', 'shy@gmail.com', 0, '2022-11-02 15:20:48', NULL),
(151, 12, 'Sopheak', 'test test', '2022-11-02 19:21:00', '2022-11-02 20:21:00', 'super@gmail.com', 0, '2022-11-02 15:21:17', NULL),
(152, 12, 'Sopheakna', 'This is just for the tester. Is this work?', '2022-11-03 15:45:00', '2022-11-03 16:45:00', 'sopheakna@gmail.com', 0, '2022-11-03 15:46:27', '2022-11-03 15:47:02'),
(153, 12, 'hannah', '', '2022-11-04 16:58:00', '2022-11-04 18:58:00', 'nohannah508@gmail.com', 0, '2022-11-04 16:58:58', NULL),
(157, 14, 'hannah', '', '2022-11-14 17:00:00', '2022-11-14 18:00:00', 'nohannah508@gmail.com', 0, '2022-11-14 16:40:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

DROP TABLE IF EXISTS `system_info`;
CREATE TABLE IF NOT EXISTS `system_info` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `meta_field` text CHARACTER SET utf8mb4 NOT NULL,
  `meta_value` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Meeting Room Booking'),
(6, 'short_name', 'ISI-GROUP'),
(11, 'logo', 'uploads/1666574340_ISI-logo.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1628211420_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `username` text CHARACTER SET utf8mb4 NOT NULL,
  `password` text CHARACTER SET utf8mb4 NOT NULL,
  `avatar` text CHARACTER SET utf8mb4,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1624240500_avatar.png', NULL, 1, '2021-01-20 14:02:37', '2021-06-21 09:55:07'),
(2, 'No', 'sana', 'sana', '81dc9bdb52d04dc20036dbd8313ed055', 'isi.png', NULL, 0, '2022-11-04 03:27:13', NULL),
(3, 'to', 'haa', 'nooo', '202cb962ac59075b964b07152d234b70', '1643665133276.jpeg', NULL, 0, '2022-11-15 01:41:53', NULL),
(4, 'No', 'thida', 'niii', '202cb962ac59075b964b07152d234b70', 'Best-Khmer-Restaurants-in-Siem-Reap-Malis-Siemreapnet.jpg', NULL, 0, '2022-11-15 01:42:54', NULL),
(5, 'Hannah', 'No', 'po', 'c20ad4d76fe97759aa27a0c99bff6710', 'N1+Pad+Thai+Chicken.jpg', NULL, 0, '2022-11-15 01:47:35', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
