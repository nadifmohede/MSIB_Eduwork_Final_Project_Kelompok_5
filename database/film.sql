-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 08:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktor`
--

CREATE TABLE `aktor` (
  `id_aktor` int(10) NOT NULL,
  `file_gambar` varchar(50) NOT NULL,
  `nama_aktor` char(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `negara_asal` varchar(20) NOT NULL,
  `biografi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktor`
--

INSERT INTO `aktor` (`id_aktor`, `file_gambar`, `nama_aktor`, `tanggal_lahir`, `jenis_kelamin`, `negara_asal`, `biografi`) VALUES
(5, 'scarlett-johansson.jpg', 'Scarlett Johansson', '1984-11-22', 'wanita', 'Amerika', 'Scarlett Johansson adalah seorang aktris dan penyanyi Amerika yang lahir pada tanggal 22 November 1984 di Kota New York. Dia telah menjadi salah satu bintang paling berpengaruh dan dihormati di industri hiburan. Johansson mulai berakting sejak usia muda dan mendapatkan peran pertamanya dalam film \"North\" pada tahun 1994. Namun, puncak karirnya datang pada tahun 2003 ketika ia membintangi film \"Lost in Translation\" yang disutradarai oleh Sofia Coppola.\r\n\r\nPenampilan Johansson dalam \"Lost in Translation\" memenangkan pujian kritis yang luas dan meraih nominasi Academy Award pertamanya. Sejak itu, dia terus membuktikan bakatnya yang serbaguna dalam berbagai genre film. Dia telah memerankan karakter yang beragam, mulai dari aksi dan superhero sebagai Black Widow dalam Marvel Cinematic Universe (MCU), seperti dalam film-film \"Iron Man 2\" (2010), \"The Avengers\" (2012), \"Captain America: The Winter Soldier\" (2014), hingga film solo Black Widow yang dirilis pada tahun 2021.\r\n\r\nSelain menjadi Black Widow, Johansson juga membintangi berbagai film yang mencakup berbagai genre, termasuk drama seperti \"Match Point\" (2005), \"Vicky Cristina Barcelona\" (2008), dan \"Marriage Story\" (2019), di mana dia meraih nominasi Academy Award kedua. Dia juga terlibat dalam film aksi seperti \"Lucy\" (2014) dan \"Ghost in the Shell\" (2017), serta film komedi seperti \"The Nanny Diaries\" (2007) dan \"Jojo Rabbit\" (2019).\r\n\r\nSelain karir aktingnya, Johansson juga memiliki bakat dalam musik. Dia merilis album debutnya, \"Anywhere I Lay My Head\", pada tahun 2008 yang menampilkan versi ulang lagu-lagu Tom Waits. Johansson juga menjadi vokalis dalam proyek musik yang disebut \"The Singles\" pada tahun 2015.\r\n\r\nScarlett Johansson telah menerima berbagai penghargaan selama kariernya, termasuk BAFTA dan Tony Award. Dia dikenal karena kehadiran panggungnya yang kuat, daya tariknya yang mengagumkan, dan kemampuan aktingnya yang luar biasa. Selain menjadi seorang artis, Johansson juga aktif dalam advokasi sosial dan merupakan pendukung hak-hak perempuan. Dia adalah salah satu aktris paling berpengaruh dan disegani di industri hiburan, yang terus mengukir prestasi yang mengesankan dalam film-filmnya.'),
(6, 'robert-downey-jr.webp', 'Robert Downey Jr', '1965-04-04', 'pria', 'Amerika', 'Robert Downey Jr. adalah seorang aktor Amerika yang lahir pada tanggal 4 April 1965 di Manhattan, New York. Ia merupakan salah satu aktor terkemuka di Hollywood dan telah mencatatkan sejarah panjang dalam industri hiburan. Downey tumbuh dalam keluarga yang terkait dengan dunia perfilman, dengan ayahnya yang merupakan sutradara terkenal.\r\n\r\nDowney memulai karir aktingnya pada usia muda dengan tampil dalam film-film seperti \"Weird Science\" (1985) dan \"Less Than Zero\" (1987). Namun, ia mengalami periode kegelisahan pribadi dan masalah narkoba yang memengaruhi karirnya. Meskipun begitu, ia berhasil bangkit kembali dan memperoleh pengakuan atas bakat aktingnya yang luar biasa.\r\n\r\nPeran yang paling ikonis dalam karir Robert Downey Jr. adalah sebagai Tony Stark atau Iron Man dalam Marvel Cinematic Universe (MCU). Ia memulai peran ini dalam film \"Iron Man\" pada tahun 2008 dan melanjutkannya dalam beberapa film MCU lainnya, termasuk \"The Avengers\" (2012), \"Iron Man 3\" (2013), \"Avengers: Endgame\" (2019), dan banyak lagi. Penampilannya sebagai Tony Stark tidak hanya mendapatkan pujian kritis, tetapi juga mengokohkan posisinya sebagai salah satu aktor paling disukai dan dihormati di dunia.\r\n\r\nSelain perannya dalam MCU, Robert Downey Jr. juga telah membintangi berbagai film yang beragam dalam genre. Dia membawa kehidupan pada karakter-karakter seperti Sherlock Holmes dalam film \"Sherlock Holmes\" (2009) dan \"Sherlock Holmes: A Game of Shadows\" (2011), serta Charlie Chaplin dalam film \"Chaplin\" (1992), yang membawanya meraih nominasi Academy Award pertamanya.\r\n\r\nRobert Downey Jr. telah menerima banyak penghargaan dan pengakuan selama kariernya, termasuk tiga nominasi Academy Award. Selain keterampilan aktingnya yang luar biasa, dia juga dikenal dengan karisma dan kehadiran panggung yang kuat. Downey juga aktif dalam upaya amal dan telah terlibat dalam beberapa organisasi yang bekerja untuk kesejahteraan anak-anak dan lingkungan. Robert Downey Jr. merupakan sosok yang inspiratif, menginspirasi banyak orang dengan perjalanan hidupnya yang penuh lika-liku dan keberhasilannya dalam membangkitkan kembali karirnya.'),
(9, 'Australian-actor-Chris-Hemsworth-2019.webp', 'Chris Hemsworth', '1983-08-11', 'pria', 'Australia', 'Chris Hemsworth adalah seorang aktor Australia yang lahir pada tanggal 11 Agustus 1983 di Melbourne, Victoria. Ia dikenal secara luas sebagai pemeran Thor, dewa petir dalam Marvel Cinematic Universe (MCU). Hemsworth memulai kariernya di industri hiburan Australia dengan tampil dalam beberapa serial televisi sebelum akhirnya mendapatkan peran yang memperkenalkannya ke dunia internasional.\r\n\r\nPada tahun 2011, Chris Hemsworth meraih peran yang membawa namanya ke puncak popularitasnya dalam film \"Thor\" yang disutradarai oleh Kenneth Branagh. Penampilannya yang kuat dan karismatik sebagai dewa Norse tersebut membuatnya menjadi favorit penggemar dan menjadikannya salah satu wajah utama MCU. Hemsworth kembali memerankan karakter Thor dalam beberapa film MCU lainnya seperti \"The Avengers\" (2012), \"Thor: The Dark World\" (2013), \"Thor: Ragnarok\" (2017), dan \"Avengers: Endgame\" (2019).\r\n\r\nSelain menjadi Thor, Chris Hemsworth juga telah membintangi berbagai genre film. Ia tampil dalam film aksi seperti \"Blackhat\" (2015), \"Extraction\" (2020), dan \"Men in Black: International\" (2019). Hemsworth juga menunjukkan kemampuan aktingnya yang serbaguna dengan berperan dalam film drama seperti \"Rush\" (2013) dan \"In the Heart of the Sea\" (2015). Dia juga membawakan komedi dalam film \"Ghostbusters\" (2016) dan \"Vacation\" (2015).\r\n\r\nChris Hemsworth telah menerima banyak penghargaan dan pujian atas kualitas aktingnya. Dia dianggap sebagai salah satu aktor paling menarik dan berbakat di Hollywood. Selain bakat aktingnya, Hemsworth juga dikenal dengan fisik yang kuat dan peranannya dalam film-film aksi. Di luar layar, ia adalah seorang keluarga yang berdedikasi dan aktif dalam kegiatan amal. Chris Hemsworth telah mencapai kesuksesan besar dalam karirnya dan terus memperluas cakupan keterlibatannya dalam industri hiburan.'),
(10, 'chris-evans.jpg', 'Chris Evans', '1981-06-13', 'pria', 'Amerika', 'Chris Evans adalah seorang aktor dan sutradara Amerika yang lahir pada tanggal 13 Juni 1981 di Sudbury, Massachusetts. Ia dikenal luas sebagai pemeran karakter Steve Rogers atau Captain America dalam Marvel Cinematic Universe (MCU). Evans mulai meniti karirnya di dunia hiburan sebagai aktor pada awal 2000-an dengan peran-peran kecil dalam beberapa serial televisi dan film.\r\n\r\nPada tahun 2011, Chris Evans meraih peran yang menjadi puncak kesuksesannya dalam film \"Captain America: The First Avenger\". Penampilannya yang karismatik dan kemampuan aktingnya yang memukau membawa karakter Steve Rogers menjadi salah satu ikon paling diingat dari MCU. Evans kemudian membintangi beberapa film MCU lainnya, termasuk \"The Avengers\" (2012), \"Captain America: The Winter Soldier\" (2014), \"Captain America: Civil War\" (2016), dan \"Avengers: Endgame\" (2019).\r\n\r\nSelain menjadi Captain America, Chris Evans juga tampil dalam berbagai genre film yang berbeda. Ia membintangi film drama seperti \"Gifted\" (2017) dan \"Snowpiercer\" (2013), serta film aksi seperti \"Scott Pilgrim vs. the World\" (2010) dan \"The Losers\" (2010). Evans juga memperluas bakatnya dengan menjadi sutradara dalam film \"Before We Go\" (2014) dan \"Defending Jacob\" (2020), sebuah seri televisi.\r\n\r\nSelama kariernya, Chris Evans telah menerima banyak penghargaan dan pujian atas kualitas aktingnya. Ia dikenal sebagai aktor yang penuh dedikasi dan profesionalisme. Selain dunia hiburan, Evans juga terlibat dalam kegiatan amal dan berbagai upaya filantropi, termasuk mendukung organisasi yang berfokus pada pendidikan, kesehatan mental, dan veteran. Chris Evans merupakan sosok yang dihormati dalam industri perfilman dan dikenal luas sebagai salah satu aktor paling ikonik dan disegani di Hollywood.');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(10) NOT NULL,
  `file_poster` varchar(100) NOT NULL,
  `id_sutradara` int(10) NOT NULL,
  `id_genre` int(10) NOT NULL,
  `judul_film` char(50) NOT NULL,
  `sinopsis` text NOT NULL,
  `tahun_rilis` int(5) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `rating_umur` enum('G','PG','PG-13','R') NOT NULL,
  `durasi_film` int(5) NOT NULL,
  `link_trailer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `file_poster`, `id_sutradara`, `id_genre`, `judul_film`, `sinopsis`, `tahun_rilis`, `tanggal_rilis`, `rating_umur`, `durasi_film`, `link_trailer`) VALUES
