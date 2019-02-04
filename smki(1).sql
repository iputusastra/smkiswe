-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Feb 2019 pada 13.06
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_b` int(11) NOT NULL,
  `isi` text NOT NULL,
  `enabled` int(2) NOT NULL DEFAULT '1',
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kategori` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `dokumen` varchar(400) NOT NULL,
  `boleh_komentar` tinyint(1) NOT NULL DEFAULT '1',
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_b`, `isi`, `enabled`, `tgl_upload`, `kategori`, `id_user`, `judul`, `dokumen`, `boleh_komentar`, `gambar`) VALUES
(1, '<p><strong class=\"accent-color\">SMK Islamiyah Widodaren</strong> kembali melaksanakan kegiatan Corporate Social Responsibility (CSR) dalam bentuk aksi donor darah. Kali ini donor darah kedua di tahun 2017 digelar di Aula <strong class=\"accent-color\">SMK Islamiyah Widodaren</strong>.\r\n\r\n<p><div class=\"qoute-box\">\r\nDengan kegiatan ini besar harapan kami dapat membantu saudara-saudara kita yang sedang membutuhkan, sesuai dengan visi misi sekolah. \r\n\r\n<div class=\"qoute-author\"> Zaenudin - Kepala Sekolah</div>\r\n</div>\r\n</p>\r\n<p>Terima kasih Para Pahlawan pendonor darah, semoga darah yg kita donorkan bermanfaat bagi orang yang membutuhkan dan menjadi amal buat kita semua tutur kesiswaan SMKI</P>', 1, '2017-11-07 01:30:00', 'Kegiatan', 1, 'SMK Is We Menggelar Aksi Donor Darah', '', 1, '1.jpg'),
(2, '<p>\"Hari ini.. awalan kalian untuk berjuang demi masa depan yang kalian impikan, usaha yang selama ini kalian tempuh akan di pertaruhkan di titik ini.\" cuplikan kalimat uang di ungkapkan ketika memasuki ruang simulasi UNBK, sebgai motivasi diri menghadapi UNBK.</p>\r\n<p>Di hari yang pertama ini <strong class=\"accent-color\">SMK Islamiyah Widodaren</strong> mengadakan latihan bagi siswa-siswi untuk mempersiapkan UNBK (Ujian Nasional Berbasis Komputer) yang akan di laksanakan nanti di bulan maret tahun 2018.</p>\r\n<p>\"Harapannya untuk tahun ini semoga UNBK bisa dilaksanakan dengan aman, nyaman dan yang paling penting hasil yang memuaskan\" tutur salah satu Prokto.</p> ', 1, '2018-01-31 02:00:00', 'Kegiatan', 1, 'Pelaksanaan Simulasi UNBK', '', 1, 'unbk.png'),
(3, 'a', 1, '2019-01-15 07:29:02', '', 1, 'a', '', 1, '1.png'),
(4, 'b', 1, '2019-01-15 07:29:02', 'Berita, Kegiatan', 1, 'b', '', 1, ''),
(6, 'd', 1, '2019-01-15 07:29:13', 'Berita', 1, 'd', '', 1, ''),
(10, 'ASASASA', 1, '2019-01-22 11:15:40', 'Pengumuman,OSIS', 0, 'BERITA', '', 1, 'C:fakepathScreenshot from 2019-01-06 08-04-56.png'),
(11, 'tentang', 0, '2019-01-22 13:02:12', 'Pramuka', 0, 'berita 2', '', 1, 'C:fakepathScreenshot from 2019-01-06 08-04-56.png'),
(12, 'sss', 0, '2019-01-22 13:05:25', 'OSIS', 0, 'tes', '', 1, 'C:fakepathUSER.png'),
(13, 'sss', 1, '2019-01-22 13:05:32', 'OSIS', 0, 'tes', '', 1, 'C:fakepathUSER.png'),
(15, 'askjlasasa', 1, '2019-01-29 05:18:55', 'Pengumuman', 0, 'admin`', '', 1, 'C:fakepathScreenshot from 2019-01-06 08-04-56.png'),
(16, 'asasa', 1, '2019-01-29 05:22:03', 'Kegiatan', 0, 'admin2', '', 1, 'C:fakepathUSER.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `parrent` int(4) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `enabled` int(2) NOT NULL DEFAULT '1',
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipe` varchar(100) NOT NULL,
  `slider` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `parrent`, `gambar`, `nama`, `enabled`, `tgl_upload`, `tipe`, `slider`) VALUES
(1, 0, '\r\n13FeyP5L5j1loUnAoKWE3fGwgNqxyvXvF', 'Polisi Kita', 1, '2019-01-15 08:12:23', 'kegiatan', NULL),
(2, 0, '1bBlV5EUMJrVYhqP3jjeLFNoMErw2cevd', 'Anggota Paskibra', 1, '2019-01-15 08:15:28', 'osis', NULL),
(3, 0, '1rNcacpA-I3hH4gYCi7l-5lsR92I6cVfJ', 'Kunjungan Industri di DU/DI', 1, '2019-01-15 08:21:34', 'kegiatan', NULL),
(4, 0, '1oPYl0qOrvYFKYEVK_RbU_Qw5GkF0y7Fs', 'Praktek Tune Up', 1, '2019-01-15 10:37:39', 'tkr', 1),
(5, 0, '1eWM8aHeAVToeN2aIaTWpvD7OJITZm5aG', 'Pembukaan Saka Wira Kartika WIdodaren', 1, '2019-01-15 10:37:39', 'pramuka', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_g` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_g`, `nama`, `alamat`, `mapel`, `foto`) VALUES
(1, 'Zaenudin', 'Rt/Rw 03/03, Desa Banyubiru, Kecamatan Widodaren, Kabupaten Ngawi ', 'Kepsek', 'zae.png'),
(2, 'Sriyono Teguh S.', 'Rt/Rw 00/00, Desa Sragen, Kecamtan Sragen, Kabupaten Sragen', 'Matematika', 'sri.png'),
(3, 'Aris Pribadi', 'RT/RW 00/00 Desa Sidolaju, Kecamatan Widodaren - Ngawi', 'Kewirausahaan', 'aris.png'),
(4, 'Topo Setyawan', 'RT/RW 00/00, Desa Sragen, Kecamatan Sragen  - Sragen', 'Produktif TKR', 'topo.png'),
(5, 'Kusnanto', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Kimia', 'kusnanto.png'),
(6, 'Danang Nur W.', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Produktif TKR', 'danang.png'),
(7, 'Oe-oek Triani K.', 'RT/RW 00/00, Desa Maospati, Kecamatan Maospati  - Madiun', 'Bahasa Indonesia', 'triani.png'),
(8, 'Badrul Qomar', 'RT/RW 00/00, Desa Banyubiru, Kecamatan Widodaren  - Ngawi', 'Bahasa Inggris', 'badrul.png'),
(9, 'Misbakhul Munir', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Agama', 'munir.png'),
(10, 'Rifa’i Hari S.', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Produktif TKR', 'rifai.png'),
(11, 'Sugeng Hariyadi', 'RT/RW 00/00, Desa Banyubiru, Kecamatan Widodaren  - Ngawi', 'Agama', 'sugeng.png'),
(12, 'Ana M.J', 'RT/RW 00/00, Desa Kedunggudel, Kecamatan Widodaren  - Ngawi', 'Fisika', 'ana.jpg'),
(13, 'Agus Hariyanto', 'RT/RW 00/00, Desa Kauman, Kecamatan Widodaren  - Ngawi', 'Olahraga', 'agus.png'),
(14, 'Mahfud Tri G.', 'RT/RW 00/00, Desa Sidolaju, Kecamatan Widodaren  - Ngawi', 'Produktif RPL', 'mahfud.png'),
(15, 'Ani Sriyanti', 'RT/RW 00/00, Desa Banyubiru, Kecamatan Widodaren  - Ngawi', 'Kimia', 'ani.jpg'),
(16, 'Tri Bangun S.', 'RT/RW 00/00, Desa Kedunggudel, Kecamatan Widodaren  - Ngawi', 'Produktif RPL', 'tri.png'),
(17, 'Didik Prayitno', 'RT/RW 00/00, Desa Sidomakmur, Kecamatan Widodaren  - Ngawi', 'Produktif RPL', 'didik.png'),
(18, 'Oky Wiranata', 'RT/RW 00/00, Desa Widodaren, Kecamatan Widodaren  - Ngawi', 'Produktif RPL', 'oky.png'),
(19, 'Suci Lestiya N.', 'RT/RW 00/00, Desa Kedunggalar, Kecamatan Kedunggalar - Ngawi', 'Matematika', 'suci.png'),
(20, 'Luthfie Aziz R.', 'RT/RW 00/00, Desa Sragen, Kecamatan Sragen  - Sragen', 'Produktif TKR', 'aziz.png'),
(21, 'Joko Wiyanto', 'RT/RW 00/00, Desa Banyubiru, Kecamatan Widodaren  - Ngawi', 'Bahasa Inggris', 'joko.png'),
(22, 'Ulli Purbayanti', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Produktif RPL', 'ulli.png'),
(23, 'Novita Putri N.', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'BK', 'putri.png'),
(24, 'Nikmawan Fadloli', 'RT/RW 00/00, Desa Banyubiru, Kecamatan Widodaren  - Ngawi', 'Sejarah', 'dloli.png'),
(25, 'Sudarno', 'RT/RW 00/00, Desa Widodaren, Kecamatan Widodaren  - Ngawi', 'Agama', 'darno.png'),
(26, 'Edi Sulistyo', 'RT/RW 00/00, Desa Kedunggalar, Kecamatan Kedunggalar - Ngawi', 'Matematika', 'edi.png'),
(27, 'Imerty', 'RT/RW 00/00, Desa Sidolaju, Kecamatan Widodaren  - Ngawi', 'TU', 'imerty.png'),
(28, 'Dian Efendi', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Toolman TKR', 'dian.png'),
(29, 'Sarjono', 'RT/RW 00/00, Desa Walikukun, Kecamatan Widodaren  - Ngawi', 'Kebersihan', 'jono.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(5) NOT NULL,
  `id_b` int(7) NOT NULL,
  `id_l` int(10) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_b`, `id_l`, `owner`, `email`, `komentar`, `tgl_upload`, `enabled`) VALUES
