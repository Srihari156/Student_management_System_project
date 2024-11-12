-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 11:55 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_details`
--

INSERT INTO `attendance_details` (`id`, `student_id`, `date`, `status`) VALUES
(1, 8, '2024-10-16', 'present'),
(2, 18, '2024-10-16', 'Absent'),
(3, 19, '2024-10-16', 'present'),
(4, 20, '2024-10-16', 'present'),
(5, 21, '2024-10-16', 'present'),
(6, 8, '2024-10-17', 'present'),
(7, 18, '2024-10-17', 'Absent'),
(8, 19, '2024-10-17', 'present'),
(9, 20, '2024-10-17', 'present'),
(10, 21, '2024-10-17', 'Absent'),
(11, 9, '2024-10-18', 'present'),
(12, 30, '2024-10-18', 'present'),
(13, 31, '2024-10-18', 'present'),
(14, 32, '2024-10-18', 'Absent'),
(15, 33, '2024-10-18', 'Absent'),
(16, 7, '2024-10-18', 'Absent'),
(17, 34, '2024-10-18', 'present'),
(18, 35, '2024-10-18', 'present'),
(19, 36, '2024-10-18', 'present'),
(20, 42, '2024-10-18', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `standards` varchar(30) NOT NULL,
  `father_name` text NOT NULL,
  `father_job` text NOT NULL,
  `mother_name` text NOT NULL,
  `mother_job` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `age`, `mobile_no`, `address`, `city`, `state`, `dob`, `standards`, `father_name`, `father_job`, `mother_name`, `mother_job`, `gender`) VALUES
(4, 'TARIQ', 8, 321654987, 'Pollachi road, Udumalpet', 'Udumalpet', 'Tamilnadu', '2012-02-05', 'III', 'MOHAMED ISHLAM', 'business', 'BANU', 'it companies', 'Male'),
(5, 'GANESH', 3, 654321564, 'Kochin, Kerala', 'Kochin', 'Kerala', '2022-05-11', 'LKG', 'MANIYAPPAN', 'Carpenter ', 'SRIVANI', 'Housewife', 'Male'),
(6, 'DEEPIKA', 4, 2147483647, 'Bangalore,Karnataka', 'Bangalore', 'Karnataka', '2020-03-11', 'UKG', 'ARJUN', 'Business man', 'PREETHI', 'Housewife', 'Female'),
(7, 'JEEVA', 10, 654321798, 'Pollachi', 'Pollachi', 'Tamilnadu', '2015-04-22', 'V', 'KARUPPSAMY', 'Lodge Manager', 'KAVITHA', 'Housewife', 'Male'),
(8, 'JOHN', 6, 987123465, 'Koyabedu, Chennai', 'Chennai', 'Tamilnadu', '2020-10-23', 'I', 'JACK', 'Hotel employed', 'JACEE', 'Housewife', 'Male'),
(9, 'VETRIVEL', 9, 654321546, 'Gandhipuram, Coimbatore', 'Coimbatore', 'Tamilnadu', '2014-07-10', 'IV', 'KANAGAVEL', 'It companies', 'PARVATHY', 'Govt job', 'Male'),
(10, 'VIVEK', 3, 654987321, 'Pollachi ', 'Pollachi', 'Tamilnadu', '2021-06-24', 'LKG', 'NAKUL', 'Business', 'MEGNA', 'Housewife', 'Male'),
(11, 'VIJAY', 3, 987654123, 'Chennai', 'Chennai', 'Tamilnadu', '2021-06-22', 'LKG', 'CHANDRAN', 'Business', 'PAVITHRA', 'Housewife', 'Male'),
(12, 'AJITH', 3, 654987321, 'Chennai', 'Chennai', 'Tamilnadu', '2021-05-01', 'LKG', 'KATHIRVEL', 'It companies', 'PREETHI', 'Govt job', 'Male'),
(13, 'HARISH', 3, 2147483647, 'Koyamedu, Chennai', 'Chennai', 'Tamilnadu', '2021-10-26', 'LKG', 'DINESH', 'Employee in company', 'VAISHU', 'Govt job', 'Male'),
(14, 'INDHIRAN', 4, 2147483647, 'Madurai', 'Madurai', 'Tamilnadu', '2019-09-11', 'UKG', 'NAVEEN', 'Software Company Manager', 'GEETHA', 'business', 'Male'),
(15, 'ISWARAYA', 4, 983246581, 'Coimbatore', 'Coimbatore', 'Tamilnadu', '2019-07-06', 'UKG', 'CHANDRAN', 'Sales man', 'LAKSHMI', 'Housewife', 'Female'),
(16, 'RISHIK', 4, 987321894, 'Palani', 'Palani', 'Tamilnadu', '2019-01-23', 'UKG', 'SIDDHARTH', 'Production Manager', 'BHAVANI', 'Housewife', 'Male'),
(17, 'ANANDHI', 4, 2147483647, 'Kinathakadavu, Coimbatore', 'Coimbatore', 'Tamilnadu', '2019-06-11', 'UKG', 'RAJESH', 'Cinema Business Man', 'MONISHA', 'Teacher', 'Female'),
(18, 'RAMYA', 5, 2147483647, 'Mettupalayam,Coimbatore', 'Coimbatore', 'Tamilnadu', '2017-01-11', 'I', 'RAGUVARAN', 'Police Officer in Ips', 'BAVATHARANI', 'Tailoring Job', 'Female'),
(19, 'POOJA', 5, 2147483647, 'Tiruppur', 'Tiruppur', 'Tamilnadu', '2017-02-13', 'I', 'PRABHU', 'Textile Shop Owner', 'ARUNA', 'Housewife', 'Female'),
(20, 'KARTHIKA', 5, 2147483647, 'Palladam', 'Palladam', 'Tamilnadu', '2017-08-01', 'I', 'VEERAN', 'Working in Accounting', 'KALYANI', 'Business', 'Female'),
(21, 'AMRIDHA', 5, 2147483647, 'Thiruchendur', 'Thiruchendur', 'Tamilnadu', '2017-05-11', 'I', 'EZHIL', 'Sales man', 'SUSHMA', 'It companies', 'Female'),
(22, 'PADMA', 6, 2147483647, 'Avinash road, Coimbatore', 'Coimbatore', 'Tamilnadu', '2015-09-01', 'II', 'NANDHA', 'Constructor Employee', 'KAYAL', 'Tea shop', 'Male'),
(23, 'SAMEER', 6, 2147483647, 'Trichy', 'Trichy', 'Tamilnadu', '2015-08-12', 'II', 'IFRAN', 'Business man', 'SHABANA', 'Teacher', 'Male'),
(24, 'BALAJI', 6, 2147483647, 'Mukkonam, Udumalpet', 'Udumalpet', 'Tamilnadu', '2015-03-12', 'II', 'RAMASAMY', 'Milk man', 'ANURADHA', 'Housewife', 'Male'),
(25, 'VASANTH', 7, 930546108, 'Tharapuram', 'Tharapuram', 'Tamilnadu', '2015-09-27', 'II', 'BALA', 'Govt Job', 'JEEVITHA', 'Govt job', 'Male'),
(26, 'MEENAKSHI', 8, 2147483647, 'Bangalore,karnataka', 'Bangalore', 'Karnataka', '2013-06-11', 'III', 'VELU', 'Carpenter ', 'CHARULATHA', 'Housewife', 'Female'),
(27, 'PRASAD', 8, 2147483647, 'Palakad', 'Palakad', 'Kerala', '2013-02-06', 'III', 'ADTHIYAN', 'Bank officer', 'GOURI PRIYA', 'Bank Officer', 'Male'),
(28, 'VISHWA', 12, 2147483647, 'Erode', 'Erode', 'Tamilnadu', '2013-12-06', 'III', 'SATHYA', 'Post officer', 'AKSHITHA', 'Bank officer', 'Male'),
(29, 'UDHAYA', 8, 2147483647, 'Madathukulam,Palani', 'Palani', 'Tamilnadu', '2013-04-15', 'III', 'KOWSICK', 'PT teacher', 'GOMATHI', 'Govt Staff', 'Male'),
(30, 'VISHNU', 9, 903756418, 'Dindugal', 'Dindugal', 'Tamilnadu', '2011-01-26', 'IV', 'VEERAN', 'Bank officer', 'SUMATHI', 'Bank officer', 'Male'),
(31, 'DIVIYA', 9, 2147483647, 'Ashok pillar,Chennai', 'Chennai', 'Tamilnadu', '2011-07-02', 'IV', 'KARTHI', 'Mobile business', 'SIVAGAMI', 'PT teacher', 'Female'),
(32, 'ADHICK', 9, 2147483647, 'Tiruppur', 'Tiruppur', 'Tamilnadu', '2011-09-10', 'IV', 'RAVI', 'Carpenter ', 'NITHYA', 'Private job', 'Male'),
(33, 'MOHAMMED SADIQ ALI', 9, 2147483647, 'Bangalore,Karnataka', 'Bangalore', 'Karnataka', '2011-09-13', 'IV', 'NAZEER', 'Police officer in Ips', 'BANU', 'Teacher', 'Male'),
(34, 'ROCKY', 10, 2147483647, 'Palladam', 'Palladam', 'Tamilnadu', '2010-05-10', 'V', 'CHRISTOPHER', 'Bank officer', 'REGINA', 'Teacher', 'Male'),
(35, 'SWETHA', 10, 2147483647, 'Karur', 'Karur', 'Tamilnadu', '2011-11-30', 'V', 'MUNIYANDI', 'Sales man', 'KANAGAVALI', 'Bank officer', 'Female'),
(36, 'SARASWATHI', 10, 69872130, 'Trichy', 'Trichy', 'Tamilnadu', '2011-06-28', 'V', 'MUTHU PANDI', 'Business', 'NANDHINI', 'Private job', 'Female'),
(42, 'KATHIR KUMAR', 10, 98352046, 'Kochin, Kerala', 'Kochin', 'Kerala', '2011-05-18', 'V', 'SURYA', 'LIC Insurance', 'HEMALATHA', 'bank officer', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendance_details`
--

CREATE TABLE `teacher_attendance_details` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_attendance_details`
--

INSERT INTO `teacher_attendance_details` (`id`, `teacher_id`, `date`, `status`) VALUES
(1, 1, '2024-10-18', 'present'),
(2, 2, '2024-10-18', 'present'),
(3, 4, '2024-10-18', 'present'),
(4, 1, '2024-10-17', 'present'),
(5, 2, '2024-10-17', 'absent'),
(6, 4, '2024-10-17', 'absent'),
(7, 1, '2024-10-16', 'present'),
(8, 2, '2024-10-16', 'present'),
(9, 4, '2024-10-16', 'present'),
(10, 10, '2024-10-16', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `id` int(11) NOT NULL,
  `teacher_name` text NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `exp_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `teacher_name`, `qualification`, `exp_no`) VALUES
(1, 'MANIKANDAN', 'B.com', '2 Year'),
(2, 'JEEVA', 'B.com', '5 Year'),
(4, 'SIVA KUMAR', 'B.Ed', '5 Year'),
(10, 'diviya', 'M.Ed', '3 Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_attendance_details`
--
ALTER TABLE `teacher_attendance_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `teacher_attendance_details`
--
ALTER TABLE `teacher_attendance_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
