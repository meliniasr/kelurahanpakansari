-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2021 pada 10.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahliwaris`
--

CREATE TABLE `ahliwaris` (
  `id_ahliwaris` int(10) NOT NULL,
  `tgl_ahliwaris` date DEFAULT NULL,
  `nama_almarhum_ahliwaris` varchar(50) DEFAULT NULL,
  `nama_ahliwaris` varchar(50) DEFAULT NULL,
  `alamat_ahliwaris` text DEFAULT NULL,
  `keterangan_ahliwaris` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ahliwaris`
--

INSERT INTO `ahliwaris` (`id_ahliwaris`, `tgl_ahliwaris`, `nama_almarhum_ahliwaris`, `nama_ahliwaris`, `alamat_ahliwaris`, `keterangan_ahliwaris`) VALUES
(1, '2021-06-24', 'Tono', 'Rina', 'Kp. Cikempong', '-'),
(5, '2021-08-28', 'hai', 'hui', 'Kp. Curug', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ajb`
--

CREATE TABLE `ajb` (
  `id_ajb` int(10) NOT NULL,
  `tgl_ajb` date DEFAULT NULL,
  `nama_penjual_ajb` varchar(50) DEFAULT NULL,
  `kepemilikan_ajb` text DEFAULT NULL,
  `alamat_ajb` text DEFAULT NULL,
  `nama_pembeli_ajb` varchar(50) DEFAULT NULL,
  `nama_letter_ajb` varchar(50) DEFAULT NULL,
  `no_sppt_ajb` text DEFAULT NULL,
  `luastanah_ajb` text DEFAULT NULL,
  `no_sertifikat_ajb` text DEFAULT NULL,
  `lokasitanah_ajb` text DEFAULT NULL,
  `keterangan_ajb` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ajb`
--

INSERT INTO `ajb` (`id_ajb`, `tgl_ajb`, `nama_penjual_ajb`, `kepemilikan_ajb`, `alamat_ajb`, `nama_pembeli_ajb`, `nama_letter_ajb`, `no_sppt_ajb`, `luastanah_ajb`, `no_sertifikat_ajb`, `lokasitanah_ajb`, `keterangan_ajb`) VALUES
(1, '2021-06-23', 'Agus', 'afka', 'Kp. Curug', 'afjabf', 'fmafjafamfa', 'mnafjbaj', 'fmaf', 'fmanf', 'fajfaf', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belumpernahmenikah`
--

CREATE TABLE `belumpernahmenikah` (
  `id_bpm` int(10) NOT NULL,
  `tgl_bpm` date DEFAULT NULL,
  `nama_pemohon_bn` varchar(50) DEFAULT NULL,
  `ttl_lahir_bpm` text DEFAULT NULL,
  `jenis_kelamin_bpm` varchar(10) DEFAULT NULL,
  `nik_bpm` int(16) DEFAULT NULL,
  `pekerjaan_bpm` text DEFAULT NULL,
  `alamat_bpm` text DEFAULT NULL,
  `tujuan_bpm` text DEFAULT NULL,
  `keterangan_bpm` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `belumpernahmenikah`
--

INSERT INTO `belumpernahmenikah` (`id_bpm`, `tgl_bpm`, `nama_pemohon_bn`, `ttl_lahir_bpm`, `jenis_kelamin_bpm`, `nik_bpm`, `pekerjaan_bpm`, `alamat_bpm`, `tujuan_bpm`, `keterangan_bpm`) VALUES
(2, '2021-08-17', 'Melinia Suci R', 'Bogor, 14 Desember 1999', 'Perempuan', 32101, 'Programmer', 'Kp. Curug', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blangkobn`
--

CREATE TABLE `blangkobn` (
  `id_blangkobn` int(10) NOT NULL,
  `bulan_register_blangkobn` varchar(10) DEFAULT NULL,
  `tahun_register_blangkobn` varchar(10) DEFAULT NULL,
  `rt_blangkobn` text DEFAULT NULL,
  `tgl_suratpengantar_bn` text DEFAULT NULL,
  `nama_blangkobn` varchar(50) DEFAULT NULL,
  `jenis_kelamin_blangkobn` varchar(10) DEFAULT NULL,
  `ttl_blangkobn` text DEFAULT NULL,
  `bangsa_blangkobn` text DEFAULT NULL,
  `agama_blangkobn` varchar(20) DEFAULT NULL,
  `statusperkawinan_blangkobn` varchar(20) DEFAULT NULL,
  `nik_blangkobn` varchar(16) DEFAULT NULL,
  `pekerjaan_blangkobn` text DEFAULT NULL,
  `alamat_blangkobn` text DEFAULT NULL,
  `dipergunakan_untuk_blangkobn` text DEFAULT NULL,
  `tgl_dibuat_blangkobn` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blangkobn`
--

INSERT INTO `blangkobn` (`id_blangkobn`, `bulan_register_blangkobn`, `tahun_register_blangkobn`, `rt_blangkobn`, `tgl_suratpengantar_bn`, `nama_blangkobn`, `jenis_kelamin_blangkobn`, `ttl_blangkobn`, `bangsa_blangkobn`, `agama_blangkobn`, `statusperkawinan_blangkobn`, `nik_blangkobn`, `pekerjaan_blangkobn`, `alamat_blangkobn`, `dipergunakan_untuk_blangkobn`, `tgl_dibuat_blangkobn`) VALUES
(14, 'VIII', '2021', '004/007', '02-07-2021', 'NOVAN CHANDRA', 'Laki-laki', 'Bogor,  22-11-1997', 'Indonesia', 'Islam', 'Belum Kawin', '3201012211970014', 'Pelajar / Mahasiswa', 'Kp. Cikempong', 'Persyaratan Melamar Kerja  ', '31 Agustus 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blangkokematian`
--

CREATE TABLE `blangkokematian` (
  `id_blangkokematian` int(10) NOT NULL,
  `bulan_register_blangkokematian` varchar(10) NOT NULL,
  `tahun_register_blangkokematian` varchar(10) NOT NULL,
  `rt_blangkokematian` text NOT NULL,
  `tgl_suratpengantar_blangkokematian` text NOT NULL,
  `tgl_dibuat_blangkokematian` text NOT NULL,
  `nama_pemohon_blangkokematian` varchar(50) DEFAULT NULL,
  `nama_kepalakeluarga_blangkokematian` varchar(100) NOT NULL,
  `jenis_kelamin_blangkokematian` varchar(10) DEFAULT NULL,
  `ttl_blangkokematian` text DEFAULT NULL,
  `bangsa_blangkokematian` text DEFAULT NULL,
  `agama_blangkokematian` varchar(20) DEFAULT NULL,
  `nik_blangkokematian` varchar(16) DEFAULT NULL,
  `kk_blangkokematian` varchar(16) NOT NULL,
  `pekerjaan_blangkokematian` text DEFAULT NULL,
  `statuskawin_blangkokematian` varchar(15) DEFAULT NULL,
  `alamat_blangkokematian` text DEFAULT NULL,
  `statushubungankeluarga` varchar(30) NOT NULL,
  `nama_si_meninggal` varchar(50) NOT NULL,
  `tgl_kematian_blangkokematian` text NOT NULL,
  `dikarenakan_blangkokematian` text NOT NULL,
  `meninggal_di_blangkokematian` text NOT NULL,
  `tujuan_untuk_blangkokematian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blangkokematian`
--

INSERT INTO `blangkokematian` (`id_blangkokematian`, `bulan_register_blangkokematian`, `tahun_register_blangkokematian`, `rt_blangkokematian`, `tgl_suratpengantar_blangkokematian`, `tgl_dibuat_blangkokematian`, `nama_pemohon_blangkokematian`, `nama_kepalakeluarga_blangkokematian`, `jenis_kelamin_blangkokematian`, `ttl_blangkokematian`, `bangsa_blangkokematian`, `agama_blangkokematian`, `nik_blangkokematian`, `kk_blangkokematian`, `pekerjaan_blangkokematian`, `statuskawin_blangkokematian`, `alamat_blangkokematian`, `statushubungankeluarga`, `nama_si_meninggal`, `tgl_kematian_blangkokematian`, `dikarenakan_blangkokematian`, `meninggal_di_blangkokematian`, `tujuan_untuk_blangkokematian`) VALUES
(4, 'VIII', '2021', '003/007', '30 Agustus 2021', '31 Agustus 2021', 'RINA', 'Handri', 'Perempuan', 'Bogor, 15 Desember 2000', 'Indonesia', 'Islam', '3201012211970014', '3201012211970014', 'Karyawan Swasta', 'Belum Kawin', 'Kp. Cikempong', 'Anak', 'Rudi', '12-Maret-2009', 'Sakit', 'Rumah sakit', 'Persyaratan Pembuatan Akta Kematian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blangkoskck`
--

CREATE TABLE `blangkoskck` (
  `id_blangkoskck` int(10) NOT NULL,
  `bulan_register_blangkoskck` varchar(10) NOT NULL,
  `tahun_register_blangkoskck` varchar(10) NOT NULL,
  `rt_blangkoskck` text NOT NULL,
  `nomor_suratpengantar_blangkoskck` text NOT NULL,
  `nama_blangkoskck` varchar(50) DEFAULT NULL,
  `nama_kepalakeluarga_blangkoskck` varchar(50) NOT NULL,
  `jenis_kelamin_blangkoskck` varchar(10) DEFAULT NULL,
  `ttl_blangkoskck` text DEFAULT NULL,
  `bangsa_blangkoskck` text DEFAULT NULL,
  `agama_blangkoskck` varchar(20) DEFAULT NULL,
  `nik_blangkoskck` varchar(16) DEFAULT NULL,
  `kk_blangkoskck` varchar(16) NOT NULL,
  `pekerjaan_blangkoskck` text DEFAULT NULL,
  `statuskawin_blangkoskck` varchar(15) DEFAULT NULL,
  `alamat_blangkoskck` text DEFAULT NULL,
  `tujuan_untuk_blangkoskck` text NOT NULL,
  `tgl_dibuat_blangkoskck` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blangkoskck`
--

INSERT INTO `blangkoskck` (`id_blangkoskck`, `bulan_register_blangkoskck`, `tahun_register_blangkoskck`, `rt_blangkoskck`, `nomor_suratpengantar_blangkoskck`, `nama_blangkoskck`, `nama_kepalakeluarga_blangkoskck`, `jenis_kelamin_blangkoskck`, `ttl_blangkoskck`, `bangsa_blangkoskck`, `agama_blangkoskck`, `nik_blangkoskck`, `kk_blangkoskck`, `pekerjaan_blangkoskck`, `statuskawin_blangkoskck`, `alamat_blangkoskck`, `tujuan_untuk_blangkoskck`, `tgl_dibuat_blangkoskck`) VALUES
(11, 'VIII', '2021', '004/007', 'Sp/69/3/03/2021 ', 'JEPRI ARISTON', 'MERLIANA SINAGA', 'Laki-Laki', 'Bogor, 26 Oktober 2002', 'Indonesia', 'Kristen', '3201012611020001', '3201011910150010', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Kp. Curug', 'Persyaratan Melamar Kerja', '18 Agustus 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blangkosktm`
--

CREATE TABLE `blangkosktm` (
  `id_blangkosktm` int(10) NOT NULL,
  `bulan_register_blangkosktm` varchar(10) NOT NULL,
  `tahun_register_blangkosktm` varchar(10) NOT NULL,
  `rt_blangkosktm` text NOT NULL,
  `tgl_suratpengantar_blangkosktm` text NOT NULL,
  `nama_blangkosktm` varchar(50) DEFAULT NULL,
  `jenis_kelamin_blangkosktm` varchar(10) DEFAULT NULL,
  `ttl_blangkosktm` text NOT NULL,
  `bangsa_blangkosktm` text DEFAULT NULL,
  `agama_blangkosktm` varchar(20) DEFAULT NULL,
  `nik_blangkosktm` varchar(16) DEFAULT NULL,
  `kk_blangkosktm` varchar(16) NOT NULL,
  `pekerjaan_blangkosktm` text DEFAULT NULL,
  `statuskawin_blangkosktm` varchar(15) DEFAULT NULL,
  `alamat_blangkosktm` text DEFAULT NULL,
  `nama_anak_blangkosktm` varchar(50) NOT NULL,
  `nama_sekolah_blangkosktm` text NOT NULL,
  `tgl_dibuat_blangkosktm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blangkosktm`
--

INSERT INTO `blangkosktm` (`id_blangkosktm`, `bulan_register_blangkosktm`, `tahun_register_blangkosktm`, `rt_blangkosktm`, `tgl_suratpengantar_blangkosktm`, `nama_blangkosktm`, `jenis_kelamin_blangkosktm`, `ttl_blangkosktm`, `bangsa_blangkosktm`, `agama_blangkosktm`, `nik_blangkosktm`, `kk_blangkosktm`, `pekerjaan_blangkosktm`, `statuskawin_blangkosktm`, `alamat_blangkosktm`, `nama_anak_blangkosktm`, `nama_sekolah_blangkosktm`, `tgl_dibuat_blangkosktm`) VALUES
(2, 'VIII', '2021', '002/011 ', '14 – 06 - 2021', 'MARIANTO', 'Laki-laki', 'Medan, 27 -12- 1967', 'Indonesia', 'Islam', '3174092712570011', '3201010707200006', 'Sopir', 'Belum Kawin', 'Kp. Cikempong', 'YULIA RAMADHANI', 'SMPN 3 KUALUH HULU', '16 Agustus 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blangkosku`
--

CREATE TABLE `blangkosku` (
  `id_blangkosku` int(10) NOT NULL,
  `bulan_register_blangkosku` varchar(10) NOT NULL,
  `tahun_register_blangkosku` varchar(10) NOT NULL,
  `nama_blangkosku` varchar(50) DEFAULT NULL,
  `jenis_kelamin_blangkosku` varchar(10) DEFAULT NULL,
  `ttl_blangkosku` text DEFAULT NULL,
  `bangsa_blangkosku` text DEFAULT NULL,
  `agama_blangkosku` varchar(20) DEFAULT NULL,
  `nik_blangkosku` varchar(16) DEFAULT NULL,
  `pekerjaan_blangkosku` text DEFAULT NULL,
  `alamat_blangkosku` text DEFAULT NULL,
  `rt_blangkosku` varchar(10) NOT NULL,
  `tgl_dibuat_blangkosku` text NOT NULL,
  `usaha_apa_blangkosku` text NOT NULL,
  `tujuan_keperluan_blangkosku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blangkosku`
--

INSERT INTO `blangkosku` (`id_blangkosku`, `bulan_register_blangkosku`, `tahun_register_blangkosku`, `nama_blangkosku`, `jenis_kelamin_blangkosku`, `ttl_blangkosku`, `bangsa_blangkosku`, `agama_blangkosku`, `nik_blangkosku`, `pekerjaan_blangkosku`, `alamat_blangkosku`, `rt_blangkosku`, `tgl_dibuat_blangkosku`, `usaha_apa_blangkosku`, `tujuan_keperluan_blangkosku`) VALUES
(6, 'VIII', '2021', 'Melinia Suci Ramadhani', 'Laki-laki', 'Bogor, 14 Desember 1999', 'Indonesia', 'Islam', '3201012211970014', 'Pelajar/Mahasiswa', 'Kp. Curug', '003/007', '31 Agustus 2021', 'Warung Sembako', 'Persyaratan Pengajuan UMKM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisilikoperai`
--

CREATE TABLE `domisilikoperai` (
  `id_koperasi` int(10) NOT NULL,
  `tgl_koperasi` date DEFAULT NULL,
  `nama_pemilikkoperasi` varchar(50) DEFAULT NULL,
  `tempat_lahir_koperasi` text DEFAULT NULL,
  `ttl_lahir_koperasi` date DEFAULT NULL,
  `pekerjaan_koperasi` text DEFAULT NULL,
  `alamat_koperasi` text DEFAULT NULL,
  `no_ktp_koperasi` int(16) DEFAULT NULL,
  `jenis_koperasi` text DEFAULT NULL,
  `status_kepemilikan` text DEFAULT NULL,
  `nama_koperasi` varchar(50) DEFAULT NULL,
  `lokasi_koperasi` text DEFAULT NULL,
  `keterangan_koperasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `domisilikoperai`
--

INSERT INTO `domisilikoperai` (`id_koperasi`, `tgl_koperasi`, `nama_pemilikkoperasi`, `tempat_lahir_koperasi`, `ttl_lahir_koperasi`, `pekerjaan_koperasi`, `alamat_koperasi`, `no_ktp_koperasi`, `jenis_koperasi`, `status_kepemilikan`, `nama_koperasi`, `lokasi_koperasi`, `keterangan_koperasi`) VALUES
(3, '2021-08-17', 'Melinia', 'Bogor', '1999-09-14', 'Pelajar/Mahasiswa', '', 320101, '-', '-', '-', 'Kp. Curug', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izinrame`
--

CREATE TABLE `izinrame` (
  `id_izinrame` int(10) NOT NULL,
  `tgl_izinrame` date DEFAULT NULL,
  `nama_pemohon_izinrame` varchar(50) DEFAULT NULL,
  `tempat_lahir_izinrame` text DEFAULT NULL,
  `ttl_izinrame` date DEFAULT NULL,
  `jenis_kelamin_izinrame` varchar(10) DEFAULT NULL,
  `nik_izinrame` int(16) DEFAULT NULL,
  `pekerjaan_izinrame` text DEFAULT NULL,
  `alamat_izinrame` text DEFAULT NULL,
  `waktu_izinrame` date DEFAULT NULL,
  `acara_izinrame` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `izinrame`
--

INSERT INTO `izinrame` (`id_izinrame`, `tgl_izinrame`, `nama_pemohon_izinrame`, `tempat_lahir_izinrame`, `ttl_izinrame`, `jenis_kelamin_izinrame`, `nik_izinrame`, `pekerjaan_izinrame`, `alamat_izinrame`, `waktu_izinrame`, `acara_izinrame`) VALUES
(1, '2021-06-23', 'Melinia', 'Bogor', '1999-12-14', 'Perempuan', 3212, 'Programmer', 'Kp. Cikempong', '2021-07-02', 'Acara Sembako Murah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` int(10) NOT NULL,
  `tgl_kelahiran` date DEFAULT NULL,
  `nama_anak_kelahiran` varchar(50) DEFAULT NULL,
  `tempat_lahir_kelahiran` text DEFAULT NULL,
  `ttl_kelahiran` date DEFAULT NULL,
  `jenis_kelamin_kelahiran` varchar(10) DEFAULT NULL,
  `nama_bapak_kelahiran` varchar(50) DEFAULT NULL,
  `nama_ibu_kelahiran` varchar(50) DEFAULT NULL,
  `alamat_kelahiran` text DEFAULT NULL,
  `keterangan_kelahiran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `tgl_kelahiran`, `nama_anak_kelahiran`, `tempat_lahir_kelahiran`, `ttl_kelahiran`, `jenis_kelamin_kelahiran`, `nama_bapak_kelahiran`, `nama_ibu_kelahiran`, `alamat_kelahiran`, `keterangan_kelahiran`) VALUES
(2, '2021-07-25', 'Nur', 'Lampung', '1998-12-12', 'Perempuan', 'Adi', 'Inah', 'Kp.Curug', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(10) NOT NULL,
  `tgl_keterangankematian` date DEFAULT NULL,
  `nama_kematian` varchar(50) DEFAULT NULL,
  `tempat_lahir_kematian` text DEFAULT NULL,
  `ttl_kematian` date DEFAULT NULL,
  `jenis_kelamin_kematian` varchar(10) DEFAULT NULL,
  `agama_kematian` varchar(20) DEFAULT NULL,
  `alamat_kematian` text DEFAULT NULL,
  `keterangan_kematian` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `tgl_keterangankematian`, `nama_kematian`, `tempat_lahir_kematian`, `ttl_kematian`, `jenis_kelamin_kematian`, `agama_kematian`, `alamat_kematian`, `keterangan_kematian`) VALUES
(6, '2021-06-23', 'Manda', 'Bogor', '1999-12-12', 'Perempuan', 'Islam', 'Nanggewer Mekar', '-'),
(8, '2021-07-25', 'Gina', 'Bogor', '1999-11-15', 'Perempuan', 'Islam', 'Bogor', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kependudukkan`
--

CREATE TABLE `kependudukkan` (
  `id_kp` int(10) NOT NULL,
  `tgl_kp` date NOT NULL,
  `nik_kp` int(16) DEFAULT NULL,
  `kk_kp` int(16) DEFAULT NULL,
  `nama_pemohon_kp` varchar(50) DEFAULT NULL,
  `tempat_lahir_kp` text DEFAULT NULL,
  `ttl_kp` date DEFAULT NULL,
  `jenis_kelamin_kp` varchar(10) DEFAULT NULL,
  `status_kp` text DEFAULT NULL,
  `alamat_kp` text DEFAULT NULL,
  `keterangan_kp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kependudukkan`
--

INSERT INTO `kependudukkan` (`id_kp`, `tgl_kp`, `nik_kp`, `kk_kp`, `nama_pemohon_kp`, `tempat_lahir_kp`, `ttl_kp`, `jenis_kelamin_kp`, `status_kp`, `alamat_kp`, `keterangan_kp`) VALUES
(2, '2021-07-25', 2147483647, 2147483647, 'Haris', 'Bandung', '1996-11-21', 'Laki-laki', 'Anak', 'Kp. Cikempong', '-'),
(3, '2021-07-25', 32010443, 3202466, 'Yuki', 'Jepang', '1997-03-01', 'Perempuan', 'Anak', 'Kp. Curug', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keteranganghoib`
--

CREATE TABLE `keteranganghoib` (
  `id_ghoib` int(10) NOT NULL,
  `tgl_ghoib` date DEFAULT NULL,
  `nama_ghoib` varchar(50) DEFAULT NULL,
  `tempat_lahir_ghoib` text DEFAULT NULL,
  `ttl_lahir_ghoib` date DEFAULT NULL,
  `pekerjaan_ghoib` text DEFAULT NULL,
  `jenis_kelamin_ghoib` varchar(10) DEFAULT NULL,
  `agama_ghoib` varchar(20) NOT NULL,
  `alamat_ghoib` text DEFAULT NULL,
  `no_suratnikah_ghoib` text DEFAULT NULL,
  `keterangan_ghoib` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keteranganghoib`
--

INSERT INTO `keteranganghoib` (`id_ghoib`, `tgl_ghoib`, `nama_ghoib`, `tempat_lahir_ghoib`, `ttl_lahir_ghoib`, `pekerjaan_ghoib`, `jenis_kelamin_ghoib`, `agama_ghoib`, `alamat_ghoib`, `no_suratnikah_ghoib`, `keterangan_ghoib`) VALUES
(1, '2021-06-24', 'Nia', 'kkhih', '2021-06-08', 'Pelajar/Mahasiswa', 'Perempuan', 'Islam', 'Kp. Cikempong', '32212', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendudukdatang`
--

CREATE TABLE `pendudukdatang` (
  `id_pendudukdatang` int(10) NOT NULL,
  `tgl_pendudukdatang` date DEFAULT NULL,
  `nama_pendudukdatang` varchar(50) DEFAULT NULL,
  `tempat_lahir_pendudukdatang` text DEFAULT NULL,
  `ttl_pendudukdatang` date DEFAULT NULL,
  `pekerjaan_pendudukdatang` text DEFAULT NULL,
  `jenis_kelamin_pendudukdatang` varchar(10) DEFAULT NULL,
  `nik_pendudukdatang` int(16) DEFAULT NULL,
  `alamat_datang_pendudukdatang` text DEFAULT NULL,
  `alamat_asal_pendudukdatang` text NOT NULL,
  `keterangan_pendudukdatang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendudukdatang`
--

INSERT INTO `pendudukdatang` (`id_pendudukdatang`, `tgl_pendudukdatang`, `nama_pendudukdatang`, `tempat_lahir_pendudukdatang`, `ttl_pendudukdatang`, `pekerjaan_pendudukdatang`, `jenis_kelamin_pendudukdatang`, `nik_pendudukdatang`, `alamat_datang_pendudukdatang`, `alamat_asal_pendudukdatang`, `keterangan_pendudukdatang`) VALUES
(2, '2021-07-28', 'Tedy', 'Jambi', '2000-03-09', 'Karyawan Swasta', 'Laki-laki', 3218376, 'Kp. Curug', 'Bandung', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiunan`
--

CREATE TABLE `pensiunan` (
  `id_pensiun` int(10) NOT NULL,
  `tgl_pensiun` date DEFAULT NULL,
  `nama_pensiun` varchar(50) DEFAULT NULL,
  `tempat_lahir_pensiun` text DEFAULT NULL,
  `ttl_lahir_pensiun` date DEFAULT NULL,
  `pensiunan` text DEFAULT NULL,
  `jenis_kelamin_pensiun` varchar(10) DEFAULT NULL,
  `agama_pensiun` varchar(20) DEFAULT NULL,
  `alamat_pensiun` text DEFAULT NULL,
  `tujuan_pensiun` text DEFAULT NULL,
  `keterangan_pensiun` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pensiunan`
--

INSERT INTO `pensiunan` (`id_pensiun`, `tgl_pensiun`, `nama_pensiun`, `tempat_lahir_pensiun`, `ttl_lahir_pensiun`, `pensiunan`, `jenis_kelamin_pensiun`, `agama_pensiun`, `alamat_pensiun`, `tujuan_pensiun`, `keterangan_pensiun`) VALUES
(2, '2021-08-17', 'Melinia', 'Bogor', '1999-12-12', '-', 'Perempuan', 'Islam', 'Kp. Curug', '-', '-'),
(3, '2021-08-17', 'Sylviana', 'Bogor', '2000-08-09', '-', 'Perempuan', 'Islam', 'Kp. Cikempong', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonanproposal`
--

CREATE TABLE `permohonanproposal` (
  `id_permohonanproposal` int(10) NOT NULL,
  `tgl_permohonanproposal` date DEFAULT NULL,
  `perihal_proposal` text DEFAULT NULL,
  `no_proposal` varchar(128) DEFAULT NULL,
  `tgl_proposal` date DEFAULT NULL,
  `penanggungjawab_proposal` text DEFAULT NULL,
  `pemohon_proposal` varchar(50) NOT NULL,
  `alamat_proposal` text DEFAULT NULL,
  `keterangan_proposal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permohonanproposal`
--

INSERT INTO `permohonanproposal` (`id_permohonanproposal`, `tgl_permohonanproposal`, `perihal_proposal`, `no_proposal`, `tgl_proposal`, `penanggungjawab_proposal`, `pemohon_proposal`, `alamat_proposal`, `keterangan_proposal`) VALUES
(3, '2021-08-31', 'Ada', '3201900', '2021-08-31', 'Melinia', 'KP', 'Kp. Curug', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pernyataanhaji`
--

CREATE TABLE `pernyataanhaji` (
  `id_haji` int(10) NOT NULL,
  `tgl_haji` date DEFAULT NULL,
  `nama_haji` varchar(50) DEFAULT NULL,
  `tempat_lahir_haji` text DEFAULT NULL,
  `ttl_lahir_haji` date DEFAULT NULL,
  `no_ktp_haji` int(16) DEFAULT NULL,
  `jenis_kelamin_haji` varchar(10) DEFAULT NULL,
  `pekerjaan_haji` text DEFAULT NULL,
  `alamat_haji` text DEFAULT NULL,
  `keterangan_haji` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pernyataanhaji`
--

INSERT INTO `pernyataanhaji` (`id_haji`, `tgl_haji`, `nama_haji`, `tempat_lahir_haji`, `ttl_lahir_haji`, `no_ktp_haji`, `jenis_kelamin_haji`, `pekerjaan_haji`, `alamat_haji`, `keterangan_haji`) VALUES
(2, '2021-08-17', 'Melinia', 'Bogor', '2000-12-15', 3201, 'Perempuan', 'Pelajar/Mahasiswa', 'Kp. Curug', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registermenikah`
--

CREATE TABLE `registermenikah` (
  `id_menikah` int(10) NOT NULL,
  `tgl_menikah` date DEFAULT NULL,
  `nama_suami_menikah` varchar(50) DEFAULT NULL,
  `tempat_lahir_suami` text DEFAULT NULL,
  `tgl_lahir_suami` date DEFAULT NULL,
  `alamat_suami` text DEFAULT NULL,
  `status_suami` text DEFAULT NULL,
  `pekerjaan_menikah` text DEFAULT NULL,
  `nama_istri_menikah` varchar(50) DEFAULT NULL,
  `tempat_lahir_istri` text DEFAULT NULL,
  `tgl_lahir_istri` date DEFAULT NULL,
  `alamat_istri` text DEFAULT NULL,
  `status_istri` text DEFAULT NULL,
  `keterangan_menikah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registermenikah`
--

INSERT INTO `registermenikah` (`id_menikah`, `tgl_menikah`, `nama_suami_menikah`, `tempat_lahir_suami`, `tgl_lahir_suami`, `alamat_suami`, `status_suami`, `pekerjaan_menikah`, `nama_istri_menikah`, `tempat_lahir_istri`, `tgl_lahir_istri`, `alamat_istri`, `status_istri`, `keterangan_menikah`) VALUES
(3, '2021-08-17', 'Kino', 'Bandung', '1997-12-12', '-', 'Jejaka', 'Karyawan Swasta', 'Mila', 'Bogor', '1998-12-12', 'Kp. Cikempong', 'Jejaka', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahtinggal`
--

CREATE TABLE `rumahtinggal` (
  `id_rt` int(10) NOT NULL,
  `tgl_rt` date DEFAULT NULL,
  `nama_rt` varchar(50) DEFAULT NULL,
  `tempat_lahir_rt` text DEFAULT NULL,
  `tgl_lahir_rt` date DEFAULT NULL,
  `pekerjaan_rt` text DEFAULT NULL,
  `jenis_kelamin_rt` varchar(10) DEFAULT NULL,
  `agama_rt` varchar(10) DEFAULT NULL,
  `alamat_rt` text DEFAULT NULL,
  `diperumahan_rt` text DEFAULT NULL,
  `keterangan_rt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumahtinggal`
--

INSERT INTO `rumahtinggal` (`id_rt`, `tgl_rt`, `nama_rt`, `tempat_lahir_rt`, `tgl_lahir_rt`, `pekerjaan_rt`, `jenis_kelamin_rt`, `agama_rt`, `alamat_rt`, `diperumahan_rt`, `keterangan_rt`) VALUES
(2, '2021-08-17', 'Mila', 'Bogor', '2000-08-15', 'Karywan Swasta', 'Perempuan', 'Islam', 'Kp. Cikempong', '-', '-'),
(3, '2021-08-17', 'Cahya', 'Surabaya', '1997-12-12', 'Pelajar/Mahasiswa', 'Laki-laki', 'Islam', '', '-', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skck`
--

CREATE TABLE `skck` (
  `id_skck` int(10) NOT NULL,
  `tgl_skck` date DEFAULT NULL,
  `nama_skck` varchar(50) DEFAULT NULL,
  `tempat_lahir_skck` text DEFAULT NULL,
  `ttl_skck` date DEFAULT NULL,
  `jenis_kelamin_skck` varchar(10) DEFAULT NULL,
  `status_perkawinan_skck` varchar(10) DEFAULT NULL,
  `agama_skck` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir_skck` varchar(35) DEFAULT NULL,
  `alamat_skck` text DEFAULT NULL,
  `nik_skck` int(16) DEFAULT NULL,
  `tujuan_skck` text DEFAULT NULL,
  `keterangan_skck` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skck`
--

INSERT INTO `skck` (`id_skck`, `tgl_skck`, `nama_skck`, `tempat_lahir_skck`, `ttl_skck`, `jenis_kelamin_skck`, `status_perkawinan_skck`, `agama_skck`, `pendidikan_terakhir_skck`, `alamat_skck`, `nik_skck`, `tujuan_skck`, `keterangan_skck`) VALUES
(2, '2021-07-28', 'Suci', 'Bandung', '1998-12-12', 'Perempuan', 'Kawin', 'Islam', 'Akademi/Diploma III/Sarjana Muda', 'Kp. Curug', 32018886, 'Melamar Kerja', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skl`
--

CREATE TABLE `skl` (
  `id_skl` int(10) NOT NULL,
  `bulan_register_skl` varchar(10) NOT NULL,
  `tahun_register_skl` varchar(10) NOT NULL,
  `rt_skl` varchar(10) NOT NULL,
  `tgl_suratpengantar_skl` text NOT NULL,
  `kk_skl` varchar(16) NOT NULL,
  `surat_rumahsakit` text DEFAULT NULL,
  `no_aktanikah` text NOT NULL,
  `tgl_dikeluarkan_akta` text NOT NULL,
  `tgl_dikeluarkan_skl` text NOT NULL,
  `jenis_kelamin_anak` varchar(10) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `anak_ke` int(10) NOT NULL,
  `tempat_lahir_anak_skl` text NOT NULL,
  `hari_lahir_anak_skl` varchar(10) NOT NULL,
  `tgl_lahir_anak_skl` text NOT NULL,
  `jam_lahir_anak_skl` text NOT NULL,
  `nama_ayah_skl` varchar(50) DEFAULT NULL,
  `jenis_kelamin_ayah_skl` varchar(10) DEFAULT NULL,
  `ttl_ayah_skl` text DEFAULT NULL,
  `bangsa_ayah_skl` text DEFAULT NULL,
  `agama_ayah_skl` varchar(20) DEFAULT NULL,
  `nik_ayah_skl` varchar(16) DEFAULT NULL,
  `pekerjaan_ayah_skl` text DEFAULT NULL,
  `nama_ibu_skl` varchar(50) DEFAULT NULL,
  `jenis_kelamin_ibu_skl` varchar(10) DEFAULT NULL,
  `ttl_ibu_skl` text DEFAULT NULL,
  `bangsa_ibu_skl` text DEFAULT NULL,
  `agama_ibu` varchar(20) DEFAULT NULL,
  `nik_ibu_skl` varchar(16) DEFAULT NULL,
  `pekerjaan_ibu_skl` text DEFAULT NULL,
  `alamat_skl` text DEFAULT NULL,
  `tgl_dibuat_suratskl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skl`
--

INSERT INTO `skl` (`id_skl`, `bulan_register_skl`, `tahun_register_skl`, `rt_skl`, `tgl_suratpengantar_skl`, `kk_skl`, `surat_rumahsakit`, `no_aktanikah`, `tgl_dikeluarkan_akta`, `tgl_dikeluarkan_skl`, `jenis_kelamin_anak`, `nama_anak`, `anak_ke`, `tempat_lahir_anak_skl`, `hari_lahir_anak_skl`, `tgl_lahir_anak_skl`, `jam_lahir_anak_skl`, `nama_ayah_skl`, `jenis_kelamin_ayah_skl`, `ttl_ayah_skl`, `bangsa_ayah_skl`, `agama_ayah_skl`, `nik_ayah_skl`, `pekerjaan_ayah_skl`, `nama_ibu_skl`, `jenis_kelamin_ibu_skl`, `ttl_ibu_skl`, `bangsa_ibu_skl`, `agama_ibu`, `nik_ibu_skl`, `pekerjaan_ibu_skl`, `alamat_skl`, `tgl_dibuat_suratskl`) VALUES
(5, 'VIII', '2021', '001/004 ', '02 Juli 2021', '3201011208131025', 'RS. TRIMITRA No. XI/TMT/2020', '527/184/III/2012 ', '25-03-2012', '04-11-2020', 'Perempuan', 'SHAFFANA SHAQUEENA ZAINI', 2, 'Bogor', 'Senin', '04-11-2020 ', '09:40', 'AHMAD ZAINI', 'Laki-laki', 'Bogor, 06-12-1987', 'Indonesia', 'Islam', '3201010612871002', 'Karyawan Swasta', 'DESI', 'Perempuan', 'Bogor, 28-12-1988', 'Indonesia', 'Islam', '3201016812880003', 'Pelajar/Mahasiswa', 'Kp. Curug', '31 Agustus 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sktm`
--

CREATE TABLE `sktm` (
  `id_sktm` int(10) NOT NULL,
  `tgl_sktm` date DEFAULT NULL,
  `nama_pemohon_sktm` varchar(50) DEFAULT NULL,
  `tempat_lahir_sktm` text DEFAULT NULL,
  `ttl_lahir_sktm` date DEFAULT NULL,
  `jenis_kelamin_sktm` varchar(10) DEFAULT NULL,
  `nik_sktm` int(16) DEFAULT NULL,
  `pekerjaan_sktm` text DEFAULT NULL,
  `alamat_sktm` text DEFAULT NULL,
  `tujuan_sktm` text DEFAULT NULL,
  `keterangan_sktm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sktm`
--

INSERT INTO `sktm` (`id_sktm`, `tgl_sktm`, `nama_pemohon_sktm`, `tempat_lahir_sktm`, `ttl_lahir_sktm`, `jenis_kelamin_sktm`, `nik_sktm`, `pekerjaan_sktm`, `alamat_sktm`, `tujuan_sktm`, `keterangan_sktm`) VALUES
(2, '2021-08-17', 'Januar', 'Jakarta', '1997-01-01', 'Laki-laki', 32019, 'Pelajar/Mahasiswa', 'Kp. Cikempong', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppt`
--

CREATE TABLE `sppt` (
  `id_sppt` int(10) NOT NULL,
  `tgl_sppt` date DEFAULT NULL,
  `nama_sppt` varchar(50) DEFAULT NULL,
  `tempat_lahir_sppt` text DEFAULT NULL,
  `ttl_sppt` date DEFAULT NULL,
  `jenis_kelamin_sppt` varchar(10) DEFAULT NULL,
  `bukti_kepemilikan` text DEFAULT NULL,
  `alamat_sppt` text DEFAULT NULL,
  `lokasitanah_sppt` text DEFAULT NULL,
  `luas_tanah_sppt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sppt`
--

INSERT INTO `sppt` (`id_sppt`, `tgl_sppt`, `nama_sppt`, `tempat_lahir_sppt`, `ttl_sppt`, `jenis_kelamin_sppt`, `bukti_kepemilikan`, `alamat_sppt`, `lokasitanah_sppt`, `luas_tanah_sppt`) VALUES
(1, '2021-06-23', 'Agus', 'Bogor', '1999-06-15', 'Laki-laki', '-', '-', 'ajfja', 'bjjv'),
(2, '2021-07-25', 'Haris', 'Inggris', '1996-02-22', 'Laki-laki', '-', 'Kp. Cikempong', 'Kp. Cikempong', '1000m2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(10) NOT NULL,
  `nama_instansi_sk` varchar(50) DEFAULT NULL,
  `no_suratkeluar` varchar(128) DEFAULT NULL,
  `tgl_suratkeluar` date DEFAULT NULL,
  `prihal_suratkeluar` text DEFAULT NULL,
  `penanggungjawab_suratkeluar` varchar(40) DEFAULT NULL,
  `tgl_pengiriman_sk` date DEFAULT NULL,
  `keterangan_suratkeluar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `nama_instansi_sk`, `no_suratkeluar`, `tgl_suratkeluar`, `prihal_suratkeluar`, `penanggungjawab_suratkeluar`, `tgl_pengiriman_sk`, `keterangan_suratkeluar`) VALUES
(1, 'nabbcja', '6253612', '2021-06-24', 'zcjas', 'ackab', '2021-06-16', 'yiya'),
(2, 'PT', '123', '2021-07-07', 'jkjh', 'Melinia SR', '1999-12-14', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(10) NOT NULL,
  `tgl_pengiriman` date DEFAULT NULL,
  `nama_instansi_sm` varchar(50) DEFAULT NULL,
  `no_suratmasuk` int(10) DEFAULT NULL,
  `tgl_suratmasuk` date DEFAULT NULL,
  `prihal_suratmasuk` text DEFAULT NULL,
  `penanggungjawab_suratmasuk` varchar(40) DEFAULT NULL,
  `keterangan_suratmasuk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `tgl_pengiriman`, `nama_instansi_sm`, `no_suratmasuk`, `tgl_suratmasuk`, `prihal_suratmasuk`, `penanggungjawab_suratmasuk`, `keterangan_suratmasuk`) VALUES
(16, '2021-08-16', 'UNIVERSITAS IBN KHALDUN BOGOR', 1721, '2021-08-15', ' ada', 'ada', '-'),
(17, '2021-08-26', 'SMPN 15 BOGOR', 1721, '2021-08-26', 'Sertifikat', 'ada', '-'),
(21, '2021-08-28', 'UNIVERSITAS IBN KHALDUN BOGOR', 1721, '2021-08-28', 'Sertifikat', 'ajbjab', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tidaksengketa`
--

CREATE TABLE `tidaksengketa` (
  `id_tidaksengketa` int(10) NOT NULL,
  `tgl_tidaksengketa` date DEFAULT NULL,
  `nama_pemohon_tidaksengketa` varchar(50) DEFAULT NULL,
  `suratkepemilikan_tidaksengketa` text DEFAULT NULL,
  `alamat_tidaksengketa` text DEFAULT NULL,
  `keterangan_tidaksengketa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tidaksengketa`
--

INSERT INTO `tidaksengketa` (`id_tidaksengketa`, `tgl_tidaksengketa`, `nama_pemohon_tidaksengketa`, `suratkepemilikan_tidaksengketa`, `alamat_tidaksengketa`, `keterangan_tidaksengketa`) VALUES
(2, '2021-08-17', 'Wayuni', '-', 'Kp. Cikempong', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umum`
--

CREATE TABLE `umum` (
  `id_umum` int(10) NOT NULL,
  `tgl_umum` date DEFAULT NULL,
  `nama_umum` varchar(50) DEFAULT NULL,
  `tempat_lahir_umum` text DEFAULT NULL,
  `ttl_lahir_umum` date DEFAULT NULL,
  `pekerjaan_umum` text DEFAULT NULL,
  `jenis_kelamin_umum` varchar(10) DEFAULT NULL,
  `agama_umum` varchar(10) DEFAULT NULL,
  `tujuan_umum` text DEFAULT NULL,
  `keterangan_umum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `umum`
--

INSERT INTO `umum` (`id_umum`, `tgl_umum`, `nama_umum`, `tempat_lahir_umum`, `ttl_lahir_umum`, `pekerjaan_umum`, `jenis_kelamin_umum`, `agama_umum`, `tujuan_umum`, `keterangan_umum`) VALUES
(2, '2021-06-11', 'Nia', 'Bogor', '1999-12-14', 'Pelajar/Mahasiswa', 'Laki-laki', 'Islam', 'ada', ''),
(7, '2021-06-24', 'Melinia', 'Bogor', '1999-12-14', 'Pelajar/Mahasiswa', 'Perempuan', 'Islam', 'IYA', 'afaafag'),
(9, '2021-06-26', 'Anton', 'Bandung', '1999-12-12', 'Pelajar/Mahasiswa', 'Laki-laki', 'Kristen', 'sgs', 'Iya'),
(10, '2021-06-24', 'Melinia', 'Bandung', '1998-12-12', 'Pelajar/Mahasiswa', 'Perempuan', 'Islam', 'afaf', 'afafag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(10) NOT NULL,
  `tgl_usaha` date DEFAULT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `tempat_lahir_usaha` text DEFAULT NULL,
  `ttl_usaha` date DEFAULT NULL,
  `pekerjaan_usaha` text DEFAULT NULL,
  `alamat_usaha` text DEFAULT NULL,
  `no_ktp_usaha` varchar(20) DEFAULT NULL,
  `jenis_usaha` text DEFAULT NULL,
  `statuskepemilikan_usaha` text NOT NULL,
  `bank_usaha` varchar(20) DEFAULT NULL,
  `lokasi_usaha` text DEFAULT NULL,
  `keterangan_usaha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `tgl_usaha`, `nama_usaha`, `tempat_lahir_usaha`, `ttl_usaha`, `pekerjaan_usaha`, `alamat_usaha`, `no_ktp_usaha`, `jenis_usaha`, `statuskepemilikan_usaha`, `bank_usaha`, `lokasi_usaha`, `keterangan_usaha`) VALUES
(2, '2021-07-03', 'Melinia', 'Bogor', '1999-12-14', 'Pelajar/Mahasiswa', 'Nanggewer Mekar', '32010', 'Warung Sembako', 'Agus', 'Warung Melly Cell', 'Warung Melly Cell', 'Warung Melly Cell'),
(3, '2021-08-17', 'Agung', 'Bogor', '1999-11-28', 'Pelajar/Mahasiswa', 'Kp. Cikempong', '3200', 'Minuman Jelly Potter', 'Agus', 'Warung Mas Agung', 'Warung Mas Agung', 'Warung Mas Agung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `posisi_pekerjaan` varchar(128) NOT NULL,
  `no_hp` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `alamat`, `posisi_pekerjaan`, `no_hp`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Melinia Suci Ramadhani', 'melinia.sr', 'meliniasr14@gmail.com', 'Puri Alam Kencana 1 Block C no 09 RT 03/ RW 07 Nanggewer Mekar, Cibinong-Bogor 16912', 'Web Developer', '087824317618', 'default.jpg', '$2y$10$ZPrev8GWHA/lKBhYOnivY.kCz7YW6IZo8db0Xz80.ja33Mpj/JExK', 2, 1, 1629945355),
(10, 'Sylviana Yuniar', 'vi2', 'sylvianayuniar96@gmail.com', 'Kp. Blok Ringkem', 'Pelajar/Mahasiswa', '082123947485', 'default.jpg', '$2y$10$5P93jiNf.qp0GF/TLFiUK.EHrvCI2NGZIuos3kim84AEh6.Iji8NW', 2, 1, 1630122724);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ahliwaris`
--
ALTER TABLE `ahliwaris`
  ADD PRIMARY KEY (`id_ahliwaris`);

--
-- Indeks untuk tabel `ajb`
--
ALTER TABLE `ajb`
  ADD PRIMARY KEY (`id_ajb`);

--
-- Indeks untuk tabel `belumpernahmenikah`
--
ALTER TABLE `belumpernahmenikah`
  ADD PRIMARY KEY (`id_bpm`);

--
-- Indeks untuk tabel `blangkobn`
--
ALTER TABLE `blangkobn`
  ADD PRIMARY KEY (`id_blangkobn`);

--
-- Indeks untuk tabel `blangkokematian`
--
ALTER TABLE `blangkokematian`
  ADD PRIMARY KEY (`id_blangkokematian`);

--
-- Indeks untuk tabel `blangkoskck`
--
ALTER TABLE `blangkoskck`
  ADD PRIMARY KEY (`id_blangkoskck`);

--
-- Indeks untuk tabel `blangkosktm`
--
ALTER TABLE `blangkosktm`
  ADD PRIMARY KEY (`id_blangkosktm`);

--
-- Indeks untuk tabel `blangkosku`
--
ALTER TABLE `blangkosku`
  ADD PRIMARY KEY (`id_blangkosku`);

--
-- Indeks untuk tabel `domisilikoperai`
--
ALTER TABLE `domisilikoperai`
  ADD PRIMARY KEY (`id_koperasi`);

--
-- Indeks untuk tabel `izinrame`
--
ALTER TABLE `izinrame`
  ADD PRIMARY KEY (`id_izinrame`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `kependudukkan`
--
ALTER TABLE `kependudukkan`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indeks untuk tabel `keteranganghoib`
--
ALTER TABLE `keteranganghoib`
  ADD PRIMARY KEY (`id_ghoib`);

--
-- Indeks untuk tabel `pendudukdatang`
--
ALTER TABLE `pendudukdatang`
  ADD PRIMARY KEY (`id_pendudukdatang`);

--
-- Indeks untuk tabel `pensiunan`
--
ALTER TABLE `pensiunan`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- Indeks untuk tabel `permohonanproposal`
--
ALTER TABLE `permohonanproposal`
  ADD PRIMARY KEY (`id_permohonanproposal`);

--
-- Indeks untuk tabel `pernyataanhaji`
--
ALTER TABLE `pernyataanhaji`
  ADD PRIMARY KEY (`id_haji`);

--
-- Indeks untuk tabel `registermenikah`
--
ALTER TABLE `registermenikah`
  ADD PRIMARY KEY (`id_menikah`);

--
-- Indeks untuk tabel `rumahtinggal`
--
ALTER TABLE `rumahtinggal`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indeks untuk tabel `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indeks untuk tabel `skl`
--
ALTER TABLE `skl`
  ADD PRIMARY KEY (`id_skl`);

--
-- Indeks untuk tabel `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indeks untuk tabel `sppt`
--
ALTER TABLE `sppt`
  ADD PRIMARY KEY (`id_sppt`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indeks untuk tabel `tidaksengketa`
--
ALTER TABLE `tidaksengketa`
  ADD PRIMARY KEY (`id_tidaksengketa`);

--
-- Indeks untuk tabel `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indeks untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ahliwaris`
--
ALTER TABLE `ahliwaris`
  MODIFY `id_ahliwaris` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ajb`
--
ALTER TABLE `ajb`
  MODIFY `id_ajb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `belumpernahmenikah`
--
ALTER TABLE `belumpernahmenikah`
  MODIFY `id_bpm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blangkobn`
--
ALTER TABLE `blangkobn`
  MODIFY `id_blangkobn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `blangkokematian`
--
ALTER TABLE `blangkokematian`
  MODIFY `id_blangkokematian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `blangkoskck`
--
ALTER TABLE `blangkoskck`
  MODIFY `id_blangkoskck` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `blangkosktm`
--
ALTER TABLE `blangkosktm`
  MODIFY `id_blangkosktm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blangkosku`
--
ALTER TABLE `blangkosku`
  MODIFY `id_blangkosku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `domisilikoperai`
--
ALTER TABLE `domisilikoperai`
  MODIFY `id_koperasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `izinrame`
--
ALTER TABLE `izinrame`
  MODIFY `id_izinrame` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kependudukkan`
--
ALTER TABLE `kependudukkan`
  MODIFY `id_kp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `keteranganghoib`
--
ALTER TABLE `keteranganghoib`
  MODIFY `id_ghoib` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendudukdatang`
--
ALTER TABLE `pendudukdatang`
  MODIFY `id_pendudukdatang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pensiunan`
--
ALTER TABLE `pensiunan`
  MODIFY `id_pensiun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permohonanproposal`
--
ALTER TABLE `permohonanproposal`
  MODIFY `id_permohonanproposal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pernyataanhaji`
--
ALTER TABLE `pernyataanhaji`
  MODIFY `id_haji` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `registermenikah`
--
ALTER TABLE `registermenikah`
  MODIFY `id_menikah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rumahtinggal`
--
ALTER TABLE `rumahtinggal`
  MODIFY `id_rt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `skck`
--
ALTER TABLE `skck`
  MODIFY `id_skck` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `skl`
--
ALTER TABLE `skl`
  MODIFY `id_skl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id_sktm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sppt`
--
ALTER TABLE `sppt`
  MODIFY `id_sppt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tidaksengketa`
--
ALTER TABLE `tidaksengketa`
  MODIFY `id_tidaksengketa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `umum`
--
ALTER TABLE `umum`
  MODIFY `id_umum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id_usaha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
