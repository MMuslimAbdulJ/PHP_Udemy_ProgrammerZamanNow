<?php 

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "mmuslimabdulj";
$password = "Babang_030";

try {
    $connection = new PDO("mysql:hostname=$host:$port;dbname=$database", $username, $password);
    echo "Sukses Terkoneksi" . PHP_EOL;

    // menutup koneksi
    $connection = null;
} catch(PDOException $exception) {
    echo "Gagal terkoneksi ke database MySQL : {$exception->getMessage()}" . PHP_EOL;
}
?>