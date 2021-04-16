-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 08:35 AM
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
(4, 'Mishael', 'Ratemo', '1316', '8888888', 'mishael@gmail.com', '$2y$10$li8aMc3iBhxT.fh1uFxZm.Oz36C2gSyPt87Q1y1XL3JiPWWXvwNzK', 'admin'),
(5, 'Hellen', 'Kinor', '431', '2345678', 'hellen@gmail.com', '$2y$10$k7J7TpFkTAa7s3k75sehaOlp84pphNkZrEVosf0hejtzAW7ck7kPy', 'user'),
(6, 'Mary', 'Gachuki', '432', '6543265', 'Mary@gmail.com', '$2y$10$thABr3cRXt8xgHEENezm3O4dpZpoVme/5Uc3lNTajng56X5qJft06', ''),
(7, 'Maggie', 'Koder', '432', '5678456473', 'maggie@gmail.com', '$2y$10$w1L8JzkSn0faNEzOj3qxpegFbbx9/8x7ZhmNKNuGZTil/PaVOFONG', ''),
(8, 'Kredna', 'Gasm', '432', '6543245678', 'abc@gmail.com', '$2y$10$wERqICZ9P2PwDcjVU1K9UeJHVYxoxqfhTKsMRDiUW4Xq2CXiIpjNG', ''),
(9, 'Ken', 'Bor', '34', '6543256765', 'ken@gmail.com', '$2y$10$Qne/iG9PKESjzxiJh1AJk.Ona3iFxIdX0iNdu8X1eU/EBNUH9niG2', ''),
(25, 'jane', 'kimani', '34', '098766', 'jane@gmail.com', '$2y$10$l0Iql/swIK6eZfX1BqldIOBUu6CCtbZ/MvjcN17xEhyZBrlcekpsW', ''),
(26, 'kim', 'ken', '354 ', '0734564', 'kim@gmail.com', '$2y$10$zptKxTex40LwpBhiLUbZDuu574wblV7qd0e1XRatDruQ.BOP8w2mu', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `feed_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `time_posted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`feed_id`, `fname`, `sname`, `email`, `mobile`, `feedback`, `time_posted`) VALUES
(1, 'James', 'Doe', 'abc@gmail.com', '070438927', 'test test', '2021-04-15 13:59:45'),
(2, 'Mishael', 'ratemo', 'ratemo@gmail.com', '078888888', 'I Like the foods you are offering... Keep up', '2021-04-15 13:59:45'),
(3, 'test', 'test', 'test@test.test', '09874345', 'thihdi tu', '2021-04-15 14:01:00'),
(4, 'emil', 'musa', 'emil@gmail.com', '0723456789', 'mmdijidhf   djfhhd', '2021-04-16 07:31:34'),
(5, 'Ravi', 'ten', 'ten@gmail.com', '0734567', 'nice foods to offers', '2021-04-16 08:34:37'),
(6, 'kim', 'ken', 'kim@gmail.com', '075345', 'Thisis a nice website', '2021-04-16 09:25:49');

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
(25, '', 0, '', 0, 0, 0);

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
(6, 'Pineapple', 100, 'pineaple.jpg'),
(7, 'Spinach', 30, 'spinach.jpg'),
(8, 'Oranges', 25, 'orange.jpg'),
(9, 'Tomato', 40, 'tomatoes.jpg'),
(10, 'Potato', 70, 'potato.jpg'),
(11, 'Passion Fruit', 100, 'passion.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`feed_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
