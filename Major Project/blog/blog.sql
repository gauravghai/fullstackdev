-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 03:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `heading`, `thumbnail`, `description`) VALUES
(1, 'My name is Gaurav Ghai', 'https://static-cse.canva.com/blob/1009319/1600w-wK95f3XNRaM.jpg', 'My name is Gaurav My name is Gaurav My name is Gaurav My name is Gaurav My name is Gaurav My name is Gaurav My name is Gaurav My name is Gaurav My name is Gaurav'),
(2, 'How To Improve Customer Experience With A Better Web Design?', 'https://ares.decipherzone.com/blog-manager/uploads/banner_webp_a7b20eeb-18dc-483e-917e-2244202962c2.webp', 'Web Design plays an important role in any marketing strategy or positively impacting user experience. The site’s usability, aesthetics, and even formatting are significant when it comes to a company’s long-term success.'),
(3, 'Build 3 Beginner Javascript Projects in 30 mins Tutorial - HTML, CSS & JS', 'https://www.htmlhints.com/image/shareYT/maxresdefault.jpeg', 'What\'s good everyone! Today we\'re going to build 3 super easy beginner Javascript projects in 30 mins. All you need to know is some basic HTML, CSS, and JS. Let me know if I should make more complicated projects?'),
(4, 'Build A Responsive Website With Animations | HTML & CSS Tutorial', 'https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg', 'I ran into this awesome website landing page design while browsing dribbble.com, so I decided to build it as part of tutorial. But I didn\'t just stop there, I also decided to make the design responsive and added animations.'),
(5, 'CSS Positions', 'https://www.htmlhints.com/image/tutorial/cssposition.png', 'The CSS position property defines how an element in HTML is positioned in a document. The HTML element position can be manipulate by using these properties top , right , bottom , and left determine the final location of positioned elements in document.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `message`, `date`) VALUES
(1, 'XYZ', 'XYZ', '', '2023-02-17 14:59:41'),
(2, 'swedwsef@wef.wef', 'wef', '', '2023-02-17 15:02:35'),
(3, 'swedwsef@wef.wef', 'Gaurav', '', '2023-02-17 15:03:26'),
(4, 'swedwsef@wef.wef', 'Gaurav', '', '2023-02-17 15:03:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
