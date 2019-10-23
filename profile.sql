-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2019 pada 07.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siska`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biografi`
--

CREATE TABLE `biografi` (
  `id` varchar(13) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biografi`
--

INSERT INTO `biografi` (`id`, `nama_lengkap`, `nama_panggilan`, `pekerjaan`, `ttl`, `jenis_kelamin`, `agama`, `no_telp`, `alamat`, `hobi`, `deskripsi`, `foto`, `kota`, `kecamatan`, `kelurahan`, `email`) VALUES
('1', 'Siska Ayu Wulandari', 'Siska Ayu', '-', 'Malang, 22 January 2002', 'Perempuan', 'Islam', '+6281553939906', 'Jl. Hamid Rusdi Gg 6b/2048', '-', 'Disini saya akan memperkenalkan diri saya terlebih dahulu, agar kalian mengenal saya lebih dekat :', '1.jpg', 'Malang', 'Lowokwaru', 'Tunjungsekar', 'siskaayu@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `my_work`
--

CREATE TABLE `my_work` (
  `id` varchar(13) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `link_project` varchar(100) NOT NULL,
  `jenis_project` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `my_work`
--

INSERT INTO `my_work` (`id`, `nama_project`, `link_project`, `jenis_project`, `gambar`) VALUES
('5da3ca05aa9a1', 'Desain Promosi Game', 'v', 'Input data', '1__vivo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `pengalaman_id` varchar(13) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `tahun_mulai` varchar(100) NOT NULL,
  `tahun_akhir` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`pengalaman_id`, `judul`, `perusahaan`, `tahun_mulai`, `tahun_akhir`, `deskripsi`) VALUES
('5d9ffa6b0e777', 'Pemograman', 'AA', '2019', '2019', 'osdosjdosjjsfjjfsl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `pendidikan_id` varchar(13) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `tahun_lulus` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`pendidikan_id`, `nama_sekolah`, `tahun_lulus`, `deskripsi`) VALUES
('5da08e13a2ab2', 'SMP', '2008', 'mjhg'),
('5da29bbadde6b', 'SMA', '2010', 'sdnksk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` varchar(13) NOT NULL,
  `judul_services` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `judul_services`, `deskripsi`) VALUES
('5da197c2bfc5f', 'fk', 'oooooooooo'),
('5da197fad1fb5', 'kkjsakksjshids', 'whdjwhuw'),
('5da19847e22dd', 'jnj', 'jj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` varchar(13) NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `value` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `nama_skill`, `value`) VALUES
('5da2838a19188', 'Graphic Desainer', 80),
('5da2849c8abfa', 'HTML', 80),
('5da284a772ab0', 'CSS', 60),
('5da284b89aa1f', 'Wordpress', 85),
('5da29ba79d74a', ' jgh', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id` varchar(13) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `linkin` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'rian', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biografi`
--
ALTER TABLE `biografi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `my_work`
--
ALTER TABLE `my_work`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`pengalaman_id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
