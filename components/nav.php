    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="./auth/login.php">
                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="./auth/register.php">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder="" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder="" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder="" required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <?php
    if (isset($_SESSION['username'])) {
    ?>

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
                            <a href="userprofile.php?username=<?php echo $_SESSION['username'] ?>" class="btn btn-default dropdown-toggle lv1">
                                community
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                            <h5 style="color: #abb7c4;">Hi, <?php echo $_SESSION['username'] ?></h5>
                            <li><a href="./auth/logout.php">LOGOUT</a></li>
                        <?php } else { ?>
                            <li class="loginLink"><a href="#">LOG In</a></li>
                            <li class="btn signupLink"><a href="#">sign up</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>
    <!-- END | Header -->