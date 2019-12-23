-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2019 pada 17.09
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rusunawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama`) VALUES
(1, 'Fakultas Ekonomika dan Bisnis'),
(2, 'Fakultas Hukum'),
(3, 'Fakultas Ilmu Budaya'),
(4, 'Fakultas Ilmu Sosial dan Ilmu Politik'),
(5, 'Fakultas Kedokteran'),
(6, 'Fakultas Kesehatan Masyarakat'),
(7, 'Fakultas Perikanan dan Ilmu Kelautan'),
(8, 'Fakultas Peternakan dan Pertanian'),
(9, 'Fakultas Sains dan Matematika'),
(10, 'Fakultas Teknik'),
(11, 'Fakultas Psikologi'),
(12, 'Sekolah Vokasi'),
(13, 'Sekolah Pascasarjana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `lantai` varchar(5) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`lantai`, `harga`) VALUES
('A2', 500000),
('A3', 500000),
('A4', 500000),
('B1', 1000000),
('B2', 700000),
('B3', 700000),
('B4', 700000),
('C2', 700000),
('C2_AC', 1500000),
('C3', 700000),
('C4', 700000),
('D1', 1250000),
('D2', 700000),
('D3', 700000),
('D4', 700000),
('E1', 1000000),
('E2', 900000),
('E3', 800000),
('E4', 750000),
('E5', 700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_gedung`
--

