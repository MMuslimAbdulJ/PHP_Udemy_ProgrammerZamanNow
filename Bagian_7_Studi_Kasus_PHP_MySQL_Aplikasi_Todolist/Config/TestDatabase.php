<?php 
require_once __DIR__ . '/Database.php';

use Config\Database;

try {
    $connection = Database::getConnection();
} catch(PDOException $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;
}

?>