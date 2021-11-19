-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 01:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`) VALUES
(15, 'First blog Post (edit)', '  But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?  ', '2021-10-29 08:36:19'),
(31, 'title', 'hello world', '2021-10-29 11:08:53'),
(32, 'title', 'hello world', '2021-10-29 11:10:33'),
(34, 'asdf', 'asdf', '2021-11-05 09:12:13'),
(35, 'asdf', 'asdf', '2021-11-05 09:12:33'),
(36, 'asdf', 'asdf', '2021-11-05 09:13:21'),
(37, 'asdf', 'asdf', '2021-11-05 09:14:06'),
(38, 'asdf', 'asdf', '2021-11-05 09:14:38'),
(39, 'asdf', 'asdf', '2021-11-05 09:15:30'),
(40, 'asdf', 'asdf', '2021-11-05 09:16:12'),
(42, 'hello', 'hi', '2021-11-05 11:05:57'),
(43, 'hi (edit)', '   hi   ', '2021-11-05 11:06:39'),
(45, 'testing', 'hello', '2021-11-05 13:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `practical_upload_table`
--

CREATE TABLE `practical_upload_table` (
  `Lab_id` int(11) NOT NULL,
  `User_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'allotei5', 'allotei5@gmail.com', '6a204bd89f3c8348afd5c77c717a097a', 'imagescloud 1.png'),
(2, 'allotei5', 'allotei5@gmail.com', '6a204bd89f3c8348afd5c77c717a097a', 'imagescloud 1.png'),
(3, 'allotei5', 'allotei5@gmail.com', '6a204bd89f3c8348afd5c77c717a097a', 'images/cloud 1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical_upload_table`
--
ALTER TABLE `practical_upload_table`
  ADD PRIMARY KEY (`Lab_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `practical_upload_table`
--
ALTER TABLE `practical_upload_table`
  MODIFY `Lab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