(1, 'avengers-age-of-ultron.jpg', 1, 1, 'Avengers: Age of Ultron', 'Tony Stark membangun sistem kecerdasan buatan bernama Ultron dengan bantuan Bruce Banner. Namun, Ultron mengambil alih kendali dan Avengers harus menghentikannya sebelum memusnahkan umat manusia.', 2015, '2015-05-01', 'PG-13', 141, 'https://www.youtube.com/embed/tmeOjFno6Do'),
(19, 'avengers-infinity-war.png', 7, 1, 'Avengers: Infinity War', 'Para Avengers dan sekutu-sekutunya harus siap mengorbankan segalanya dalam upaya untuk mengalahkan Thanos yang kuat sebelum serangan dahsyat dan kehancurannya mengakhiri alam semesta.', 2018, '2018-04-23', 'PG-13', 149, 'https://www.youtube.com/embed/6ZfuNTqbHE8'),
(20, 'avengers-endgame.png', 7, 1, 'Avengers: Endgame', 'Setelah peristiwa menghancurkan Avengers: Infinity War (2018), alam semesta berada dalam kehancuran. Dengan bantuan sekutu yang tersisa, para Avengers berkumpul sekali lagi untuk membalikkan tindakan Thanos dan mengembalikan keseimbangan dalam alam semesta.', 2019, '2019-04-22', 'PG-13', 181, 'https://www.youtube.com/embed/TcMBFSGVi1c');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(10) NOT NULL,
  `judul_genre` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `judul_genre`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Horror'),
