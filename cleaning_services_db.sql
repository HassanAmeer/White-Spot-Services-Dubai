-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 12:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaning_services_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_services_stngs`
--

CREATE TABLE `admin_services_stngs` (
  `id` int(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `frequency` varchar(50) NOT NULL DEFAULT 'One-time',
  `material_price` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `discount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(10) NOT NULL,
  `planname` varchar(50) DEFAULT NULL,
  `prices` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(111) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `desc` varchar(250) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(111) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `fulladress` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `lat`, `lng`, `location`, `fulladress`) VALUES
(1, 'atif', 'umar', '12345678', 'atif@gmail.com', 'male', '11111111111', '22222222222', 'dubai_some_name', 'dubai full adress'),
(2, 'john', 'king', '123456789', 'john@gmail.com', 'male', '11111111111', '22222222222', 'dubai_loc of john', 'dubai full adress of john'),
(3, 'lukeson', 'andro', '1234567890', 'lukeson@gmail.com', 'Male', '40.73330992745831', '-73.82892765082464', 'Kew Gardens Hills, NY 11367, USA', 'street no 1'),
(4, 'lukeson', 'andro', '1234567890', 'lukeson@gmail.com', 'Male', '40.731748981744005', '-73.82510818518743', 'Kew Gardens Hills, NY 11367, USA', 'street no 2');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(111) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `msg` varchar(250) DEFAULT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(10) NOT NULL,
  `adminname` varchar(100) DEFAULT NULL,
  `adminpass` varchar(100) DEFAULT NULL,
  `gmail` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `insta` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `paybytype` int(1) DEFAULT 0,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `adminname`, `adminpass`, `gmail`, `phone`, `facebook`, `twitter`, `insta`, `youtube`, `whatsapp`, `paybytype`, `adres1heading`, `adres1hide`, `adres1desc`, `adres2heading`, `adres2hide`, `adres2desc`, `adres3heading`, `adres3hide`, `adres3desc`, `adres4heading`, `adres4hide`, `adres4desc`, `iosapplink`, `ioshide`, `androidapplink`, `androidhide`, `gmaplink`, `gmaphide`) VALUES
