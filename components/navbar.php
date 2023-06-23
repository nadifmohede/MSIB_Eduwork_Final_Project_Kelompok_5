  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
              <input type="email" name="email" id="email-2" placeholder="" required="required" />
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
            <div class="row form-group">
                <img src="./print_captcha.php" alt="gambar" />
            </div>
            <div class="row form-group">
                <input class="form-control" name="kode" value="" placeholder="kode captcha" maxlength="5" />
            </div>
            <div class="row">
              <button type="submit">sign up</button>
            </div>
        </form>
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
                <a href="userprofile.php? username=<?php echo $IF_isset()['username'] ?>" class="btn btn-default dropdown-toggle lv1">
                  community
                </a>
              </li>
            </ul>
            <ul class="nav navbar-nav flex-child-menu menu-right">
              <?php
              if (isset($_SESSION['username'])) {
              ?>
                <h5 style="color: #abb7c4;">Hi, <?php echo $_SESSION['username'] ?></h5>
                <li><a href="./auth/logout.php">LOGOUT</a></li>
              <?php } else { ?>
                <li class="loginLink"><a href="#">LOG In</a>
                </li>
                <li class="btn signupLink"><a href="#">sign up</a></li>
              <?php } ?>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </nav>
        <!-- search form -->
      </div>

    </header>
    <!-- END | Header -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

  </html>