-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 02:48 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wakaha`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `auto_detail_order`(`nomor` INT) RETURNS char(10) CHARSET latin1
BEGIN
DECLARE kodebaru CHAR(10);
DECLARE urut INT;
 
SET urut = IF(nomor IS NULL, 1, nomor + 1);
SET kodebaru = CONCAT("D", LPAD(urut, 6, 0));
 
RETURN kodebaru;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `auto_masakan`(`nomor` INT) RETURNS char(8) CHARSET latin1
BEGIN
DECLARE kodebaru CHAR(8);
DECLARE urut INT;
 
SET urut = IF(nomor IS NULL, 1, nomOr + 1);
SET kodebaru = CONCAT("M", LPAD(urut, 6, 0));
 
RETURN kodebaru;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `auto_order`(`nomor` INT) RETURNS char(8) CHARSET latin1
    NO SQL
BEGIN
DECLARE kodebaru CHAR(8);
DECLARE urut INT;
 
SET urut = IF(nomor IS NULL, 1, nomOr + 1);
SET kodebaru = CONCAT("OR", LPAD(urut, 6, 0));
 
RETURN kodebaru;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `auto_transaksi`(`nomor` INT) RETURNS char(10) CHARSET latin1
BEGIN
DECLARE kodebaru CHAR(8);
DECLARE urut INT;
 
SET urut = IF(nomor IS NULL, 1, nomOr + 1);
SET kodebaru = CONCAT("T", LPAD(urut, 6, 0));
 
RETURN kodebaru;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE IF NOT EXISTS `detail_order` (
  `id_detail_order` varchar(10) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `id_masakan` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status_detail_order` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `detail_order`
--
DELIMITER //
CREATE TRIGGER `auto_detail_order` BEFORE INSERT ON `detail_order`
 FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(id_detail_order,3,6) AS Nomor
FROM detail_order ORDER BY id_detail_order DESC LIMIT 1);
 
SET s = (SELECT auto_detail_order(i));
 
IF(NEW.id_detail_order IS NULL OR NEW.id_detail_order = '')
 THEN SET NEW.id_detail_order =s;
END IF;
END
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `makanan` AFTER INSERT ON `detail_order`
 FOR EACH ROW begin 
update masakan set stok = stok-NEW.qty where  id_masakan =NEW.id_masakan;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id_level` int(5) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Waiter'),
(3, 'Operator'),
(4, 'Owner'),
(5, 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `masakan`
--

CREATE TABLE IF NOT EXISTS `masakan` (
  `id_masakan` varchar(10) NOT NULL,
  `nama_masakan` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `status_masakan` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masakan`
--

INSERT INTO `masakan` (`id_masakan`, `nama_masakan`, `harga`, `status_masakan`, `stok`) VALUES
('M000001', 'TAHU KERISPI', 500, 'Makanan', 9157),
('M000002', 'SOTO BANDUNG', 25000, 'Makanan', 0),
('M000003', 'JUICE ALPUKAT', 8000, 'Minuman', 643),
('M000004', 'NASI PUTIH', 5000, 'Makanan', 1),
('M000005', 'JUICE JERUK', 8000, 'Minuman', 320),
('M000006', 'STEAK TENDERLOIN', 50000, 'Makanan', 151),
('M000007', 'CIKEN', 5000, 'Makanan', 3),
('M000008', 'BALA-BALA', 500, 'Makanan', 842),
('M000009', 'GEHU KERISPI', 500, 'Makanan', 532),
('M000010', 'SEBLAK ORANGE', 7000, 'Makanan', 191),
('M000011', 'CUANGKI RASA SIOMAY', 4000, 'Makanan', 520),
('M000012', 'EMPING', 2000, 'Makanan', 398),
('M000013', 'KACANG', 1000, 'Makanan', 620),
('M000014', 'PEPES IKAN', 3000, 'Makanan', 153),
('M000015', 'JUS ALPUKET', 5000, 'Minuman', 400),
('M000016', 'ES JERUK', 3000, 'Minuman', 420),
('M000017', 'POP ICE', 3000, 'Minuman', 420),
('M000018', 'SOP BUAH', 5000, 'Minuman', 420),
('M000019', 'MIE AYAM', 6000, 'Makanan', 420),
('M000020', 'ES CAMPUR', 3000, 'Minuman', 420),
('M000021', 'ES KELAPA MUDA', 5000, 'Minuman', 420);

