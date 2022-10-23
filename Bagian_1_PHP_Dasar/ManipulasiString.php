<?php 
$name = "Muslim";
echo "Halo " . $name . ", apa kabarmu?" . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$nama = "Muslim";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;
echo $nama[5] . PHP_EOL;

echo "Halo $nama, selamat belajar PHP!" . PHP_EOL;
echo <<<MUSLIM
Ini adalah contoh parsing variable
menggunakan Heredoc. Code ini dibuat oleh $name.
MUSLIM;
echo PHP_EOL;

$anime = "Naruto";
echo "Rasenggan is {$anime}'s special jutsu." . PHP_EOL;

?>