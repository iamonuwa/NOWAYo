-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2015 at 12:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `status`) VALUES
(1, 'Article 1', 'Ut lobortis varius velit, a pretium nibh eleifend at. Donec blandit congue ultricies. Maecenas cursus cursus nisi id vehicula. Aliquam a turpis velit. Nullam elit tortor, vehicula sed molestie nec, euismod gravida nisi. Integer imperdiet aliquam elementum. Etiam semper, neque sit amet rutrum adipiscing, ante augue blandit ligula, a tristique massa est sit amet mi.', 1),
(2, 'Article 2', 'Ut lobortis varius velit, a pretium nibh eleifend at. Donec blandit congue ultricies. Maecenas cursus cursus nisi id vehicula. Aliquam a turpis velit. Nullam elit tortor, vehicula sed molestie nec, euismod gravida nisi. Integer imperdiet aliquam elementum. Etiam semper, neque sit amet rutrum adipiscing, ante augue blandit ligula, a tristique massa est sit amet mi.', 1),
(3, 'Article 3', 'Ut lobortis varius velit, a pretium nibh eleifend at. Donec blandit congue ultricies. Maecenas cursus cursus nisi id vehicula. Aliquam a turpis velit. Nullam elit tortor, vehicula sed molestie nec, euismod gravida nisi. Integer imperdiet aliquam elementum. Etiam semper, neque sit amet rutrum adipiscing, ante augue blandit ligula, a tristique massa est sit amet mi.', 1),
(4, 'Article 4', 'Ut lobortis varius velit, a pretium nibh eleifend at. Donec blandit congue ultricies. Maecenas cursus cursus nisi id vehicula. Aliquam a turpis velit. Nullam elit tortor, vehicula sed molestie nec, euismod gravida nisi. Integer imperdiet aliquam elementum. Etiam semper, neque sit amet rutrum adipiscing, ante augue blandit ligula, a tristique massa est sit amet mi.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(11) NOT NULL,
  `user_id` int(8) NOT NULL,
  `file_link` varchar(1024) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `user_id`, `file_link`, `date`) VALUES
