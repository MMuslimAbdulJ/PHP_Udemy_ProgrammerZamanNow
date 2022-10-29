<?php 
require_once "Model/TodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Muslim");
addTodoList("Ikhlash");
addTodoList("Danny");
addTodoList("Arfah");
showTodoList();

viewRemoveTodoList();

showTodoList();

viewRemoveTodoList();

showTodoList();
?>