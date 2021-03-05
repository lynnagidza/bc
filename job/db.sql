-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 02:49 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_inbox`
--

CREATE TABLE `admin_inbox` (
  `msg_id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_inbox`
--

INSERT INTO `admin_inbox` (`msg_id`, `sender`, `email`, `message`, `date_received`) VALUES
(1, 'yash1996venugopal', '', 'hello admin', '2017-07-19 07:16:31'),
(2, '', '', 'COMPLAINT', '2021-02-26 17:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

CREATE TABLE `hires` (
  `id` int(11) NOT NULL,
  `hiree` varchar(50) NOT NULL,
  `hirer` varchar(50) NOT NULL,
  `date_hired` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hires`
--

INSERT INTO `hires` (`id`, `hiree`, `hirer`, `date_hired`) VALUES
(1, 'Linnie Wamaitha', 'Mwalumzz', '2021-03-04'),
(2, 'Ben Kasyimi', 'Mwalumzz', '2021-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` varchar(50) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `session_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`user_id`, `name`, `mobile`, `email`, `username`, `password`) VALUES
(1, 'Yash Eka', '+254700147722', 'yasheka@gmail.com', 'yasheka', 'myselfyo'),
(2, 'Emma Watson', '9481248679', 'emma.watson@gmail.com', 'emma.watson', 'harry.potter'),
(3, 'Harry Potter', '+254706729033', 'harry.potter@gmail.com', 'harry potter', 'hogwards'),
(4, 'Lynn Agidza Ekalaji', '+254797143344', 'lynnagidza@gmail.com', 'agidza', 'password'),
(7, 'Kevin Mwaluma ', '+254706663321', 'mwaluma@gmail.com', 'Mwalumzz', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `reviews` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `fullname`, `gender`, `occupation`, `location`, `phone`, `reviews`) VALUES
(1, 'Alvynah Wabwoba', '', 'Painter', 'Juja', '0792833436', 'Awesome service 5/5'),
(2, 'Ben Kasyimi', '', 'Plumber', 'Machakos', '0702983716', 'Super plumber'),
(3, 'Fay Akiya', '', 'Cleaner', 'Kisii', '0707815845', ''),
(4, 'Hudson Ogubi', '', 'IT Specialist', 'Kisumu', '0721857807', ''),
(5, 'Allan Ambuchi', '', 'Civil Engineer', 'Mombasa', '0708083398', ''),
(6, 'Omollo Ochieng\'', '', 'Mechanic', 'Kisumu', '0722084038', ''),
(7, 'Linnie Wamaitha', '', 'Baker', 'Nairobi', '0741135710', 'Highly recommend'),
(8, 'Ashley Anyango', '', 'Farmer', 'Kisumu', '0790327845', '10/10'),
(9, 'Humphrey Anya', '', 'Farmer', 'Kisumu', '0722940378', 'Competent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_inbox`
--
ALTER TABLE `admin_inbox`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `hires`
--
ALTER TABLE `hires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_inbox`
--
ALTER TABLE `admin_inbox`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hires`
--
ALTER TABLE `hires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
