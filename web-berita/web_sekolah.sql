-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 06:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text DEFAULT NULL,
  `slug_berita` text DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `kategori_berita` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `kategori_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'bebas', 'bebas', '<p>sdsdsds</p>\r\n', NULL, 'Screenshot_2020-12-12_14104814.png', '2021-12-18 17:00:00', NULL),
(11, 'LA Lakers Kalah dari Memphis Grizzlies, LeBron James Tetap Catatkan Rekor', 'la-lakers-kalah-dari-memphis-grizzlies-lebron-james-tetap-catatkan-rekor', '<p>MEMPHIS &ndash; Kekalahan LA Lakers dari Memphis Grizzlies dalam lanjutan NBA 2021-2022 tak menghentikan Lebron James untuk mencetak rekor. Catatan fantastis pun diukir bintang LA Lakers itu dalam laga yang berlangsung Jumat (10/12/2021). Dilansir dari The Athletic, Jumat (10/12/2021), James menjadi pemain kelima dalam sejarah NBA yang mencatatkan 100 triple double. Sebagai informasi, triple double adalah kondisi dimana seorang pemain berhasil menorehkan poin, rebound dan assist dalam dua digit angka pada satu pertandingan.<br />\r\nDalam laga yang dihelat di FedEx Forum itu, pemain berusia 36 tahun itu membukukan 20 poin, 10 rebound dan 11 assist. Dan itu menjadi triple double pertama yang diraihnya musim ini.<br />\r\nRekan setim James, Russel Westbrook, adalah pemegang rekor triple double terbanyak sepanjang sejarah NBA dengan 189. Kemudian diikuti oleh Oscar Robertson (181), Magic Johson (138) dan Jason Kidd (107).</p>\r\n\r\n<p>Kendati bermain apik, nyatanya James gagal membawa kemenangan untuk Lakers di markas Grizzlies. Padahal, mereka sempat unggul 29-25 pada kuarter pertama. Akan tetapi, performa Lakers menurun setelah itu. Mereka pun berhasil disalip oleh tim tuan rumah pada kuarter kedua dengan skor 53-59.<br />\r\nSesudah itu, dominasi Grizzlies tidak terbendung lagi. Alhasil, Jaren Jackson dan kolega menutup pertandingan dengankeunggulan 108-95. Dengan hasil tersebut, Lakers masih tertahan di peringkat tujuh pada klasemen sementara Wilayah Barat. Mereka telah menelan dua kekalahan dari lima pertandingan terakhir di NBA 2021/2022.</p>\r\n', NULL, 'skysports-lebron-james-los-angeles-lakers-5054081-0b7a894747af0bb080320a5b115d0c3e_600x400.jpg', '2021-12-23 17:00:00', 1),
(12, 'LeBron James Beri Penjelasan soal Aksi Sikut Isaiah Stewart hingga Berdarah ', 'lebron-james-beri-penjelasan-soal-aksi-sikut-isaiah-stewart-hingga-berdarah', '<p>INDIANAPOLIS &ndash; Pemain bintang Los Angeles (LA) Lakers, LeBron James, akhirnya buka suara soal kejadian menyikut pemain Destroit Pistons, Isaiah Stewart, di laga lanjutan NBA 2021-2022. James berdalih bahwa kejadian itu tidaklah disengaja. Sebagaimana diketahui, sebuah kejadian yang menarik perhatian tejadi dalam pertemuan Lakers melawan Pistons pada 22 November 2021 pagi WIB. Dalam laga yang berakhir dengan kemenangan Lakers 121-116 itu, LeBron harus dikeluarkan dari lapangan setelah menyikut Stewart.</p>\r\n\r\n<p>Insiden penyikutan yang dilakukan LeBron, membuat pelipis Stewart berdarah. Buntutnya, LeBron James bahkan harus mendapatkan larangan membela LA Lakers dalam satu pertandingan.<br />\r\nSetelah melewatkan satu pertandingan bersama LA Lakers, LeBron James kembali bermain dengan membawa timnya meraih kemenangan 124-116 atas Indiana Pacers. Seusai pertandingan itu, pemain berusia 36 tahun tersebut memberikan penjelasan soal insiden dirinya dengan Stewart.<br />\r\n&quot;Sikunya (Isaiah Stewart) agak tinggi, membuatku sedikit kehilangan keseimbangan. Ketika saya mengayunkan tangannya ke bawah, dia kehilangan keseimbangan dan sisi kiri tangan saya menyerempet wajahnya,&quot; kata LeBron dilansir dari The Athletic, Jumat (26/11/2021). &quot;Saya langsung tahu bahwa saya telah menangkap beberapa bagian dari kepalanya, jadi saya pergi dan meminta maaf kepadanya. Jelas, kalian melihat apa yang terjadi setelah itu,&quot; ucapnya. &ldquo;Saya jelas bukan tipe pemain seperti itu. Saya benci melihat itu dan apa yang meningkat setelah itu,&quot; tuturnya.<br />\r\nSementara itu, saat menghadapi Pacers, LeBron James menjadi pencetak poin terbanyak dengan 39 poin dalam 43 menit. Kehadiran sang pemain memang terus memberi kontribusi besar kepada Lakers.</p>\r\n', NULL, 'lebron-james-run.jpg', '2021-12-23 17:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(2) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `foto_guru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `kepala_sekolah` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `foto_kepsek` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_sekolah`, `alamat`, `no_telpon`, `kepala_sekolah`, `nip`, `foto_kepsek`, `visi`, `misi`, `sejarah`) VALUES
(1, 'SMANDA', 'Selong', '56845643534', 'Wisnu Setiawan', '1800018071', 'orang.png', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
