<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran";

$connect = mysqli_connect($server, $user, $password, $nama_database);

if (!$connect) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

echo "berhasil terkoneksi..... ";

// Define the $db variable
$db = $connect;

?>
