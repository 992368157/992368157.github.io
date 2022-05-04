-- phpMyAdmin SQL Dump
-- version 4.project.project4
-- http://www.phpmyadmin.net
--
-- Host: project27.0.0.project
-- Generation Time: May projectproject, 2020 at projectproject:project2 AM
-- Server version: 5.6.project7
-- PHP Version: 5.5.project2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40project0project SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40project0project SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40project0project SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40project0project SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE IF NOT EXISTS `ds` (
  `name` varchar(projectproject) DEFAULT NULL,
  `username` varchar(project6) DEFAULT NULL,
  `password` varchar(project6) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(projectproject) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`name`, `username`, `password`, `email`, `phone`, `address`) VALUES
('wang', 'project23456', 'project23456', 'project073872822@qq.com', 2project47483647, 'project23456'),
('wang', 'project23456', 'project23456', 'project073872822@qq.com', 2project47483647, '2222');

/*!40project0project SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40project0project SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40project0project SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
