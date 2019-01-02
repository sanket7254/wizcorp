-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 01:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wizcorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_franchiese`
--

CREATE TABLE `add_franchiese` (
  `id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `fcontact` varchar(10) NOT NULL,
  `femail` varchar(255) NOT NULL,
  `contact_per` varchar(255) NOT NULL,
  `per_con` varchar(10) NOT NULL,
  `per_email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `locality` varchar(150) NOT NULL,
  `fran_img` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `franchiese_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_franchiese`
--

INSERT INTO `add_franchiese` (`id`, `user_id`, `fname`, `fcontact`, `femail`, `contact_per`, `per_con`, `per_email`, `address`, `locality`, `fran_img`, `uname`, `password`, `franchiese_code`) VALUES
(6, 8, 'abc', '8983134981', 'sanket@gmail.com', 'sanket', '8208301116', 'sanketchidrawar@gmail.com', '<p>asdtdhnerwe</p>\r\n', 'pune', '5756c5966cde0_thumb9001.jpg', 'Sanket', '12345', 'WPL/2004/01/6');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Admin_id` int(10) NOT NULL,
  `Admin_fname` varchar(255) NOT NULL,
  `Admin_lname` varchar(255) NOT NULL,
  `Admin_email` varchar(255) NOT NULL,
  `Admin_cont` varchar(10) NOT NULL,
  `Admin_address` varchar(255) NOT NULL,
  `divide` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `admin_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`Admin_id`, `Admin_fname`, `Admin_lname`, `Admin_email`, `Admin_cont`, `Admin_address`, `divide`, `uname`, `password`, `user_id`, `admin_img`) VALUES
(1, 'praful', 'patil', 'praful.patil@wiz-corp.in', '7020715363', 'Nakshatra i-land ,alandi,moshi road,moshi,pune', 'admin', 'praful', 'patil', 1, 'dummy.png');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `franchise_id` int(20) NOT NULL,
  `commission` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`id`, `student_id`, `franchise_id`, `commission`) VALUES
(1, 1, 8, '3000'),
(2, 2, 8, '3000');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_fees` varchar(255) NOT NULL,
  `commission` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `course_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_fees`, `commission`, `user_id`, `course_details`) VALUES
(1, 'Highe Level Course', '25600', '3000', 1, '<p>ertge</p>\r\n'),
(2, 'Mid-Brain Adults & Kids', '25600', '35625', 8, 'cfgh'),
(3, 'abcd', '5678', '5678', 8, '567'),
(4, 'abcd', '5678', '5678', 8, '567');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_desc`
--

CREATE TABLE `gallery_desc` (
  `title_id` int(10) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_desc` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `site_name`, `contact`, `address`, `email`, `facebook_link`, `twitter_link`, `linked_link`) VALUES
(1, 'Wizcorp', '8983134981', 'dtgsert', 'sanketchidrawar@gmail.com', 'www.facebook.com/sank842', 'www.twitter.com', 'www.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_desc` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `news_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_gallery`
--

CREATE TABLE `new_gallery` (
  `img_id` int(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `title_id` int(10) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `fee_detail` varchar(20) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `course_fee` varchar(20) NOT NULL,
  `paid_fee` varchar(20) NOT NULL,
  `remaining_fee` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `cheaque_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `fee_detail`, `course_id`, `course_fee`, `paid_fee`, `remaining_fee`, `payment_type`, `transaction_id`, `cheaque_no`) VALUES
(1, 1, 'Unpaid', '1', '25600', '', '25600', '', '', ''),
(2, 2, 'Unpaid', '1', '25600', '', '25600', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `franchise_code` varchar(20) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `school` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `ccactivity` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `ffname` varchar(20) NOT NULL,
  `fmname` varchar(20) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `fmnumber` varchar(100) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `paid_fee` varchar(255) NOT NULL,
  `remaining_fee` varchar(255) NOT NULL,
  `feedetails` varchar(100) NOT NULL,
  `paymenttype` varchar(50) NOT NULL,
  `transaction_id` varchar(20) NOT NULL,
  `cheaque_no` varchar(20) NOT NULL,
  `ageproof` varchar(20) NOT NULL,
  `ageproofno` varchar(255) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `idproofno` varchar(255) NOT NULL,
  `ppimage` varchar(255) NOT NULL,
  `check_box` varchar(5) NOT NULL,
  `medical_issue` text,
  `batch_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `franchise_code`, `firstname`, `middlename`, `lastname`, `dob`, `gender`, `registration_date`, `school`, `grade`, `ccactivity`, `location`, `ffname`, `fmname`, `flname`, `profession`, `fmnumber`, `femail`, `address`, `course_id`, `course_fee`, `paid_fee`, `remaining_fee`, `feedetails`, `paymenttype`, `transaction_id`, `cheaque_no`, `ageproof`, `ageproofno`, `idproof`, `idproofno`, `ppimage`, `check_box`, `medical_issue`, `batch_no`) VALUES
(1, 8, 'WPL/2004/01/6', 'dfsgk', 'bdkfgb', 'jkbdjk', '2018-10-10', 'Male', '2018-09-14', 'MPHS', 'A+', 'rte', 'sdfger', 'bfsvh', 'dufh', 'vdvb', 'dbvbs', '4564677546', 'p.ahire04@gmail.com', 'jhiop', '1', '25600', '', '25600', 'Unpaid', '', '', '', 'Birth Certificate', '1245SANK8965', 'Pan Card', 'bzdfbzdf', 'Hydrangeas_-_Copy1.jpg', '0', '', '02'),
(2, 8, 'WPL/2004/01/6', 'hgjl;h', 'bvjk', 'bbfvb', '2018-10-24', 'Male', '2018-10-24', 'MPHS', 'A+', 'jn', 'Pune', 'sanket', 'balaji', 'chidrawar', 'doctor', '9156564941', 'p.ahire04@gmail.com', 'mnsvjl', '1', '25600', '', '25600', 'Unpaid', '', '', '', 'Birth Certificate', '1245SANK8965', 'Voter ID', 'fthjsrt', 'Desert_-_Copy.jpg', '1', 'bncgjk', '02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `enquiry_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enquiry_id`, `name`, `contact`, `email`, `message`, `subject`) VALUES
(1, 'Speech bubble', '4562345454', 'sanketchidrawar@gmail.com', '4562345454', 'dsgf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `divide` varchar(20) NOT NULL,
  `fran_id` int(10) DEFAULT NULL,
  `Admin_id` int(10) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`, `first_name`, `last_name`, `divide`, `fran_id`, `Admin_id`, `img`) VALUES
(2, 'abc', '123', 'abcd', NULL, '', 1, NULL, 'Jellyfish_-_Copy.jpg'),
(8, 'praful', 'patil', 'praful', 'patil', 'admin', NULL, 1, 'dummy.png'),
(9, 'Sanket', '12345', 'abc', NULL, '', 6, NULL, '5756c5966cde0_thumb9001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_franchiese`
--
ALTER TABLE `add_franchiese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `gallery_desc`
--
ALTER TABLE `gallery_desc`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `new_gallery`
--
ALTER TABLE `new_gallery`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `title_id` (`title_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_franchiese`
--
ALTER TABLE `add_franchiese`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `Admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery_desc`
--
ALTER TABLE `gallery_desc`
  MODIFY `title_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_gallery`
--
ALTER TABLE `new_gallery`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
