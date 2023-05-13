-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 05:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1606479_db_fridayforfuture`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `nama_berita`, `tanggal`, `lokasi`, `deskripsi`, `foto`) VALUES
(12, 'Membanggakan! English Society Universitas BSI Lolos Pendanaan PPK Ormawa agustus 2022', '2023-03-16', 'Universitas Bina Sarana Informatika', '<p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&nbsp;Hanami&nbsp;memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p><p>&quot;&gt;</p><p>Himpunan Mahasiwa Bahasa Inggris (English Society) dinyatakan lolos seleksi tahap akhir Program Penguatan Kapasitas (PPK) Ormawa 2022 dari Kemdikbud, pada Rabu (15/6). PPK Ormawa merupakan salah satu program dari Direktorat Pembelajaran dan Kemahasiswaan berupa pengabdian dan pemberdayaan masyarakat yang diinisiasi oleh organisasi kemahasiswaan, PPK Kemahasiswaan dari Kemdikbud.</p><p>Retno Rahayuningsih sebagai pembina English Society Universitas BSI (Bina Sarana Informatika) menjelaskan subproposal English Society yang berjudul &lsquo;Menuju Indonesia Emas 2045 dengan &lsquo;Hanami (Harmony in Nature &amp; Economy)&rsquo; , sebagai Konsep IoT-Ecology Bank Sampah Melalui Literasi Hybrid Gen Alpha merupakan 1 dari 328 subproposal yang lolos pada program ini.</p><p>&ldquo;Berkat konsep dan program-program yang kreatif dan inovatif, English Society yang berkolaborasi dengan Himpunan Mahasiswa Manajemen, Himpunan Mahasiswa Ilmu komputer dan Himpunan Mahasiswa Akuntansi Universitas BSI, berhasil lolos hingga seleksi tahap akhir PPK Ormawa 2022,&rdquo; jelas Retno dalam rilis yang diterima, Jumat (24/6).&nbsp;</p><p>Ia menambahkan, 13 mahasiswa yang ikut serta dalam PPK Ormawa 2022 bersama English Society terdiri dari Moch Fadhil Nugraha, Ananda Putri A.H, Annaba Tama Sabian, Brooklyn, Nurul Fitri Hafizah, Nur Halissah, Ryanto Alfa Mario Siki, Anisa Zahara S., Daffa Praditya Devano Ramadhan, Julia Amelia, Reni Rahmawati, Widia Damayanti Taher, dan Yuni Indriyanti.</p><p>&ldquo;Keberhasilan English Society lolos pada seleksi tahap akhir PPK ORMAWA 2022 tidak lepas dari peran anggota dan pembina dalam menyusun konsep dan program-program dalam subproposal. Komunikasi yang baik antar anggota dan pembina menjadi hal penting agar bisa lolos PPK Ormawa 2022, dari komunikasi yang terjalin dengan baik, dapat tercipta konsep dan program yang kreatif dan inovatif,&rdquo; imbuhnya.&nbsp;</p><p>Lanjutnya, sebagai contoh, salah satu ide yang dihasilkan dari diskusi antar anggota dan masukan dari pembina adalah membuat konsep yang sesuai dengan keadaan sasaran dan trend terbaru, yaitu Hanami (Harmony in Nature &amp;Economy). Nama<a href=\"https://republika.co.id/tag/hanami\">&nbsp;Hanami&nbsp;</a>memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negaranya.&nbsp;</p><p>&ldquo;Program digitalisasi bank sampah, pengolahan sampah dengan metode crafting dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut. Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022,&rdquo; tutup Retno.&nbsp;</p>', '1687025365_Screenshot (32).png'),
(44, 'Tim PPK Ormawa Universitas BSI Ajak Masyarakat Olah Sampah Jadi Barang Nilai Seni Dan Ekonomis', '2022-10-05', 'Pendopo Madam Puri', '<p>Universitas BSI&nbsp;menjelaskan bahwa crafting sampah merupakan salah satu program pendukung yang diusung, sebagai metode pengolahan sampah yang digunakan untuk mengubah sampah menjadi barang bernilai seni dan ekonomis.</p><p>&nbsp;</p><p>&ldquo;Kegiatan sosialisasi crafting sampah ini dilakukan kepada komunitas Madam RT 10 di Kawasan RW 02, kelurahan Bambu Apus. Crafting sampah menghasilkan beberapa jenis seperti buket bunga. Melalui kegiatan ini, kita mengajak para ibu rumah tangga untuk mengolah sampah sehingga dapat mengurangi limbah sampah plastik ataupun kertas,&rdquo; ujar Fadhil dalam keterangan rilis, Selasa (5/10).</p><p><strong>Olah Sampah Jadi Barang Nilai Seni dan Ekonomis</strong></p><p>Lanjutnya, antusias ibu rumah tangga dalam mempraktekan crafting sampah, membuat pelatihan ini akan terus dilaksanakan sehingga masyarakat bisa terus memberdayakan sampah menjadi nilai seni yang dapat di jual kembali.</p><p>Sementara itu, Hani selaku peserta sosialisasi crafting sampah menanggapi bahwa kegiatan ini sangat bermanfaat untuk mengisi waktu luang ibu rumah tangga. Apalagi sampah juga menjadi persoalan yang tidak habisnya di negeri ini.</p><p>&quot;&gt;</p><p>Tim Program Peningkatan Kapasitas (PPK) Organisasi Mahasiswa (ormawa) Universitas BSI (Bina Sarana Informatika) sukses mengadakan sosialisasi crafting sampah di kelurahan Bambu Apus, Cipayung, Jakarta Timur, Jumat (23/9).</p><p>Fadhil selaku ketua panitia PPK Ormawa&nbsp;<a target=\"_blank\" href=\"http://bsi.ac.id/\">Universitas BSI</a>&nbsp;menjelaskan bahwa crafting sampah merupakan salah satu program pendukung yang diusung, sebagai metode pengolahan sampah yang digunakan untuk mengubah sampah menjadi barang bernilai seni dan ekonomis.</p><p>&ldquo;Kegiatan sosialisasi crafting sampah ini dilakukan kepada komunitas Madam RT 10 di Kawasan RW 02, kelurahan Bambu Apus. Crafting sampah menghasilkan beberapa jenis seperti buket bunga. Melalui kegiatan ini, kita mengajak para ibu rumah tangga untuk mengolah sampah sehingga dapat mengurangi limbah sampah plastik ataupun kertas,&rdquo; ujar Fadhil dalam keterangan rilis, Selasa (5/10).</p><p><strong>Olah Sampah Jadi Barang Nilai Seni dan Ekonomis</strong></p><p>Lanjutnya, antusias ibu rumah tangga dalam mempraktekan crafting sampah, membuat pelatihan ini akan terus dilaksanakan sehingga masyarakat bisa terus memberdayakan sampah menjadi nilai seni yang dapat di jual kembali.</p><p>Sementara itu, Hani selaku peserta sosialisasi crafting sampah menanggapi bahwa kegiatan ini sangat bermanfaat untuk mengisi waktu luang ibu rumah tangga. Apalagi sampah juga menjadi persoalan yang tidak habisnya di negeri ini.</p>', '3218973_Crafting.jpeg'),
(45, 'Konsep HANAMI Membawa English Society Universitas BSI Lolos Pendanaan Program Penguatan Kapasitas Ormawa 2022', '2022-11-04', 'Universitas Bina Sarana Informatika', '<p>Pada tanggal 15 Juni 2022, Himpunan Mahasiwa Bahasa Inggris (English Society) dinyatakan lolos seleksi tahap akhir Program Penguatan Kapasitas (PPK) Ormawa 2022. PPK Ormawa sendiri merupakan salah satu program dari Direktorat Pembelajaran dan Kemahasiswaan berupa pengabdian dan pemberdayaan masyarakat yang diinisiasi oleh organisasi kemahasiswaan.</p><p>Subproposal English Society yang berjudul &ldquo;MENUJU INDONESIA EMAS 2045 DENGAN &lsquo;HANAMI (HARMONY IN NATURE &amp; ECONOMY)&rsquo; SEBAGAI KONSEP IOT-ECOLOGY BANK SAMPAH MELALUI LITERASI HYBRID GEN ALPHA&rdquo;&nbsp;merupakan 1 dari 328 subproposal yang lolos pada program ini. Berkat konsep dan program-program yang kreatif dan inovatif, English Society yang berkolaborasi dengan Himpunan Mahasiswa Manajemen, Himpunan Mahasiswa Ilmu komputer dan Himpunan Mahasiswa Akuntansi, berhasil lolos hingga seleksi tahap akhir PPK Ormawa 2022. Komunikasi yang baik antar anggota dan pembina juga menjadi tips &amp; trik keberhasilan English Society lolos pada PPK Ormawa 2022 ini.</p><p>Keberhasilan English society lolos pada seleksi tahap akhir PPK ORMAWA 2022 tidak lepas dari peran anggota dan pembina dalam menyusun konsep dan program-program dalam subproposal. Komunikasi yang baik antar anggota dan pembina merupakan tips &amp; trik agar bisa lolos PPK Ormawa 2022, dari komunikasi yang terjalin dengan baik dapat tercipta konsep dan program yang kreatif dan inovatif. Sebagai contoh, salah satu ide yang dihasilkan dari diskusi antar anggota dan masukan dari pembina adalah membuat konsep yang sesuai dengan keadaan sasaran dan trend terbaru, yaitu HANAMI (Harmony in Nature &amp; Economy). Nama HANAMI memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negara mereka. Program&nbsp;digitalisasi bank sampah, pengolahan sampah dengan metode&nbsp;<em>crafting&nbsp;</em>dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut.&nbsp;Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022.</p><p>Pada PPK Ormawa 2022 ini, English Society didampingi oleh Ibu Retno Rahayuningsih, M.Pd. sebagai pembina dari 13 mahasiswa yang ikut serta. Nama 13 mahasiswa yang ikut serta dalam PPK Ormawa 2022 bersama English Society adalah Moch Fadhil Nugraha, Ananda Putri A.H, Annaba Tama Sabian, Brooklyn, Nurul Fitri Hafizah, Nur Halissah, Ryanto Alfa Mario Siki, Anisa Zahara S., Daffa Praditya Devano Ramadhan, Julia Amelia, Reni Rahmawati, Widia Damayanti Taher, Yuni Indriyanti.</p>', '1684671475_PPK.png'),
(46, 'Tim PPK Ormawa Universitas BSI Ajak Masyarakat Olah Sampah Jadi Barang Nilai Seni Dan Ekonomis', '2022-10-05', 'Pendopo Madam Puri', '<p>Universitas BSI&nbsp;menjelaskan bahwa crafting sampah merupakan salah satu program pendukung yang diusung, sebagai metode pengolahan sampah yang digunakan untuk mengubah sampah menjadi barang bernilai seni dan ekonomis.</p><p>&nbsp;</p><p>&ldquo;Kegiatan sosialisasi crafting sampah ini dilakukan kepada komunitas Madam RT 10 di Kawasan RW 02, kelurahan Bambu Apus. Crafting sampah menghasilkan beberapa jenis seperti buket bunga. Melalui kegiatan ini, kita mengajak para ibu rumah tangga untuk mengolah sampah sehingga dapat mengurangi limbah sampah plastik ataupun kertas,&rdquo; ujar Fadhil dalam keterangan rilis, Selasa (5/10).</p><p><strong>Olah Sampah Jadi Barang Nilai Seni dan Ekonomis</strong></p><p>Lanjutnya, antusias ibu rumah tangga dalam mempraktekan crafting sampah, membuat pelatihan ini akan terus dilaksanakan sehingga masyarakat bisa terus memberdayakan sampah menjadi nilai seni yang dapat di jual kembali.</p><p>Sementara itu, Hani selaku peserta sosialisasi crafting sampah menanggapi bahwa kegiatan ini sangat bermanfaat untuk mengisi waktu luang ibu rumah tangga. Apalagi sampah juga menjadi persoalan yang tidak habisnya di negeri ini.</p><p>&quot;&gt;</p><p>Tim Program Peningkatan Kapasitas (PPK) Organisasi Mahasiswa (ormawa) Universitas BSI (Bina Sarana Informatika) sukses mengadakan sosialisasi crafting sampah di kelurahan Bambu Apus, Cipayung, Jakarta Timur, Jumat (23/9).</p><p>Fadhil selaku ketua panitia PPK Ormawa&nbsp;<a target=\"_blank\" href=\"http://bsi.ac.id/\">Universitas BSI</a>&nbsp;menjelaskan bahwa crafting sampah merupakan salah satu program pendukung yang diusung, sebagai metode pengolahan sampah yang digunakan untuk mengubah sampah menjadi barang bernilai seni dan ekonomis.</p><p>&ldquo;Kegiatan sosialisasi crafting sampah ini dilakukan kepada komunitas Madam RT 10 di Kawasan RW 02, kelurahan Bambu Apus. Crafting sampah menghasilkan beberapa jenis seperti buket bunga. Melalui kegiatan ini, kita mengajak para ibu rumah tangga untuk mengolah sampah sehingga dapat mengurangi limbah sampah plastik ataupun kertas,&rdquo; ujar Fadhil dalam keterangan rilis, Selasa (5/10).</p><p><strong>Olah Sampah Jadi Barang Nilai Seni dan Ekonomis</strong></p><p>Lanjutnya, antusias ibu rumah tangga dalam mempraktekan crafting sampah, membuat pelatihan ini akan terus dilaksanakan sehingga masyarakat bisa terus memberdayakan sampah menjadi nilai seni yang dapat di jual kembali.</p><p>Sementara itu, Hani selaku peserta sosialisasi crafting sampah menanggapi bahwa kegiatan ini sangat bermanfaat untuk mengisi waktu luang ibu rumah tangga. Apalagi sampah juga menjadi persoalan yang tidak habisnya di negeri ini.</p>', '3218973_Crafting.jpeg'),
(47, 'Konsep HANAMI Membawa English Society Universitas BSI Lolos Pendanaan Program Penguatan Kapasitas Ormawa 2022', '2022-11-04', 'Universitas Bina Sarana Informatika', '<p>Pada tanggal 15 Juni 2022, Himpunan Mahasiwa Bahasa Inggris (English Society) dinyatakan lolos seleksi tahap akhir Program Penguatan Kapasitas (PPK) Ormawa 2022. PPK Ormawa sendiri merupakan salah satu program dari Direktorat Pembelajaran dan Kemahasiswaan berupa pengabdian dan pemberdayaan masyarakat yang diinisiasi oleh organisasi kemahasiswaan.</p><p>Subproposal English Society yang berjudul &ldquo;MENUJU INDONESIA EMAS 2045 DENGAN &lsquo;HANAMI (HARMONY IN NATURE &amp; ECONOMY)&rsquo; SEBAGAI KONSEP IOT-ECOLOGY BANK SAMPAH MELALUI LITERASI HYBRID GEN ALPHA&rdquo;&nbsp;merupakan 1 dari 328 subproposal yang lolos pada program ini. Berkat konsep dan program-program yang kreatif dan inovatif, English Society yang berkolaborasi dengan Himpunan Mahasiswa Manajemen, Himpunan Mahasiswa Ilmu komputer dan Himpunan Mahasiswa Akuntansi, berhasil lolos hingga seleksi tahap akhir PPK Ormawa 2022. Komunikasi yang baik antar anggota dan pembina juga menjadi tips &amp; trik keberhasilan English Society lolos pada PPK Ormawa 2022 ini.</p><p>Keberhasilan English society lolos pada seleksi tahap akhir PPK ORMAWA 2022 tidak lepas dari peran anggota dan pembina dalam menyusun konsep dan program-program dalam subproposal. Komunikasi yang baik antar anggota dan pembina merupakan tips &amp; trik agar bisa lolos PPK Ormawa 2022, dari komunikasi yang terjalin dengan baik dapat tercipta konsep dan program yang kreatif dan inovatif. Sebagai contoh, salah satu ide yang dihasilkan dari diskusi antar anggota dan masukan dari pembina adalah membuat konsep yang sesuai dengan keadaan sasaran dan trend terbaru, yaitu HANAMI (Harmony in Nature &amp; Economy). Nama HANAMI memiliki makna filosofis dari kultur sosial masyarakat jepang yang berhasil menyeimbangkan keadaan lingkungan dan ekonomi di negara mereka. Program&nbsp;digitalisasi bank sampah, pengolahan sampah dengan metode&nbsp;<em>crafting&nbsp;</em>dan Literasi Hybrid Gen Alpha merupakan perwujudan dari konsep tersebut.&nbsp;Konsep inilah yang menjadi dasar dari pembuatan subproposal yang telah memperoleh keberhasilan dengan lolos seleksi tahap akhir PPK Ormawa 2022.</p><p>Pada PPK Ormawa 2022 ini, English Society didampingi oleh Ibu Retno Rahayuningsih, M.Pd. sebagai pembina dari 13 mahasiswa yang ikut serta. Nama 13 mahasiswa yang ikut serta dalam PPK Ormawa 2022 bersama English Society adalah Moch Fadhil Nugraha, Ananda Putri A.H, Annaba Tama Sabian, Brooklyn, Nurul Fitri Hafizah, Nur Halissah, Ryanto Alfa Mario Siki, Anisa Zahara S., Daffa Praditya Devano Ramadhan, Julia Amelia, Reni Rahmawati, Widia Damayanti Taher, Yuni Indriyanti.</p>', '1684671475_PPK.png');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_transaksi`
--

