-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getstaff` (IN `aid` INT)   SELECT * FROM staff WHERE sr=aid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `airport_id` int(50) NOT NULL DEFAULT 1221
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `airport_id`) VALUES
(1, 'admin', '348dc21a8acf9658140e0536eb14783d', 'abhishek', 1221),
(4, 'akash', '01cfcd4f6b8770febfb40cb9067158', 'Akash Kumar', 1221);

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
(39, 'A380', 'go air', 'Kolkata', '03:56:00', 'HYDERABAD', '05:55:00', '2022-02-22', '10001'),
(40, 'A380', 'go air', 'BANGALORE', '05:55:00', 'Chennai', '08:55:00', '2023-02-05', '9800'),
(41, 'A320', 'vistara', 'Kolkata', '12:00:00', 'PATNA', '02:30:00', '2023-02-05', '6000'),
(42, 'A320', 'GoNCome', 'new york', '12:30:00', 'kolkata', '02:20:00', '2023-02-05', '5000'),
(43, 'A380', 'vistara', 'Delhi', '05:55:00', 'Mumbai', '08:00:00', '2023-02-10', '9000'),
(44, 'aa50', 'indigo', 'Patna', '08:50:00', 'Chennai', '10:00:00', '2023-02-05', '9500');

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
(10, 'BANGALORE', 'Patna', 'akash kumar', 'imakash2209@gmail.com', 7726806234, 21, '2002-09-22', 'madhepura', 'BIHAR', 'India', '888999652145', 'JMPIO78999'),
(11, 'BANGALORE', 'Patna', 'Anmol', 'anmol@gmail.com', 9874563214, 22, '2000-02-02', 'Blah', 'BIHAR', 'India', '987452145698', 'JMPY987456'),
(12, 'BANGALORE', 'Patna', 'Anubhav', 'anubhav@gmail.com', 9874563258, 22, '2001-06-05', 'Patna', 'BIHAR', 'India', '98745632589', 'JMPR874569'),
(13, 'Kolkata', 'Patna', 'Gaurav', 'gaurav@gmail.com', 9874563258, 22, '2005-05-02', 'Navada', 'BIHAR', 'India', '885698745236', 'JMPU9856321'),
(14, 'Kolkata', 'Patna', 'Saurav K', 'saurav@gmail.com', 9874563258, 25, '2005-05-08', 'Navada', 'BIHAR', 'India', '9856325874', 'JMPU987455'),
(15, 'Kolkata', 'Patna', 'Anurag', 'anurag@gmail.com', 9874589658, 28, '2004-05-06', 'Patna', 'BIHAR', 'India', '987456325888', 'JMPU587456'),
(16, 'Qatar', 'Dubai', 'Blah', 'bhal@gmail.com', 9874589652, 22, '2000-06-05', 'Delhi', 'Delhi', 'India', '888856325478', 'JMPT987456'),
(17, 'Kolkata', 'Hyderabad', 'Anmol', 'anmol@gmail.com', 9856987452, 22, '2001-05-02', 'Patna', 'BIHAR', 'India', '896585236587', 'JKMP'),
(18, 'Kolkata', 'Patna', 'Shyam', 'shyam@gmail.com', 9874563258, 22, '2004-09-05', 'Buxar', 'BIHAR', 'India', '9874563258', 'JMPK987452'),
(19, 'Kolkata', 'Patna', 'Alfred', 'alfred@gmail.com', 9874565897, 22, '2004-09-08', 'Buxar', 'BIHAR', 'India', '987458888522', 'JMPK987452'),
(20, 'Kolkata', 'Patna', 'Prince', 'pk123@gmail.com', 9999999999, 22, '2006-12-03', 'Buxar', 'BIHAR', 'India', '987452147852', 'JMPK874569'),
(21, 'Kolkata', 'Patna', 'Prince S', 'pks123@gmail.com', 9874521458, 22, '2006-12-08', 'Buxar', 'BIHAR', 'India', '98555554752', 'JMPK985214'),
(22, 'BANGALORE', 'Delhi', 'pki', 'pki@gmail.com', 9874563214, 22, '2005-05-12', 'Buxar', 'BIHAR', 'India', '99985214785', 'JMPK99856'),
(29, 'Delhi', 'Mumbai', 'Aman S', 'amans@gmail.com', 9752147852, 22, '2000-09-08', 'patna', 'Bihar', 'India', '987452221455', 'JMPK963214'),
(30, 'Delhi', 'Mumbai', 'Aman Tiwari', 'amant@gmail.com', 9874522589, 22, '2002-06-08', 'Delhi', 'Delhi', 'India', '8521458796', 'JMPK963289'),
(31, 'Qatar', 'Dubai', 'arfan', 'arfan@gmail.com', 9874563258, 22, '2002-08-05', 'Drlhi', 'Delhi', 'India', '987455585214', 'JMPK963258'),
(32, 'Patna', 'Chennai', 'Abhinav', 'abhinav@gmail.com', 9852145698, 22, '2004-02-02', 'Delhi', 'Delhi', 'India', '874521456985', 'JMPK214587');

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
(10, 9000, 76666654333, 'akash kumar', '2023-01-19', 333, 3456),
(11, 8000, 987458963258, 'Anmol', '2026-02-02', 258, 2365),
(12, 5000, 987452145698, 'Anubhav', '2027-06-05', 258, 2589),
(13, 6000, 8745214569, 'Gaurav', '2025-04-05', 589, 2589),
(14, 6000, 8745214569, 'Saurav', '2027-04-05', 589, 9856),
(15, 6000, 854785236999, 'Anurag', '2025-06-05', 589, 6589),
(16, 25400, 58962589632, 'Bhal', '2025-06-05', 258, 2589),
(17, 8722, 852369874555, 'Anmol', '2025-05-02', 258, 5698),
(18, 6000, 987455632589, 'shyam', '2026-09-05', 258, 9855),
(19, 6000, 555587452145, 'Alfred', '2026-09-05', 987, 9625),
(20, 6000, 987456322222, 'Prince', '2026-02-02', 258, 2569),
(21, 6000, 525896321478, 'Prince S', '2026-02-02', 589, 8523),
(22, 9000, 666658965478, 'pki', '2006-05-02', 258, 2556),
(29, 9000, 852366654788, 'Aman S', '2027-06-05', 896, 9852),
(30, 9000, 852145569874, 'Aman T', '2028-06-05', 877, 2566),
(31, 25400, 888855556666, 'Arfan K', '2026-06-05', 233, 6669),
(32, 9500, 985214785214, 'Abhinav', '2026-05-02', 852, 9632);

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
  `aadhar` bigint(12) NOT NULL,
  `air_id` int(50) NOT NULL DEFAULT 1221
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sr`, `staff_id`, `name`, `phone`, `email`, `company`, `designation`, `salary`, `aadhar`, `air_id`) VALUES
(1, 'F01', 'Abhishek Kumar', 9142497834, 'kabhi12132002@gmail.com', 'Air Asia', 'CEO', 250000, 880599068596, 1221),
(4, 'F02', 'JOHN Cena', 1234567899, 'john@gmail.com', 'Air Asia', 'Pilot', 20000, 880599068596, 1221),
(5, 'F03', 'Albert Einstein', 9563241269, 'albert@gmail.com', 'Spice Jet', 'Co-Pilot', 50000, 888999652145, 1221),
(6, 'F04', 'Shyam Singh', 9142463258, 'shyam@gmail.com', 'Air Asia', 'Engineer', 60000, 887523654126, 1221),
(8, 'F07', 'Gaurav', 9874569852, 'gaurav@gmail.com', 'Vistara', 'Supervisor', 60000, 987456325896, 1221),
(9, 'F06', 'Imtiyaz Alam', 8745698523, 'imtiyaz@gmail.com', 'Vistara', 'Staff', 50000, 9874563258, 1221),
(11, 'F09', 'Asif', 952178963, 'asif@gmail.com', 'Indigo', 'Staff', 95000, 985214785236, 1221);

