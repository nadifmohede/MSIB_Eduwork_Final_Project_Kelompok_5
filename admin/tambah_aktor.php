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
    <title>Data Aktor</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
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
            <h1 class="mt-4">Tambah Data Aktor</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index-admin.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Tambah Data Aktor</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                Silahkan isi data dibawah untuk menambahkan data sutradara.
              </div>
            </div>
            <div class="col text-right">
                  <a href="data_aktor.php" class="btn btn-dark">Kembali ke Data Aktor</a>
                  <br><br>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="proses_tambah_aktor.php" method="post">
                        <div class="form-group pb-3">
                            <label>Nama Aktor</label>
                            <input type="text" name="nama_aktor" class="form-control" placeholder="Masukkan Nama Aktor">
                        </div>
                        <div class="form-group pb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Aktor">
                        </div>
                        <div class="form-group pb-3">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled selected>-- Pilih Salah Satu --</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group pb-3">
                            <label>Negara Asal</label>
                            <input type="text" name="negara_asal" class="form-control" placeholder="Masukkan Negara Asal Aktor">
                        </div>
                        <div class="form-group pb-3">
                            <label>Biografi</label>
                            <input type="text" name="biografi" class="form-control" placeholder="Masukkan Biografi Aktor">
                        </div>
                        <div class="form-group pb-3">
                            <label>File Foto</label>
                            <input type="file" name="file_gambar" class="form-control" placeholder="Masukkan File Foto Aktor">
                        </div>
                        <div class="form-group pb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
