<?php 
$names = ["Muhammad", "Muslim", "Abdul", "Jabbaar"];
foreach($names as $name){
    echo "Nama : " . $name  . PHP_EOL;
}
foreach($names as  $index => $name){
    echo "Index ke-$index adalah : " . $name  . PHP_EOL;
}

$person = [
"first_name" => "Muhammad Muslim",
"middle_name" => "Abdul",
"last_name" => "Jabbaar"
];
foreach($person as $key => $value):
    echo "$key : $value" . PHP_EOL;
endforeach;
?>