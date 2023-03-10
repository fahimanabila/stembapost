-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `user_details_id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `seq` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `no_ind` int(50) DEFAULT NULL,
  `no_nip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`seq`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO `t_admin` (`user_details_id`, `user`, `seq`, `username`, `password`, `no_ind`, `no_nip`) VALUES
(100,	'admin01',	14,	'admin01',	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL),
(10,	'User01',	15,	'User01',	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL),
(1000,	'superuser01',	16,	'superuser01',	'09d737af6b88a989d232fec57bf52179',	NULL,	NULL),
(1000,	'SuperUser2',	17,	'SuperUser2',	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL),
(1000,	'username7',	18,	'superuser7',	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL);

DROP TABLE IF EXISTS `t_class`;
CREATE TABLE `t_class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

INSERT INTO `t_class` (`class_id`, `class_name`, `department_id`) VALUES
(0,	'-- None --',	0),
(1,	'XIII-TGB 1',	1),
(2,	'XIII-TGB 2',	1),
(3,	'XIII-TKBB 1',	2),
(4,	'XIII-TKBB 2',	2),
(5,	'XIII-TKBB 3',	2),
(6,	'XIII-TKR 1',	3),
(7,	'XIII-TKR 2',	3),
(8,	'XIII-TKR 3',	3),
(9,	'XIII-TP 1',	4),
(10,	'XIII-TP 2',	4),
(11,	'XIII-TIPTL 1',	5),
(12,	'XIII-TIPTL 2',	5),
(13,	'XIII-TEI 1',	6),
(14,	'XIII-TEI 2',	6),
(15,	'XIII-TME',	7),
(16,	'XIII-TAV',	8),
(17,	'XIII-TKJ 1',	9),
(18,	'XIII-TKJ 2',	9),
(19,	'XII-TKGSP 1',	10),
(20,	'XII-TKGSP 2',	10),
(21,	'XII-TKGSP 3',	10),
(22,	'XI-TKGSP 1',	10),
(23,	'XI-TKGSP 2',	10),
(24,	'XI-TKGSP 3',	10),
(25,	'X-TKGSP 1',	10),
(26,	'X-TKGSP 2',	10),
(27,	'X-TKGSP 3',	10),
(28,	'XII-TKJIJ 1',	11),
(29,	'XII-TKJIJ 2',	11),
(30,	'XI-TKJIJ 1',	11),
(31,	'XI-TKJIJ 2',	11),
(32,	'X-TKJIJ 1',	11),
(33,	'X-TKJIJ 2',	11),
(34,	'XII-TMPO 1',	12),
(35,	'XII-TMPO 2',	12),
(36,	'XI-TMPO 1',	12),
(37,	'XI-TMPO 2',	12),
(38,	'X-TMPO 1',	12),
(39,	'X-TMPO 2',	12),
(40,	'XII-TFLM 1',	13),
(41,	'XII-TFLM 2',	13),
(42,	'XI-TFLM 1',	13),
(43,	'XI-TFLM 2',	13),
(44,	'X-TFLM 1',	13),
(45,	'X-TFLM 2',	13),
(46,	'XII-TTL 1',	14),
(47,	'XII-TTL 2',	14),
(48,	'XI-TTL 1',	14),
(49,	'XI-TTL 2',	14),
(50,	'X-TTL 1',	14),
(51,	'X-TTL 2',	14),
(52,	'XII-TEDK 1',	15),
(53,	'XII-TEDK 2',	15),
(54,	'XI-TEDK 1',	15),
(55,	'XI-TEDK 2',	15),
(56,	'X-TEDK 1',	15),
(57,	'X-TEDK 2',	15),
(58,	'XII-SIJA 1',	16),
(59,	'XII-SIJA 2',	16),
(60,	'XI-SIJA 1',	16),
(61,	'XI-SIJA 2',	16),
(62,	'X-SIJA 1',	16),
(63,	'X-SIJA 2',	16),
(64,	'XII-TME 1',	7),
(65,	'XII-TME 2',	7),
(66,	'XII-TME 3',	7),
(67,	'XI-TME 1',	7),
(68,	'XI-TME 2',	7),
(69,	'X-TME 1',	7),
(70,	'X-TME 2',	7),
(71,	'OSIS SMK 7',	0),
(72,	'All N/A Teachers',	0),
(73,	'Ekstrakurikuler SEC',	0),
(76,	'StembaCreativeTeam',	0),
(77,	'Organisasi Rohani Islam Stemba',	0),
(78,	'Organisasi MPK',	0);

DROP TABLE IF EXISTS `t_contacts`;
CREATE TABLE `t_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ind` varchar(50) NOT NULL,
  `no_nip` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `active_flag` varchar(1) NOT NULL DEFAULT 'N',
  `phone_num` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO `t_contacts` (`contact_id`, `no_ind`, `no_nip`, `full_name`, `class_id`, `department_id`, `active_flag`, `phone_num`) VALUES
(1,	'1614892',	NULL,	'Fahima Choirun Nabila',	17,	9,	'Y',	'083102021321'),
(2,	'1614891',	NULL,	'Dionysius Brammetya Yudhistira',	17,	9,	'Y',	'085816330048'),
(3,	'1614890',	NULL,	'Dimas Okva Solichin',	17,	9,	'Y',	'088211234125'),
(4,	'1614889',	NULL,	'Dikka Prasetyo',	17,	9,	'Y',	'08997027553'),
(5,	'1614888',	NULL,	'Devina Rosa Damayanti',	17,	9,	'Y',	'08994521622'),
(6,	'1614887',	NULL,	'Danang Ihza Adri Anandika',	17,	9,	'Y',	'082226040962'),
(7,	'1614886',	NULL,	'Cahyo Ade Prasetyo',	17,	9,	'Y',	'085601560129'),
(8,	'1614885',	NULL,	'Azarya Paska Saputra',	17,	9,	'Y',	'082146064040'),
(9,	'1614884',	NULL,	'Aulia Istiq Fani',	17,	9,	'Y',	'085715932825'),
(10,	'1614883',	NULL,	'Aulia Cahya Sari',	17,	9,	'Y',	'085640840274'),
(11,	'1614882',	NULL,	'Arif Budi Setiawan',	17,	9,	'Y',	'085736504989'),
(12,	'1614881',	NULL,	'Arief Renaldianto',	17,	9,	'Y',	'087735415905'),
(13,	'1614880',	NULL,	'Anggia Dea Saputri',	17,	9,	'Y',	'081392626468'),
(14,	'1614879',	NULL,	'Adib  Nafisudin',	17,	9,	'Y',	'081390954884'),
(15,	'1614893',	NULL,	'Fanny Julia Ananda',	17,	9,	'Y',	'0895414919354'),
(16,	'1614894',	NULL,	'Hanif Nugraha Ramadhan',	17,	9,	'Y',	'081225581579'),
(17,	'1614895',	NULL,	'Hasnaa Auliya Putri Ismail',	17,	9,	'Y',	'08813839914'),
(18,	'1614896',	NULL,	'Iktifar Sukma Nanda',	17,	9,	'Y',	'085526246890'),
(19,	'1614897',	NULL,	'Laurensius Liquori Igridfian',	17,	9,	'Y',	'08992572654'),
(20,	'1614898',	NULL,	'Leon Krisna Hartadi',	17,	9,	'Y',	'083842478078'),
(21,	'1614899',	NULL,	'Muhammad Maulana Hafid',	17,	9,	'Y',	'088221916826'),
(22,	'1614900',	NULL,	'Muhammad Najmuddin Lutfi',	17,	9,	'Y',	'089697790191'),
(23,	'1614901',	NULL,	'Muhammad Rosyid',	17,	9,	'Y',	'085226036616'),
(24,	'1614902',	NULL,	'Muhammad Nafa Khalimi',	17,	9,	'Y',	'081390325577'),
(25,	'1614903',	NULL,	'Nadia Kusuma Dewi',	17,	9,	'Y',	'081575471840'),
(26,	'1614904',	NULL,	'Naufal Qorisyah',	17,	9,	'Y',	'089636817400'),
(27,	'1614905',	NULL,	'Noviantie Putriastuti',	17,	9,	'Y',	'08981613315'),
(28,	'1614906',	NULL,	'R Bagus Ario Arlianda Dwiputra',	17,	9,	'Y',	'0895379127033'),
(29,	'1614907',	NULL,	'Rahans Elang Jayatama',	17,	9,	'Y',	'081211517593'),
(30,	'1614908',	NULL,	'Ricky Sambora',	17,	9,	'Y',	'085200203999'),
(31,	'1614909',	NULL,	'Rindang Ayu Oktaviani',	17,	9,	'Y',	'085777564573'),
(32,	'1614910',	NULL,	'Setya Budi Arif Prabowo',	17,	9,	'Y',	'085817169325'),
(33,	'1614911',	NULL,	'Sherenita Nefertiti',	17,	9,	'Y',	'085702675803'),
(34,	'1614912',	NULL,	'Stefano Dewa Susanto',	17,	9,	'Y',	'082228913907'),
(35,	'1614913',	NULL,	'Steffani Angelia Gietari Putri',	17,	9,	'Y',	'081517401218'),
(36,	'1614914',	NULL,	'Wawan Anggriawan',	17,	9,	'Y',	'088227357698'),
(38,	'',	NULL,	'Students ',	0,	0,	'Y',	'Phone Number'),
(39,	'',	'197010131997021007',	'Joestiharto',	0,	0,	'Y',	'081325729093');

DROP TABLE IF EXISTS `t_department`;
CREATE TABLE `t_department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  `department_code` varchar(10) NOT NULL,
  `active_flag` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `t_department` (`department_id`, `department_name`, `department_code`, `active_flag`) VALUES
