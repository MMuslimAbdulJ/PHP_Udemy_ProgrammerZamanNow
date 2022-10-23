<?php 
$name = "Muslim";
echo $name;
echo "\n";

$name = NULL;
$isNull = is_null($name);
var_dump($isNull);


$name = "Muslim";
unset($name);
var_dump(isset($name));

$name = "Muslim";
var_dump(isset($name));
?>