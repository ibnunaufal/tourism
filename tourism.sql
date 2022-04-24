-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2022 at 06:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapUrl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageArray` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `disabilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHeadline` tinyint(1) NOT NULL,
  `isIcon` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `name`, `desc`, `desa`, `kecamatan`, `mapUrl`, `image`, `imageArray`, `ticket`, `date`, `disabilitas`, `parkiran`, `wifi`, `tags`, `isHeadline`, `isIcon`, `created_at`, `updated_at`) VALUES
(2, 'drumblek', 'bbb', 'KALICACING', 'SIDOMUKTI', 'https://www.google.com/maps/place/Grand+Wahid+Hotel+Salatiga/@-7.3258491,110.5021905,17z/data=!3m1!4b1!4m8!3m7!1s0x2e7a783a311324f5:0x118c808c8356eb6d!5m2!4m1!1i2!8m2!3d-7.3258475!4d110.5043717', 'Group 4.png', 'Group 4.png,59c4deeaa01d0-abdel-achrian_216_287.jpg', '0', '2022-04-27', '1', '1', '1', 'BUDAYA', 1, 1, '2022-04-23 19:58:13', '2022-04-23 19:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `akomodasi`
--

CREATE TABLE `akomodasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageArray` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isOpenAllDay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seninJumat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sabtuMinggu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHeadline` tinyint(1) NOT NULL,
  `isIcon` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akomodasi`
--

INSERT INTO `akomodasi` (`id`, `name`, `desc`, `desa`, `kecamatan`, `mapUrl`, `address`, `image`, `imageArray`, `type`, `ticket`, `isOpenAllDay`, `seninJumat`, `sabtuMinggu`, `disabilitas`, `parkiran`, `wifi`, `tags`, `isHeadline`, `isIcon`, `created_at`, `updated_at`) VALUES
(2, 'Grand Wahid', '5', 'SALATIGA', 'SIDOREJO', 'https://www.google.com/maps/place/Grand+Wahid+Hotel+Salatiga/@-7.3258491,110.5021905,17z/data=!3m1!4b1!4m8!3m7!1s0x2e7a783a311324f5:0x118c808c8356eb6d!5m2!4m1!1i2!8m2!3d-7.3258475!4d110.5043717', 'SALATIGA SIDOREJO', 'Group 4.png', 'Group 4.png,logo.png', 'HOTEL', '', '1', '09:00-09:55', '09:05-09:55', '1', '1', '1', 'HOTEL', 1, 1, '2022-04-23 19:55:57', '2022-04-23 19:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageArray` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isOpenAllDay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seninJumat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sabtuMinggu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHeadline` tinyint(1) NOT NULL,
  `isIcon` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `name`, `desc`, `desa`, `kecamatan`, `mapUrl`, `address`, `image`, `imageArray`, `type`, `ticket`, `isOpenAllDay`, `seninJumat`, `sabtuMinggu`, `disabilitas`, `parkiran`, `wifi`, `tags`, `isHeadline`, `isIcon`, `created_at`, `updated_at`) VALUES
(2, 'Pohon Pengantin', 'alam', 'SIDOREJO LOR', 'SIDOREJO', 'https://www.google.com/maps/place/Pohon+Pengantin+Salatiga/@-7.312155,110.4857566,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a786f1791822d:0x1f9ff36393e2be5b!8m2!3d-7.312155!4d110.4879453', 'SIDOREJO LOR SIDOREJO', 'Group 4.png', 'Group 4.png,logo.png', 'ALAM,RELIGI', '20000', '1', '00:12-21:54', '21:54-21:54', '1', '1', '1', 'ALAM,RELIGI', 1, 1, '2022-04-23 19:54:26', '2022-04-23 19:54:26');

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
-- Table structure for table `fasum`
--

CREATE TABLE `fasum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageArray` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `openAllDay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHeadline` tinyint(1) NOT NULL,
  `isIcon` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasum`
--

INSERT INTO `fasum` (`id`, `name`, `desc`, `mapUrl`, `image`, `imageArray`, `type`, `openAllDay`, `disabilitas`, `parkiran`, `wifi`, `tags`, `isHeadline`, `isIcon`, `created_at`, `updated_at`) VALUES
(2, 'SPBU Salatiga', 'pom', 'https://www.google.com/maps/place/SPBU+44-50714+Pattimura/@-7.3203072,110.5012979,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a783e7fafabd7:0xd929b66037dcfb48!8m2!3d-7.3203307!4d110.5036096', 'Group 4.png', 'Group 4.png,59c4deeaa01d0-abdel-achrian_216_287.jpg', 'HALTE', '1', '1', '1', '1', 'HALTE', 1, 1, '2022-04-23 20:00:07', '2022-04-23 20:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `headline`
--

CREATE TABLE `headline` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alignment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idHeadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idAkomodasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idAcara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idFasum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapUrl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageArray` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isOpenAllDay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seninJumat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sabtuMinggu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHeadline` tinyint(1) NOT NULL,
  `isIcon` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `name`, `desc`, `desa`, `kecamatan`, `mapUrl`, `address`, `image`, `imageArray`, `type`, `isOpenAllDay`, `seninJumat`, `sabtuMinggu`, `disabilitas`, `parkiran`, `wifi`, `tags`, `isHeadline`, `isIcon`, `created_at`, `updated_at`) VALUES
(3, 'Mi ayam', 'mi', 'MANGUNSARI', 'SIDOMUKTI', 'https://www.google.com/maps/place/Mie+Ayam+Cabang+Jl.+Kemuning/@-7.3305241,110.4939972,20.07z/data=!4m12!1m6!3m5!1s0x2e7a786f1791822d:0x1f9ff36393e2be5b!2sPohon+Pengantin+Salatiga!8m2!3d-7.312155!4d110.4879453!3m4!1s0x2e7a7848e66212e1:0x4499c863c7684412!8m2!3d-7.3306438!4d110.4938382', 'MANGUNSARI SIDOMUKTI', 'Group 4.png', 'Group 4.png,59c4deeaa01d0-abdel-achrian_216_287.jpg', 'RESTAURANT', '1', '09:58-09:01', '09:01-09:01', '1', '1', '1', 'RESTAURANT', 1, 1, '2022-04-23 19:57:05', '2022-04-23 19:57:05');

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
(121, '2014_10_12_000000_create_users_table', 1),
(122, '2014_10_12_100000_create_password_resets_table', 1),
(123, '2019_08_19_000000_create_failed_jobs_table', 1),
(124, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(125, '2022_04_15_060414_create_destinasi_table', 1),
(126, '2022_04_16_030000_create_acara_table', 1),
(127, '2022_04_17_085419_create_akomodasi_table', 1),
(128, '2022_04_20_155800_create_fasum_table', 1),
(129, '2022_04_20_160146_create_images_table', 1),
(130, '2022_04_20_160304_create_headline_table', 1),
(131, '2022_04_20_160902_create_kuliner_table', 1);

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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amelia', 'amel@amel.com', NULL, '$2y$10$fJe11j7N/h010KGkUVVAj.4C.LbA2hZEIsNDCxXJ64w9SWtB27J26', NULL, '2022-04-23 19:16:29', '2022-04-23 19:16:29'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$GCUftP.jB69leJ.0sTaE7.lTvdrRz.wiRsScUCjKdzzXZCxj.a1.u', NULL, '2022-04-23 21:40:42', '2022-04-23 21:40:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasum`
--
ALTER TABLE `fasum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headline`
--
ALTER TABLE `headline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasum`
--
ALTER TABLE `fasum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headline`
--
ALTER TABLE `headline`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
