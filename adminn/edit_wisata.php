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
               <h1 class="m-0">Ubah Wisata</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="wisata.php">Wisata</a></li>
                 <li class="breadcrumb-item active">Ubah Wisata</li>
               </ol>
             </div><!-- /.col -->
           </div><!-- /.row -->
         </div><!-- /.container-fluid -->
       </div>
       <!-- /.content-header -->

       <!-- Main content -->
       <?php
        include '../koneksi.php';
        $id_wisata = $_GET['id_wisata'];
        $data = mysqli_query($koneksi, "select * from wisata WHERE id_wisata='$id_wisata' ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
         <div class="container">
           <div class="row justify-content-center mt-5 ml-5 mb-5">
             <form class="col-8" method="POST" action="proses_edit_wisata.php" enctype="multipart/form-data">
               <input type="hidden" name="id_wisata" value="<?php echo $d['id_wisata'] ?>">
               <div class=" form-group ">
                 <label for=" nama">Wisata</label>
                 <input type="text" name="wisata" class="form-control" value="<?php echo $d['nama'] ?>">
               </div>
               <div class="form-group ">
                 <label for="nama">Deskripsi</label>
                 <textarea name="deskripsi" rows="5" class="form-control"><?php echo $d['deskripsi'] ?></textarea>
               </div>


               <div class="form-group">
                 <label for="Warna">Jenis wisata</label>
                 <select name="jenis_wisata" class="form-control">
                   <?php
                    $sql = "select * from jenis_wisata";
                    $hasil = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                      if ($d['jenis_wisata'] == $data['jenis_wisata']) {
                        $select = "selected";
                      } else {
                        $select = "";
                      }
                      echo "<option $select>" . $data['jenis_wisata'] . "</option>";
                    }
                    ?>
                 </select>
               </div>

               <div class=" form-group col-5">
                 <label>Gambar</label>
                 <br>
                 <img src='../images/<?php echo $d['gambar'] ?>' width='100' height='100'>
                 <input id="gambar" name="gambar" type="file" class="form-control">
               </div>
               <div class="form-group ">
                 <label for="nama">Harga</label>
                 <textarea name="harga" rows="5" class="form-control"><?php echo $d['harga'] ?></textarea>
               </div>
               <div class=" form-group ">
                 <label for=" nama">map</label>
                 <input type="text" name="map" class="form-control" value="<?php echo $d['map'] ?>">
               </div>


               <button type="submit" class="btn btn-warning" name="Tambah">Edit</button>
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
        }
  ?>

 </html>