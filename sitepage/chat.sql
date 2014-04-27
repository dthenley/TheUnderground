-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2014 at 09:48 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_bans`
--

CREATE TABLE `ajax_chat_bans` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `userName` (`userName`),
  KEY `dateTime` (`dateTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_invitations`
--

CREATE TABLE `ajax_chat_invitations` (
  `userID` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  PRIMARY KEY (`userID`,`channel`),
  KEY `dateTime` (`dateTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_messages`
--

CREATE TABLE `ajax_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `text` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  KEY `message_condition` (`id`,`channel`,`dateTime`),
  KEY `dateTime` (`dateTime`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ajax_chat_messages`
--

INSERT INTO `ajax_chat_messages` (`id`, `userID`, `userName`, `userRole`, `channel`, `dateTime`, `ip`, `text`) VALUES
(1, 2147483647, 'ChatBot', 4, 0, '2014-04-27 14:42:52', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x2f6c6f67696e2075736572),
(2, 2147483647, 'ChatBot', 4, 0, '2014-04-27 14:43:03', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x2f6c6f676f75742075736572),
(3, 2147483647, 'ChatBot', 4, 0, '2014-04-27 14:43:07', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x2f6c6f67696e2075736572),
(4, 3, 'user', 1, 0, '2014-04-27 14:43:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x686579),
(5, 3, 'user', 1, 0, '2014-04-27 14:43:32', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x696d207468652061646d696e),
(6, 3, 'user', 1, 0, '2014-04-27 14:43:39', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x5b71756f74655d496d207468652061646d696e5b2f71756f74655d),
(7, 3, 'user', 1, 0, '2014-04-27 14:43:57', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x5b636f64655d3c68313e746869732077696c6c2062652064697361626c65643c2f68313e5b2f636f64655d),
(8, 3, 'user', 1, 0, '2014-04-27 14:44:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0x5b625d5b695d5b755d6466675b2f755d5b2f695d5b2f625d);

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_online`
--

CREATE TABLE `ajax_chat_online` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ajax_chat_online`
--

INSERT INTO `ajax_chat_online` (`userID`, `userName`, `userRole`, `channel`, `dateTime`, `ip`) VALUES
(3, 'user', 1, 0, '2014-04-27 14:44:01', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
