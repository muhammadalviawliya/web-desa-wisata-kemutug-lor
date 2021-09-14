  <?php
  session_start();
  if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Desa Kemutug Lor</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <h6><?= @$_SESSION['nama']; ?></h6>
              <a type="button" class="btn btn-danger btn-xs" href="logout.php">Logout</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Home
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="wisata.php" class="nav-link">
                  <i class="nav-icon fas fa-map-marked-alt"></i>
                  <p>
                    Wisata
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>
                    Artikel
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="galeri.php" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                    Galeri
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Kegiatan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="info_desa.php" class="nav-link">
                  <i class="nav-icon fas fa-suitcase-rolling"></i>
                  <p>
                    Paket Wisata
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="info_desa.php" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                    UMKM
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="info_desa.php" class="nav-link">
                  <i class="nav-icon fas fa-info"></i>
                  <p>
                    Info Desa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengaturan.php" class="nav-link">
                  <i class="nav-icon fas fa-sliders-h"></i>
                  <p>
                    Pengaturan
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Galeri</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Galeri</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="container">

          <div class="table-responsive-md mt-5 ml-5 mr-5 ">
            <a class="btn btn-success btn-sm mb-3" href="tambah_galeri.php">Tambah</a>
            <table class="table table-bordered table-striped table-hover ">
              <thead>
                <tr>
                  <th>No</th>
                  <th>gambar</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../koneksi.php';
                $batas = 5;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;
                $data = mysqli_query($koneksi, "select * from galeri");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);

                $data_pegawai = mysqli_query($koneksi, "select * from galeri limit $halaman_awal, $batas");
                $nomor = $halaman_awal + 1;
                while ($d = mysqli_fetch_array($data_pegawai)) {
                ?>
                  <tr>
                    <td width="60px"><?php echo $nomor++; ?></td>
                    <td width="60px"><img src="../images/<?php echo $d['gambar'] ?>" alt="" width="50px" height="50px"></td>
                    <td width="60px">
                      <a class="btn btn-warning btn-sm" href="edit_galeri.php?id_galeri=<?php echo $d['id_galeri'] ?>">Ubah</a>
                      <a class="btn btn-danger btn-sm" href="hapus_galeri.php?id_galeri=<?php echo $d['id_galeri'] ?>">Hapus</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link bg-light" <?php if ($halaman > 1) {
                                                  echo "href='?halaman=$previous'";
                                                } ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                  <li class="page-item"><a class="page-link bg-light" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                  <a class="page-link bg-light" <?php if ($halaman < $total_halaman) {
                                                  echo "href='?halaman=$next'";
                                                } ?>>Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /.content -->

      </div>
      <!-- /.content-wrapper -->



      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

  </body>


  </html>