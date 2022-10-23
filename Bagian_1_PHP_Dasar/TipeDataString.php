<?php 
echo 'Nama : ';
echo 'Muhammad Muslim Abdul Jabbaar';
echo "\n";
echo "Nama : ";
echo "Muhammad \t Muslim \t Abdul \t Jabbaar \n";

// Heredoc
echo <<<MUSLIM
Ini adalah salah satu metode penggunaan tipe data String 
metode Heredoc
MUSLIM;

echo "\n";
// Nowdoc
echo <<<'MUSLIM'
Metode ini mirip dengan Heredoc, hanya saja 
metode ini tidak bisa menggunakan parsing seperti Heredoc
MUSLIM;
echo "\n";
?>