-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2020 pada 06.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamvoice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'wahyu@gmail.com', '32c9e71e866ecdbc93e497482aa6779f'),
(3, 'wahyuaja@gmail.com', '32c9e71e866ecdbc93e497482aa6779f'),
(4, 'wahyu1@gmail.com', '32c9e71e866ecdbc93e497482aa6779f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id`, `nama_album`, `gambar`, `tanggal`) VALUES
(1, 'mencari tuhan', 'tes.jpg', '2020-03-14 00:36:34'),
(2, 'kresahan mahasiswa', 'tes.jpg', '2020-03-14 01:26:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sound`
--

CREATE TABLE `sound` (
  `id_voice` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `sound` varchar(125) NOT NULL,
  `album_id` int(11) NOT NULL,
  `gambar_voice` text NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sound`
--

INSERT INTO `sound` (`id_voice`, `judul`, `sound`, `album_id`, `gambar_voice`, `keterangan`, `tanggal`) VALUES
(1, 'lagu tes voice', 'wahyu.mp3', 1, 'wahyu.jpg', 'tes aja', '2020-03-12 02:38:25'),
(2, 'lagu tes voice', 'wahyu1.mp3', 1, 'wahyu.jpg', 'tes aja', '2020-03-12 02:38:25'),
(4, 'lagu tes voice', 'wahyu3.mp3', 2, 'wahyu.jpg', 'tes aja', '2020-03-12 02:38:25'),
(17, 'haji wahyu b', 'Lagu_Vlog_Ceria_Santai_Background_Happy_Travel_+_Adventure_No_Copyright_Free2.mp3', 1, '', 'wahyuuuu taqdirul aziz', '2020-03-12 07:18:57'),
(18, 'inone a', 'y2mate_com_-_RED_IN_JAPAN___iPhone_Cinematic_Travel_Video_2018_Forever21_T248O8tN67A1.mp3', 2, '', 'lagu ini terinvirasi dari anak\r\n																								', '2020-03-12 07:22:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`id_voice`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sound`
--
ALTER TABLE `sound`
  MODIFY `id_voice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
