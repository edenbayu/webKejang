<?php
//mengambil data yang akan di edit dengan GET
$id = $_GET["id"]; 
echo "Id yang di get adalah : $id<br>";
include "konek.php";

$query = "SELECT * FROM tb_user WHERE id='$id'";

//5. menggunakan kueri untuk menampilkan
$hasil = $koneksi->query($query);

//cek kalo tabel kosong tidak diperlu ditampilkan

if ($hasil->num_rows > 0) {
    //tampilkan isi tabel
    echo "Data yang akan di edit adalah : <br>";
    echo "<form method=post action=editdata.php>";
    echo "<table border=1> ";

    while ($baris = $hasil->fetch_assoc()) {
        echo "<tr><td>Nama </td><td>:<input type=text value=".$baris["nama"]." name=nama></td></tr>";
        echo "<tr><td>Username</td><td>:<input type=text value=".$baris["username"]." name=username></td></tr>";
        echo "<tr><td>Password</td><td>:<input type=text value=".$baris["password"]." name=password></td></tr>"; //menampilkan kolom nama
        echo "<input type=hidden value=$id name=id>";
    }
    echo "</table>";
    echo "<input type=submit value=edit>";
}
else echo "isi tabel kosong / data tidak ditemukan";


?>