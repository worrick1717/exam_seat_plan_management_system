-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_seat_plan_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom_details`
--

CREATE TABLE `classroom_details` (
  `classroom_no` int(11) NOT NULL,
  `no_of_rows` int(11) NOT NULL,
  `no_of_column` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom_details`
--

INSERT INTO `classroom_details` (`classroom_no`, `no_of_rows`, `no_of_column`, `total_seats`) VALUES
(1, 10, 2, 40),
(5, 10, 2, 40),
(6, 7, 2, 28),
(7, 7, 2, 28),
(8, 7, 2, 28),
(9, 12, 2, 48),
(10, 8, 2, 32);

-- --------------------------------------------------------

--
-- Table structure for table `class_eight`
--

CREATE TABLE `class_eight` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_eight`
--

INSERT INTO `class_eight` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Aashish Shahi', 8, 'a'),
(2, 'Aashish Thapa', 8, 'a'),
(3, 'Aayush Karki', 8, 'a'),
(4, 'Aayush KC', 8, 'a'),
(5, 'Aayusha Tamang', 8, 'a'),
(6, 'Amon Baniya', 8, 'a'),
(7, 'Anjana Gurung', 8, 'a'),
(8, 'Ankit Basnet', 8, 'a'),
(9, 'Anuska Maharjan', 8, 'a'),
(10, 'Arjun Khatri', 8, 'a'),
(11, 'Astha Rana Magar', 8, 'a'),
(12, 'Beryl Dhital', 8, 'a'),
(13, 'Bidhya Dhungana', 8, 'a'),
(14, 'Gyaljen Lama', 8, 'a'),
(15, 'Jiten Mahat', 8, 'a'),
(16, 'Kinjal Tandukar', 8, 'a'),
(17, 'Merina Basnet', 8, 'a'),
(18, 'Prasansha Bharati', 8, 'a'),
(19, 'Rajesh Bista', 8, 'a'),
(20, 'Rohit Shah', 8, 'a'),
(21, 'Saiman Thapa', 8, 'a'),
(22, 'Salina Tamang', 8, 'a'),
(23, 'Sanjog Khanal', 8, 'a'),
(24, 'Shaswat Wagle', 8, 'a'),
(25, 'Simran Shrestha', 8, 'a'),
(26, 'Sudekshya Tamang', 8, 'a'),
(27, 'Dipanshu Baniya', 8, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `class_five`
--

CREATE TABLE `class_five` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_five`
--

