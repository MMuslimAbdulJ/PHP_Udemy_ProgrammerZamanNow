<?php 
use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

function testShowTodolist() : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP Dasar"); 
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP"); 
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database"); 
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();
}

// testShowTodolist();
function testAddTodolist() : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Databae");
    $todolistService->addTodolist("Belajar PHP WEB");
    $todolistService->showTodolist();
}

testAddTodolist();
function testRemoveTodolist() : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Databae");
    $todolistService->addTodolist("Belajar PHP WEB");
    $todolistService->showTodolist();
    
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(3);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(5);
    $todolistService->showTodolist();
}

testRemoveTodolist();


?>