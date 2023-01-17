-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2022 at 06:55 PM
-- Server version: 8.0.31-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getsellw_a1services`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_services_stngs`
--

CREATE TABLE `admin_services_stngs` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `frequency` varchar(50) NOT NULL DEFAULT 'One-time',
  `material_price` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `discount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_services_stngs`
--

INSERT INTO `admin_services_stngs` (`id`, `name`, `frequency`, `material_price`, `price`, `discount`) VALUES
(0, 'Home Cleaning', 'One-time', 10, 100, 11),
(1, 'Deep Cleaning', 'One-time', 20, 200, 22),
(2, 'Disinfection Service', 'One-time', 30, 300, 33),
(3, 'AC Service', 'One-time', 40, 400, 44),
(4, 'AC Duct Cleaning', 'One-time', 50, 500, 55),
(5, 'Annual Maintenance Contract', 'One-time', 60, 1500, 66),
(6, 'Handyman', 'One-time', 70, 700, 77),
(7, 'Pest Control', 'One-time', 80, 800, 88);

-- --------------------------------------------------------

--
-- Table structure for table `anaulpkgs`
--

CREATE TABLE `anaulpkgs` (
  `id` int NOT NULL,
  `planname` varchar(50) DEFAULT NULL,
  `prices` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anaulpkgs`
--

INSERT INTO `anaulpkgs` (`id`, `planname`, `prices`) VALUES
(1, 'silver', 1500),
(2, 'gold', 1800),
(3, 'platinium', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `desc` varchar(250) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `desc`, `time`) VALUES
(2, 'beela', 'beela@gmail.com', '12345678', 'Some Thing By Beela', '2022-12-14 14:09:19'),
(4, '1111111111', 'lukeson@gmail.com', '111111111', '111111111', '2022-12-14 16:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `id` int NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `gender` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `lat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `lng` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `location` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `fulladress` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `lat`, `lng`, `location`, `fulladress`) VALUES
(1, 'atif', 'umar', '12345678', 'atif@gmail.com', 'male', '11111111111', '22222222222', 'dubai_some_name', 'dubai full adress'),
(2, 'john', 'king', '123456789', 'john@gmail.com', 'male', '11111111111', '22222222222', 'dubai_loc of john', 'dubai full adress of john'),
(3, 'lukeson', 'andro', '1234567890', 'lukeson@gmail.com', 'Male', '40.73330992745831', '-73.82892765082464', 'Kew Gardens Hills, NY 11367, USA', 'street no 1'),
(4, 'lukeson', 'andro', '1234567890', 'lukeson@gmail.com', 'Male', '40.731748981744005', '-73.82510818518743', 'Kew Gardens Hills, NY 11367, USA', 'street no 2'),
(5, 'lukeson', 'kevin', '324', 'lukeson@gmail.com', 'Male', '40.73327740812943', '-73.82188953436956', 'Kew Gardens Hills, NY 11367, USA', 'dubai street');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `msg` varchar(250) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `phone`, `msg`, `time`) VALUES
(1, '', '', '2022-12-14 14:25:37'),
(3, '123456', 'fdasg', '2022-12-14 14:26:38'),
(4, '123456', 'fdasg', '2022-12-14 14:51:05'),
(5, '123456', 'fdasg', '2022-12-14 14:51:37'),
(6, '123456', 'fdasg', '2022-12-14 15:01:04'),
(7, '123456', 'fdasg', '2022-12-14 15:02:33'),
(8, '123456', 'fdasg', '2022-12-14 15:07:35'),
(9, '123456', 'fdasg', '2022-12-14 15:08:50'),
(10, '123456', 'fdasg', '2022-12-14 15:09:16'),
(11, '123456', 'fdasg', '2022-12-14 15:13:14'),
(12, '123456', 'fdasg', '2022-12-14 15:14:17'),
(13, '123456', 'fdasg', '2022-12-14 15:15:14'),
(14, '123456', 'fdasg', '2022-12-14 15:15:43'),
(15, '123456', 'fdasg', '2022-12-14 15:19:24'),
(16, '123456', 'fdasg', '2022-12-14 15:20:01'),
(17, '123456', 'fdasg', '2022-12-14 15:22:05'),
(18, '123456', 'fdasg', '2022-12-14 15:22:49'),
(19, '123456', 'fdasg', '2022-12-14 15:24:37'),
(20, '123456', 'fdasg', '2022-12-14 15:24:57'),
(21, '12345678', 'details 2', '2022-12-14 15:25:24'),
(22, '123456', 'fdasg', '2022-12-14 15:25:49'),
(23, '123456', 'fdasg', '2022-12-14 15:27:07'),
(24, '123456', 'fdasg', '2022-12-14 15:28:53'),
(25, '123456', 'fdasg', '2022-12-14 15:29:21'),
(26, '123456', 'fdasg', '2022-12-14 15:29:39'),
(27, '123456', 'fdasg', '2022-12-14 15:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `adminname` varchar(100) DEFAULT NULL,
  `adminpass` varchar(100) DEFAULT NULL,
  `gmail` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `insta` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `paybytype` int DEFAULT '0',
  `hideurl` varchar(50) NOT NULL DEFAULT 'yes',
  `site2_url` varchar(200) DEFAULT 'wp/',
  `adres1heading` varchar(100) DEFAULT NULL,
  `adres1hide` varchar(50) DEFAULT NULL,
  `adres1desc` varchar(250) DEFAULT NULL,
  `adres2heading` varchar(100) DEFAULT NULL,
  `adres2hide` varchar(50) DEFAULT NULL,
  `adres2desc` varchar(250) DEFAULT NULL,
  `adres3heading` varchar(100) DEFAULT NULL,
  `adres3hide` varchar(50) DEFAULT NULL,
  `adres3desc` varchar(250) DEFAULT NULL,
  `adres4heading` varchar(100) DEFAULT NULL,
  `adres4hide` varchar(50) DEFAULT NULL,
  `adres4desc` varchar(250) DEFAULT NULL,
  `iosapplink` varchar(150) DEFAULT NULL,
  `ioshide` varchar(50) DEFAULT NULL,
  `androidapplink` varchar(150) DEFAULT NULL,
  `androidhide` varchar(50) DEFAULT NULL,
  `gmaplink` varchar(150) DEFAULT NULL,
  `gmaphide` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `adminname`, `adminpass`, `gmail`, `phone`, `facebook`, `twitter`, `insta`, `youtube`, `whatsapp`, `paybytype`, `hideurl`, `site2_url`, `adres1heading`, `adres1hide`, `adres1desc`, `adres2heading`, `adres2hide`, `adres2desc`, `adres3heading`, `adres3hide`, `adres3desc`, `adres4heading`, `adres4hide`, `adres4desc`, `iosapplink`, `ioshide`, `androidapplink`, `androidhide`, `gmaplink`, `gmaphide`) VALUES
