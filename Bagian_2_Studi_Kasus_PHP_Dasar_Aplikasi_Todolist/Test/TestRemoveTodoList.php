<?php 
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("Muslim");
addTodoList("Danny");
addTodoList("Ikhlash");
addTodoList("Arfah");
addTodoList("Ferdinan");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(4);

showTodoList();




?>