-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2022 pada 14.06
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naruto_databook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arcs`
--

CREATE TABLE `arcs` (
  `id` int(11) NOT NULL,
  `judul_arc` text NOT NULL,
  `episode` text NOT NULL,
  `deskripsi_arc` text NOT NULL,
  `thumbnail_arc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arcs`
--

INSERT INTO `arcs` (`id`, `judul_arc`, `episode`, `deskripsi_arc`, `thumbnail_arc`) VALUES
(1, 'tes', 'tes res', 'tes tes tes', 'naruto.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'admin2@gmail.com', '$2y$10$bOMYyeVE3PG4Nn2/sVf/N.MDdrp0HJkZ1F8JQhu5zlY/5CniKMLC.'),
(3, 'admin2@gmail.com', '$2y$10$crGPVT8d5up3dPFTqEfULOOUYOFK19AYguIIALzsk6/zJm1M.wx4y'),
(4, 'admin3@gmail.com', '$2y$10$F/bLZWRNwpg/6CCEL2moVuVYG3P04UFV665vMkoptKmVQH3s5hzp6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arcs`
--
ALTER TABLE `arcs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arcs`
--
ALTER TABLE `arcs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
