-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2018 at 05:16 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orien`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `Language_id` int(11) NOT NULL AUTO_INCREMENT,
  `Language_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Language_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`Language_id`, `Language_name`) VALUES
(1, 'Tamil'),
(2, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `Movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `Movie_name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Release_date` date NOT NULL,
  `Language_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `Duration` time NOT NULL,
  `Trailer_Link` varchar(255) NOT NULL,
  `Image_name` varchar(255) NOT NULL,
  `status_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`Movie_id`),
  KEY `fk_Language_id` (`Language_id`),
  KEY `fk_status_id` (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_id`, `Movie_name`, `Description`, `Release_date`, `Language_id`, `Duration`, `Trailer_Link`, `Image_name`, `status_id`) VALUES
(1, 'Kolamaavu Kokila', 'Kolamaavu Kokila revolves around the life of a woman who is a drug peddler and the effects that her profession brings to her personal life.', '2018-08-17', 1, '02:20:00', 'https://www.youtube.com/watch?v=D1BRfZjnhec', 'Kolamaavukokila.jpg', 1),
(3, 'TEST 12', 'adfasdfa', '2018-09-16', 1, '02:20:00', 'aldkfjakdjflk', '123.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(2) NOT NULL AUTO_INCREMENT,
  `status_type` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_type`) VALUES
(1, 'Now Showing'),
(2, 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Joint_date` date NOT NULL,
  `City` varchar(255) NOT NULL,
  `Royalty_Points` int(11) NOT NULL,
  `Subscription` int(1) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Profile_pic` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `user_status_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `user_type_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `randSalt` varchar(255) DEFAULT '$2y$10$iusesomecrazystrings22',
  PRIMARY KEY (`User_id`),
  KEY `fk_user_status_id` (`user_status_id`),
  KEY `fk_user_type_id` (`user_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `User_name`, `Email`, `Phone`, `Joint_date`, `City`, `Royalty_Points`, `Subscription`, `Gender`, `DOB`, `Profile_pic`, `Password`, `user_status_id`, `user_type_id`, `randSalt`) VALUES
(1, 'maliq', 'maliqf@outlook.com', 775695577, '2018-09-08', 'Colombo', 100, 1, 'Male', '1990-03-27', 'mq.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 1, '$2y$10$iusesomecrazystrings22'),
(2, 'TEST', 'test@gmail.com', 1234567890, '2018-09-09', 'Colombo', 100, 1, 'Male', '2018-09-09', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(3, 'TEST 2', 'test@gmail.com', 12345678, '2018-09-09', 'Colombo', 100, 1, 'Female', '2018-09-09', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(4, 'TEST 3', 'test@gamil.com', 123, '2018-09-09', 'Colombo', 100, 1, 'Female', '2018-09-09', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(5, 'TES5', 'test@gmail.com', 12345678, '2018-09-09', 'Colombo', 100, 1, 'Female', '2018-09-09', 'default_female.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(6, 'TEST3', 'test@gmail.com', 123456789, '2018-09-10', 'Colombo', 100, 1, '', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(7, 'TEST2', 'test@gmail.com', 123456789, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(8, 'test m', 'tests@gmail.com', 123456789, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(9, '21545', 'adfdslkfj@gmail.com', 12165465, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(10, 'dfdsfasd', 'maliq27@gmail.com', 715698935, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(11, 'test454', 'maliq27@gmail.com', 715698935, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystring22'),
(12, 'gfgfhgfgh', 'maliq27@gmail.com', 715698935, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(13, 'dfafaf', 'maliq27@gmail.com', 715698935, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22'),
(14, 'ffa', 'maliq27@gmail.com', 715698935, '2018-09-10', 'Colombo', 100, 1, 'Male', '2018-09-10', 'default_male.jpg', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 1, 2, '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
CREATE TABLE IF NOT EXISTS `user_status` (
  `user_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_status_type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_type`) VALUES
(1, 'Active'),
(2, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `User_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_type` varchar(255) NOT NULL,
  PRIMARY KEY (`User_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`User_type_id`, `User_type`) VALUES
(1, 'Admin'),
(2, 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
