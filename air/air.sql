-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 02:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `io_marks`
--

CREATE TABLE `io_marks` (
  `id` int(20) NOT NULL,
  `io_user_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `marks` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `io_marks`
--

INSERT INTO `io_marks` (`id`, `io_user_id`, `user_id`, `type`, `marks`, `created_at`) VALUES
(6, 'IO0001', 'USR0001', 'A', '5', '2021-03-04 18:54:21'),
(7, 'IO0001', 'USR0001', 'B', '6', '2021-03-04 18:54:21'),
(8, 'IO0001', 'USR0001', 'C', '7', '2021-03-04 18:54:21'),
(9, 'IO0001', 'USR0001', 'D', '8', '2021-03-04 18:54:21'),
(10, 'IO0001', 'USR0001', 'E', '9', '2021-03-04 18:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `sro_marks`
--

CREATE TABLE `sro_marks` (
  `id` int(20) NOT NULL,
  `sro_user_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `marks` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sro_marks`
--

INSERT INTO `sro_marks` (`id`, `sro_user_id`, `user_id`, `type`, `marks`, `created_at`) VALUES
(1, 'SRO0001', 'USR0001', 'A', '2', '0000-00-00 00:00:00'),
(2, 'SRO0001', 'USR0001', 'B', '8', '0000-00-00 00:00:00'),
(3, 'SRO0001', 'USR0001', 'C', '8', '0000-00-00 00:00:00'),
(4, 'SRO0001', 'USR0001', 'D', '7', '0000-00-00 00:00:00'),
(5, 'SRO0001', 'USR0001', 'E', '7', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `strengths`
--

CREATE TABLE `strengths` (
  `id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strengths`
--

INSERT INTO `strengths` (`id`, `user_id`, `s_name`, `created_at`) VALUES
(5, 'USR0001', 'Leadership', '2021-03-04 11:28:50'),
(6, 'USR0001', 'Handle Pressure', '2021-03-04 11:28:50'),
(7, 'USR0001', 'Creativity', '2021-03-04 11:28:50'),
(8, 'USR0001', 'Self Learning', '2021-03-04 11:28:50'),
(9, 'USR0001', 'Nice Work', '2021-03-04 11:28:50'),
(10, 'USR0002', 'Leadership', '2021-03-04 18:45:47'),
(11, 'USR0002', 'Handle Pressure', '2021-03-04 18:45:47'),
(12, 'USR0002', 'Nice Work', '2021-03-04 18:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `member_since` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `first_name`, `last_name`, `email`, `password`, `mobile`, `is_active`, `member_since`, `created_at`) VALUES
('IO0001', 2, 'Demo', 'IO', 'io@test.com', 'asdf', '9876543210', 1, '2021-03-02', '2021-03-02 13:40:22'),
('SRO0001', 1, 'Demo', 'SRO', 'sro@test.com', 'asdf', '9876543211', 1, '2021-03-02', '2021-03-02 13:40:22'),
('USR0001', 3, 'Demo', 'User', 'user@test.com', 'asdf', '9876543210', 1, '2021-03-02', '2021-03-02 13:39:03'),
('USR0002', 3, 'Demo', 'User 2', 'user2@test.com', 'asdf', '9876543211', 1, '2021-03-02', '2021-03-02 13:39:03'),
('USR0003', 3, 'Demo', 'User 3', 'user3@test.com', 'asdf', '9876543210', 1, '2021-03-02', '2021-03-02 19:54:32'),
('USR0004', 3, 'Demo', 'User 4', 'user4@test.com', 'asdf', '9876543211', 1, '2021-03-02', '2021-03-02 19:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` varchar(20) NOT NULL,
  `ser_no` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `rank` varchar(20) NOT NULL,
  `med_cat` varchar(50) DEFAULT NULL,
  `dom` varchar(50) DEFAULT NULL,
  `doj` varchar(50) DEFAULT NULL,
  `io_id` varchar(20) NOT NULL,
  `io_remarks` text NOT NULL,
  `sro_id` varchar(20) NOT NULL,
  `sro_remarks` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `ser_no`, `dob`, `rank`, `med_cat`, `dom`, `doj`, `io_id`, `io_remarks`, `sro_id`, `sro_remarks`, `updated_at`, `created_at`) VALUES
('IO0001', '234', NULL, '10', NULL, NULL, NULL, '', '', '', '', '2021-03-04 11:13:18', '2021-03-04 11:13:04'),
('SRO0001', '456', NULL, '6', NULL, NULL, NULL, '', '', '', '', '2021-03-04 11:13:21', '2021-03-04 11:13:04'),
('USR0001', '789', '1994-10-02', '56', '6789', '1234', '67890', 'IO0001', 'Yes This is good not', 'SRO0001', 'Yes Nice but not so good', '2021-03-03 13:40:55', '2021-03-02 13:40:55'),
('USR0002', '234', '2000-03-03', '12', '6789', '1234', '67890', 'IO0001', '', '', '', '2021-03-03 19:37:44', '2021-03-03 11:27:27'),
('USR0003', '009', '2003-12-01', '10', '6781', '1234', '67890', '', '', '', '', '2021-03-02 19:54:40', '2021-03-02 19:57:06'),
('USR0004', '456', '2010-03-02', '6', '98', '123', '4567', '', '', '', '', '2021-03-02 19:54:40', '2021-03-02 19:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `weaknesses`
--

CREATE TABLE `weaknesses` (
  `id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `w_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weaknesses`
--

INSERT INTO `weaknesses` (`id`, `user_id`, `w_name`, `created_at`) VALUES
(5, 'USR0001', 'Ego', '2021-03-04 11:28:50'),
(6, 'USR0001', 'Drink', '2021-03-04 11:28:50'),
(7, 'USR0001', 'Sleep', '2021-03-04 11:28:50'),
(8, 'USR0001', 'Anger', '2021-03-04 11:28:50'),
(9, 'USR0002', 'Ego', '2021-03-04 18:45:47'),
(10, 'USR0002', 'Drink', '2021-03-04 18:45:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `io_marks`
--
ALTER TABLE `io_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sro_marks`
--
ALTER TABLE `sro_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strengths`
--
ALTER TABLE `strengths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `weaknesses`
--
ALTER TABLE `weaknesses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `io_marks`
--
ALTER TABLE `io_marks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sro_marks`
--
ALTER TABLE `sro_marks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `strengths`
--
ALTER TABLE `strengths`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `weaknesses`
--
ALTER TABLE `weaknesses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
