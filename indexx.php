<?php

$nama = "lana";
$umur = 20;
$tinggi = 169.4;
$hobi = ["futsal","melukis"];
$alamat = "lombok timur";

echo "Nama saya $nama, umur saya $umur, tinggi saya $tinggi, hobi saya $hobi[0],$hobi[1], alamat $alamat";

echo "<br><br>========================================================<br></br>";
//operator dan kondisi (if else)

$nilai1 =10;
$nilai2 =20;
$hasil = $nilai1 + $nilai2;

echo "hasil nilai $nilai1 + $nilai2 = $hasil";
echo "<br><br>========================================================<br></br>";

//pembagian
$hasilpembagian = $nilai1/$nilai2;
echo "hasil $nilai1 / $nilai2 = $hasilpembagian";
echo "<br><br>========================================================<br></br>";

//perkalian
$hasilperkalian = $nilai1*$nilai2;
echo "hasil $nilai1 * $nilai2 = $hasilperkalian";
echo "<br><br>========================================================<br></br>";

//pengurangan
$hasilpengurangan = $nilai1 - $nilai2;
echo "hasil $nilai1 - $nilai2 = $hasilpengurangan";
echo "<br><br>========================================================<br></br>";

//pengkondisian
$nilai = 80;
if($nilai >= 90){
    echo "nilai A";
} elseif($nilai >= 80){
    echo "nilai B";
} else {
    echo "nilai C";
}   

echo "<br><br>========================================================<br></br>";

//pengecekan genap ganjil
if($nilai % 2 == 0){
    echo "Hasil penjumlahan ($nilai) = GENAP<br>";
} else {
    echo "Hasil penjumlahan ($nilai) = GANJIL<br>";
}