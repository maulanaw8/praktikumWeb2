-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 05:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'KKN Di Desa Penari', 'Simpleman', 'Bukune', 2019),
(2, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', 'Gramedia Widiasarana Indonesia', 2005),
(3, 'Start With Why', 'Simon Sinek', 'Gramedia Pustaka Utama', 2019),
(4, 'Maaf Tuhan, Aku Hampir Menyerah', 'ALFIALGHAZI', 'SAHIMA', 2020),
(5, 'Demon Slayer: Kimetsu no Yaiba 01', 'Koyoharu Gotouge', 'Elex Media Komputindo', 2020),
(6, 'Kesetiaan Mr. X (Devotion of Suspect X)', 'Keigo Higashino', ' Gramedia Pustaka Utama', 2021),
(7, 'Home Sweet Loan', 'Almira Bastari', 'Gramedia Pustaka Utama', 2022),
(8, 'Indigo Tapi Penakut', 'Angelyn Stevanie', 'Media Kita', 2022),
(9, 'Ekspedisi Warung Kopi', 'PAI BIAN', 'LOVEABLE X ROMANCIOUS', 2021),
(10, 'Diary Of Canva', 'ITAKRN', 'Kawah Media Pustaka', 2022),
(11, 'Sejarah Dunia Yang Disembunyikan', 'Jonathan Black', 'Alvabeta', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Maulana', '082256407791', '  Bati-Bati, Tanah Laut', '2022-05-10 19:14:32', '2022-05-13'),
(2, 'May Er', '088812341234', '  Liang Anggang', '2022-05-10 19:16:17', '2022-05-17'),
(3, 'Dr. Strange', '0866666666666', 'California, New York', '1970-01-01 01:00:00', '2022-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-05-12', '2022-05-14'),
(2, '2022-05-11', '2022-05-23'),
(3, '2022-05-13', '2022-05-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
