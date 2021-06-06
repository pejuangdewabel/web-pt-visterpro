-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 02, 2021 at 09:04 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vister`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, '<p><strong><a href=\"https://visterpro.com/\">PT GRAHA VISTER MANDIRI</a> </strong>adalah perusahaan <span dir=\"auto\">Developer dan Agent property</span> di Provinsi Lampung. Wilayah property yang dipasarkan <strong><a href=\"https://visterpro.com/\">PT GRAHA VISTER MANDIRI</a></strong> adalah Kota Bandar Lampung, Kabupaten Pesawaran dan Lampung Selatan.</p>', 'assets/about/JW8CEPo9bHVO5FMRT0NxJ518HrefdCXzcI9n3YtK.png', NULL, '2021-02-01 23:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `level`, `foto`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prasetyo Bella', 'danu.17bella@gmail.com', 'admin', 'assets/pengguna/u7WRkqN0etV9jelLeB9F8Ttb9jWA0CK87RnNTarG.jpg', NULL, '$2y$10$v9782zWQq.YpUkgiPmX3Q.FUyz9LEemuIbxIxLl/TfpJzawtxKVP2', NULL, '2021-01-26 05:42:33', '2021-02-02 00:48:20');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_01_26_142409_create_property_table', 2),
(4, '2021_02_02_023118_create_abouts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_properti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_dp` int(11) DEFAULT NULL,
  `harga_cash` int(11) DEFAULT NULL,
  `harga_permeter` int(11) DEFAULT NULL,
  `kata_thumb` longtext COLLATE utf8mb4_unicode_ci,
  `foto` longtext COLLATE utf8mb4_unicode_ci,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabkot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` longtext COLLATE utf8mb4_unicode_ci,
  `dekat` longtext COLLATE utf8mb4_unicode_ci,
  `status1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `nama_properti`, `ukuran`, `harga_dp`, `harga_cash`, `harga_permeter`, `kata_thumb`, `foto`, `deskripsi`, `lokasi`, `kabkot`, `syarat`, `dekat`, `status1`, `status2`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 100000, 1000000, 1000000, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'aaaaaaaaaaaaa', 'a', '1', 'a', 'aaa', '1', '1', NULL, '2021-01-26 23:16:38', '2021-01-26 16:01:27', '2021-01-26 23:16:38'),
