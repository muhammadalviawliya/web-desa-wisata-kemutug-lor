<?php
// include database connection file
include "../koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];


// update user data
$result = mysqli_query($koneksi, "UPDATE admin SET nama='$nama',email='$email',password='$password' WHERE id_admin='$id_admin'");

// Redirect to homepage to display updated user in list
echo "<script>alert('Data berhasil diubah.');window.location='admin.php';</script>";
