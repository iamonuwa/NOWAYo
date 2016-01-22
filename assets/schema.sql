-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2015 at 01:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `team`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_profile`
--

CREATE TABLE IF NOT EXISTS `app_profile` (
`id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_profile`
--

INSERT INTO `app_profile` (`id`, `user_id`, `address`, `state`, `city`, `phone`, `mobile`, `dateCreated`) VALUES
(1, 1, '', '', '', '', '', '2015-06-15 00:27:21'),
(3, 3, '', '', '', '', '', '2015-06-18 18:58:05'),
(8, 8, '', '', '', '', '', '2015-06-28 08:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `app_roles`
--

CREATE TABLE IF NOT EXISTS `app_roles` (
`id` smallint(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `server_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_roles`
--

INSERT INTO `app_roles` (`id`, `name`, `server_created`) VALUES
(3, 'USER', '2015-06-15 00:27:24'),
(7, 'TUTOR', '2015-06-15 00:27:24'),
(10, 'SUPER ADMINISTRATOR', '2015-06-15 00:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `app_site`
--

CREATE TABLE IF NOT EXISTS `app_site` (
`id` int(11) NOT NULL,
  `site_status` varchar(20) DEFAULT 'OFFLINE',
  `site_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
`id` bigint(20) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(125) NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT '3',
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `email`, `type`, `dateCreated`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'user@gmail.com', '3', '2015-06-15 00:27:28'),
(3, 'matrix4u', '75abd646aa7982eb338fb51b49178384', 'matrix4u2002@gmail.com', '3', '2015-06-18 18:58:05'),
(8, 'joell', '3a06557203411f5de77b9f39e6f238db', 'udujoel@gmail.com', '3', '2015-06-28 08:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `app_user_roles`
--

CREATE TABLE IF NOT EXISTS `app_user_roles` (
`id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `role_id` smallint(8) NOT NULL,
  `server_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_user_roles`
--

INSERT INTO `app_user_roles` (`id`, `user_id`, `role_id`, `server_created`) VALUES
(1, 1, 1, '2015-06-15 00:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `content` text NOT NULL,
  `slug` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
`state_id` tinyint(8) NOT NULL,
  `state` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
`id` smallint(8) NOT NULL,
  `description` varchar(128) DEFAULT NULL,
  `link` varchar(125) DEFAULT 'default.jpg',
  `presenter` tinyint(1) DEFAULT NULL,
  `server_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `description`, `link`, `presenter`, `server_created`) VALUES
(1, '', '507283537.jpg', NULL, '2015-06-30 13:15:06'),
(2, '', '709894511.jpg', 1, '2015-06-30 13:17:36'),
(3, '', '11013816-.jpg', NULL, '2015-06-30 13:19:50'),
(4, '', '965353188-.jpg', 1, '2015-06-30 13:22:42'),
(5, '', '1376316208jpg', NULL, '2015-06-30 13:25:08'),
(6, '', '1080236588.jpg', NULL, '2015-06-30 13:26:22'),
(7, '', '233487550.jpg', NULL, '2015-06-30 13:27:22'),
(8, '', '402072589.jpg', NULL, '2015-06-30 13:29:07'),
(9, '', '916949452.jpg', NULL, '2015-06-30 13:29:50'),
(10, '', '114287049.jpg', 1, '2015-06-30 13:30:06'),
(11, '', '862128870.jpg', NULL, '2015-06-30 13:30:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_profile`
--
ALTER TABLE `app_profile`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `app_roles`
--
ALTER TABLE `app_roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_site`
--
ALTER TABLE `app_site`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `app_user_roles`
--
ALTER TABLE `app_user_roles`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id_idx` (`user_id`), ADD KEY `role_id_idx` (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
 ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_profile`
--
ALTER TABLE `app_profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `app_roles`
--
ALTER TABLE `app_roles`
MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `app_site`
--
ALTER TABLE `app_site`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `app_user_roles`
--
ALTER TABLE `app_user_roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
MODIFY `state_id` tinyint(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `app_profile`
--
ALTER TABLE `app_profile`
ADD CONSTRAINT `app_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;