<?php
$data = [12, 5, 3, 6, 7, 8, 24, 1, 6, 9];
sort($data);
echo join(",", $data) . PHP_EOL;
rsort($data);
echo join(",",$data) . PHP_EOL;
shuffle($data);
echo join(",",$data) . PHP_EOL;
$dataResult = array_map(fn (int $data) : int => $data * 10, $data);
var_dump($dataResult);

$person = [
    "id" => 1,
    "nama" => "Muhammad Muslim Abdul Jabbaar",
    "nim" => "217200035",
    "major" => "Computer Science"
];
var_dump(array_keys($person));
var_dump(array_values($person));
