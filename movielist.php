<?php
session_start();
include('../final_project/database/koneksi.php');
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- movielist07:38-->

<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <?php include './components/navbar.php' ?>

    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Movie List</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> List Film</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT COUNT(judul_film) AS jumlah_film FROM film; ");
                        while ($data = mysqli_fetch_array($sql)) {
                            $jumlah_film = $data['jumlah_film'];
                        ?>
                            <p>Found <span><?php echo $jumlah_film ?> movies</span> in total</p>
                        <?php } ?>
                        <label>Filter by:</label>
                        <select name="id_genre" class="form-control">
                            <option disabled selected>-- All Genre --</option>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT id_genre, judul_genre FROM genre ORDER BY judul_genre ASC");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['id_genre'] ?>">
                                    <?= $data['judul_genre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <?php
                    function calculateAverageRating($filmId)
                    {
                        global $koneksi;

                        // Mengambil data rating dari tabel database
                        $query = "SELECT AVG(rating) AS average_rating FROM komentar WHERE id_film = $filmId";
                        $result = mysqli_query($koneksi, $query);
                        $row = mysqli_fetch_assoc($result);

                        // Mengembalikan nilai rata-rata rating
                        return round($row['average_rating'], 1);
                    }


                    $data_film = mysqli_query($koneksi, "SELECT film.id_film, film.file_poster, sutradara.nama_sutradara, genre.judul_genre, aktor.nama_aktor, judul_film, sinopsis, tahun_rilis, tanggal_rilis, durasi_film, rating_umur,
                    (SELECT AVG(rating) FROM komentar WHERE id_film = film.id_film) AS average_rating
                    FROM film
                    JOIN genre ON film.id_genre = genre.id_genre
                    JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
                    JOIN pemeran ON film.id_film = pemeran.id_film
                    JOIN aktor ON pemeran.id_aktor = aktor.id_aktor;");

                    $films = array();
                    while ($film = mysqli_fetch_array($data_film)) {
                        $film_id = $film['id_film'];
                        $average_rating = isset($film['average_rating']) ? round($film['average_rating'], 1) : 0;
                        if (!isset($films[$film_id])) {
                            $films[$film_id] = array(
                                'id_film' => $film['id_film'],
                                'judul_film' => $film['judul_film'],
                                'judul_genre' => $film['judul_genre'],
                                'tahun_rilis' => $film['tahun_rilis'],
                                'sinopsis' => $film['sinopsis'],
                                'durasi_film' => $film['durasi_film'],
                                'rating_umur' => $film['rating_umur'],
                                'rating' => $average_rating,
                                'tanggal_rilis' => $film['tanggal_rilis'],
                                'nama_sutradara' => $film['nama_sutradara'],
                                'file_poster' => $film['file_poster'],
                                'aktor' => array(array('id_aktor' => $film['id_aktor'], 'nama_aktor' => $film['nama_aktor'])) // Menggunakan array terpisah untuk menyimpan link dan nama aktor
                            );
                        } else {
                            $films[$film_id]['aktor'][] = array('id_aktor' => $film['id_aktor'], 'nama_aktor' => $film['nama_aktor']); // Menambahkan link dan nama aktor
                        }
                    }


                    foreach ($films as $film) {
                    ?>

                        <div class="movie-item-style-2">
                            <img src="../final_project/images/poster/<?php echo $film['file_poster'] ?>" style="width: 225px;">
                            <div class="mv-item-infor">
                                <h6><a href="moviesingle.php?id_film=<?php echo $film['id_film'] ?>"><?php echo $film['judul_film'] ?><span> (<?php echo $film['tahun_rilis'] ?>)</span></a></h6>
                                <p class="rate"><i class="ion-android-star"></i><span><?php echo $film['rating'] ?></span> /5</p>
                                <p class="describe"><?php echo substr($film['sinopsis'], 0, 75) . " [...]" ?></p>
                                <p class="run-time"> Run Time: <?php echo $film['durasi_film'] ?> Minute <span>MMPA: <?php echo $film['rating_umur'] ?> </span> <span>Release: <?php echo date('d-m-Y', strtotime($film["tanggal_rilis"])); ?></span></p>
                                <p>Genre: <?php echo $film['judul_genre'] ?></p>
                                <p>Director: <?php echo $film['nama_sutradara'] ?></p>
                                <p>Stars:
                                    <?php
                                    $uniqueActors = array_unique($film['aktor'], SORT_REGULAR); // Menghapus elemen aktor yang duplikat
                                    foreach ($uniqueActors as $aktor) {
                                    ?>
                                        <a href="celebritysingle.php?id_aktor=<?php echo $aktor['id_aktor'] ?>"><?php echo $aktor['nama_aktor'] ?>, </a>
                                    <?php
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php

                function searchFilms($keyword, $genre, $fromYear, $toYear, $sort)
                {
                    global $koneksi;

                    // Query dasar untuk mengambil data film
                    $query = "SELECT film.id_film, film.file_poster, sutradara.nama_sutradara, genre.judul_genre, aktor.nama_aktor, judul_film, sinopsis, tahun_rilis, tanggal_rilis, durasi_film, rating_umur,
                            (SELECT AVG(rating) FROM komentar WHERE id_film = film.id_film) AS average_rating
                            FROM film
                            JOIN genre ON film.id_genre = genre.id_genre
                            JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
                            JOIN pemeran ON film.id_film = pemeran.id_film
                            JOIN aktor ON pemeran.id_aktor = aktor.id_aktor
                            WHERE 1";

                    // Menambahkan filter dan kata kunci ke dalam query jika ada
                    if (!empty($keyword)) {
                        $query .= " AND judul_film LIKE '%$keyword%'";
                    }
                    if (!empty($genre)) {
                        $query .= " AND genre.judul_genre = '$genre'";
                    }
                    if (!empty($fromYear)) {
                        $query .= " AND tahun_rilis >= $fromYear";
                    }
                    if (!empty($toYear)) {
                        $query .= " AND tahun_rilis <= $toYear";
                    }

                    // Menambahkan pengurutan ke dalam query jika dipilih
                    if (!empty($sort)) {
                        if ($sort === 'rating') {
                            $query .= " ORDER BY average_rating DESC";
                        } elseif ($sort === 'year') {
                            $query .= " ORDER BY tahun_rilis DESC";
                        }
                    }

                    $data_film = mysqli_query($koneksi, $query);

                    $films = array();
                    while ($film = mysqli_fetch_array($data_film)) {
                        $film_id = $film['id_film'];
                        $average_rating = isset($film['average_rating']) ? round($film['average_rating'], 1) : 0;
                        if (!isset($films[$film_id])) {
                            $films[$film_id] = array(
                                'id_film' => $film['id_film'],
                                'judul_film' => $film['judul_film'],
                                'tahun_rilis' => $film['tahun_rilis'],
                                'sinopsis' => $film['sinopsis'],
                                'durasi_film' => $film['durasi_film'],
                                'rating_umur' => $film['rating_umur'],
                                'rating' => $average_rating,
                                'tanggal_rilis' => $film['tanggal_rilis'],
                                'nama_sutradara' => $film['nama_sutradara'],
                                'file_poster' => $film['file_poster'],
                                'aktor' => array(array('id_aktor' => $film['id_aktor'], 'nama_aktor' => $film['nama_aktor'])) // Menggunakan array terpisah untuk menyimpan link dan nama aktor
                            );
                        } else {
                            $films[$film_id]['aktor'][] = array('id_aktor' => $film['id_aktor'], 'nama_aktor' => $film['nama_aktor']); // Menambahkan link dan nama aktor
                        }
                    }

                    return $films;
                }

                // Memeriksa apakah form telah disubmit
                if (isset($_GET['submit'])) {
                    // Mendapatkan nilai dari form yang disubmit
                    $keyword = $_GET['keyword'] ?? '';
                    $genre = $_GET['genre'] ?? '';
                    $fromYear = $_GET['fromYear'] ?? '';
                    $toYear = $_GET['toYear'] ?? '';
                    $sort = $_GET['sort'] ?? '';

                    // Memanggil fungsi searchFilms untuk mendapatkan data film sesuai dengan filter dan kata kunci
                    $films = searchFilms($keyword, $genre, $fromYear, $toYear, $sort);
                } else {
                    // Jika form belum disubmit, set nilai default atau kosong
                    $films = array();
                }

                foreach ($films as $film) {
                ?>
                    <div class="movie-item-style-2">
                        <img src="../final_project/images/poster/<?php echo $film['file_poster'] ?>" style="width: 250px;">
                        <div class="mv-item-infor">
                            <h6><a href="moviesingle.php?id_film=<?php echo $film['id_film'] ?>"><?php echo $film['judul_film'] ?><span> (<?php echo $film['tahun_rilis'] ?>)</span></a></h6>
                            <p class="rate"><i class="ion-android-star"></i><span><?php echo $film['rating'] ?></span> /5</p>
                            <p class="describe"><?php echo substr($film['sinopsis'], 0, 75) . " [...]" ?></p>
                            <p class="run-time"> Run Time: <?php echo $film['durasi_film'] ?> Minute <span>MMPA: <?php echo $film['rating_umur'] ?> </span> <span>Release: <?php echo date('d-m-Y', strtotime($film["tanggal_rilis"])); ?></span></p>
                            <p>Director: <?php echo $film['nama_sutradara'] ?></p>
                            <p>Stars:
                                <?php
                                $uniqueActors = array_unique($film['aktor'], SORT_REGULAR); // Menghapus elemen aktor yang duplikat
                                foreach ($uniqueActors as $aktor) {
                                ?>
                                    <a href="celebritysingle.php?id_aktor=<?php echo $aktor['id_aktor'] ?>"><?php echo $aktor['nama_aktor'] ?>, </a>
                                <?php
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>



            </div>
        </div>
    </div>
    <!-- footer section-->
    <?php include './components/footer.php' ?>
    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>

</body>
<script>
    $(document).ready(function() {
        var yearSelect = $('select[name="fromYear"], select[name="toYear"]');
        var currentYear = new Date().getFullYear();

        for (var year = currentYear; year >= 1900; year--) {
            yearSelect.append($('<option></option>').attr('value', year).text(year));
        }
    });
</script>


<!-- movielist07:38-->

</html>