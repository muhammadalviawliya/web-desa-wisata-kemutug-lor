<?php

$koneksi = mysqli_connect("localhost", "root", "", "kemutug_lor");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
