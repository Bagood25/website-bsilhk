-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2025 at 07:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `judul`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `lokasi`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'Hari ini', 'Hari ini', '2025-09-07', '2025-09-17', 'Bogor', NULL, '2025-09-07 04:12:18', '2025-09-07 04:12:18'),
(6, 'Agenda Baru', 'agenda', '2025-09-09', '2025-09-16', 'Bogor', NULL, '2025-09-07 04:59:16', '2025-09-07 04:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kutipan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `user_id`, `judul`, `slug`, `kategori`, `gambar`, `kutipan`, `isi`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Lebih Dari 350 Anak Sekolah Dasar Bicara Tentang Industri Susu, Lingkungan, dan Konservasi Air', 'lebih-dari-350-anak-sekolah-dasar-bicara-tentang-industri-susu-lingkungan-dan-konservasi-air', 'berita_utama', 'post-images/Cm43PSeXoU9tSO03Pv1QLN9PLOnH86tSYv66syxZ.png', 'ini adaldh percobaan\r\nabcd\r\nefgh\r\nijkl', 'ini adaldh percobaan\r\nabcd\r\nefgh\r\nijkl', NULL, '2025-08-12 00:15:36', '2025-08-25 21:10:25', '2025-08-25 21:10:25'),
(2, 1, 'berita baru', 'berita-baru', 'kabar_bsi', 'post-images/PMKMEOT1vEWRk1h3ItpIMy22cIxv48xjqeklm8uv.png', 'contoh', 'contoh', NULL, '2025-08-12 01:24:21', '2025-08-25 21:10:21', '2025-08-25 21:10:21'),
(3, 1, 'berita baru 1', 'berita-baru-1', 'berita_utama', 'post-images/F2U3pXwWBgTDk5X5VNkC2d9CiJnyMBvlpGhjOwck.png', 'coba', 'coba', NULL, '2025-08-26 00:08:56', '2025-09-02 19:01:27', '2025-09-02 19:01:27'),
(4, 1, 'Kemenhut Gelar Kick-Off Mangrofest 2025: \"Rayakan Mangrove, Rangkai Harapan\"', 'kemenhut-gelar-kick-off-mangrofest-2025-rayakan-mangrove-rangkai-harapan', 'berita-kehutanan', 'post-images/1iIhwGFZOZSvVl4VDpm23lMOkNm0LSp3jw6qwPQo.webp', 'Kementerian Kehutanan (Kemenhut) menyelenggarakan Kick-Off Mangrove Festival 2025 (Mangrofest 2025) di Taman Nasional Alas Purwo, Banyuwangi, Jawa Tim...', 'Kementerian Kehutanan (Kemenhut) menyelenggarakan Kick-Off Mangrove Festival 2025 (Mangrofest 2025) di Taman Nasional Alas Purwo, Banyuwangi, Jawa Timur (29/07/2025), sebagai bagian dari konsolidasi nasional rehabilitasi mangrove dan peringatan Hari Mangrove Sedunia 2025. Mangrofest 2025 ini mengangkat tema “Rayakan Mangrove, Rangkai Harapan” sebagai wujud perayaan, refleksi, dan penguatan kolaborasi lintas sektor dalam menjaga dan memulihkan ekosistem pesisir Indonesia.\r\n\r\nPenyelenggaraan Kick-Off Mangrofest 2025 di Taman Nasional Alas Purwo sebagai simbol awal gerakan pemulihan pesisir secara nasional. Lokasi ini dipilih karena memiliki ekosistem mangrove yang penting, serta menjadi representasi lanskap pesisir yang perlu dijaga.\r\n\r\nAcara dibuka oleh Wakil Menteri Kehutanan (Wamenhut), Sulaiman Umar Siddiq, di Pantai Triangulasi, TN Alas Purwo (30/7/2025). Wamenhut dalam sambutannya menyampaikan bahwa Indonesia adalah negara dengan ekosistem mangrove terbesar di dunia, lebih dari 3,4 juta hektar mangrove terbentang dari Aceh hingga Papua, atau sekitar 23% dari total luasan mangrove dunia.\r\n\r\nBaca selengkapnya:\r\nhttps://kehutanan.go.id/news/mangrove-festival-2025-indonesia-perkuat-konsolidasi-nasional-rehabilitasi-ekosistem-mangrove', NULL, '2025-09-02 18:59:42', '2025-09-03 18:57:47', '2025-09-03 18:57:47'),
(5, 1, 'P2SEMH Gali Potensi Sosial Ekonomi Masyarakat di Kawasan Hutan Adat Banten', 'p2semh-gali-potensi-sosial-ekonomi-masyarakat-di-kawasan-hutan-adat-banten', 'berita-p2semh', 'berita/1756873646_Halo Sobat Hijau!Tim P2SEMH bersama Balai PS Bogor dan Penyuluh Kehutanan CDK Banten Wilayah Ta.jpg', 'Tim P2SEMH bersama Balai PS Bogor dan Penyuluh Kehutanan CDK Banten Wilayah Tangerang dan Lebak pada 21–22 Agustus 2025 lalu blusukan ke _Leuweung Ada...', 'Tim P2SEMH bersama Balai PS Bogor dan Penyuluh Kehutanan CDK Banten Wilayah Tangerang dan Lebak pada 21–22 Agustus 2025 lalu blusukan ke _Leuweung Adat_, hutan adat di Kabupaten Lebak, Banten. Tim datang untuk menggali potensi pengembangan sosial-ekonomi masyarakat di sana dengan melihat langsung bagaimana kearifan masyarakat adat mampu menjaga hutan tetap lestari.\r\n\r\nDi Kasepuhan Karang, tim disambut hangat oleh Kepala Desa Jagaraksa yang akrab dipanggil “Jaro”. Ditetapkan sejak 2016, hutan adat Kasepuhan Karang seluas 462 hektar ini menjadi benteng alam di kaki Gunung Halimun. Di sana, warga mengelola KUPS dengan produk unggulan kopi “Kobaki” yang terkenal di wilayah Lebak. Tak hanya kopi, hasil bumi seperti padi, durian, duku, hingga alpukat turut menopang ekonomi warga.\r\n\r\nBlusukan berlanjut ke Kasepuhan Pasireurih dan Kasepuhan Cirompang, dua wilayah hutan adat yang resmi ditetapkan pada 2019. Terletak di kaki Gunung Halimun dan berbatasan langsung dengan Taman Nasional Gunung Halimun-Salak, luasan hutan adat Pasireurih 580,43 hektar dan hutan adat Cirompang 306,53 hektar. Keduanya dikelola oleh masyarakat adat yang menjunjung tinggi semangat regenerasi. Para pemuda setempat ikut aktif melestarikan hutan dan mengembangkan potensi lokal.\r\n\r\nTak berhenti di situ, tim juga menyambangi Kelompok Tani Hutan (KTH) Mitra Mandala yang sejak 1989 konsisten mengembangkan usaha pengolahan aren. Hebatnya, produk gula aren mereka telah menembus pasar internasional yaitu Eropa, Korea Selatan, hingga Jepang.\r\n\r\nDari rangkaian kunjungan ini terlihat jelas bahwa kearifan lokal adalah kunci kelestarian hutan. Semangat gotong royong dan kemandirian ekonomi yang ditunjukkan masyarakat adat Banten adalah contoh nyata pengelolaan hutan berkelanjutan. Pengalaman ini tentunya menjadi masukan berharga bagi P2SEMH dalam pengembangan desa sekitar hutan sekaligus mendukung pengelolaan hutan adat.', NULL, '2025-09-02 19:23:24', '2025-09-03 18:57:44', '2025-09-03 18:57:44'),
(6, 5, 'Pemerintah Mulai Operasi Merah Putih: Translokasi Badak Jawa', 'pemerintah-mulai-operasi-merah-putih-translokasi-badak-jawa', 'berita-kehutanan', 'berita/1756951545_medium_017_A7741_9d263ef911.jpg', 'SIARAN PERS\r\nNomor: SP. 184/HUMAS/PP/HMS.3/8/2025\r\n\r\nPemerintah Indonesia melalui Kementerian Kehutanan resmi memulai Operasi Merah Putih – Translokas...', 'SIARAN PERS\r\nNomor: SP. 184/HUMAS/PP/HMS.3/8/2025\r\n\r\nPemerintah Indonesia melalui Kementerian Kehutanan resmi memulai Operasi Merah Putih – Translokasi Badak Jawa, sebuah langkah besar untuk menyelamatkan satwa endemik Indonesia yang kian terancam punah.\r\n\r\nKick Off Meeting yang dipimpin Menteri Kehutanan Raja Juli Antoni ini dihadiri jajaran Direktorat Jenderal KSDAE, Tentara Nasional Indonesia (TNI), Yayasan Badak Indonesia (YABI), serta mitra konservasi nasional dan internasional.\r\n\r\nBadak Jawa (Rhinoceros sondaicus) saat ini hanya tersisa di Taman Nasional Ujung Kulon dengan populasi sangat terbatas. Kajian ilmiah memperingatkan, tanpa intervensi serius, spesies ini bisa punah dalam waktu kurang dari 50 tahun akibat rendahnya keragaman genetik, perkawinan sedarah, dan keterbatasan habitat.\r\n\r\n“Saya kira ini adalah tanggung jawab moral, sosial, dan politik kita bersama untuk memastikan anak cucu kita masih memiliki Badak Jawa 50, 100, 200 tahun, bahkan selamanya,” ujar Raja Antoni.\r\n\r\nLebih lanjut, Menhut menyampaikan bahwa dalam prosesnya, mulai dari rencananya berjalan dengan baik, termasuk melibatkan semua stakeholder. Menhut menilai ini satu hal yang sangat baik sekali.\r\n\r\n\"Semangat Pak Presiden Prabowo selalu mengatakan kita harus berkolaborasi, bekerja sendiri hampir mustahil bisa menghasilkan sesuatu hal yang monumental, sesuatu hal yang besar,\" ungkapnya.\r\n\r\nMenhut juga menegaskan penamaan Operasi Merah Putih tidak hanya sebagai slogan atau kata merdeka, tidak hanya semacam slogan yang disampaikan di penghujung pidato, tetapi ini adalah operasionalisasi dari spirit kemerdekaan itu sendiri. Dalam hal ini, merdeka itu adalah ketika satwa seperti badak tidak mengalami kepunahan, tidak mengalami gangguan dan mereka merdeka di alam, di rimba sana.\r\n\r\n\"Saya merasa terhormat, saya merasa bangga dan memberikan dukungan yang penuh atas nama Kementerian terhadap program ini dan program serupa, inisiatif apapun,\" katanya.\r\n\r\nWakil Asisten Operasi Panglima TNI, Marsekal Pertama TNI Muhammad Taufiq Arasj mengatakan TNI ikut mendukung penuh operasi ini melalui pengamanan, logistik, hingga transportasi laut, khususnya yang berasal dari alutsista Korps Marinir. Ia juga menyatakan TNI bangga bisa terlibat dalam upaya penyelamatan satwa langka ini.\r\n\r\n\"Pesan Bapak Panglima TNI, siap mendukung upaya-upaya pelestarian Badak Jawa ini,” ungkapnya.\r\n\r\nSementara itu, Ketua Pengurus dan Direktur Eksekutif Yayasan Badak Indonesia (YABI), Jansen Manansang mengatakan langkah ini membuka harapan baru di masa depan untuk spesies ini. YABI berkomitmen untuk terus mendukung upaya pemerintah dalam konservasi badak Jawa melalui kerjasama lintas sektor, pendekatan ilmiah dan juga dengan menggunakan spesialisasi dokter-dokter, ahli medis yang berkualitas.\r\n\r\n\"Mari kita jadikan operasi Merah Putih ini sebagai momentum bersama untuk memperkuat kolaborasi dan menegakkan komitmen kita dalam menjaga Badak Jawa yang merupakan aset bangsa yang sangat penting juga mahal, hanya ada di Indonesia,\" ungkapnya.\r\n\r\nDalam laporannya, Dirjen KSDAE Satyawan Pudyatmoko menyampaikan bahwa berbagai persiapan penting sudah dilakukan, antara lain:\r\n\r\n1. Pembangunan fasilitas Javan Rhino Study and Conservation Area (JRSCA) sebagai lokasi translokasi.\r\n2. Pemilihan individu badak dengan mempertimbangkan haplotipe genetik berbeda untuk menghindari inbreeding.\r\n3. Survei jalur pergerakan badak dan lokasi pit-trap untuk penangkapan aman.\r\n4. Survei jalur transportasi dari lokasi tangkapan ke JRSCA, termasuk habituasi badak yang akan ditranslokasi.\r\n5. Simulasi lapangan dan finalisasi SOP untuk memastikan seluruh prosedur berjalan lancar.\r\n6. Penyusunan pedoman ethical assessment bersama para pakar nasional maupun internasional.\r\n\r\nDengan dimulainya operasi ini, pemerintah berharap populasi badak jawa dapat lebih aman, sehat, dan berkelanjutan.\r\n\r\nJakarta, Kemenhut, 29 Agustus 2025\r\n\r\nUntuk Informasi Lebih Lanjut:\r\nKepala Balai Taman Nasional Ujung Kulon\r\nArdi Andono - 0812-2302-554\r\n\r\nPenanggung jawab berita:\r\nKepala Biro Hubungan Masyarakat dan Kerjasama Luar Negeri, Kementerian Kehutanan,\r\nKrisdianto\r\n\r\nWebsite:\r\nwww.kehutanan.go.id\r\n\r\nYoutube:\r\nKementerian Kehutanan\r\n\r\nFacebook:\r\nKementerian Kehutanan\r\n\r\nInstagram:\r\nKemenhut\r\n\r\nTwitter:\r\n@kemenhut_ri', NULL, '2025-09-03 19:05:46', '2025-09-03 19:05:46', NULL),
(7, 5, 'OJK dan Kemenhut Perkuat Sinergi Sektor Jasa Keuangan dan Kehutanan', 'ojk-dan-kemenhut-perkuat-sinergi-sektor-jasa-keuangan-dan-kehutanan', 'berita-kehutanan', 'berita/1756951683_medium_HMS_8263_1_5dda8da5b2.jpg', 'SIARAN PERS BERSAMA\r\n\r\nNomor:\r\nSP-133/GKPB/OJK/VIII/2025\r\nSP.185/HUMAS/PP/HMS.3/8/2025\r\n\r\nBandar Lampung, 30 Agustus 2025. Otoritas Jasa Keuangan (OJK...', 'SIARAN PERS BERSAMA\r\n\r\nNomor:\r\nSP-133/GKPB/OJK/VIII/2025\r\nSP.185/HUMAS/PP/HMS.3/8/2025\r\n\r\nBandar Lampung, 30 Agustus 2025. Otoritas Jasa Keuangan (OJK) dan Kementerian Kehutanan (Kemenhut) menyepakati peningkatan kerja sama strategis dalam pengembangan kebijakan, produk, pertukaran data, penyediaan tenaga ahli, dan peningkatan kapasitas sumber daya manusia di sektor jasa keuangan dan sektor kehutanan seperti pengenalan pengembangan potensi Nilai Ekonomi Karbon pada kawasan Perhutanan Sosial di Indonesia.\r\n\r\nPenandatanganan Nota Kesepahaman dilakukan oleh Ketua Dewan Komisioner OJK Mahendra Siregar dan Menteri Kehutanan Raja Juli Antoni, di Bandar Lampung, Jumat (29/08). Penandatanganan Nota Kesepahaman ini merupakan bagian dari rangkaian Kick-off Pengenalan Pengembangan Potensi Nilai Ekonomi Karbon Perhutanan Sosial di Indonesia.\r\n\r\nMahendra dalam sambutannya mengatakan pentingnya mengoptimalkan potensi nilai ekonomi karbon dari sisi perhutanan, khususnya dalam menjaga keberlanjutan dan kelestariannya perhutanan sosial.\r\n\r\n“Isi elemen MoU yang dilakukan hari ini, khususnya butir 6, peningkatan literasi dan edukasi keuangan, itu maknanya adalah dalam konteks meningkatkan akses keuangan atau pembiayaan dari perhutanan keberlanjutan di kita. Dan utamanya lagi, dalam konteks Lampung saat ini adalah untuk perhutanan sosial,” jelas Mahendra.\r\n\r\nSementara itu, Raja Antoni mengatakan dengan Nota Kesepahaman ini diharapkan para petani hutan yang mengelola Perhutanan Sosial dapat memiliki akses yang lebih mudah terhadap permodalan, sehingga nantinya perekonomian para petani hutan dapat terus berkembang.\r\n\r\n“Kesepahaman antara Kementerian Kehutanan dan OJK, ada 8 area kerja sama namun yang paling esensial yang diharapkan dari Kementerian Kehutanan kepada pihak OJK adalah bagaimana kemudian Perhutanan Sosial, para petani hutan yang sudah diberikan akses terhadap kawasan hutan melalui skema perhutanan sosial itu dapat atau memiliki akses terhadap permodalan terutama di sektor perbankan. Tentu dengan kehadiran OJK dengan MoU ini kita harap pihak perbankan atau pihak swasta lain yang terkait dengan perbankan akan memberikan perhatian lebih khusus pada para petani hutan yang sudah memberikan akses pengelokaan perhutanan sosial,” ujar Menteri Kehutanan Raja Antoni usai melakukan penandatanganan nota kesepahaman.\r\n\r\nHadir juga dalam kegiatan penandatanganan NK tersebut Wakil Gubernur Lampung Jihan Nurlela. Nota Kesepahaman (NK) ini merupakan pembaruan dari kerja sama sebelumnya antara OJK dan Kementerian Lingkungan Hidup dan Kehutanan (KLHK) tentang Peningkatan Koordinasi Pelaksanaan Tugas dan Fungsi Kementerian Lingkungan Hidup dan Kehutanan Republik Indonesia dan Otoritas Jasa Keuangan.\r\n\r\nPembaruan ini menyesuaikan dengan Peraturan Presiden Nomor 139 Tahun 2024 tentang Penataan Tugas dan Fungsi Kementerian Negara Kabinet Merah Putih 2024–2029, yang memisahkan fungsi Kementerian Lingkungan Hidup dan Kementerian Kehutanan.\r\n\r\nRuang lingkup NK mencakup delapan bidang kerja sama, antara lain:\r\nPengembangan bauran kebijakan sektor jasa keuangan dan sektor kehutanan;\r\nPengembangan produk, jasa dan infrastruktur keuangan berkelanjutan;\r\nPenyediaan tenaga ahli/narasumber di bidang kehutanan serta sektor jasa keuangan;\r\nPenyusunan kajian dan/atau penelitian;\r\nPenyediaan, pertukaran, dan/atau pemanfaatan data dan/atau informasi;\r\nPeningkatan literasi dan inklusi keuangan di wilayah kehutanan;\r\nPeningkatan kapasitas dan kompetensi sumber daya manusia;\r\nBidang kerja sama lain yang disepakati PARA PIHAK.\r\nSelain penandatanganan NK, rangkaian kegiatan juga meliputi site visit ke Perhutanan Sosial di Taman Hutan Rakyat (Tahura) Wan Abdul Rachman, Kabupaten Pesawaran. Pada kunjungan tersebut, Ketua Dewan Komisioner OJK Mahendra Siregar, Sekretaris Jenderal Kementerian Kehutanan Mahfudz, Deputi Komisioner Stabilitas Sistem Keuangan OJK Agus Edy Siregar, Direktur Pengembangan Usaha Perhutanan Sosial Kementerian Perhutanan Catur Endah Prasetiani, Kepala OJK Provinsi Sumatera Selatan Arifin Susanto, Kepala OJK Provinsi Lampung Otto Fitriandy, dan Kepala Bapenda Lampung Slamet Riyadi, berdialog langsung dengan masyarakat yang tergabung dalam Kelompok Usaha Perhutanan Sosial (KUPS) dan meninjau komoditas unggulan yang dihasilkan.\r\n\r\nKegiatan lain yang dilakukan adalah Seminar Nasional yang menghadirkan narasumber dari OJK, Kemenhut, Pemerintah Provinsi Lampung, dan perwakilan KUPS. Seminar ini bertujuan memperkenalkan potensi pengembangan Nilai Ekonomi Karbon Perhutanan Sosial sekaligus memperkuat pemahaman masyarakat bahwa pemanfaatan komoditas karbon dapat berjalan beriringan dengan pengelolaan komoditas unggulan yang sudah ada.\r\n\r\nDengan ditandatanganinya NK ini, OJK dan Kemenhut menegaskan komitmen untuk mendorong pembangunan sektor kehutanan yang berkelanjutan dengan dukungan sektor jasa keuangan. Pengenalan potensi Nilai Ekonomi Karbon di kawasan perhutanan sosial diharapkan dapat menjadi tonggak dalam menciptakan ekosistem keuangan yang hijau, inklusif, dan mampu meningkatkan kesejahteraan masyarakat sekaligus menjaga kelestarian lingkungan.\r\n\r\nNarahubung Lembaga:\r\n\r\nM. Ismail Riyadi\r\nKepala Departemen Literasi, Inklusi Keuangan, dan Komunikasi,\r\nOtoritas Jasa Keuangan\r\n\r\nKrisdianto\r\nKepala Biro Hubungan Masyarakat dan Kerjasama Luar Negeri,\r\nKementerian Kehutanan', NULL, '2025-09-03 19:08:03', '2025-09-03 19:08:03', NULL),
(8, 5, 'Tingkatkan Kapasitas SDM Kehutanan, BP2SDM Kemenhut Gelar Uji Kompetensi Jabatan Fungsional di 8 Provinsi Sepanjang Agustus 2025', 'tingkatkan-kapasitas-sdm-kehutanan-bp2sdm-kemenhut-gelar-uji-kompetensi-jabatan-fungsional-di-8-provinsi-sepanjang-agustus-2025', 'berita-kehutanan', 'berita/1756951781_medium_IMG_20250830_WA_0041_2b1a0e4bff.jpg', 'SIARAN PERS\r\nNomor: SP.186/HUMAS/PP/HMS.3/8/2025\r\n\r\nDalam rangka meningkatkan kapasitas, profesionalitas, dan integritas SDM kehutanan, Badan Penyuluh...', 'SIARAN PERS\r\nNomor: SP.186/HUMAS/PP/HMS.3/8/2025\r\n\r\nDalam rangka meningkatkan kapasitas, profesionalitas, dan integritas SDM kehutanan, Badan Penyuluhan dan Pengembangan SDM (BP2SDM) Kementerian Kehutanan (Kemenhut) bekerja sama dengan pemerintah daerah menyelenggarakan uji kompetensi (Ujikom) jabatan fungsional binaan Kementerian Kehutanan.\r\n\r\nBerdasarkan Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PermenPANRB) Nomor 1 Tahun 2003 Tentang Jabatan Fungsional, ditegaskan bahwa bagi pejabat fungsional yang akan naik jenjang jabatan setingkat lebih tinggi, pegawai yang akan beralih menjadi pejabat fungsional melalui perpindahan jabatan, serta pegawai dari jabatan fungsional keterampilan yang akan beralih ke jabatan fungsional keahlian wajib mengikuti dan lulus Uji Kompetensi.\r\n\r\nPelaksanaan uji kompetensi ini bertujuan untuk memastikan bahwa setiap individu layak dan mampu menduduki jabatan sesuai dengan kompetensi yang dimiliki. Kompetensi tersebut mencakup tiga aspek utama, yaitu pengetahuan, keterampilan, dan sikap. Melalui mekanisme uji kompetensi, pemerintah berharap seluruh aparatur negara yang menduduki jabatan fungsional memiliki standar kemampuan yang terukur, profesional, serta mampu menjalankan tugas dan tanggung jawabnya secara optimal.\r\n\r\nFasilitasi layanan Ujikom oleh BP2SDM Kementerian Kehutanan menjadi wujud komitmen untuk memastikan aparatur kehutanan memiliki kompetensi dalam mengelola hutan secara berkelanjutan. Lebih dari itu, uji kompetensi ini merupakan bagian dari transformasi BP2SDM sebagai core system Kementerian Kehutanan dalam penyediaan SDM unggul. Melalui kerangka Forestry Human Excellence, BP2SDM menempatkan pengembangan kompetensi aparatur sebagai pilar utama untuk mewujudkan kehutanan yang adaptif, inovatif, dan berdaya saing di era perubahan global.\r\n\r\nKegiatan Uji Kompetensi (Ujikom) diselenggarakan sepanjang Agustus 2025 di delapan provinsi, dengan rincian sebagai berikut:\r\n\r\n1. Jawa Barat (5–7 Agustus 2025): Sebanyak 42 peserta mengikuti ujikom di Balai P2SDM Wilayah IV Kadipaten.\r\n2. Empat Provinsi serentak (19–21 Agustus 2025): Sebanyak 92 peserta mengikuti Ujikom di Kepulauan Bangka Belitung, Kalimantan Utara, Sulawesi Tengah, dan Daerah Istimewa Yogyakarta.\r\n3. Tiga Provinsi serentak (26–28 Agustus 2025): Sebanyak 122 peserta mengikuti Ujikom di Riau, Kalimantan Timur, dan Nusa Tenggara Barat.\r\nTotal peserta nasional berjumlah 256 orang, yang terdiri dari Pejabat Fungsional Polisi Kehutanan, Pengendali Ekosistem Hutan, dan Penyuluh Kehutanan.\r\nBP2SDM Kementerian Kehutanan, yang dalam hal ini diwakili Kepala Pusat Perencanaan dan Pengembangan Sumber Daya Manusia, Tuti Herawati, menyampaikan bahwa penyelenggaraan uji kompetensi ini bukan sekadar agenda rutin, melainkan bagian penting dari transformasi kelembagaan.\r\n\r\n“BP2SDM kini berperan sebagai core system Kementerian Kehutanan dalam menghadirkan sumber daya manusia unggul. Melalui kerangka Forestry Human Excellence, kami berkomitmen membangun aparatur kehutanan yang tidak hanya profesional secara teknis, tetapi juga visioner, adaptif, dan berintegritas tinggi. Uji kompetensi menjadi instrumen untuk memastikan bahwa setiap pejabat fungsional memiliki standar kemampuan yang diakui dan siap menghadapi tantangan pengelolaan hutan di era global,” ujarnya di Jakarta, Kamis, 28 Agustus 2025.\r\n\r\nUji kompetensi ini merupakan langkah nyata BP2SDM dalam memastikan aparatur kehutanan siap mendukung pencapaian target strategis sektor kehutanan, termasuk FOLU Net Sink 2030, serta menjawab kebutuhan pembangunan berkelanjutan yang berorientasi pada keberlanjutan ekosistem hutan dan kesejahteraan masyarakat.(*)\r\n\r\nJakarta, Kemenhut, 30 Agustus 2025\r\n\r\nSumber berita:\r\nBP2SDM Kemenhut\r\n\r\nPenanggung jawab berita:\r\nKepala Biro Hubungan Masyarakat dan Kerjasama Luar Negeri, Kementerian Kehutanan,\r\nKrisdianto\r\n\r\nWebsite:\r\nwww.kehutanan.go.id\r\n\r\nYoutube:\r\nKementerian Kehutanan\r\n\r\nFacebook:\r\nKementerian Kehutanan\r\n\r\nInstagram:\r\nKemenhut\r\n\r\nTwitter:\r\n@kemenhut_ri', NULL, '2025-09-03 19:09:41', '2025-09-03 19:09:41', NULL),
(9, 5, 'Kementerian Kehutanan dan IPB University Kembangkan Teknologi Reproduksi Berbantu dan Biobank untuk Konservasi Satwa Liar Indonesia', 'kementerian-kehutanan-dan-ipb-university-kembangkan-teknologi-reproduksi-berbantu-dan-biobank-untuk-konservasi-satwa-liar-indonesia', 'berita-kehutanan', 'berita/1756952191_medium_HMS_9273_81b306a707.jpg', 'SIARAN PERS\r\nNomor: SP.187/HUMAS/PP/HMS.3/9/2025\r\n\r\nKementerian Kehutanan RI melalui Direktorat Jenderal Konservasi Sumber Daya Alam dan Ekosistem (KS...', 'SIARAN PERS\r\nNomor: SP.187/HUMAS/PP/HMS.3/9/2025\r\n\r\nKementerian Kehutanan RI melalui Direktorat Jenderal Konservasi Sumber Daya Alam dan Ekosistem (KSDAE) resmi melaksanakan penandatangan kerja sama dengan IPB University tentang Pengembangan dan Aplikasi Teknologi Reproduksi Berbantu (Assisted Reproductive Technology) dan Biobank pada Satwa Liar yang Terancam Punah untuk mencegah kepunahan spesies satwa liar di Indonesia serta Soft Launching Pembangunan Gedung Pusat ART dan Biobank, di Gedung Rektorat IPB, Bogor, Selasa (02/09/2025).\r\n\r\nKegiatan ini dihadiri langsung oleh Menteri Kehutanan, Perwakilan Menteri PPN/Kepala Bappenas, Rektor IPB University beserta Jajaran, perwakilan Duta Besar Amerika Serikat, serta sejumlah mitra konservasi baik nasional maupun internasional.\r\n\r\n\"Alhamdulillah, pada sore hari ini saya dapat menyaksikan penandatanganan MOU antara Kementerian Kehutanan dan IPB University, untuk bekerja sama lebih erat lagi, lebih dekat lagi, karena sebelumnya sudah banyak kerja sama, memastikan bahwa satwa-satwa liar kita tidak akan punah dari negeri Indonesia, sehingga nanti anak cucu kita masih tahu, masih bisa melihat secara langsung keanekaragaman hayati yang kita miliki,\" ujar Menhut.\r\n\r\nMenteri Kehutanan Raja Juli Antoni menegaskan pentingnya penguasaan teknologi modern dalam memperkuat konservasi keanekaragaman hayati nasional.\r\n\r\n\"Kementerian Kehutanan sangat percaya dengan pengetahuan dan oleh karena itu kerjasama yang sangat baik dari Pak Rektor, dari Pak Dekan, dari para peneliti seperti Pak Doktor Badak Muhamad Agil ini sangat penting untuk memastikan kita dapat menjaga hutan kita lebih baik, melestarikan keanekaragaman hayati kita,\" tegas Menhut Raja Antoni.\r\n\r\nMenhut memastikan Indonesia sebagai mega-biodiversity state dan super power tropical forest, ini terus dipertahankan dengan bantuan dari para saintis dari universitas-universitas seperti di IPB University ini.\r\n\r\nMenhut Raja Antoni berharap Biobank center yang akan dibuat di IPB akan betul-betul menjadi pusat penelitian Biobank, sehingga nanti para peneliti asing yang datang ke Indonesia, bukan keanekaragaman hayati kita yang dibawa keluar untuk dipelajari.\r\n\r\nKerja sama Kementerian Kehutanan dan IPB University ini menjadi langkah awal menuju terbangunnya pusat riset dan inovasi terbesar di Indonesia, bahkan di Asia Tenggara, yang akan berstandar internasional dalam bidang konservasi satwa liar.\r\n\r\n\"Jadi sekali lagi, saya berharap IPB akan menjadi pusat penelitian, yang betul-betul menjadi hub para peneliti dunia. InsyaAllah,\" tuturnya.\r\n\r\nSementara Rektor IPB Arif Satrya menyambut baik kerja sama ini, dan menjelaskan jika IPB sudah banyak berkecimpung dengan satwa liar, khususnya Badak Jawa dan Badak Sumatera, yaitu mencoba mengembangkan teknologi untuk konservasinya, berupa teknologi yang disebut dengan ART, Assisted Reproductive Technology, atau teknologi reproduksi berbantu, dan biobank untuk pengambilan dan penyimpanan materi genetik dari satwa liar. Ia berharap dengan kerjasama ini akan menjadikan IPB pusat studi dan rujukan dalam teknologi konservasi satwa liar di Indonesia maupun dunia.\r\n\r\n\"Biobank ini belum banyak di Indonesia. Jadi insyaAllah kita akan menjadi pusat untuk penyimpanan sumber daya genetik untuk beberapa satwa liar,\" ujarnya.\r\n\r\nART meliputi serangkaian teknologi reproduksi seperti inseminasi buatan, fertilisasi in vitro (IVF), transfer embrio, hingga kriopreservasi gamet dan embrio. Sementara itu, biobanking berfungsi sebagai penyimpanan material genetik (sperma, sel telur, embrio, bahkan jaringan) yang dapat digunakan untuk mendukung keberlanjutan program konservasi di masa depan.\r\n\r\nLangkah ini sejalan dengan Indonesian Biodiversity Strategy and Action Plan (IBSAP), yang menekankan pentingnya pengelolaan keanekaragaman hayati secara berkelanjutan melalui penguatan riset, pemanfaatan teknologi, dan pengembangan bank genetik. Dalam kerangka IBSAP, penerapan ART dan biobanking merupakan strategi adaptif yang mendukung pengelolaan satwa liar, khususnya spesies dengan populasi kecil dan terfragmentasi.\r\n\r\nBeberapa manfaat strategis dari ART dan biobanking dalam konservasi satwa liar di Indonesia antara lain memperkuat upaya konservasi ex-situ untuk mendukung konservasi in-situ, mempertahankan keragaman genetik dari populasi satwa liar yang terus menurun, memungkinkan restorasi populasi melalui transfer embrio atau reintroduksi satwa hasil ART dan menyediakan cadangan genetik jangka panjang melalui biobanking untuk kebutuhan konservasi di masa depan.\r\n\r\nSaat ini, melalui Perjanjian Kerja sama antara Kementerian kehutanan dengan IPB University, telah dilaksanakan penerapan ART dan Biobanking pada spesies badak sumatera (Dicerorhinus sumatrensis) melalui fasilitas pusat konservasi semi in-situ di Suaka Rhino Sumatera, Taman Nasional Way Kambas, Lampung, serta di Suaka Badak Kelian, Kalimantan Timur. Upaya ini mencakup pengumpulan dan penyimpanan material genetik, serta pengembangan teknik reproduksi berbasis sains untuk meningkatkan peluang kelahiran. Langkah ini tidak hanya menjadi terobosan dalam penyelamatan salah satu spesies paling terancam di dunia, tetapi juga menegaskan komitmen Indonesia dalam memanfaatkan teknologi mutakhir untuk memastikan keberlangsungan populasi Badak Sumatera di masa depan.\r\n\r\nKementerian Kehutanan menyampaikan rasa terima kasih kepada semua pihak khususnya IPB University, Kedutaan Besar Amerika Serikat, Yayasan KEHATI, TFCA Sumatera, dan TFCA Kalimantan yang telah mendukung konservasi badak serta pengembangan ART dan Biobank melalui program Tropical Forest Conservation Action for Sumatera (TFCA-Sumatera) dan Tropical Forest Conservation Action for Kalimantan (TFCA-Kalimantan). (*)\r\n\r\nJakarta, Kemenhut, 2 September 2025\r\n\r\nSumber berita:\r\nDirektorat KSG Kementerian Kehutanan\r\n\r\nPenanggung jawab berita:\r\nKepala Biro Hubungan Masyarakat dan Kerjasama Luar Negeri, Kementerian Kehutanan,\r\nKrisdianto\r\n\r\nWebsite:\r\nwww.kehutanan.go.id\r\n\r\nYoutube:\r\nKementerian Kehutanan\r\n\r\nFacebook:\r\nKementerian Kehutanan\r\n\r\nInstagram:\r\nKemenhut\r\n\r\nTwitter:\r\n@kemenhut_ri', NULL, '2025-09-03 19:16:31', '2025-09-03 19:16:31', NULL),
(10, 5, 'P2SEMH Kunjungi Pusat Konservasi Elang Kamojang, Jajaki Model Restorasi Berbasis Masyarakat', 'p2semh-kunjungi-pusat-konservasi-elang-kamojang-jajaki-model-restorasi-berbasis-masyarakat', 'berita-p2semh', 'berita/1756952889_Halo Sobat hijau..Dalam rangkaian kegiatan Dialog Kerja “Kolaborasi Lintas Sektor Menuju Kedaul.jpg', 'Halo Sobat hijau..\r\n\r\nDalam rangkaian kegiatan Dialog Kerja “Kolaborasi Lintas Sektor Menuju Kedaulatan Pangan dan Energi”, Pusat Pengembangan Sosial...', 'Halo Sobat hijau..\r\n\r\nDalam rangkaian kegiatan Dialog Kerja “Kolaborasi Lintas Sektor Menuju Kedaulatan Pangan dan Energi”, Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH), pada 24 Juli 2025, telah dilaksanakan kunjungan ke Pusat Konservasi Elang Kamojang (PKEK). Kegiatan ini dihadiri oleh Kepala P2SEMH, Dodi Sumardi beserta pegawai lingkup P2SEMH, Kepala Bidang Wilayah III Balai Besar Konservasi Sumberdaya Alam (BBKSDA) Jawa Barat Bapak Ahmad Arifin beserta Tim dari PKEK.\r\n\r\nPKEK adalah pusat penyelamatan, pelepasliaran, rehabilitasi serta edukasi yang dikhususkan untuk satwa elang. Di pusat kosnervasi ini terdapat 104 individu elang dari 11 spesies, diantaranya adalah spesies/jenis Elang Jawa, Elang Brontok, Elang Tikus, Elang Sikep Madu dan lain-lain.\r\n\r\nKepala P2SEMH dalam kesempatan ini menyampaikan bahwa kegiatan bertujuan memotret bagaimana pengelolaan PKEK dari sisi Konservasi Keanekaragaman Hayati dan sisi Sosial Ekonomi Masyarakat. Masyarakat sekitar berkontribusi sebagai tenaga kerja lokal (keeper satwa), dan penyedia pakan elang (tikus putih, marmut dan ikan). PKEK juga berfungsi sebagai sarana edukasi bagi masyarakat akan kelestarian satwa khususnya elang. Hal ini selaras dengan kegiatan yang akan dilaksanakan oleh P2SEMH yaitu penyusunan Model Pengembangan Pengelolaan Restorasi Hutan Berbasis Masyarakat.\r\n\r\nSelain diskusi, dilakukan pula penanaman pohon endemik oleh Kepala Pusat P2SEMH beserta jajaran Pejabat Struktural, Pejabat Fungsional Ahli Madya, Kepala Bidang I BBKSDA Jawa Barat dan tim Pusat Konservsi Elang Kamojang (PKEK). Penanaman yang dilakukan di area PKEK tersebut menggunakan jenis-jenis tanaman endemik yaitu Puspa (Schima wallichii), Saninten (Castanopsis argentea), dan Jamuju (Dacrycarpus imbricatus). Pada kesempatan tersebut, Kepala P2SEMH menyampaikan bahwa keberadaan tanaman endemik sangat penting untuk menjaga keunikan keanekaragaman hayati. Upaya penanaman kembali tanaman endemik akan menjadi langkah strategis untuk melestarikan keanekaragaman hayati di wilayah tersebut.\r\n\r\nSalam LESTARI!\r\n\r\n#SobatHijau\r\n#Kemenhut #SetjenKemenhut\r\n#P2SEMH\r\n#PKEK\r\n#KonservasiSatwa\r\n#masyarakathutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:28:09', '2025-09-03 19:28:09', NULL),
(11, 5, 'P2SEMH Gelar Dialog Kerja, Hadirkan Kisah Sukses Pelaku Perhutanan Sosial', 'p2semh-gelar-dialog-kerja-hadirkan-kisah-sukses-pelaku-perhutanan-sosial', 'berita-p2semh', 'berita/1756953078_Halo Sobat hijau..Rangkaian kegiatan P2SEMH di Kamojang Garut adalah melaksanakan Dialog Kerja .jpg', 'Halo Sobat hijau..\r\n\r\nRangkaian kegiatan P2SEMH di Kamojang Garut adalah melaksanakan Dialog Kerja dengan tema “Kolaborasi Lintas Sektor Menuju Kedaul...', 'Halo Sobat hijau..\r\n\r\nRangkaian kegiatan P2SEMH di Kamojang Garut adalah melaksanakan Dialog Kerja dengan tema “Kolaborasi Lintas Sektor Menuju Kedaulatan Pangan dan Energi” yang dilaksanakan pada hari Jumat tanggal 25 Juli 2025. Kegiatan ini dihadiri oleh Kepala P2SEMH beserta jajaran, Kepala Cabang Dinas Kehutanan Kab. Garut, Kepala Balai Perhutanan Sosial Bogor, dan Perwakilan BBKSDA Jabar dan Pusat Konservasi Elang Kamojang.\r\n\r\nKegiatan ini menghadirkan narasumber Kang Iwan Somantri, Ketua KUPS Puncak Manis (pemilik brand Kopi Abah Asep), Bpk Asep Rustiana (Kang Asep Aren) KTH Jaya Waringin, Bpk Chairuddin (Ambong), Pendamping Mandiri Perhutanan Sosial/ Ketua Aliansi Masyarakat Sipil untuk Indonesia Hebat (ALMISBAT).\r\n\r\nPara narasumber memaparkan “success story” : bagaimana kang Iwan memulai usaha menanam kopi dengan skema Perhutanan Sosial melalui kegiatan agroforestry hingga mencapai kategori KUPS Platinum dengan branding Kopi Abah Asep bahkan sudah SNI; Kang Asep Aren juga tak ketinggalan menceritakan usaha penanaman Pohon Aren (Arenga pinnata) oleh KTH Jaya Waringin sebagai bentuk konservasi dan upaya peningkatan ekonomi Masyarakat melalui penyadapan nira dan pembuatan gula merah. Dalam kesempatan ini, Pak Chaerudin Ambong sebagai Pendamping Mandiri Perhutanan Sosial, beliau menyampaikan bahwa Kolaborasi dan Sinergi, merupakan kunci keberhasilan dalam pengelolaan usaha perhutanan sosial menuju kesejahteraan dan ketahanan pangan berkelanjutan.\r\n\r\nSebagai informasi tambahan, Kepala CDK Kabupaten Garut menyampaikan 90% hutan di Garut adalah hutan lindung dengan akses transportasi yang sulit, menanam pohon lokal tidak ekonomis karena tidak dapat ditebang sehingga terobosannya adalah menanam MPTS (tanaman buah) dengan skema agroforestri. Sedangkan Kepala Balai Perhutanan Sosial Bogor menyampaikan bahwa masyarakat sudah diberikan akses kelola dengan Perhutanan sosial, terdapat 33 KTH dengan 51 KUPS dan 37 diantaranya berstatus biru, sehingga tugas Balai PS adalah menaikkan levelnya menjadi level Silver (pembuatan RKPS) dan level Gold.\r\n\r\nSalam LESTARI!\r\n\r\n#SobatHijau\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#P2SEMH\r\n#PKEK\r\n#KonservasiSatwa\r\n#masyarakathutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:31:18', '2025-09-03 19:31:18', NULL),
(12, 5, 'P2SEMH Tinjau Potensi Ekonomi Pohon Aren di KTH Jaya Waringin', 'p2semh-tinjau-potensi-ekonomi-pohon-aren-di-kth-jaya-waringin', 'berita-p2semh', 'berita/1756953303_Halo Sobat hijau..Masih dalam rangkaian hari kedua “Dialog Kerja Kolaborasi Lintas Sektor Menuj.jpg', 'Halo Sobat hijau..\r\n\r\nMasih dalam rangkaian hari kedua “Dialog Kerja Kolaborasi Lintas Sektor Menuju Kedaulatan Pangan dan Energi”, dilakukan kunjunga...', 'Halo Sobat hijau..\r\n\r\nMasih dalam rangkaian hari kedua “Dialog Kerja Kolaborasi Lintas Sektor Menuju Kedaulatan Pangan dan Energi”, dilakukan kunjungan ke Kelompok Tani Hutan (KTH) Jaya Waringin, yang dilaksanakan pada hari Jumat, tanggal 25 Jui 2025.\r\n\r\nKunjungan dilakukan oleh Kepala P2SEMH, Dodi Sumardi, S.Hut, M.T, M.PP beserta jajaran, Perwakilan Cabang Dinas Kehutanan Kabupaten Garut dan diterima oleh Ketua KTH Jaya Waringin, Ujang, dan Pendamping KTH, Asep Rustiana.\r\n\r\nKetua KH Jaya Waringin menjelaskan bahwa usaha penanaman pohon aren dilakukan menggunakan sistem blok, dimana sistem blok ini didasarkan pada kepemilikan para anggotanya. Setiap blok (seiktar 3 ha) memiliki jumlah tanaman aren yang bervariasi antara 100 hingga 150 pohon. Sistem penanaman yang digunakan menggunakan jarak tanam 6 x 5 m dengan tinggi tanaman saat ini rata - rata 9 - 12 m dengan umur sekitar 17 tahun. Diharapkan tanaman aren dapat memberikan hasil yang positif bagi perekonomian masarakat.\r\n\r\nBanyak manfaat tanaman aren antara lain Nira Aren untuk pembuatan gula merah, gula semut, minuman tuak (melalui proses fermentasi), buah kolang kaling, bahan sapu ijuk, sapu lidi dan batangnya dapat dijadikan meubelair / partikel board. Nira aren juga memiliki kegunaan sebagai bahan bioethanol dan getah / seratnya dapat digunakan sebagai bahan kosmetik / kesehatan.\r\n\r\nSalam LESTARI!\r\n\r\n#Sobat Hijau\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#P2SEMH\r\n#PKEK\r\n#KonservasiSatwa\r\n#masyarakathutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:35:03', '2025-09-03 19:35:03', NULL),
(13, 5, 'P2SEMH Tunjukkan Dukungan dalam Aksi Pelestarian Mangrove di Mangrofest 2025', 'p2semh-tunjukkan-dukungan-dalam-aksi-pelestarian-mangrove-di-mangrofest-2025', 'berita-p2semh', 'berita/1756953448_P2SEMH Dukung Pelestarian Mangrove di Mangrofest 2025Halo Sobat Hijau, Kepala Pusat Pengembanga.jpg', 'P2SEMH Dukung Pelestarian Mangrove di Mangrofest 2025\r\n\r\nHalo Sobat Hijau,\r\n\r\nKepala Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH), Dodi...', 'P2SEMH Dukung Pelestarian Mangrove di Mangrofest 2025\r\n\r\nHalo Sobat Hijau,\r\n\r\nKepala Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH), Dodi Sumardi hadir dalam Festival Mangrove (Mangrofest) tahun 2025 di Kabupaten Banyuwangi Provinsi Jawa Timur sebagai bentuk dukungan pada pelestarian hutan mangrove di Indonesia. Dukungan diwujudkan melalui aksi penanaman bersama Wakil Menteri Kehutanan Republik Indonesia, Sulaiman Siddiq dan stakeholder lain seperti Kementerian Lingkungan Hidup, Kemenko Bidang Pangan, Badan Pengelola Dana Lingkungan Hidup, World Bank, komunitas motor listrik Elders Elettrico, dan masyarakat.\r\n\r\nMangrofest 2025 merupakan ajang memperkuat aksi kolaborasi nasional untuk merehabilitasi mangrove, menguatkan transisi menuju gaya hidup rendah emisi, menguatkan peran masyarakat pesisir dalam pelestarian mangrove, serta mendorong upaya peningkatan nilai manfaat ekonomi mangrove secara lestari.\r\n\r\nKick Off Mangrofest 2025 di Taman Nasional Alas Purwo dibuka oleh Wakil Menteri Kehutanan, dilanjutkan dengan kegiatan penanaman Mangrove, Mangrrove Harmoni Ride (penggunaan motor listrik sebagai bentuk kampanye pengurangan emisi karbon dan transisi energi ramah lingkungan) serta pelepasliaran tukik ke Pantai. Pada saat ini Kepala P2SEMH juga melepas tukik yag dibei nama Aya dan Uya.\r\n\r\nAcara dilanjutkan dengan Rapat Koordinasi Kelompok Kerja Mangrove Daerah (KKMD) untuk mendiskusikan strategi peningkatan pengetahuan dan upaya penyelerasan pengelolaan mangrove terkait percepatan rehabilitasi mangrove di Indonesia. KKMD diharapkan memperkuat sinergitas, kolaborasi, peran dan fungsi kelompok kerja mangrove daerah.\r\n\r\nMangrofest dan Rakor KKMD terselenggara atas kolaborasi multipihak dalam proyek Mangroves for Coastal Resilience (M4CR), yang mentargetkan rehabilitasi mangrove seluas 41.000 ha di Provinsi Riau, Sumatra Utara, Kalimantan Timur, dan Kalimantan Utara hingga tahun 2027.\r\n\r\nSalam LESTARI!\r\n\r\n#Sobat Hijau\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#P2SEMH\r\n#KonservasiSatwa\r\n#masyarakathutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:37:28', '2025-09-03 19:37:28', NULL),
(14, 5, 'P2SEMH Kunjungi KUPS Unggulan di Garut untuk Identifikasi Kebutuhan Fasilitasi', 'p2semh-kunjungi-kups-unggulan-di-garut-untuk-identifikasi-kebutuhan-fasilitasi', 'berita-p2semh', 'berita/1756953624_Halo Sobat Hijau!Tim P2SEMH didampingi penyuluh kehutanan CDK Wil V Garut baru saja berkunjung .jpg', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH didampingi penyuluh kehutanan CDK Wil V Garut baru saja berkunjung ke KUPS unggulan di Kabupaten Garut, Jawa Barat, te...', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH didampingi penyuluh kehutanan CDK Wil V Garut baru saja berkunjung ke KUPS unggulan di Kabupaten Garut, Jawa Barat, tepatnya pada 29 Juli hingga 1 Agustus 2025 lalu. Kegiatan ini bertujuan untuk mengetahui lebih dalam tentang kelembagaan, usaha, dan pengelolaan kawasan di KUPS yang dijalankan di sana. Ini penting untuk mengetahui kebutuhan fasilitasi yang dapat dilakukan P2SEMH di tingkat tapak.\r\n\r\nKUPS unggulan yang dikunjungi adalah KUPS Puncak Manis dari Desa Dano dan KUPS Kelompok Pecinta Alam Mandalawangi dari Desa Mandalasari. KUPS Puncak Manis sudah memiliki sertifikasi SNI Bina UMK untuk produk kopi mereka dan masuk kategori KUPS Platinum, sedangkan KUPS Kelompok Pecinta Alam Mandalawangi aktif di sektor jasa lingkungan dan masuk kategori KUPS Silver.\r\n\r\nTak hanya sekadar kunjungan, P2SEMH juga membangun kolaborasi dengan Kantor Layanan Teknis (KLT) BSN Bandung untuk mendorong agar lebih banyak lagi produk KUPS yang bisa mendapat sertifikasi SNI Bina UMK. Langkah ini diharapkan bisa memacu semangat KUPS lainnya di wilayah kerja Balai Perhutanan Sosial Bogor dan Cabang Dinas Kehutanan (CDK) Wilayah V Garut tersebut agar bisa naik kelas dan semakin berdaya saing.\r\n\r\nAyo terus semangat, berdaya dari hutan!\r\n\r\nSalam LESTARI!\r\n\r\n@cdk5_dishutjabar\r\n\r\n#Kemenhut\r\n#P2SEMH\r\n#SetjenKemenhut\r\n#PerhutananSosial\r\n#KUPS\r\n#KUPS_PuncakManis\r\n#KUPS_KelompokPecintaAlamMandalawangi\r\n#SNI\r\n#SNIbinaUMK\r\n#KopiGarut\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:40:24', '2025-09-03 19:40:24', NULL),
(15, 5, 'P2SEMH Rancang Model Pengembangan Restorasi Ekosistem Karst', 'p2semh-rancang-model-pengembangan-restorasi-ekosistem-karst', 'berita-p2semh', 'berita/1756954134_P2SEMH MERANCANG MODEL PENGEMBANGAN RESTORASI EKOSISTEM KARSTHalo sobat hijau,Keunikan ekosiste.jpg', 'Halo sobat hijau,\r\n\r\nKeunikan ekosistem karst menjadi perhatian dunia. Selain karena karakteristik karst yang unik, ekositem karst juga menjadi daya t...', 'Halo sobat hijau,\r\n\r\nKeunikan ekosistem karst menjadi perhatian dunia. Selain karena karakteristik karst yang unik, ekositem karst juga menjadi daya tarik wisata karena keindahannya. Dibalik itu semua, ekosistem karst sangat rentan rusak apabila tidak dibarengi dengan pengelolaan yang tepat.\r\n\r\nSuaka Margasatwa (SM) Paliyan di Kabupaten Gunung Kidul, Provinsi Daerah Istimewa Yogyakarta merupakan salah satu kawasan hutan konservasi yang sedang dalam proses restorasi akibat kerusakan masif yang terjadi pada tahun 1995-1998.\r\n\r\nRestorasi yang dilakukan oleh Balai Konservasi Sumber Daya Alam (BKSDA) Yogyakarta sejak tahun 2005 dan dibantu berbagai pihak termasuk PT MSIG Life Insurance Indonesia Tbk (juga dikenal sebagai MSIG Life) hingga sekarang telah banyak membuahkan hasil yang cukup signifikan. Hasil restorasi telah menunjukkan kemajuan dengan terlihat dari jumlah tutupan lahan yang semula gundul dan tandus, saat ini telah mulai lebat dan rimbun dengan jenis tanaman yang variatif.\r\n\r\nMelihat kesuksesan restorasi, Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH) akan merancang “Model Pengembangan Pengelolaan Restorasi Hutan Berbasis Masyarakat pada Ekosistem Karst” dengan tujuan menghasilkan rekomendasi yang dapat dijadikan sebagai bahan pengambilan kebijakan bagi pemerintah sekaligus dapat di replikasikan di tempat lain.\r\n\r\nPada tanggal 4-5 Agutus 2025 telah dilakukan diskusi dan kajian lapangan di SM Paliyan untuk menggali informasi yang lebih dalam berbagai faktor pendukung keberhasilan restorasi ekosistem karst. Hasilnya akan dijadikan bahan formulasi untuk merancang model yang tepat dalam mendorong restorasi karst ditempat lain\r\n\r\nSalam LESTARI!\r\n\r\n#SobatHijau\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#P2SEMH\r\n#RestorasiEkosistem\r\n#masyarakathutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:48:55', '2025-09-03 19:48:55', NULL),
(16, 5, 'P2SEMH Hadiri Forum SM Paliyan untuk Perkuat Model Restorasi Ekosistem Karst', 'p2semh-hadiri-forum-sm-paliyan-untuk-perkuat-model-restorasi-ekosistem-karst', 'berita-p2semh', 'berita/1756954610_FORUM SM PALIYAN- HARAPAN LESTARINYA EKOSISTEM KARST Halo sobat hijau,P2SEMH mendapat kehormata.jpg', 'Halo sobat hijau,\r\n\r\nP2SEMH mendapat kehormatan unttuk mengikuti pertemuan Forum Suaka Marga Satwa Paliyan (Forum SM Paliyan) pada 6 Agustus 2025 di A...', 'Halo sobat hijau,\r\n\r\nP2SEMH mendapat kehormatan unttuk mengikuti pertemuan Forum Suaka Marga Satwa Paliyan (Forum SM Paliyan) pada 6 Agustus 2025 di Aula SM Paliyan. Pertemuan rutin tiga bulanan tersebut bertujuan mendorong peran berbagai pihak seperti tokoh masyarakat sekitar SM Paliyan dalam mendukung pelestarian kawasan konservasi yang saat ini dalam proses restorasi.\r\n\r\nForum tersebut merupakan ajang komunikasi untuk memberikan sumbang saran kepada BKSDA Jogja selaku pengelola SM Paliyan dan mitra restorasi yaitu MSIG Life tentang berbagai kendala dan tantangan yang dihadapi selama proses restorasi. Misalnya bagaimana mengatasi masalah monyet ekor panjang yang masuk ke ladang pertanian.\r\n\r\nPotret sementara yang diperoleh tim P2SEMH, bahwa restorasi ekosistem karst dengan status kawasan konservasi membutuhkan kebijakan pengelolaan yang dilandasi dengan semangat kelola kawasan yang berkelanjutan, peningkatan kualitas hidup dan kesejahteraan masyarakat sekitar, terjaganya dinamika sosial budaya masyarakat sekitar dan kerjasama antar stakeholder.\r\n\r\nModel pengembangan restorasi ekosistem karst yang sedang dirancang oleh P2SEMH menekankan pada peran dan keterlibatan antar pihak terutama masyarakat sekitar hutan sebagai kunci keberhasilan restorasi. Diharapkan model restorasi ekositem karst dapat mendorong pelestarian ekosistem karst ditempat lain, walaupun harus melalui proses panjang, namun kawasan hutan yang terbentuk di daerah karst dapat memberikan manfaatnya yang dapat dirasakan lintas generasi.\r\n\r\nSalam LESTARI!\r\n\r\n#SobatHijau\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#P2SEMH\r\n#RestorasiEkosistem\r\n#masyarakathutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 19:56:50', '2025-09-03 19:56:50', NULL),
(17, 5, 'P2SEMH Lanjutkan Koordinasi Pengelolaan KHDTK ke BPTH III Yogyakarta dan KHDTK Kaliurang', 'p2semh-lanjutkan-koordinasi-pengelolaan-khdtk-ke-bpth-iii-yogyakarta-dan-khdtk-kaliurang', 'berita-p2semh', 'berita/1756955096_Halo Sobat Hijau!P2SEMH terus membangun kolaborasi. Pada 7 hingga 8 Agustus 2025, Kepala P2SEMH.jpg', 'Halo Sobat Hijau!\r\n\r\nP2SEMH terus membangun kolaborasi. Pada 7 hingga 8 Agustus 2025, Kepala P2SEMH beserta tim melakukan kunjungan kerja ke Balai Per...', 'Halo Sobat Hijau!\r\n\r\nP2SEMH terus membangun kolaborasi. Pada 7 hingga 8 Agustus 2025, Kepala P2SEMH beserta tim melakukan kunjungan kerja ke Balai Perbenihan Tanaman Hutan (BPTH) Wilayah III Yogyakarta, menindaklanjuti Keputusan Menteri Kehutanan No. 403 Tahun 2025 tentang penunjukan pengelola sementara Kawasan Hutan Dengan Tujuan Khusus (KHDTK) eks BSILHK.\r\n\r\nAgenda dimulai dengan diskusi bersama jajaran BPTH selaku salah satu pengelola KHDTK sebelumnya. Pengelolaan KHDTK Litbang Kehutanan ke depan, peluang kerja sama, hingga penataan aset negara di dalam kawasan dibahas dalam diskusi. Pada momen ini juga dilakukan penandatanganan revisi Berita Acara Peminjaman Sementara BMN, serta pembahasan rehabilitasi hutan dan lahan di KHDTK Playen bersama BPDAS Serayu Opak Progo.\r\n\r\nKunjungan berlanjut dengan melihat lebih dekat KHDTK Kaliurang, salah satu KHDTK eks BSILHK yang terletak di kaki Gunung Merapi, Desa Hargobinangun, Sleman, Yogyakarta. Terletak di ketinggian 900 mdpl dengan luas 9,49 hektare, kawasan ini strategis sebagai lokasi pengembangan koleksi dan konservasi genetik, pemuliaan tanaman hutan, pelestarian keanekaragaman hayati, hingga pengembangan ekowisata yang dapat memberi manfaat sosial-ekonomi bagi masyarakat sekitar hutan.\r\n\r\nSelain pesona hutannya, KHDTK Kaliurang ternyata menyimpan sejarah panjang yang menarik untuk wisata ilmiah dan pendidikan. Sejak 1958, kawasan ini menjadi rumah bagi berbagai koleksi genetik dan tanaman unggulan kehutanan seperti Maesopsis eminii, Podocarpus koordelsi, Pongamia, bambu, kemenyan, hingga asam londo. Di sini pengunjung juga dapat menikmati spot “Oxygen Park” — lorong oksigen yang menyegarkan tubuh dan pikiran.\r\n\r\nDi tengah sejuknya udara Merapi, kunjungan ini menjadi pengingat bahwa menjaga hutan berarti menjaga kehidupan.\r\n\r\nKHDTK Litbang: Menjaga Hutan, Menginspirasi Ilmu dan Memupuk Harapan\r\n\r\nSalam LESTARI!\r\nJaga hutan, jaga masa depan!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#KHDTK\r\n#khdtk_kaliurang\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:04:56', '2025-09-03 20:04:56', NULL),
(18, 5, 'P2SEMH Tinjau Potensi Agroforestri dan Hasil Hutan Bukan Kayu di KHDTK Playen', 'p2semh-tinjau-potensi-agroforestri-dan-hasil-hutan-bukan-kayu-di-khdtk-playen', 'berita-p2semh', 'berita/1756955218_Halo Sobat Hijau!Masih dalam rangkaian kegiatan pengelolaan KHDTK di Yogyakarta, baru-baru ini .jpg', 'Halo Sobat Hijau!\r\n\r\nMasih dalam rangkaian kegiatan pengelolaan KHDTK di Yogyakarta, baru-baru ini Tim P2SEMH melakukan kunjungan lapangan ke KHDTK Li...', 'Halo Sobat Hijau!\r\n\r\nMasih dalam rangkaian kegiatan pengelolaan KHDTK di Yogyakarta, baru-baru ini Tim P2SEMH melakukan kunjungan lapangan ke KHDTK Litbang Blok Playen di Desa Banyusoco, Gunungkidul. Kunjungan ini dilakukan untuk meninjau potensi kawasan dan mengonsolidasikan pengelolaannya, serta membahas pengembangan komoditas unggulan yang ada di sana, seperti kayu putih, sereh wangi, aren, jati, dan sukun.\r\n\r\nHasil tinjauan, KHDTK Playen tak hanya menjadi pusat kebun benih unggul dan uji keturunan tanaman kehutanan seperti akasia dan kayu putih, tetapi juga sudah memiliki fasilitas penyulingan minyak atsiri berkualitas. Kehadiran fasilitas ini dapat memotong biaya transportasi bahan mentah, memperpendek rantai pasok, dan membuka peluang pendapatan yang lebih besar bagi petani lokal. Temuan ini menunjukkan prospek komersialisasi hasil hutan bukan kayu di kawasan tersebut.\r\n\r\nSelain itu, KHDTK dengan luas 102,5 hektar ini juga menyimpan potensi pangan dari aren dan sukun. Plot konservasi aren seluas 6 hektar telah ditanami 400 pohon pada tahun 2017, sedangkan kebun sukun seluas 6,4 hektar ditanami lebih dari seribu pohon selama periode 2003-2006.\r\n\r\nPada kesempatan ini, Tim P2SEMH yang didampingi oleh Tim BPTH Wilayah III Yogyakarta juga meninjau lokasi Rehabilitasi Hutan dan Lahan seluas 65 hektar di KHDTK Playen. Lokasi tersebut dibangun tahun 2024 oleh BPDAS Serayu Opak Progo bekerjasama dengan Balai Besar Pengujian Standar Instrumen Kehutanan, pengelola KHDTK Playen sebelumnya.\r\n\r\nPengelolaan hulu hingga hilir di KHDTK Playen potensial dijadikan sebagai laboratorium agroforestri yang menggabungkan konservasi dan produktivitas. Di sini diperlukan sinergi antara pengelola, kementerian/lembaga terkait, pemerintah daerah, peneliti, dan komunitas lokal untuk menciptakan model bisnis kehutanan yang adil, berkelanjutan, dan mensejahterakan masyarakat sekitar hutan.\r\n\r\nKHDTK Litbang: Menjaga Hutan, Menginspirasi Ilmu dan Memupuk Harapan\r\n\r\nSalam LESTARI!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#BPTH_Wilayah3\r\n#KHDTK\r\n#KHDTK_BlokPlayen\r\n#LaboratoriumAgroforestri\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:06:58', '2025-09-03 20:06:58', NULL);
INSERT INTO `beritas` (`id`, `user_id`, `judul`, `slug`, `kategori`, `gambar`, `kutipan`, `isi`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 5, 'P2SEMH Inisiasi Pembentukan Laboratorium Sosial Ekonomi Masyarakat Hutan', 'p2semh-inisiasi-pembentukan-laboratorium-sosial-ekonomi-masyarakat-hutan', 'berita-p2semh', 'berita/1756955313_Halo Sobat Hijau!Seperti yang kita tahu, sektor kehutanan tak hanya berbicara tentang pohon dan.jpg', 'Halo Sobat Hijau!\r\n\r\nSeperti yang kita tahu, sektor kehutanan tak hanya berbicara tentang pohon dan ekosistem, tetapi juga tentang masyarakat yang hid...', 'Halo Sobat Hijau!\r\n\r\nSeperti yang kita tahu, sektor kehutanan tak hanya berbicara tentang pohon dan ekosistem, tetapi juga tentang masyarakat yang hidup di sekitarnya. Dengan semangat menjadikan masyarakat sebagai pelaku pembangunan kehutanan, P2SEMH mengadakan kegiatan Identifikasi Potensi dan Arah Pembangunan Laboratorium Sosial Ekonomi Masyarakat Hutan di Depok, Rabu, 13 Agustus 2025.\r\n\r\nKegiatan ini merupakan fase awal dalam menginisiasi dan merancang Laboratorium Sosial Ekonomi Masyarakat Hutan menjadi ruang kolaborasi, inovasi, dan berbagi pengetahuan antar pemangku kepentingan demi mendorong kebijakan kehutanan yang inklusif dan berkelanjutan. Harapannya laboratorium ini nantinya berfungsi sebagai ‘bank pengetahuan’ yang mengumpulkan _best practices_ dari berbagai pihak.\r\n\r\nKepala Pusat Data dan Sistem Informasi Pertanian, Kementerian Pertanian, Intan Rahayu, S.Si, MT sebagai narasumber menyampaikan bahwa Kementerian Pertanian mengelola data pertanian secara masif melalui 10 unit eselon I. Pemanfaatan metadata menjadi kunci dalam mendukung kebijakan dan pengambilan keputusan berbasis data yang akurat dan terpercaya.\r\n\r\nNarasumber lainnya, Kepala Departemen Manajemen Hutan, Fakultas Kehutanan, IPB University, Dr. Soni Trison yakin bahwa dengan visi yang jelas, aksi nyata, kemasan riset yang kreatif dan edukatif, serta jejaring strategis, laboratorium ini dapat mendorong transformasi pembangunan kehutanan yang kolaboratif dan berbasis bukti, serta berorientasi pada kesejahteraan masyarakat sekaligus kelestarian hutan.\r\n\r\nMenyambut baik cerita sukses dan pandangan tersebut, Kepala P2SEMH mengatakan bahwa yang disampaikan narasumber telah selaras dengan rancangan awal laboratorium yang diarahkan untuk mengidentifikasi potensi, mengintegrasikan data, serta mengembangkan model kebijakan dengan jejaring yang kuat dan dukungan media yang efektif. Laboratorium ini akan memanfaatkan modalitas yang telah ada seperti hasil riset dan publikasi dari institusi sebelumnya, NAS sebagai platform data internal, serta database desa yang sedang dibangun.\r\n\r\nSalam LESTARI!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#LaboratoriumSosialEkonomiMasyarakatHutan\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:08:33', '2025-09-03 20:08:33', NULL),
(20, 5, 'Menjelajahi Potensi Riset dan Wisata Alam di KHDTK Watusipat Gunungkidul', 'menjelajahi-potensi-riset-dan-wisata-alam-di-khdtk-watusipat-gunungkidul', 'berita-p2semh', 'berita/1756955420_Halo Sobat Hijau!Menyimpan sejuta pesona alam, Gunungkidul Yogyakarta memiliki daya tarik terse.jpg', 'Halo Sobat Hijau!\r\n\r\nMenyimpan sejuta pesona alam, Gunungkidul Yogyakarta memiliki daya tarik tersendiri untuk dilihat dari dekat. Hal itu yang dilaku...', 'Halo Sobat Hijau!\r\n\r\nMenyimpan sejuta pesona alam, Gunungkidul Yogyakarta memiliki daya tarik tersendiri untuk dilihat dari dekat. Hal itu yang dilakukan Tim P2SEMH saat berkunjung beberapa waktu lalu ke KHDTK Litbang Kehutanan Gunungkidul Blok Watusipat seluas 10,40 hektar di Desa Gading, Kapanewon Playen, yang berada di jantung Taman Hutan Raya (Tahura) Bunder.\r\n\r\nBersama Tim BPTH Wilayah III Yogyakarta dan tenaga lapangan, Tim P2SEMH menjelajahi Tegakan Uji Klon Jati seluas 2,5 hektar sebagai sumber bibit unggul, dan mengamati langsung Tegakan Konservasi eks-situ Cendana dari 14 provenans NTT. Tegakan Nyamplung Tua yang berusia lebih dari 70 tahun dengan rendemen minyak tertinggi di Jawa juga tak lepas dari pengamatan.\r\n\r\nDi sana, tim juga mengeksplorasi kawasan dengan sumber genetik flora khas yang menopang produktivitas hutan monsoon khas Gunungkidul ini. Panorama hutan monsoon dihiasi koleksi flora khas seperti Ki putri, Bungur, Secang, Kayu Putih, Mahoni Afrika Timur, Cemara gunung, Kayu Kuku, Tanjung, hingga Bunga Hujan Mas.\r\n\r\nSelain menjadi laboratorium alam untuk riset dan konservasi genetik, KHDTK Watusipat memiliki potensi besar menjadi destinasi wisata alam/wisata ilmiah, healing forest, hingga lokasi yang eksotis untuk kegiatan prewedding. Kawasan ini juga sangat ideal sebagai wisata edukasi bagi pelajar, mahasiswa, dan masyarakat umum yang ingin mengenal langsung kekayaan hutan monsoon dengan flora khas yang ada di dalamnya.\r\n\r\nDengan kombinasi antara riset, konservasi, dan wisata, KHDTK Watusipat bukan hanya menjaga warisan alam, tetapi juga akan menghadirkan manfaat nyata bagi masyarakat sekitar.\r\n\r\nKHDTK Litbang: dari hutan, untuk kehidupan.\r\n\r\nSalam LESTARI!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#BPTH Wilayah III\r\n#KHDTK\r\n#KHDTK_GunungKidul\r\n#BlokWatusipat\r\n#HutanMonsoon\r\n#WisataEdukasi\r\n#HealingForest\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:10:20', '2025-09-03 20:10:20', NULL),
(21, 5, 'Kolaborasi P2SEMH dalam Monitoring Kebun Benih Semai Malapari di KHDTK Wonogiri', 'kolaborasi-p2semh-dalam-monitoring-kebun-benih-semai-malapari-di-khdtk-wonogiri', 'berita-p2semh', 'berita/1756955588_Halo Sobat Hijau!Kembali lagi dengan kabar dari KHDTK. Kali ini dengan KHDTK Litbang Kehutanan .jpg', 'Halo Sobat Hijau!\r\n\r\nKembali lagi dengan kabar dari KHDTK. Kali ini dengan KHDTK Litbang Kehutanan Wonogiri, salah satu KHDTK yang dikelola oleh P2SEM...', 'Halo Sobat Hijau!\r\n\r\nKembali lagi dengan kabar dari KHDTK. Kali ini dengan KHDTK Litbang Kehutanan Wonogiri, salah satu KHDTK yang dikelola oleh P2SEMH saat ini. Sebagai pengelola, P2SEMH memastikan kawasan ini tetap lestari dan memberi manfaat untuk lingkungan dan masyarakat sekitarnya.\r\n\r\nTerkait itu, pada 6 hingga 9 Agustus 2025 lalu, tim P2SEMH turun ke lapangan KHDTK Wonogiri khususnya ke lokasi Kebun Benih Semai (KBS) Malapari (𝘗𝘰𝘯𝘨𝘢𝘮𝘪𝘢 𝘱𝘪𝘯𝘯𝘢𝘵𝘢). Bersama tim dari Pusat Riset Botani Terapan (PRBT) BRIN, BPTH Wilayah III Yogyakarta, CIFOR-ICRAF, dan masyarakat sekitar kawasan, kegiatan ini dilaksanakan secara kolaboratif.\r\n\r\nDi sana tim melakukan monitoring pertumbuhan malapari, pemeliharaan dan pembersihan dari gulma, serta identifikasi pohon unggul untuk sumber benih masa depan. Tak ketinggalan, pencatatan data lapangan menggunakan aplikasi CBRMS juga dilakukan.\r\n\r\nFakta menariknya, KBS Malapari di KHDTK Wonogiri adalah KBS pertama di Indonesia yang potensial menghasilkan benih malapari unggul secara genetik. Temuan tim di lapangan, 76% pohon pada KBS Malapari yang ditanam sejak tahun 2020 tumbuh dengan baik dan siap digunakan sebagai penopang rehabilitasi hutan dan bioenergi di masa depan.\r\n\r\nKolaborasi yang kuat dan semangat #KerjaBareng di KHDTK Wonogiri menjadi langkah nyata dalam mendukung pengelolaan kawasan yang berkelanjutan dan bermanfaat, baik secara ekologi, ekonomi maupun sosial.\r\n\r\nSalam LESTARI!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#KHDTK\r\n#KHDTK_Wonogiri\r\n#KebunBenihSemai\r\n#KBSmalapari\r\n#malapari\r\n#pongamia_pinnata\r\n#RehabilitasiHutan\r\n#bioenergi\r\n#EnergiTerbarukan\r\n#BRIN\r\n#BPTH_WilayahIII\r\n#CIFOR\r\n#ICRAF\r\n#KerjaBareng\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:13:08', '2025-09-03 20:13:08', NULL),
(22, 5, 'Ekspedisi P2SEMH: Menyingkap Potensi \"Hutan Pelangi\" dan \"Pohon Asmara\" di KHDTK Jawa Timur', 'ekspedisi-p2semh-menyingkap-potensi-hutan-pelangi-dan-pohon-asmara-di-khdtk-jawa-timur', 'berita-p2semh', 'berita/1756955797_Halo Sobat Hijau!Setiap kawasan hutan memiliki potensi dan keunikan tersendiri yang menarik unt.jpg', 'Halo Sobat Hijau!\r\n\r\nSetiap kawasan hutan memiliki potensi dan keunikan tersendiri yang menarik untuk diceritakan. Seperti halnya KHDTK Litbang Kehuta...', 'Halo Sobat Hijau!\r\n\r\nSetiap kawasan hutan memiliki potensi dan keunikan tersendiri yang menarik untuk diceritakan. Seperti halnya KHDTK Litbang Kehutanan Sumberwringin dan KHDTK Litbang Kehutanan Padekanmalang yang dikunjungi Tim P2SEMH dalam ekspedisi lapangan pada 12 s/d 15 Agustus 2025 lalu.\r\n\r\nDi Desa Sumberwringin, Bondowoso, Jawa Timur, tim disambut keanekaragaman hayati KHDTK Sumberwringin seluas 23,75 hektar. Salah satu daya tariknya adalah “Hutan Pelangi”. Oleh warga, sebutan ini muncul karena di dalamnya ada pohon 𝘌𝘶𝘤𝘢𝘭𝘺𝘱𝘵𝘶𝘴 𝘥𝘦𝘨𝘭𝘶𝘱𝘵𝘢 yang batangnya berwarna-warni bagaikan pelangi. Tak heran jika tempat ini disebut sebagai objek wisata alam yang potensial dikembangkan.\r\n\r\nEkspedisi berlanjut ke KHDTK Padekanmalang di Desa Paowan, Situbondo. Di sini, pengelolaan kawasan seluas 21,54 hektar ini direncanakan akan dikolaborasikan dengan pengembangan desa wisata oleh Badan Usaha Milik Desa (BUM Desa). Salah satu keunikan alam di kawasan dengan ketinggian 31 mdpl ini adalah keberadaan pohon 𝘒𝘩𝘢𝘺𝘢 𝘢𝘯𝘵𝘩𝘰𝘵𝘩𝘦𝘤𝘢, tanaman asal Afrika yang tumbuh berpasangan dan menyatu secara alami hingga dikenal dengan julukan “Pohon Asmara”.\r\n\r\nSelain meninjau potensi wisata dan sumber daya alam di dalam kawasan, kunjungan ini juga menjadi ruang koordinasi antara P2SEMH dan berbagai pihak. Di KHDTK Sumberwringin, Tim P2SEMH berkoordinasi dengan Dinas Kehutanan Cabang Wilayah Bondowoso, sekaligus menerima kunjungan kerja Dinas Kehutanan Provinsi Jawa Timur. Terkait KHDTK Padekanmalang, Tim P2SEMH berkoordinasi dengan CDK Banyuwangi Wilayah Situbondo, CDK Banyuwangi, hingga pemerintah Desa Paowan.\r\n\r\nSinergi ini dilakukan untuk memastikan pengelolaan KHDTK berjalan berkelanjutan, sekaligus mendukung pengembangan potensi wisata dan pemberdayaan masyarakat sekitar hutan. Dengan kekayaan hayati dan cerita uniknya, kedua KHDTK ini menunjukkan bahwa hutan bukan hanya tentang pohon, tetapi juga ruang hidup dan sumber inspirasi yang akan diwariskan kepada generasi mendatang.\r\n\r\nSalam LESTARI!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#KHDTK\r\n#KHDTK_Sumberwringin\r\n#KHDTK_Padekanmalang', NULL, '2025-09-03 20:16:37', '2025-09-03 20:16:37', NULL),
(23, 5, 'P2SEMH RESMI MENJADI IMPLEMENTING PARTNER FOLU-NC 2&3', 'p2semh-resmi-menjadi-implementing-partner-folu-nc-23', 'berita-p2semh', 'berita/1756955914_P2SEMH RESMI MENJADI 𝘐𝘔𝘗𝘓𝘌𝘔𝘌𝘕𝘛𝘐𝘕𝘎 𝘗𝘈𝘙𝘛𝘕𝘌𝘙 FOLU-NC 2&3 Halo Sobat Hijau, Indo.jpg', 'Halo Sobat Hijau,\r\nIndonesia menargetkan untuk mencapai kondisi net sink di sektor kehutanan dan penggunaan lahan lainnya (𝘍𝘰𝘳𝘦𝘴𝘵𝘳𝘺 𝘢𝘯𝘥 𝘖𝘵𝘩𝘦𝘳 𝘓𝘢𝘯𝘥 𝘜𝘴𝘦...', 'Halo Sobat Hijau,\r\nIndonesia menargetkan untuk mencapai kondisi net sink di sektor kehutanan dan penggunaan lahan lainnya (𝘍𝘰𝘳𝘦𝘴𝘵𝘳𝘺 𝘢𝘯𝘥 𝘖𝘵𝘩𝘦𝘳 𝘓𝘢𝘯𝘥 𝘜𝘴𝘦 - FOLU) paling lambat tahun 2030. Sektor kehutanan memiliki porsi terbesar dari target pengurangan emisi gas rumah kaca yaitu 60% dari target penurunan emisi untuk mencapai netralitas karbon pada tahun 2030. Sektor kehutanan diharapkan mampu menyerap lebih banyak emisi karbon dibandingkan dengan emisi yang dilepaskan, dengan target penurunan emisi mencapai -140 juta ton CO₂e pada tahun 2030.\r\n\r\nUntuk mendorong percepatan target tersebut, Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH) terpilih sebagai salah satu 𝘐𝘮𝘱𝘭𝘦𝘮𝘦𝘯𝘵𝘪𝘯𝘨 𝘗𝘢𝘳𝘵𝘯𝘦𝘳 FOLU-NC 2&3 sebagaimana Surat Keputusan Sekretaris Jenderal Nomor 57 Tahun 2025 tentang Penetapan 𝘐𝘮𝘱𝘭𝘦𝘮𝘦𝘯𝘵𝘪𝘯𝘨 𝘗𝘢𝘳𝘵𝘯𝘦𝘳 Periode Kedua FOLU Net Sink 2030 yang pendanaannya bersumber dari kerja sama antara pemerintah Indonesia dengan pemerintah kerajaan Norwegia.\r\n\r\nTindak lanjut dari keputusan tersebut, pada hari Rabu dan Kamis tanggal 20 dan 21 Agustus 2025 di Mangkuluhur Artotel Suites Jakarta telah dilaksanakan sosialisasi Pedoman Operasional Proyek dan penandatanganan Perjanjian Kerja Sama (PKS) antara Kepala P2SEMH, Dodi Sumardi, S.Hut., M.T, M.PP selaku 𝘐𝘮𝘱𝘭𝘦𝘮𝘦𝘯𝘵𝘪𝘯𝘨 𝘗𝘢𝘳𝘵𝘯𝘦𝘳 dengan Dr. Edi Sulistyo Heri Susetyo selaku 𝘗𝘳𝘰𝘫𝘦𝘤𝘵 𝘋𝘪𝘳𝘦𝘤𝘵𝘰𝘳 FOLU-NC 2&3.\r\n\r\nP2SEMH akan bekerja dan berkontribusi melalui kegiatan Pengembangan dan Penguatan Sosial Ekonomi Masyarakat Desa Hutan dengan ruang lingkup/aktivitas, yaitu: 1) Pengembangan KHDTK untuk peningkatan sosial ekonomi masyarakat dan 2) Pemetaan sosial ekonomi masyarakat desa hutan. Kedua aktivitas tersebut diharapkan dapat mempercepat dua Program Strategis Indonesia’s FOLU Net Sink 2030 yaitu peningkatan cadangan karbon, dan penegakan hukum dan penguatan kapasitas kelembagaan.\r\n\r\nYuk Sobat Hijau, kita support P2SEMH agar sukses dan lancar dalam menjalankan tugasnya di kedua program FOLU NC 2&3 tersebut.\r\n\r\nSalam LESTARI!\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:18:34', '2025-09-03 20:18:34', NULL),
(24, 5, 'P2SEMH Fasilitasi Pengembangan Sosial Ekonomi di Cianjur, Belajar dari Praktik Baik KUPS', 'p2semh-fasilitasi-pengembangan-sosial-ekonomi-di-cianjur-belajar-dari-praktik-baik-kups', 'berita-p2semh', 'berita/1756956076_Halo Sobat Hijau!Tim P2SEMH terus melangkah mendukung program Perhutanan Sosial, yang merupakan.jpg', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH terus melangkah mendukung program Perhutanan Sosial, yang merupakan prioritas kegiatan di tahun 2025 ini. Salah satuny...', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH terus melangkah mendukung program Perhutanan Sosial, yang merupakan prioritas kegiatan di tahun 2025 ini. Salah satunya melalui kegiatan fasilitasi penerapan pengembangan sosial ekonomi masyarakat hutan yang dilakukan di Kabupaten Cianjur pada 20 - 21 Agustus 2025 yang lalu.\r\n\r\nDidampingi Penyuluh Kehutanan dari Cabang Dinas Kehutanan (CDK) Wilayah IV Cianjur, tim P2SEMH mengunjungi Kelompok Usaha Perhutanan Sosial (KUPS) Naramos dan Lembaga Pengelola Hutan Desa (LPHD) Ciloto. Dua kelompok ini merupakan contoh nyata keberhasilan pengelolaan hutan berbasis masyarakat.\r\n\r\nKUPS Naramos fokus pada usaha agroforestri, dengan memproduksi gula aren, serta mengolah akar alang-alang dan daun stevia. KUPS ini juga memfasilitasi petani setempat terkait distribusi hasil pertanian. Sementara itu, LPHD Ciloto fokus pada usaha jasa lingkungan berbasis wisata alam.\r\n\r\nMenurut tim P2SEMH, praktik baik yang dijalankan oleh kedua kelompok ini bisa jadi sumber inspirasi dan pembelajaran bagi kelompok usaha yang lain. Tekad kuat dan konsistensi dalam menjalankan kelompok usaha, serta pendampingan berkelanjutan salah satunya dari penyuluh kehutanan menjadi kunci keberhasilannya.\r\n\r\nDengan pengalaman ini, ke depan, P2SEMH akan memperkuat strategi fasilitasi dan pendampingan kelompok tani hutan di berbagai daerah, sehingga Perhutanan Sosial dapat memberikan manfaat ekonomi dan sosial, sekaligus hutan tetap terjaga.\r\n\r\nSalam LESTARI!\r\n\r\n@naramos.id\r\n@imahuyut_\r\n@cdk4_dishutjabar\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#BalaiPSBogor\r\n#CDKWilayahIV\r\n#KelompokUsahaPerhutananSosial\r\n#LembagaPengelolaHutanDesa\r\n#KUPS_Naramos\r\n#LPHD_Ciloto\r\n#cianjur\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:21:16', '2025-09-03 20:21:16', NULL),
(26, 5, 'Blusukan P2SEMH: Menyapa Kearifan Lokal di Hutan Adat Lebak Banten', 'blusukan-p2semh-menyapa-kearifan-lokal-di-hutan-adat-lebak-banten', 'berita-p2semh', 'berita/1756956284_Halo Sobat Hijau!Tim P2SEMH bersama Balai PS Bogor dan Penyuluh Kehutanan CDK Banten Wilayah Ta (1).jpg', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH bersama Balai PS Bogor dan Penyuluh Kehutanan CDK Banten Wilayah Tangerang dan Lebak pada 21–22 Agustus 2025 lalu blus...', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH bersama Balai PS Bogor dan Penyuluh Kehutanan CDK Banten Wilayah Tangerang dan Lebak pada 21–22 Agustus 2025 lalu blusukan ke _Leuweung Adat_, hutan adat di Kabupaten Lebak, Banten. Tim datang untuk menggali potensi pengembangan sosial-ekonomi masyarakat di sana dengan melihat langsung bagaimana kearifan masyarakat adat mampu menjaga hutan tetap lestari.\r\n\r\nDi Kasepuhan Karang, tim disambut hangat oleh Kepala Desa Jagaraksa yang akrab dipanggil “Jaro”. Ditetapkan sejak 2016, hutan adat Kasepuhan Karang seluas 462 hektar ini menjadi benteng alam di kaki Gunung Halimun. Di sana, warga mengelola KUPS dengan produk unggulan kopi “Kobaki” yang terkenal di wilayah Lebak. Tak hanya kopi, hasil bumi seperti padi, durian, duku, hingga alpukat turut menopang ekonomi warga.\r\n\r\nBlusukan berlanjut ke Kasepuhan Pasireurih dan Kasepuhan Cirompang, dua wilayah hutan adat yang resmi ditetapkan pada 2019. Terletak di kaki Gunung Halimun dan berbatasan langsung dengan Taman Nasional Gunung Halimun-Salak, luasan hutan adat Pasireurih 580,43 hektar dan hutan adat Cirompang 306,53 hektar. Keduanya dikelola oleh masyarakat adat yang menjunjung tinggi semangat regenerasi. Para pemuda setempat ikut aktif melestarikan hutan dan mengembangkan potensi lokal.\r\n\r\nTak berhenti di situ, tim juga menyambangi Kelompok Tani Hutan (KTH) Mitra Mandala yang sejak 1989 konsisten mengembangkan usaha pengolahan aren. Hebatnya, produk gula aren mereka telah menembus pasar internasional yaitu Eropa, Korea Selatan, hingga Jepang.\r\n\r\nDari rangkaian kunjungan ini terlihat jelas bahwa kearifan lokal adalah kunci kelestarian hutan. Semangat gotong royong dan kemandirian ekonomi yang ditunjukkan masyarakat adat Banten adalah contoh nyata pengelolaan hutan berkelanjutan. Pengalaman ini tentunya menjadi masukan berharga bagi P2SEMH dalam pengembangan desa sekitar hutan sekaligus mendukung pengelolaan hutan adat.\r\n\r\nSalam LESTARI!\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#BalaiPSBogor\r\n#CDK_Banten\r\n#LeuweungAdat\r\n#HutanAdat\r\n#LebakBanten\r\n#KasepuhanKarang\r\n#KasepuhanPasireurih\r\n#KasepuhanCirompang\r\n#KoperasiUsahaPerhutananSosial\r\n#KelompokTaniHutan\r\n#KopiKobaki\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:24:44', '2025-09-03 20:24:44', NULL),
(27, 5, 'P2SEMH Perkuat Peran Pengelolaan KHDTK Kepau Jaya', 'p2semh-perkuat-peran-pengelolaan-khdtk-kepau-jaya', 'berita-p2semh', 'berita/1756956395_Halo Sobat Hijau!Tim P2SEMH kembali turun ke lapangan. Kali ini, ke KHDTK Kepau Jaya di Kabupat.jpg', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH kembali turun ke lapangan. Kali ini, ke KHDTK Kepau Jaya di Kabupaten Kampar, Riau. Dengan meninjau kawasan, kunjungan...', 'Halo Sobat Hijau!\r\n\r\nTim P2SEMH kembali turun ke lapangan. Kali ini, ke KHDTK Kepau Jaya di Kabupaten Kampar, Riau. Dengan meninjau kawasan, kunjungan pada 26 - 28 Agustus 2025 ini dilakukan untuk memperkuat peran P2SEMH sebagai pengelola baru KHDTK Kepau Jaya setelah terbitnya SK Menteri Kehutanan Nomor 403 Tahun 2025.\r\n\r\nDi sana sejumlah agenda penting dilaksanakan, mulai dari koordinasi dengan Balai Perhutanan Sosial (BPS) Kampar Seksi Wilayah I di Pekanbaru selaku pengelola KHDTK Kepau Jaya terdahulu, monitoring kawasan bersama petugas lapangan, hingga diskusi dengan masyarakat sekitar. Dalam momen tersebut dibahas berbagai langkah strategis yaitu personil pengamanan kawasan, pemanfaatan pondok kerja, dan identifikasi sarana prasarana dan potensi yang dapat dikembangkan di areal KHDTK.\r\n\r\nDari pengalaman sebelumnya diketahui bahwa kegiatan ekoeduwisata di KHDTK Kepau Jaya bersama Kelompok Tani Hutan menarik minat yang tinggi dari masyarakat. Program ini diusulkan untuk dihidupkan kembali dengan inisiasi ulang dari P2SEMH. Untuk mendukung upaya pemeliharaan batas kawasan KHDTK Kepau Jaya, pada kesempatan ini juga dilakukan serah terima dokumen instruksi kerja penataan batas areal KHDTK untuk Hutan Penelitian Pakan Lebah Kepau Jaya.\r\n\r\nBukan hanya itu, P2SEMH juga berkoordinasi dan membangun sinergi dengan UPT Perbenihan Tanaman Hutan Dinas LHK Riau, dan KPH Sorek selaku pemangku kawasan terdahulu (Hutan Produksi Tetap Tesso Nilo) sebelum ditunjuk menjadi KHDTK Kepau Jaya. Kolaborasi ini meliputi pembaruan kerja sama pembibitan setelah perubahan organisasi, sosialisasi status kepemilikan dan pengelolaan kawasan kepada masyarakat, pengamanan dan patroli bersama, hingga pemberdayaan masyarakat sekitar hutan melibatkan anggota binaan KPHP.\r\n\r\nDengan semangat kolaborasi, kunjungan kerja ini menjadi langkah awal P2SEMH untuk memastikan KHDTK Kepau Jaya tetap lestari, sekaligus memberi manfaat nyata bagi masyarakat sekitar.\r\n\r\nSalam LESTARI!\r\n#P2SEMH\r\n#Kemenhut\r\n#SetjenKemenhut\r\n#KHDTK\r\n#KHDTK_KepauJaya\r\n#BalaiPerhutananSosial\r\n#BPS_KamparSeksiWilayahI\r\n#UPT_PerbenihanTanamanHutanDinasLHKRiau\r\n#KPH_Sorek\r\n#kolaborasi\r\n#sinergi\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:26:35', '2025-09-03 20:26:35', NULL),
(28, 5, 'Kunjungan Kerja Menteri Kehutanan ke Laboratorium Sutera Alam Indonesia dan CIFOR', 'kunjungan-kerja-menteri-kehutanan-ke-laboratorium-sutera-alam-indonesia-dan-cifor', 'berita-p2semh', 'berita/1756956513_Kunjungan Menteri Kehutanan ke Laboratorium Sutera Alam Indonesia dan CIFORHalo Sobat Hijau!Pad.jpg', 'Kunjungan Menteri Kehutanan ke Laboratorium Sutera Alam Indonesia dan CIFOR\r\n\r\nHalo Sobat Hijau!\r\nPada hari Selasa, 2 September 2025, Menteri Kehutana...', 'Kunjungan Menteri Kehutanan ke Laboratorium Sutera Alam Indonesia dan CIFOR\r\n\r\nHalo Sobat Hijau!\r\nPada hari Selasa, 2 September 2025, Menteri Kehutanan Republik Indonesia, Bapak Raja Juli Antoni @rajaantoni , melakukan kunjungan kerja ke Laboratorium Sutera Alam Indonesia. Kunjungan ini bertujuan untuk melakukan peninjauan langsung terhadap kegiatan dan fasilitas laboratorium.\r\n\r\nSelama kunjungan, Menteri Raja Juli Antoni disambut oleh tim laboratorium dan diperkenalkan dengan berbagai kegiatan penelitian dan pengembangan sutera alam yang dilakukan di laboratorium. Menteri juga berkesempatan untuk melihat langsung proses produksi sutera alam dan teknologi yang digunakan.\r\nKemudian dilanjutkan dengan melakukan kunjungan ke CIFOR.\r\n\r\n#P2SEMH\r\n#Kemenhut\r\n#SekjenKemenhut\r\n\r\nInstagram : @p2semh.kemenhut', NULL, '2025-09-03 20:28:33', '2025-09-03 20:28:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `judul`, `path_file`, `created_at`, `updated_at`) VALUES
(1, 'Laporan Contoh', 'documents/KqdG0cMR1Qv1DkjDDUDCiVEnGicXxxsLT1V1Flg5.pdf', '2025-08-12 21:14:31', '2025-08-12 21:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `judul`, `deskripsi`, `nama_file`, `kategori`, `created_at`, `updated_at`) VALUES
(6, 'Undang - Undang Nomor 41 Tahun 1999', 'Undang - Undang', 'p5sHYyLT5bLuMAn7N6ltcP8iBtVBBpGbtwLb3VDe.pdf', 'peraturan', '2025-09-03 15:56:49', '2025-09-03 15:56:49'),
(7, 'Peraturan Pemerintah Nomor 46 Tahun 2017 Tentang Instrumen Ekonomi Lingkungan Hidup', 'Peraturan Pemerintah', 'QCOrTsIv8YGbCnp6wmXo7rvHdvdrqhUb6UZnRErE.pdf', 'peraturan', '2025-09-03 15:58:19', '2025-09-03 15:58:19'),
(8, 'Peraturan Presiden Nomor 175 Tahun 2024 Tentang Kementerian Kehutanan', 'Peraturan Presiden', '6KqSRBBADyCBFfs5a6ai7pLohfl93BFAZR4qH2oG.pdf', 'peraturan', '2025-09-03 16:00:14', '2025-09-03 16:00:14'),
(9, 'Peraturan Presiden Nomor 5 Tahun 2025 Tentang Penertiban Kawasan Hutan', 'Peraturan Presiden', 'ZbvFXVBvLpZSQoo5ZJL92zuZDKM37zHpSnZPq6Rv.pdf', 'peraturan', '2025-09-03 16:01:46', '2025-09-03 16:01:46'),
(10, 'Peraturan Menteri Kehutanan Nomor 1 Tahun 2024 Tentang Organisasi dan Tata Kerja Kementerian Kehutanan', 'Peraturan Menteri', 'h5KR18TSyZEd4XRxA1Be3G8J2eFBnfiR6kwQbpHf.pdf', 'peraturan', '2025-09-03 16:03:14', '2025-09-03 16:03:14'),
(11, 'Keputusan Menteri Kehutanan Republik Indonesia Nomor 1 Tahun 2024 Tentang Logo Kementerian Kehutanan Republik Indonesia', 'Keputusan Menteri', 'Lqn4cbM5eoch9WVph3AjIihNwxuWlF39FG51BZ1S.pdf', 'peraturan', '2025-09-03 16:06:09', '2025-09-03 16:06:09'),
(12, 'Peraturan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor 4 Tahun 2023 Tentang Pengelolaan Perhutanan Sosial pada Kawasan Hutan dengan Pengelolaan Khusus', 'Peraturan Menteri Lingkungan Hidup', 'Jw9m7xWMJRO6t6hg4Ce00FaY5HDdgSjwJ7TDGGpL.pdf', 'peraturan', '2025-09-03 16:08:01', '2025-09-03 16:08:01'),
(13, 'Peraturan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor P.12 Tahun 2017 tentang Pedoman Umum Penyaluran Bantuan Lainnya yang Memiliki Karakteristik Bantuan Pemerintah di Lingkungan Kementerian Lingkungan Hidup dan Kehutanan', 'Peraturan Menteri', 'Peog8X222De9QnxvQyItG3FCeBFKh2PsQBi9A3c9.pdf', 'peraturan', '2025-09-03 18:23:13', '2025-09-03 18:23:13'),
(14, 'Permen LHK Nomor P.83 Tahun 2019 tentang Perubahan Kedua atas Permen LHK Nomor P.12 Tahun 2017 tentang Pedoman Penyaluran Bantuan Pemerintah di Lingkungan KLHK', 'Peraturan Menteri', 'JAPVwGrYNMdILEn8N3PSZooZRJZhu0WUR7oNITe4.pdf', 'peraturan', '2025-09-03 18:31:13', '2025-09-03 18:31:13'),
(15, 'Peraturan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor P.83 Tahun 2016 tentang Perhutanan Sosial', 'Peraturan Menteri', 'ugYKxMTfsVwnWhIbLD9Ey1MNLIOX3VvesEHRDLFJ.pdf', 'peraturan', '2025-09-03 18:32:29', '2025-09-03 18:32:29'),
(16, 'Permenkeu Nomor 23 Tahun 2025 tentang Juknis THR dan Gaji 13 bagi ASN, Pensiunan, dan Penerima Tunjangan Tahun 2025', 'Peraturan Menteri', 'TyPVdp20GGFkwg6SLwalbhXduy2hHzJguvP6OALn.pdf', 'peraturan', '2025-09-03 18:33:51', '2025-09-03 18:33:51'),
(17, 'Memorandum Menteri Kehutanan Nomor M.4 Tahun 2025 tentang Penyesuaian Pelaksanaan Kegiatan Efisiensi Belanja APBN Kementerian Kehutanan Tahun 2025', 'Memorandum', 'Iq4PfLp4EksbNIL1Gjt8uKq2hB5iHEg1VaXhKZOj.pdf', 'peraturan', '2025-09-03 18:34:54', '2025-09-03 18:34:54'),
(18, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 3 Tahun 2025 tentang Organisasi dan Tata Kerja Balai Pemantapan Kawasan Hutan', 'Peraturan Menteri', 'sBF7Ys86rtNImgeQgjHxeXHTfz57QIIs7y91Mo3y.pdf', 'peraturan', '2025-09-03 18:35:53', '2025-09-03 18:35:53'),
(19, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 4 Tahun 2025 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Direktorat Jenderal Konservasi Sumber Daya Alam dan Ekosistem', 'Peraturan Menteri', 'TTMmLVw9qpKnoBUC2bNbwIVVnRMmgxX65OKZRMMc.pdf', 'peraturan', '2025-09-03 18:36:33', '2025-09-03 18:36:33'),
(20, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 5 Tahun 2025 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Direktorat Jenderal Pengelolaan Daerah Aliran Sungai dan Rehabilitasi Hutan', 'Peraturan Menteri', 'bd8ilQ7xB3r9aXI3Op0j2cDNEK2gVfUkC7ISo1bv.pdf', 'peraturan', '2025-09-03 18:37:44', '2025-09-03 18:37:44'),
(21, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 6 Tahun 2025 tentang Organisasi dan Tata Kerja Balai Pengelolaan Hutan Lestari', 'Peraturan Menteri', 'qa7yOoTpSwUt2XYuZtPQzFEZ6TggLoLgludLLDRP.pdf', 'peraturan', '2025-09-03 18:40:46', '2025-09-03 18:40:46'),
(22, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 7 Tahun 2025 tentang Organisasi dan Tata Kerja Balai Perhutanan Sosial', 'Peraturan Menteri', '9Iu72qFpGEw5PN0okrkqkxfJQieBrvMzVZwShiRk.pdf', 'peraturan', '2025-09-03 18:41:31', '2025-09-03 18:41:31'),
(23, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 8 Tahun 2025 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Direktorat Jenderal Penegakan Hukum Kehutanan', 'Peraturan Menteri', '3v7vnqb5j14JBY85aVqawlp5CjcuqLHfRZSvwek4.pdf', 'peraturan', '2025-09-03 18:42:24', '2025-09-03 18:42:24'),
(24, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 9 Tahun 2025 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Badan Penyuluhan dan Pengembangan Sumber Daya Manusia', 'Peraturan Menteri', 'zo0vnaHyy6iLeNgyhTAPTdeAnrLNRDFxZLxfwyFJ.pdf', 'peraturan', '2025-09-03 18:43:08', '2025-09-03 18:43:08'),
(25, 'Peraturan Menteri Kehutanan Republik Indonesia Nomor 10 Tahun 2025 tentang Penyaluran Bantuan Pemerintah di Lingkungan Kementerian Kehutanan', 'Peraturan Menteri', '0bUjSUyA9t7JqFUfiS065zfAnrXS17CF4n3YnahB.pdf', 'peraturan', '2025-09-03 18:43:46', '2025-09-03 18:43:46'),
(26, 'Surat Keputusan Kepala Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan Nomor 3 Tahun 2025 tentang Tim Penilaian Efektivitas Penerapan Kebijakan Teknis Sosial Ekonomi Masyarakat Hutan Tahun 2025', 'Surat Keputusan', 'eeh7GM7F8jbxzHO5kr2nTyc3tryQpGujN7xkjX2M.pdf', 'peraturan', '2025-09-03 18:53:41', '2025-09-03 18:53:41'),
(27, 'Surat Keputusan Kapus P2SEMH Nomor 4 Tahun 2025 tentang Panitia Dialog Kerja Kolaborasi Lintas Sektor P2SEMH', 'Surat Keputusan', '6nlZ1NfqJ1bboA7kGBWcbYTUrQPCQWI9DMOcap4X.pdf', 'peraturan', '2025-09-03 18:55:43', '2025-09-03 18:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_08_04_020127_create_regulations_table', 1),
(7, '2025_08_04_021532_create_categories_table', 1),
(8, '2025_08_04_021535_create_work_units_table', 1),
(9, '2025_08_04_021536_create_public_services_table', 1),
(10, '2025_08_04_021538_create_events_table', 1),
(11, '2025_08_04_021540_create_partners_table', 1),
(12, '2025_08_04_021542_create_locations_table', 1),
(13, '2025_08_06_065800_add_is_admin_to_users_table', 1),
(14, '2025_08_07_062129_create_beritas_table', 1),
(15, '2025_08_13_032215_create_documents_table', 2),
(16, '2025_08_13_064801_create_downloads_table', 3),
(17, '2025_08_15_031045_create_agendas_table', 4),
(18, '2025_08_21_034956_create_videos_table', 5),
(20, '2025_08_21_042127_remove_thumbnail_column_from_videos_table', 6),
(21, '2025_09_04_042540_create_partners_table', 7),
(22, '2025_09_04_081555_modify_agendas_table_for_date_range', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `url`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Kementerian Kehutanan', 'https://kehutanan.go.id/', 'partners/6ndYdmSCCVQRudTv0ZNUpn9PMbqkAgIRDWZ77Yu9.png', '2025-09-03 21:27:29', '2025-09-03 21:27:29'),
(2, 'Badan Standardisasi Nasional', 'https://bsn.go.id/', 'partners/Bm7A1uiDMnIFzbax1nsrZUnwXZhlUGIVfcjjP8rl.png', '2025-09-03 21:42:05', '2025-09-03 21:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'Rusa Timor di KHDTK Rarung by Edy Saputra Penangkaran  - Mataram', 'gallery/3kietfxWNGoZ97abccgB3GVoMhcIdqXpIzss6sK8.jpg', '2025-09-04 00:56:06', '2025-09-04 00:56:06'),
(5, 'Penanaman Vanili sesuai SNI Agroforestri by Edy Saputra - Mataram', 'gallery/BusTdu594BA4MGQND6JtmKkd9pZ57xTlBXsWi8Em.jpg', '2025-09-04 00:58:23', '2025-09-04 00:58:23'),
(6, 'Akar Jangkar Bakau di Hutan Mangrove Sungai Manggar - Samboja by Agustina Dwi Setyowati', 'gallery/7e0JdvROtnY7IUhiOk8OFGAECQOBNPqOZGaZGbaV.jpg', '2025-09-07 21:20:03', '2025-09-07 21:20:03'),
(7, 'Anak Bekantan (Nasalis larvatus) Sarapan Daun Sonneratia caseolaris - Samboja by Agustina Dwi Setyowati', 'gallery/DoX4NyxBtucyOKXNIhpcXTjizx8XggcEBkIAvJCK.jpg', '2025-09-07 21:28:55', '2025-09-07 21:28:55'),
(8, 'Agustina Dwi Setyowati_Bulbophyllum sp. - Samboja', 'gallery/2gWwCOKI18kpHIMh3rlOdOjvsGBLv3a3wFuNoDlp.jpg', '2025-09-07 21:32:27', '2025-09-07 21:32:27'),
(9, 'Berang berang Cakar Kecil (Aonyx cinereus) - Samboja by Agustina Dwi Setyowati', 'gallery/px7Yk726zzYy12C7QsV36Wy5MXdkKX1tWalekOLN.jpg', '2025-09-07 21:34:51', '2025-09-07 21:34:51'),
(10, 'Elang brontok (Nisaetus cirrhatus) di Landscape IKN - Samboja by Agustina Dwi Setyowati', 'gallery/2w0HrjjiJSXyplr6w0dnG3YzmWqxhaxb88I5QzuC.jpg', '2025-09-07 21:36:10', '2025-09-07 21:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `public_services`
--

CREATE TABLE `public_services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `form_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regulations`
--

CREATE TABLE `regulations` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin BSILHK', 'admin@bsilhk.com', 1, '2025-08-12 00:00:45', '$2y$12$OF6XZfBp4LvIyibdj0/qPehkmwdmFsfRYN865AnLIkC30cMn/c3BG', NULL, '2025-08-12 00:00:45', '2025-08-12 00:00:45'),
(5, 'Admin P2SEMH', 'admin@p2semh.com', 1, NULL, '$2y$12$Dkek2.Hv5xhu8c1hqbCLxOD6.qXS7THROHZCD7xu5h1esCNZ.SAKC', NULL, '2025-09-02 23:40:42', '2025-09-02 23:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `judul`, `youtube_url`, `created_at`, `updated_at`) VALUES
(1, 'Kaleidoskop BSILHK 2021', 'https://youtu.be/X1DEmB91Zhg?si=Hy7Jr9yFVfB0rhWO', '2025-08-20 21:23:49', '2025-08-20 21:23:49'),
(4, 'STANDARDISASI LINGKUNGAN HIDUP DAN KEHUTANAN MENJAGA KEBERLANJUTAN SUMBERDAYA ALAM', 'https://youtu.be/Ma6XQjEETKM?si=ribyiEZ2fgiff5eS', '2025-08-20 21:30:53', '2025-08-20 21:30:53'),
(5, 'Program kerja penaatan dan pengawasan lingkungan hidup, laboratorium lingkungan', 'https://youtu.be/py-vMYFJkdk?si=JfwnorRDn7pk1tP3', '2025-08-20 21:31:27', '2025-08-20 21:31:27'),
(6, 'REFLEKSI BSILHK 2023 - LANDASAN 2024, \"BUKTI BUKAN SEKEDAR JANJI\"', 'https://youtu.be/N9eIFEzRaOI?si=9VCaqCMuSNsYxbIV', '2025-08-20 21:31:55', '2025-08-20 21:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `work_units`
--

CREATE TABLE `work_units` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`),
  ADD KEY `beritas_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_services`
--
ALTER TABLE `public_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulations`
--
ALTER TABLE `regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_units`
--
ALTER TABLE `work_units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `public_services`
--
ALTER TABLE `public_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regulations`
--
ALTER TABLE `regulations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_units`
--
ALTER TABLE `work_units`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