--
-- Triggers `staff`
--
DELIMITER $$
CREATE TRIGGER `staff_del` BEFORE DELETE ON `staff` FOR EACH ROW INSERT INTO staff_backup SET
sr=OLD.sr,staff_id=OLD.staff_id,name=OLD.name,phone=OLD.phone,email=OLD.email,company=OLD.company,designation=OLD.designation,salary=OLD.salary,aadhar=OLD.aadhar
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `staff_update` BEFORE UPDATE ON `staff` FOR EACH ROW INSERT INTO staff_backup SET
sr=OLD.sr,staff_id=OLD.staff_id,name=OLD.name,phone=OLD.phone,email=OLD.email,company=OLD.company,designation=OLD.designation,salary=OLD.salary,aadhar=OLD.aadhar
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_backup`
--

CREATE TABLE `staff_backup` (
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
-- Dumping data for table `staff_backup`
--

INSERT INTO `staff_backup` (`sr`, `staff_id`, `name`, `phone`, `email`, `company`, `designation`, `salary`, `aadhar`) VALUES
(4, 'F02', 'JOHN', 1234567899, 'john@gmail.com', 'Air Asia', 'Pilot', 20000, 880599068596),
(5, 'F03', 'Albert', 0, 'albert@gmail.com', 'Spice Jet', 'Co-Pilot', 50000, 888999652145),
(6, 'F04', 'Shyam', 9142463258, 'shyam@gmail.com', 'Air Asia', 'Engineer', 60000, 887523654126),
(7, 'F05', 'Saurav', 9874563258, 'saurav@gmail.com', 'Vistara', 'Designer', 50000, 888874521456),
(9, 'F06', 'Imtiyaz', 8745698523, 'imtiyaz@gmail.com', 'Vistara', 'Staff', 50000, 9874563258),
(10, 'F08', 'Anubhav', 9852365478, 'anubhav@gmail.com', 'Vistara', 'Engineer', 40000, 885236987412);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `sr` int(11) NOT NULL,
  `traveller_name` varchar(50) NOT NULL,
  `t_date` date NOT NULL,
  `mob_number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`sr`, `traveller_name`, `t_date`, `mob_number`) VALUES
