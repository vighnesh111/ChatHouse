-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 03:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `log_in` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_profile`, `user_country`, `user_gender`, `forgotten_answer`, `log_in`) VALUES
(4, 'Vighnesh', 'vighnesh', 'vighneshsalgaonkar.vs@gmail.com', 'images/icon1.jpg', 'India', 'Male', '', 'Online'),
(5, 'Sanjeeb', 'skdsanjeeb', 'sanjeebdey1@gmail.com', 'images/icon1.jpg', 'India', 'Male', '', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(23, 'Vighnesh', 'Sanjeeb', 'hie bro', 'read', '2021-02-01 09:09:31'),
(24, 'Vighnesh', 'Vighnesh', 'message check1', 'read', '2021-02-01 10:15:55'),
(25, 'Vighnesh', 'Vighnesh', 'message check2', 'read', '2021-02-01 10:16:02'),
(26, 'Vighnesh', 'Vighnesh', 'message check3', 'unread', '2021-02-01 10:16:24'),
(27, 'Sanjeeb', 'Vighnesh', 'hieee', 'unread', '2021-02-01 12:12:17'),
(28, 'Sanjeeb', 'Vighnesh', 'how are you', 'unread', '2021-02-01 12:12:31'),
(29, 'Sanjeeb', 'Vighnesh', 'message check3', 'unread', '2021-02-01 12:12:40'),
(30, 'Sanjeeb', 'Vighnesh', 'how are you', 'unread', '2021-02-01 12:13:02'),
(31, 'Sanjeeb', 'Vighnesh', 'message check3', 'unread', '2021-02-01 12:13:15'),
(32, 'Sanjeeb', 'Vighnesh', 'how are you', 'unread', '2021-02-01 12:13:25'),
(33, 'Sanjeeb', 'Sanjeeb', 'hieee', 'read', '2021-02-01 12:13:44'),
(34, 'Sanjeeb', 'Sanjeeb', 'hiee', 'read', '2021-02-01 12:13:54'),
(35, 'Sanjeeb', 'Vighnesh', 'how are you', 'unread', '2021-02-01 12:14:04'),
(36, 'Sanjeeb', 'Vighnesh', 'how are you', 'unread', '2021-02-01 12:14:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