(1, 1, 'cam-1438164750Shit.png', '2015-07-29 10:12:30'),
(2, 1, 'cam-1438164750Screenshot from 2015-07-21 09:55:28.png', '2015-07-29 10:12:30'),
(3, 1, 'cam-1438164751Screenshot from 2015-07-20 07:57:44.png', '2015-07-29 10:12:31'),
(4, 1, 'cam-1438164751Screenshot from 2015-07-20 07:25:18.png', '2015-07-29 10:12:31'),
(5, 1, 'cam-1438164751Screenshot from 2015-07-18 01:09:39.png', '2015-07-29 10:12:31'),
(6, 1, 'cam-1438164751Screenshot from 2015-07-17 21:19:14.png', '2015-07-29 10:12:31'),
(7, 1, 'cam-1438164751Screenshot from 2015-07-17 20:59:45.png', '2015-07-29 10:12:31'),
(8, 1, 'cam-1438164751Screenshot from 2015-07-17 20:57:51.png', '2015-07-29 10:12:31'),
(9, 1, 'cam-1438164751Screenshot from 2015-07-16 23:16:39.png', '2015-07-29 10:12:31'),
(10, 1, 'cam-1438164751Screenshot from 2015-07-16 22:47:48.png', '2015-07-29 10:12:31'),
(11, 1, 'cam-1438164776Shit.png', '2015-07-29 10:12:56'),
(12, 1, 'cam-1438164776Screenshot from 2015-07-21 09:55:28.png', '2015-07-29 10:12:56'),
(13, 1, 'cam-1438164776Screenshot from 2015-07-20 07:57:44.png', '2015-07-29 10:12:56'),
(14, 1, 'cam-1438164776Screenshot from 2015-07-20 07:25:18.png', '2015-07-29 10:12:56'),
(15, 1, 'cam-1438164777Screenshot from 2015-07-18 01:09:39.png', '2015-07-29 10:12:57'),
(16, 1, 'cam-1438164777Screenshot from 2015-07-17 21:19:14.png', '2015-07-29 10:12:57'),
(17, 1, 'cam-1438164777Screenshot from 2015-07-17 20:59:45.png', '2015-07-29 10:12:57'),
(18, 1, 'cam-1438164777Screenshot from 2015-07-17 20:57:51.png', '2015-07-29 10:12:57'),
(19, 1, 'cam-1438164777Screenshot from 2015-07-16 23:16:39.png', '2015-07-29 10:12:57'),
(20, 1, 'cam-1438164777Screenshot from 2015-07-16 22:47:48.png', '2015-07-29 10:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_action_history`
--

CREATE TABLE IF NOT EXISTS `nowayo_action_history` (
  `action_id` int(10) unsigned NOT NULL,
  `action_user_fk` int(10) unsigned NOT NULL,
  `action_description` text NOT NULL,
  `action_page` text NOT NULL,
  `action_date` datetime NOT NULL,
  `action_ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_cam`
--

CREATE TABLE IF NOT EXISTS `nowayo_cam` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_groups`
--

CREATE TABLE IF NOT EXISTS `nowayo_groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nowayo_groups`
--

INSERT INTO `nowayo_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrators');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_login_attempts`
--

CREATE TABLE IF NOT EXISTS `nowayo_login_attempts` (
  `id` mediumint(8) unsigned NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_news`
--

CREATE TABLE IF NOT EXISTS `nowayo_news` (
  `news_id` int(10) unsigned NOT NULL,
  `news_user_fk` mediumint(9) NOT NULL,
  `news_active` tinyint(4) DEFAULT '1',
  `news_title` varchar(128) NOT NULL,
  `news_title_url` varchar(128) DEFAULT NULL,
  `news_content` text NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `news_added` int(11) NOT NULL,
  `news_authors_ip` varchar(20) NOT NULL,
  `news_link` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_session`
--

CREATE TABLE IF NOT EXISTS `nowayo_session` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nowayo_session`
--

INSERT INTO `nowayo_session` (`id`, `ip_address`, `user_agent`, `last_activity`, `data`, `timestamp`) VALUES
('47206730abbe7847523060bcb89671843394d889', '127.0.0.1', '', 0, '__ci_last_regenerate|i:1438195798;', '0000-00-00 00:00:00'),
('b30110d71fa4ee6f50c9793c39afa01b31181b8b', '127.0.0.1', '', 0, '__ci_last_regenerate|i:1438195385;', '0000-00-00 00:00:00'),
('e83a998ff7fb6600d31647afb39c514fbd3581d8', '127.0.0.1', '', 0, '__ci_last_regenerate|i:1438253553;', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_state`
--

CREATE TABLE IF NOT EXISTS `nowayo_state` (
  `state_id` tinyint(8) NOT NULL,
  `state_name` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_state`
--

INSERT INTO `nowayo_state` (`state_id`, `state_name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa-Ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross Rivers'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'FCT'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Kastina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_uploads`
--

CREATE TABLE IF NOT EXISTS `nowayo_uploads` (
  `album_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `description` varchar(128) DEFAULT NULL,
  `link` varchar(125) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL,
  `server_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_uploads`
--

INSERT INTO `nowayo_uploads` (`album_id`, `upload_id`, `description`, `link`, `type`, `server_created`, `user_id`) VALUES
(8762, 1, '', 'cam-1438175468Shit.png', 'cam-tales', '2015-07-29 13:11:08', 1),
(2188, 2, '', 'cam-1438175468Screenshot from 2015-07-21 09:55:28.png', 'cam-tales', '2015-07-29 13:11:08', 1),
(9046, 3, '', 'cam-1438175469Screenshot from 2015-07-20 07:57:44.png', 'cam-tales', '2015-07-29 13:11:09', 1),
(5998, 4, '', 'cam-1438175469Screenshot from 2015-07-20 07:25:18.png', 'cam-tales', '2015-07-29 13:11:09', 1),
(1589, 5, '', 'cam-1438175469Screenshot from 2015-07-18 01:09:39.png', 'cam-tales', '2015-07-29 13:11:09', 1),
(2859, 6, '<p>Testing Model</p>', 'cam-1438186237Shit.png', 'cam-tales', '2015-07-29 16:10:37', 1),
(7387, 7, '<p>Testing Model</p>', 'cam-1438186237Screenshot from 2015-07-21 09:55:28.png', 'cam-tales', '2015-07-29 16:10:37', 1),
(695, 8, '<p>Testing Model</p>', 'cam-1438186237Screenshot from 2015-07-20 07:57:44.png', 'cam-tales', '2015-07-29 16:10:37', 1),
(1623, 9, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-20 07:25:18.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(1122, 10, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-18 01:09:39.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(6681, 11, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-17 21:19:14.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(9341, 12, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-17 20:59:45.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(3978, 13, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-17 20:57:51.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(9761, 14, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-16 23:16:39.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(8646, 15, '<p>Testing Model</p>', 'cam-1438186238Screenshot from 2015-07-16 22:47:48.png', 'cam-tales', '2015-07-29 16:10:38', 1),
(8349, 16, '', 'cam-1438186516Screenshot from 2015-07-17 21:19:14.png', 'cam-tales', '2015-07-29 16:15:16', 1),
(9698, 17, '', 'cam-1438186516Screenshot from 2015-07-17 20:59:45.png', 'cam-tales', '2015-07-29 16:15:16', 1),
(6096, 18, '', 'cam-1438186516Screenshot from 2015-07-17 20:57:51.png', 'cam-tales', '2015-07-29 16:15:16', 1),
(5374, 19, '', 'cam-1438186517Screenshot from 2015-07-16 23:16:39.png', 'cam-tales', '2015-07-29 16:15:17', 1),
(9100, 20, '', 'cam-1438186517Screenshot from 2015-07-16 22:47:48.png', 'cam-tales', '2015-07-29 16:15:17', 1),
(998, 21, '', 'cam-1438186517model.png', 'cam-tales', '2015-07-29 16:15:17', 1),
(4875, 22, '', 'cam-1438186517layout-2015-07-21-095453.png', 'cam-tales', '2015-07-29 16:15:17', 1),
(8478, 23, '', 'cam-1438186543Shit.png', 'cam-tales', '2015-07-29 16:15:43', 1),
(9759, 24, '', 'cam-1438186543Screenshot from 2015-07-21 09:55:28.png', 'cam-tales', '2015-07-29 16:15:43', 1),
(86, 25, '', 'cam-1438186543Screenshot from 2015-07-20 07:57:44.png', 'cam-tales', '2015-07-29 16:15:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_users`
--

CREATE TABLE IF NOT EXISTS `nowayo_users` (
  `id` mediumint(8) unsigned NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nowayo_users`
--

INSERT INTO `nowayo_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, 0x7f000001, 'nnachi onuwa', 'e677ec32d5c22ae8c4d341c1873216d018cdc3e1', '407b1f6ba4', 'admin@email.com', NULL, NULL, NULL, 'f816b317d3ad6009efaeca5b68e93d9505dce7e9', 1436373080, 1438195359, 1, 'Nnachi', 'Onuwa', 'ihubTechnologies', '08062457326'),
(2, 0x7f000001, 'chinedu  onuwa', 'c5c7f23c59c7ea9dec596b1c501c2e6d5534ffd7', 'f4655222cc', 'cj.onuwa@gmail.com', NULL, NULL, NULL, '59f90e146cdb0074b88aa07ddcc1926a4aea4cf0', 1436374677, 1436388693, 1, 'Chinedu ', 'Onuwa', 'Chinedu Electronics', '08062457326');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_users_groups`
--

CREATE TABLE IF NOT EXISTS `nowayo_users_groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nowayo_users_groups`
--

INSERT INTO `nowayo_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_views`
--

CREATE TABLE IF NOT EXISTS `nowayo_views` (
  `views_id` int(11) NOT NULL,
  `page_name` varchar(25) DEFAULT NULL,
  `ip` varchar(25) NOT NULL DEFAULT '0.0.0.0',
  `count` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_views`
--

INSERT INTO `nowayo_views` (`views_id`, `page_name`, `ip`, `count`) VALUES
(0, 'home/index', '127.0.0.1', 1),
(1, 'home/index', '127.0.0.1', 1),
(2, 'home/index', '127.0.0.1', 1),
(3, 'home/index', '127.0.0.1', 1),
(4, 'home/index', '127.0.0.1', 1),
(5, 'home/index', '127.0.0.1', 1),
(6, 'home/index', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `article_ids` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `article_ids`) VALUES
(1, 'php', 'a:1:{i:0;i:1;}'),
(2, 'php5', 'a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}'),
(3, 'oop', 'a:2:{i:0;i:1;i:1;i:4;}'),
(4, 'mvc', 'a:2:{i:0;i:1;i:1;i:2;}'),
(5, 'codeigniter', 'a:1:{i:0;i:2;}'),
(6, 'rwd', 'a:1:{i:0;i:2;}'),
(7, 'bootstrap', 'a:1:{i:0;i:3;}'),
(10, 'jquery', 'a:1:{i:0;i:4;}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_action_history`
--
ALTER TABLE `nowayo_action_history`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `action_user_fk` (`action_user_fk`);

--
-- Indexes for table `nowayo_cam`
--
ALTER TABLE `nowayo_cam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_groups`
--
ALTER TABLE `nowayo_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_login_attempts`
--
ALTER TABLE `nowayo_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_news`
--
ALTER TABLE `nowayo_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_title_url` (`news_title_url`),
  ADD KEY `news_user_fk` (`news_user_fk`),
  ADD KEY `news_active` (`news_active`);

--
-- Indexes for table `nowayo_session`
--
ALTER TABLE `nowayo_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `nowayo_state`
--
ALTER TABLE `nowayo_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `nowayo_uploads`
--
ALTER TABLE `nowayo_uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `nowayo_users`
--
ALTER TABLE `nowayo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_users_groups`
--
ALTER TABLE `nowayo_users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_views`
--
ALTER TABLE `nowayo_views`
  ADD PRIMARY KEY (`views_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nowayo_action_history`
--
ALTER TABLE `nowayo_action_history`
  MODIFY `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nowayo_cam`
--
ALTER TABLE `nowayo_cam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nowayo_groups`
--
ALTER TABLE `nowayo_groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nowayo_login_attempts`
--
ALTER TABLE `nowayo_login_attempts`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nowayo_news`
--
ALTER TABLE `nowayo_news`
  MODIFY `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nowayo_state`
--
ALTER TABLE `nowayo_state`
  MODIFY `state_id` tinyint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `nowayo_uploads`
--
ALTER TABLE `nowayo_uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `nowayo_users`
--
ALTER TABLE `nowayo_users`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nowayo_users_groups`
--
ALTER TABLE `nowayo_users_groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nowayo_views`
--
ALTER TABLE `nowayo_views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
