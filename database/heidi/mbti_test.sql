-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk mbti_test
CREATE DATABASE IF NOT EXISTS `mbti_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mbti_test`;

-- membuang struktur untuk table mbti_test.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text,
  `option1` varchar(50) DEFAULT NULL,
  `option2` varchar(50) DEFAULT NULL,
  `keterangan1` varchar(255) DEFAULT NULL,
  `keterangan2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel mbti_test.questions: ~40 rows (lebih kurang)
INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `keterangan1`, `keterangan2`) VALUES
	(1, 'Ketika bertemu dengan orang baru kamu biasanya?', 'E', 'I', 'Memulai membuka topik pembicaraan', 'Menunggu orang membuka topik pembicaraan'),
	(2, 'Pekerjaan yang mengharuskan diri kamu menghadapi banyak orang baru membuat kamu', 'E', 'I', 'Lebih semangat bekerja', 'Merasa tertekan'),
	(3, 'Mana yang lebih kamu pilih?', 'I', 'E', 'Sedikit teman, namun sering bertemu ', 'Banyak teman walaupun jarang bertemu'),
	(4, 'Dalam kelompok pertemanan kamu, kamu adalah seorang...', 'E', 'I', '“Badut” yang meramaikan setiap pertemuan', '“Tempat” curhat karena dianggap merupakan pendengar yang baik'),
	(5, 'Ketika ada masalah biasanya kamu...', 'I', 'E', 'Memilih untuk memendamnya', 'Memilih untuk menceritakannya kepada teman-teman'),
	(6, 'Ketika ada gosip baru, kamu...', 'I', 'E', 'Tidak terlalu peduli', 'Selalu ingin jadi yang pertama kali tahu'),
	(7, 'Ketika bertemu orang baru, kamu biasanya...\n', 'E', 'I', 'Mudah memulai pembicaraan dan pembicaraan tersebut bertahan lama', 'Sulit mencari topik pembicaraan dan biasanya pembicaraan tidak bertahan lama'),
	(8, 'Ketika harus berbicara di depan publik, kamu biasanya...', 'P', 'J', 'Spontan dengan apa yang ingin dibicarakan', 'Melatih apa yang ingin dibicarakan beberapa kali sebelum acara berlangsung'),
	(9, 'Ketika mendatangi pesta, kamu biasanya...', 'I', 'E', 'Memilih untuk pulang lebih awal karena merasa semakin lelah ', 'Bertahan sampai acara selesai karena merasa semakin bersemangat '),
	(10, 'Ketika tidak suka pada seseorang, kamu biasanya..', 'T', 'F', 'Langsung mengomunikasikan kepada orang tersebut ', 'Tidak mengutarakan kepada orang tersebut karena merasa diri sendiri memiliki kekurangan'),
	(11, 'Mana yang lebih kamu percayai?', 'N', 'S', 'Intuisi', 'Fakta '),
	(12, 'Jika sekarang kamu diminta untuk menulis buku, judul apa yang akan kamu pilih?', 'N', 'S', '“Peluang Bisnis di Masa Depan”', '“Cara Praktis Menjadi Kaya dalam Waktu 1 Bulan”'),
	(13, 'Menurutmu, anak-anak seharusnya...', 'S', 'N', 'Melatih kemampuannya untuk berpikir secara logis ', 'Melatih kemampuan imajinasinya agar dapat berinovasi'),
	(14, 'Menurutmu, orang tidak akan dapat hidup tanpa...', 'N', 'S', 'Prinsip', 'Fakta'),
	(15, 'Mana yang lebih menarik bagimu jika kamu bekerja di suatu perusahaan?', 'N', 'S', 'Berspekulasi terkait peluang untuk produk lainnya ', 'Memproduksi suatu barang yang terbukti laris di perusahaan'),
	(16, 'Kamu yakin bahwa bungee jumping aman dilakukan dari...', 'S', 'N', 'Teman-temanmu, berdasarkan pengalaman mereka mengatakan aman', 'Firasatmu berkata hal tersebut aman'),
	(17, 'Ketika melakukan sesuatu biasanya kamu...\n', 'N', 'S', 'Melakukannya dengan caramu sendiri', 'Melakukannya dengan cara yang orang lain lakukan pada umumnya'),
	(18, 'Kamu lebih mengagumi orang yang...', 'N', 'S', 'Dapat mempersuasi lewat visi ', 'Dapat memberikan bukti konkret'),
	(19, 'Kamu lebih tertarik pada...', 'N', 'S', 'Apa yang mungkin terjadi nanti', 'Apa yang sedang terjadi saat ini'),
	(20, 'Ketika ada yang menanyakan perihal cinta padamu, kamu akan menjawab bahwa cinta itu...', 'T', 'F', 'Hubungan timbal-balik yang intim antara dua orang', 'Sebuah ikatan emosional yang mengikat dua orang sehingga menciptakan rasa saling memiliki'),
	(21, 'Mana yang menurutmu lebih penting?', 'T', 'F', 'Ketepatan dalam berpikir', 'Hubungan antarindividu yang harmonis'),
	(22, 'Menurutmu, mana yang lebih memuaskan?', 'S', 'N', 'Mencapai persetujuan bersama', 'Mendiskusikan isu secara mendetail'),
	(23, 'Mana yang menurutmu lebih mudah kamu korbankan?\n', 'T', 'F', 'Hubungan baik dengan orang lain ', 'Keputusan tepat berdasarkan nalar '),
	(24, 'Pujian mana yang akan lebih membuatmu merasa terapresiasi?', 'T', 'F', '“Kamu orang yang sangat logis, ya”', ' “Kamu sangat perhatian, deh”'),
	(25, 'Kamu akan lebih percaya dengan orang yang...', 'F', 'T', 'Mampu mengekspresikan emosi', 'Kuat dengan penjelasan nalarnya'),
	(26, 'Akan lebih buruk bagimu jika menjadi orang yang...\n', 'F', 'T', 'Tidak memiliki belas kasih', 'Tidak logis'),
	(27, 'Apa yang paling memengaruhimu?', 'T', 'F', 'Isi kepalamu', 'Isi hatimu '),
	(28, 'Mana yang lebih penting bagimu?', 'F', 'T', 'Dapat menyentuh orang dengan kata-katamu', 'Dapat meyakinkan orang dengan kata-katamu'),
	(29, 'Mana yang paling menggambarkan dirimu?', 'F', 'T', 'Perasa', 'Pemikir kritis'),
	(30, 'Pilih salah satu!', 'N', 'S', 'Berorientasi pada masalah (problem-oriented)', 'Berorientasi pada orang (people-oriented)'),
	(31, 'Kamu merupakan orang yang...', 'J', 'P', 'Tepat waktu', 'Ngaretan'),
	(32, 'Kamu lebih memilih...\n', 'P', 'J', 'Fleksibel dengan segala sesuatu', 'Merencanakan segala sesuatu'),
	(33, 'Pekerjaan seperti apa yang lebih kamu minati?', 'P', 'J', 'Fleksibel', 'Sistematis'),
	(34, 'Jika ada tugas, kamu biasanya lebih memilih...', 'P', 'J', 'Mengerjakan ketika sudah mendekati deadline', 'Nyicil dari jauh-jauh hari'),
	(35, 'Kamu tipe orang yang...', 'J', 'P', 'Tenang dan berhati-hati', 'Spontan'),
	(36, 'Jika kamu belanja ke swalayan, kamu memilih untuk...', 'J', 'P', 'Mencatat daftar barang yang perlu dibeli agar tidak membeli barang yang tidak diperlukan', 'Membeli barang sesuai dengan apa yang diingat dan terbuka pada kemungkinan pilihan untuk membeli barang lain'),
	(37, 'Pilihlah salah satu!\n', 'P', 'J', 'Hidup fleksibel dan mudah beradaptasi pada perubahan', 'Hidup teratur dan terorganisasi'),
	(38, 'Ketika memutuskan sesuatu kamu biasanya...', 'J', 'P', 'Memutuskannya dengan sangat hati-hati', 'Memutuskannya secara spontan'),
	(39, 'Liburan seperti apa yang menurutmu lebih dapat kamu nikmati?\n', 'J', 'P', 'Terencana dengan baik ', 'Dadakan'),
	(40, 'Menurutmu, kamu adalah orang yang...', 'J', 'P', 'Determined', 'Easy-going');

-- membuang struktur untuk table mbti_test.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `mbti_result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel mbti_test.user: ~0 rows (lebih kurang)
INSERT INTO `user` (`id`, `username`, `mbti_result`) VALUES
	(1, 'Uul', 'ESTJ'),
	(2, 'uul', 'ISTP'),
	(3, 'Nanad', 'ESFP');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
