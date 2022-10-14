-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2022 at 10:27 AM
-- Server version: 5.7.36
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian_progress`
--

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_progress`
--

DROP TABLE IF EXISTS `penilaian_progress`;
CREATE TABLE IF NOT EXISTS `penilaian_progress` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) NOT NULL,
  `no_spk` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `appraiser` varchar(255) NOT NULL,
  `assesment_purpose` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `note_progress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_progress`
--

INSERT INTO `penilaian_progress` (`id`, `client`, `no_spk`, `location`, `appraiser`, `assesment_purpose`, `status`, `note_progress`) VALUES
(14, 'LEO PANJI MAHENDRA', '143/K-APPRAISAL/SPK/IX/2022', '-', 'Bahran', 'Jaminan Utang', 'Schedule', 'MENUNGGU INFO CONTACT PERSON DARI BDO'),
(15, 'PT. DWINAJAYA BERKAT ABADI', '143/K-APPRAISAL/SPK/IX/2022', '-', 'BASULAH LUNG', 'Lelang', 'Inpeksi', 'INSPEKSI 14 OKTOBER 2022');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
