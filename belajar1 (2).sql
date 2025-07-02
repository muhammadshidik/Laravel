-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2025 pada 10.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `counts`
--

CREATE TABLE `counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(25) DEFAULT NULL,
  `angka1` decimal(10,2) DEFAULT NULL,
  `angka2` decimal(10,2) DEFAULT NULL,
  `hasil` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Reihan Perdana', '085710590044', 'Jakarta Utara', '2025-06-30 22:10:42', '2025-07-01 21:49:28'),
(2, 'Muhammad Siddiq', '089684758768', 'Jakarta Timur', '2025-07-01 21:47:59', '2025-07-01 21:49:18'),
(3, 'Abdul Faqih', '085710590044', 'Jakarta Barat', '2025-07-01 21:49:52', '2025-07-01 21:49:52'),
(4, 'Agra Saputra', '085710590044', 'Sawangan', '2025-07-01 21:50:12', '2025-07-01 21:50:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_23_022105_create_counts_table', 1),
(5, '2025_06_25_063755_create_services_table', 1),
(6, '2025_06_30_012513_create_levels_table', 1),
(7, '2025_07_01_024126_create_customers_table', 2),
(8, '2025_07_01_024304_create_trans_orderes_table', 3),
(9, '2025_07_01_024410_create_trans_details_table', 4),
(10, '2025_07_02_020742_create_trans_orders_table', 1),
(11, '2025_07_02_020912_create_trans_details_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MIjz7SmQZH5CDLs69wUlG5tV5l1RR6BRsIHlR1Wg', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia2xJaHJjRjdMN1FTU2NKcEo0RHJqYkpIWlpuUVY0Q1ZtOEdncTRKQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90cmFucy8xNyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1751445099);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_details`
--

CREATE TABLE `trans_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_trans` bigint(20) UNSIGNED NOT NULL,
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trans_details`
--

INSERT INTO `trans_details` (`id`, `id_trans`, `id_service`, `qty`, `subtotal`, `note`, `created_at`, `updated_at`) VALUES
(3, 17, 4, 13, 104000, NULL, '2025-07-01 22:08:31', '2025-07-01 22:08:31'),
(4, 18, 4, 1, 8000, NULL, '2025-07-01 22:10:08', '2025-07-01 22:10:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_orders`
--

CREATE TABLE `trans_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(30) NOT NULL,
  `order_end_date` date NOT NULL,
  `order_status` tinyint(4) DEFAULT 0,
  `order_pay` int(11) DEFAULT NULL,
  `order_change` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trans_orders`
--

INSERT INTO `trans_orders` (`id`, `id_customer`, `order_code`, `order_end_date`, `order_status`, `order_pay`, `order_change`, `total`, `created_at`, `updated_at`) VALUES
(17, 3, 'TR-02072025-001', '2025-07-02', 0, NULL, NULL, NULL, '2025-07-01 22:08:31', '2025-07-01 22:08:31'),
(18, 4, 'TR-02072025-001', '2025-07-25', 0, NULL, NULL, NULL, '2025-07-01 22:10:08', '2025-07-01 22:10:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_of_services`
--

CREATE TABLE `type_of_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(35) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `type_of_services`
--

INSERT INTO `type_of_services` (`id`, `service_name`, `price`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Hanya Cuci', 5000, 'service hanya cuci reguler', NULL, NULL, NULL),
(3, 'Hanya Gosok', 4000, 'service ini hanya gosok reguler', NULL, NULL, NULL),
(4, 'Cuci dan Gosok', 8000, 'service hanya cuci reguler', NULL, NULL, NULL),
(5, 'Hanya Cuci', 5000, 'service hanya cuci reguler', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$C9a7qsSpVTUuvHOXIMQF0Os4HfK1ZgQZr17CjTBolUAc6pJn6dXIS', NULL, '2025-06-30 21:25:56', '2025-06-30 21:25:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `trans_details`
--
ALTER TABLE `trans_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_details_id_trans_foreign` (`id_trans`),
  ADD KEY `trans_details_id_service_foreign` (`id_service`);

--
-- Indeks untuk tabel `trans_orders`
--
ALTER TABLE `trans_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_orders_id_customer_foreign` (`id_customer`);

--
-- Indeks untuk tabel `type_of_services`
--
ALTER TABLE `type_of_services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `counts`
--
ALTER TABLE `counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `trans_details`
--
ALTER TABLE `trans_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `trans_orders`
--
ALTER TABLE `trans_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `type_of_services`
--
ALTER TABLE `type_of_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `trans_details`
--
ALTER TABLE `trans_details`
  ADD CONSTRAINT `trans_details_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `type_of_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trans_details_id_trans_foreign` FOREIGN KEY (`id_trans`) REFERENCES `trans_orders` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `trans_orders`
--
ALTER TABLE `trans_orders`
  ADD CONSTRAINT `trans_orders_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
