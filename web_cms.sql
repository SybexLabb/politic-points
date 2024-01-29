-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 05:04 PM
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
-- Database: `political_points`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_cms`
--

CREATE TABLE `web_cms` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `value` longtext NOT NULL,
  `tag` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_cms`
--

INSERT INTO `web_cms` (`id`, `name`, `slug`, `value`, `tag`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Home Banner', 'home_banner_image', 'uploads/product/home image_1706525786.jpg', 'banners', 1, 0, '2024-01-29 10:46:04', '2024-01-29 05:56:26'),
(2, 'Title', 'home_banner_title', 'CORE SCORING SYSTEM', 'banners', 1, 0, '2024-01-29 10:57:37', '2024-01-29 06:31:00'),
(3, 'Heading', 'home_banner_heading', 'Understanding Politics, One Point At A Time', 'banners', 1, 0, '2024-01-29 10:57:37', '2024-01-29 06:31:00'),
(4, 'Description', 'home_banner_description', 'The President\'s Politic Points total has remained steady at 65 this week, despite the recent approval of a significant infrastructure spending package. Our analysis indicates that while the bill garnered bipartisan support, there were apprehensions regarding its potential impact on inflation and the deficit. The President has accrued points for his economic initiatives thus far this year, but it will be crucial to uphold party unity in the run-up to the midterms to maintain his current score.', 'banners', 1, 0, '2024-01-29 10:57:37', '2024-01-29 06:31:00'),
(5, 'Poltics Banner', 'poltics_banner_image', 'uploads/product/politic-bg_1706527039.jpg', 'banner', 1, 0, '2024-01-29 11:09:15', '2024-01-29 06:17:19'),
(6, 'News Banner', 'news_banner', 'uploads/product/news-bg_1706527253.jpg', 'banner', 1, 0, '2024-01-29 11:20:05', '2024-01-29 06:20:53'),
(7, 'Watchlist Banner', 'watchlist_banner', 'uploads/product/news-bg_1706527434.jpg', 'banner', 1, 0, '2024-01-29 11:22:17', '2024-01-29 06:23:54'),
(9, 'Poltics Points', 'poltics_points_banner', 'uploads/product/news-bg_1706527729.jpg', 'banner', 1, 0, '2024-01-29 11:28:14', '2024-01-29 14:13:26'),
(10, 'Contact Us', 'contact_us_banner', 'uploads/product/cta-bg2_1706527860.jpg', 'banner', 1, 0, '2024-01-29 11:30:07', '2024-01-29 14:13:59'),
(11, 'title 1', 'home_section1_title', 'ABOUT POLITICS POINT', 'home', 1, 0, '2024-01-29 12:34:54', '2024-01-29 09:42:43'),
(12, 'heading 1', 'home_section1_heading', 'About Us', 'home', 1, 0, '2024-01-29 12:34:54', '2024-01-29 09:42:43'),
(13, 'description 1', 'home_section1_description', 'Politik Points is a platform that operates independently and without bias. Our goal is to enhance political transparency and accountability through the use of objective data-driven analysis. We aim to provide voters with fair and fact-based scoring, offering valuable insights to complement their decision-making process. We aim to promote engaged citizenship by equipping voters with the necessary resources to make well-informed choices.The Politik Points scoring system synthesizes a politician\'s record into an easy-to-understand score reflecting key categories like policy expertise, ethics, bipartisanship, and leadership skills. This quantitative assessment is designed to help voters quickly compare politicians\' competence and performance.Our team comprises political scientists, data analysts, journalists, and civic technologists dedicated to upholding impartiality and rigor. We encourage public scrutiny of our methodology and results to enhance our commitment to impartiality continually.', 'home', 1, 0, '2024-01-29 12:36:02', '2024-01-29 09:42:43'),
(14, 'image 1', 'home_section1_image', 'uploads/product/about_1706533432.jpg', 'home', 1, 0, '2024-01-29 12:36:02', '2024-01-29 13:26:04'),
(15, 'title 2', 'home_section2_title', 'MISSION & VISION', 'home', 1, 0, '2024-01-29 12:56:51', '2024-01-29 09:42:43'),
(16, 'heading 2', 'home_section2_heading', 'Our Mission', 'home', 1, 0, '2024-01-29 12:56:51', '2024-01-29 09:42:43'),
(17, 'description 2', 'home_section2_description', 'At Politik Points, we aim to facilitate an enlightening discovery process as you delve into candidates\' positions. We offer data-driven analysis to inform your perspectives without seeking to replace them.Our Politik Point scores provide an objective snapshot of a politician\'s track record. However, it is crucial to consider numerous other factors when deciding whom to support. Voters should undertake additional research on the issues and stances that are important to them.No solitary metric or ideology can perfectly determine a leader\'s suitability to govern. Our aim is to foster thoughtful contemplation, enabling you to evaluate leaders from diverse perspectives.Our objective is to ignite an inquisitive pursuit of facts. We provide rigorous and impartial information, empowering you to think critically and determine what matters most. Consider our scores as a starting point, rather than a final verdict. The journey of democracy is one that we embark upon together.', 'home', 1, 0, '2024-01-29 12:58:33', '2024-01-29 09:42:43'),
(18, 'title 3', 'home_section3_title', 'POLITIK POINT MARKET CAPS', 'home section', 1, 0, '2024-01-29 12:58:33', '2024-01-29 09:42:43'),
(19, 'heading 3', 'home_section3_heading', 'For The Executive And Legislative Branches', 'home', 1, 0, '2024-01-29 12:59:23', '2024-01-29 09:42:43'),
(20, 'title 1', 'poltics_section1_title', 'ABOUT POLITICS POINT', 'Poltics', 1, 0, '2024-01-29 13:30:49', '2024-01-29 08:47:44'),
(21, 'heading 1', 'poltics_section1_heading', 'About Us', 'Poltics', 1, 0, '2024-01-29 13:30:49', '2024-01-29 08:47:44'),
(22, 'description 1', 'poltics_section1_description', 'Politik Points is a platform that operates independently and without bias. Our goal is to enhance political transparency and accountability through the use of objective data-driven analysis. We aim to provide voters with fair and fact-based scoring, offering valuable insights to complement their decision-making process. We aim to promote engaged citizenship by equipping voters with the necessary resources to make well-informed choices.The Politik Points scoring system synthesizes a politician\'s record into an easy-to-understand score reflecting key categories like policy expertise, ethics, bipartisanship, and leadership skills. This quantitative assessment is designed to help voters quickly compare politicians\' competence and performance.Our team comprises political scientists, data analysts, journalists, and civic technologists dedicated to upholding impartiality and rigor. We encourage public scrutiny of our methodology and results to enhance our commitment to impartiality continually.', 'Poltics', 1, 0, '2024-01-29 13:32:46', '2024-01-29 08:47:44'),
(23, 'image 1', 'poltics_section1_image', 'uploads/product/about_1706536064.jpg', 'Poltics', 1, 0, '2024-01-29 13:32:46', '2024-01-29 08:47:44'),
(24, 'title 2', 'poltics_section2_title', 'MISSION & VISION', 'Poltics', 1, 0, '2024-01-29 13:34:07', '2024-01-29 08:47:44'),
(25, 'heading 2', 'poltics_section2_heading', 'Our Mission', 'Poltics', 1, 0, '2024-01-29 13:34:07', '2024-01-29 08:47:44'),
(26, 'description 2', 'poltics_section2_description', 'At Politik Points, we aim to facilitate an enlightening discovery process as you delve into candidates\' positions. We offer data-driven analysis to inform your perspectives without seeking to replace them.Our Politik Point scores provide an objective snapshot of a politician\'s track record. However, it is crucial to consider numerous other factors when deciding whom to support. Voters should undertake additional research on the issues and stances that are important to them.No solitary metric or ideology can perfectly determine a leader\'s suitability to govern. Our aim is to foster thoughtful contemplation, enabling you to evaluate leaders from diverse perspectives.Our objective is to ignite an inquisitive pursuit of facts. We provide rigorous and impartial information, empowering you to think critically and determine what matters most. Consider our scores as a starting point, rather than a final verdict. The journey of democracy is one that we embark upon together.', 'Poltics', 1, 0, '2024-01-29 13:35:31', '2024-01-29 08:47:44'),
(27, 'title 3', 'poltics_section3_title', 'POLITIK POINT MARKET CAPS', 'Poltics', 1, 0, '2024-01-29 13:35:31', '2024-01-29 08:47:44'),
(28, 'heading 3', 'poltics_section3_heading', 'For The Executive And Legislative Branches', '', 1, 0, '2024-01-29 13:35:57', '2024-01-29 08:47:44'),
(29, 'title 3', 'poltics_section3_title', 'POLITIK POINT MARKET CAPS', 'Poltics', 1, 0, '2024-01-29 13:40:35', '2024-01-29 08:47:44'),
(30, 'heading 3', 'poltics_section3_heading', 'For The Executive And Legislative Branches', 'Poltics', 1, 0, '2024-01-29 13:40:35', '2024-01-29 08:47:44'),
(31, 'title 3', 'poltics_section3_title', 'POLITIK POINT MARKET CAPS', 'Poltics', 1, 0, '2024-01-29 13:46:53', '2024-01-29 08:47:44'),
(32, 'heading 3', 'poltics_section3_heading', 'For The Executive And Legislative Branches', 'Poltics', 1, 0, '2024-01-29 13:46:53', '2024-01-29 08:47:44'),
(33, 'title 4', 'home_section4_title', 'TOP INTEREST SCORES', 'home', 1, 0, '2024-01-29 14:25:00', '2024-01-29 09:42:43'),
(34, 'heading 4', 'home_section4_heading', 'Presidential Score', 'home', 1, 0, '2024-01-29 14:25:00', '2024-01-29 09:42:43'),
(35, 'title 5', 'home_section5_title', 'Contribute Now!', 'home', 1, 0, '2024-01-29 14:26:46', '2024-01-29 09:42:43'),
(36, 'heading 5', 'home_section5_heading', 'We aim to continuously improve our scoring system and expand our coverage of politicians. If you are interested in contributing to Politik Points, don\'t hesitate to get in touch with us contact us for more information on how to get involved.', 'home', 1, 0, '2024-01-29 14:26:46', '2024-01-29 09:42:43'),
(37, 'title 6', 'home_section6_title', 'POLITICS POINT', 'home', 1, 0, '2024-01-29 14:29:39', '2024-01-29 09:42:43'),
(38, 'heading 6\r\n', 'home_section6_heading', 'All Senators', 'home', 1, 0, '2024-01-29 14:29:39', '2024-01-29 09:42:43'),
(39, 'title 6', 'home_section6_title', 'POLITICS POINT', 'home', 1, 0, '2024-01-29 14:30:03', '2024-01-29 09:42:43'),
(40, 'heading 6', 'home_section6_heading', 'All Senators', 'home', 1, 0, '2024-01-29 14:30:03', '2024-01-29 09:42:43'),
(41, 'title 7', 'home_section7_title', 'Stay Updated', 'home', 1, 0, '2024-01-29 14:31:25', '2024-01-29 09:42:43'),
(42, 'heading 7', 'home_section7_heading', 'Sign up for our newsletter and follow us on social media to stay updated on the latest Politik Point scores and analysis. Don\'t miss out on significant political developments and insights – join the conversation and be part of our community.', 'home', 1, 0, '2024-01-29 14:31:25', '2024-01-29 09:42:43'),
(43, 'title 8', 'home_section8_title', 'WATCH LIST', 'home', 1, 0, '2024-01-29 14:33:07', '2024-01-29 09:42:43'),
(44, 'heading 8', 'home_section8_heading', 'Politic Points Weekly', 'home', 1, 0, '2024-01-29 14:33:07', '2024-01-29 09:42:43'),
(45, 'title 8', 'home_section8_title', 'WATCH LIST', 'home', 1, 0, '2024-01-29 14:33:40', '2024-01-29 09:42:43'),
(46, 'heading 8', 'home_section8_heading', 'Politic Points Weekly', 'home', 1, 0, '2024-01-29 14:33:40', '2024-01-29 09:42:43'),
(47, 'title 9', 'home_section9_title', 'NEWS', 'home', 1, 0, '2024-01-29 14:35:07', '2024-01-29 09:42:44'),
(48, 'heading 9', 'home_section9_heading', 'Latest News', 'home', 1, 0, '2024-01-29 14:35:07', '2024-01-29 09:42:44'),
(49, 'title 9', 'home_section9_title', 'NEWS', 'home', 1, 0, '2024-01-29 14:35:24', '2024-01-29 09:42:44'),
(50, 'heading 9', 'home_section9_heading', 'Latest News', 'home', 1, 0, '2024-01-29 14:35:24', '2024-01-29 09:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_cms`
--
ALTER TABLE `web_cms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_cms`
--
ALTER TABLE `web_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
