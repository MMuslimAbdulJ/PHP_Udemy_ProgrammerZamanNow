<?php

require_once __DIR__. "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__."/../Repository/TodolistRepository.php";
require_once __DIR__."/../Service/TodolistService.php";
require_once __DIR__."/../View/TodolistView.php";


use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistService;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();
}

// testViewShowTodolist();
function testViewAddTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistView->addTodolist();
    $todolistService->showTodolist();
}

testViewAddTodolist();
function testViewRemoveTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
}

testViewRemoveTodolist();

?>