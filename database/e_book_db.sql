-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 10:42 AM
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
-- Table structure for table `tbl_book_cart`
--

CREATE TABLE `tbl_book_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_name` varchar(25) NOT NULL,
  `cart_price` varchar(25) NOT NULL,
  `cart_quantity` varchar(50) NOT NULL,
  `cart_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10, 'Journals'),
(11, 'Best Sellers');

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
(15, 'The Book Thief', 'Markus Zusak', 'awdada', 'Windmill Books', '2017-09-08', 456, 624, 5, 'PDF/CD/Book', 'afa', 6, 11, 7, 1700, 1000, 1300, '../apis/book_image/62f37d5930692The Book Thief.png'),
(16, 'Love', 'Zuskak Towels', 'vseat', 'E-Books', '2006-09-07', 877, 567, 5, 'PDF/CD/Book', 'bfg', 11, 7, 8, 300, 180, 225, '../apis/book_image/62f37bfea18a2book-9.png'),
(17, 'Retro', 'Zuskak Towels', 'awf', 'E-Books', '2018-04-08', 567, 654, 5, 'PDF/CD/Book', 'xWD', 8, 11, 7, 300, 180, 225, '../apis/book_image/62f37c4e31a2abook-10.png'),
(18, 'A Gentleman In Moscow', 'Amor Towels', 'st', 'Windmill Books', '2016-09-08', 100, 480, 5, 'PDF/CD/Book', 'dsts', 9, 11, 10, 300, 180, 225, '../apis/book_image/62f37ca1df8e0A Gentleman in Moscow.png'),
(19, 'Story Of Liberty', 'Amor Markus', 'vawf', 'Windmill Books', '2004-06-07', 464, 657, 3, 'PDF/CD/Book', 'afwr', 11, 9, 10, 300, 180, 225, '../apis/book_image/62f37ce4b025dbook-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_order`
--

CREATE TABLE `tbl_book_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_number` int(11) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `order_method` varchar(50) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'House no D-18 Shah Faisal Town Malir Halt Karachi', 28374987, '../apis/profileImage/62da93457be0dAmmar.jpg', '2 Year', 'ammaransari5544'),
(2, 'Ayan', 'ayan@gmail.com', 'ashfiuaufheiufha', 783561875, '../apis/profileImage/62daa20c215fbblog-1.jpg', 'Annual', '123456'),
(3, 'Umar Abdul Wahid', 'umarwahiid48@gmail.com', 'fkhsahfuiashufha', 4563279, '../apis/profileImage/62dae42cd262dblog-4.jpg', 'Monthly', '1234'),
(4, 'Imran Hafeez', 'i.emranhafeez@gmail.com', 'hsaguoaghuqy', 2147483647, 'image', 'No', '1234'),
(5, 'Shapatar', 'shapatar@lallu.co', 'uhb76', 967, 'image', 'No', '1234'),
(6, 'Maaz ', 'maaz@gmail.com', 'sfiuahfiuhfiuqh', 898979, 'fas fa-user', 'No', '1234'),
(7, 'Ammar', 'ammar@gmail.com', 'House No. D-18 Shah Faisal Town Malir Halt Karachi Near Cafe Bajwa ', 2147483647, 'image', 'No', '00f1dfa98dcf9459d6309552a'),
(8, 'Umar', 'umar@gmail.com', 'jilsjte', 523, 'image', 'No', '81dc9bdb52d04dc20036dbd83'),
(9, 'Ayan', 'ayan65@gmail.com', 'sfet', 7356, 'image', 'No', 'e10adc3949ba59abbe56e057f');

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
  `review_approvel` varchar(25) NOT NULL,
  `review_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_reviews`
--

INSERT INTO `tbl_user_reviews` (`review_id`, `review_name`, `review_email`, `review_stars`, `review_description`, `review_approvel`, `review_image`) VALUES
(3, 'Ammar Ansari', 'ammaransari7016@gmail.com', '4-Stars', 'Its Great I really Satisfied', 'Yes', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(12, 'Ammar Ansari', 'ammaransari7016@gmail.com', '3-Stars', 'Its Sweat but Plz Increase The Website Features ', 'Yes', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(13, 'Ayan', 'ayan@gmail.com', '5-Stars', 'NICE EXPERIENCE KEEP IT UP', 'Yes', '../apis/profileImage/62daa20c215fbblog-1.jpg'),
(14, 'Umar Abdul Wahid', 'umarwahiid48@gmail.com', '3-Stars', 'Awsome But Need Improvment', 'Yes', '../apis/profileImage/62dae42cd262dblog-4.jpg'),
(15, 'Shapatar', 'shapatar@lallu.co', '1-Star', 'Ek Dum Tatti Maal Haii Website Bhe Tatti Maal BHe Tatti', '', 'image'),
(20, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'rasha rasha', '', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(21, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'rasha rasha', 'Yes', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(22, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'Dagha', 'No', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(23, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'Dagha', 'No', '../apis/profileImage/62da93457be0dAmmar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_cart`
--
ALTER TABLE `tbl_book_cart`
  ADD PRIMARY KEY (`cart_id`);

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
-- Indexes for table `tbl_book_order`
--
ALTER TABLE `tbl_book_order`
  ADD PRIMARY KEY (`order_id`);

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
-- AUTO_INCREMENT for table `tbl_book_cart`
--
ALTER TABLE `tbl_book_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_book_detail`
--
ALTER TABLE `tbl_book_detail`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_book_order`
--
ALTER TABLE `tbl_book_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_contact`
--
ALTER TABLE `tbl_user_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user_reviews`
--
ALTER TABLE `tbl_user_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
