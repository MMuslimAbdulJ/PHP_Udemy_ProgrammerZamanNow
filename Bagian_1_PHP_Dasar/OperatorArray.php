<?php 
$first = [
    "first_name" => "Muhammad Muslim"
];
$last = [
    "last_name" => "Abdul Jabbaar"
];
var_dump($first + $last);

$a = [
    "first_name" => "Muhammad Muslim",
    "last_name" => "Abdul Jabbaar"
];
$b = [
    "last_name" => "Abdul Jabbaar",
    "first_name" => "Muhammad Muslim"
];
var_dump($a == $b);
var_dump($a === $b);

$c = [
    "first_name" => "Muhammad Muslim",
    "last_name" => "Abdul Jabbaar"
];
$d = [
    "last_name" => "Abdul",
    "first_name" => "Muhammad Muslim"
];
var_dump($c != $d);
var_dump($c !== $d);
?>