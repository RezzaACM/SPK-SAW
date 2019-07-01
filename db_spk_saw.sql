-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2019 pada 12.46
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_guru`
--

CREATE TABLE `master_guru` (
  `id_guru` int(11) NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tugas_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_guru`
--

INSERT INTO `master_guru` (`id_guru`, `nuptk`, `nama`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `tugas_jabatan`) VALUES
(24, 1, 'Funky Reza', 'Tangerang Selatan', '0199-07-12', 'Laki-laki', 'Guru'),
(25, 5, 'Funky Reza', 'Tangerang Selatan', '1990-12-12', 'Laki-laki', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kriteria`
--

CREATE TABLE `master_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot` float NOT NULL,
  `attribute_kriteria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kriteria`
--

INSERT INTO `master_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `attribute_kriteria`) VALUES
(2, 'Kompetensi Pedadogik', 0.3, 'Benefit'),
(3, 'Absensi', 0.1, 'Benefit'),
(4, 'Kompetensi Kepribadian', 0.3, 'Benefit'),
(5, 'Kompetensi Sosial', 0.2, 'Benefit'),
(6, 'Kompetensi Keahlian', 0.3, 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_subkriteria`
--

CREATE TABLE `master_subkriteria` (
  `id_sub` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `subkriteria` varchar(300) NOT NULL,
  `nilai_sub` float NOT NULL,
  `bobot_sub` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_subkriteria`
--

INSERT INTO `master_subkriteria` (`id_sub`, `id_kriteria`, `subkriteria`, `nilai_sub`, `bobot_sub`) VALUES
(2, 3, 'Absensi', 0, 0),
(3, 3, 'Keterlambatan', 0, 0),
(4, 2, 'Guru memberikan pembelaja', 0, 0),
(5, 5, 'Guru memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai dengan kebutuhan masing - masing tanpa memperdulikan perso', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_nilai`
--

CREATE TABLE `transaksi_nilai` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `penilaian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_guru`
--
ALTER TABLE `master_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `master_kriteria`
--
ALTER TABLE `master_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `master_subkriteria`
--
ALTER TABLE `master_subkriteria`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `transaksi_nilai`
--
ALTER TABLE `transaksi_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_guru`
--
ALTER TABLE `master_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `master_kriteria`
--
ALTER TABLE `master_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_subkriteria`
--
ALTER TABLE `master_subkriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi_nilai`
--
ALTER TABLE `transaksi_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_subkriteria`
--
ALTER TABLE `master_subkriteria`
  ADD CONSTRAINT `master_subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `master_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi_nilai`
--
ALTER TABLE `transaksi_nilai`
  ADD CONSTRAINT `transaksi_nilai_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `master_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_nilai_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `master_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
