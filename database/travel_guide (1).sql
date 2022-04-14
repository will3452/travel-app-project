-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 12:03 PM
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
-- Table structure for table `account_subscription`
--

CREATE TABLE `account_subscription` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `start` datetime NOT NULL,
  `expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_subscription`
--

INSERT INTO `account_subscription` (`id`, `user_id`, `start`, `expiration`) VALUES
(8, 57, '2022-04-11 15:55:44', '2022-05-11 15:55:44'),
(9, 59, '2022-04-11 17:52:43', '2022-05-11 17:52:43'),
(10, 60, '2022-04-12 13:30:02', '2022-05-12 13:30:02'),
(13, 62, '2022-04-13 12:03:34', '2022-05-13 12:03:34'),
(14, 63, '2022-04-13 12:05:00', '2022-05-13 12:05:00'),
(15, 64, '2022-04-13 12:18:51', '2022-05-13 12:18:51');

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

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `image`, `manager_id`, `status`, `package_id`, `pop`, `schedule_at`) VALUES
(30, '62565d03df2293.38130854.220413011755.png', 57, 'pending', 6, '62565d03df21b3.27785423.220413011755.png', '2022-04-14 00:00:00');

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
-- Table structure for table `bucketlist`
--

CREATE TABLE `bucketlist` (
  `id` int(255) NOT NULL,
  `remarks` longtext NOT NULL,
  `business_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 'WalWalan Resort', 'Resort manager', 57, '6253e09edb0719.97376851.220411040238.png'),
(10, 'Willi\'es Vehicle Renter', 'Rental vehicle manager', 59, '6253fadc8d8474.07792337.220411055436.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `business_id`, `name`) VALUES
(1, 9, 'room and accomodation'),
(2, 9, 'package tour'),
(4, 9, 'pool accomodation'),
(5, 9, 'catage'),
(6, 10, 'mini van'),
(7, 10, 'large van'),
(8, 10, 'motor'),
(9, 10, 'mini cart');

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
  `price` decimal(10,2) NOT NULL,
  `manager_id` int(255) NOT NULL,
  `type_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_pop`
--

INSERT INTO `manager_pop` (`id`, `img`, `price`, `manager_id`, `type_id`, `type`, `date`, `status`) VALUES
(75, '6253decd6b1177.10292523.220411035453.png', '10000.00', 57, 8, 'account payment', '2022-04-11 07:54:53', 'done'),
(76, '6253fa61aad9c2.41580393.220411055233.png', '10000.00', 59, 9, 'account payment', '2022-04-11 09:52:33', 'done'),
(77, '625501362693a8.85542885.220412123358.png', '10000.00', 60, 10, 'account payment', '2022-04-12 04:33:58', 'done'),
(82, '62564b63779c42.82070266.220413120243.png', '10000.00', 62, 13, 'account payment', '2022-04-13 04:02:43', 'done'),
(83, '62564bd5479424.48038422.220413120437.png', '10000.00', 63, 14, 'account payment', '2022-04-13 04:04:37', 'done'),
(84, '62564e0eca6f65.87958687.220413121406.png', '10000.00', 64, 15, 'account payment', '2022-04-13 04:14:06', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `type`, `link`, `message`, `read_at`, `date_created`) VALUES
(51, 58, 'manager', 'http://127.0.0.1src/manager/view/view-notification', 'Book On 2022-04-15, 12:33:pm', NULL, '2022-04-14 04:34:15'),
(52, 65, 'manager', 'http://127.0.0.1src/manager/view/view-notification', 'Book On 2022-04-18, 01:01:pm', NULL, '2022-04-14 05:01:17'),
(58, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'Your Book in WalWalan Resort at 2022-04-18 01:01:PM Has been approved', NULL, '2022-04-14 06:25:03'),
(59, 58, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'Your Book in WalWalan Resort at 2022-04-15 12:33:PM Has been drop', NULL, '2022-04-14 06:25:19'),
(60, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'Your Book in WalWalan Resort at 2022-04-18 01:01:PM Has been done', NULL, '2022-04-14 06:30:01'),
(62, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'WalWalan Resort created book on 2022-04-15 03:08:PM', NULL, '2022-04-14 07:08:51'),
(63, 58, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'WalWalan Resort created book on 2022-04-16 03:08:PM', NULL, '2022-04-14 07:09:42'),
(64, 58, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'Your Book in WalWalan Resort at 2022-04-16 03:08:PM Has been drop', NULL, '2022-04-14 07:09:51'),
(65, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'Your Book in WalWalan Resort at 2022-04-15 03:08:PM Has been drop', NULL, '2022-04-14 07:09:55'),
(66, 58, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'WalWalan Resort update your book on 2022-04-16 12:50:PM', NULL, '2022-04-14 07:50:52'),
(67, 58, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'WalWalan Resort update your book from 2022-04-16 to 2022-04-17 12:50:PM', NULL, '2022-04-14 07:51:14'),
(68, 65, 'manager', 'http://127.0.0.1src/manager/view/view-notification', 'Book On 2022-04-16, 03:54:pm', NULL, '2022-04-14 07:54:48'),
(69, 65, 'manager', 'http://127.0.0.1src/manager/view/view-notification', 'Book On 2022-04-16, 04:02:pm', NULL, '2022-04-14 08:02:37'),
(70, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'Your Book in WalWalan Resort at 2022-04-16 04:02:PM Has been approved', NULL, '2022-04-14 08:02:47'),
(71, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'WalWalan Resort update your book on 2022-04-16 04:02:PM', NULL, '2022-04-14 08:05:57'),
(72, 65, 'traveler', 'http://127.0.0.1src/traveler/view/view-notification', 'WalWalan Resort update your book on 2022-04-16 04:02:PM', NULL, '2022-04-14 08:06:53'),
(73, 58, 'manager', 'http://127.0.0.1src/manager/view/view-notification', 'Book On 2022-04-16, 04:44:pm', NULL, '2022-04-14 08:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `days`, `price`, `description`) VALUES
(4, 'package 1', '10', '1500.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 'package 2', '5', '500.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'package 3', '7', '1000.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(255) NOT NULL,
  `account_pricing` decimal(10,2) NOT NULL,
  `account_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `account_pricing`, `account_details`) VALUES
