<?php 

$numbers = $_GET['numbers'];

$total = 0;
foreach($numbers as $number) {
    $total += $number;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET (array)</title>
</head>
<body>
    <h1>Total = <?= $total ?></h1>
</body>
</html>