-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 10:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kode_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `halaman` int(11) NOT NULL,
  `thn_terbit` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'ready',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `slug`, `kode_buku`, `penulis`, `description`, `image`, `penerbit`, `stok`, `halaman`, `thn_terbit`, `status`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Matahari', 'matahari', '236498510', 'Tere Liye', 'Namanya Ali, 15 tahun, kelas X. Jika saja orangtuanya mengizinkan, seharusnya dia sudah duduk di tingkat akhir ilmu fisika program doktor di universitas ternama. Ali tidak menyukai sekolahnya, guru-gurunya, teman-teman sekelasnya. Semua membosankan baginya. Tapi sejak dia mengetahui ada yang aneh pada diriku dan Seli, teman sekelasnya, hidupnya yang membosankan berubah seru. Aku bisa menghilang, dan Seli bisa mengeluarkan petir. Ali sendiri punya rahasia kecil. Dia bisa berubah menjadi beruang raksasa. Kami bertiga kemudian bertualang ke tempat-tempat menakjubkan. Namanya Ali. Dia tahu sejak dulu dunia ini tidak sesederhana yang dilihat orang. Dan di atas segalanya, dia akhirnya tahu persahabatan adalah hal yang paling utama.', 'image_post/eDEFvBFJCegoTE11q3aZAlFNfMloWJr2oTCbB4lk.jpg', 'PT Gramedia Pustaka Utama', 3, 390, '2016-07-25', 'ready', 1, 3, '2025-05-12 09:36:00', '2025-05-12 13:25:27'),
