<?php 
$nilai = "A";
$result = "";

switch ($nilai) {
    case "A":
    case "B":
    case "C":
        $result = "Selamat, Anda lulus";
        break;
    case "D":
        $result = "Maaf, Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin Anda salah jurusan";
    default:
        $result = "Nilai apa itu?";    
}

echo $result . PHP_EOL;

$nilai = "A";
$result = match($nilai) {
    "A", "B", "C" => "Selamat, Anda lulus",
    "D" => "Maaf, Anda tidak lulus",
    "E" => "Mungkin Anda salah jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL;

$nilai = 90;
$result = match(true) {
    $nilai >= 80 => "A",
    $nilai >= 70 => "B",
    $nilai >= 60 => "C",
    $nilai >= 50 => "D",
    default => "E"
};
echo $result . PHP_EOL;

$name = "Mr. Muslim";
$result = match(true) {
    str_contains("Mr.", $name) => "Hello Sir",
    str_contains("Mrs.", $name) => "Hello Mam",
    default => "Hello"
};

echo $result . PHP_EOL;