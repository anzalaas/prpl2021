-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2021 pada 17.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Asal` varchar(100) DEFAULT NULL,
  `Jurusan` varchar(100) DEFAULT NULL,
  `Semester` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Asal`, `Jurusan`, `Semester`) VALUES
(1700018123, 'Engku Zainnudin', 'Makassar', 'PBSI', 8),
(1700021098, 'Hayati', 'Batipuh', 'Farmasi', 6),
(1800018067, 'Wiro Sableng', 'Jawa Timur', 'Teknik Informatika', 2),
(1800018086, 'Krishna', 'Yogyakarta', 'Teknik Informatika', 2),
(1800020074, 'Agling Darma', 'Jawa Tengah', 'Teknik Industri', 8),
(1800020077, 'Jaka Tingkir', 'Jawa Tengah', 'Teknik Elektro', 4),
(1900020021, 'Kang Mus', 'Jawa Barat', 'Teknik Elektro', 4),
(1900021022, 'Kian Santang', 'Jawa Barat', 'Farmasi', 2),
(2000010212, 'Uda Azis', 'Padang Panjang', 'Teknik Kimia', 8),
(2000011023, 'Bang Muluk', 'Padang Panjang', 'PBSI', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
