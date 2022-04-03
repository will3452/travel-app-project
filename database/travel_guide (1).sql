-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `manager_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `pop` varchar(255) NOT NULL,
  `schedule_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branding`
--

CREATE TABLE `branding` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branding`
--

INSERT INTO `branding` (`id`, `name`, `description`) VALUES
(2, 'Travel Guide for Cebu Province Inc.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsums.');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `manager_id` int(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(255) NOT NULL,
  `user1_id` int(255) NOT NULL,
  `user2_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(255) NOT NULL,
  `chat_id` int(255) NOT NULL,
  `sender_id` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gcash`
--

CREATE TABLE `gcash` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gcash`
--

INSERT INTO `gcash` (`id`, `name`, `number`) VALUES
(5, 'leo c.', '09995554567');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(7, '6249415ca27346.23346250.220403024028.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager_pop`
--

CREATE TABLE `manager_pop` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `manager_email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_pop`
--

INSERT INTO `manager_pop` (`id`, `img`, `manager_email`, `date`) VALUES
(22, '624911a03b40a2.04977669.220403111648.png', 'leocorpuz@gmail.com', '2022-04-03 03:16:48'),
(25, '624912ed779388.24071035.220403112221.png', 'jemflores@gmail.com', '2022-04-03 03:22:21'),
(26, '624913ef8a2622.79523911.220403112639.png', 'williamgalas@gmail.com', '2022-04-03 03:26:39'),
(27, '624945b6191f40.95729275.220403025902.', 'davebamba@gmail.com', '2022-04-03 06:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `reserved_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `star` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remarks` longtext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `categor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `maneger_type` varchar(255) DEFAULT NULL,
  `subcribed_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `password`, `type`, `maneger_type`, `subcribed_at`, `image`, `status`) VALUES
(16, 'admin', 'admin', 'admin', 'superadmin@travel.com', '09992221234', '$2y$10$vyVj99v7.tzXtYgl0tzAmeKSh/HQJCopdg6z8j1gb2feS8sRHEka.', 'administrator', '', '2022-03-31 09:55:23', '', 'active'),
(31, 'leo', 'd', 'corpuz', 'leocorpuz@gmail.com', '09992221222', '$2y$10$hXMN2e4.lgFukXtLsiFbpeTc0GYGMKgOJn3/1zk/pTsRMgmggL7ea', 'manager', 'Bed and breakfast manager', '2022-04-03 03:19:08', '624911a02e6e90.98136322.220403111648.jpg', 'active'),
(34, 'jem', 'd', 'flores', 'jemflores@gmail.com', '09995676967', '$2y$10$7VpzBNikJ0m9GcXDgzeXwOn0Lk6sAcDH4l4Vx4dGIeq/Itt2AXitS', 'manager', 'Resto and cafe manager', '2022-04-03 03:22:28', '624912ed5ec0a3.23503822.220403112221.png', 'active'),
(35, 'william', 'g', 'galas', 'williamgalas@gmail.com', '09992224567', '$2y$10$0g.AccG2ubRq6UYb6MZuWu54vRt0a9OxKMYE2wC2/IDDuVgmJEmIC', 'manager', 'Bed and breakfast manager', '2022-04-03 03:27:01', '624913ef7e6ef1.56779567.220403112639.png', 'active'),
(36, 'dave', 'b', 'bamba', 'davebamba@gmail.com', '09992221212', '$2y$10$QV/WaRk3tnT8WF7JJPnHPeWEckClLr6pFUHs.2A3bODOJl/zv841W', 'traveler', '', '2022-04-03 07:08:52', '624945b60d42f3.37207121.220403025902.jpg', 'active'),
(37, 'xavier', 'a', 'cruz', 'xaviercruz@gmail.com', '09995554567', '$2y$10$5dFQsBYu83fQHJ3h1nRDRecxSgE2qSrPmrh/sXPcO5q2eK768bkga', 'traveler', '', '2022-04-03 07:08:57', '6249463fee33a0.66552473.220403030119.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gcash`
--
ALTER TABLE `gcash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager_pop`
--
ALTER TABLE `manager_pop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branding`
--
ALTER TABLE `branding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gcash`
--
ALTER TABLE `gcash`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manager_pop`
--
ALTER TABLE `manager_pop`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
