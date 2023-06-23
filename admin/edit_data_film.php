<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Data Film</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#date1" ).datepicker({
          dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
          yearRange: '1900:+0'
        });
      } );
    </script>

  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">Admin Data Film</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="index-admin.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <div class="sb-sidenav-menu-heading">Manajemen Data</div>
              <a class="nav-link" href="data_film.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-film"></i>                </div>
                Data Film
              </a>
              <a class="nav-link" href="data_aktor.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-user"></i>
                </div>
                 Data Aktor
              </a>
              <a class="nav-link" href="data_sutradara.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-video"></i>
                </div>
                Data Sutradara
              </a>
              <a class="nav-link" href="data_genre.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-gears"></i>
                </div>
                Data Genre
              </a>
              <a class="nav-link" href="data_pemeran.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-user-gear"></i>
                </div>
                Data Pemeran
              </a>
              <a class="nav-link" href="data_komentar.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-comments"></i>
                </div>
                Data Komentar
              </a>
              <a class="nav-link" href="data_rating.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-star"></i>
                </div>
                Data Rating
              </a>
              <a class="nav-link" href="data_reviewer.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-book-open"></i>
                </div>
                Data Reviewer
              </a>
              <a class="nav-link" href="data_user.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-users"></i>
                </div>
                Data User
              </a>
              </nav>
              </div>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Film</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index-admin.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Edit Data Film</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                Silahkan isi data dibawah untuk mengedit data film.
              </div>
            </div>
            <div class="col text-right">
                  <a href="data_film.php" class="btn btn-dark">Kembali ke Data Film</a>
                  <br><br>
            </div>

            <?php
            include('../database/koneksi.php');
            $id_film = $_GET['id_film'];

            $data_film =mysqli_query($koneksi, "SELECT * FROM film WHERE id_film = '$id_film' ");

            while($film = mysqli_fetch_array($data_film)){
                $id_sutradara = $film['id_sutradara'];
                $id_genre = $film['id_genre'];
                $judul_film = $film['judul_film'];
                $sinopsis = $film['sinopsis'];
                $tahun_rilis = $film['tahun_rilis'];
                $tanggal_rilis = $film['tanggal_rilis'];
                $durasi_film = $film['durasi_film'];
                $rating_umur = $film['rating_umur'];
                $file_poster = $film['file_poster'];

            }

            ?>

            <div class="card mb-4">
                <div class="card-body">
                <form action="proses_edit_film.php?id_film=<?php echo $film['id_film']; ?>" method="post">
                <div class="form-group">
                  <label>Nama Sutradara</label>
                  <input type="hidden" name="id_film" value="<?php echo $id_film; ?>">
                  <select name="id_sutradara" class="form-control">
                      <option disabled>--PILIH SALAH SATU--</option>
                      <?php 
                      $sql = mysqli_query($koneksi, "SELECT id_sutradara, nama_sutradara FROM sutradara");
                      while ($data = mysqli_fetch_array($sql)) {
                          $selected = ($data['id_sutradara'] == $id_sutradara) ? "selected" : "";
                      ?>
                      <option value="<?= $data['id_sutradara'] ?>" <?= $selected ?>>
                          <?= $data['nama_sutradara']." (ID Sutradara = ".$data['id_sutradara'].")" ?>
                      </option>
                      <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Genre</label>
                  <select name="id_genre" class="form-control">
                      <option disabled>--PILIH SALAH SATU--</option>
                      <?php 
                      $sql = mysqli_query($koneksi, "SELECT id_genre, judul_genre FROM genre");
                      while ($data = mysqli_fetch_array($sql)) {
                          $selected = ($data['id_genre'] == $id_genre) ? "selected" : "";
                      ?>
                      <option value="<?= $data['id_genre'] ?>" <?= $selected ?>>
                          <?= $data['judul_genre']." (ID Genre = ".$data['id_genre'].")" ?>
                      </option>
                      <?php } ?>
                  </select>
                </div>
                <div class="form-group  pb-3">
                  <label>Judul Film</label>
                  <input type="text" value="<?php echo $judul_film; ?>" name="judul_film" class="form-control">
                </div>
                <div class="form-group pb-3">
                  <label>Sinopsis</label>
                  <textarea class="form-control" rows="5" name="sinopsis"><?php echo $sinopsis; ?></textarea>
                </div>
                <div class="form-group  pb-3">
                  <label>Tahun Rilis</label>
                  <input type="number" value="<?php echo $tahun_rilis; ?>" name="tahun_rilis" class="form-control">
                </div>
                <div class="form-group pb-3">
                  <label>Tanggal Rilis</label>
                  <input type="" id="date1" value="<?php echo date('d-m-Y', strtotime($tanggal_rilis)); ?>" name="tanggal_rilis" class="form-control">
                </div>
                <div class="form-group pb-3">
                  <label>Durasi Film</label>
                  <input type="text" value="<?php echo $durasi_film; ?>" name="durasi_film" class="form-control">
                </div>
                <div class="form-group pb-3">
                  <label>Rating Umur</label>
                  <select name="rating_umur" class="form-control">
                    <option disabled selected>-- Pilih Salah Satu --</option>
                    <option value="G" <?= ($rating_umur == 'G' ? 'selected' : ''); ?>>G (General)</option>
                    <option value="PG" <?= ($rating_umur == 'PG' ? 'selected' : ''); ?>>PG (Parental Guidance)</option>
                    <option value="PG-13" <?= ($rating_umur == 'PG-13' ? 'selected' : ''); ?>>PG-13 (Parents Strongly Cautioned)</option>
                    <option value="R" <?= ($rating_umur == 'R' ? 'selected' : ''); ?>>R (Restricted)</option>
                  </select>
                </div>
                <div class="form-group pb-3">
                  <label class="pb-2">Poster Film</label><br>
                  <div class="pb-4">
                    <?php echo "<img src='../images/poster/$file_poster' width='200' />";?><br>
                    <span><?php echo "(".$file_poster.")"; ?></span>
                  </div>
                  <input type="file" name="file_poster" class="form-control" placeholder="Masukkan File Poster Film">
                </div>
                <div class="form-group pb-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
        </main>
        </div>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2023</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
