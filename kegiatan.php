<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "select * from pengaturan WHERE id='1' ");
while ($d = mysqli_fetch_array($data)) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- my css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

        <title><?php echo $d['nama_desa']; ?></title>
    </head>

    <body>
        <!-- navbar -->
        <section class="navbar navbar-expand-lg " style="background-color:<?php echo $d['bg_warna']; ?>">
            <div class="container">
                <a class="navbar-brand" style="color:<?php echo $d['text_warna']; ?>"><?php echo $d['nama_desa']; ?></a>
                <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-navicon" style="color:<?php echo $d['text_warna']; ?>; font-size:20px;"></i>
                    </span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php" style="color:<?php echo $d['text_warna']; ?>">Home</a>
                        <li class="nav-item dropdown">
                            <a class=" nav-link dropdown-toggle" style="color:<?php echo $d['text_warna']; ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Wisata
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="wisata_alam.php">Alam</a></li>
                                <li><a class="dropdown-item" href="wisata_religi.php">Religi</a></li>
                                <li><a class="dropdown-item" href="wisata_budaya.php">Budaya</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="galeri.php" style="color:<?php echo $d['text_warna']; ?>">Galeri</a>
                        <a class="nav-link" href="kegiatan.php" style="color:<?php echo $d['text_warna']; ?>">Kegiatan</a>
                        <a class=" nav-link" href="Paket_wisata.php" style="color:<?php echo $d['text_warna']; ?>">Paket Wisata</a>
                        <a class=" nav-link" href="umkm.php" style="color:<?php echo $d['text_warna']; ?>">UMKM Desa</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- navbar end -->


    <div class="container">
        <div class="text-center mt-5">
            <h2 style="margin-bottom: 80px;">Kegiatan</h2>
        </div>

        <?php

        $batas = 5;
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

        $previous = $halaman - 1;
        $next = $halaman + 1;
        $data = mysqli_query($koneksi, "select * from kegiatan");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

        $data_pegawai = mysqli_query($koneksi, "select * from kegiatan limit $halaman_awal, $batas");
        $nomor = $halaman_awal + 1;
        while ($data1 = mysqli_fetch_array($data_pegawai)) {
        ?>

            <section class="border-bottom pb-4 mb-5">
                <div class="row gx-5">
                    <div class="col-md-6 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                            <img src="images/<?php echo $data1['gambar'] ?>" class="img-fluid" style="width: 550px;height:250px;" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3"><?php echo $data1['tanggal'] ?></span>
                        <h4><strong><?php echo $data1['judul'] ?></strong></h4>
                        <p class="text-muted">
                            <?php echo substr($data1['deskripsi'], 0, 500); ?>
                        </p>
                    </div>
                </div>
            </section>
        <?php } ?>
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



    <!-- FOOTER -->
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "select * from pengaturan WHERE id='1' ");
    while ($data2 = mysqli_fetch_array($data)) {
    ?>
        <div class="container-fluid " style="background-color:<?php echo $data2['bg_warna']; ?>">
            <footer class="row row-cols-5 py-5   border-top">
                <div class=" col ">
                    <a class=" navbar-brand" style="color:<?php echo $data2['text_warna']; ?>"><?php echo $data2['nama_desa']; ?></a>
                    <p style="color:<?php echo $data2['text_warna']; ?>">© 2021 VIII DEV</p>
                    <a href=" <?php echo $data2['facebook']; ?>" class="fa fa-facebook"></a>
                    <a href="<?php echo $data2['instagram']; ?>" class="fa fa-instagram"></a>
                </div>

                <div class="col">

                </div>

                <div class="col">
                    <h5 style="color:<?php echo $data2['text_warna']; ?>;font-weight:bold;font-style:italic;">Tentang Kami</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2 "><a href="index.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">Profil desa</a>
                        </li>
                        <li class=" nav-item mb-2"><a href="galeri.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">galeri</a></li>
                        <li class=" nav-item mb-2"><a href="kegiatan.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">Kegiatan</a></li>

                    </ul>
                </div>

                <div class="col">
                    <h5 style="color:<?php echo $data2['text_warna']; ?>;font-weight:bold;font-style:italic;">Potensi Desa</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2"><a href="wisata_alam.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">wisata
                                alam</a></li>
                        <li class="nav-item mb-2"><a href="wisata_religi.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">wisata
                                religi</a></li>
                        <li class="nav-item mb-2"><a href="wisata_budaya.php" class="nav-link p-0 " style="color:<?php echo $data2['text_warna']; ?>">wisata
                                Budaya</a></li>
                        <li class="nav-item mb-2"><a href="umkm.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">UMKM</a></li>
                        <li class="nav-item mb-2"><a href="Paket_wisata.php" class="nav-link p-0" style="color:<?php echo $data2['text_warna']; ?>">paket
                                wisata</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <!-- footer end -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    </body>
<?php
    }
?>

    </html>