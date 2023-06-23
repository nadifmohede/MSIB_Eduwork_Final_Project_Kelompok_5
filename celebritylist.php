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
<!--[if !(IE 7) | !(IE 8)]><!-->
<html lang="en" class="no-js">
<!-- celebritylist11:56-->

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
</head>

<body>
    <!--login form popup-->

    <!--end of login form popup-->

    <!--signup form popup-->
    <?php include './components/navbar.php' ?>
    <!--end of signup form popup-->

    <!--Header Section-->


    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Celebrity List</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li>
                                <span class="ion-ios-arrow-right"></span> celebrity list
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- celebrity list section-->
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT COUNT(nama_aktor) AS jumlah_aktor FROM aktor; ");
                        while ($data = mysqli_fetch_array($sql)) {
                            $jumlah_aktor = $data['jumlah_aktor'];
                        ?>
                            <p class="pad-change">
                                Found <span><?php echo $jumlah_aktor ?> celebrities</span> in total
                            </p>
                        <?php } ?>
                        <a href="celebritylist.php" class="list"><i class="ion-ios-list-outline active"></i></a>
                    </div>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM aktor;");
                    while ($aktor = mysqli_fetch_array($query)) {
                        $id_aktor = $aktor['id_aktor'];
                        $file_gambar = $aktor['file_gambar'];
                        $nama_aktor = $aktor['nama_aktor'];
                        $jenis_kelamin = $aktor['jenis_kelamin'];
                        $negara_asal = $aktor['negara_asal'];
                        $biografi = $aktor['biografi'];
                    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ceb-item-style-2">
                                    <img src="./images/aktor/<?php echo $file_gambar ?>" style="width: 141px;" />
                                    <div class="ceb-infor">
                                        <h2><a href="celebritysingle.php?id_aktor=<?php echo $id_aktor ?>"><?php echo $nama_aktor ?></a></h2>
                                        <span>
                                            <?php
                                            if ($jenis_kelamin == 'pria') {
                                                echo 'Actor, ';
                                            } elseif ($jenis_kelamin == 'wanita') {
                                                echo 'Actress, ';
                                            }
                                            echo $negara_asal;
                                            ?>
                                        </span>
                                        <p>
                                            <?php echo substr($aktor['biografi'], 0, 150) . " [...]" ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of celebrity list section-->

    <!-- footer section-->
    <?php include './components/footer.php' ?>
    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- celebritylist12:04-->

</html>