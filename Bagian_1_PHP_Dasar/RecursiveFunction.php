<?php 
function factorialLoop(int $value) : int {
    $total = 1;
    for($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5));

function factorial(int $value) : int {
    if($value == 1) {
        return 1;
    } else {
        return $value * factorial($value - 1);
    }
}
var_dump(factorial(5));


// function loop(int $value) {
//     if($value == 0) {
//         echo "End Loop" . PHP_EOL;
//     } else {
//         echo "Loop yang ke-$value" . PHP_EOL;
//         loop($value - 1);
//     }
// }
// loop(5000000);