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
    <title>Data Film</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <style>
    table.DataTable thead th {
      text-align: center;
      vertical-align: middle;
    }
    </style>

  </head>
  <body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index-admin.php">Admin Data Film</a>
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
            <h1 class="mt-4">Data Film</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index-admin.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Data Film</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                Berikut ini adalah data film dari database blockbuster movie.
              </div>
            </div>
            <div class="col text-right">
                  <a href="tambah_film.php" class="btn btn-primary">Tambah Data Film</a>
                  <br><br>
            </div>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-film"></i>
                Data Film
              </div>
              <div class="card-body">
                <table id="datatablesSimple" class="DataTable text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Poster</th>
                      <th>Genre</th>
                      <th>Nama Sutradara</th>
                      <th>Judul Film</th>
                      <th>Sinopsis</th>
                      <th>Tahun Rilis</th>
                      <th>Tanggal Rilis</th>
                      <th>Durasi Film</th>
                      <th>Rating Umur</th>
                      <th>Tombol Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include('../database/koneksi.php');

                    $no=0;
                    $query = mysqli_query($koneksi, "SELECT film.id_film, film.file_poster, sutradara.nama_sutradara, genre.judul_genre, 
                    judul_film, sinopsis, tahun_rilis, tanggal_rilis, durasi_film, rating_umur FROM genre
                    INNER JOIN film ON genre.id_genre = film.id_genre
                    INNER JOIN sutradara ON film.id_sutradara = sutradara.id_sutradara;");
                    while ($data = mysqli_fetch_array($query)){
                    $no++

                  ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo "<img src='../images/poster/$data[file_poster]' height='200' />";?></td>
                      <td><?php echo $data['judul_genre']?></td>
                      <td><?php echo $data['nama_sutradara']?></td>
                      <td><?php echo $data['judul_film']?></td>
                      <td><?php echo substr($data['sinopsis'], 0, 75) . " [...]" ?></td>
                      <td><?php echo $data['tahun_rilis']?></td>
                      <td><?php echo date('d-m-Y', strtotime($data["tanggal_rilis"])); ?></td>
                      <td><?php echo $data['durasi_film']?></td>
                      <td><?php echo $data['rating_umur']?></td>
                      <td>
                        <a href="edit_data_film.php?id_film=<?php echo $data['id_film']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_data_film.php?id_film=<?php echo $data['id_film']; ?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Blockbuster Movie 2023</div>
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