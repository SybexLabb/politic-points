-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 05:01 PM
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
(30, NULL, 'watch-list', 'watch-list', 'watch-list', '#0e1317\r\n', 'watch-list', 'icon-wallet', 1, 0, '2024-01-26 13:57:48', '2024-01-26 13:57:48', NULL);

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
(23, NULL, 'address', 'Karachi', 'address', 1, 0, '2024-01-26 11:34:07', '2024-01-26 11:34:07', NULL);

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
(2, 'Finn', 'Raymond', '81', 'raxywusi@mailinator.com', 'Cupidatat ex at qui', 1, 0, '2024-01-26 06:52:05', '2024-01-26 06:52:05');

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
(3, 'uploads/logo/e866bcf8f6e889cd5c557d073fe5f6a6/hMhH2Zvptfm37noH6gFjT1Ym2ipdXy74ZXPMfpyw.png', 'favicon', 1, 0, '2024-01-26 10:34:15', '2024-01-26 10:34:15');

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
(1, 'a:14:{i:0;s:7:\"roles_1\";i:1;s:7:\"roles_2\";i:2;s:7:\"roles_3\";i:3;s:7:\"roles_4\";i:4;s:12:\"contact-us_2\";i:5;s:20:\"presidential-score_1\";i:6;s:20:\"presidential-score_2\";i:7;s:20:\"presidential-score_3\";i:8;s:20:\"presidential-score_4\";i:9;s:11:\"volunteer_2\";i:10;s:12:\"watch-list_1\";i:11;s:12:\"watch-list_2\";i:12;s:12:\"watch-list_3\";i:13;s:12:\"watch-list_4\";}', 1, 1, 0, '2021-12-03 19:54:55', '2024-01-26 08:59:32', NULL),
(9, 'N;', 5, 1, 0, '2023-01-23 13:34:01', '2023-01-23 13:34:01', NULL),
(10, 'a:4:{i:0;s:7:\"blogs_1\";i:1;s:7:\"blogs_2\";i:2;s:7:\"blogs_3\";i:3;s:7:\"blogs_4\";}', 5, 1, 0, '2023-01-23 13:34:59', '2023-01-23 13:34:59', NULL),
(11, 'a:4:{i:0;s:9:\"contact_1\";i:1;s:9:\"contact_2\";i:2;s:9:\"contact_3\";i:3;s:9:\"contact_4\";}', 7, 1, 0, '2023-01-24 05:59:20', '2023-01-24 05:59:20', NULL);

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
(1, 'Admin', NULL, 'admin@project.com', NULL, '$2y$10$6tezehF81JI2UgkcTxzVrenp7asoY2Nc98fbZKNTiIyK0hDDi93Da', NULL, NULL, NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL);

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
(4, 'Jorden', 'Ortega', 11, 'wonuxa@mailinator.com', 'Facere vel reiciendi', 'Omnis laborum Est c', 'Dignissimos ipsa al', 1, 0, '2024-01-26 08:48:11', '2024-01-26 08:48:11');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
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
-- Indexes for table `role_assign`
--
ALTER TABLE `role_assign`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `presidential_score`
--
ALTER TABLE `presidential_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_assign`
--
ALTER TABLE `role_assign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `watch_list`
--
ALTER TABLE `watch_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
