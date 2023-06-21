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

<?php
include'database/koneksi.php';
$id = $_GET['id'];

$data_user =mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id' ");

while($user = mysqli_fetch_array($data_user)){
    $username = $user['username'];
    $password = $user['password'];
    $nama = $user['nama'];
    $level = $user['level'];
    }
    
?>

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
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="images/logo1.png" alt="" width="119" height="58" />
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me" /><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58" /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a href="index.php" class="btn btn-default dropdown-toggle lv1">
                                Home
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="movielist.php" class="btn btn-default dropdown-toggle lv1">
                                movies
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="celebritylist.php" class="btn btn-default dropdown-toggle lv1">
                                celebrities
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="bloglist.php" class="btn btn-default dropdown-toggle lv1">
                                news
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="userfavoritelist.php" class="btn btn-default dropdown-toggle lv1">
                                community
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink"><a href="#">sign up</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->
            <div class="top-search">
                <select>
                    <option value="united">TV show</option>
                    <option value="saab">Others</option>
                </select>
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for" />
            </div>
        </div>
    </header>
    <!-- END | Header -->

    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Edward kennedy’s profile</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li><span class="ion-ios-arrow-right"></span>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="user-information">
                        <div class="user-img">
                            <a href="#"><img src="images/uploads/user-img.png" alt="" /><br /></a>
                            <a href="#" class="redbtn">Change avatar</a>
                        </div>
                        <div class="user-fav">
                            <p>Account Details</p>
                            <ul>
                                <li class="active"><a href="userprofile.html">Profile</a></li>
                                <li><a href="userfavoritelist.html">Favorite movies</a></li>
                                <li><a href="userrate.html">Rated movies</a></li>
                            </ul>
                        </div>
                        <div class="user-fav">
                            <p>Others</p>
                            <ul>
                                <li><a href="#">Change password</a></li>
                                <li><a href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="form-style-1 user-pro" action="#">
                        <form action="admin/proses_edit_user.php echo $user['id']; ?>" class="user">
                            <h4>01. Profile details</h4>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>Username</label>
                                    <input type="text" value="<?php echo $data['username']?>" />
                                </div>
                                <div class="col-md-6 form-it">
                                    <label>Email Address</label>
                                    <input type="text" value="<?php echo $data['email']?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-it">
                                    <label>Full Name</label>
                                    <input type="text" value="<?php echo $data['nama']?>" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <input class="submit" type="submit" value="save" />
                                </div>
                            </div>
                        </form>
                        <form action="#" class="password">
                            <h4>02. Change password</h4>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label for="confirm_password">Konfirmasi Password</label>
                                    <input type="password" name="konfirmasi_password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <input class="submit" type="submit" value="change" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section-->
    <footer class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" /></a>
                    <p>
                        5th Avenue st, manhattan<br />
                        New York, NY 10001
                    </p>
                    <p>Call us: <a href="#">(+01) 202 342 6789</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blockbuster</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>Newsletter</h4>
                    <p>
                        Subscribe to our newsletter system now <br />
                        to get latest news from us.
                    </p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email..." />
                    </form>
                    <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
        </div>
        <div class="ft-copyright">
            <div class="ft-left">
                <p>
                    <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                </p>
            </div>
            <div class="backtotop">
                <p>
                    <a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a>
                </p>
            </div>
        </div>
    </footer>
    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- userprofile14:04-->

</html>