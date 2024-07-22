-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2024 at 07:29 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

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
  `id` int NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `id_guru` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `keterangan`, `gambar`) VALUES
(2, 'Budi', '<p>Halo</p>', 'guru1721673574.png'),
(3, 'Budi 2', '<p>Halo</p>', 'guru1721673976.png'),
(4, 'Budi 3', '<p>Halo</p>', 'guru1721673986.png'),
(5, 'Budi 4', '<p>Halo</p>', 'guru1721673994.png'),
(6, 'Budi 4', '<p>Halo</p>', 'guru1721674411.png'),
(7, 'Budi 4', '<p>Halo</p>', 'guru1721674415.png'),
(8, 'Budi 4', '<p>Halo</p>', 'guru1721674416.png'),
(9, 'Budi 4', '<p>Halo</p>', 'guru1721674425.png'),
(10, 'Budi 4', '<p>Halo</p>', 'guru1721674433.png'),
(11, 'Budi 4', '<p>Halo</p>', 'guru1721674445.png');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Besok Libur Nasional', 'hari libur nasional', 'informasi1721313572.jpg ', '2024-07-19 18:21:35', '2024-07-19 23:53:33', 1),
(4, 'PPBD AKAN DIBUKA TANGGAL 12 AGUSTUS', '<p>Penerimaan peserta didik baru akan dibuka pada tanggal 2 september 2024,pada calon yang ingin mendaftar silakan hubungi nomor dibawah ini&nbsp;</p>', 'informasi1721413428.jpg', '2024-07-19 18:23:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id_kepsek` int NOT NULL,
  `nama_kepsek` varchar(255) NOT NULL,
  `foto_kepsek` varchar(255) DEFAULT NULL,
  `kata` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id_kepsek`, `nama_kepsek`, `foto_kepsek`, `kata`) VALUES
(5, 'Budi', 'kepsek1721674645.png', '<p>Halo</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `favicon` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tentang_sekolah` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_sekolah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `google_maps` text COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kepsek` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_kepsek` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sambutan_kepsek` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `level` enum('Admin') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Ilham', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-07-17 16:28:23', NULL),
(2, 'Fathur', 'fathur12', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-07-17 16:32:53', NULL),
(3, 'Fatih ', 'fatih123', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-07-18 10:50:01', '2024-07-18 17:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `visi`, `misi`) VALUES
(2, 'Halo1', 'Halo1');

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
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id_kepsek`);

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
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id_kepsek` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
