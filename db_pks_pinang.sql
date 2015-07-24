-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2015 at 05:17 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pks_pinang`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE IF NOT EXISTS `anggota` (
  `id_ang` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jeniskelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `murobbi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hobby` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kafaah` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_pasangan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jumlah_anak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `id_kel` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_ang`, `nama_ang`, `jeniskelamin`, `murobbi`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `pekerjaan`, `pendidikan_terakhir`, `hobby`, `kafaah`, `nama_pasangan`, `jumlah_anak`, `id_status`, `tgl_masuk`, `id_kel`) VALUES
('1112233', 'Jamal Apriadi', 'L', 'Rima', 'Tegal', '2002-01-01', 'Dukuh Sembung', '08566100994', 'Programmer', 'S1', 'Membaca', 'Rika', '-', '1', '1', '2010-01-01', 'J01-L-PIN-2'),
('AG0001', 'Ayu', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', '{"admin":1}', '2015-07-19 19:43:14', '2015-07-19 19:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `ibadah`
--

DROP TABLE IF EXISTS `ibadah`;
CREATE TABLE IF NOT EXISTS `ibadah` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE IF NOT EXISTS `jadwal` (
`id` int(10) unsigned NOT NULL,
  `date_time` datetime NOT NULL,
  `nama_kegiatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lama_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kat_jenjang`
--

DROP TABLE IF EXISTS `kat_jenjang`;
CREATE TABLE IF NOT EXISTS `kat_jenjang` (
  `id_jenjang` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `nama_jenjang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('aktif','tidak aktif') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kat_jenjang`
--

INSERT INTO `kat_jenjang` (`id_jenjang`, `nama_jenjang`, `keterangan`, `status`) VALUES
('J01', 'Pemula', 'Jenjang Pemula', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

DROP TABLE IF EXISTS `kelompok`;
CREATE TABLE IF NOT EXISTS `kelompok` (
  `id_kel` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `id_jenjang` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `jeniskelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kel`, `id_jenjang`, `jeniskelamin`, `kecamatan`, `no_grup`) VALUES
('J01-L-PIN-2', 'J01', 'L', 'PIN', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_02_22_083441_migration_cartalyst_sentry_install_users', 1),
('2015_02_22_083442_migration_cartalyst_sentry_install_groups', 1),
('2015_02_22_083443_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2015_02_22_083444_migration_cartalyst_sentry_install_throttle', 1),
('2015_07_19_105639_jenjang', 1),
('2015_07_19_105805_kelompok', 1),
('2015_07_19_105834_anggota', 1),
('2015_07_19_105932_jadwal', 1),
('2015_07_19_110018_news', 1),
('2015_07_19_110606_ibadah', 1),
('2015_07_19_140538_agenda', 1),
('2015_07_19_155722_users_ke_anggota', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE IF NOT EXISTS `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `id_ang` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_ang`, `username`, `password`, `email`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `created_at`, `updated_at`) VALUES
(1, 'AG0001', 'admin', '$2y$10$KzpfF/fqV.cNYpzn3BW91.HkLVFTGLT/G1xodp.B/MN/xzxAjj0Iu', 'crush.ve@gmail.com', NULL, 1, NULL, '2015-07-19 19:43:14', '2015-07-23 20:17:05', '$2y$10$33FSkTdHtbQrmx/YvQOUt.R2Z/6cQWWUQESbPEFGc83zsjWUtq66O', NULL, '2015-07-19 19:43:14', '2015-07-23 20:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id`), ADD KEY `agenda_id_user_foreign` (`id_user`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_ang`), ADD KEY `anggota_id_kel_foreign` (`id_kel`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `ibadah`
--
ALTER TABLE `ibadah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kat_jenjang`
--
ALTER TABLE `kat_jenjang`
 ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
 ADD PRIMARY KEY (`id_kel`), ADD KEY `kelompok_id_jenjang_foreign` (`id_jenjang`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_email_unique` (`username`,`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`), ADD KEY `users_id_ang_foreign` (`id_ang`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ibadah`
--
ALTER TABLE `ibadah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
ADD CONSTRAINT `agenda_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
ADD CONSTRAINT `anggota_id_kel_foreign` FOREIGN KEY (`id_kel`) REFERENCES `kelompok` (`id_kel`) ON UPDATE CASCADE;

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
ADD CONSTRAINT `kelompok_id_jenjang_foreign` FOREIGN KEY (`id_jenjang`) REFERENCES `kat_jenjang` (`id_jenjang`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_id_ang_foreign` FOREIGN KEY (`id_ang`) REFERENCES `anggota` (`id_ang`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
