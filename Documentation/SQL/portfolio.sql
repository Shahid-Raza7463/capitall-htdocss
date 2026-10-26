-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 03:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `teammember_id` int(10) DEFAULT NULL,
  `description` varchar(200) CHARACTER SET utf16 COLLATE utf16_croatian_ci DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `skillheading` varchar(200) DEFAULT NULL,
  `skilldescription1` varchar(200) DEFAULT NULL,
  `skilldescription2` varchar(200) DEFAULT NULL,
  `websitelink` varchar(200) DEFAULT NULL,
  `cityname` varchar(200) DEFAULT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `freelance` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `teammember_id`, `description`, `image`, `skillheading`, `skilldescription1`, `skilldescription2`, `websitelink`, `cityname`, `degree`, `freelance`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hey there, Name\'s Shahid Raza and I\'m a Full Stack Web Developer,worked @TrakAff as a laravel backend web developer and currently working as laravel backend web developer @Capitall. I\'m proficient in ', 'img/my-profile-img (3).png', 'Full Stack Web Developer', 'I am currently expanding my skills in React Native and have recently developed an app called FriendsList. This project has allowed me to explore the fundamentals of mobile app development.', 'I have completed nearly 9 projects that have helped me become a skilled professional in Backend web development.', 'shahid1.infinityfreeapp.com', 'Sursand, Sitamarhi, India', 'Master', 'Not Available', '2023-07-28 07:11:12', '2023-07-28 07:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `maplink` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `address`, `contact_number`, `emailid`, `maplink`, `created_at`, `updated_at`) VALUES
