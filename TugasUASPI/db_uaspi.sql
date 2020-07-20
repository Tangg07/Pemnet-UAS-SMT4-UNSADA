-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 06:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uaspi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
('5ef8b253de971', 'Module Amplifier 3W', 25000, '5ef8b253de971.jpg', 'Module Amplifier 3W'),
('5ef8b22aee81e', 'Arduino Leonardo', 150000, '5ef8b22aee81e.jpg', 'Arduino Leonardo'),
('5ef8b27a1f5a0', 'Module Clock', 30000, '5ef8b27a1f5a0.jpg', 'Module Clock'),
('5ef8b28e99f7d', 'USB BUS General', 15000, '5ef8b28e99f7d.jpg', 'USB BUS General'),
('5ef8b2b36b8ce', 'DHT LM33 Temprature', 20000, '5ef8b2b36b8ce.jpg', 'DHT LM33 Temprature'),
('5ef8b34109434', 'Layar LCD', 80000, '5ef8b34109434.jpg', 'Layar LCD'),
('5ef8b355c4baf', 'Module Flame Sensor', 30000, '5ef8b355c4baf.jpg', 'Module Flame Sensor'),
('5ef8b3786daa1', 'Dot Matrix', 60000, '5ef8b3786daa1.jpg', 'Dot Matrix');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'admin', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', 'Anggasyamsul70@gmail.com', 'Muhammad Angga', '089610226817', 'admin', '2020-06-29 04:33:16', 'user_no_image.jpg', '2020-06-27 13:02:15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
