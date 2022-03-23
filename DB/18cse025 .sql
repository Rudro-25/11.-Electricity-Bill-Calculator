-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 02:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18cse025`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `upazila` varchar(100) NOT NULL,
  `district` varchar(255) NOT NULL,
  `area` int(11) NOT NULL,
  `meterId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AppliedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `email`, `phone`, `division`, `upazila`, `district`, `area`, `meterId`, `UserId`, `AppliedAt`) VALUES
(4, 'Rudro Debnath', 'rudro.cse5.bu@gmail.com', '01741960830', 'Khulna', 'Dumuria', 'Khulna', 0, 3, 2, '2022-01-04 08:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `unit` double NOT NULL,
  `month` varchar(28) NOT NULL,
  `bill` double NOT NULL,
  `status` varchar(456) NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `userid`, `unit`, `month`, `bill`, `status`) VALUES
(1, 3, 5657776, 'January', 43563440.2, 'unpaid'),
(2, 3, 5657776, 'January', 43563440.2, 'unpaid'),
(3, 3, 4565756867, 'October', 23970223234.25, 'unpaid'),
(4, 3, 565676, 'April', 4354270.2, 'unpaid'),
(5, 3, 325, 'April', 1388.75, 'unpaid'),
(6, 8, 20, 'March', 123.5, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `txt` text NOT NULL,
  `CreateBy` int(11) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `txt`, `CreateBy`, `CreatedAt`, `reply`) VALUES
(1, 'I can not access my data', 5, '2022-01-04 15:20:57', 'Try no again.. I give access..'),
(7, 'I am Failing to Upload my Picture.', 3, '2022-01-04 15:56:29', 'Thats Not your job.');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `meter_no` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `bill` double NOT NULL,
  `ldos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `name`, `meter_no`, `unit`, `bill`, `ldos`) VALUES
(1, 'Rudro Debnath', '234', 50, 0, '23 january');

-- --------------------------------------------------------

--
-- Table structure for table `meter`
--

CREATE TABLE `meter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meter`
--

INSERT INTO `meter` (`id`, `name`) VALUES
(1, 'Four'),
(3, 'TWO'),
(7, 'G5'),
(8, 'M8');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `paymentTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `type`) VALUES
(1, 'Rudro', 'rudro.cse5.bu@gmail.com', '01741960830', 1),
(2, 'Rahat', 'rahat.cse5.bu@gmail.com', '01741960830', 2),
(3, 'Sourav', 'sourav.cse5.bu@gmail.com', '01741960830', 3),
(5, 'Sayem', 'sayem.cse5.bu@gmail.com', '01741960830', 4),
(8, 'Bhupal', 'bhupal.cse5.bu@gmail.com', '01741578467', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meterId` (`meterId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CreateBy` (`CreateBy`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meter`
--
ALTER TABLE `meter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meter`
--
ALTER TABLE `meter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`meterId`) REFERENCES `meter` (`id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`CreateBy`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill_detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
