-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 10:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `pnumber` int(70) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `admin_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `pnumber`, `gender`, `admin_pass`, `first_name`, `last_name`, `admin_type`) VALUES
(87, 'ram12@gmail.com', 2342342, '', '1234', 'wee', 'ewr', '1'),
(91, 'raj12@gmail.com', 213414, 'male', '1234', 'raj', 'kumar', '2'),
(92, 'raj12@gmail.com', 2147483647, 'on', '1234', 'ramesh', 'shekhar', '2'),
(93, 'raj12@gmail.com', 2147483647, 'on', '1234', 'ramesh', 'shekhar', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'super admin'),
(2, 'customer admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_job`
--

CREATE TABLE `all_job` (
  `job_id` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `contri` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` int(11) NOT NULL,
  `salary` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_job`
--

INSERT INTO `all_job` (`job_id`, `customer_email`, `job_title`, `description`, `contri`, `state`, `city`, `post_date`, `category`, `salary`, `type`, `address`) VALUES
(1, 'ramesh@gmail.com ', 'web developer ', 'this is a job', 'india', 'Gujarat ', 'surat', '2023-12-25 04:27:01', 2, 30000, 'Full Time', '502,Rajhans -2 ,Besides Nirmal Hospital,Surat,Gujarat '),
(2, 'raj12@gmail.com', 'web developer', 'this is job', 'india', 'gujarat', 'surat', '2023-12-23 13:22:43', 2, 0, '', ''),
(3, 'ram12@gmail.com', 'web developer aswfdf', ' this ifsdfsdsds a job', 'india', 'Gujarat ', 'surat', '2023-12-25 09:49:46', 2, 0, 'full time', '302 hari nagar udhna,surat'),
(4, 'ram12@gmail.com', 'web developer', 'dsd', 'india', 'Bihar ', 'Patna', '2023-12-25 09:50:45', 8, 0, 'Full Time', '44,New patana road'),
(5, 'raj12@gmail.com', 'web developer', 'hhs', '1', '1', '1', '2023-12-23 13:22:43', 0, 0, '', ''),
(9, 'raj12@gmail.com', 'iti', 'sdds', 'india', 'surat', '23', '2023-12-23 13:22:43', 1, 0, '', ''),
(10, 'raj12@gmail.com ', 'megacom', 'this is job', 'india', 'up', 'noida', '2023-12-25 09:28:48', 8, 0, '', ''),
(11, 'ram12@gmail.com', 'web developer', 'aaswds', '2', '1', '2', '2023-12-23 13:22:43', 0, 0, '', ''),
(12, 'ram12@gmail.com', 'web developer', 'aaswds', '2', '1', '2', '2023-12-23 13:22:43', 0, 0, '', ''),
(13, 'ram12@gmail.com', 'web developer', 'sadss', '2', '1', '2', '2023-12-23 13:22:43', 0, 0, '', ''),
(14, 'ram12@gmail.com', 'web developer', 'sadss', '2', '1', '2', '2023-12-23 13:22:43', 0, 0, '', ''),
(15, 'ram12@gmail.com', 'web developer', 'sdcs', '', '2', '2', '2023-12-23 13:22:43', 2, 0, '', ''),
(16, 'ram12@gmail.com', 'web developer', 'sdcs', '', '2', '2', '2023-12-23 13:22:43', 2, 0, '', ''),
(17, 'ram12@gmail.com', 'sds', 'sffddffds', '1', '2', '2', '2023-12-23 13:22:43', 2, 0, '', ''),
(20, 'ram12@gmail.com', 'google', 'dsfsdf', '2', '1', '2', '2023-12-25 09:30:18', 8, 0, '', ''),
(21, 'ram12@gmail.com', 'google', 'dsfsdf', 'india', '1', 'surat', '2023-12-25 09:28:19', 8, 0, 'Full Time', ''),
(22, 'ramesh@gmail.com ', 'Manger', 'this is a job', 'india', 'uttar pradesh', 'Noida', '2023-12-25 09:24:22', 8, 20000, 'Part Time', ''),
(23, 'raj12@gmail.com ', 'Graphics  Designer', 'this', 'india', 'TamilNadu', 'madurai', '2023-12-25 09:59:38', 1, 0, 'Full Time', '33,madurai,tamilNadu');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `cname` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `description`, `admin`, `des`) VALUES
(10, 'Soft Tech', 'sdfds', 'ramesh@gmail.com', 'Hello I am Ramesh Kumar My Compnay is Soft tech i am owner Of this Company'),
(11, 'eeefr', '      dsfsdfsd      ', 'amit@gmail.com', ''),
(13, 'eeefr', 'dsfsdfsd', 'amit@gmail.com', ''),
(14, 'eeefr', 'dsfsdfsd', 'amit@gmail.com', ''),
(15, 'dea', 'rtrtre', 'rrrte', ''),
(17, 'asdd', 'addddd', 'dda', ''),
(18, 'ss', 'dfffffffd', 'amit@gmail.com', ''),
(19, 'ss', 'dfffffffd', 'amit@gmail.com', ''),
(20, 'ss', 'dfffffffd', 'amit@gmail.com', ''),
(21, 'ss', 'dfffffffd', 'amit@gmail.com', ''),
(22, 'ss', 'dfffffffd', 'amit@gmail.com', ''),
(23, 'ss', 'dfffffffd', 'amit@gmail.com', ''),
(24, 'sddd', 'sds', 'sds', ''),
(25, 'sddd', 'sds', 'sds', ''),
(26, 'sddd', 'sds', 'sds', ''),
(27, 'sddd', 'sds', 'sds', ''),
(28, 'sddd', 'sds', 'sds', ''),
(29, 'sddd', 'sds', 'sds', ''),
(30, 'sddd', 'sds', 'sds', ''),
(31, 'sedwd', 'dfdf', 'ram2@gmail.com', ''),
(32, 'dsssd', 'sdsdsdssa', 'sdds', ''),
(33, 'dsssd', 'sdsdsdssa', 'sdds', ''),
(34, 'dsssd', 'sdsdsdssa', 'sdds', ''),
(35, 'dsssd', 'sdsdsdssa', 'sdds', ''),
(36, 'sadf', 'sdfsfsd', 'dfsds', ''),
(37, 'fffff', 'sdffdgg', 'sdgd', ''),
(38, 'adfsfs', 'dsafsaf', 'sad ', ''),
(39, 'adfsfs', 'dsafsaf', 'sad ', ''),
(40, 'adfsfs', 'dsafsaf', 'sad ', ''),
(41, 'dsfa', 'sfdadfadad', 'dsf', ''),
(42, 'asdd', 'asafd', 'dada', ''),
(43, 'dfx', 'fsdg', 'dsffg', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`) VALUES
(1, 'Software Developer'),
(2, 'Data Analyst'),
(3, 'Web Designer'),
(4, 'Project Manager'),
(5, 'Marketing Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `email`, `password`, `fname`, `lname`, `dob`, `mnumber`) VALUES
(1, 'mac@gmail.com', '1234', 'raj', 'bhai', '2023-12-11', 63581),
(2, 'rakesh@gmail.com', '1234', 'rakesh', '1223', '2023-12-13', 2342342),
(3, 'rakesh@gmail.com', '1234', 'rakesh', '1223', '2023-12-13', 2342342),
(4, 'rakesh@gmail.com', '1234', 'rakesh', '1223', '2023-12-13', 2342342),
(5, 'rakesh@gmail.com', '1234', 'rakesh', '1223', '2023-12-13', 2342342),
(6, 'rakesh@gmail.com', '1234', 'rakesh', '1223', '2023-12-13', 2342342),
(7, 'ram2@gmail.com', '1234', 'rtty', 'ertt', '2023-12-17', 2342342),
(8, 'ram2@gmail.com', '1234', 'rtty', 'ertt', '2023-12-17', 2342342),
(9, 'ram2@gmail.com', '1234', 'rtty', 'ertt', '2023-12-17', 2342342),
(10, 're@gmail.com', '1234', 'ram', 'kishan', '2023-12-11', 63581);

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `job_id` int(23) NOT NULL,
  `job_seeker` varchar(100) NOT NULL,
  `mobile_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `fname`, `lname`, `dob`, `file`, `job_id`, `job_seeker`, `mobile_no`) VALUES
(8, 'Amrit', 'ram', '2023-12-29', 'download (1).jpeg', 2, 'mac@gmail.com', 0),
(10, 'Amrit', 'ram', '2023-12-06', 'download (1).jpeg', 10, 'mac@gmail.com', 64732763),
(13, 'kishan', 'kumar', '2023-12-27', 'man-7956041_1920 (1).jpg', 23, 're@gmail.com', 2147483647),
(23, 'kishan', 'kumar', '2023-12-21', 'man-7956041_1920 (1).jpg', 10, 're@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(1, 'Graphics Designer', 'ssdds'),
(2, 'web Developer ', 'this is poli description'),
(8, 'video editors ', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `Lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `Lname`) VALUES
(1, 'Surat,Gujrat'),
(2, 'Mumbai,Maharastra'),
(3, 'Ahmdabad,Gujrat'),
(4, 'Rajkot,Gujrat'),
(5, 'Bengaluru,Karnataka'),
(6, 'Pune,Maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_job`
--
ALTER TABLE `all_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `all_job`
--
ALTER TABLE `all_job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
