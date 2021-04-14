-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 08:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mismora_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `address` varchar(155) NOT NULL,
  `mobile_num` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `surname`, `address`, `mobile_num`, `email`, `password`, `user_type`) VALUES
(4, 'Mishael', 'Ratemo', '1316', '8888888', 'test@gmail.com', '$2y$10$li8aMc3iBhxT.fh1uFxZm.Oz36C2gSyPt87Q1y1XL3JiPWWXvwNzK', 'admin'),
(5, 'Hellen', 'Kinor', '431', '2345678', 'hellen@gmail.com', '$2y$10$k7J7TpFkTAa7s3k75sehaOlp84pphNkZrEVosf0hejtzAW7ck7kPy', 'user'),
(6, 'Mary', 'Gachuki', '432', '6543265', 'Mary@gmail.com', '$2y$10$thABr3cRXt8xgHEENezm3O4dpZpoVme/5Uc3lNTajng56X5qJft06', ''),
(7, 'Maggie', 'Koder', '432', '5678456473', 'maggie@gmail.com', '$2y$10$w1L8JzkSn0faNEzOj3qxpegFbbx9/8x7ZhmNKNuGZTil/PaVOFONG', ''),
(8, 'Kredna', 'Gasm', '432', '6543245678', 'abc@gmail.com', '$2y$10$wERqICZ9P2PwDcjVU1K9UeJHVYxoxqfhTKsMRDiUW4Xq2CXiIpjNG', ''),
(9, 'Ken', 'Bor', '34', '6543256765', 'ken@gmail.com', '$2y$10$Qne/iG9PKESjzxiJh1AJk.Ona3iFxIdX0iNdu8X1eU/EBNUH9niG2', ''),
(10, 'FAn', 'ben', '34', '098765', 'ben@gmail.com', '$2y$10$NBDL8L2rkCpViSm/jl/NVOW64B570SoQyO/JIbg3onxREGHO6KI.m', ''),
(11, 'Widen', 'Ratemo', '10323', '079876545', 'widen@gmail.com', '$2y$10$3bwVCHxRCC5c3XBP0XOw/.pX8ie3FFmAanhFYhHtuWjfqcIDiZAiW', ''),
(12, 'Vincent', 'Moracha', '408', '079876543', 'vin@gmail.com', '$2y$10$P8Jed0Vwk7gBxnnGqXnPdu1Z/Z/DkKTSiMRJiw.mowvIQ5Qail8G2', ''),
(13, 'Emily', 'Juma', '435', '0707567', 'emily@gmail.com', '$2y$10$psmaFVSVvOxaXed5Xx0UR.QwB0TLrZrICqybowlA3325pG3/QRAa.', ''),
(14, 'Grace ', 'Kems', '324', '0756786', 'grace@gmail.com', '$2y$10$nV4gnfvU1IPHllHP/P7DoOsvkCvGG6nUVBoKexnZxEcvnTrSTDOky', ''),
(15, 'Widen', 'widen', '10323', '2332323', 'widen123@gmail.com', '$2y$10$nOkyH/epPctVjmPb4XC/qecM0NoIdfM1Hwgrg/3fC1jScRYCtWccu', 'user'),
(16, 'Grace', 'Kimoi', '344', '07456654', 'kimoi@gmail.com', '$2y$10$jesnmLXVaR4O07JFVSKUhOPY8kMPEX8cJ96SjL6nkrRVC.3cy4FKy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders_tble`
--

CREATE TABLE `orders_tble` (
  `id_order` int(11) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` double NOT NULL,
  `item_qty` int(11) NOT NULL,
  `totals` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_tble`
--

INSERT INTO `orders_tble` (`id_order`, `customer_mail`, `item_id`, `item_name`, `item_price`, `item_qty`, `totals`) VALUES
(1, '', 0, '0', 0, 0, 0),
(2, '', 0, '0', 0, 0, 0),
(3, '', 0, '0', 0, 0, 0),
(4, '', 0, '0', 0, 0, 0),
(5, '', 0, '0', 0, 0, 0),
(20, '', 0, '0', 0, 0, 0),
(21, 'Misjdj@hj', 2, '0', 300, 1, 600),
(22, 'Misjdj@hj', 2, '0', 300, 1, 600),
(23, 'Misjdj@hj', 2, 'babana', 300, 1, 600),
(24, 'Misjdj@hj', 2, 'babana', 300, 3, 600),
(25, '', 0, '', 0, 0, 0),
(26, '', 0, '', 0, 0, 0),
(27, '', 0, '', 0, 0, 0),
(28, '', 0, '', 0, 0, 0),
(29, '', 0, '', 0, 0, 0),
(30, '', 0, '', 0, 0, 0),
(31, '', 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) NOT NULL,
  `oranges` int(20) NOT NULL,
  `onions` varchar(20) NOT NULL,
  `spinach` varchar(20) NOT NULL,
  `tomatoes` varchar(20) NOT NULL,
  `avocado` varchar(20) NOT NULL,
  `potatoes` varchar(20) NOT NULL,
  `mangoes` varchar(20) NOT NULL,
  `banana` varchar(20) NOT NULL,
  `pineapples` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `oranges`, `onions`, `spinach`, `tomatoes`, `avocado`, `potatoes`, `mangoes`, `banana`, `pineapples`) VALUES
(1, 23, '76', '79', '78', '65', '46', '40', '100', '80');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `prod_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`id`, `prod_name`, `price`, `prod_image`) VALUES
(1, 'Mango', 20, 'mangoripe.jpg'),
(2, 'Onions', 50, 'onion1.jpg'),
(5, 'Banana', 60, 'banana.jpg'),
(6, 'Pineapple', 100, 'pineaple.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_tble`
--
ALTER TABLE `orders_tble`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders_tble`
--
ALTER TABLE `orders_tble`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