(17, 'Anmol', '2022-01-15', 9856987452),
(18, 'shyam', '2023-02-05', 9874563258),
(19, 'Alfred', '2023-02-05', 9874565897),
(20, 'Prince', '2022-01-20', 9999999999),
(21, 'Prince S', '2022-01-20', 9874521458),
(22, 'pki', '2022-01-12', 9874563214),
(29, 'Aman S', '2023-02-10', 9752147852),
(30, 'Aman Tiwari', '2023-02-10', 9874522589),
(31, 'arfan', '2022-01-20', 9874563258),
(32, 'Abhinav', '2023-02-05', 9852145698);

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
(6, 'aks', 'e10adc3949ba59abbe56e057f20f883e', 'Abhi'),
(7, 'abhishek', '827ccb0eea8a706c4c34a16891f84e7b', 'Abhishek Kumar'),
(8, 'akash', '01cfcd4f6b8770febfb40cb906715822', 'Akash Kumar'),
(10, 'saurav', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Saurav'),
(11, 'sameer', 'dcddb75469b4b4875094e14561e573d8', 'sameer singh'),
(12, 'ak123', '348dc21a8acf9658140e0536eb14783d', 'Abhishek Kumar');

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
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff_backup`
--
ALTER TABLE `staff_backup`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff_backup`
--
ALTER TABLE `staff_backup`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`sr`) REFERENCES `passenger` (`sr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`sr`) REFERENCES `passenger` (`sr`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
