<?php
include "menu.php";
include "konek.php";
//menerima posting
$uname=$_POST["username"];
$pwd=$_POST["password"];
$nama = $_POST["nama"];

echo $nama."   ".$uname."   ".$pwd."<br>";

$queri="INSERT INTO tb_user (username, password, nama) VALUES ('$uname','$pwd','$nama')";
$hasil = $koneksi->query($queri);
if ($hasil) echo "Input data berhasil ";
else echo "Input data gagal";

?>