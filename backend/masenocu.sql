-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 07:42 AM
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
-- Database: `masenocu`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `svg` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `category`, `svg`, `description`) VALUES
(1, 'Our Vision', 'assets/icons.svg#eye', 'Living as True Disciples of Jesus Christ.'),
(2, 'Our Mission', 'assets/icons.svg#rocket', 'Nurturing belief in Christ & Developing Christ-like character.'),
(3, 'Our Goals', 'assets/icons.svg#bullseye', 'Discipleship, Evangelism & Leadership Development.');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `author_image_url` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `read_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image_url`, `category`, `title`, `summary`, `author_image_url`, `author_name`, `date`, `read_time`) VALUES
(1, '/public/assets/images/Content-Placeholder-blog.webp', 'Testimony', 'How God Transformed My Life', 'This is a wider card with supporting text below as a natural lead-in...', '/public/assets/images/student_m.png', 'John Doe', '2024-01-11', 5),
(2, '/public/assets/images/Content-Placeholder-blog.webp', 'Inspiration', 'Overcoming Fear and Doubt', 'This card has supporting text below as a natural lead-in to additional...', '/public/assets/images/student_f.png', 'Jane Smith', '2024-02-24', 3),
(3, '/public/assets/images/Content-Placeholder-blog.webp', 'Testimony', 'Finding Purpose in Life', 'This is a wider card with supporting text below as a natural lead-in...', '/public/assets/images/student_m.png', 'John Johnson', '2024-04-16', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contactType` varchar(255) DEFAULT NULL,
  `contactDetail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contactType`, `contactDetail`) VALUES
(1, 'Email', 'contact@yourcu.com'),
(2, 'PhoneNumber', '+254712345678'),
(3, 'Address', 'LH15 Siriba Campus, Maseno, Kenya');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `month_of_year` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `day`, `date`, `month_of_year`, `title`, `location`, `description`, `image`) VALUES
(1, 'prayers_bible_study', 'Wednesday', 18, 'Sep 2024', 'Wednesday Prayers & Bible Study', 'Lecture Hall 15', '', ''),
(2, 'bible_study', 'Thursday', 19, 'Sep 2024', 'BEST-P', 'Lecture Hall 15', '', ''),
(3, 'fellowship', 'Friday', 20, 'Sep 2024', 'Friday Fellowship', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(4, 'fellowship', 'Sunday', 22, 'Sep 2024', 'Sunday Service', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(5, 'worship', 'Sunday', 22, 'Sep 2024', 'Worship Experience', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(6, 'prayer', 'Wednesday', 18, 'Sep 2024', 'Wednesday Prayers', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(7, 'prayer', 'Friday', 20, 'Sep 2024', 'Prayer Kesha', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(8, 'bible_study', 'Wednesday', 18, 'Sep 2024', 'Bible Study', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(9, 'bible_study', 'Thursday', 19, 'Sep 2024', 'BEST-P', 'Lecture Hall 15', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(10, 'outreach', 'Saturday', 21, 'Sep 2024', 'Nakuru Mission', 'Various Locations', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png'),
(11, 'training', 'Saturday', 21, 'Sep 2024', 'Ministry Practices', 'Various Halls', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos praesent...', '/public/assets/images/Illustration-CTA-Man-in-Boat-Facing-Right.png');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'What is a Christian Union?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, nemo, ma...'),
(2, 'Who can join?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo omn...'),
(3, 'What ministries are available?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit eaque a...'),
(4, 'How can I get involved?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit eaque a...');

-- --------------------------------------------------------

--
-- Table structure for table `leadership`
--

CREATE TABLE `leadership` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadership`
--

INSERT INTO `leadership` (`id`, `name`, `position`, `description`, `image`, `linkedin`, `facebook`, `whatsapp`) VALUES
(1, 'Paul Mwika', 'Chairperson', 'Paul is a passionate leader who is committed to serving God and guiding the Union.', '/public/assets/images/Paul Mwika.jpg', 'https://linkedin.com/in/paul-mwika-2066b8234', 'https://facebook.com/paul.mwika.52', 'https://wa.me/qr/JPJ4MZ3SNEHDD1'),
(2, 'Lenox Mutwiri', 'Vice Chairperson', 'Lenox brings his strong faith and organizational skills to support the Union.', '/public/assets/images/student_m.png', '#', 'https://facebook.com/', '#'),
(3, 'Babra Chebet', 'Secretary', 'Babra ensures effective communication and coordination within our Union.', '/public/assets/images/student_f.png', '#', 'https://facebook.com/', '#'),
(4, 'Kevin Soita', 'Treasurer', 'Kevin manages the financial resources of our Union with integrity and care.', '/public/assets/images/student_m.png', '#', 'https://facebook.com/', '#'),
(5, 'Jane Smith', 'Vice Secretary', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, voluptatibus.', '/public/assets/images/student_f.png', '#', 'https://facebook.com/', '#'),
(6, 'Brian Kimondo', 'Hospitality Coordinator', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, quae.', '/public/assets/images/student_m.png', '#', 'https://facebook.com/', '#'),
(7, 'Jane Johnson', 'Discipleship Coordinator', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, consectetur.', '/public/assets/images/student_f.png', '#', 'https://facebook.com/', '#'),
(8, 'Fidel Were', 'Mission Coordinator', 'Fidel organizes impactful outreach programs to spread the love of Christ.', '/public/assets/images/student_m.png', '#', 'https://facebook.com/', '#'),
(9, 'Jane Doe', 'Bible Study Coordinator', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, reprehenderit.', '/public/assets/images/student_f.png', '#', 'https://facebook.com/', '#'),
(10, 'Shyreen Mwenda', 'MIT Coordinator', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, at!', '/public/assets/images/student_f.png', '#', 'https://facebook.com/', '#'),
(11, 'John Doe', 'Prayer Coordinator', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, maxime.', '/public/assets/images/student_m.png', '#', 'https://facebook.com/', '#'),
(12, 'Nixon Kiptoo', 'Board Director', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, reprehenderit.', '/public/assets/images/student_m.png', '#', 'https://facebook.com/', '#');

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` int(11) NOT NULL,
  `ministryName` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `ministryName`, `description`) VALUES
(1, 'MEDIA AND IT', 'This is the Media and IT ministry that covers the publicity of the church services.'),
(2, 'Praise and Worship', 'This ministry is responsible for leading the congregation in worship through music.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `admission_number` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `ministry` varchar(255) DEFAULT NULL,
  `year_of_study` int(11) DEFAULT NULL,
  `eve_team` varchar(255) DEFAULT NULL,
  `school_id_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `course`, `admission_number`, `phone_number`, `ministry`, `year_of_study`, `eve_team`, `school_id_path`) VALUES
(1, 'Amakalu', 'test', 'amakalu254@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, 'Victor Arnold', '$2y$10$JwGG3W/aRyb9PKKN.fy0wed1K/aLZQG6Vnu2YMG5hFEJEb4DDEgWS', 'arnod@gmail.com', 'B.Sc Computer Science', 'CCS\\00046/022', '0743720033', 'Praise and Worship', 3, 'Weso', ''),
(3, 'Pops', '$2y$10$hSmnXJuI5c4oOh/ol9yvxOml5CQpk0k0D4ubpCIreMHLTJEqqoZLW', 'pops@gmail.com', 'Kiswahili', 'Kis777', '078828', 'Hospitality', 1, 'Noret', ''),
(4, 'Preston Maina', '$2y$10$0dMj28AEWr8QqshfnKzLfuXJM9OU/4C9E6f47zcZqt2Ca9XVakpse', 'prestonmaina75@gmail.com', 'BSc Computer Science', 'CCS/00007/021', '0791666055', 'Media and IT', 3, 'Central Evangelistic Team', ''),
(5, '', '$2y$10$yXMAV2L9hLSIvnnTO/pSauf0Kbctrp99SfTfVFlCRW/RKt9aZgpee', 'amakalu254@gmail.com', 'Computer Science', 'CCS/00046/022', '0743720033', 'Media and IT', 3, 'Weso', ''),
(6, 'John Doe', '$2y$10$PQsrj2xjks5UhLtj19EZ8.jfyLppnBfE5nWkVXbogthOuB6b3ESPa', 'john@gmail.com', 'Computer Science', 'ccs/00046/022', '0743720034', 'Media and IT', 3, 'Weso', 'D:\\My_Projects\\Maseno-CU\\app\\models/../backend/uploads/school_Ids/66d082b811026-try.jpeg'),
(7, 'John Doe', '$2y$10$z83.namZSziRRlaf1wqYp.S1BUSdBNYlyIexMHotGUqUnfIhlZJpC', 'john@gmail.com', 'Computer Science', 'CCS/00046/022', '0743720034', 'Media and IT', 3, 'Weso', 'backend/uploads/school_Ids/66d085a21a9c4-MasenoCU_logo.png'),
(8, 'John Doe', '$2y$10$ogMDlybP5biMVptpxlavge2CmZGRxjCXRY9AApI8SfHQrBaeKe2pu', 'john@gmail.com', 'Computer Science', 'CCS/00046/022', '0743720034', 'Media and IT', 3, 'Weso', 'backend/uploads/school_Ids/66d08a3d79546-IMG-20240307-WA0002.png'),
(9, 'Kelly Test', '$2y$10$b.SO0gN7cXtpasVWcQrb7.VPoGdnk5JGO0XCEAkMKS6jIS1cZWDNq', 'kelly@gmail.com', 'Computer Science', 'CCS/00046/022', '0743720033', 'Media and IT', 3, 'Weso', 'backend/uploads/school_Ids/66d14c22c4c62-java.jpg'),
(10, 'Kelly Test', '$2y$10$5q7UcV7LCrln8g597fK.sObz9cIce9K5ofXj6qUe0nR2mhzDvAQ/2', 'kelly@gmail.com', 'Computer Science', 'CCS/00046/022', '0743720033', 'Media and IT', 3, 'UET', 'backend/uploads/school_Ids/66d14c8f22f10-java.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadership`
--
ALTER TABLE `leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leadership`
--
ALTER TABLE `leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
