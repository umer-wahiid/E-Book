-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 04:02 PM
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
-- Table structure for table `tbl_book_category`
--

CREATE TABLE `tbl_book_category` (
  `b_id` int(11) NOT NULL,
  `b_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_category`
--

INSERT INTO `tbl_book_category` (`b_id`, `b_category`) VALUES
(6, 'Comics'),
(7, 'Novels'),
(8, 'Story Books'),
(9, 'Quiz Books'),
(10, 'Journals');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_detail`
--

CREATE TABLE `tbl_book_detail` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(30) DEFAULT NULL,
  `book_author` varchar(25) DEFAULT NULL,
  `book_author_about` varchar(10000) DEFAULT NULL,
  `book_publisher` varchar(30) DEFAULT NULL,
  `book_publication_date` date DEFAULT NULL,
  `book_weight` int(11) DEFAULT NULL,
  `book_pages` int(11) DEFAULT NULL,
  `book_rating` int(11) DEFAULT NULL,
  `book_availability` varchar(20) DEFAULT NULL,
  `book_about` varchar(5000) DEFAULT NULL,
  `book_category_1` int(11) DEFAULT NULL,
  `book_category_2` int(11) DEFAULT NULL,
  `book_category_3` int(11) DEFAULT NULL,
  `book_price_hardcopy` int(11) DEFAULT NULL,
  `book_price_pdf` int(11) DEFAULT NULL,
  `book_price_cd` int(11) DEFAULT NULL,
  `book_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_detail`
--

INSERT INTO `tbl_book_detail` (`book_id`, `book_title`, `book_author`, `book_author_about`, `book_publisher`, `book_publication_date`, `book_weight`, `book_pages`, `book_rating`, `book_availability`, `book_about`, `book_category_1`, `book_category_2`, `book_category_3`, `book_price_hardcopy`, `book_price_pdf`, `book_price_cd`, `book_image`) VALUES
(6, 'A Gentleman In Moscow', 'Amor Towels', 'Amor Towles is the author of the New York Times bestsellers Rules of Civility and A Gentleman in Moscow. The two novels have collectively sold more than four million copies and have been translated into more than thirty languages. Towles lives in Manhattan with his wife and two children.', 'Windmill Books', '2017-11-02', 100, 480, 5, 'PDF/CD/Book', 'n 21 June 1922, Count Alexander Rostov - recipient of the Order of Saint Andrew, member of the Jockey Club, Master of the Hunt - is escorted out of the Kremlin, across Red Square and through the elegant revolving doors of the Hotel Metropol.\r\n\r\nDeemed an unrepentant aristocrat by a Bolshevik tribunal, the Count has been sentenced to house arrest indefinitely. But instead of his usual suite, he must now live in an attic room while Russia undergoes decades of tumultuous upheaval.', 6, 7, 8, 2095, 1100, 1400, '../apis/book_image/62e936ab48b36A Gentleman in Moscow.jpg'),
(7, 'Love', 'Amor Zusak', 'dwad', 'Windmill Books', '2018-08-09', 144, 654, 2, 'PDF/CD/Book', 'daw', 9, 10, 7, 23, 432, 432, '../apis/book_image/62ea78d6ece51book-9.png'),
(8, 'Thanks', 'Zuskak Towels', 'kwtq', 'Windmill Books', '2002-08-09', 871, 534, 5, 'PDF/CD/Book', 'age', 8, 9, 10, 300, 180, 225, '../apis/book_image/62ea79661356abook5.png'),
(9, 'The Art City', 'Markus Towels', 'kudywq', 'Windmill Books', '1988-08-06', 766, 869, 4, 'PDF/CD/Book', 'jdfs', 7, 6, 10, 300, 180, 225, '../apis/book_image/62ea7c2e88213book-1.png'),
(10, 'Story Of Liberty', 'Amor Markus', 'afaf', 'E-Books', '1987-05-07', 767, 865, 5, 'PDF/CD/Book', 'da', 8, 9, 10, 300, 180, 225, '../apis/book_image/62ea7c899484cbook-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_contact`
--

CREATE TABLE `tbl_user_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(25) NOT NULL,
  `contact_email` varchar(25) NOT NULL,
  `contact_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_contact`
--

INSERT INTO `tbl_user_contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'Umar', 'umar@gmail.com', 'Do You Have a book related Marvel\r\n'),
(2, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'hello world'),
(3, 'Ayaan Faisal', 'ayan@gmail.com', 'Hello My Friends'),
(4, 'Ammar ', 'daiqfihqiuhf@uhfigig', 'hdhgsuhsliufhesui'),
(5, 'bvgftftft', 'gftruycruycyrut@jftft', 'hguyruurtf6ur tu6 rfiu6 uietfgkyr i67'),
(6, 'Imran', 'ABC@CBC.COM', 'tEST MESSAGE'),
(7, 'Imran', 'i.emranhafeez@gmail.com', 'helo world'),
(8, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'AoA PLZ TELL ME WHICH TIME YOU UPLOAD MORE BOOKS ');

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
  `user_subscribtion` varchar(25) NOT NULL,
  `user_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_data`
