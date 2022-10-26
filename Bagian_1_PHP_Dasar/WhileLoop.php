<?php
$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah perulangan While yang ke-$counter" . PHP_EOL;
    $counter++;
}

while ($counter <= 10) :
    echo "Ini adalah perulangan While yang ke-$counter" . PHP_EOL;
    $counter++;
endwhile;
