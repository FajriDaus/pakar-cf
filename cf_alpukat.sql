-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: skripsi
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gejala`
--

DROP TABLE IF EXISTS `gejala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gejala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(5) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gejala`
--

LOCK TABLES `gejala` WRITE;
/*!40000 ALTER TABLE `gejala` DISABLE KEYS */;
INSERT INTO `gejala` VALUES (1,'G001','Daun-daun tidak utuh dan terdapat bekas gigitan'),(2,'G002','Daun habis sama sekali tetapi tanaman tidak akan mati'),(3,'G003','Terlihat kepompong bergelantungan diantara daun'),(4,'G004','Tanaman akan kerdil dan terpilin'),(5,'G005','Pertumbuhan tanaman terhambat dan kurus'),(6,'G006','Tunas muda, daun, batang, tangkai bunga, tangkai bTunas muda, daun, batang, tangkai bunga, tangkai buah, dan buah terlihat pucat, tertutup massa berwarna putih, dan lama kelamaan kering'),(7,'G007','Permukaan daun berbintik-bintik kuning yang kemudiPermukaan daun berbintik-bintik kuning yang kemudian akan berubah menjadi merah tua seperti karat'),(8,'G008','Di bawah permukaan daun tampak anyaman benang yang halus'),(9,'G009','Daun layu dan rontok'),(10,'G010','Terlihat bintik hitam/bejolan pada permukaan buah, yang merupakan tusukan hama sekaligus tempat untuk meletakkan telur'),(11,'G011','Bagian dalam buah berlubang dan busuk karena dimakan larva'),(12,'G012','Terdapat bagian buah yang berlubang bekas gigitan'),(13,'G013','Buah yang terserang hanya yang telah tua, dan bagiBuah yang terserang hanya yang telah tua, dan bagian yang dimakan adalah daging buahnya saja'),(14,'G014','Terdapat lubang yang menyerupai terowongan pada caTerdapat lubang yang menyerupai terowongan pada cabang atau ranting'),(15,'G015','Terdapat terowongan yang semakin besar sehingga maTerdapat terowongan yang semakin besar sehingga makanan tidak dapat tersalurakan ke daun, kemudian daun menjadi layu dan akhirnya cabang atau ranting tersebut mati'),(16,'G016','Bagian yang terinfeksi berwarna cokelat karat, kemudian daun, bunga, buah/cabang tanaman yang terserang akan gugur'),(17,'G017','Bercak cokelat muda dengan tepi cokelat tua di permukaan daun atau buah.'),(18,'G018','Terdapat bercak coklat yang bila cuaca lembab, bercak cokelat berubah menjadi bintik-bintik kelabu.'),(19,'G019','Pertumbuhannya terganggu, tunas mudanya jarang tumbuh'),(20,'G020','Tampak perubahan warna kulit pada pangkal batang'),(21,'G021','Bercak cokelat yang tidak teratur, yang kemudian menjalar ke bagian buah'),(22,'G022','Pada kulit buah akan timbul tonjolan-tonjolan kecil');
/*!40000 ALTER TABLE `gejala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kondisi`
--

DROP TABLE IF EXISTS `kondisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kondisi`
--

LOCK TABLES `kondisi` WRITE;
/*!40000 ALTER TABLE `kondisi` DISABLE KEYS */;
INSERT INTO `kondisi` VALUES (1,'Pasti Ya'),(2,'Hampir pasti ya'),(3,'Kemungkinan besar ya'),(4,'Mungkin ya'),(5,'Tidak tahu'),(6,'Mungkin tidak'),(7,'Kemungkinan besar tidak'),(8,'Hampir pasti tidak'),(9,'Pasti tidak');
/*!40000 ALTER TABLE `kondisi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengetahuan`
--

DROP TABLE IF EXISTS `pengetahuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengetahuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(6) NOT NULL,
  `kode_gejala` varchar(6) NOT NULL,
  `mb` double(11,1) NOT NULL,
  `md` double(11,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengetahuan`
--

LOCK TABLES `pengetahuan` WRITE;
/*!40000 ALTER TABLE `pengetahuan` DISABLE KEYS */;
INSERT INTO `pengetahuan` VALUES (1,'P001','G001',0.6,0.4),(2,'P001','G002',0.6,0.2),(3,'P001','G003',0.8,0.4),(4,'P002','G001',0.6,0.3),(5,'P002','G009',0.8,0.4),(6,'P003','G001',0.6,0.4),(7,'P003','G004',0.8,0.3),(8,'P004','G004',0.8,0.6),(9,'P004','G005',0.6,0.2),(10,'P004','G006',0.4,0.2),(11,'P005','G007',0.8,0.6),(12,'P005','G008',0.8,0.4),(13,'P005','G009',0.6,0.2),(14,'P006','G010',0.7,0.2),(15,'P006','G011',0.6,0.2),(16,'P006','G012',0.8,0.3),(17,'P006','G022',0.4,0.2),(18,'P007','G012',0.8,0.2),(19,'P007','G013',0.8,0.4),(20,'P008','G014',0.8,0.5),(21,'P008','G015',0.6,0.6),(22,'P008','G020',0.6,0.6),(23,'P009','G016',0.8,0.4),(24,'P010','G017',0.6,0.3),(25,'P010','G018',0.8,0.4),(26,'P011','G019',0.8,0.4),(27,'P012','G021',0.6,0.5),(28,'P012','G022',0.4,0.3);
/*!40000 ALTER TABLE `pengetahuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyakit`
--

DROP TABLE IF EXISTS `penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `det_penyakit` text NOT NULL,
  `srn_penyakit` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyakit`
--

LOCK TABLES `penyakit` WRITE;
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` VALUES (1,'P001','Ulat kipat (Cricula trisfenestrata Helf)','Ulat kipat dikenal gemar menyerang tanaman buah-buahan. Panjang tubuh ulat kipat berkisar 6 cm. Bagian kepala dan ekornya berwarna merah menyala. Tubuhnya juga dipenuhi bulu halus. ','(1) Untuk mengendalikan hama ulat kipat bisa menggunakan ekstrak daun pepaya. Cara mengolahnya ialah dengan merendam 50 gram irisan daun pepaya kedalam 100 ml air.\n(2) Rendam hingga 24 jam kemudian peras dan saring. Tambahkan larutan ini kedalam 2-3 liter air lalu semprotkan ke tanaman yang terkena hama ulat kipat.\n','kipat.jpeg'),(2,'P002','Ulat kupu-kupu gajah (Attacus atlas L.)','Ulat ini berwarna hijau ditutupi warna putih seperti tepung. Terdapat duri dalam dagingnya serta memiliki panjang hingga 15 cm.','(1) Hancurkan lima siung bawang dicampur dengan misa dan 50 ml minyak sayur serta sedikit air.\n(2) Semprotkan larutan tersebut ke pohon alpukat hingga 3 hari maka ulat kupu-kupu gajah akan segera mati\n','attacus.jpeg'),(3,'P003','Aphisgossypii Glov/A.Cucumeris, A. cucurbitii/Aphis kapas','Aphis gossypii Glov atau kutu daun. Ciri fisiknya ialah berwarna hijau hingga hitam atau kuning kecoklatan. Hewan ini bisa mengeluarkan embun madu bercampur cendawan jelaga. Jelaga ini juga yang mengundang semut untuk datang','(1) Hama jenis ini bisa dibasmi dengan ekstrak cabai merah. Cara pembuatannya bisa dengan menyiapkan 4 mangkuk cabai merah ditambah 30 gram detergen. (2) Didihkan cabai selama 20 menit lalu tambahkan 3 liter air. (3) Dinginkan terlebih dahulu baru kemudian tambahkan detergen lalu semprotkan ke tanaman. Semprotkan setiap pagi dan sore hari hingga hama tanaman menghilang','aphis.jpeg'),(4,'P004','Kutu dompolan putih (Pseudococcus citri Risso)','Hewan ini memiliki bentuk tubuh elips. Warnanya coklat kekuningan terkadang merah orange yang ditutupi warna putih tepung. Ukurannya bisa sekitar 3 mm dan terdapat benjolan pada bagian tepi tubuh hingga 14-18 pasang.','(1) Menggunakan insektisida berbahan karbaril, formotion, monocrotophos atau dimetoat.  (2) Juga bisa memakai ekstrak jahe yang ditambahkan air dan detergen. Larutan ini kemudian disemprotkan ke tanaman','dompolan.jpeg'),(5,'P005','Tungau merah (Tetranychus cinnabarinus Boisd)','Hama ini memiliki ciri berwarna merah tua untuk betina dan hijau kekuningan untuk jantan. Pada bagian kaki dan mulutnya terdapat bercak hitam. Sementara ukurannya sendiri berkisar 0.5 mm.','Hancurkan 200 biji ketumbar lalu tambahkan 2 liter air kemudian semprotkan ke seluruh bagian tanaman pada pagi hari','tungau.jpeg'),(6,'P006','Lalat buah Dacus (Dacus dorsalis Hend.)','Ukuran hama ini berkisar 6–8 mm dengan bentangan sayap 5–7 mm. Warna dadanya coklat dengan bercak putih atau coklat. Larva hewan ini jika masih muda berwarna putih dan berubah kekuningan serta memiliki panjang tubuh 1 cm.','(1) Untuk mengendalikan hama ini bisa dengan menyemprotkan insektisida maupun memakai obat organik. Bisa pula menggunakan ekstrak selasih maupun minyak citronella. (2) Caranya rajang 50 gram daun selasih lalu rendam sehari semalam. Saringlah kemudian tambah detergen dan aduk merata. (3) Semprotkan cairan ini pada bagian tanaman setiap pagi atau sore hari','dacus.jpeg'),(7,'P007','Codot (Cynopterus sp)','Hewan ini akan memanjat pohon kemudian menuju buah alpukat yang telah masak untuk dimakan','Untuk mengatasi hewan ini bisa dengan menakut-nakuti codot memakai kincir angin yang diberi peluit. Codot akan terganggu dengan suara peluit dari kincir angin.','codot.jpeg'),(8,'P008','Kumbang bubuk cabang (Xyleborus coffeae Wurth)','Ciri dari kumbang ini terlihat dari warnanya coklat tua. Sementara ukurannya 1.5 mm dan bila dalam bentuk larva akan berwarna putih dengan panjang 2 mm.','(1) Dalam pengendaliannya salah satu cara agar tak tersebar ialah dengan membakar maupun memangkas cabang/ranting yang terserang. (2) Bisa juga menggunakan  insektisida berbahan aktif seperti asefat atau diazinon. Gunakan dosis 0,5-0,8 gram/liter dan Diazinon 60 EC dosis 1-2 cc/liter untuk menyemprot tanaman yang terkena hama.','kumbuk.jpeg'),(9,'P009','Antraknosa','Gejala serangan akan membuat semua bagian tanaman kecuali akar berkarat. Penyebab: timbulnya Jamur Colletotrichum gloeosporioides (Penz.) sacc.','Cara mengatasinya bisa dengan memangkas ranting dan cabang yang mati','antraknosa.jpeg'),(10,'P010','Bercak daun atau bercak cokelat','Gejala serangan dimulai dengan permukaan daun berubah menjadi bercak coklat muda dengan tepi cokelat tua di permukaan daun. Selanjutnya akan muncul bintik-bintik kelabu.','Lakukan penyemprotan fungisida Masalgin 50 WP dengan dosis 1-2 gram/liter','bercak.jpeg'),(11,'P011','Busuk akar dan kanker batang','Gejala serangan terlihat pada pertumbuhan tanaman yang terganggu hingga kematian','Cara mengatasinya dengan membongkar tanaman yang terserang dengan tanaman yang baru','akar-busuk.jpeg'),(12,'P012','Busuk buah','Gejala serangan penyakit ini ditandai dengan bercak coklat yang tidak teratur pada pangkal buah yang menjalar ke bagian buah. Kulit buah juga akan muncul benjolan kecil.','Menggunakan bubur Bordeaux dengan dosis 2-2,5 gram/liter.','buah-busuk.jpeg');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `detail` text NOT NULL,
  `saran` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Ulat kipat (Cricula trisfenestrata Helf)','<p>Ulat kipat dikenal gemar menyerang tanaman buah-buahan. Panjang tubuh ulat kipat berkisar 6 cm. Bagian kepala dan ekornya berwarna merah menyala. Tubuhnya juga dipenuhi bulu halus.</p>','<p>(1) Untuk mengendalikan hama ulat kipat bisa menggunakan ekstrak daun pepaya. Cara mengolahnya ialah dengan merendam 50 gram irisan daun pepaya kedalam 100 ml air.&nbsp;</p><p>(2) Rendam hingga 24 jam kemudian peras dan saring. Tambahkan larutan ini kedalam 2-3 liter air lalu semprotkan ke tanaman yang terkena hama ulat kipat.</p>','kipat.jpeg'),(2,'Ulat kupu-kupu gajah (Attacus atlas L.)','<p>Ulat ini berwarna hijau ditutupi warna putih seperti tepung. Terdapat duri dalam dagingnya serta memiliki panjang hingga 15 cm.</p>','<p>(1) Hancurkan lima siung bawang dicampur dengan misa dan 50 ml minyak sayur serta sedikit air.</p><p>(2) Semprotkan larutan tersebut ke pohon alpukat hingga 3 hari maka ulat kupu-kupu gajah akan segera mati<br>&nbsp;</p>','attacus.jpeg'),(3,'Aphisgossypii Glov/A.Cucumeris, A. cucurbitii/Aphis kapas','<p>Aphis gossypii Glov atau kutu daun. Ciri fisiknya ialah berwarna hijau hingga hitam atau kuning kecoklatan. Hewan ini bisa mengeluarkan embun madu bercampur cendawan jelaga. Jelaga ini juga yang mengundang semut untuk datang</p>','<p>(1) Hama jenis ini bisa dibasmi dengan ekstrak cabai merah. Cara pembuatannya bisa dengan menyiapkan 4 mangkuk cabai merah ditambah 30 gram detergen.&nbsp;</p><p>(2) Didihkan cabai selama 20 menit lalu tambahkan 3 liter air.&nbsp;</p><p>(3) Dinginkan terlebih dahulu baru kemudian tambahkan detergen lalu semprotkan ke tanaman. Semprotkan setiap pagi dan sore hari hingga hama tanaman menghilang</p>','aphis.jpeg'),(4,'Kutu dompolan putih (Pseudococcus citri Risso)','<p>Hewan ini memiliki bentuk tubuh elips. Warnanya coklat kekuningan terkadang merah orange yang ditutupi warna putih tepung. Ukurannya bisa sekitar 3 mm dan terdapat benjolan pada bagian tepi tubuh hingga 14-18 pasang.</p>','<p>(1) Menggunakan insektisida berbahan karbaril, formotion, monocrotophos atau dimetoat.&nbsp;</p><p>(2) Juga bisa memakai ekstrak jahe yang ditambahkan air dan detergen. Larutan ini kemudian disemprotkan ke tanaman</p>','dompolan.jpeg'),(5,'Tungau merah (Tetranychus cinnabarinus Boisd)','Hama ini memiliki ciri berwarna merah tua untuk betina dan hijau kekuningan untuk jantan. Pada bagian kaki dan mulutnya terdapat bercak hitam. Sementara ukurannya sendiri berkisar 0.5 mm.','Hancurkan 200 biji ketumbar lalu tambahkan 2 liter air kemudian semprotkan ke seluruh bagian tanaman pada pagi hari','tungau.jpeg'),(6,'Lalat buah Dacus (Dacus dorsalis Hend.)','<p>Lalat buah Dacus (Dacus dorsalis Hend.)</p>','<p>(1) Untuk mengendalikan hama ini bisa dengan menyemprotkan insektisida maupun memakai obat organik. Bisa pula menggunakan ekstrak selasih maupun minyak citronella.&nbsp;</p><p>(2) Caranya rajang 50 gram daun selasih lalu rendam sehari semalam. Saringlah kemudian tambah detergen dan aduk merata.&nbsp;</p><p>(3) Semprotkan cairan ini pada bagian tanaman setiap pagi atau sore hari</p>','dacus.jpeg'),(7,'Codot (Cynopterus sp)','Hewan ini akan memanjat pohon kemudian menuju buah alpukat yang telah masak untuk dimakan','Untuk mengatasi hewan ini bisa dengan menakut-nakuti codot memakai kincir angin yang diberi peluit. Codot akan terganggu dengan suara peluit dari kincir angin.','codot.jpeg'),(8,'Kumbang bubuk cabang (Xyleborus coffeae Wurth)','<p>Ciri dari kumbang ini terlihat dari warnanya coklat tua. Sementara ukurannya 1.5 mm dan bila dalam bentuk larva akan berwarna putih dengan panjang 2 mm.</p>','<p>(1) Dalam pengendaliannya salah satu cara agar tak tersebar ialah dengan membakar maupun memangkas cabang/ranting yang terserang.&nbsp;</p><p>(2) Bisa juga menggunakan insektisida berbahan aktif seperti asefat atau diazinon. Gunakan dosis 0,5-0,8 gram/liter dan Diazinon 60 EC dosis 1-2 cc/liter untuk menyemprot tanaman yang terkena hama.</p>','kumbuk.jpeg'),(9,'Antraknosa','Gejala serangan akan membuat semua bagian tanaman kecuali akar berkarat. Penyebab: timbulnya Jamur Colletotrichum gloeosporioides (Penz.) sacc.','Cara mengatasinya bisa dengan memangkas ranting dan cabang yang mati','antraknosa.jpeg'),(10,'Bercak daun atau bercak cokelat','Bercak daun atau bercak cokelat','Lakukan penyemprotan fungisida Masalgin 50 WP dengan dosis 1-2 gram/liter','bercak.jpeg'),(11,'Busuk akar dan kanker batang','Busuk akar dan kanker batang','Cara mengatasinya dengan membongkar tanaman yang terserang dengan tanaman yang baru','akar-busuk.jpeg'),(12,'Busuk buah','Gejala serangan penyakit ini ditandai dengan bercak coklat yang tidak teratur pada pangkal buah yang menjalar ke bagian buah. Kulit buah juga akan muncul benjolan kecil.','Menggunakan bubur Bordeaux dengan dosis 2-2,5 gram/liter.','buah-busuk.jpeg');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat`
--

DROP TABLE IF EXISTS `riwayat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `penyakit` text NOT NULL,
  `gejala` text NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `hasil_nilai` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat`
--

LOCK TABLES `riwayat` WRITE;
/*!40000 ALTER TABLE `riwayat` DISABLE KEYS */;
INSERT INTO `riwayat` VALUES (1,'2022-07-14','a:3:{i:3;s:6:\"0.4000\";i:1;s:6:\"0.1600\";i:2;s:6:\"0.1600\";}','a:3:{i:1;s:1:\"2\";i:2;s:1:\"4\";i:3;s:1:\"1\";}',3,'0.4000'),(3,'2022-07-16','a:1:{i:7;s:6:\"0.5000\";}','a:2:{i:6;s:1:\"7\";i:7;s:1:\"1\";}',7,'0.5000'),(4,'2022-07-16','a:2:{i:2;s:6:\"0.4000\";i:1;s:6:\"0.2000\";}','a:3:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"5\";}',2,'0.4000'),(5,'2022-07-16','a:3:{i:12;s:6:\"0.4000\";i:9;s:6:\"0.2400\";i:11;s:6:\"0.2000\";}','a:3:{i:9;s:1:\"3\";i:11;s:1:\"1\";i:12;s:1:\"1\";}',12,'0.4000'),(6,'2022-07-16','a:2:{i:12;s:6:\"0.4000\";i:8;s:6:\"0.1600\";}','a:3:{i:8;s:1:\"2\";i:12;s:1:\"1\";i:13;s:1:\"1\";}',12,'0.4000'),(9,'2022-07-16','a:2:{i:3;s:6:\"0.4000\";i:1;s:6:\"0.0800\";}','a:3:{i:1;s:1:\"4\";i:2;s:1:\"9\";i:3;s:1:\"1\";}',3,'0.4000'),(10,'2022-07-16','a:9:{i:7;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:9;s:6:\"0.3200\";i:4;s:6:\"0.2400\";i:1;s:6:\"0.2000\";i:10;s:6:\"0.2000\";i:3;s:6:\"0.1600\";i:8;s:6:\"0.1600\";i:12;s:6:\"0.1600\";}','a:22:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"4\";i:4;s:1:\"2\";i:5;s:1:\"9\";i:6;s:1:\"6\";i:7;s:1:\"1\";i:8;s:1:\"2\";i:9;s:1:\"2\";i:10;s:1:\"1\";i:11;s:1:\"6\";i:12;s:1:\"4\";i:13;s:1:\"6\";i:14;s:1:\"2\";i:15;s:1:\"6\";i:16;s:1:\"1\";i:17;s:1:\"9\";i:18;s:1:\"6\";i:19;s:1:\"6\";i:20;s:1:\"3\";i:21;s:1:\"7\";i:22;s:1:\"2\";}',7,'0.5000'),(11,'2022-07-19','a:6:{i:7;s:6:\"0.4000\";i:2;s:6:\"0.3200\";i:12;s:6:\"0.3200\";i:4;s:6:\"0.3000\";i:1;s:6:\"0.2000\";i:8;s:6:\"0.1600\";}','a:21:{i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"5\";i:4;s:1:\"1\";i:5;s:1:\"9\";i:6;s:1:\"7\";i:7;s:1:\"2\";i:8;s:1:\"2\";i:10;s:1:\"7\";i:11;s:1:\"7\";i:12;s:1:\"2\";i:13;s:1:\"2\";i:14;s:1:\"4\";i:15;s:1:\"7\";i:16;s:1:\"5\";i:17;s:1:\"1\";i:18;s:1:\"3\";i:19;s:1:\"2\";i:20;s:1:\"7\";i:21;s:1:\"4\";i:22;s:1:\"2\";}',7,'0.4000'),(12,'2022-07-19','a:3:{i:2;s:6:\"0.3200\";i:1;s:6:\"0.2000\";i:3;s:6:\"0.1600\";}','a:3:{i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"4\";}',2,'0.3200');
/*!40000 ALTER TABLE `riwayat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User Admin','admin','21232f297a57a5a743894a0e4a801fc3','Admin'),(2,'User Pakar','pakar','87b7cf2448de01f22b0c016b272f2ec0','Pakar'),(3,'Fajri firdaus','fajri','437eb04136c59d226f14527f52726341','Admin'),(24,'User Admin','admin','d41d8cd98f00b204e9800998ecf8427e','Admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-29 14:30:42
