-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan_terpadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `hukum`
--

CREATE TABLE `hukum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Permohonan Izin Magang dan Penelitian','Surat Tidak Pernah Dipidana Sebagai Terpidana','Surat Tidak Sedang Dicabut Hak Pilih','Surat Sedang Tidak Dinyatakan Pailit','Surat Tidak Memiliki Tanggungan Hutang') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hukum`
--

INSERT INTO `hukum` (`id`, `jenis`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Permohonan Izin Magang dan Penelitian', 'https://eraterang.badilum.mahkamahagung.go.id/', '2022-10-16 10:18:56', '2022-10-16 10:18:56'),
(2, 'Surat Tidak Pernah Dipidana Sebagai Terpidana', 'https://eraterang.badilum.mahkamahagung.go.id/', '2022-10-16 10:19:02', '2022-10-16 10:19:02'),
(3, 'Surat Tidak Sedang Dicabut Hak Pilih', 'https://eraterang.badilum.mahkamahagung.go.id/', '2022-10-16 10:19:29', '2022-10-16 10:19:29'),
(4, 'Surat Sedang Tidak Dinyatakan Pailit', 'https://eraterang.badilum.mahkamahagung.go.id/', '2022-10-16 10:19:35', '2022-10-16 10:19:35'),
(5, 'Surat Tidak Memiliki Tanggungan Hutang', 'https://eraterang.badilum.mahkamahagung.go.id/', '2022-10-16 10:19:40', '2022-10-16 10:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_pengaduan`
--

CREATE TABLE `informasi_pengaduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Informasi Administrasi Layanan','Informasi Humas','Pengaduan Melalui Sikomo Dua','Pengaduan Melalui Siwas','Pengaduan Gratifikasi','Pengaduan Terkait Layanan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi_pengaduan`
--

INSERT INTO `informasi_pengaduan` (`id`, `jenis`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Informasi Administrasi Layanan', 'https://wa.me/628116884646', '2022-10-16 21:48:53', '2022-10-16 21:48:53'),
(2, 'Informasi Humas', 'http://humas.pn-langsa.go.id/', '2022-10-16 21:49:10', '2022-10-16 21:49:10'),
(3, 'Pengaduan Melalui Sikomo Dua', 'https://wa.me/628116884646', '2022-10-16 21:49:39', '2022-10-16 21:49:39'),
(4, 'Pengaduan Melalui Siwas', 'https://siwas.mahkamahagung.go.id/', '2022-10-16 21:49:53', '2022-10-16 21:49:53'),
(5, 'Pengaduan Gratifikasi', 'https://gol.kpk.go.id/login/', '2022-10-16 21:50:04', '2022-10-16 21:50:04'),
(7, 'Pengaduan Terkait Layanan', 'https://www.lapor.go.id/', '2022-10-16 21:50:50', '2022-10-16 21:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `kaum_renta`
--

CREATE TABLE `kaum_renta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kaum_renta`
--

INSERT INTO `kaum_renta` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://forms.gle/gGSwqDvo3fyKcd3i7', '2022-10-16 23:07:14', '2022-10-16 23:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Buku Tamu','Umum','Pidana','Perdata','Hukum','Informasi dan Pengaduan','E-Posbakum','Layanan Kaum Renta / Disabilitas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `jenis`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Buku Tamu', 'https://forms.gle/XyaEZHivHMJyMHPKA', '2022-10-16 22:31:06', '2022-10-16 22:31:06');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_29_060913_create_layanan_table', 1),
(6, '2022_09_30_130219_create_umum_table', 1),
(7, '2022_09_30_130635_create_pidana_table', 1),
(8, '2022_09_30_130950_create_hukum_table', 1),
(9, '2022_09_30_131107_create_kaum_renta_table', 1),
(10, '2022_09_30_131121_create_informasi_table', 1),
(11, '2022_09_30_132449_create_buku_tamu_table', 1),
(12, '2022_10_03_104938_create_perdata_table', 1),
(13, '2022_10_09_173956_create_posbakum_table', 2);

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
-- Table structure for table `perdata`
--

CREATE TABLE `perdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Pendaftaran Gugatan, Bantahan, Gugatan Sederhana, Permohonan Secara Online','Pendaftaran Upaya Hukum Banding Secara Online') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perdata`
--

INSERT INTO `perdata` (`id`, `jenis`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Pendaftaran Gugatan, Bantahan, Gugatan Sederhana, Permohonan Secara Online', 'https://ecourt.mahkamahagung.go.id/login', '2022-10-16 10:11:47', '2022-10-16 10:11:47'),
(2, 'Pendaftaran Upaya Hukum Banding Secara Online', 'https://ecourt.mahkamahagung.go.id/login', '2022-10-16 23:01:07', '2022-10-16 23:01:07');

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
-- Table structure for table `pidana`
--

CREATE TABLE `pidana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Cek Denda Tilang','Izin Penggeledahan & Penyitaan','Pelimpahan Berkas','Perpanjangan Penahanan','Izin Besuk Tahanan & Pinjam Pakai Barang Bukti') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pidana`
--

INSERT INTO `pidana` (`id`, `jenis`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Cek Denda Tilang', 'http://tilang.pn-langsa.go.id/', '2022-10-16 09:48:16', '2022-10-16 09:48:16'),
(2, 'Izin Penggeledahan & Penyitaan', 'https://eberpadu.mahkamahagung.go.id/#layanan', '2022-10-16 09:50:22', '2022-10-16 09:50:22'),
(3, 'Pelimpahan Berkas', 'https://eberpadu.mahkamahagung.go.id/#layanan', '2022-10-16 09:50:31', '2022-10-16 09:50:31'),
(4, 'Perpanjangan Penahanan', 'https://eberpadu.mahkamahagung.go.id/#layanan', '2022-10-16 09:50:41', '2022-10-16 09:50:41'),
(5, 'Izin Besuk Tahanan & Pinjam Pakai Barang Bukti', 'https://eberpadu.mahkamahagung.go.id/#layanan', '2022-10-16 09:51:49', '2022-10-16 09:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `posbakum`
--

CREATE TABLE `posbakum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Telepon','Sms','Whatsapp','Facebook','Instagram','Email','Disabilitas / Kaum Renta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posbakum`
--

INSERT INTO `posbakum` (`id`, `jenis`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Telepon', '82369381083', '2022-10-16 21:54:09', '2022-10-16 21:54:09'),
(3, 'Sms', '82369381083', '2022-10-16 21:54:21', '2022-10-16 21:54:21'),
(4, 'Whatsapp', 'https://wa.me/6282369381083', '2022-10-16 21:55:02', '2022-10-16 21:55:02'),
(5, 'Facebook', 'https://www.facebook.com/lembaga.b.hukum.96', '2022-10-16 21:55:10', '2022-10-16 21:55:10'),
(6, 'Instagram', 'https://www.instagram.com/lbhpra/', '2022-10-16 22:12:38', '2022-10-16 22:12:38'),
(7, 'Email', 'lbh.pedulirakyataceh@gmail.com', '2022-10-16 22:12:52', '2022-10-16 22:13:29'),
(10, 'Disabilitas / Kaum Renta', 'https://forms.gle/gGSwqDvo3fyKcd3i7', '2022-10-16 22:15:55', '2022-10-16 22:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://forms.gle/T7n2W49614R7qrhe7', '2022-10-16 09:39:06', '2022-10-16 09:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mufti Restu Mahesa', 'mufti.restumahesa@gmail.com', NULL, '$2y$10$A9sRmsB4mT0zFhUfDG8.t.f.x73EqpN26kkyCW7Q1KLb6J5zdJvxq', NULL, '2022-10-07 09:05:48', '2022-10-07 09:05:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hukum`
--
ALTER TABLE `hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi_pengaduan`
--
ALTER TABLE `informasi_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaum_renta`
--
ALTER TABLE `kaum_renta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
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
-- Indexes for table `perdata`
--
ALTER TABLE `perdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pidana`
--
ALTER TABLE `pidana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posbakum`
--
ALTER TABLE `posbakum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
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
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hukum`
--
ALTER TABLE `hukum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `informasi_pengaduan`
--
ALTER TABLE `informasi_pengaduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kaum_renta`
--
ALTER TABLE `kaum_renta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perdata`
--
ALTER TABLE `perdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pidana`
--
ALTER TABLE `pidana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posbakum`
--
ALTER TABLE `posbakum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
