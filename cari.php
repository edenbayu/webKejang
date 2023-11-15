<?php
include "konek.php";
include "menu.php";

$nama = $_POST['nama'];
$queri = "SELECT*FROM tb_user WHERE nama like '%$nama%'";

//5. menggunakan kueri untuk menampilkan
$hasil = $koneksi->query($queri);

if ($hasil->num_rows > 0) {
    echo 'Hasil Pencarian Data:';
    echo "<table border = 1>";
    echo "<tr><th>No</th><th>Nama</th><th>Username</th><th>Password</th></tr>";
    while ($baris = $hasil->fetch_assoc()) {
        echo "<tr><td>".$baris["id"]."</td><td>".$baris["nama"].
        "</td><td> ".$baris["username"]."</td><td>".$baris["password"]."</td></tr>";
    }
    echo "</table";
} 
else {
    echo 'Data tidak dapat ditemukan.';
}


?>