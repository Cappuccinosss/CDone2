-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 01:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(50) NOT NULL,
  `username_accouint` varchar(40) DEFAULT NULL,
  `email_account` varchar(40) DEFAULT NULL,
  `password_account` varchar(97) DEFAULT NULL,
  `salt_account` varchar(256) DEFAULT NULL,
  `role_account` varchar(6) DEFAULT NULL,
  `image_account` varchar(50) DEFAULT NULL,
  `login_count_account` int(1) NOT NULL,
  `lock_account` int(1) NOT NULL,
  `ban_account` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username_accouint`, `email_account`, `password_account`, `salt_account`, `role_account`, `image_account`, `login_count_account`, `lock_account`, `ban_account`) VALUES
(2, 'admin', 'admin@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$MUhlSlFnbzdWamIybUV4Tw$QwuQ0dKpXYCYLL+UjyT1lXu0cWTDNWh0vSZqlYixcWI', '0bf85accc2fa8d2173009a8f7149d667d12d4d02b249687791102f7199f5e25d8dc8f89f52ea62b05c467609f53c95246b9f4a57c4e7908b6cd53fcbdaf9ae44014d88f408fcc8875d5891e117b020187dac2f97b3a85806f6a79f120546881929978b737e5875bd28300d1d4afd904d53ac1a03c013ced15f269d', 'admin', 'defaul_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(3, 'member', 'auto@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$RmFBRU8zMXR3RXluWTBtdA$fNbhHCeMBioI5L2lIl+m8k1sIGTAaP4iblnAAHVssJ0', '5c7b904e5ce648018f68d92b50c7f645604b1897b7f7d671856022cc3a5b0b09fed23a383835d97dbd59a8602d080f83c487e23031ea1b4e5968307a6691297f2aa8a9ff4080c8dc321f9ac6bc271e5c72b3172913d55d2a82896ac747506856955a9d62aa58c6534eecadb5870e5c07', 'member', 'defaul_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(5, 'someone', 'someone@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$RXh6R3NwUWZzWHo5NHdXRg$ONXiHw88xTshLb5QyWYQyLfTOh647zJ8IXijvTlgbsU', '7f987d7fb39b56243aee2b3e2cf97328af45fd1749dad49d6e6c6a131feaf96fd81df6d84f4b0a5f416674e39fe6b36878980608416005b8b23d1ba29791edf49c726605d05f2b05b20427a5ede53e9d5fdd1d714846fe179c1544f4a1d8eabdea394357c9d44e4948', 'member', 'defaul_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(6, 'ray', 'ray@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$eVFjVzFKemhablNkRGRDcg$sXIk9U364qoIt1xAdXtVKGvuaISBDE47Tm39ddidYH4', '257518880faa2b61a521b623539d1246deb1b437d33f17f6cbcd4ace2606a140456d63546203e768dea6d2793f57c4fafd4941657d9fe804f2ed030d1978b3ecc96496625ae02f6c04bb985d6fde3cac71a120428a396a5a3de704364ab202d8ad2d6f4db18aaa891f7b6329ce843f8b97', 'member', 'defaul_images_account.jpg', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--
-- Error reading structure for table autoshop.test: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table autoshop.test: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `autoshop`.`test`&#039; at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