(0,	'-- No Department --',	'NONE',	'Y'),
(1,	'Teknik Gambar Bangunan',	'TGB',	'Y'),
(2,	'Teknik Konstruksi Batu Beton',	'TKBB',	'Y'),
(3,	'Teknik Kendaraan Ringan',	'TKR',	'Y'),
(4,	'Teknik Pemesinan',	'TP',	'Y'),
(5,	'Teknik Instalasi dan Pemanfaatan Tenaga Listrik',	'TIPTL',	'Y'),
(6,	'Teknik Elektronika Industri',	'TEI',	'Y'),
(7,	'Teknik Mekatronika',	'TME',	'Y'),
(8,	'Teknik Audio Video',	'TAV',	'Y'),
(9,	'Teknik Komputer dan Jaringan',	'TKJ',	'Y'),
(10,	'Teknik Konstruksi Gedung Sanitasi dan Perawatan',	'TKGSP',	'Y'),
(11,	'Teknik Konstruksi Jalan dan Irigasi Jembatan ',	'TKJIJ',	'Y'),
(12,	'Teknik Mesin dan Perawatan Otomotif',	'TMPO',	'Y'),
(13,	'Teknik Fabrikasi Logam dan Manufakturing',	'TFLM',	'Y'),
(14,	'Teknik Tenaga Listrik',	'TTL',	'Y'),
(15,	'Teknik Elektronika Daya dan Komunikasi',	'TEDK',	'Y'),
(16,	'Sistem Informasi Jaringan dan Komunikasi',	'SIJA',	'Y');

