-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2021 at 08:54 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baheza`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`) VALUES
(1, 1, 'Gakokobe'),
(2, 1, 'Gatare'),
(3, 1, 'Imena'),
(4, 1, 'Ituze'),
(5, 1, 'Kabutare'),
(6, 1, 'Kimisange'),
(7, 1, 'Nyenyeri'),
(8, 1, 'Ubumenyi'),
(9, 2, 'Ibuga'),
(10, 2, 'Ihuriro'),
(11, 2, 'Murambi'),
(12, 2, 'Rutoki'),
(13, 2, 'Taba'),
(14, 2, 'Terimbere'),
(15, 2, 'Ubutare'),
(16, 2, 'Umurimo'),
(17, 3, 'Akimana'),
(18, 3, 'Amahoro'),
(19, 3, 'Byimana'),
(20, 3, 'Indatwa'),
(21, 3, 'Ingenzi'),
(22, 3, 'Kabeza'),
(23, 3, 'Karurayi'),
(24, 3, 'Mataba'),
(25, 3, 'Umucyo'),
(26, 4, 'Kamabuye'),
(27, 4, 'Karuyenzi'),
(28, 4, 'Kivu'),
(29, 4, 'Rebero'),
(30, 4, 'Twishorezo'),
(31, 4, 'Zuba'),
(32, 5, 'Amajyambere'),
(33, 5, 'Bwiza'),
(34, 5, 'Nyarurembo'),
(35, 5, 'Ubumwe'),
(36, 5, 'Umutekano'),
(37, 5, 'Urumuri'),
(38, 5, 'Uwateke'),
(39, 6, 'Amarembo I'),
(40, 6, 'Amarembo II'),
(41, 6, 'Gihogere'),
(42, 6, 'Kagara'),
(43, 6, 'Kinunga'),
(44, 6, 'Nyabisindu'),
(45, 6, 'Rugarama'),
(46, 7, 'Gishushu'),
(47, 7, 'Juru'),
(48, 7, 'Kamahwa'),
(49, 7, 'Kangondo I'),
(50, 7, 'Kangondo II'),
(51, 7, 'Kibiraro I'),
(52, 7, 'Kibiraro II'),
(53, 8, 'Agashyitsi'),
(54, 8, 'Amajyambere'),
(55, 8, 'Izuba'),
(56, 8, 'Gisimenti'),
(57, 8, 'Ubumwe'),
(58, 8, 'Ukwezi'),
(59, 8, 'Urumuri'),
(60, 9, 'Amahoro'),
(61, 9, 'Rebero'),
(62, 9, 'Ruturusu I'),
(63, 9, 'Ruturusu II'),
(64, 9, 'Ubumwe'),
(65, 10, 'Amajyambere'),
(66, 10, 'Bukinanyana'),
(67, 10, 'Cyimana'),
(68, 10, 'Gataba'),
(69, 10, 'Itetero'),
(70, 10, 'Kabare'),
(71, 10, 'Kamuhire'),
(72, 10, 'Karukamba'),
(73, 10, 'Nyagacyamo'),
(74, 10, 'Rwinzovu'),
(75, 10, 'Urugwiro'),
(76, 10, 'Uruhongere'),
(77, 11, 'Agasaro'),
(78, 11, 'Gasharu'),
(79, 11, 'Inkingi'),
(80, 11, 'Kanserege'),
(81, 11, 'Kigugu'),
(82, 11, 'Ruganwa'),
(83, 11, 'Umuco'),
(84, 11, 'Urugero'),
(85, 11, 'Urwibutso'),
(86, 12, 'Amahoro'),
(87, 12, 'Bwiza'),
(88, 12, 'Ihuriro'),
(89, 12, 'Ineza'),
(90, 12, 'Inyange'),
(91, 12, 'Iriba'),
(92, 12, 'Kabagari'),
(93, 12, 'Ubumwe'),
(94, 12, 'Umutako'),
(95, 12, 'Urukundo'),
(96, 12, 'Virunga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