INSERT INTO `class_five` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Aabiskar Rimal', 5, 'a'),
(2, 'Abhinav  Kharel', 5, 'a'),
(3, 'Anup Magar', 5, 'a'),
(4, 'Aryan Wadhawan', 5, 'a'),
(5, 'Ashika Hamal', 5, 'a'),
(6, 'Deelisha Adhikari', 5, 'a'),
(7, 'Deepak Kasti', 5, 'a'),
(8, 'Dikshanta Basnet', 5, 'a'),
(9, 'Dipak Mandal', 5, 'a'),
(10, 'Eva Gotame', 5, 'a'),
(11, 'Jamin Ranjitkar ', 5, 'a'),
(12, 'Kalash Karanjit', 5, 'a'),
(13, 'Krisha Rana Magar', 5, 'a'),
(14, 'Kristina Khanal', 5, 'a'),
(15, 'Niharika Sapkota', 5, 'a'),
(16, 'Om pratish Thapa', 5, 'a'),
(17, 'Pallabi Giri', 5, 'a'),
(18, 'Prabesh Magar', 5, 'a'),
(19, 'Pramosh Khadka', 5, 'a'),
(20, 'Pranav Sharma', 5, 'a'),
(21, 'Randhir Thakur', 5, 'a'),
(22, 'Rasika Shrestha', 5, 'a'),
(23, 'Reymik Gurung ', 5, 'a'),
(24, 'Rosika Chalise', 5, 'a'),
(25, 'Sadiksha Adhikari', 5, 'a'),
(26, 'Saksharata Bohora', 5, 'a'),
(27, 'Samrat K.C.', 5, 'a'),
(28, 'Sanod Kumar Dhamena ', 5, 'a'),
(29, 'Shristi Shrestha ', 5, 'a'),
(30, 'Shristina Oli', 5, 'a'),
(31, 'Sidhartha Shrestha', 5, 'a'),
(32, 'Srijan Pudasaini', 5, 'a'),
(33, 'Sujal Lataula', 5, 'a'),
(34, 'Sulav Phokhrel', 5, 'a'),
(35, 'Supriya Bhattarai', 5, 'a'),
(36, 'Tazaswee Bhattari', 5, 'a'),
(37, 'Tejaswi Timalsina', 5, 'a'),
(38, 'Yunika Lohani', 5, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `class_nine`
--

CREATE TABLE `class_nine` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_nine`
--

INSERT INTO `class_nine` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Aarya Neupane', 9, 'a'),
(2, 'Abiral Poudel', 9, 'a'),
(3, 'Elina Chetri', 9, 'a'),
(4, 'Anjana Kadel', 9, 'a'),
(5, 'Arya Shah Thakuri', 9, 'a'),
(6, 'Aryan Agrawal', 9, 'a'),
(7, 'Aayush karki', 9, 'a'),
(8, 'Bina Shrestha', 9, 'a'),
(9, 'Bipul Dhakal', 9, 'a'),
(10, 'Bisal Bhandari', 9, 'a'),
(11, 'Bishal Shrestha', 9, 'a'),
(12, 'Denzil Pariyar', 9, 'a'),
(13, 'Grishna Shrestha', 9, 'a'),
(14, 'Harshit Timilsina', 9, 'a'),
(15, 'Jashna Singh Thakuri', 9, 'a'),
(16, 'Karina Shahi Thakuri', 9, 'a'),
(17, 'Khusbu Chaudary', 9, 'a'),
(18, 'Krish Basnet', 9, 'a'),
(19, 'Krishna Shrestha', 9, 'a'),
(20, 'Kritika Kunwar', 9, 'a'),
(21, 'Najin Khatun', 9, 'a'),
(22, 'Namrata Shrestha', 9, 'a'),
(23, 'Nikrish Mahrjan', 9, 'a'),
(24, 'Palpasa Bharati', 9, 'a'),
(25, 'Pradip Nepali', 9, 'a'),
(26, 'Prasunna Joshi', 9, 'a'),
(27, 'Prince Buddhathoki', 9, 'a'),
(28, 'Prince Sarrag', 9, 'a'),
(29, 'Puspa Tamang', 9, 'a'),
(30, 'Prasoon Singh Thakuri', 9, 'a'),
(31, 'Rhythm Giri', 9, 'a'),
(32, 'Sadikshya Rijal', 9, 'a'),
(33, 'Sagar Raut', 9, 'a'),
(34, 'Sami Raut', 9, 'a'),
(35, 'Samikshya Dahal', 9, 'a'),
(36, 'Samikshya Khanal', 9, 'a'),
(37, 'Samuel Tamang', 9, 'a'),
(38, 'Sandhya Bhandari', 9, 'a'),
(39, 'Saughat Shrestha', 9, 'a'),
(40, 'Shoyab uddim', 9, 'a'),
(41, 'Shristi Khadka', 9, 'a'),
(42, 'Shriyam Raut', 9, 'a'),
(43, 'Siddhartha Newa', 9, 'a'),
(44, 'Simana Bajgain', 9, 'a'),
(45, 'Sulav Gautam', 9, 'a'),
(46, 'Prince Kumar', 9, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `class_seven`
--

CREATE TABLE `class_seven` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_seven`
--

INSERT INTO `class_seven` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Aadish Giri', 7, 'a'),
(2, 'Alex Lama', 7, 'a'),
(3, 'Angel K.C ', 7, 'a'),
(4, 'Anjol Gajmer', 7, 'a'),
(5, 'Ansh S.Thapa Magar', 7, 'a'),
(6, 'Anshu Ghimire', 7, 'a'),
(7, 'Aryan Raj Bhandari', 7, 'a'),
(8, 'Binam Dhungana', 7, 'a'),
(9, 'Jasmine Dhamena', 7, 'a'),
(10, 'Kanchan Tamang', 7, 'a'),
(11, 'Karun Khatri', 7, 'a'),
(12, 'Manjil Neupane', 7, 'a'),
(13, 'Prakhyat Poudel', 7, 'a'),
(14, 'Pranjal Khanal', 7, 'a'),
(15, 'Pratik Gopali', 7, 'a'),
(16, 'Preem Dagi', 7, 'a'),
(17, 'Raj Barwal', 7, 'a'),
(18, 'Rajesh Chudhary', 7, 'a'),
(19, 'Soman Aryal ', 7, 'a'),
(20, 'Samriddha Dongol', 7, 'a'),
(21, 'Samyan Ratna Tuladhar', 7, 'a'),
(22, 'Sangam Khadka', 7, 'a'),
(23, 'Sapu Prasai', 7, 'a'),
(24, 'Shristata Dahal', 7, 'a'),
(25, 'Sumika Sedhai', 7, 'a'),
(26, 'Tezen Gurung', 7, 'a'),
(27, 'Uprasha Khanal', 7, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `class_six`
--

CREATE TABLE `class_six` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_six`
--

INSERT INTO `class_six` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Aayushree G.C', 6, 'a'),
(2, 'Amrita Shahi', 6, 'a'),
(3, 'Anamika Giri', 6, 'a'),
(4, 'Bidise Sen', 6, 'a'),
(5, 'Devyani Subedi', 6, 'a'),
(6, 'Dipson Bhattarai', 6, 'a'),
(7, 'Dristi Neupane', 6, 'a'),
(8, 'Elina Shrestha', 6, 'a'),
(9, 'Krishna Poudel Alararez', 6, 'a'),
(10, 'Kushal Acharya', 6, 'a'),
(11, 'Manjil Gotame', 6, 'a'),
(12, 'Nijesh Budhathoki', 6, 'a'),
(13, 'Nikesh Gurung', 6, 'a'),
(14, 'Prajit Regmi', 6, 'a'),
(15, 'Pranaya Shrestha', 6, 'a'),
(16, 'Pranjal Shrestha', 6, 'a'),
(17, 'Raj Thapaliya', 6, 'a'),
(18, 'Reshma  Maharjan', 6, 'a'),
(19, 'Rishav Shahi', 6, 'a'),
(20, 'Sabal Dongol', 6, 'a'),
(21, 'Sahan Shrestha', 6, 'a'),
(22, 'Samikcshya malla Thakuri', 6, 'a'),
(23, 'Sharada Budhathoki', 6, 'a'),
(24, 'Sunil Shahi Thakuri', 6, 'a'),
(25, 'Sushant Bidari', 6, 'a'),
(26, 'Sushma Timalsina', 6, 'a'),
(27, 'Swosti Gotame', 6, 'a'),
(28, 'Ukesh Rawal', 6, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `class_ten`
--

CREATE TABLE `class_ten` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_ten`
--

INSERT INTO `class_ten` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Aayush Jha', 10, 'a'),
(2, 'Aayush Maharjan', 10, 'a'),
(3, 'Alina Silwal', 10, 'a'),
(4, 'Anushka Lohani', 10, 'a'),
(5, 'Dipisha Mohara', 10, 'a'),
(6, 'Diwas Lama', 10, 'a'),
(7, 'Krishma Singh', 10, 'a'),
(8, 'Manisha Poudel', 10, 'a'),
(9, 'Nayan Shakya', 10, 'a'),
(10, 'Nirjala Pandey', 10, 'a'),
(11, 'Palpasa Ranjit', 10, 'a'),
(12, 'Prakreeti Regmi', 10, 'a'),
(13, 'Puja Kuwar', 10, 'a'),
(14, 'Rajeev Thakur', 10, 'a'),
(15, 'Rn Singh Thakuri', 10, 'a'),
(16, 'Roman Maharjan', 10, 'a'),
(17, 'Roshan Shrestha', 10, 'a'),
(18, 'Sahara Shrestha', 10, 'a'),
(19, 'Samarpan Karki', 10, 'a'),
(20, 'Samikshya Regmi', 10, 'a'),
(21, 'Samrika Pradhan', 10, 'a'),
(22, 'Sandesh Gupta', 10, 'a'),
(23, 'Saramsha Thapa', 10, 'a'),
(24, 'Shrabya Dhungana', 10, 'a'),
(25, 'Shraddha Basnet', 10, 'a'),
(26, 'Shreedep Chand', 10, 'a'),
(27, 'Sichu Manandhar', 10, 'a'),
(28, 'Simran Gurung', 10, 'a'),
(29, 'Sujata Danwar', 10, 'a'),
(30, 'Sujata Neupane', 10, 'a'),
(31, 'Tashi Lama', 10, 'a'),
(32, 'Upasana Poudel', 10, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` int(11) NOT NULL,
  `class` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`id`, `name`, `room`, `class`, `student_no`) VALUES
(370, '', 5, 'class_six', 16),
(371, '', 5, 'class_five', 10),
(372, '', 5, 'class_six', 8),
(373, '', 5, 'class_five', 6),
(374, '', 6, 'class_five', 16),
(375, '', 6, 'class_six', 4),
(376, '', 6, 'class_five', 6);

-- --------------------------------------------------------

--
-- Table structure for table `registration_db`
--

CREATE TABLE `registration_db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_db`
--

INSERT INTO `registration_db` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Ram', 'ram', 'ram@gmail.com', '1234'),
(2, 'Shyam', 'shyam', 'shyam@gmail.com', '1234'),
(3, 'mikesh', 'mikesh', 'mikesh@gmail.com', '1234'),
(4, 'Sita', 'sita', 'sita@gmail.com', '1234'),
(5, 'mikeshtandukar', 'mikeshtandukar', 'mikeshtandukar@gmail.com', '1234'),
(7, 'Binita', 'bini', 'bini@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `selected_class_list`
--

CREATE TABLE `selected_class_list` (
  `class` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selected_class_list`
--

INSERT INTO `selected_class_list` (`class`) VALUES
('class_five'),
('class_six');

-- --------------------------------------------------------

--
-- Table structure for table `selected_room_list`
--

CREATE TABLE `selected_room_list` (
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selected_room_list`
--

INSERT INTO `selected_room_list` (`room`) VALUES
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `roll_no` int(11) NOT NULL,
  `s_name` varchar(75) NOT NULL,
  `s_class` int(11) NOT NULL,
  `s_section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`roll_no`, `s_name`, `s_class`, `s_section`) VALUES
(1, 'Mikesh Tandukar', 10, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_detail`
--

CREATE TABLE `teacher_detail` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(75) NOT NULL,
  `t_designation` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_detail`
--

INSERT INTO `teacher_detail` (`t_id`, `t_name`, `t_designation`) VALUES
(1, 'Saroj Yadav', 'math teacher'),
(2, 'Diwas Thami', 'English Teacher'),
(3, 'Sugam Manandhar', 'Social Teacher'),
(4, 'Indira Joshi', 'Nepali Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom_details`
--
ALTER TABLE `classroom_details`
  ADD PRIMARY KEY (`classroom_no`);

--
-- Indexes for table `class_eight`
--
ALTER TABLE `class_eight`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `class_five`
--
ALTER TABLE `class_five`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `class_nine`
--
ALTER TABLE `class_nine`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `class_seven`
--
ALTER TABLE `class_seven`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `class_six`
--
ALTER TABLE `class_six`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `class_ten`
--
ALTER TABLE `class_ten`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_db`
--
ALTER TABLE `registration_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `registration_db`
--
ALTER TABLE `registration_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