DROP TABLE IF EXISTS `t_group_line`;
CREATE TABLE `t_group_line` (
  `line_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL COMMENT '= class_id',
  `contact_id` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `seq` int(11) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `active_flag` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`line_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `t_group_line` (`line_id`, `class_id`, `contact_id`, `created_by`, `seq`, `creation_date`, `active_flag`) VALUES
(10,	76,	5,	'superuser01',	16,	'2020-04-02',	'Y'),
(11,	76,	1,	'superuser01',	16,	'2020-04-02',	'Y'),
(12,	77,	24,	'superuser01',	16,	'2020-04-23',	'Y'),
(13,	77,	13,	'superuser01',	16,	'2020-04-23',	'Y'),
(15,	78,	1,	'superuser21',	19,	'2020-04-24',	'Y');

DROP TABLE IF EXISTS `t_log`;
CREATE TABLE `t_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_details_id` int(11) NOT NULL,
  `seq_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_login` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `active` varchar(2) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_main`;
CREATE TABLE `t_main` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `attachment` varchar(1000) NOT NULL,
  `from_sender` varchar(100) NOT NULL,
  `sender_number` varchar(15) DEFAULT NULL,
  `receiver_number` varchar(10000) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `messages` varchar(10000) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seq_admin` int(11) NOT NULL,
  `active_flag` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `t_main` (`message_id`, `attachment`, `from_sender`, `sender_number`, `receiver_number`, `subject`, `messages`, `creation_date`, `seq_admin`, `active_flag`) VALUES
(3,	'Uji_coba_lampiran_STEMBAPOST.pdf',	'Tim Developer StembaPost',	NULL,	'083102021321',	'Broadcasting Perdana Live dari Aplikasi StembaPost, Simak Kelanjutannya!',	'Percobaan Attachment Aplikasi Stembapost',	'2020-04-24 07:41:17',	19,	'Y');

DROP TABLE IF EXISTS `t_previleges`;
CREATE TABLE `t_previleges` (
  `prev_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_details_id` int(11) NOT NULL,
  `prev_name` varchar(100) NOT NULL,
  PRIMARY KEY (`prev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `t_previleges` (`prev_id`, `user_details_id`, `prev_name`) VALUES
(1,	10,	'User'),
(2,	100,	'Admin'),
(3,	1000,	'Super User');

DROP TABLE IF EXISTS `t_search`;
CREATE TABLE `t_search` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) NOT NULL,
  `pages` varchar(100) NOT NULL,
  `routes` varchar(100) NOT NULL,
  `active_flag` varchar(1) NOT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `t_search` (`que_id`, `keyword`, `pages`, `routes`, `active_flag`) VALUES
(1,	'contact',	'V_contact',	'Contact',	'Y'),
(2,	'cari',	'V_Address',	'Address',	'Y'),
(3,	'pesan',	'V_Compose',	'New',	'Y'),
(4,	'stemba',	'V_Caraousel',	'Home',	'Y'),
(5,	'developer',	'V_about',	'About',	'Y'),
(6,	'hapus',	'V_trash',	'Trash',	'Y'),
(7,	'pengaturan',	'V_setup',	'Setup',	'Y'),
(8,	'lampiran',	'V_Attachment',	'Attachment',	'Y'),
(9,	'pengertian',	'V_about',	'About',	'Y'),
(10,	'stembapost',	'V_about',	'About',	'Y'),
(11,	'tambah',	'V_Compose',	'New',	'Y'),
(12,	'error',	'V_about',	'About',	'Y'),
(13,	'start',	'V_Caraousel',	'Home',	'Y'),
(14,	'baru',	'V_Compose',	'New',	'Y'),
(15,	'whatsapp',	'V_Caraousel',	'Home',	'Y');

-- 2020-04-25 08:25:03
