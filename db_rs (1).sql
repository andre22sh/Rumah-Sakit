-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2019 pada 07.21
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_dokter`
--

CREATE TABLE `daftar_dokter` (
  `id_dokter` varchar(15) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `alamat_dokter` varchar(70) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `kd_spesialis` varchar(15) NOT NULL,
  `spesialis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pegawai`
--

CREATE TABLE `daftar_pegawai` (
  `nip` varchar(25) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tempat_tgl_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_pegawai`
--

INSERT INTO `daftar_pegawai` (`nip`, `nama_pegawai`, `alamat_pegawai`, `no_telepon`, `tempat_tgl_lahir`, `jenis_kelamin`) VALUES
('41518010069', 'Alvian', 'Jl. Tanjung Priuk', '082144520078', 'Jakarta, 20/11/2000', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_spesialis`
--

CREATE TABLE `daftar_spesialis` (
  `kd_spesialis` varchar(15) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `id_dokter` varchar(15) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_obat`
--

CREATE TABLE `data_obat` (
  `kd_obat` varchar(15) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `jenis_obat` varchar(15) NOT NULL,
  `harga_obat` varchar(25) NOT NULL,
  `stok_obat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `no_registrasi` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tempat_tgl_lahir` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`no_registrasi`, `nama_pasien`, `alamat_pasien`, `no_telepon`, `tempat_tgl_lahir`) VALUES
('REG01', 'Nanda', 'Karang Mulya', '082141111987', 'Riau, 23/10/1997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tempat_tidur`
--

CREATE TABLE `data_tempat_tidur` (
  `kd_tempat_tidur` varchar(15) NOT NULL,
  `no_registrasi` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `gedung` varchar(13) NOT NULL,
  `status_kamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_tempat_tidur`
--

INSERT INTO `data_tempat_tidur` (`kd_tempat_tidur`, `no_registrasi`, `nama_pasien`, `ruangan`, `gedung`, `status_kamar`) VALUES
('TDR01', 'REG01', 'Nanda', 'D-204', 'Gedung D', 'Terisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_jaga_pegawai`
--

CREATE TABLE `jadwal_jaga_pegawai` (
  `kd_jadwal_jaga_pgw` varchar(15) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_jaga_pegawai`
--

INSERT INTO `jadwal_jaga_pegawai` (`kd_jadwal_jaga_pgw`, `nip`, `nama_pegawai`, `hari`, `waktu`, `ruangan`) VALUES
('ALV01', '41518010069', 'Alvian', 'Senin', '10:00 s/d 12:00', 'D-204');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_praktek`
--

CREATE TABLE `jadwal_praktek` (
  `kd_jadwal_praktek` varchar(15) NOT NULL,
  `id_dokter` varchar(15) NOT NULL,
  `nama_dokter` varchar(15) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` date NOT NULL,
  `ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_pendaftaran`
--

CREATE TABLE `laporan_pendaftaran` (
  `no_lapor` varchar(25) NOT NULL,
  `no_registrasi` varchar(25) NOT NULL,
  `no_rawat` varchar(30) NOT NULL,
  `no_rekmed` varchar(25) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `metode_masuk` varchar(20) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `jenis_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_pendaftaran`
--

INSERT INTO `laporan_pendaftaran` (`no_lapor`, `no_registrasi`, `no_rawat`, `no_rekmed`, `nama_pasien`, `metode_masuk`, `nama_dokter`, `spesialis`, `jenis_bayar`) VALUES
('LPR01', 'REG01', '2019/11/23/REG01', 'RKM01', 'Nanda', 'Rawat Jalan', 'Anton', 'Dokter Anak', 'Dana Pribadi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_dokter`
--
ALTER TABLE `daftar_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `kd_spesialis` (`kd_spesialis`);

--
-- Indeks untuk tabel `daftar_pegawai`
--
ALTER TABLE `daftar_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `daftar_spesialis`
--
ALTER TABLE `daftar_spesialis`
  ADD PRIMARY KEY (`kd_spesialis`),
  ADD UNIQUE KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`no_registrasi`);

--
-- Indeks untuk tabel `data_tempat_tidur`
--
ALTER TABLE `data_tempat_tidur`
  ADD PRIMARY KEY (`kd_tempat_tidur`),
  ADD UNIQUE KEY `no_registrasi` (`no_registrasi`);

--
-- Indeks untuk tabel `jadwal_jaga_pegawai`
--
ALTER TABLE `jadwal_jaga_pegawai`
  ADD PRIMARY KEY (`kd_jadwal_jaga_pgw`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD PRIMARY KEY (`kd_jadwal_praktek`),
  ADD UNIQUE KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `laporan_pendaftaran`
--
ALTER TABLE `laporan_pendaftaran`
  ADD PRIMARY KEY (`no_lapor`),
  ADD UNIQUE KEY `no_registrasi` (`no_registrasi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_spesialis`
--
ALTER TABLE `daftar_spesialis`
  ADD CONSTRAINT `daftar_spesialis_ibfk_1` FOREIGN KEY (`kd_spesialis`) REFERENCES `daftar_dokter` (`kd_spesialis`);

--
-- Ketidakleluasaan untuk tabel `data_tempat_tidur`
--
ALTER TABLE `data_tempat_tidur`
  ADD CONSTRAINT `data_tempat_tidur_ibfk_1` FOREIGN KEY (`no_registrasi`) REFERENCES `data_pasien` (`no_registrasi`);

--
-- Ketidakleluasaan untuk tabel `jadwal_jaga_pegawai`
--
ALTER TABLE `jadwal_jaga_pegawai`
  ADD CONSTRAINT `jadwal_jaga_pegawai_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `daftar_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD CONSTRAINT `jadwal_praktek_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `daftar_dokter` (`id_dokter`);

--
-- Ketidakleluasaan untuk tabel `laporan_pendaftaran`
--
ALTER TABLE `laporan_pendaftaran`
  ADD CONSTRAINT `laporan_pendaftaran_ibfk_1` FOREIGN KEY (`no_registrasi`) REFERENCES `data_pasien` (`no_registrasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