CREATE TABLE `jenis_gedung` (
  `gedung` varchar(1) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_gedung`
--

INSERT INTO `jenis_gedung` (`gedung`, `jenis_kelamin`) VALUES
('A', 'laki-laki'),
('B', 'laki-laki'),
('C', 'perempuan'),
('D', 'perempuan'),
('E', 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `gedung` varchar(1) NOT NULL,
  `lantai` varchar(5) NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`gedung`, `lantai`, `no_kamar`, `status`) VALUES
('A', 'A2', 'A2.01', 'available2'),
('A', 'A2', 'A2.02', 'available2'),
('A', 'A2', 'A2.03', 'available2'),
('A', 'A2', 'A2.04', 'available2'),
('A', 'A2', 'A2.05', 'available2'),
('A', 'A2', 'A2.06', 'available2'),
('A', 'A2', 'A2.07', 'available2'),
('A', 'A2', 'A2.08', 'available2'),
('A', 'A2', 'A2.09', 'available2'),
('A', 'A2', 'A2.10', 'available2'),
('A', 'A2', 'A2.11', 'available2'),
('A', 'A2', 'A2.12', 'available2'),
('A', 'A2', 'A2.13', 'available2'),
('A', 'A2', 'A2.14', 'available2'),
('A', 'A2', 'A2.15', 'available2'),
('A', 'A2', 'A2.16', 'available2'),
('A', 'A2', 'A2.17', 'available2'),
('A', 'A2', 'A2.18', 'available2'),
('A', 'A2', 'A2.19', 'available2'),
('A', 'A2', 'A2.20', 'available2'),
('A', 'A2', 'A2.21', 'available2'),
('A', 'A2', 'A2.22', 'available2'),
('A', 'A2', 'A2.23', 'available2'),
('A', 'A2', 'A2.24', 'available2'),
('A', 'A2', 'A2.25', 'available2'),
('A', 'A2', 'A2.26', 'available2'),
('A', 'A2', 'A2.27', 'available2'),
('A', 'A2', 'A2.28', 'available2'),
('A', 'A3', 'A3.29', 'available2'),
('A', 'A3', 'A3.30', 'available2'),
('A', 'A3', 'A3.31', 'available2'),
('A', 'A3', 'A3.32', 'available2'),
('A', 'A3', 'A3.33', 'available2'),
('A', 'A3', 'A3.34', 'available2'),
('A', 'A3', 'A3.35', 'available2'),
('A', 'A3', 'A3.36', 'available2'),
('A', 'A3', 'A3.37', 'available2'),
('A', 'A3', 'A3.38', 'available2'),
('A', 'A3', 'A3.39', 'available2'),
('A', 'A3', 'A3.40', 'available2'),
('A', 'A3', 'A3.41', 'available2'),
('A', 'A3', 'A3.42', 'available2'),
('A', 'A3', 'A3.43', 'available2'),
('A', 'A3', 'A3.44', 'available2'),
('A', 'A3', 'A3.45', 'available2'),
('A', 'A3', 'A3.46', 'available2'),
('A', 'A3', 'A3.47', 'available2'),
('A', 'A3', 'A3.48', 'available2'),
('A', 'A3', 'A3.49', 'available2'),
('A', 'A3', 'A3.50', 'available2'),
('A', 'A3', 'A3.51', 'available2'),
('A', 'A3', 'A3.52', 'available2'),
('A', 'A3', 'A3.53', 'available2'),
('A', 'A3', 'A3.54', 'available2'),
('A', 'A3', 'A3.55', 'available2'),
('A', 'A3', 'A3.56', 'available2'),
('A', 'A4', 'A4.57', 'available2'),
('A', 'A4', 'A4.58', 'available2'),
('A', 'A4', 'A4.59', 'available2'),
('A', 'A4', 'A4.60', 'available2'),
('A', 'A4', 'A4.61', 'available2'),
('A', 'A4', 'A4.62', 'available2'),
('A', 'A4', 'A4.63', 'available2'),
('A', 'A4', 'A4.64', 'available2'),
('A', 'A4', 'A4.65', 'available2'),
('A', 'A4', 'A4.66', 'available2'),
('A', 'A4', 'A4.67', 'available2'),
('A', 'A4', 'A4.68', 'available2'),
('A', 'A4', 'A4.69', 'available2'),
('A', 'A4', 'A4.70', 'available2'),
('A', 'A4', 'A4.71', 'available2'),
('A', 'A4', 'A4.72', 'available2'),
('A', 'A4', 'A4.73', 'available2'),
('A', 'A4', 'A4.74', 'available2'),
('A', 'A4', 'A4.75', 'available2'),
('A', 'A4', 'A4.76', 'available2'),
('A', 'A4', 'A4.77', 'available2'),
('A', 'A4', 'A4.78', 'available2'),
('A', 'A4', 'A4.79', 'available2'),
('A', 'A4', 'A4.80', 'available2'),
('A', 'A4', 'A4.81', 'available2'),
('A', 'A4', 'A4.82', 'available2'),
('A', 'A4', 'A4.83', 'available2'),
('A', 'A4', 'A4.84', 'available2'),
('B', 'B1', 'B1.01', 'available2'),
('B', 'B2', 'B2.01', 'available2'),
('B', 'B2', 'B2.02', 'available2'),
('B', 'B2', 'B2.03', 'available2'),
('B', 'B2', 'B2.04', 'available2'),
('B', 'B2', 'B2.05', 'available2'),
('B', 'B2', 'B2.06', 'available2'),
('B', 'B2', 'B2.07', 'available2'),
('B', 'B2', 'B2.08', 'available2'),
('B', 'B2', 'B2.09', 'available2'),
('B', 'B2', 'B2.10', 'available2'),
('B', 'B2', 'B2.11', 'available2'),
('B', 'B2', 'B2.12', 'available2'),
('B', 'B2', 'B2.13', 'available2'),
('B', 'B2', 'B2.14', 'available2'),
('B', 'B2', 'B2.15', 'available2'),
('B', 'B2', 'B2.16', 'available2'),
('B', 'B2', 'B2.17', 'available2'),
('B', 'B2', 'B2.18', 'available2'),
('B', 'B2', 'B2.19', 'available2'),
('B', 'B2', 'B2.20', 'available2'),
('B', 'B2', 'B2.21', 'available2'),
('B', 'B2', 'B2.22', 'available2'),
('B', 'B2', 'B2.23', 'available2'),
('B', 'B2', 'B2.24', 'available2'),
('B', 'B2', 'B2.25', 'available2'),
('B', 'B2', 'B2.26', 'available2'),
('B', 'B2', 'B2.27', 'available2'),
('B', 'B2', 'B2.28', 'available2'),
('B', 'B2', 'B2.29', 'available2'),
('B', 'B2', 'B2.30', 'available2'),
('B', 'B2', 'B2.31', 'available2'),
('B', 'B2', 'B2.32', 'available2'),
('B', 'B3', 'B3.33', 'available2'),
('B', 'B3', 'B3.34', 'available2'),
('B', 'B3', 'B3.35', 'available2'),
('B', 'B3', 'B3.36', 'available2'),
('B', 'B3', 'B3.37', 'available2'),
('B', 'B3', 'B3.38', 'available2'),
('B', 'B3', 'B3.39', 'available2'),
('B', 'B3', 'B3.40', 'available2'),
('B', 'B3', 'B3.41', 'available2'),
('B', 'B3', 'B3.42', 'available2'),
('B', 'B3', 'B3.43', 'available2'),
('B', 'B3', 'B3.44', 'available2'),
('B', 'B3', 'B3.45', 'available2'),
('B', 'B3', 'B3.46', 'available2'),
('B', 'B3', 'B3.47', 'available2'),
('B', 'B3', 'B3.48', 'available2'),
('B', 'B3', 'B3.49', 'available2'),
('B', 'B3', 'B3.50', 'available2'),
('B', 'B3', 'B3.51', 'available2'),
('B', 'B3', 'B3.52', 'available2'),
('B', 'B3', 'B3.53', 'available2'),
('B', 'B3', 'B3.54', 'available2'),
('B', 'B3', 'B3.55', 'available2'),
('B', 'B3', 'B3.56', 'available2'),
('B', 'B3', 'B3.57', 'available2'),
('B', 'B3', 'B3.58', 'available2'),
('B', 'B3', 'B3.59', 'available2'),
('B', 'B3', 'B3.60', 'available2'),
('B', 'B3', 'B3.61', 'available2'),
('B', 'B3', 'B3.62', 'available2'),
('B', 'B3', 'B3.63', 'available2'),
('B', 'B3', 'B3.64', 'available2'),
('B', 'B4', 'B4.65', 'available2'),
('B', 'B4', 'B4.66', 'available2'),
('B', 'B4', 'B4.67', 'available2'),
('B', 'B4', 'B4.68', 'available2'),
('B', 'B4', 'B4.69', 'available2'),
('B', 'B4', 'B4.70', 'available2'),
('B', 'B4', 'B4.71', 'available2'),
('B', 'B4', 'B4.72', 'available2'),
('B', 'B4', 'B4.73', 'available2'),
('B', 'B4', 'B4.74', 'available2'),
('B', 'B4', 'B4.75', 'available2'),
('B', 'B4', 'B4.76', 'available2'),
('B', 'B4', 'B4.77', 'available2'),
('B', 'B4', 'B4.78', 'available2'),
('B', 'B4', 'B4.79', 'available2'),
('B', 'B4', 'B4.80', 'available2'),
('B', 'B4', 'B4.81', 'available2'),
('B', 'B4', 'B4.82', 'available2'),
('B', 'B4', 'B4.83', 'available2'),
('B', 'B4', 'B4.84', 'available2'),
('B', 'B4', 'B4.85', 'available2'),
('B', 'B4', 'B4.86', 'available2'),
('B', 'B4', 'B4.87', 'available2'),
('B', 'B4', 'B4.88', 'available2'),
('B', 'B4', 'B4.89', 'available2'),
('B', 'B4', 'B4.90', 'available2'),
('B', 'B4', 'B4.91', 'available2'),
('B', 'B4', 'B4.92', 'available2'),
('B', 'B4', 'B4.93', 'available2'),
('B', 'B4', 'B4.94', 'available2'),
('B', 'B4', 'B4.95', 'available2'),
('B', 'B4', 'B4.96', 'available2'),
('C', 'C2', 'C2.01', 'available2'),
('C', 'C2', 'C2.02', 'available2'),
('C', 'C2', 'C2.03', 'available2'),
('C', 'C2', 'C2.04', 'available2'),
('C', 'C2', 'C2.05', 'available2'),
('C', 'C2', 'C2.06', 'available2'),
('C', 'C2', 'C2.07', 'available2'),
('C', 'C2', 'C2.08', 'available2'),
('C', 'C2_AC', 'C2.09', 'available2'),
('C', 'C2_AC', 'C2.10', 'available2'),
('C', 'C2_AC', 'C2.11', 'available2'),
('C', 'C2_AC', 'C2.12', 'available2'),
('C', 'C2_AC', 'C2.13', 'available2'),
('C', 'C2_AC', 'C2.14', 'available2'),
('C', 'C2_AC', 'C2.15', 'available2'),
('C', 'C2_AC', 'C2.16', 'available2'),
('C', 'C2', 'C2.17', 'available2'),
('C', 'C2', 'C2.18', 'available2'),
('C', 'C2', 'C2.19', 'available2'),
('C', 'C2', 'C2.20', 'available2'),
('C', 'C2', 'C2.21', 'available2'),
('C', 'C2', 'C2.22', 'available2'),
('C', 'C2', 'C2.23', 'available2'),
('C', 'C2', 'C2.24', 'available2'),
('C', 'C2', 'C2.25', 'available2'),
('C', 'C2', 'C2.26', 'available2'),
('C', 'C2', 'C2.27', 'available2'),
('C', 'C2', 'C2.28', 'available2'),
('C', 'C2', 'C2.29', 'available2'),
('C', 'C2', 'C2.30', 'available2'),
('C', 'C2', 'C2.31', 'available2'),
('C', 'C2', 'C2.32', 'available2'),
('C', 'C3', 'C3.01', 'available2'),
('C', 'C3', 'C3.02', 'available2'),
('C', 'C3', 'C3.03', 'available2'),
('C', 'C3', 'C3.04', 'available2'),
('C', 'C3', 'C3.05', 'available2'),
('C', 'C3', 'C3.06', 'available2'),
('C', 'C3', 'C3.07', 'available2'),
('C', 'C3', 'C3.08', 'available2'),
('C', 'C3', 'C3.09', 'available2'),
('C', 'C3', 'C3.10', 'available2'),
('C', 'C3', 'C3.11', 'available2'),
('C', 'C3', 'C3.12', 'available2'),
('C', 'C3', 'C3.13', 'available2'),
('C', 'C3', 'C3.14', 'available2'),
('C', 'C3', 'C3.15', 'available2'),
('C', 'C3', 'C3.16', 'available2'),
('C', 'C3', 'C3.17', 'available2'),
('C', 'C3', 'C3.18', 'available2'),
('C', 'C3', 'C3.19', 'available2'),
('C', 'C3', 'C3.20', 'available2'),
('C', 'C3', 'C3.21', 'available2'),
('C', 'C3', 'C3.22', 'available2'),
('C', 'C3', 'C3.23', 'available2'),
('C', 'C3', 'C3.24', 'available2'),
('C', 'C3', 'C3.25', 'available2'),
('C', 'C3', 'C3.26', 'available2'),
('C', 'C3', 'C3.27', 'available2'),
('C', 'C3', 'C3.28', 'available2'),
('C', 'C3', 'C3.29', 'available2'),
('C', 'C3', 'C3.30', 'available2'),
('C', 'C3', 'C3.31', 'available2'),
('C', 'C3', 'C3.32', 'available2'),
('C', 'C4', 'C4.01', 'available2'),
('C', 'C4', 'C4.02', 'available2'),
('C', 'C4', 'C4.03', 'available2'),
('C', 'C4', 'C4.04', 'available2'),
('C', 'C4', 'C4.05', 'available2'),
('C', 'C4', 'C4.06', 'available2'),
('C', 'C4', 'C4.07', 'available2'),
('C', 'C4', 'C4.08', 'available2'),
('C', 'C4', 'C4.09', 'available2'),
('C', 'C4', 'C4.10', 'available2'),
('C', 'C4', 'C4.11', 'available2'),
('C', 'C4', 'C4.12', 'available2'),
('C', 'C4', 'C4.13', 'available2'),
('C', 'C4', 'C4.14', 'available2'),
('C', 'C4', 'C4.15', 'available2'),
('C', 'C4', 'C4.16', 'available2'),
('C', 'C4', 'C4.17', 'available2'),
('C', 'C4', 'C4.18', 'available2'),
('C', 'C4', 'C4.19', 'available2'),
('C', 'C4', 'C4.20', 'available2'),
('C', 'C4', 'C4.21', 'available2'),
('C', 'C4', 'C4.22', 'available2'),
('C', 'C4', 'C4.23', 'available2'),
('C', 'C4', 'C4.24', 'available2'),
('C', 'C4', 'C4.25', 'available2'),
('C', 'C4', 'C4.26', 'available2'),
('C', 'C4', 'C4.27', 'available2'),
('C', 'C4', 'C4.28', 'available2'),
('C', 'C4', 'C4.29', 'available2'),
('C', 'C4', 'C4.30', 'available2'),
('C', 'C4', 'C4.31', 'available2'),
('C', 'C4', 'C4.32', 'available2'),
('D', 'D1', 'D1.01', 'available2'),
('D', 'D1', 'D1.02', 'available2'),
('D', 'D1', 'D1.03', 'available2'),
('D', 'D1', 'D1.04', 'available2'),
('D', 'D1', 'D1.05', 'available2'),
('D', 'D1', 'D1.06', 'available2'),
('D', 'D1', 'D1.07', 'available2'),
('D', 'D2', 'D2.01', 'available2'),
('D', 'D2', 'D2.02', 'available2'),
('D', 'D2', 'D2.03', 'available2'),
('D', 'D2', 'D2.04', 'available2'),
('D', 'D2', 'D2.05', 'available2'),
('D', 'D2', 'D2.06', 'available2'),
('D', 'D2', 'D2.07', 'available2'),
('D', 'D2', 'D2.08', 'available2'),
('D', 'D2', 'D2.09', 'available2'),
('D', 'D2', 'D2.10', 'available2'),
('D', 'D2', 'D2.11', 'available2'),
('D', 'D2', 'D2.12', 'available2'),
('D', 'D2', 'D2.13', 'available2'),
('D', 'D2', 'D2.14', 'available2'),
('D', 'D2', 'D2.15', 'available2'),
('D', 'D2', 'D2.16', 'available2'),
('D', 'D2', 'D2.17', 'available2'),
('D', 'D2', 'D2.18', 'available2'),
('D', 'D2', 'D2.19', 'available2'),
('D', 'D2', 'D2.20', 'available2'),
('D', 'D2', 'D2.21', 'available2'),
('D', 'D2', 'D2.22', 'available2'),
('D', 'D2', 'D2.23', 'available2'),
('D', 'D2', 'D2.24', 'available2'),
('D', 'D2', 'D2.25', 'available2'),
('D', 'D2', 'D2.26', 'available2'),
('D', 'D2', 'D2.27', 'available2'),
('D', 'D2', 'D2.28', 'available2'),
('D', 'D2', 'D2.29', 'available2'),
('D', 'D2', 'D2.30', 'available2'),
('D', 'D2', 'D2.31', 'available2'),
('D', 'D2', 'D2.32', 'available2'),
('D', 'D3', 'D3.01', 'available2'),
('D', 'D3', 'D3.02', 'available2'),
('D', 'D3', 'D3.03', 'available2'),
('D', 'D3', 'D3.04', 'available2'),
('D', 'D3', 'D3.05', 'available2'),
('D', 'D3', 'D3.06', 'available2'),
('D', 'D3', 'D3.07', 'available2'),
('D', 'D3', 'D3.08', 'available2'),
('D', 'D3', 'D3.09', 'available2'),
('D', 'D3', 'D3.10', 'available2'),
('D', 'D3', 'D3.11', 'available2'),
('D', 'D3', 'D3.12', 'available2'),
('D', 'D3', 'D3.13', 'available2'),
('D', 'D3', 'D3.14', 'available2'),
('D', 'D3', 'D3.15', 'available2'),
('D', 'D3', 'D3.16', 'available2'),
('D', 'D3', 'D3.17', 'available2'),
('D', 'D3', 'D3.18', 'available2'),
('D', 'D3', 'D3.19', 'available2'),
('D', 'D3', 'D3.20', 'available2'),
('D', 'D3', 'D3.21', 'available2'),
('D', 'D3', 'D3.22', 'available2'),
('D', 'D3', 'D3.23', 'available2'),
('D', 'D3', 'D3.24', 'available2'),
('D', 'D3', 'D3.25', 'available2'),
('D', 'D3', 'D3.26', 'available2'),
('D', 'D3', 'D3.27', 'available2'),
('D', 'D3', 'D3.28', 'available2'),
('D', 'D3', 'D3.29', 'available2'),
('D', 'D3', 'D3.30', 'available2'),
('D', 'D3', 'D3.31', 'available2'),
('D', 'D3', 'D3.32', 'available2'),
('D', 'D4', 'D4.01', 'available2'),
('D', 'D4', 'D4.02', 'available2'),
('D', 'D4', 'D4.03', 'available2'),
('D', 'D4', 'D4.04', 'available2'),
('D', 'D4', 'D4.05', 'available2'),
('D', 'D4', 'D4.06', 'available2'),
('D', 'D4', 'D4.07', 'available2'),
('D', 'D4', 'D4.08', 'available2'),
('D', 'D4', 'D4.09', 'available2'),
('D', 'D4', 'D4.10', 'available2'),
('D', 'D4', 'D4.11', 'available2'),
('D', 'D4', 'D4.12', 'available2'),
('D', 'D4', 'D4.13', 'available2'),
('D', 'D4', 'D4.14', 'available2'),
('D', 'D4', 'D4.15', 'available2'),
('D', 'D4', 'D4.16', 'available2'),
('D', 'D4', 'D4.17', 'available2'),
('D', 'D4', 'D4.18', 'available2'),
('D', 'D4', 'D4.19', 'available2'),
('D', 'D4', 'D4.20', 'available2'),
('D', 'D4', 'D4.21', 'available2'),
('D', 'D4', 'D4.22', 'available2'),
('D', 'D4', 'D4.23', 'available2'),
('D', 'D4', 'D4.24', 'available2'),
('D', 'D4', 'D4.25', 'available2'),
('D', 'D4', 'D4.26', 'available2'),
('D', 'D4', 'D4.27', 'available2'),
('D', 'D4', 'D4.28', 'available2'),
('D', 'D4', 'D4.29', 'available2'),
('D', 'D4', 'D4.30', 'available2'),
('D', 'D4', 'D4.31', 'available2'),
('D', 'D4', 'D4.32', 'available2'),
('E', 'E1', 'E1.01', 'available2'),
('E', 'E1', 'E1.02', 'available2'),
('E', 'E1', 'E1.03', 'available2'),
('E', 'E1', 'E1.04', 'available2'),
('E', 'E1', 'E1.05', 'available2'),
('E', 'E1', 'E1.06', 'available2'),
('E', 'E1', 'E1.07', 'available2'),
('E', 'E1', 'E1.08', 'available2'),
('E', 'E1', 'E1.09', 'available2'),
('E', 'E1', 'E1.10', 'available2'),
('E', 'E1', 'E1.11', 'available2'),
('E', 'E1', 'E1.12', 'available2'),
('E', 'E1', 'E1.13', 'available2'),
('E', 'E1', 'E1.14', 'available2'),
('E', 'E1', 'E1.15', 'available2'),
('E', 'E1', 'E1.16', 'available2'),
('E', 'E1', 'E1.17', 'available2'),
('E', 'E1', 'E1.18', 'available2'),
('E', 'E1', 'E1.19', 'available2'),
('E', 'E2', 'E2.01', 'available2'),
('E', 'E2', 'E2.02', 'available2'),
('E', 'E2', 'E2.03', 'available2'),
('E', 'E2', 'E2.04', 'available2'),
('E', 'E2', 'E2.05', 'available2'),
('E', 'E2', 'E2.06', 'available2'),
('E', 'E2', 'E2.07', 'available2'),
('E', 'E2', 'E2.08', 'available2'),
('E', 'E2', 'E2.09', 'available2'),
('E', 'E2', 'E2.10', 'available2'),
('E', 'E2', 'E2.11', 'available2'),
('E', 'E2', 'E2.12', 'available2'),
('E', 'E2', 'E2.13', 'available2'),
('E', 'E2', 'E2.14', 'available2'),
('E', 'E2', 'E2.15', 'available2'),
('E', 'E2', 'E2.16', 'available2'),
('E', 'E2', 'E2.17', 'available2'),
('E', 'E2', 'E2.18', 'available2'),
('E', 'E2', 'E2.19', 'available2'),
('E', 'E2', 'E2.20', 'available2'),
('E', 'E2', 'E2.21', 'available2'),
('E', 'E2', 'E2.22', 'available2'),
('E', 'E2', 'E2.23', 'available2'),
('E', 'E2', 'E2.24', 'available2'),
('E', 'E3', 'E3.01', 'available2'),
('E', 'E3', 'E3.02', 'available2'),
('E', 'E3', 'E3.03', 'available2'),
('E', 'E3', 'E3.04', 'available2'),
('E', 'E3', 'E3.05', 'available2'),
('E', 'E3', 'E3.06', 'available2'),
('E', 'E3', 'E3.07', 'available2'),
('E', 'E3', 'E3.08', 'available2'),
('E', 'E3', 'E3.09', 'available2'),
('E', 'E3', 'E3.10', 'available2'),
('E', 'E3', 'E3.11', 'available2'),
('E', 'E3', 'E3.12', 'available2'),
('E', 'E3', 'E3.13', 'available2'),
('E', 'E3', 'E3.14', 'available2'),
('E', 'E3', 'E3.15', 'available2'),
('E', 'E3', 'E3.16', 'available2'),
('E', 'E3', 'E3.17', 'available2'),
('E', 'E3', 'E3.18', 'available2'),
('E', 'E3', 'E3.19', 'available2'),
('E', 'E3', 'E3.20', 'available2'),
('E', 'E3', 'E3.21', 'available2'),
('E', 'E3', 'E3.22', 'available2'),
('E', 'E3', 'E3.23', 'available2'),
('E', 'E3', 'E3.24', 'available2'),
('E', 'E4', 'E4.01', 'available2'),
('E', 'E4', 'E4.02', 'available2'),
('E', 'E4', 'E4.03', 'available2'),
('E', 'E4', 'E4.04', 'available2'),
('E', 'E4', 'E4.05', 'available2'),
('E', 'E4', 'E4.06', 'available2'),
('E', 'E4', 'E4.07', 'available2'),
('E', 'E4', 'E4.08', 'available2'),
('E', 'E4', 'E4.09', 'available2'),
('E', 'E4', 'E4.10', 'available2'),
('E', 'E4', 'E4.11', 'available2'),
('E', 'E4', 'E4.12', 'available2'),
('E', 'E4', 'E4.13', 'available2'),
('E', 'E4', 'E4.14', 'available2'),
('E', 'E4', 'E4.15', 'available2'),
('E', 'E4', 'E4.16', 'available2'),
('E', 'E4', 'E4.17', 'available2'),
('E', 'E4', 'E4.18', 'available2'),
('E', 'E4', 'E4.19', 'available2'),
('E', 'E4', 'E4.20', 'available2'),
('E', 'E4', 'E4.21', 'available2'),
('E', 'E4', 'E4.22', 'available2'),
('E', 'E4', 'E4.23', 'available2'),
('E', 'E4', 'E4.24', 'available2'),
('E', 'E5', 'E5.01', 'available2'),
('E', 'E5', 'E5.02', 'available2'),
('E', 'E5', 'E5.03', 'available2'),
('E', 'E5', 'E5.04', 'available2'),
('E', 'E5', 'E5.05', 'available2'),
('E', 'E5', 'E5.06', 'available2'),
('E', 'E5', 'E5.07', 'available2'),
('E', 'E5', 'E5.08', 'available2'),
('E', 'E5', 'E5.09', 'available2'),
('E', 'E5', 'E5.10', 'available2'),
('E', 'E5', 'E5.11', 'available2'),
('E', 'E5', 'E5.12', 'available2'),
('E', 'E5', 'E5.13', 'available2'),
('E', 'E5', 'E5.14', 'available2'),
('E', 'E5', 'E5.15', 'available2'),
('E', 'E5', 'E5.16', 'available2'),
('E', 'E5', 'E5.17', 'available2'),
('E', 'E5', 'E5.18', 'available2'),
('E', 'E5', 'E5.19', 'available2'),
('E', 'E5', 'E5.20', 'available2'),
('E', 'E5', 'E5.21', 'available2'),
('E', 'E5', 'E5.22', 'available2'),
('E', 'E5', 'E5.23', 'available2'),
('E', 'E5', 'E5.24', 'available2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_fakultas` int(2) NOT NULL,
  `id_prodi` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_fakultas`, `id_prodi`, `nama`) VALUES
(1, 101, 'S1 Manajemen'),
(1, 102, 'S1 Akuntansi'),
(1, 103, 'S1 Ekonomi'),
(1, 104, 'S1 Ekonomi Islam'),
(1, 105, 'S1 Kelas Internasional'),
(2, 201, 'S1 Hukum'),
(3, 301, 'S1 Sastra Inggris'),
(3, 302, 'S1 Sastra Indonesia'),
(3, 303, 'S1 Sejarah'),
(3, 304, 'S1 Ilmu Perpustakaan'),
(3, 305, 'S1 Bahasa dan Kebudayaan Jepang'),
(3, 306, 'S1 Antropologi Sosial'),
(4, 401, 'S1 Administrasi Bisnis'),
(4, 402, 'S1 Administrasi Publik'),
(4, 403, 'S1 Hubungan Internasional'),
(4, 404, 'S1 Ilmu Komunikasi'),
(4, 405, 'S1 Ilmu Pemerintahan'),
(5, 501, 'S1 Kedokteran'),
(5, 502, 'S1 Kedokteran Gigi'),
(5, 503, 'S1 Gizi'),
(5, 504, 'S1 Keperawatan'),
(6, 601, 'S1 Kesehatan Masyarakat'),
(7, 701, 'S1 Akuakultur'),
(7, 702, 'S1 Manajemen Sumber Daya Perairan'),
(7, 703, 'S1 Perikanan Tangkap'),
(7, 704, 'S1 Teknologi Hasil Perikanan'),
(7, 705, 'S1 Oseanografi'),
(7, 706, 'S1 Ilmu Kelautan'),
(8, 801, 'S1 Peternakan'),
(8, 802, 'S1 Agribisnis'),
(8, 803, 'S1 Agroekoteknologi'),
(8, 804, 'S1 Teknologi Pangan'),
(9, 901, 'S1 Matematika'),
(9, 902, 'S1 Kimia'),
(9, 903, 'S1 Fisika'),
(9, 904, 'S1 Biologi'),
(9, 905, 'S1 Statistika'),
(9, 906, 'S1 Informatika'),
(9, 907, 'S1 Bioteknologi'),
(10, 1001, 'S1 Teknik Arsitektur'),
(10, 1002, 'S1 Teknik Komputer'),
(10, 1003, 'S1 Teknik Perencanaan Wilayah dan Kota'),
(10, 1004, 'S1 Teknik Elektro'),
(10, 1005, 'S1 Teknik Geodesi'),
(10, 1006, 'S1 Teknik Geologi'),
(10, 1007, 'S1 Teknik Industri'),
(10, 1008, 'S1 Teknik Kimia'),
(10, 1009, 'S1 Teknik Lingkungan'),
(10, 1010, 'S1 Teknik Mesin'),
(10, 1011, 'S1 Teknik Perkapalan'),
(10, 1012, 'S1 Teknik Sipil'),
(11, 1101, 'S1 Psikologi'),
(12, 1201, 'D4 Teknologi Rekayasa Kimia Industri'),
(12, 1202, 'D4 Teknologi Rekayasa Otomasi'),
(12, 1203, 'D4 Rekayasa Perancangan Mekanik'),
(12, 1204, 'D4 Teknologi Rekayasa Konstruksi Perkapalan'),
(12, 1205, 'D4 Teknik Listrik Industri'),
(12, 1206, 'D3 Teknologi Kimia'),
(12, 1207, 'D3 Teknologi Elektronika'),
(12, 1208, 'D3 Teknologi Mesin'),
(12, 1209, 'D3 Teknologi Perancangan dan Konstruksi Kapal'),
(12, 1210, 'D3 Teknologi Instrumentasi'),
(12, 1211, 'D4 Perencanaan Tata Ruang dan Pertanahan'),
(12, 1212, 'D4 Teknik Infrastruktur Sipil dan Perancangan A'),
(12, 1213, 'D3 Teknologi Sipil'),
(12, 1214, 'D3 Perencanaan Tata Ruang Wilayah dan Kota'),
(12, 1215, 'D3 Gambar Arsitektur'),
(12, 1216, 'D3 Administrasi Pertanahan'),
(12, 1217, 'D4 Akuntansi Perpajakan'),
(12, 1218, 'D4 Manajemen dan Administrasi Logistik'),
(12, 1219, 'D3 Manajemen'),
(12, 1220, 'D3 Administrasi Pajak'),
(12, 1221, 'D3 Akuntansi'),
(12, 1222, 'D3 Usaha Budidaya Ternak'),
(12, 1223, 'D3 Manajemen Pemasaran'),
(12, 1224, 'D3 Keuangan Publik'),
(12, 1225, 'D3 Hubungan Masyarakat'),
(12, 1226, 'D3 Administrasi Perkantoran'),
(12, 1227, 'D4 Bahasa Asing dan Terapan'),
(12, 1228, 'D4 Informasi dan Humas'),
(12, 1229, 'D3 Perpustakaan dan Informasi'),
(12, 1230, 'D3 Kearsipan'),
(12, 1231, 'D3 Bahasa Inggris'),
(12, 1232, 'D3 Bahasa Jepang'),
(13, 1301, 'Doktor Ilmu Lingkungan'),
(13, 1302, 'Magister Ilmu Lingkungan'),
(13, 1303, 'Magister Epidemiologi'),
(13, 1304, 'Magister Sistem Informasi'),
(13, 1305, 'Magister Energi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`lantai`);

--
-- Indeks untuk tabel `jenis_gedung`
--
ALTER TABLE `jenis_gedung`
  ADD PRIMARY KEY (`gedung`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
