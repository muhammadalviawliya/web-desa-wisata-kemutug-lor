<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

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
      <div class="brand-link">
        <?php
        include '../koneksi.php';
        $data = mysqli_query($koneksi, "select * from info_desa WHERE id='1' ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <img src="../images/<?php echo $d['gambar'] ?>" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8;width: 35px;px;height:35px">
        <?php } ?>
        <?php
        include '../koneksi.php';
        $data = mysqli_query($koneksi, "select * from pengaturan WHERE id='1' ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <span class="brand-text font-weight-light "><?php echo $d['nama_desa'] ?></span>
      </div>
    <?php } ?>

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
            <a href="home.php" class="nav-link">
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
            <a href="galeri.php" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kegiatan.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="paket_wisata.php" class="nav-link">
              <i class="nav-icon fas fa-suitcase-rolling"></i>
              <p>
                Paket Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="umkm.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                UMKM
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="carousel.php" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Carousel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Admin
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
              <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="info-box mb-3 mt-5">
            <div class="info-box-content">
              <span class="info-box-text text-light">
                <h1 class="text-center" id="jam"></h1>
                <h2 class="text-center" id="tanggal"></h2>
                <script>
                  window.setTimeout("waktu()", 1000);

                  function waktu() {
                    var waktu = new Date();
                    setTimeout("waktu()", 1000);
                    document.getElementById("jam").innerHTML = waktu.getHours() + ":" + String(waktu.getMinutes()).padStart(2, "0");
                  }
                </script>
                <script>
                  var tw = new Date();
                  if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                  else(a = tw.getTime());
                  tw.setTime(a);
                  var tahun = tw.getFullYear();
                  var hari = tw.getDay();
                  var bulan = tw.getMonth();
                  var tanggal = tw.getDate();
                  var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jumat,", "Sabtu,");
                  var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                  document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
                </script>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked-alt"></i></span>
                <?php
                include '../koneksi.php';
                $data_wisata = mysqli_query($koneksi, "SELECT * FROM wisata");
                $jumlah_wisata = mysqli_num_rows($data_wisata);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">Wisata</span>
                  <span class="info-box-number">
                    <?php echo $jumlah_wisata; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-image"></i></span>
                <?php
                include '../koneksi.php';
                $data_galeri = mysqli_query($koneksi, "SELECT * FROM galeri");
                $jumlah_galeri = mysqli_num_rows($data_galeri);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">Galeri</span>
                  <span class="info-box-number">
                    <?php echo $jumlah_galeri; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar-alt"></i></span>
                <?php
                include '../koneksi.php';
                $data_kegiatan = mysqli_query($koneksi, "SELECT * FROM kegiatan");
                $jumlah_kegiatan = mysqli_num_rows($data_kegiatan);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">Kegiatan</span>
                  <span class="info-box-number"><?php echo $jumlah_kegiatan; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-light elevation-1"><i class="fas fa-suitcase-rolling"></i></span>
                <?php
                include '../koneksi.php';
                $data_paket_wisata = mysqli_query($koneksi, "SELECT * FROM paket_wisata");
                $jumlah_paket = mysqli_num_rows($data_paket_wisata);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">Paket Wisata</span>
                  <span class="info-box-number"><?php echo $jumlah_paket; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <?php
                include '../koneksi.php';
                $data_umkm = mysqli_query($koneksi, "SELECT * FROM umkm");
                $jumlah_umkm = mysqli_num_rows($data_umkm);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">UMKM</span>
                  <span class="info-box-number"><?php echo $jumlah_umkm; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-images"></i></span>
                <?php
                include '../koneksi.php';
                $data_carousel = mysqli_query($koneksi, "SELECT * FROM carousel");
                $jumlah_carousel = mysqli_num_rows($data_carousel);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">Carousel</span>
                  <span class="info-box-number">
                    <?php echo $jumlah_carousel; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user-friends"></i></span>
                <?php
                include '../koneksi.php';
                $data_admin = mysqli_query($koneksi, "SELECT * FROM admin");
                $jumlah_admin = mysqli_num_rows($data_admin);
                ?>
                <div class="info-box-content">
                  <span class="info-box-text">Admin</span>
                  <span class="info-box-number">
                    <?php echo $jumlah_admin; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->


        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
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