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
        <section class="navbar navbar-expand-lg navbar-dark <?php echo $d['warna']; ?> ">
            <div class="container">
                <a class="navbar-brand" href="#"><?php echo $d['nama_desa']; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav  ml-auto">
                        <a class="nav-link" href="index.php">Home</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Wisata
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="wisata_alam.php">Alam</a></li>
                                <li><a class="dropdown-item" href="wisata_religi.php">Religi</a></li>
                                <li><a class="dropdown-item" href="wisata_budaya.php">Budaya</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="#">Artikel</a>
                        <a class="nav-link" href="Paket_wisata.php">Paket Wisata</a>
                        <a class="nav-link" href="#">UMKM Desa</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- navbar end -->

        <!-- carousel -->
        <section id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/curug-pinang.jpg" alt="Gambar - 1" width="1280" height="700">
                    <div class="carousel-caption">
                        <h3>Curug Pinang</h3>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="images/wanawisata.jpg" alt="Gambar - 2" width="1280" height="700">
                    <div class="carousel-caption">
                        <h3>Wanawisata Baturraden</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/kebun-raya.jpg" alt="Gambar - 3" width="1280" height="700">
                    <div class="carousel-caption">
                        <h3>Kebun Raya Baturraden</h3>
                    </div>
                </div>
            </div>


            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </section>
        <!-- carousel end -->

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
                        <img src="images/Lambang_Kabupaten_Banyumas.png" alt="" width="200px" height="200px">
                    </div>
                    <div class="col-sm">
                        <p class="text-justify">Desa Kemutug Lor tercipta pada zaman kerajaan. Konon pada saat itu, dari DPO
                            kerjaan kemudian
                            mendirikan rumah dan sebagainya hingga beranak pinak. Arti dari Kemutug Lor sendiri adalah
                            tempat
                            tujuan terakhir (daerah puputan).</p>
                    </div>
                    <div class="col-sm">
                        <p class="text-justify">Secara administrasi desa Kemutuglor termasuk dalam wilayah kecamatan
                            Baturraden Kabupaten
                            Banyumas.
                            Dari ibu kota kecamatan Baturraden berjarak kurang lebih 3 km, yang dapat ditempuh dengan
                            angkutan
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
                <iframe src="https://www.youtube.com/embed/j080EtTegsk" frameborder="0" gesture="media"></iframe>
            </div>
        </div>
        <!-- video profil desa end -->


        <div class="container text-center mt-5">
            <h2>Map Desa</h2>
            <div class="mapwrapper">
                <iframe width="1200" height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.77138548259!2d109.18871389392048!3d-7.292130602583804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff48d7d9ac4ed%3A0x29fb6b6f439482f9!2sKemutug%20Lor%2C%20Kec.%20Baturaden%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1629851199077!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="container-fluid  <?php echo $d['warna']; ?> text-light">
            <footer class="row row-cols-5 py-5  border-top">
                <div class="col ">
                    <a class="navbar-brand text-light" href="#"><?php echo $d['nama_desa']; ?></a>
                    <p class=" text-light">© 2021 VIII DEV</p>
                    <a href="<?php echo $d['facebook']; ?>" class="fa fa-facebook"></a>
                    <a href="<?php echo $d['instagram']; ?>" class="fa fa-instagram"></a>
                </div>

                <div class="col">

                </div>

                <div class="col">
                    <h5 class="text-warning">Tentang Kami</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2 "><a href="index.php" class="nav-link p-0  text-light">Profil desa</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">galeri</a></li>

                    </ul>
                </div>

                <div class="col">
                    <h5 class="text-warning">Berita</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Artikel</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h5 class="text-warning">Potensi Desa</h5>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2"><a href="wisata_alam.php" class="nav-link p-0 text-light">wisata alam</a>
                        </li>
                        <li class="nav-item mb-2"><a href="wisata_religi.php" class="nav-link p-0 text-light">wisata
                                religi</a></li>
                        <li class="nav-item mb-2"><a href="wisata_budaya.php" class="nav-link p-0 text-light">wisata
                                Budaya</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">UMKM</a></li>
                        <li class="nav-item mb-2"><a href="Paket_wisata.php" class="nav-link p-0 text-light">paket
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