-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2018 at 05:11 PM
-- Server version: 10.2.15-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u544652435_abhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `abhiram_table`
--

CREATE TABLE `abhiram_table` (
  `stu_id` int(10) NOT NULL,
  `stu_fName` varchar(20) DEFAULT NULL,
  `stu_lName` varchar(20) DEFAULT NULL,
  `stu_eMail` varchar(30) DEFAULT NULL,
  `stu_phone` varchar(10) DEFAULT NULL,
  `current_login` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abhiram_table`
--

INSERT INTO `abhiram_table` (`stu_id`, `stu_fName`, `stu_lName`, `stu_eMail`, `stu_phone`, `current_login`) VALUES
(9, 'arun', 'raj', 'arun@gmail.com', '8297971197', NULL),
(10, 'abhi', 'ram', 'abhi@gmail.com', '1234567890', NULL),
(11, 'can', 'can', 'cancan@gmail.com', '1234567890', 0),
(13, 'srk', 'fan', 'srk@fan.com', '1234567890', 0),
(14, 'james', 'bond', 'jamesbond@gmail.com', '7845128956', 0),
(15, 'big', 'shaq', 'bigshaq@gmail.com', '7878787878', 0),
(16, 'Abhi', 'Ram', 'ramabhi75@gmail.com', '8297971196', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abhiram_table`
--
ALTER TABLE `abhiram_table`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abhiram_table`
--
ALTER TABLE `abhiram_table`
  MODIFY `stu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