(4, 'Thriller'),
(5, 'Drama'),
(6, 'Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_film` int(10) NOT NULL,
  `id_reviewer` int(10) NOT NULL,
  `rating` float NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_film`, `id_reviewer`, `rating`, `isi_komentar`) VALUES
(5, 1, 4, 4.5, 'Mantap filmnya'),
(6, 1, 5, 4.2, 'Oke juga ya filmnya'),
(7, 1, 6, 4.8, 'Scene actionnya keren semua, top deh buat filmnya'),
(8, 19, 4, 4.2, 'Oke banget filmnya'),
(9, 19, 5, 4.7, 'Asli keren banget filmnya'),
(10, 20, 6, 5, 'Penutupan era MCU yang keren banget...');

-- --------------------------------------------------------

--
-- Table structure for table `pemeran`
--

CREATE TABLE `pemeran` (
  `id_pemeran` int(10) NOT NULL,
  `id_aktor` int(10) NOT NULL,
  `id_film` int(10) NOT NULL,
  `peran` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemeran`
--

INSERT INTO `pemeran` (`id_pemeran`, `id_aktor`, `id_film`, `peran`) VALUES
(3, 5, 1, 'Natasha Romanoff (Black Widow)'),
(4, 6, 1, 'Tony Stark (Iron Man)'),
(5, 9, 1, 'Thor'),
(6, 10, 1, 'Steve Rogers (Captain America)'),
(7, 5, 19, 'Natasha Romanoff (Black Widow)'),
(8, 6, 19, 'Tony Stark (Iron Man)'),
(9, 9, 19, 'Thor'),
(10, 10, 19, 'Steve Rogers (Captain America)'),
(11, 5, 20, 'Natasha Romanoff (Black Widow)'),
(12, 6, 20, 'Tony Stark (Iron Man)'),
(13, 9, 20, 'Thor'),
(14, 10, 20, 'Steve Rogers (Captain America)');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(10) NOT NULL,
  `id_film` int(10) NOT NULL,
  `nilai_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id_reviewer` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_reviewer` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id_reviewer`, `id_user`, `nama_reviewer`) VALUES
