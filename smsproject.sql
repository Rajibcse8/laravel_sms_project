-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 08:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--
-- Creation: Mar 01, 2021 at 09:57 PM
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creater_customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `customers`:
--   `creater_customer_id`
--       `users` -> `id`
--

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `created_at`, `updated_at`, `customer_name`, `customer_address`, `status`, `creater_customer_id`) VALUES
(1, '2021-03-03 10:26:21', '2021-03-03 10:26:21', 'aaaa', 'sasas', 1, 1),
(2, '2021-03-03 10:26:32', '2021-03-03 10:26:32', 'asasasa', 'eeee', 0, 1),
(3, '2021-03-03 10:26:45', '2021-03-03 10:26:45', 'ASasasas', 'y5yryr', 1, 1),
(4, '2021-03-03 10:26:54', '2021-03-03 10:26:54', 'wrwrwrwr', 'rwrwrwr', 1, 1),
(5, '2021-03-03 10:39:39', '2021-03-03 10:39:39', 'c1', '111qw', 1, 2),
(6, '2021-03-03 21:55:42', '2021-03-03 21:55:42', 'c1', 'aaaaa', 1, 2),
(7, '2021-03-03 21:56:31', '2021-03-03 21:56:31', 'c2', 'ddadada', 0, 2),
(8, '2021-03-05 15:09:21', '2021-03-05 15:09:21', 'aaaa', 'ddadada', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--
-- Creation: Mar 01, 2021 at 08:45 PM
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `failed_jobs`:
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Creation: Mar 01, 2021 at 08:45 PM
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `migrations`:
--

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_01_043943_create_stocks_table', 1),
(5, '2021_03_01_045249_create_purchases_table', 1),
(6, '2021_03_01_045344_create_customers_table', 1),
(7, '2021_03_01_045544_create_sells_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--
-- Creation: Mar 01, 2021 at 08:45 PM
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `password_resets`:
--

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--
-- Creation: Mar 01, 2021 at 08:45 PM
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `purchase_amount` int(11) NOT NULL,
  `purchase_quantity` int(11) NOT NULL,
  `purchase_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creater_purchase_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `purchases`:
--   `creater_purchase_id`
--       `users` -> `id`
--

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `created_at`, `updated_at`, `purchase_amount`, `purchase_quantity`, `purchase_type`, `creater_purchase_id`) VALUES
(1, '2021-03-03 13:57:45', '2021-03-03 13:57:45', 10000, 10000, 'A', 2),
(2, '2021-03-04 04:58:20', '2021-03-04 04:58:20', 1000, 100, 'A', 2),
(3, '2021-03-05 15:11:21', '2021-03-05 15:11:21', 100, 1000, 'B', 2),
(4, '2021-03-05 15:31:03', '2021-03-05 15:31:03', 10000, 10000, 'A', 2),
(5, '2021-03-05 15:35:37', '2021-03-05 15:35:37', 1000, 1000, 'A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--
-- Creation: Mar 01, 2021 at 09:57 PM
--

CREATE TABLE `sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `sell_status` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `sells`:
--   `client_id`
--       `customers` -> `id`
--   `seller_id`
--       `users` -> `id`
--

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`id`, `created_at`, `updated_at`, `client_id`, `quantity`, `startdate`, `enddate`, `seller_id`, `sell_status`) VALUES
(1, '2021-03-03 13:55:52', '2021-03-03 13:55:52', 2, 1, '2021-03-02', '2021-03-07', 2, 1),
(2, '2021-03-03 13:56:08', '2021-03-03 13:56:08', 2, 1, '2021-03-02', '2021-03-07', 2, 1),
(3, '2021-03-04 00:38:12', '2021-03-04 00:38:12', 5, 1000, '2021-03-02', '2021-03-11', 2, 1),
(4, '2021-03-04 04:58:57', '2021-03-04 04:58:57', 2, 1000, '2021-03-04', '2021-03-31', 2, 1),
(5, '2021-03-05 15:23:26', '2021-03-05 15:23:26', 6, 1000, '2021-03-04', '2021-03-18', 2, 1),
(6, '2021-03-05 15:27:17', '2021-03-05 15:27:17', 4, 9000, '2021-03-05', '2021-03-05', 2, 1),
(7, '2021-03-05 15:31:40', '2021-03-05 15:31:40', 1, 10000, '2021-03-02', '2021-03-06', 2, 1),
(8, '2021-03-05 15:40:09', '2021-03-05 15:40:09', 1, 90, '2021-03-06', '2021-03-13', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--
-- Creation: Mar 01, 2021 at 08:45 PM
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `smsquantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `stocks`:
--

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `created_at`, `updated_at`, `smsquantity`) VALUES
(1, '2021-03-02 18:00:00', '2021-03-02 18:00:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Mar 01, 2021 at 08:45 PM
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rajib', 'rajib123@gmail.com', NULL, '$2y$10$lYRVAPUtGVA47H3bd6z/ueDpIo9pT3OxGEMeasCmF6gL0hZq28ENS', NULL, '2021-03-03 07:01:56', '2021-03-03 07:01:56'),
(2, 'Rajib2', 'rajib1234@gmail.com', NULL, '$2y$10$jDojyBxFp4/hbaQkliTrq.GgIjKM3eu42IpGmHiYCwZj3ABlPfk5G', NULL, '2021-03-03 10:38:59', '2021-03-03 10:38:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_creater_customer_id_foreign` (`creater_customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_creater_purchase_id_foreign` (`creater_purchase_id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sells_seller_id_foreign` (`seller_id`),
  ADD KEY `sells_client_id_foreign` (`client_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_creater_customer_id_foreign` FOREIGN KEY (`creater_customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_creater_purchase_id_foreign` FOREIGN KEY (`creater_purchase_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sells`
--
ALTER TABLE `sells`
  ADD CONSTRAINT `sells_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sells_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table customers
--

--
-- Metadata for table failed_jobs
--

--
-- Metadata for table migrations
--

--
-- Metadata for table password_resets
--

--
-- Metadata for table purchases
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'smsproject', 'purchases', '{\"sorted_col\":\"`purchases`.`creater_purchase_id` ASC\"}', '2021-03-02 13:06:09');

--
-- Metadata for table sells
--

--
-- Metadata for table stocks
--

--
-- Metadata for table users
--

--
-- Metadata for database smsproject
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