(8, 0, 1, 'Penduduk Biasa', 'penduduk@desaku.desa.id', 'Selamat atas keberhasilan Senggigi merayakan Hari Kemerdeakaan 2016!', '2016-09-13 23:09:16', 1),
(9, 0, 1, 'AHMAD ALLIF RIZKI', '5201140706966997', 'Harap alamat keluarga kami diperbaik menjadi RT 002 Dusun Mangsit. \n\nTerima kasih.', '2016-09-14 00:44:59', 1),
(10, 775, 0, 'DENATUL SUARTINI', '3275014601977005', 'Saya ke kantor desa kemarin jam 12:30 siang, tetapi tidak ada orang. Anak kami akan pergi ke Yogyakarta untuk kuliah selama 4 tahun. Apakah perlu kami laporkan?', '2016-09-14 03:49:34', 0),
(11, 775, 0, 'DENATUL SUARTINI', '3275014601977005', 'Laporan ini tidak relevan. Hanya berisi komentar saja.', '2016-09-14 04:05:02', 0),
(12, 1, 0, 'aasas', 'admin@admin.com', 'asasasas', '0000-00-00 00:00:00', 0),
(13, 1, 0, 'Three', 'admin@admin.com', 'asasasas sasas asasas', '2019-01-13 07:45:15', 1),
(15, 0, 0, 'Three', 'admin@admin.com', 'cdxdrev ef cxfefef', '2019-01-13 07:48:56', 0),
(16, 0, 0, 'Three', 'admin@admin.com', 'dsdsdsdsd', '2019-01-13 07:50:10', 0),
(17, 0, 0, 'sdsdsds', 'as', 'asasas', '2019-01-13 07:52:16', 0),
(18, 0, 1, 'sdrrrrr', 'rrr', 'rererere', '2019-01-13 07:55:56', 0),
(19, 0, 1, '', '', 'assasas', '2019-01-13 08:00:48', 0),
(28, 0, 2, 'three', '', '', '2019-01-13 14:14:20', 0),
(29, 0, 2, '', '', '', '2019-01-13 14:15:38', 0),
(31, 1, 0, 'asasasas', 'asasas', 'hfgfgtertgertyb rgtrtrt', '2019-01-14 13:54:51', 0),
(32, 2, 0, 'three', 'admin@admin.com', 'Manteppss...', '2019-01-14 14:48:17', 1),
(33, 2, 0, 'three', 'admin@admin.com', 'Manteppss...', '2019-01-14 14:48:41', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE `loker` (
  `id_l` int(11) NOT NULL,
  `isi` text NOT NULL,
  `enabled` int(2) NOT NULL DEFAULT '1',
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `dokumen` varchar(400) NOT NULL,
  `boleh_komentar` tinyint(1) NOT NULL DEFAULT '1',
  `gambar` varchar(100) NOT NULL,
  `tag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_l`, `isi`, `enabled`, `tgl_upload`, `id_user`, `judul`, `dokumen`, `boleh_komentar`, `gambar`, `tag`) VALUES
(1, 'Melayani loker', 1, '2019-01-07 07:51:00', 1, 'Loker PNS', '', 1, 'loker1.jpg', 'Loker'),
(2, 'asdad', 1, '2019-01-13 12:49:36', 1, 'saasasa', 'ssas', 1, 'tes.png', 'asas asas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_p` int(10) NOT NULL,
  `isi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_p`, `isi`, `visi`, `misi`, `foto`) VALUES
(1, '<p><strong>SMK Islamiyah Widodaren</strong> didirikan pada bulan Juli 2004. Sampai saat ini <strong>SMK Islamiyah Widodaren</strong> memiliki dua program kompetensi keahlian Teknik Kendaraan Ringan dan Rekayasa Perangkat Lunak, masing-masing program keahlian telah terakreditasi oleh BAN-SM Depdiknas tahun 2015. <strong>SMK Islamiyah Widodaren</strong> didukung oleh fasilitas memadai, biaya terjangkau, kualitas terjaga, dan tempat mudah dijangkau serta memiliki tenaga pengajar yang profesional dibidangnya dengan kualifikasi S1 dan S2 yang sudah memiliki pengalaman mengajar dengan baik di bidangnya.</p>\r\n\r\n<p>Hingga dewasa ini <strong>SMK Islamiyah Widodaren</strong> masih dipercaya oleh masyarakat sebagai instansi pendidikan yang mendidik putra-putri untuk menjadi seorang enterpreneurship atau wirausaha yang siap dalam menghadapi tantangan di masa depan. Dengan bekal ilmu pengetahuan yang diperoleh dari bangku sekolah diharapkan mampu menjawab tantangan global sekarang ini. Hal ini terbukti banyaknya lulusan <strong>SMK Islamiyah Widodaren</strong> yang melanjutkan ke perguruan tinggi negeri maupun swasta, karyawan di perusahaan dalam dan luar negeri serta wirausaha murni.</p>\r\n\r\n', '<ul class=\"icons-list\">\r\n<li><i class=\"icon-briefcase-1\"></i> Kompetisi dalam prestasi</li>\r\n<li><i class=\"icon-briefcase-1\"></i>Jaya dalam budaya</li><li><i class=\"icon-briefcase-1\"></i> \r\nIstiqomah dalam ibadah</li>\r\n\r\n</ul>', '<b>Mewujudkan suasana kehidupan yang islami, \r\nAs Sunah Rosul, \r\nMenciptakan sistem pembelajaran yang mendewasakan dan humanis, \r\nMewujudkan generasi bangsa yang berwawasan global dengan sains dan teknologi. \r\nMembangun masyarakat yang berakhlakul karimah dan budaya kerja.</b>', 'zae.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_sistem`
--

CREATE TABLE `setup_sistem` (
  `id_setup` int(3) NOT NULL,
  `nama_setup` varchar(100) NOT NULL,
  `nilai_setup` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setup_sistem`
--

INSERT INTO `setup_sistem` (`id_setup`, `nama_setup`, `nilai_setup`) VALUES
(3, 'logout_otomatis', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_inbox` int(9) NOT NULL,
  `id` int(9) NOT NULL,
  `id_teman` int(9) NOT NULL,
  `id_reply` int(9) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `dibaca` enum('yes','no') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_inbox`, `id`, `id_teman`, `id_reply`, `subject`, `message`, `tanggal`, `dibaca`) VALUES
(20, 13, 259, 0, 'Kripik', 'Piye, Enak Jamanku toh ???', '2014-06-16 07:07:58', 'yes'),
(21, 29, 259, 0, 'Tugas', 'Mas, tugasnya segera dikumpulkan ya', '2014-06-17 07:28:10', 'yes'),
(22, 259, 0, 21, '', 'iyo nek aku gelem Pak', '2014-06-17 07:29:45', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
--

CREATE TABLE `testi` (
  `id_t` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `aktif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testi`
--

INSERT INTO `testi` (`id_t`, `nama`, `pekerjaan`, `isi`, `aktif`) VALUES
(1, 'HERWANTO', ' - BRIMOB', 'Terimakasih dengan ilmu dan kedisiplinan yang ada di SMK Islamiyah Widodaren.', 1),
(2, 'Eka Puji Hastuty', ' - PT Petromindo.com', 'Ilmu komputer di SMK Islamiyah Widodaren SUDAH BISA LANGSUNG KERJA.', 1),
(3, 'Tri Utari', ' - frontbox PT JINLIDA Surabaya', 'Ketelitian dalam dunia kerja harus sellu dikedepankan, di SMK Islamiyah widodaren Aku menenmukan itu.', 1),
(4, 'Anwarul Huda', ' - SCURITY BANK Arta Graha Kalimantan', 'Mental yang tangguh dan ulet yang ditanamkan pada siswa SMK Islamiyah Widodaren menghantarkan saya dan teman2 untuk siap kerja', 1),
(5, 'sinonim', 'Programer', 'g ada kata telat untuk belajar.... ', 1),
(8, 'sinonim', 'Programer', 'isi Testi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` text NOT NULL,
  `tgl_login` date NOT NULL,
  `token` text NOT NULL,
  `foto` text NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `level` varchar(2) NOT NULL,
  `enabled` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `tgl_login`, `token`, `foto`, `id_user`, `level`, `enabled`) VALUES
(1, 'admin', 'admin', 'Administrator', '2017-01-06', '1', '1', '1', '1', 1),
(3, 'pegawai', 'pegawai', 'admin', '2018-10-10', '1', '1', '2', '1', 0),
(5, 'siswa', 'siswa', 'siswa', '0000-00-00', '1', '1', '3', '3', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_b`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parrent` (`parrent`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_g`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_l`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_p`);

--
-- Indeks untuk tabel `setup_sistem`
--
ALTER TABLE `setup_sistem`
  ADD PRIMARY KEY (`id_setup`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indeks untuk tabel `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id_t`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_g` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `id_l` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `setup_sistem`
--
ALTER TABLE `setup_sistem`
  MODIFY `id_setup` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_inbox` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `testi`
--
ALTER TABLE `testi`
  MODIFY `id_t` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
