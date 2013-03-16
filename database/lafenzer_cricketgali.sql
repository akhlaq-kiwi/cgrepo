-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2013 at 12:40 PM
-- Server version: 5.5.30
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lafenzer_cricketgali`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

DROP TABLE IF EXISTS `tbl_address`;
CREATE TABLE IF NOT EXISTS `tbl_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `term_id`, `type`, `state`, `address`, `city`, `add_date`, `update_date`) VALUES
(6, 11, 'team', 1, 'this is test', 1, '2012-03-10 17:33:28', '2012-03-10 17:35:02'),
(7, 2, 'user', 2, 'fd', 2, '2012-03-10 18:14:31', '2012-03-10 18:14:31'),
(11, 4, 'club', 1, 'delhi Address', 1, '2012-03-10 18:32:10', '2012-03-10 18:32:10'),
(12, 5, 'club', 1, 'delhi Address5', 1, '2012-03-10 18:32:17', '2012-03-10 18:32:43'),
(13, 12, 'user', 1, 'E-206/4, Shaheen Bagh, Jamia Nagar Okhla', 1, '2012-03-10 11:36:19', '2012-03-10 11:36:19'),
(14, 12, 'user', 1, 'E-206/4, Shaheen Bagh, Jamia Nagar Okhla', 1, '2012-03-10 11:36:41', '2012-03-10 11:36:41'),
(15, 12, 'team', 1, 'Jakir Nagar', 1, '2012-03-10 11:40:31', '2012-03-10 11:40:31'),
(16, 1, 'user', 1, 'Jamia Nagar, Okhla', 1, '2012-03-10 13:51:59', '2012-03-10 13:51:59'),
(17, 13, 'user', 2, 'bajbjbnjb', 2, '2012-03-14 13:07:58', '2012-03-14 13:07:58'),
(18, 13, 'team', 2, 'haajhjjd', 0, '2012-03-14 13:13:20', '2012-03-14 13:13:20'),
(19, 15, 'user', 2, 'uhfghg', 2, '2012-03-17 14:05:24', '2012-03-17 14:05:24'),
(20, 15, 'user', 2, 'uhfghg', 2, '2012-03-17 14:05:37', '2012-03-17 14:05:37'),
(21, 17, 'user', 2, 'Gr.NOIDA', 0, '2012-03-18 01:47:21', '2012-03-18 01:47:21'),
(22, 19, 'user', 0, '', 0, '2012-03-26 23:32:51', '2012-03-26 23:32:51'),
(23, 15, 'user', 2, 'Bareilly', 2, '2012-03-26 23:36:20', '2012-03-26 23:36:20'),
(24, 15, 'user', 2, 'uhfghg', 2, '2012-03-26 23:36:30', '2012-03-26 23:36:30'),
(25, 20, 'user', 1, 'shaheen bagh', 1, '2012-03-29 12:40:51', '2012-03-29 12:40:51'),
(26, 21, 'user', 0, '', 0, '2012-03-30 14:55:20', '2012-03-30 14:55:20'),
(27, 21, 'user', 0, 'asd', 1, '2012-03-30 14:55:39', '2012-03-30 14:55:39'),
(28, 23, 'user', 2, 'B.S.K.BHADOHI S.R.N BHADOHI', 0, '2012-04-08 15:44:06', '2012-04-08 15:44:06'),
(29, 14, 'team', 2, 'B.S.K BHADOHI', 0, '2012-04-08 15:48:03', '2012-04-08 15:59:01'),
(30, 24, 'user', 0, '', 0, '2012-04-16 04:39:56', '2012-04-16 04:39:56'),
(31, 15, 'team', 4, '', 0, '2012-04-16 04:44:46', '2012-04-16 04:44:57'),
(32, 27, 'user', 29, '', 0, '2012-04-21 08:34:02', '2012-04-21 08:34:02'),
(33, 29, 'user', 30, '', 0, '2012-05-01 07:01:18', '2012-05-01 07:01:18'),
(34, 16, 'team', 30, '', 0, '2012-05-01 07:01:54', '2012-05-01 07:02:02'),
(35, 6, 'club', 1, '', 0, '2012-05-01 07:02:27', '2012-05-01 07:02:27'),
(36, 30, 'user', 2, '786 a barelly', 2, '2012-05-06 16:06:02', '2012-05-06 16:06:02'),
(37, 17, 'team', 2, '786a bareilly', 2, '2012-05-06 16:09:26', '2012-05-06 16:09:26'),
(38, 31, 'user', 2, 'Moh Mian Khan Neoriya Husainpur Pilibhit', 2, '2012-05-10 07:29:17', '2012-05-10 07:29:17'),
(39, 31, 'user', 2, 'Moh Mian Khan Neoriya Husainpur Pilibhit', 2, '2012-05-10 07:31:06', '2012-05-10 07:31:06'),
(40, 34, 'user', 0, '', 0, '2012-05-20 00:53:54', '2012-05-20 00:53:54'),
(41, 42, 'user', 1, 'E-206/5', 1, '2012-06-25 22:58:13', '2012-06-25 22:58:13'),
(42, 18, 'team', 1, 'thecm nv,x.cbvxb ', 1, '2012-07-22 02:14:40', '2012-07-22 02:14:40'),
(43, 521, 'user', 2, 'Neoria', 2, '2012-07-22 22:56:50', '2012-07-22 23:02:59'),
(44, 521, 'user', 2, 'Neoria', 2, '2012-07-22 22:57:00', '2012-07-22 23:02:59'),
(45, 521, 'user', 2, 'Neoria', 2, '2012-07-22 22:57:33', '2012-07-22 23:02:59'),
(46, 521, 'user', 2, 'Neoria', 2, '2012-07-22 22:57:46', '2012-07-22 23:02:59'),
(47, 521, 'user', 2, 'Neoria', 2, '2012-07-22 22:58:56', '2012-07-22 23:02:59'),
(48, 521, 'user', 2, 'Neoria', 2, '2012-07-22 22:59:47', '2012-07-22 23:02:59'),
(49, 521, 'user', 2, 'Neoria', 2, '2012-07-22 23:00:38', '2012-07-22 23:02:59'),
(50, 521, 'user', 2, 'Neoria', 2, '2012-07-22 23:01:00', '2012-07-22 23:02:59'),
(51, 7, 'club', 1, 'address here', 1, '2012-07-28 01:38:17', '2012-07-29 16:01:51'),
(52, 19, 'team', 32, '', 0, '2013-02-28 14:35:59', '2013-02-28 14:35:59'),
(53, 544, 'user', 32, '', 0, '2013-03-03 01:09:13', '2013-03-03 01:09:13'),
(54, 546, 'user', 15, 'Village - Kohra P.O. - Sainthal Tehsil- Jogindernagar Distt. - Mandi (HP) Pincode- 175032', 0, '2013-03-06 01:00:44', '2013-03-06 01:00:44'),
(55, 20, 'team', 32, '5portofino place\r\n', 0, '2013-03-09 13:54:35', '2013-03-09 13:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

DROP TABLE IF EXISTS `tbl_cities`;
CREATE TABLE IF NOT EXISTS `tbl_cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `city_uri` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`city_id`, `state_id`, `city_name`, `city_uri`, `add_date`, `update_date`) VALUES
(1, 1, 'Shouth Delhi', 'south_delhi', NULL, NULL),
(2, 2, 'Bareilly', 'bareilly', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubs`
--

DROP TABLE IF EXISTS `tbl_clubs`;
CREATE TABLE IF NOT EXISTS `tbl_clubs` (
  `club_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `club_name` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_clubs`
--

INSERT INTO `tbl_clubs` (`club_id`, `user_id`, `club_name`, `add_date`, `update_date`) VALUES
(4, 2, 'Club India', '2012-03-10 18:32:10', '2012-03-10 18:32:10'),
(5, 2, 'Club India', '2012-03-10 18:32:17', '2012-03-10 18:32:43'),
(6, 29, 'Delhi Daredevils', '2012-05-01 07:02:27', '2012-05-01 07:02:27'),
(7, 521, 'Test', '2012-07-28 01:38:17', '2012-07-29 16:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club_player_relation`
--

DROP TABLE IF EXISTS `tbl_club_player_relation`;
CREATE TABLE IF NOT EXISTS `tbl_club_player_relation` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_club_player_relation`
--

INSERT INTO `tbl_club_player_relation` (`relation_id`, `user_id`, `club_id`, `status`, `add_date`, `update_date`) VALUES
(3, 2, 4, 1, '2012-03-10 18:32:10', '2012-03-10 18:32:10'),
(4, 2, 5, 1, '2012-03-10 18:32:17', '2012-03-10 18:32:17'),
(5, 29, 6, 1, '2012-05-01 07:02:27', '2012-05-01 07:02:27'),
(6, 521, 7, 1, '2012-07-28 01:38:17', '2012-07-28 01:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `alt_mobile_no` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `user_id`, `alt_email`, `mobile_no`, `alt_mobile_no`, `phone_no`, `add_date`, `update_date`) VALUES
(1, 2, 'akhlaq_ad@gmail.com', '9971545054', '9555777902', '112546895', '2012-03-10 15:10:44', '2012-03-10 13:35:46'),
(2, 12, 'tajiqbalahmad@yahoo.com', '9555487833', '9555777902', '', '2012-03-10 11:37:40', '2012-03-10 11:37:40'),
(3, 15, 'aftabamu85@gmail.com', '9654069084', '8585903503', '', '2012-03-17 14:06:33', '2012-03-17 14:06:33'),
(4, 17, 'pravinkmr789@gmail.com', '8860392765', '9458662099', '', '2012-03-18 01:48:50', '2012-03-18 01:48:50'),
(5, 23, 'ziaulmustafa07@gmail.com', '9044198665', '8303860028', '', '2012-04-08 16:04:17', '2012-04-08 16:04:17'),
(6, 42, 'ahm@gmail.com', '997154699', '435345345', '345345345345', '2012-06-26 23:14:09', '2012-06-26 23:14:09'),
(7, 520, 'ahm@gmail.com', '997154699', '435345345', '345345345345', '2012-07-22 19:58:29', '2012-07-22 19:58:29'),
(8, 521, 'ahm@gmail.com', '9971546991', '435345345', '345345345345', '2012-07-22 22:34:36', '2012-07-22 22:51:47'),
(9, 546, 'navneet3334@gmail.com', '+918894969083', '+918626876041', '01908251142', '2013-03-06 01:04:03', '2013-03-06 01:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cricket_profile`
--

DROP TABLE IF EXISTS `tbl_cricket_profile`;
CREATE TABLE IF NOT EXISTS `tbl_cricket_profile` (
  `cricket_profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `playing_role` varchar(255) DEFAULT NULL,
  `batting_style` varchar(255) DEFAULT NULL,
  `bowling_style` varchar(255) DEFAULT NULL,
  `fielding_position` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`cricket_profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_cricket_profile`
--

INSERT INTO `tbl_cricket_profile` (`cricket_profile_id`, `user_id`, `nick_name`, `playing_role`, `batting_style`, `bowling_style`, `fielding_position`, `add_date`, `update_date`) VALUES
(1, 2, 'Akki', 'Opener', 'Left Arm', 'Middle', 'Wicket Keeper', '2012-03-10 15:32:24', '2012-03-10 13:36:09'),
(2, 12, 'Taj', 'Batsman/Bowler', 'Right Hand', 'Right Hand', 'Off Side', '2012-03-10 11:38:54', '2012-03-11 11:31:16'),
(3, 17, 'pravin ', 'one down', 'right hand', 'right hand slow', 'keeping', '2012-03-18 01:51:16', '2012-03-18 01:51:16'),
(4, 20, 'Danny', 'Batsman', 'Right Hand', 'Spinner', 'Long on', '2012-03-29 12:42:49', '2012-03-29 12:42:49'),
(5, 42, 'test', 'batsman', 'left', 'fast', 'deep_fine_leg', '2012-06-26 23:14:45', '2012-07-22 01:38:49'),
(6, 1, 'sachin', 'batsman', 'left', 'fast', 'wicketkeeper', '2012-07-15 21:50:45', '2012-07-15 23:17:32'),
(7, 520, 'test', 'batsman', 'left', 'fast', 'cover', '2012-07-22 19:58:36', '2012-07-22 19:58:36'),
(8, 546, 'Prince', 'all_rounder', 'right', 'fast', 'point', '2013-03-06 01:02:20', '2013-03-06 01:02:20'),
(9, 548, 'brenti', 'batsman', 'right', 'medium', 'slip', '2013-03-09 14:00:07', '2013-03-09 14:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE IF NOT EXISTS `tbl_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profile_image` int(1) DEFAULT '0',
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `user_id`, `name`, `profile_image`, `add_date`, `update_date`) VALUES
(7, 1, '1331409164.jpg', 1, '2012-03-10 13:52:44', '2012-03-10 13:52:44'),
(16, 15, '1332011364.jpg', 1, '2012-03-17 14:09:24', '2012-03-17 14:09:24'),
(17, 17, '1332053547.JPG', 0, '2012-03-18 01:52:27', '2012-03-18 01:52:27'),
(20, 2, '1332881865.jpg', 0, '2012-03-27 15:57:45', '2012-05-15 12:44:24'),
(22, 2, '1332882185.jpg', 0, '2012-03-27 16:03:05', '2012-05-15 12:44:24'),
(24, 2, '1332882196.jpg', 0, '2012-03-27 16:03:16', '2012-05-15 12:44:24'),
(26, 2, '1332882207.jpg', 1, '2012-03-27 16:03:27', '2012-05-15 12:44:24'),
(27, 2, '1332882214.jpg', 0, '2012-03-27 16:03:34', '2012-05-15 12:44:24'),
(30, 2, '1332882414.JPG', 0, '2012-03-27 16:06:54', '2012-05-15 12:44:24'),
(31, 20, '1333043078.jpg', 1, '2012-03-29 12:44:38', '2012-03-29 12:44:46'),
(32, 30, '1336338434.jpg', 0, '2012-05-06 16:07:14', '2012-05-06 16:07:14'),
(33, 42, '1340732786.jpg', 1, '2012-06-26 23:16:26', '2012-06-28 23:02:19'),
(34, 42, '1340732801.jpg', 0, '2012-06-26 23:16:41', '2012-06-28 23:02:19'),
(35, 42, '1340732804.jpg', 0, '2012-06-26 23:16:44', '2012-06-28 23:02:19'),
(36, 42, '1342364111.jpg', 0, '2012-07-15 20:25:11', '2012-07-15 20:25:11'),
(37, 520, '1342967322.jpg', 1, '2012-07-22 19:58:42', '2012-07-22 19:58:45'),
(38, 521, '1343558532.jpg', 1, '2012-07-29 16:12:12', '2012-07-29 16:12:18'),
(39, 521, '1343558536.JPG', 0, '2012-07-29 16:12:16', '2012-07-29 16:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

DROP TABLE IF EXISTS `tbl_messages`;
CREATE TABLE IF NOT EXISTS `tbl_messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_to` int(11) DEFAULT NULL,
  `msg_from` int(11) DEFAULT NULL,
  `message` text,
  `status` int(1) DEFAULT '0',
  `delete_to` int(1) DEFAULT '0',
  `delete_from` int(1) DEFAULT '0',
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`message_id`, `msg_to`, `msg_from`, `message`, `status`, `delete_to`, `delete_from`, `add_date`, `update_date`) VALUES
(2, 2, 1, 'this is test message', 0, 0, 0, '2012-03-10 19:05:10', '2012-03-10 19:05:10'),
(3, 2, 2, 'fg df gdf gdf', 0, 0, 0, '2012-03-10 19:42:53', '2012-03-10 19:42:53'),
(4, 2, 12, 'Hello Akhlaq\r\n\r\nHow are you?', 0, 0, 0, '2012-03-10 11:41:10', '2012-03-10 11:41:10'),
(5, 12, 2, 'Hi, i am fine', 0, 0, 0, '2012-03-10 11:42:49', '2012-03-10 11:42:49'),
(6, 1, 35, 'iyurgygtrfr', 0, 0, 0, '2012-05-20 06:59:42', '2012-05-20 06:59:42'),
(7, 35, 35, 'dfds', 0, 0, 0, '2012-05-20 07:00:14', '2012-05-20 07:00:14'),
(8, 9, 42, 'this is my message.', 0, 0, 0, '2012-06-26 23:43:30', '2012-06-26 23:43:30'),
(9, 42, 42, '', 0, 0, 0, '2012-07-15 20:25:42', '2012-07-15 20:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

DROP TABLE IF EXISTS `tbl_pages`;
CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `uri` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`page_id`, `title`, `content`, `uri`, `meta_title`, `meta_keyword`, `meta_description`, `type`, `status`, `add_date`, `update_date`) VALUES
(1, 'About Us', 'this is  desc', 'about_us', 'About Us', 'About Us', 'About Us', 'page', 1, '2012-02-23 14:17:33', '2012-02-23 14:17:33'),
(2, 'Contact Us', 'this is contact us page', 'contact_us', 'Contact Us', 'Contact Us', 'Contact UsContact UsContact UsContact Us', 'page', 1, '2012-02-24 13:29:57', '2012-02-24 13:29:57'),
(3, 'Help', 'this is help text', 'help', 'Help', 'Help', 'Help Help Help', 'page', 1, '2012-02-24 13:31:09', '2012-02-24 13:31:09'),
(4, 'Cricket Club In #rep#', '<h2>What is Cricket Club?</h2>\r\nAs cricket grown globally cricket clubs came in to the picture, Cricket clubs provide platform to cricketers and cricket teams to play matches and train them. Cricket Clubs usually organizes cricket matches by which cricketers and cricket teams have opportunity to go in international cricket and furnish their cricket skills. \r\n<br />\r\n<h2>What CricketGali.com do?</h2>\r\nCricketGali.com provides a way to find out cricket clubs in #rep#. We have opportunity for cricketers of #rep# to find cricket clubs in #rep#. CricketGali.com is also very beneficial for cricket club owners of #rep# they can register their cricket clubs in #rep#. It is 100% free and It would be very easy for them to advertise their cricket Club in #rep#.', 'cricket_club_in_#rep#', 'Cricket Club In #rep#', 'Cricket Club In #rep#', 'Cricket Club In #rep#', 'clubs', 1, '2012-02-26 03:50:16', '2012-02-26 14:40:55'),
(5, 'Teams in #rep#', '<h2>What is Cricket Team?</h2>\r\n<br />\r\nA team is a group of eleven cricket players. A player may be known as a batsman or bowler depending on his skills. A well-balanced team usually has five or six goos batsmen and four or five good bowlers. Every Teams always has a good wicket-keeper because of the importance of this fielding position. Each team is leaded by a captain who can make decisions such as determining the batting order, the placement of fielders and the rotation of bowlers.\r\n\r\n<h2>What CrickeGali.com do for Teams?</h2>\r\n<br />\r\nAny cricket player or cricket lover can find cricket team in #rep#, If you looking for cricket teams in #rep# then cricketgali.com is the best place to find cricket teams in #rep#. If you don''t find any cricket team in #rep#, you can create your own team on cricketgali.com and invite your friend to join your team and play matches with other teams in #rep# or any other location. ', 'teams_in_#rep#', 'Teams in #rep#', 'Teams in #rep#', 'Teams in #rep#', 'teams', 1, '2012-02-26 07:39:22', '2012-02-26 14:41:00'),
(6, 'Cricketers in #rep#', 'CricketGali.com provides easiest way to find cricket players to play cricket in #rep# which is the biggest challenge for cricket lovers in such a hectic schedule of life. Remember your gali where you call you friends with very funny voices to hide from their parents. We are trying to provide that kind of gali for cricket in your #rep#. Any one can create cricket profile on CricketGali.com for #rep# based cricket teams. Find cricket teams in #rep# and join them. There are lot of cricket teams are there in #rep#', 'criketrs_in_#rep#', 'Cricketers in #rep#', 'Cricketers in #rep#', 'Cricketers in #rep#', 'cricketers', 1, '2012-02-26 07:39:22', '2012-02-26 14:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

DROP TABLE IF EXISTS `tbl_profile`;
CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `about` text NOT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`profile_id`, `user_id`, `date_of_birth`, `gender`, `about`, `add_date`, `update_date`) VALUES
(4, 2, '1985-03-17 00:00:00', 1, '', '2012-03-10 18:14:31', '2012-03-10 18:14:31'),
(5, 12, '1985-03-08 00:00:00', 1, '', '2012-03-10 11:36:19', '2012-03-10 11:36:41'),
(6, 1, '1985-03-17 00:00:00', 1, 'this is how i felt in love with cricket.', '2012-03-10 13:51:59', '2012-07-15 23:22:44'),
(7, 13, '1991-07-02 00:00:00', 1, '', '2012-03-14 13:07:57', '2012-03-14 13:07:57'),
(8, 15, '1985-03-18 00:00:00', 1, '', '2012-03-17 14:05:24', '2012-03-26 23:36:30'),
(9, 17, '1985-06-20 00:00:00', 1, '', '2012-03-18 01:47:21', '2012-03-18 01:47:21'),
(10, 19, '0000-00-00 00:00:00', 1, '', '2012-03-26 23:32:51', '2012-03-26 23:32:51'),
(11, 20, '1989-08-17 00:00:00', 1, '', '2012-03-29 12:40:51', '2012-03-29 12:40:51'),
(12, 21, '2012-03-07 00:00:00', 1, '', '2012-03-30 14:55:20', '2012-03-30 14:55:39'),
(13, 23, '1990-07-01 00:00:00', 1, '', '2012-04-08 15:44:06', '2012-04-08 15:44:06'),
(14, 24, '0000-00-00 00:00:00', 1, '', '2012-04-16 04:39:56', '2012-04-16 04:39:56'),
(15, 27, '1997-01-18 00:00:00', 1, '', '2012-04-21 08:34:02', '2012-04-21 08:34:02'),
(16, 29, '2012-05-25 00:00:00', 1, '', '2012-05-01 07:01:18', '2012-05-01 07:01:18'),
(17, 30, '1970-12-25 00:00:00', 1, '', '2012-05-06 16:06:02', '2012-05-06 16:06:02'),
(18, 31, '1991-01-01 00:00:00', 1, '', '2012-05-10 07:29:17', '2012-05-10 07:31:06'),
(19, 34, '0000-00-00 00:00:00', 1, '', '2012-05-20 00:53:54', '2012-05-20 00:53:54'),
(20, 42, '2012-06-13 00:00:00', 1, 'This is how , i have been in creicket  with love', '2012-06-25 22:58:13', '2012-07-21 00:55:40'),
(21, 520, '1985-03-17 00:00:00', 1, 'I love cricket', '2012-07-22 19:57:56', '2012-07-22 20:00:29'),
(22, 521, '1985-03-17 00:00:00', 1, 'I love cricket', '2012-07-22 22:29:59', '2012-07-22 23:02:59'),
(23, 544, '1999-09-28 00:00:00', 1, 'iam a good cricketer and good person', '2013-03-03 01:09:13', '2013-03-03 01:09:13'),
(24, 546, '0000-00-00 00:00:00', 1, 'I am a good cricketer', '2013-03-06 01:00:44', '2013-03-06 01:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

DROP TABLE IF EXISTS `tbl_states`;
CREATE TABLE IF NOT EXISTS `tbl_states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) DEFAULT NULL,
  `state_uri` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`state_id`, `state_name`, `state_uri`, `add_date`, `update_date`) VALUES
(1, 'Delhi', 'delhi', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(2, 'Uttar Pradesh', 'uttar_pradesh', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(3, 'Andaman and Nicobar Islands ', 'andaman_and_nicobar_islands', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(4, 'Andhra Pradesh ', 'andhra_pradesh', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(5, 'Arunachal Pradesh ', 'arunachal_pradesh', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(6, 'Assam ', 'assam', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(7, 'Bihar ', 'bihar', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),
(8, 'Chandigarh ', 'chandigarh', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(9, 'Chhattisgarh ', 'chhattisgarh', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(10, 'Dadra and Nagar Haveli ', 'dadra_and_nagar_haveli', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(11, 'Daman and Diu ', 'daman_and_diu', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(12, 'Goa ', 'goa', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(13, 'Gujarat ', 'gujarat', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(14, 'Haryana ', 'haryana', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(15, 'Himachal Pradesh ', 'himachal_pradesh', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(16, 'Jammu and Kashmir ', 'jammu_and_kashmir', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(17, 'Jharkhand ', 'jharkhand', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(18, 'Karnataka ', 'karnataka', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(19, 'Kerala ', 'kerala', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(20, 'Lakshadweep ', 'lakshadweep', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(21, 'Madhya Pradesh ', 'madhya_pradesh', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(22, 'Maharashtra ', 'maharashtra', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(23, 'Manipur ', 'manipur', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(24, 'Meghalaya ', 'meghalaya', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(25, 'Mizoram ', 'mizoram', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(26, 'Nagaland ', 'nagaland', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(27, 'Orissa ', 'orissa', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(28, 'Pondicherry ', 'pondicherry', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),
(29, 'Punjab ', 'punjab', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),
(30, 'Rajasthan ', 'rajasthan', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),
(31, 'Sikkim', 'sikkim', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),
(32, 'Tamil Nadu ', 'tamil_nadu', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),
(33, 'Tripura ', 'tripura', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),
(34, 'Uttarakhand ', 'uttarakhand', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),
(35, 'West Bengal', 'west_bengal', '2012-02-27 12:55:06', '2012-02-27 12:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

DROP TABLE IF EXISTS `tbl_teams`;
CREATE TABLE IF NOT EXISTS `tbl_teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`team_id`, `user_id`, `team_name`, `add_date`, `update_date`) VALUES
(11, 2, 'Bhasad Eleven1', '2012-03-10 17:33:28', '2012-03-10 17:35:02'),
(12, 12, 'Faiz-e-Aam', '2012-03-10 11:40:31', '2012-03-10 11:40:31'),
(13, 13, 'Khan Warriors', '2012-03-14 13:13:20', '2012-03-14 13:13:20'),
(14, 23, 'TRUE LIGHT WORIERS', '2012-04-08 15:48:03', '2012-04-08 15:59:01'),
(15, 24, '', '2012-04-16 04:44:46', '2012-04-16 04:44:57'),
(16, 29, 'Karachi Super Kings', '2012-05-01 07:01:54', '2012-05-01 07:02:02'),
(17, 30, 'Zoom Pakistan', '2012-05-06 16:09:26', '2012-05-06 16:09:26'),
(18, 42, 'test', '2012-07-22 02:14:40', '2012-07-22 02:14:40'),
(19, 542, 'terrorboys', '2013-02-28 14:35:59', '2013-02-28 14:35:59'),
(20, 548, 'beast25', '2013-03-09 13:54:35', '2013-03-09 13:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_player_relation`
--

DROP TABLE IF EXISTS `tbl_team_player_relation`;
CREATE TABLE IF NOT EXISTS `tbl_team_player_relation` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `caption` int(1) DEFAULT '0',
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_team_player_relation`
--

INSERT INTO `tbl_team_player_relation` (`relation_id`, `user_id`, `team_id`, `status`, `caption`, `add_date`, `update_date`) VALUES
(1, 2, 11, 1, 0, '2012-03-10 17:33:28', '2012-03-10 17:33:28'),
(2, 12, 12, 1, 0, '2012-03-10 11:40:31', '2012-03-10 11:40:31'),
(3, 13, 13, 1, 0, '2012-03-14 13:13:20', '2012-03-14 13:13:20'),
(4, 23, 14, 1, 0, '2012-04-08 15:48:03', '2012-04-08 15:48:03'),
(5, 24, 15, 1, 0, '2012-04-16 04:44:46', '2012-04-16 04:44:46'),
(6, 29, 16, 1, 0, '2012-05-01 07:01:54', '2012-05-01 07:01:54'),
(7, 30, 17, 1, 0, '2012-05-06 16:09:26', '2012-05-06 16:09:26'),
(8, 42, 18, 1, 0, '2012-07-22 02:14:40', '2012-07-22 02:14:40'),
(9, 542, 19, 1, 0, '2013-02-28 14:35:59', '2013-02-28 14:35:59'),
(10, 548, 20, 1, 0, '2013-03-09 13:54:35', '2013-03-09 13:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=549 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `first_name`, `last_name`, `email`, `password`, `role`, `status`, `add_date`, `update_date`) VALUES
(1, 'amu_akhlaq', 'Akhlaq', 'Ahmad', 'amu.akhlaq@gmail.com', '123456', '1', 1, NULL, '2012-07-15 23:22:44'),
(2, 'akhlaq_1219', 'Akhlaq', 'Ahmad', 'akhlaq.1219@gmail.com', '123456', '3', 1, '2012-02-24 08:22:02', '2012-03-09 16:10:09'),
(8, 'taj10stb54', NULL, NULL, 'taj10stb54@gmail.com', 'kam1264', '3', 1, '2012-02-29 14:02:59', '2012-02-29 14:02:59'),
(7, 'makhan_amu1', NULL, NULL, 'makhan.amu1@gmail.com', 'akbarkhan', '3', 1, '2012-02-28 23:53:48', '2012-02-28 23:53:48'),
(9, 'yogisonu007', NULL, NULL, 'yogisonu007@yahoo.com', '7091', '3', 1, '2012-03-01 12:12:15', '2012-03-01 12:12:15'),
(10, 'brijsingh100685', NULL, NULL, 'brijsingh100685@gmail.com', 'brij@100685', '3', 1, '2012-03-09 01:12:03', '2012-03-09 01:12:03'),
(11, 'gyaduvanshi', NULL, NULL, 'gyaduvanshi@gmail.com', 'lucky788040', '3', 1, '2012-03-10 05:58:12', '2012-03-10 05:58:12'),
(12, 'iqbal_ahmad508', 'Iqbal', 'Ahmad', 'iqbal.ahmad508@gmail.com', '123456', '3', 1, '2012-03-10 11:34:59', '2012-03-10 11:36:41'),
(13, 'hamza_khan54', NULL, NULL, 'hamza.khan54@gmail.com', 'hamzakhan', '3', 1, '2012-03-14 12:47:12', '2012-03-14 12:47:12'),
(14, 'zishan', NULL, NULL, 'zishan@live.it', 'kalsoom', '3', 1, '2012-03-14 14:31:32', '2012-03-14 14:31:32'),
(15, 'amu02_aftab', 'Aftab', 'Husain', 'amu02.aftab@gmail.com', '123456', '3', 1, '2012-03-17 14:03:24', '2012-03-26 23:36:30'),
(16, 'shariq04_amu', NULL, NULL, 'shariq04_amu@yahoo.com', '05833254042', '3', 1, '2012-03-17 15:48:28', '2012-03-17 15:48:28'),
(17, 'pravinkmr789', NULL, NULL, 'pravinkmr789@gmail.com', '9458662099', '3', 1, '2012-03-18 01:43:40', '2012-03-18 01:43:40'),
(18, 'jordie_smith', NULL, NULL, 'jordie.smith@hotmail.co.nz', 'smi8711', '3', 1, '2012-03-23 00:13:55', '2012-03-23 00:13:55'),
(19, 'pss_manish', 'MANISH ', 'SHARMA', 'pss.manish@gmail.com', 'cricket', '3', 1, '2012-03-26 23:31:08', '2012-03-26 23:31:08'),
(20, 'danish_perwez', 'Danish', 'Perwez', 'danish.perwez@gmail.com', 'airtel', '3', 1, '2012-03-29 12:30:35', '2012-03-29 12:30:35'),
(21, 'danish', 'Danish', 'Husain', 'danish@webmicrosystems.com', 'danish', '3', 1, '2012-03-30 14:54:46', '2012-03-30 14:55:39'),
(22, 'viquar12', 'Viquar', 'Ahmad', 'viquar12@rediffmail.com', 'viquar212', '3', 1, '2012-04-04 06:31:51', '2012-04-04 06:31:51'),
(23, 'ziaulmustafa07', 'ziaul', 'haque', 'ziaulmustafa07@gmail.com', 'ziaulhaque', '3', 1, '2012-04-08 15:36:11', '2012-04-08 15:36:11'),
(24, 'ss', 'sss', 'ss', 'ss@hhh.com', 'a', '3', 1, '2012-04-16 04:39:21', '2012-04-16 04:39:21'),
(25, 'thabish_9', 'thabish', 'alimudeen', 'thabish.9@hotmail.com', 'cricketgali', '3', 1, '2012-04-18 09:50:03', '2012-04-18 09:50:03'),
(26, 'reubenjudecherian', 'Reuben ', 'Jude Cherian', 'reubenjudecherian@gmail.com', 'arthur', '3', 1, '2012-04-20 06:18:06', '2012-04-20 06:18:06'),
(27, 'naumanahmad37', 'NAUMAN', 'AHMAD', 'naumanahmad37@ymail.com', 'RIDZGILL4', '3', 1, '2012-04-21 08:25:39', '2012-04-21 08:25:39'),
(28, 'cmanickam77', 'Manickam', 'Chockalingam', 'cmanickam77@gmail.com', 'heartvacancy77', '3', 1, '2012-04-21 09:15:14', '2012-04-21 09:15:14'),
(29, 'meraal13', 'mohshandan', 'rahin', 'meraal13@gmail.com', '246810', '3', 1, '2012-05-01 06:33:25', '2012-05-01 06:33:25'),
(30, 'amjadmer', 'Amjad mir', 'khan', 'amjadmer@yahoo.com', 'lalparee1', '3', 1, '2012-05-06 16:00:24', '2012-05-06 16:00:24'),
(31, 'aseelakhtar', 'Aseel', 'Akhtar', 'aseelakhtar@gmail.com', '9557117089', '3', 1, '2012-05-10 07:22:48', '2012-05-10 07:31:06'),
(32, 'abukhaled_28', 'abu', 'khaled', 'abukhaled_28@yahoo.com', 'hajranoor', '3', 1, '2012-05-15 11:47:14', '2012-05-15 11:47:14'),
(33, 'priyanshu768', 'priyanshu', 'arora', 'priyanshu768@gmail.com', 'arora768', '3', 1, '2012-05-18 13:20:50', '2012-05-18 13:20:50'),
(34, 'delowar1986', 'delowar', 'delowar', 'delowar1986@gmail.com', 'mohammed86', '3', 1, '2012-05-20 00:51:26', '2012-05-20 00:51:26'),
(521, 'akh', 'Akh', 'Ahm', 'akh@gmail.com', '123456', '3', 1, '2012-07-22 22:29:16', '2012-07-22 23:02:59'),
(522, 'aquajitu', 'Jitesh', 'S', 'aquajitu@gmail.com', 'jitesh123', '3', 1, '2012-12-23 04:18:30', '2012-12-23 04:18:30'),
(523, 'jmaval', 'jaydev', 'gadhvi', 'jmaval@yahoo.com', '9879592929', '3', 1, '2012-12-26 23:49:51', '2012-12-26 23:49:51'),
(524, 'saiprasasd154', 'saiprasad', 'sairam', 'saiprasasd154@gmail.com', '123456789', '3', 1, '2012-12-29 05:24:59', '2012-12-29 05:24:59'),
(525, 'joshmccarthy', 'josh', 'mccarthy', 'joshmccarthy@yahoo.co.nz', 'toddys42', '3', 1, '2013-01-09 22:51:32', '2013-01-09 22:51:32'),
(526, 'jackson_c2002', 'Michael', 'Clarke', 'jackson_c2002@live.com.au', 'Cricket', '3', 1, '2013-01-12 18:44:36', '2013-01-12 18:44:36'),
(527, 'aravpatel21', 'Arav', 'Patel', 'aravpatel21@gmail.com', 'yuvraj', '3', 1, '2013-01-14 06:01:07', '2013-01-14 06:01:07'),
(528, 'jecrc_nitesh', 'nitesh', 'AGarwal', 'jecrc.nitesh@gmail.com', '123456', '3', 1, '2013-01-18 06:17:59', '2013-01-18 06:17:59'),
(529, 'sairajvinayakmohite', 'Sairaj', 'Mohite', 'sairajvinayakmohite@rediffmail.com', 'mayabhai', '3', 1, '2013-01-19 22:24:15', '2013-01-19 22:24:15'),
(530, 'netrogroup', 'Arunjay ', 'Saxena', 'netrogroup@gmail.com', '9532539202', '3', 1, '2013-01-20 03:15:46', '2013-01-20 03:15:46'),
(531, 'karthikudayakumar16', 'Karthik', 'Uday Kumar', 'karthikudayakumar16@gmail.com', '1234', '3', 1, '2013-01-22 10:15:55', '2013-01-22 10:15:55'),
(532, 'saninabasnet', 'sanina', 'basnet', 'saninabasnet@gmail.com', 'roninandsanu', '3', 1, '2013-01-22 10:31:47', '2013-01-22 10:31:47'),
(533, 'babubean', 'sathish', 'kumar', 'babubean@gmail.com', 'preethisathish', '3', 1, '2013-01-27 07:08:54', '2013-01-27 07:08:54'),
(534, 'priyanshu_nikku2000', 'priyanshu', 'sharma', 'priyanshu.nikku2000@gmail.com', 'windowstaskbar', '3', 1, '2013-01-27 07:24:18', '2013-01-27 07:24:18'),
(535, 'Djrichards', 'ches', 'rich', 'Djrichards@gmail.com', 'chesr', '3', 1, '2013-01-30 10:50:21', '2013-01-30 10:50:21'),
(536, 'bgduffin', 'Harry', 'Potter', 'bgduffin@xtra.co.nz', 'linkin', '3', 1, '2013-01-31 20:08:10', '2013-01-31 20:08:10'),
(537, 'Dsumit922', 'Sumit', 'Dahiya', 'Dsumit922@gmail.com', '1472cricket', '3', 1, '2013-02-07 06:49:26', '2013-02-07 06:49:26'),
(538, 'shah_zaib_ali', 'Shahzaib', 'Ali', 'shah.zaib.ali@hotmail.com', 'SshahzaibA', '3', 1, '2013-02-15 10:04:51', '2013-02-15 10:04:51'),
(539, 'konda_nikhilesh', 'konda', 'nikhilesh', 'konda.nikhilesh@gmail.com', 'dhoni777', '3', 1, '2013-02-16 02:10:11', '2013-02-16 02:10:11'),
(540, 'irfanmeo82', 'IRFAN', 'AHMED', 'irfanmeo82@yahoo.com', 'pakistan', '3', 1, '2013-02-17 04:26:40', '2013-02-17 04:26:40'),
(541, 'ms_rajh', 'Rajh', 'Kss', 'ms.rajh@yahoo.com', '171989', '3', 1, '2013-02-22 00:01:52', '2013-02-22 00:01:52'),
(542, 'thalathalapathy2013', 'vijay', 'ajith', 'thalathalapathy2013@yahoo.com', 'ajithkumar', '3', 1, '2013-02-28 14:33:20', '2013-02-28 14:33:20'),
(543, 'rajeshtalla06', 'rajesh', 'talla', 'rajeshtalla06@gmail.com', 'cricket', '3', 1, '2013-03-02 00:56:03', '2013-03-02 00:56:03'),
(544, 'aravindram28', 'aravind', 'ram', 'aravindram28@gmail.com', 'vjonthefloor', '3', 1, '2013-03-03 01:06:56', '2013-03-03 01:06:56'),
(545, 'deepaliadelaide', 'awesome', 'cool', 'deepaliadelaide@gmail.com', 'awesome', '3', 1, '2013-03-05 03:46:25', '2013-03-05 03:46:25'),
(546, 'NAVNEETSHARMA3334', 'NAVNEET', 'SHARMA', 'NAVNEETSHARMA3334@GMAIL.COM', '9129617025', '3', 1, '2013-03-06 00:56:52', '2013-03-06 00:56:52'),
(547, 'vssecretrv', 'vishal', 'sinha', 'vssecretrv@gmail.com', 'vishpix2017', '3', 1, '2013-03-07 04:18:51', '2013-03-07 04:18:51'),
(548, 'brent', 'Brent', 'Ogle', 'brent@ycellc.com', 'brentbomb', '3', 1, '2013-03-09 13:37:33', '2013-03-09 13:37:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