(1, 'admin786', '8c7e0a569a77041fd89ece0eef85d956', 'admin@gmail.com', '03012345678', 'facebook.com', 'tewitter.com', 'insta.com', 'youtube.com', 'whatsapp.com', 1, 'yes', 'wp/', 'WhiteSpot Cleaning Services Main Office:1', 'no', ' ADDRESS: 1602, DAMAC EXECUTIVE HEIGHTS, BARSHA HEIGHTS, TECOM, DUBAI, UAE 1', 'WhiteSpot Cleaning Business Bay Office:2', 'no', ' ADDRESS: P3, DAMAC UPPERCREST, BUSINESS BAY, DUBAI, UAE 2', 'WhiteSpot Cleaning Damac Hills Office:3', 'no', ' ADDRESS: DAMAC HANDOVER OFFICE, DAMAC HILLS, MUDON, DUBAI, UAE 3', 'WhiteSpot Cleaning Damac Lake View Office:4', 'no', ' ADDRESS: P4, DAMAC LAKEVIEW, JUMEIRAH LAKES TOWERS, DUBAI, UAE 4', 'ioslink', 'no', 'android app link', 'no', 'google map link', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users_services`
--

CREATE TABLE `users_services` (
  `id` int NOT NULL,
  `tokenid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `statusicon` varchar(50) NOT NULL DEFAULT 'fa-history',
  `service_no` int NOT NULL DEFAULT '0',
  `by_phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `by_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `by_gmail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `lat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `lng` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `location` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `full_adress` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `service_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `building_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `bedrooms` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `user_desc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `no_of_prof` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `prof_needs` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `pkg` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `pricing_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `region_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `selected_days` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `selected_time` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `use_material` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `meterial_price` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `price` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `vat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `discount` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `total` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `paid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_services`
--

INSERT INTO `users_services` (`id`, `tokenid`, `status`, `statusicon`, `service_no`, `by_phone`, `by_name`, `by_gmail`, `lat`, `lng`, `location`, `full_adress`, `service_name`, `building_type`, `bedrooms`, `user_desc`, `no_of_prof`, `prof_needs`, `pkg`, `pricing_type`, `region_id`, `selected_days`, `selected_time`, `use_material`, `meterial_price`, `price`, `vat`, `discount`, `total`, `paid`, `time`) VALUES
(1, 'fsadfsdfgsdfg', 0, 'fa-history', 1, '1234', '123', '1231', '23', '132', '132', '234', 'zxc', 'sdf', 'saf', 'sfd', 'sfad', 'sfad', 'saf', 'sfd', 'fsd', 'sfda', 'sfa', 'fh', 'fhd', 'fh', 'dfh', 'fgdh', 'fg', 'fgjhgh', '2022-12-16 18:34:47'),
(2, 'us48til63csqflksadjcmp', 0, 'fa-history', 1, '324', 'lukeson', 'lukeson@gmail.com', '40.7324319', '-73.82480777777776', 'Kew Gardens Hills, NY 11367, USA', '', 'Home Cleaning', 'Villa', '3', '', '6', '3', 'silver', 'hours', '0010900000d9p1PAAQ', 'Thu, 22-Dec-2022', '14,00', 'Yes', '40', '100', '7.00', '11', '131', 'by Cash', '2022-12-16 18:48:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_services`
--
ALTER TABLE `users_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_services`
--
ALTER TABLE `users_services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