(4, 12, 'Andhita Bagas'),
(5, 11, 'Deby Setianengsih'),
(6, 10, 'Syahrul Yuda');

-- --------------------------------------------------------

--
-- Table structure for table `sutradara`
--

CREATE TABLE `sutradara` (
  `id_sutradara` int(10) NOT NULL,
  `nama_sutradara` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sutradara`
--

INSERT INTO `sutradara` (`id_sutradara`, `nama_sutradara`) VALUES
(1, 'Joss Whedon'),
(2, 'Angga Dwi Sasongko'),
(4, 'Whedon'),
(5, 'Joss'),
(6, 'chrsitopher nolan'),
(7, 'Anthony Russo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `confirm_password` varchar(1000) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `confirm_password`, `nama`, `level`) VALUES
(9, 'nadifmohede', '$2y$10$pXS.lZv0MrVm/uabUcwUM.ZOwSrgoe6UfyWv2jrOGQsCjS62dHG5O', '$2y$10$wooV9/sIAE3dvce.LGVntuQpdaUKGFlqZYusIPYiyiYOl6VR8JJPy', 'Nadif Rayhan Julio Mohede', 'admin'),
(10, 'syahrulyuda', '$2y$10$sJqYE5IO9ZTMehAO3p8B3u5mBhWZDvHntTH4hIfFui.GWw3OYwUVu', '$2y$10$ECmWcwWaNSQRtb.y7U.t/OJCbR5Xgt1MNy5CDvXV/bm5rElcuJt86', 'Syahrul Yuda', 'user'),
(11, 'debydeby', '$2y$10$NRG/.z/c9p2sdmn20Q0kRO6YxQrGA4EICLJ2v2Sj1RTI67s.o8.u6', '$2y$10$EMXhaaY8XZLboYIKE5GU0eQFjg43b3yYY65k4jd2l8LWOGVLLMG0y', 'Deby Setianengsih', 'user'),
(12, 'andhitabagas', '$2y$10$Uq7jO.ATiG/MR5WOPvjJr.yDBrlPck14tdjfgZ09kNc9T//syLxw6', '$2y$10$9r/bEuk.zUmz/SxbtzCml.lJdiq/KKhywkI4IV5T226njf3YZ7tha', 'Andhita Bagas', 'user'),
(13, 'rayhanjulio', '$2y$10$pHlNXH6QrriD0wNYrlxS2OdCePOWPJLkamwbvTMt8X/qTRUGwxUzi', '$2y$10$Bv.HjU6oDLmB8IiWkTocROcZSmJH8cgM/KB4qYfu2tw2RbFKgS1pS', 'Rayhan Julio', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktor`
--
ALTER TABLE `aktor`
  ADD PRIMARY KEY (`id_aktor`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_sutradara` (`id_sutradara`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_reviewer` (`id_reviewer`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `pemeran`
--
ALTER TABLE `pemeran`
  ADD PRIMARY KEY (`id_pemeran`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_aktor` (`id_aktor`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id_reviewer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `sutradara`
--
ALTER TABLE `sutradara`
  ADD PRIMARY KEY (`id_sutradara`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktor`
--
ALTER TABLE `aktor`
  MODIFY `id_aktor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemeran`
--
ALTER TABLE `pemeran`
  MODIFY `id_pemeran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id_reviewer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sutradara`
--
ALTER TABLE `sutradara`
  MODIFY `id_sutradara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`),
  ADD CONSTRAINT `film_ibfk_3` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_reviewer`) REFERENCES `reviewer` (`id_reviewer`),
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `pemeran`
--
ALTER TABLE `pemeran`
  ADD CONSTRAINT `pemeran_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `pemeran_ibfk_2` FOREIGN KEY (`id_aktor`) REFERENCES `aktor` (`id_aktor`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD CONSTRAINT `reviewer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
