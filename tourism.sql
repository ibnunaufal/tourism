-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2022 at 08:46 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salatig3_tourism`
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
  `start` date NOT NULL,
  `end` date NOT NULL,
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

INSERT INTO `acara` (`id`, `name`, `desc`, `desa`, `kecamatan`, `mapUrl`, `image`, `imageArray`, `ticket`, `start`, `end`, `disabilitas`, `parkiran`, `wifi`, `tags`, `isHeadline`, `isIcon`, `created_at`, `updated_at`) VALUES
(3, 'Pameran Nasional Salatiga Expo Hybrid', 'Mendukung gerakan nasional bangga buatan indonesia dan bangga berwisata', 'KAUMAN KIDUL', 'SIDOREJO', 'https://www.google.co.id/maps/place/Taman+Wisata+Sejarah+Kota+Salatiga+(TWSS)/@-7.3041455,110.5053189,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a796b8a0601cb:0x90362860125ed8a4!8m2!3d-7.3041508!4d110.5075076', 'WhatsApp Image 2022-05-18 at 06.28.03.jpeg', 'WhatsApp Image 2022-05-18 at 06.28.03.jpeg', '0', '2022-05-20', '2022-05-22', '1', '1', '0', 'null', 1, 1, '2022-05-18 07:25:40', '2022-05-18 07:25:40'),
(4, 'Salatiga Chef Competitions 2022', 'Lomba masak UMKM olahan berbahan singkong', 'SALATIGA', 'SIDOREJO', 'https://www.google.co.id/maps/place/Disbudpar+Salatiga/@-7.3219521,110.4959427,16.97z/data=!4m5!3m4!1s0x2e7a7957460b7479:0x1fa65a28b6d6968d!8m2!3d-7.3218899!4d110.5002172', 'WhatsApp Image 2022-05-18 at 06.31.02.jpeg', 'WhatsApp Image 2022-05-18 at 06.31.02.jpeg', '100000', '2022-05-20', '2022-05-22', '0', '1', '0', 'null', 0, 1, '2022-05-18 07:33:19', '2022-05-18 07:33:19');

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

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `icon`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Destinasi', 'icon_set_1_icon-33', 'Group 19.png', '2022-05-16 06:25:26', '2022-05-16 06:25:26'),
(2, 'Kuliner', 'icon_set_3_restaurant-11', 'Picture1.png', '2022-05-16 09:56:20', '2022-05-17 19:21:26'),
(3, 'Akomodasi', 'icon_set_2_icon-104', 'Group 4.png', '2022-05-16 23:16:13', '2022-05-17 19:10:59');

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

-- --------------------------------------------------------

--
-- Table structure for table `headline`
--

CREATE TABLE `headline` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alignment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headline`
--

