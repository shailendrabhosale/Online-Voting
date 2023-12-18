-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 09:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pblvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `pass`) VALUES
('admin@gmail.com', 'thisisadmin');

-- --------------------------------------------------------

--
-- Table structure for table `cand`
--

CREATE TABLE `cand` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `PartyName` varchar(15) NOT NULL,
  `DPimage` varchar(255) NOT NULL,
  `Post` varchar(15) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cand`
--

INSERT INTO `cand` (`id`, `Name`, `PartyName`, `DPimage`, `Post`, `votes`) VALUES
(16, 'Modi', 'BJP ', 'PMmodi.jpg', 'Prime Minister', 3),
(17, 'Donald Trump', 'USA', 'donaldtrump.jpg', 'Prime Minister', 1),
(18, 'Xi Jinping', 'China', 'Xi_Jinping.jpg', 'Prime Minister', 1),
(19, 'Vladimir Putin', 'Russia', 'vladimirPutin.jpg', 'Prime Minister', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regdetails`
--

CREATE TABLE `regdetails` (
  `sr` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regdetails`
--

INSERT INTO `regdetails` (`sr`, `firstname`, `lastname`, `gender`, `age`, `email`, `password`, `status`) VALUES
(21, 'Elon', 'Musk', 'Male', 55, 'elonmusk@gmail.com', 'tesla', 1),
(28, 'Logan', 'Paul', 'Male', 32, 'loganpaul@gmail.com', 'logan', 1),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `cand`
--
ALTER TABLE `cand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regdetails`
--
ALTER TABLE `regdetails`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cand`
--
ALTER TABLE `cand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `regdetails`
--
ALTER TABLE `regdetails`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
