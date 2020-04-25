-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 10:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblalita`
--

-- --------------------------------------------------------

--
-- Table structure for table `mdata_adv`
--

CREATE TABLE `mdata_adv` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `minimal_stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mdata_adv`
--

INSERT INTO `mdata_adv` (`id`, `supplier`, `nama_barang`, `sku`, `stok`, `minimal_stok`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sepatu Kulit Kece 40 Hitam', 'ADV-20042321', 0, 50, 240000, '2020-04-23 08:45:53', '2020-04-23 08:46:27'),
(2, 1, 'Sepatu Kulit Kece 40 Coklat', 'ADV-20042357', 0, 50, 250000, '2020-04-23 08:46:13', '2020-04-23 08:46:13'),
(3, 1, 'Sepatu Kulit Kece 41 Hitam', 'ADV-20042343', 0, 50, 250000, '2020-04-23 08:47:15', '2020-04-23 08:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `mdata_hobimen`
--

CREATE TABLE `mdata_hobimen` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `minimal_stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mdata_orokkids`
--

CREATE TABLE `mdata_orokkids` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `minimal_stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_19_155923_create_supplier', 1),
(4, '2020_03_29_164905_create_table_masterdata_adv', 1),
(5, '2020_03_29_164920_create_table_masterdata_hobimen', 1),
(6, '2020_03_29_164933_create_table_masterdata_orokkids', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier`
--

CREATE TABLE `m_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_supplier`
--

INSERT INTO `m_supplier` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'PT. Julians Indonesia', 'Jl. Cibaduyut No. 110 Bandung Jawa Barat , Indonesia 40239', '0225412312', '2020-04-23 08:37:32', '2020-04-23 08:37:32'),
(2, 'PT. Cahaya Fashion Indonesia', 'Jl. Buah Batu No.13 Bandung Jawa Barat , Indonesia', '0225242123', '2020-04-23 08:38:08', '2020-04-23 08:38:08'),
(3, 'CV. Rabbani Factory Cileunyi', 'Jl. Raya Cileunyi No.140 Kab.Bandung Jawa Barat , Indonesia', '0225932131', '2020-04-23 08:38:58', '2020-04-23 08:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Permana Sidik', 'admin@gmail.com', NULL, '$2y$10$pvGatxsDtT3oVqqGE3kYheXf9D22ei2nZJcVfaZAr1JVfexIaqx6K', NULL, '2020-04-23 08:36:35', '2020-04-23 08:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mdata_adv`
--
ALTER TABLE `mdata_adv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mdata_adv_supplier_foreign` (`supplier`);

--
-- Indexes for table `mdata_hobimen`
--
ALTER TABLE `mdata_hobimen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mdata_hobimen_supplier_foreign` (`supplier`);

--
-- Indexes for table `mdata_orokkids`
--
ALTER TABLE `mdata_orokkids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mdata_orokkids_supplier_foreign` (`supplier`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mdata_adv`
--
ALTER TABLE `mdata_adv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mdata_hobimen`
--
ALTER TABLE `mdata_hobimen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mdata_orokkids`
--
ALTER TABLE `mdata_orokkids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mdata_adv`
--
ALTER TABLE `mdata_adv`
  ADD CONSTRAINT `mdata_adv_supplier_foreign` FOREIGN KEY (`supplier`) REFERENCES `m_supplier` (`id`);

--
-- Constraints for table `mdata_hobimen`
--
ALTER TABLE `mdata_hobimen`
  ADD CONSTRAINT `mdata_hobimen_supplier_foreign` FOREIGN KEY (`supplier`) REFERENCES `m_supplier` (`id`);

--
-- Constraints for table `mdata_orokkids`
--
ALTER TABLE `mdata_orokkids`
  ADD CONSTRAINT `mdata_orokkids_supplier_foreign` FOREIGN KEY (`supplier`) REFERENCES `m_supplier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