(2, 'Biografi Gus Dur', 'biografi-gus-dur', '1974354987', 'Greg Barton', 'Setelah buku biografinya dalam Bahasa Inggris yang diluncurkan pada Februari 2002, awal Juli 2003 yang lalu Gus Dur meluncurkan buku biografinya dalam edisi alih Bahasa Indonesia. Buku tersebut ditulis oleh Dr. Greg Barton seorang senior lecturer di Deakin University Australia yang sangat aktif melakukan studi tentang Islam di Indonesia sejak awal 90-an.\r\n\r\nPerkenalan Barton dengan Gus Dur terjadi kira-kira di akhir dekade 80-an, dan sejak tahun 1990 Barton paling tidak telah menghasilkan beberapa buku yang berbobot tentang dunia Islam di Indonesia, yakni Nahdlatul Ulama, Traditional Islam and Modernity tahun (bersama dengan Greg Fealy, 1996), Gagasan Islam Liberal: Telaah terhadap Tulisan-tulisan Nurcholish Madjid, Djohan Effendi, Ahmad Wahib dan Abdurrahman Wahid, 1968-1980, Difference and Tolerance: Human Rights Issues in Southeast Asia (1994), dan Abdurrahman Wahid: Muslim Democrat, Indonesian President (2002). Selain itu ia juga sangat produktif dalam menulisan makalah atau paper yang terkait dengan studi Islam di Indonesia yang telah ia publikasikan di forum-forum internasional.\r\n\r\nDalam penyusunan Buku GUS DUR: The Authorized Biography of Abdurrahman Wahid, Barton sempat menjadi tamu dan menyertai acara-acara penting selama lebih kurang tujuh bulan dari dua puluh dua bulan pemerintahan Gus Dur. Selama melakukan riset panjangnya, acapkali Barton terlibat secara intensif dalam banyak kegiatan Gus Dur, yang terkadang melibatkan perasaan dan emosinya sebagai sahabat, namun justru ini yang menjadi daya pikat buku ini sekaligus membedakannya dengan penulis-penulis biografi manapun.\r\n\r\nSebagai salah satu sahabat dari Gus Dur dan seorang ilmuwan, Barton berhasil memberikan pandangan ilmiahnya sehingga mampu memberikan cakrawala dan perskpektif yang mendalam secara lebih sederhana, layaknya seorang sahabat untuk memerikan sosok Gus Dur yang sangat multidimensional, baik dari sisi humanis, pluralis, demokrat tulen, budayawan, agamawan, dan sebagai seorang intelektual terkemuka.\r\n\r\nDalam menyusun buku biografi ini Barton membaginya dalam beberapa yang bagian yang di susun secara kronologi historisi dari sebagian perjalanan hidup Gus Dur yang ia batasi hingga akhir tahun 2001, yakni saat masa lengser dari kursi kepresidenan RI.', 'image_post/x4m10CSTrstJuIr8es6k7O5jXoHHcGnBDpOZcVCQ.jpg', 'Originally Published', 1, 516, '2002-01-01', 'ready', 1, 1, '2025-05-12 10:17:15', '2025-05-12 12:09:23'),
(3, 'Biografi Politik Habibie', 'biografi-politik-habibie', '326549086', 'R. Toto Sugiharto', 'Karier politik Habibie dimulai ketika memenuhi panggilan pulang Presiden Soeharto saat hiruk pikuk peristiwa Malar tahun 1974. Rasa cinta pada tanah air \"memaksanya\" untuk melepas jabatan prestis sebagai Vice President di industri pesawat terbang, Messerchmitt Bolkow Blohm (MBB), Jerman.', 'image_post/lrGnx8LZCWEFvx1bU8MbsYlc2o5F0a79sypEWvyq.jpg', 'Media Pressindo', 1, 416, '2017-01-01', 'ready', 1, 1, '2025-05-12 10:22:03', '2025-05-12 10:22:03'),
(4, 'Naruto, Vol. 58: Naruto vs. Itachi', 'naruto-vol-58-naruto-vs-itachi', '37560957', 'Masashi Kishimoto', 'Kabuto’s hold over his army of undead minions tightens as he senses that he’s losing power over the stronger members of his Immortal Corps, including Nagato Pain. Sasuke’s brother, Itachi, may have the best chance of breaking Kabuto’s hold. But he’s still not completely in control of his actions, which means Naruto may have to take him down once and for all.', 'image_post/1iHvLooi5aKf8BcE2dPRnDy7hTeVrbL4qcf0k1Jp.jpg', 'Pierrot Studio', 1, 208, '2011-11-04', 'ready', 1, 2, '2025-05-12 10:25:36', '2025-05-12 13:21:33'),
(5, 'Bintang', 'bintang', '3458193675', 'Tere Liye', 'Kami bertiga teman baik. Remaja, murid kelas sebelas. Penampilan kami sama seperti murid SMA lainnya. Tapi kami menyimpan rahasia besar.\r\n\r\nNamaku Raib, aku bisa menghilang. Seli, teman semejaku, bisa mengeluarkan petir dari telapak tangannya. Dan Ali, si biang kerok sekaligus si genius, bisa berubah menjadi beruang raksasa. Kami bertiga kemudian bertualang ke dunia paralel yang tidak diketahui banyak orang, yang disebut Klan Bumi, Klan Bulan, Klan Matahari, dan Klan Bintang. Kami bertemu tokoh-tokoh hebat. Penduduk klan lain.\r\n\r\nIni petualangan keempat kami. Setelah tiga kali berhasil menyelamatkan dunia paralel dari kehancuran besar, kami harus menyaksikan bahwa kamilah yang melepaskan “musuh besar”-nya.\r\nIni ternyata bukan akhir petualangan, ini justru awal dari semuanya…\r\nBuku keempat dari serial “BUMI”', 'image_post/txwoUsAKCPAOKxc9H5qErchJrLqyh5b7LeRsPKZp.jpg', 'PT Gramedia Pustaka Utama', 1, 392, '2017-06-12', 'ready', 1, 3, '2025-05-12 12:04:56', '2025-05-12 12:04:56'),
(6, 'Naruto, Vol. 71: I Love You Guys', 'naruto-vol-71-i-love-you-guys', '759823645', 'Masashi Kishimoto', 'With the Infinite Tsukuyomi activated, the entire world is plunged into darkness. And to make matters worse, Black Zetsu has revived Kaguya, the very originator of chakra. Naruto and Sasuke have been given special powers by the Sage of Six Paths, but can they seal away Kaguya before she destroys everything?!', 'image_post/z16RTWmVdbc3JE20URLevzkHTvAIFkRssPzT1uKD.jpg', 'Pierrot Studio', 2, 208, '2014-11-04', 'ready', 1, 2, '2025-05-12 12:07:27', '2025-05-12 12:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `kode_peminjaman` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `user_id`, `book_id`, `status`, `kode_peminjaman`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'meminjam', '1221974354987', '2025-05-12 12:09:23', '2025-05-12 12:09:23'),
(2, 3, 1, 'dikembalikan', '123236498510', '2025-05-12 12:58:20', '2025-05-12 13:25:27'),
(3, 3, 4, 'meminjam', '12337560957', '2025-05-12 13:21:33', '2025-05-12 13:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'biografi', 'Biografi', 'image_post/V1OoqWafq2ds9Sacwq5YZI5KSLfh38qGI9i8CBcO.jpg', '2025-05-12 08:49:14', '2025-05-12 09:15:14'),
(2, 'kartun', 'Kartun', 'image_post/fqLpsZ7xYGk6pd0LsnZtEzm9ZF9MNbNmRWwa9IfC.avif', '2025-05-12 08:49:14', '2025-05-12 09:15:32'),
(3, 'novel', 'Novel', 'image_post/6jFDoRPnqQoyUQSPeSBrZhAFlpGz5XNObMT5ApEO.png', '2025-05-12 09:15:50', '2025-05-12 09:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `books_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `user_id`, `books_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2025-05-12 12:09:23', '2025-05-12 12:09:23'),
(2, 3, 1, '2025-05-12 12:58:20', '2025-05-12 12:58:20'),
(3, 3, 4, '2025-05-12 13:21:33', '2025-05-12 13:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_07_201412_create_books_table', 1),
(6, '2023_03_07_201555_create_categories_table', 1),
(7, '2023_03_10_151817_create_histories_table', 1),
(8, '2023_03_10_152109_create_borrows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'image_post/profdef1.jpg', 'admin', 'admin@gmail.com', '2025-05-12 08:49:14', '$2y$10$GKqoDkyzgfpT/m1QT87MGuvD1m467U9wGeTNIRsAOFafB2R.ScITq', 'admin', 'lp9eIcQB06Fdwwm6RT0SeGzwWEj8Boncd741vhTnTXeWR3YTWn4i4lGwLf5p', '2025-05-12 08:49:14', '2025-05-12 08:49:14'),
(2, 'Desi', 'image_post/profdef2.jpg', 'Desi01', 'desi@gmail.com', NULL, '$2y$10$GmZ/iBWlCksD/9hhWfkY6ukzs3CVe/fk4FtH5nq9/PPag0ZxaQfP2', 'visitor', NULL, '2025-05-12 10:05:35', '2025-05-12 10:05:35'),
(3, 'Diana', 'image_post/profdef2.jpg', 'Diana01', 'Diana@gmail.com', NULL, '$2y$10$1ydlBT6LenTHtWJQCevuFu0aG6bCD3q2wNRTv2P5cLcXrMj2JImjC', 'visitor', NULL, '2025-05-12 12:57:54', '2025-05-12 12:57:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_slug_unique` (`slug`),
  ADD UNIQUE KEY `books_kode_buku_unique` (`kode_buku`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `borrows_kode_peminjaman_unique` (`kode_peminjaman`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
