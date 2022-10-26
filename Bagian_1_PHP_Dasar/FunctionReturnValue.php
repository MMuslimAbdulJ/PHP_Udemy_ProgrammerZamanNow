<?php 
function sum(int $number1, int $number2){
    $total = $number1 + $number2;
    return $total;
}
$hasil = sum(2,3);
var_dump($hasil);

function sum2(int $number1, $number2) : int {
    $total = $number1 + $number2;
    return $total;
}

function getFinalValue(int $score) : string {
    if($score >= 80) {
        return "A";
    } else if($score >= 70) {
        return "B";
    } else if($score >= 60) {
        return "C";
    } else if ($score >= 50) {
        return "D";
    } else {
        return "E";
    }
}
$score = getFinalValue(90);
var_dump($score);

$a = 1;
function tampil($a) : void {
    echo "Ini adalah $a" . PHP_EOL;
}

tampil($a);
?>