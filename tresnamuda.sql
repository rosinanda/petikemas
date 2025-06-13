-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 01:30 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tresnamuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl`
--

CREATE TABLE IF NOT EXISTS `bl` (
  `no_bl` varchar(20) NOT NULL,
  `id_employee` varchar(5) NOT NULL,
  `no_si` varchar(20) NOT NULL,
  `harga_container` int(11) NOT NULL,
  `harga_pengiriman` int(11) NOT NULL,
  `payment_total` int(11) NOT NULL,
  `already_paid` int(11) NOT NULL,
  `bank_shipper` varchar(10) NOT NULL,
  `bank_tresna` varchar(10) NOT NULL,
  `date_paid` date NOT NULL,
  `status_pay` varchar(5) NOT NULL,
  `status_bl` varchar(50) NOT NULL,
  `status_konfirmasi` varchar(10) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `date_print` date NOT NULL,
  `no_manifest` varchar(10) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  PRIMARY KEY (`no_bl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bl`
--

INSERT INTO `bl` (`no_bl`, `id_employee`, `no_si`, `harga_container`, `harga_pengiriman`, `payment_total`, `already_paid`, `bank_shipper`, `bank_tresna`, `date_paid`, `status_pay`, `status_bl`, `status_konfirmasi`, `keterangan`, `date_print`, `no_manifest`, `bukti_transfer`) VALUES
('BL/29122016/0000001', '', 'SI/29122016/0000001', 2000000, 3000000, 5000000, 5000000, 'BCA', 'BCA', '2016-12-29', 'lunas', 'sudah di cek', 'correct', '', '0000-00-00', '0000000001', '4.jpg'),
('BL/29122016/0000002', '', 'SI/29122016/0000002', 2500000, 3000000, 5500000, 5500000, 'BRI', 'BRI', '2016-12-29', 'lunas', 'sudah di cek', 'correct', '', '0000-00-00', '0000000002', '5.jpg'),
('BL/29122016/0000003', '', 'SI/29122016/0000003', 2500000, 3000000, 5500000, 5500000, 'MANDIRI', 'MANDIRI', '2016-12-29', 'lunas', 'sudah di cek', 'correct', '', '0000-00-00', '0000000001', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id_company` varchar(5) NOT NULL,
  `name_company` varchar(20) NOT NULL,
  `ads_company` varchar(50) NOT NULL,
  `city_company` varchar(10) NOT NULL,
  `country_company` varchar(10) NOT NULL,
  `tlp_company` varchar(15) NOT NULL,
  `pic_company` varchar(20) NOT NULL,
  `tlppic_company` varchar(15) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `name_company`, `ads_company`, `city_company`, `country_company`, `tlp_company`, `pic_company`, `tlppic_company`) VALUES
