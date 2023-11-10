-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 07:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `physics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'ssahilaagiwal@gmail.com', 'Sass@262521');

-- --------------------------------------------------------

--
-- Table structure for table `bq`
--

CREATE TABLE `bq` (
  `id` int(255) NOT NULL,
  `qn` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `qlink` varchar(1000) NOT NULL,
  `av` varchar(1000) NOT NULL,
  `ai` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `id` int(255) NOT NULL,
  `qn` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `qlink` varchar(1000) NOT NULL,
  `av` varchar(1000) NOT NULL,
  `ai` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qb`
--

CREATE TABLE `qb` (
  `id` int(255) NOT NULL,
  `qn` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `qlink` varchar(1000) NOT NULL,
  `av` varchar(1000) NOT NULL,
  `ai` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tq`
--

CREATE TABLE `tq` (
  `id` int(255) NOT NULL,
  `qn` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `qlink` varchar(1000) NOT NULL,
  `av` varchar(1000) NOT NULL,
  `ai` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE `ts` (
  `id` int(255) NOT NULL,
  `qn` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `qlink` varchar(1000) NOT NULL,
  `av` varchar(1000) NOT NULL,
  `ai` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `grade` int(255) NOT NULL,
  `sessionid` varchar(1000) NOT NULL,
  `phoneotp` varchar(1000) NOT NULL,
  `emailotp` varchar(1000) NOT NULL,
  `Startdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bq`
--
ALTER TABLE `bq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qb`
--
ALTER TABLE `qb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tq`
--
ALTER TABLE `tq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts`
--
ALTER TABLE `ts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bq`
--
ALTER TABLE `bq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qb`
--
ALTER TABLE `qb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tq`
--
ALTER TABLE `tq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts`
--
ALTER TABLE `ts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
