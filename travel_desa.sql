-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2023 at 09:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int NOT NULL,
  `nama_desa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi_desa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `gambar_desa`, `deskripsi_desa`) VALUES
(2, 'Desa Jabungan', 'uploads/macos-monterey-5k-yf-1336x768.jpg', '<p>Ketika Anda mengklik tombol \"Submit\" dan tidak terjadi apa-apa, ini bisa disebabkan oleh beberapa hal. Berikut beberapa langkah yang bisa Anda coba untuk mengatasi masalah tersebut:</p>\r\n<ol>\r\n<li>\r\n<p><strong>Periksa Atribut <code>action</code> pada Form</strong>: Pastikan bahwa atribut <code>action</code> pada tag <code>&lt;form&gt;</code> di halaman HTML mengarahkan ke berkas PHP yang benar untuk memproses data login atau registrasi. Pastikan juga bahwa nama berkas PHP tersebut sesuai dengan nama berkas yang Anda gunakan dalam kode PHP Anda.</p>\r\n</li>\r\n<li>\r\n<p><strong>Periksa Method Form</strong>: Pastikan bahwa atribut <code>method</code> pada tag <code>&lt;form&gt;</code> adalah <code>POST</code>. Karena Anda menggunakan <code>$_POST</code> dalam kode PHP Anda, pastikan form mengirimkan data menggunakan metode POST.</p>\r\n</li>\r\n<li>\r\n<p><strong>Periksa Nama Field Form</strong>: Pastikan bahwa nama field pada form (seperti <code>username</code> dan <code>password</code>) sesuai dengan apa yang Anda gunakan dalam kode PHP. Pastikan juga tidak ada typo atau kesalahan penamaan.</p>\r\n</li>\r\n<li>\r\n<p><strong>Periksa Koneksi ke Database</strong>: Pastikan bahwa berkas <code>koneksi.php</code> telah terhubung dengan database dengan benar. Anda dapat menambahkan pesan error untuk memberikan petunjuk jika ada masalah dengan koneksi ke database.</p>\r\n</li>\r\n<li>\r\n<p><strong>Periksa Kondisi di Kode PHP</strong>: Pastikan Anda memiliki kondisi yang sesuai dalam berkas PHP yang digunakan untuk memproses login dan registrasi. Cek apakah kondisi untuk menerima input POST dan memprosesnya sudah benar.</p>\r\n</li>\r\n<li>\r\n<p><strong>Periksa Hasil Query dan Penanganan Error</strong>: Dalam berkas PHP yang memproses login dan registrasi, pastikan Anda memeriksa hasil query dan penanganan error. Anda dapat mencetak pesan error dari query atau menampilkan pesan khusus jika ada masalah.</p>\r\n</li>\r\n<li>\r\n<p><strong>Periksa Tampilan di Browser Console</strong>: Buka konsol browser (biasanya dengan menekan F12), pergi ke tab \"Console\", dan coba submit form lagi. Lihat apakah ada pesan error yang muncul di konsol yang dapat memberikan petunjuk tentang masalahnya.</p>\r\n</li>\r\n</ol>\r\n<p>Jika Anda masih mengalami kesulitan setelah mencoba langkah-langkah di atas, lebih lanjutkan dengan memeriksa detail kode PHP Anda dan pastikan semuanya telah diatur dengan benar. Jika diperlukan, Anda dapat mengaktifkan fitur error reporting di PHP untuk mendapatkan informasi lebih lanjut tentang masalah yang terjadi.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `gambar_penginapan` varchar(255) DEFAULT NULL,
  `deskripsi_penginapan` text,
  `biaya` decimal(10,2) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `fasilitas` text,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama_penginapan`, `gambar_penginapan`, `deskripsi_penginapan`, `biaya`, `rating`, `fasilitas`, `contact`) VALUES
(4, 'Bagas', 'uploads/111.png', '<p>sbsbsbdsbsdbsdbsdbsdbsd</p>', 124124.00, 3.0, 'ssdgsgs', '62895367355968');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(5, 'user5', 'jhghghghghg'),
(7, 'user7', 'mysecretpass'),
(8, 'user8', 'qwerty123'),
(9, 'user9', 'letmein321'),
(16, 'adminojs', '$2y$10$c3GnvFJyl1SNQmG3NwhPieWaKAVCVzRg4DcQqsYEOahWXUANXliJC');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `gambar_wisata` varchar(255) DEFAULT NULL,
  `deskripsi_wisata` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `gambar_wisata`, `deskripsi_wisata`) VALUES
(17, 'bagas', 'uploads/glass_drops_blur_174608_1280x720.jpg', '<p><em>Paragraf 1: Pengenalan Tempat Wisata Pulau Nusa Penida, sebuah surga tersembunyi di tenggara Bali, merupakan destinasi yang menakjubkan bagi para pencinta alam dan petualangan. Dengan pantai berpasir putih yang memikat, air laut biru kristal yang jernih, serta tebing-tebing spektakuler yang menghadap laut lepas, Nusa Penida menawarkan pengalaman luar biasa yang tak terlupakan. </em></p>\r\n<p>Paragraf 2: Keindahan Pantai dan Air Laut Salah satu daya tarik utama Nusa Penida adalah pantainya yang memesona. Pantai-pantai seperti Kelingking Beach dan Crystal Bay memiliki panorama yang luar biasa. Air laut yang jernih mengundang untuk berenang, snorkeling, dan menyelam, memperlihatkan keanekaragaman hayati laut yang memukau, termasuk ikan pari dan terumbu karang yang indah.</p>\r\n<p>Paragraf 3: Tempat Pemandangan Tebing Kelingking Salah satu pemandangan yang paling ikonik adalah tebing Kelingking yang menjulang tinggi, menyerupai kepala dinosaurus. Dari atas tebing ini, Anda dapat menikmati panorama spektakuler yang meliputi pantai berpasir putih dan laut lepas yang tak berujung. Menyaksikan matahari terbenam di sini adalah pengalaman magis yang tak terlupakan.</p>\r\n<p>Paragraf 4: Ritual dan Budaya Lokal Nusa Penida juga memiliki kekayaan budaya dan ritual unik. Penduduk setempat menjalankan upacara keagamaan dan festival yang menampilkan tarian dan musik tradisional Bali. Mengunjungi pura-pura kuno dan berinteraksi dengan masyarakat lokal dapat memberikan wawasan mendalam tentang kehidupan dan budaya pulau ini.</p>\r\n<p>Paragraf 5: Ekosistem Laut yang Melindungi Pulau Nusa Penida juga dikenal sebagai rumah bagi konservasi penyu dan spesies laut lainnya. Konservasi yang aktif di pulau ini berusaha menjaga ekosistem laut yang rentan. Pengunjung dapat terlibat dalam kegiatan pelestarian, seperti pelepasan tukik ke laut, untuk membantu menjaga kelangsungan hidup spesies yang terancam punah. Paragraf 6: Wisata Petualangan dan Keindahan Alam Dengan trekking yang menantang dan jalur petualangan yang menguji adrenalin, Nusa Penida menawarkan pengalaman yang tak terlupakan bagi para petualang. Dari mengeksplor gua-gua hingga menyusuri jalur pemandangan alam, pulau ini memberikan kombinasi sempurna antara keindahan alam dan petualangan yang mendebarkan. Semoga deskripsi di atas dapat memberikan gambaran tentang pesona dan keindahan Nusa Penida sebagai destinasi wisata yang menakjubkan.</p>'),
(19, 'bagas', 'uploads/macos-monterey-5k-yf-1336x768.jpg', '<p>asgasgasg</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
