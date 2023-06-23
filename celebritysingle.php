<?php
session_start();
include('./database/koneksi.php');
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

<!-- celebritysingle12:04-->

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

</head>

<body>

    <?php include './components/nav.php' ?>

    <div class="hero hero3">
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


    <!-- celebrity single section-->
    <div class="page-single movie-single cebleb-single">
        <div class="container">
            <?php
            $id_aktor = $_GET['id_aktor'];
            $query = mysqli_query($koneksi, "SELECT * FROM aktor WHERE id_aktor = '$id_aktor';");
            while ($aktor = mysqli_fetch_array($query)){
                $id_aktor = $aktor['id_aktor'];
                $file_gambar = $aktor['file_gambar'];
                $nama_aktor = $aktor['nama_aktor'];
                $tanggal_lahir = $aktor['tanggal_lahir'];
                $jenis_kelamin = $aktor['jenis_kelamin'];
                $negara_asal = $aktor['negara_asal'];
                $biografi = $aktor['biografi'];
            ?>

            <div class="row ipad-width">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="mv-ceb">
                        <img src="./images/aktor/<?php echo $file_gambar ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct">
                        <h1 class="bd-hd"><?php echo $nama_aktor ?></h1>
                        <p class="ceb-single">
                            <?php
                            if ($jenis_kelamin == 'pria') {
                                echo 'Actor';
                            } elseif ($jenis_kelamin == 'wanita') {
                                echo 'Actress';
                            }
                            ?>
                        </p>
                        <div class="social-link cebsingle-socail">
                            <a href="facebook.com"><i class="ion-social-facebook"></i></a>
                            <a href="twitter.com"><i class="ion-social-twitter"></i></a>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overviewceb">Overview</a></li>
                                    <li><a href="#biografi"> biography</a></li>
                                    <li><a href="#filmography">filmography</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overviewceb" class="tab active">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p style="text-align: justify; text-justify: inter-word;"><?php echo substr($aktor['biografi'], 0, 350) . " ..." ?></p>
                                                <p class="time"><a href="#biografi">See full bio <i class="ion-ios-arrow-right"></i></a></p>
                                                <div class="title-hd-sm">
                                                    <h4>filmography</h4>
                                                </div>
                                                <!-- movie cast -->
                                                <div class="mvcast-item">
                                                    <?php
                                                    $filmography_query = mysqli_query($koneksi, "SELECT * FROM film JOIN pemeran ON pemeran.id_film = film.id_film
                                                    WHERE id_aktor = '$id_aktor' ORDER BY tahun_rilis DESC LIMIT 5;");
                                                    while ($filmography = mysqli_fetch_array($filmography_query)) {
                                                        $id_film = $filmography['id_film'];
                                                        $judul = $filmography['judul_film'];
                                                        $tahun_rilis = $filmography['tahun_rilis'];
                                                        $file_poster = $filmography['file_poster'];
                                                        $peran = $filmography['peran'];
                                                    ?>
                                                        <div class="cast-it">
                                                            <div class="cast-left cebleb-film">
                                                                <img src="./images/poster/<?php echo $file_poster; ?>" style="width: 77px;">
                                                                <div>
                                                                    <a href="moviesingle.php?id_film=<?php echo $id_film; ?>"><?php echo $judul; ?></a>
                                                                    <p class="time"><?php echo $peran; ?></p>
                                                                </div>
                                                            </div>
                                                            <p>... <?php echo $tahun_rilis; ?></p>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>Fullname: </h6>
                                                    <p><a href="#"><?php echo $nama_aktor ?></a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Date of Birth: </h6>
                                                    <p><?php echo date('d-m-Y', strtotime($aktor["tanggal_lahir"])); ?></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Country: </h6>
                                                    <p><?php echo $negara_asal ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="biografi" class="tab">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div>
                                                    <h3>Biography of</h3>
                                                    <h2><?php echo $nama_aktor ?></h2>
                                                </div>
                                            </div>
                                            <p style="text-align: justify; text-justify: inter-word;">
                                                <?php echo $biografi ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div id="filmography" class="tab">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div>
                                                    <h3>Filmography of</h3>
                                                    <h2><?php echo $nama_aktor ?></h2>
                                                </div>

                                            </div>
                                            <!-- movie cast -->
                                            <div class="mvcast-item">
                                                <?php
                                                $filmography_query = mysqli_query($koneksi, "SELECT * FROM film JOIN pemeran ON pemeran.id_film = film.id_film
                                                WHERE id_aktor = '$id_aktor' ORDER BY tahun_rilis ASC;");
                                                while ($filmography = mysqli_fetch_array($filmography_query)) {
                                                    $id_film = $filmography['id_film'];
                                                    $judul = $filmography['judul_film'];
                                                    $tahun_rilis = $filmography['tahun_rilis'];
                                                    $file_poster = $filmography['file_poster'];
                                                    $peran = $filmography['peran'];
                                                ?>
                                                    <div class="cast-it">
                                                        <div class="cast-left cebleb-film">
                                                            <img src="./images/poster/<?php echo $file_poster; ?>" style="width: 125px;">
                                                            <div>
                                                                <a href="moviesingle.php?id_film=<?php echo $id_film; ?>"><?php echo $judul; ?></a>
                                                                <p class="time"><?php echo $peran; ?></p>
                                                            </div>
                                                        </div>
                                                        <p>... <?php echo $tahun_rilis; ?></p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- celebrity single section-->

    <!-- footer section-->
    <?php include './components/footer.php' ?>
    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- celebritysingle12:18-->

</html>