(1, 'admin786', '8c7e0a569a77041fd89ece0eef85d956', 'admin@gmail.com', '03012345678', 'facebook.com', 'tewitter.com', 'insta.com', 'youtube.com', 'whatsapp.com', 1, 'WhiteSpot Cleaning Services Main Office:1', 'no', ' ADDRESS: 1602, DAMAC EXECUTIVE HEIGHTS, BARSHA HEIGHTS, TECOM, DUBAI, UAE 1', 'WhiteSpot Cleaning Business Bay Office:2', 'no', ' ADDRESS: P3, DAMAC UPPERCREST, BUSINESS BAY, DUBAI, UAE 2', 'WhiteSpot Cleaning Damac Hills Office:3', 'no', ' ADDRESS: DAMAC HANDOVER OFFICE, DAMAC HILLS, MUDON, DUBAI, UAE 3', 'WhiteSpot Cleaning Damac Lake View Office:4', 'no', ' ADDRESS: P4, DAMAC LAKEVIEW, JUMEIRAH LAKES TOWERS, DUBAI, UAE 4', 'ioslink', 'no', 'android app link', 'no', 'google map link', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users_services`
--

CREATE TABLE `users_services` (
  `id` int(200) NOT NULL,
  `tokenid` varchar(200) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `statusicon` varchar(100) NOT NULL DEFAULT 'fa-history',
  `service_no` int(10) DEFAULT NULL,
  `by_phone` varchar(200) DEFAULT NULL,
  `by_name` varchar(100) DEFAULT NULL,
  `by_gmail` varchar(100) DEFAULT NULL,
  `lat` varchar(200) DEFAULT NULL,
  `lng` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `full_adress` varchar(200) DEFAULT NULL,
  `service_name` varchar(200) DEFAULT NULL,
  `building_type` varchar(200) DEFAULT NULL,
  `bedrooms` varchar(200) DEFAULT NULL,
  `user_desc` varchar(200) DEFAULT NULL,
  `no_of_prof` varchar(200) DEFAULT NULL,
  `prof_needs` varchar(200) DEFAULT NULL,
  `pkg` varchar(200) DEFAULT NULL,
  `pricing_type` varchar(200) DEFAULT NULL,
  `region_id` varchar(200) DEFAULT NULL,
  `selected_days` varchar(200) DEFAULT NULL,
  `selected_time` varchar(200) DEFAULT NULL,
  `use_material` varchar(200) DEFAULT NULL,
  `meterial_price` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `vat` varchar(200) DEFAULT NULL,
  `discount` varchar(200) DEFAULT NULL,
  `total` int(20) DEFAULT NULL,
  `paid` varchar(10) DEFAULT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_services`
--

INSERT INTO `users_services` (`id`, `tokenid`, `status`, `statusicon`, `service_no`, `by_phone`, `by_name`, `by_gmail`, `lat`, `lng`, `location`, `full_adress`, `service_name`, `building_type`, `bedrooms`, `user_desc`, `no_of_prof`, `prof_needs`, `pkg`, `pricing_type`, `region_id`, `selected_days`, `selected_time`, `use_material`, `meterial_price`, `price`, `vat`, `discount`, `total`, `paid`, `time`) VALUES
(59, 'vioz6tlnvy4gi5lnldv8l', 1, 'fa-history', 2, '12345678', 'atif', 'atif@gmail.com', '24.82475812443726', '55.55414043389215', '', '', 'Deep Cleaning', 'Villa', '5', 'something about this', '4', '1', 'silver', 'Hourly', '0010900000d9p0zAAA', 'Tue, 20-Dec-2022', '10,00', 'Yes', '', '200', '14.00', '22', 167, 'by Cash', '2022-12-15'),
(60, 'z1g6wh9gqyopnn1dgna9fj', 1, 'fa-history', 7, '12345678', 'atif', 'atif@gmail.com', '24.82475812443726', '55.55414043389215', 'dubai map location', 'dubai street', 'Handyman', 'Apartment', '5', 'something about this ......', '4', '4', 'silver', 'Hourly', '0010900000d9p0zAAA', 'Thu, 22-Dec-2022', '14,00', 'Yes', '1120', '700', '91.00', '77', 440, 'by Cash', '2022-12-15'),
(61, NULL, 0, 'fa-history', 6, '1234', 'beelaa', 'beela@gmail.com', NULL, NULL, '', NULL, 'Annual Maintenance Contract', 'Townhouse', NULL, NULL, NULL, NULL, 'platinium', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-15'),
(62, 'yhwq6cffvpf97udqizbh4', 0, 'fa-history', 8, '12345678', 'atif', 'atif@gmail.com', '24.68282183032492', '55.25068603478322', '7HPQM7M2+47', 'dubai street', 'Pest Control', 'Villa', '4', 'some thing with lat lan', '4', '1', 'silver', 'Hourly', 'dubai region', 'Thu, 22-Dec-2022', '14,00', 'Yes', '', '800', '56.00', '88', 103, 'by Cash', '2022-12-16'),
(63, NULL, 0, 'fa-history', 6, '1234', 'admin786', 'lukeson@gmail.com', '', '', '', NULL, 'Annual Maintenance Contract', 'Apartment', NULL, NULL, NULL, NULL, 'gold', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_services_stngs`
--
ALTER TABLE `admin_services_stngs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anaulpkgs`
--
ALTER TABLE `anaulpkgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admin_services_stngs`
--
ALTER TABLE `admin_services_stngs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `anaulpkgs`
--
ALTER TABLE `anaulpkgs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_services`
--
ALTER TABLE `users_services`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
