<?php
// include database connection file
include "../koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['ubah'])) {
    $nama_desa = $_POST['nama_desa'];
    $warna = $_POST['warna'];
    $warna_text = $_POST['warna_text'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE pengaturan SET nama_desa='$nama_desa',bg_warna='$warna',text_warna='$warna_text',facebook='$facebook',instagram='$instagram' WHERE id='1'");

    // Redirect to homepage to display updated user in list
    echo "<script>alert('Data berhasil diubah.');window.location='pengaturan.php';</script>";
}