(1, 'Laxmi Nagar Metro Station New Delhi.', '917488952139', 'shahidraza7463@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.974898484312!2d77.27280758321282!3d28.630514405676287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad2277af7d%3A0xe68dd5cbcfe7d692!2sLaxmi%20Nagar%20Metro%20Station!5e0!3m2!1sen!2sus!4v1725388219908!5m2!1sen!2sus', '2023-09-01 23:45:26', '2023-09-01 23:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `skype`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shahid raza', 'shahid@gmail.com', 'skype-234567', 'i want to contact', 'Please call me dear', '2023-09-01 23:45:26', '2023-09-01 23:45:26'),
(4, 'hamidz', 'abcdzze@gmail.com', 'tttwrr', 'i want to contzact', 'zzzz', '2023-09-21 03:25:58', '2023-09-21 03:25:58'),
(5, 'sss', 'shahid@gmail.com', 'a', 'aa', 'aa', '2023-09-21 07:25:59', '2023-09-21 07:25:59'),
(6, 'fdfd', 'abcdxse@gmail.com', 'tttw', 'i want to coxntact', 'zxz', '2023-09-26 06:16:26', '2023-09-26 06:16:26'),
(7, 'sss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2024-10-19 06:35:32', '2024-10-19 06:35:32'),
(8, 'sss', 'itsupport_delhi@vsa.co.in', NULL, 'sss', 'xxxx', '2024-10-19 06:40:44', '2024-10-19 06:40:44'),
(9, 'sss', 'vishal@vsa.co.in', NULL, 'zz', 'zzz', '2024-10-19 06:47:36', '2024-10-19 06:47:36'),
(10, 'sss', 'bhaskark@vsa.co.in', NULL, 'nh', 'njnn', '2024-10-19 06:48:42', '2024-10-19 06:48:42'),
(11, 'debitor1', 'shahidraza@capitall.io', NULL, 'sdfv', 'sdvsVs', '2024-11-22 13:24:38', '2024-11-22 13:24:38'),
(12, 'DAD', 'itsupport_delhi@vsa.co.in', NULL, 'dfcfas', 'asdfs', '2024-11-22 14:13:51', '2024-11-22 14:13:51'),
(13, 'ss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2024-11-22 14:17:40', '2024-11-22 14:17:40'),
(14, 'ww', 'wwtrakaff@gmail.com', NULL, 'ww', 'ww', '2024-11-22 14:18:38', '2024-11-22 14:18:38'),
(15, 'ss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'ss', '2024-11-22 14:20:20', '2024-11-22 14:20:20'),
(16, 'ss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'ss', '2024-11-22 14:20:25', '2024-11-22 14:20:25'),
(17, 'hunsa', 'vishal@vsa.co.in', NULL, 'sss', 'sss', '2024-11-22 14:21:20', '2024-11-22 14:21:20'),
(18, 'qqq', 'sunnygupta@vsa.co.in', NULL, 'qqq', 'qqq', '2024-11-22 14:27:20', '2024-11-22 14:27:20'),
(19, 'ad', 'sunnygupta@vsa.co.in', NULL, 'ww', 'wQ', '2024-11-22 14:28:52', '2024-11-22 14:28:52'),
(20, 'papita', 'bhaskark@vsa.co.in', NULL, 'i want to contact', 'sss', '2024-11-22 14:30:21', '2024-11-22 14:30:21'),
(21, 'chun', 'vishal@vsa.co.in', NULL, 'ef', 'ffdf', '2024-11-23 04:11:19', '2024-11-23 04:11:19'),
(22, 'chun1', 'sunnygupta@vsa.co.in', NULL, 'aaa', 'sss', '2024-11-23 04:12:32', '2024-11-23 04:12:32'),
(23, 'ww', 'sunnygupta@vsa.co.in', NULL, 'ww', 'sxs', '2024-11-23 04:16:52', '2024-11-23 04:16:52'),
(24, 'ww', 'sunnygupta@vsa.co.in', NULL, 'ww', 'sxs', '2024-11-23 04:19:50', '2024-11-23 04:19:50'),
(25, 'ww', 'sunnygupta@vsa.co.in', NULL, 'ww', 'sxs', '2024-11-23 04:19:51', '2024-11-23 04:19:51'),
(26, 'ww', 'sunnygupta@vsa.co.in', NULL, 'ww', 'sxs', '2024-11-23 04:19:57', '2024-11-23 04:19:57'),
(27, 'sss', 'vishal@vsa.co.in', NULL, 'sss', 'ddd', '2024-11-23 04:20:10', '2024-11-23 04:20:10'),
(28, 'dd', 'vishal@vsa.co.in', NULL, 'aa', 'aa', '2024-11-23 04:21:32', '2024-11-23 04:21:32'),
(29, 'ss', 'sunnygupta@vsa.co.in', NULL, 'ss', 'sss', '2024-11-23 04:21:57', '2024-11-23 04:21:57'),
(30, '222', 'sunnygupta@vsa.co.in', NULL, 'sss', 'ss', '2024-11-23 04:24:26', '2024-11-23 04:24:26'),
(31, 'ass', 'sunnygupta@vsa.co.in', NULL, 'ss', 'sss', '2024-11-23 04:27:42', '2024-11-23 04:27:42'),
(32, 'ss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2024-11-23 04:36:41', '2024-11-23 04:36:41'),
(33, 'ss', 'itsupport_delhi@vsa.co.in', NULL, 'ss', 'sss', '2024-11-23 04:43:13', '2024-11-23 04:43:13'),
(34, 'ss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'ss', '2024-11-23 04:44:59', '2024-11-23 04:44:59'),
(35, 'ss', 'vishal@vsa.co.in', NULL, 'ss', 'ss', '2024-11-23 04:47:20', '2024-11-23 04:47:20'),
(36, 'sss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2024-11-23 04:48:02', '2024-11-23 04:48:02'),
(37, 'sss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2024-11-23 04:48:11', '2024-11-23 04:48:11'),
(38, 'sss', 'sunnygupta@vsa.co.in', NULL, 'ss', 'sss', '2024-11-23 04:49:32', '2024-11-23 04:49:32'),
(39, 'sss', 'sunnygupta@vsa.co.in', NULL, 'ss', 'ss', '2024-11-23 04:52:14', '2024-11-23 04:52:14'),
(40, 'ss', 'sunnygupta@vsa.co.in', NULL, 'ss', 'ss', '2024-11-23 04:52:34', '2024-11-23 04:52:34'),
(41, 'ws', 'sunnygupta@vsa.co.in', NULL, 'dsd', 'dssd', '2024-11-23 04:53:34', '2024-11-23 04:53:34'),
(42, 'sss', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2024-11-23 04:59:55', '2024-11-23 04:59:55'),
(43, 'ss', 'sunnygupta@vsa.co.in', NULL, 'ass', 'sss', '2024-11-23 05:00:08', '2024-11-23 05:00:08'),
(44, 'xxx', 'sunnygupta@vsa.co.in', NULL, 'xx', 'xxx', '2024-11-23 05:02:20', '2024-11-23 05:02:20'),
(45, 'xxx', 'sunnygupta@vsa.co.in', NULL, 'xxx', 'xxx', '2024-11-23 05:02:28', '2024-11-23 05:02:28'),
(46, 'xxx', 'sunnygupta@vsa.co.in', NULL, 'xx', 'xxx', '2024-11-23 05:02:42', '2024-11-23 05:02:42'),
(47, 'kgsaaaa', 'shahidraza@capitall.io', NULL, 'zxx', 'xxx', '2024-11-23 05:02:50', '2024-11-23 05:02:50'),
(48, 'qqq', 'itsupport_delhi@vsa.co.in', NULL, 'qqq', 'qq', '2024-11-23 05:13:13', '2024-11-23 05:13:13'),
(49, 'qqq', 'sunnygupta@vsa.co.in', NULL, 'qqq', 'qqq', '2024-11-23 05:13:27', '2024-11-23 05:13:27'),
(50, 'Himanshu', 'mdshahidraza7886@gmail.com', NULL, 'Hhjj', 'Ghj', '2024-11-23 05:20:57', '2024-11-23 05:20:57'),
(51, 'Patna', 'mdshahidraza7886@gmail.com', NULL, 'Ghjj', 'Hjk', '2024-11-23 05:21:26', '2024-11-23 05:21:26'),
(52, 'Moshahid', 'mdshahidraza7886@gmail.com', NULL, 'Hhh', 'Hhuijh', '2024-11-23 05:36:07', '2024-11-23 05:36:07'),
(53, 'sursand', 'sunnygupta@vsa.co.in', NULL, 'i want to contact', 'ssss', '2024-11-23 20:24:56', '2024-11-23 20:24:56'),
(54, 'Hunda', 'mdshahidraza7886@gmail.com', NULL, 'Ghjj', 'Hjj', '2024-11-28 20:49:30', '2024-11-28 20:49:30'),
(55, 'Kumkum', 'mdshahidraza7886@gmail.com', NULL, 'Yyy', 'Jjkk', '2024-12-03 12:51:00', '2024-12-03 12:51:00'),
(56, 'Abbu', 'yourabbu@gmail.com', NULL, 'Bargaining', 'Gand dega 150 me', '2024-12-05 15:01:53', '2024-12-05 15:01:53'),
(57, 'hi', 'sunnygupta@vsa.co.in', NULL, 'sss', 'ssss', '2024-12-07 20:06:57', '2024-12-07 20:06:57'),
(58, 'Heyyy', 'shahit2019@ismpatna.ac.in', NULL, 'Tyy', 'Yuii', '2024-12-16 16:34:13', '2024-12-16 16:34:13'),
(59, 'Yyu', 'yytyy@j', NULL, 'Hhjj', 'Jjjj', '2024-12-16 16:35:21', '2024-12-16 16:35:21'),
(60, 'Akshay kumar', 'akkiakshay1414@gmail.com', NULL, 'contect', 'I wanna contact you .', '2024-12-17 20:36:05', '2024-12-17 20:36:05'),
(61, 'sunder22', 'sunnygupta@vsa.co.in', NULL, 'sss', 'sss', '2025-01-22 12:53:57', '2025-01-22 12:53:57'),
(62, 'egse', 'manojsangwan@capitall.io', NULL, 'rdgxf', 'zergz', '2025-02-12 15:05:22', '2025-02-12 15:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `degreename` varchar(200) DEFAULT NULL,
  `startdate` year(4) DEFAULT NULL,
  `enddate` year(4) DEFAULT NULL,
  `universityname` varchar(200) DEFAULT NULL,
  `grade` decimal(4,2) DEFAULT NULL,
  `percentage` decimal(4,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degreename`, `startdate`, `enddate`, `universityname`, `grade`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Master of Computer Applications (MCA)', '2023', '2025', 'Chandigarh University, Punjab.', 7.30, NULL, '2025-01-08 16:20:42', '2025-01-21 16:20:46'),
(2, 'Bachelor of Computer Applications (BCA)', '2019', '2022', 'International School of Management, Patna, affiliated with Aryabhatta Knowledge University', 7.48, 71.06, NULL, NULL),
(3, 'Intermediate in Science', '2017', '2019', 'Saryu High School, Sursand, Sitamarhi, affiliated with Bihar School Examination Board\r\n', NULL, 71.80, NULL, NULL),
(4, 'Matriculation (10th)', '2016', '2017', 'Saryu High School, Sursand, Sitamarhi, affiliated with Bihar School Examination Board', NULL, 64.20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `skills` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `image`, `name`, `skills`, `created_at`, `updated_at`) VALUES
(1, 'img\\home\\home1 (1).jpg', 'Shahid Raza', 'Backend Web Developer, Frontend Web Developer, Full Stack Web Developer, Software Tester', '2025-01-22 11:39:32', '2025-01-20 11:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pagename` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagename`, `created_at`, `updated_at`) VALUES
(1, 'home', '2020-11-22 22:58:17', NULL),
(2, 'contract', '2020-11-22 22:58:15', NULL),
(3, 'about', '2020-11-18 16:48:24', NULL),
(4, 'resume', '2020-11-18 16:48:22', NULL),
(5, 'settings', '2020-11-18 16:48:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(2, 1, 2, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(3, 1, 3, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(4, 1, 4, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(5, 1, 5, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(6, 2, 3, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(7, 2, 4, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(8, 3, 3, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(9, 3, 4, '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(10, 3, 5, '2020-12-28 18:30:00', '2020-12-28 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `professionalexperience`
--

CREATE TABLE `professionalexperience` (
  `id` int(11) NOT NULL,
  `jobname` varchar(200) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `companylink` varchar(200) DEFAULT NULL,
  `jobdescription` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professionalexperience`
--

INSERT INTO `professionalexperience` (`id`, `jobname`, `startdate`, `enddate`, `companyname`, `companylink`, `jobdescription`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Backend Web Developer', '2023-09-29', '2025-01-01', 'Capitall India Private Limited, New Delhi', 'https://capitall.io/', '<li>Developed the Vsa Data Room.</li>\n<li>Developed Balance confirmation project.</li>\n<li>Gained significant experience and learned a lot during this period.</li>\n<li>Acquired basic knowledge in React.js, Node.js and React native.</li>\n<li>Collaborated with clients to understand their requirements and successfully delivered projects based on their specifications.</li>\n<li>Gained valuable experience in software testing during this period.</li>', NULL, NULL),
(2, 'Laravel Backend Web Developer Intern', '2023-03-01', '2023-09-26', 'TrakAff-Affiliate Tracking Software , New Delhi', 'https://www.trakaff.com/', '<li>Developed the Dynamic Expertaff web application projects.</li>\n<li>Developed the Dynamic Linktester web application projects.</li>\n<li>Gained expertise in Php, Laravel, Mysql, Ajax, Json, JavaScript.</li>\n<li>Successfully applied theoretical knowledge in practical situations.</li>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectimagefile`
--

CREATE TABLE `projectimagefile` (
  `id` int(11) NOT NULL,
  `projects_id` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectimagefile`
--

INSERT INTO `projectimagefile` (`id`, `projects_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/portfolio/project-vsaedit.png', NULL, NULL),
(2, 1, 'img/portfolio/project-vsaedit (2).png', NULL, NULL),
(3, 1, 'img/portfolio/project-vsaedit (3).png', NULL, NULL),
(4, 1, 'img/portfolio/project-vsa (4).png', NULL, NULL),
(5, 1, 'img/portfolio/project-vsa (5).png', NULL, NULL),
(6, 1, 'img/portfolio/project-vsa (6).png', NULL, NULL),
(7, 1, 'img/portfolio/project-vsa (7).png', NULL, NULL),
(8, 1, 'img/portfolio/project-vsa (8).png', NULL, NULL),
(9, 1, 'img/portfolio/project-vsa (9).png', NULL, NULL),
(10, 1, 'img/portfolio/project-vsa (10).png', NULL, NULL),
(11, 1, 'img/portfolio/project-vsa (11).png', NULL, NULL),
(12, 11, 'img/app/portfolioapp2.png', NULL, NULL),
(13, 11, 'img/app/portfolioapp5.png', NULL, NULL),
(14, 11, 'img/app/portfolioapp3.png', NULL, NULL),
(15, 11, 'img/app/portfolioapp4.png', NULL, NULL),
(16, 11, 'img/app/portfolioapp6.png', NULL, NULL),
(17, 11, 'img/app/portfolioapp1.png', NULL, NULL),
(18, 14, 'img/app/calcullater (2).png', NULL, NULL),
(19, 14, 'img/app/calcullater (1).png', NULL, NULL),
(20, 12, 'img/app/friendslist (4).png', NULL, NULL),
(21, 12, 'img/app/friendslist (3).png', NULL, NULL),
(22, 12, 'img/app/friendslist (2).png', NULL, NULL),
(23, 12, 'img/app/friendslist (5).png', NULL, NULL),
(24, 2, 'img/portfolio/project-portfolio (2).png', NULL, NULL),
(25, 2, 'img/portfolio/project-portfolio (4).png', NULL, NULL),
(26, 2, 'img/portfolio/project-portfolio (5).png', NULL, NULL),
(27, 2, 'img/portfolio/project-portfolio (3).png', NULL, NULL),
(28, 2, 'img/portfolio/project-portfolio (1).png', NULL, NULL),
(29, 4, 'img/portfolio/project-linktester (1).png', NULL, NULL),
(30, 4, 'img/portfolio/project-linktester (2).png', NULL, NULL),
(31, 4, 'img/portfolio/project-linktester (3).png', NULL, NULL),
(32, 4, 'img/portfolio/project-linktester (4).png', NULL, NULL),
(33, 4, 'img/portfolio/project-linktester (5).png', NULL, NULL),
(34, 4, 'img/portfolio/project-linktester (6).png', NULL, NULL),
(35, 4, 'img/portfolio/project-linktester (7).png', NULL, NULL),
(36, 3, 'img/portfolio/project-expertaff (1).png', NULL, NULL),
(37, 3, 'img/portfolio/project-expertaff (2).png', NULL, NULL),
(38, 3, 'img/portfolio/project-expertaff (3).png', NULL, NULL),
(39, 3, 'img/portfolio/project-expertaff (4).png', NULL, NULL),
(40, 3, 'img/portfolio/project-expertaff (5).png', NULL, NULL),
(41, 3, 'img/portfolio/project-expertaff (6).png', NULL, NULL),
(42, 3, 'img/portfolio/project-expertaff (7).png', NULL, NULL),
(43, 3, 'img/portfolio/project-expertaff (8).png', NULL, NULL),
(44, 8, 'img/portfolio/project-login (3).jpg', NULL, NULL),
(45, 8, 'img/portfolio/project-login (2).jpg', NULL, NULL),
(46, 8, 'img/portfolio/project-login (1).jpg', NULL, NULL),
(47, 6, 'img/portfolio/project-book (1).jpg', NULL, NULL),
(48, 6, 'img/portfolio/project-book (2).jpg', NULL, NULL),
(49, 6, 'img/portfolio/project-book (5).jpg', NULL, NULL),
(50, 6, 'img/portfolio/project-book (3).jpg', NULL, NULL),
(51, 6, 'img/portfolio/project-book (4).jpg', NULL, NULL),
(52, 7, 'img/portfolio/project-1 (8).png', NULL, NULL),
(53, 7, 'img/portfolio/project-1 (811).png', NULL, NULL),
(54, 7, 'img/portfolio/project-1 (4).jpg', NULL, NULL),
(55, 9, 'img/portfolio/project-1 (7).png', NULL, NULL),
(56, 9, 'img/portfolio/project-1 (71).png', NULL, NULL),
(57, 10, 'img/portfolio/project-1 (6).png', NULL, NULL),
(58, 10, 'img/portfolio/project-1 (61).png', NULL, NULL),
(59, 5, 'img/portfolio/project-sopping (1).jpg', NULL, NULL),
(60, 5, 'img/portfolio/project-sopping (4).png', NULL, NULL),
(61, 5, 'img/portfolio/project-sopping (5).png', NULL, NULL),
(62, 5, 'img/portfolio/project-sopping (6).png', NULL, NULL),
(63, 5, 'img/portfolio/project-sopping (1).png', NULL, NULL),
(64, 5, 'img/portfolio/project-sopping (2).png', NULL, NULL),
(65, 5, 'img/portfolio/project-sopping (3).png', NULL, NULL),
(66, 5, 'img/portfolio/project-sopping (7).png', NULL, NULL),
(67, 5, 'img/portfolio/project-sopping (8).png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `projectname` varchar(400) CHARACTER SET utf16 COLLATE utf16_croatian_ci DEFAULT NULL,
  `projectdescription` text DEFAULT NULL,
  `projectlurl` varchar(100) DEFAULT NULL,
  `projectmage` varchar(200) DEFAULT NULL,
  `projectimagezoom` varchar(200) DEFAULT NULL,
  `categoryname` varchar(200) DEFAULT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `projectenddate` varchar(200) DEFAULT NULL,
  `toolsandtechnologies` text DEFAULT NULL,
  `projectliveurl` varchar(200) DEFAULT NULL,
  `descreption` text DEFAULT NULL,
  `highlightnote1` varchar(200) DEFAULT NULL,
  `highlightnote2` varchar(200) DEFAULT NULL,
  `listdescreption` text DEFAULT NULL,
  `listheading` varchar(200) DEFAULT NULL,
  `listdescreption2` text DEFAULT NULL,
  `listheading2` varchar(200) DEFAULT NULL,
  `anotherdescreption` text DEFAULT NULL,
  `status` int(10) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `projectname`, `projectdescription`, `projectlurl`, `projectmage`, `projectimagezoom`, `categoryname`, `companyname`, `projectenddate`, `toolsandtechnologies`, `projectliveurl`, `descreption`, `highlightnote1`, `highlightnote2`, `listdescreption`, `listheading`, `listdescreption2`, `listheading2`, `anotherdescreption`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Virtual Data Room', 'A VDR is a secure online repository for storing and sharing confidential documents.', 'https://www.google.com/', 'img/portfolio/project-vsaedit.png', 'img\\portfolio\\project-vsaedit.png', 'Web design', 'Capitall India Private Limited', '2023-10-01', 'Php, Laravel, Mysql, Ajax, Json, JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://vsa.capitall.io', '<p>A virtual data room (VDR) is a secure online repository for storing and sharing confidential documents. It is used by businesses of all sizes to facilitate mergers and acquisitions (M&A), fundraising, due diligence, and other transactions. </p>\r\n<p>VDRs offer a number of advantages over traditional physical data rooms. They are more secure, as they are hosted in the cloud and protected by strong encryption. They are also more convenient, as users can access them from anywhere with an internet connection. And they are more cost-effective, as there is no need to rent or build a physical space. </p>', 'This project includes role-based functionality, such as Admin, Manager, Staff, HR, and others.', 'Admin can manage all front-end functionalities through the admin dashboard', '<li>The organisation that wants to share documents creates a VDR account and invites the users who need access.</li>\n<li>The users log in to the VDR and upload the documents they want to share.</li>\n<li>The documents are stored in a secure, password-protected environment.</li>\n<li>The users can view, download, and print the documents as needed.</li>\n<li>The organisation can revoke access to the documents at any time.</li>', 'A VDR typically works as follows', NULL, NULL, NULL, 1, '2023-07-28 07:11:12', '2023-07-28 07:11:12'),
(2, 1, 'Portfolio', 'My aim to provide a clear and organized overview of my work and experiences.', 'https://www.google.com/', 'img\\portfolio\\project-portfolio (2).png', 'img/portfolio/project-portfolio (2).png', 'Web design', 'Capitall India Private Limited', '2023-10-01', 'Php, Laravel, Mysql, Ajax, Json, JavaScript, HTML, CSS, jQuery, Bootstrap,', 'http://shahid1.infinityfreeapp.com', '<p>Welcome to my portfolio website! This is a comprehensive showcase of my professional journey, skills, and projects. Through this platform, I aim to provide a clear and organized overview of my work and experiences, all managed seamlessly through an intuitive admin dashboard.</p>', 'Admin can manage all front-end functionalities through the admin dashboard', NULL, '<li><strong>Home</strong>: The homepage provides a brief introduction to me and my professional journey. It serves as an overview of my portfolio and allows visitors to explore further.</li>\n<li><strong>About</strong>: This section is dedicated to sharing more about me, including my background, skills, and what drives my passion for web development.</li>\n<li><strong>Resume</strong>: In this section, you can find detailed information about my education, professional experience, technical skills, and certifications.</li>\n<li><strong>Portfolio</strong>: A collection of projects that I have worked on, showcasing my technical expertise and ability to deliver innovative solutions. Each project is described in detail with its key features.</li>\n<li><strong>Contact</strong>: This section provides my contact information, including email, phone number, and a contact form for inquiries. It also includes my location for better accessibility.</li>\n', NULL, NULL, NULL, NULL, 1, '2023-07-28 07:11:12', '2023-07-28 07:11:12'),
(3, 1, 'ExpertAff', 'ExpertAff is a network listing site.', 'https://www.google.com/', 'img/portfolio/project-expertaff (1).png', 'img/portfolio/project-expertaff (1).png', 'Web design', 'TrakAff-Affiliate Tracking Software', '2023-10-01', 'Php, Laravel, Mysql, Ajax, Json, JavaScript,\n                                HTML, CSS, jQuery, Bootstrap,', 'https://www.expertaff.infinityfreeapp.com', '<p>ExpertAff is a platform designed for network listing, where users can create and manage affiliate networks. It allows users to create networks, leave reviews, and respond to them. The system includes features like login, signup, and forgot password functionality. The navbar contains various tabs:</p>', 'Admin can manage all front-end functionalities through the admin dashboard', NULL, '<li><strong>Add Network/Program</strong>: Allows users to create new networks.</li>\n<li><strong>Networks</strong>: View and manage all listed networks in one place.</li>\n<li><strong>Offers</strong>: Lists all available offers related to the networks.</li>\n<li><strong>Resources</strong>: Provides resources related to affiliate marketing.</li>\n<li><strong>Reviews</strong>: Allows users to give reviews on networks and reply to them.</li>\n<li><strong>Blog</strong>: Users can create and browse blogs related to affiliate marketing.</li>', NULL, '<li><strong>Rate Networks</strong>: Users can rate networks to give feedback on their performance and overall experience.</li>\n<li><strong>Sponsored Ads</strong>: The platform includes space for sponsored advertisements, allowing for promotional content display.</li>', 'Additionally, the platform offers the ability to:', 'This project provides a comprehensive platform for managing and interacting with affiliate networks.', 1, NULL, NULL),
(4, 1, 'Linktester', 'This project is related to URL tracking.', 'https://www.google.com/', 'img/portfolio/project-linktester (6).png', 'img/portfolio/project-linktester (6).png', 'Web design', 'TrakAff-Affiliate Tracking Software', '2023-10-01', 'Php, Laravel, Mysql, Ajax, Json, JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://www.linkchecker.infinityfreeapp.com', '<p>This project, Linktester, is designed to track and test URLs. It allows users to input any URL and checks how many redirection URLs are associated with it. The system then displays the redirection results in a dedicated section. Additionally, it generates a unique URL that can be shared with others, allowing anyone with the link to view the results. This tool is useful for analyzing URL redirects and sharing the insights in a user-friendly format.</p>', 'Admin can manage all front-end functionalities through the admin dashboard', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, 1, 'Shopping Mart', 'Shopping Mart is an online shopping e-commerce site..', 'https://www.google.com/', 'img/portfolio/project-sopping (1).png', 'img/portfolio/project-sopping (1).png', 'Web design', 'ISM', '2022-10-01', 'Php, Mysql, Ajax, Json, JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://shopping.mart.com', '<p>My second project, Shopping Mart, is an e-commerce website that I developed during my college years. The platform allows users to browse products, view detailed product information, and in the future, purchase items. While the payment system is not yet implemented, this feature is planned for future updates.</p>\n<p>To build this project, I utilized HTML, CSS, and JavaScript for the frontend, and PHP with MySQL for the backend. The site includes essential features such as user authentication, allowing users to sign up, log in, and log out. Additionally, users can submit their location, which will enable efficient product delivery when the shopping feature is fully functional.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(6, 1, 'Online Book Store', 'An e-commerce platform tailored for purchasing books online.', 'https://www.google.com/', 'img/portfolio/project-book (1).jpg', 'img/portfolio/project-book (1).jpg', 'Web design', 'ISM', '2022-10-01', 'JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://onlinebook.store.com', '<p>This project is an Online Book Store where users can explore a wide collection of books. Visitors can view book details, including descriptions and pricing. While the \"Add to Cart\" and purchase functionality is still under development, the site provides an intuitive interface for browsing available books. Once completed, users will be able to seamlessly add books to their cart and proceed with purchasing. The platform is designed to offer a simple and user-friendly experience for book enthusiasts.</p>\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(7, 1, 'E-commerce site', 'This project showcases my ability to build dynamic E-commerce site.', 'https://www.google.com/', 'img/portfolio/project-1 (8).png', 'img/portfolio/project-1 (8).png', 'Web design', 'ISM', '2022-10-01', 'JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://ecommerce.com', '<p>This project is a single-page E-commerce site where users can browse and view products. The site is designed to provide a smooth and user-friendly experience, allowing customers to explore product details, including images, descriptions, and pricing. Although it currently focuses on product display, future enhancements will enable complete shopping functionalities, such as adding items to the cart and making purchases.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(8, 1, 'Login System', 'This project is a robust Login System', 'https://www.google.com/', 'img/portfolio/project-login (3).jpg', 'img/portfolio/project-login (3).jpg', 'Web design', 'ISM', '2022-10-01', 'JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://loginsystem.com', '<p>This project is a robust Login System that allows users to securely log in, sign up, and recover their password through the \"Forgot Password\" feature. It ensures user authentication and offers a simple, user-friendly interface for managing user credentials. The system is designed with security best practices to protect user data and provides a seamless experience for account creation and login functionality.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(9, 1, 'Google Drive Clone', 'This project similar to Google Drive.', 'https://www.google.com/', 'img/portfolio/project-1 (7).png', 'img/portfolio/project-1 (7).png', 'Web design', 'ISM', '2022-10-01', 'JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://Googledrive.com', '<p>This project entails developing a cloud-based file management system inspired by Google Drive. It replicates essential features such as file storage, sharing, and organization, providing users with a robust platform for managing their digital files efficiently.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(10, 1, 'Analog Digital Clock', 'The clock is designed to display the current time.', 'https://www.google.com/', 'img/portfolio/project-1 (6).png', 'img/portfolio/project-1 (6).png', 'Web design', 'ISM', '2022-10-01', 'JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://Digitalclock.com', '<p>This project showcases an Analog Clock, featuring a watch image with three hands: hour, minute, and second. The design emphasizes the classic analog timekeeping method, providing a visually appealing and accurate representation of time through its traditional mechanical interface.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(11, 2, 'Portfolio App', NULL, 'https://www.google.com/', 'img/app/portfolioapp2.png', 'img/app/portfolioapp2.png', 'Mobile App', 'Capitall India Private Limited', '2024-11-01', 'React Native, Apis, Android Studio', NULL, '<p>Welcome to my portfolio App! This is a comprehensive showcase of my professional journey, skills, and projects. Through this platform, I aim to provide a clear and organized overview of my work and experiences, all managed seamlessly through an intuitive admin dashboard.</p>', NULL, NULL, '<li><strong>Home</strong>: A quick overview of my professional profile.</li>\n<li><strong>About</strong>: This section is dedicated to sharing more about me, including my background, skills, and what drives my passion for web development.</li>\n<li><strong>Resume</strong>: In this section, you can find detailed information about my education, professional experience, technical skills, and certifications.</li>\n<li><strong>Portfolio</strong>: A collection of projects that I have worked on, showcasing my technical expertise and ability to deliver innovative solutions. Each project is described in detail with its key features.</li>\n<li><strong>Contact</strong>: This section provides my contact information, including email, phone number, and a contact form for inquiries.</li>\n<li><strong>Settings</strong>: Options for app personalization.</li>', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(12, 2, 'FriendsList App', NULL, 'https://www.google.com/', 'img/app/friendslist (2).png', 'img/app/friendslist (2).png', 'Mobile App', 'Capitall India Private Limited', '2024-11-01', 'React Native, Apis, Android Studio', NULL, '<p>The FriendsList App is a simple and interactive application that allows users to manage their list of friends effectively. It provides essential functionalities such as creating, viewing, editing, and deleting friend details, ensuring a smooth user experience.</p>', NULL, NULL, '<li><strong>Login Page:</strong>\n                        <ul>\n                            <li>When the app opens, users are greeted with a login page.</li>\n                            <li>Users need to log in to access the app\'s features securely.</li>\n                        </ul>\n                    </li>\n                    <li><strong>Home Page:</strong>\n                        <ul>\n                            <li>Displays a list of all added friends with their basic details.</li>\n                            <li>Provides intuitive options to manage friends\' data.</li>\n                        </ul>\n                    </li>\n                    <li><strong>Core Functionalities:</strong>\n                        <ul>\n                            <li><b>Create:</b> Add new friends with their details (e.g., name, contact, etc.).</li>\n                            <li><b>View:</b> View detailed information of each friend.</li>\n                            <li><b>Edit:</b> Update or modify friend details as needed.</li>\n                            <li><b>Delete:</b> Remove friends from the list seamlessly.</li>\n                        </ul>\n                    </li>\n                    <li><strong>Technologies Used:</strong> Designed and developed using modern tools and frameworks\n                        (e.g., React Native, Apis, Android Studio).</li>\n                    <li><strong>Learning Outcome:</strong>\n                        <ul>\n                            <li>Gained hands-on experience with CRUD operations.</li>\n                            <li>Improved understanding of user authentication and data management.</li>\n                            <li>Enhanced UI/UX design skills for building clean and responsive interfaces.</li>\n                        </ul>\n                    </li>', NULL, NULL, NULL, 'The FriendsList App showcases my ability to build functional, user-friendly applications with features that simplify daily tasks, such as managing friends\' information.\n', 1, NULL, NULL),
(13, 2, 'Login', NULL, 'https://www.google.com/', 'img/app/friendslist (1).png', 'img/app/friendslist (1).png', 'Mobile App', 'Capitall India Private Limited', '2024-11-01', 'React Native, Apis, Android Studio', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(14, 2, 'Calculator App', NULL, 'https://www.google.com/', 'img/app/calcullater (2).png', 'img/app/calcullater (2).png', 'Mobile App', 'Capitall India Private Limited', '2024-11-01', 'React Native, Apis, Android Studio', NULL, '<p> The Calculator App is one of my beginner-level projects developed while learning mobile app development. This project demonstrates my understanding of user interface design, input handling, and basic computation logic.</p>\n<p> The application allows users to input both positive and negative numbers in two input fields. Upon clicking the <strong>\"Calculate Total\"</strong> button, the app performs the necessary calculations and displays the result instantly.</p>\n', NULL, NULL, '<li><strong>Features:</strong>\n<ul>\n<li>Two input fields to accept positive and negative values.</li>\n<li>Interactive \"Calculate Total\" button to perform calculations.</li>\n<li>Displays the result in real-time with clear visibility.</li>\n</ul>\n</li>\n<li><strong>Technologies Used:</strong> Designed and developed using modern tools and frameworks (e.g., React Native, Apis, Android Studio).</li>\n<li><strong>Learning Outcome:</strong>\n<ul>\n<li>Gained hands-on experience in handling user inputs.</li>\n<li>Learned basic arithmetic operations and event-driven programming.</li>\n<li>Improved UI design skills for a seamless user experience.</li>\n</ul>\n</li>', NULL, NULL, NULL, 'This project served as a foundation for understanding the core concepts of mobile app development and building dynamic applications.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects_category`
--

CREATE TABLE `projects_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `projects_category`
--

INSERT INTO `projects_category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'web', '2020-11-22 22:58:17', NULL),
(2, 'app', '2020-11-22 22:58:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `objective` text DEFAULT NULL,
  `technicalskills` text DEFAULT NULL,
  `certificationstraining` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `title`, `description`, `objective`, `technicalskills`, `certificationstraining`, `status`, `created_at`, `updated_at`) VALUES
(1, 'frontend', 'Passionate and experienced Backend Web Developer with a solid foundation in full-stack development. Skilled in a variety of technologies, from PHP and Laravel to React and Node.js, I am driven to build innovative web solutions that meet and exceed client expectations. My journey in web development has been marked by a commitment to continuous learning and adapting to the latest industry trends. Below is a summary of my professional experience, education, skills, and certifications.', 'Experienced Backend Web Developer with a passion for developing innovative web applications.Skilled in full-stack development,including front-end and back-end technologies.Seeking to use my skills and experience to contribute to a dynamic web development team', 'Programming Languages, Tools & Technologies, and Frameworks & Libraries: PHP, Laravel, MySQL, AJAX, JSON, JavaScript, React.js, Node.js, React Native, HTML, CSS, jQuery, Bootstrap, Git, and C Programming.', '<li>Certificate of Appreciation of frontend web development - Issuing Organization: DevTown, Year of Completion: 2022</li>\n<li>Certificate of Completion front end web development bootcamp - Issuing Organization: DevTown, Year of Completion: 2022</li>\n<li>Masterclass on Javascript Bootcamp - Issuing Organization: Scaler Academy, Year of Completion: 2022</li>\n<li>Certificate of Completion Php Language - Issuing Organization: Great Learning, Year of Completion: 2023</li>', 1, '2024-03-30 17:09:29', '2024-09-04 06:54:54'),
(2, 'backend', '<p>Dear Sir/ Madam, &nbsp;</p><p>&nbsp;</p><p><strong>M/s V. Sankar Aiyar &amp; Co., Chartered Accountants</strong> are the statutory auditors of [clientname] for Financial Year [financialyear]. For Audit purpose, kindly upload the necessary statements/ documents through the below link providing the details of balances for all accounts (savings, current, fixed deposits, borrowings, Non fund based utilisation etc) of [clientname] <strong>Customer Id</strong> [customerid] &nbsp;in your books of account as on [date], alongwith the details of charges held against balances, if any.&nbsp;</p><p>&nbsp;<br>We would appreciate your prompt reply and thank you in advance for your kind co-operation.&nbsp;</p><p> <a href=\"\">Click to Respond</a>&nbsp;</p><p>For any queries, please feel free to contact [contactname]<strong> </strong>on [contactnumber] or [contactemail]<strong>.&nbsp;</strong></p><p>&nbsp;<br><i><strong>Note:</strong></i>&nbsp;<br>1. Kindly respond by clicking on the link. Do not respond to this email.&nbsp;<br>2. If you are not the right recipient, forward this email to the authorised person.&nbsp;<br>&nbsp;</p>', NULL, NULL, NULL, 0, '2024-03-30 17:11:08', '2024-09-04 06:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rolename` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `rolename`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2020-12-28 18:30:00', '2020-12-28 18:30:00'),
(2, 'Admin', '2020-12-28 18:30:00', '2022-06-02 13:00:00'),
(3, 'Manager', '2021-01-01 18:30:00', '2023-07-23 18:30:00'),
(4, 'Staff', '2021-01-08 18:30:00', '2024-01-11 18:30:00'),
(5, 'HR', '2021-01-08 18:30:00', '2023-04-05 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(200) DEFAULT NULL,
  `skill_rating` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Php', 80, 1, '2023-09-01 23:45:26', '2023-09-01 23:45:26'),
(2, 'Laravel', 80, 1, '2023-09-21 03:25:58', '2023-09-21 03:25:58'),
(63, 'Mysql', 80, 1, NULL, NULL),
(64, 'Ajax', 90, 1, NULL, NULL),
(65, 'Json', 90, 1, NULL, NULL),
(66, 'JavaScript', 80, 1, NULL, NULL),
(67, 'React Js', 60, 1, NULL, NULL),
(68, 'Node Js', 60, 1, NULL, NULL),
(69, 'React Native', 70, 1, NULL, NULL),
(70, 'HTML', 90, 1, NULL, NULL),
(71, 'CSS', 70, 1, NULL, NULL),
(72, 'jQuery', 80, 1, NULL, NULL),
(73, 'Bootstrap', 90, 1, NULL, NULL),
(74, 'GitHub', 60, 0, NULL, NULL),
(75, 'C Programming', 70, 0, NULL, NULL),
(76, 'MS Power Point', 60, 0, NULL, NULL),
(77, 'MS Word', 70, 0, NULL, NULL),
(78, 'MS Excel', 60, 0, NULL, NULL),
(79, 'Touch Typing', 35, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `socialmedia_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `socialmedia_name`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'whatsapp', 'https://wa.me/917488952139', 'bi bi-whatsapp', '2023-09-01 23:45:26', '2023-09-01 23:45:26'),
(61, 'facebook', 'https://www.facebook.com/share/UbuEW2ucYCpR4MBK/?mibextid=qi2Omg', 'bi bi-facebook', NULL, NULL),
(62, 'instagram', 'https://www.instagram.com/shahil_solo_boy?utm_source=qr&igsh=bWk2dnU3MTliejdm', 'bi bi-instagram', NULL, NULL),
(63, 'github', 'https://github.com/Shahid-Raza7463?tab=repositories', 'bi bi-github', NULL, NULL),
(64, 'linkedin', 'https://www.linkedin.com/in/mdshahidraza7886', 'bi bi-linkedin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `id` int(10) NOT NULL,
  `staffcode` varchar(200) DEFAULT NULL,
  `staffcodenumber` varchar(200) DEFAULT NULL,
  `mentor_id` int(11) DEFAULT NULL,
  `title_id` int(10) DEFAULT NULL,
  `team_member` varchar(300) DEFAULT NULL,
  `entity` varchar(400) DEFAULT NULL,
  `employment_status` varchar(300) DEFAULT NULL,
  `mobile_no` varchar(300) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `department` varchar(300) DEFAULT NULL,
  `personalemail` varchar(300) DEFAULT NULL,
  `profilepic` varchar(100) DEFAULT NULL,
  `fathername` varchar(200) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `pancardno` varchar(300) DEFAULT NULL,
  `emergencycontactnumber` varchar(400) DEFAULT NULL,
  `adharcardnumber` varchar(400) DEFAULT NULL,
  `aadharupload` varchar(255) DEFAULT NULL,
  `nameasperbank` varchar(300) DEFAULT NULL,
  `nameofbank` varchar(400) DEFAULT NULL,
  `bankaccountnumber` varchar(400) DEFAULT NULL,
  `ifsccode` varchar(400) DEFAULT NULL,
  `cancelcheque` varchar(200) DEFAULT NULL,
  `mothername` varchar(400) DEFAULT NULL,
  `mothernumber` varchar(300) DEFAULT NULL,
  `fathernumber` varchar(300) DEFAULT NULL,
  `panupload` varchar(300) DEFAULT NULL,
  `address_proof` text DEFAULT NULL,
  `designation` varchar(400) DEFAULT NULL,
  `addressupload` varchar(300) DEFAULT NULL,
  `originalcancelcheque` varchar(300) DEFAULT NULL,
  `originalappointment_letter` varchar(300) DEFAULT NULL,
  `originalnda` varchar(300) DEFAULT NULL,
  `originalpanupload` varchar(300) DEFAULT NULL,
  `originaladdressupload` varchar(300) DEFAULT NULL,
  `originalaadharupload` varchar(300) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `teamlead` varchar(100) DEFAULT NULL,
  `qualification` varchar(300) DEFAULT NULL,
  `appointment_letter` varchar(300) DEFAULT NULL,
  `nda` varchar(300) DEFAULT NULL,
  `permanentaddress` text DEFAULT NULL,
  `communicationaddress` text DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `rejoining_date` date DEFAULT NULL,
  `leavingdate` varchar(300) DEFAULT NULL,
  `reasonofleaving` text DEFAULT NULL,
  `dateofresign` varchar(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `gender` varchar(300) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `timesheet_access` int(20) NOT NULL DEFAULT 0,
  `verify` int(11) DEFAULT NULL,
  `relievingstatus` int(11) DEFAULT NULL,
  `category` varchar(400) DEFAULT NULL,
  `cost_hour` int(11) DEFAULT NULL,
  `salary_range` varchar(100) DEFAULT '0',
  `monthly_gross_salary` int(11) NOT NULL DEFAULT 0,
  `pf_applicable` varchar(10) DEFAULT NULL,
  `timesheet_applicable` varchar(50) DEFAULT NULL,
  `taxtds` varchar(300) DEFAULT NULL,
  `taxgrosssalary` varchar(300) DEFAULT NULL,
  `taxpf` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`id`, `staffcode`, `staffcodenumber`, `mentor_id`, `title_id`, `team_member`, `entity`, `employment_status`, `mobile_no`, `emailid`, `department`, `personalemail`, `profilepic`, `fathername`, `dateofbirth`, `pancardno`, `emergencycontactnumber`, `adharcardnumber`, `aadharupload`, `nameasperbank`, `nameofbank`, `bankaccountnumber`, `ifsccode`, `cancelcheque`, `mothername`, `mothernumber`, `fathernumber`, `panupload`, `address_proof`, `designation`, `addressupload`, `originalcancelcheque`, `originalappointment_letter`, `originalnda`, `originalpanupload`, `originaladdressupload`, `originalaadharupload`, `role_id`, `teamlead`, `qualification`, `appointment_letter`, `nda`, `permanentaddress`, `communicationaddress`, `joining_date`, `rejoining_date`, `leavingdate`, `reasonofleaving`, `dateofresign`, `created_by`, `location`, `gender`, `linkedin`, `about`, `status`, `timesheet_access`, `verify`, `relievingstatus`, `category`, `cost_hour`, `salary_range`, `monthly_gross_salary`, `pf_applicable`, `timesheet_applicable`, `taxtds`, `taxgrosssalary`, `taxpf`, `created_at`, `updated_at`) VALUES
(1, 'M1001', '1001', NULL, 1, 'Shahid Raza', NULL, NULL, '7488952139', 'shahidraza7463@gmail.com', NULL, 'shahidraza74630@gmail.com', 'shahidprofile.jpg', 'Md Farman Ali', '2001-01-01', 'CSWPR9192Q', NULL, NULL, NULL, 'Md Shahid Raja', 'Punjab National Bank', '7214000100083242', 'PUNB0721400', NULL, 'Zohra Khatoon', NULL, '9771045574', NULL, NULL, 'Partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, 'MCA', NULL, NULL, 'DA-22,  Shalimar Bagh, New Delhi-110088', 'DA-22,  Shalimar Bagh, New Delhi-110088', '2025-01-01', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-30 10:12:52', '2023-09-30 10:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `teammember_document_files`
--

CREATE TABLE `teammember_document_files` (
  `id` int(11) NOT NULL,
  `teamember_id` int(11) DEFAULT NULL,
  `qualification` varchar(300) DEFAULT NULL,
  `document_file` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teammember_document_files`
--

INSERT INTO `teammember_document_files` (`id`, `teamember_id`, `qualification`, `document_file`, `created_at`, `updated_at`) VALUES
(155, 950, '10 th', '172267557210.pdf', '2024-08-03 08:59:32', '2024-08-03 08:59:32'),
(156, 950, '12 th', '172267557212 th.pdf', '2024-08-03 08:59:32', '2024-08-03 08:59:32'),
(157, 950, 'B.Com', '1722675572b com.pdf', '2024-08-03 08:59:32', '2024-08-03 08:59:32'),
(158, 950, 'M.Com', '1722675572M Com degree.pdf', '2024-08-03 08:59:32', '2024-08-03 08:59:32'),
(159, 950, 'CA Final', '1722675572Final Result.pdf', '2024-08-03 08:59:32', '2024-08-03 08:59:32'),
(160, 951, '10th Marksheet', '172318869310th marksheet pdf.pdf', '2024-08-09 07:31:33', '2024-08-09 07:31:33'),
(161, 951, '12th Marksheet', '172318869312th.pdf', '2024-08-09 07:31:33', '2024-08-09 07:31:33'),
(162, 951, 'CA Final', '1723188843CA FINAL GRP 1.pdf', '2024-08-09 07:34:03', '2024-08-09 07:34:03'),
(163, 951, 'CA Final', '1723188843CA Final GRP 2.pdf', '2024-08-09 07:34:03', '2024-08-09 07:34:03'),
(164, 781, '12 th', '172344687512th marksheets.pdf', '2024-08-12 07:14:35', '2024-08-12 07:14:35'),
(165, 781, 'CA Intermediate', '1723446875CA inter marksheet.pdf', '2024-08-12 07:14:35', '2024-08-12 07:14:35'),
(166, 799, '10 th', '1726826289Class 10th Marksheet.jpeg', '2024-09-20 09:58:09', '2024-09-20 09:58:09'),
(167, 799, '12 th', '1726826289Class 12th Marksheet.jpeg', '2024-09-20 09:58:09', '2024-09-20 09:58:09'),
(168, 907, '10 th', '172724681010Th marksheet.pdf', '2024-09-25 06:46:50', '2024-09-25 06:46:50'),
(169, 907, '12 th', '172724683612th Marksheet.pdf', '2024-09-25 06:47:16', '2024-09-25 06:47:16'),
(170, 907, 'CA Foundation', '1727246900Foundation .pdf', '2024-09-25 06:48:20', '2024-09-25 06:48:20'),
(171, 907, 'B.Com', '1727246982B.com Marksheet.pdf', '2024-09-25 06:49:42', '2024-09-25 06:49:42'),
(172, 937, '10 th', '172752073910TH.pdf', '2024-09-28 10:52:19', '2024-09-28 10:52:19'),
(173, 937, '12 th', '172752078212th.pdf', '2024-09-28 10:53:02', '2024-09-28 10:53:02'),
(174, 937, 'B.Com', '1727520846Bcom  Certificate.pdf', '2024-09-28 10:54:06', '2024-09-28 10:54:06'),
(175, 937, 'C.A.', '1727520907CA FINAL CERTIFICATE.pdf', '2024-09-28 10:55:07', '2024-09-28 10:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', '2023-08-02 05:14:40', NULL),
(2, 'Mrs.', '2023-08-02 05:14:45', NULL),
(3, 'Miss.', '2023-08-02 05:14:45', NULL),
(4, 'Md', '2023-08-02 05:14:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `teammember_id` int(10) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `passwordResetToken` varchar(400) DEFAULT NULL,
  `passwordResetExpiresAt` varchar(400) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `two_factor_code` int(11) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `teammember_id`, `role_id`, `email`, `passwordResetToken`, `passwordResetExpiresAt`, `email_verified_at`, `password`, `status`, `remember_token`, `two_factor_code`, `otp`, `two_factor_expires_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'abcde@gmail.com', NULL, NULL, '2025-02-14 09:12:04', '$2y$10$m0j5oUu4Kbo1w9/AaTrUwOltEf8.d.VwJJBu6yb7BHjsFQBiB5OCW', 1, 'UhX9rjTuQfV88137dktor81fW3mLaMHMOJeL81xa6Cl7gR4kDede3R2mqKzI', NULL, NULL, NULL, '2023-07-28 07:11:12', '2025-02-14 09:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `xxprojects_details`
--

CREATE TABLE `xxprojects_details` (
  `id` int(11) NOT NULL,
  `projects_id` int(11) DEFAULT NULL,
  `projecttitle` varchar(200) CHARACTER SET utf16 COLLATE utf16_croatian_ci DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `projectdate` varchar(200) DEFAULT NULL,
  `toolsandtechnologies` text DEFAULT NULL,
  `projecturl` varchar(200) DEFAULT NULL,
  `descreption` text DEFAULT NULL,
  `note1` varchar(200) DEFAULT NULL,
  `note2` varchar(200) DEFAULT NULL,
  `listdescreption` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xxprojects_details`
--

INSERT INTO `xxprojects_details` (`id`, `projects_id`, `projecttitle`, `category`, `company`, `projectdate`, `toolsandtechnologies`, `projecturl`, `descreption`, `note1`, `note2`, `listdescreption`, `created_at`, `updated_at`) VALUES
(1, 1, 'Virtual Data Room', 'Web design', 'Capitall India Private Limited', '2023-10-01', 'Php, Laravel, Mysql, Ajax, Json, JavaScript, HTML, CSS, jQuery, Bootstrap,', 'https://vsa.capitall.io/', '<p>\n    A virtual data room (VDR) is a secure online repository for storing and sharing confidential\n    documents. It is used by businesses of all sizes to facilitate mergers and acquisitions (M&A),\n    fundraising, due diligence, and other transactions.\n</p>\n<p>\n    VDRs offer a number of advantages over traditional physical data rooms. They are more secure, as\n    they are hosted in the cloud and protected by strong encryption. They are also more convenient, as\n    users can access them from anywhere with an internet connection. And they are more cost-effective,\n    as there is no need to rent or build a physical space.\n</p>', 'This project includes role-based functionality, such as Admin, Manager, Staff, HR, and others.', 'Admin can manage all front-end functionalities through the admin dashboard', '<li>The organisation that wants to share documents creates a VDR account and invites the users who need access.</li>\n<li>The users log in to the VDR and upload the documents they want to share.</li>\n<li>The documents are stored in a secure, password-protected environment.</li>\n<li>The users can view, download, and print the documents as needed.</li>\n<li>The organisation can revoke access to the documents at any time.</li>', '2023-07-28 07:11:12', '2023-07-28 07:11:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionalexperience`
--
ALTER TABLE `professionalexperience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectimagefile`
--
ALTER TABLE `projectimagefile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_category`
--
ALTER TABLE `projects_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rolename` (`rolename`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammember_document_files`
--
ALTER TABLE `teammember_document_files`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xxprojects_details`
--
ALTER TABLE `xxprojects_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1360;

--
-- AUTO_INCREMENT for table `professionalexperience`
--
ALTER TABLE `professionalexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectimagefile`
--
ALTER TABLE `projectimagefile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `projects_category`
--
ALTER TABLE `projects_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=974;

--
-- AUTO_INCREMENT for table `teammember_document_files`
--
ALTER TABLE `teammember_document_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=827;

--
-- AUTO_INCREMENT for table `xxprojects_details`
--
ALTER TABLE `xxprojects_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
