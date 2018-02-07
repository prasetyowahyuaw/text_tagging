-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 12:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagging`
--

-- --------------------------------------------------------

--
-- Table structure for table `tagging`
--

CREATE TABLE `tagging` (
  `id_tagging` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tweet` bigint(30) NOT NULL,
  `label_tweet` int(11) NOT NULL,
  `label_topic` int(11) NOT NULL,
  `sarkastik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagging`
--

INSERT INTO `tagging` (`id_tagging`, `id_user`, `id_tweet`, `label_tweet`, `label_topic`, `sarkastik`) VALUES
(11, 1, 949929402749501000, 2, 0, 1),
(12, 1, 949929415122628000, -2, -2, 0),
(13, 1, 949942957976698000, -2, -2, 0),
(14, 1, 949944104510619000, -2, -2, 0),
(15, 1, 949946989780717000, -2, -2, 0),
(16, 1, 949948028307226000, -2, -2, 0),
(17, 1, 949950507891679000, -2, -2, 0),
(18, 1, 949951099644989000, -2, -2, 0),
(19, 1, 949956269451784000, -2, -2, 0),
(20, 1, 949958481305485000, -2, -2, 0),
(21, 1, 949958902950449000, 0, 1, 0),
(22, 1, 949961992684503000, -2, -2, 1),
(23, 1, 949969083100884000, -1, -2, 0),
(24, 1, 949973262317924000, -2, 0, 0),
(25, 1, 949973264041848000, 1, 0, 1),
(26, 1, 949977035702611000, -2, -1, 1),
(27, 1, 949980209280835000, 0, 0, 1),
(28, 1, 949981394331090000, -2, -2, 1),
(29, 1, 949982453942251000, 2, 2, 0),
(30, 1, 949984665674203000, -2, -2, 0),
(31, 1, 949987116288585000, -2, -2, 0),
(32, 1, 949990488630685000, -2, -2, 0),
(33, 1, 949991782196027000, -2, -2, 0),
(34, 1, 949992303967420000, -2, -2, 0),
(35, 1, 949997085578772000, -2, -2, 0),
(36, 1, 949997253669814000, -2, -2, 0),
(37, 1, 949997545782091000, -2, -2, 0),
(38, 1, 949997630674780000, -2, -2, 0),
(39, 1, 949998613895168000, -2, -2, 0),
(40, 1, 950000382004027000, -2, -2, 0),
(41, 2, 949929402749501000, 2, 2, 1),
(42, 2, 949929415122628000, -2, 1, 1),
(43, 2, 949942957976698000, -2, 0, 1),
(44, 2, 949944104510619000, 1, 1, 1),
(45, 2, 949946989780717000, -2, 2, 1),
(46, 2, 949948028307226000, -1, 0, 0),
(47, 2, 949950507891679000, -2, 2, 0),
(48, 2, 949951099644989000, -2, -1, 0),
(49, 2, 949956269451784000, -2, -1, 0),
(50, 2, 949958481305485000, -1, -2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(222) NOT NULL,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL,
  `user3` int(11) NOT NULL,
  `user4` int(11) NOT NULL,
  `user5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `topic`, `text`, `username`, `location`, `created_at`, `pic`, `user1`, `user2`, `user3`, `user4`, `user5`) VALUES
('949929402749501000', 'telkomsel', '@AUTOTLS telkomsel 45rb 13GB full kuota[] ', 'y0urqueenkim', 'Jakarta', '2018/2/2 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949929415122628000', 'telkomsel', '@nonn_rbp_new Telkomsel agak melemah 4G nya dr akhir thn kemarin sm dg tempat ku ', '_K1235N4_', 'Jakarta', '2018/1/8 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949942957976698000', 'telkomsel', 'Kenapa 4G @kartuHalo nya @Telkomsel gak pernah ngasih experience yg bagus ya? Posisi saya di cinunuk bandung. TapiÃ¢â‚¬Â¦ ', 'zahreevi', 'Jakarta', '2018/1/19 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949944104510619000', 'telkomsel', 'kalo banyak uang ya, pengen beli tower telkomsel sama xl ditanem depan rumah. sinyal bapuk banget hhhhhh ', 'vallyels', 'Jakarta', '2018/3/30 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949946989780717000', 'telkomsel', 'SOP seperti itu sudah khatam, Mas Viki. Saya DM aja ya meski saya gak begitu yakin, dulu pernah DM dan kontak CallÃ¢â‚¬Â¦ ', 'zahreevi', 'Jakarta', '2018/1/18 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949948028307226000', 'telkomsel', 'Tes tes ! Masyaallah bgt ini ga sinyal wifi, sinyal telkomsel sama iyaa parahnyaaa !!! Ã°Å¸ËœÂ¤ ', 'zeezeraas', 'Jakarta', '2018/1/11 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949950507891679000', 'telkomsel', '@Telkomsel Kenapa ya no halo saya sinyal lte full bar, tp ga connect sama sekali? ', 'TweetRicardo', 'Jakarta', '2018/4/6 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949951099644989000', 'telkomsel', 'RT @_kiranalara: LUAR BIASA TELKOMSEL LEMOTNYA DARI KEMARIN. ', 'XrezizulfahmiX', 'Jakarta', '2018/2/3 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949956269451784000', 'telkomsel', '@Telkomsel mau redeem point ke merchant baso AFUN* mrk bilang mesin validasinya error gatau sampe kpn. Ini bgmn telkomsel??? ', 'yansen_siregar', 'Jakarta', '2018/1/30 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949958481305485000', 'telkomsel', '@Telkomsel malam admin, saya menukar poin Telkomsel utk voucher @SolariaID tgl 31 Des 2017, dan berlaku 7 hari. ItuÃ¢â‚¬Â¦ ', 'yurisopp', 'Jakarta', '2018/1/21 21:05:42', 'Adrian', 1, 1, 0, 0, 0),
('949958902950449000', 'telkomsel', '@Telkomsel heeeeii bro sinyalmu busuk hari ini Ã°Å¸ËœÂ´Ã°Å¸ËœÂ´ ', 'wempysinggih', 'Jakarta', '2018/2/14 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949961992684503000', 'telkomsel', '@Telkomsel Waduh sayang sekali ada 4 voucher saya hangus dong. Tadinya mau dipakai hari ini. Terima kasih atas informasinya. ', 'yurisopp', 'Jakarta', '2018/1/20 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949969083100884000', 'telkomsel', '@Telkomsel Bagaimana menjawab pertanyaan kuis di Facebook? A. Menulis Jawaban di Wall Fanpage ', 'WotaXtreme', 'Jakarta', '2018/2/10 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949973262317924000', 'telkomsel', '@Telkomsel @BastianRiz maaf saya sebelumnya punya poin di Telkomsel tapi saya cek tadi kok kosong kenapa ya ? padahÃ¢â‚¬Â¦ ', 'WahyuWeid', 'Jakarta', '2018/3/20 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949973264041848000', 'telkomsel', 'Mau diblokir? Kasih bukti ke dm bisa? Aku bantu blokir dari sistem.pfft.telkomsel pula ', 'w_aimeee', 'Jakarta', '2018/2/9 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949977035702611000', 'telkomsel', '@Telkomsel @kurokicchi 085232707179 SITUBONDO 26 07 1968 MINTA pin 2 nya min ', 'Umank_Arifin', 'Jakarta', '2018/4/2 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949980209280835000', 'telkomsel', '{MU} ada yg tau cara mengubah kuota videomax jd kuota flash telkomsel? Makacii ', 'womanfeeds', 'Jakarta', '2018/2/11 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949981394331090000', 'telkomsel', '@Telkomsel kak saya registrasi ulang prabayar ko ga bisa terus ya? Tidak dapat sms dr 4444 ', 'veraanasa', 'Jakarta', '2018/3/28 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949982453942251000', 'telkomsel', '@Telkomsel Ini sudah yg kedua kalinya kak ', 'veraanasa', 'Jakarta', '2018/3/29 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949984665674203000', 'telkomsel', '@rlcyeold Pake telkomsel bwang ', 'Xolopyeri', 'Jakarta', '2018/2/4 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949987116288585000', 'telkomsel', '@Telkomsel Sudah, cek dm ya ka ', 'veraanasa', 'Jakarta', '2018/3/27 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949990488630685000', 'telkomsel', '@Telkomsel apa bener Telkomsel bundling ponsel Candybar BlaupunktÃ‚Â dengan paket data di GRApari? ', 'vic_hasiholan', 'Jakarta', '2018/3/24 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949991782196027000', 'telkomsel', '@Telkomsel min ada apa dengan signal Telkomsel.? Ga konek samasekali ', 'zatryo_mcc', 'Jakarta', '2018/1/13 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949992303967420000', 'telkomsel', '@Telkomsel Itu aja... tks infonya ', 'vic_hasiholan', 'Jakarta', '2018/3/23 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949997085578772000', 'telkomsel', 'Tolong perbaiki dong sinyalnya kacau banget sinyal telkomsel didaerah otista @Telkomsel ', 'wafiagan', 'Jakarta', '2018/3/21 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949997253669814000', 'telkomsel', 'Rumah berasa di gua, telkomsel aja udah mulai susah sinyal Ã°Å¸ËœÅ¾ ', 'Tya_Muthiara', 'Jakarta', '2018/4/5 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949997545782091000', 'telkomsel', '@Telkomsel bukan nomer yg itu, cek dm min ', 'uzhan_mbelink', 'Jakarta', '2018/4/1 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949997630674780000', 'telkomsel', '@Telkomsel eh bener yang itu sih min...  wkwk ', 'uzhan_mbelink', 'Jakarta', '2018/3/31 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('949998613895168000', 'telkomsel', 'Jaringan tidak bersahabat..#telkomsel ', 'Whisno04', 'Jakarta', '2018/2/13 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('950000382004027000', 'telkomsel', 'Baru kali ini pake @Telkomsel daerah karangrejo surabaya. Lebih mahal daripada @IndosatCare tapi sinyalnya bikin piÃ¢â‚¬Â¦ ', 'Zarha03', 'Jakarta', '2018/1/17 21:05:42', 'Adrian', 1, 0, 0, 0, 0),
('950000741447446000', 'telkomsel', '@Telkomsel ngapain si segala-gala paket videoMax gblk! ', 'ziyaulbarqi', 'Jakarta', '2018/1/10 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950004316227514000', 'telkomsel', '@Telkomsel Udah min, tetep susah konek ', 'zatryo_mcc', 'Jakarta', '2018/1/16 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950005527248949000', 'telkomsel', '@Telkomsel saya selalu menggunakan aplikasi telkomsel untuk beli paket. Kok untuk kupanya selalu 0. Padalah setiapÃ¢â‚¬Â¦ ', '_wiedy_', 'Jakarta', '2018/1/7 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950009502639710000', 'telkomsel', 'saya sudah hubungi lokasi lain, jawabnya semua sama, mesin edc validasi mereka lagi error. Ini saya yg jadi repot gÃ¢â‚¬Â¦ ', 'yansen_siregar', 'Jakarta', '2018/2/1 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950012935362854000', 'telkomsel', '@Telkomsel Maaf min sedikit informasi, untuk gangguan signal Telkomsel hampir seluruh wilayah kab.muba khususnya sekayu ', 'zatryo_mcc', 'Jakarta', '2018/1/12 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950015784012492000', 'telkomsel', '@Telkomsel Tolong di cek min ', 'zatryo_mcc', 'Jakarta', '2018/1/15 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950026735084425000', 'telkomsel', 'Kalo simcard udah terlanjur terdaftar tapi gamau dipake lagi dan mau ganti kartu, ngapus datanya gimana ya min @Telkomsel ', 'yohanadlk', 'Jakarta', '2018/1/24 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950036686179745000', 'telkomsel', '@Telkomsel mlm2 tiba2 ada sms ini mskdnya apa y min? ', 'yogasrana', 'Jakarta', '2018/1/25 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950040340676800000', 'telkomsel', '@Telkomsel nomor asing auto transfer k no. saya, dan itu nominalnya 500.000... hmmm, mencurigakan Ã°Å¸Â¤â€ ', 'yogasrana', 'Jakarta', '2018/1/26 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950041718778355000', 'telkomsel', '@Telkomsel okay... thanks min info nya... tetap semangatt.. ', 'yogasrana', 'Jakarta', '2018/1/27 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950044408157736000', 'telkomsel', 'Saya suka video @YouTube Seting anonytun For polosan TELKOMSEL OPOK ', 'WIDIANT05858', 'Jakarta', '2018/2/12 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950044683379470000', 'telkomsel', '@Telkomsel min, nanya dong kenapa kalo mau nelpon muncul tulisan panggilan keluar dibatasi fdn? ', 'vidalaviva', 'Jakarta', '2018/3/22 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950047981801111000', 'telkomsel', '@Telkomsel Udah lancar min, tapi kenapa tiap tengah malam harus lost conec.? ', 'zatryo_mcc', 'Jakarta', '2018/1/14 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950059583661158000', 'telkomsel', '@Telkomsel Apakah paket smauloop sudah tidak ada? ', 'xfauzyx', 'Jakarta', '2018/2/5 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950062759223291000', 'telkomsel', '@Telkomsel Mana? Tidak ada paket smauloop ini screen shot nya ', 'xfauzyx', 'Jakarta', '2018/2/7 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950064102440775000', 'telkomsel', '@Telkomsel Tidak ada juga, ini screen shot nya. ', 'xfauzyx', 'Jakarta', '2018/2/6 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950142488278286000', 'telkomsel', '@Telkomsel Mau tanya lg min, kalo paketnya perpanjang otomatis sisa paket datanya hangus ya? Saya pake paket TAU, thx ', 'ucy701', 'Jakarta', '2018/4/4 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950143686360252000', 'telkomsel', '@Telkomsel Jadi gmn min supaya sisa kuotanya ga hangus? ', 'ucy701', 'Jakarta', '2018/4/3 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950145330032476000', 'telkomsel', 'Telkomsel punya promo baru gratis bicara kapan aja & dimana aja caranya tekan no tujuan lalu matiin hp, baru bicaralah sesuka anda... ', 'xaler91', 'Jakarta', '2018/2/8 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950153812559372000', 'telkomsel', '@ofcmissingu Telkomsel syg ama u ^0^ ', 'zoenanyaman', 'Jakarta', '2018/1/9 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950171251812659000', 'telkomsel', '@Telkomsel Bagaimana jawaban telkomsel? Saya sdh telp k outlet lain jawabnya sama. Tdk bisa redeem voucher, mesin error!!!! ', 'yansen_siregar', 'Jakarta', '2018/1/31 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950186364976467000', 'telkomsel', '@AXISgsm ahh ane pake flash Telkomsel cm 20K 2GB min ', 'Veroocy', 'Jakarta', '2018/3/25 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950188978224771000', 'telkomsel', '@FerryMaitimu @Telkomsel @kompascom Saya juga kaget pak ', 'yudakuu', 'Jakarta', '2018/1/23 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190444733853000', 'telkomsel', '@Telkomsel Untuk waktu aktivasinya pukul berapa gaisss ? ', 'wanggaichan', 'Jakarta', '2018/3/18 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190473255141000', 'telkomsel', '@Telkomsel Bagaiman cara untuk mendapatkan kuota talk mania jumbo gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/11 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190500027363000', 'telkomsel', '@Telkomsel Kuota menitnya dapet berapa gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/17 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190528372420000', 'telkomsel', '@Telkomsel Kuota talk mania bisa dipakai sampai jam berapa gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/22 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190554851172000', 'telkomsel', '@Telkomsel Waktu aktivasinya jam berapa gaisss untuk TM jumbo? ', 'wanggaichan', 'Jakarta', '2018/3/16 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190598220206000', 'telkomsel', '@Telkomsel paket talk mania khusus daerah Madura ada ga gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/14 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190626221449000', 'telkomsel', '@Telkomsel Kalo Cara aktivasi TM madura gmn gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/15 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950190652377120000', 'telkomsel', '@Telkomsel Tarif talk mania madura berapa gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/13 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191418491850000', 'telkomsel', '@Telkomsel Saya mau tanya bagamana cara daftar talk mania siang gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/5 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191446371348000', 'telkomsel', '@Telkomsel jam pendaftarannya kapan gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/21 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191473349160000', 'telkomsel', '@Telkomsel Gaisss Nanyadong kapan waktu pendaftaran talk mania malam? ', 'wanggaichan', 'Jakarta', '2018/3/7 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191498426855000', 'telkomsel', '@Telkomsel berarti pemakaiannya jam berapa gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/18 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191527602499000', 'telkomsel', '@Telkomsel gaisss, cara untuk mendapatkan kuota talk mania jumbo gmn? ', 'wanggaichan', 'Jakarta', '2018/3/9 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191580228415000', 'telkomsel', '@Telkomsel Kuota menitnyaaa dapet berapa gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/6 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191610951684000', 'telkomsel', '@Telkomsel gaisss untuk waktu Pemakaian talk mania jumbo kapan aja min? ', 'wanggaichan', 'Jakarta', '2018/3/2 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191678161240000', 'telkomsel', '@Telkomsel Waktu aktivasinya jaaam berapa gaisss untuk TM jumbo? ', 'wanggaichan', 'Jakarta', '2018/3/10 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191710885130000', 'telkomsel', '@Telkomsel gaisss untuk talk mania khusus daerah Madura ada? ', 'wanggaichan', 'Jakarta', '2018/2/23 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950191749812568000', 'telkomsel', '@Telkomsel Cara aktivasi TM madura gmn gaissss? ', 'wanggaichan', 'Jakarta', '2018/2/27 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192436378157000', 'telkomsel', '@Telkomsel gaisss Nanyadong Untuk tarif talk mania madura berapa min? ', 'wanggaichan', 'Jakarta', '2018/3/12 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192516292255000', 'telkomsel', '@Telkomsel gaisss Nanyadong gimana cara daftar talk mania siang? ', 'wanggaichan', 'Jakarta', '2018/2/26 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192544779915000', 'telkomsel', '@Telkomsel Mmm, terus waktu pendaftarannya kapan gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/19 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192573687119000', 'telkomsel', '@Telkomsel gaisss Kalo talk mania malam bisa diaktifkan dijam berapa ya? ', 'wanggaichan', 'Jakarta', '2018/3/1 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192601449156000', 'telkomsel', '@Telkomsel terus waktu pemakaiannya kapan gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/4 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192628150054000', 'telkomsel', '@Telkomsel gaisss, Kalo Talk mania Jumbo siang ke semua operator daerah bandung berapa ya? ', 'wanggaichan', 'Jakarta', '2018/3/8 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192653999603000', 'telkomsel', '@Telkomsel masa aktifnya berapa hari gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/16 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192681174499000', 'telkomsel', '@Telkomsel gaisss kalo talk mania itu bisa di gunain jam berapa? ', 'wanggaichan', 'Jakarta', '2018/2/15 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192707372072000', 'telkomsel', '@Telkomsel Talk mania siang gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/24 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950192970073976000', 'telkomsel', 'Main telkomsel Roli dikira main judi. (Ibuk) ', 'yulsivanissa', 'Jakarta', '2018/1/22 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950193343530610000', 'telkomsel', '@Telkomsel gaisss, kalo Talk mania super cara aktivasinya gimana? ', 'wanggaichan', 'Jakarta', '2018/2/17 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950193369992511000', 'telkomsel', '@Telkomsel Harganya berapa yah kalo daerah bali gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/28 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950193395829321000', 'telkomsel', '@Telkomsel gaisss, cara daftar talk mania big gimana yah? ', 'wanggaichan', 'Jakarta', '2018/2/19 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950193419413987000', 'telkomsel', '@Telkomsel Harganya berapa yah kalo daerah bandung gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/25 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950193469284167000', 'telkomsel', '@Telkomsel Berarti untuk kartu As berarti gk bisa TM dong gaisss? ', 'wanggaichan', 'Jakarta', '2018/2/20 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950193584510128000', 'telkomsel', '@Telkomsel wah mau dong, cara aktivasinya gimana yah gaisss? ', 'wanggaichan', 'Jakarta', '2018/3/3 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950194754620293000', 'telkomsel', '@FerryMaitimu @Telkomsel @kompascom Mudah2 editor nya @kompascom ngantuk Ã°Å¸Ëœâ€¦ peace Ã¢Å“Å’ ', 'YentoKoe', 'Jakarta', '2018/1/28 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950195280204374000', 'telkomsel', '@Telkomsel thanks min udh bikin harga kuota data 2GB, cm 20K, jgn dinaikin jd 22K lg yaa ', 'Veroocy', 'Jakarta', '2018/3/26 21:05:42', 'Adrian', 0, 0, 0, 0, 0),
('950195708274950000', 'telkomsel', '@Telkomsel @FerryMaitimu O iya ga apa2 santai aja udah biasa Ã°Å¸â„¢â€žÃ¢Å“Å’ ', 'YentoKoe', 'Jakarta', '2018/1/29 21:05:42', 'Adrian', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(1, 'user1', 'user1@gmail.com', 'de7c54d99428fb909bef013577070f0d', 0),
(2, 'user2', 'user2@gmail.com', 'de7c54d99428fb909bef013577070f0d', 0),
(3, 'user3', 'user3@gmail.com', 'de7c54d99428fb909bef013577070f0d', 0),
(4, 'user4', 'user4@gmail.com', 'de7c54d99428fb909bef013577070f0d', 0),
(5, 'user5', 'user5@gmail.com', 'de7c54d99428fb909bef013577070f0d', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tagging`
--
ALTER TABLE `tagging`
  ADD PRIMARY KEY (`id_tagging`);

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tagging`
--
ALTER TABLE `tagging`
  MODIFY `id_tagging` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
