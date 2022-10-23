<?php 
$values = array(1,2,3,4);
var_dump($values);

$names = ["Muhammad", "Muslim", "Abdul", "Jabbaar"];
var_dump($names);

var_dump($names[1]);

$names[3] = "Qadir";
var_dump($names);

unset($names[2]);
var_dump($names);

var_dump(count($names));

$muslim =  array(
    "id" => "217200035",
    "nama" => "Muhammad Muslim Abdul Jabbaar",
    "alamat" => array(
        "Kota" => "Cianjur",
        "Kenegaraan" => "Indonesia"
    )
);
var_dump($muslim);

$ikhlash = [
    "id" => "217200036",
    "nama" => "Ikhlash Mulya Nurahman",
    "alamat" => [
        "kota" => "Cianjur",
        "Kenegaraan" => "Indonesia"
    ]
];
var_dump($ikhlash);
?>