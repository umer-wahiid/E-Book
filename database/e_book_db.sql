-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 12:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_data`
--

CREATE TABLE `tbl_user_data` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `user_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_data`
--

INSERT INTO `tbl_user_data` (`user_id`, `user_name`, `user_email`, `user_address`, `user_phone`, `user_image`, `user_password`) VALUES
(1, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'House no D-18 Shah Faisal Town Malir Halt Karachi', 28374987, '../apis/profileImage/62da75c8c023aAmmar.jpg', 'ammaransari5544'),
(2, 'Ayan', 'ayan@gmail.com', 'ashfiuaufheiufha', 783561875, 'image', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
