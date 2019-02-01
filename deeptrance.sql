-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 12:08 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deeptrance`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `text1`, `text2`, `text3`, `title`, `banner`) VALUES
(40, '', '', '', 'Deeptrance', 'img2.png'),
(41, '', '', '', 'Service', '11994.png'),
(42, '', '', '', '', 'Untitled-1asd.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_download`
--

CREATE TABLE `data_download` (
  `id_download` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `buku` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_ebook`
--

CREATE TABLE `data_ebook` (
  `id_ebook` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `ebook` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ebook`
--

INSERT INTO `data_ebook` (`id_ebook`, `judul_buku`, `penulis`, `cover`, `ebook`, `deskripsi`) VALUES
(2, 'Rahasia Bahasa Tubuh', 'Dianata Eka Putra', 'rahasia_bahasa_tubuh_jpeg.jpg', 'Rahasia_Bahasa_Tubuh(Autosaved).pdf', 'Buku ini merupakan buku edisi yang telah\r\ndilengkapi dari edisi sebelumnya dimana Anda\r\nakan mendapatkan beberapa hal yang tidak Anda\r\ndapatkan di edisi sebelumnya. Tetapi di buku ini\r\nAnda akan mendapati isi dari buku sebelumnya,\r\ndilengkapi dan ditambahkan beberapa bab yang dianggap\r\nperlu untuk Anda ketahui. ');

-- --------------------------------------------------------

--
-- Table structure for table `data_service`
--

CREATE TABLE `data_service` (
  `id_service` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `background_service` varchar(255) NOT NULL,
  `isi_service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_service`
--

INSERT INTO `data_service` (`id_service`, `judul`, `title`, `icon`, `background_service`, `isi_service`) VALUES
(6, 'Service Excellent Bidang Jasa', 'Pelatihan Service Excellent dalam bidang Pelayanan Jasa ', 'ti-link', '11144dce22ed2fb1d3918bdb106d84af.png', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Untuk itu pelatihan service excellent dalam bidang pelayanan kesehatan di Indonesia menjadi sangat penting, jika kita melihat masih belum tercapainya harapan dari masyarakat dibanding dengan kenyataan yang mereka terima dalam bidang jasa kesehatan, khususnya di Rumah Sakit atau Klinik kesehatan.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dalam pelatihan ini akan di ajarkan bagaimana sebenarnya pelayanan kesehatan yang baik dari sudut pandang customer kita/pasien, bukan dari sudut pandang kita. Juga peserta akan mengetahui bagaimana rangkaian kerja yang harus di kerjakan agar selalu berorientasi terhadap pelayanan.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pelatihan ini unik dan berbeda, karena setiap peserta akan praktek langsung terhadap kasus-kasus yang sering muncul atau yang kemungkinan akan muncul dalam lingkup member pelayanan kepada customer kita/pasien.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><strong>MATERI WORKSHOP :</strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Kenapa kita harus memberikan pelayanan yang baik. Teknik-teknik pelayanan yang wajib diketahui. Rahasia mendatangkan dan meningkatkan jumlah customer hingga 300%.</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Teknik mengatasi keluhan customer. Teknik membangun kerjasama antar bagian di perusahaan. Teknik komunikasi efektif kepada customer.</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Teknik menciptakan customer yang loyal.</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Rahasia meningkatkan image dan citra perusahaan.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong>Tujuan yang di harapkan setelah pelatihan ini :</strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Peserta mengetahui apa itu pelayanan prima dan aturan-aturan yang harus di pahami.</li>\r\n	<li style=\"text-align:justify\">Mengapa harus melayani dengan baik.</li>\r\n	<li style=\"text-align:justify\">Mengetahui contoh-contoh pelayanan yang baik dan pelayanan yang tidak baik.</li>\r\n	<li style=\"text-align:justify\">Bisa mengetahui apa yang dibutuhkan customer.</li>\r\n	<li style=\"text-align:justify\">Mengetahui teknik dan mengetahui bagaimana cara meningkatkan kerjasama antar bagian agar tercipta pelayanan prima secara institusi</li>\r\n	<li style=\"text-align:justify\">Cara dalam memberikan pelayanan prima.</li>\r\n	<li style=\"text-align:justify\">Mampu menggunakan teknik mengubah keluhan menjadi kepuasan</li>\r\n	<li style=\"text-align:justify\">Mampu menghadapi situasi-situasi yang tidak di perkirakan</li>\r\n	<li style=\"text-align:justify\">Terciptanya pelayanan internal institusi dan ekternal institusi</li>\r\n	<li style=\"text-align:justify\">Terciptanya hubungan yang harmonis di setiap bagian/dept dari sebuah institusi</li>\r\n</ol>\r\n'),
(7, 'Effective  Public Speaking', 'Public speaking sendiri adalah adalah seni dan teknik berbicara di depan umum/publik.', 'ti-link', 'a9bf786827c62b98b3213f7c42c9f1f3.png', '<ol>\r\n	<li><strong><u>Pendahuluan</u></strong></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">Di era modern saat ini,&nbsp; kualitas manusia dapat dilihat dari berbagai aspek, seperti&nbsp; tingkah laku, cara berfikir, dan tentu saja dilihat dari apa yang dia ucapkan. Kemampuan verbal seseorang menjadi sangat penting karena dengan berbicara orang lain akan mengetahui kemampuan seseorang dan dapat menilainya. &nbsp;Namun dalam praktik nya, banyak orang yang belum memahami pentingnya menguasai teknik tentang berbicara di depan umum, padahal hal ini merupakan hal dasar yang harus dimiliki seseorang untuk mampu kompetitif dalam persaingan di dunia modern saat ini. &nbsp;Kemampuan verbal seseorang ini sering dikenal dengan istilah <strong><em>Public Speaking.</em></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;Public speaking sendiri adalah adalah seni dan teknik berbicara di depan umum/publik tentang suatu hal/topik tertentu secara lisan, dengan tujuan mempengaruhi, mengajak, mendidik, mengubah opini, memberikan penjelasan, dan memberikan informasi. <strong><em>Stephen E. Lucas </em></strong>menjelaskan bahwa public speaking dapat menghasilkan sesuatu yang berbeda atau membuat perubahan pada dunia dengan cara yang sederhana, yaitu berbicara.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">Telah banyak orang menemui kegagalan karir karena belum mampu menguasai public speaking dengan efektif.&nbsp; Menurut Survey <strong><em>Sunday Time of London</em></strong> menyatakan bahwa ketakutan terbesar (41%) seseorang adalah berbicara di depan umum (Public Speaking).&nbsp; Dalam sebuah study yang lain disebutkan, 85% kesuksesan seseorang sebagai Pribadi dan kesuksesan karirnya &nbsp;ditentukan oleh kemampuannya dalam ber-KOMUNIKASI secara EFEKTIF dengan banyak orang.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">Berlandaskan pemaparan diatas itulah kami menyusun&nbsp; Proposal Pelatihan <strong><em>Effective Public Speaking</em></strong> ini, mengingat penting dan esensialnya akan kebutuhan ketrampilan yang satu ini dalam meningkatkan kualitas hidup maupun kualitas hubungan seseorang dalam berbagai macam sendi kehidupan.&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong>MENGAPA TRAINING INI PENTING ??</strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">Karena dengan menguasai Public Speaking ini seseorang memiliki kesempatan yang luas untuk mengaktualisasikan segala potensi di hadapan siapapun, sehingga apa yang dikomunikasikan tentang ide, gagasan, dan pendapat dapat tercapai dan dipahami oleh orang lain, sehingga akan membuka peluang kesuksesan baik secara pribadi maupun karirnya.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">Pelatihan <strong><em>Effective Public Speaking</em></strong> yang kami lakukan ini akan memberikan kepada peserta dasar-dasar :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Keterampilan untuk berbicara di depan umum,</li>\r\n	<li style=\"text-align:justify\">Trik presentasi yang memukau, menghipnotis, menghibur dan mampu mempengaruhi audience,</li>\r\n	<li style=\"text-align:justify\">serta Penguasaan kelas yang maksimal, dll</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">Pelatihan ini akan dibawakan secara unik oleh Instruktur kami, melalui kombinasi teori dan praktek langsung di depan kelas, dengan metode yang yang atractive, yang akan membuat peserta semangat dan antusias serta gaya yang fun dan enjoyable, yang akan membuat&nbsp; peserta rileks namun tetap fokus selama pelatihan berlangsung.</p>\r\n\r\n<ol start=\"2\">\r\n	<li><strong><u>Materi Pelatihan</u></strong><strong> </strong></li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Persiapan public speaking.</li>\r\n	<li>Rahasia membuat materi yang menarik.</li>\r\n	<li>Teknik pembukaan yang menghipnotis.</li>\r\n	<li>Teknik menarik perhatian peserta.</li>\r\n	<li>Teknik vokal, intonasi, dan bahasa tubuh secara lengkap.</li>\r\n	<li>Teknik komunikasi ke semua level.</li>\r\n	<li>Rahasia mengatasi ketakutan berbicara.</li>\r\n	<li>Rahasia penguasaan panggung.</li>\r\n	<li>Teknik menjawab pertanyaan yang sulit.</li>\r\n	<li>Rahasia menjadi pembicara yang menarik.</li>\r\n	<li>Rahasia games yang menghibur.</li>\r\n	<li>Tahapan publik speaking segala situasi</li>\r\n</ol>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><strong><u>Tujuan pelatihan :</u></strong></li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Mengetahui teknik menyusun alur presentasi yang jelas dalam waktu singkat.</li>\r\n	<li>Menguasai cara membuka (Attractive Introduction) dan menutup (Powerful Closing) presentasi secara menarik.</li>\r\n	<li style=\"text-align:justify\">Mengetahui teknik menciptakan keberanian, ketenangan dan kemantapan dalam Public Speaking.</li>\r\n	<li style=\"text-align:justify\">Menguasai 3 komponen penting dalam Public Speaking secara efektif (Vocal, Verbal &amp; Visual) secara lengkap</li>\r\n	<li style=\"text-align:justify\">Menguasai teknik untuk tampil memukau dan mempertahankan perhatian audiens.</li>\r\n	<li style=\"text-align:justify\">Menguasai cara membawakan presentasi (Meaningful Message) yang menghipnotis.</li>\r\n	<li style=\"text-align:justify\">Menguasai teknik mengatasi rasa takut dan grogi berbicara di depan umum.</li>\r\n	<li style=\"text-align:justify\">Mahir berbicara di depan umum dengan baik sekalipun tanpa persiapan.</li>\r\n	<li style=\"text-align:justify\">Menguasai teknik berbicara secara meyakinkan kepada customer, partner bisnis, atasan, bawahan &amp; rekan kerja.</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:36.0pt; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<ol start=\"4\">\r\n	<li style=\"text-align:justify\"><strong><u>Peserta Pelatihan</u></strong><strong> :</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Professional, Director, Manager, Supervisor, Sales &amp; Marketing People, Public Relation</li>\r\n	<li style=\"text-align:justify\">Pebisnis</li>\r\n	<li style=\"text-align:justify\">Network Marketer, Insurance Agent</li>\r\n	<li style=\"text-align:justify\">Pemuka Agama</li>\r\n	<li style=\"text-align:justify\">Politisi, anggota parlemen</li>\r\n	<li style=\"text-align:justify\">Guru, Dosen</li>\r\n	<li style=\"text-align:justify\">Mahasiswa/i,</li>\r\n	<li style=\"text-align:justify\">Semua orang yang ingin meraih sukses dengan menguasai Public Speaking.</li>\r\n</ul>\r\n'),
(8, 'Negotiation Skill', 'Pelatihan Negotiation Skill atau Keterampilan dan kemampuan bernegosiasi', 'ti-link', '5a3476bb880421ebc759e87f26de3348.png', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><strong>MATERI WORKSHOP :</strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Kenapa kita harus memberikan pelayanan yang baik. Teknik-teknik pelayanan yang wajib diketahui. Rahasia mendatangkan dan meningkatkan jumlah customer hingga 300%.</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Teknik mengatasi keluhan customer. Teknik membangun kerjasama antar bagian di perusahaan. Teknik komunikasi efektif kepada customer.</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Teknik menciptakan customer yang loyal.</p>\r\n\r\n<p style=\"margin-left:36pt; margin-right:0cm; text-align:justify\">Rahasia meningkatkan image dan citra perusahaan.</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong>Tujuan yang di harapkan setelah pelatihan ini :</strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Peserta mengetahui apa itu pelayanan prima dan aturan-aturan yang harus di pahami.</li>\r\n	<li style=\"text-align:justify\">Mengapa harus melayani dengan baik.</li>\r\n	<li style=\"text-align:justify\">Mengetahui contoh-contoh pelayanan yang baik dan pelayanan yang tidak baik.</li>\r\n	<li style=\"text-align:justify\">Bisa mengetahui apa yang dibutuhkan customer.</li>\r\n	<li style=\"text-align:justify\">Mengetahui teknik dan mengetahui bagaimana cara meningkatkan kerjasama antar bagian agar tercipta pelayanan prima secara institusi</li>\r\n	<li style=\"text-align:justify\">Cara dalam memberikan pelayanan prima.</li>\r\n	<li style=\"text-align:justify\">Mampu menggunakan teknik mengubah keluhan menjadi kepuasan</li>\r\n	<li style=\"text-align:justify\">Mampu menghadapi situasi-situasi yang tidak di perkirakan</li>\r\n	<li style=\"text-align:justify\">Terciptanya pelayanan internal institusi dan ekternal institusi</li>\r\n	<li style=\"text-align:justify\">Terciptanya hubungan yang harmonis di setiap bagian/dept dari sebuah institusi</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `nama_admin`, `email`, `password`) VALUES
(1, 'Dedy ibrahim', 'admin@guepedia.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `data_download`
--
ALTER TABLE `data_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `data_ebook`
--
ALTER TABLE `data_ebook`
  ADD PRIMARY KEY (`id_ebook`);

--
-- Indexes for table `data_service`
--
ALTER TABLE `data_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `data_download`
--
ALTER TABLE `data_download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_ebook`
--
ALTER TABLE `data_ebook`
  MODIFY `id_ebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_service`
--
ALTER TABLE `data_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