(2, 'Kavling Mangun Disa', '8 x 12,5 (100m2)', 50000000, 150000000, 1500000, '<p>Tanah kavling <span class=\"marker\"><strong>Siap Bangun</strong></span> Mangku Disa ini memiliki lokasi sangat strategis.</p>', 'assets/property/5edmYrTLgxjEImprPc0wWE0GOo8yxgJHFeL3rikf.jpg', '<p>Lokasi JalanPramuka, Bandar Lampung. Kavling Siap Bangun.</p>\r\n\r\n<ul>\r\n	<li>Ukuran 8 x 12,5</li>\r\n	<li>Luas Mulai 100 m2</li>\r\n	<li>Harga Permeter Rp. 1.500.000</li>\r\n	<li>DP Rp. 50.000.000</li>\r\n	<li>Anguran 2,7 jt-an selama 36 bulan</li>\r\n	<li>Konsumen Terima AJB Notaris</li>\r\n	<li>Tanpa Bank</li>\r\n	<li>Tanpa Denda</li>\r\n	<li>Tanpa Sita</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'Jalan Pramuka', '1', '<ol>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n</ol>', '<p>Lokasi Sangat Strategis Dekat dengan :</p>\r\n\r\n<ol>\r\n	<li>Kampus Mahalayati</li>\r\n	<li>SPBU Pramuka</li>\r\n	<li>Samsat Bandar Lampung</li>\r\n</ol>', '1', '1', 'kavling-mangun-disa', NULL, '2021-01-26 23:11:01', '2021-02-01 12:31:33'),
(3, 'a', 'a', 1, 1, 1, '<p>1</p>', 'assets/property/Jlv3nWCXzT0iyRWUBeofjvdlIe2xnPi2sHMb9NF8.jpg', '<p>1</p>', '1', '2', '<p>1</p>', '<p>1</p>', '1', '1', 'a', '2021-01-26 23:18:57', '2021-01-26 23:15:16', '2021-01-26 23:18:57'),
(4, 'Kavling Usup Tahap 10', '8 x 14', 10000000, 89600000, 800000, '<p>Tanah Kavling yang strategis ITERA Kota Baru</p>', 'assets/property/eJm4LumeCZxtbNRJYIPWCwTFjGf26MasarXZ0Ip0.jpg', '<p>Lokasi Strategis</p>\r\n\r\n<ul>\r\n	<li>Luas Tanah 112 m2</li>\r\n	<li>Ukuran 8x14</li>\r\n	<li>DP 10 jt</li>\r\n	<li>Harga Permeter 800 rb</li>\r\n	<li>Harga Cash Rp. 89.600.000</li>\r\n	<li>Angsuran 1,3 jt-an selama 60 bulan</li>\r\n	<li>Konsumen Terima AJB Notaris</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'ITERA Kota Baru', '1', '<ol>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n</ol>', '<ol>\r\n	<li>SPBU Kota Baru</li>\r\n	<li>Pintu Tol ITERA</li>\r\n	<li>Kampus ITERA</li>\r\n</ol>', '1', '1', 'kavling-usup-tahap-10', NULL, '2021-02-01 12:38:20', '2021-02-01 12:38:20'),
(5, 'KAVLING AQUR 2', '100 m2 - 142 m2', 40000000, 0, 1145000, '<p>Tanah Kavling Siap Bangun <strong>Lokasi Strategis</strong></p>', 'assets/property/wOWBPRZH6Thn11vrv0MwFxgxo3Kuh04DD7r4rHSG.jpg', '<p>Kavling Aqur 2<br />\r\nLokasi belakang SPBU ITERA</p>\r\n\r\n<p>Spesifikasi :</p>\r\n\r\n<ul>\r\n	<li>Kav.Ruko 1.225.000 per m</li>\r\n	<li>Uk 63 m2-91 m2</li>\r\n	<li>Cash disc 20 jt</li>\r\n	<li>Cash tempo disc 10 jt</li>\r\n	<li>Kredit dp 50 jt</li>\r\n	<li>Angs mulai 774.500 maks tenor 48 bulan</li>\r\n	<li>Kav Rumah 1.145.000 per m</li>\r\n	<li>Uk 100 m2-142 m2</li>\r\n	<li>Cash disc 20 jt</li>\r\n	<li>Cash tempo disc 10 jt</li>\r\n	<li>Kredit dp 40 jt</li>\r\n	<li>Angs mulai 1.760.500 maks tenor 48 bulan</li>\r\n	<li>Konsumen terima pecahan SHM Balik Nama</li>\r\n	<li>Akses jalan Disabes</li>\r\n	<li>Jalan blok 5.5 m</li>\r\n	<li>Tersedia drainase</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'ITERA Kota Baru', '2', '<ol>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n</ol>', '<ol>\r\n	<li>Spbu ITERA</li>\r\n	<li>Pintu TOL Itera</li>\r\n	<li>Kampus ITERA</li>\r\n	<li>Polsek Sukarame</li>\r\n</ol>', '1', '1', 'kavling-aqur-2', NULL, '2021-02-02 01:12:52', '2021-02-02 01:12:52'),
(6, 'KAVLING AQUR 4', '96 - 137 m2', 0, 0, 0, '<p>Tanah kavling bersebelahan dengan hotel dan resto. Bebas banjir dan Bukan tanah sawah</p>', 'assets/property/rM50Scs4k8XpBjccbqUJD3Q2cCBb2NLupmrqX4RC.jpg', '<p>Spesifikasi Kavling :</p>\r\n\r\n<p>&bull;&nbsp; Luas tanah 96-137 m&sup2;<br />\r\n&bull;&nbsp; Tersedia kavling ruko &amp; kavling rumah<br />\r\n&bull;&nbsp; DP awal bisa pilih Rp 20 atau 30 Juta<br />\r\n&bull;&nbsp; Dengan Angsuran rata- rata Rp 1,1 jt-an<br />\r\n&bull;&nbsp; Tenor s.d 50 bulan<br />\r\n&bull;&nbsp; Jalan utama 6m akan diaspal<br />\r\n&bull;&nbsp; Banyak kavling hook<br />\r\n&bull;&nbsp; Bebas banjir<br />\r\n&bull;&nbsp; Bukan tanah sawah<br />\r\n&bull;&nbsp; Dibuatkan drainase<br />\r\n&bull;&nbsp; Surat&nbsp; SHM</p>', 'ITERA Kota Baru', '2', '<ol>\r\n	<li>DP</li>\r\n	<li>Fotokopi KTP &amp; KK</li>\r\n</ol>', '<p>&bull;&nbsp; 5 menit dari Pintu Tol ITERA<br />\r\n&bull;&nbsp; 7&nbsp; menit dari Kampus ITERA<br />\r\n&bull;&nbsp; 10 menit dari Kantor Polda Lampung<br />\r\n&bull;&nbsp; Hanya 100m dari Dua Jalur Jl. Ryacudu<br />\r\n&bull;&nbsp; Dekat Perumahan yang sudah ramai<br />\r\n&bull;&nbsp; Dekat dengan&nbsp; pondok pesantren Aalu Salim</p>', '1', '1', 'kavling-aqur-4', NULL, '2021-02-02 01:28:59', '2021-02-02 01:28:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

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
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
