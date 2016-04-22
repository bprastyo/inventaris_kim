-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2016 pada 13.19
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpersediaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_do`
--

CREATE TABLE `tb_do` (
  `Nomor_DO` varchar(8) NOT NULL,
  `Tanggal_DO` date NOT NULL,
  `Nomor_permintaan` varchar(8) NOT NULL,
  `Kode_barang` varchar(8) NOT NULL,
  `Nomor_keluar` varchar(8) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_do`
--

INSERT INTO `tb_do` (`Nomor_DO`, `Tanggal_DO`, `Nomor_permintaan`, `Kode_barang`, `Nomor_keluar`, `Jumlah`, `Satuan`) VALUES
('DO02', '2016-04-19', 'PRTM02', 'BARANG09', 'KLUR02', 1, 'UNIT'),
('DO01', '2016-04-19', 'PRTM01', 'BARANG03', 'KLUR01', 1, 'UNIT'),
('DO03', '2016-04-19', 'PRTM03', 'BARANG08', 'KLUR03', 1, 'UNIT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `Nomor_pembelian` varchar(8) NOT NULL,
  `Tanggal_pembelian` date NOT NULL,
  `Kode_barang` varchar(8) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_permintaan`
--

CREATE TABLE `tb_permintaan` (
  `No_permintaan` varchar(8) NOT NULL,
  `Tanggal_permintaan` date NOT NULL,
  `Nama_pemakai` varchar(30) NOT NULL,
  `Kode_barang` varchar(8) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sparepart`
--

CREATE TABLE `tb_sparepart` (
  `Kode_barang` varchar(8) NOT NULL,
  `Nama_barang` varchar(20) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sparepart`
--

INSERT INTO `tb_sparepart` (`Kode_barang`, `Nama_barang`, `Jumlah`, `Satuan`) VALUES
('BARANG01', 'KAPASITOR', 2, 'UNIT'),
('BARANG03', 'KAPASITOR 25 UF', 4, 'UNIT'),
('BARANG04', 'KAPASITOR 30 UF', 5, 'UNIT'),
('BARANG05', 'KONTACKTOR', 4, 'UNIT'),
('BARANG06', 'FUSE', 6, 'UNIT'),
('BARANG07', 'RELAY', 6, 'UNIT'),
('BARANG08', 'EKSPANSI', 0, 'UNIT'),
('BARANG09', 'MOTOR FAN', 3, 'UNIT'),
('BARANG10', 'MODUL PCB', 7, 'UNIT'),
('BARANG11', 'MOTOR SWING', 4, 'UNIT'),
('BARANG02', 'KAPASITOR 25 UF', 4, 'UNIT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sparepart_keluar`
--

CREATE TABLE `tb_sparepart_keluar` (
  `Nomor_keluar` varchar(8) NOT NULL,
  `Tanggal_keluar` date NOT NULL,
  `Nomor_permintaan` varchar(8) NOT NULL,
  `Kode_barang` varchar(8) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sparepart_masuk`
--

CREATE TABLE `tb_sparepart_masuk` (
  `Nomor_masuk` varchar(8) NOT NULL,
  `Tanggal_masuk` date NOT NULL,
  `Kode_barang` varchar(8) NOT NULL,
  `Nomor_pembelian` varchar(8) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `kategori` enum('admin','pimpinan') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `kategori`) VALUES
('pimpinan', '123', 'pimpinan'),
('bagus', 'bagus', 'admin'),
('sari', 'sari', 'admin'),
('amor', 'amor', 'admin'),
('burhan', 'burhan', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_do`
--
ALTER TABLE `tb_do`
  ADD PRIMARY KEY (`Nomor_DO`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`Nomor_pembelian`);

--
-- Indexes for table `tb_permintaan`
--
ALTER TABLE `tb_permintaan`
  ADD PRIMARY KEY (`No_permintaan`);

--
-- Indexes for table `tb_sparepart`
--
ALTER TABLE `tb_sparepart`
  ADD PRIMARY KEY (`Kode_barang`);

--
-- Indexes for table `tb_sparepart_keluar`
--
ALTER TABLE `tb_sparepart_keluar`
  ADD PRIMARY KEY (`Nomor_keluar`);

--
-- Indexes for table `tb_sparepart_masuk`
--
ALTER TABLE `tb_sparepart_masuk`
  ADD PRIMARY KEY (`Nomor_masuk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
