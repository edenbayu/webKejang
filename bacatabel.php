<?php
include "menu.php";
//menerima posting:
//$nama = $_POST['nama'];
include "konek.php";

//4. menggunakan kueri : membaca isi tabel
$query = "SELECT * FROM tb_user";

//5. menggunakan kueri untuk menampilkan
$hasil = $koneksi->query($query);

//cek kalo tabel kosong tidak diperlu ditampilkan

if ($hasil->num_rows > 0) {
    //tampilkan isi tabel
    echo "<table border=1> ";
    echo "<tr><th>No</th><th>Nama</th><th>Username</th><th>Password</th><th>Edit</th><th>Hapus</th></tr>";
    while ($baris = $hasil->fetch_assoc()) {
        echo "<tr><td>".$baris["id"]."</td><td>".$baris["nama"].
        "</td><td> ".$baris["username"]."</td><td>".$baris["password"]."</td><td><a href=edit.php?id=".$baris["id"].">Edit</a></td>
        <td><a href=hapus.php?id=".$baris["id"].">Hapus</a></td></tr>"; //menampilkan kolom nama
        //metode $_GET
    }
    echo "</table>";
}
else echo "isi tabel kosong / data tidak ditemukan";



