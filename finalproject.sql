-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2022 pada 06.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp1` (IN `id` VARCHAR(100))  BEGIN 

    	SELECT UserId, UserName, UserAddress, UserEmail, NomorTelepon  

        FROM user  

        	WHERE UserId = id; 

    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp2` (IN `price` INT(10), IN `name` VARCHAR(100))  BEGIN 

    	UPDATE `plants` SET `Price` = price  

        WHERE `PlantName` = name; 

    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp3` (IN `name` VARCHAR(100))  BEGIN
    	SELECT NamaKota, HargaOngkir
        FROM ongkir
        	WHERE NamaKota = name;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `breeding`
--

CREATE TABLE `breeding` (
  `BreedType` int(3) NOT NULL,
  `Materials` varchar(100) NOT NULL,
  `Step` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `breeding`
--

INSERT INTO `breeding` (`BreedType`, `Materials`, `Step`) VALUES
(1, 'Pisau, Kresek, Tali', 'Kuliti batang tanaman, temple campuran tanah dan air'),
(2, 'Pisau, Tanah, Plastik, Tali', 'Potong tunas tanaman, tanam ujung batang ke dalam hormon auksin'),
(3, 'Pisau, Tali, Batang Patas, Batang Bawah', 'Iris membentuk huruf T, pangkas dan potong batang, sisipkan tunas lain ke irisan kulit'),
(4, 'Pisau, Plastik, Solasi', 'Potong salah satu tunas tanaman membentuk V terbalik, potong tunas tanaman yang lain berbentuk V, te'),
(5, 'Pisau, Pot, Tanah, Air, Pupuk', 'Bengkokkan cabang/ranting ke dalam tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `breedingtype`
--

CREATE TABLE `breedingtype` (
  `BreedType` int(3) NOT NULL,
  `PlantId` int(3) NOT NULL,
  `Breeding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `breedingtype`
--

