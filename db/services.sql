-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 05:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `status`) VALUES
(1, 'Gi1 Media', 'gi1media.png\r\n', 1),
(2, 'Gi1 Mall', 'gi1mall.png', 1),
(3, 'Gi1 Video Hub', 'gi1videohub.png', 1),
(4, 'Gi1 Editing Studio', 'gi1editing.png', 1),
(5, 'Gi1 Game Zone', 'gi1gamezone.png', 1),
(6, 'Gi1 Beauty & Fashion', 'gi1beauty.png', 1),
(7, 'Gi1 Podcast Room', 'gi1podcast.png', 1),
(8, 'Gi1 Travels', 'gi1travels.png', 1),
(9, 'Gi1 Classes', 'gi1classes.png', 1),
(10, 'Gi1 Hirings', 'gi1hirings.png', 1),
(11, 'Gi1 Health', 'gi1health.png', 1),
(12, 'Gi1 Meme', 'gi1meme.png', 1),
(13, 'Gi1 Trading', 'gi1trading.png', 1),
(14, 'Gi1 Sports', 'gi1sports.png', 1),
(15, 'Gi1 News', 'gi1news.png', 1),
(16, 'Gi1 Real Estate', 'gi1realestate.png', 1),
(17, 'Gi1 Languages', 'gi1languages.png', 1),
(18, 'Gi1 Freelance', 'gi1freelance.png', 1),
(19, 'Gi1 Comedy', 'gi1comedy.png', 1),
(20, 'Gi1 KidZone', 'gi1kidzone.png', 1),
(21, 'Gi1 Sharing', 'gi1sharing.png', 1),
(22, 'Gi1 Legal', 'gi1legal.png', 1),
(23, 'Gi1 Docs', 'gi1docs.png', 1),
(24, 'Gi1 Book Store', 'gi1bookstore.png', 1),
(25, 'Gi1 Reciepes', 'gi1reciepes.png', 1),
(26, 'Gi1 Caller', 'gi1caller.png', 1),
(27, 'Gi1 AI', 'gi1ai.png', 1),
(28, 'Gi1 Notes', 'gi1notes.png', 1),
(29, 'Gi1 Locks & Security', 'gi1locks.png', 1),
(30, 'Gi1 Multiverse', 'gi1multiverse.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
