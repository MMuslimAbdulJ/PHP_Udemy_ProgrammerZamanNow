<?php 
$total = 0;
$jusJeruk = 10000;
$bakso = 15000;
$kueCoklat = 25000;
$total += $jusJeruk;
$total += $bakso;
$total += $kueCoklat;
var_dump($total);

$hasil = 0;
$angkaPert = 10;
$angkaKedu = 15;
$hasil -= $angkaKedu;
$hasil -= $angkaPert;

$hasil = 1;
$hasil *= $angkaPert;
$hasil *= $angkaKedu;

$hasil = 0;
$hasil /= $angkaPert;
$hasil /= $angkaKedu;

$hasil = 0;
$hasil %= $angkaPert;
$hasil %= $angkaKedu;
?>