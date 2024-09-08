-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 08, 2024 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_country` varchar(100) NOT NULL,
  `emp_phone` varchar(50) NOT NULL,
  `emp_street_ad` varchar(300) NOT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`emp_id`, `emp_name`, `emp_email`, `emp_country`, `emp_phone`, `emp_street_ad`, `date_time`) VALUES
(22, 'Ali Ahmed', 'ali.ahmed@example.com', 'Pakistan', '+92-301-2345678', '', '2024-09-05'),
(23, 'Farha Khan', 'farha.khan@example.com', 'Pakistan', '0000099824', 'hhhhhhh', '2024-09-05'),
(24, 'Ahmed Shah', 'ahmed.shah@example.com', 'Pakistan', '032022628272', 'House 802 sheet 2', '2024-09-05'),
(25, 'Sara Malik', 'sara.malik@example.com', 'Pakistan', '0327672022', 'House 802 sheet 5 street 3 Shahwaliullah Nagar Orangi Town Karachi', '2024-09-05'),
(26, 'Bilal Hussain', 'bilal.hussain@example.com', 'Pakistan', '+92-305-6789012', '', '2024-09-05'),
(27, 'Zainab Bibi', 'zainab.bibi@example.com', 'Pakistan', '+92-306-7890123', '', '2024-09-05'),
(28, 'Omar Farooq', 'omar.farooq@example.com', 'Pakistan', '+92-307-8901234', '', '2024-09-05'),
(29, 'Hina Siddiqui', 'hina.siddiqui@example.com', 'Pakistan', '+92-308-9012345', '', '2024-09-05'),
(30, 'Imran Javed', 'imran.javed@example.com', 'Pakistan', '+92-309-0123456', '', '2024-09-05'),
(31, 'Taha', 'taha@email', 'Pakistan', '0433282098282', 'street', '2024-09-05'),
(33, 'Fahad', 'fahad@gmail.com', 'Pakistan', '0000099824111', 'karachi pakistan', '2024-09-05'),
(44, 'Mariam Aslam', 'mariam.aslam@example.com', 'Pakistan', '923451234576', 'Street 10, Gujranwala', '2024-09-07'),
(45, 'Hassan Raza', 'hassan.raza@example.com', 'Pakistan', '923451234577', 'Street 11, Hyderabad', '2024-09-07'),
(46, 'Sadia Yousaf', 'sadia.yousaf@example.com', 'Pakistan', '923451234578', 'Street 12, Bahawalpur', '2024-09-07'),
(47, 'Ahmad Ali', 'ahmad.ali@example.com', 'Pakistan', '923451234579', 'Street 13, Sukkur', '2024-09-07'),
(48, 'Nida Khan', 'nida.khan@example.com', 'Pakistan', '923451234580', 'Street 14, Sargodha', '2024-09-07'),
(49, 'Junaid Akhtar', 'junaid.akhtar@example.com', 'Pakistan', '923451234581', 'Street 15, Abbottabad', '2024-09-07');

--
-- Triggers `employee_table`
--
DELIMITER $$
CREATE TRIGGER `log_emp_update` AFTER UPDATE ON `employee_table` FOR EACH ROW BEGIN
    DECLARE adminId INT;
    DECLARE adminName VARCHAR(255);
    
    -- Retrieve the admin ID and name from a session variable or a user-defined variable
    SET adminId = @current_admin_id;
    SET adminName = @current_admin_name;

    -- Insert log into emp_edit_list
    INSERT INTO emp_edit_list (admin_id, admin_name, updated_empId, updated_emp_name, date_time)
    VALUES (adminId, adminName, NEW.emp_id, NEW.emp_name, NOW());

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `emp_edit_list`
--

CREATE TABLE `emp_edit_list` (
  `edit_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `updated_empId` int(11) DEFAULT NULL,
  `updated_emp_name` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_edit_list`
--

INSERT INTO `emp_edit_list` (`edit_id`, `admin_id`, `admin_name`, `updated_empId`, `updated_emp_name`, `date_time`) VALUES
(1, 4, 'Taha', 23, 'Farha Khan', '2024-09-06 06:03:53'),
(2, 4, 'Taha', 23, 'Farha Khan', '2024-09-06 06:11:49'),
(3, 4, 'Taha', 33, 'Fahad', '2024-09-06 07:16:57'),
(4, 4, 'Taha', 31, 'Taha', '2024-09-06 07:37:01'),
(5, 4, 'Taha', 31, 'Taha', '2024-09-06 07:37:01'),
(6, 4, 'Taha', 31, 'Taha', '2024-09-06 08:02:13'),
(7, 5, 'Hashir Meraj', 25, 'Sara Malik', '2024-09-07 07:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`user_id`, `user_name`, `user_email`, `user_password`, `date_time`) VALUES
(1, 'Hashir', 'hashir@gmail.com', '12345', '2024-09-04'),
(2, 'jsaks', 'kjsakj', 'kjwqudhQ', '2024-09-05'),
(3, 'mindquest', 'hashir1@gmail.com', '$2y$10$8pRB0Y.PBR9EdI7U6LXvQefUecj808xUEgpgySw0avRJNojWnCy7O', '2024-09-05'),
(4, 'Taha', 'taha@gmail.com', '$2y$10$noTGCqKj/sOHEkcTilgqteH6VqJzzosRwFAwtaGgNzs8hZGDdT0DC', '2024-09-05'),
(5, 'Hashir Meraj', 'hashirmeraj@gmail.com', '$2y$10$pO08mXs5dT01R6GMwPxq6.jDdOBLvs8cCs4RaJKCR5Vu/sod.2R4i', '2024-09-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`emp_id`);
ALTER TABLE `employee_table` ADD FULLTEXT KEY `emp_name` (`emp_name`,`emp_email`,`emp_phone`,`emp_country`);

--
-- Indexes for table `emp_edit_list`
--
ALTER TABLE `emp_edit_list`
  ADD PRIMARY KEY (`edit_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `updated_empId` (`updated_empId`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `emp_edit_list`
--
ALTER TABLE `emp_edit_list`
  MODIFY `edit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_edit_list`
--
ALTER TABLE `emp_edit_list`
  ADD CONSTRAINT `emp_edit_list_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users1` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_edit_list_ibfk_2` FOREIGN KEY (`updated_empId`) REFERENCES `employee_table` (`emp_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
