<?php
$namaserver="localhost"; //nama server untuk mySQL
$username = "root";
$password = "";
$namadb = "tugas1_pw";

//2. membuka koneksi : query object oriented
$koneksi = new mysqli($namaserver, $username, $password, $namadb);

//3. Cek koneksi
if ($koneksi -> connect_error) {
    die("koneksi gagal".$koneksi->connect_error);
}
//else echo "Koneksi Berhasil<br>";

?>