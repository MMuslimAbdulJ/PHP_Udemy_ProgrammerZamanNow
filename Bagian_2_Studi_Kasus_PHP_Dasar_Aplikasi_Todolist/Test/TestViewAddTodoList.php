<?php 
require_once "Model/TodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Muslim");
addTodoList("Danny");
addTodoList("Ikhlash");

showTodoList();

viewAddTodoList();

showTodoList();

viewAddTodoList();
?>