INSERT INTO `headline` (`id`, `title`, `image`, `subtitle`, `alignment`, `created_at`, `updated_at`) VALUES
(2, 'Salatiga', 'Screen Shot 2022-05-19 at 5.11.57 PM.png', 'Hati beriman', 'text-center', '2022-05-19 03:16:01', '2022-05-19 04:53:30'),
(4, 'Beragam Penginapan', 'hotel.webp', 'Dari Hotel sampai Homestay', 'text-right', '2022-05-19 05:31:36', '2022-05-19 05:31:36'),
(5, 'Beragam Kuliner', 'pop.jpg', 'Legendaris, Tradisional, UMKM, Cafe & Resto', 'text-right', '2022-05-19 05:33:50', '2022-05-19 05:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idTempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `idTempat`, `image`, `desc`, `tags`, `created_at`, `updated_at`) VALUES
(1, '1', 'photo_2022-05-16 20.27.49.jpeg', 'Prasasti Plumpungan', 'Prasasti Plumpungan', '2022-05-16 06:32:43', '2022-05-16 06:32:43'),
(2, '1', 'photo_2022-05-16 20.32.02.jpeg', 'Prasasti Plumpungan', 'Prasasti Plumpungan', '2022-05-16 06:32:43', '2022-05-16 06:32:43'),
(3, '2', 'Picture1.png', 'Taman tingkir', 'Taman tingkir', '2022-05-16 10:02:01', '2022-05-16 10:02:01'),
(4, '2', 'Picture11.png', 'Lapangan', 'Lapangan', '2022-05-16 10:02:01', '2022-05-16 10:02:01'),
(5, '3', 'kalitaman 1.jpeg', 'Kolam renang', 'Kolam renang', '2022-05-17 19:51:53', '2022-05-17 19:51:53'),
(6, '4', 'pohon.jpg', 'pohon', 'pohon', '2022-05-17 22:30:57', '2022-05-17 22:30:57'),
(7, '5', 'Gedung Pakuwon 2.jpg', 'Gedung pakuwon', 'Gedung pakuwon', '2022-05-17 22:36:36', '2022-05-17 22:36:36'),
(8, '6', 'Gedung Pakuwon 2.jpg', 'Gedung pakuwon', 'Gedung pakuwon', '2022-05-17 22:40:08', '2022-05-17 22:40:08'),
(9, '7', 'hock.jpg', 'hock', 'hock', '2022-05-17 22:45:38', '2022-05-17 22:45:38'),
(10, '8', 'wahid.jpg', 'Makam mbah wahid', 'Makam mbah wahid', '2022-05-17 22:50:36', '2022-05-17 22:50:36'),
(11, '10', 'klenteng.png', 'klenteng', 'klenteng', '2022-05-17 22:55:42', '2022-05-17 22:55:42'),
(12, '11', 'kopek.jpg', 'Makam Nyai Kopek', 'Makam Nyai Kopek', '2022-05-17 23:00:42', '2022-05-17 23:00:42'),
(13, '12', 'damarjati.jpg', 'Damarjati', 'Damarjati', '2022-05-17 23:08:14', '2022-05-17 23:08:14'),
(14, '13', 'plumpungan.jpg', 'Prasasti Plumpungan', 'Prasasti Plumpungan', '2022-05-17 23:12:43', '2022-05-17 23:12:43'),
(15, '14', 'tamancerdas.jpeg', 'tamancerdas', 'tamancerdas', '2022-05-17 23:15:45', '2022-05-17 23:15:45'),
(16, '15', 'tamanbendosari.jpg', 'Taman Bendosari', 'Taman Bendosari', '2022-05-17 23:20:48', '2022-05-17 23:20:48'),
(17, '16', 'tamantingkir.jpg', 'Taman Tingkir', 'Taman Tingkir', '2022-05-17 23:23:24', '2022-05-17 23:23:24'),
(18, '17', 'alunalun.png', 'Alun Alun', 'Alun Alun', '2022-05-17 23:27:28', '2022-05-17 23:27:28'),
(19, '18', 'baksobabattamansari.jpg', 'Bakso Babat Tamansari', 'Bakso Babat Tamansari', '2022-05-17 23:32:35', '2022-05-17 23:32:35'),
(20, '19', 'rondejago.jpg', 'Ronde Jago', 'Ronde Jago', '2022-05-17 23:37:53', '2022-05-17 23:37:53'),
(21, '20', 'kopibabah.jpeg', 'Kopi babah', 'Kopi babah', '2022-05-17 23:40:10', '2022-05-17 23:40:10'),
(22, '21', 'rotitegal.png', 'Roti Tegal', 'Roti Tegal', '2022-05-17 23:43:52', '2022-05-17 23:43:52'),
(23, '22', 'enting.png', 'Toko Produksi Enting Enting', 'Toko Produksi Enting Enting', '2022-05-17 23:59:20', '2022-05-17 23:59:20'),
(24, '23', 'gethuk.png', 'Getuk Kethek', 'Getuk Kethek', '2022-05-18 00:03:36', '2022-05-18 00:03:36'),
(25, '24', 'sotoesto.png', 'Soto Esto', 'Soto Esto', '2022-05-18 00:08:03', '2022-05-18 00:08:03'),
(26, '25', 'sotokesambi.png', 'Soto Kesambi', 'Soto Kesambi', '2022-05-18 00:10:40', '2022-05-18 00:10:40'),
(27, '26', 'rakinem.jpg', 'Rakinem', 'Rakinem', '2022-05-18 00:17:39', '2022-05-18 00:17:39'),
(28, '28', 'bumikayom.jpeg', 'Bumi Kayom', 'Bumi Kayom', '2022-05-18 00:38:33', '2022-05-18 00:38:33'),
(29, '30', 'd9resto.jpg', 'D9 Resto', 'D9 Resto', '2022-05-18 00:44:23', '2022-05-18 00:44:23'),
(30, '31', 'd9resto.jpg', 'Singkong D9', 'Singkong D9', '2022-05-18 00:49:21', '2022-05-18 00:49:21'),
(31, '5', 'papak1.jpg', 'kantor walikota', 'kantor walikota', '2022-05-19 05:43:45', '2022-05-19 05:43:45'),
(32, '5', 'papak2.jpg', 'gedung papak', 'gedung papak', '2022-05-19 05:43:45', '2022-05-19 05:43:45'),
(33, '32', 'papak1.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 06:04:36', '2022-05-19 06:04:36'),
(34, '32', 'papak2.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 06:05:59', '2022-05-19 06:05:59'),
(35, '33', 'papak1.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 06:25:17', '2022-05-19 06:25:17'),
(37, '33', 'papak2.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 06:27:50', '2022-05-19 06:27:50'),
(39, '34', 'papak1.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 07:13:06', '2022-05-19 07:13:06'),
(40, '34', 'papak2.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 07:13:06', '2022-05-19 07:13:06'),
(41, '3', 'kalitaman 1.jpg', 'kolam', 'kolam', '2022-05-19 10:39:34', '2022-05-19 10:39:34'),
(42, '3', 'kalitaman2.jpg', 'kolam', 'kolam', '2022-05-19 10:39:59', '2022-05-19 10:39:59'),
(43, '35', 'larasasri.jpg', 'kamar', 'kamar', '2022-05-19 11:04:30', '2022-05-19 11:04:30'),
(44, '35', 'larasasri4.jpg', 'spa', 'spa', '2022-05-19 11:04:30', '2022-05-19 11:04:30'),
(45, '35', 'larasasri1.jpg', 'restaurant', 'restaurant', '2022-05-19 11:04:30', '2022-05-19 11:04:30'),
(46, '35', 'larasasri2.jpg', 'meeting room', 'meeting room', '2022-05-19 11:04:30', '2022-05-19 11:04:30'),
(47, '35', 'larasasri3.jpg', 'pusat kebugaran', 'pusat kebugaran', '2022-05-19 11:04:30', '2022-05-19 11:04:30'),
(48, '36', 'kayuarum1.jpg', 'Kayu Arum', 'Kayu Arum', '2022-05-19 14:41:38', '2022-05-19 14:41:38'),
(49, '36', 'kayuarum2.jpg', 'Kayu Arum', 'Kayu Arum', '2022-05-19 14:41:38', '2022-05-19 14:41:38'),
(50, '36', 'kayuarum3.jpg', 'Kayu Arum', 'Kayu Arum', '2022-05-19 14:41:38', '2022-05-19 14:41:38'),
(51, '37', 'wahidhotel1.png', 'Grand Wahid Hotel', 'Grand Wahid Hotel', '2022-05-19 15:07:42', '2022-05-19 15:07:42'),
(52, '37', 'wahidhotel2.jpeg', 'Grand Wahid Hotel', 'Grand Wahid Hotel', '2022-05-19 15:07:42', '2022-05-19 15:07:42'),
(53, '38', 'lebringin.jpg', 'Le Beringin Hotel', 'Le Beringin Hotel', '2022-05-19 15:12:37', '2022-05-19 15:12:37'),
(54, '38', 'lebringin2.png', 'Le Beringin Hotel', 'Le Beringin Hotel', '2022-05-19 15:12:37', '2022-05-19 15:12:37'),
(55, '38', 'lebringin3.jpg', 'Le Beringin Hotel', 'Le Beringin Hotel', '2022-05-19 15:12:37', '2022-05-19 15:12:37'),
(56, '40', 'demmerick.jpg', 'D\' Emmerick Hotel', 'D\' Emmerick Hotel', '2022-05-19 15:19:15', '2022-05-19 15:19:15'),
(57, '40', 'demmerick2.jpg', 'D\' Emmerick Hotel', 'D\' Emmerick Hotel', '2022-05-19 15:19:15', '2022-05-19 15:19:15'),
(58, '40', 'demmerick3.jpg', 'D\' Emmerick Hotel', 'D\' Emmerick Hotel', '2022-05-19 15:19:15', '2022-05-19 15:19:15'),
(59, '41', 'papak1.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 16:06:10', '2022-05-19 16:06:10'),
(60, '41', 'papak2.jpg', 'Gedung Papak', 'Gedung Papak', '2022-05-19 16:06:10', '2022-05-19 16:06:10');

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
(305, '2014_10_12_000000_create_users_table', 1),
(306, '2014_10_12_100000_create_password_resets_table', 1),
(307, '2019_08_19_000000_create_failed_jobs_table', 1),
(308, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(309, '2022_04_15_060414_create_destinasi_table', 1),
(310, '2022_04_16_030000_create_acara_table', 1),
(311, '2022_04_17_085419_create_akomodasi_table', 1),
(312, '2022_04_20_155800_create_fasum_table', 1),
(313, '2022_04_20_160146_create_images_table', 1),
(314, '2022_04_20_160304_create_headline_table', 1),
(315, '2022_04_20_160902_create_kuliner_table', 1),
(316, '2022_04_30_045615_create_tempat_table', 1),
(317, '2022_04_30_052029_create_review_table', 1),
(318, '2022_04_30_052110_create_category_table', 1),
(319, '2022_04_30_060519_refresh', 1),
(320, '2022_04_30_065908_create_subcategory_table', 1),
(321, '2022_04_30_070930_refresh', 1),
(322, '2022_05_11_131553_refresh', 1);

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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idTempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vote` int(11) NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `idTempat`, `name`, `email`, `message`, `image`, `vote`, `reply`, `created_at`, `updated_at`) VALUES
(5, '2', 'adele', 'adele@gmail.com', 'baik', '', 4, '', '2022-05-16 15:44:52', '2022-05-16 15:44:52'),
(6, '1', 'Anon', 'ali@gmail.com', 'Semoga di bangun lebih bagus', '', 10, '', '2022-05-16 21:53:06', '2022-05-16 21:53:06'),
(7, '4', 'Wildan', 'alifwildan16@gmail.com', 'Bagus', '', 10, '', '2022-05-17 23:15:53', '2022-05-17 23:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `category`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Alam', '1', 'icon_set_1_icon-24', '2022-05-16 06:25:50', '2022-05-17 19:13:03'),
(4, 'Legendaris Salatiga', '2', 'icon_set_3_restaurant-5', '2022-05-16 09:59:23', '2022-05-17 19:22:51'),
(5, 'Budaya', '1', 'icon_set_1_icon-1', '2022-05-16 23:02:21', '2022-05-17 19:16:52'),
(6, 'Religi', '1', 'icon_set_1_icon-43', '2022-05-16 23:17:17', '2022-05-17 19:19:46'),
(8, 'Hotel', '3', 'icon_set_1_icon-23', '2022-05-17 19:09:43', '2022-05-17 19:09:43'),
(9, 'Sejarah', '1', 'icon_set_1_icon-44', '2022-05-17 19:10:46', '2022-05-17 19:20:13'),
(10, 'Wisma', '3', 'icon_set_2_icon-115', '2022-05-17 19:11:59', '2022-05-17 19:11:59'),
(11, 'Homestay', '3', 'icon_set_1_icon-64', '2022-05-17 19:12:23', '2022-05-17 19:12:23'),
(12, 'Rekreasi', '1', 'icon_set_1_icon-3', '2022-05-17 19:20:35', '2022-05-17 19:20:35'),
(13, 'Resto dan Kafe', '2', 'icon_set_3_restaurant-8', '2022-05-17 19:23:27', '2022-05-17 19:23:27'),
(14, 'UMKM', '2', 'icon_set_3_restaurant-6', '2022-05-17 19:23:41', '2022-05-17 19:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapUrl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` int(11) NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seninJumat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sabtuMinggu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilities` tinyint(1) NOT NULL,
  `parkir` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `isHeadline` tinyint(1) NOT NULL,
  `isIcon` tinyint(1) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `name`, `desc`, `desa`, `kecamatan`, `address`, `mapUrl`, `ticket`, `rating`, `seninJumat`, `sabtuMinggu`, `disabilities`, `parkir`, `wifi`, `isHeadline`, `isIcon`, `url`, `image`, `video`, `tags`, `created_at`, `updated_at`) VALUES
(4, 'Pohon Pengantin', 'Tumbuh sendirian di tengah hamparan sawah, Pohon Pengantin di Salatiga ini dipercaya dapat membuat hubungan awet. Namun di balik kepopulerannya, pohon istimewa ini menyimpan cerita lengkap dengan mitosnya.', 'PULUTAN', 'SIDOREJO', 'Pulutan, Kec. Sidorejo, Kota Salatiga', 'https://www.google.co.id/maps/place/Pohon+Pengantin+Salatiga/@-7.312155,110.483466,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a786f1791822d:0x1f9ff36393e2be5b!8m2!3d-7.312155!4d110.4879453', 0, '4.5', '00:00-00:00', '00:00-00:00', 1, 1, 0, 1, 0, '', 'pohon.jpg', '', 'Alam', '2022-05-17 22:30:57', '2022-05-17 22:30:57'),
(6, 'Gedung  Pakuwon', 'Merupakan bangunan yang menjadi salah satu bukti fisik dari kota terencana dengan konsep kota modern. Pada awalnya bangunan ini digunakan sebagai rumah dinas Asisstent Resident Salatiga masa pemerintahan Kolonial Belanda. \r\nSelanjutnya difungsikan sebagai Rumah Dinas Wali Kota Salatiga.', 'KALICACING', 'SIDOMUKTI', 'Jalan Diponegoro No. 1 Salatiga', 'https://www.google.com/maps/place/Gedung+Pakuwon+Perjanjian+Salatiga/@-7.3313303,110.4997106,15z/data=!4m2!3m1!1s0x0:0x109433ec368f37c2?sa=X&ved=2ahUKEwjAx5LWquj3AhUnIbcAHUf-DwAQ_BJ6BAhtEAU', 0, '4.5', '08:00-17:00', '08:00-17:00', 1, 1, 1, 1, 0, '', 'Gedung Pakuwon 2.jpg', '', 'Budaya', '2022-05-17 22:40:08', '2022-05-17 22:40:08'),
(7, 'Benteng Hock', 'Benteng Hock merupakan Bangunan Cagar Budaya (BCB) milik Satlantas Polres Salatiga ini. Sebelumnya bangunan ini terbengkalai dan direstorasi menjadi taman dan tempat berkumpul masyarakat.', 'SIDOREJO LOR', 'SIDOREJO', 'Jl. Diponegoro, Sidorejo Lor, Kec. Sidorejo, Kota Salatiga', 'https://www.google.co.id/maps/place/Benteng+Hock+Resto+%26+Cafe/@-7.3162473,110.4939076,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a797580cb9e9f:0xb994b968788cf619!8m2!3d-7.3162536!4d110.4960991', 0, '4.5', '13:00-21:00', '13:00-21:00', 1, 1, 1, 1, 0, '', 'hock.jpg', '', 'Budaya', '2022-05-17 22:45:38', '2022-05-17 22:45:38'),
(9, 'Kelenteng Hok Tek Bio', 'Kelenteng Hok Tek Bio atau Klenteng Amurvabhumi yang berada di Jalan Letjen Sukowati merupakan saksi sejarah masuknya ajaran agama Budha di Kota Salatiga', 'KALICACING', 'SIDOMUKTI', 'Jl. Sukowati No.13, Kalicacing, Kec. Sidomukti, Kota Salatiga, Jawa Tengah 50724', 'https://www.google.co.id/maps/place/TITD+Hok+Tek+Bio/@-7.3316657,110.5021192,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a783137053323:0xac43e21bbdd480ea!8m2!3d-7.3317079!4d110.5043141', 0, '4.5', '06:00-22:00', '06:00-22:00', 1, 1, 1, 1, 0, '', 'klenteng.png', '', 'Religi', '2022-05-17 22:54:56', '2022-05-17 22:54:56'),
(11, 'Makam Nyai Kopek', 'Pemerhati Sejarah dan Budaya Kota Salatiga, Edi Supangkat menjelaskan bahwa dalam sejarahnya, Nyai Kopek adalah tokoh di Kasunanan Surakarta disaat negeri ini masih dikuasi oleh pemerintah kolonial Belanda. Di kasunanan ketika itu terpecah dua kubu yakni pro kolonial Belanda dan kontra kolonial Belanda.', 'KUTOWINANGUN KIDUL', 'TINGKIR', 'Pancuran, Kutowinangun lor, Kec. Tingkir, Kota Salatiga', 'https://www.google.co.id/maps/place/Makam+Nyai+Kopek/@-7.3271397,110.5027554,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79585e2ff605:0x6808d13db6f32b2f!8m2!3d-7.3271364!4d110.5072131', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 0, 1, 0, '', 'kopek.jpg', '', 'Religi', '2022-05-17 23:00:42', '2022-05-17 23:00:42'),
(12, 'Makam Damarjati', 'Kyai Sirojudin atau Damarjati diyakini merupakan panglima perang kerajaan Mataram. Beliau datang ke Salatiga bersama Kiai Ronosentiko pada tahun 1826 masehi. Kedua panglima perang Laskar Pangeran Diponegoro itu, tiba di Salatiga saat melakukan perang gerilya melawan penjajah kolonial Belanda.', 'SALATIGA', 'SIDOREJO', 'Jl. Damar Jati No.3, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50711', 'https://www.google.co.id/maps/place/makam+eyang+kyai+damarjati%2Fbashirudin/@-7.3235144,109.9446471,10z/data=!4m9!1m2!2m1!1smakam+kyai+damar+jati!3m5!1s0x2e7a79a461737499:0xed13f0b60432d163!8m2!3d-7.3235144!4d110.5049498!15sChVtYWthbSBreWFpIGRhbWFyIGphdGmSAQhjZW1ldGVyeQ', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 0, 1, 0, '', 'damarjati.jpg', '', 'Religi', '2022-05-17 23:08:14', '2022-05-17 23:08:14'),
(13, 'Museum Salatiga ( Situs Plumpungan )', 'Prasasti Plumpungan atau Prasasti Hampran adalah situs arkeologi batu tulis yang berada di Dukuh Plumpungan, Kelurahan Kauman Kidul, Kecamatan Sidorejo, Kota Salatiga, Provinsi Jawa Tengah. Prasasti itu tertulis dalam batu besar berjenis andesit berukuran panjang 170 cm dan lebar 160 cm dengan garis lingkar 5 meter. Prasasti berangka tahun 750 Masehi ini dipercaya sebagai asal mula kota Salatiga.', 'KAUMAN KIDUL', 'SIDOREJO', 'Jl. Plumpungan, RT.002/RW.001, Kauman Kidul, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50712', 'https://www.google.co.id/maps/place/Prasasti+Plumpungan/@-7.3064051,110.5065223,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a780547301ef7:0x416d8e826cef276d!8m2!3d-7.3064051!4d110.5110016', 0, '4.5', '09:00-15:30', '09:00-15:30', 1, 1, 0, 1, 0, '', 'plumpungan.jpg', '', 'Sejarah', '2022-05-17 23:12:43', '2022-05-17 23:12:43'),
(15, 'Taman Bendosari', 'Objek wisata di sini berupa taman. Terdapat bermacam-macam jenis tumbuhan yang ditanam di sana. Wisatawan tidak hanya bisa memanjakan mata di sana, namun juga bisa sambil belajar. Karena, pohon maupun tanaman yang ditanam di sana diberi informasi nama latin dan nama lokal.Ada beberapa gazebo yang bisa digunakan wisatawan untuk menikmati taman kota tersebut. Gazebo tersebut ada yang hanya cukup untuk dua orang, ada yang bisa digunakan untuk ramai-ramai.', 'KUMPULREJO', 'ARGOMULYO', 'Bendosari rt.05-rw.05, Kumpulrejo, Kec. Argomulyo, Kota Salatiga', 'https://www.google.co.id/maps/place/Taman+Kota+Salatiga/@-7.3544582,110.4729025,16z/data=!4m9!1m2!2m1!1staman+bendosari+salatiga!3m5!1s0x2e7a79a389e42de7:0x94eaa6812c664eb8!8m2!3d-7.3544582!4d110.4816572!15sChh0YW1hbiBiZW5kb3Nhcmkgc2FsYXRpZ2GSAQljaXR5X3Bhcms', 0, '4.5', '07:30-20:00', '07:30-20:00', 1, 1, 0, 1, 0, '', 'tamanbendosari.jpg', '', 'Rekreasi', '2022-05-17 23:20:48', '2022-05-17 23:20:48'),
(16, 'Taman Tingkir', 'Taman Tingkir Salatiga adalah destinasi wisata dan taman kota yang berada di Jalan Tritis Sari No. 17, Kelurahan Sidorejo Kidul, Kecamatan Tingkir, Kota Salatiga, Provinsi Jawa Tengah. Taman ini selesai didirikan pada 2016 dan berfungsi untuk memenuhi kebutuhan ruang terbuka hijau (RTH) di Kota Salatiga. Taman ini bersifat umum dan terbuka, yaitu dapat dimanfaatkan oleh berbagai kalangan.', 'SIDOREJO KIDUL', 'TINGKIR', 'Jl. Tritis Sari No.17, Sidorejo Kidul, Kec. Tingkir, Kota Salatiga, Jawa Tengah 50741', 'https://www.google.co.id/maps/place/Taman+Tingkir+Kota+Salatiga/@-7.3377417,110.512932,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79d4cdeca8c7:0x7aab2e7d2e28b240!8m2!3d-7.3377417!4d110.5174113', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 1, 1, 0, '', 'tamantingkir.jpg', '', 'Rekreasi', '2022-05-17 23:23:24', '2022-05-17 23:23:24'),
(17, 'Alun - alun Pancasila', 'Alun-Alun Pancasila Salatiga adalah destinasi wisata dan lapangan terbuka yang berada di Jalan Alun-Alun Pancasila, Kelurahan Kalicacing, Kecamatan Sidomukti, Kota Salatiga, Provinsi Jawa Tengah.', 'KALICACING', 'SIDOMUKTI', 'Alun alun pancasila, Kalicacing, Sidomukti, Salatiga', 'https://www.google.co.id/maps/place/Alun+Alun+Pancasila/@-7.3308,110.4975271,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7831cb73c925:0x3ffe6b4abb68a4d0!8m2!3d-7.3308!4d110.4997212', 0, '4.5', '00:59-12:59', '00:59-12:59', 1, 1, 1, 1, 0, '', 'alunalun.png', '', 'Rekreasi', '2022-05-17 23:27:28', '2022-05-17 23:27:28'),
(18, 'Bakso Babat Tamansari', 'Apakah Kamu mencari kenikmatan bakso dengan kuah hangat di dinginnya kota Salatiga? Bakso Babat Taman Sari adalah jawabannya! Dulunya saling bersebelahan dengan Bakso Babat TK Gigi, lalu pindah lokasi ke jalan Taman Sari yang akhirnya menjadi nama legendaris ini, sekarang warung ini menetap di Jl. Diponegoro No.105 dimana Kamu dapat menikmati semangkuk bakso yang sudah ada sejak lama di kota ini. Dengan pengalaman berjualan sejak 1965, lidah dan perut Kamu tidak akan dikecewakan dengan berkunjung kesini. Mulai dari Bakso Babat, Bakso Kikil, Bakso Campur, Bakso Bihun, Bakso Bakmi sampai Bakso Pangsit, uang 20 ribu Kamu tidak akan tersia-siakan.', 'SIDOREJO LOR', 'SIDOREJO', 'Jl. Diponegoro No.105, Sidorejo Lor, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50714', 'https://www.google.co.id/maps/place/RM+Bakso+Tamansari/@-7.3149428,110.4910235,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a786bc71760ef:0xc438e16e051b158a!8m2!3d-7.3149428!4d110.4932176', 0, '4.5', '09:00-17:00', '09:00-17:00', 1, 1, 1, 1, 0, '', 'baksobabattamansari.jpg', '', 'Legendaris Salatiga', '2022-05-17 23:32:35', '2022-05-17 23:32:35'),
(19, 'Ronde Jago', 'Sejak tahun 1960-an Ronde Jago dikenal sebagai kudapan penangkal udara dingin Kota Salatiga. Konon nama Jago dipakai karena awalnya adalah kedai jamu. Bertahan hingga hari ini, resep turun temurun Ronde Jago sudah sampai pada generasi keempat, yakni Airlangga Setia Darma Putra.', 'KUTOWINANGUN KIDUL', 'TINGKIR', 'Jl. Jend. Sudirman No.9, Kutowinangun Kidul, Kec. Tingkir, Kota Salatiga, Jawa Tengah 50724', 'https://www.google.co.id/maps/place/Ronde+Sekoteng+Jago/@-7.3275545,110.5026717,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7832d1a4fde5:0xa9562d9a8aef7fd5!8m2!3d-7.3275545!4d110.5048658', 0, '4.5', '13:00-21:00', '13:00-21:00', 1, 1, 1, 1, 0, '', 'rondejago.jpg', '', 'Legendaris Salatiga', '2022-05-17 23:37:53', '2022-05-17 23:37:53'),
(20, 'Kopi Babah Kacamata', 'Di dinginnya Kota Salatiga ini, satu minuman hangat tentunya belum cukup untuk melewati dinginnya malam. Dan untuk kamu yang menyukai pahit lebih dari yang manis, Kopi Babah Kacamata cocok untukmu. Mendapatkan namanya dari sang pemilik yang berkacamata pada masa dimana yang berkacamata terhitung jari, toko kopi ini tetap bertahan dan makmur di tengah menjamurnya cafe-cafe baru di Salatiga. Kamu tidak bisa langsung menikmati kopinya di tempat secara langsung, tapi produk kopi mereka sudah menjadi legenda selama lebih dari 50 tahun. Kamu bisa mendapatkan Kopi Babah Kacamata di Jl. Kalinyamat No.16.', 'KUTOWINANGUN KIDUL', 'TINGKIR', 'Jl. Kalinyamat No.14-16, Kutowinangun Kidul, Tingkir, Kota Salatiga, Jawa Tengah 50742', 'https://www.google.co.id/maps/place/Kopi+Babah+Kacamata/@-7.3304104,110.5043552,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7831b2adacd3:0x88c9ba3c2035c55!8m2!3d-7.3304104!4d110.5065493', 0, '4.5', '09:00-17:00', '09:00-17:00', 1, 1, 1, 1, 0, '', 'kopibabah.jpeg', '', 'Legendaris Salatiga', '2022-05-17 23:40:10', '2022-05-17 23:40:10'),
(21, 'Roti Tegal', 'Jika Kamu sudah puas dengan minuman dan hidangan yang berkuah dan hangat, maka Kamu perlu mencicipi roti yang baru saja keluar dari oven di Toko Roti Tegal. Penciuman Kamu akan dipuaskan mulai dari Kamu memijakan kaki di toko ini, lebih dari itu, pikirkan apa yang bisa dinikmati oleh perut dan lidah Anda. Toko roti ini menggunakan telur ayam kampung segar dan tidak menggunakan bahan pengawet untuk menghasilkan roti yang terbaik. Pada akhir pekan Kamu dapat mencoba menu spesial mereka yaitu Roti Keju/Oliebol. Sangat cocok untuk dinikmati saat sarapan atau ngemil untuk mengisi tenaga saat berkeliling di Kota Salatiga yang tenang.', 'KALICACING', 'SIDOMUKTI', 'Jl. Jend. Sudirman No.166 Kalicacing, Kec. Sidomukti, Kota Salatiga, Jawa Tengah 50724', 'https://www.google.co.id/maps/place/Toko+Roti+Tegal/@-7.3324866,110.5006811,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79d1b36ee5bb:0xba711843df6f5664!8m2!3d-7.3324906!4d110.5051258', 0, '4.5', '08:30-20:30', '08:30-20:30', 1, 1, 0, 1, 0, '', 'rotitegal.png', '', 'Legendaris Salatiga', '2022-05-17 23:43:52', '2022-05-17 23:43:52'),
(22, 'Enting-Enting Gepuk Cap Klenteng & 2 Hoolo', 'Merupakan salah satu produsen Enting-Enting tertua di Salatiga. Berdiri tahun 1929 dengan nama 2 Hoolo, dan awal produksi di dalam Klenteng, Enting Enting ini masih mempertahankan rasa dan kualitas turun temurun. Pendiri awal Alm. Bapak Sunarso, saat ini dikelola generasi ke 3 yaitu Ibu Hj. Juariah. Gurihnya kacang dan manisnya gula jawa berkualitas ini bisa Kamu dapatkan dengan harga 15 ribu sampai 70 ribu Rupiah di Jl. Kalibodri No.37.', 'KUTOWINANGUN KIDUL', 'TINGKIR', 'Jl. Kalibodri No.37 Kutowinangun Kidul, Kec. Tingkir, Kota Salatiga, Jawa Tengah 50742', 'https://www.google.co.id/maps/place/Enting-Enting+Gepuk+Cap+Klenteng+%26+2+Hoolo/@-7.3321421,110.5054081,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7831911ca1a3:0xd4267ccdcc6e0942!8m2!3d-7.3321287!4d110.5076019', 0, '4.5', '08:00-14:00', '08:00-14:00', 1, 1, 0, 1, 0, '', 'enting.png', '', 'Legendaris Salatiga', '2022-05-17 23:59:20', '2022-05-17 23:59:20'),
(23, 'Getuk Kethek', 'Selain Roti Tegal dan Enting-Enting Gepuk, ada juga hidangan manis lainnya yang menjadi primadona kota Salatiga yang kerap digadang-gadang sebagai kuliner khas Salatiga, yaitu Getuk Kethek. Nama Getuk Kethek lebih akrab diperbincangkan masyarakat dibanding nama asli kedainya, Getuk Satu Rasa. Selain rasa manis dan pulen yang dapat kita nikmati saat mengkonsumsi getuk ini, yang menjadi ciri khas dari Getuk Kethek ini adalah monyet yang bisa dijumpai pengunjung di teras rumah pemilik Getuk Kethek ini sehingga dijuluki sebagai Getuk Kethek dari kata “Kethek” yang berarti Monyet. Pemilik Getuk Kethek sekarang sudah dikelola oleh generasi kedua yang meneruskan usaha orang tuanya sejak tahun 1980-an. Gethuk Kethek ini dipatok dengan harga 14 ribu Rupiah per boksnya dan dapat ditemui di Jl. Agrotunggal No. 9, Kampung Ledok, Salatiga.', 'LEDOK', 'ARGOMULYO', 'Jl. Argotunggal No.9, Ledok, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50732', 'https://www.google.co.id/maps/place/Gethuk+Kethek+%22Satu+Rasa%22/@-7.3425595,110.5086798,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79d226bd8423:0x9a802892d17a6b73!8m2!3d-7.3425367!4d110.5108791', 0, '4.5', '09:00-17:00', '09:00-17:00', 1, 1, 0, 1, 0, '', 'gethuk.png', '', 'Legendaris Salatiga', '2022-05-18 00:03:36', '2022-05-18 00:03:36'),
(24, 'Soto Esto', 'Dengan hanya memiliki satu menu makanan yang ditawarkan, resto Soto Esto yang sudah ada sejak tahun 1953 ini layak dijuluki sebagai salah satu tempat makan legendaris. Menu yang ditawarkan pada tempat makan ini hanya satu, yaitu Soto Ayam. Meskipun hanya satu menu tetapi tempat ini selalu ramai pengunjung, tidak sedikit juga yang datang langsung dari luar kota untuk mencicipi cita rasa yang legendaris ini. Soto santan yang gurih tetapi tetap segar dan tidak terlalu kental, lebih nikmat dimakan bersamaan dengan krupuk karak yang bisa kita pilih untuk ditambahkan secara utuh atau diremukan di atas soto. Resto ini juga menawarkan berbagai macam gorengan dan sate-satean. Soto Esto berlokasi di Jl. Langensuko No. 4, dekat dengan Hotel Wahid Salatiga, dapat ditempuh dengan berjalan kaki. Harga satu porsi soto ayam adalah 10 ribu, dan gorengan serta sate-satean dengan harga kisaran 3-5 ribu Rupiah,-', 'SALATIGA', 'SIDOREJO', 'Jl. Langensuko No.4, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50711', 'https://www.google.co.id/maps/place/Soto+Ayam+Esto/@-7.3259397,110.5016719,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7839823537d3:0x9de2e8cf47740550!8m2!3d-7.3259397!4d110.503866', 0, '4.5', '06:00-13:00', '06:00-13:00', 1, 1, 0, 1, 0, '', 'sotoesto.png', '', 'Legendaris Salatiga', '2022-05-18 00:08:03', '2022-05-18 00:08:03'),
(25, 'Soto Kesambi Pak Wianto (Tan Ping Tjwan)', 'Dengan alasan yang kurang lebih sama dengan resto Soto Esto, Soto Kesambi Pak Wianto layak disebut sebagai salah satu kuliner legendaris di Salatiga. Jika Soto Esto berjualan di garasi rumah, Soto Kesambi menyuguhkan makanannya di teras dan ruang tamu rumah. Meskipun tidak luas akan tetapi suasana old style yang dapat kita rasakan saat berkunjung ke resto ini menjadi salah satu poin penting mengapa tempat ini banyak dikunjungi. Resto ini sudah ada sekitar 30 tahunan, itulah mengapa banyak pengunjung yang datang kesini dari berbagai kota untuk bernostalgia rasa dan suasana bersama keluarga. Makanan yang disuguhkan disini yaitu soto ayam yang dapat dinikmati bersama berbagai macam gorengan, ayam goreng, jeroan dan bahkan ada juga rongkong. Soto Kesambi bisa Kamu kunjungi di Jl. Gladakan No. 682, Salatiga.', 'SALATIGA', 'SIDOREJO', 'Jl. Gladagan No.682, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50711', 'https://www.google.co.id/maps/place/%22Soto+Kesambi%22+Pak+Wianto+(Tan+Ping+Tjwan)/@-7.3230469,110.5010879,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7839522bbfcb:0xd7f25643b914d3ab!8m2!3d-7.3230549!4d110.5033102', 0, '4.5', '06:00-15:00', '06:00-15:00', 1, 1, 1, 0, 0, '', 'sotokesambi.png', '', 'Legendaris Salatiga', '2022-05-18 00:10:40', '2022-05-18 00:10:40'),
(26, 'Pondok Dahar Mbah Rakinem', 'Jika membahas tentang makanan khas Salatiga yang hanya ada di Salatiga tentu saja jawabannya adalah Tumpang Koyor. Nah, yang menjadi menu andalan di Pondok Dahar Mbah Rakinem ini adalah Tumpang Koyor. Tumpang Koyor milik Mbah Rakinem menawarkan rasa yang legendaris dari pengalaman berjualan sejak tahun 1970 an. Rasa gurih, manis dan pedas kuah dengan isian tahu dan koyor yang disuguhkan bersama nasi maupun bubur membuat Tumpang Koyor digemari banyak orang. Mbah Rakinem berjualan setiap pagi dari pukul 7.00 – 10.00 dirumahnya. Jika ingin mencicipi Tumpang Koyor Mbah Rakinem dapat dikunjungi di Jl. Nakula Sadewa III No. 13, Salatiga. Uang yang perlu dikeluarkan untuk menikmati hidangan ini juga tidak banyak, hanya perlu membayar sekitar 10-15 ribu Rupiah.', 'DUKUH', 'SIDOMUKTI', 'Jl. Nakula Sadewa III No.13, Dukuh, Kota Salatiga, Jawa Tengah', 'https://www.google.co.id/maps/place/Sambal+Tumpang+Mbah+Rakinem/@-7.3360971,110.487497,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a784c53f1ef59:0xdf7615e22d082a10!8m2!3d-7.3361815!4d110.4896648', 0, '4.5', '06:00-10:00', '06:00-10:00', 1, 1, 0, 1, 0, '', 'rakinem.jpg', '', 'Legendaris Salatiga', '2022-05-18 00:17:39', '2022-05-18 00:17:39'),
(27, 'Teak Tree', 'Berada di Jalan Soekarno-Hatta No.113, Cebongan, Argomulyo, Salatiga, Teak Tree Eatery & Living adalah tempat makan yang menawarkan nuansa kekinian. Interiornya begitu artistik dan memberi kesan romantis, terutama di malam hari. Mereka buka mulai pukul 10.00 hingga 22.00, bisa dijadikan alternatif tempat nongkrong saat sore hingga larut.', 'CEBONGAN', 'ARGOMULYO', 'Jl. Soekarno Hatta No.113, Cebongan, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50736', 'https://www.google.co.id/maps/place/Teak+Tree+Eatery+%26+Living/@-7.3654206,110.5123634,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79e466a63a93:0x9e0231e8bccc5692!8m2!3d-7.3654206!4d110.5145575', 0, '4.5', '11:00-20:00', '11:00-20:00', 1, 1, 1, 1, 0, '', 'teaktree.png', '', 'Resto dan Kafe', '2022-05-18 00:22:59', '2022-05-18 00:22:59'),
(28, 'Bumi Kayom', 'Bumi Kayom merupakan kawasan wisata yang memadukan daratan hijau yang luas, restoran, coffee shop dan penginapan dalam satu tempat. Di dalam kawasan Bumi Kayom, terdapat dua tempat yaitu Restoran Bumi Kayom yang diberi nama \'Tanah Air\' dan sebuah coffee shop dengan nama \'Langit Senja\'.', 'KUTOWINANGUN KIDUL', 'TINGKIR', 'Jl. Nusantara No.18, Kutowinangun Lor, Kec. Tingkir, Kota Salatiga, Jawa Tengah 50742', 'https://www.google.co.id/maps/place/Bumi+Kayom/@-7.3175455,110.5129847,17z/data=!4m9!1m2!2m1!1sbumi+kayom+langit+senja+salatiga!3m5!1s0x2e7a7910c18f11a7:0x5393a5cbb9279ebd!8m2!3d-7.3176348!4d110.5152191!15sCiBidW1pIGtheW9tIGxhbmdpdCBzZW5qYSBzYWxhdGlnYVoiIiBidW1pIGtheW9tIGxhbmdpdCBzZW5qYSBzYWxhdGlnYZIBCnJlc3RhdXJhbnSaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUkhOV1IxZUZwM0VBRQ', 0, '4.5', '11:00-21:00', '11:00-21:00', 1, 1, 1, 1, 0, '', 'bumikayom.jpeg', '', 'Resto dan Kafe', '2022-05-18 00:38:33', '2022-05-18 00:38:33'),
(29, 'Naruna', 'Naruna awalnya adalah produsen Keramik Handmade Tableware dan Teak Woodenware yang memperlengkap Showroom Keramiknya dengan Resto \"Naruna Space\" dan Wahana Edukasi Play Clay. Pengunjung akan dimanjakan dengan spot selfie yang Instagramable disetiap sudut ruang Naruna Space, yang menyajikan menu Indonesian Food yang memikat dilidah, dan pengunjung bisa relaxsasi Play Clay membuat bentuk aneka Keramik didampingi tenaga ahli Keramik Naruna, juga pengunjung lebih dimanjakan dengan bisa langsung membeli produk Keramik hasil produksi Naruna dijual di Showroom, yang bisa menjadi oleh-oleh Khas dari Salatiga. Lokasinya yang masih di Salatiga Kota, menjadi kan Naruna tempat yang terjangkau.', 'SALATIGA', 'SIDOREJO', 'Jl. Sawosari No.2, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50713', 'https://www.google.co.id/maps/place/Naruna/@-7.3124232,110.4930962,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79802e15099f:0x1816969ee49d0304!8m2!3d-7.3124232!4d110.4975755', 0, '4.5', '10:00-21:00', '10:00-21:00', 1, 1, 1, 1, 0, '', 'naruna.png', '', 'Resto dan Kafe', '2022-05-18 00:41:38', '2022-05-18 00:41:38'),
(30, 'D9 Resto', 'Singkong Keju D9 makin trendy dan tampil dengan menu-menu andalan yang kian kratif. D9 kini bukanya hanya menyediakan menu berbasis singkong, tapi aneka jajanan khas Salatiga juga dijual di Cafe dan Resto milik Hardadi ini.', 'LEDOK', 'ARGOMULYO', 'Jl. Argowiyoto No.8A, Ledok, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50732', 'https://www.google.co.id/maps/place/SINGKONG+KEJU+D-9+SALATIGA/@-7.3431601,110.5090185,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79d1f1bc2b7f:0x4140de38d2dc358!8m2!3d-7.3431601!4d110.5112126', 0, '4.5', '08:00-20:00', '08:00-20:00', 1, 1, 1, 1, 0, '', 'd9resto.jpg', '', 'Resto dan Kafe', '2022-05-18 00:44:23', '2022-05-18 00:44:23'),
(31, 'Singkong D9', 'Singkong Keju D9 makin trendy dan tampil dengan menu-menu andalan yang kian kratif. D9 kini bukanya hanya menyediakan menu berbasis singkong, tapi aneka jajanan khas Salatiga juga dijual di Cafe dan Resto milik Hardadi ini.', 'LEDOK', 'ARGOMULYO', 'Jl. Argowiyoto No.8A, Ledok, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50732', 'https://www.google.co.id/maps/place/SINGKONG+KEJU+D-9+SALATIGA/@-7.3431601,110.5090185,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79d1f1bc2b7f:0x4140de38d2dc358!8m2!3d-7.3431601!4d110.5112126', 0, '4.5', '08:00-20:00', '08:00-20:00', 1, 1, 1, 1, 0, '', 'd9resto.jpg', '', 'UMKM', '2022-05-18 00:49:21', '2022-05-18 00:49:21'),
(35, 'Laras Asri', 'The Laras Asri Resort & Spa is an oasis boutique resort ideally situated minutes from downtown Salatiga in Central Java’s emerging “Golden Circle”. Salatiga is in fact one of the oldest and most beautiful small towns in Central Java; it was once called,”de achoonste stad van midden Java” during the Dutch colonial periode. It also enjoys easy access to and from Semarang, Yogyakarta, Solo’s airports and rail way stations.', 'LEDOK', 'ARGOMULYO', 'Jl. Jend. Sudirman No.335, Ledok, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50732, Indonesië', 'https://www.google.com/maps/place/Hotel+Laras+Asri+Resort+and+Spa+Salatiga/@-7.3413225,110.5008043,15z/data=!3m1!4b1!4m8!3m7!1s0x2e7a79d27a7fa11d:0x233a2a304f948f!5m2!4m1!1i2!8m2!3d-7.3413273!4d110.5095298?hl=nl', 0, '4.5', '12:00-00:00', '12:00-00:00', 1, 1, 1, 1, 0, 'https://larasasriresort.com/', 'larasasri.jpg', 'https://www.youtube.com/watch?v=Z8_FtnHODlI&ab_channel=LarasAsriResort%26Spa', 'Hotel,Resto dan Kafe', '2022-05-19 11:04:30', '2022-05-19 11:04:30'),
(36, 'Kayu Arum', 'Berada pada 700 meter di atas permukaan laut, Kayu Arum Resort dapat dicapai dalam waktu 15 menit berkendara dari pusat kota Salatiga. Resor ini memiliki sebuah kolam renang outdoor, fasilitas kebugaran, dan kamar-kamar dengan TV layar datar. Menghadap pemandangan hijau, kamar-kamar di Kayu Arum dilengkapi dengan dekorasi dan perabotan tradisional Indonesia. Setiap kamarnya dilengkapi dengan area tempat duduk dan minibar. Tersedia fasilitas shower dan perlengkapan mandi.', 'LEDOK', 'ARGOMULYO', 'Jl Magersari, Ringinawe, Tegalrejo, Argomulyo, Ledok, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50733', 'https://www.google.com/maps/place/Kayu+Arum+Resort/@-7.3452176,110.504841,17z/data=!3m1!4b1!4m8!3m7!1s0x2e7a79cf19f4767d:0xe2b2acb8f93f4b4!5m2!4m1!1i2!8m2!3d-7.3453483!4d110.5070062', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 1, 1, 0, 'kayuarum.com', 'kayuarum1.jpg', '', 'Hotel', '2022-05-19 14:41:38', '2022-05-19 14:41:38'),
(37, 'Grand Wahid', 'Hotel Grand Wahid Salatiga terletak di pusat bisnis Kota Salatiga. Salatiga adalah sebuah kota kecil di Jawa Tengah yang terletak di antara kota-kota Semarang dan Solo. Jarak kedua dari mereka adalah sekitar 50 kilometer dari Salatiga, yang berarti hanya satu jam perjalanan. Kota ini sangat cepat berkembang yang mendukung oleh terkenal Universitas Kristen Satya Wacana UKSW dan universitas lain. Salatiga terletak 616 meter di atas permukaan laut, berada di kaki Gunung Merbabu. Posisi geografis ini membawa baik bermanfaat untuk cuaca yang sejuk. Cuaca ini memberikan lebih nyaman bagi mereka yang ingin bersantai sambil melakukan bisnis dan liburan pada waktu yang sama.', 'SALATIGA', 'SIDOREJO', 'Jl Jenderal Sudirman No.2, Sidomukti, Salatiga, Jawa Tengah, Indonesia, 50711.', 'https://www.google.com/maps/dir/hotel+grand+wahid+salatiga/PKP+RI+Kota+Salatiga,+Jl.+Patimura+No.47-53,+Salatiga,+Kec.+Sidorejo,+Kota+Salatiga,+Jawa+Tengah+50711/@-7.323885,110.5021777,17z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2e7a783a311324f5:0x118c808c8356eb6d!2m2!1d110.5043717!2d-7.3258475!1m5!1m1!1s0x2e7a783c1efa6c3d:0x347d8143a62afb45!2m2!1d110.503886!2d-7.3218688', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 1, 1, 0, '', 'wahidhotel1.png', '', 'Hotel', '2022-05-19 15:07:42', '2022-05-19 15:07:42'),
(38, 'Le Bringin', 'Hotel Beringin didirikan oleh Bpk. Handoko dan mulai beroperasional sejak 01-Maret-1969. Pada awal mulanya Hotel Beringin berdiri hanya terdiri dari beberapa kamar ± 04 kamar saja, kemudian seiring pertumbuhan ekonomi kota Salatiga yang sangat pesat, kamar-kamar fasilitas hotel selalu bertambah mengikuti permintaan kebutuhan. Terdapat sejarah penamaan Hotel Beringin yang cukup menarik, dimana nama Hotel Beringin diberikan oleh Bpk. Walikota pada saat itu, yang dapat diartikan “Mengakar Mengayomi “ Hotel Beringin merupakan hotel yang dikelola oleh keluarga besar Bpk. Handoko. Setelah beliau wafat, Operasional hotel diwariskan diberikan kepada putra putri Bpk. Handoko. Untuk operasional hotel penanggung jawab utama diberikan kepada Bpk. Ir.Roy Budhianto Handoko yang saat ini beliau menjadi Direktur Utama Hotel Beringin. Hotel Beringin Salatiga berbentuk PT dengan nama PT BERINGIN HANJAYA SEJAHTERA. Ber-alamatkan di Jl. Jend Sudirman No 160 Salatiga. Semula hotel ini diberi nama Hotel Beringin. Seiring dengan majunya kota Salatiga, dibutuhkan sarana akomodasi yang memadai serta dilengkapi dengan fasilitas pendukungnya. Dan untuk mengakomodasi kebutuhan itu Hotel ini melakukan perluasan area dan peningkatan fasilitas diantaranya adalah dengan menambah jumlah kamar, kolam renang, Restaurant Coffe Lounge, dan bebas akses internet dengan Hot Spot Wi Fi di area hotel. Dan pada tahun 2006 hotel ini memulai beberapa perubahan yang signifikan, seperti perubahan manajement. Standart pelayanan, variasi menu, serta berbagai program lain yang hotel ini tujukan untuk meningkatkan kepuasan pelanggan. Le Beringin Hotel tersebut terletak di Jalan Jendral Sudirman no.160 Salatiga. Le beringin Hotel memiliki 66 36 kamar mulai dari standart room, superior room, deluxe room, executive room, sampai dengan suite room. Sekilas Tentang Hotel Hotel yang stylish dan elegan ini berfokus untuk memberikan standar yang tinggi akan servis dan kenyamanan. Apapun tujuan Anda melakukan perjalanan, untuk bisnis, hiburan, ataupun merencanakan meeting, Hotel Le Beringin selalu mengusahakan yang terbaik untuk menjadikan perjalanan anda nyaman dan sukses. Hotel Le Beringin terletak di jantung kota Salatiga. Di dekat lokasi pertokoan, bank, apotek, pusat penjualan makanan, dan tempat kebutuhan lainnya. Kami memiliki 66 kamar yang dimulai dari standard hingga kamar suite dengan layanan kamar 24 jam. Setiap kamar didesain untuk memberikan kenyamanan bagi tamu kami sebagai standar dari hotel elegan. Cara Menghubungi Le Beringin Hotel Salatiga Jl. Jenderal Sudirman No. 160 Salatiga – Jawa Tengah - Indonesia Telepon. 62-298326129, 62-298327082. Fax. 62-298316688 Email : saleshotelberingin. Website : www.hotelberingin.com 37 Fasilitas Restoran Kami memiliki 2 restoran Restoran Nyonya King Untuk menikmati masakan asli Cina, silakan datang ke Restoran Nyonya King dan nikmati sajian kami Kolam Renang, Bar Restoran Senjoyo Kolam renang dan bar Senjoyo adalah tempat yang tepat untuk bersantai dan bertemu dengan teman, dimana kolam renang, bar restoran melengkapi satu sama lain dalam area yang sama, juga dengan pemandangan alam kota Salatiga : Gunung Merbabu dan Rawa Pening. Event Meeting Kami menawarkan 3 ruangan meeting utama Sriwedari I, II, III yang terletak di dalam gedung, dengan kapasitas keseluruhan 200 orang. Satu ruangan lain yang berkapasitas maksimum 100 orang yang menghadap Gunung Merbabu, dan dilengkapi dengan kursi kulit yang mewah, perlengkapan meeting yang modern, dan area lobby untuk penyegaran. Juga terdapat banyak tempat untuk bekerja dengan partner bisnis 38 Kunci Bisnis 1. Koneksi internet WiFi di seluruh bagian hotel – akses internet cepat 2. Ruangan konferensi modern 3. Parkir gratis dengan kapasitas 250 mobil 4. Lokasi : di jantung kota Salatiga. Di dekat lokasi pertokoan, bank, apotek, pusat penjualan makanan, dan tempat kebutuhan lainnya. Makanan dan Minuman - Masakan hotel berupa makanan panas dan dingin yang tersaji di restoran kami - Menu makan malam yang berubah setiap harinya - Bar makan pagi dan makanan penutup di setiap waktu makan - Pilihan minuman di setiap waktu istirahat - SPA Aromaterapi – Mengharapkan yang terbaik dari kepala hingga ujung kaki SPA didedikasikan untuk memberikan relaksasi atau memulihkan tubuh dan jiwa Anda, dengan ruang terapi untuk massage, facial, manikur, pedikur, dan perawatan khusus. Tradisi kuno dikombinasikan dengan trend masa kini, dan ahli terapis menyediakan konsultasi pribadi. Koneksi Internet Hot-Spot Gratis Akses internet gratis berkecepatan tinggi di seluruh ruangan dan WiFi di area public. Hot-spot gratis dapat ditemukan di berbagai lokadi hotel. Akses terdapat di lobi, tepi kolam renang, ruang duduk, dan restoran. 39 Senjoyo Pool Bar Restaurant Senjoyo Pool Bar Restaurant adalah tempat paling tepat untuk berkumpul dan melepas lelah bersama teman-teman - dimana kolam renang, bar dan restaurant berada disatu tempat - Nikmati suasananya dengan latar belakang pemandangan kota Salatiga : Gunung Merbabu dan Rawa Pening.', 'SALATIGA', 'SIDOREJO', 'Jl. Jenderal Sudirman No 160 Salatiga Jawa Tengah Indonesia', 'https://www.google.com/maps/dir/hotel+le+beringin/Mapan+salatiga+2018,+Jl.+Canden+No.43-53,+Kutowinangun+Kidul,+Kec.+Tingkir,+Kota+Salatiga,+Jawa+Tengah+50742/@-7.3271792,110.5053857,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2e7a78316aa83747:0xad80d5f9c15c08e7!2m2!1d110.5049072!2d-7.3322437!1m5!1m1!1s0x2e7a79742adc4715:0x3667e57617ede326!2m2!1d110.5142198!2d-7.3219197', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 1, 1, 0, '', 'lebringin.jpg', '', 'Hotel', '2022-05-19 15:12:37', '2022-05-19 15:12:37'),
(39, 'D\'Emmerick', 'Hotel D’Emmerick berada di kaki gunung Merbabu yang sejuk, sekitar 4 km dari pusat Kota Salatiga, atau sekitar 700 meter dari jalan lingkar salatiga menuju arah obyek wisata Kopeng. Sebelum menggunakan nama Hotel D’Emmerick, tempat ini menggunakan nama Agrowisata Salatiga Eco Park Hotel – Camping Ground. Meski begitu, tempat ini sebelumnya lebih populer dengan sebutan Agrowisata Salib Putih Salatiga. Lokasinya yang dikelilingi pegunungan dengan pemandangan yang indah serta udara segar menjadikan tempat ini salah satu pilihan untuk refreshing. Memasuki area hotel, jalannya yang menanjak dan menggunakan tatanan batu membuat mobil harus sedikit pelan jika menggunakan sedan. Miniatur kincir angin ala negeri Belanda yang instagramable menyambut tamu di depan hotel. Hotel D’Emmerick Salatiga ini menawarkan konsep perkemahan dengan suasana alam di antara perkebunan desa-desa kawasan Salib Putih yang udaranya segar.', 'KUMPULREJO', 'ARGOMULYO', 'Jl. Hasanudin (Jl. Raya Salatiga - Kopeng) KM. 4 Salatiga, Jawa Tengah, Indonesia', 'https://www.google.com/maps/place/D\'Emmerick+Hotel/@-7.3628241,110.4757871,17z/data=!3m1!4b1!4m8!3m7!1s0x2e7a799efe2a3c73:0x29176c186470997d!5m2!4m1!1i2!8m2!3d-7.3628241!4d110.4779758?hl=id', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 1, 1, 0, '', 'demmerick.jpg', '', 'Hotel', '2022-05-19 15:17:53', '2022-05-19 15:17:53'),
(40, 'D\'Emmerick', 'Hotel D’Emmerick berada di kaki gunung Merbabu yang sejuk, sekitar 4 km dari pusat Kota Salatiga, atau sekitar 700 meter dari jalan lingkar salatiga menuju arah obyek wisata Kopeng. Sebelum menggunakan nama Hotel D’Emmerick, tempat ini menggunakan nama Agrowisata Salatiga Eco Park Hotel – Camping Ground. Meski begitu, tempat ini sebelumnya lebih populer dengan sebutan Agrowisata Salib Putih Salatiga. Lokasinya yang dikelilingi pegunungan dengan pemandangan yang indah serta udara segar menjadikan tempat ini salah satu pilihan untuk refreshing. Memasuki area hotel, jalannya yang menanjak dan menggunakan tatanan batu membuat mobil harus sedikit pelan jika menggunakan sedan. Miniatur kincir angin ala negeri Belanda yang instagramable menyambut tamu di depan hotel. Hotel D’Emmerick Salatiga ini menawarkan konsep perkemahan dengan suasana alam di antara perkebunan desa-desa kawasan Salib Putih yang udaranya segar.', 'KUMPULREJO', 'ARGOMULYO', 'Jl. Hasanudin (Jl. Raya Salatiga - Kopeng) KM. 4 Salatiga, Jawa Tengah, Indonesia', 'https://www.google.com/maps/place/D\'Emmerick+Hotel/@-7.3628241,110.4757871,17z/data=!3m1!4b1!4m8!3m7!1s0x2e7a799efe2a3c73:0x29176c186470997d!5m2!4m1!1i2!8m2!3d-7.3628241!4d110.4779758?hl=id', 0, '4.5', '00:00-12:00', '00:00-12:00', 1, 1, 1, 1, 0, '', 'demmerick.jpg', '', 'Hotel', '2022-05-19 15:19:15', '2022-05-19 15:19:15'),
(41, 'Gedung Papak', 'Merupakan bangunan rumah tinggal bertingkat yang berbentuk simetris dengan penampil di bagian depan. Merupakan bangunan rumah tinggal yang secara jelas memperlihatkan gaya neo klasik/ renaissance. Saat ini difungsikan sebagai Kantor Wali Kota Salatiga.', 'SALATIGA', 'SIDOREJO', 'Letjend. Sukowati  No. 51 Salatiga', 'https://www.google.co.id/maps/place/Kantor+Walikota+Salatiga/@-7.330868,110.4961184,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79e8e43d2211:0x9ab0beda44326248!8m2!3d-7.330868!4d110.5005977', 0, '4.5', '08:00-17:00', '08:00-17:00', 1, 1, 1, 1, 0, '', 'papak1.jpg', '', 'Budaya', '2022-05-19 16:06:10', '2022-05-19 16:06:10');

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
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isSuperAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `isSuperAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amel', 'amel@amel.com', NULL, '$2y$10$KcAek4gtgdw3Oiw12RjuFODxPKl60/KIaTD0mGQFSfWAE6mR5C8T2', 1, 0, NULL, '2022-05-16 06:20:15', '2022-05-16 06:20:15'),
(2, 'Wildam', 'alifwildan15@gmail.com', NULL, '$2y$10$beQZBqpPjG/KcKq7TWsfY..jhJm2oP6HO2dRQHNl65XDogh876oZW', 0, 0, NULL, '2022-05-16 22:20:20', '2022-05-16 22:20:20'),
(3, 'Superadmin', 'superadmin@mail.com', NULL, '$2y$10$S4PQYTgqW9yDvDRXaomwgejaoCEwhZhfeZC32ja/0WRcU38AGLLBC', 0, 0, NULL, '2022-05-16 23:05:41', '2022-05-16 23:05:41');

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
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
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
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasum`
--
ALTER TABLE `fasum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headline`
--
ALTER TABLE `headline`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
