-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 03:08 PM
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
-- Database: `dx_coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(100) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `username_admin`, `password_admin`) VALUES
(80001, 'Raihan Zahran', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `name_course` varchar(100) NOT NULL,
  `price_course` int(11) NOT NULL,
  `category_course` varchar(50) DEFAULT NULL,
  `date_course` date NOT NULL,
  `instructor_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name_course`, `price_course`, `category_course`, `date_course`, `instructor_course`) VALUES
(11101, 'Basic PHP', 500000, 'Web Development', '2024-06-01', 10001),
(11102, 'Basic Flutter', 750000, 'Mobile Development', '2024-06-02', 10002),
(11144, 'JavaScript Basics', 350000, 'Web Development', '2024-01-10', 10001),
(11145, 'React.js', 400000, 'Web Development', '2024-01-15', 10001),
(11146, 'Node.js', 450000, 'Web Development', '2024-01-20', 10001),
(11147, 'PHP & MySQL', 400000, 'Web Development', '2024-01-25', 10001),
(11148, 'Android Development', 500000, 'Mobile Development', '2024-01-07', 10002),
(11149, 'iOS Development', 550000, 'Mobile Development', '2024-01-12', 10002),
(11150, 'Flutter Development', 600000, 'Mobile Development', '2024-01-17', 10002),
(11151, 'Swift Programming', 650000, 'Mobile Development', '2024-01-22', 10002),
(11152, 'Kotlin Programming', 700000, 'Mobile Development', '2024-01-27', 10002),
(11153, 'Data Science', 700000, 'Data Science', '2024-01-03', 10001),
(11154, 'Machine Learning', 800000, 'Data Science', '2024-01-08', 10001),
(11155, 'Artificial Intelligence', 900000, 'Data Science', '2024-01-13', 10001),
(11156, 'Cloud Computing', 750000, 'Cloud Computing', '2024-01-18', 10002),
(11157, 'Cyber Security', 850000, 'Cyber Security', '2024-01-23', 10002),
(11159, 'Graphic Design', 650000, 'Design', '2024-01-04', 10001),
(11160, 'UI/UX Design', 700000, 'Design', '2024-01-09', 10002),
(11163, 'Cisco Packet', 100000, 'Cyber Security', '0000-00-00', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id_instructor` int(11) NOT NULL,
  `username_instructor` varchar(50) NOT NULL,
  `password_instructor` varchar(255) NOT NULL,
  `name_instructor` varchar(100) NOT NULL,
  `email_instructor` varchar(100) NOT NULL,
  `phone_instructor` varchar(15) DEFAULT NULL,
  `address_instructor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id_instructor`, `username_instructor`, `password_instructor`, `name_instructor`, `email_instructor`, `phone_instructor`, `address_instructor`) VALUES
(10001, 'rafli12', '000', 'Farli Eka Chand', 'Rafli.boss99@gmail.com', '081234567890', 'Jl. Merdeka No.168'),
(10002, 'instructor2', 'password2', 'Jane Smith', 'jane.smith@example.com', '081234567891', 'Jl. Sudirman No.2');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `purchase_date` date NOT NULL,
  `amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `item_name`, `purchase_date`, `amount`) VALUES
(1, 'Zoom Premium', '2024-06-30', 500000.00),
(2, 'Hosting Service', '2024-06-30', 700000.00),
(3, 'Office Supplies', '2024-06-30', 300000.00),
(4, 'Anti Ransomware', '2024-06-30', 10000.00),
(5, 'Anti Hacker/Bjorka', '2024-06-30', 25000.00),
(6, 'Windows 10 Limited Crack', '2024-06-30', 100000.00);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id_sale` int(11) NOT NULL,
  `student_sale` int(11) DEFAULT NULL,
  `course_sale` int(11) DEFAULT NULL,
  `date_sale` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id_sale`, `student_sale`, `course_sale`, `date_sale`) VALUES
(2024064, 20004, 11101, '2024-01-12'),
(2024065, 20004, 11144, '2024-02-15'),
(2024066, 20004, 11145, '2024-03-22'),
(2024067, 20004, 11146, '2024-04-10'),
(2024068, 20005, 11147, '2024-05-18'),
(2024069, 20005, 11153, '2024-06-25'),
(2024070, 20005, 11154, '2024-07-19'),
(2024071, 20006, 11155, '2024-08-14'),
(2024072, 20006, 11159, '2024-09-05'),
(2024073, 20006, 11102, '2024-10-20'),
(2024074, 20006, 11148, '2024-11-30'),
(2024075, 20007, 11149, '2024-12-11'),
(2024076, 20007, 11150, '2024-01-22'),
(2024077, 20007, 11151, '2024-02-28'),
(2024078, 20008, 11152, '2024-03-12'),
(2024079, 20008, 11156, '2024-04-25'),
(2024080, 20008, 11157, '2024-05-07'),
(2024082, 20005, 11101, '2024-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `username_student` varchar(50) NOT NULL,
  `password_student` varchar(255) NOT NULL,
  `name_student` varchar(100) NOT NULL,
  `email_student` varchar(100) NOT NULL,
  `phone_student` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `username_student`, `password_student`, `name_student`, `email_student`, `phone_student`) VALUES
(20004, 'chevy', '$2y$10$TczOipMhsxlldDbcCsvRWef/T6WF/Psz5qY8BueRTYpg285duN7qW', 'Aru Chevy Rasyid', 'aruchevy31@gmail.com', '08584620076'),
(20005, 'wisnu123', '$2y$10$4/YGCBAxWzujpSQvL7zivuneaEiRJDPu7iaKCbLyDmp2GL/Lwf2cq', 'Wisnu Hartono', 'wisnugaming@gmail.com', '089533730918'),
(20006, 'dian66', '$2y$10$oAvYLFfN4iLkzPP.K4Pj6.RaeUMmpmGUYZAXOM8So/yUCamzxM1JC', 'Dian Rivanno', 'dian@gmail.com', '088833730918'),
(20007, 'adhan', '$2y$10$8A5XY70eKiYMmuG8TzgWme3NwPEz604JWl6kktT7Xpy0R2MonA/CO', 'Chandra Hadi', 'chandrakun@gmail.com', '08033730918'),
(20008, 'masbeni', '$2y$10$DFdy.eVh8mDsijLTheu5reW1YoDvwooGpLB8CDHhdEYRKiSChKxUy', 'Beni M', 'bennnn@gmail.com', '08120337309');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `instructor_course` (`instructor_course`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id_instructor`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id_sale`),
  ADD KEY `student_sale` (`student_sale`),
  ADD KEY `course_sale` (`course_sale`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80003;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11168;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id_instructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024085;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20011;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`instructor_course`) REFERENCES `instructor` (`id_instructor`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`student_sale`) REFERENCES `student` (`id_student`),
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`course_sale`) REFERENCES `course` (`id_course`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
