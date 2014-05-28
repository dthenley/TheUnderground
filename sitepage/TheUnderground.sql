-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2014 at 06:07 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TheUnderground`
--

-- --------------------------------------------------------

--
-- Table structure for table `Music`
--

CREATE TABLE `Music` (
  `musicId` int(11) NOT NULL AUTO_INCREMENT,
  `musicFile` varchar(150) NOT NULL,
  `songName` varchar(30) NOT NULL,
  `songArtist` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `songPrice` int(11) DEFAULT NULL,
  `songAlbum` varchar(50) DEFAULT NULL,
  `albumImg` varchar(150) DEFAULT NULL,
  `buyLink` varchar(100) DEFAULT NULL,
  `shareLink` varchar(30) DEFAULT NULL,
  `listenCount` int(11) DEFAULT NULL,
  `favoritedUser` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`musicId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Music`
--

INSERT INTO `Music` (`musicId`, `musicFile`, `songName`, `songArtist`, `genre`, `songPrice`, `songAlbum`, `albumImg`, `buyLink`, `shareLink`, `listenCount`, `favoritedUser`) VALUES
(1, 'audiomedia_2.mp3', 'Giggity', 'dthenley', 'Country', 4, 'Quagmire', 'images/user-img/dontehenley.jpg', 'http://www.datpiff.com/Slaughterhouse-House-Rules-mixtape.607538.html', 'http://www.datpiff.com/Slaught', NULL, NULL),
(8, 'audioLES.mp3', 'LES', 'dthenley', 'Hip-Hop/Rap', NULL, 'Camp', 'images/user-img/dontehenley.jpg', NULL, NULL, NULL, NULL),
(9, 'audioBonfire.mp3', 'Bonfire', 'dthenley', 'Hip-Hop/Rap', 2, 'Camp', 'images/user-img/dontehenley.jpg', 'http://www.datpiff.com/Slaughterhouse-House-Rules-mixtape.607538.html', 'http://www.datpiff.com/Slaught', NULL, NULL),
(10, 'audioSundayMorning.mp3', 'Sunday Morning', 'dthenley', 'Pop', NULL, NULL, 'images/user-img/dontehenley.jpg', NULL, NULL, NULL, NULL),
(11, 'audioOrigami.mp3', 'Origami', 'dthenley', 'Hip-Hop/Rap', 3, 'Big Sam', 'images/user-img/dontehenley.jpg', NULL, NULL, NULL, NULL),
(12, 'audiomedia_2.mp3', 'Kill La Kill', 'dthenley', 'Pop', 2, 'anime', 'images/user-img/dontehenley.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `emailId` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(30) NOT NULL,
  `signupDate` date NOT NULL,
  PRIMARY KEY (`emailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `realname` varchar(60) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `sex` varchar(8) DEFAULT NULL,
  `location` varchar(80) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `profileimg` varchar(130) DEFAULT 'images/user.png',
  `signupdate` date DEFAULT NULL,
  `lastonline` date DEFAULT NULL,
  `aboutme` varchar(1040) DEFAULT NULL,
  `acctType` varchar(10) NOT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `favoriteList` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userid`, `username`, `password`, `email`, `realname`, `age`, `sex`, `location`, `genre`, `profileimg`, `signupdate`, `lastonline`, `aboutme`, `acctType`, `comment`, `favoriteList`) VALUES
(1, 'dthenley', 'nascar', 'donteturner@gmail.com', 'Donte Henley', 26, 'Male', 'Wichita,KS', 'Hip-Hop', 'images/user-img/dontehenley.jpg', '2014-05-16', '2014-05-16', 'Hi, My name is Donte Henley and I''m an indpendent artist based out of Wichita, KS. I have been rapping for 10 years and really hope you like my sound.', 'artist', '<li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>The comment box</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>I am done!</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=2"><h2>aobutcher:</h2></a><p>Hello Donte</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>Hey alyssa</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=2"><h2>aobutcher:</h2></a><p>Alyssa was here</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>fourth test</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>third test</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>second test</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>Test for profile redirect</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>The Comments are working</p></div></li>', '<li><a href="profile.php?userid=8">dexter</a></li><li><a href="profile.php?userid=6">butcherray</a></li><li><a href="profile.php?userid=2">aobutcher</a></li>'),
(2, 'aobutcher', 'butcherray', 'aobutcher11@gmail.com', 'Alyssa Osborn', 24, 'Female', 'Ashland, KS', 'Country', 'images/user-img/alyssaosborn.jpeg', '2014-05-18', '2014-05-18', 'The creators beautiful girlfriend who finds all his lost items for him thank goodness!', 'user', '<li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>THis is a comment</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>HELLO!!!</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>How are you</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>Hello Alyssa</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>Yes you are working</p></div></li><li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=2"><h2>aobutcher:</h2></a><p>I work</p></div></li><li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>THis is the second legit</p></div></li>', '<li><a href="profile.php?userid=1">dthenley</a></li><li><a href="profile.php?userid=6">butcherray</a></li>'),
(6, 'butcherray', 'nascar', 'nascar', 'Butcher Ray Osborn', 4, 'Male', '', 'Hip-Hop/Rap', '', NULL, NULL, '', 'user', NULL, NULL),
(8, 'dexter', 'dextermorgan', 'dextermorgan', 'Dexter Morgan', 38, 'Male', 'Orlando, FL', 'Country', 'images/user-img/rose.png', NULL, NULL, 'Mild mannered dexter morgan likes to listen to bach and chopin and all that other good stuff', 'artist', '<li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid=1"><h2>dthenley:</h2></a><p>The other comments are working as well</p></div></li>', NULL),
(21, 'fullsail', 'password', 'fullsail@fullsail.edu', 'John Doe', 35, 'Male', 'WInter Park, FL', 'Pop', 'images/user-img/me3.jpg', NULL, NULL, 'This is the account of the esteemed school Full Sail', 'artist', '<li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid=21"><h2>fullsail:</h2></a><p>Leave a comment</p></div></li>', '<li><a href="profile.php?userid=1">dthenley</a></li>'),
(22, 'JHendrix', 'password', 'jhendrix@fullsail.edu', 'Jimmy Hendrix', 35, 'Male', 'New York City, NY', 'Pop', 'images/user-img/me3.jpg', NULL, NULL, 'I am an amazing guitarist. Please check out my music.', 'artist', NULL, '<li><a href="profile.php?userid=1">dthenley</a></li>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
