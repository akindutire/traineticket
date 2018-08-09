-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 08:19 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `hash` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `pix` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `hash`, `address`, `pix`) VALUES
(1, 'Alade Olusola', 'ea9ba2401ca99983fe4af8ca8979e848', '45 kuje', '1413085260578147_1386193528293071_542469367_n.jpg'),
(2, 'Mr Adekunle Ijomu', 'aaff20f66b7236d92b7267b97916e377', '45 kuje', '14131932501497506_820629901301639_6850804147439356974_n.jpg'),
(3, 'akii', 'bf8b23480b79dcce384be1ae58828d7a', '7878 879y8', '1443176549business-sales-increase-thin-line-icon-vector-4435');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'Kaduna'),
(2, 'Ondo'),
(3, 'Lagos'),
(4, 'Calabar'),
(5, 'Jos'),
(6, 'Rivers'),
(7, 'Abuja'),
(8, 'Maidugiri');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `lkreg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `lkreg`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `nk` varchar(60) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `sto` varchar(60) NOT NULL,
  `ph` varchar(760) NOT NULL,
  `checked` varchar(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `stattime` varchar(60) NOT NULL,
  `endtime` varchar(60) NOT NULL,
  `timeleft` varchar(60) NOT NULL,
  `Fr` varchar(40) NOT NULL,
  `t` varchar(40) NOT NULL,
  `seat` varchar(40) NOT NULL,
  `PND` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `realt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `addr`, `nk`, `dob`, `sto`, `ph`, `checked`, `t_id`, `stattime`, `endtime`, `timeleft`, `Fr`, `t`, `seat`, `PND`, `amt`, `realt`) VALUES
(6, 'Mr Hilary', '54 Ukos Street', 'Akinde', '5 July 2014', 'Ondo', '1413282123uparr.jpg', '1', 4, '44520', '311640', '267120', 'Ondo', 'Lagos', 'FIRST CLASS', '35212652', 'N1000', '14 -Oct -2014, 12:22 pm'),
(7, 'Akins', '56 iloro street', 'akkk', '2015-09-01', 'Ondo Stare', '1443176462business-sales-increase-thin-line-icon-vector-4435749.jpg', '1', 0, '44460', '311220', '266760', 'Ondo', 'Lagos', 'FIRST CLASS', '24766326', 'N1000', '25 -Sep -2015, 12:21 pm');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `fr` varchar(78) NOT NULL,
  `t` varchar(88) NOT NULL,
  `returned` varchar(11) NOT NULL,
  `departuretime` varchar(60) NOT NULL,
  `capt` int(11) NOT NULL,
  `arrivaltime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `name`, `tid`, `fr`, `t`, `returned`, `departuretime`, `capt`, `arrivaltime`) VALUES
(1, 'ASPAS TRAIN', '5645445TY', 'Jos', 'Kaduna', '0', '12:25: pm', 50, '12:23: pm'),
(3, 'ASPAS TRAIN', '6645445TD', 'Ondo', 'Jos', '0', '07:09: am', 45, '08:30: pm'),
(5, 'ASPAS TRAIN', '4645445TS', 'Calabar', 'Kaduna', '0', '07:10: am', 42, '03:58: pm'),
(6, 'ASPAS TRAIN', '7845445TU', 'Maidugiri', 'Lagos', '1', '05:40: pm', 42, '12:23: pm'),
(7, 'ASPAS TRAIN', '2545445TY', 'Rivers', 'Ondo', '1', '05:40: pm', 42, '12:23: pm'),
(8, 'ASPAS TRAIN', '5645445TQ', 'Calabar', 'Lagos', '1', '05:40: pm', 42, '12:23: pm'),
(9, 'ASPAS TRAIN', '5645445TY', 'Ondo', 'Kaduna', '1', '07:45: am', 42, '12:23: pm'),
(10, 'ASPAS TRAIN', '4645445TV', 'Maidugiri', 'Lagos', '1', '05:40: pm', 42, '12:23: pm'),
(11, 'ASPAS TRAIN', '5645445TX', 'Kaduna', 'Calabar', '1', '11:36: am', 45, '11:36: am');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `fr` varchar(50) NOT NULL,
  `t` varchar(50) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `fr`, `t`, `amount`, `type`) VALUES
(1, 'Ondo', 'Lagos', 'N1000', 'FIRST CLASS'),
(2, 'Calabar', 'Kaduna', 'N3000', 'REGULAR'),
(3, 'Jos', 'Kaduna', 'N3000', 'REGULAR'),
(4, 'Maidugiri', 'Lagos', 'N2000', 'REGULAR'),
(5, 'Ondo', 'Kaduna', 'N3000', 'REGULAR'),
(6, 'Rivers', 'Ondo', 'N2000', 'REGULAR'),
(7, 'Calabar', 'Lagos', 'N2000', 'REGULAR'),
(8, 'Kaduna', 'Calabar', 'N3000', 'REGULAR'),
(9, 'Maidugiri', 'Rivers', 'N3000', 'REGULAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
