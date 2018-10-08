-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 07:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(15) NOT NULL,
  `doctor_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time(6) NOT NULL,
  `appt_duration` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(15) NOT NULL,
  `doctor_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_date` date NOT NULL,
  `slot_start` time(6) NOT NULL,
  `slot_end` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `contact number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `email`, `password`, `confirm_password`, `gender`, `blood_group`, `status`, `contact number`) VALUES
(15, '', 'Wahaad', 'wahaad@gmail.com', 'rob420', '0', '', '', 'approved', ''),
(18, '', 'Noor', 'noor@hotmail.com', 'manage', '0', '', '', 'rejected', ''),
(23, '', 'Hadi', 'hadi@gmail.com', 'as', '0', '', '', 'approved', ''),
(24, '', 'Nigar', 'nigar@gmail.com', 'zzz', '0', '', '', 'pending', ''),
(28, '', 'Iqra', 'iqra@hotmail.com', 'khush', '0', '', '', 'rejected', ''),
(38, '', 'Safian', 'safi@gmail.com', 've74be', '0', '', '', 'approved', ''),
(39, '', 'irfan', 'sanisar4@gmail.com', '123', '0', '', '', 'approved', ''),
(40, '', 'Maham', 'haya@hotmail.com', 'dosi', '0', '', '', 'rejected', ''),
(41, '', 'Mikaial', 'miki@hotmail.com', 'actor', '0', '', '', 'pending', ''),
(42, '', 'Asia', 'asi@hotmail.com', 'change', '0', '', '', 'approved', ''),
(43, '', 'Zahid', 'zadi@gmail.com', 'true', '0', '', '', 'pending', ''),
(44, '', 'marium', 'marium@gmail.com', 'jui', '0', '', '', 'pending', '0418274484');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