CREATE TABLE `donasi_transaksi` (
  `id` int(11) NOT NULL,
  `nama_donatur` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nominal` int(25) NOT NULL,
  `nominalrandom` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi_transaksi`
--

INSERT INTO `donasi_transaksi` (`id`, `nama_donatur`, `no_hp`, `nominal`, `nominalrandom`, `date`) VALUES
(12, 'Bait Almaqdis', '986546636772', 700000, 43, '2023-01-29 17:31:57'),
(13, 'Syawal', '093873736262', 550000, 64, '2023-01-31 00:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_lainnya`
--

CREATE TABLE `galeri_lainnya` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_lainnya`
--

INSERT INTO `galeri_lainnya` (`id`, `judul`, `foto`) VALUES
(2, 'Jalan Jalan', '1300629758_Screenshot (105).png');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal`, `lokasi`, `deskripsi`, `foto`) VALUES
(3, 'hhh', '2023-01-31', 'www', '<p>bagusss</p>', '782796326_Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nama_pengurus` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama_pengurus`, `no_hp`, `jabatan`, `foto`) VALUES
(8, 'ernes', '34567834567', 'anggota', '1526659143_p_ernes.png'),
(9, 'arie', '0989978475847', 'anggota', '185042774_p_arie.png'),
(10, 'arif brata', '087867676757', 'Bendahara', '1071219144_p_komika.png'),
(11, 'tretan', '099897867676565', 'wakil Rakyat', '418948082_p_tretan.png'),
(12, 'atta', '0986765456789', 'anak buah', '1277307940_13 arya.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `komentar_id` int(11) NOT NULL,
  `komentar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nama_pengirim` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`komentar_id`, `komentar`, `nama_pengirim`, `date`) VALUES
(1, 'saya menyarankan tes komentar 1', 'Dewan', '2019-03-22 10:57:03'),
(2, 'saya menyarankan balasan komentar 1', 'Komputer', '2019-03-22 10:57:13'),
(3, 'saya menyarankan balasan anak komentar 1', 'Dini', '2019-03-22 10:57:34'),
(4, 'saya menyarankan Balasan Komentar 2', 'Dono', '2019-03-22 10:57:49'),
(6, 'Mantapsss', 'Ethalss', '2023-01-28 01:57:20'),
(7, 'HALO HHEHEHE', 'Atta', '2023-01-28 02:08:29'),
(8, 'HALO HHEHEHE', 'Atta', '2023-01-28 02:08:59'),
(9, 'YESS', 'AETHAL 2', '2023-01-28 02:09:17'),
(10, 'Gerakan akar-rumput anak muda yang berjuang menyelamatkan masa depan dari krisis iklim', 'Budi', '2023-01-28 02:24:20'),
(17, 'Apa kabar', 'Hello', '2023-01-31 00:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `parent_komentar_id` int(11) NOT NULL,
  `komentar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nama_pengirim` varchar(40) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(128) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `parent_komentar_id`, `komentar`, `nama_pengirim`, `foto`, `date`) VALUES
(5, 0, 'Bootstrap 4 has a lot of utility/helper classes to quickly style elements without using any CSS code. Bootstrap 4 has a lot of utility/helper classes to quickly style elements without using any CSS co', 'Ethal Db-fff', 'avatar1.png', '2023-01-26 01:34:05'),
(7, 5, 'Baik kakak Kami akan melakukan yang terbaik', 'admin', 'fotoadmin.png', '2023-01-26 10:17:40'),
(13, 0, 'Untuk Pendaftarannya bagaimana yaa?', 'Atta ', 'avatar1.png', '2023-01-26 13:23:07'),
(15, 14, 'Berapa harga durian?', 'Edo', 'avatar1.png', '2023-01-26 13:28:01'),
(16, 13, 'Tinggal daftar saja Kakak', 'Admin', 'fotoadmin.png', '2023-01-26 13:44:04'),
(17, 0, 'adakah pekerjaan?', 'penggangguran', 'avatar1.png', '2023-01-26 13:54:34'),
(19, 17, 'Cari Aja Sendiri ', 'Admin', 'fotoadmin.png', '2023-01-27 08:59:55'),
(20, 7, 'bootstrap 4 has a lot of utility/helper classes to quickly style elements without using any CSS code. Bootstrap 4 has a lot of utility/helper classes to quickly style elements without using a', 'Admin', 'fotoadmin.png', '2023-01-27 09:14:16'),
(21, 0, 'Apa kabar??', 'Budi', 'avatar1.png', '2023-01-29 09:37:15'),
(22, 0, 'berapa gaji Ronaldo?', 'Messi', 'avatar1.png', '2023-01-30 09:19:57'),
(23, 22, 'banyak cuyy', 'Mbappe', 'avatar1.png', '2023-01-30 09:20:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi_transaksi`
--
ALTER TABLE `donasi_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_lainnya`
--
ALTER TABLE `galeri_lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`komentar_id`) USING BTREE;

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `donasi_transaksi`
--
ALTER TABLE `donasi_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galeri_lainnya`
--
ALTER TABLE `galeri_lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