--
-- Triggers `masakan`
--
DELIMITER //
CREATE TRIGGER `auto_masakan` BEFORE INSERT ON `masakan`
 FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(id_masakan,3,6) AS Nomor
FROM masakan ORDER BY id_masakan DESC LIMIT 1);
 
SET s = (SELECT auto_masakan(i));
 
IF(NEW.id_masakan IS NULL OR NEW.id_masakan = '')
 THEN SET NEW.id_masakan =s;
END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE IF NOT EXISTS `meja` (
`no_meja` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`no_meja`, `status`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
`id_nota` int(11) NOT NULL,
  `kasir` varchar(50) NOT NULL,
  `no_meja` varchar(10) NOT NULL,
  `menu_resto` varchar(100) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `total_item` varchar(15) NOT NULL,
  `tunai` varchar(50) NOT NULL,
  `kembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
`id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `foto`, `jk`, `no_hp`) VALUES
(1, 'Nandi irmawan', 'mananti', 'avatar.png', 'laki - laki', '085321599671'),
(2, 'M. Taopik', 'cicariang', 'avatar2.png', 'laki - laki', '0258963147'),
(3, 'Amar', 'lemahsugih', 'avatar3.png', 'laki - laki', '0258976431'),
(4, 'M. Rijal', 'cicariang', 'avatar4.png', 'laki - laki', '0258316497'),
(5, 'Dudin', 'tarikolot', 'avatar5.png', 'laki - laki', '0258376917'),
(6, 'Rian suryana', 'cimungkal', 'avatar.png', 'laki - laki', '0258163497'),
(7, 'Taopik Hidayatnya', 'Cisalak', 'avatar5.png', 'laki-laki', '0245687'),
(8, 'irmawan', 'bandung', 'operator.png', 'laki-laki', '0285647914'),
(9, 'sasa', 'jakarta', 'avatar2.png', 'perempuan', '08529631');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_order` varchar(10) NOT NULL,
  `no_meja` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status_order` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `pesan`
--
DELIMITER //
CREATE TRIGGER `auto_order` BEFORE INSERT ON `pesan`
 FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(id_order,3,6) AS Nomor
FROM pesan ORDER BY id_order DESC LIMIT 1);
 
SET s = (SELECT auto_order(i));
 
IF(NEW.id_order IS NULL OR NEW.id_order = '')
 THEN SET NEW.id_order =s;
END IF;
END
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `hapus_order` AFTER DELETE ON `pesan`
 FOR EACH ROW Update meja   set status='1' where no_meja=OLD.no_meja
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `meja` AFTER INSERT ON `pesan`
 FOR EACH ROW begin 
update meja set status = '0' where  no_meja =NEW.no_meja;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `transaksi`
--
DELIMITER //
CREATE TRIGGER `auto_transaksi` BEFORE INSERT ON `transaksi`
 FOR EACH ROW BEGIN
DECLARE s VARCHAR(10);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(id_transaksi,3,6) AS Nomor
FROM transaksi ORDER BY id_transaksi DESC LIMIT 1);
 
SET s = (SELECT auto_transaksi(i));
 
IF(NEW.id_transaksi IS NULL OR NEW.id_transaksi = '')
 THEN SET NEW.id_transaksi =s;
END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_level` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `foto`, `id_level`) VALUES
(1, 'admin', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'Nandi Irmawan', 'default.png', 1),
(2, 'waiter', 'aff024fe4ab0fece4091de044c58c9ae4233383a', 'Waiter', 'koki.png', 2),
(3, 'kasir', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', 'Kasir', 'avatar5.png', 3),
(4, 'owner', '7a81af3e591ac713f81ea1efe93dcf36157d8376', 'Owner', 'admin.jpg', 4),
(5, 'pelanggan', '597a445e77ecd913c415f2010823b7dc8095ec5c', 'Pelanggan', 'avatar.png', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
 ADD PRIMARY KEY (`id_detail_order`), ADD KEY `id_order` (`id_order`,`id_masakan`), ADD KEY `id_masakan` (`id_masakan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
 ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
 ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
 ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_order`), ADD KEY `tanggal` (`tanggal`), ADD KEY `no_meja` (`no_meja`), ADD KEY `no_meja_2` (`no_meja`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_user` (`id_user`), ADD KEY `id_order` (`id_order`), ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id_level` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
MODIFY `no_meja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_masakan`) REFERENCES `masakan` (`id_masakan`),
ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `pesan` (`id_order`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`no_meja`) REFERENCES `meja` (`no_meja`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `pesan` (`id_order`),
ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
