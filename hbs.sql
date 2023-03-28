-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2021 at 02:12 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `custreview`
--

DROP TABLE IF EXISTS `custreview`;
CREATE TABLE IF NOT EXISTS `custreview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custreview`
--

INSERT INTO `custreview` (`id`, `img`) VALUES
(1, 'wwtHPAHdWVvw0sKMgNAGxMF6KbOnnFJcjOoQHZeD.jpeg'),
(2, '2zjbn6NjUZmXamKHHzBR0MM0Va6bVyy2MwH68OPT.jpeg'),
(4, 'aQy54QoxZvqx0U6xyQ1QMwHWV7wSekddZnI96Jbt.jpeg'),
(5, 'nigNCPAUvJjoxj2gEpGsHfx2Y4H4A0k04cYaoKgP.jpeg'),
(6, 'Y5GmVCIF3ypJmlbiX6TAmalUntTo5gy4Q2MaT3SA.jpeg'),
(7, 'qrZfHdrmEwMxUiZEKj2qTHeNMFrM9hNhtfms1dPI.jpeg'),
(8, 'MJTXsWr1z3CGNwNFIilQ0uImuZ7vcUkK0AFyaoBA.jpeg'),
(9, 'lanjonUHLP3OXl17TZBdKlCRku59W3VU1iBJWT6M.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dloc`
--

DROP TABLE IF EXISTS `dloc`;
CREATE TABLE IF NOT EXISTS `dloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dloc`
--

INSERT INTO `dloc` (`id`, `img`) VALUES
(14, 'F57ePMKdsWahJvXdtsH9MnhBrPqBJC8JDMAsZrzW.jpeg'),
(15, 'GIJ03bH8mtPAdtH4PeZpvqoWRAmPKauDcALlFOnv.jpeg'),
(16, '1C3dE2oYtyFl0VCCsBE6T3jSQehZxUM12W0yVLjO.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lockweb`
--

DROP TABLE IF EXISTS `lockweb`;
CREATE TABLE IF NOT EXISTS `lockweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lockweb`
--

INSERT INTO `lockweb` (`id`, `status`) VALUES
(17, '1');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `oname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` int(10) NOT NULL,
  PRIMARY KEY (`oname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`oname`, `start`, `end`, `oimg`, `pos`) VALUES
('Teej Deal', '08/21/2021', '08/25/2021', 'QMBE41sFCTJbkfEjucDSoVKnPG823vf9astCD4Vl.jpeg', 3),
('Tihar Offer', '08/22/2021', '08/24/2021', 'K6LW6NQG3pIaFUoZvXebOXUV40W8KBZQP0bcAO11.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nippyanoj5796@gmail.com', '$2y$10$ZwgEX//bIp5UfMqxAHRoBeMnvDdTL6TAGlP4vPsV2COQT9wiaV7xe', '2021-08-04 06:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ID` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oos1` int(10) DEFAULT NULL,
  `oos2` int(10) DEFAULT NULL,
  `oos3` int(10) DEFAULT NULL,
  `oos4` int(10) DEFAULT NULL,
  `oos5` int(10) DEFAULT NULL,
  `oos6` int(10) DEFAULT NULL,
  `oos7` int(10) DEFAULT NULL,
  `oos8` int(10) DEFAULT NULL,
  `oos9` int(10) DEFAULT NULL,
  `oos10` int(10) DEFAULT NULL,
  `oos11` int(10) DEFAULT NULL,
  `oos12` int(10) DEFAULT NULL,
  `oos13` int(10) DEFAULT NULL,
  `oos14` int(10) DEFAULT NULL,
  `oos15` int(10) DEFAULT NULL,
  `oos16` int(10) DEFAULT NULL,
  `oos17` int(10) DEFAULT NULL,
  `oos18` int(10) DEFAULT NULL,
  `oos19` int(10) DEFAULT NULL,
  `oos20` int(10) DEFAULT NULL,
  `i1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `title`, `price`, `category`, `sub_category`, `oos1`, `oos2`, `oos3`, `oos4`, `oos5`, `oos6`, `oos7`, `oos8`, `oos9`, `oos10`, `oos11`, `oos12`, `oos13`, `oos14`, `oos15`, `oos16`, `oos17`, `oos18`, `oos19`, `oos20`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `i11`, `i12`, `i13`, `i14`, `i15`, `i16`, `i17`, `i18`, `i19`, `i20`) VALUES
('1701', 'multi color', 1111, 'ox', 'neck', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'q6a8LCekw0l9GKEea2HnigNqp3wfn9WSY8IsQCVg.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('701', 'color earring', 122, 'mk', 'ear', 0, 1, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DfudkZa0HbJ9clhaZf31PpIQIX6QzWxkRtMMq4AN.jpeg', 'BKyaoDNzyT7cpeOYoPVkx0bsd1KmZplDTbvLpyN2.jpeg', 'PXDlQWSW8LcGCiM3nrPgTDSRLNIEQnxLlq1o2E4S.jpeg', 'yfn9xqhkwUStkaLCwyTXjyghhs7NUxeQKGEGM1dx.jpeg', 'rEWgPSzPBK0EomGl7TtkHmPQVaJWzI3o3rEIWgdt.jpeg', '7eYDDR58jzXSamKdqDQz2YVTp9rDEN9JQKFcSLuZ.jpeg', 'YC2WPaT0zRkhb1ME9UCr0KaahKrEJ7maY2KzXLzV.jpeg', 'tt7X3pxZpHzRbtKGybz37QDdRN2K7yYCIb84jbvs.jpeg', 'YtwOAfZMc3ZCTViKQZtRAFWjoQLZ5xIgTkRaww5V.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('702', 'oxoxox', 122, 'ox', 'ear', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'w4Q9NIcupTAoTTfw4Sz6ROWA3d3BySkytqjifSe4.jpeg', 'IaVQ34kTQ5CXA6ixOt1OyGsMTeofFKlmS1woolNR.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('703', 'color', 767, 'ox', 'ear', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7arOtB8sASYvPtXLstWM61ax3VRCutCt3GFSWziW.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('704', 'color', 1222, 'ox', 'ear', 0, 0, 1, 0, 1, 0, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KoFy75LlgFDDrUQ98Ss3EkFJcGLCVAK5ezHLcAib.jpeg', '9HjPmbu0eA67wGy28pQFlSNSZ3YdhHgq8dy4F7tf.jpeg', 'Peh3OZXNnr7uvL8ZlOADWreEmvqRJ205SYowjIhu.jpeg', 'EcyoKy0MzrX6G7PvqpXwG4xNuWTXVCEbh269baax.jpeg', 'PrTEc11QoyRjSDhpi1NVYcfuNyFHvo3JdtMWlWWG.jpeg', 'DIztsR8Twu8kgJoq8aQ219vxavtzkmOCZ7Xkexm0.jpeg', 'jVjOgu3C7qf8ib9kAEohpyeCr0NeLnZkpAROEvYT.jpeg', '2sxFLEv2GTOuAy7LVL81kRiQwT4d1J38TVd0zv98.jpeg', 'xFkXySMA2ckqD2AZLke5UtsOmgcUYSB48Y4cb3Fg.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('705', 'earrrr', 1233, 'ox', 'ear', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DcvCGpt7MM0FXmIKKonKmJE6qeve8thOsTTjExaB.jpeg', 'Qa0uGiwNeH6EGAfGOVIpVhgrnPrHkodU16CnnhnT.jpeg', 'jjadryVtyOybfMMJCpiK0VVKp7Trq8pg24GOzI85.jpeg', 'KPVfVIVecTB9lnQ8IKLh8wakZBTH9I1DXOaDpQho.jpeg', '8jP9rmGnKO5BMqsDzjFK0h8RzglAOKKTdewLHQEs.jpeg', 'UC7tHuroODr0IOh8VqxXaR7JfT094LR2FCL1rfd4.jpeg', 'Iht01TsJPo5viqgDjkijIfzvo4Y8gm5etb7Se5Dp.jpeg', 'sLMhe8caBuBCWuqWY2xVeQgpxB70ueWfMlX7i9tV.jpeg', 'jTXvz0XuZWLQIJ9xm4pqwUz7QlEyncWOxD3MYN7O.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('706', 'earringgg', 1221, 'ox', 'ear', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B1mp15TA9A5hEPCqChavDtmZCwneI0bl2akB7htR.jpeg', 'JzLrZxsv6hPQEJWnvCDgTJIU6PneKNA66x0ashph.jpeg', 'Hrp99Wq4X7bKn0AOk3rkO0ucYxiiJfhvG4v1MvPs.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('707', 'color earring', 122, 'ox', 'ear', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OYxNjBFsrtw9cdZimwG4IfPx2LDErqq8tnEqE5Kh.jpeg', 'vuCTeHvA90aVnqgu2bh05spMuG4fDFBlCw408gVz.jpeg', 'M9CKffkPOKsEDiiiqduTx1FqMdy6hYqrC3sBxKo9.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('708', 'multi color', 322, 'ox', 'ear', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9atHWhSpWBaKuIMhNTx0KuoFj4guiMDvtrFwQJap.jpeg', 'cziCqmNOcw2VT7OEfTdOlwkUsd8gSqjVGiR7OoSK.jpeg', 'je893dKEmnNhHIae8ohIP3KZLFMcHHrrrBRLQw14.jpeg', 'iqC3goc0M67tezlv9DOnfevo4NFX44wsm3qonzyO.jpeg', 'xOxLGLVDyiSmNbjg0O6TjLSar6E9zbXk1V2PDzJM.jpeg', 'QUeB7RWpx0YoTG0xUWr4hFMdoJcBPoxH9IdzBa7U.jpeg', '13Cu6Va2wypzsAPJfYzVJG3NgCALtBFL9DXNgPnP.jpeg', '3xH04nhcKzb9WE0guPhmn4NqGlL7U4y0As8nFTE6.jpeg', 'Ax4a418YgLaqqP2x88BWAIbZAR7dbkjUerfADZdT.jpeg', 'udRYznL3cEkiWwq8wWQo2xPqjoniJrNHQKQbY6E9.jpeg', 'UlHvMASLDb93djU24aNX8GmiWCNqkbZle7IwsbUs.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('709', 'oxoxox', 111, 'ox', 'ear', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '29Bz9QIv1gfVY66egPPT5DqQgk2h5jhQStkVN5ZB.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('710', 'multi color', 111, 'ox', 'ear', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HwCWGhNDCNe6wz0eO726FnjzhrOsbUS4CmmxVOLQ.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ad1', 'color', 1222, 'ad', 'neck', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ex9bJy1R2kcuRl5S0PiFsa68O3w9fjP9oDwHMBIG.jpeg', 'xFawrxWSgI0qwGGjsg6CigBUzW6sTbzeQygefxz6.jpeg', 'GaouX5Y3Rm80Gt9h6vHYVUDGQZJOZsmptVPkUXET.jpeg', 'C5thCue1jk0zQqPF378WtVQ5hv9j9mPzBxcD9xbh.jpeg', 'i8RckXqMDImKF5NiAJiKqn072LYBi8fZSTslvUvW.jpeg', 'gKeiWl2CqN5KDlv5TclQaZvLXlni2BW8bcCoHuxj.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_off`
--

DROP TABLE IF EXISTS `p_off`;
CREATE TABLE IF NOT EXISTS `p_off` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `offer_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_off`
--

INSERT INTO `p_off` (`id`, `name`, `p_off`, `item_id`) VALUES
(44, 'Tihar Offer', '20', '702'),
(45, 'Tihar Offer', '20', '703'),
(46, 'Tihar Offer', '20', '704'),
(47, 'Tihar Offer', '20', '705'),
(48, 'Tihar Offer', '20', '706'),
(49, 'Tihar Offer', '20', '709'),
(50, 'Tihar Offer', '20', '710'),
(51, 'Tihar Offer', '10', '708');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `imgurl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `imgurl`) VALUES
(1, 'swarnim', 'nippyanoj5796@gmail.com', NULL, 'admin', '$2y$10$qie5upmWep7PCx5rJk/BkON2faUzCWiUcVHjyRkjYhzQsMyg2wPEq', NULL, '2021-08-04 05:01:49', '2021-08-04 05:01:49', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_off`
--
ALTER TABLE `p_off`
  ADD CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `product` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_name` FOREIGN KEY (`name`) REFERENCES `offer` (`oname`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
