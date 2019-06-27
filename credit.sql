-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 11:15 AM
-- Server version: 8.0.16
-- PHP Version: 7.3.6

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `credit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PHONE` bigint(20) NOT NULL,
  `CURRENT CREDITS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `PHONE`, `CURRENT CREDITS`) VALUES
(1, 'HarryPotter', 'harry@email.com', 1111111111, 1000),
(2, 'HermioneGranger', 'hermione@email.com', 2222222222, 1000),
(3, 'RonWeasley', 'ron@email.com', 3333333333, 1000),
(4, 'SeverusSnape', 'snape@email.com', 4444444444, 1000),
(5, 'AlbusDumbledore', 'dumbledore@email.com', 5555555555, 1000),
(6, 'SiriusBlack', 'sirius@email.com', 6666666666, 1000),
(7, 'NevilleLongbottom', 'neville@email.com', 7777777777, 1000),
(8, 'DracoMalfoy', 'draco@email.com', 8888888888, 1000),
(9, 'TomRiddle', 'tom@email.com', 9999999999, 1000),
(10, 'RubeusHagrid', 'hagrid@email.com', 9999988888, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
