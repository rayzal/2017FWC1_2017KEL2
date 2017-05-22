-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 03:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paragonhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_check_in` date NOT NULL,
  `karyawan_id` int(10) UNSIGNED NOT NULL,
  `tamu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `tgl_check_in`, `karyawan_id`, `tamu_id`, `created_at`, `updated_at`) VALUES
(4, '2017-05-22', 8, 7, '2017-05-22 04:26:24', '2017-05-22 04:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_check_out` date NOT NULL,
  `transaksi_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`id`, `tgl_check_out`, `transaksi_id`, `created_at`, `updated_at`) VALUES
(1, '2017-05-24', 4, '2017-05-22 04:29:16', '2017-05-22 04:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`, `created_at`, `updated_at`) VALUES
(4, 'TV 32 inc', '2017-05-18 10:48:38', '2017-05-18 10:49:41'),
(5, 'TV 60 inc', '2017-05-18 10:48:39', '2017-05-18 10:48:39'),
(6, 'Kolam Renang', '2017-05-18 10:49:17', '2017-05-18 10:49:17'),
(7, 'SPA', '2017-05-18 10:50:03', '2017-05-18 10:50:03'),
(8, 'GYM', '2017-05-18 10:50:14', '2017-05-18 10:50:14'),
(9, 'Lapangan Golf', '2017-05-18 10:50:31', '2017-05-18 10:50:31'),
(10, 'Kulkas', '2017-05-18 10:50:50', '2017-05-18 10:50:50'),
(11, 'AC', '2017-05-18 10:53:29', '2017-05-18 10:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id` int(10) UNSIGNED NOT NULL,
  `kamar_id` int(10) UNSIGNED NOT NULL,
  `fasilitas_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id`, `kamar_id`, `fasilitas_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2017-05-18 13:42:01', '2017-05-18 13:42:01'),
(2, 1, 10, '2017-05-18 13:42:12', '2017-05-18 13:42:12'),
(3, 1, 11, '2017-05-18 13:42:21', '2017-05-18 13:42:21'),
(4, 1, 6, '2017-05-18 13:42:32', '2017-05-18 13:42:32'),
(5, 1, 6, '2017-05-18 16:54:40', '2017-05-18 16:54:40'),
(6, 4, 5, '2017-05-22 04:15:20', '2017-05-22 04:15:20'),
(7, 4, 6, '2017-05-22 04:15:40', '2017-05-22 04:15:40'),
(8, 4, 7, '2017-05-22 04:15:51', '2017-05-22 04:15:51'),
(9, 4, 9, '2017-05-22 04:16:03', '2017-05-22 04:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_kamar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_kamar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga_kamar` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `kode_kamar`, `type_kamar`, `harga_kamar`, `created_at`, `updated_at`) VALUES
(1, 'STD001', 'STANDAR', 5000000, '2017-05-18 11:34:56', '2017-05-18 11:34:56'),
(2, 'STD002', 'STANDAR', 5000000, '2017-05-22 04:10:53', '2017-05-22 04:10:53'),
(3, 'STD003', 'STANDAR', 5000000, '2017-05-22 04:11:09', '2017-05-22 04:11:09'),
(4, 'DLX001', 'DELUXE', 6000000, '2017-05-22 04:12:26', '2017-05-22 04:12:26'),
(5, 'DLX002', 'DELUXE', 6000000, '2017-05-22 04:12:48', '2017-05-22 04:12:48'),
(6, 'DLX003', 'DELUXE', 6000000, '2017-05-22 04:13:02', '2017-05-22 04:13:02'),
(7, 'VVIP001', 'VVIP', 10000000, '2017-05-22 04:13:24', '2017-05-22 04:13:24'),
(8, 'VVIP002', 'VVIP', 10000000, '2017-05-22 04:13:54', '2017-05-22 04:13:54'),
(9, 'VVIP003', 'VVIP', 10000000, '2017-05-22 04:14:08', '2017-05-22 04:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_karyawan` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telepon_karyawan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama_karyawan`, `alamat_karyawan`, `no_telepon_karyawan`, `email`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(7, 'sarman', 'Jl. Arabasta', '082345678990', 'sarman@gmail.com', 30, '2017-05-22 04:18:55', '2017-05-22 04:18:55'),
(8, 'rizal', 'jl. Kerajaan', '082345678904', 'rayzalnetwork@gmail.com', 31, '2017-05-22 04:19:30', '2017-05-22 04:19:30'),
(9, 'Khosy', 'jl. juanda', '082345678990', 'khosy@gmail.com', 33, '2017-05-22 04:26:49', '2017-05-22 04:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_01_033442_tabel_pengguna', 1),
('2017_05_01_033200_tabel_karyawan', 2),
('2017_05_01_033232_tabel_tamu', 2),
('2017_05_01_033542_tabel_fasilitas', 2),
('2017_05_01_033631_tabel_harga', 2),
('2017_05_01_033515_tabel_check_In', 3),
('2017_05_01_033612_tabel_kamar', 4),
('2017_05_01_033601_tabel_transaksi', 5),
('2017_05_01_033525_tabel_check_Out', 6),
('2017_05_01_033654_tabel_fasilitas_kamar', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(26, 'rudi', 'rudi@gmail.com', 'rudi', '1', NULL, NULL, NULL),
(29, 'rayzal', 'rayzal@gmail.com', '1234', '1', NULL, '2017-05-22 03:57:08', '2017-05-22 03:57:08'),
(30, 'sarman', 'sarman@gmail.com', '123', '1', NULL, '2017-05-22 04:18:54', '2017-05-22 04:18:54'),
(31, 'rizal', 'rayzalnetwork@gmail.com', '123', '1', NULL, '2017-05-22 04:19:30', '2017-05-22 04:19:30'),
(32, 'andine', 'ad@gmail.com', '123', '2', NULL, '2017-05-22 04:21:24', '2017-05-22 04:21:24'),
(33, 'khosyi', 'khosy@gmail.com', '123', '1', NULL, '2017-05-22 04:26:49', '2017-05-22 04:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tamu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_identitas_tamu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_tamu` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telepon_tamu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama_tamu`, `no_identitas_tamu`, `alamat_tamu`, `no_telepon_tamu`, `email`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(7, 'Andine', '1232323', 'jl. kenari bangsa', '082121215656', 'ad@gmail.com', 32, '2017-05-22 04:21:24', '2017-05-22 04:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `lama_menginap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_harga` int(20) NOT NULL,
  `check_in_id` int(10) UNSIGNED NOT NULL,
  `kamar_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `lama_menginap`, `total_harga`, `check_in_id`, `kamar_id`, `created_at`, `updated_at`) VALUES
(4, '3', 500000, 4, 1, '2017-05-22 04:28:52', '2017-05-22 04:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `check_in_karyawan_id_foreign` (`karyawan_id`),
  ADD KEY `check_in_tamu_id_foreign` (`tamu_id`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `check_out_transaksi_id_foreign` (`transaksi_id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_kamar_fasilitas_id_foreign` (`fasilitas_id`),
  ADD KEY `fasilitas_kamar_kamar_id_foreign` (`kamar_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengguna_email_unique` (`email`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tamu_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_check_in_id_foreign` (`check_in_id`),
  ADD KEY `transaksi_kamar_id_foreign` (`kamar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_in`
--
ALTER TABLE `check_in`
  ADD CONSTRAINT `check_in_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `check_in_tamu_id_foreign` FOREIGN KEY (`tamu_id`) REFERENCES `tamu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `check_out`
--
ALTER TABLE `check_out`
  ADD CONSTRAINT `check_out_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD CONSTRAINT `fasilitas_kamar_fasilitas_id_foreign` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fasilitas_kamar_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `tamu_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_check_in_id_foreign` FOREIGN KEY (`check_in_id`) REFERENCES `check_in` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
