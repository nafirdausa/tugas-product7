-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Bulan Mei 2024 pada 00.05
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
-- Database: `msib-task-laravel5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akuns`
--

DROP TABLE IF EXISTS `akuns`;
CREATE TABLE IF NOT EXISTS `akuns` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `akuns_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akuns`
--

INSERT INTO `akuns` (`id`, `gender`, `nama_akun`, `email`, `umur`, `tgl_lahir`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'male', 'Admin Amandemy', 'adminamandemy@gmail.com', 23, '2016-11-01', 'Ruko Griya Cakra, Jl. Rtm Jl. Klp. Dua Raya No.36, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451', NULL, NULL),
(2, 'female', 'Pengguna Merchant', 'usermerchant@gmail.com', 11, '2023-08-17', 'Condongcatur, Depok, Kabupaten Sleman, atau tepatnya di sisi selatan Polda Daerah Istimewa Yogyakarta. Pakuwon Mall Jogja merupakan pusat perbelanjaan terluas di Yogyakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_01_042301_create_products_table', 2),
(6, '2024_05_07_173136_create_akuns_table', 3),
(7, '2024_05_07_173913_create_tokos_table', 4),
(8, '2024_05_07_175933_change_enum_values_in_akuns_table', 5),
(9, '2024_05_07_181821_add_akun_id_to_products_table', 6),
(10, '2024_05_07_194940_add_akunforeign_id_to_products_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` double(8,2) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` enum('Baru','Bekas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `akun_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_akun_id_foreign` (`akun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama`, `harga`, `stok`, `berat`, `gambar`, `kondisi`, `deskripsi`, `akun_id`, `created_at`, `updated_at`) VALUES
(5, 'Guci', 60000000, 5, 1000.00, 'https://img.ws.mms.shopee.co.id/b5e508247b5fc026a133922b085f4935', 'Baru', 'Guci Baru', 2, '2024-05-01 03:51:10', '2024-05-03 20:43:17'),
(6, 'Kucing Kampung', 500000, 1, 2000.00, 'https://awsimages.detik.net.id/community/media/visual/2022/11/07/kasus-kucing-mati-dilempar-batu-di-jakarta-kronologi-hingga-penyebab-1.jpeg?w=600&q=90', 'Bekas', 'kucinggg cemonggg ucul gemoy', 1, '2024-05-01 03:54:29', '2024-05-03 21:52:57'),
(10, 'Kucing Bloon', 900000, 1, 700.00, 'https://asset.kompas.com/crops/i_yXaNeS5PXQKJbSwaWcKiXWrIo=/12x3:831x549/750x500/data/photo/2021/06/27/60d8768168802.png', 'Baru', 'Katanya kucing putih itu bloon, tapi emg bener si T_T\r\nDijual segera kucingnya :v', 1, NULL, '2024-05-07 16:27:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokos`
--

DROP TABLE IF EXISTS `tokos`;
CREATE TABLE IF NOT EXISTS `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `produk_terbaik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `akun_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tokos_akun_id_foreign` (`akun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `rate`, `produk_terbaik`, `deskripsi`, `akun_id`, `created_at`, `updated_at`) VALUES
(1, 'Amandemy Play', 3, 'Kucing Ceria', 'Toko ini hanya menjual mainan-mainan berkualitas dengan harga yang terjangkau dan pas di kantong', 1, NULL, NULL),
(2, 'Merchant Store', 5, 'Chiki Chiki', 'As the biggest mall in Central Java and Yogyakarta, Pakuwon Mall Jogja offer magnificent mall design with comfortable zoning area.', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_akun_id_foreign` FOREIGN KEY (`akun_id`) REFERENCES `akuns` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tokos`
--
ALTER TABLE `tokos`
  ADD CONSTRAINT `tokos_akun_id_foreign` FOREIGN KEY (`akun_id`) REFERENCES `akuns` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
