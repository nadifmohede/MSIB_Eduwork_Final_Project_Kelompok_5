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
<!-- userprofile14:04-->


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
    <meta name="format-detection" content="telephone=no" />

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <?php include './components/navbar.php' ?>


    <?php
    $username_user = $_GET['username'];


    $data_profile = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username_user' ");

    while ($profile = mysqli_fetch_array($data_profile)) {
        $username = $profile['username'];
        $nama = $profile['nama'];
        $email = $profile['email'];
    }

    ?>


    <div class="page-single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-6 col-md-offset-3">
                    <br><br><br><br>
                    <center>
                        <h2 style="color: white;">Profile</h2>
                    </center>
                    <br><br>
                    <form method="post" action="./proses/update_profile.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label style="color: white;">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username ?>" />
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>" />
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $email ?>" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- footer section-->
    <?php include './components/footer.php' ?>
    <!-- end of footer section-->


    <!-- JS files -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>