--

INSERT INTO `tbl_user_data` (`user_id`, `user_name`, `user_email`, `user_address`, `user_phone`, `user_image`, `user_subscribtion`, `user_password`) VALUES
(1, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'House no D-18 Shah Faisal Town Malir Halt Karachi', 28374987, '../apis/profileImage/62da93457be0dAmmar.jpg', '3 Year', 'ammaransari5544'),
(2, 'Ayan', 'ayan@gmail.com', 'ashfiuaufheiufha', 783561875, '../apis/profileImage/62daa20c215fbblog-1.jpg', 'Annual', '123456'),
(3, 'Umar Abdul Wahid', 'umarwahiid48@gmail.com', 'fkhsahfuiashufha', 4563279, '../apis/profileImage/62dae42cd262dblog-4.jpg', 'Monthly', '1234'),
(4, 'Imran Hafeez', 'i.emranhafeez@gmail.com', 'hsaguoaghuqy', 2147483647, 'image', 'No', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reviews`
--

CREATE TABLE `tbl_user_reviews` (
  `review_id` int(11) NOT NULL,
  `review_name` varchar(25) NOT NULL,
  `review_email` varchar(25) NOT NULL,
  `review_stars` varchar(25) NOT NULL,
  `review_description` varchar(1000) NOT NULL,
  `review_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_reviews`
--

INSERT INTO `tbl_user_reviews` (`review_id`, `review_name`, `review_email`, `review_stars`, `review_description`, `review_image`) VALUES
(1, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'Its Really Awsome', ''),
(2, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'Its Really Awsome', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(3, 'Ammar Ansari', 'ammaransari7016@gmail.com', '4-Stars', 'Its Great I really Satisfied', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(4, 'Ammar Ansari', 'ammaransari7016@gmail.com', '4-Stars', 'Its Great I really Satisfied', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(5, 'Ammar Ansari', 'ammaransari7016@gmail.com', '4-Stars', 'Its Great I really Satisfied', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(6, '', '', '4-Stars', 'Its Great I really Satisfied', ''),
(7, '', '', '4-Stars', 'Its Great I really Satisfied', ''),
(8, '', '', '4-Stars', 'Its Great I really Satisfied', ''),
(9, '', '', '4-Stars', 'Its Great I really Satisfied', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_book_detail`
--
ALTER TABLE `tbl_book_detail`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_category_1` (`book_category_1`),
  ADD KEY `book_category_2` (`book_category_2`),
  ADD KEY `book_category_3` (`book_category_3`);

--
-- Indexes for table `tbl_user_contact`
--
ALTER TABLE `tbl_user_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_reviews`
--
ALTER TABLE `tbl_user_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_book_detail`
--
ALTER TABLE `tbl_book_detail`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user_contact`
--
ALTER TABLE `tbl_user_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_reviews`
--
ALTER TABLE `tbl_user_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book_detail`
--
ALTER TABLE `tbl_book_detail`
  ADD CONSTRAINT `tbl_book_detail_ibfk_1` FOREIGN KEY (`book_category_1`) REFERENCES `tbl_book_category` (`b_id`),
  ADD CONSTRAINT `tbl_book_detail_ibfk_2` FOREIGN KEY (`book_category_2`) REFERENCES `tbl_book_category` (`b_id`),
  ADD CONSTRAINT `tbl_book_detail_ibfk_3` FOREIGN KEY (`book_category_3`) REFERENCES `tbl_book_category` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