(1, '10000.00', '-monthly payment');

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
  `reserved_at` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `user_id`, `business_id`, `status`, `notes`, `reserved_at`, `time`, `remarks`) VALUES
(10, 58, 9, 'history', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-15', '12:33', 'drop'),
(11, 65, 9, 'history', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-18', '13:01', 'done'),
(14, 65, 9, 'approved', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-15', '15:08', ''),
(15, 58, 9, 'history', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-17', '12:50', 'drop'),
(16, 65, 10, 'pending', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-16', '15:54', ''),
(17, 65, 9, 'approved', 'dasdasd', '2022-04-16', '16:02', ''),
(18, 58, 10, 'approved', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-16', '16:44', '');

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
(30, 9, 'package tour 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1000.00', '6253e963676b79.93951884.220411044003.jpg', '', 'package tour'),
(31, 9, 'room 2.2 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1500.00', '6253e9b8420170.74858151.220411044128.jpg', '', 'Room And Accomodation'),
(32, 9, 'catage 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1000.00', '6253f8f22fdd53.05599884.220411054626.jpg', '', 'catage'),
(33, 9, 'catage 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2000.00', '6253f90292c358.03285786.220411054642.jpg', '', 'catage'),
(34, 9, 'catage 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3000.00', '6253f90d080577.95259143.220411054653.jpg', '', 'catage'),
(35, 9, 'pool 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1000.00', '6253f94a2e73b6.36827299.220411054754.jpg', '', 'pool accomodation'),
(36, 9, 'pool 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2000.00', '6253f95630ed01.75050176.220411054806.jpg', '', 'pool accomodation'),
(37, 10, 'van 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5000.00', '6253fb6403bc99.99460640.220411055652.jpg', '', 'mini van'),
(38, 10, 'van 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '6000.00', '6253fb717995b4.31616844.220411055705.jpg', '', 'mini van'),
(39, 10, 'van 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '4000.00', '6253fb7b358fb7.79100500.220411055715.jpg', '', 'mini van'),
(40, 10, 'LVan 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10000.00', '6253fbb75e2378.18199332.220411055815.jpg', '', 'large van'),
(41, 10, 'LVAn 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10000.00', '6253fbca8f2c13.15534574.220411055834.jpg', '', 'large van'),
(42, 10, 'LVan 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '8000.00', '6253fbdaa792c7.40871809.220411055850.jpg', '', 'large van'),
(43, 10, 'm2-1 bike', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1000.00', '6253fc02056528.47819609.220411055930.jpg', '', 'motor'),
(44, 10, 'm2-3 bike', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '800.00', '6253fc13e9bf13.09015747.220411055947.jpg', '', 'motor'),
(45, 10, 'mc 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '500.00', '6253fc40acdd92.35116140.220411060032.jpg', '', 'mini cart'),
(46, 10, 'mc 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '700.00', '6253fc4c22d5e0.27790453.220411060044.jpg', '', 'mini cart'),
(47, 10, 'mc 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '700.00', '6253fc59de1730.43547067.220411060057.jpg', '', 'mini cart');

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
(57, 'leo', 'd', 'corpuz', 'leocorpuz@gmail.com', '09995654562', '$2y$10$cuhNjWP.el9CvnzRQK0J9.exohA2BU8nsQPZ/D3mo0AmBdH8n6d7u', 'manager', 'Resort manager', '2022-04-11 07:55:44', '6253decd5ebad2.97895815.220411035453.png', 'active', ''),
(58, 'joanna', 'a', 'corpuz', 'marie@gmail.com', '09992224565', '$2y$10$eA/ORjrdPAa.9P/P84MEp.FFKIoPkYxNz9SgB9TPRLWsodqf74IKq', 'traveler', '', '2022-04-11 09:01:40', '6253ee74ec1899.79063357.220411050140.jpg', 'active', ''),
(59, 'william', 'g', 'galas', 'williamgalas@gmail.com', '09992223432', '$2y$10$90XxsuGoc4ZrNVz6cWeG6eNVmxKehocQ.W6jMEqWB4QTDem11GeZ6', 'manager', 'Rental vehicle manager', '2022-04-11 09:52:43', '6253fa61a0f508.68896191.220411055233.jpg', 'active', ''),
(60, 'xavier', 'r', 'cruz', 'xaviercruz@gmail.com', '09992223452', '$2y$10$vJEDtSuxZh9wwZ2sjyoZO.f13GaTK7suLshcYABxI2TuPRDyzFv7y', 'manager', 'tourist attraction manager', '2022-04-12 05:36:08', '62550136163e45.58099179.220412123358.png', 'active', ''),
(61, 'jon', 'm', 'joe', 'jonjoe@gmail.com', '09992223456', '$2y$10$l7JxcczhKQGYKIzQOR25SuqrNjwbWem4kpuMp7FoJOGjsaaJRyfla', 'traveler', '', '2022-04-12 04:37:06', '625501f2513c36.09448648.220412123706.jpg', 'active', ''),
(62, 'dave', 'r', 'bamba', 'davebamba@gmail.com', '09995556789', '$2y$10$e8Q7sz4Khjuuj/1I33RL8uk91UFMKCv/jZoyZMqZ1c.AcGiILE0bK', 'manager', 'Resto and cafe manager', '2022-04-13 04:03:33', '62564b60965945.78219680.220413120240.png', 'active', ''),
(63, 'jem', 'r', 'flores', 'jemflores@gmail.com', '09995556700', '$2y$10$ks2mTIB3Wh7KFSUos6rtc.jI0HOz/hx7gnAlpflvkl1jVuUabMoeO', 'manager', 'Bed and breakfast manager', '2022-04-13 04:05:00', '62564bd5399534.62416923.220413120437.png', 'active', ''),
(64, 'mary', 'g', 'manabes', 'marymanabes@gmail.com', '09996665432', '$2y$10$QljcqFO88OlRIhj98cqe7uhcHgUu7ZzAUrwudAsve99.FfXwwyOEm', 'manager', 'Resort manager', '2022-04-13 04:18:51', '62564e0eba9492.52253223.220413121406.jpg', 'active', ''),
(65, 'jane', 'b', 'cruz', 'janecruz@gmail.com', '09995556781', '$2y$10$VEK.SYM4B6ufXefRKZVvzuvs0uu3qtRcUcSQzApSfvM1fgc2f1Hw.', 'traveler', '', '2022-04-13 04:16:00', '62564e803d6630.53868012.220413121600.jpg', 'active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_subscription`
--
ALTER TABLE `account_subscription`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `bucketlist`
--
ALTER TABLE `bucketlist`
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
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
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
-- AUTO_INCREMENT for table `account_subscription`
--
ALTER TABLE `account_subscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `branding`
--
ALTER TABLE `branding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bucketlist`
--
ALTER TABLE `bucketlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
