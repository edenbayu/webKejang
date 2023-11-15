<?php
/*
Loop : perulangan, digunakan untuk proses yang berulang
kode PHP loop :
- while 
- do ... while
- for 
- foreach
banyak digunakan mengelola data dari tabel (database) dan
mengelola array / larik
Array : tipe data yang mengelola lebih dari 1 item data
prodi = {"elektro", "mesin", "sipil", "arsitek"}

bentuk umum while :
    nilaiawal;
    while (kondisi/batas) {
        //pernyataan
    }

bentuk umum for :
    (for nilaiawal; nilaiakhir; indeks++) {
        //pernyataan;
    }
*/

//untuk menampilkan 100x tulisan

$i=0; //nilai awal indeks
while ($i<100) {
    echo "$i Teknik Elektro <br>";
    $i++; //indeks + 1
}

for ($i=0; $i<100; $i++) {
    echo "$i Universitas Diponegoro <br>";
}

?>