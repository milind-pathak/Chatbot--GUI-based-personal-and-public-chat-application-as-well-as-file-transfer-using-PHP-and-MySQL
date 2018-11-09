-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 11:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

CREATE TABLE `chatters` (
  `name` text NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`name`, `seen`) VALUES
('Milindk', '2018-04-20 07:26:13'),
('Mrk', '2018-04-20 07:29:06'),
('Avaneesh', '2018-04-19 09:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `posted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `sender`, `receiver`, `name`, `path`, `posted`) VALUES
(1, 'Avaneesh', 'Parth', 'as', 'documents/ANAMIKA TRIPATHI RESUME.docx', '2018-04-18 06:07:37'),
(7, 'Avaneesh', 'Milind', 'adadga', 'documents/images-image_2.html', '2018-04-18 06:17:07'),
(13, 'Avaneesh', 'Parth', 'fggfd', 'documents/4882631440001011590000810064.pdf', '2018-04-18 06:47:22'),
(19, 'Avaneesh', 'Parth', 'ava', 'documents/ANAMIKA TRIPATHI RESUME (4).docx', '2018-04-18 06:52:21'),
(25, 'Avaneesh', 'Parth', 'asa', 'documents/Annual_IT_Certificate_730459 (1).pdf', '2018-04-18 07:08:53'),
(26, 'Avaneesh', 'Milind', 'fgfgdgf', 'documents/7615971160001011590000810064.pdf', '2018-04-19 04:19:21'),
(32, 'milind', 'Avaneesh', 'bhai', 'documents/a.txt', '2018-04-19 04:43:13'),
(33, 'Avaneesh', 'milind', 'sdsd', 'documents/Anamika PF passbook scan.pdf', '2018-04-19 06:53:32'),
(34, 'Avaneesh', 'Avaneesh', 'avi', 'documents/ANAMIKA TRIPATHI RESUME (1).docx', '2018-04-19 10:06:38'),
(35, 'Milindk', 'Mrk', 'milind', 'documents/7615971160001011590000810064.pdf', '2018-04-20 07:31:03'),
(41, 'Mrk', 'Milindk', 'Paisacula', 'documents/IMG_20180420_124239.jpg', '2018-04-20 07:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `msg`, `posted`) VALUES
('Avaneesh', 'sdhs', '2018-04-19 08:18:18'),
('Avaneesh', 'asasa', '2018-04-19 09:29:50'),
('Milindk', 'fsdhgshgf', '2018-04-20 07:26:29'),
('Mrk', 'Fuck off', '2018-04-20 07:29:16'),
('Mrk', 'Aur lodu', '2018-04-20 07:29:36'),
('Mrk', 'Happy Birthday', '2018-04-20 07:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `messages1`
--

CREATE TABLE `messages1` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `posted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages1`
--

INSERT INTO `messages1` (`sender`, `receiver`, `msg`, `status`, `posted`) VALUES
('Avaneesh', 'Avaneesh', 'assa', 'false', '2018-04-19 08:24:44'),
('Avaneesh', 'Avaneesh', 'dgf', 'false', '2018-04-19 08:24:51'),
('Avaneesh', 'Avaneesh', 'gjghghghgghgghhg', 'false', '2018-04-19 08:25:06'),
('milind', 'Avaneesh', 'yo', 'false', '2018-04-19 08:26:00'),
('Avaneesh', 'Avaneesh', 'gdgdfff', 'false', '2018-04-19 08:34:01'),
('Avaneesh', 'Avaneesh', 'ghgfgfgfg', 'false', '2018-04-19 08:35:03'),
('Avaneesh', 'milind', 'fgggf', 'false', '2018-04-19 08:35:19'),
('Avaneesh', 'Avaneesh', 'sdghhdsj', 'false', '2018-04-19 08:40:18'),
('Avaneesh', 'Avaneesh', 'dhs', 'false', '2018-04-19 08:40:21'),
('Avaneesh', 'milind', 'ghsdgh', 'false', '2018-04-19 08:41:11'),
('Avaneesh', 'Avaneesh', 'sgdhagdh', 'false', '2018-04-19 08:41:19'),
('Avaneesh', 'Avaneesh', 'asas', 'false', '2018-04-19 08:50:32'),
('Avaneesh', 'milind', 'asasas', 'false', '2018-04-19 08:50:40'),
('Avaneesh', 'milind', 'dsdasdasd', 'false', '2018-04-19 08:51:00'),
('Avaneesh', 'Avaneesh', 'dfdsfs', 'false', '2018-04-19 08:51:41'),
('Avaneesh', 'milind', 'fsdfsfsf', 'false', '2018-04-19 08:52:44'),
('Avaneesh', 'milind', 'dfgsfghsd', 'false', '2018-04-19 09:08:37'),
('Avaneesh', 'milind', 'sdsdsadsddsdsdsds', 'false', '2018-04-19 09:08:51'),
('Avaneesh', 'milind', 'sdsdsadsddsdsdsds', 'false', '2018-04-19 09:08:51'),
('Avaneesh', 'Avaneesh', 'sdada', 'false', '2018-04-19 09:09:32'),
('Avaneesh', 'milind', 'sdwdqwdw', 'false', '2018-04-19 09:11:39'),
('Avaneesh', 'milind', 'bhshjdha', 'false', '2018-04-19 09:13:45'),
('Milindk', 'Mrk', 'hdhgsdhgsdgh', 'false', '2018-04-20 07:30:26'),
('Mrk', 'Milindk', 'Ummhmm', 'false', '2018-04-20 07:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Avaneesh', 'avitri89@gmail.com', 'f970e2767d0cfe75876ea857f92e319b'),
(2, 'Milind', 'madhutri14@gmail.com', 'f970e2767d0cfe75876ea857f92e319b'),
(3, 'milind', 'asd', '7815696ecbf1c96e6894b779456d330e'),
(5, 'Parth', 'as@gmail.com', 'f970e2767d0cfe75876ea857f92e319b'),
(6, 'Nikhil', 'asas@gmail.com', 'f970e2767d0cfe75876ea857f92e319b'),
(7, 'asas', 'asd@gmail.com', 'fd617141105f55d2dfe14e630c0ec719'),
(8, 'asas1', 'as@gmail.com', 'fd617141105f55d2dfe14e630c0ec719'),
(9, 'Milindk', 'avitri89@gmail.com', 'e994b89522f3e76b00ca76f019618697'),
(10, 'Mrk', 'shdhd@gmail.com', '565c70ae36ed3183489350b34f7bd9f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
