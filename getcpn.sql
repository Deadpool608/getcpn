-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 04:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getcpn`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `des` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 sold 1 in stock',
  `byadd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `code`, `price`, `des`, `status`, `byadd`) VALUES
(9, 'demo2', '65080d74225b8.png', '123ok', 123, 'some pseudo text', 0, 2),
(10, 'jay', '651668952d2f5.jpg', 'AW223', 120, 'this is best amazone coupon', 1, 1),
(14, 'denver', '651ae6d898636.jpg', 'AedW223', 85, 'this is best PERFUME coupon', 1, 5),
(15, 'demo', '6526624969ada.jpg', 'AW223', 100, 'this is best amazone coupon', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usrid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '0=admin , 1=user',
  `acstatus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usrid`, `name`, `phone`, `email`, `pswd`, `role`, `acstatus`) VALUES
(1, 'jay', 1234554321, 'jay@gmail.com', '12345', 1, 1),
(2, 'admin', 1111111, 'admin@gmail.com', 'admin', 0, 1),
(3, 'Dipak', 1244332316, 'dip608@gmail.com', 'dipu123', 1, 1),
(4, 'Yash', 2147483647, 'yashok@gmail.com', '12345', 1, 0),
(5, 'Mahek', 2147483647, 'mahi608@gmail.com', 'mahi123', 1, 1),
(6, 'Dipzz', 1212121212, 'dipchaudhari608@gmail.com', 'smTv48USca7T', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usrid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
