-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8080
-- Generation Time: Jul 19, 2024 at 10:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'galeri1721319278.jpg', 'Aassss', '2024-07-18 16:26:32', NULL),
(2, 'galeri1721319974.jpg', '<p>Foto Alumni Angkatan&nbsp;<strong>2023</strong></p>', '2024-07-18 16:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(16, 'FOTO KEPALA SEKOLAH DAN TENAGA PENDIDIK SDN 21 BANDAR BUAT', '<p>FOTO KEPALA SEKOLAH DAN TENAGA PENDIDIK SDN 21 BANDAR BUAT</p>', 'guru1721403555.jpg ', '2024-07-19 15:40:11', '2024-07-19 22:40:11'),
(19, 'GURU', '<p>GURU</p>', 'guru1721406765.jpg', '2024-07-19 16:32:45', NULL),
(20, 'GURUU', '', 'guru1721407099.jpg', '2024-07-19 16:38:19', NULL),
(21, 'GURUUU', '<p>FOTO GURU GURU SDN 21 BANDAR BUAT</p>', 'guru1721410480.png ', '2024-07-19 18:03:37', '2024-07-20 01:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Besok Libur Nasional', 'hari libur nasional', 'informasi1721313572.jpg ', '2024-07-19 18:21:35', '2024-07-19 23:53:33', 1),
(4, 'PPBD AKAN DIBUKA TANGGAL 12 AGUSTUS', '<p>Penerimaan peserta didik baru akan dibuka pada tanggal 2 september 2024,pada calon yang ingin mendaftar silakan hubungi nomor dibawah ini&nbsp;</p>', 'informasi1721413428.jpg', '2024-07-19 18:23:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'Sdn 21 Bandar Buat', 'sdn21bandarbuat21@gmail.com', '08239283092821', 'Jl. Simpang SMP 21 Jl. Raya Gadut, Bandar Buat, Kec. Lubuk Kilangan, Kota Padang, Sumatera Barat 25231 ', 'logo1721325987.png    ', 'favicon1721417428.png', '<p>tentang sekolah sdn 21 bandar buat</p>', 'sekolah1721408582.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2703415126944!2d100.44021797477689!3d-0.9496157990412072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7eb4645fc67%3A0x3d332bd8e9677a55!2sSD%20NEGERI%2021%20BANDAR%20BUAT!5e0!3m2!1sid!2sid!4v1721417118741!5m2!1sid!2sid', 'Fatih Mp.d', 'kepsek1721329490.jpg ', '<p>Selamat Datang Para Calon Siswa/Siswi Peserta Didik Baru. Semoga Kalian Semua Dalam Keadaan Sehat Semua. Semangat Dalam Menuntut Ilmu, Jangan Pernah Bosan Dalam Belajar. Semoga Hari Hari Siswa/Siswi Sekalian Selalu Bahagia</p>', '2024-07-19 19:30:28', '2024-07-20 02:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Ilham', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-07-17 16:28:23', NULL),
(2, 'Fathur', 'fathur12', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-07-17 16:32:53', NULL),
(3, 'Fatih ', 'fatih123', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-07-18 10:50:01', '2024-07-18 17:50:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `informasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
