<?php
//menerima input skor
$skor = $_POST["skor"];
echo "Skor : $skor <br>";

//proses konversi dari skor menjadi nilai
if ($skor >= 80 and $skor <= 100) $nilai='A';
else if ($skor >= 70 and $skor < 80) $nilai='B';
else if ($skor >= 60 and $skor < 70) $nilai='C';
else if ($skor >= 40 and $skor < 60) $nilai ='D';
else if ($skor >= 0 and $skor < 40 ) $nilai ='E';
else $nilai='Input Salah';

echo "Nilai = $nilai";


?>