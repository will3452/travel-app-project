-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 11:16 AM
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

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `type`, `manager_id`, `logo`) VALUES
(2, 'WalWal Resort', 'Resort', 41, '624d2335b0c929.13007791.220406012053.jpg'),
(3, 'Room Renting Galas', 'Room Renting', 43, '624d57aa682098.20264207.220406050442.jpg'),
(4, 'Jem\'s Vehicle Rental', 'Rental Vehicle', 44, '624d5870141cb1.83735296.220406050800.jpg'),
(5, 'Dave\'s Tourist Adventure', 'Tourist Guide', 45, '624d593237e8b6.40460050.220406051114.jpg'),
(6, 'Xavier\'s Resto Bar', 'Resto Bar', 46, '624d59e117fdb7.92617999.220406051409.jpg');

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
(7, '624d55fbb10536.33856041.220406045731.jpg');

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
(29, '624bd8a5b1f015.66812437.220405015029.png', 'leojr.corpuz@gmail.com', '2022-04-05 05:50:29'),
(30, '624d23ca0523e4.57057638.220406012322.png', 'williamgalas@gmail.com', '2022-04-06 05:23:22'),
(31, '624d23fa2e9a20.53312099.220406012410.png', 'jemflores@gmail.com', '2022-04-06 05:24:10'),
(32, '624d2422a4eab5.19281588.220406012450.png', 'davebamba@gmail.com', '2022-04-06 05:24:50'),
(33, '624d2438e79087.74969502.220406012512.png', 'xaviercruz@gmail.com', '2022-04-06 05:25:12');

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
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `business_id`, `name`, `remarks`, `price`, `image`, `status`, `category`) VALUES
(15, 2, 'package 1 (sample)', 'price is per tour (sample)', '550.00', '624d4f648fba05.47247183.220406042924.jpg', '', 'Package Tours'),
(16, 2, 'package 2', '-imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '1500.00', '624d567a0e0ed2.50167630.220406045938.jpg', '', 'Package Tours'),
(17, 2, 'room 1', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '2000.00', '624d568c053f66.68590966.220406045956.jpg', '', 'Room And Accomodation'),
(18, 2, 'room 2', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '2500.00', '624d56a479b5f5.75604748.220406050020.jpg', '', 'Room And Accomodation'),
(19, 3, 'room 1', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '2000.00', '624d57d8d974c3.57610243.220406050528.jpg', '', 'Room And Accomodation'),
(20, 3, 'room 2', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '3000.00', '624d57e37b3281.19171505.220406050539.jpg', '', 'Room And Accomodation'),
(21, 3, 'room 3', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '5000.00', '624d57ed555021.12547321.220406050549.jpg', '', 'Room And Accomodation'),
(22, 4, 'bike rent 1', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '500.00', '624d58c059c9b1.00377490.220406050920.jpg', '', 'Vehicles'),
(23, 4, 'Mini Car 1', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '5000.00', '624d58d35782c2.76351477.220406050939.jpg', '', 'Vehicles'),
(24, 4, 'Minicar 2', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '6000.00', '624d58e14bdf19.45788215.220406050953.jpg', '', 'Vehicles'),
(25, 5, 'Hiking Guide', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '1000.00', '624d5986b4c347.28566347.220406051238.jpg', '', 'Activities'),
(26, 5, 'Moutain Climb Guide', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '2000.00', '624d5997a50133.93083760.220406051255.jpg', '', 'Activities'),
(27, 6, 'Food 1', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '200.00', '624d5a2a5afb17.88212067.220406051522.jpg', '', 'Food and Menu'),
(28, 6, 'Food 2', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '200.00', '624d5a3787c7f4.56051390.220406051535.jpg', '', 'Food and Menu'),
(29, 6, 'Food 3', 'imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le', '300.00', '624d5a453f3472.98329926.220406051549.jpg', '', 'Food and Menu');

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
  `status` varchar(255) NOT NULL,
  `block_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `password`, `type`, `maneger_type`, `subcribed_at`, `image`, `status`, `block_status`) VALUES
(16, 'admin', 'admin', 'admin', 'superadmin@travel.com', '09992221234', '$2y$10$vyVj99v7.tzXtYgl0tzAmeKSh/HQJCopdg6z8j1gb2feS8sRHEka.', 'administrator', '', '2022-03-31 09:55:23', '', 'active', ''),
(41, 'leo', 'd', 'corpuz', 'leojr.corpuz@gmail.com', '0999222121', '$2y$10$hhIR0Z09c2eyy.UfgSxyMOPEHis/tjjmzFfhZli7Y0HkmYtakDpoC', 'manager', 'Resort manager', '2022-04-05 05:50:44', '624bd8a5915584.20701837.220405015029.png', 'active', ''),
(42, 'jun', 'd', 'domingo', 'jundomingo@gmail.com', '09992221255', '$2y$10$zDwnSQGhKwmFa1idSmUMseZadwjIFEeHSQIm7gIQTFhkHD/lG9bKS', 'traveler', '', '2022-04-06 03:18:21', '624d067d007236.11149878.220406111821.jpg', 'active', ''),
(43, 'william', 'g', 'galas', 'williamgalas@gmail.com', '09995567893', '$2y$10$EaMOLWWX4cKMNa62zfa8nObR1xVq92nKBWOIPuet4xVPGzagvrCNe', 'manager', 'Bed and breakfast manager', '2022-04-06 05:26:13', '624d23c9e71b15.70251466.220406012321.jpg', 'active', ''),
(44, 'jem irall', 'g', 'flores', 'jemflores@gmail.com', '09995432341', '$2y$10$aXUzcSfcyM02FwdSJTRWa.x79p3qELNLmspoQSycEvXOB1CFRhgGu', 'manager', 'Rental vehicle manager', '2022-04-06 05:26:08', '624d23fa24e307.22292957.220406012410.png', 'active', ''),
(45, 'dave', 'g', 'bamba', 'davebamba@gmail.com', '09995432300', '$2y$10$xmP4o/OAZRdQIMNGRfcyJeuEbDk4DdeW.9YzHPzWwpw88ClYPR5vW', 'manager', 'tourist attraction manager', '2022-04-06 05:26:04', '624d24229b7bf4.58307816.220406012450.png', 'active', ''),
(46, 'xavier', 'g', 'cruz', 'xaviercruz@gmail.com', '09995432355', '$2y$10$aA5pGi9RDjlGEpbYpWKKdeOQz/G5ZQpYbPXGewDFws5e8CvlTxflC', 'manager', 'Resto and cafe manager', '2022-04-06 05:25:59', '624d2438e0b4f1.97615793.220406012512.png', 'active', '');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
