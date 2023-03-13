-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 07:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_transaksi`
--

CREATE TABLE `jumlah_transaksi` (
  `id_jumlah` int(11) NOT NULL,
  `id_outletzzzs` int(255) DEFAULT NULL,
  `total_transaksi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jumlah_transaksi`
--

INSERT INTO `jumlah_transaksi` (`id_jumlah`, `id_outletzzzs`, `total_transaksi`) VALUES
(1, 1, '50000');

-- --------------------------------------------------------

--
-- Table structure for table `log_active`
--

CREATE TABLE `log_active` (
  `id_log` int(11) NOT NULL,
  `id_users` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_active`
--

INSERT INTO `log_active` (`id_log`, `id_users`, `status`) VALUES
(1, '1', 'Menambah Pelanggan'),
(2, '1', 'Menambah Outlet'),
(3, '1', 'Menambah Paket Laundry'),
(4, '1', 'Melakukan Tambah Transaksi');

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `alamat_outlet` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `no_telp`) VALUES
(1, 'Chong Longsss', 'Jl.Semestas', '081221209777');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `id_outlet` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `jenis`, `id_outlet`, `harga`) VALUES
(1, 'Kiloan Mahal', 'Kiloan', '1', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pel`, `alamat`, `no_telp`) VALUES
(1, 'Dimas', 'Jl.Citra', '098');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `hargaz` varchar(255) NOT NULL,
  `outlet_png` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `outlet` varchar(255) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `pelangganss` varchar(255) NOT NULL,
  `tanggal_transaksi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `jenis_pakets` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `tanggal_bayar` varchar(255) NOT NULL,
  `harga_paket` varchar(255) NOT NULL,
  `batas_waktu` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` date NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `outlet`, `nama_member`, `pelangganss`, `tanggal_transaksi`, `status`, `pembayaran`, `jenis_pakets`, `berat`, `tanggal_bayar`, `harga_paket`, `batas_waktu`, `updated_at`, `created_at`, `nama_paket`, `total_bayar`, `penanggung_jawab`) VALUES
(1, '1', ' Dimas', 'L1 : Dimas', '2023-03-13', 'Diproses', 'Dibayar', 'Kiloan Mahal', '3', '2023-03-13', '50000', '2023-03-15', '2023-03-12 21:49:03', '2023-03-13', 'Kiloan Mahal:50000', '150000', 'miki');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `nama_members` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `outlet_nama` varchar(255) NOT NULL,
  `batas_waktu` varchar(255) NOT NULL,
  `jenis_paket` varchar(255) NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `tanggal_bayar` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `nama_members`, `berat`, `outlet_nama`, `batas_waktu`, `jenis_paket`, `total_bayar`, `tanggal_bayar`, `updated_at`, `created_at`) VALUES
(1, 'L1 : Dimas', '3', '1', '2023-03-15', 'Kiloan Mahal:50000', '150000', '2023-03-13', '2023-03-12 21:49:03', '2023-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_pengguna`, `nama_pengguna`, `role`, `email`, `password`) VALUES
(1, 'miki', 'admin', 'miki@gmail.com', '$2a$12$wx0DT07vxPu.2Iz8LvaS0u4ST5Dn0pehR5kMmWcK4ofb7.JDJY4Ci');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jumlah_transaksi`
--
ALTER TABLE `jumlah_transaksi`
  ADD PRIMARY KEY (`id_jumlah`);

--
-- Indexes for table `log_active`
--
ALTER TABLE `log_active`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD UNIQUE KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jumlah_transaksi`
--
ALTER TABLE `jumlah_transaksi`
  MODIFY `id_jumlah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_active`
--
ALTER TABLE `log_active`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
