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
<!-- userrate14:04-->

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
    <?php include './components/navbar.php' ?>

    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Edward kennedy’s profile</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li><span class="ion-ios-arrow-right"></span>Rated movies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="user-information">
                        <div class="user-img">
                            <a href="#"><img src="images/uploads/user-img.png" alt="" /><br /></a>
                            <a href="#" class="redbtn">Change avatar</a>
                        </div>
                        <div class="user-fav">
                            <p>Account Details</p>
                            <ul>
                                <li><a href="userprofile.php">Profile</a></li>
                                <li><a href="userfavoritelist.php">Favorite movies</a></li>
                                <li class="active"><a href="#">Rated movies</a></li>
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
                    <div class="topbar-filter">
                        <p>Found <span>3 rates</span> in total</p>
                        <label>Sort by:</label>
                        <select>
                            <option value="range">-- Choose option --</option>
                            <option value="saab">-- Choose option 2--</option>
                        </select>
                    </div>
                    <div class="movie-item-style-2 userrate">
                        <img src="images/uploads/mv1.jpg" alt="" />
                        <div class="mv-item-infor">
                            <h6>
                                <a href="#">oblivion <span>(2012)</span></a>
                            </h6>
                            <p class="time sm-text">your rate:</p>
                            <p class="rate">
                                <i class="ion-android-star"></i><span>9.0</span> /10
                            </p>
                            <p class="time sm-text">your reviews:</p>
                            <h6>Best Marvel movie in my opinion</h6>
                            <p class="time sm">02 April 2017</p>
                            <p>
                                “This is by far one of my favorite movies from the MCU. The
                                introduction of new Characters both good and bad also makes
                                the movie more exciting. giving the characters more of a back
                                story can also help audiences relate more to different
                                characters better, and it connects a bond between the audience
                                and actors or characters. Having seen the movie three times
                                does not bother me here as it is as thrilling and exciting
                                every time I am watching it. In other words, the movie is by
                                far better than previous movies (and I do love everything
                                Marvel), the plotting is splendid (they really do out do
                                themselves in each film, there are no problems watching it
                                more than once.”
                            </p>
                        </div>
                    </div>
                    <div class="movie-item-style-2 userrate">
                        <img src="images/uploads/mv2.jpg" alt="" />
                        <div class="mv-item-infor">
                            <h6>
                                <a href="#">into the wild <span>(2014)</span></a>
                            </h6>
                            <p class="time sm-text">your rate:</p>
                            <p class="rate">
                                <i class="ion-android-star"></i><span>7.0</span> /10
                            </p>
                        </div>
                    </div>
                    <div class="movie-item-style-2 userrate last">
                        <img src="images/uploads/mv3.jpg" alt="" />
                        <div class="mv-item-infor">
                            <h6>
                                <a href="#">blade runner<span>(2015)</span></a>
                            </h6>
                            <p class="time sm-text">your rate:</p>
                            <p class="rate">
                                <i class="ion-android-star"></i><span>10.0</span> /10
                            </p>
                            <p class="time sm-text">your reviews:</p>
                            <h6>A masterpiece!</h6>
                            <p class="time sm">01 February 2017</p>
                            <p>
                                “To put it simply, the movie is fascinating, exciting and
                                fantastic. The dialog, the fight choreography, the way the
                                story moves, the characters charisma, all and much more are
                                combined together to deliver this masterpiece. Such an amazing
                                flow, providing a fusion between the 90s and the new century,
                                it's like the assassins are living in another world, with
                                another mindset, without people understanding it. Just one
                                advice for you though: Don't build an expectation of what you
                                want to watch in this movie, if you do, then you will ruin it.
                                This movie has it's own flow and movement, so watch it with a
                                clear mind, and have fun.”
                            </p>
                        </div>
                    </div>
                    <div class="topbar-filter">
                        <label>Movies per page:</label>
                        <select>
                            <option value="range">20 Movies</option>
                            <option value="saab">10 Movies</option>
                        </select>
                        <div class="pagination2">
                            <span>Page 1 of 1:</span>
                            <a class="active" href="#">1</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a>
                        </div>
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

<!-- userrate14:04-->

</html>