<?php 
$a = 10;
++$a;
var_dump($a);

$b = 10;
$c = $b++;
var_dump($c);

$a = 0;
$a = 10;
--$a;
var_dump($a);

$b = 0;
$b = 10;
$c = $b--;
var_dump($c);
?>