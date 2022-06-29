-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220628.14f90d77f8
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 03:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hardware', '2022-06-06 00:41:33', '2022-06-27 19:13:59'),
(2, 'Software', '2022-06-06 00:41:58', '2022-06-06 00:41:58'),
(3, 'SDM', '2022-06-06 00:42:16', '2022-06-06 00:42:16');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `nama_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemegang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `nama_item`, `gambar`, `keterangan`, `pemegang`, `created_at`, `updated_at`) VALUES
(10, 1, 'Printer Epson', 'aset/zNEagzDWQokgH04R8ZiqiEdLPAKgfLVIiKWRg3aR.jpg', 'Model Printer Epson Metode Cetak Inkjet Resolusi Printer 5760 x 1440 dpi (with Variable-Sized Droplet Technology)', 'Aptika', '2022-06-23 19:28:09', '2022-06-29 05:47:35'),
(16, 2, 'Jatim Bejo', 'aset/UuN4gRxuKEmIKYwQ2HfQg7Svfa9ej7xZKQB3hUqq.png', 'Jawa Timur Belanja Online yang disingkat JATIM BEJO adalah internalisasi yang terintegrasi terhadap perubahan budaya kerja menuju digitaliasi proses Pengadaan Barang/Jasa dengan cara Optimalisasi Pemanfaatan E-marketplace dalam bentuk Toko Daring untuk Pengadaan Barang/Jasa Pemerintah di Provinsi Jawa Timur, sebagai upaya peningkatan peran serta Pelaku UMK dan Transparansi serta Akuntabilitas Pengadaan Barang/Jasa.', 'Dinas Kominfo Jatim', '2022-06-24 22:28:46', '2022-06-24 22:28:46'),
(22, 2, 'Sistem Aplikasi Pendataan Desa - Data Desa Center', 'aset/0AG426B8k2MAsFQxw7OHNPMqlBhA6pqtkqMTkZsp.png', 'DDC (Data Desa Center) merupakan aplikasi monitoring desa dan berbagai hal terkait dengan desa.', 'Bidang Aptika Dinas Kominfo Jatim', '2022-06-27 18:35:36', '2022-06-27 18:35:36'),
(24, 3, 'Sertifikat Pelatihan Android Dev', 'aset/eaaq0SEPjhsnp492MRdZeXbXOQPICfi7NLJ0LCKr.jpg', 'Android adalah sistem operasi (OS) yang umum digunakan pada perangkat mobile seperti HP dan tablet.', 'Ganjar Mukti', '2022-06-27 18:48:42', '2022-06-27 18:48:42'),
(25, 3, 'Sertifikat Pelatihan Front End Developer', 'aset/q1ExrY8WOBCxwZumC87bpfK0cPLpbqEDovfeDnFC.webp', 'front end adalah orang yang bertanggung jawab dalam mengembangkan tampilan situs website ataupun aplikasi dengan menggunakan HTML, CSS, dan juga JavaScript.', 'Andrea Pirlo', '2022-06-27 19:44:49', '2022-06-27 19:44:49'),
(26, 2, 'Jatim Tanggap Covid', 'aset/1GFki39s13gKMMLDPxqAb479qhOZzaO0JH6Kmlir.png', 'Aplikasi yang digunakan untuk melihat peta penyebaran covid 19 di jatim dan berita terbaru tentang covid 19', 'Bidang Aptika Dinas Kominfo Jatim', '2022-06-27 20:04:39', '2022-06-27 20:04:39'),
(27, 2, 'Jenis Perizinan Pada Jawa Timur Online Single Submission', 'aset/9lsOJFHFv5N6TgS01Lkay30NOvhF35hwfJB5IgQx.png', 'Aplikasi untuk menangani perizinan pada Jawa Timur', 'Bidang Aptika Dinas Kominfo Jatim', '2022-06-27 20:11:56', '2022-06-27 20:11:56'),
(28, 3, 'Sertifikat Pelatihan Back End Development', 'aset/6ZGJXUd8AQnyu5gk5hwwd82NmPKbG6kfSDu4KjiB.jpg', 'Back end developer fokus pada database, scripting, dan arsitektur dari sebuah website. Kode yang ditulis oleh mereka akan membantu mengomunikasi database informasi kepada browser.', 'David Beckham', '2022-06-28 20:32:28', '2022-06-28 20:32:52'),
(29, 2, 'PPDB Jawa Timur 2022', 'aset/3TL1XDphMHQVrnUk7ypJbR4M4SJkwsM66ypsKDqy.png', 'Aplikasi Pendaftaran Peserta Didik baru baik tingkat SD, SMP, SMA, SMK', 'Bidang Aptika Dinas Kominfo Jatim', '2022-06-28 20:36:34', '2022-06-28 20:37:02'),
(30, 1, 'Komputer 1', 'aset/uNp5auOaPG0oNQI56N9XeCwpwqYIaCvidNwZcm8z.jpg', 'Processor: Dual Core, Core 2 Duo, Quad Core Celeron Ram: Minimal 2 Gb Harddisk: Minimal 320 Gb Aksesoris: Dvd Rw, Speaker, WebCam VGA: On Board Monitor: 16 Inch Harga: Dibawah Rp. 3.800.000,- Cocok: Pengoperasian aplikasi kantor dalam mengetik, pengolahan tabel data, perhitungan aplikasi, Browsing Internet, Online Meeting.', 'Xavi Hernandes', '2022-06-28 20:46:02', '2022-06-28 20:46:02'),
(31, 1, 'Komputer 2', 'aset/r47R0W2ASDVUz7yQXeGpEWeN06ghgLmgN2MEdEEq.jpg', 'Komputer  2 Procesor core i7 2600 Motherboard h61 ram 16 gb ddr3 8x2 Hdd 500 gb Ssd 120 gb', 'Roberto Carlos', '2022-06-28 20:47:37', '2022-06-28 20:47:37'),
(35, 1, 'Komputer 3', 'aset/ORS2J7WjdSoisGFVjmWOT2D2y80jn21BAfPGLIc0.jpg', 'Komputer 2 Procesor core i7 2600 Motherboard h61 ram 16 gb ddr3 8x2 Hdd 500 gb Ssd 120 gb', 'Aptika', '2022-06-29 05:48:46', '2022-06-29 05:48:46'),
(37, 3, 'Sertifikat Junior Mobile Developer', 'aset/TpZ2LbFNjUOG2EHT13gvFH0E2pfIsGOL7NljGEyA.png', 'Pemrograman Android adalah pemrograman berbasis Java untuk membuat aplikasi pada device smartphone, tablet maupun device lainnya yang menggunakan sistem operasi berbasis Android.', 'Paulo Maldini', '2022-06-29 06:26:15', '2022-06-29 06:26:56'),
(39, 1, 'Komputer 4', 'aset/PdRRSZFjw5fjzGO1iECZB9bnCUMIWc45oWWaWVfI.jpg', 'Komputer  4 Procesor core i7 2600 Motherboard h61 ram 16 gb ddr3 8x2 Hdd 500 gb Ssd 120 gb', 'Lionel Messi', '2022-06-29 06:34:06', '2022-06-29 06:34:06');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_17_212846_create_categories_table', 1),
(7, '2022_05_17_213030_create_items_table', 1),
(8, '2022_06_06_040628_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kAeSHlSrAhPawiAT7Fm7iCeem0FRc3GJzqDeW8o4', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidUEyZDNPS2lOeWZseloxeGJSaEdJakV4TlRtbGhpNmVxZTRPYnM1aiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9wcm9qZWN0LWxhcmF2ZWwudGVzdC9oYXJkd2FyZWFkbSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7fQ==', 1656510426);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'Dwi Rizal  Nur Rahman', 'dwirizalnurrahman20@gmail.com', '0', NULL, '$2y$10$vwaaxkAPq.nGJbuPK3LoE.EgElZUhFoVaK/YxcrJOaxZDtLELVhQO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 19:21:41', '2022-06-27 19:58:40'),
(5, 'Admin 1', 'admin@gmail.com', '1', NULL, '$2y$10$WwE9aGgBDKZCL7FCG7dPG.cNQNRM3H5V2IGGb2gapI2e156ccp6XS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 19:58:50', '2022-06-07 19:58:50'),
(6, 'Admin Infra', 'admininfra@gmail.com', '2', NULL, '$2y$10$Gj6ZUcGLi6eDOZlGw31Bo.dhgxyf5GxzHg7Hn4cberjuf6diNGq8K', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 18:28:33', '2022-06-22 18:28:33'),
(7, 'admin aptika', 'adminaptika@gmail.com', '3', NULL, '$2y$10$C2ppBnqj2w0o8nQBNb0BC.sWxfsXJJlDERKfoz9TE5ZjNfY3eyJ4S', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 19:41:47', '2022-06-22 19:41:47'),
(8, 'Dwi Rizal  Nur Rahman', 'dwirizalnr01@gmail.com', '0', NULL, '$2y$10$cmdJa1Chh/oUoVcc4OWXg.0VpNQXHb6mYZpXo5CcD9mjhf9VB4is2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-26 19:05:19', '2022-06-26 19:05:19'),
(9, 'Admin SDM', 'adminsdm@gmail.com', '4', NULL, '$2y$10$ZYRJpLnkRX3AqdcxFkMRxeJ5q2hp1ALY3yFMOUYu.yOPT8K2e/qgC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-26 19:55:16', '2022-06-26 19:55:16'),
(11, 'rizal', 'dwirizalnurrahman9@gmail.com', '0', NULL, '$2y$10$hRVO0XCZg1Ya.ZbMX9sMku/olsvF0Wrr3iJ1wasi1htFCnS6kZC6e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-28 19:00:58', '2022-06-29 06:37:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



