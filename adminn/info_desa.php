<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from info_desa WHERE id='1' ");
while ($d = mysqli_fetch_array($data)) {
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
              <h6>admin</h6>
              <button type="button" class="btn btn-danger btn-xs">Logout</button>
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
                <a href="./index.html" class="nav-link">
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
                <h1 class="m-0">Info Desa</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Info Desa</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
          <div class="row justify-content-center mt-5 ml-5 mb-5">
            <form class="col-8" method="POST" action="edit_info.php" enctype="multipart/form-data">
              <div class=" form-group col-5">
                <label>Logo Desa</label>
                <br>
                <img src='../images/<?php echo $d['gambar'] ?>' width='100' height='100'>
                <input type="hidden" name="gambar_lama" value="<?php echo $d['gambar'] ?>">
                <input id="gambar" name="gambar" type="file" class="form-control">
              </div>
              <div class="form-group ">
                <label for="nama">sejarah desa</label>
                <textarea name="paragraf1" rows="3" class="form-control"><?php echo $d['paragraf1']; ?></textarea><br>
                <textarea name="paragraf2" rows="3" class="form-control"><?php echo $d['paragraf2']; ?></textarea>
              </div>

              <div class="form-group ">
                <label for="nama">youtube</label>
                <input type="text" name="youtube" class="form-control" value="<?php echo $d['youtube']; ?>">
              </div>

              <div class="form-group ">
                <label for="nama">map</label>
                <input type="text" name="map" class="form-control" value="<?php echo $d['map']; ?>">
              </div>

              <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
            </form>
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
<?php
} ?>

  </html>