-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce_website`
--
CREATE DATABASE IF NOT EXISTS `e_commerce_website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_commerce_website`;

-- --------------------------------------------------------

--
-- Table structure for table `biriyani`
--

CREATE TABLE `biriyani` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biriyani`
--

INSERT INTO `biriyani` (`id`, `name`, `image`, `price`) VALUES
(801, 'chicken Biriyani', 'Biriyani/1.jpg', 250),
(802, 'chicken Biriyani', 'Biriyani/2.jpg', 230);

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`id`, `name`, `image`, `price`) VALUES
(701, 'Chicken Burger', 'Burger/1.jpg', 260);

-- --------------------------------------------------------

--
-- Table structure for table `create`
--

CREATE TABLE `create` (
  `id` int(50) NOT NULL,
  `Fast_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `imageli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discount_offer`
--

CREATE TABLE `discount_offer` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_offer`
--

INSERT INTO `discount_offer` (`id`, `name`, `image`, `price`) VALUES
(601, 'Mens Fashion', 'Discount images/A.jpg', 1500),
(602, 'Mens Fashion', 'Discount images/B.jpg', 1800),
(603, 'Mens Fashion', 'Discount images/C.jpg', 1600),
(604, 'Mens Fashion', 'Discount images/D.jpg', 2400);

-- --------------------------------------------------------

--
-- Table structure for table `female`
--

CREATE TABLE `female` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `female`
--

INSERT INTO `female` (`id`, `name`, `image`, `price`) VALUES
(501, 'women', 'Female/10.jpg', 1500),
(502, 'women', 'Female/11.jpg', 1500),
(503, 'women', 'Female/12.jpg', 2000),
(504, 'women', 'Female/13.jpg', 2000),
(505, 'women', 'Female/14.jpg', 2500),
(506, 'women', 'Female/15.jpg', 2500),
(507, 'women', 'Female/16.jpg', 3000),
(508, 'women', 'Female/17.jpg', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `name`, `image`, `price`) VALUES
(401, 'kid', 'kid/19.jpg', 1200),
(402, 'kid', 'kid/20.jpg', 2200),
(403, 'kid', 'kid/21.jpg', 2200),
(404, 'kid', 'kid/22.jpg', 3300),
(405, 'kid', 'kid/23.jpg', 3300),
(406, 'kid', 'kid/24.jpg', 3800),
(407, 'kid', 'kid/18.jpg', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `image`, `price`) VALUES
(301, 'Laptop', 'Laptop/2.png', 34000),
(302, 'Laptop', 'Laptop/3.jpg', 41999),
(303, 'Laptop', 'Laptop/1.jpg', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`, `image`, `price`) VALUES
(201, 'Mobile', 'Mobile/1.jpg', 502000),
(202, 'Mobile', 'Mobile/2.png', 60125),
(203, 'Mobile', 'Mobile/3.jpg', 48210),
(204, 'Mobile', 'Mobile/4.png', 65214),
(205, 'Mobile', 'Mobile/5.jpg', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Exclusive Mens T-Shirt', 'pictures/1.jpg', 800),
(2, 'Exclusive Mens Shirt', 'pictures/2.jpg', 1200),
(3, 'Exclusive Mens T-Shirt', 'pictures/3.jpg', 1200),
(4, 'Exclusive Mens Shirt', 'pictures/5.jpg', 1500),
(5, 'Exclusive Mens Shirt', 'pictures/7.jpg', 1300),
(6, 'Exclusive Mens T-Shirt', 'pictures/4.jpg', 800),
(7, 'Exclusive Mens T-Shirt', 'pictures/6.jpg', 800),
(8, 'Exclusive Mens T-Shirt', 'pictures/8.jpg', 800),
(9, 'Exclusive Mens T-Shirt', 'pictures/9.jpg', 800);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `Fast_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Fast_Name`, `Last_Name`, `Email`, `Phone_Number`, `Password`, `Gender`) VALUES
(1, 'akhtar', 'akhtar', 'mr.akhtar.bd', 1710, '12', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `name`, `image`, `price`) VALUES
(101, 'Television', 'TV/1.jpg', 26000),
(102, 'Television', 'TV/2.jpg', 38000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biriyani`
--
ALTER TABLE `biriyani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create`
--
ALTER TABLE `create`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_offer`
--
ALTER TABLE `discount_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female`
--
ALTER TABLE `female`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biriyani`
--
ALTER TABLE `biriyani`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=803;

--
-- AUTO_INCREMENT for table `burger`
--
ALTER TABLE `burger`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=702;

--
-- AUTO_INCREMENT for table `create`
--
ALTER TABLE `create`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_offer`
--
ALTER TABLE `discount_offer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT for table `female`
--
ALTER TABLE `female`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
