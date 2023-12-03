-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 12:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood-donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor_users`
--

CREATE TABLE `blood_donor_users` (
  `donor_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donor_users`
--

INSERT INTO `blood_donor_users` (`donor_id`, `username`, `full_name`, `gender`, `blood_type`, `address`, `phone_number`, `birthdate`, `email`, `password`, `status`, `register_date`) VALUES
(20, 'user10', 'Olivia Taylor', 'Female', 'A+', 'Address 10', '2223334444', '1984-12-08', 'user10@example.com', 'password10', 'Active', '2023-12-03 08:12:10'),
(1, 'user11', 'Chris Evans', 'Male', 'O+', 'Address 11', '5554443333', '1997-06-28', 'user11@example.com', 'password11', 'Active', '2023-12-03 07:56:00'),
(2, 'user12', 'Mia Johnson', 'Female', 'B+', 'Address 12', '1112223333', '1986-10-15', 'user12@example.com', 'password12', 'Active', '2023-12-03 07:56:00'),
(3, 'user13', 'Alex Turner', 'Male', 'A-', 'Address 13', '9998887777', '1994-03-20', 'user13@example.com', 'password13', 'Active', '2023-12-03 07:56:00'),
(4, 'user14', 'Emma Stone', 'Female', 'AB+', 'Address 14', '7776665555', '1983-07-30', 'user14@example.com', 'password14', 'Active', '2023-12-03 07:56:00'),
(5, 'user15', 'Matthew Harris', 'Male', 'B-', 'Address 15', '3332221111', '1999-01-10', 'user15@example.com', 'password15', 'Active', '2023-12-03 07:56:00'),
(6, 'user16', 'Sophia Walker', 'Female', 'O-', 'Address 16', '8889990000', '1988-05-25', 'user16@example.com', 'password16', 'Active', '2023-12-03 07:56:00'),
(7, 'user17', 'Ryan Martinez', 'Male', 'A+', 'Address 17', '2223334444', '1992-02-18', 'user17@example.com', 'password17', 'Active', '2023-12-03 07:56:00'),
(8, 'user18', 'Isabella Turner', 'Female', 'AB-', 'Address 18', '4445556666', '1989-08-05', 'user18@example.com', 'password18', 'Active', '2023-12-03 07:56:01'),
(9, 'user19', 'Nathan Adams', 'Male', 'B+', 'Address 19', '9998887777', '1995-04-12', 'user19@example.com', 'password19', 'Active', '2023-12-03 07:56:01'),
(11, 'user1', 'John Doe', 'Male', 'A+', 'Address 1', '1234567890', '1990-01-01', 'user1@example.com', 'password1', 'Active', '2023-12-03 08:12:10'),
(10, 'user20', 'Lily Wilson', 'Female', 'A+', 'Address 20', '5554443333', '1987-12-08', 'user20@example.com', 'password20', 'Active', '2023-12-03 07:56:01'),
(12, 'user2', 'Jane Doe', 'Female', 'B-', 'Address 2', '9876543210', '1985-03-15', 'user2@example.com', 'password2', 'Active', '2023-12-03 08:12:10'),
(13, 'user3', 'Bob Smith', 'Male', 'O+', 'Address 3', '5551112233', '1995-07-20', 'user3@example.com', 'password3', 'Active', '2023-12-03 08:12:10'),
(14, 'user4', 'Alice Johnson', 'Female', 'AB+', 'Address 4', '9998887777', '1982-11-30', 'user4@example.com', 'password4', 'Active', '2023-12-03 08:12:10'),
(15, 'user5', 'Michael Brown', 'Male', 'B+', 'Address 5', '3332221111', '1998-05-10', 'user5@example.com', 'password5', 'Active', '2023-12-03 08:12:10'),
(16, 'user6', 'Sara Miller', 'Female', 'O-', 'Address 6', '7776665555', '1989-09-25', 'user6@example.com', 'password6', 'Active', '2023-12-03 08:12:10'),
(17, 'user7', 'Tom Wilson', 'Male', 'A-', 'Address 7', '1112223333', '1993-02-18', 'user7@example.com', 'password7', 'Active', '2023-12-03 08:12:10'),
(18, 'user8', 'Emily Davis', 'Female', 'AB-', 'Address 8', '4445556666', '1987-08-05', 'user8@example.com', 'password8', 'Active', '2023-12-03 08:12:10'),
(19, 'user9', 'Daniel White', 'Male', 'B+', 'Address 9', '8889990000', '1996-04-12', 'user9@example.com', 'password9', 'Active', '2023-12-03 08:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `request_id` int(11) NOT NULL,
  `requester_name` varchar(100) NOT NULL,
  `requester_contact` varchar(15) DEFAULT NULL,
  `blood_type` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `units_requested` int(11) NOT NULL,
  `request_status` enum('Pending','Approved','Rejected') NOT NULL DEFAULT 'Pending',
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `staff_email` varchar(150) DEFAULT NULL,
  `donor_email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`request_id`, `requester_name`, `requester_contact`, `blood_type`, `units_requested`, `request_status`, `request_date`, `staff_email`, `donor_email`) VALUES
(3, 'Requester Name', '9876543210', 'A+', 5, 'Pending', '2023-12-03 08:14:03', 'staff@example.com', 'user1@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `hospital_address` text DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `hospital_name`, `hospital_address`, `contact_number`, `email`, `registration_date`) VALUES
(1, 'Sample Hospital', 'Hospital Address', '1234567890', 'hospital@example.com', '2023-12-03 08:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `staff_members`
--

CREATE TABLE `staff_members` (
  `staff_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `job_title` varchar(150) NOT NULL,
  `department` varchar(150) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `hospital_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_members`
--

INSERT INTO `staff_members` (`staff_id`, `username`, `full_name`, `gender`, `job_title`, `department`, `address`, `phone_number`, `email`, `password`, `status`, `register_date`, `hospital_id`) VALUES
(2, 'staff_user', 'John Doe', 'Male', 'Nurse', 'Medical', 'Staff Address', '1112223333', 'staff@example.com', 'staff_password', 'Active', '2023-12-03 08:05:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `action_type` enum('Login','Logout') NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donor_users`
--
ALTER TABLE `blood_donor_users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `donor_id` (`donor_id`);

--
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `staff_email` (`staff_email`),
  ADD KEY `donor_email` (`donor_email`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donor_users`
--
ALTER TABLE `blood_donor_users`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blood_requests`
--
ALTER TABLE `blood_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_members`
--
ALTER TABLE `staff_members`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD CONSTRAINT `blood_requests_ibfk_1` FOREIGN KEY (`staff_email`) REFERENCES `staff_members` (`email`) ON DELETE SET NULL,
  ADD CONSTRAINT `blood_requests_ibfk_2` FOREIGN KEY (`donor_email`) REFERENCES `blood_donor_users` (`email`) ON DELETE SET NULL;

--
-- Constraints for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD CONSTRAINT `staff_members_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`hospital_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
