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
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
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
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
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


                <div class="row form-group">
                    <img src="captcha.php" alt="gambar" />
                </div>
                <div class="row form-group">
                    <input class="form-control" name="kode" value="" placeholder="kode captcha" maxlength="5" />
                </div>

                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header full-width-hd">
        <div class="row">
            <nav id="mainNav" class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
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
            <!-- search form -->
        </div>

    </header>
    <!-- END | Header -->

    <div class="slider sliderv2">
        <div class="container">
            <div class="row">
                <div class="slider-single-item">
                    <div class="movie-item">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="title-in">
                                    <div class="cate">
                                        <span class="blue"><a href="#">Sci-fi</a></span>
                                        <span class="yell"><a href="#">Action</a></span>
                                        <span class="orange"><a href="#">advanture</a></span>
                                    </div>
                                    <h1><a href="#"> Skyfall: Quantum of <br>
                                            Spectre <span>2015</span></a></h1>
                                    <div class="social-btn">
                                        <a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
                                        <div class="hover-bnt">
                                            <a href="#" class="parent-btn"><i
                                                    class="ion-android-share-alt"></i>share</a>
                                            <div class="hvr-item">
                                                <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                                <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                                <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mv-details">
                                        <p><i class="ion-android-star"></i><span>4.1</span> /5</p>
                                        <ul class="mv-infor">
                                            <li> Run Time: 148 min </li>
                                            <li> Rated: PG-13 </li>
                                            <li> Release: 1 May 2015</li>
                                        </ul>
                                    </div>
                                    <div class="btn-transform transform-vertical">
                                        <div><a href="moviesingle.php" class="item item-1 redbtn">more detail</a></div>
                                        <div><a href="moviesingle.php" class="item item-2 redbtn hvrbtn">more detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="mv-img-2">
                                    <a href="#"><img src="images/uploads/movie-single.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="title-in">
                                    <div class="cate">
                                        <span class="blue"><a href="#">Sci-fi</a></span>
                                        <span class="yell"><a href="#">Action</a></span>
                                        <span class="orange"><a href="#">advanture</a></span>
                                    </div>
                                    <h1><a href="#">guardians of the<br>
                                            galaxy <span>2015</span></a></h1>
                                    <div class="social-btn">
                                        <a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
                                        <div class="hover-bnt">
                                            <a href="#" class="parent-btn"><i
                                                    class="ion-android-share-alt"></i>share</a>
                                            <div class="hvr-item">
                                                <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                                <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                                <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                                <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mv-details">
                                        <p><i class="ion-android-star"></i><span>3.4</span> /5</p>
                                        <ul class="mv-infor">
                                            <li> Run Time: 2h21’ </li>
                                            <li> Rated: PG-13 </li>
                                            <li> Release: 1 May 2015</li>
                                        </ul>
                                    </div>
                                    <div class="btn-transform transform-vertical">
                                        <div><a href="#" class="item item-1 redbtn">more detail</a></div>
                                        <div><a href="#" class="item item-2 redbtn hvrbtn">more detail</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="mv-img-2">
                                    <a href="#"><img src="images/uploads/poster1.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="movie-items  full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>in theater</h2>
                </div>
                <div class="tabs">
                    <ul class="tab-links">
                        <li class="active"><a href="#tab1-h2">#Popular</a></li>
                        <li><a href="#tab2-h2"> #Coming soon</a></li>
                        <li><a href="#tab3-h2"> #Top rated </a></li>
                        <li><a href="#tab4-h2"> #Most reviewed</a></li>
                    </ul>
                    <div class="tab-content">






                        <div id="tab1-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it1.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Interstella.r</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it2.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">The revenant</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it3.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it4.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">The walk</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it5.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it6.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Interstellar</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it7.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it8.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="tab2-h2" class="tab" style="margin-top: 3em;">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it4.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">The walk</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it5.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it6.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Interstellar</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it7.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it8.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="tab3-h2" class="tab" style="margin-top: 3em;">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it1.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Interstellar</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it2.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">The revenant</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it3.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it4.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">The walk</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it5.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="tab4-h2" class="tab" style="margin-top: 3em;">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it5.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it6.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Interstellar</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it7.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="images/uploads/mv-it8.jpg" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="moviesingle.html"> Read more <i
                                                        class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#">Die hard</a></h6>
                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br><br><br><br>

                <!-- footer v2 section-->
                <footer class="ht-footer full-width-ft">
                    <div class="row">
                        <div class="flex-parent-ft">
                            <div class="flex-child-ft item1">
                                <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
                                <p>5th Avenue st, manhattan<br>
                                    New York, NY 10001</p>
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
                                <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                                <form action="#">
                                    <input type="text" placeholder="Enter your email">
                                </form>
                                <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                        <div class="ft-copyright">
                            <div class="ft-left">
                                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            </div>
                            <div class="backtotop">
                                <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end of footer v2 section-->

                <script src="js/jquery.js"></script>
                <script src="js/plugins.js"></script>
                <script src="js/plugins2.js"></script>
                <script src="js/custom.js"></script>
</body>

<!-- homev207:28-->

</html>