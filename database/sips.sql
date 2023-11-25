-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2023 at 11:31 AM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1577750_sips`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `nama_lengkap`, `alamat`, `no_hp`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Aprilia M. Hunta', 'Marisa', '82292055082', 'p', '2023-11-19 14:00:14', '2023-11-19 14:00:14'),
(2, 'Sahrul Gobel', 'Limboto', '81242642469', 'l', '2023-11-19 14:00:14', '2023-11-19 14:00:14'),
(3, 'Salman Mustapa', 'Dusun 1', '082154488769', 'l', '2023-11-20 14:41:00', '2023-11-20 14:41:00'),
(7, 'Arman Pakaya', 'Dusun 1', '082154488769', 'l', '2023-11-20 20:17:42', '2023-11-20 20:17:42'),
(8, 'Marten Haras', 'Dusun 1', '-', 'l', '2023-11-20 20:20:57', '2023-11-20 20:20:57'),
(9, 'Rizki Mantu', '-', '-', 'l', '2023-11-20 20:21:17', '2023-11-20 20:21:17'),
(10, 'Joni Yunus', '-', '-', 'l', '2023-11-20 20:21:34', '2023-11-20 20:21:34'),
(11, 'Roy Haras', '-', '-', 'l', '2023-11-20 20:21:55', '2023-11-20 20:21:55'),
(12, 'Frangky S. Tomayahu', '-', '-', 'l', '2023-11-20 20:22:20', '2023-11-20 20:22:20'),
(13, 'Sopyan Musa', '-', '-', 'l', '2023-11-20 20:22:46', '2023-11-20 20:22:46'),
(14, 'Iswan Pakaya', '-', '-', 'l', '2023-11-20 20:25:22', '2023-11-20 20:25:22'),
(15, 'Arifin Mustapa', '-', '-', 'l', '2023-11-20 20:25:40', '2023-11-20 20:25:40'),
(16, 'Umar Subuhi', '-', '-', 'l', '2023-11-20 20:25:59', '2023-11-20 20:25:59'),
(17, 'Lukman Daud', '-', '-', 'l', '2023-11-20 20:26:14', '2023-11-20 20:26:14'),
(18, 'Saleh Ismail', '-', '-', 'l', '2023-11-20 20:26:31', '2023-11-20 20:26:31'),
(19, 'Uten Lamusi', '-', '-', 'l', '2023-11-20 20:26:49', '2023-11-20 20:26:49'),
(20, 'Ungke Ismail', '-', '-', 'l', '2023-11-20 20:27:02', '2023-11-20 20:27:02'),
(21, 'Ismail Hasan', '-', '-', 'l', '2023-11-20 20:27:18', '2023-11-20 20:27:18'),
(23, 'Iste nihil quibusdam', 'Minus aliquid laudan', 'Voluptatem impedit', 'p', '2023-11-23 09:56:43', '2023-11-23 09:56:43'),
(24, 'Sint in nemo sed ip', 'Provident elit exe', 'Possimus cillum qui', 'p', '2023-11-23 09:57:42', '2023-11-23 09:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `nama_desa`, `created_at`, `updated_at`) VALUES
(5, 'Marisa Utara', '2023-11-20 02:41:19', '2023-11-20 02:41:19'),
(6, 'Teratai', '2023-11-20 02:41:46', '2023-11-20 02:41:46'),
(7, 'Pohuwato Timur', '2023-11-20 02:41:54', '2023-11-20 02:41:54'),
(8, 'Bulangita', '2023-11-20 02:42:01', '2023-11-20 02:42:01'),
(9, 'Palopo', '2023-11-20 02:42:08', '2023-11-20 02:42:08'),
(10, 'Pohuwato', '2023-11-20 02:42:14', '2023-11-20 02:42:14'),
(11, 'Botubilotahu', '2023-11-20 02:42:20', '2023-11-20 02:42:20'),
(12, 'Marisa Selatan', '2023-11-20 02:42:27', '2023-11-20 02:42:27'),
(13, 'Duhiadaa', '2023-11-20 17:59:58', '2023-11-20 17:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jalurs`
--

