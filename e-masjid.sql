-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 07:42 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `no_rek` varchar(128) NOT NULL,
  `bank` text NOT NULL,
  `pemilik_rek` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `no_rek`, `bank`, `pemilik_rek`, `image`) VALUES
(1, '(451) 77777 78078781', 'Bank Mandiri Syariah', 'Masjid Agung Kota Tasikmalaya', 'baznas1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kajian`
--

CREATE TABLE `kajian` (
  `id` int(11) NOT NULL,
  `tema` varchar(128) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `waktu` date NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `pemateri` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajian`
--

INSERT INTO `kajian` (`id`, `tema`, `desc`, `image`, `waktu`, `tempat`, `pemateri`) VALUES
(5, 'Umat Terbaik', 'IREMA MASJID AGUNG KOTA TASIKMALAYA_ Proudly Present : Assalamu\'alaikum warrahmatullah wabarakatuh  Ummat terbaik “Kamu (umat Islam) adalah umat terbaik yang dilahirkan untuk manusia, (karena kamu) menyuruh (berbuat) yang makruf, dan mencegah dari yang mungkar, dan beriman kepada Allah. Sekiranya Ahli Kitab beriman, tentulah itu lebih baik bagi mereka. Di antara mereka ada yang beriman, namun kebanyakan mereka adalah orang-orang fasik.” Q.S. Ali Imran (3) : 110 . . Siapasih ummat terbaik itu? Bagaimana ciri-cirinya?', '69695266_428473734440580_9137947545907880364_n.jpg', '2019-09-28', 'Masjid Agung Kota Tasikmalaya', 'Ust. Rahmat Wahyudi'),
(6, 'Kamu kah wanita shalihah itu?', '\"Kamu kah wanita shalihah itu?” Assalamu\'alaikum warrahmatullah wabarakatuh  Perkenalkan... Ia teman seperjuanganku Meski tak bisa dikatakan, \"ia si selalu ada\" Tapi manisnya iman, yang menjadi dasar pertemanan  Proses komunikasi yang bukan hanya dalam sosial media bahkan dunia nyata, tetapi juga dalam do\'a Se-sederhana... \"Assalamualaikum teteh^^\" Dariku yang sebelumnya tidak seperti ini, ia menggiring, mengulurkan tangan untuk tetap beriringan... Dalam menjalankan tugas yang berat sebagai wanita muslimah, namun terasa ringan karna beriringan... Kaulah wanita shalihah itu? Yang bisa membawaku hingga seperti ini?', '70352771_398749680817692_4325253863806105530_n.jpg', '2019-10-07', 'Masjid Agung Kota Tasikmalaya', 'Ummi Qory Nuralifah'),
(7, 'Meneledani Wanita Penghuni Surga', 'Meneledani Wanita Penghuni Surga \'Fatimah Az Zahra\'  Assalamu\'alaikum warrahmatullah wabarakatuh  Putri Rasulullaah SAW yaitu, Fatimah Az Zahra memiliki kepribadian lembut hati, suka menolong dan penyayang.  Sebagaimana kepribadian akhlak beliau patut dijadikan tauladan atau sosok idola bagi muslimah sejati.  Pernah Rasulullah bersabda, “Kalau aku rindu mencium aroma surga, aku menemui Fatimah Az-Zahra untuk merasakan bagaimana aroma surganya Allah SWT.” Dengannya, Fatimah Az-Zahra mendapat julukan al hawra’ al insiyah atau wewangian surga, aroma surgawi yang dihidupkan Allah di tengah kehidupan manusia.  Muslimah Day Out kali ini akan mengkaji Sosok Teladan Akhwat Muda \"Fatimah Azzahra\", dengan begitu kita sebagai muslimah akhir jaman bisa meneladani untuk menggapai Cinta dan Ridha-Nya Allah SWT', '74881550_786253565147030_1359710240331327632_n.jpg', '2019-10-21', 'Masjid Agung Kota Tasikmalaya Lt. 2', 'Ummi Anna'),
(8, 'Meneledani Wanita Penghuni Surga', 'Meneledani Wanita Penghuni Surga \'Khadijah binti Khuwailid\"  Assalamu\'alaikum warrahmatullah wabarakatuh Rasululloh Shalallahu \'alaihi wasallam bersabda \" Sebaik-baiknya wanita penghuni surga adalah Khadijah binti khuwailid, fatimah binti muhammad, Asiyah binti Muzahim, Maryam binti Imran\" (HR. Imam Ahmad)  Khadijah merupakan salah satu wanita penghuni surga. Ulet, cerdas dan penyayang merupakan karakter khusus kepribadiannya. Sehingga masyarakat di zaman Jahiliyah menjulukinya sebagai At-Thahirah (seorang wanita yg suci). Selain itu, Khadijah juga berprofesi sbg pebisnis yg cerdas dan sangat setia menemani Rasulullah SAW dalam berdakwah dikala suka maupun duka. Sampai semua yang Khadijah miliki, diserahkan sepenuhnya untuk membantu dakwah dan memajukan Islam. MasyaaAllah, apakah kita sebagai wanita akhir zaman bisa seperti Khadijah? Bismillah, Muslimah Day Out kali ini akan mengkaji Sosok Teladan Muslimah sepanjang masa \"Khadijah bin Khuwailid\", dengan begitu kita sebagai muslimah akhir jaman bisa meneladani utk menggapai Cinta dan Ridha-Nya Allah SWT.', '76950609_173407367141080_8020137872049090143_n.jpg', '2019-11-21', 'Masjid Agung Kota Tasikmalaya Lt. 2', 'Ummi Qory Nur Alfiah'),
(9, 'Khadijah binti Khuwailid Part 2', 'Meneledani Wanita Penghuni Surga \'Khadijah binti Khuwailid Part 2\'  Assalamu\'alaikum warrahmatullah wabarakatuh Rasululloh Shalallahu \'alaihi wasallam bersabda \" Sebaik-baiknya wanita penghuni surga adalah Khadijah binti khuwailid, fatimah binti muhammad, Asiyah binti Muzahim, Maryam binti Imran\" (HR. Imam Ahmad)  Khadijah merupakan salah satu wanita penghuni surga. Ulet, cerdas dan penyayang merupakan karakter khusus kepribadiannya. Sehingga masyarakat di zaman Jahiliyah menjulukinya sebagai At-Thahirah (seorang wanita yg suci). Selain itu, Khadijah juga berprofesi sbg pebisnis yg cerdas dan sangat setia menemani Rasulullah SAW dalam berdakwah dikala suka maupun duka. Sampai semua yang Khadijah miliki, diserahkan sepenuhnya untuk membantu dakwah dan memajukan Islam. MasyaaAllah, apakah kita sebagai wanita akhir zaman bisa seperti Khadijah? Bismillah, Muslimah Day Out kali ini akan mengkaji Sosok Teladan Muslimah sepanjang masa \"Khadijah bin Khuwailid\", dengan begitu kita sebagai muslimah akhir jaman bisa meneladani utk menggapai Cinta dan Ridha-Nya Allah SWT.', '72351079_2411277669127319_3913706383529889602_n.jpg', '2019-11-18', 'Masjid Agung Lt. 2', 'Ummi Qory Nuralifah'),
(10, 'Be A Great Muslimah', '\"Barangsiapa yang menempuh suatu perjalanan dalam rangka untuk menuntut ilmu maka Allah akan mudahkan baginya jalan ke Surga\" (H.R. Muslim No. 2699) .', '71776305_150895229530950_4598223567952650592_n.jpg', '2019-12-02', 'Lt. 2', 'Bunda Dewi'),
(11, 'Asiyah binti Muzahim', 'Meneledani Wanita Penghuni Surga \'Asiyah binti Muzahim\'  Assalamu\'alaikum warrahmatullah wabarakatuh Rasululloh Shalallahu \'alaihi wasallam bersabda \" Sebaik-baiknya wanita penghuni surga adalah Khadijah binti khuwailid, fatimah binti muhammad, Asiyah binti Muzahim, Maryam binti Imran\" (HR. Imam Ahmad)  Muslimah Day Out kali ini akan membahas wanita shalihah sepanjang masa yaitu Asiyah binti Muzahim', '75616156_542211343029607_5060382378781188052_n.jpg', '2019-12-23', 'Lt. 2', 'Ummu Fathan'),
(12, 'Adab Seorang Muslimah', '-', '79687748_626996304735323_4694978475217365023_n.jpg', '2020-01-11', 'Masjid Rahmatullah Perum BRP', 'Ustadzah Oki Setiana Dewi, M.Pd'),
(13, 'Maryam Binti Imran', '-', '82474117_2457277424588690_1483739226122946767_n.jpg', '2020-01-27', 'Lt. 2', 'Ust. Rahmat Wahyudin'),
(14, 'Dosa dosa yang diremehkan wanita', '-', '83163638_3243802358965301_5008121655235664224_n.jpg', '2020-02-03', 'Lt. 2', 'Bunda Dewi'),
(15, 'Kita Terlalu Banyak Bercanda', '-', '84324907_218751749289680_8434565925777387131_n.jpg', '2020-02-15', 'Masjid Agung Kota Tasikmalaya', 'Ustadz Amaswara'),
(16, 'Hijrah', 'Hijrah my adventure', 'qurban-Bantuanku.jpeg', '2020-07-18', 'Masjid Agung Kota Tasikmalaya', 'Ust. Deden Masludin');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `kd_rek` varchar(12) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `tgl` date NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `kd_rek`, `keterangan`, `tgl`, `debet`, `kredit`) VALUES
(1, 'D20060012345', 'Kas Awal', '2020-06-01', 100000, 0),
(2, 'D20061912345', 'debet', '2020-06-19', 15000, 0),
(34, 'D20071521415', 'infaq', '2020-07-15', 156500, 0),
(35, 'K20071580516', 'belanja kebutuhan masjid', '2020-07-15', 0, 250000),
(37, 'D20071540386', 'donasi hamba allah', '2020-07-15', 85000, 0),
(38, 'K20071577598', 'makan anak yatim', '2020-07-15', 0, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `about` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`id`, `nama`, `alamat`, `website`, `email`, `telepon`, `whatsapp`, `gambar`, `about`) VALUES
(1, 'Masjid Agung Ciamis', 'Jl. Mesjid Agung No.01, Yudanagara, Kec. Tawang, Tasikmalaya, Jawa Barat 46121', 'e-masjid.id', 'info@e-masjid.id', '026584278545', '6282123456786', 'Screenshot_(55)_-_Copy1.png', 'E-Masjid merupakan Aplikasi Pengelolaan Masjid berbasis website dengan fitur CMS (Control Managament System)');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `nama`, `gambar`) VALUES
(1, 'Irema', 'irema.jpeg'),
(2, 'Bikers Subuhan Tasikmalaya', 'bs.PNG'),
(3, 'Pemerintah Kota Tasikmalaya', 'pemkot-tsm.PNG'),
(4, 'Akses Jalan Cepat', 'ajc.png');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `title`, `desc`, `image`) VALUES
(1, 'Gerakan Subuh Berjamaah', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'subuh.JPG'),
(2, 'Magrib Mengaji', 'Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit.', 'mengaji.jpg'),
(5, 'Tasik Cinta Quran', 'Minggu Pertama Setiap Bulan', 'taciq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$5piG5BjYJI089s3oJXgi/ud6e9B6StrxUKJd.XIrhrpv55SRpeH9G', 'ajc.png', 1, 1, 1588230184),
(2, 'Management', 'management@gmail.com', '$2y$10$Gv47V89wXWzcoX0Of3sDr.FBYIRJhzdFkWhRxugMjCgi4MG/bvDmu', 'profil.jpg', 2, 1, 1588234747);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(7, 1, 5),
(8, 2, 1),
(10, 2, 3),
(11, 2, 5),
(12, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(3, 'User'),
(4, 'Menu'),
(5, 'Management'),
(6, 'Website');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Management'),
(3, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', '1'),
(2, 3, 'My Profile', 'user', 'fas fa-fw fa-user', '1'),
(3, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', '1'),
(4, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', '1'),
(5, 4, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', '1'),
(7, 2, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', '1'),
(8, 3, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', '1'),
(9, 6, 'Program', 'website', 'fas fa-fw fa-calendar-alt', '1'),
(10, 6, 'Kajian', 'website/kajian', 'fas fa-fw fa-calendar-alt', '1'),
(11, 6, 'Donasi', 'website/donate', 'fas fa-fw fa-donate', '1'),
(14, 6, 'Partner', 'website/partner', 'fas fa-fw fa-handshake', '1'),
(15, 5, 'Laporan KAS', 'management', 'fas fa-fw fa-file-invoice', '1'),
(17, 6, 'Website Info', 'website/websiteinfo', 'fas fa-fw fa-info', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kajian`
--
ALTER TABLE `kajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kajian`
--
ALTER TABLE `kajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
