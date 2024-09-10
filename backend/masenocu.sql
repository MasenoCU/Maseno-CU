-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 12:24 PM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `section_name`, `heading`, `content`, `image`, `order_number`) VALUES
(1, 'hero', 'Discover Our Story', 'Welcome to Maseno University Christian Union. Learn about our history, vision, and values.', NULL, 1),
(2, 'OurStory', 'A Journey of Faith: The History and Growth of Maseno University Christian Union', 'Maseno University Christian Union, established in 1978 as an affiliate of Moi University, has experienced remarkable growth over the years. From its humble beginnings, the Union has grown in population, with a large number of converts joining every year.', 'Placeholder Lightbox.png', 2),
(3, 'goals', 'Committed to Discipleship, Evangelism, and Fostering a Strong Christian Community', 'At Maseno University Christian Union, we are dedicated to nurturing disciples, spreading the Gospel, and building a vibrant Christian community.', '700x500.png', 3),
(4, 'doctrine', 'Our Core Beliefs and Doctrinal Stances', 'At Maseno University Christian Union, we are guided by a set of core beliefs and doctrinal stances that define who we are and how we live our lives.', 'Placeholder Image.png', 4),
(5, 'membership', 'How to Become a Member and Responsibilities', 'At Maseno University Christian Union, we offer different membership options to cater to the diverse needs of our community.', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `id` int(10) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(5000) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(20) NOT NULL,
  `books_price` varchar(10) NOT NULL,
  `books_quantity` varchar(20) NOT NULL,
  `books_availability` varchar(20) NOT NULL,
  `librarian_username` varchar(20) NOT NULL,
  `books_file` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_quantity`, `books_availability`, `librarian_username`, `books_file`) VALUES
(1, 'Theoretical Numerical Analysis', 'books-image/5ebaa3080bb0327177a67d697223498a41GxQsLNarL._SX328_BO1,204,203,200_.jpg', 'Kendall Atkinson', 'Dover Publications', '15/03/24', '420', '10', '8', 'pompously', 'books-file/nalrs.pdf'),
(2, 'Health Informatics', 'books-image/9749fdc83fefbcc9cf3a55b16c7a353041SZngIJfuL._SX389_BO1,204,203,200_.jpg', 'Nancy Staggers', 'Elsevier Mosby', '12/03/24', '480', '15', '15', 'pompously', 'books-file/Contents and Front Matter.pdf'),
(3, 'Digital Image Processing', 'books-image/f5546d1614746fed61c4162163d81a59196018.jpg', 'Rafael C. Gonzalez', 'Prentice Hall', '20/03/24', '500', '20', '18', 'pompously', 'books-file/IT6005-SCAD-MSM-by www.LearnEngineering.in.pdf'),
(6, 'Artificial Intelligence', 'books-image/17385102edb4831bab1b8b0577389d5e0133001989.jpg', ' Peter Norvig', 'Dover Publications', '25/03/24', '420', '5', '3', 'admin', 'books-file/17385102edb4831bab1b8b0577389d5eArtificial Intelligence.pdf'),
(7, 'Parallel and Distributed Processing', 'books-image/1554233254.jpg', 'Jose Rolim', 'Elsevier Science', '02/0419', '350', '10', '9', 'admin', 'books-file/1554233331.pdf'),
(8, 'The Guest Book: A Novel', 'books-image/1568430614.jpg', 'test', 'test', '10/3/24', '200', '10', '10', 'admin', 'books-file/1568430614.pdf');

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
-- Table structure for table `eveteam`
--

CREATE TABLE `eveteam` (
  `id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `history` text NOT NULL,
  `mandate` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `membership` text NOT NULL,
  `motto` varchar(255) NOT NULL,
  `activities` text NOT NULL,
  `team_logo` varchar(255) NOT NULL,
  `motto_verse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eveteam`
--

INSERT INTO `eveteam` (`id`, `team_name`, `history`, `mandate`, `vision`, `mission`, `membership`, `motto`, `activities`, `team_logo`, `motto_verse`) VALUES
(1, 'CET', 'CENTRAL EVANGELISTIC TEAM (MASENO UNIVERSITY) is a body of evangelizing Christians open to all bonafide registered members of the Maseno University Christian Union who come from the following regions in Kenya: Laikipia, Nairobi, Naivasha, Nyandarua, and any other born-again member from the region not mentioned above but has a burden to reach out to people in Central Kenya and is willing to abide by the governing constitution of CET.', 'To evangelize within the University, its environs, central parts of Kenya, and other regions as agreed upon. To strengthen the spiritual life of members through discipleship, prayers, and fellowship.', 'To have mankind reconciled with God through gospel evangelism.', 'To make disciples, instill and nurture Christ-like character through the teaching of the Word of God and evangelism.', 'For a M.U.C.U member defined in article 2.1.1 shall be a C.E.T full member upon signing the declaration form containing the following declaration: “In joining C.E.T, I declare my faith in Jesus Christ as my Saviour, Lord, and God. It is my desire by the grace of God to live a life consistent with the scriptures. I am determined to give active support to C.E.T as it seeks to fulfill its aims and objectives. I also agree to uphold the doctrinal basis as outlined in article 1.2.5 of the C.E.T constitution.”', 'Preaching the Word', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions', 'cet-logo.png', NULL),
(2, 'EMUSETA', 'Emulatable students evangelistic Team and Associates (EMUSETA) is a body of Christians bound together by a common faith in the only God and joined together with the heavenly calling of Christ according to the Holy Scriptures...', 'To witness Jesus Christ as Lord and savior and to seek to lead others to personal faith and commitment to Him through evangelistic missions, conventions, mentorship, conferences, crusades, seminars, and discipleship.', 'Making disciples of Jesus Christ throughout the world.', 'Spreading the gospel of Jesus Christ to the whole world through missions, conventions, conference, mentorship programs, seminars, weekend challenges, charity works, and day-to-day personal evangelism.', 'To be a member, one must be a born-again Christian and ascribe to the doctrinal basis/beliefs stated in EMUSETA Constitution. One must also be ready to work together towards achievement of the group\'s objectives by showing commitment in EMUSETA activities and giving financial, physical, and spiritual support.', 'Making disciples of Jesus Christ throughout the world', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions', 'emuseta-logo.png', NULL),
(3, 'MUBET', 'UET has been in existence since 1983 and has continued to grow from strength to strength in spreading the Gospel of Jesus Christ and mentoring young Christians in the University Branches. Over time, the Team has undergone numerous changes to remain relevant in a fast-changing world.', 'UET\'s mandate is to fulfill the Great Commission of our Lord Jesus Christ as in Matthew 28:19‐20: “Go ye therefore and make disciples of all nations...”', 'A leading organization in transforming the lives of people in Kenya by the holistic gospel of Christ through the power of the Holy Ghost.', 'As a non-denominational ministry, UET is committed to prayerfully proclaiming the gospel of Jesus Christ through preaching, training, mentoring, and community initiatives in Kenya.', 'To become a member of UET Kenya, one has to subscribe annually with Ksh 100. After campus, one still remains a member of UET as an associate and can join branches and fellowships/activities.', 'Committed to prayerfully proclaiming the gospel of Jesus Christ.', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions', 'mubet-logo.png', NULL),
(4, 'NET', 'Nyanza Evangelistic Team Maseno University is a team of born again Christian students who are COMMITTED to responding to God’s call; RECOGNISING the need to evangelize, prepare, and equip believers to live the word of the truth, effectively declare the scriptures and be committed to a lifestyle that enriches the church and the communities.', 'Honouring the call to have transformed communities and impacting the world through the Gospel of Jesus Christ.', 'To live as true disciples of Jesus Christ.', 'To nurture belief in Christ and develop Christ-like character among students and communities.', 'Full membership of NET shall be open to all bona-fide registered undergraduate students of Maseno University. Associates membership shall be open to graduates and postgraduate students of Maseno University who profess the Christian faith and whose names shall be entered into the associate members register. There shall be no membership fee.', 'Responding to God’s Call.', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions.', 'net-logo.png', NULL),
(5, 'NORET', 'North Rift Evangelistic Team was constituted to dispense the gospel in the northern part of Rift Valley under the name NORET Maseno, for the worship of God and the spread of the gospel of Jesus Christ.', 'To evangelize in the Northern part of Rift Valley and disciple sons into maturity; growing in the knowledge of Christ.', 'One Church; United in Faith and Mission Witnessing to Jesus Christ and Transforming Lives.', 'To transform lives through ecumenism, capacity building, advocacy and service delivery.', 'Full membership of NORET Maseno shall be open to all bona-fide registered members of Maseno University and registered member of the Christian union and who has signed the declaration form.', 'Go into the world and preach the good news to all creation..', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions.', 'noret-logo.png', 'Mark 16:15'),
(6, 'SORET', 'SORET is a body of evangelizing Christians bound together by a common faith in God and obedience to the great commission of our savior, Jesus Christ. The team seeks to make Christ known to all students in the University and the South Rift and beyond.', 'To obey and fulfill the great commission of Jesus Christ to \"Go and make disciples of all nations\" (Matt.28:19-20), focusing on Maseno University, other institutions, and South Rift.', 'To pursue holiness and reach the unreached with the gospel.', 'To nurture and equip missioners for the great commission of evangelism.', 'Membership is open to all registered, born-again undergraduates of Maseno University Christian Union from Nakuru, Kericho, Kajiado, Bomet, and Narok. It is also open to any other born-again members who sign the declaration form.', 'Go ye unto the whole world...', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions.', 'soret-logo.png', 'Matt. 28:19'),
(7, 'UET', 'UET has been in existence since 1983 and has continued to grow from strength to strength in spreading the Gospel of Jesus Christ and mentoring young Christians in the University Branches. Over time, the Team has undergone numerous changes to remain relevant in a fast-changing world.', 'UET\'s mandate is to fulfill the Great Commission of our Lord Jesus Christ as in Matthew 28:19‐20: “Go ye therefore and make disciples of all nations...”', 'A leading organization in transforming the lives of people in Kenya by the holistic gospel of Christ through the power of the Holy Ghost.', 'As a non-denominational ministry, UET is committed to prayerfully proclaiming the gospel of Jesus Christ through preaching, training, mentoring, and community initiatives in Kenya.', 'To become a member of UET Kenya, one has to subscribe annually with Ksh 100. After campus, one still remains a member of UET as an associate and can join branches and fellowships/activities.', 'Whom shall I send? ... Here am I. Send me.', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions.', 'uet-logo.png', 'Isaiah 6:8'),
(8, 'WESO', 'Western Outreach (WESO) is an Evangelistic Team comprised of students mainly from western Kenya. It is responsible for organizing missions, in-reach on campus, high school empowerment, and discipleship.', 'To prepare and equip Christian students to take out the good news of salvation to the whole world and be effective people in society. To develop and strengthen the spiritual life of members by prayers, brethren fellowships, and Bible study.', 'Every convert a disciple, every disciple a soul winner, and every pastor church leader equipped for service in the church of the Lord Jesus Christ.', 'To grow up mature disciples, ready to preach the gospel of salvation to the lost and to train pastors and church leaders for effective ministry.', 'Full membership shall be open to undergraduate student, member of the MUCU from the following regions; Bungoma, Busia, Kakamega, Vihiga, Trans-Nzoia. Any other interested member from other regions is welcome to join.', 'See, hear, and proclaim.', 'Fellowships every Saturday from 5:30pm-7:00pm, Prayer and fasting every Thursday, A retreat once per semester, At least one prayer week per semester, Family meetings on Sundays, Door-to-door evangelism within the campus, Annual General Mission and Mini-missions.', 'weso-logo.png', NULL);

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
-- Table structure for table `finezone`
--

CREATE TABLE `finezone` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `finezone`
--

INSERT INTO `finezone` (`id`, `username`, `utype`, `email`, `booksname`, `fine`) VALUES
(22, 'samir22', 'teacher', 'samir22@gmail.com', 'Theoretical Numerical Analysis', '50'),
(24, 'sayeed22', 'student', 'sayeed@gmail.com', 'Theoretical Numerical Analysis', '50'),
(25, 'sayeed22', 'student', 'sayeed@gmail.com', 'Artificial Intelligence', '50'),
(26, 'sayeed22', 'student', 'sayeed@gmail.com', 'Artificial Intelligence', '50'),
(27, 'jubayermuhit', 'student', 'joyho3343@gmail.com', 'Combinatorics and Graph Theory', '50'),
(28, 'samir22', 'teacher', 'samir22@gmail.com', 'Digital Image Processing', '50'),
(29, 'mamun22', 'student', 'mamun22@gmail.com', 'Health Informatics', '50'),
(30, 'mamun22', 'student', 'mamun22@gmail.com', 'Health Informatics', '50'),
(31, 'samir2', 'student', 'samir2@gmail.com', 'Combinatorics and Graph Theory', '50'),
(32, 'mamun22', 'student', 'mamun22@gmail.com', 'Digital Image Processing', '50'),
(33, 'jubayermuhit', 'student', 'joyho3343@gmail.com', 'Artificial Intelligence', '50');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `id` int(10) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `booksissuedate` varchar(10) NOT NULL,
  `booksreturndate` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `utype`, `regno`, `name`, `sem`, `session`, `dept`, `phone`, `email`, `booksname`, `booksissuedate`, `booksreturndate`, `username`) VALUES
(22, 'student', '17020050005', 'Skn Sayeed', '4th', '17/18', 'CSE', '01932670148', 'sayeed@gmail.com', 'Theoretical Numerical Analysis', '03/04/2024', '03/14/2024', 'sayeed22'),
(26, 'student', '14502000030', 'samir ahmed', '6th', '14/15', 'BBA', '01521458890', 'samir2@gmail.com', 'Parallel and Distributed Processing', '03/05/2024', '03/25/2024', 'samir2'),
(28, 'student', '17020050005', 'Skn Sayeed', '4th', '17/18', 'CSE', '01932670148', 'sayeed@gmail.com', 'Artificial Intelligence', '04/01/2019', '04/03/2024', 'sayeed22'),
(29, 'student', '14502000020', 'Mostafizur Rahman', '8th', '14/15', 'CSE', '01997259865', 'mamun22@gmail.com', 'Digital Image Processing', '03/09/2024', '03/27/2024', 'mamun22');

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
-- Table structure for table `lib_registration`
--

CREATE TABLE `lib_registration` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lib_registration`
--

INSERT INTO `lib_registration` (`id`, `name`, `username`, `password`, `email`, `phone`, `address`, `photo`, `status`) VALUES
(1, 'utter pompously', 'pompously', 'admin', 'pompously@gmail.com', '01721585268', 'sonadanga 2nd phase', 'upload/1553532571.jpg', ''),
(2, 'utter pompously', 'admin', 'admin', 'parttimemail18@gmail.com', '01956659918', 'khulna, Bangladesh...', 'upload/1571634617.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `susername` varchar(50) NOT NULL,
  `rusername` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `read1` varchar(10) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `susername`, `rusername`, `title`, `msg`, `read1`, `time`) VALUES
(10, 'admin', 'mamun22', 'test', 'good afternoon\r\n', 'y', '2019-09-07 11:49:45am'),
(11, 'admin', 'mamun22', 'testing message', 'Hi mamun ! Whats up?', 'y', '2019-09-07 03:53:07pm'),
(12, 'admin', 'mamun22', 'last', 'dfsdf', 'y', '2019-09-07 03:56:15pm'),
(13, 'admin', 'nahid22', 'test', 'Hi nahid!', 'y', '2019-09-10 06:35:04pm'),
(14, 'admin', 'nahid22', 'check', 'is it ok', 'y', '2019-09-10 06:38:07pm'),
(15, 'admin', 'mamun22', 'ttttt', 'mmnbvvv', 'y', '2019-09-14 10:51:44am');

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `name`, `description`, `schedule`, `image`) VALUES
(1, 'Discipleship Ministry', 'Our discipleship ministry nurtures believers to grow in their walk with Christ.', 'Tuesday - 6:00pm to 8:00pm', 'discipleship.jpeg'),
(2, 'Choir Ministry', 'The choir ministry leads the congregation in worship through songs and hymns.', 'Tuesday - 6:00pm to 8:00pm', 'choir.jpeg'),
(3, 'Praise and Worship Ministry', 'The Praise and Worship ministry creates an atmosphere of worship in every service.', 'Tuesday - 6:00pm to 8:00pm', 'praise_worship.jpeg'),
(4, 'Instrumentalists Ministry', 'Our instrumentalists add depth to worship with musical instruments.', 'Tuesday - 6:00pm to 8:00pm', 'instrumentalists.jpeg'),
(5, 'Media and IT Ministry', 'Supporting the church through audio, video, and technology services.', 'Tuesday - 6:00pm to 8:00pm', 'media_it.jpeg'),
(6, 'Creative Ministry', 'Harnessing creativity to glorify God through arts and design.', 'Tuesday - 6:00pm to 8:00pm', 'creative.jpeg'),
(7, 'Intercessory Ministry', 'Dedicated to prayer and intercession for the church and community.', 'Tuesday - 6:00pm to 8:00pm', 'intercessory.jpeg'),
(8, 'Hospitality Ministry', 'Making church attendees feel welcome and at home.', 'Tuesday - 6:00pm to 8:00pm', 'hospitality.jpeg'),
(9, 'High School Ministry', 'This ministry focuses on high school outreach and discipleship for young students to help them grow in faith.', 'Tuesday - 6:00pm to 8:00pm', 'high_school.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `request_books`
--

CREATE TABLE `request_books` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `burl` varchar(500) NOT NULL,
  `read1` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `request_books`
--

INSERT INTO `request_books` (`id`, `name`, `username`, `email`, `utype`, `bname`, `burl`, `read1`) VALUES
(1, 'Mostafizur Rahman', 'mamun22', 'mamun22@gmail.com', 'student', 'Digital Logic Design', 'https://www.oreilly.com/library/view/digital-logic-design/9780750645829/', 'yes'),
(2, 'Mostafizur Rahman', 'mamun22', 'mamun22@gmail.com', 'student', 'Outliers', 'https://www.goodreads.com/book/show/3228917-outliers', 'yes'),
(5, 'Mostafizur Rahman', 'mamun22', 'mamun22@gmail.com', 'student', 'Medical Medium', 'https://www.medicalmedium.com/', 'yes'),
(6, 'Mostafizur Rahman', 'mamun22', 'mamun22@gmail.com', 'student', 'mmmmm', 'https://www.cricbuzz.com/', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `std_registration`
--

CREATE TABLE `std_registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `session` varchar(5) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `utype` varchar(7) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(7) NOT NULL,
  `vkey` varchar(250) NOT NULL,
  `verified` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`id`, `name`, `username`, `password`, `email`, `phone`, `sem`, `dept`, `session`, `regno`, `address`, `utype`, `photo`, `status`, `vkey`, `verified`) VALUES
(4, 'Skn Sayeed', 'sayeed22', '123456', 'sayeed@gmail.com', '01932670148', '4th', 'CSE', '17/18', '17020050005', 'jessore,khulna', 'student', 'upload/avatar.jpg', 'no', 'dfdsfsdf', 'yes'),
(5, 'Mostafizur Rahman', 'mamun22', '123456', 'mamun22@gmail.com', '01997259865', '8th', 'CSE', '14/15', '14502000020', 'sonadanga 2nd phase', 'student', 'upload/1568958905.jpg', 'yes', 'gfhtr4ghtrgfbvf', 'yes'),
(38, 'samir ahmed', 'samir2', '123456', 'samir2@gmail.com', '01521458890', '6th', 'BBA', '14/15', '14502000030', 'sonadanga', 'student', 'upload/avatar.jpg', 'pending', '436yhgfjhfdstref', 'no'),
(39, 'utter pompously', 'pompously', '123456', 'utterpompously@gmail.com', '01785425452', '8th', 'CSE', '14/15', '14502000044', 'khulna', 'student', 'upload/avatar.jpg', 'yes', 'dsrfewtgfdgvd', 'yes'),
(49, 'Proddut', 'produtt', '123456', 'itsfreecountry@gmail.com', '0147852258', '1th', 'CSE', '14/15', '14502000026', 'Notun Rasta', 'student', 'upload/avatar.jpg', 'no', 'a9e5dcd08c06d04ea40ed7adc59b8a1e', 'yes'),
(51, 'jack', 'jack123', '123456', 'jack@gmail.com', '123456877', '1th', 'CSE', '14/15', '1111111112222', 'temp', 'student', 'upload/avatar.jpg', 'no', 'bee5551ae6dbf70b784ed4dd0966c3bd', 'no'),
(52, 'sadia', 'sadia2', 'sadia222', 'loveya3377@gmail.com', '0124555241', '1th', 'CSE', '14/15', '12502000015', 'khulna', 'student', 'upload/avatar.jpg', 'yes', 'c79857de008257e8ded4b1bfaeba6f1d', 'yes'),
(53, 'test', 'zzzz22', '123456', 'joyho3343@gmail.com', '98776867222', '1th', 'CSE', '14/15', '111112222211', 'nnnnnn', 'student', 'upload/avatar.jpg', 'yes', '071703501c47bf0db6a04d6431935496', 'no'),
(54, 'mithun', 'mithun22', '123456', 'peaceinsleeping@gmail.com', '01245555555', '1th', 'CSE', '14/15', '123456666666', 'jibannagar', 'student', 'upload/avatar.jpg', 'no', '6266417382abff9b2cae55c1b617dcd6', 'no'),
(55, 'Amakalu Vitalis', 'Mervitz', 'test', 'amakalu254@gmail.com', '0743720033', 'Year 3 Sem', '', '', '', '', 'student', 'upload/avatar.jpg', 'pending', 'c01601ee35a5fc22b05997a821b742a0', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `t_issuebook`
--

CREATE TABLE `t_issuebook` (
  `id` int(10) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `idno` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lecturer` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `booksissuedate` varchar(20) NOT NULL,
  `booksreturndate` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `return_status` enum('pending','returned') DEFAULT 'pending',
  `late_fee` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_issuebook`
--

INSERT INTO `t_issuebook` (`id`, `utype`, `idno`, `name`, `lecturer`, `phone`, `email`, `booksname`, `booksissuedate`, `booksreturndate`, `username`, `return_status`, `late_fee`) VALUES
(17, 'teacher', '1001', 'Nahid Hossen', 'CSE', '01721455456', 'nahid001@gmail.com', 'Theoretical Numerical Analysis', '03/04/2024', '04/05/2024', 'nahid22', 'pending', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `t_registration`
--

CREATE TABLE `t_registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lecturer` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `idno` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `utype` varchar(7) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(7) NOT NULL,
  `vkey` varchar(250) NOT NULL,
  `verified` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_registration`
--

INSERT INTO `t_registration` (`id`, `name`, `username`, `password`, `lecturer`, `email`, `phone`, `idno`, `address`, `utype`, `photo`, `status`, `vkey`, `verified`) VALUES
(1, 'Nahid Hossen', 'nahid22', '123456', 'CSE', 'nahid001@gmail.com', '01721455456', '1001', 'Sonadanga 2nd phase, khulna', 'teacher', 'upload/avatar.jpg', 'yes', 'dsfdfsghrfjhyetryt5ergbfvh', 'yes'),
(2, 'Samir Ahmed', 'samir22', '123456', 'CSE', 'samir22@gmail.com', '01521488890', '1008', 'Sonadanga 2nd phase', 'teacher', 'upload/avatar.jpg', 'yes', 'iuyirtytrfhgn4w3erterfgvggfhgfh', 'yes'),
(4, 'jubayer muhit', 'jubayer22', '123456', 'cse', 'jubayer.muhit@gmail.com', '0177725845', '1245555655', 'khulna', 'teacher', 'upload/avatar.jpg', 'no', '7a3b7cd62fe6740522ecb64f7e9b1ee3', 'no');

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
(2, 'Victor Arnold', '$2y$10$JwGG3W/aRyb9PKKN.fy0wed1K/aLZQG6Vnu2YMG5hFEJEb4DDEgWS', 'arnod@gmail.com', 'B.Sc Computer Science', 'CCS\\00046/022', '0743720033', 'Praise and Worship', 3, 'Weso', ''),
(4, 'Preston Maina', '$2y$10$0dMj28AEWr8QqshfnKzLfuXJM9OU/4C9E6f47zcZqt2Ca9XVakpse', 'prestonmaina75@gmail.com', 'BSc Computer Science', 'CCS/00007/021', '0791666055', 'Media and IT', 3, 'Central Evangelistic Team', ''),
(11, 'Amakalu Vitalis', '$2y$10$t5b4z0kdkDzZSjufoDJjWuh1MLwE8GxwY0IkwOvZfUNgUghez/xN2', 'amakalu254@gmail.com', 'Computer Science', 'CCS/00046/022', '0743720033', 'Media and IT', 3, 'Weso', 'backend/uploads/school_Ids/66da00a3767d8-choir.jpeg'),
(12, 'Paul Mwika', '$2y$10$WtZUYguQoFyXesGF6yZctulpqLRHMBb9urJGAgFBj1iFcZx1M4eba', 'mwikapaul61@gmail.com', 'Economics and Statistics', 'BES/00010/021', '0745614323', 'Media and IT', 4, 'Central Evangelistic Team', 'backend/uploads/school_Ids/66db38d42408a-creative.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
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
-- Indexes for table `eveteam`
--
ALTER TABLE `eveteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finezone`
--
ALTER TABLE `finezone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadership`
--
ALTER TABLE `leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib_registration`
--
ALTER TABLE `lib_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_books`
--
ALTER TABLE `request_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_registration`
--
ALTER TABLE `std_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_issuebook`
--
ALTER TABLE `t_issuebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_registration`
--
ALTER TABLE `t_registration`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `eveteam`
--
ALTER TABLE `eveteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finezone`
--
ALTER TABLE `finezone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `leadership`
--
ALTER TABLE `leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lib_registration`
--
ALTER TABLE `lib_registration`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_books`
--
ALTER TABLE `request_books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `std_registration`
--
ALTER TABLE `std_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `t_issuebook`
--
ALTER TABLE `t_issuebook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_registration`
--
ALTER TABLE `t_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
