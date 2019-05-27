-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 05:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'rez1', 'rez1'),
(3, 'rez1', 'fddb9920d5b8ec351b939c9f4ed0d427');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(128, 1, 0, 'Bev Littlewood'),
(129, 1, 1, 'Berry Bohem'),
(130, 1, 0, 'Roger Pressman'),
(131, 1, 0, 'Victor Bisili'),
(132, 2, 1, 'Waterfall Model '),
(133, 2, 0, 'Spiral Model'),
(134, 2, 0, ' Quick and Fix model'),
(135, 2, 0, ' Prototyping Model'),
(136, 3, 0, ' 3 Phases '),
(137, 3, 0, '1 Phases'),
(138, 3, 1, '2 Phases'),
(139, 3, 0, '4 Phases'),
(140, 4, 1, ' Software requirement specification '),
(141, 4, 0, 'Software requirement solution '),
(142, 4, 0, 'System requirement specification'),
(143, 4, 0, ' None of Above'),
(144, 5, 0, ' Small Projects'),
(145, 5, 0, ' Complex Projects '),
(146, 5, 1, 'Accommodating change '),
(147, 5, 0, 'None of Above'),
(148, 6, 1, ' Rapid Application Development '),
(149, 6, 0, 'Relative Application Development'),
(150, 6, 0, ' Ready Application Development'),
(151, 6, 0, ' Repeated Application Development'),
(152, 7, 1, 'IBM '),
(153, 7, 0, 'Motorola '),
(154, 7, 0, 'Microsoft '),
(155, 7, 0, 'Lucent Technologies'),
(156, 8, 0, 'Reliable Software'),
(157, 8, 0, ' Cost Effective Software '),
(158, 8, 1, 'Reliable and cost effective Software '),
(159, 8, 0, 'None Of Above'),
(160, 9, 0, '13 programmers '),
(161, 9, 0, '10 programmers '),
(162, 9, 1, '8 programmers '),
(163, 9, 0, '100/13 programmers'),
(164, 10, 0, 'Basic path '),
(165, 10, 0, 'Graph Testing '),
(166, 10, 0, 'Dataflow'),
(167, 10, 1, ' Glass box testing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `assignment` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `uploaded_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `name`, `assignment`, `status`, `uploaded_on`) VALUES
(1, 'first', 'hello', 1, '0000-00-00'),
(2, 'first', 'hello', 1, '0000-00-00'),
(3, 'acceptLatter.docx', '', 0, '2019-05-27'),
(4, 'acceptLatter.docx', '', 0, '2019-05-27'),
(5, 'acceptLatter.docx', '', 0, '2019-05-27'),
(6, 'acceptLatter.docx', '', 0, '2019-05-27'),
(7, 'acceptLatter.docx', '', 0, '2019-05-27'),
(8, 'acceptLatter.docx', '', 0, '2019-05-27'),
(9, 'cv_rez1.docx', '', 0, '2019-05-27'),
(10, '0933.zip', '', 0, '2019-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_note`
--

CREATE TABLE `tbl_note` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_note`
--

INSERT INTO `tbl_note` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'tyrion.png', '2019-04-13 17:03:05', '1'),
(2, 'DSC03828+R.jpg', '2019-04-13 17:05:38', '1'),
(3, 'routine.png', '2019-04-13 17:05:48', '1'),
(4, 'pdf2doc.zip', '2019-04-13 17:06:07', '1'),
(5, 'mpi.pdf', '2019-04-13 17:06:38', '1'),
(6, 'notes.jpg', '2019-04-13 17:11:32', '1'),
(7, 'latest cv.pdf', '2019-04-13 17:11:46', '1'),
(8, 'riyon.jpg', '2019-04-13 17:20:47', '1'),
(9, 'Game of Thrones_8x05_WEB.MEMENTO.en.zip', '2019-05-16 22:05:56', '1'),
(10, 'Game of Thrones_8x05_WEB.MEMENTO.en.zip', '2019-05-16 22:06:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(40, 1, 'Spiral Model was developed by? '),
(41, 2, 'Which model is popular for students small projects ? '),
(42, 3, ' Build and Fix model has?  '),
(43, 4, 'SRS stands for ?'),
(44, 5, 'Waterfall model is not suitable for ?'),
(45, 6, 'RAD stands for ?'),
(46, 7, 'RAD Model was purposed by ? '),
(47, 8, 'Software engineering aims at developing ? '),
(48, 9, 'To completely write the program in FORTRAN and rewrite the 1% code in assembly language, if the project needs 13 days, the team consists of ? '),
(49, 10, 'White box testing, a software testing  technique is sometimes called ? ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `name`, `email`, `catagory`, `description`) VALUES
(1, 'rez1', 'adsf@gmail.com', 'science', 'blockchain'),
(2, 'rex', 'asd@gmail.com', 'dfds', 'fsdfsdf'),
(3, 'rexowan', 'asaddsd@gmail.com', 'science', 'fsdfsdflove ya'),
(4, 'rexowan', 'asaddsd@gmail.com', 'science', 'fsdfsdflove ya'),
(5, 'rexowan', 'asaddsd@gmail.com', 'science', 'fsdfsdflove yjghja'),
(6, 'rexo', 'd@gmail.com', 'science', 'fhfghj'),
(7, 'rexo', 'd@gmail.com', 'science', 'fhfghj'),
(8, 'rexo', 'd@gmail.com', 'science', 'fhf'),
(9, 'rexo', 'd@gmail.com', 'science', 'fhf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `username`, `password`, `email`, `status`) VALUES
(8, 'rez1', 'rez1', 'fddb9920d5b8ec351b939c9f4ed0d427', 'bal@gmail.com', 0),
(9, 'hello', 'hello', 'hello', 'sexy@gmail.com', 0),
(10, 'Rezowan', 'rezz', 'e0dc2563bae44cf12b8ab8e8bbec09c3', '123@gmail.com', 0),
(11, 'gd', '123@gmail.com', 'e0dc2563bae44cf12b8ab8e8bbec09c3', 'se45xy@gmail.com', 0),
(12, 'sfsf', 'rez1', 'fddb9920d5b8ec351b939c9f4ed0d427', '1@gmail.com', 0),
(13, 'sfsd', 'admin', '202cb962ac59075b964b07152d234b70', 'sexy@gukmail.com', 0),
(14, 'sdfds', 'fdgdf', '274cf0d98144f60d3859d14c3e3d1ba9', 'bsse0933@gmail.com', 0),
(15, 'sdfds', 'fdgdf', '274cf0d98144f60d3859d14c3e3d1ba9', 'bsse093334@gmail.com', 0),
(16, 'sdfds', 'fdgdf', '274cf0d98144f60d3859d14c3e3d1ba9', 'bsse093334@iit.du.ac.bd', 0),
(17, 'rez1', 'rez1', 'fddb9920d5b8ec351b939c9f4ed0d427', 'bsse0900@iit.du.ac.bd', 0),
(18, 'rezowan', 'rezowan', 'fddb9920d5b8ec351b939c9f4ed0d427', 'rez1.iit.du@gmail.com', 0),
(19, 'w', 'x', 'rez12345', 'rez12345@gmail.com', 0),
(20, 'rezowan', 'rez1', 'hello1234', 'bsse0933@iit.du.ac.bd', 0),
(21, 'rezowan', 'rez1', 'hello1234', 'bsse0934@iit.du.ac.bd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_viva`
--

CREATE TABLE `tbl_viva` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `skype` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_viva`
--

INSERT INTO `tbl_viva` (`id`, `name`, `email`, `facebook`, `skype`) VALUES
(0, 'rez1', 'rez1@gmail.com', '50', 'pass'),
(2, 'arman', 'rmasdbas@gmail.com', '24', 'failed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_note`
--
ALTER TABLE `tbl_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_viva`
--
ALTER TABLE `tbl_viva`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_note`
--
ALTER TABLE `tbl_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
