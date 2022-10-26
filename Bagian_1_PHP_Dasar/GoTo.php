<?php
// a:
// echo "Ini adalah perulangan yang ke-a" . PHP_EOL;
for($i = 0; $i <= 10; $i++){
    if($i == 10) {
        goto c;
    }
    echo "Ini adalah perulangan yang ke-$i" . PHP_EOL;
}
echo "Ini adalah b" . PHP_EOL;
c:
echo "Ini adalah C" . PHP_EOL;
// start:
// echo "Ini yang ke End" . PHP_EOL;
// $counter = 0;
// while(true){
//     echo "While counter $counter" . PHP_EOL;
//     $counter++;
//     if($counter > 10) {
//         goto end;
//     }
// }
// end:
// echo "Ini yang ke End" . PHP_EOL;
// goto a;
// echo "Hello start" . PHP_EOL;
// a:
// echo "Helo a" . PHP_EOL;