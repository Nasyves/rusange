-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 03, 2021 at 04:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `baheza`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `sub_round` varchar(100) NOT NULL DEFAULT '0',
  `total_paid` int(100) NOT NULL DEFAULT '0',
  `unpaid` int(11) NOT NULL DEFAULT '0',
  `date_of_pay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `phone`, `sector`, `cell`, `village`, `amount`, `sub_round`, `total_paid`, `unpaid`, `date_of_pay`) VALUES
(1, 'Ibrahim Gashema', '+250789859109', 'masaka', 'gitaraga', 'kabeza', '30000', '4', 120000, 0, '2021-04-02 02:18:05'),
(3, 'jimmy gatete', '+25078678903', 'masaka', 'gitaraga', 'kabeza', '2000', '0', 0, 0, '2021-07-31 15:05:06'),
(4, 'mugabe patrick', '+250788845948', 'masaka', 'kagugu', 'nyamata', '4000', '0', 0, 0, '2021-08-03 03:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL,
  `remaining_amount` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `cus_id`, `fullname`, `rec_id`, `phone`, `sector`, `cell`, `village`, `paid_amount`, `remaining_amount`, `month`, `Date`, `status`) VALUES
(3, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '30000', '0', '2021-08', '2021-07-31 14:56:35', 'paid'),
(4, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '30000', '0', '2021-08', '2021-07-31 14:59:05', 'paid'),
(5, 3, 'jimmy gatete', 1, '+25078678903', 'masaka', 'gitaraga', 'kabeza', '1000', '1000', '2021-12', '2021-07-31 15:05:20', 'half-paid'),
(6, 3, 'jimmy gatete', 1, '+25078678903', 'masaka', 'gitaraga', 'kabeza', '2000', '0', '2021-08', '2021-07-31 15:12:22', 'paid'),
(7, 3, 'jimmy gatete', 1, '+25078678903', 'masaka', 'gitaraga', 'kabeza', '2000', '0', '2021-08', '2021-07-31 15:49:37', 'paid'),
(8, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '0', '30000', '2021-08', '2021-07-31 15:50:58', 'half-paid'),
(13, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '10000', '50000', '2021-07', '2021-08-03 03:30:35', 'half-paid'),
(14, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '10000', '40000', '2021-11', '2021-08-03 04:26:51', 'half-paid'),
(15, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '10000', '30000', '2021-07', '2021-08-03 04:27:55', 'half-paid'),
(16, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '30000', '0', '2021-07', '2021-08-03 06:50:25', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `fullname`, `phone`, `sector`, `cell`, `village`) VALUES
(1, 'mugabe patrick', '+250789859109', 'masaka', 'gitaraga', 'kabeza'),
(2, 'jimmy gatete', '+25078678903', 'masaka', 'kagugu', 'nyamata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
