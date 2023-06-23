<?php 
session_start();
include('./database/koneksi.php');
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

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html lang="en" class="no-js">
<!-- moviesingle07:38-->

<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="profile" href="#" />

    <!--Google Font-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600" />
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone-no" />

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</head>

<body>
    <?php include './components/nav.php' ?>

    <div class="hero mv-single-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-single movie-single movie_single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-4 col-sm-12 col-xs-12">
                <?php
                $id_film = $_GET['id_film'];
                $data_film = mysqli_query($koneksi, "SELECT film.id_film, film.file_poster, sutradara.nama_sutradara, genre.judul_genre, judul_film, sinopsis, tahun_rilis, tanggal_rilis, durasi_film, link_trailer, rating_umur, (SELECT AVG(rating) FROM komentar WHERE id_film = film.id_film) AS average_rating, aktor.id_aktor, aktor.file_gambar, aktor.nama_aktor, pemeran.peran, komentar.isi_komentar, reviewer.nama_reviewer
                                FROM film
                                JOIN genre ON film.id_genre = genre.id_genre
                                JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
                                JOIN pemeran ON film.id_film = pemeran.id_film
                                JOIN aktor ON pemeran.id_aktor = aktor.id_aktor
                                JOIN komentar ON film.id_film = komentar.id_film
                                JOIN reviewer ON komentar.id_reviewer = reviewer.id_reviewer
                                WHERE film.id_film = $id_film;");

                $films = array();
                $aktor_ids = array(); // Array untuk menyimpan ID aktor yang sudah ditambahkan

                while ($film = mysqli_fetch_array($data_film)) {
                    $film_id = $film['id_film'];
                    $average_rating = isset($film['average_rating']) ? round($film['average_rating'], 1) : 0;

                    // Jika film belum ada dalam array $films, tambahkan film baru
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
                            'isi_komentar' => $film['isi_komentar'],
                            'nama_reviewer' => $film['nama_reviewer'],
                            'link_trailer' => $film['link_trailer'],
                            'aktor' => array() // Inisialisasi array untuk menyimpan aktor
                        );
                    }

                    // Tambahkan aktor ke subarray aktor film yang terkait
                    // Cek apakah aktor sudah ada dalam array
                    if (!isset($aktor_ids[$film['id_aktor']])) {
                        // Tambahkan aktor ke array aktor film
                        $films[$film_id]['aktor'][] = array(
                            'id_aktor' => $film['id_aktor'],
                            'nama_aktor' => $film['nama_aktor'],
                            'file_gambar' => $film['file_gambar'],
                            'peran' => $film['peran']
                        );
                        // Tandai aktor sebagai sudah ditambahkan dengan menambahkannya ke array aktor_ids
                        $aktor_ids[$film['id_aktor']] = true;
                    }
                }

                foreach ($films as $film) {
                ?>
                    <div class="movie-img sticky-sb">
                        <img src="../final_project/images/poster/<?php echo $film['file_poster'] ?>" alt="" />
                        <div class="movie-btn">
                            <div class="btn-transform transform-vertical red">
                                <div>
                                    <a href="#" class="item item-1 redbtn">
                                        <i class="ion-play"></i> Watch Trailer</a>
                                </div>
                                <div>
                                    <a href="<?php echo $film['link_trailer'] ?>" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">
                        <?php echo $film['judul_film'] ?> <span><?php echo $film['tahun_rilis'] ?></span>
                        </h1>
                        <div class="social-btn">
                            <div class="hover-bnt">
                                <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                <div class="hvr-item">
                                    <a href="facebook.com" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                    <a href="twitter.com" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                    <a href="youtube.com" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p>
                                    <span> <?php echo $film['rating'] ?></span> /5<br />
                                </p>
                            </div>
                            <div class="rate-star">
                                <p>This Movie Rate:</p>
                                <?php
                                $rating = $film['rating'];
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<i class="ion-ios-star"></i>';
                                    } else {
                                        echo '<i class="ion-ios-star-outline"></i>';
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview"> Overview</a></li>
                                    <li><a href="#reviews"> Review</a></li>
                                    <li><a href="#cast"> Cast & Director</a></li>
                                    <li><a href="#moviesrelated"> Related Movies</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p>
                                                <?php echo $film['sinopsis']?>
                                                </p>
                                                <div class="title-hd-sm">
                                                    <h4>cast</h4>
                                                </div>
                                                <!-- movie cast -->
                                                <div class="mvcast-item">
                                                    <?php foreach ($film['aktor'] as $aktor) { ?>
                                                        <div class="cast-it">
                                                            <div class="cast-left">
                                                                <img src="../final_project/images/aktor/<?php echo $aktor['file_gambar'] ?>" style="width: 42px; height: auto;" />
                                                                <a href="celebritysingle.php?id_aktor=<?php echo $aktor['id_aktor']?>"><?php echo $aktor['nama_aktor']?></a>
                                                            </div>
                                                            <p>... <?php echo $aktor['peran'] ?></p>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>Director:</h6>
                                                    <p><a href="#"><?php echo $film['nama_sutradara'] ?></a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Stars:</h6>
                                                    <p>
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

                                                <div class="sb-it">
                                                    <h6>Genres:</h6>
                                                    <p>
                                                        <?php echo $film['judul_genre'] ?>
                                                    </p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Release Date:</h6>
                                                    <p><?php echo date('d-m-Y', strtotime($film["tanggal_rilis"])); ?></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Run Time:</h6>
                                                    <p><?php echo $film['durasi_film'] ?></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>MMPA Rating:</h6>
                                                    <p><?php echo $film['rating_umur'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="reviews" class="tab review">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div class="div">
                                                    <h3>Reviews To</h3>
                                                    <h2><?php echo $film['judul_film'] ?></h2>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModalCenter" style="margin-right: 30px;" class="redbtn">Write Review</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Review <?php echo $film['judul_film'] ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="./proses/tambah_review.php?id_film=<?php echo $id_film ?>" method="post">
                                                            <div class="form-group">
                                                                <label>Rating:</label>
                                                                <input type="number" class="form-control" name="rating" step="0.1" min="1" max="5" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Review:</label>
                                                                <textarea class="form-control" name="isi_komentar" rows="5" required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <?php
                                                $id_film = $_GET['id_film'];
                                                $query = mysqli_query($koneksi, "SELECT reviewer.nama_reviewer, komentar.id_komentar, komentar.isi_komentar, komentar.rating, film.id_film FROM reviewer JOIN komentar ON reviewer.id_reviewer = komentar.id_reviewer JOIN film ON komentar.id_film = film.id_film
                                                WHERE film.id_film = '$id_film' ORDER BY id_komentar ASC;");
                                                while ($review = mysqli_fetch_array($query)) {
                                                    $nama_reviewer = $review['nama_reviewer'];
                                                    $isi_komentar = $review['isi_komentar'];
                                                    $rating_user = $review['rating'];
                                            ?>
                                            <div class="mv-user-review-item">
                                                <div class="user-infor">
                                                    <img src="images/uploads/user-blank.webp" style="width: 44px;"/>
                                                    <div>
                                                        <div class="no-star">
                                                            <i class="ion-android-star"></i>
                                                            <span><?php echo $rating_user ?></span>
                                                        </div>
                                                        <p class="time">
                                                            Review by <a href="#"> <?php echo $nama_reviewer ?></a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>
                                                    <?php echo $isi_komentar ?>
                                                </p>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!-- Cast Start -->
                                    <div id="cast" class="tab">
                                        <div class="row">
                                            <h3>Cast & Director of</h3>
                                            <h2><?php echo $film['judul_film'] ?></h2>
                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4>Director</h4>
                                            </div>
                                            <div class="mvcast-item">
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <?php
                                                        $nama_sutradara = $film['nama_sutradara'];
                                                        $kata = explode(' ', $nama_sutradara); // Memisahkan kata-kata dalam nama sutradara
                                                        $inisial = '';
                                                        foreach ($kata as $k) {
                                                            $inisial .= strtoupper(substr($k, 0, 1)); // Menambahkan huruf inisial ke variabel
                                                        }
                                                        echo '<h4>' . $inisial . '</h4>'; // Menampilkan huruf inisial secara berdekatan
                                                        ?>
                                                        <a href=""><?php echo $nama_sutradara ?></a>
                                                    </div>
                                                    <p>... Director</p>
                                                </div>
                                            </div>
                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4>Cast</h4>
                                            </div>
                                                <div class="mvcast-item">
                                                    <?php
                                                    foreach ($film['aktor'] as $aktor) {
                                                        ?>
                                                        <div class="cast-it">
                                                            <div class="cast-left">
                                                                <img src="../final_project/images/aktor/<?php echo $aktor['file_gambar'] ?>" style="width: 42px; height: auto;" />
                                                                <a href="celebritysingle.php?id_aktor=<?php echo $aktor['id_aktor']?>"><?php echo $aktor['nama_aktor']?></a>
                                                            </div>
                                                            <p>... <?php echo $aktor['peran'] ?></p>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            <!-- //== -->
                                        </div>
                                    </div>
                                    <!-- Cast End -->
                                    
                                    <!-- Related Movies Start -->
                                    <div id="moviesrelated" class="tab">
                                        <div class="row">
                                            <h3>Related Movies To</h3>
                                            <h2><?php echo $film['judul_film'] ?></h2>

                                            <?php
                                            // Ambil genre film yang sedang ditampilkan
                                            $genre = $film['judul_genre'];

                                            // Query untuk mengambil film dengan genre yang sama, kecuali film yang sedang ditampilkan
                                            $query_related = mysqli_query($koneksi, "SELECT film.id_film, film.judul_film, film.tanggal_rilis, film.tahun_rilis, film.sinopsis, film.durasi_film, film.rating_umur, film.file_poster, sutradara.nama_sutradara, (SELECT AVG(komentar.rating) FROM komentar WHERE komentar.id_film = film.id_film) AS average_rating
                                            FROM film
                                            JOIN genre ON film.id_genre = genre.id_genre
                                            JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
                                            WHERE genre.judul_genre = '$genre' AND film.id_film != $id_film
                                            LIMIT 4");
                                        
                                            

                                            while ($related_film = mysqli_fetch_array($query_related)) {
                                                // Cetak data film yang berkaitan
                                                ?>
                                                <div class="movie-item-style-2">
                                                    <img src="../final_project/images/poster/<?php echo $related_film['file_poster'] ?>" style="width: 200px;" />
                                                    <div class="mv-item-infor">
                                                        <h6><a href="moviesingle.php?id_film=<?php echo $related_film['id_film'] ?>"><?php echo $related_film['judul_film'] ?> <span>(<?php echo $related_film['tahun_rilis'] ?>)</span></a></h6>
                                                        <p class="rate"><i class="ion-android-star"></i><span><?php echo number_format($related_film['average_rating'], 1) ?></span> /5</p>
                                                        <p class="describe"><?php echo $related_film['sinopsis'] ?></p>
                                                        <p class="run-time">Run Time: <?php echo $related_film['durasi_film'] ?> Minute . <span>MMPA: <?php echo $related_film['rating_umur'] ?></span> . <span>Release: <?php echo date('d-m-Y', strtotime($related_film["tanggal_rilis"])); ?></span></p>
                                                        <p>Director: <a href="#"><?php echo $related_film['nama_sutradara'] ?></a></p>
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
                                    <!-- Related Movies End -->


                                </div>
                            </div>
                        </div>
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

<!-- moviesingle11:03-->

</html>