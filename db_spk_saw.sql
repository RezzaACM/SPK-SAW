-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2019 pada 18.02
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

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
-- Struktur dari tabel `master_admin`
--

CREATE TABLE `master_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_guru`
--

CREATE TABLE `master_guru` (
  `id` int(11) NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tugas_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kriteria_absensi`
--

CREATE TABLE `master_kriteria_absensi` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kriteria_kepribadian`
--

CREATE TABLE `master_kriteria_kepribadian` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kriteria_pedagogik`
--

CREATE TABLE `master_kriteria_pedagogik` (
  `id` int(11) NOT NULL,
  `nama_kriteria` int(11) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kriteria_profesional`
--

CREATE TABLE `master_kriteria_profesional` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kriteria_sosial`
--

CREATE TABLE `master_kriteria_sosial` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_nilai`
--

CREATE TABLE `transaksi_nilai` (
  `id` int(11) NOT NULL,
  `id_guru_fk` int(11) NOT NULL,
  `c1_fk` int(11) NOT NULL,
  `c2_fk` int(11) NOT NULL,
  `c3_fk` int(11) NOT NULL,
  `c4_fk` int(11) NOT NULL,
  `c5_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_guru`
--
ALTER TABLE `master_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kriteria_absensi`
--
ALTER TABLE `master_kriteria_absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indeks untuk tabel `master_kriteria_kepribadian`
--
ALTER TABLE `master_kriteria_kepribadian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kriteria_pedagogik`
--
ALTER TABLE `master_kriteria_pedagogik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `master_kriteria_profesional`
--
ALTER TABLE `master_kriteria_profesional`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kriteria_sosial`
--
ALTER TABLE `master_kriteria_sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_nilai`
--
ALTER TABLE `transaksi_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `c1_fk` (`c1_fk`),
  ADD KEY `c1_fk_2` (`c1_fk`),
  ADD KEY `c2_fk` (`c2_fk`),
  ADD KEY `id_2` (`id`),
  ADD KEY `c3_fk` (`c3_fk`),
  ADD KEY `c4_fk` (`c4_fk`),
  ADD KEY `c5_fk` (`c5_fk`),
  ADD KEY `id_guru_fk` (`id_guru_fk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_guru`
--
ALTER TABLE `master_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_kriteria_absensi`
--
ALTER TABLE `master_kriteria_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_kriteria_kepribadian`
--
ALTER TABLE `master_kriteria_kepribadian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_kriteria_pedagogik`
--
ALTER TABLE `master_kriteria_pedagogik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_kriteria_profesional`
--
ALTER TABLE `master_kriteria_profesional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_kriteria_sosial`
--
ALTER TABLE `master_kriteria_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_nilai`
--
ALTER TABLE `transaksi_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi_nilai`
--
ALTER TABLE `transaksi_nilai`
  ADD CONSTRAINT `transaksi_nilai_ibfk_1` FOREIGN KEY (`c1_fk`) REFERENCES `master_kriteria_absensi` (`id`),
  ADD CONSTRAINT `transaksi_nilai_ibfk_2` FOREIGN KEY (`c2_fk`) REFERENCES `master_kriteria_pedagogik` (`id`),
  ADD CONSTRAINT `transaksi_nilai_ibfk_3` FOREIGN KEY (`c3_fk`) REFERENCES `master_kriteria_kepribadian` (`id`),
  ADD CONSTRAINT `transaksi_nilai_ibfk_4` FOREIGN KEY (`c4_fk`) REFERENCES `master_kriteria_sosial` (`id`),
  ADD CONSTRAINT `transaksi_nilai_ibfk_5` FOREIGN KEY (`c5_fk`) REFERENCES `master_kriteria_profesional` (`id`),
  ADD CONSTRAINT `transaksi_nilai_ibfk_6` FOREIGN KEY (`id_guru_fk`) REFERENCES `master_guru` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
