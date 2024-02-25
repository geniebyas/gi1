-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 04:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `timestamp`) VALUES
(2, 'M.Shakil Patel', 'patelsakib95@gmail.com', 'Asssalamualaikum', 'asdfasghsdfhdf', '2023-09-09'),
(3, 'M.Shakil Patel', 'patelsakib95@gmail.com', 'Asssalamualaikum', 'asdfasghsdfhdf', '2023-09-09'),
(4, 'M.Shakil Patel', 'patelsakib95@gmail.com', 'Asssalamualaikum', 'asdfasghsdfhdf', '2023-09-09'),
(5, 'M.Shakil Patel', 'patelsakib95@gmail.com', 'Asssalamualaikum', 'asdfasghsdfhdf', '2023-09-09'),
(6, 'M.Shakil Patel', 'patelsakib95@gmail.com', 'Asssalamualaikum', 'asdfasghsdfhdf', '2023-09-09'),
(7, 'M.Shakil Patel', 'patelsakib95@gmail.com', 'Asssalamualaikum', 'sdfasdf', '2023-09-09'),
(8, 'onedollarhosting81@gmail.com', 'onedollarhosting81@gmail.com', '1 dollar a month  hosting !', 'reply me if you interested i will send you the link to 1$ a month hosting !', '2023-12-23'),
(9, 'Lila', 'DhikJQ.cjhmcqj@tonetics.biz', 'Benedict Stone', 'Benedict Stone', '2023-12-29'),
(10, 'bonny.parent@yahoo.com', 'bonny.parent@yahoo.com', 'Dear gi1superapp.com Owner!', 'Contact form blasts work! I can put your ad message in front of millions for less than $100 the same way I just put this message in front of you! Reach out to me via Skype or Email for details.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps3124@gomail2.xyz', '2024-01-11'),
(11, '', '', '', '', '2024-01-17'),
(12, 'sotelo.leticia93@gmail.com', 'sotelo.leticia93@gmail.com', 'Hi gi1superapp.com Owner!', 'Brand new tech is changing the way companies market.  It turns Youtube videos into interactive games keeping the viewers attention.  Companies reward people for watching the whole video and create a marketing frenzy like Black Friday.  \r\nAs seen on CBS, NBC, FOX, and ABC. \r\n\r\nDrop me a line via email/skype below to see if you qualify for a free GAMIFICATION of your video.\r\n\r\nJulien\r\nemail: gamifyvideo@gmail.com\r\nskype: live:.cid.d347be37995c0a8d', '2024-01-19'),
(13, 'noreplyhere@aol.com', 'noreplyhere@aol.com', '??', 'The same way I just sent you this message I can also post your ad message to millions of sites. Costs are much cheaper than regular advertising Hit me up via email or skype for details.\r\n\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps5555@gomail2.xyz', '2024-01-20'),
(14, 'iva.gellatly@yahoo.com', 'iva.gellatly@yahoo.com', 'Dear gi1superapp.com Administrator!', 'Here is everything to know about Theresa Luboya, a loving mom, wife and grandma. She is currently seeking aid while battling for her life every single day. Yes, we need help to save a life, the family dry out of the money, no insurance and the bills piling up.\r\n\r\n \r\n\r\nWe urgently reach out to you with a plea that carries the weight of a young life in need of your collective support. Theresa Luboya, a vibrant soul battling congenital heart failure, a condition stemming from a defective heart that has placed her in the midst of a life-altering struggle.\r\n\r\n \r\n\r\nAll donations go directly to making a difference for a cause. If you have the means, please do contribute, otherwise, your prayers can also do wonders.\r\n\r\n \r\n\r\nPlease help save life by donating as much as you can to this link:\r\n\r\nhttps://www.gofundme.com/f/help-save-rosies-heart-a-lifesaving-journey?utm_campaign=p_cp+share-sheet&utm_medium=copy_link_all&utm_source=customer\r\n \r\nRegards,\r\nJaime.', '2024-01-25'),
(15, 'humberto.minahan@gmail.com', 'humberto.minahan@gmail.com', 'Hi gi1superapp.com Webmaster!', 'START YOUR DAY is a daily newsletter that shows you easy ways to make money, gives you ideas to easily learn new skills, as well as giving you helpful ways to lose weight and just about anything else you can think of - DAILY!\r\n\r\nLEARN MORE: https://StartYourDayIdeas.com', '2024-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `benefit_count` int(3) NOT NULL,
  `fav_platform` varchar(40) NOT NULL,
  `platform` varchar(40) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `benefit_count`, `fav_platform`, `platform`, `msg`, `timestamp`) VALUES
(1, 98, 'Social Media', 'Media', 'Hello this is okay in that special message.', '2023-11-10 03:51:29'),
(2, 52, 'Social Media', ', , , , , , , , , , , ', 'dfas', '2023-11-10 05:27:30'),
(3, 62, 'Social Media', 'Gi1 Mall, Gi1 Video Hub, Gi1 Edits, Gi1 ', 'asdfalskdf', '2023-11-10 05:30:16'),
(4, 66895, 'Shsgbs', 'Gi1 Media, Gi1 Hiring, Gi1 Languages, Gi', 'Ydhhsushhdyx', '2024-01-06 07:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