INSERT INTO `breedingtype` (`BreedType`, `PlantId`, `Breeding`) VALUES
(1, 1, 'Cangkok'),
(1, 2, 'Cangkok'),
(2, 3, 'Stek'),
(3, 4, 'Okulasi'),
(2, 5, 'Stek'),
(5, 6, 'Merunduk'),
(2, 7, 'Stek'),
(1, 8, 'Cangkok'),
(4, 9, 'Enten'),
(5, 10, 'Marunduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `condition`
--

CREATE TABLE `condition` (
  `SymptomId` int(11) NOT NULL,
  `Symptom` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `condition`
--

INSERT INTO `condition` (`SymptomId`, `Symptom`, `Status`) VALUES
(1, 'Lapisan daun putih berdebu', 'SAKIT'),
(2, 'Lapisan batang putih berdebu', 'SAKIT'),
(3, 'Lapisan bunga putih berdebu', 'SAKIT'),
(4, 'Daun berbintik hitam', 'SAKIT'),
(5, 'Bercak kuning pada daun', 'SAKIT'),
(6, 'Daun layu dan kerdil', 'SAKIT'),
(7, 'Daun menggulung dan bercak meluas berwarna hijau keabuan', 'SAKIT'),
(8, 'Daun hijau tidak berbintik', 'SEHAT'),
(9, 'Subur dan besar', 'SEHAT'),
(10, 'Daun terdapat bintil atau kutil', 'SAKIT'),
(11, 'Batang kayu busuk', 'SAKIT'),
(12, 'Batang kompak dan kokoh', 'SEHAT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailplantservices`
--

CREATE TABLE `detailplantservices` (
  `TransactionId` int(3) NOT NULL,
  `PlantId` int(3) NOT NULL,
  `SellerId` int(3) NOT NULL DEFAULT 0,
  `JumlahProduk` int(11) NOT NULL,
  `Resi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detailplantservices`
--

INSERT INTO `detailplantservices` (`TransactionId`, `PlantId`, `SellerId`, `JumlahProduk`, `Resi`) VALUES
(1, 7, 3, 5, ''),
(2, 2, 3, 1, ''),
(2, 4, 3, 1, ''),
(2, 6, 3, 4, ''),
(3, 8, 10, 10, ''),
(4, 7, 8, 1, ''),
(4, 5, 8, 2, ''),
(4, 1, 8, 2, ''),
(5, 2, 2, 1, ''),
(5, 1, 2, 1, ''),
(5, 3, 2, 1, ''),
(5, 4, 2, 1, ''),
(5, 8, 2, 1, ''),
(5, 7, 2, 1, ''),
(5, 6, 2, 1, ''),
(5, 5, 2, 1, ''),
(5, 9, 2, 1, ''),
(5, 10, 2, 1, ''),
(6, 6, 1, 4, ''),
(7, 3, 4, 3, ''),
(7, 1, 4, 1, ''),
(7, 10, 4, 1, ''),
(8, 9, 6, 10, ''),
(9, 5, 5, 2, ''),
(9, 10, 5, 1, ''),
(9, 4, 5, 1, ''),
(10, 7, 0, 1, ''),
(10, 1, 0, 1, '');

--
-- Trigger `detailplantservices`
--
DELIMITER $$
CREATE TRIGGER `penjualan` AFTER UPDATE ON `detailplantservices` FOR EACH ROW BEGIN 

    	UPDATE penjualan_user SET JumlahPenjualan = JumlahPenjualan + NEW.JumlahProduk 

        WHERE UserId = NEW.SellerId; 

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `headerplantservices`
--

CREATE TABLE `headerplantservices` (
  `TransactionId` int(3) NOT NULL,
  `UserId` int(3) NOT NULL,
  `OngkirId` int(3) NOT NULL,
  `TransactionDate` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `TotalPembelian` int(20) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'PENDING',
  `Bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `headerplantservices`
--

INSERT INTO `headerplantservices` (`TransactionId`, `UserId`, `OngkirId`, `TransactionDate`, `Address`, `TotalPembelian`, `Status`, `Bukti`) VALUES
(1, 1, 1, '2022-01-03', 'Jl Matraman Raya 45 A, Dki Jakarta', 77500, 'MEMBAYAR', 'IMG-20210114-WA0000.jpg'),
(2, 9, 2, '2022-01-03', 'Jl Matraman Raya 45 A, Dki Jakarta', 438000, 'MEMBAYAR', 'Screenshot_2021-07-17-20-50-22-24.jpg'),
(3, 3, 2, '2022-01-05', 'Jl Matraman Raya 45 A, Dki Jakarta', 210000, 'PENDING', ''),
(4, 7, 3, '2022-01-06', 'Jl Matraman Raya 45 A, Dki Jakarta', 99900, 'DITOLAK', 'Screenshot_2021-07-17-20-50-22-24.jpg'),
(5, 4, 8, '2022-01-06', 'Jl Matraman Raya 45 A, Dki Jakarta', 414200, 'MEMBAYAR', 'IMG-20210114-WA0000.jpg'),
(6, 5, 6, '2022-01-06', 'Jl Matraman Raya 45 A, Dki Jakarta', 425000, 'MENUNGGU KONFIRMASI', 'IMG-20210114-WA0000.jpg'),
(7, 8, 3, '2022-01-09', 'Jl Matraman Raya 45 A, Dki Jakarta', 212000, 'DITOLAK', 'IMG-20210114-WA0000.jpg'),
(8, 2, 7, '2022-01-09', 'Jl Matraman Raya 45 A, Dki Jakarta', 1009000, 'MEMBAYAR', 'IMG-20210114-WA0000.jpg'),
(9, 4, 5, '2022-01-10', 'Jl Matraman Raya 45 A, Dki Jakarta', 113400, 'PENDING', ''),
(10, 1, 2, '2022-01-10', 'Jl Matraman Raya 45 A, Dki Jakarta', 50500, 'MEMBAYAR', 'IMG-20210114-WA0000.jpg');

--
-- Trigger `headerplantservices`
--
DELIMITER $$
CREATE TRIGGER `batal` AFTER DELETE ON `headerplantservices` FOR EACH ROW BEGIN 

    	INSERT INTO pembatan_order
        SET TransactionId = OLD.TransactionId,
        UserId = OLD.UserId,
        Date = NOW();

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance`
--

CREATE TABLE `maintenance` (
  `PlantId` int(11) NOT NULL,
  `TypeOfFertilizer` varchar(100) NOT NULL,
  `Temperature` varchar(100) NOT NULL,
  `Humidity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maintenance`
--

INSERT INTO `maintenance` (`PlantId`, `TypeOfFertilizer`, `Temperature`, `Humidity`) VALUES
(1, 'Dolomit/Pupuk Kapur', '24-27', '68'),
(2, 'Pupuk GDM', '16-25', '60'),
(3, 'Pupuk kandang dan urea', '18-28', '62'),
(4, 'Pupuk kandang dari kotoran ayam', '20-30', '59'),
(5, 'Pupuk kompos/kandang', '24-30', '63'),
(6, 'Pupuk NPK', '18-26', '61'),
(7, 'Pupuk NPK Phonska', '21-35', '57'),
(8, 'Pupuk GDM Organik', '13-28', '60'),
(9, 'Pupuk NPK Mutiara', '24-30', '61'),
(10, 'Pupuk kompos/kandang', '23-31', '62');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `OngkirId` int(3) NOT NULL,
  `NamaKota` varchar(100) NOT NULL,
  `HargaOngkir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`OngkirId`, `NamaKota`, `HargaOngkir`) VALUES
(1, 'Surabaya', 10000),
(2, 'Sidoarjo', 10000),
(3, 'Balikpapan', 31000),
(4, 'Jakarta', 17000),
(5, 'Bandung', 20000),
(6, 'Bali', 45000),
(7, 'Batu', 9000),
(8, 'Semarang', 16000),
(9, 'Tasikmalaya', 25000),
(10, 'Banjar', 26000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembatan_order`
--

CREATE TABLE `pembatan_order` (
  `TransactionId` int(3) NOT NULL,
  `UserId` int(3) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembatan_order`
--

INSERT INTO `pembatan_order` (`TransactionId`, `UserId`, `Date`) VALUES
(43, 4, '2022-01-10'),
(40, 1, '2022-01-10'),
(41, 1, '2022-01-10'),
(42, 1, '2022-01-10');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `penjual`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `penjual` (
`UserId` int(11)
,`Username` varchar(100)
,`Jumlah Transaksi` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_user`
--

CREATE TABLE `penjualan_user` (
  `UserId` int(3) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `JumlahPenjualan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_user`
--

INSERT INTO `penjualan_user` (`UserId`, `Username`, `JumlahPenjualan`) VALUES
(1, 'AlkenRichard', 14),
(2, 'MichelleAngela', 26),
(4, 'IvanFebrianto', 13);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `plantdata`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `plantdata` (
`PlantId` int(3)
,`PlantName` varchar(100)
,`Symptom` varchar(100)
,`suggestion` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `plants`
--

CREATE TABLE `plants` (
  `PlantId` int(3) NOT NULL,
  `PlantName` varchar(100) NOT NULL,
  `AgePlant` varchar(100) NOT NULL,
  `Height` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `plants`
--

INSERT INTO `plants` (`PlantId`, `PlantName`, `AgePlant`, `Height`, `Price`, `Gambar`) VALUES
(1, 'Mangga', '75', '15-30', 27000, 'mangga.jpg'),
(2, 'Apel', '120', '0.2-0.3', 20000, 'apel.jpg'),
(3, 'Jambu Air', '180', '3-10', 30000, 'jambu.jpg'),
(4, 'Jeruk Nipis', '240', '3-6', 28000, 'nipis.jpg'),
(5, 'Tebu', '180', '2.5-4', 700, 'tebu.jpg'),
(6, 'Mawar', '120', '2-5', 95000, 'mawar.jpg'),
(7, 'Singkong', '180', '4-5', 13500, 'singkong.jpg'),
(8, 'Alpukat', '90', '5-8', 20000, 'alpukat.jpg'),
(9, 'Durian', '210', '6-8', 100000, 'durian.jpg'),
(10, 'Anggur', '100', '-', 64000, 'anggur.jpg');

--
-- Trigger `plants`
--
DELIMITER $$
CREATE TRIGGER `harga` AFTER UPDATE ON `plants` FOR EACH ROW BEGIN 

    	INSERT INTO price_history
        SET PlantId = OLD.PlantId,
        OldPrice = OLD.Price,
        NewPrice = NEW.Price;

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `price_history`
--

CREATE TABLE `price_history` (
  `PlantId` int(11) NOT NULL,
  `OldPrice` int(11) NOT NULL,
  `NewPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `price_history`
--

INSERT INTO `price_history` (`PlantId`, `OldPrice`, `NewPrice`) VALUES
(5, 650, 700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suggestion`
--

CREATE TABLE `suggestion` (
  `PlantId` int(3) NOT NULL,
  `SymptomId` int(3) NOT NULL,
  `Suggestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suggestion`
--

INSERT INTO `suggestion` (`PlantId`, `SymptomId`, `Suggestion`) VALUES
(1, 1, 'Gunakan semprotan susu dan menyiram di pagi hari'),
(1, 2, 'Gunakan semprotan susu dan menyiram di pagi hari'),
(1, 3, 'Gunakan semprotan susu dan menyiram di pagi hari'),
(1, 4, 'Potong bagian yang terkena bercak hitam dan siram secara teratur'),
(2, 5, 'Pangkas tanaman yang terinfeksi dan hindari merokok di kebun anda'),
(3, 6, 'Lakukan rotasi tanaman dan cabut tanaman bergejala'),
(4, 1, 'Gunakan semprotan susu dan menyiram di pagi hari'),
(4, 2, 'Gunakan semprotan susu dan menyiram di pagi hari'),
(4, 3, 'Gunakan semprotan susu dan menyiram di pagi hari'),
(5, 7, 'Sanitasi pada saluran irigrasi dan hindari'),
(6, 4, 'Potong bagian yang terkena bercak hitam dan siram secara teratur'),
(6, 6, 'Lakukan rotasi tanaman dan cabut tanaman bergejala'),
(9, 8, 'Bagus, tanaman dalam kondisi sehat!'),
(9, 9, 'Bagus, tanaman dalam kondisi sehat!'),
(6, 10, 'Biarkan saja, tetap jaga perawatan'),
(8, 11, 'Cabut dan buang tanaman yang terinfeksi'),
(7, 12, 'Bagus, tanaman dalam kondisi sehat!'),
(10, 11, 'Cabut dan buang tanaman yang terinfeksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `UserAddress` varchar(100) NOT NULL,
  `NomorTelepon` varchar(14) NOT NULL,
  `UserPassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `UserEmail`, `UserAddress`, `NomorTelepon`, `UserPassword`) VALUES
(1, 'MarkZuckerberg', 'mark@gmail.com', 'Jl Metro Pd Indah TG 11/39, Dki Jakarta', '018273829482', '$2y$10$GAuTFLMQEPDcMacxKZdhy.tVtlAMuLCt5QoymhFxpVk08HI7Yx5nC'),
(2, 'IvanFebrianto', 'ivanfebrianto@gmail.com', 'Jl Tamansari Psr Asem Reges Los A/168, Dki Jakarta', '081264588264', '$2y$10$NJ2p/ff0fnOcoUv6HONUxeiveAPljdRie2RSdogABiPRKtwrFeIAq'),
(3, 'MichelleAngela', 'michelleangela@gmail.com', 'Jl Raya Tipar Bl E-3/2 Gading Griya Lestari, Dki Jakarta', '0812327235490 ', '$2y$10$xa.JMI0dSyHgp4FAlZ5KOujNDiJkYODhoftjPsij15mggXk6ruQem'),
(4, 'AlkenRichard', 'alkenrichard1@gmail.com', 'Jl Matraman Raya 45 A, Dki Jakarta', '081212303921', '$2y$10$EBCfz3dpxm4u8GO.NnGu6em5q9dzUIEPRB0Gc8/0FeFJaLlmaNQ7W'),
(5, 'GerryGuinardi', 'gerryguinardi@gmail.com', 'Jl Raya Brt Boulevard, Dki Jakarta', '0812327235490 ', '$2y$10$qMzAiYuSYOqL.3.2LYiKoOzFb0xWYxMRpQVf5WVumnMdhXIfREhoO'),
(6, 'GerryWilliam', 'gerrywilliam@gmail.com', 'Jl Jend Gatot Subroto 152 A/18 A, Sumatera Utara', '018273829423', '$2y$10$9mXVsNROM4mmwv/aaNrXI./ZzIJtc32E6Y58Zm.fV38UwzxDIf8ha'),
(7, 'JazmineLennox', 'jazminelennox@gmail.com', 'Jl Singgalang Raya 17, Dki Jakarta', '0182738293290', '$2y$10$oCGGrvwRg2PCUfSoEWUZfuA0eTJl7hsiN/c5LRHPIPE.AABM.7iUq'),
(8, 'KathrynValarie', 'kathrynvalarie@gmail.com', 'Jl Putri Hijau 454 S, Sumatera Utara', '018291000293', '$2y$10$yGNAxQ7V.lGvtPbNZ.gX2eegOy2/1GplnWm/R3D9m6dVG3HAHtayq'),
(9, 'KendrickBertram', 'kendrickbertram@gmail.com', 'Jl Muara Karang 4-6 Bl J/1 Slt, Dki Jakarta', '081299293821', '$2y$10$fjUTnOhKF6FK2T8PnpX03.EC0Bv6FsuL7srdZF5SAVd6NS.BoK8iu'),
(10, 'HarrietteDrew', 'harriettedrew@gmail.com', 'Jl Cipaganti 24, Jawa Barat  City:   Jawa Barat', '018299283018', '$2y$10$8WbBziu4AgfD9QwK5UkeBe5CPxtEZjrKPYiS3HN9MYoV4N6HqybA2');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `viewtransaction`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `viewtransaction` (
`TransactionId` int(3)
,`Date` varchar(75)
,`PlantName` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `penjual`
--
DROP TABLE IF EXISTS `penjual`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `penjual`  AS SELECT `user`.`UserId` AS `UserId`, `user`.`UserName` AS `Username`, sum(`detailplantservices`.`JumlahProduk`) AS `Jumlah Transaksi` FROM ((`detailplantservices` join `user` on(`detailplantservices`.`SellerId` = `user`.`UserId`)) join `headerplantservices` on(`detailplantservices`.`TransactionId` = `headerplantservices`.`TransactionId`)) GROUP BY `user`.`UserName` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `plantdata`
--
DROP TABLE IF EXISTS `plantdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `plantdata`  AS SELECT `plants`.`PlantId` AS `PlantId`, `plants`.`PlantName` AS `PlantName`, `condition`.`Symptom` AS `Symptom`, `suggestion`.`Suggestion` AS `suggestion` FROM ((`suggestion` join `condition` on(`suggestion`.`SymptomId` = `condition`.`SymptomId`)) join `plants` on(`suggestion`.`PlantId` = `plants`.`PlantId`)) WHERE `plants`.`PlantName` like '% %' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `viewtransaction`
--
DROP TABLE IF EXISTS `viewtransaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtransaction`  AS SELECT `detailplantservices`.`TransactionId` AS `TransactionId`, date_format(`headerplantservices`.`TransactionDate`,'%M %D, %Y') AS `Date`, `plants`.`PlantName` AS `PlantName` FROM (((`detailplantservices` join `headerplantservices` on(`detailplantservices`.`TransactionId` = `headerplantservices`.`TransactionId`)) join `plants` on(`detailplantservices`.`PlantId` = `plants`.`PlantId`)) join `user` on(`headerplantservices`.`UserId` = `user`.`UserId`)) WHERE dayofmonth(`headerplantservices`.`TransactionDate`) = 9 AND `user`.`UserName` like 'AlkenRichard' ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `breeding`
--
ALTER TABLE `breeding`
  ADD PRIMARY KEY (`BreedType`);

--
-- Indeks untuk tabel `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`SymptomId`);

--
-- Indeks untuk tabel `detailplantservices`
--
ALTER TABLE `detailplantservices`
  ADD KEY `TransactionId` (`TransactionId`);

--
-- Indeks untuk tabel `headerplantservices`
--
ALTER TABLE `headerplantservices`
  ADD PRIMARY KEY (`TransactionId`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`OngkirId`);

--
-- Indeks untuk tabel `penjualan_user`
--
ALTER TABLE `penjualan_user`
  ADD KEY `UserId` (`UserId`);

--
-- Indeks untuk tabel `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`PlantId`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `headerplantservices`
--
ALTER TABLE `headerplantservices`
  MODIFY `TransactionId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `OngkirId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `plants`
--
ALTER TABLE `plants`
  MODIFY `PlantId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailplantservices`
--
ALTER TABLE `detailplantservices`
  ADD CONSTRAINT `detailplantservices_ibfk_1` FOREIGN KEY (`TransactionId`) REFERENCES `headerplantservices` (`TransactionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan_user`
--
ALTER TABLE `penjualan_user`
  ADD CONSTRAINT `penjualan_user_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
