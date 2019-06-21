-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 11:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btc3205`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `api_key`) VALUES
(29, 38, 'FGDeY6WA07JGhLMUTnyXPMLKyrQpj18PQbswzCee1tspAq84jwvNY02YPazI0aLI');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `units` int(11) DEFAULT NULL,
  `unit_price` double(3,2) DEFAULT NULL,
  `order_status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `units`, `unit_price`, `order_status`) VALUES
(21, 'Chapati', 12, 9.99, 'Order Placed'),
(22, 'Chapati', 12, 9.99, 'Order Placed'),
(23, '', 0, 0.00, 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `user_city` varchar(32) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text,
  `filename` varchar(255) NOT NULL,
  `uct_timestamp` varchar(255) NOT NULL,
  `offset` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_city`, `username`, `password`, `filename`, `uct_timestamp`, `offset`) VALUES
(37, 'Isaack', 'Motanya', 'Kajiado', 'Morzey', '$2y$10$nYTwwLqjfo0kGRTukT6NyeLFxZBDdHcHyRtP/mIv663C7D.EzRmmK', '', '0000-00-00 00:00:00', '0'),
(38, 'Naomi', 'Wambui', 'Nairobi', 'Bobo', '$2y$10$m/8NYW95laugCeFGayGSJOiAYulEw5e5BSpDtb10wALKiTHxc2eGi', '', '0000-00-00 00:00:00', '0'),
(39, 'Mkaza', 'Mpole', 'Nairobi', 'Wanyee', '$2y$10$78F/qyRx9tpoUssaNVZPseixtakvv4..19o0R62Ja3DBufBTS6Ur2', '', '0000-00-00 00:00:00', '0'),
(49, 'Rosanne', 'Ogwel', 'Nairobi', 'Rosanne', '$2y$10$q3AK26pqvD.Z65dCiE0y7elE6Djf3NAK3b5g8TDMThFPfKHXzAndu', '', '0000-00-00 00:00:00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD CONSTRAINT `api_keys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
