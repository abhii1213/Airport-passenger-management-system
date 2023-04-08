-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 07:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '12345', 'abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(100) NOT NULL,
  `flightid` varchar(255) NOT NULL,
  `flightname` varchar(255) NOT NULL,
  `departure` varchar(255) NOT NULL,
  `dept_time` time NOT NULL,
  `arrival` varchar(255) NOT NULL,
  `arrival_time` time NOT NULL,
  `date` date NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flightid`, `flightname`, `departure`, `dept_time`, `arrival`, `arrival_time`, `date`, `price`) VALUES
(23, 'A380', 'Go Air', 'Kolkata', '10:45:00', 'Hyderabad', '13:05:00', '2023-01-15', '8722'),
(25, 'a380', 'vistara', 'Kolkata', '14:55:00', 'patna', '16:50:00', '2022-01-15', '5500'),
(26, 'A380', 'AIR ASIA', 'Kolkata', '01:52:00', 'patna', '03:52:00', '2022-01-20', '6000'),
(27, 'A320', 'SPICE JET', 'BANGALORE', '14:55:00', 'PATNA', '04:30:00', '2022-01-15', '9000'),
(28, 'A320', 'GO AIR', 'NEW DELHI', '13:20:00', 'MUMBAI', '15:55:00', '2022-01-15', '10500'),
(29, 'aa50', 'QATAR AIRWAYS', 'QATAR', '12:44:00', 'DUBAI', '16:05:00', '2022-01-20', '25400'),
(30, 'b380', 'vistara', 'bangalore', '05:56:00', 'mumbai', '08:55:00', '2022-01-25', '7000'),
(31, 'A310', 'vistara', 'BANGALORE', '01:05:00', 'MUMBAI', '03:15:00', '2022-01-25', '7820'),
(32, 'A380', 'indigo', 'BANGALORE', '05:15:00', 'PATNA', '08:20:00', '2022-01-26', '11000'),
(33, 'b380', 'vistara', 'BANGALORE', '14:22:00', 'PATNA', '17:05:00', '2022-01-20', '8000'),
(34, 'A320', 'SPICE JET', 'BANGALORE', '08:10:00', 'PATNA', '11:20:00', '2022-01-18', '9500'),
(35, 'A320', 'go air', 'PATNA', '16:40:00', 'BANGALORE', '20:05:00', '2022-01-15', '6500'),
(37, 'b380', 'lufthansa', 'BANGALORE', '05:30:00', 'delhi', '06:30:00', '2022-02-12', '9000'),
(38, 't366', 'indigo', 'BANGALORE', '05:55:00', 'PATNA', '08:30:00', '2022-01-02', '5000'),
(39, 'A380', 'go air', 'Kolkata', '03:56:00', 'HYDERABAD', '05:55:00', '2022-02-22', '10001');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `sr` int(100) NOT NULL,
  `t_from` varchar(30) NOT NULL,
  `t_to` varchar(30) NOT NULL,
  `traveller_name` varchar(50) NOT NULL,
  `myemail` varchar(30) NOT NULL,
  `mob_number` bigint(12) NOT NULL,
  `age` int(2) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`sr`, `t_from`, `t_to`, `traveller_name`, `myemail`, `mob_number`, `age`, `dob`, `city`, `state`, `country`, `aadhar`, `pan`) VALUES
(1, 'BANGALORE', 'Patna', 'Abhishek', 'kabhi12132002@gmail.com', 9523179244, 20, '2002-03-12', 'Buxar', 'BIHAR', 'India', '880599068596', 'JMPK123566'),
(2, 'NEW DELHI', 'MUMBAI', 'Chacha', 'chacha123@gmail.com', 958751236, 21, '1999-01-01', 'Patna', 'Bihar', 'India', '885566991234', 'JPCK88965'),
(3, 'Kolkata', 'Hyderabad', 'Prasoon', 'prasoon@gmail.com', 8899652589, 22, '2000-01-01', 'JABALPUR', 'MP', 'INDIA', '888999652145', 'JMPIO78999'),
(4, 'BANGALORE', 'Patna', 'Prasoon T', 'prasoon@gmail.com', 8899652589, 22, '2000-01-01', 'JABALPUR', 'MP', 'INDIA', '888999652145', 'JMPIO78999'),
(5, 'BANGALORE', 'Patna', 'Prince', 'kabhi12132002@gmail.com', 7896541236, 15, '2006-12-03', 'Buxar', 'BIHAR', 'India', '887523654126', 'JMPIO78999'),
(6, 'Kolkata', 'Patna', 'Imtiyaz', 'imtiyaz@gmail', 8896521456, 20, '2000-01-01', 'Blr', 'Karnataka', 'India', '888999652145', 'JMPK1235'),
(7, 'Kolkata', 'Hyderabad', 'Albert', 'albert@gmail.com', 9875632165, 55, '1990-06-05', 'Bengaluru', 'Karnataka', 'india', '887523654126', 'JPCK88965'),
(9, 'Qatar', 'Dubai', 'Shyam', 'shyam@gmail.com', 9874532145, 25, '2000-06-25', 'Patna', 'Bihar', 'India', '98746321456', 'JMPK987456'),
(10, 'BANGALORE', 'Patna', 'akash kumar', 'imakash2209@gmail.com', 7726806234, 21, '2002-09-22', 'madhepura', 'BIHAR', 'India', '888999652145', 'JMPIO78999');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `sr` int(100) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `card_no` bigint(12) NOT NULL,
  `name_on_card` varchar(20) NOT NULL,
  `expiry` date NOT NULL,
  `cvc` int(3) NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`sr`, `amount`, `card_no`, `name_on_card`, `expiry`, `cvc`, `pin`) VALUES
(1, 9000, 111122223333, 'Abhishek', '2024-02-02', 111, 1234),
(2, 10500, 741258963214, 'Chacha', '2025-02-02', 569, 5698),
(3, 10001, 569821453982, 'Prasoon', '2023-01-01', 567, 5678),
(4, 9000, 569821453982, 'Prasoon', '2023-01-01', 567, 5678),
(5, 9000, 888852364129, 'Prince', '2026-05-05', 789, 9652),
(6, 5500, 563214789654, 'Imtiyaz', '2026-05-05', 696, 6963),
(7, 8722, 654189632168, 'Albert', '2026-06-05', 569, 9527),
(9, 25400, 988865412589, 'Shyam', '2025-06-20', 258, 9874),
(10, 9000, 76666654333, 'akash kumar', '2023-01-19', 333, 3456);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sr` int(100) NOT NULL,
  `staff_id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `salary` bigint(12) NOT NULL,
  `aadhar` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sr`, `staff_id`, `name`, `phone`, `email`, `company`, `designation`, `salary`, `aadhar`) VALUES
(1, 'F01', 'Abhishek Kumar', 9142497834, 'kabhi12132002@gmail.com', 'Air Asia', 'CEO', 250000, 880599068596),
(4, 'F02', 'JOHN', 1234567899, 'john@gmail.com', 'Air Asia', 'Pilot', 20000, 880599068596),
(5, 'F03', 'Albert', 9563241269, 'albert@gmail.com', 'Spice Jet', 'Co-Pilot', 50000, 888999652145),
(6, 'F04', 'Shyam', 9142463258, 'shyam@gmail.com', 'Air Asia', 'Engineer', 60000, 887523654126);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'abhi123', '12345', 'abhishek'),
(2, 'abhishek123', '12345', 'abhishek'),
(3, 'akash123', '1234', 'Akash Kumar'),
(4, 'prasoon123', '12345', 'Prasoon Tiwari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
