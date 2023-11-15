<?php
include "konek.php";
include "menu.php";
//mendapatkan variabel hasil posting
$nama=$_POST["nama"];
$uname = $_POST["username"];
$pwd=$_POST["password"];
$id=$_POST["id"];
//mengecek
echo $nama."  ".$uname."  ".$pwd."  ".$id."<br>";
$queri="UPDATE tb_user SET nama='$nama', password='$pwd', username='$uname' WHERE id=$id";
$hasil = $koneksi->query($queri);
if ($hasil) echo "Edit id=$id Berhasil ";
else echo "Edit Gagal";

?>