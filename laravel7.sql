-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2021 at 11:32 AM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_04_13_011033_create_permission_tables', 1),
(9, '2021_04_13_011902_schedule_meeting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 4),
(2, 'App\\User', 5),
(3, 'App\\User', 6);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit articles', 'web', '2021-04-12 19:39:30', '2021-04-12 19:39:30'),
(2, 'delete articles', 'web', '2021-04-12 19:39:30', '2021-04-12 19:39:30'),
(3, 'publish articles', 'web', '2021-04-12 19:39:31', '2021-04-12 19:39:31'),
(4, 'unpublish articles', 'web', '2021-04-12 19:39:31', '2021-04-12 19:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'client', 'web', '2021-04-12 19:39:31', '2021-04-12 19:39:31'),
(2, 'admin', 'web', '2021-04-12 19:39:31', '2021-04-12 19:39:31'),
(3, 'super-admin', 'web', '2021-04-12 19:39:31', '2021-04-12 19:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_meeting`
--

CREATE TABLE `schedule_meeting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_instansi` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` enum('online','offline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'online',
  `schedule` datetime NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audient` smallint(6) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Waiting','Approved','Decline','Finished') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_meeting`
--

INSERT INTO `schedule_meeting` (`id`, `type_instansi`, `instansi`, `cp`, `phone`, `category`, `schedule`, `location`, `audient`, `description`, `status`, `created_at`, `updated_at`, `post_by`) VALUES
(1, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-21 13:00:00', NULL, 1, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-12 23:39:10', '2021-04-12 23:39:10', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(2, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-21 13:00:00', NULL, 1, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-12 23:40:11', '2021-04-12 23:40:11', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(3, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'online', '2021-04-21 13:00:00', NULL, 1, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-12 23:42:26', '2021-04-12 23:42:26', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(4, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:05:11', '2021-04-13 18:05:11', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(5, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:30:58', '2021-04-13 18:30:58', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(6, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:31:56', '2021-04-13 18:31:56', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(7, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:33:01', '2021-04-13 18:33:01', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(8, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:33:19', '2021-04-13 18:33:19', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(9, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:33:52', '2021-04-13 18:33:52', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(10, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:34:48', '2021-04-13 18:34:48', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(11, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:36:34', '2021-04-13 18:36:34', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(12, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:36:50', '2021-04-13 18:36:50', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(13, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:40:12', '2021-04-13 18:40:12', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(14, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:40:26', '2021-04-13 18:40:26', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(15, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:40:31', '2021-04-13 18:40:31', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(16, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:40:33', '2021-04-13 18:40:33', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(17, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:42:35', '2021-04-13 18:42:35', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(18, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:42:37', '2021-04-13 18:42:37', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(19, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:42:44', '2021-04-13 18:42:44', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(20, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 18:53:37', '2021-04-13 18:53:37', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(21, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:01:07', '2021-04-13 19:01:07', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(22, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:02:40', '2021-04-13 19:02:40', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(23, 'KEMENTERIAN', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:02:42', '2021-04-13 19:02:42', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(24, 'UNIVERSITAS', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:07:14', '2021-04-13 19:07:14', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(25, 'UNIVERSITAS', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:07:29', '2021-04-13 19:07:29', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(26, 'UNIVERSITAS', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:08:59', '2021-04-13 19:08:59', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(27, 'UNIVERSITAS', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:10:31', '2021-04-13 19:10:31', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(28, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:12:14', '2021-04-13 19:12:14', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(29, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:12:25', '2021-04-13 19:12:25', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(30, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:13:06', '2021-04-13 19:13:06', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(31, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:13:45', '2021-04-13 19:13:45', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(32, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:14:01', '2021-04-13 19:14:01', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(33, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:17:03', '2021-04-13 19:17:03', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(34, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:17:20', '2021-04-13 19:17:20', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(35, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:17:22', '2021-04-13 19:17:22', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(36, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:17:27', '2021-04-13 19:17:27', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(37, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:18:31', '2021-04-13 19:18:31', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(38, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:20:12', '2021-04-13 19:20:12', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(39, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:20:19', '2021-04-13 19:20:19', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(40, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-13 19:20:45', '2021-04-13 19:20:45', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(42, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', 'http://127.0.0.1:8000/adm/meeting-schedule/42/edit', 10, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Approved', '2021-04-13 19:22:36', '2021-04-15 00:45:37', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(43, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Finished', '2021-04-13 19:22:44', '2021-04-13 19:22:44', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(44, 'PEMERINTAH DAERAH', 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-14 00:00:00', NULL, 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Approved', '2021-04-13 19:23:31', '2021-04-13 19:23:31', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(45, NULL, 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'online', '2021-04-19 13:00:00', 'Via Enygma Video Conference', 20, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-18 19:00:57', '2021-04-18 19:00:57', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(46, NULL, 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-20 13:00:00', NULL, 1, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-18 19:02:55', '2021-04-18 19:02:55', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(47, NULL, 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'offline', '2021-04-20 13:00:00', NULL, 1, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-18 19:06:02', '2021-04-18 19:06:02', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(48, NULL, 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'online', '2021-04-19 13:00:00', 'Via Enygma Video Conference', 4, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-18 19:31:07', '2021-04-18 19:31:07', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(49, NULL, 'Dinas Pendidikan', 'Ferry Fernando', '0816554176', 'online', '2021-04-19 13:00:00', 'Via Enygma Video Conference', 4, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-18 19:41:25', '2021-04-18 19:41:25', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(50, NULL, 'Badan Pusat Statistik Kota Malang', 'Dewa Sangkara', '0816554176', 'online', '2021-04-21 13:00:00', 'Via Enygma Video Conference', 2, 'Jl. Janti Barat No. 47 Malang 65148 Indonesia, Telp (0341) 801164, Faks (0341) 805871, Mailbox : bps3573@bps.go.id', 'Waiting', '2021-04-18 19:52:55', '2021-04-18 19:52:55', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(51, NULL, 'Badan Pusat Statistik Kota Malang', 'Dewa Sangkara', '0816554176', 'online', '2021-04-30 13:00:00', 'Via Enygma Video Conference', 1, 'a', 'Waiting', '2021-04-18 19:55:55', '2021-04-18 19:55:55', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(52, NULL, 'Badan Pusat Statistik Kota Malang', 'Ferry Fernando', '0816554176', 'online', '2021-04-30 13:00:00', 'Via Enygma Video Conference', 1, '1', 'Waiting', '2021-04-18 19:58:23', '2021-04-18 19:58:23', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0'),
(53, 'KEMENTERIAN', 'Badan Pusat Statistik Kota Malang', 'Dewa Sangkara', '0816554176', 'online', '2022-03-20 13:00:00', 'Via Enygma Video Conference', 1, 'Ruang Meeting 424 Dinas Pendidikan Kota Malang\r\nJl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Waiting', '2021-04-18 19:59:13', '2021-04-18 19:59:13', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `status` enum('Active','Non Active','Pending','Blacklist') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `phone`, `password`, `remember_token`, `level`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '#nndproject', NULL, 'dashboard@gmail.com', NULL, NULL, '$2y$10$fNuV.7d/ouElxbMlqgl.NuRXwGtdw3SBm90wIA7KGvCC6l0K8sFTy', NULL, 'Admin', 'Pending', '2021-04-12 18:51:01', '2021-04-12 18:51:01', NULL),
(4, '#nndproject User', NULL, 'test@gmail.com', NULL, NULL, '$2y$10$Nqe1LecF.LLBiL04tofgWegf26416S1bPCYPEqCAGRX7QTVqR.E9e', NULL, 'User', 'Active', '2021-04-12 19:44:46', '2021-04-12 19:44:46', NULL),
(5, 'Administrator', NULL, 'admin@gmail.com', NULL, NULL, '$2y$10$s1q2uFGeWi/goDcPx833hO1GT8cFJLFjEY8HvwZy0HxePXBZbRKgi', NULL, 'Admin', 'Active', '2021-04-12 19:44:46', '2021-04-18 20:30:55', NULL),
(6, '#nndproject Super-Admin User', NULL, 'superadmin@gmail.com', NULL, NULL, '$2y$10$ZMZ3MA4i5MA3bBbkqJFbLuI/MePq1nLij1erEG1BqM3nO9K0aWWSa', NULL, 'Super Admin', 'Active', '2021-04-12 19:44:46', '2021-04-12 19:44:46', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `schedule_meeting`
--
ALTER TABLE `schedule_meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule_meeting`
--
ALTER TABLE `schedule_meeting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
