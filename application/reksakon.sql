-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 02:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reksakon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(11) NOT NULL,
  `JENIS` varchar(255) NOT NULL,
  `KETERANGAN` varchar(255) NOT NULL,
  `NO` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `OFFICE` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `JENIS`, `KETERANGAN`, `NO`, `EMAIL`, `OFFICE`) VALUES
(2, 'MARKETING', 'Unang C Santoso', '6282132236279', 'unang@reksakon.com', 'Operational Office : Jl. KH Syafi\'i IV / 23 Dahanrejo RT 001 RW 02 Kec. Kebomas Kab. Gresik - Jawa Timur'),
(3, 'ADMIN', 'M. Farhan Ramadhan Putra\n', '6285156533812', 'afan@reksakon.com', 'Jalan Komplek Taman Palem Lestari, Ruko Galaxy Blok L-37 , WEST JAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `home_information`
--

CREATE TABLE `home_information` (
  `ID` int(100) NOT NULL,
  `NAMA` varchar(255) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL,
  `PICT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_information`
--

INSERT INTO `home_information` (`ID`, `NAMA`, `KETERANGAN`, `PICT`) VALUES
(0, 'ABOUT_US', 'PT Rekayasa Sarana Konstruksi, berawal dari jasa penyediaan layanan suplai dan sewa scaffolding, suplai peralatan dan tenaga kerja konstruksi, serta penyediaan jasa pekerjaan sipil dan bangunan di berbagai proyek; baik industri manufaktur, rancang bangun pabrik dan kilang minyak.\nKami menyediakan dukungan pengerjaan dan ikut berpartisipasi dalam rangkaian pekerjaan proyek sampai tahap akhir.\nTerus berinovasi sesuai tantangan perkembangan industri dan kemajuan teknologi di Indonesia, kami pun mengembangkan badan usaha baru. Berbekal sumber daya manusia berpengalaman dalam menyelesaikan proyek skala EPC nasional dan internasional di Indonesia, kami X-42\nanchor\nY: 12\nmenyediakan jasa layanan pekerjaa konstruksi berkualitas tinggi, terpercaya, dan memiliki nilai tambah.\nPT Rekayasa Sarana Konstruksi siap berkolaborasi bersama\npara pemangku kepentingan, pelaku usaha konstruksi, maupun para pemilik proyek dengan prinsip saling menguntungkan, terbuka dan profesional.', 'About_Us (2).jpg'),
(1, 'COMPANY', 'PT. REKAYASA SARANA KONSTRUKSI', NULL),
(2, 'ALAMAT', '<b>HEAD OFFICE :</b> Jalan Komplek Palem Lestari, Ruko Galaxy Cengkareng Barat, Cengkareng Kota Adm, Jakarta Barat Dki Jakarta', NULL),
(3, 'TELP', '021-5596 0883, 5995 0232 </br><b>Fax:</b> 021-5595 8234 ', NULL),
(4, 'EMAIL', 'marketing@reksakon.com', NULL),
(5, 'EMAIL2', 'HRD.RECRUITMENT@RSK.ID', NULL),
(6, 'EMAIL3', 'MARKETING@RSK.ID', NULL),
(7, 'EMAIL4', 'CONSUMER@RSK.ID', NULL),
(8, 'BACKGROUND_HOME1', NULL, 'bg_home1.jpg'),
(9, 'BACKGROUND_HOME2', NULL, 'bg_home2.jpg'),
(10, 'MAPS', 'https://www.google.com/maps/place/6%C2%B008\'09.0%22S+106%C2%B043\'42.2%22E/@-6.135844,106.728393,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-6.135844!4d106.728393?entry=ttu', NULL),
(11, 'ACC_INSTAGRAM', 'https://www.instagram.com/rioadityapradana27/', NULL),
(12, 'ACC_FACEBOOK', 'https://www.facebook.com/xbootpower7610/?locale=id_ID', NULL),
(13, 'ACC_LINKEDIN', 'https://www.linkedin.com/in/rio-aditya-pradana-a70784165/', NULL),
(14, 'ACC_TWITTER', '', NULL),
(15, 'OUR_SERVICES', '<b>Solution-Focused</b>\n</br>\nWe offer the best solutions to address challenges and issues, with the goal of building trust through a win-win solution approach.\n\nExpertise Mastery\n\nWe grow and continually evolve with extensive knowledge to provide the best services.', NULL),
(16, 'OUR_SERVICES_HEADER', '<b>Responsive and Responsible</b></br>\n\nWe are quick to respond to client needs and take responsibility for the entrusted tasks.', NULL),
(17, 'ALAMAT2', '<b>OPERATIONAL OFFICE :</b> Jalan Kh Syafi\'i IV/23 Dahanrejo Rt 001 Rw 002 Kec. Kebomas Kab. Gresik - Jawa Timur', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_service`
--

CREATE TABLE `our_service` (
  `ID` int(200) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `KETERANGAN` varchar(1000) NOT NULL,
  `PICT` varchar(255) NOT NULL,
  `TANGGAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_service`
--

INSERT INTO `our_service` (`ID`, `NAMA`, `KETERANGAN`, `PICT`, `TANGGAL`) VALUES
(16, 'Scaffolding Supply', 'PT. Rekayasa Sarana Konstruksi provides “one stop solution” services for our clients for various scaffolding needs. Our scaffolding solutions provide a safe and reliable platform for work crews to use during the construction process, while giving them critical access to the materials they need to complete in each project.\r\n', '16.jpg', '0000-00-00'),
(17, 'Man Power Supply', 'PT. Rekayasa Sarana Konstruksi provides the needs of a highly competent professional workforce equipped with the necessary skills to ensure that the client\'s need for a qualified workforce can be met and the project can run optimally. Our workforce is strictly examined, ensuring that only the best and most qualified individuals are recommended and supplied to our clients. We strive to provide convenience, comfort and peace of mind in the entire workforce recruitment process, while upholding the quality and integrity of every project we assist.\r\n', '17.jpg', '0000-00-00'),
(18, 'Temporary Facilities Works', 'PT. Rekayasa Sarana Konstruksi is ready to support Client\'s needs in the construction and maintenance of Temporary Facilities for field offices, workers\' residences and other supporting facilities and utilities needed before and during the implementation of a project.\r\n', '18.jpg', '0000-00-00'),
(19, 'Civil, Building & Steel Structure', 'PT Rekayasa Sarana Konstruksi\'s experts and resources are ready to support clients\' needs for civil, building and steel structure. Our team personally has experience in completing various civil, building and steel structures especially to support infrastructure of energy, mining, petrochemical and manufacture industry.\r\n', '19.jpg', '0000-00-00'),
(20, 'Mechanical, Electrical & Plumbing (MEP) Work', 'PT Rekayasa Sarana Konstruksi\'s experts and resources are ready to support clients\' needs for Mechanical, Electrical & Plumbing (MEP) work.\r\n', '20.jpg', '0000-00-00'),
(21, 'Blasting & Painting Work', 'PT Rekayasa Sarana Konstruksi has experienced experts as well as equipments that supports client needs for various blasting & painting work.\r\n', '21.jpg', '0000-00-00'),
(22, 'Engineering Procurement Contruction(EPC)', 'PT. Rekayasa Sarana Konstruksi is ready to support clients\' needs in the construction of industrial facilities and infrastructure with an EPC contract scheme. Experts and resources of PT. Rekayasa Sarana Konstruksi has sufficient experience in integrating Engineering, Procurement and Construction activities both within one discipline or inter-disciplinary.\r\n', '21.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `KETERANGAN` varchar(255) NOT NULL,
  `pict` varchar(255) NOT NULL,
  `TANGGAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`ID`, `NAMA`, `KETERANGAN`, `pict`, `TANGGAL`) VALUES
(4, 'PT. FREEPORT INDONESIA', '', 'freeport.png', '0000-00-00'),
(5, 'HATCH', '', 'hatch.png', '0000-00-00'),
(6, 'PERTAMINA', '', 'pertamina.png', '0000-00-00'),
(7, 'PETROSEA', '', 'petrosea.png', '0000-00-00'),
(8, 'SWADAYA CIPTA', '', 'swadaya cipta.png', '0000-00-00'),
(9, 'PT. SANG BINTANG SINERGI', '', 'pt sang bintang.png', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` int(11) NOT NULL,
  `IDPRODUK` varchar(255) DEFAULT NULL,
  `NAMAPRODUK` varchar(255) DEFAULT NULL,
  `KETERANGAN` varchar(255) DEFAULT NULL,
  `PICT` varchar(255) NOT NULL,
  `PICT_2` varchar(200) NOT NULL,
  `TANGGAL` date NOT NULL,
  `ID_SERVICE` int(11) DEFAULT NULL,
  `PROJECT_OWNER` varchar(100) NOT NULL,
  `CLIENT_PROJECT` varchar(100) NOT NULL,
  `LOCATION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `IDPRODUK`, `NAMAPRODUK`, `KETERANGAN`, `PICT`, `PICT_2`, `TANGGAL`, `ID_SERVICE`, `PROJECT_OWNER`, `CLIENT_PROJECT`, `LOCATION`) VALUES
(44, 'PROJECT_44', 'RDMP BALIKPAPAN', 'Scaffolding supply', '44.jpg', '441.jpg', '2022-02-22', 0, 'PT. Kilang Pertamina Balikpapan', 'PT.Swadaya Cipta', 'Balikpapan'),
(45, 'PROJECT_45', 'MANYAR SMELTER PROJECT', 'SEWA SCAFFOLDING', '45.jpg', '451.jpg', '2023-03-23', 0, 'PT. Freeport Indonesia', 'PT. Sang Bintang Sinergi Gresik', 'Gresik'),
(46, 'PROJECT_46', 'MANYAR MAJU REFINERY', 'PORTA CAMP OFFICE', '46.jpg', '461.jpg', '2023-02-23', 0, 'PT. Freeport Indonesia', 'PT. Petrosea, Tbk', 'Gresik'),
(47, 'PROJECT_47', 'MANYAR MAJU REFINERY', 'Supply & Install Sewage Holding Tank', '47.jpg', '471.jpg', '2023-02-20', 0, 'PT. Freeport Indonesia', 'PT. Petrosea, Tbk', 'Gresik'),
(48, 'PROJECT_48', 'ARC POSCO Biodiesel', 'General Civil Work', '48.jpg', '481.jpg', '2024-12-28', 0, 'PT AGPA Refinery Complex', 'PT Tripatra', 'PT Tripatra'),
(58, 'PROJECT_58', 'ARC POSCO Biodiesel', 'Painting Work', '58.jpg', '581.jpg', '2024-12-28', 0, 'PT AGPA Refinery Complex', 'PT Tripatra', 'PT Tripatra'),
(59, 'PROJECT_59', 'AKASIA Bagus', 'Civil Work', '59.jpg', '591.jpg', '2024-12-28', 0, 'PT Pertamina EP', 'PT Tripatra', 'PT Tripatra'),
(60, 'PROJECT_60', 'Manyar Smelter Project', 'Presure Test Work', '60.jpg', '601.jpg', '2024-12-21', 0, 'PT Freeport Indonesia', 'PT Freeport Indonesia', 'PT Freeport Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`) VALUES
(1, '', 'rio@rio.com', 'RIO', '$2y$10$cECHaAK1y771UyI779RF9eNGcKChDHY9rabneS/i.WvfPg7iyqh9e', NULL, '2024-03-09 05:01:12', NULL),
(3, '', '123456@xc.com', 'RERE', '$2y$10$ieMcp4Fr8khYlGIJDkqmjOYnbrUboLGlZOVLBUuItWgi6ZX3xeLWm', NULL, '2024-03-09 06:25:32', NULL),
(5, '', 'rufi@rufi.com', 'RUFI', '$2y$10$6dyNzPPTD3Ks6TD2eMuNXOE5V7HmclQV4Wv3.T9VuXgz1uiD/f2jW', NULL, '2025-01-27 11:56:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `YEAR` varchar(100) NOT NULL,
  `PROJECT_NAME` varchar(100) NOT NULL,
  `PROJECT_OWNER` varchar(100) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `CLIENT` varchar(100) NOT NULL,
  `WORK_PACKAGE` varchar(250) NOT NULL,
  `CONTRACT_VALUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`YEAR`, `PROJECT_NAME`, `PROJECT_OWNER`, `LOCATION`, `CLIENT`, `WORK_PACKAGE`, `CONTRACT_VALUE`) VALUES
('2023', 'Manyar Smelter Project  (MSP) ', 'PT Freeport Indonesia', 'Gresik', 'PT Chiyoda International Indonesia/PT Sang Bintang Sinergi', 'Rental of Scaffolding Material', 983120800),
('2023', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Portacamp Office Building ', 2147483647),
('2023', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Supply & Install Sewage Holding Tank', 2147483647),
('2023', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Supply of Manpower for Civil Work ', 2147483647),
('2023', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Supply of HDPE Pipe, HDPE Geomembrane and HDPE Butt Fusion Welding Machine', 553265700),
('2023', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Rental of Scaffolding Material', 1226199460),
('2024', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Supply of Engineer for Structure, Mechanical & Piping', 1533504000),
('2024', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Petrosea Tbk', 'Supply of Manpower & Tools for Structure, Mechanical, Piping, Electrical & Instrument Work', 2147483647),
('2024', 'Manyar Smelter Project  (MSP)', 'PT Freeport Indonesia', 'Gresik', 'PT Chiyoda International Indonesia', 'Supply of Safety Equipment and Contruction Material', 125821600),
('2024', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'Hatch/PT Prima Unggul Persada', 'Supply of Manpower for Prefabrication Building Work', 2147483647),
('2024', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'PT Sang Bintang Sinergi', 'Rental Scaffolding', 423754500),
('2024', 'Manyar Smelter Project  (MSP)', 'PT Freeport Indonesia', 'Gresik', 'PT Freeport Indonesia', 'Pressure Test Work', 2147483647),
('2024', 'Manyar Smelter Project  (MSP)', 'PT Freeport Indonesia', 'Gresik', 'PT Freeport Indonesia', 'Welding Manpower & Equipment Supply', 2147483647),
('2024', 'EPC Tuban Jetty Upgrade and Its Ancilllary Production & Transportation Facilitie Project', 'PT Solusi Bangun Indonesia', 'Tuban', 'PT Hutama Karya/PT Raflesia Permata Indonesia', 'Piping, Painting & Scaffolding Work', 713809000),
('2024', 'Freeport Manyar Refinery (FMR) Project', 'PT Freeport Indonesia', 'Gresik', 'PT Freeport Indonesia / PT Freeport Manyar Refinery', 'Pressure Test Work', 2147483647),
('2024', 'EPCC of 1500 TPD Physical Refinery, 1200 TPD Dry Fractination and All Offsite Facilities', 'PT AGPA Refinery Complex', 'Balikpapan', 'PT Tripatra Engineers & Constructor', 'General Civil Work', 2147483647),
('2024', 'EPC Pembangunan SP ABG Stage 1 Project', 'PT Pertamina EP', 'Indramayu', 'PT Tripatra Engineers & Constructor', 'Manpower Supply & Civil Work ', 2147483647),
('2024', 'EPCC of 1500 TPD Physical Refinery, 1200 TPD Dry Fractination and All Offsite Facilities', 'PT AGPA Refinery Complex', 'Balikpapan', 'PT Tripatra Engineers & Constructor', 'Painting for Tank', 2147483647),
('2024', 'Data Centre at Nongsa', 'PT GDS IDC Service', 'Batam', 'PT Interdesign Cipta Optima', 'Steel Frame for Dry Wall Partition', 1326763872),
('2024', 'EPCC of 1500 TPD Physical Refinery, 1200 TPD Dry Fractination and All Offsite Facilities', 'PT AGPA Refinery Complex', 'Balikpapan', 'PT Tripatra Engineers & Constructor', 'Shop Painting for Piping & Structure', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `home_information`
--
ALTER TABLE `home_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
