-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 04:57 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinura`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `type` varchar(50) NOT NULL,
  `qid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `que` text NOT NULL,
  `option1` varchar(250) NOT NULL,
  `option2` varchar(250) NOT NULL,
  `option3` varchar(250) NOT NULL,
  `img_link` varchar(50) NOT NULL,
  `ans` varchar(250) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`type`, `qid`, `id`, `que`, `option1`, `option2`, `option3`, `img_link`, `ans`, `userans`) VALUES
('Sports', 1, 1, 'Do you click on any promotional advertisement click?', 'Yes', 'No', 'May be', 'Sports/1.jpg', '', ''),
('Sports', 2, 2, 'Have you visited a gambling site?', 'Yes', 'No', 'May be', 'Sports/2.jpg', '', ''),
('Sports', 3, 3, 'Do you ever saw any pop-ups related prize winning?', 'Yes', 'No', 'May be', 'Sports/3.jpg', '', ''),
('Science', 4, 1, 'Have you filled any contact information requested forms?', 'Yes', 'No', 'May be', 'Science/1.jpg', '', ''),
('Science', 5, 2, 'Have you downloaded any files?', 'Yes', 'No', 'May be', 'Science/2.jpg', '', ''),
('Science', 6, 3, 'Have you redirected to any other unrelated web sites?', 'Yes', 'No', 'May be', 'Science/3.jpg', '', ''),
('Education', 7, 1, 'Have you filled any forms?', 'Yes', 'No', 'May be', 'Education/1.jpg', '', ''),
('Education', 8, 2, 'Did you enroll for educational courses by making payment with your details?', 'Yes', 'No', 'May be', 'Education/2.jpg', '', ''),
('Education', 9, 3, 'Did you create any new accounts on online educational platforms?', 'Yes', 'No', 'May be', 'Education/3.jpg', '', ''),
('Computer', 10, 1, 'Do you try to download any free software?', 'Yes', 'No', 'May be', 'Computer/1.jpg', '', ''),
('Computer', 11, 2, 'Did you download any large zip files?', 'Yes', 'No', 'May be', 'Computer/2.jpg', '', ''),
('Computer', 12, 3, 'Have you used torrent sites ?', 'Yes', 'No', 'May be', 'Computer/3.jpg', '', ''),
('Commercial', 13, 1, 'Did you make any online purchases?', 'Yes', 'No', 'May be', 'Commercial/1.jpg', '', ''),
('Commercial', 14, 2, 'Have you saved your card details?', 'Yes', 'No', 'May be', 'Commercial/2.jpg', '', ''),
('Commercial', 15, 3, 'Do you make any online payments by providing your card details?', 'Yes', 'No', 'May be', 'Commercial/3.jpg', '', ''),
('Adult', 16, 1, 'Did you try any package purchases?', 'Yes', 'No', 'May be', 'Adult/1.jpg', '', ''),
('Adult', 17, 2, 'Did you click on any pop-up advertisements?', 'Yes', 'No', 'May be', 'Adult/2.jpg', '', ''),
('Adult', 18, 3, 'Did you try to download any content?', 'Yes', 'No', 'May be', 'Adult/3.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `url_data`
--

CREATE TABLE `url_data` (
  `pid` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url_data`
--

INSERT INTO `url_data` (`pid`, `url`) VALUES
(1, 'https://www.bbc.com/sport'),
(2, 'https://www.skysports.com/'),
(3, 'https://www.livescience.com/61995-best-science-websites.html'),
(4, 'https://www.education.com/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `File` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `File`, `Last_Name`, `First_Name`) VALUES
(1, 'dasunl2009@gmail.com', '$2y$10$BplCuwsZ5s3sCX/1rYWTGeO8gzDnIB.4qBfYsd6L4Bh', '', '', ''),
(2, 'dasun@gmail.com', 'aa', 'Vihan.pdf', 'Liyanaarachchi', 'Dasun'),
(3, 'kavinduliyo@gmail.com', 'aa', '', 'Liyanaarachchi', 'Kavindu'),
(4, 'admin@gmail.com', 'aa', '', 'admin', 'admin'),
(5, 'k@gmail.com', 'aa', '', 'k', 'k'),
(6, 'test123@gmail.com', 'dasun', '', 'testingl', 'testingf');

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `category_1` varchar(50) NOT NULL,
  `category_2` varchar(50) NOT NULL,
  `category_3` varchar(50) NOT NULL,
  `cat1_ans1` varchar(50) NOT NULL,
  `cat1_ans2` varchar(50) NOT NULL,
  `cat1_ans3` varchar(50) NOT NULL,
  `cat2_ans1` varchar(50) NOT NULL,
  `cat2_ans2` varchar(50) NOT NULL,
  `cat2_ans3` varchar(50) NOT NULL,
  `cat3_ans1` varchar(50) NOT NULL,
  `cat3_ans2` varchar(50) NOT NULL,
  `cat3_ans3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_result`
--

INSERT INTO `user_result` (`r_id`, `u_id`, `name`, `date`, `category_1`, `category_2`, `category_3`, `cat1_ans1`, `cat1_ans2`, `cat1_ans3`, `cat2_ans1`, `cat2_ans2`, `cat2_ans3`, `cat3_ans1`, `cat3_ans2`, `cat3_ans3`) VALUES
(5, 2, 'Dasun', '2021-10-12', 'Education', 'Adult', 'Sports', 'No', 'No', 'No', 'May be', 'May be', 'May be', 'Yes', 'Yes', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `url_data`
--
ALTER TABLE `url_data`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_result`
--
ALTER TABLE `user_result`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `url_data`
--
ALTER TABLE `url_data`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_result`
--
ALTER TABLE `user_result`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
