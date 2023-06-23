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

<!-- homev206:52-->

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
	<!--login form popup-->

	<!--end of login form popup-->

	<!--signup form popup-->
	<?php include './components/navbar.php' ?>
	<!--end of signup form popup-->

	<!--Header Section-->


	<?php
	// Query untuk mengambil film dengan rating tertinggi
	$query_top_rated = mysqli_query($koneksi, "SELECT film.id_film, film.judul_film, film.tahun_rilis, film.tanggal_rilis, film.sinopsis, film.durasi_film, film.rating_umur, film.link_trailer, film.file_poster, sutradara.nama_sutradara, (SELECT AVG(komentar.rating) FROM komentar WHERE komentar.id_film = film.id_film) AS average_rating
		FROM film
		JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
		ORDER BY average_rating DESC
		LIMIT 1");

	$top_rated_film = mysqli_fetch_array($query_top_rated);

	// Cek apakah ada film dengan rating tertinggi
	if ($top_rated_film) {
		$top_rated_id = $top_rated_film['id_film'];
		$top_rated_title = $top_rated_film['judul_film'];
		$top_rated_year = $top_rated_film['tahun_rilis'];
		$top_rated_release_date = $top_rated_film['tanggal_rilis'];
		$top_rated_runtime = $top_rated_film['durasi_film'];
		$top_rated_mmpa = $top_rated_film['rating_umur'];
		$top_rated_trailer = $top_rated_film['link_trailer'];
		$top_rated_poster = $top_rated_film['file_poster'];
		$top_rated_rating = isset($top_rated_film['average_rating']) ? round($top_rated_film['average_rating'], 1) : 0;

		// Tampilkan data film dengan rating tertinggi
	?>
		<div class="slider sliderv2">
			<div class="container">
				<div class="row">
					<div class="slider-single-item">
						<div class="movie-item">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<div class="title-in">
										<div class="cate">
											<span class="yell"><a href="#">Action</a></span>
										</div>
										<h1><a href="#"><?php echo $top_rated_title; ?> <span><?php echo $top_rated_year; ?></span></a></h1>
										<div class="social-btn">
											<a href="<?php echo $top_rated_trailer; ?>" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
										</div>
										<div class="mv-details">
											<p><i class="ion-android-star"></i><span><?php echo $top_rated_rating; ?></span> /5</p>
											<ul class="mv-infor">
												<li> Run Time: <?php echo $top_rated_runtime; ?> min </li>
												<li> Rated: <?php echo $top_rated_mmpa; ?> </li>
												<li> Release: <?php echo date('d-m-Y', strtotime($top_rated_release_date)); ?></li>
											</ul>
										</div>
										<div class="btn-transform transform-vertical">
											<div><a href="moviesingle.php?id_film=<?php echo $top_rated_id ?>" class="item item-1 redbtn">more detail</a></div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="mv-img-2">
										<a href="#"><img src="../final_project/images/poster/<?php echo $top_rated_poster ?>" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
	} else {
		// Tampilkan pesan jika tidak ada film dengan rating tertinggi
		echo "<p>No top rated films available.</p>";
	}
	?>


	<div class="movie-items  full-width">
		<div class="row">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>Category</h2>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active"><a href="#tab1-h2">#Top Rated</a></li>
						<li><a href="#tab2-h2"> #Most reviewed</a></li>
					</ul>
					<br>

					<?php
					// Query untuk mengambil film dengan rating tertinggi
					$query_top_rated = mysqli_query($koneksi, "SELECT film.id_film, film.judul_film, film.tahun_rilis, film.tanggal_rilis, film.sinopsis, film.durasi_film, film.rating_umur, film.link_trailer, film.file_poster, sutradara.nama_sutradara, (SELECT AVG(komentar.rating) FROM komentar WHERE komentar.id_film = film.id_film) AS average_rating
	FROM film
	JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
	ORDER BY average_rating DESC");
					?>

					<div class="tab-content">
						<div id="tab1-h2" class="tab active">
							<div class="row">
								<div class="slick-multiItem2">
									<?php
									// Query untuk mengambil film dengan rating tertinggi
									$query_top_rated = mysqli_query($koneksi, "SELECT film.id_film, film.judul_film, film.tahun_rilis, film.tanggal_rilis, film.sinopsis, film.durasi_film, film.rating_umur, film.link_trailer, film.file_poster, sutradara.nama_sutradara, (SELECT AVG(komentar.rating) FROM komentar WHERE komentar.id_film = film.id_film) AS average_rating
					FROM film
					JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara
					ORDER BY average_rating DESC");

									// Loop untuk mencetak data film dengan rating tertinggi
									while ($top_rated_film = mysqli_fetch_array($query_top_rated)) {
										$top_rated_id = $top_rated_film['id_film'];
										$top_rated_title = $top_rated_film['judul_film'];
										$top_rated_year = $top_rated_film['tahun_rilis'];
										$top_rated_release_date = $top_rated_film['tanggal_rilis'];
										$top_rated_runtime = $top_rated_film['durasi_film'];
										$top_rated_mmpa = $top_rated_film['rating_umur'];
										$top_rated_trailer = $top_rated_film['link_trailer'];
										$top_rated_poster = $top_rated_film['file_poster'];
										$top_rated_rating = isset($top_rated_film['average_rating']) ? round($top_rated_film['average_rating'], 1) : 0;
									?>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="./images/poster/<?php echo $top_rated_poster ?>" alt="">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.php?id_film=<?php echo $top_rated_id ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="moviesingle.php?id_film=<?php echo $top_rated_id ?>"><?php echo $top_rated_title ?></a></h6>
													<p><i class="ion-android-star"></i><span><?php echo $top_rated_rating ?></span> /5</p>
												</div>
											</div>
										</div>
									<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<br><br><br>

					<!-- footer section-->
					<?php include './components/footer.php' ?>
					<!-- end of footer section-->


					<script src="js/jquery.js"></script>
					<script src="js/plugins.js"></script>
					<script src="js/plugins2.js"></script>
					<script src="js/custom.js"></script>
</body>

<!-- homev207:28-->

</html>