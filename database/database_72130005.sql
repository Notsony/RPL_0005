-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2015 pada 06.33
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_72130005`
--
CREATE DATABASE IF NOT EXISTS `database_72130005` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database_72130005`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

DROP TABLE IF EXISTS `absen`;
CREATE TABLE IF NOT EXISTS `absen` (
`id_absen` int(11) NOT NULL,
  `nis` char(5) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `absen` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `nis`, `id_kelas`, `id_semester`, `tanggal`, `absen`) VALUES
(1, '13001', 11, 5, '2015-08-09', 'T'),
(2, '13005', 3, 5, '2015-08-12', 'I'),
(3, '13005', 21, 5, '2015-08-13', 'S'),
(4, '14017', 4, 6, '2015-12-01', 'I'),
(5, '14021', 5, 5, '2015-12-02', 'A'),
(6, '14021', 3, 4, '2015-12-04', 'S'),
(7, '14022', 11, 3, '2015-12-05', 'T'),
(8, '13003', 13, 7, '2015-12-09', 'A'),
(9, '15025', 1, 5, '2015-12-10', 'T'),
(10, '13002', 22, 6, '2015-12-10', 'I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `ruang` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `wali_kelas`, `ruang`) VALUES
(1, 'Bahasa Indonesia', 'Maria Alexandra S.Pd', 'Didaktos'),
(2, 'Bahasa Inggris', 'Kristina Manik S.Pd', 'Didaktos'),
(3, 'Matematika', 'Gerry Herbiyan S.Pd', 'Chara'),
(4, 'Agama', 'Dimas Aryo S.Pd', 'Agape'),
(5, 'Komputer', 'Wahyu Hadi S.Kom', 'Biblos'),
(11, 'Biologi', 'Christ Agus S.Si', 'Iama'),
(12, 'Kimia', 'Julia Rizky S.Si', 'Iama'),
(13, 'Fisika', 'Albertus Tandiono S.Si', 'Iama'),
(21, 'Ekonomi', 'Regina Fortuna S.E', 'Koionia'),
(22, 'Sosiologi', 'Venysia Purnomo S.Pd', 'Koionia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
`id_semester` int(11) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `thn_ajaran` varchar(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`, `thn_ajaran`) VALUES
(1, 'Ganjil', '2011/2012'),
(2, 'Genap', '2011/2012'),
(3, 'Ganjil', '2012/2013'),
(4, 'Genap', '2012/2013'),
(5, 'Ganjil', '2013/2014'),
(6, 'Genap', '2013/2014'),
(7, 'Ganjil', '2014/2015'),
(8, 'Genap', '2014/2015'),
(9, 'Ganjil', '2015/2016'),
(10, 'Genap', '2015/2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` char(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `angkatan` char(4) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `tgl_lahir`, `angkatan`, `alamat`) VALUES
('13001', 'Richardo Kirana', '2002-04-10', '2013', 'Jl. Rusak'),
('13002', 'Dismas Randhyan', '2002-03-20', '2013', 'Jl. Doto'),
('13003', 'Age Saputra', '2002-03-20', '2013', 'Jl. Gagal'),
('13005', 'Sony Aditya', '2002-12-25', '2013', 'Jl. Liberty'),
('14006', 'Agnes Oktamia', '2003-05-22', '2014', 'Jl. Line'),
('14017', 'Anggit Pradipta', '2003-10-14', '2014', 'Jl. Asus'),
('14021', 'Novan Andriyanto', '2003-03-19', '2014', 'Jl. Doto'),
('14022', 'Daniel Reinaldo', '2003-03-16', '2014', 'Jl. Doto'),
('15025', 'Vinton', '2004-07-09', '2015', 'Jl. Loli'),
('15030', 'Monika Suryadharma', '2004-02-01', '2015', 'Jl. Entahlah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
 ADD PRIMARY KEY (`id_absen`), ADD KEY `nis` (`nis`), ADD KEY `id_kelas` (`id_kelas`), ADD KEY `id_semester` (`id_semester`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`), ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
 ADD PRIMARY KEY (`id_semester`), ADD KEY `id_semester` (`id_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`), ADD UNIQUE KEY `nama` (`nama`), ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen`
--
ALTER TABLE `absen`
ADD CONSTRAINT `FK_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
ADD CONSTRAINT `FK_id_semester` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`),
ADD CONSTRAINT `FK_nis` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
