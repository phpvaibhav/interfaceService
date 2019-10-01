-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2019 at 12:04 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interface_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentId` bigint(20) NOT NULL,
  `serviceId` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `crd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `serviceId`, `userId`, `comment`, `crd`) VALUES
(1, 10, 1, 'rwas', '2019-07-31 06:28:53'),
(2, 16, 12, 'Test testing', '2019-07-31 11:43:43'),
(3, 16, 12, 'test01', '2019-07-31 11:43:59'),
(4, 16, 1, 'This is for test only', '2019-07-31 11:44:58'),
(5, 16, 12, 'Helping test', '2019-07-31 12:12:45'),
(6, 16, 1, 'Hi', '2019-08-02 05:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageId` bigint(20) NOT NULL,
  `serviceId` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageId`, `serviceId`, `image`, `type`) VALUES
(7, 10, '47c30dc44980d8ad9f31e59e956834b3.png', 'image'),
(8, 10, '0081db90d04f8ed069b08c591c6096a5.png', 'image'),
(9, 10, 'd66388f8254c249b5066b8b5dd5f5808.png', 'image'),
(10, 11, 'afebad1fe646d492c073ac963ec0ee50.png', 'image'),
(11, 11, '5487dcebdd919f8071c304fb92c6e8d8.png', 'image'),
(12, 11, '641299477c904280cc6c9ea63d7047ad.png', 'image'),
(13, 12, '5a90a1b3524e27aa7f81c60afe7494e4.png', 'image'),
(14, 14, 'c300c39a6f385d739a86ceb999419d94.jpg', 'image'),
(15, 16, 'c08b193969435ec01d57cda8299ad2b5.jpg', 'image'),
(16, 16, 'b7f4df7f4a5e5c2ea42bcc2c3b3e52f3.jpg', 'image'),
(17, 16, 'd578955d2abf19eac69bff4a2a9a2e38.jpg', 'image'),
(18, 18, 'd95470ef326fc0cff2b23b8947f34685.png', 'image'),
(19, 19, '277ebdebbcf8a0c018cc7a16dabf727b.jpg', 'image'),
(20, 19, 'ad2ef7cdc83848d6332d28e953432092.jpg', 'image'),
(21, 19, '1c6482e9003502edfa275e9b8b50d531.jpg', 'image'),
(22, 24, '1fee447130af2195d31679815b12f415.pdf', 'application'),
(23, 24, '82899ce51ea0019f008efdac84dbbfdb.jpg', 'image'),
(24, 24, 'a5446c7ef64489dfc9a3442f3f67fcf6.png', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceId` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL COMMENT 'Manufacture',
  `modelName` varchar(255) NOT NULL,
  `serialNumber` varchar(255) NOT NULL COMMENT 'series number',
  `purchaseDate` date NOT NULL,
  `faultDescription` text NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:Pending ,1:In Progress,2:Complete',
  `crd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceId`, `userId`, `productName`, `vendor`, `modelName`, `serialNumber`, `purchaseDate`, `faultDescription`, `contactNumber`, `notes`, `status`, `crd`, `upd`) VALUES
