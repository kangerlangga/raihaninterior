-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2024 at 03:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_raihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visib_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comments`, `author_comments`, `job_comments`, `content_comments`, `email_comments`, `phone_comments`, `visib_comments`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
('CommentHYNDN4PwyZi7rQyveefWGEu6H7XY45XRD', 'Dimas Saputra', 'Real Estate Developer', 'From start to finish, the team delivered excellence. Our renovation was completed on time, and the results were beyond our expectations. The craftsmanship and service were top-notch!', 'sales@raihaninterior.com', '082228220233', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-19 10:23:38', '2024-10-19 11:01:41'),
('CommenttCCrwBmE5nsgxyK2AcKz4gSHhpsAKjfcm', 'Arya Wijaya', 'Business Owner', 'Their interior design transformed our space into a stunning and functional home. The attention to detail and the ability to capture our vision was truly impressive. We\'re beyond satisfied!', 'sales@raihaninterior.com', '082228220233', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-19 10:26:59', '2024-10-19 11:02:18'),
('CommentZ6eNaRmJEv3pqqWusG8xWP0nUcnkh0nhA', 'Reza Mahendra', 'Entrepreneur', 'The custom furniture they created for our office is exceptional. Every piece fits perfectly, and the quality is outstanding. Their service was professional and timely. Highly recommend!', 'sales@raihaninterior.com', '082228220233', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-19 10:24:38', '2024-10-19 11:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id_home_sliders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_home_sliders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_home_sliders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_home_sliders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visib_home_sliders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id_home_sliders`, `image_home_sliders`, `title_home_sliders`, `desc_home_sliders`, `visib_home_sliders`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
('HomeSlidersPg7U1KsydTRn9ZKWo9hx9XsK3QBpu4c9J', 'B2.jpg', 'Elegant Interior Designs for Every Space', 'Transform your home or office with our bespoke interior design services. We aim to bring your vision to life by combining functionality with modern aesthetics.', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-15 15:25:58', '2024-10-15 15:25:58'),
('HomeSlidersPg7U1KsydTRn9ZSWo2hx9XsK3QBpu4c9J', 'B1.jpg', 'Innovative Architecture & Interior Solutions', 'We create spaces that blend functionality with beauty. Our designs focus on enhancing your living or working experience with attention to detail and timeless elegance.', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-15 15:07:58', '2024-10-15 15:07:58'),
('HomeSlidersPg7U1LRydTRn9ZKWo9hx9XsK3QBpu4c9J', 'B3.jpg', 'Expert Architecture & Design Services', 'Our team of professionals delivers innovative and sustainable design solutions that meet the highest standards of quality and creativity.', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-15 15:26:58', '2024-10-15 15:26:58'),
('HomeSlidersPO7U1LRydTRn9ZKWo9hx9XsK3QBpu4c9J', 'B4.jpg', 'Custom Designs Tailored to Your Needs', 'From concept to completion, we work closely with our clients to ensure every project is personalized and exceeds expectations in both form and function.', 'Showing', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', '2024-10-15 15:27:58', '2024-10-15 15:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '2024_10_15_200819_create_home_sliders_table', 2),
(5, '2024_10_18_202527_create_projects_table', 3),
(6, '2024_10_18_202507_create_comments_table', 4),
(8, '2024_10_19_123614_create_messages_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin_a_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin_b_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin_c_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vDjdp8jxXXQen0bedgfg4ZS9RAdCaBjH9yVDDB90', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNjk3Q2I4QkRJNzJSTGdxREhmVXdGUndOamtvdUNvVnIxV2ZSZlZUUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9yYWloYW5pbnRlcmlvci5lcnJyL2FkbWluIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1729353061);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `id_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_akun`, `name`, `email`, `email_verified_at`, `password`, `jabatan`, `level`, `telp`, `alamat`, `created_by`, `modified_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AkunippjuCFBh29SuZPuScCrOZ0p1zihUH7Vx', 'Admin Raihan Interior', 'superadmin@raihaninterior.com', NULL, '$2y$12$VsFwS6aiCnwi4nw6T5UiO.zCoGI22ub6mFp/eCAcIixHcsByj1m4O', 'Administrator', 'Super Admin', '082139117365', 'Sidoarjo', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', NULL, '2024-10-18 15:24:45', '2024-10-19 06:09:35'),
(2, 'AkunIUMH77DJOZBi0aQSof6hjjmJLfwSKmjRV', 'Admin Ayunhe Scarves', 'admin@raihaninterior.com', NULL, '$2y$12$ayGGq7pSYYN/ic8/rjjeq.YjnRfdBAMEz612kVp9/yS2URkV3ehS6', 'Admin', 'Admin', '082228220233', 'Sidoarjo', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', NULL, '2024-10-19 07:54:50', '2024-10-19 07:55:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id_home_sliders`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_messages`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_projects`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_akun_unique` (`id_akun`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
