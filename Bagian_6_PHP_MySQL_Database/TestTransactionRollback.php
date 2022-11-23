<?php 
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('danny@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('danny@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('danny@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('danny@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('danny@gmail.com', 'hello world')");

$connection->rollBack();

$connection = null;

?>