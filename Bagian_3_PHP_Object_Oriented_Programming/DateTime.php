<?php 
$dateTime = new DateTime();
$dateTime->setDate(1998, 1 , 28);
$dateTime->setTime(10,10,10,0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;

$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-11-19 15:23:23", new DateTimeZone("Asia/Jakarta"));
if($date) {
    var_dump($date);
} else {
    echo "Format salah" . PHP_EOL;
}