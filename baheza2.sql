-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2023 at 11:49 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baheza2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `acc_name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `acc_name`, `type`, `amount`) VALUES
(1, 'Bank of Kigali', 'Business account', '20,000,000'),
(2, 'Umurenge Sacco', 'Saving Account', '5,000,000');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `sub_round` varchar(100) NOT NULL DEFAULT '0',
  `total_paid` int NOT NULL DEFAULT '0',
  `unpaid` int NOT NULL DEFAULT '0',
  `date_of_pay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `phone`, `sector`, `cell`, `village`, `amount`, `sub_round`, `total_paid`, `unpaid`, `date_of_pay`) VALUES
(1, 'Ibrahim Gashema', '+250789859109', 'masaka', 'gitaraga', 'kabeza', '30000', '29', 120000, 750000, '2021-04-02 02:18:05'),
(3, 'jimmy gatete', '+25078678903', 'masaka', 'gitaraga', 'kabeza', '2000', '25', 5000, 45000, '2021-07-31 15:05:06'),
(4, 'mugabe patrick', '+250788845948', 'masaka', 'kagugu', 'nyamata', '4000', '25', 0, 100000, '2021-08-03 03:35:28'),
(5, 'uwayezu Bertrand', '0788354746', 'Gikondo', 'Kanserege', 'Marembo3', '2000', '4', 5000, 3000, '2023-05-07 22:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cus_id` int NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `rec_id` int NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL,
  `remaining_amount` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL DEFAULT 'Unpaid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

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
(16, 1, 'Ibrahim Gashema', 1, '+250789859109', 'masaka', 'gitaraga', 'kabeza', '30000', '0', '2021-07', '2021-08-03 06:50:25', 'Paid'),
(17, 5, 'uwayezu Bertrand', 1, '0788354746', 'Gikondo', 'Kanserege', 'Marembo3', '5000', '3000', '2023-09', '2023-09-07 22:53:07', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

DROP TABLE IF EXISTS `receivers`;
CREATE TABLE IF NOT EXISTS `receivers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `fullname`, `phone`, `sector`, `cell`, `village`) VALUES
(1, 'mugabe patrick', '+250789859109', 'masaka', 'gitaraga', 'kabeza'),
(2, 'jimmy gatete', '+25078678903', 'masaka', 'kagugu', 'nyamata');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `location` varchar(250) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usertype`, `location`, `status`) VALUES
(1, 'gikondo', 'gikondo', '', '', 1),
(2, 'gikondo', '8ee8f86cfd6cffc5adca29a8fc2bea97', 'admin', 'Gikondo', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
