-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 21.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chat_admin_kaprodi`
--

CREATE TABLE `tb_chat_admin_kaprodi` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `isi_chat_kaprodi` text NOT NULL,
  `isi_chat_admin` text NOT NULL,
  `file_chat_kaprodi` varchar(255) NOT NULL,
  `file_chat_admin` varchar(255) NOT NULL,
  `status_hapus_chat_kaprodi` varchar(255) NOT NULL,
  `status_hapus_chat_admin` varchar(255) NOT NULL,
  `extensiFile_chat_admin` varchar(255) NOT NULL,
  `extensiFile_chat_kaprodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_chat_admin_kaprodi`
--

INSERT INTO `tb_chat_admin_kaprodi` (`id`, `nama_admin`, `nama_kaprodi`, `isi_chat_kaprodi`, `isi_chat_admin`, `file_chat_kaprodi`, `file_chat_admin`, `status_hapus_chat_kaprodi`, `status_hapus_chat_admin`, `extensiFile_chat_admin`, `extensiFile_chat_kaprodi`) VALUES
(22, 'admin', 'Srivan', '', 'siang bu srivan', '', '', '', '', '', ''),
(23, 'admin', '', '', '', '', 'AMPLOP PRAKERIN SMK 3.docx', '', '', 'docx', ''),
(25, 'admin', 'srivan pallelleng', '', '', '', '', 'Anda menghapus pesan ini', '', '', ''),
(26, 'admin', '', '', 'Hallo', '', '', '', '', '', ''),
(28, 'admin', '', '', '', '', '', '', 'Anda menghapus pesan ini', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chat_dosen_mahasiswa`
--

CREATE TABLE `tb_chat_dosen_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nama_dosen1` varchar(255) NOT NULL,
  `nama_dosen2` varchar(255) NOT NULL,
  `file_chat_ke_dosen1` varchar(255) NOT NULL,
  `chat_ke_dosen_1` text NOT NULL,
  `chat_dari_mahasiswa_ke_dosen1` text NOT NULL,
  `chat_dari_mahasiswa_ke_dosen2` text NOT NULL,
  `tanggal_chat_ke_dosen1` varchar(255) NOT NULL,
  `tanggal_chat_ke_dosen2` varchar(255) NOT NULL,
  `status_hapus_chat_ke_dosen1` varchar(255) NOT NULL,
  `status_hapus_chat_ke_dosen2` varchar(255) NOT NULL,
  `status_baca_mahasiswa_dari_dosen1` varchar(255) NOT NULL,
  `status_baca_mahasiswa_dari_dosen2` varchar(255) NOT NULL,
  `status_baca_dosen1` varchar(255) NOT NULL,
  `status_baca_dosen2` varchar(255) NOT NULL,
  `extensiFile_ke_dosen1` varchar(255) NOT NULL,
  `file_chat_ke_dosen2` varchar(255) NOT NULL,
  `chat_ke_dosen_2` text NOT NULL,
  `file_chat_dosen1_ke_mhs` varchar(255) NOT NULL,
  `file_chat_dosen2_ke_mhs` varchar(255) NOT NULL,
  `chat_dari_dosen1` varchar(255) NOT NULL,
  `chat_dari_dosen2` varchar(255) NOT NULL,
  `tanggal_chat_dari_dosen1` varchar(255) NOT NULL,
  `tanggal_chat_dari_dosen2` varchar(255) NOT NULL,
  `status_hapus_chat_dari_dosen1` varchar(255) NOT NULL,
  `status_hapus_chat_dari_dosen2` varchar(255) NOT NULL,
  `extensiFile_ke_dosen2` varchar(255) NOT NULL,
  `extensiFileDosen1_ke_mhs` varchar(255) NOT NULL,
  `extensiFileDosen2_ke_mhs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_chat_dosen_mahasiswa`
--

