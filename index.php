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
        <!-- navbar end -->

        <!-- carousel -->
        <section id="transition-timer-carousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php
                include 'koneksi.php';

                $count = mysqli_query($koneksi, "SELECT COUNT(*) FROM carousel");
                $count = mysqli_num_rows($count);
                for ($i = 0; $i < $count; $i++) {
                    echo '<li data-target="#transition-timer-carousel" data-slide-to="' . $i . '"';
                    if ($i == 0) {
                        echo 'class="active"';
                    }
                    echo '></li>';
                }
                ?>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php
                //Query database
                $sql = mysqli_query($koneksi, "SELECT * FROM carousel ORDER BY active DESC");
                //$sql = mysql_query("SELECT * FROM carousel ORDER BY active DESC");
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo
                    '
                <div class="carousel-item ';
                    if ($row['active'] == 1) {
                        echo 'active';
                    }
                    echo '">
                    <img src="images/' . $row['gambar'] . '" alt="Gambar - 1" width="500" height="200">
                    <div class="carousel-caption">
                        <h3 style="font-size:20px">' . $row['judul'] . '</h3>
                    </div>
                </div>
               ';
                }
                ?>
            </div>


            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#transition-timer-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#transition-timer-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </section>
        <!-- carousel end -->
        <?php
        $sql = mysqli_query($koneksi, "select * from info_desa WHERE id='1' ");
        while ($hasil = mysqli_fetch_array($sql)) {
        ?>
            <!-- grid sejarah -->
            <section id="sejarah">
                <div class="container ">
                    <div class="row text-center mt-5 mb-5">
                        <div class="col">
                            <h2>Sejarah Desa</h2>
                        </div>
                    </div>

                    <div class="row fs-5 mb-5">
                        <div class="col-sm">
                            <img src="images/<?php echo $hasil['gambar'] ?>" alt="" width="200px" height="200px">
                        </div>
                        <div class="col-sm">
                            <p class="text-justify"><?php echo $hasil['paragraf1'] ?></p>
                        </div>
                        <div class="col-sm">
                            <p class="text-justify"><?php echo $hasil['paragraf2'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- grid sejarah end -->

            <!-- video profil desa -->
            <div class="container text-center  mt-5">
                <h2>Profil Desa</h2>
                <div class="videowrapper">
                    <iframe src="<?php echo $hasil['youtube'] ?>" frameborder="0" gesture="media"></iframe>
                </div>
            </div>
            <!-- video profil desa end -->


            <div class="container text-center mt-5">
                <h2>Map Desa</h2>
                <div class="mapwrapper">
                    <iframe width="1200" height="500" src="<?php echo $hasil['map'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        <?php } ?>
        <!-- FOOTER -->
        <div class="container-fluid " style="background-color:<?php echo $d['bg_warna']; ?>">
            <footer class="row row-cols-5 py-5   border-top">
                <div class=" col ">
                    <a class=" navbar-brand" style="color:<?php echo $d['text_warna']; ?>"><?php echo $d['nama_desa']; ?></a>
                    <p style="color:<?php echo $d['text_warna']; ?>">© 2021 VIII DEV</p>
                    <a href=" <?php echo $d['facebook']; ?>" class="fa fa-facebook"></a>
                    <a href="<?php echo $d['instagram']; ?>" class="fa fa-instagram"></a>
                </div>

                <div class="col">

                </div>

                <div class="col">
                    <h5 style="color:<?php echo $d['text_warna']; ?>;font-weight:bold;font-style:italic;">Tentang Kami</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2 "><a href="index.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">Profil desa</a>
                        </li>
                        <li class=" nav-item mb-2"><a href="galeri.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">galeri</a></li>
                        <li class=" nav-item mb-2"><a href="kegiatan.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">Kegiatan</a></li>

                    </ul>
                </div>

                <div class="col">
                    <h5 style="color:<?php echo $d['text_warna']; ?>;font-weight:bold;font-style:italic;">Potensi Desa</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2"><a href="wisata_alam.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">wisata
                                alam</a></li>
                        <li class="nav-item mb-2"><a href="wisata_religi.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">wisata
                                religi</a></li>
                        <li class="nav-item mb-2"><a href="wisata_budaya.php" class="nav-link p-0 " style="color:<?php echo $d['text_warna']; ?>">wisata
                                Budaya</a></li>
                        <li class="nav-item mb-2"><a href="umkm.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">UMKM</a></li>
                        <li class="nav-item mb-2"><a href="Paket_wisata.php" class="nav-link p-0" style="color:<?php echo $d['text_warna']; ?>">paket
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
<?php } ?>

    </html>