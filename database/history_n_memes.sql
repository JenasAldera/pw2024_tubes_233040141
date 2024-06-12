-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2024 at 10:15 AM
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
-- Database: `history_n_memes`
--

-- --------------------------------------------------------

--
-- Table structure for table `fegelein`
--

CREATE TABLE `fegelein` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fegelein`
--

INSERT INTO `fegelein` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Pertempuran Stalingrad', 'Pertempuran Stalingrad, yang berlangsung dari tanggal 17 Juli 1942 hingga 2 Februari 1943, adalah salah satu pertempuran paling sengit dan berkekerasan dalam Perang Dunia Pertempuran ini melibatkan pertempuran sengit antara Nazi Jerman dan sekutunya dengan Uni Soviet atas kota Stalingrad, yang kini menjadi wilayah Rusia selatan.', '666899e633c0a.png'),
(8, 'Perang Dingin', 'Perang Dingin adalah periode ketegangan geopolitik antara Amerika Serikat dan Uni Soviet serta sekutu mereka, Blok Barat dan Blok Timur, yang dimulai pada tahun 1947, dua tahun setelah berakhirnya Perang Dunia II dan berlanjut hingga 1991, jatuhnya Uni Soviet.', '6668af5c8f963.png'),
(10, 'Pertempuran Okinawa', 'Pertempuran Okinawa, yang diberi kode Operation Iceberg, adalah pertempuran besar di Perang Pasifik yang terjadi di pulau Okinawa antara pasukan Amerika Serikat dan Jepang. Ini adalah serangan amfibi terbesar di Teater Pasifik Perang Dunia II.', '66694dd0b0859.jpg'),
(11, 'American Civil War', 'Perang Saudara Amerika (12 April 1861 - 26 Mei 1865) adalah perang saudara di Amerika Serikat antara Persatuan (“Utara”) dan Konfederasi (“Selatan”). Konfederasi dibentuk oleh negara-negara yang telah secession dari Persatuan. Konflik utama yang mengarah ke perang adalah perselisihan tentang apakah perbudakan akan diizinkan untuk menyebar ke wilayah barat, yang akan menghasilkan lebih banyak negara budak, atau dihentikan dari melakukannya, yang banyak orang percayai akan mengarah pada akhiran akhir dari perbudakan.', '66694febd46b2.png'),
(12, 'Guillotine', 'Guillotine adalah alat yang dirancang untuk efektif menjalankan eksekusi dengan cara memotong kepala. Alat ini terdiri dari kerangka vertikal yang tinggi dengan pisau yang berat dan miring yang dipasang di bagian atas. Orang yang dikutuk diikat dengan pengikat di bagian bawah kerangka, dengan posisi leher langsung di bawah pisau. Pisau kemudian dilepaskan, dengan cepat dan kuat memotong korban dengan satu pukulan bersih; kepala jatuh ke keranjang atau wadah lain di bawah.', '66695096e010f.jpg'),
(13, 'Runtuhnya Konstantinopel', 'Runtuhnya Konstantinopel, juga dikenal sebagai penaklukan Konstantinopel, adalah penangkapan ibu kota Kekaisaran Bizantium oleh Kekaisaran Utsmaniyah. Kota itu ditangkap pada tanggal 29 Mei 1453 sebagai bagian dari akhir dari pengepungan selama 53 hari yang dimulai pada tanggal 6 April. Tentara Ottoman yang mengeksekusi serangan, yang secara signifikan lebih banyak jumlahnya dibandingkan dengan para pertahanan Konstantinopel, dipimpin oleh Sultan Mehmed II (nanti dikenal sebagai “Penakluk”), sementara tentara Bizantium dipimpin oleh Kaisar Constantine XI Palaiologos. Setelah menaklukkan kota tersebut, Mehmed II menjadikan Konstantinopel sebagai ibu kota baru Kekaisaran Utsmaniyah, menggantikan Adrianople.', '666951327e21d.jpg'),
(14, 'Revolusi Perancis', 'Revolusi Prancis adalah periode perubahan politik dan sosial di Prancis yang dimulai dengan Estates General pada tahun 1789 dan berakhir dengan kudeta pada tanggal 18 Brumaire pada November 1799 dan pembentukan French Consulate. Banyak ide-idenya dianggap sebagai prinsip dasar demokrasi liberal, sementara nilai-nilainya dan institusinya tetap menjadi pusat diskusi politik modern di Prancis.', '6669519d303fc.jpg'),
(15, 'Romawi Kuno', 'Romawi kuno berasal dari sebuah koloni Italic, yang diperkirakan didirikan pada tahun 753 SM, di tepi Sungai Tiber di Semenanjung Italia. Koloni tersebut berkembang menjadi kota dan negara Roma, dan akhirnya mengontrol tetangga-tetangganya melalui kombinasi perjanjian dan kekuatan militer. Pada akhirnya, Roma menguasai Semenanjung Italia, menggabungkan budaya Yunani di bagian selatan Italia (Magna Grecia) dan budaya Etruscan, dan kemudian menjadi kekuatan dominan di wilayah Mediterania dan bagian-bagian Eropa.', '66695634606ef.jpg'),
(16, 'SturmGewehr 44 (StG 44)', 'StG 44 (singkatan dari Sturmgewehr 44, “senapan serbu 44”) adalah senapan serbu Jerman yang dikembangkan selama Perang Dunia II oleh Hugo Schmeisser. StG 44 adalah senapan serbu pertama yang sukses, dengan fitur-fitur seperti tembakan otomatis yang dapat dikendalikan, desain yang lebih kompak daripada senapan perang dengan laju tembakan yang lebih tinggi, dan dirancang terutama untuk menargetkan target dalam jarak beberapa ratus meter. Senapan lain pada saat itu dirancang untuk menargetkan target pada jarak yang lebih jauh, tetapi hal ini ditemukan melebihi jarak di mana sebagian besar pertempuran dengan musuh sebenarnya terjadi.', '666956e6684ba.jpg'),
(17, 'Tiger II', 'Tiger II adalah tank berat Jerman selama Perang Dunia II. Nama resmi terakhirnya adalah Panzerkampfwagen Tiger Ausf. B, sering disingkat menjadi Tiger B. Nama inventaris senjata resmi adalah Sd.Kfz. 182, (Sd.Kfz. 267 dan 268 untuk kendaraan perintah). Ini juga dikenal secara tidak resmi sebagai Königstiger (singkatan dari German untuk harimau Bengal, artinya “Singa Harimau”), yang merupakan nama resmi untuk Tiger I. Tentara Sekutu pada saat itu biasanya memanggilnya King Tiger atau Royal Tiger.', '666957d3925fa.jpg'),
(18, 'Bismarck', 'Bismarck adalah kapal perang Jerman pertama dari kelas Bismarck yang dibangun untuk Kriegsmarine Nazi Jerman. Dinamakan sesuai dengan Kanselir Otto von Bismarck, kapal tersebut dibangun di pelabuhan Blohm &amp; Voss di Hamburg pada bulan Juli 1936 dan diluncurkan pada Februari 1939. Pekerjaan selesai pada Agustus 1940, ketika ia ditempatkan di dalam armada Jerman. Bismarck dan saudaranya Tirpitz adalah kapal perang terbesar yang pernah dibangun oleh Jerman, dan dua dari yang terbesar yang pernah dibangun oleh kekuatan Eropa mana pun.', '6669586adb493.jpg'),
(19, 'Kapal Perang Kelas Yamato', 'Kelas Yamato (大和型戦艦, Yamato-gata senkan) adalah dua kapal perang dari Angkatan Laut Kaisar Jepang, Yamato dan Musashi, yang dibangun sebelum Perang Dunia II dan selesai sesuai dengan desain. Dengan kapal ketiga nya yang dibangun pada tahun 1940, lalu dikonversi menjadi kapal udara, Shinano. Selama konstruksi, Dengan bobot total hampir 72.000 ton panjang (73.000 t) pada muatan penuh, kapal perang yang telah selesai ini adalah yang terberat yang pernah dibangun di dunia. Kelas tersebut membawa artileri angkatan laut terbesar yang pernah dipasang di kapal perang, sembilan meriam angkatan laut 460 mm (18,1 in), masing-masing mampu menembakkan peluru seberat 1.460 kg (3.220 lb) dalam jarak 42 km (26 mil).', '666959f632818.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(3, 'admin', 'jenasaldera1425@gmail.com', '$2y$10$n3QfuvzQ6P57EhdnInpwn.D6eY6YGBWwC9TJ9Nlr1NwQM56lThBiO', 'admin'),
(4, 'smoke', 'asay@gemil.com', '$2y$10$VJf2S0e4u8kQTPLUv60ZseiiHMp3py3UCeYCAUS8yGxXr13gIKAQi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fegelein`
--
ALTER TABLE `fegelein`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fegelein`
--
ALTER TABLE `fegelein`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