('C0001', 'Tokyo Sangyo', '560-8 Okubo-Ryoke, Sakura-ku, Saitama-shi, Postal ', 'TOKYO', 'JAPAN', '43221112', 'Mey', '34453223'),
('C0002', 'Yamanouchi Pharm', '254-1-2 Sanno-cho, Inage-ku, Chiba-shi, Postal Cod', 'YOKOHAMA', 'JAPAN', '45543452', 'Yaoni', '34666654'),
('C0003', 'Terumo', '1-2-3-401 Nishi Ikebukuro, Toshima-ku Postal Code ', 'NAGOYA', 'JAPAN', '49998765', 'Harumi', '38676567'),
('C0004', 'Showa Denko', '2-10 Hyakunincho, Shinjukuku-ku Postal Code : 169-', 'OSAKA', 'JAPAN', '49976787', 'Junichi', '37566667'),
('C0005', 'Sapporo Hokuyo', '4-18 Mi-i-cho, Kakamigahara-shi, Postal Code : 504', 'MOJI', 'JAPAN', '455632211', 'Katsumi ', '378565445'),
('C0006', 'Obayashi', 'Wakakusamachi 10 â€“ 19, beppushi, ÅŒita ken 874 â', 'KOBE', 'JAPAN', '5433334323', 'Yoichi ', '3455632234'),
('C0007', 'Nissay Dowa', '1F As-Salaam Bldg., 4-6-7 Taito, Taito-ku, Postal ', 'HAKATA', 'JAPAN', '533325325', 'Zuri', '335553655');

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE IF NOT EXISTS `container` (
  `no_container` varchar(10) NOT NULL,
  `name_container` varchar(20) NOT NULL,
  `type_container` varchar(50) NOT NULL,
  `size_container` varchar(30) NOT NULL,
  `stock_container` int(11) NOT NULL,
  `harga_container` int(11) NOT NULL,
  PRIMARY KEY (`no_container`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`no_container`, `name_container`, `type_container`, `size_container`, `stock_container`, `harga_container`) VALUES
('cont000001', 'Ever Green', 'DRY CONTAINER STANDARD', '20FT', 3, 2000000),
('cont000002', 'Ever Green', 'DRY CONTAINER STANDARD', '40FT', 0, 2500000),
('cont000003', 'Ever Green', 'DRY CONTAINER STANDARD', '45FT', 3, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=173 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id_country`, `city`, `country`) VALUES
(6, 'TOKYO', 'JAPAN'),
(7, 'YOKOHAMA', 'JAPAN'),
(8, 'NAGOYA', 'JAPAN'),
(9, 'OSAKA', 'JAPAN'),
(10, 'MOJI', 'JAPAN'),
(11, 'KOBE', 'JAPAN'),
(12, 'HAKATA', 'JAPAN'),
(13, 'SHIMIZU', 'JAPAN'),
(14, 'FUKUYAMA', 'JAPAN'),
(15, 'NAHA', 'JAPAN'),
(16, 'MIZUSHIMA', 'JAPAN'),
(17, 'CHIBA', 'JAPAN'),
(18, 'YOKKAICHI', 'JAPAN'),
(19, 'KAWASAKI', 'JAPAN'),
(20, 'HIROSHIMA', 'JAPAN'),
(21, 'GUANGZHOU', 'CHINA'),
(22, 'HUNGPU', 'CHINA'),
(23, ' ZHONGSHAN', 'CHINA'),
(24, 'SHENZHEN', 'CHINA'),
(25, 'DONGGUAN', 'CHINA'),
(26, 'SHANTOU', 'CHINA'),
(27, 'HUIZHOU', 'CHINA'),
(28, 'NANNING', 'CHINA'),
(29, 'GUANGXI', 'CHINA'),
(30, 'EAST CHINA', 'CHINA'),
(31, 'FUJIAN', 'CHINA'),
(32, 'XIAMEN', 'CHINA'),
(33, 'NORTH CHINA', 'CHINA'),
(34, 'HONGKONG', 'HONGKONG'),
(35, 'MANZANILO', 'MEXICO'),
(36, 'CALLAO', 'PERU'),
(37, 'BUENAVENTURA', 'COLUMBIA'),
(38, 'GUAYAQUIL', 'ECUADOR'),
(39, 'PUERTO QUETZA', 'GUATEMALA'),
(40, 'LONG BEACH', 'USA'),
(41, 'INCHOEN', 'KOREA'),
(42, 'PUSAN', 'KOREA'),
(43, 'KWANGUANG', 'KOREA'),
(44, 'ULSAN', 'KOREA'),
(45, 'HAIPHONG', 'VIETNAM'),
(46, 'CATLAI', 'VIETNAM'),
(47, 'DANANG', 'VIETNAM'),
(48, 'MANILA NORTH', 'PHILIPINE'),
(49, 'MANILA SOUTH', 'PHILIPINE'),
(50, 'CEBU', 'PHILIPINE'),
(51, 'SUBIG BAY', 'PHILIPINE'),
(52, 'SINGAPORE', 'SINGAPORE'),
(53, 'BANGKOK', 'THAILAND'),
(54, 'LAEMCHABANG', 'THAILAND'),
(55, 'LAT KRABANG', 'THAILAND'),
(56, 'RANGOON/YANGON', 'MYANMAR'),
(57, 'PASIR GUDANG', 'MALAYSIA'),
(58, 'PENANG', 'MALAYSIA'),
(59, 'PORTKLANG', 'MALAYSIA'),
(60, 'TAWAU', 'MALAYSIA'),
(61, 'MIRI', 'MALAYSIA'),
(62, 'SAIBU', 'MALAYSIA'),
(63, 'KUCHING', 'MALAYSIA'),
(64, 'BINTULU', 'MALAYSIA'),
(65, 'PHNOM PENH', 'CAMBODIA'),
(66, 'SIHANOUKVILLE', 'PAPUA NEW GUINEA'),
(67, 'PORT MORESBY', 'PAPUA NEW GUINEA'),
(68, 'LAE', 'PAPUA NEW GUINEA'),
(69, 'RABAUL', 'PAPUA NEW GUINEA'),
(70, 'KIMBE', 'PAPUA NEW GUINEA'),
(71, 'MADANG', 'PAPUA NEW GUINEA'),
(72, 'WEWAK', 'PAPUA NEW GUINEA'),
(73, 'HONIARA', 'SOLOMON ISLAND'),
(74, 'TAIPEI', 'TAIWAN'),
(75, 'KEELUNG', 'TAIWAN'),
(76, 'KAOHSIUNG', 'TAIWAN'),
(77, 'TAICHUNG', 'TAIWAN'),
(78, 'TAOYUAN', 'TAIWAN'),
(79, 'NHAVASEVA', 'INDIA'),
(80, 'CHENNAI', 'INDIA'),
(81, 'VISAKHAPATNAM', 'INDIA'),
(82, 'MUMBAI', 'INDIA'),
(83, 'MUNDRA', 'INDIA'),
(84, 'CONSTANTA', 'BLACK SEA'),
(85, 'ISTANBUL', 'BLACK SEA'),
(86, 'ROTERDAM', 'EUROPE'),
(87, 'HAMBURG', 'EUROPE'),
(88, 'ANTWERP', 'EUROPE'),
(89, 'city', 'country'),
(90, 'TOKYO', 'JAPAN'),
(91, 'YOKOHAMA', 'JAPAN'),
(92, 'NAGOYA', 'JAPAN'),
(93, 'OSAKA', 'JAPAN'),
(94, 'MOJI', 'JAPAN'),
(95, 'KOBE', 'JAPAN'),
(96, 'HAKATA', 'JAPAN'),
(97, 'SHIMIZU', 'JAPAN'),
(98, 'FUKUYAMA', 'JAPAN'),
(99, 'NAHA', 'JAPAN'),
(100, 'MIZUSHIMA', 'JAPAN'),
(101, 'CHIBA', 'JAPAN'),
(102, 'YOKKAICHI', 'JAPAN'),
(103, 'KAWASAKI', 'JAPAN'),
(104, 'HIROSHIMA', 'JAPAN'),
(105, 'GUANGZHOU', 'CHINA'),
(106, 'HUNGPU', 'CHINA'),
(107, ' ZHONGSHAN', 'CHINA'),
(108, 'SHENZHEN', 'CHINA'),
(109, 'DONGGUAN', 'CHINA'),
(110, 'SHANTOU', 'CHINA'),
(111, 'HUIZHOU', 'CHINA'),
(112, 'NANNING', 'CHINA'),
(113, 'GUANGXI', 'CHINA'),
(114, 'EAST CHINA', 'CHINA'),
(115, 'FUJIAN', 'CHINA'),
(116, 'XIAMEN', 'CHINA'),
(117, 'NORTH CHINA', 'CHINA'),
(118, 'HONGKONG', 'HONGKONG'),
(119, 'MANZANILO', 'MEXICO'),
(120, 'CALLAO', 'PERU'),
(121, 'BUENAVENTURA', 'COLUMBIA'),
(122, 'GUAYAQUIL', 'ECUADOR'),
(123, 'PUERTO QUETZA', 'GUATEMALA'),
(124, 'LONG BEACH', 'USA'),
(125, 'INCHOEN', 'KOREA'),
(126, 'PUSAN', 'KOREA'),
(127, 'KWANGUANG', 'KOREA'),
(128, 'ULSAN', 'KOREA'),
(129, 'HAIPHONG', 'VIETNAM'),
(130, 'CATLAI', 'VIETNAM'),
(131, 'DANANG', 'VIETNAM'),
(132, 'MANILA NORTH', 'PHILIPINE'),
(133, 'MANILA SOUTH', 'PHILIPINE'),
(134, 'CEBU', 'PHILIPINE'),
(135, 'SUBIG BAY', 'PHILIPINE'),
(136, 'SINGAPORE', 'SINGAPORE'),
(137, 'BANGKOK', 'THAILAND'),
(138, 'LAEMCHABANG', 'THAILAND'),
(139, 'LAT KRABANG', 'THAILAND'),
(140, 'RANGOON/YANGON', 'MYANMAR'),
(141, 'PASIR GUDANG', 'MALAYSIA'),
(142, 'PENANG', 'MALAYSIA'),
(143, 'PORTKLANG', 'MALAYSIA'),
(144, 'TAWAU', 'MALAYSIA'),
(145, 'MIRI', 'MALAYSIA'),
(146, 'SAIBU', 'MALAYSIA'),
(147, 'KUCHING', 'MALAYSIA'),
(148, 'BINTULU', 'MALAYSIA'),
(149, 'PHNOM PENH', 'CAMBODIA'),
(150, 'SIHANOUKVILLE', 'PAPUA NEW GUINEA'),
(151, 'PORT MORESBY', 'PAPUA NEW GUINEA'),
(152, 'LAE', 'PAPUA NEW GUINEA'),
(153, 'RABAUL', 'PAPUA NEW GUINEA'),
(154, 'KIMBE', 'PAPUA NEW GUINEA'),
(155, 'MADANG', 'PAPUA NEW GUINEA'),
(156, 'WEWAK', 'PAPUA NEW GUINEA'),
(157, 'HONIARA', 'SOLOMON ISLAND'),
(158, 'TAIPEI', 'TAIWAN'),
(159, 'KEELUNG', 'TAIWAN'),
(160, 'KAOHSIUNG', 'TAIWAN'),
(161, 'TAICHUNG', 'TAIWAN'),
(162, 'TAOYUAN', 'TAIWAN'),
(163, 'NHAVASEVA', 'INDIA'),
(164, 'CHENNAI', 'INDIA'),
(165, 'VISAKHAPATNAM', 'INDIA'),
(166, 'MUMBAI', 'INDIA'),
(167, 'MUNDRA', 'INDIA'),
(168, 'CONSTANTA', 'BLACK SEA'),
(169, 'ISTANBUL', 'BLACK SEA'),
(170, 'ROTERDAM', 'EUROPE'),
(171, 'HAMBURG', 'EUROPE'),
(172, 'ANTWERP', 'EUROPE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id_emp` varchar(5) NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `name_emp` varchar(20) NOT NULL,
  `ads_emp` varchar(50) NOT NULL,
  `tlp_emp` varchar(15) NOT NULL,
  `username_emp` varchar(5) NOT NULL,
  `password_emp` varchar(5) NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_emp`, `departemen`, `name_emp`, `ads_emp`, `tlp_emp`, `username_emp`, `password_emp`) VALUES
('emp 5', 'kepala_cabang', 'abdul rochim', 'rungkut asri', '876556789', 'abdul', 'abdul'),
('emp1', 'marketing', 'rosi', 'dsdkhsj', '876589', 'rosi', 'rosi'),
('emp2', 'dokumen', 'siti', 'magersari sidoarjo', '45667564', 'siti', 'siti'),
('emp3', 'keuangan', 'Ivan Prya', 'bulak rukem', '87655678', 'ivanp', 'ivanp'),
('emp4', 'customer_service', 'Hanifah Jauza', 'setro', '9876545', 'hanif', 'hanif');

-- --------------------------------------------------------

--
-- Table structure for table `manifest`
--

CREATE TABLE IF NOT EXISTS `manifest` (
  `no_manifest` varchar(10) NOT NULL,
  `id_employee` varchar(5) NOT NULL,
  `id_schedule` varchar(5) NOT NULL,
  `d_print` date NOT NULL,
  `pol` varchar(10) NOT NULL,
  `po_del` varchar(10) NOT NULL,
  `container_total` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`no_manifest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manifest`
--

INSERT INTO `manifest` (`no_manifest`, `id_employee`, `id_schedule`, `d_print`, `pol`, `po_del`, `container_total`, `status`) VALUES
('0000000001', 'emp2', '', '2016-12-30', 'GRESIK', 'TOKYO', 2, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `id_pengiriman` varchar(5) NOT NULL,
  `no_manifest` varchar(10) NOT NULL,
  `id_status` varchar(5) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id_pengiriman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `no_manifest`, `id_status`, `tanggal_pengiriman`, `value`) VALUES
('t0001', '0000000001', 'stat1', '2017-01-02', 1),
('t0002', '0000000001', 'stat2', '2017-01-05', 1),
('t0003', '0000000001', 'stat3', '2017-01-07', 1),
('t0004', '0000000001', 'stat4', '2017-01-10', 1),
('t0005', '0000000001', 'stat5', '2017-01-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `voy` varchar(5) NOT NULL,
  `city` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `etd` date NOT NULL,
  `eta` date NOT NULL,
  PRIMARY KEY (`voy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`voy`, `city`, `country`, `etd`, `eta`) VALUES
('VOY01', 'TOKYO', 'JAPAN', '2017-01-04', '2017-01-01'),
('VOY02', 'YOKOHAMA', 'JAPAN', '2017-01-04', '2017-01-01'),
('VOY03', 'NAGOYA', 'JAPAN', '2017-01-06', '2017-01-03'),
('VOY04', 'MOJI', 'JAPAN', '2017-01-05', '2017-01-02'),
('VOY05', 'KOBE', 'JAPAN', '2017-01-06', '2017-01-03'),
('VOY06', 'HAKATA', 'JAPAN', '2017-01-08', '2017-01-05'),
('VOY07', 'SHIMIZU', 'JAPAN', '2017-01-07', '2017-01-04'),
('VOY08', 'FUKUYAMA', 'JAPAN', '2017-01-07', '2017-01-04'),
('VOY09', 'NAHA', 'JAPAN', '2017-01-05', '2017-01-02'),
('VOY10', 'MIZUSHIMA', 'JAPAN', '2017-01-08', '2017-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE IF NOT EXISTS `shipper` (
  `id_shipper` varchar(5) NOT NULL,
  `name_shipper` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL,
  `ads_shipper` varchar(50) NOT NULL,
  `city_shipper` varchar(10) NOT NULL,
  `tlp_shipper` varchar(12) NOT NULL,
  `fax_shipper` varchar(12) NOT NULL,
  `email_shipper` varchar(30) NOT NULL,
  `pic_shipper` varchar(10) NOT NULL,
  `tlppic_shipper` varchar(12) NOT NULL,
  `username_shipper` varchar(10) NOT NULL,
  `password_shipper` varchar(10) NOT NULL,
  PRIMARY KEY (`id_shipper`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipper`
--

INSERT INTO `shipper` (`id_shipper`, `name_shipper`, `business`, `ads_shipper`, `city_shipper`, `tlp_shipper`, `fax_shipper`, `email_shipper`, `pic_shipper`, `tlppic_shipper`, `username_shipper`, `password_shipper`) VALUES
('S0001', 'PT Kemang Food Industries', 'Meat product; Sausage', 'Surabaya Industrial Estate Rungkut, Jl. Rungkut In', 'SURABAYA', '(031) 843925', '(031) 843925', 'ochieeshop@gmail.com', 'Joko', '62865456778', 'kemangfood', 'kemangfood'),
('S0002', 'PT Rexam Der Kwei Kemasan Indah ', 'Plastic', 'Surabaya Industrial Estate Rungkut, Jl. Rungkut In', 'SURABAYA', '(031) 841490', '(031) 843944', 'kemasanindah@gmail.com', 'Anita', '62876434567', 'kemasan', 'kemasan'),
('S0003', 'PT Sinar Karya Duta Abadi', 'Furniture', 'Jl. Raya Wringinanom KM 33,9 Kec. Wringinanom', 'GRESIK', '031 8982221', '031 8982221', 'sinarkarya@gmail.com', 'Eko irawan', '6289987766', 'sinarkarya', 'sinarkarya'),
('S0004', 'PT. A. Schulman Plastics', 'Plastic', 'kecicang rt.04/rw.03 desa ngerong kec.gempol', 'PASURUAN', '0343) 854240', '0343) 854240', 'plastik@gmail.com', 'Indra', '6284457656', 'plastik', 'plastik'),
('S0005', 'PT. Mega Marine Pride', 'Ikan', 'Mega Marine Pride. PT, Indonesia. Desa Wonokoyo, K', 'PASURUAN', '+62 (343) 65', '+62 (343) 65', 'ikan@gmail.com', 'Suwarsih', '62787765545', 'marine', 'marine'),
('S0006', 'UD Pendawa', 'tools and electric equipment', 'Jl. Kaliagung II/B No. 17', 'SURABAYA', '(031) 355463', '(031) 355463', 'pendawa@gmail.com', 'Tarji', '62899998766', 'pendawa', 'pendawa'),
('S0007', 'PT Penta Valent', 'Medical and paramedical equipment', 'Jl. Berbek Industri V No. 8, Waru,Sidoarjo 60251', 'SIDOARJO', '(031) 843795', '(031) 843795', 'penta@gmail.com', 'Sujatmiko', '62877899989', 'valent', 'valent'),
('S0008', 'PT Penta Yanapainto', 'painting equipment', 'Jl. Kemantren, Paciran,Lamongan 62264', 'LAMONGAN', '(0322) 66200', '(0322) 66200', 'yanapainto@gmail.com', 'Dewi', '62876777687', 'yanapainto', 'yanapainto'),
('S0009', 'PER Master Ponorogo', 'Fruit, vegetable', 'Jl. Raya Madiun Km. 5', 'PONOROGO', '(0352) 46196', '(0352) 48159', 'permaster@gmail.com', 'Ugi Birawa', '6289999900', 'permaster', 'permaster'),
('S0010', 'PT Perkebunan Ijen', 'Clove plantation', 'Jl. Bromo No. 25', 'MALANG', '(0341) 32640', '(0341) 32640', 'cengkeh@gmail.com', 'Kartika', '628867656', 'cengkeh', 'cengkeh');

-- --------------------------------------------------------

--
-- Table structure for table `si`
--

CREATE TABLE IF NOT EXISTS `si` (
  `no_si` varchar(20) NOT NULL,
  `voy` varchar(5) NOT NULL,
  `no_container` varchar(10) NOT NULL,
  `consignee` varchar(500) NOT NULL,
  `ads_consignee` varchar(500) NOT NULL,
  `tlp_consignee` int(15) NOT NULL,
  `id_employee` varchar(5) NOT NULL,
  `id_shipper` varchar(5) NOT NULL,
  `id_company` varchar(5) NOT NULL,
  `date_si` date NOT NULL,
  `notify_party` varchar(20) NOT NULL,
  `pol` varchar(10) NOT NULL,
  `po_disc` varchar(10) NOT NULL,
  `po_del` varchar(10) NOT NULL,
  `party` varchar(30) NOT NULL,
  `type_container` varchar(50) NOT NULL,
  `desc_og` varchar(30) NOT NULL,
  `w_nett` decimal(11,0) NOT NULL,
  `w_gross` decimal(11,0) NOT NULL,
  `data_stuffing` date NOT NULL,
  `place_stuffing` varchar(50) NOT NULL,
  `fumigation` varchar(3) NOT NULL,
  `konfirmasi` varchar(3) NOT NULL,
  `draft_bl` varchar(5) NOT NULL,
  PRIMARY KEY (`no_si`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si`
--

INSERT INTO `si` (`no_si`, `voy`, `no_container`, `consignee`, `ads_consignee`, `tlp_consignee`, `id_employee`, `id_shipper`, `id_company`, `date_si`, `notify_party`, `pol`, `po_disc`, `po_del`, `party`, `type_container`, `desc_og`, `w_nett`, `w_gross`, `data_stuffing`, `place_stuffing`, `fumigation`, `konfirmasi`, `draft_bl`) VALUES
('SI/29122016/0000001', 'VOY01', 'cont000001', 'Tokyu Corporation', '560-8 Okubo-Ryoke, Sakura-ku, Saitama-shi, Postal', 44323234, 'emp1', 'S0001', 'C0001', '0000-00-00', 'same as consignee', 'SURABAYA', 'JAPAN', 'TOKYO', '20FT', 'DRY CONTAINER STANDARD', 'Meat product', '12000', '12500', '2016-12-30', 'gudang kami', 'no', 'ya', 'sudah'),
('SI/29122016/0000002', 'VOY02', 'cont000002', 'Yokohama Rubber Company', '254-1-2 Sanno-cho, Inage-ku, Chiba-shi, Postal Cod', 45364524, 'emp1', 'S0002', 'C0002', '0000-00-00', 'same as consignee', 'SURABAYA', 'JAPAN', 'YOKOHAMA', '40FT', 'DRY CONTAINER STANDARD', 'plastik', '30000', '32000', '2016-12-30', 'gudang kami', 'no', 'ya', 'sudah'),
('SI/29122016/0000003', 'VOY01', 'cont000002', 'Toho', '560-8 Okubo-Ryoke, Sakura-ku, Saitama-shi, Postal', 45555543, 'emp1', 'S0003', 'C0001', '0000-00-00', 'same as consignee', 'GRESIK', 'JAPAN', 'TOKYO', '40FT', 'DRY CONTAINER STANDARD', 'furniture', '35000', '35500', '2016-12-30', 'gudang kami', 'no', 'ya', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` varchar(5) NOT NULL,
  `nama_status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
('stat1', 'Manifested'),
('stat2', 'Transit'),
('stat3', 'On Process'),
('stat4', 'Discharge'),
('stat5', 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `vessel`
--

CREATE TABLE IF NOT EXISTS `vessel` (
  `id_vessel` varchar(5) NOT NULL,
  `name_vessel` varchar(10) NOT NULL,
  `Bruto` int(11) NOT NULL,
  `Volume` int(11) NOT NULL,
  `Bendera` varchar(20) NOT NULL,
  PRIMARY KEY (`id_vessel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vessel`
--

INSERT INTO `vessel` (`id_vessel`, `name_vessel`, `Bruto`, `Volume`, `Bendera`) VALUES
('VES01', 'TMS Lines', 0, 0, ''),
('VES02', 'Wan Hai', 0, 0, ''),
('VES03', 'Hyundai', 0, 0, ''),
('VES04', 'Soechi Lin', 0, 0, ''),
('VES05', 'Maersk Lin', 0, 0, ''),
('VES06', 'Jacaranda', 0, 0, ''),
('VES07', 'Hanjin', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `v_schedule`
--

CREATE TABLE IF NOT EXISTS `v_schedule` (
  `id_schedule` varchar(5) NOT NULL,
  `voy` varchar(5) NOT NULL,
  `id_vessel` varchar(5) NOT NULL,
  PRIMARY KEY (`id_schedule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v_schedule`
--

INSERT INTO `v_schedule` (`id_schedule`, `voy`, `id_vessel`) VALUES
('SV001', 'VOY01', 'VES01'),
('SV002', 'VOY02', 'VES01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
