<?php 

$jurusan = "Informatika";
$result = $jurusan == "Informatika" ? "I love coding": throw new Exception("Jurusan apa tu?");
echo $result . PHP_EOL;

function validate(?string $name) {
    $result = $name ?? throw new Exception("Argument is null");
    echo "Hello $name" . PHP_EOL;
}
validate(null);
?>