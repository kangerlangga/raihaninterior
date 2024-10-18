-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 04:17 PM
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
  `content_comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visib_comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2024_10_18_202507_create_comments_table', 3),
(5, '2024_10_18_202527_create_projects_table', 3);

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
('g90jOd0l4twYcrGvMNJqp6ndel5adl3Cisp4E4ti', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGpUMU9RU2dhT3dpeVhZU3QwSENYUG81UkU3Uk12S3BLS1cxN2pQcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9yYWloYW5pbnRlcmlvci5lcnJyIjt9fQ==', 1729262778),
('N9F4URtZ7JpqYTgmervIz2AIEfbMcs4i2rT1xdio', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTcwMWEwbmFxbHV3OUlIc3F5dVhlN0lCdFhLc3lGYzcwbzlvUEV5eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9yYWloYW5pbnRlcmlvci5lcnJyL2xvZ2luLWFkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1729263985),
('sh7iOUxdCE0YMobP1ccbonnzQOgoUo21hboMOw1O', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZU9NVGVDNTBxMUJteFhmUFBWaE1vZ3ZuNjJwSDJ5d0JCdUZlcVVuOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9yYWloYW5pbnRlcmlvci5lcnJyL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjMyOiJodHRwOi8vcmFpaGFuaW50ZXJpb3IuZXJyci9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1729268198);

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
(1, 'AkunippjuCFBh29SuZPuScCrOZ0p1zihUH7Vx', 'Admin Raihan Interior', 'superadmin@raihaninterior.com', NULL, '$2y$12$ufvP3E.akVKcqKm9qknxeOmGbrMEtfwS5hl2d5RufuYqQewllV0x2', 'Administrator', 'Super Admin', '082139117365', 'Sidoarjo', 'superadmin@raihaninterior.com', 'superadmin@raihaninterior.com', NULL, '2024-10-18 15:24:45', '2024-10-18 15:36:02');

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
