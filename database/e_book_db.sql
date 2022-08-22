-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 08:37 AM
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
(10, 'Journals'),
(11, 'Best Sellers'),
(13, 'General Knowledge');

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
(16, 'Love', 'Zuskak Towels', 'vseat', 'E-Books', '2006-09-07', 877, 567, 5, 'PDF/CD/Book', 'bfg', 11, 7, 8, 300, 180, 225, '../apis/book_image/62f37bfea18a2book-9.png'),
(17, 'Retro', 'Zuskak Towels', 'awf', 'E-Books', '2018-04-08', 567, 654, 5, 'PDF/CD/Book', 'xWD', 8, 11, 7, 300, 180, 225, '../apis/book_image/62f37c4e31a2abook-10.png'),
(19, 'Story Of Liberty', 'Amor Markus', 'vawf', 'Windmill Books', '2004-06-07', 464, 657, 3, 'PDF/CD/Book', 'afwr', 11, 9, 10, 300, 180, 225, '../apis/book_image/62f37ce4b025dbook-5.png'),
(20, 'The Snow Merchant', 'Sam Gayton', 'Sam Gayton received a master?s degree in Writing for Young People at Bath Spa University. Lilliput was his first book to be published in the U. S. He lives in England. ', 'E-Books', '2006-06-08', 657, 453, 2, 'PDF/CD/Book', 'Lettie Peppercorn lives in a house on stilts near the wind-swept coast of Albion, with no one to talk to but Periwinkle the pigeon. Her days are filled with floor-sweeping, bed-making and soup-stirring. Her dreams are filled with memories of her mother, who vanished long ago. Nothing incredible has ever happened to Lettie, until one winter’s night.', 7, 8, 11, 1500, 650, 1200, '../apis/book_image/62fe2c81318fdThe Snow Merchant.png'),
(21, 'The Book Thief', 'Markus Zusak', 'Markus Zusak is an Australian writer with Austrian and German roots. He is best known for The Book Thief and The Messenger, two novels which became international bestsellers. He won the Margaret A. Edwards Award in 2014.', 'E-Books', '2016-08-09', 878, 624, 3, 'PDF/CD/Book', 'It is 1939. In Nazi Germany, the country is holding its breath. Death has never been busier - and will become busier still.\r\nBy her brother\'s graveside, Liesel\'s life is changed forever when she picks up a single object, abandoned in the snow. It is The Gravedigger\'s Handbook, and this is her first act of book thievery. So begins Liesel\'s love affair with books and words, and soon she is stealing from Nazi book-burnings, the mayor\'s wife\'s library wherever there are books to be found.', 7, 8, 11, 1950, 790, 1400, '../apis/book_image/62fe2d178fba6The Book Thief.png'),
(22, 'A Gentleman In Moscow', 'Amor Towels', 'Amor Towles is an American novelist. He is best known for his bestselling novels Rules of Civility, A Gentleman in Moscow, and The Lincoln Highway.', 'Windmill Books', '2017-08-07', 100, 480, 5, 'PDF/CD/Book', 'On 21 June 1922, Count Alexander Rostov - recipient of the Order of Saint Andrew, member of the Jockey Club, Master of the Hunt - is escorted out of the Kremlin, across Red Square and through the elegant revolving doors of the Hotel Metropol.\r\n\r\nDeemed an unrepentant aristocrat by a Bolshevik tribunal, the Count has been sentenced to house arrest indefinitely. But instead of his usual suite, he must now live in an attic room while Russia undergoes decades of tumultuous upheaval.\r\nBook Author About : Amor Towles is an American novelist. He is best known for his bestselling novels Rules of Civility, A Gentleman in Moscow, and The Lincoln Highway.', 8, 7, 11, 1700, 180, 900, '../apis/book_image/62fe2d90408d2A Gentleman in Moscow.png'),
(23, 'The Bastrad Of Istanbol.', 'Elif Shafak', 'Elif Shafak is a Turkish-British novelist, essayist, public speaker, political scientist and activist. Shafak writes in Turkish and English, and has published 19 works.', 'E-Books', '2000-05-06', 879, 678, 4, 'PDF/CD/Book', 'Twenty years later, Asya Kazanci lives with her extended family in Istanbul. Due to a mysterious family curse, all the Kaznci men die in their early forties, so it is a house of women, among them Asya\'s beautiful, rebellious mother Zeliha, who runs a tattoo parlour; Banu, who has newly discovered herself as clairvoyant; and Feride, a hypochondriac obsessed with impending disaster. And when Asya\'s Armenian-American cousin Armanoush comes to stay, long hidden family secrets connected with Turkey\'s turbulent past begin to emerge. \'Wonderfully magical, incredible, breathtaking...will have you gasping with disbelief in the last few pages\' Sunday Express \'A beautiful book, the finest I have read about Turkey\' Irish Times \'Heartbreaking...the beauty of Islam pervades Shafak\'s book\' Vogue.', 7, 8, 11, 3500, 2500, 3000, '../apis/book_image/62fe2e0286bdbThe Bastard of Istanbol.png'),
(24, 'The Forty Rules Of Love.', 'Elif Shafak', 'Elif Shafak is a Turkish-British novelist, essayist, public speaker, political scientist and activist. Shafak writes in Turkish and English, and has published 19 works.', 'E-Books', '2015-06-17', 876, 654, 2, 'PDF/CD/Book', 'About 544,000,000 results (0.58 seconds) \r\nThe Forty Rules of Love is a 2009 novel by Elif Shafak. The book tells the story of Ella Rubinstein, a woman in her late thirties who has settled into the complacency of her life. She exists without drive or passion. The narrative follows her unlikely escape from what at first appears to be inevitable unhappiness.', 7, 8, 11, 300, 180, 225, '../apis/book_image/62fe2e6c1488eforty rule of love.png'),
(25, 'The Sandman', 'Neil Gaiman', 'Neil Richard MacKinnon Gaiman is an English author of short fiction, novels, comic books, graphic novels, nonfiction, audio theatre, and films. His works include the comic book series The Sandman and novels Stardust, American Gods, Coraline, and The Graveyard Book.', 'Windmill Books', '2018-05-09', 867, 746, 5, 'PDF/CD/Book', 'Preludes & Nocturnes is the first trade paperback collection of the comic book series The Sandman, published by the DC Comics imprint Vertigo. It collects issues. It is written by Neil Gaiman, illustrated by Sam Kieth, Mike Dringenberg and Malcolm Jones III, colored by Robbie Busch and lettered by Todd Klein.', 6, 6, 11, 965, 764, 756, '../apis/book_image/63031ec15bac5Sand Man.png'),
(26, 'Wolverine', 'Mark Millar', 'Mark Millar MBE is a Scottish comic book writer who first came to prominence with a run on the superhero series The Authority, published by DC Comics Wildstorm imprint.', 'Windmill Books', '2019-04-18', 765, 567, 4, 'PDF/CD/Book', 'Fifty years in the future, America is a wasteland ruled by despotic super villain fiefdoms. Since our heroes fell, what happened to Wolverine has remained a mystery in his place stands an old man, named Logan. ', 6, 6, 11, 987, 568, 876, '../apis/book_image/63031f41d8d93Wolverine.png'),
(27, 'King In Black', 'Gerry Duggan', 'Gerry Duggan is an American comics writer, director and photographer living in Los Angeles.\r\n', 'Windmill Books', '2000-04-11', 865, 467, 3, 'PDF/CD/Book', 'Collects Savage Avengers (2019). Conan is imprisoned on Rykers Island but he promptly breaks out with the help of Deadpool! The taciturn barbarian and the Merc with a Mouth make for a very odd couple in the battle against the King in Black and his symbiote hordes!', 6, 6, 11, 654, 456, 543, '../apis/book_image/63031fd59c623King in Black.png'),
(28, 'Cat Kid Comic Club On Purpose', 'Dav Pilkey', 'David Dav Murray Pilkey Jr. is an American cartoonist, author, and illustrator of childrens literature. He is best known as the author and illustrator of the childrens book series, Captain Underpants, and the childrens graphic novel series, Dog Man.', 'Windmill Books', '1999-05-31', 543, 234, 2, 'PDF/CD/Book', 'The Cat Kid Comic Club is deep in discovery in the newest graphic novel in the hilarious and heartwarming worldwide bestselling series by Dav Pilkey, the author and illustrator of Dog Man.The comic club is going in all different directions! Naomi, Melvin, and siblings are each trying to find their purpose.', 6, 6, 11, 543, 321, 432, '../apis/book_image/630320693322cCat Kid Comic Club on Purpose.png'),
(29, 'Thinking, Fast and Slow', 'Daniel Kahneman', 'Daniel Kahneman is an Israeli-American psychologist and economist notable for his work on the psychology of judgment and decision-making, as well as behavioral economics, for which he was awarded the 2002 Nobel Memorial Prize in Economic Sciences.', 'E-Books', '2011-10-25', 634, 499, 3, 'PDF/CD/Book', 'Thinking, Fast and Slow is a 2011 book by psychologist Daniel Kahneman. The books main thesis is that of a dichotomy between two modes of thought System 1 is fast, instinctive and emotional System 2 is slower, more deliberative, and more logical.', 13, 13, 11, 1978, 744, 1000, '../apis/book_image/6303213e71578Think, Fast And Slow.png'),
(30, 'An Incomplete Education', 'William Wilson', 'William Wilson is a short story by American writer Edgar Allan Poe, first published in 1839, with a setting inspired by Poes formative years on the outskirts of London. The tale features a doppelgänger. It also appeared in the 1840 collection Tales of the Grotesque and Arabesque, and has been adapted several times.', 'E-Books', '1988-07-18', 765, 678, 3, 'PDF/CD/Book', 'Preludes & Nocturnes is the first trade paperback collection of the comic book series The Sandman, published by the DC Comics imprint Vertigo. It collects issues. It is written by Neil Gaiman, illustrated by Sam Kieth, Mike Dringenberg and Malcolm Jones III, colored by Robbie Busch and lettered by Todd Klein.', 13, 13, 11, 2500, 1000, 1900, '../apis/book_image/6303220c565bbAn Incomplete Education.png'),
(31, 'A History of the World in 100 ', 'Neil MacGregor', 'Robert Neil MacGregor OM AO FSA is a British art historian and former museum director. He was editor of the Burlington Magazine from 1981 to 1987, then Director of the National Gallery, London.', 'E-Books', '2002-06-07', 658, 623, 5, 'PDF/CD/Book', 'Collects Savage Avengers (2019). Conan is imprisoned on Rykers Island but he promptly breaks out with the help of Deadpool! The taciturn barbarian and the Merc with a Mouth make for a very odd couple in the battle against the King in Black and his symbiote hordes!', 13, 13, 11, 3000, 2100, 2500, '../apis/book_image/630323286dc6aA Story Of World In 100 Objects.png'),
(32, 'Sapiens', 'Yuval Noah Harari', 'Yuval Noah Harari is an Israeli public intellectual, historian, and professor in the Department of History at the Hebrew University of Jerusalem. He is the author of the popular science bestsellers Sapiens: A Brief History of Humankind, Homo Deus: A Brief History of Tomorrow, and 21 Lessons for the 21st Century.', 'Windmill Books', '2015-06-07', 653, 876, 2, 'PDF/CD/Book', 'The Marvel Universe collides with video game phenomenon Fortnite! The inhabitants of the Island are locked in a neverending war, and only one thing has the potential to turn the tide a crystallized fragment of the Zero Point that was cast into the Marvel Universe!', 13, 13, 11, 4500, 3900, 4000, '../apis/book_image/630323fb853f2Sapiens.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_order`
--

CREATE TABLE `tbl_book_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_number` varchar(25) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `order_method` varchar(50) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_order`
--

INSERT INTO `tbl_book_order` (`order_id`, `user_id`, `user_name`, `user_number`, `user_email`, `order_method`, `user_address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(2, 1, 'Ammar Ansari', '5646547', 'ammaransari7016@gmail.com', 'easypaisa', 'House No. D-18 Shah Faisal Town Malir Halt karachi Near Cafe Bajwa', ', Love (3) , The Forty Rules Of Love. (1) , The Snow Merchant (1) ', 2325, '18-Aug-2022', 'completed'),
(4, 1, 'Ammar Ansari', '2147483647', 'ammaransari7016@gmail.com', 'credit card/debit card', 'House No. D-18 Shah Faisal Town Malir Halt karachi Near Cafe Bajwa', ', Love (3) , The Forty Rules Of Love. (1) , The Snow Merchant (3) , Story Of Liberty (1) , A Gentleman In Moscow (2) ', 6025, '18-Aug-2022', 'In Process'),
(5, 1, 'Ammar Ansari', '2147483647', 'ammaransari7016@gmail.com', 'jazzcash', 'House No. D-18 Shah Faisal Town Malir Halt karachi Near Cafe Bajwa', ', Love (4) , The Forty Rules Of Love. (1) , The Snow Merchant (5) , Story Of Liberty (2) , A Gentleman In Moscow (2) , The Book Thief (3) ', 13750, '18-Aug-2022', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_book_id` int(11) NOT NULL,
  `cart_book_name` varchar(50) NOT NULL,
  `cart_book_image` varchar(1000) NOT NULL,
  `cart_book_price` int(11) NOT NULL,
  `cart_pdf_price` int(11) NOT NULL,
  `cart_cd_price` int(11) NOT NULL,
  `cart_final_price` int(11) NOT NULL,
  `cart_book_quantity` int(11) NOT NULL,
  `cart_book_form` varchar(25) NOT NULL,
  `cart_form_price` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_user_id`, `cart_book_id`, `cart_book_name`, `cart_book_image`, `cart_book_price`, `cart_pdf_price`, `cart_cd_price`, `cart_final_price`, `cart_book_quantity`, `cart_book_form`, `cart_form_price`, `cart_status`) VALUES
(4, 10, 15, 'The Book Thief', '../apis/book_image/62f37d5930692The Book Thief.png', 1700, 0, 0, 0, 1, '0', 0, 0),
(6, 1, 16, 'Love', '../apis/book_image/62f37bfea18a2book-9.png', 300, 180, 225, 900, 4, 'CD', 225, 0),
(7, 1, 24, 'The Forty Rules Of Love.', '../apis/book_image/62fe2e6c1488eforty rule of love.png', 300, 180, 225, 300, 1, 'Hard Copy', 300, 0),
(8, 1, 20, 'The Snow Merchant', '../apis/book_image/62fe2c81318fdThe Snow Merchant.png', 1500, 650, 1200, 0, 5, 'CD', 0, 0),
(9, 1, 19, 'Story Of Liberty', '../apis/book_image/62f37ce4b025dbook-5.png', 300, 180, 225, 300, 2, 'Hard Copy', 300, 0),
(10, 1, 22, 'A Gentleman In Moscow', '../apis/book_image/62fe2d90408d2A Gentleman in Moscow.png', 1700, 180, 900, 1700, 2, 'Hard Copy', 1700, 0),
(11, 1, 21, 'The Book Thief', '../apis/book_image/62fe2d178fba6The Book Thief.png', 1950, 790, 1400, 1950, 3, 'Hard Copy', 1950, 0),
(12, 1, 23, 'The Bastrad Of Istanbol.', '../apis/book_image/62fe2e0286bdbThe Bastard of Istanbol.png', 3500, 2500, 3000, 3500, 1, 'Hard Copy', 3500, 0);

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
(8, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'AoA PLZ TELL ME WHICH TIME YOU UPLOAD MORE BOOKS '),
(9, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'plz us provide us more books');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_data`
--

CREATE TABLE `tbl_user_data` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
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

INSERT INTO `tbl_user_data` (`user_id`, `role_id`, `user_name`, `user_email`, `user_address`, `user_phone`, `user_image`, `user_subscribtion`, `user_password`) VALUES
(1, 0, 'Ammar Ansari', 'ammaransari7016@gmail.com', 'House no D-18 Shah Faisal Town Malir Halt Karachi', 28374987, '../apis/profileImage/62da93457be0dAmmar.jpg', '3 Year', 'ammaransari5544'),
(2, 0, 'Ayan', 'ayan@gmail.com', 'ashfiuaufheiufha', 783561875, '../apis/profileImage/62daa20c215fbblog-1.jpg', 'Annual', '123456'),
(3, 0, 'Umar Abdul Wahid', 'umarwahiid48@gmail.com', 'fkhsahfuiashufha', 4563279, '../apis/profileImage/62dae42cd262dblog-4.jpg', 'Monthly', '1234'),
(4, 0, 'Imran Hafeez', 'i.emranhafeez@gmail.com', 'hsaguoaghuqy', 2147483647, 'image', 'No', '1234'),
(5, 0, 'Shapatar', 'shapatar@lallu.co', 'uhb76', 967, 'image', 'No', '1234'),
(6, 0, 'Maaz ', 'maaz@gmail.com', 'sfiuahfiuhfiuqh', 898979, 'fas fa-user', 'No', '1234'),
(7, 0, 'Ammar', 'ammar@gmail.com', 'House No. D-18 Shah Faisal Town Malir Halt Karachi Near Cafe Bajwa ', 2147483647, 'image', 'No', '00f1dfa98dcf9459d6309552a'),
(8, 0, 'Umar', 'umar@gmail.com', 'jilsjte', 523, 'image', 'No', '81dc9bdb52d04dc20036dbd83'),
(9, 0, 'Ayan', 'ayan65@gmail.com', 'sfet', 7356, 'image', 'No', 'e10adc3949ba59abbe56e057f'),
(10, 2, 'Admin', 'admin@admin.com', 'sjagfywf', 7646, 'image', 'No', 'admin123');

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
(20, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'rasha rasha', '', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(21, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'rasha rasha', 'Yes', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(22, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'Dagha', 'Yes', '../apis/profileImage/62da93457be0dAmmar.jpg'),
(23, 'Ammar Ansari', 'ammaransari7016@gmail.com', '5-Stars', 'Dagha', 'No', '../apis/profileImage/62da93457be0dAmmar.jpg');

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
-- Indexes for table `tbl_book_order`
--
ALTER TABLE `tbl_book_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

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
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_book_detail`
--
ALTER TABLE `tbl_book_detail`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_book_order`
--
ALTER TABLE `tbl_book_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user_contact`
--
ALTER TABLE `tbl_user_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