CREATE TABLE `jalurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kenderaan_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jalurs`
--

INSERT INTO `jalurs` (`id`, `kenderaan_id`, `lokasi_id`, `hari`, `created_at`, `updated_at`) VALUES
(14, 2, 2, 'Senin', '2023-11-23 03:45:31', '2023-11-23 03:45:31'),
(15, 2, 3, 'Senin', '2023-11-23 03:45:31', '2023-11-23 03:45:31'),
(16, 2, 4, 'Senin', '2023-11-23 03:45:31', '2023-11-23 03:45:31'),
(17, 2, 5, 'Senin', '2023-11-23 03:45:31', '2023-11-23 03:45:31'),
(18, 2, 2, 'Rabu', '2023-11-23 03:45:47', '2023-11-23 03:45:47'),
(19, 2, 3, 'Rabu', '2023-11-23 03:45:47', '2023-11-23 03:45:47'),
(20, 2, 4, 'Rabu', '2023-11-23 03:45:47', '2023-11-23 03:45:47'),
(21, 2, 5, 'Rabu', '2023-11-23 03:45:47', '2023-11-23 03:45:47'),
(22, 2, 2, 'Sabtu', '2023-11-23 03:46:00', '2023-11-23 03:46:00'),
(23, 2, 3, 'Sabtu', '2023-11-23 03:46:00', '2023-11-23 03:46:00'),
(24, 2, 4, 'Sabtu', '2023-11-23 03:46:00', '2023-11-23 03:46:00'),
(25, 2, 5, 'Sabtu', '2023-11-23 03:46:00', '2023-11-23 03:46:00'),
(26, 2, 6, 'Selasa', '2023-11-23 03:46:34', '2023-11-23 03:46:34'),
(27, 2, 7, 'Selasa', '2023-11-23 03:46:34', '2023-11-23 03:46:34'),
(28, 2, 6, 'Kamis', '2023-11-23 03:46:48', '2023-11-23 03:46:48'),
(29, 2, 7, 'Kamis', '2023-11-23 03:46:48', '2023-11-23 03:46:48'),
(30, 3, 15, 'Senin', '2023-11-23 22:46:14', '2023-11-23 22:46:14'),
(31, 3, 16, 'Senin', '2023-11-23 22:46:14', '2023-11-23 22:46:14'),
(32, 3, 17, 'Senin', '2023-11-23 22:46:14', '2023-11-23 22:46:14'),
(33, 3, 18, 'Senin', '2023-11-23 22:46:14', '2023-11-23 22:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kenderaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis_kenderaan`, `created_at`, `updated_at`) VALUES
(2, 'Dumtruck', '2023-11-20 01:31:45', '2023-11-20 01:34:05'),
(4, 'Pickup', '2023-11-20 01:35:07', '2023-11-20 01:35:07'),
(5, 'Viar', '2023-11-20 01:35:12', '2023-11-20 01:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_sampah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori_sampah`, `created_at`, `updated_at`) VALUES
(2, 'Organik', '2023-11-20 02:29:45', '2023-11-20 02:29:45'),
(3, 'Non Organik', '2023-11-20 02:29:54', '2023-11-20 02:29:54'),
(4, 'Sampah Bahan Berbahaya dan Beracun (B3)', '2023-11-20 02:30:46', '2023-11-20 02:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `kenderaans`
--

CREATE TABLE `kenderaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kenderaan` varchar(255) NOT NULL,
  `nama_kenderaan` varchar(255) NOT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_polisi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenderaans`
--

INSERT INTO `kenderaans` (`id`, `kode_kenderaan`, `nama_kenderaan`, `jenis_id`, `nomor_polisi`, `created_at`, `updated_at`) VALUES
(2, '#K-0656', 'Mobil Dumptruck', 2, 'DM 8502 D', '2023-11-20 17:51:26', '2023-11-20 17:51:26'),
(3, '#K-7B9C', 'Mobil Dumptruck', 2, 'DM 8041 A', '2023-11-20 17:51:49', '2023-11-20 17:53:02'),
(4, '#K-E16B', 'Mobil Dumptruck', 2, 'DM 8043 D', '2023-11-20 17:52:04', '2023-11-20 17:52:13'),
(5, '#K-6FA5', 'Mobil Dumptruck Kuning', 2, 'DM 8503', '2023-11-20 17:52:55', '2023-11-20 17:52:55'),
(6, '#K-D92F', 'Mobil Pickup', 4, 'DM 8509 DB', '2023-11-20 17:53:19', '2023-11-20 17:53:19'),
(7, '#K-71B9', 'Mobil Pickup', 4, 'DM 8538 DB', '2023-11-20 17:53:41', '2023-11-20 17:53:41'),
(8, '#K-31CB', 'Mobil Armroll', 4, 'DM 8508 DB', '2023-11-20 17:54:16', '2023-11-20 17:54:16'),
(9, '#K-5616', 'Mobil Armroll', 4, 'DM 8044 D', '2023-11-20 17:54:39', '2023-11-20 17:54:39'),
(10, '#K-1F85', 'Viar', 5, 'DM 4821 IQ', '2023-11-20 17:54:59', '2023-11-20 17:54:59'),
(11, '#K-1B12', 'Viar', 5, 'DM 4822 IQ', '2023-11-20 17:55:20', '2023-11-20 17:55:20'),
(12, '#K-27BD', 'Viar', 5, 'DM 6998 DC', '2023-11-20 17:55:48', '2023-11-20 17:55:48'),
(13, '#K-FC61', 'Viar', 5, 'DM 6989 D', '2023-11-20 17:56:15', '2023-11-20 17:56:15'),
(14, '#K-C9B6', 'Viar', 5, 'DM 5617 D', '2023-11-20 17:56:30', '2023-11-20 17:56:30'),
(15, '#K-3918', 'Viar', 5, 'DM 5616 D', '2023-11-20 17:56:43', '2023-11-20 17:56:43'),
(16, '#K-FCE2', 'Viar', 5, 'DM 6901 DF', '2023-11-20 17:57:00', '2023-11-20 17:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `desa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama_lokasi`, `desa_id`, `created_at`, `updated_at`) VALUES
(2, 'Jl. Trans, Perempatan Telkom', 6, '2023-11-20 15:27:07', '2023-11-20 15:27:43'),
(3, 'Pertigaan SMK sebelah Toko', 6, '2023-11-20 15:27:27', '2023-11-20 15:27:36'),
(4, 'Pertigaan Smk Jl Teratai', 6, '2023-11-20 15:28:09', '2023-11-20 15:28:09'),
(5, 'Pertigaan Toko Milda', 6, '2023-11-20 15:28:24', '2023-11-20 15:28:24'),
(6, 'DPD 2 Golkar', 5, '2023-11-20 15:28:53', '2023-11-20 15:28:53'),
(7, 'Pertigaan RSBP, Terminal Marisa Perempatan Gapura Desa', 5, '2023-11-20 15:29:09', '2023-11-20 15:29:30'),
(8, 'Perum Griya Marisa Indah', 5, '2023-11-20 17:58:12', '2023-11-20 17:58:12'),
(9, 'Lorong Sahara', 5, '2023-11-20 17:58:20', '2023-11-20 17:58:20'),
(10, 'Perum Griya An-nur', 5, '2023-11-20 17:58:29', '2023-11-20 17:58:29'),
(11, 'Perum Ruzali Hunowu', 5, '2023-11-20 17:58:48', '2023-11-20 17:58:48'),
(12, 'Perum Mega Merona', 5, '2023-11-20 17:59:00', '2023-11-20 17:59:00'),
(13, 'Perum Kantor Camat Marisa', 5, '2023-11-20 17:59:13', '2023-11-20 17:59:13'),
(14, 'Kost kost an kompleks kantor Camat Marisa', 12, '2023-11-20 17:59:25', '2023-11-20 17:59:25'),
(15, 'Pertigaan SMK Duhiadaa', 13, '2023-11-20 18:00:08', '2023-11-20 18:00:08'),
(16, 'Jln Duhiadaa dari Perempatan Duhiadaa', 13, '2023-11-20 18:00:28', '2023-11-20 18:00:28'),
(17, 'Gapura Desa Botubilotahu', 11, '2023-11-20 18:01:05', '2023-11-20 18:01:05'),
(18, 'Toko Mopio', 11, '2023-11-20 18:01:18', '2023-11-20 18:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_11_19_000000_create_roles_table', 1),
(5, '2023_11_19_000001_create_biodatas_table', 1),
(6, '2023_11_19_000002_create_users_table', 1),
(7, '2023_11_19_224708_create_desas_table', 1),
(8, '2023_11_19_224806_create_pengelolas_table', 1),
(9, '2023_11_19_224844_create_tarifs_table', 1),
(10, '2023_11_19_224845_create_lokasis_table', 1),
(11, '2023_11_19_224846_create_pelanggans_table', 1),
(12, '2023_11_19_230005_create_jenis_table', 1),
(13, '2023_11_19_230509_create_kenderaans_table', 1),
(14, '2023_11_19_230819_create_sopirs_table', 1),
(15, '2023_11_20_054658_create_kategoris_table', 1),
(16, '2023_11_20_060333_create_jalurs_table', 1),
(17, '2023_11_23_101952_create_pembayarans_table', 1),
(18, '2023_11_23_104320_create_timbangans_table', 1),
(19, '2023_11_23_104414_create_sampahs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tarif_id` bigint(20) UNSIGNED NOT NULL,
  `no_register` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `lokasi_id`, `user_id`, `tarif_id`, `no_register`, `created_at`, `updated_at`) VALUES
(2, 10, 23, 8, '#L10P02B3', '2023-11-23 09:56:43', '2023-11-23 09:56:43'),
(3, 5, 24, 2, '#L5P4966', '2023-11-23 09:57:42', '2023-11-23 09:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_bayar` varchar(255) NOT NULL,
  `status_bayar` enum('lunas','pending') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengelolas`
--

CREATE TABLE `pengelolas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desa_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','disabled') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelolas`
--

INSERT INTO `pengelolas` (`id`, `desa_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'active', '2023-11-20 06:04:59', '2023-11-20 06:04:59'),
(2, 6, 3, 'disabled', '2023-11-20 14:41:00', '2023-11-23 09:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `level`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'P3B3K', '2023-11-19 14:00:14', '2023-11-19 14:00:14'),
(2, 'pengelola', 'Admin Desa', '2023-11-19 14:00:14', '2023-11-19 14:00:14'),
(3, 'sopir', 'Petugas Pengangkut', '2023-11-19 14:00:14', '2023-11-19 14:00:14'),
(4, 'pengguna', 'Pelanggan', '2023-11-19 14:00:14', '2023-11-19 14:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `sampahs`
--

CREATE TABLE `sampahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `nama_sampah` varchar(255) NOT NULL,
  `jumlah_sampah` int(11) NOT NULL,
  `tanggal_lapor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sampahs`
--

INSERT INTO `sampahs` (`id`, `kategori_id`, `nama_sampah`, `jumlah_sampah`, `tanggal_lapor`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kertas UBah', 123, '2023-11-24', '2023-11-24 09:37:09', '2023-11-24 09:41:45'),
(3, 2, 'Plastik', 20, '2023-11-17', '2023-11-24 12:38:05', '2023-11-24 12:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `sopirs`
--

CREATE TABLE `sopirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kenderaan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sopirs`
--

INSERT INTO `sopirs` (`id`, `user_id`, `kenderaan_id`, `created_at`, `updated_at`) VALUES
(3, 7, 2, '2023-11-20 20:17:42', '2023-11-20 20:17:42'),
(4, 8, 3, '2023-11-20 20:20:57', '2023-11-20 20:20:57'),
(5, 9, 4, '2023-11-20 20:21:17', '2023-11-20 20:21:17'),
(6, 10, 5, '2023-11-20 20:21:34', '2023-11-20 20:21:34'),
(7, 11, 6, '2023-11-20 20:21:56', '2023-11-20 20:21:56'),
(8, 12, 7, '2023-11-20 20:22:20', '2023-11-20 20:22:20'),
(9, 13, 8, '2023-11-20 20:22:46', '2023-11-20 20:22:46'),
(10, 14, 9, '2023-11-20 20:25:22', '2023-11-20 20:25:22'),
(11, 15, 10, '2023-11-20 20:25:40', '2023-11-20 20:25:40'),
(12, 16, 11, '2023-11-20 20:25:59', '2023-11-20 20:25:59'),
(13, 17, 12, '2023-11-20 20:26:14', '2023-11-20 20:26:14'),
(14, 18, 13, '2023-11-20 20:26:31', '2023-11-20 20:26:31'),
(15, 19, 14, '2023-11-20 20:26:49', '2023-11-20 20:26:49'),
(16, 20, 15, '2023-11-20 20:27:02', '2023-11-20 20:27:02'),
(17, 21, 16, '2023-11-20 20:27:18', '2023-11-20 20:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `tarifs`
--

CREATE TABLE `tarifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber_sampah` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tarifs`
--

INSERT INTO `tarifs` (`id`, `sumber_sampah`, `biaya`, `created_at`, `updated_at`) VALUES
(2, 'Sampah Rumah Tangga', '5000', '2023-11-20 04:36:33', '2023-11-20 04:36:33'),
(4, 'Hotel', '15000', '2023-11-20 04:37:05', '2023-11-20 04:37:05'),
(5, 'Penginapan', '10000', '2023-11-20 04:37:14', '2023-11-20 04:37:14'),
(6, 'Rumah Kos', '15000', '2023-11-20 04:37:26', '2023-11-20 04:37:26'),
(7, 'Toko', '5000', '2023-11-20 04:37:45', '2023-11-20 04:37:45'),
(8, 'Kios', '2500', '2023-11-20 04:37:53', '2023-11-20 04:37:53'),
(9, 'Rumah Makan', '15000', '2023-11-20 04:38:04', '2023-11-20 04:38:04'),
(10, 'Warung / Kedai', '2500', '2023-11-20 04:38:15', '2023-11-20 04:38:15'),
(11, 'Sampah Perkantoran', '5000', '2023-11-20 04:38:27', '2023-11-20 04:38:27'),
(12, 'Bengkel', '5000', '2023-11-20 04:38:35', '2023-11-20 04:38:35'),
(13, 'Pasar Swalayan, Super Market, dan Sejenisnya', '25000', '2023-11-20 04:38:54', '2023-11-20 04:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `timbangans`
--

CREATE TABLE `timbangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kenderaan_id` bigint(20) UNSIGNED NOT NULL,
  `berat_sampah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `biodata_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `biodata_id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'p3b3k', 'p3b3k@gmail.com', '$2y$10$Ij8svAmlrAwSZQ3gPk53UekUYusOtfPqttr6H6v3i/u1.0bH4chiS', '2023-11-19 14:00:15', '2023-11-19 14:00:15'),
(2, 2, 2, 'desa', 'desa@gmail.com', '$2y$10$3GSediAJCENhHlRHv/Zxiu6E/2KC9lGC5a680fKTmqoum024MicPy', '2023-11-19 14:00:15', '2023-11-19 14:00:15'),
(3, 2, 3, 'mances', NULL, '$2y$10$9ISf7RU2MgVad9IJ6CEzDOtRmtevlswZX7RWLLqZxl5KLkoGmPl8C', '2023-11-20 14:41:00', '2023-11-20 14:41:00'),
(7, 3, 7, 'arman', NULL, '$2y$10$cyK2cQqkzv0b4qJ8Zbf6vOs/4YVBId1xEA6h1qJ9lXm77D1eRAHcC', '2023-11-20 20:17:42', '2023-11-21 18:46:57'),
(8, 3, 8, 'marten', NULL, '$2y$10$4qY6b83xdQfNH0.UZdvIs.DDxe.mIURbR5amAEvxvvfsoS4SQq8Ie', '2023-11-20 20:20:57', '2023-11-21 18:47:01'),
(9, 3, 9, 'rizki', NULL, '$2y$10$ByF7fz54r/ELOvEx.jPqhuxg1/n9WC9BY9RrEJR3KipPOyIduen6C', '2023-11-20 20:21:17', '2023-11-21 18:47:05'),
(10, 3, 10, 'joni', NULL, '$2y$10$67Gz1mNFuH/ykLMa43lO0u1jMNodE3tLd79uItZjcwIWV3j37GSZu', '2023-11-20 20:21:34', '2023-11-21 18:47:09'),
(11, 3, 11, 'roy', NULL, '$2y$10$AaQ18.rX1kYOlbag9avxTON8BnloK75u/ahid9lgULctb0dBVqEFa', '2023-11-20 20:21:56', '2023-11-21 18:47:13'),
(12, 3, 12, 'frangky', NULL, '$2y$10$6m8t7UB5SMXV5CCUFriD7OABqE4crl37P3uAYpulowsr4XhTIXxSK', '2023-11-20 20:22:20', '2023-11-21 18:47:17'),
(13, 3, 13, 'sopyan', NULL, '$2y$10$3ToiRe02Wn4OlDvSk71GWOPfPapI4saMLhIy5umt2fDGUI22m6lR6', '2023-11-20 20:22:46', '2023-11-21 18:47:22'),
(14, 3, 14, 'iswan', NULL, '$2y$10$lB97CcY.f5lLO.RbgDDIj.iOkQoEj9CIMgvB.TznGZbjm3Wliy2UW', '2023-11-20 20:25:22', '2023-11-21 18:47:28'),
(15, 3, 15, 'arifin', NULL, '$2y$10$sJvyoBxLoGYNl3J0alh1EeRndfGcdUJNkBrQCvl3OPtbRIQOjUaue', '2023-11-20 20:25:40', '2023-11-21 18:47:32'),
(16, 3, 16, 'umar', NULL, '$2y$10$YdlwU.OXlcdx7NyzwXxGa.MJg1Fvo6a.n8JsIi0GpGRbDtY6zP7Oy', '2023-11-20 20:25:59', '2023-11-21 18:47:36'),
(17, 3, 17, 'lukman', NULL, '$2y$10$YzWJXuVTCymaCUl7pUV/ve3ZDOd0UziMftaX.b0KZR0rmTbOTfydW', '2023-11-20 20:26:14', '2023-11-21 18:47:42'),
(18, 3, 18, 'saleh', NULL, '$2y$10$iuk4x96zPDTa6RMgn3ztv.i3Z30m8PCZF/JHic7PUva/vNkw5QLk2', '2023-11-20 20:26:31', '2023-11-21 18:47:47'),
(19, 3, 19, 'uten', NULL, '$2y$10$5BydwASAPRZY7/qsnKgBB.2B/zU.KkpCE1P4VXUxYOsg6sQgLD83S', '2023-11-20 20:26:49', '2023-11-21 18:47:54'),
(20, 3, 20, 'ungke', NULL, '$2y$10$gVgNXyqLBdXjixnxFZxVbOPvEGeuVDEgDk2e1sebdz.uGlPzi9n2S', '2023-11-20 20:27:02', '2023-11-21 18:47:59'),
(21, 3, 21, 'ismail', NULL, '$2y$10$a88c3vFRs68cjP8ZDXrvBO5crtf0IuQETj/JwotpireaW5YkAOS72', '2023-11-20 20:27:18', '2023-11-21 18:48:04'),
(23, 4, 23, 'maman', NULL, '$2y$10$h.89.aB1OzGHGct7pDcfSuzgVrnJVb3it3XtTneAFOhcwUKv1.rGC', '2023-11-23 09:56:43', '2023-11-23 09:56:43'),
(24, 4, 24, 'test', NULL, '$2y$10$HJrzpDhf8kf9vAyo0W9Hq.ifEVL9JtpKUaSdDnxnptPwJdAildI8a', '2023-11-23 09:57:42', '2023-11-23 09:57:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jalurs`
--
ALTER TABLE `jalurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jalurs_kenderaan_id_foreign` (`kenderaan_id`),
  ADD KEY `jalurs_lokasi_id_foreign` (`lokasi_id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenderaans`
--
ALTER TABLE `kenderaans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kenderaans_kode_kenderaan_unique` (`kode_kenderaan`),
  ADD UNIQUE KEY `kenderaans_nomor_polisi_unique` (`nomor_polisi`),
  ADD KEY `kenderaans_jenis_id_foreign` (`jenis_id`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lokasis_desa_id_foreign` (`desa_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_no_register_unique` (`no_register`),
  ADD KEY `pelanggans_lokasi_id_foreign` (`lokasi_id`),
  ADD KEY `pelanggans_user_id_foreign` (`user_id`),
  ADD KEY `pelanggans_tarif_id_foreign` (`tarif_id`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayarans_pelanggan_id_foreign` (`pelanggan_id`);

--
-- Indexes for table `pengelolas`
--
ALTER TABLE `pengelolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengelolas_desa_id_foreign` (`desa_id`),
  ADD KEY `pengelolas_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampahs`
--
ALTER TABLE `sampahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sampahs_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `sopirs`
--
ALTER TABLE `sopirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sopirs_user_id_foreign` (`user_id`),
  ADD KEY `sopirs_kenderaan_id_foreign` (`kenderaan_id`);

--
-- Indexes for table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timbangans`
--
ALTER TABLE `timbangans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timbangans_kenderaan_id_foreign` (`kenderaan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_biodata_id_foreign` (`biodata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jalurs`
--
ALTER TABLE `jalurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kenderaans`
--
ALTER TABLE `kenderaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengelolas`
--
ALTER TABLE `pengelolas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sampahs`
--
ALTER TABLE `sampahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sopirs`
--
ALTER TABLE `sopirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `timbangans`
--
ALTER TABLE `timbangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jalurs`
--
ALTER TABLE `jalurs`
  ADD CONSTRAINT `jalurs_kenderaan_id_foreign` FOREIGN KEY (`kenderaan_id`) REFERENCES `kenderaans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jalurs_lokasi_id_foreign` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasis` (`id`);

--
-- Constraints for table `kenderaans`
--
ALTER TABLE `kenderaans`
  ADD CONSTRAINT `kenderaans_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`);

--
-- Constraints for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD CONSTRAINT `lokasis_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD CONSTRAINT `pelanggans_lokasi_id_foreign` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pelanggans_tarif_id_foreign` FOREIGN KEY (`tarif_id`) REFERENCES `tarifs` (`id`),
  ADD CONSTRAINT `pelanggans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengelolas`
--
ALTER TABLE `pengelolas`
  ADD CONSTRAINT `pengelolas_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengelolas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sampahs`
--
ALTER TABLE `sampahs`
  ADD CONSTRAINT `sampahs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `sopirs`
--
ALTER TABLE `sopirs`
  ADD CONSTRAINT `sopirs_kenderaan_id_foreign` FOREIGN KEY (`kenderaan_id`) REFERENCES `kenderaans` (`id`),
  ADD CONSTRAINT `sopirs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `timbangans`
--
ALTER TABLE `timbangans`
  ADD CONSTRAINT `timbangans_kenderaan_id_foreign` FOREIGN KEY (`kenderaan_id`) REFERENCES `kenderaans` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_biodata_id_foreign` FOREIGN KEY (`biodata_id`) REFERENCES `biodatas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
