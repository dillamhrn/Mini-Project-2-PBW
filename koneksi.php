<?php
$koneksi = mysqli_connect("localhost", "root", "", "portofolio");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>