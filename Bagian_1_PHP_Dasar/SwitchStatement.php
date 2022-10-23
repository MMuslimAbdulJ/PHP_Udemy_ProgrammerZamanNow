<?php
$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Selamat Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat Anda lulus." . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
    default:
        echo "Mungkin Anda salah jurusan." . PHP_EOL;
}
switch ($nilai):
    case "A":
        echo "Selamat Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat Anda lulus." . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
    default:
        echo "Mungkin Anda salah jurusan." . PHP_EOL;
endswitch;