(10, 9, 'test1', 'vendor1', '', '123', '2019-07-01', 'jncsjncs', '134567', '', 2, '2019-07-10 11:47:22', '2019-07-10 11:47:44'),
(11, 11, 'test 1', 'test vendor', '', '01', '2019-07-12', 'test data', '1', '', 2, '2019-07-12 05:54:10', '2019-07-15 10:36:22'),
(12, 13, 'wer', 'fdsfs453', '', '54353', '2019-07-29', 'ghfhfhghhf', '654646', '', 2, '2019-07-12 09:55:22', '2019-07-19 06:20:40'),
(13, 14, '01', '01', '', '01', '2019-07-16', '01', '01', '', 2, '2019-07-16 09:04:57', '2019-07-25 11:25:09'),
(14, 13, 'Ogr', 'AD', '', 'AD35', '2019-07-25', 'dfgfdgdgdg', '344334334', '', 2, '2019-07-25 11:57:33', '2019-07-25 12:04:07'),
(15, 12, 'Test product', 'vendor', '', '123456qwerty', '2019-07-29', 'test', '  2', '', 2, '2019-07-29 08:20:02', '2019-07-29 09:54:09'),
(16, 12, 'New test product', 'Test user', '', 'TEST01', '2019-07-31', 'Test Data', '(123) 456-7899', '', 2, '2019-07-31 11:41:51', '2019-08-02 11:45:35'),
(17, 12, 'Testing00', 'Vendor00', '', 'Number00', '2019-08-02', 'hello', '(123) 456-1232', '', 2, '2019-08-02 11:32:13', '2019-09-06 09:10:58'),
(18, 13, 'Product1', 'vendor1', '', 'ABXC23', '2019-08-15', 'test', '(232) 134-2343', '', 1, '2019-08-02 11:42:12', '2019-08-02 11:45:37'),
(19, 17, 'Server1', 'vender', '', 'AVXC124', '2019-08-20', 'test', '(324) 234-2353', '', 2, '2019-08-02 12:01:20', '2019-08-02 12:16:53'),
(20, 17, 'Server AD', 'VederAVS', '', '23454ACS', '2019-08-20', 'dxzfdsgsdgdd', '(234) 252-3533', '', 2, '2019-08-02 12:17:56', '2019-08-06 08:57:07'),
(21, 18, 'test outlook', 'test01', '', '123456', '2019-08-16', 'Hello', '(123) 124-5544', '', 2, '2019-08-02 12:20:29', '2019-08-02 12:28:32'),
(22, 19, 'yahoo 01', 'testing', '', '123456', '2019-08-02', 'hello', '(123) 456-7894', '', 2, '2019-08-02 12:31:33', '2019-08-02 12:32:24'),
(23, 20, 'test', 'test', '', '123', '2019-08-01', 'test', '(111) 111-1111', '', 0, '2019-08-06 09:02:30', '2019-08-06 09:02:30'),
(24, 21, 'testAser', 'Manufacture', 'MO235', 'SN3567', '2019-09-11', 'test Description', '(423) 425-2525', '', 0, '2019-09-06 12:43:08', '2019-09-06 12:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `userType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:common,1:Admin ,2:Customer ,3: Employee',
  `profileImage` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:Active,2:Inactive',
  `authToken` text NOT NULL,
  `passToken` text NOT NULL,
  `vatNumber` varchar(255) NOT NULL,
  `shippingAddress` text NOT NULL,
  `invoiceDetail` text NOT NULL,
  `crd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `contactNumber`, `userType`, `profileImage`, `status`, `authToken`, `passToken`, `vatNumber`, `shippingAddress`, `invoiceDetail`, `crd`, `upd`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$FoRI5EnZslvZlSDcCm/dWuu.Vbbo7QOXMZ5Csa2Lw7YiLX1OKwR/y', '(342) 523-2353', 1, 'H1ZlUFq56R7oOI4j.jpg', 1, 'fb415320f540386f31476cb8949671affcc427d1', '', '', '', '', '2019-06-25 11:05:04', '2019-09-30 08:34:35'),
(9, 'test', 'test@gmail.com', '$2y$10$WSMq0ZWf4F8ijYa5a8geW.xJIo6yNPVWn44cJhgJvRcR.LReoy7jy', '1323', 2, 'lA2tkvJM8iW5qLVF.jpg', 1, '96966b3fceac1d985de33df0e36291225946d3cc', 'aa9b7d04c5d9704832bf2bbc499488cd40a5ca0c', '', '', '', '2019-07-10 11:46:10', '2019-07-11 09:40:41'),
(10, 'Vaibhav', 'php.vaibhav@gmail.com', '$2y$10$yFQ13w3g2N02ODporav8se1jHFZDDRv4o1y0wrEpq94b4ABH65DF2', '666633344', 1, '', 1, '654ae6d96004d81c054d994d658386c729eb24ca', '', '', '', '', '2019-07-11 11:33:38', '2019-07-16 13:49:47'),
(11, 'Madhuri', 'madhuri.otc@gmail.com', '$2y$10$LU/AWQq/W/jooO0RpfxshOWW4DnOU8cGhiAAEHv14XBMMV3lJZi1e', '123456', 2, '', 1, '193161b9fe09e67b0728f75d7ff3711e56d5304a', '', '', '', '', '2019-07-12 05:51:33', '2019-08-02 12:56:30'),
(12, 'cyclesoon01', 'cyclesoon01@gmail.com', '$2y$10$ouGdW3PtbH0ACtzmFgZwvevYqnscV.8TMVJFvy/GJD1Ucqt78360K', '123', 2, 'CWBYvLOTMHrph9ks.png', 1, '81ad20c8cae636a9d717e6b7ceb51f469fbb9d8b', 'e98d70c8ae49ea646d823edbe5e1d08e09f5fe80', '', '', '', '2019-07-12 08:32:11', '2019-08-02 11:31:14'),
(13, 'Vaibhav', 'vaibhav786.sharma@gmail.com', '$2y$10$EX/PulntAGXbpaJBP76GOujBQgqZW1bHyobWKlsvvpAbpu6jZDDce', '666633344', 2, 'GsNpirmzT0FeoCDh.jpg', 1, 'b327a980aedc15335fda77d8d71f5c805733d33a', 'c28d1df323edbf339dfc88771a21bc5d7500861c', '', '', '', '2019-07-12 09:49:54', '2019-08-02 11:41:30'),
(14, 'testuser', 'testing@yopmail.com', '$2y$10$xAjgS0hqSFtb52afOqTpk.K0BzRnn.gV50HpsJhqHVcYepOHY5Qmy', '123456', 2, 'Fz1BVNKAXRMtwheb.png', 1, '5331f13a6fbeb18469a379c743e45696acc555d8', 'b6d668283bd72b356451467ab3400f664ee5c2ee', '', '', '', '2019-07-16 06:17:53', '2019-07-25 11:18:15'),
(15, 'cyclesoon01', 'cyclesoon01@gmail.co', '$2y$10$ay2ynNmyAm9MJkH4G/.Ph.wWPB6fj6reB70pH2p0RhQFUP6HEy22.', '(567) 475-6747', 2, 'H6ZEY4NPXomiKBWp.png', 1, '2d6b10b0a29f0a32e855f9b07ea16b9382edbcac', 'fd51a1d61f9c374eb70777d97bdef98bb0b827ff', '', '', '', '2019-07-26 06:46:13', '2019-08-02 05:40:00'),
(16, 'Test01 User', 'Test01@yopmail.com', '$2y$10$Cs4/rdR0JjQeew3USw8WnuK2lb52LWg/ndYM/NKlrEe.883DtKDv2', '(123) 456-7899', 2, '', 1, '4bbfa1fe3f051b683306960159ad83a660c6aa21', '40d2044de257284cab740f83d09ee744b2e505dc', '', '', '', '2019-08-02 10:59:04', '2019-08-02 10:59:04'),
(17, 'Vaibhav', 'vaibhavsharma.otc@gmail.com', '$2y$10$5U3FLNMJvgM2poa0A0ukEedIHLadEweOy8ccliiuWn6d/gW7qdkYe', '(342) 342-3423', 2, '', 1, 'f7060fa9d03e0b5e6e1e82a602f8f950fbf231c8', '3d52ebe6b43ac0a95aeab85914c04c4e196b4d66', '', '', '', '2019-08-02 11:55:42', '2019-08-21 08:14:29'),
(18, 'outlook', 'otctesting@outlook.com', '$2y$10$3llMq/wxSY61SrvvQnUzoOUBvowOkh8Kthh/CpK17NWkprDtLFMaq', '(123) 456-4561', 2, '', 1, 'e64aad76aa3152b0a88e62292127b28979adc035', '2976cee7ce7b7ac8d433186553806a58209b9aa2', '', '', '', '2019-08-02 12:19:47', '2019-08-02 12:19:47'),
(19, 'test yahoo', 'outthinkcoders@yahoo.com', '$2y$10$HaoEkCBBIzRnD9qS795ne.P4CUA3OTnoSMAojmLjhLN/cCBWO1zB2', '(123) 456-4561', 2, '', 1, '93ac7ef7c516c520bc8814ec51d0874530d55224', 'dd3e607aac930f043e94a6a33efe0673fd2739f5', '', '', '', '2019-08-02 12:30:43', '2019-08-02 12:30:43'),
(20, 'test', 'test@test.com', '$2y$10$6QO4bgBDC2Bw/dKlcfsw0OGO4kF0UvM4WFM9AcYPYHfrzzV6rDVEG', '(111) 111-1111', 2, '', 1, '0e9b835f8050323d0e752fc17bc56d348be6305c', '288d7fe8657d6587bb34039610a4516ba0cc1110', '', '', '', '2019-08-06 09:01:55', '2019-08-06 09:01:55'),
(21, 'test@', 'test@testo.com', '$2y$10$teApa0n4KWzWpeEE4uLQPO.6QQHZeKIXq9bhhYgR.IDNJyhPQVVxu', '(213) 131-3113', 2, '', 1, '92668571edb44326279376b45227181269218ef2', 'eb85ce3efe1655e53ee4f603e81d3bfbf52ee4cc', 'Ad', 'A Sector Road', 'test', '2019-09-06 12:40:13', '2019-09-06 12:40:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `serviceId` (`serviceId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`serviceId`) REFERENCES `service` (`serviceId`) ON DELETE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
