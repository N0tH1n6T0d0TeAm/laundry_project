-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 08:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `alamat_outlet` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `no_telp`) VALUES
(2, 'Chong Longsss', 'Jl.Semesta', '0987321234'),
(3, 'MiKSz', 'Jl.Alami', '09876');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `jenis`, `id_outlet`, `harga`) VALUES
(1, 'Kiloan Hemat', 'Dry Cleaning', '2', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pel`, `alamat`, `no_telp`) VALUES
(2, 'Johanes Sinalsal Purba', 'Jl.Citra', '08124554'),
(4, 'Dimas', 'Jl.Citra', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `hargaz` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `hargaz`, `alasan`, `created_at`, `updated_at`, `tanggal`) VALUES
(3, '5000', 'Beli Ac', '2023-02-22 00:00:00', '2023-02-22 01:56:44', '2023-02-22'),
(4, '2000', 'wsedd', '2023-02-24 00:00:00', '2023-02-23 20:37:20', '2023-02-24');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `outlet`, `nama_member`, `pelangganss`, `tanggal_transaksi`, `status`, `pembayaran`, `jenis_pakets`, `berat`, `tanggal_bayar`, `harga_paket`, `batas_waktu`, `updated_at`, `created_at`, `nama_paket`, `total_bayar`, `penanggung_jawab`) VALUES
(3, '3', ' Johanes Sinalsal Purba', 'L2 : Johanes Sinalsal Purba', '2023-02-21', 'Diproses', 'Dibayar', 'Kiloan Hemat', '2', '2023-02-21', '10000', '2023-02-23', '2023-02-21 01:19:17', '2023-02-21', 'Kiloan Hemat:10000', '20000', 'Dion'),
(4, '2', ' Dimas', 'L4 : Dimas', '2023-02-22', 'Selesai', 'Dibayar', 'Kiloan Hemat', '2', '2023-02-22', '10000', '2023-02-24', '2023-02-23 20:07:27', '2023-02-22', 'Kiloan Hemat:10000', '20000', 'Dion');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `nama_members`, `berat`, `outlet_nama`, `batas_waktu`, `jenis_paket`, `total_bayar`, `tanggal_bayar`, `updated_at`, `created_at`) VALUES
(2, 'L4 : Dimas', '2', '2', '2023-02-23', 'Kiloan Hemat:10000', '20000', '2023-02-21', '2023-02-21 01:18:42', '2023-02-21'),
(3, 'L2 : Johanes Sinalsal Purba', '2', '3', '2023-02-23', 'Kiloan Hemat:10000', '20000', '2023-02-21', '2023-02-21 01:19:17', '2023-02-21');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_pengguna`, `nama_pengguna`, `role`, `email`, `password`) VALUES
(1, 'Dion', 'admin', 'dion@mail.com', '$2y$10$14ZehiDAkXozY71wVHUCE.48md.SHD5lqB./55COE5NYyNzyEYLJi'),
(2, 'Lisa Safitri', 'kasir', 'lisa@mail.com', '$2y$10$ZgijsscGPsGFtvgWYbf8VuxY8mVOXrLQDdgryuWTM4MJoJiHmkK5i'),
(4, 'Eric', 'owner', 'rick@mail.co', '$2y$10$znrEV4LtzsmY7dvDQei0keuALhyUC3GCuNk0mSB66CKE7Bf3qaeJm'),
(5, 'Zyyzz Combat', 'admin', 'lol@mail.com', '$2y$10$Gfu5.h6kS7YbTIJ5ldLhy.T/EZ1P5RUSUZ6h.i8FbXhenQV98cmVu'),
(6, 'Theodore', 'kasir', 'theo@theo.com', '$2y$10$bnKuyV1qcQknf9X1C1mHVuzDu4JxBMQbw5VTSMOCFPOUaCb7xN6GO'),
(9, 'Nelo Angelo', 'owner', 'nelo@nelo.com', '$2y$10$B66EvgQHMGCSAgcsYcNaJeKk/SPgrzFAQdVJbNHw.edODt3iRpKhC');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
