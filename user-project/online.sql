-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 03:18 PM
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
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(100) NOT NULL,
  `sname` char(50) NOT NULL,
  `semail` varchar(80) NOT NULL,
  `spass` varchar(50) NOT NULL DEFAULT '12345',
  `scourse` char(60) NOT NULL,
  `smobile` bigint(15) NOT NULL,
  `scity` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `semail`, `spass`, `scourse`, `smobile`, `scity`) VALUES
(1, 'Admin1', 'admin1@gmail.com', '12345', 'php', 9632587410, 'delhi'),
(2, 'Admin2', 'admin2@gmail.com', '12345', 'php', 9632587410, 'delhi'),
(3, 'Admin3', 'admin3@gmail.com', '12345', 'php', 9632587410, 'delhi'),
(4, 'Admin', 'admin4@gmail.com', '12345', 'php', 9632587410, 'delhi'),
(5, 'Admin', 'admin@gmail.com', '12345', 'php', 9632587410, 'delhi'),
(6, 'Punit', 'punit@ducat.com', '12345', 'php', 9632587410, 'noida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
