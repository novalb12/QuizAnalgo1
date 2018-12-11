-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2018 pada 17.05
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lutuna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `userid` varchar(100) NOT NULL,
  `password` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`userid`, `password`) VALUES
('lutuna', 'project');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vote`
--

CREATE TABLE `tb_vote` (
  `id_vote` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `opsi` varchar(225) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_vote`
--

INSERT INTO `tb_vote` (`id_vote`, `id_user`, `judul`, `deskripsi`, `opsi`, `img`) VALUES
(1, 1, 'Apakah Lelaki ini Tampan?', '', '', 'db_foto/rais.jpg'),
(2, 0, 'Apakah Lelaki ini Begitu Menawan?', '', '', 'db_foto/rais2.jpg'),
(6, 0, 'Apakah Beruang ini sangat lucu?', '', '', 'assets\\Icons\\beruang.png'),
(7, 0, 'Apakah Sapi ini Gendut?', '', '', 'db_foto/sapi.jpg'),
(8, 0, 'Ada Berapa Pohon di Hutan ini?', '', '', 'db_foto/pohon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`id_vote`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `id_vote` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