INSERT INTO `tb_chat_dosen_mahasiswa` (`id`, `nama_mhs`, `nama_dosen1`, `nama_dosen2`, `file_chat_ke_dosen1`, `chat_ke_dosen_1`, `chat_dari_mahasiswa_ke_dosen1`, `chat_dari_mahasiswa_ke_dosen2`, `tanggal_chat_ke_dosen1`, `tanggal_chat_ke_dosen2`, `status_hapus_chat_ke_dosen1`, `status_hapus_chat_ke_dosen2`, `status_baca_mahasiswa_dari_dosen1`, `status_baca_mahasiswa_dari_dosen2`, `status_baca_dosen1`, `status_baca_dosen2`, `extensiFile_ke_dosen1`, `file_chat_ke_dosen2`, `chat_ke_dosen_2`, `file_chat_dosen1_ke_mhs`, `file_chat_dosen2_ke_mhs`, `chat_dari_dosen1`, `chat_dari_dosen2`, `tanggal_chat_dari_dosen1`, `tanggal_chat_dari_dosen2`, `status_hapus_chat_dari_dosen1`, `status_hapus_chat_dari_dosen2`, `extensiFile_ke_dosen2`, `extensiFileDosen1_ke_mhs`, `extensiFileDosen2_ke_mhs`) VALUES
(238, 'anselmus karno', 'srivan', '', '', 'hallo bu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(239, 'anselmus karno', 'srivan', '', '', 'maaf menggangu waktunya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(240, 'anselmus karno', 'srivan', '', '', 'saya anselmus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(241, 'anselmus karno', 'srivan', '', '', 'karno ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(243, 'anselmus karno', 'srivan', '', '', 'ingin konsul bu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(244, 'anselmus karno', 'srivan', '', '', 'ini file saya ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(246, 'anselmus karno', '', 'Aryo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'selamat malam pak', '', '', '', '', '', '', '', '', '', '', '0'),
(247, 'anselmus karno', '', 'Aryo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'saya anselmus ', '', '', '', '', '', '', '', '', '', '', '0'),
(248, 'anselmus karno', '', 'Aryo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'saya ingin konnsul pak', '', '', '', '', '', '', '', '', '', '', '0'),
(251, 'cobatest', '', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'nnnn', '', '', '', '', '', '', '', '', '', '', '0'),
(253, 'cobatest', 'jupri', '', '', 'nnnn', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(259, '', '', '', '', 'coba', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(260, '', '', '', '', 'd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(261, '', '', '', '', 'jj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(264, 'cobatest', '', 'vera', '', 'coba', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(266, 'cobatest', '', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ini adalah balasan dri dosen 2 untuk coba test', '', '', '', '', '', '', '0'),
(267, 'sri anna raya', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'coba', '', '', '', '', '', '', '', '0'),
(269, 'sri anna raya', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Anda menghapus pesan ini', '', '', '', '0'),
(273, 'sri anna raya', 'vera', '', '', 'umbanakua kabar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(278, 'cobatest', '', 'vera', '', '', '', '', '', '', 'Anda menghapus pesan ini', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(286, 'cobatest', 'jupri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Anda menghapus pesan ini', '', '', '', '0'),
(287, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', '', '', '', '', '', '', '', '0'),
(293, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dfdfdsf', '', '', '', '', '', '', '', '0'),
(294, 'Junanto', 'vera', '', '21761240AnselmusKarno_RDBMS.pdf', '', '', '', '', '', '', '', '', '', '', '', 'pdf', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(302, 'sri anna raya', '', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hallo', '', '', '', '', '', '', '', '', '', '', ''),
(305, 'sri anna raya', '', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Apriani T..pdf', '', '', '', '', '', '', '', '', '', 'pdf', '', ''),
(306, 'sri anna raya', 'vera', '', 'BAJU KAOS ENGLISH CLUB.png', '', '', '', '', '', '', '', '', '', '', '', 'png', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(308, 'sri anna raya', 'vera', '', '', '', '', '', '', '', 'Anda menghapus pesan ini', '', '', '', '', '', 'pdf', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(309, 'sri anna raya', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'apamora te sri', '', '', '', '', '', '', '', ''),
(310, 'sri anna raya', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'COPY PROTYPE SYSTEM PEMBUAT KOPI OTOMATIS - Copy.docx', '', '', '', '', '', '', '', '', 'docx', ''),
(311, 'sri anna raya', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'inde tu kembalianna', '', '', '', '', '', '', '', ''),
(312, 'anselmus karno', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '21761240AnselmusKarno_RDBMS_3.pdf', '', '', '', '', '', '', '', '', 'pdf', ''),
(313, 'sri anna raya', '', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' Petrus Torano (tgas 5).pdf', '', '', '', '', '', '', '', '', 'pdf'),
(314, 'sri anna raya', '', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BukuProfesiLLDikti (1).pdf', '', '', '', '', '', '', '', '', 'pdf'),
(315, 'sri anna raya', '', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dfdsfdsfs', '', '', '', '', '', '', '', '', '', '', ''),
(320, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'fsdfdsf', '', '', '', '', '', '', '', ''),
(321, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdfdsf', '', '', '', '', '', '', '', ''),
(322, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dsfdsfds', '', '', '', '', '', '', '', ''),
(323, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdfdsfds', '', '', '', '', '', '', '', ''),
(324, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dfsdfdsf', '', '', '', '', '', '', '', ''),
(325, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BASIC ECONOMIC CONCEPTS.docx', '', '', '', '', '', '', '', '', 'docx', ''),
(326, 'Junanto', 'vera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'oiiiiiii', '', '', '', '', '', '', '', ''),
(327, 'anselmus karno', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'oi', '', '', '', '', '', '', '', ''),
(328, 'anselmus karno', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'h', '', '', '', '', '', '', '', ''),
(329, 'anselmus karno', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'd', '', '', '', '', '', '', '', ''),
(330, 'anselmus karno', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a', '', '', '', '', '', '', '', ''),
(333, 'anselmus karno', 'eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'COPY PROTYPE SYSTEM PEMBUAT KOPI OTOMATIS - Copy_1.docx', '', '', '', '', '', '', '', '', 'docx', ''),
(334, 'anselmus karno', 'eko', '', '', 'apara so\' eko', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(335, 'anselmus karno', 'eko', '', 'MID Profesi Kependidikan ( Junanto Bumbungan ).pdf', '', '', '', '', '', '', '', '', '', '', '', 'pdf', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(336, 'anselmus karno', 'eko', '', '', 'iti\'mo tu tawamu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(337, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'woi christin', '', '', '', '', '', '', ''),
(339, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'umbanakua tu ujian', '', '', '', '', '', '', ''),
(340, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'seminar hasil mu ikute le', '', '', '', '', '', '', ''),
(341, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '?', '', '', '', '', '', '', ''),
(342, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'inde tu file mu', '', '', '', '', '', '', ''),
(343, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BAB 5 Bangun Ruang Sisi Lengkung_1.docx', '', '', '', '', '', '', '', '', 'docx'),
(345, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DI DOA IBUKU NAMAKU DISEBUT.docx', '', '', '', '', '', '', '', '', '', 'docx', '', ''),
(346, 'sri anna raya', 'vera', '', ' Petrus Torano (tgas 5)_1.pdf', '', '', '', '', '', '', '', '', '', '', '', 'pdf', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(347, 'salma', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'oiii', '', '', '', '', '', '', '', '', '', '', ''),
(348, 'salma', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'pak melki', '', '', '', '', '', '', '', '', '', '', ''),
(349, 'salma', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bu salma ini', '', '', '', '', '', '', '', '', '', '', ''),
(350, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BAB IV.docx', '', '', '', '', '', '', '', '', '', 'docx', '', ''),
(351, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', '', '', '', '', '', '', '', '', '', '', ''),
(354, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BATAS KUNJUNGAN.docx', '', '', '', '', '', '', '', '', 'docx'),
(355, 'salma', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kkkkkkkkkkkkkk', '', '', '', '', '', '', ''),
(356, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Selamat siang pak.', '', '', '', '', '', '', '', '', '', '', ''),
(357, 'christin', 'jupri', '', '', 'Selamat siang pak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(358, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Selamat siang pak.', '', '', '', '', '', '', '', '', '', '', ''),
(359, 'christin', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PROPOSAL CHRISTIN REVISI.pdf', '', '', '', '', '', '', '', '', '', 'pdf', '', ''),
(360, '', '', '', '1234.jpeg', '', '', '', '', '', '', '', '', '', '', '', 'jpeg', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(361, 'Christin Tania', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdfdsfs', '', '', '', '', '', '', ''),
(362, 'Christin Tania', '', 'melki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'megalcd.jpeg', '', '', '', '', '', '', '', '', 'jpeg'),
(363, 'Christin Tania', 'jupri', '', '', 'sfdsfdsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_dosen` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `username`, `password_dosen`, `nama_dosen`) VALUES
(2, 'dosen2', '12345678', 'melki'),
(5, 'dosen3', '12345678', 'srivan'),
(6, 'dosen4', '12345678', 'vera'),
(7, 'dosen5', '12345678', 'jupri'),
(8, 'dosen6', '12345678', 'eko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kaprodi`
--

CREATE TABLE `tb_kaprodi` (
  `id` int(11) NOT NULL,
  `username_kaprodi` varchar(255) NOT NULL,
  `password_kaprodi` varchar(255) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kaprodi`
--

INSERT INTO `tb_kaprodi` (`id`, `username_kaprodi`, `password_kaprodi`, `nama_kaprodi`) VALUES
(2, 'kaprodi', 'kaprodi123', 'srivan pallelleng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id` int(11) NOT NULL,
  `username_mahasiswa` varchar(255) NOT NULL,
  `password_mahasiswa` varchar(255) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama_dosen_1` varchar(255) NOT NULL,
  `nama_dosen_2` varchar(255) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `acc_dosen1` varchar(255) NOT NULL,
  `acc_dosen2` varchar(255) NOT NULL,
  `acc_kaprodi` varchar(255) NOT NULL,
  `file_skripsi` varchar(255) NOT NULL,
  `nama_ujian` varchar(255) NOT NULL,
  `judul_ta` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mhs`
--

INSERT INTO `tb_mhs` (`id`, `username_mahasiswa`, `password_mahasiswa`, `nama_mahasiswa`, `nim`, `nama_dosen_1`, `nama_dosen_2`, `nama_kaprodi`, `acc_dosen1`, `acc_dosen2`, `acc_kaprodi`, `file_skripsi`, `nama_ujian`, `judul_ta`, `nomor_hp`, `tanggal_input`) VALUES
(43, 'christin', '12345678', 'Christin Tania', '219611004', 'jupri', 'melki', 'srivan', '1', '1', '0', '0', 'tutup', 'Sistem Informasi Bimbingan Tugas Akhir Berbasis Web Menggunakan Metode Rapid Application Development (RAD)', '098989809', '4-Agustus-2023 Pukul 13 : 43'),
(44, 'sdfdsf', 'sfdsfsdf', 'sfdsf', 'sfsdf', 'vera', 'melki', 'sdfds', '0', '0', '0', '0', 'proposal', 'sdfdsf', 'sfsdfd', '4-Agustus-2023 Pukul 13 : 46'),
(45, 'sdfdsf', 'sdfdsf', 'coba', 'sdfdsfdsf', 'melki', 'srivan', 'cc', '0', '0', '0', '0', 'semhas', 'dsfdsfds', 'sdfdsf', '7-Agustus-2023 Pukul 17 : 0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `file_pengumuman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul_pengumuman`, `isi_pengumuman`, `file_pengumuman`) VALUES
(3, 'coba', 'dfdsf', 'kms.png'),
(6, 'Semhas hari ini', 'cobaaaaaaaaaaaaaaaaaaaaa', 'BAB IV_2.docx'),
(7, 'cccccc', 'ccccccccccccccccc', 'Kebijakan_PPDB_SMA_dan_SMK_DIY_2023.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_chat_admin_kaprodi`
--
ALTER TABLE `tb_chat_admin_kaprodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_chat_dosen_mahasiswa`
--
ALTER TABLE `tb_chat_dosen_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_chat_admin_kaprodi`
--
ALTER TABLE `tb_chat_admin_kaprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_chat_dosen_mahasiswa`
--
ALTER TABLE `tb_chat_dosen_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
