<?php 
// Global scope
/* 
global variable adalah variable yang hanya 
bisa diakses di luar function.
*/
// $name = "Muslim"; //variable globalm (global scope)
// function sayHello(){
//     echo "Hello $name" . PHP_EOL; //error karena tidak bisa mengakses variable global
// }


// Local scope
/* 
local variable adalah variable yang hanya bisa diakses
didalam sebuah funtion saja, artinya valriable local
hanya bisa diakses didalam funtion itu saja.
*/
// function sayHi(){
//     $hi = "Hi"; //variable local (local scope)
// }
// sayHi();
// echo $hi  . PHP_EOL; //error karena tidak bisa mengakses variable didalam function


// Global keyword
/*
Jika kita ingin mengakses variable global dari dalam
sebuah funtion, kita bisa menggunakan keyword "global".
Dengan begitu kita dapat mengakses variable tersebut didalam
sebuah funtion.
*/
// $name = "Muslim";
// function sayHello() {
//     global $name;
//     echo "Hello $name" . PHP_EOL;
// }
// sayHello();



// $GLOBAL Variable
/*
Selain menggunakan global keyword, setiap variable yang dibuat di global scope, 
secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP.
Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya 
dari dalam function jika ingin mengakses global variable.
$GLOBAL adalah variable yang bersifat superglobal, 
artinya bisa diakses dari scope manapun
*/
// $name = "Muslim";
// function sayHello() {
//     echo "Hello {$GLOBALS["name"]}" . PHP_EOL;
// }
// sayHello();



// Static scope
/*
Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
PHP memiliki scope yang bernama static
Static scope hanya bisa di set ke local variable
Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya
 */
// function increment() {
//     static $counter = 1;
//     echo "Counter  : $counter"  . PHP_EOL;
//     $counter++;
// }
// increment();
// increment();
// increment();
// increment();
// increment();
?>