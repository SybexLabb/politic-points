-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 12:07 PM
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
-- Database: `political_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `project_id`, `attribute`, `name`, `role`, `color`, `model`, `icon`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'roles', 'Super Admin', 'Super Admin', '#0e1317', NULL, 'icon-wallet', 1, 0, '2021-05-12 00:45:00', '2023-10-25 18:27:14', NULL),
(2, 0, 'roles', 'Admin', 'Admin', '#0e1317', NULL, 'icon-wallet', 0, 1, '2021-05-12 00:45:13', '2023-10-25 18:27:17', NULL),
(3, 0, 'roles', 'Customer', 'Customer', '#0e1317', NULL, 'icon-wallet', 0, 1, '2021-05-12 00:46:30', '2023-10-25 18:27:19', NULL),
(27, NULL, 'contact-us', 'contact-us', 'contact-us', '#0e1317', 'contact-us', 'icon-wallet', 1, 0, '2024-01-26 11:47:07', '2024-01-26 11:47:07', NULL),
(28, NULL, 'presidential-score', 'presidential-score', 'presidential-score', '#0e1317\r\n', 'presidential-score', 'icon-wallet', 1, 0, '2024-01-26 11:57:47', '2024-01-26 11:57:47', NULL),
(29, NULL, 'volunteer', 'volunteer', 'volunteer', '#0e1317\r\n', 'volunteer', 'icon-wallet', 1, 0, '2024-01-26 12:58:44', '2024-01-26 12:58:44', NULL),
(30, NULL, 'watch-list', 'watch-list', 'watch-list', '#0e1317\r\n', 'watch-list', 'icon-wallet', 1, 0, '2024-01-26 13:57:48', '2024-01-26 13:57:48', NULL),
(31, 0, 'senators', 'senators', 'senators', '#0e1317', 'senators', 'icon-wallet', 1, 0, '2024-01-30 10:56:51', '2024-01-30 10:56:51', NULL),
(32, NULL, 'category', 'category', 'category', '#0e1317', 'category', 'icon-wallet', 1, 0, '2024-02-07 10:28:23', '2024-02-08 10:03:08', NULL),
(33, NULL, 'faqs', 'faqs', 'faqs', '#0e1317', 'faqs', 'icon-wallet', 1, 0, '2024-02-08 11:41:34', '2024-02-08 11:41:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(3, 'Political Theory', 1, 0, '2024-02-07 05:37:39', '2024-02-07 05:37:39'),
(4, 'Sovereignty', 1, 0, '2024-02-07 05:59:02', '2024-02-07 05:59:02'),
(5, 'Consent Of The Governed', 1, 0, '2024-02-07 05:59:13', '2024-02-07 05:59:13'),
(6, 'Theories Of Political Behavior', 1, 0, '2024-02-07 05:59:26', '2024-02-07 05:59:26'),
(7, 'Political Game', 1, 0, '2024-02-07 05:59:39', '2024-02-07 05:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `user_id`, `type`, `value`, `view`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, NULL, 'address', '99 Roving St., Big City', 'Address', 1, 0, '2024-01-26 11:34:07', '2024-02-06 10:45:09', NULL),
(24, NULL, 'emailaddress', 'info@example.com', 'Email', 1, 0, '2024-02-06 10:45:58', '2024-02-06 10:45:58', NULL),
(25, NULL, 'phonenumber', '+123-234-1234', 'Phone', 1, 0, '2024-02-06 10:45:58', '2024-02-06 10:45:58', NULL),
(26, NULL, 'location', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.9737282887!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1698870181177!5m2!1sen!2sus', 'Location', 1, 0, '2024-02-06 12:38:46', '2024-02-06 12:38:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(512) NOT NULL,
  `last_name` varchar(512) NOT NULL,
  `phone` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `message` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `phone`, `email`, `message`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Merrill', 'Mullins', '11', 'kokegida@mailinator.com', 'Aut et et aut dolore', 1, 0, '2024-01-26 06:50:12', '2024-01-26 06:50:12'),
(2, 'Finn', 'Raymond', '81', 'raxywusi@mailinator.com', 'Cupidatat ex at qui', 1, 0, '2024-01-26 06:52:05', '2024-01-26 06:52:05'),
(3, 'Burton', 'Stein', '4', 'nakesin@mailinator.com', 'Amet expedita perfe', 1, 0, '2024-01-31 10:53:29', '2024-01-31 10:53:29'),
(4, 'Idona', 'Mullins', '42', 'xuqalumoba@mailinator.com', 'Doloremque iure est', 1, 0, '2024-02-06 07:36:43', '2024-02-06 07:36:43'),
(5, 'a', 'a', '123123123', '1@a.com', 'asdsad', 1, 0, '2024-02-08 06:30:35', '2024-02-08 06:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Politik Point Market Caps: Assessing Government Competence', '<ul>\r\n	<li>The hypothetical Politik Point market caps calculated below aim to quantify the overall competence and performance of each branch of government and each party within them.</li>\r\n</ul>\r\n', 1, 0, '2024-02-08 06:57:35', '2024-02-08 07:27:10'),
(2, 'Executive Branch Market Cap', '<ul>\r\n	<li>The total executive branch Politik Point market cap stands at 8212. This reflects the combined scores of the President, Vice President, and Cabinet secretaries. The President&#39;s score fluctuations likely have an outsized impact on the overall executive score.</li>\r\n</ul>\r\n', 1, 0, '2024-02-08 07:08:19', '2024-02-08 07:08:19'),
(3, 'Legislative Branch Market Cap', '<ul>\r\n	<li>The total Politik Point market cap for the legislative branch is 9102. This measures the aggregated scores for all Senators and Representatives. The breakdown by party is.</li>\r\n	<li>Senate Democrats: 2144</li>\r\n	<li>Senate Republicans: 1915 House Democrats: 2595</li>\r\n	<li>House Republicans: 2448</li>\r\n	<li>Comparing the hypothetical totals, the legislative branch currently has a higher market cap than the executive branch. The Democratic Party also leads Republicans in both chambers.</li>\r\n	<li>Tracking the market caps periodically provides a 30,000 foot view of perceived government competence. As leaders change, we can monitor resulting shifts in the quantitative data.</li>\r\n</ul>\r\n', 1, 0, '2024-02-08 07:25:33', '2024-02-08 08:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `slug`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 'uploads/logo/584dbe679b36fae8565f757c5ec4ac91/00v0enA1pNvRg9mGbV18nBNjzP8RWLwWTVMMjYOr.png', 'favicon', 1, 0, '2024-01-26 10:34:03', '2024-01-26 10:34:03'),
(3, 'uploads/logo/e866bcf8f6e889cd5c557d073fe5f6a6/hMhH2Zvptfm37noH6gFjT1Ym2ipdXy74ZXPMfpyw.png', 'favicon', 1, 0, '2024-01-26 10:34:15', '2024-01-26 10:34:15'),
(4, 'uploads/logo/66f58d40d843ef6a26a472b6dcedc028/7Q4bTKR1Ibp0CUiVPqXzWdjWjmSof0yx4bPFjeE8.png', 'favicon', 1, 0, '2024-02-06 06:11:47', '2024-02-06 06:11:47'),
(5, 'uploads/logo/0880d2fd0343ffd4216509f5781024c1/ycMrG9pIEeMt4Y9dxz6yjSxEIZig5RsMs4q1RbB7.png', 'favicon', 1, 0, '2024-02-06 06:12:01', '2024-02-06 06:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_attendance_table', 1),
(2, '2014_10_12_000000_create_departments_table', 1),
(3, '2014_10_12_000000_create_notifications_table', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_05_08_010845_attributes', 1),
(8, '2021_05_12_051804_role_assign', 1),
(9, '2021_05_12_051804_sessions', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` longtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `image`, `title`, `description`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 3, 'uploads/product/ne1_1707305582.jpg', 'Lorem Ipsum Dolor', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla delectus voluptate quod, vero ullam quisquam id aliquid, ea quis atque ipsa et soluta! Ducimus repellat vero voluptatem eum, voluptates nihil. Beatae iure cupiditate quidem numquam aliquam reiciendis quis fuga dicta dolores quos laboriosam, minus assumenda ipsa eligendi minima, ab itaque vitae odit! Aperiam natus hic sint harum explicabo non cum perferendis minus maxime, laborum, voluptatem mollitia inventore aspernatur dolores quae, obcaecati ex porro consequatur fugiat. Rerum in rem praesentium maiores expedita similique sint dolor illum quibusdam ipsa saepe perspiciatis quasi asperiores et eum aliquid velit quis consequuntur temporibus, architecto porro?\r\n\r\n', 1, 0, '2024-02-07 06:07:22', '2024-02-08 13:14:54'),
(2, 4, 'uploads/product/ne2_1707305646.jpg', 'Lorem Ipsum Dolor', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla delectus voluptate quod, vero ullam quisquam id aliquid, ea quis atque ipsa et soluta! Ducimus repellat vero voluptatem eum, voluptates nihil. Beatae iure cupiditate quidem numquam aliquam reiciendis quis fuga dicta dolores quos laboriosam, minus assumenda ipsa eligendi minima, ab itaque vitae odit! Aperiam natus hic sint harum explicabo non cum perferendis minus maxime, laborum, voluptatem mollitia inventore aspernatur dolores quae, obcaecati ex porro consequatur fugiat. Rerum in rem praesentium maiores expedita similique sint dolor illum quibusdam ipsa saepe perspiciatis quasi asperiores et eum aliquid velit quis consequuntur temporibus, architecto porro?\r\n', 1, 0, '2024-02-07 06:34:06', '2024-02-08 13:14:58'),
(3, 5, 'uploads/product/ne1_1707305582_1707390927.jpg', 'Quasi aut laboris fa', 'Repudiandae sed labo', 1, 0, '2024-02-07 06:34:46', '2024-02-08 06:15:27'),
(4, 5, 'uploads/product/about_1707311467.jpg', 'Quos quis est porro ', 'Exercitation volupta', 1, 0, '2024-02-07 08:11:07', '2024-02-07 08:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presidential_score`
--

CREATE TABLE `presidential_score` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `image` varchar(512) NOT NULL,
  `score` varchar(512) NOT NULL,
  `date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presidential_score`
--

INSERT INTO `presidential_score` (`id`, `name`, `image`, `score`, `date`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Kamala Harris', 'uploads/product/in1_1706270820.jpg', '632', '2023-09-15', 1, 0, '2024-01-26 07:07:00', '2024-01-26 07:14:54'),
(2, 'Nancy Peloski', 'uploads/product/in2_1706271653.jpg', '632', '2023-09-15', 1, 0, '2024-01-26 07:20:53', '2024-01-26 07:20:53'),
(3, 'Mitch McConell', 'uploads/product/in3_1706271741.png', '703', '2023-10-18', 1, 0, '2024-01-26 07:22:21', '2024-01-26 07:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `recent_legislation`
--

CREATE TABLE `recent_legislation` (
  `id` int(11) NOT NULL,
  `senator_id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent_legislation`
--

INSERT INTO `recent_legislation` (`id`, `senator_id`, `title`, `description`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 5, 'Public Lands Conservation Act:	', 'Legislation aimed at expanding Montana\'s protected wilderness to safeguard natural habitats and promote environmental stewardship.	', 1, 0, '2024-01-30 09:33:35', '2024-01-31 07:15:49'),
(2, 1, 'Public Lands Conservation Act:', 'Legislation aimed at expanding Montana\'s protected wilderness to safeguard natural habitats and promote environmental stewardship.', 1, 0, '2024-01-30 10:27:38', '2024-01-31 13:46:34'),
(4, 1, 'Farm Subsidies Adjustment Act:', 'An initiative to reform agricultural subsidies, ensuring fair distribution and support for Montana\'s farmers.\r\n', 1, 0, '2024-01-31 07:10:57', '2024-01-31 13:46:38'),
(5, 1, 'Rural Healthcare Access Act:', 'A bill providing increased funds to rural health centers, improving access to medical services for underserved communities.\r\n', 1, 0, '2024-01-31 07:11:17', '2024-01-31 13:46:42'),
(6, 2, 'Public Lands Conservation Act:	', 'Legislation aimed at expanding Montana\'s protected wilderness to safeguard natural habitats and promote environmental stewardship.	', 1, 0, '2024-01-31 07:12:53', '2024-01-31 07:12:53'),
(7, 2, 'Farm Subsidies Adjustment Act:	', 'An initiative to reform agricultural subsidies, ensuring fair distribution and support for Montana\'s farmers.	', 1, 0, '2024-01-31 07:13:10', '2024-01-31 07:13:10'),
(8, 2, 'Rural Healthcare Access Act:	', 'A bill providing increased funds to rural health centers, improving access to medical services for underserved communities.	', 1, 0, '2024-01-31 07:13:24', '2024-01-31 07:13:24'),
(9, 3, 'Public Lands Conservation Act:	', 'Legislation aimed at expanding Montana\'s protected wilderness to safeguard natural habitats and promote environmental stewardship.	', 1, 0, '2024-01-31 07:13:50', '2024-01-31 07:13:50'),
(10, 3, 'Farm Subsidies Adjustment Act:	', 'An initiative to reform agricultural subsidies, ensuring fair distribution and support for Montana\'s farmers.	', 1, 0, '2024-01-31 07:14:07', '2024-01-31 07:14:07'),
(11, 3, 'Rural Healthcare Access Act:	', 'A bill providing increased funds to rural health centers, improving access to medical services for underserved communities.	', 1, 0, '2024-01-31 07:14:25', '2024-01-31 07:14:25'),
(12, 4, 'Public Lands Conservation Act:	', 'Legislation aimed at expanding Montana\'s protected wilderness to safeguard natural habitats and promote environmental stewardship.	', 1, 0, '2024-01-31 07:14:49', '2024-01-31 07:14:49'),
(13, 4, 'Farm Subsidies Adjustment Act:	', 'An initiative to reform agricultural subsidies, ensuring fair distribution and support for Montana\'s farmers.	', 1, 0, '2024-01-31 07:15:01', '2024-01-31 07:15:01'),
(14, 4, 'Rural Healthcare Access Act:	', 'A bill providing increased funds to rural health centers, improving access to medical services for underserved communities.	', 1, 0, '2024-01-31 07:15:18', '2024-01-31 07:15:18'),
(15, 5, 'Farm Subsidies Adjustment Act:	', 'An initiative to reform agricultural subsidies, ensuring fair distribution and support for Montana\'s farmers.	', 1, 0, '2024-01-31 07:16:13', '2024-01-31 07:16:13'),
(16, 5, 'Rural Healthcare Access Act:	', 'A bill providing increased funds to rural health centers, improving access to medical services for underserved communities.	', 1, 0, '2024-01-31 07:16:27', '2024-01-31 07:16:27'),
(17, 6, 'Public Lands Conservation Act:	', 'Legislation aimed at expanding Montana\'s protected wilderness to safeguard natural habitats and promote environmental stewardship.	', 1, 0, '2024-01-31 07:16:52', '2024-01-31 07:16:52'),
(18, 6, 'Farm Subsidies Adjustment Act:	', 'An initiative to reform agricultural subsidies, ensuring fair distribution and support for Montana\'s farmers.	', 1, 0, '2024-01-31 07:17:10', '2024-01-31 07:17:10'),
(19, 6, 'Rural Healthcare Access Act:	', 'A bill providing increased funds to rural health centers, improving access to medical services for underserved communities.	', 1, 0, '2024-01-31 07:17:23', '2024-01-31 07:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_assign`
--

CREATE TABLE `role_assign` (
  `id` int(10) UNSIGNED NOT NULL,
  `assignee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_assign`
--

INSERT INTO `role_assign` (`id`, `assignee`, `role_id`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:26:{i:0;s:7:\"roles_1\";i:1;s:7:\"roles_2\";i:2;s:7:\"roles_3\";i:3;s:7:\"roles_4\";i:4;s:12:\"contact-us_2\";i:5;s:20:\"presidential-score_1\";i:6;s:20:\"presidential-score_2\";i:7;s:20:\"presidential-score_3\";i:8;s:20:\"presidential-score_4\";i:9;s:11:\"volunteer_2\";i:10;s:12:\"watch-list_1\";i:11;s:12:\"watch-list_2\";i:12;s:12:\"watch-list_3\";i:13;s:12:\"watch-list_4\";i:14;s:10:\"senators_1\";i:15;s:10:\"senators_2\";i:16;s:10:\"senators_3\";i:17;s:10:\"senators_4\";i:18;s:10:\"category_1\";i:19;s:10:\"category_2\";i:20;s:10:\"category_3\";i:21;s:10:\"category_4\";i:22;s:6:\"faqs_1\";i:23;s:6:\"faqs_2\";i:24;s:6:\"faqs_3\";i:25;s:6:\"faqs_4\";}', 1, 1, 0, '2021-12-03 19:54:55', '2024-02-08 06:46:31', NULL),
(9, 'N;', 5, 1, 0, '2023-01-23 13:34:01', '2023-01-23 13:34:01', NULL),
(10, 'a:4:{i:0;s:7:\"blogs_1\";i:1;s:7:\"blogs_2\";i:2;s:7:\"blogs_3\";i:3;s:7:\"blogs_4\";}', 5, 1, 0, '2023-01-23 13:34:59', '2023-01-23 13:34:59', NULL),
(11, 'a:4:{i:0;s:9:\"contact_1\";i:1;s:9:\"contact_2\";i:2;s:9:\"contact_3\";i:3;s:9:\"contact_4\";}', 7, 1, 0, '2023-01-24 05:59:20', '2023-01-24 05:59:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `senators`
--

CREATE TABLE `senators` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `city` varchar(512) NOT NULL,
  `party` varchar(512) NOT NULL,
  `image` varchar(512) NOT NULL,
  `current_score` varchar(512) NOT NULL,
  `weekly_range` varchar(512) NOT NULL,
  `ytd_range` varchar(512) NOT NULL,
  `y1_range` varchar(512) NOT NULL,
  `all_time_high` varchar(512) NOT NULL,
  `all_time_low` varchar(512) NOT NULL,
  `news_mentions` varchar(512) NOT NULL,
  `social_posts` varchar(512) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `contact` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `twitter` varchar(512) NOT NULL,
  `facebook` varchar(512) NOT NULL,
  `linkedin` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senators`
--

INSERT INTO `senators` (`id`, `name`, `city`, `party`, `image`, `current_score`, `weekly_range`, `ytd_range`, `y1_range`, `all_time_high`, `all_time_low`, `news_mentions`, `social_posts`, `short_description`, `description`, `contact`, `email`, `twitter`, `facebook`, `linkedin`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Senator From Montana', 'Democratic Party', 'uploads/product/politic-detail_1706615580.webp', '728', '720-735', '715-740', '690-780', '810', '630', 'High', 'Medium', 'Bipartisanship: -20 points (bypassing compromise for power deal)', 'John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public servant, Doe has a long history of working on bipartisan legislation, with a strong focus on conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.', '+123-456-7890', 'abc@gmail.com', 'https://twitter.com/', 'https://facebook.com/', 'https://linkedin.com', 1, 0, '2024-01-30 06:53:00', '2024-02-08 08:04:59'),
(2, 'Kevin McCarthy', 'Senator From Montana', 'Democratic Party', 'uploads/product/sen1_1706616401.webp', '728', ' 720-735', '715-740', '690-780', '810', '630', 'High', 'Medium', 'Bipartisanship: -20 points (bypassing compromise for power deal)', 'John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public servant, Doe has a long history of working on bipartisan legislation, with a strong focus on conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.', '+123-456-7890', 'abc@gmail.com', 'https://twitter.com', 'https://facebook.com ', 'https://linkendin.com', 1, 0, '2024-01-30 07:06:41', '2024-02-08 13:05:14'),
(3, 'Jim Jordan', 'Senator From Montana', 'Democratic Party', 'uploads/product/sen2_1706616512.jpg', '728', ' 720-735', '715-740', ' 690-780', ' 810', '630', 'high', 'medium', 'Bipartisanship: -20 points (bypassing compromise for power deal)', 'John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public servant, Doe has a long history of working on bipartisan legislation, with a strong focus on conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.', '12313213', 'abc@gmail.com', 'https://twitter.com', 'https://facebook.com', 'https://linkedin.com', 1, 0, '2024-01-30 07:08:32', '2024-02-08 13:05:16'),
(4, 'Bob Menendez', 'Senator From Montana', 'Democratic Party', 'uploads/product/sen3_1706616617.jpg', '728', ' 720-735', '715-740', '690-780', '810', '630', 'high', 'medium', 'Bipartisanship: -20 points (bypassing compromise for power deal)', 'John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public servant, Doe has a long history of working on bipartisan legislation, with a strong focus on conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.', '123123132', 'abc@gmail.com', 'https://twitter.com', 'https://facebook.com', 'https://linkedin.com', 1, 0, '2024-01-30 07:10:17', '2024-02-08 13:05:18'),
(5, 'Jamaal Bowman', 'Senator From Montana', 'Democratic Party', 'uploads/product/sen4_1706616708.jpeg', '728', '720-735', '715-740', '690-780', '810', '630', 'high', 'medium', 'Bipartisanship: -20 points (bypassing compromise for power deal)', 'John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public servant, Doe has a long history of working on bipartisan legislation, with a strong focus on conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.', '123123132', 'abc@gmail.com', 'https://twitter.com', 'https://facebook.com', 'https://linkedin.com', 1, 0, '2024-01-30 07:11:48', '2024-02-08 13:05:20'),
(6, 'John Kennedy', 'Senator From Montana', 'Democratic Party', 'uploads/product/sen6_1706699688.jpg', '728', ' 720-735', ' 715-740', ' 690-780', '810', '630', 'high', 'medium', 'Bipartisanship: -20 points (bypassing compromise for power deal)', 'John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public servant, Doe has a long history of working on bipartisan legislation, with a strong focus on conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.Prior to his Senate service, he was the Mayor of Missoula and has been a champion for rural healthcare and community development.\r\n\r\n', '123456', 'abc@gmail.com', 'https://twitter.com', 'https://facebook.com', 'https://linkedin.com', 1, 0, '2024-01-31 06:14:48', '2024-02-08 13:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT 3,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `profile_pic`, `residential_address`, `dob`, `gender`, `role_id`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'Admin', NULL, 'admin@project.com', NULL, '$2y$10$6tezehF81JI2UgkcTxzVrenp7asoY2Nc98fbZKNTiIyK0hDDi93Da', NULL, NULL, NULL, NULL, 1, 1, 0, '2024-01-23 06:46:42', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(512) NOT NULL,
  `last_name` varchar(512) NOT NULL,
  `phone` int(25) NOT NULL,
  `email` varchar(512) NOT NULL,
  `age` varchar(200) NOT NULL,
  `education` varchar(512) NOT NULL,
  `message` varchar(512) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `phone`, `email`, `age`, `education`, `message`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Cara', 'Rowe', 24, 'libeq@mailinator.com', 'Excepturi voluptatem', 'Voluptatibus vel par', 'Laborum Incididunt', 1, 0, '2024-01-26 08:18:46', '2024-01-26 08:18:46'),
(2, 'Kylan', 'Elliott', 28, 'lijuwutyh@mailinator.com', 'Saepe rem consequatu', 'Vel duis incididunt', 'Totam reprehenderit', 1, 0, '2024-01-26 08:46:45', '2024-01-26 08:46:45'),
(3, 'Kylan', 'Elliott', 28, 'lijuwutyh@mailinator.com', 'Saepe rem consequatu', 'Vel duis incididunt', 'Totam reprehenderit', 1, 0, '2024-01-26 08:46:46', '2024-01-26 08:46:46'),
(4, 'Jorden', 'Ortega', 11, 'wonuxa@mailinator.com', 'Facere vel reiciendi', 'Omnis laborum Est c', 'Dignissimos ipsa al', 1, 0, '2024-01-26 08:48:11', '2024-01-26 08:48:11'),
(5, 'Hadassah', 'Page', 69, 'xuhyfu@mailinator.com', 'Culpa eum doloribus', 'Quae sint quis et a', 'Delectus ullam itaq', 1, 0, '2024-01-31 10:53:19', '2024-01-31 10:53:19'),
(6, 'Madison', 'Downs', 48, 'kywiv@mailinator.com', 'Mollitia cum est et', 'Perferendis quis lor', 'Et laboriosam conse', 1, 0, '2024-02-01 06:08:18', '2024-02-01 06:08:18'),
(7, 'Hakeem', 'Roy', 10, 'luwi@mailinator.com', 'Minus non nihil volu', 'Quia ratione in in d', 'Adipisci et et deser', 1, 0, '2024-02-06 07:33:41', '2024-02-06 07:33:41'),
(8, 'Fitzgerald', 'Harrington', 81, 'sajovuby@mailinator.com', 'Voluptatibus asperio', 'Dolor pariatur Offi', 'Animi est cupiditat', 1, 0, '2024-02-06 07:34:58', '2024-02-06 07:34:58'),
(9, 'Davis', 'Noel', 12, 'mycugire@mailinator.com', 'Modi esse voluptas i', 'Sed quam officia obc', 'Fuga Quasi est lab', 1, 0, '2024-02-06 07:35:39', '2024-02-06 07:35:39'),
(10, 'Grant', 'Osborne', 30, 'jitabaza@mailinator.com', 'Id reprehenderit re', 'Vitae asperiores mag', 'Suscipit illo repreh', 1, 0, '2024-02-06 07:36:26', '2024-02-06 07:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `watch_list`
--

CREATE TABLE `watch_list` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL,
  `image` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch_list`
--

INSERT INTO `watch_list` (`id`, `name`, `description`, `date`, `image`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'mehdi', '', '2024-01-27', 'uploads/product/in1_1706278694.jpg', 0, 1, '2024-01-26 09:18:14', '2024-01-26 09:35:10'),
(2, 'asdasd', '', '2024-01-27', 'uploads/product/in1_1706278738.jpg', 0, 1, '2024-01-26 09:18:58', '2024-01-26 09:35:05'),
(3, 'Noah Meadows', '', '2002-08-22', 'uploads/product/in1_1706279087.jpg', 0, 1, '2024-01-26 09:24:47', '2024-01-26 09:35:00'),
(4, 'Ila Chen', 'Senator Mark Jones (+8): Led bipartisan bill expanding veteran benefits. Rep. Sarah Lee (-7): Comments about immigrant detention centers.\n\n', '2016-06-09', 'uploads/product/in2_1706279221.jpg', 0, 1, '2024-01-26 09:27:01', '2024-01-26 09:34:56'),
(5, 'Yoshi Bradshaw', 'Rerum autem sint in ', '1975-01-15', 'uploads/product/in3_1706279405.png', 0, 1, '2024-01-26 09:30:05', '2024-01-26 09:34:52'),
(6, 'Vanna Calderon', 'Ullam dolor dolorum ', '2015-07-21', 'uploads/product/in2_1706279594.jpg', 0, 1, '2024-01-26 09:33:14', '2024-01-26 09:34:47'),
(7, 'Big Movers This Week', 'Senator Mark Jones (+8): Led bipartisan bill expanding veteran benefits. Rep. Sarah Lee (-7): Comments about immigrant detention centers.', '2023-06-23', 'uploads/product/wt1_1706281272.jpg', 1, 0, '2024-01-26 10:01:12', '2024-01-26 10:01:12'),
(8, 'Spotlight: President\'s Score Stalled', 'The President’s Politic Points total has remained flat at 65 this week, despite passage of a major infrastructure spending package. Our analysis shows the bill’s bipartisan appeal was offset by concerns over its impact on inflation and the deficit. The President has gained points for economic initiatives this year, but will need to maintain party unity heading into the midterms to maintain his score.\r\n', '2023-06-15', 'uploads/product/wt2_1706281339.jpg', 1, 0, '2024-01-26 10:02:19', '2024-01-26 10:02:19'),
(9, 'On The Horizon', 'Earning points? The Democratic proposal for family leave looks poised to pass the House next week. Our model predicts minimal impact to reps with tight races. Danger ahead? Senator Campbell’s speech dinged companies with offshore manufacturing. How will their PAC donations respond?	', '2023-06-15', 'uploads/product/wt3_1706281425.jpg', 1, 0, '2024-01-26 10:02:57', '2024-01-26 10:03:45');

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
(1, 'Home Banner Image', 'home_banner_image', 'uploads/product/home image_1706525786.jpg', 'banners', 1, 0, '2024-01-29 10:46:04', '2024-02-09 11:06:48'),
(2, 'Title', 'home_banner_title', 'CORE SCORING SYSTEM', 'banners', 1, 0, '2024-01-29 10:57:37', '2024-01-29 06:31:00'),
(3, 'Heading', 'home_banner_heading', 'Understanding Politics, One Point At A Time', 'banners', 1, 0, '2024-01-29 10:57:37', '2024-01-29 06:31:00'),
(4, 'Description', 'home_banner_description', 'The President\'s Politic Points total has remained steady at 65 this week, despite the recent approval of a significant infrastructure spending package. Our analysis indicates that while the bill garnered bipartisan support, there were apprehensions regarding its potential impact on inflation and the deficit. The President has accrued points for his economic initiatives thus far this year, but it will be crucial to uphold party unity in the run-up to the midterms to maintain his current score.', 'banners', 1, 0, '2024-01-29 10:57:37', '2024-01-29 06:31:00'),
(5, 'Poltics Banner Image', 'poltics_banner_image', 'uploads/product/politic-bg_1706527039.jpg', 'banner', 1, 0, '2024-01-29 11:09:15', '2024-02-09 11:06:43'),
(6, 'News Banner Image', 'news_banner', 'uploads/product/news-bg_1706527253.jpg', 'banner', 1, 0, '2024-01-29 11:20:05', '2024-02-09 11:06:36'),
(7, 'Watchlist Banner Image', 'watchlist_banner', 'uploads/product/news-bg_1706527434.jpg', 'banner', 1, 0, '2024-01-29 11:22:17', '2024-02-09 11:06:30'),
(9, 'Poltics Points Banner Image', 'poltics_points_banner', 'uploads/product/news-bg_1706527729.jpg', 'banner', 1, 0, '2024-01-29 11:28:14', '2024-02-09 11:06:25'),
(10, 'Contact Us Banner Image', 'contact_us_banner', 'uploads/product/cta-bg2_1706527860.jpg', 'banner', 1, 0, '2024-01-29 11:30:07', '2024-02-09 11:05:51'),
(11, 'title 1', 'home_section1_title', 'ABOUT POLITICS POINT', 'home', 1, 0, '2024-01-29 12:34:54', '2024-02-06 06:52:49'),
(12, 'heading 1', 'home_section1_heading', 'About Us', 'home', 1, 0, '2024-01-29 12:34:54', '2024-02-06 06:52:49'),
(13, 'description 1', 'home_section1_description', 'Politik Points is a platform that operates independently and without bias. Our goal is to enhance political transparency and accountability through the use of objective data-driven analysis. We aim to provide voters with fair and fact-based scoring, offering valuable insights to complement their decision-making process. We aim to promote engaged citizenship by equipping voters with the necessary resources to make well-informed choices.\r\n\r\nThe Politik Points scoring system synthesizes a politician\'s record into an easy-to-understand score reflecting key categories like policy expertise, ethics, bipartisanship, and leadership skills. This quantitative assessment is designed to help voters quickly compare politicians\' competence and performance.\r\n\r\nOur team comprises political scientists, data analysts, journalists, and civic technologists dedicated to upholding impartiality and rigor. We encourage public scrutiny of our methodology and results to enhance our commitment to impartiality continually.', 'home', 1, 0, '2024-01-29 12:36:02', '2024-02-06 06:52:49'),
(14, 'image 1', 'home_section1_image', 'uploads/product/about_1706533432.jpg', 'home', 1, 0, '2024-01-29 12:36:02', '2024-01-29 13:26:04'),
(15, 'title 2', 'home_section2_title', 'MISSION & VISION', 'home', 1, 0, '2024-01-29 12:56:51', '2024-02-06 06:52:49'),
(16, 'heading 2', 'home_section2_heading', 'Our Mission', 'home', 1, 0, '2024-01-29 12:56:51', '2024-02-06 06:52:49'),
(17, 'description 2', 'home_section2_description', 'At Politik Points, we aim to facilitate an enlightening discovery process as you delve into candidates\' positions. We offer data-driven analysis to inform your perspectives without seeking to replace them.\r\n\r\nOur Politik Point scores provide an objective snapshot of a politician\'s track record. However, it is crucial to consider numerous other factors when deciding whom to support. Voters should undertake additional research on the issues and stances that are important to them.\r\n\r\nNo solitary metric or ideology can perfectly determine a leader\'s suitability to govern. Our aim is to foster thoughtful contemplation, enabling you to evaluate leaders from diverse perspectives.\r\n\r\nOur objective is to ignite an inquisitive pursuit of facts. We provide rigorous and impartial information, empowering you to think critically and determine what matters most. Consider our scores as a starting point, rather than a final verdict. The journey of democracy is one that we embark upon together.', 'home', 1, 0, '2024-01-29 12:58:33', '2024-02-06 06:52:49'),
(18, 'title 3', 'home_section3_title', 'POLITIK POINT MARKET CAPS', 'home section', 1, 0, '2024-01-29 12:58:33', '2024-02-06 06:52:49'),
(19, 'heading 3', 'home_section3_heading', 'For The Executive And Legislative Branches', 'home', 1, 0, '2024-01-29 12:59:23', '2024-02-06 06:52:49'),
(20, 'title 1', 'poltics_section1_title', 'ABOUT POLITICS POINT', 'Poltics', 1, 0, '2024-01-29 13:30:49', '2024-02-06 07:33:31'),
(21, 'heading 1', 'poltics_section1_heading', 'About Us', 'Poltics', 1, 0, '2024-01-29 13:30:49', '2024-02-06 07:33:31'),
(22, 'description 1', 'poltics_section1_description', 'Our mission at Politik Points is to catalyze an enriching discovery process as you explore where candidates stand. We provide data-driven analysis to inform your opinions, not replace them.\r\n\r\nOur Politik Point scores offer an objective snapshot of a politician\'s record. But many other factors matter when choosing who to support. Voters should conduct additional research on issues and stances important to them.\r\n\r\nNo single metric or ideology can perfectly determine a leader\'s fitness to govern. We aim to nurture thoughtful reflection so you can evaluate leaders from diverse perspectives.\r\n\r\nOur goal is to spark an inquisitive pursuit of facts. We provide rigorous, impartial information so you can think critically and decide what matters most. Consider our scores a beginning, not an end. The journey of democracy is one we travel together.', 'Poltics', 1, 0, '2024-01-29 13:32:46', '2024-02-06 07:33:31'),
(23, 'image 1', 'poltics_section1_image', 'uploads/product/about_1706536064.jpg', 'Poltics', 1, 0, '2024-01-29 13:32:46', '2024-01-29 08:47:44'),
(24, 'title 2', 'poltics_section2_title', 'MISSION & VISION', 'Poltics', 1, 0, '2024-01-29 13:34:07', '2024-02-06 07:33:31'),
(25, 'heading 2', 'poltics_section2_heading', 'Our Mission', 'Poltics', 1, 0, '2024-01-29 13:34:07', '2024-02-06 07:33:31'),
(26, 'description 2', 'poltics_section2_description', 'At Politik Points, we aim to facilitate an enlightening discovery process as you delve into candidates\' positions. We offer data-driven analysis to inform your perspectives without seeking to replace them.Our Politik Point scores provide an objective snapshot of a politician\'s track record. However, it is crucial to consider numerous other factors when deciding whom to support. Voters should undertake additional research on the issues and stances that are important to them.No solitary metric or ideology can perfectly determine a leader\'s suitability to govern. Our aim is to foster thoughtful contemplation, enabling you to evaluate leaders from diverse perspectives.Our objective is to ignite an inquisitive pursuit of facts. We provide rigorous and impartial information, empowering you to think critically and determine what matters most. Consider our scores as a starting point, rather than a final verdict. The journey of democracy is one that we embark upon together.', 'Poltics', 1, 0, '2024-01-29 13:35:31', '2024-02-06 07:33:31'),
(27, 'title 3', 'poltics_section3_title', 'POLITIK POINT MARKET CAPS', 'Poltics', 1, 0, '2024-01-29 13:35:31', '2024-02-06 07:33:31'),
(28, 'heading 3', 'poltics_section3_heading', 'For The Executive And Legislative Branches', '', 1, 0, '2024-01-29 13:35:57', '2024-02-06 07:33:31'),
(29, 'title 3', 'poltics_section3_title', 'POLITIK POINT MARKET CAPS', 'Poltics', 1, 0, '2024-01-29 13:40:35', '2024-02-06 07:33:31'),
(30, 'heading 3', 'poltics_section3_heading', 'For The Executive And Legislative Branches', 'Poltics', 1, 0, '2024-01-29 13:40:35', '2024-02-06 07:33:31'),
(31, 'title 3', 'poltics_section3_title', 'POLITIK POINT MARKET CAPS', 'Poltics', 1, 0, '2024-01-29 13:46:53', '2024-02-06 07:33:31'),
(32, 'heading 3', 'poltics_section3_heading', 'For The Executive And Legislative Branches', 'Poltics', 1, 0, '2024-01-29 13:46:53', '2024-02-06 07:33:31'),
(33, 'title 4', 'home_section4_title', 'TOP INTEREST SCORES', 'home', 1, 0, '2024-01-29 14:25:00', '2024-02-06 06:52:49'),
(34, 'heading 4', 'home_section4_heading', 'Presidential Score', 'home', 1, 0, '2024-01-29 14:25:00', '2024-02-06 06:52:49'),
(35, 'title 5', 'home_section5_title', 'Contribute Now!', 'home', 1, 0, '2024-01-29 14:26:46', '2024-02-06 06:52:49'),
(36, 'heading 5', 'home_section5_heading', 'We aim to continuously improve our scoring system and expand our coverage of politicians. If you are interested in contributing to Politik Points, don\'t hesitate to get in touch with us contact us for more information on how to get involved.', 'home', 1, 0, '2024-01-29 14:26:46', '2024-02-06 06:52:49'),
(37, 'title 6', 'home_section6_title', 'POLITICS POINT', 'home', 1, 0, '2024-01-29 14:29:39', '2024-02-06 06:52:49'),
(38, 'heading 6\r\n', 'home_section6_heading', 'All Senators', 'home', 1, 0, '2024-01-29 14:29:39', '2024-02-06 06:52:49'),
(39, 'title 6', 'home_section6_title', 'POLITICS POINT', 'home', 1, 0, '2024-01-29 14:30:03', '2024-02-06 06:52:49'),
(40, 'heading 6', 'home_section6_heading', 'All Senators', 'home', 1, 0, '2024-01-29 14:30:03', '2024-02-06 06:52:49'),
(41, 'title 7', 'home_section7_title', 'Stay Updated', 'home', 1, 0, '2024-01-29 14:31:25', '2024-02-06 06:52:49'),
(42, 'heading 7', 'home_section7_heading', 'Sign up for our newsletter and follow us on social media to stay updated on the latest Politik Point scores and analysis. Don\'t miss out on significant political developments and insights – join the conversation and be part of our community.', 'home', 1, 0, '2024-01-29 14:31:25', '2024-02-06 06:52:49'),
(43, 'title 8', 'home_section8_title', 'WATCH LIST', 'home', 1, 0, '2024-01-29 14:33:07', '2024-02-06 06:52:49'),
(44, 'heading 8', 'home_section8_heading', 'Politic Points Weekly', 'home', 1, 0, '2024-01-29 14:33:07', '2024-02-06 06:52:49'),
(45, 'title 8', 'home_section8_title', 'WATCH LIST', 'home', 1, 0, '2024-01-29 14:33:40', '2024-02-06 06:52:49'),
(46, 'heading 8', 'home_section8_heading', 'Politic Points Weekly', 'home', 1, 0, '2024-01-29 14:33:40', '2024-02-06 06:52:49'),
(47, 'title 9', 'home_section9_title', 'NEWS', 'home', 1, 0, '2024-01-29 14:35:07', '2024-02-06 06:52:49'),
(48, 'heading 9', 'home_section9_heading', 'Latest News', 'home', 1, 0, '2024-01-29 14:35:07', '2024-02-06 06:52:49'),
(49, 'title 9', 'home_section9_title', 'NEWS', 'home', 1, 0, '2024-01-29 14:35:24', '2024-02-06 06:52:49'),
(50, 'heading 9', 'home_section9_heading', 'Latest News', 'home', 1, 0, '2024-01-29 14:35:24', '2024-02-06 06:52:49'),
(51, 'title 1', 'presedential_section1_title', 'President Biden - Economic Outlook And Politik Points', 'presedential score', 1, 0, '2024-01-31 14:23:37', '2024-01-31 09:43:21'),
(52, 'heading 1', 'presedential_section1_heading', 'CURRENT POLITIK POINT SCORE: 681/1000', 'presedential score', 1, 0, '2024-01-31 14:23:37', '2024-01-31 09:43:36'),
(55, 'description 1', 'presedential_section1_description', 'With GDP growth projected to slow to just 1.5% in 2024, President Biden faces economic headwinds that could further erode his standing with voters.Biden\'s Politik Points have already dropped from 712 to 681 this year amid high inflation and weak growth compared to 2021. Additional declines in GDP would likely drag his score down further.Voters increasingly favor Republicans on prosperity and the economy. Without new spending to stimulate growth, Biden has limited tools to reverse this momentum.Absent a significant upside surprise, the data indicates Biden\'s economic credentials will remain under pressure through the 2024 election. This could subtract critical points related to areas like competency, leadership and vision.While the economy is not the sole factor in Biden\'s political health, it exerts an outsized influence. A Politik Point drop into the low 600s due to worsening perceptions on the economy would seriously jeopardize Biden\'s reelection prospects.In short, if GDP meets muted expectations, Biden cannot count on the economy to buoy his score. He must make up ground through strong performances on other metrics like foreign policy and social issues. But overcoming economic discontent may be his biggest politic point challenge.', 'presedential score', 1, 0, '2024-01-31 14:27:56', '2024-01-31 14:44:43'),
(56, 'image 1', 'presedential_section1_image', 'uploads/product/politic-detail_1706712173.webp', 'presedential score', 1, 0, '2024-01-31 14:27:56', '2024-01-31 09:42:53'),
(58, 'Title', 'politics_banner_title', 'Politics', 'banners', 1, 0, '2024-02-09 10:41:19', '2024-02-09 11:03:46'),
(59, 'Title', 'news_banner_title', 'News', 'banners', 1, 0, '2024-02-09 10:41:19', '2024-02-09 11:03:56'),
(60, 'Title', 'watchlist_banner_title', 'Watchlist\r\n', 'banners', 1, 0, '2024-02-09 10:44:43', '2024-02-09 11:03:59'),
(61, 'Title', 'politics_point_title', 'Poltics Points\r\n', 'banners', 1, 0, '2024-02-09 10:44:43', '2024-02-09 11:04:02'),
(62, 'Title', 'contact_us_title', 'Contact Us', 'banners', 1, 0, '2024-02-09 10:50:40', '2024-02-09 11:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `presidential_score`
--
ALTER TABLE `presidential_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_legislation`
--
ALTER TABLE `recent_legislation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_assign`
--
ALTER TABLE `role_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senators`
--
ALTER TABLE `senators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_cms`
--
ALTER TABLE `web_cms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presidential_score`
--
ALTER TABLE `presidential_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recent_legislation`
--
ALTER TABLE `recent_legislation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `role_assign`
--
ALTER TABLE `role_assign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `senators`
--
ALTER TABLE `senators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `watch_list`
--
ALTER TABLE `watch_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `web_cms`
--
ALTER TABLE `web_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
