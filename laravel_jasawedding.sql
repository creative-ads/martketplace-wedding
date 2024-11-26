-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Jul 2023 pada 15.40
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_jasawedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wedding_packages_id` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `wedding_packages_id`, `id_agen`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 19, 'assets/gallery/3AK3TXPfsRAeDhQBz1m1QRBwddnjGURRaePQMq1g.jpg', NULL, '2022-10-21 22:55:53', '2022-10-21 22:57:25'),
(2, 1, 19, 'assets/gallery/HYJt5t8RIXbCcnF9J7mycIsjByNQGujWksKbWZfY.jpg', NULL, '2022-10-21 22:56:00', '2022-10-21 22:56:00'),
(3, 2, 0, 'assets/gallery/gMBPaBiYMHAqS6fpbxohCgJLHATwPAMvoKzvarTm.jpg', NULL, '2022-10-21 23:01:02', '2022-10-21 23:01:02'),
(4, 2, 0, 'assets/gallery/5XtDKeziKZE6NMDzM6nEB75904g6JD1pfDVq8HLo.jpg', NULL, '2022-10-21 23:01:29', '2022-10-21 23:01:29'),
(5, 2, 0, 'assets/gallery/vBRjhPW8fIzmwsXa5Gu5MFsrxw9V0IIhKu1r0O8e.jpg', NULL, '2022-10-21 23:02:12', '2022-10-21 23:02:12'),
(6, 3, 0, 'assets/gallery/8laSofHJql2EuGg7dG3pJDRSWVbnGcsUTQhZULGB.jpg', NULL, '2022-10-21 23:04:49', '2022-10-21 23:04:49'),
(7, 3, 0, 'assets/gallery/975aK4QcEvr671MSrtl54i74TTTBB0R7tRtPwSWf.jpg', NULL, '2022-10-21 23:06:32', '2022-10-21 23:06:32'),
(8, 3, 0, 'assets/gallery/4GyonZjzTbBpt3k9tosYKIxDcRzC6MJBijpI3ZK3.jpg', NULL, '2022-10-21 23:06:52', '2022-10-21 23:06:52'),
(9, 3, 0, 'assets/gallery/lHWVpTVxmMJH8hpk4oHe2XHoOM42d4sDgFYDsak3.jpg', NULL, '2022-10-21 23:07:10', '2022-10-21 23:07:10'),
(10, 4, 0, 'assets/gallery/Xd1Yo6yV01TI0ofKapJT4MIVgJWxEmFNjXPmnWQW.webp', NULL, '2022-10-22 04:49:11', '2022-10-22 04:49:11'),
(11, 4, 0, 'assets/gallery/aoIgSEn7dDGA6mFnExuYbuqsh7rHCBLvkByyk3nV.webp', NULL, '2022-10-22 04:49:22', '2022-10-22 04:49:22'),
(12, 5, 0, 'assets/gallery/BGZZ0zJ2g3eeaTiVslOP7SuucdKXtaABXcIPJvJB.jpg', NULL, '2022-10-22 04:53:48', '2022-10-22 04:53:48'),
(13, 5, 0, 'assets/gallery/aIvLLrCdNEUJ8DToMZynd4zWbYaGMkN59SGKVD30.jpg', NULL, '2022-10-22 04:53:56', '2022-10-22 04:53:56'),
(14, 5, 0, 'assets/gallery/jVWawPtOAna5leKEgfYMAFQ2W5y3ZiSfJZ0LArzO.jpg', NULL, '2022-10-22 04:54:03', '2022-10-22 04:54:03'),
(15, 6, 0, 'assets/gallery/WGXvImEWAu1OysSjn6GnbtL8dGBaUTmDLZEHRdCE.jpg', NULL, '2022-10-22 04:56:52', '2022-10-22 04:56:52'),
(16, 6, 0, 'assets/gallery/pyQ8FACqdiHSzKlCwN2aSnLxvCfY1FXVz7nL6nr7.jpg', NULL, '2022-10-22 04:57:59', '2022-10-22 04:57:59'),
(17, 7, 0, 'assets/gallery/FBnEuQWVAcHH0FzJ7hY3TV5h25emORntcNlrBEnP.jpg', NULL, '2022-10-22 04:59:57', '2022-10-22 04:59:57'),
(18, 6, 0, 'assets/gallery/4Ei2JMUEUOcsKUZIH6CpOoClKCHlO7NhBmkUfVqD.jpg', NULL, '2022-10-22 05:03:08', '2022-10-22 05:03:08'),
(19, 6, 0, 'assets/gallery/ptUsbPb91zTBqUuXGh18XE8bathhhXuJJlwFxow5.jpg', NULL, '2022-10-22 05:03:20', '2022-10-22 05:03:20'),
(20, 6, 0, 'assets/gallery/a41LUEwJLfV5zEnZDBUNWucZcGym8RoLGGNnI8Rn.jpg', NULL, '2022-10-22 05:03:27', '2022-10-22 05:03:27'),
(21, 6, 0, 'assets/gallery/FqYyHHC9mumUEF2LNTXZNsJIBTXktEhA4z26kbE7.jpg', '2022-11-20 09:54:07', '2022-10-22 05:03:38', '2022-11-20 09:54:07'),
(22, 8, 0, 'assets/gallery/t5xApDO6QhyJXNnOlsssa3ZjgmKzLOPdEXSaRX87.jpg', NULL, '2022-10-22 05:30:24', '2022-10-22 05:30:24'),
(23, 9, 0, 'assets/gallery/oEv5n6ztUqaOEoIX6xXvBalZjneYDVYPonWfwjx7.webp', NULL, '2022-11-21 00:07:41', '2022-11-21 00:07:41'),
(24, 9, 0, 'assets/gallery/7Q96Wfuq5LBEZDvtSbo1FBSgr0dqmxYBPhfuWwBv.jpg', NULL, '2022-11-21 00:11:18', '2022-11-21 00:11:18'),
(25, 9, 0, 'assets/gallery/kqZG5i5pmDMvJnUzstqQR7kiTp4g59SdoOBPGEC2.webp', NULL, '2022-11-21 00:11:26', '2022-11-21 00:11:26'),
(26, 9, 1, 'assets/gallery/XKZrhoqudPEYLTh3DHJe7ICynlOk8B0ZfFe5ntux.jpg', '2023-07-04 19:00:03', '2022-11-21 00:11:33', '2023-07-04 19:00:03'),
(32, 1, 19, 'public/vICrPSHDCHdiVWXIVCSXSuFy52PYC53yBRk2Ua1U.jpg', '2023-06-08 07:53:54', '2023-06-08 07:51:17', '2023-06-08 07:53:54'),
(33, 1, 19, 'assets/gallery/BR9G7UY0hQWdlRrGUoE37qqMRQpPa1jbn8TpENDu.jpg', '2023-06-08 07:57:36', '2023-06-08 07:54:18', '2023-06-08 07:57:36'),
(34, 1, 19, 'assets/gallery/YFuv9ZAro8tKvaPKPc84oolm0AQPk1KQrrzMbmPw.jpg', '2023-07-04 19:00:00', '2023-06-08 07:57:44', '2023-07-04 19:00:00'),
(35, 1, 19, 'assets/gallery/6.jpg', NULL, '2023-07-04 18:59:57', '2023-07-04 21:26:09'),
(36, 1, 19, 'assets/gallery/penjualan.png', '2023-07-11 14:28:24', '2023-07-11 14:28:13', '2023-07-11 14:28:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_27_150610_create_travel_packages_table', 1),
(5, '2019_10_27_152159_create_galleries_table', 1),
(6, '2019_10_27_152918_create_transactions_table', 1),
(7, '2019_10_27_153648_create_transaction_details_table', 1),
(8, '2019_10_27_171216_add_roles_field_to_users_table', 1),
(9, '2019_10_27_182002_add_username_field_to_users_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nasrulkurniawan@gmail.com', '$2y$10$n6w9YvGC4EI4q2S5Zo3u1uT2xZTiB.zXBvvbskpkb0KnoxVSZH566', '2022-10-22 04:40:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id`, `bank_name`, `atas_nama`, `no_rekening`, `created_at`, `updated_at`) VALUES
(1, 'BRIAJA', 'JAGO SOFTWARE', '36214579', NULL, '2022-06-09 02:29:48'),
(3, 'BRISYARIAH', 'JAGO SOFTWARE', '321546578', '2020-03-22 08:35:31', '2022-06-09 02:29:43'),
(4, 'BCA', 'JAGO SOFTWARE', '1234567899', '2020-03-24 17:22:37', '2022-06-09 02:29:57'),
(5, 'BNI', 'JAGO SOFTWARE', '12345679', '2020-03-24 17:23:12', '2022-06-09 02:29:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_bar_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_bar_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_feature_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_room_total` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_room_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_testimonial_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_latest_post_total` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_latest_post_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_alternatif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_color_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_color_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `analytic_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `title_app`, `logo`, `favicon`, `top_bar_phone`, `top_bar_email`, `home_feature_status`, `home_room_total`, `home_room_status`, `home_testimonial_status`, `home_latest_post_total`, `home_latest_post_status`, `footer_address`, `footer_phone`, `footer_email`, `copyright`, `facebook`, `twitter`, `linkedin`, `pinterest`, `youtube`, `about`, `text_alternatif`, `theme_color_1`, `theme_color_2`, `analytic_id`, `created_at`, `updated_at`) VALUES
(1, 'Jasa Wedding', '1684580569.png', '1684580613.png', '085800084682', 'nasrulkurniawan@gmail.com', 'Show', '4', 'Show', 'Show', '3', 'Show', NULL, '085800084682', 'nasrulkurniawan@gmail.com', '2023 Copyright Jago Software • All rights reserved • Made in Central Java', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.pinterest.com', 'https://www.youtube.com/c/wonderfulindonesiaofficial', '<h1>About Jago Wisata</h1>\r\n<p>Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.&nbsp;</p>\r\n<h2>Tentang Jago Wisata</h2>\r\n<p>Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.</p>\r\n<p>Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.</p>\r\n<p>Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.</p>', 'Beyond the explorer of the world', '#00215B', '#ffd3ce', 'UA-84213520-6', NULL, '2023-05-20 04:03:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `photo`, `heading`, `text`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, '1673775491.jpg', '5 Things You Need to Know About the G20 Summit in Bali', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.', 'Read More', '/detail/tubing', '2022-06-25 02:04:35', '2023-04-11 06:02:59'),
(2, '1666430971.jpg', '17 Creative Economy Subsectors in Indonesia!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.', 'Read More', '/detail/berkemah', '2022-06-25 02:06:09', '2022-10-22 03:12:31'),
(4, '1666430980.jpg', '5 Ulos Villages You Must Visit Soon!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta', 'Read More', '/detail/selasar-malioboro', '2022-10-16 08:20:09', '2022-10-22 02:31:40'),
(8, '1668962985.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.', 'Get Started', '/register', '2022-11-20 09:49:45', '2022-11-20 09:49:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_agen` int(11) NOT NULL,
  `wedding_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `tgl_booking` date NOT NULL,
  `additional_visa` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `id_agen`, `wedding_packages_id`, `users_id`, `tgl_booking`, `additional_visa`, `payment_method`, `transaction_total`, `transaction_status`, `bukti_pembayaran`, `deleted_at`, `created_at`, `updated_at`) VALUES
(23, 0, 3, 2, '0000-00-00', 0, 'midtrans', 1500051, 'SUCCESS', NULL, NULL, '2023-01-11 08:38:34', '2023-01-11 10:20:05'),
(24, 0, 1, 2, '0000-00-00', 0, 'midtrans', 250027, 'SUCCESS', NULL, NULL, '2023-01-11 09:44:06', '2023-01-11 10:26:11'),
(26, 0, 4, 2, '0000-00-00', 0, 'midtrans', 3000039, 'SUCCESS', NULL, NULL, '2023-01-11 10:02:57', '2023-01-11 10:17:25'),
(27, 0, 7, 2, '0000-00-00', 0, 'midtrans', 600025, 'SUCCESS', NULL, NULL, '2023-01-11 10:18:26', '2023-01-11 10:22:42'),
(28, 0, 6, 2, '0000-00-00', 0, 'transfer', 350080, 'SUCCESS', 'bukti_pembayaran/LhCjLoXPRlRkcEIak6LZ8mOjqdgExqCX56H7GwiO.jpg', NULL, '2023-01-11 10:24:52', '2023-01-14 08:37:16'),
(38, 0, 3, 2, '0000-00-00', 0, 'transfer', 1500023, 'PENDING', 'bukti_pembayaran/uTinVc5sTz6R8UCreqCSE1CBxTDup0ogbbx9q6LV.jpg', '2023-04-12 05:37:14', '2023-01-13 09:25:22', '2023-04-12 05:37:14'),
(39, 0, 3, 2, '0000-00-00', 0, 'transfer', 1500002, 'PENDING', NULL, '2023-04-12 05:37:12', '2023-01-13 09:27:36', '2023-04-12 05:37:12'),
(40, 0, 2, 1, '0000-00-00', 0, 'midtrans', 750080, 'PENDING', NULL, '2023-04-12 05:37:10', '2023-01-14 10:34:42', '2023-04-12 05:37:10'),
(41, 0, 3, 1, '0000-00-00', 0, 'midtrans', 1500078, 'PENDING', NULL, '2023-04-12 05:37:09', '2023-01-14 10:35:25', '2023-04-12 05:37:09'),
(42, 0, 3, 2, '0000-00-00', 0, 'midtrans', 1500077, 'FAILED', NULL, '2023-04-12 05:36:54', '2023-01-14 10:39:07', '2023-04-12 05:36:54'),
(43, 0, 1, 2, '0000-00-00', 0, 'midtrans', 250039, 'FAILED', NULL, '2023-04-12 05:36:51', '2023-04-11 04:07:56', '2023-04-12 05:36:51'),
(44, 0, 2, 2, '0000-00-00', 0, NULL, 750025, 'IN_CART', NULL, '2023-04-12 05:37:07', '2023-04-11 04:08:05', '2023-04-12 05:37:07'),
(45, 0, 2, 1, '0000-00-00', 0, 'midtrans', 750028, 'PENDING', NULL, '2023-04-12 05:37:05', '2023-04-11 05:46:31', '2023-04-12 05:37:05'),
(46, 0, 1, 1, '0000-00-00', 0, 'midtrans', 250086, 'PENDING', NULL, '2023-04-12 05:37:03', '2023-04-11 06:22:39', '2023-04-12 05:37:03'),
(47, 0, 6, 1, '0000-00-00', 0, 'midtrans', 350094, 'PENDING', NULL, '2023-04-12 05:37:02', '2023-04-11 06:23:51', '2023-04-12 05:37:02'),
(48, 0, 7, 1, '0000-00-00', 0, 'midtrans', 600042, 'PENDING', NULL, '2023-04-12 05:37:00', '2023-04-11 06:26:39', '2023-04-12 05:37:00'),
(49, 0, 6, 1, '0000-00-00', 0, NULL, 350019, 'IN_CART', NULL, '2023-04-12 05:36:48', '2023-04-11 07:31:26', '2023-04-12 05:36:48'),
(50, 0, 6, 1, '0000-00-00', 0, NULL, 350084, 'IN_CART', NULL, '2023-04-12 05:36:45', '2023-04-11 07:31:49', '2023-04-12 05:36:45'),
(51, 0, 5, 1, '0000-00-00', 0, NULL, 58, 'IN_CART', NULL, '2023-04-12 05:36:43', '2023-04-12 05:27:51', '2023-04-12 05:36:43'),
(52, 0, 5, 1, '0000-00-00', 0, 'transfer', 567037, 'PENDING', 'bukti_pembayaran/6ftriKlRz3msPV1MebNWL3QJIeETeEcpZvCfhi8P.jpg', NULL, '2023-04-12 05:38:20', '2023-04-12 05:59:05'),
(53, 0, 1, 1, '0000-00-00', 0, 'midtrans', 250004, 'PENDING', NULL, NULL, '2023-04-29 02:25:56', '2023-04-29 02:26:01'),
(54, 0, 1, 1, '0000-00-00', 0, 'midtrans', 250090, 'PENDING', NULL, NULL, '2023-05-08 06:36:49', '2023-05-08 06:42:12'),
(55, 0, 5, 1, '0000-00-00', 0, NULL, 35, 'IN_CART', NULL, '2023-05-29 12:02:21', '2023-05-24 04:34:56', '2023-05-29 12:02:21'),
(56, 0, 5, 1, '0000-00-00', 0, NULL, 567005, 'IN_CART', NULL, NULL, '2023-05-29 12:05:00', '2023-05-29 12:05:00'),
(57, 0, 5, 1, '0000-00-00', 0, NULL, 567021, 'IN_CART', NULL, NULL, '2023-05-29 12:11:50', '2023-05-29 12:11:50'),
(58, 0, 6, 1, '0000-00-00', 0, NULL, 6, 'IN_CART', NULL, NULL, '2023-05-29 12:12:38', '2023-05-29 12:12:41'),
(59, 0, 5, 1, '0000-00-00', 0, NULL, 567014, 'IN_CART', NULL, NULL, '2023-05-29 12:27:50', '2023-05-29 12:27:50'),
(60, 19, 1, 1, '2023-07-10', 0, NULL, 250020, 'IN_CART', NULL, NULL, '2023-07-09 16:02:17', '2023-07-09 16:02:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(23, 22, 'jagosoftware', 'ID', 0, '2028-01-11', NULL, '2023-01-11 08:36:40', '2023-01-11 08:36:40'),
(24, 23, 'jagosoftware', 'ID', 0, '2028-01-11', NULL, '2023-01-11 08:38:34', '2023-01-11 08:38:34'),
(25, 24, 'jagosoftware', 'ID', 0, '2028-01-11', NULL, '2023-01-11 09:44:06', '2023-01-11 09:44:06'),
(26, 26, 'jagosoftware', 'ID', 0, '2028-01-11', NULL, '2023-01-11 10:02:57', '2023-01-11 10:02:57'),
(27, 27, 'jagosoftware', 'ID', 0, '2028-01-11', NULL, '2023-01-11 10:18:26', '2023-01-11 10:18:26'),
(28, 28, 'jagosoftware', 'ID', 0, '2028-01-11', NULL, '2023-01-11 10:24:52', '2023-01-11 10:24:52'),
(29, 29, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 06:54:12', '2023-01-13 06:54:12'),
(30, 30, 'jagosoftware', 'ID', 0, '2028-01-13', '2023-01-13 07:39:37', '2023-01-13 07:30:51', '2023-01-13 07:39:37'),
(31, 31, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 08:47:26', '2023-01-13 08:47:26'),
(32, 32, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 08:55:33', '2023-01-13 08:55:33'),
(33, 33, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 08:55:47', '2023-01-13 08:55:47'),
(34, 34, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 08:58:02', '2023-01-13 08:58:02'),
(35, 35, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 09:00:56', '2023-01-13 09:00:56'),
(36, 36, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 09:03:50', '2023-01-13 09:03:50'),
(37, 37, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 09:04:13', '2023-01-13 09:04:13'),
(38, 38, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 09:25:22', '2023-01-13 09:25:22'),
(39, 39, 'jagosoftware', 'ID', 0, '2028-01-13', NULL, '2023-01-13 09:27:37', '2023-01-13 09:27:37'),
(40, 40, 'nasrul', 'ID', 0, '2028-01-14', NULL, '2023-01-14 10:34:43', '2023-01-14 10:34:43'),
(41, 41, 'nasrul', 'ID', 0, '2028-01-14', NULL, '2023-01-14 10:35:25', '2023-01-14 10:35:25'),
(42, 42, 'jagosoftware', 'ID', 0, '2028-01-14', NULL, '2023-01-14 10:39:07', '2023-01-14 10:39:07'),
(43, 43, 'jagosoftware', 'ID', 0, '2028-04-11', NULL, '2023-04-11 04:07:56', '2023-04-11 04:07:56'),
(44, 44, 'jagosoftware', 'ID', 0, '2028-04-11', NULL, '2023-04-11 04:08:05', '2023-04-11 04:08:05'),
(45, 45, 'nasrul', 'ID', 0, '2028-04-11', NULL, '2023-04-11 05:46:31', '2023-04-11 05:46:31'),
(46, 46, 'nasrul', 'ID', 0, '2028-04-11', NULL, '2023-04-11 06:22:39', '2023-04-11 06:22:39'),
(47, 47, 'nasrul', 'ID', 0, '2028-04-11', NULL, '2023-04-11 06:23:51', '2023-04-11 06:23:51'),
(48, 48, 'nasrul', 'ID', 0, '2028-04-11', NULL, '2023-04-11 06:26:39', '2023-04-11 06:26:39'),
(49, 49, 'nasrul', 'ID', 0, '2028-04-11', NULL, '2023-04-11 07:31:26', '2023-04-11 07:31:26'),
(50, 50, 'nasrul', 'ID', 0, '2028-04-11', NULL, '2023-04-11 07:31:49', '2023-04-11 07:31:49'),
(51, 51, 'nasrul', 'ID', 0, '2028-04-12', '2023-04-12 05:28:38', '2023-04-12 05:27:51', '2023-04-12 05:28:38'),
(52, 52, 'nasrul', 'ID', 0, '2028-04-12', NULL, '2023-04-12 05:38:20', '2023-04-12 05:38:20'),
(53, 53, 'nasrul', 'ID', 0, '2028-04-29', NULL, '2023-04-29 02:25:56', '2023-04-29 02:25:56'),
(54, 54, 'nasrul', 'ID', 0, '2028-05-08', NULL, '2023-05-08 06:36:49', '2023-05-08 06:36:49'),
(55, 55, 'nasrul', 'ID', 0, '2028-05-24', '2023-05-24 04:35:18', '2023-05-24 04:34:56', '2023-05-24 04:35:18'),
(56, 56, 'nasrul', 'ID', 0, '2028-05-29', NULL, '2023-05-29 12:05:00', '2023-05-29 12:05:00'),
(57, 57, 'nasrul', 'ID', 0, '2028-05-29', NULL, '2023-05-29 12:11:50', '2023-05-29 12:11:50'),
(58, 58, 'nasrul', 'ID', 0, '2028-05-29', '2023-05-29 12:12:41', '2023-05-29 12:12:38', '2023-05-29 12:12:41'),
(59, 59, 'nasrul', 'ID', 0, '2028-05-29', NULL, '2023-05-29 12:27:50', '2023-05-29 12:27:50'),
(60, 60, 'nasrul', 'ID', 0, '2028-07-09', NULL, '2023-07-09 16:02:17', '2023-07-09 16:02:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'Nasrul Kurniawan', 'nasrulkurniawan@gmail.com', '2022-10-22 05:50:26', '$2y$10$zeDMC753hjGaXWetfW0gOekYTwpMGMeD3Wyy/BvcSNL5.Ru.SDBRe', 'JFqQ8SMNc2jAJ5JoggJKtGWBXcTECCHTPezCrPWM4PtUN9Rrz3FOBUsCyG81', 'admin.jpg', '2022-10-22 11:39:45', '2023-07-09 16:05:08', 'ADMIN', 'nasrul'),
(2, 'Jago Software', 'jagosoftware@shopee.co.id', '2022-10-22 05:50:26', '$2y$10$mOa0sz6vw14CyyLNHPD0CObSry8erPpmZWF7p43GQ96YzJcmROcLW', 'ZCQSUaZ0Noz5nwTNa8slAMvJsDujNrrVds1jiZl2iiwtBR2QEXLlEiczP2Ur', 'admin1.png', '2022-10-22 11:39:45', '2023-01-14 11:08:12', 'USER', 'jagosoftware'),
(16, 'Jago Wisata', 'jagowisata@shopee.co.id', NULL, '$2y$10$veBz/nWtc9afZtefd08pvunBsu7Bc00.GnkAzEyIX2D4FtWWh8rvO', NULL, 'profile-jagowisata.png', '2023-01-15 03:06:51', '2023-01-15 03:06:51', 'USER', 'jagowisata'),
(17, 'Kurniawan', 'kurniawan@jagosoftware.co.id', NULL, '$2y$10$bmp0XxV3QGiL1Nst6MYKyO9B1AuBzaV06y.Piaz2z.LCKN2sydbqa', NULL, 'profile-kurniawan.png', '2023-01-15 03:07:44', '2023-01-15 03:07:44', 'USER', 'kurniawan'),
(18, 'Nakuragen', 'nakuragen@email.com', NULL, '$2y$10$37fYqgeR3tI7gxFniZJYGeZCTCHU1/fs7Q6fZSJhm8P2NWd5YYlti', NULL, 'profile-nakuragen.gif', '2023-01-15 03:08:36', '2023-04-11 04:37:24', 'USER', 'nakuragen'),
(19, 'Agen 1', 'agen1@gmail.com', NULL, '$2y$10$DhFGPDOISlWgR.yg.K1ZC.B7VyD0KnHrovGY/C.kuahH3lYXi/iy2', NULL, 'admin.jpg', '2023-06-05 06:10:26', '2023-07-10 05:15:02', 'VENDOR', 'agen1'),
(20, 'agen2', 'agen2@gmail.com', NULL, '$2y$10$.vVXTqg72gobwq3G3lKAMO8yrhwmVn7rHJEakohyCUVeh3Rn3ewJC', NULL, 'profile-agen2.jpg', '2023-06-05 06:14:36', '2023-06-05 06:38:57', 'VENDOR', 'agen2'),
(33, 'Rizki Abdul Gofur', 'rizky.abdulghofur@gmail.com', '2023-07-11 13:27:46', '$2y$10$n6.13XaOJSGd5XeoGWDXB.2nK0Qxq31iBx8A5h1OUdIOwwWCFD01y', NULL, NULL, '2023-07-11 13:27:46', '2023-07-11 13:27:46', 'USER', 'rizkyghofur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wedding_packages`
--

CREATE TABLE `wedding_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_agen` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `view_count` int(11) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wedding_packages`
--

INSERT INTO `wedding_packages` (`id`, `id_agen`, `title`, `slug`, `location`, `about`, `category`, `type`, `price`, `view_count`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 19, 'Tubing', 'tubing', 'Wisata Maritim Kano Mangrove Baros', '<p>Faktanya healing mampu meningkatkan imun tubuh Gak percaya??</p>\r\n<p>Cusss langsung datang dikawasan Hutan Mangrove Baros tepatnya disisi selatan Jalur Lintas Selatan Baros.</p>\r\n<p>Trip kano bebas sepanjang sungai winongo sampai muara pantai Baros, Samas ,Bantul dengan pemandangan yang eksotik Jangan lupa ajak teman, sahabat, keluarga, Tertarik??</p>\r\n<p>Langsung kontak untuk info detail dan reservasi sobat Visiting Jogja bisa melalui</p>\r\n<p>Narahubung @kano_mangrove :</p>\r\n<ul>\r\n<li>0858-6807-8057(Wahyu)</li>\r\n<li>0882-2543-6373(Ari)</li>\r\n<li>0813-2816-9091 (Antar)</li>\r\n</ul>', 'VIP', 'Gedung', 250000, 50, NULL, '2022-10-21 22:53:03', '2023-07-11 14:32:48'),
(2, 0, 'Berkemah', 'berkemah', 'Pantai Sanglen Spot Paling Keren Untuk Berkemah', '<p>Pantai Sanglen Spot Paling Keren Untuk Berkemah Pantai sanglen spot yang sangat cocok untuk berkemah. Berada di Yogyakarta tepatnya di Gunung Kidul. Pantai sanglen merupakan destinasi wisata terbaru yang belum terjamah oleh pengunjung. Walaupun jarang dikunjungi namun sampai ini sangatlah indah dan mempesona. Pantai yang sangat cocok untuk Spot berkemah dan menyepi. Inilah beberapa keindahan dan keunikan yang dimilikinya, yaitu Pantai Sanglen Yang Penuh Pesona Pantai keren yang menghadirkan pasir putih dan ombak menambah indahnya pesona alam yang disuguhkan. Tidak jauh dari dekat pantai terdapat adanya Bukit dingin ditumbuhi pepohonan yang sangat rindang dan hijau. Pengunjung dapat naik ke perbukitan menggunakan tangga yang sudah tersedia. Alam yang sangat indah ketika melihat dari perbukitan. Jika mulai penasaran dengan wisata keren ini. Inilah beberapa ulasan mengenai pantai sanglen?</p>\r\n<p>1.Lokasi Wisata Lokasi Wisata dari Pantai Keren terletak di Dusun kelor dan desa kemadang. Destinasi wisata tersebut masih di area Gunungkidul kecamatan Tanjungsari. Pentingnya wisata alam ini sangatlah pelosok dan belum terjamah oleh wisatawan.</p>\r\n<p>2. Perjalanan Menuju Pantai Pengunjung yang ingin mengunjungi pantai ini. Jika berangkat dari kota Jogjakarta maka membutuhkan jarak 70 km dan waktu yang bisa diperkirakan yaitu 2 jam menuju lokasi. Perjalanan yang dituju mulai dari Piyungan lalu ke Patuk dan tiba ke GCD terakhir di pasar sambipitu. Pengunjung akan melewati hutan bunder serta lapangan Pemda dan akhirnya tiba di Wonosari. Sebelum kantor polisi silahkan arahkan motormu menuju ke kanan. Pada Jalan Baron lalu lurus hingga terdapat sebuah pertigaan bernama mulo. Pengunjung kemudian harus ambil arah ke kanan saat tiba di Tepus. Setelah itu, ambil arah kanan lagi lalu menuju lokasi.</p>\r\n<p>3. Pantai Berpasir Putih Pantai yang keren ini mempunyai daya tarik tersendiri. Salah satunya adalah pantai yang memiliki Pasir Putih. Selain itu, ketika akan menuju lokasi Anda akan disuguhkan oleh pemandangan yang luar biasa indahnya. Pepohonan yang hijau dengan pemandangan yang masih asri dapat dinikmati.</p>\r\n<p>4. Jam Untuk Operasional Wisata ini dibuka mulai hari Senin hingga Minggu selama 24 jam. Hindari untuk berkunjung pada malam hari. Sebab rute dari perjalanan yang belum ada penerangan dapat membahayakan pengunjung. Jika pagi hari menuju lokasi maka pemandangan indah akan Anda rasakan.</p>\r\n<p>5.Harga Tiket Masuk Jika pengunjung ingin menikmati suasana indah di pantai sanglen, cukup dengan membayar Rp10.000 per orang. pengunjung dapat mendatangi beberapa pantai yang masih satu tempat, yaitu Pantai Indrayanti, Pantai Watudok dan masih banyak lainnya. Terdapat fasilitas parkir yang harus Anda gunakan untuk menitipkan sepeda motor. Pengunjung harus mengeluarkan uang Rp5.000 per motornya. Sedangkan untuk mobil pengunjung harus membayar Rp10.000.</p>\r\n<p>Jika pengunjung sedang berada di Jogjakarta. Jangan lupa untuk mampir ke kabupaten Gunungkidul. Terdapat berbagai jenis destinasi wisata alam yang sangat mempesona. Salah satunya adalah pantai sanglen dengan hamparan pasir putihnya.</p>', 'Berkemah', 'Open Trip', 750000, 3, NULL, '2022-10-21 23:00:34', '2023-06-23 02:22:45'),
(3, 0, 'Selasar Malioboro', 'selasar-malioboro', 'Wisata Baru Yogyakarta', '<p style=\"text-align: justify;\">Selasar Malioboro,</p>\r\n<p style=\"text-align: justify;\">Wisata Baru Yogyakarta Wisata selasar malioboro adalah wisata di Jogja yang baru, dan menjadi salah satu list wajib kunjung yang harus Anda Kunjungi saat berada di Jogja. Malioboro sendiri sudah kita ketahui memiliki pesona yang luar biasa. Malioboro selalu menarik perhatian tidak hanya wisatawan lokal tetapi juga banyak wisatawan mancanegara yang berkunjung ke objek wisata yang satu ini. Dengan pemikiran ini, pariwisata di Malioboro semakin baik, termasuk pendirian Serasar. Wisata selasar malioboro adalah objek wisata yang relatif baru di Yogyakarta. Lokasi ini dibuka pada 1 Maret 2021 sebagai program PT Kereta Api Indonesia.</p>\r\n<p style=\"text-align: justify;\">Tujuannya tidak lain untuk mengembangkan kawasan stasiun kereta api di Tugu Yogyakarta. Diharapkan wisatawan yang berkunjung ke Kota Yogyakarta semakin nyaman dan aman dengan adalanya selasar malioboro ini. Konsep Wisata Selasar Malioboro Yang unik dari Selasar Malioboro adalah mengusung konsep heritage. Konsep ini sendiri berasal dari PT KAI sendiri, dan peresmiannya langsung dilakukan oleh keluarga Keraton Yogyakarta. Dengan konsep ini, PTKAI ingin menunjukkan betapa klasiknya kota Yogyakarta. Fasilitas Yang Tersedia Tujuan pengembangan wisata selasar malioboro adalah untuk memberikan fasilitas penunjang dan peningkatkan pelayanan bagi para pemudik kereta api. Tak hanya itu, objek wisata ini juga dijadikan sebagai destinasi wisata kuliner baru di kawasan Malioboro loh. Contoh fasilitas yang ditawarkan adalah kamar mandi dan loker. Layanan ini tersedia untuk membantu wisatawan yang baru saja melakukan perjalanan jarak jauh. Wisatawan yang datang ke Yogyakarta kini tidak lagi bingung apabila hendak mandi.</p>\r\n<p style=\"text-align: justify;\">Anda juga dapat meletakkan barang &ndash; barang Anda pada loker yang disediakan. Jangan takut karena pelayanan wisata selasar malioboro sudah menggunakan fasilitas dan protokol medis yang ketat bahkan untuk pemandian terbuka khusus untuk umum. Perlengkapan yang disediakan adalah hand sanitizer, thermal gun, dan tetap menganjurkan untuk selalu menjaga jarak. Untuk membuat wisatawan jauh lebih aman, transaksi dilakukan tanpa uang tunai dan loker lebih aman karena menggunakan sistem canggih yang disebut loker pintar. Pesanan swalayan dapat diakses dari aplikasi dan Anda dapat memilih paket harga terbaik. Tempat Makan dan Nongkrong Makanan Khas Jogja Berkunjung ke Yogyakarta tidak lengkap rasanya tanpa menjajal banyak kulinernya.</p>\r\n<p style=\"text-align: justify;\">Di sini Anda tidak hanya bisa menghabiskan waktu bersama teman-teman Anda, tetapi juga mencicipi hidangan khasnya. Salah satu dari hidangan tersebut adalah Jozu Coffee. Dulu, Angkringan Kopi Jozz ini berada di utara rel kereta api. Saat ini, Angkringan berlokasi di Selasar, membuat suasana semakin tertata rapi, nyaman dan terawat. Angkringan sendiri sudah identik dengan kota Yogyakarta, dan suasana kota ini bisa Anda nikmati di sini. Jika Anda ingin menikmati nuansa Yogyakarta yang lebih unik, Anda bisa menjadikan wisata Selasa Malioboro ini sebagai pilihan yang tepat. Kami harap informasi ini bermanfaat bagi Anda.</p>', 'Selasar Malioboro', 'Open Trip', 1500000, 1, NULL, '2022-10-21 23:04:32', '2023-04-12 04:39:15'),
(4, 0, 'The Magnificent Borobudur Temple', 'the-magnificent-borobudur-temple', 'Magelang', 'Located on the island of Java, the magnificent Borobudur temple is the world\'s biggest Buddhist monument you must visit at least once in your lifetime. The area is surrounded by beautiful scenery of Central Java’s nature that you can only find there.\r\n\r\nThe temple sits majestically on a hilltop overlooking lush green fields and distant hills. Built between AD 780 and 840 during the reign of Syailendra dynasty, the temple\'s design in Gupta architecture reflects India\'s influence on the region. However, there are enough indigenous scenes and elements incorporated to make Borobudur uniquely Indonesian.', 'Open Trip', 'Open Trip', 3000000, 1, NULL, '2022-10-22 04:48:31', '2023-05-29 12:04:46'),
(5, 0, 'Wisata Alam Kalibiru', 'wisata-alam-kalibiru', 'Yogyakarta', 'Kalibiru adalah wisata alam yang terdapat di Kabupaten Kulon Progo, Yogyakarta\r\nKalibiru adalah salah satu tempat wisata alam yang lagi naik daun, karena tempatnya yang sangat bagus untuk spot berfoto.\r\n\r\nDalam video yang berdurasi 58 detik ini, saya menyajikan secara singkat bagaimana keadaan alam di Kalibiru, semoga dapat memberi gambaran betapa indahnya hamparan hijau perbukitan menoreh sekaligus pemandangan Waduk Sermo dari atas bukit.\r\n\r\nSumber : Youtube syahid salim', 'Open Trip', 'Open Trip', 567000, 26, NULL, '2022-10-22 04:51:52', '2023-07-09 15:49:42'),
(6, 0, 'Pantai Grigak, Pantai Asri Di Gunung Kidul', 'pantai-grigak-pantai-asri-di-gunung-kidul', 'Yogyakarta', 'Pantai Grigak, Pantai Asri Di Gunung Kidung Yogyakarta\r\nPantai Grigak, objek wisata alam Gunung Kidul di Yogyakarta lainnya yang masih asri dan masih sangat sedikit adanya petunjuk arah menuju pantai indah ini. Hal ini lah yang menjadi alasan wisatawan jarang datang ke pantai ini.\r\n\r\nWisata Pantai Grigak Gunung Kidul Jogjakarta adalah salah satu tempat wisata di yang ada di Desa Giriwungu di kecamatan Panggang, Provinsi Gunung Kidul, Daerah Istimewa Yogyakarta, Indonesia.\r\n\r\nWisata Pantai Grigak di Yogyakarta ini merupakan objek wisata yang cukup populer di hari biasa dan hari libur. Tempat ini tidak bisa dipungkiri begitu indah sehingga bisa menghadirkan sensasi tenang yang berbeda untuk aktivitas kita sehari-hari.\r\n\r\nWisata Pantai Grigak di Yogyakarta ini memiliki keindahan yang cukup menarik untuk Anda kunjungi. Sangat disayangkan apabila Anda sudah berada di kota Gunung Kidul Yogyakarta dan ternyata tidak mengunjungi wisata pantai Grigak ini.\r\n\r\nWisata Pantai Grigak di Yogyakarta ini nyatanya sangat cocok sekali untuk mengisi kegiatandi hari liburan Anda dan keluarga terutama pada saat hari libur panjang, seperti hari libur tahun baru, hari raya, atau bahkan hari libur anak sekolah dan hari libur lainnya.\r\n\r\nMungkin sebagian dari Anda ada yang menganggap pantai ini kelihatannya membosankan, tetapi ketika Anda datang mengunjungi pantai Grigak ini, maka Anda akan merasakan suasana tenang yang menyenangkan.\r\n\r\nMemang benar, Wisata Pantai Grigak itu adalah tempat yang sangat tenang untuk Anda yang ingin liburan sejenak menenangkan otak Anda dari segala hiruk pikuk perkotaan dan pekerjaan. Karena pantai yang tenang dan asri adalah pilihan terbaik untuk mengistirahatkan otak yang lelah.\r\n\r\nSuasana dan Keindahan Pantai Grigak\r\nSuasana Wisata Pantai Grigak ini damai dan sangat santai, jauh dari kehidupan sehari-hari yang menegangkan karena jumlah pengunjung yang sedikit. Pantai Grigak tidak berpasir dan memiliki beragam terumbu karang.\r\n\r\nJika Anda mencari pantai tersembunyi dengan pantai berpasir yang luas, pantai ini mungkin bukan untuk Anda. Tidak ada pantai berpasir, tetapi pantai ini memiliki daya tarik lain dengan terumbu karang', 'Open Trip', 'Open Trip', 350000, 2, NULL, '2022-10-22 04:56:27', '2023-07-09 15:49:23'),
(7, 0, 'Pantai Mesra Gunung Kidul', 'pantai-mesra-gunung-kidul', 'Yogyakarta', 'Daya Tarik Pantai Mesra Gunungkidul Yogyakarta, Ternyata Seindah Ini!\r\nPesona pantai memiliki daya tarik tersendiri bagi para penikmatnya. Itulah mengapa banyak sekali wisatawan yang memburu pesona pantai Mesra Gunungkidul Yogyakarta ini. Selain memiliki pesona khas yang indah menawan, pantai ini menjadi salah satu tempat ternyaman untuk refreshing.\r\n\r\nKata ini terletak di Jl. Pantai Kukup, Desa Ngepung, Kecamatan Kemadang, Kabupaten Gunungkidul Daerah Istimewa Yogyakarta. Anda bisa menjumpai pantai ini di sebelah Pantai Kukup Gunungkidul.\r\n\r\nBila dijangkau dari pusat Kota Yogyakarta waktu tempuh yang dibutuhkan cukup lama yaitu sekitar 1 jam 50 menit atau 2 jam. Untuk pergi ke pantai ini Anda hanya perlu menyediakan budget sekitar Rp10.000 saja.\r\n\r\nIni Dia Pesona Pantai Mesra Gunungkidul Yogyakarta\r\nPantai yang beralokasikan di kota istimewa ini memiliki beberapa daya tarik yang dapat menyita perhatian wisatawan. Diantara pesona pantainya yang memikat yaitu:\r\n\r\nKawasan Pantai Sangat Bersih\r\nDi kawasan pantai ini nampak sangat bersih dan tidak ada sampah bertebaran. Tak heran kalau pemandangan pantai ini nampak begitu indah dan menawan.\r\n\r\nJadi Anda yang berkunjung ke tempat wisata ini disarankan untuk tidak merusak keindahannya dengan sampah.\r\n\r\nDeburan Ombak Menerpa Karang\r\nSelain bersih, pantai ini memiliki pesona ombak yang estetik. Deburan ombaknya lumayan besar sehingga menjadi pemandangan yang sangat berkesan.\r\n\r\nSebagai pecinta alam tentu pesona ombak-ombak besar yang menerpa karang di pantai Mesra ini akan sangat memorable. Apalagi bagi Anda yang berkunjung bersama keluarga dan pasangan.\r\n\r\nTaman Indah dengan Rerumputan Hijau\r\nBerkunjung destinasi wisata di Yogyakarta ini Anda akan disuguhkan perpaduan hamparan birunya laut dan taman hijau yang saling berdampingan. Pemandangan ini pastinya jarang Anda temukan bukan?\r\n\r\nTaman tersebut dilengkapi dengan lampu hias dan kursi putih yang membuat bersantai jadi lebih nyaman. Apalagi saat malam hari tentu akan jauh lebih indah.', 'Open Trip', 'Open Trip', 600000, 0, NULL, '2022-10-22 04:59:45', '2022-10-22 04:59:45'),
(8, 0, 'Taman Watu Resort', 'taman-watu-resort', 'Yogyakarta', '<h3><strong>Taman Watu Resort Terdapat Sensasi Makan Dengan Background&nbsp; Tebing</strong></h3>\r\n<p><strong>Taman Watu Resort</strong>&nbsp;pesona alam dan wisata kuliner di Kabupaten Gunung Kidul.</p>\r\n<p><strong>Taman Watu resort</strong>, menikmati waktu sore hari dengan berada di lokasi wisata. Lokasi&nbsp; wisata kuliner menghadirkan pemandangan indah.</p>\r\n<p>Pengunjung dapat menyantap makanan dan ditemani oleh indahnya Sunset. Selain itu, pemandangan laut juga dapat Anda nikmati dari Resto tersebut. Segera simak ulasan berikut agar Anda tidak semakin penasaran.</p>\r\n<h3><strong><u>Panorama Indah Di Taman&nbsp; Watu Resort</u></strong></h3>\r\n<p>Lokasi dari taman tersebut berada pada Pantai Gesing. Uniknya, di tempat ini adalah para pengunjung dapat menikmati keindahan pantai dari ketinggian.</p>\r\n<p>Pengunjung akan disuguhkan oleh pemandangan alam yang eksotis. Lantas apa saja yang akan disuguhkan?</p>\r\n<h3><strong><u>1.Berswa Foto Dengan Adanya Sunset</u></strong></h3>\r\n<p>Bagi pengunjung yang hadir pada sore hari. Anda dapat menyaksikan sunset dengan menyantap makanan. Pada posisi ini, para pengunjung dapat menyimpan momen berharga dalam sebuah foto.</p>\r\n<h3><strong><u>2. Mempunyai Fasilitas Komplit</u></strong></h3>\r\n<p>Termasuk dalam jajaran destinasi wisata baru. Namun, fasilitas yang dimiliki cukuplah komplit. Fasilitas tersebut adalah kamar mandi, tempat ibadah, area parkir untuk beristirahat dan Gazebo untuk makan.</p>\r\n<p>Hal yang sangat menarik dari tempat ini adalah Spot foto yang sangat bervariasi disediakan oleh pengelola. Pengunjung pun tetap dapat berswafoto sambil menikmati makanan yang tersaji.</p>\r\n<h3><strong><u>3. Harga Untuk Tiket Masuk</u></strong></h3>\r\n<p>Pengunjung yang ingin berada di taman Watu Resort. Maka harus membeli tiket masuk ke Pantai Gesing sebesar Rp5000 Apabila pengunjung ke tempat wisata ini gunakanlah Armada pribadi.</p>\r\n<p>Siapkan ongkos parkir sebesar Rp3.000 untuk kendaraan roda dua. Sedangkan Rp5.000 untuk kendaraan roda empat.</p>\r\n<h3><strong><u>4. Lokasi Wisata</u></strong></h3>\r\n<p>Destinasi wisata ini terletak di Gunung Kidul tepatnya di daerah Bolang. Apabila pengunjung ingin datang ke Wahana wisata ini maka terdapat dua lokasi perjalanan.</p>\r\n<p>Jika ditempuh pada rute Imogiri Bantul dan rute Wonosari Gunung Kidul, maka jarak yang ditempuh sekitar 45 km. Apabila pengunjung berangkat dari Jogjakarta Pusat jarak yang ditempuh lebih dari 45 km.</p>\r\n<p>Pengunjung yang ingin menuju ke tempat wisata ini akan disuguhkan dengan rute penuh dengan keindahan. Ketika sampai di lokasi, hamparan pantai dengan background sunset akan dapat ditemui.</p>\r\n<p>Apabila Anda berkunjung di sore hari, tidak akan mengalami kecewa. Sebab, dapat melihat matahari terbenam yang sungguh indah.</p>\r\n<p>Apalagi di&nbsp;<strong>Taman Watu Resort</strong>&nbsp;terdapat spot foto keren yang bisa digunakan. Abda dapat menyimpan moment berharga dalam bentuk video atau foto.</p>\r\n<p>Itulah beberapa keunikan yang ada di&nbsp;<strong>taman Watu Resort.</strong>&nbsp;Tempat nongkrong untuk menyantap makanan dan menikmati suasana dengan hadirnya Pantai Gesing yang indah cukup dengan Rp10.000 maka dapat menikmati semua keindahan yang diciptakan pengunjung dapat menikmati waktu weekend bersama anggota keluarga atau teman</p>', 'Open Trip', 'Open Trip', 3000000, 0, NULL, '2022-10-22 05:29:49', '2022-10-22 05:29:49'),
(9, 0, 'The 2nd Tourism Working Group Meeting', 'the-2nd-tourism-working-group-meeting', 'Bali', '<p>4 hari menjelang perayaan&nbsp;<a href=\"https://www.indonesia.travel/id/id/ide-liburan/5-fakta-menarik-seputar-hari-pariwisata-dunia-sudah-tahu-belum\">Hari Pariwisata Dunia</a>, pertemuan kedua grup pariwisata atau&nbsp;<em><a href=\"https://g20.org/id/penguatan-komunitas-dan-umkm-sebagai-agen-transformasi-pariwisata-jadi-fokus-pembahasan-2nd-twg-ktt-g20/\" target=\"Target\">The 2nd Tourism Working Group Meeting</a>&nbsp;</em>dari&nbsp;<a href=\"https://www.indonesia.travel/id/id/ide-liburan/6-fakta-menarik-seputar-g20-indonesia-2022-bikin-bangga\">G20</a>&nbsp;akan dilaksanakan di&nbsp;<a href=\"https://www.indonesia.travel/id/id/destinasi/bali-nusa-tenggara/bali\">Bali</a>. Sebelumnya, pertemuan pertamanya atau&nbsp;<em>The 1st Tourism Working Group Meeting</em>&nbsp;telah sukses diselenggarakan di&nbsp;<a href=\"https://www.indonesia.travel/id/id/destinasi/bali-nusa-tenggara/labuan-bajo\">Labuan Bajo</a>, Nusa Tenggara Timur. Topik yang nantinya akan dibahas pada pertemuan kedua ini adalah penyampaian pendapat dari negara anggota&nbsp;<a href=\"https://www.indonesia.travel/id/id/ide-liburan/5-hal-yang-wajib-sobat-pesona-tahu-tentang-ktt-g20-di-bali\">G20</a>&nbsp;hingga&nbsp;<em>best practice&nbsp;</em>yang akan dilakukan dalam menghadapi isu yang terdapat dalam&nbsp;<em>Bali Guidelines</em>.</p>\r\n<p>Ini dia yang ditunggu-tunggu, puncak perayaan&nbsp;<a href=\"https://www.indonesia.travel/id/id/ide-liburan/yuk-rayakan-hari-pariwisata-dunia-dengan-mendukung-gerakan-indonesia-bersih-indah-sehat-dan-aman\">Hari Pariwisata Dunia</a>! Berlokasi di&nbsp;<a href=\"https://www.indonesia.travel/id/id/ide-liburan/yuk-intip-pesona-tersembunyi-di-pulau-dewata\">Pulau Dewata</a>, Menteri Pariwisata dan Ekonomi Kreatif, Sandiaga Uno menjelaskan bahwa tema yang akan diangkat adalah &ldquo;<em>Rethinking Tourism&rdquo;.&nbsp;</em>Ini dia rangkaian acaranya: panel diskusi&nbsp;<em>multi-stakeholder</em>&nbsp;dengan tema &ldquo;<em>Rethinking Tourism as a Key Element on Recovery</em>&rdquo;, diskusi bertema &ldquo;<em>The Tourism We Want</em>&rdquo; yang akan dipimpin oleh perwakilan sektor pariwisata&nbsp;<a href=\"https://www.instagram.com/p/CiaBcD_DibW/\">Bali</a>. Nah, untuk memperkuat perayaan dan&nbsp;<em>key messages&nbsp;</em>dari World Tourism Day,&nbsp; negara-negara anggota UNWTO juga akan diundang pada hari tersebut. Tak hanya itu, Kemenparekraf juga membuat serangkaian program&nbsp;<em>Road to World Tourism Day&nbsp;</em>2022 yang diisi pelbagai kegiatan seperti seminar, lomba, bakti sosial, bersih sungai, dan penghijauan.</p>\r\n<p>Selain&nbsp;<em>event-event</em>&nbsp;formal seperti yang telah disebutkan di atas, ada juga rangkaian&nbsp;<a href=\"https://www.instagram.com/p/Ch9NUSxvCn9/\"><em>event-event</em></a>&nbsp;unik dan menarik yang diselenggarakan di berbagai daerah #DiIndonesiaAja untuk meramaikan kegiatan seputar&nbsp;<a href=\"https://www.instagram.com/p/Ch8lP8ZDEeX/\">Hari Pariwisata Dunia 2022</a>. Beberapa&nbsp;<em>event</em>&nbsp;di antaranya ada&nbsp;<em>event&nbsp;</em>budaya seperti&nbsp;<a href=\"https://www.indonesia.travel/event/id/categories/music/jadwal-dan-lokasi-festival-kota-lama-semarang-2022\">Festival Kota Lama</a>, Festival Budaya To Berru, dan Rang Solok Baralek Gadang. Ada juga&nbsp;<em>event&nbsp;</em>musik seperti Makassar Jazz Festival dan&nbsp;<a href=\"https://www.indonesia.travel/event/id/categories/music/musik-alam-fest-2k21-wujud-inovasi-untuk-dukung-seni-dan-budaya-tradisional\">Musik Alam Fest</a>. Saksikan juga&nbsp;<em>event&nbsp;</em>kebanggaan daerah seperti&nbsp;<a href=\"https://www.indonesia.travel/event/id/categories/sport/ingin-tau-keistimewaan-alam-kalimantan-nonton-balikpapan-fest-2021-dan-temukan-jawaban\">Balikpapan Fest</a>, Festival Batanghari, dan Kenduri Riau. Wah, seru-seru ya&nbsp;<em>event-</em>nya?</p>\r\n<p>&nbsp;</p>\r\n<p>Gimana Sobat Pesona, seberapa&nbsp;<em>excited-</em>kah kamu dalam menyambut Hari Pariwisata Dunia tahun 2022 ini? Yang pastinya, baik itu wisatawan maupun pekerja pariwisata, kita harus bersama-sama membangun pariwisata Indonesia yang lebih baik seperti menyongsong&nbsp;<a href=\"https://www.indonesia.travel/id/id/campaign/carbonfootprint\">pariwisata berkelanjutan</a>&nbsp;serta kebangkitan pariwisata dan ekonomi kreatif. Jangan lupa, ingatkan juga teman, rekan kerja kantor, kerabat, dan keluarga Sobat Pesona tanggal 27 September agar bisa merayakan bareng-bareng, ya!</p>', 'Open Trip', 'Open Trip', 4000000, 0, NULL, '2022-11-21 00:07:26', '2022-11-21 00:07:26'),
(11, 19, 'lontong', 'lontong', 'lontong', '<p>lontong</p>', 'VIP', 'Tenda', 250000, 0, '2023-07-12 06:36:59', '2023-07-12 06:36:55', '2023-07-12 06:36:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wedding_packages`
--
ALTER TABLE `wedding_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `wedding_packages`
--
ALTER TABLE `wedding_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
