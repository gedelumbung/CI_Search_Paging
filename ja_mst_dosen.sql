-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Oktober 2011 jam 10:34
-- Versi Server: 5.0.92
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smanwong_tutorial`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ja_mst_dosen`
--

CREATE TABLE IF NOT EXISTS `ja_mst_dosen` (
  `kode_dosen` varchar(5) NOT NULL,
  `NIDN` varchar(10) default NULL,
  `nama_dosen` varchar(30) default NULL,
  `alamat` text,
  `telp` varchar(20) default NULL,
  PRIMARY KEY  (`kode_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ja_mst_dosen`
--

INSERT INTO `ja_mst_dosen` (`kode_dosen`, `NIDN`, `nama_dosen`, `alamat`, `telp`) VALUES
('D001', '-', 'Drs. Eko Listiwikono, MM', '-', '-'),
('D002', '706065901', 'Drs. Mohamad Dedi', '-', '-'),
('D003', '730076801', 'Ir. H. Moch Najib', '-', '-'),
('D004', '-', 'Iman Santoso, SE, MM', '-', '-'),
('D005', '730076801', 'H. Chairul Anam, SE, S.Kom', '-', '-'),
('D006', '713077804', 'Hadiq, ST, M.Kom', '-', '-'),
('D007', '702067001', 'Slamet Siswanto Utomo, ST', '-', '-'),
('D008', '713078001', 'Dwi Yulian RL, S.Kom', '-', '-'),
('D009', '715096904', 'Tintin Harlina, S.Kom', '-', '-'),
('D010', '-', 'Sri Indriastuti, S.Kom', '-', '-'),
('D011', '711077704', 'Rahman Yulianto, S.Kom', '-', '-'),
('D012', '726067101', 'Djuniharto, SE', '-', '-'),
('D013', '708027201', 'Rudi Hartono, SE', '-', '-'),
('D014', '705018101', 'Milanoke Pramanik, S.Kom', '-', '-'),
('D015', '723127704', 'Ferdi Berlian, ST', '-', '-'),
('D016', '-', 'Mohammad, S.Pd', '-', '-'),
('D017', '724058102', 'Lukman Arief Manshur, M.Pdi', '-', '-'),
('D018', '-', 'Miftahul Arifin, M.Pd', '-', '-'),
('D019', '706117302', 'Haykal, S.Pd', '-', '-'),
('D020', '701085807', 'Sudjadi, MT', '-', '-'),
('D021', '-', 'Drs. Agus Riyono', '-', '-'),
('D022', '-', 'Drs. Ismudiarto', '-', '-'),
('D023', '708107502', 'Yoyon Arie Budi, ST', '-', '-'),
('D024', '-', 'Nur Ahmadi, ST', '-', '-'),
('D025', '-', 'Iroe Sukartono Mahdi, M.Pd', '-', '-'),
('D026', '713037801', 'Mohammad Fairuz Abadi, S.Pd', '-', '-'),
('D027', '723048302', 'Solehatin, S.Kom', '-', '-'),
('D028', '705037901', 'Eko Heri Susanto, S.Kom', '-', '-'),
('D029', '724107701', 'Rio Cundris Kurniawan, ST', '-', '-'),
('D030', '718128501', 'Abdul Haris, S.Kom', '-', '-'),
('D031', '718118502', 'Muhamad Erda Habiby, S.ST', '-', '-'),
('D033', '-', 'Bambang Priyono, S.Pd', '-', '-'),
('D034', '-', 'Dr. Lukman Hakim', '-', '-'),
('D035', '-', 'Faruk Alfiyan, S.Kom', '-', '-'),
('D036', '-', 'Sulaibatul Aslamiyah, S.Kom', '-', '-'),
('D100', '-', 'Team', '-', '-'),
('D200', '-', 'Konversi', '-', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
