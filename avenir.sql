-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 01:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avenir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `salt`, `status`) VALUES
(1, 'anubhav', 'xprilion@gmail.com', '0bda6a0a6caff28876c4a0892a14a3a3373f157aa8f4cff5601c7912db606652a27299139ba15cad0a54b0a90fa495dd5d3875c0b4334dd4b723b32758f641a8', '6aa72d5d94fcd57247600ccb8b4335b31f0eadf77ca4210621c1c2d91e6ad2c637e4cfce2692d0abbdea685b6f0c9d2f2dd58a2b4b0ae84584e16a13c2fcf5ee', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `confirm` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `email`, `username`, `password`, `confirm`, `salt`) VALUES
(119, 'Aman', 'aman55@gmail.com', 'aman88', 'e874a9b933c9ca62a32f6a05c3e90b8b54730aa9171e0063021d0abf48e917345b2cdd42100416058dfde03cc7355f3aea7ab523abf3504a29e1884a4f868653', 'e874a9b933c9ca62a32f6a05c3e90b8b54730aa9171e0063021d0abf48e917345b2cdd42100416058dfde03cc7355f3aea7ab523abf3504a29e1884a4f868653', '7ef947de587f878624037da77ce13b92b8b22f5024dafc55b5b7667cf90dfb6d828937034656e01c014722a6b006464c7e983e880e58233613c95f69bf50acab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
