<?php 
use Model\Comment;
use Repository\CommentRepositoryImpl;

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repository@test.com", comment: "halo dunia");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());

// $comment = $repository->findById(36);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);


?>